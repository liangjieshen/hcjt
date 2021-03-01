<?php
namespace App\Http\Controllers\Mobile;
use App\Http\Controllers\Controller;
use App\Http\Models\Category;
use App\Http\Models\NewsList;
use App\Http\Models\NewsLook;
use App\Http\Models\Message;
use App\Library\Response;
use Jenssegers\Agent\Agent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class ContentController extends Controller
{

    public function __construct() {
        
    }

    public function newsContent(Request $request) {

        $agent = new Agent();
        if ($agent->isDesktop()) {
            return redirect()->route('index');
        }

        return view('mobile.news_content', [
        	'hover'		        => 13,
        ]);

    }



    // 浏览接口
    public function look(Request $request) {

    	$post = $request->input();

    	$newsLook = NewsList::select('look')->where('id', $post['news_id'])->first();
    	
    	// 开启事务
        DB::beginTransaction();
        // 处理数据
        try {
        	
        	$data['look'] = $newsLook->look + 1;
        	$newsUpdate = NewsList::where('id', $post['news_id'])->update($data);


        	$post['create_time'] = time();
    		$saveLook = DB::table('news_look')->insert($post);

    		if ($newsUpdate && $saveLook) {
    			DB::commit();
                return Response::response();
    		}
    		return Response::response(Response::SQL_ERROR);

        } catch (Exception $e) {
        	DB::rollBack();
            Log::error('浏览接口异常', [$e->getMessage()]);
            return Response::response(Response::SQL_ERROR);
        }

    }



}
