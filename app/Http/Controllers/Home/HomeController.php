<?php
namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use App\Http\Models\Category;
use App\Http\Models\NewsList;
use App\Http\Models\Message;
use App\Library\Response;
use Jenssegers\Agent\Agent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function __construct() {
        
    }

    public function index(Request $request) {

        $agent = new Agent();
        if ($agent->isMobile()) {
            return redirect()->route('mobile');
        }

        // 公司动态新闻条一条
        $companySelect = ['id', 'title', 'content', 'modify_time'];
        $company_oneTrends = NewsList::select($companySelect)->where(['cid'=>1, 'state'=>1])->orderBy('look', 'DESC')->first();


        // 公司动态里新闻条
        $company_trends = NewsList::selectMethod(['cid'=>1, 'state'=>1], $companySelect, 3, 1);


        // 公司动态右边的分类
        $category_list = Category::select('id', 'name')->whereIn('id', [2,3,4,5])->get();
        foreach ($category_list as $k => $v) {
            $category_list[$k][$v['name']] = NewsList::select($companySelect)->where(['cid'=>$v['id']])->orderBy('modify_time', 'DESC')->limit(3)->get()->toArray();
        }
        // p($category_list);die;
        return view('home.index', [
        	'hover'		        => 1,
            'company_oneTrends' => $company_oneTrends,
            'company_trends'    => $company_trends,
            'category_list'     => $category_list,
        ]);

    }



    // 领取方案接口
    public function setReceive(Request $request) {

    	$post = $request->input();
        if ( !isset($post['type']) ) {
            return Response::response(501, '请选择类型！');
        }
        if ( empty($post['username']) ) {
            return Response::response(501, '请输入您的名字！');
        }
    	if ( $request->isMethod('post') ) {

    		$save = Message::insertMethod($post);

    		return $save;

    	}

    }


}
