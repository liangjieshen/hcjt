<?php
namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use App\Http\Models\Category;
use App\Http\Models\NewsList;
use App\Library\Response;
use Jenssegers\Agent\Agent;
use Illuminate\Http\Request;

class SingleController extends Controller
{

    public function __construct() {
        
    }

    // 人力外包
    public function page_outsource(Request $request) {

        $agent = new Agent();
        if ($agent->isMobile()) {
            return redirect()->route('mobile.index');
        }

        return view('home.page_outsource', array(
            'hover'     => '2',
        ));

    }


    // 税务筹划
    public function page_taxation(Request $request) {

        $agent = new Agent();
        if ($agent->isMobile()) {
            return redirect()->route('mobile.index');
        }

        return view('home.page_taxation', array(
            'hover'     => '3',
        ));

    }


    // 劳务派遣
    public function page_labour(Request $request) {

        $agent = new Agent();
        if ($agent->isMobile()) {
            return redirect()->route('mobile.index');
        }

        return view('home.page_labour', array(
            'hover'     => '4',
        ));

    }



    // 代理招聘
    public function page_agent(Request $request) {

        $agent = new Agent();
        if ($agent->isMobile()) {
            return redirect()->route('mobile.index');
        }

        return view('home.page_agent', array(
            'hover'     => '5',
        ));

    }


    // 猎头招聘
    public function page_headhunter(Request $request) {

        $agent = new Agent();
        if ($agent->isMobile()) {
            return redirect()->route('mobile.index');
        }

        return view('home.page_headhunter', array(
            'hover'     => '6',
        ));

    }


    // 业务外包
    public function page_personnel(Request $request) {

        $agent = new Agent();
        if ($agent->isMobile()) {
            return redirect()->route('mobile.index');
        }

        return view('home.page_personnel', array(
            'hover'     => '7',
        ));

    }


    // 新闻政策
    public function page_news(Request $request) {

        $agent = new Agent();
        if ($agent->isMobile()) {
            return redirect()->route('mobile.index');
        }

        $cid = $request->input('cid');

        
        // 新闻分类
        $category_list = Category::select('id', 'name')->get()->toArray();
        $arr1 = [
            '0' => ['id' => 0, 'name' => '最新咨询'],
        ];
        foreach ($arr1 as $k => $v) {
            array_unshift($category_list, $v);
        }
        
        // 新闻内容
        $newsList = NewsList::select('id', 'cid', 'title', 'cover', 'content', 'create_time')->where('cid', $cid)->orderBy('modify_time', 'DESC')->paginate(3);
        
        
        return view('home.page_news', array(
            'hover'             => '8',
            'cid'               => $cid,
            'category_list'     => $category_list,
            'newsList'          => $newsList,
        ));

    }


    // 联系我们
    public function contact(Request $request) {

        $agent = new Agent();
        if ($agent->isMobile()) {
            return redirect()->route('mobile.index');
        }

        return view('home.contact', array(
            'hover'     => '9',
        ));

    }


    // 发展历程
    public function page_history(Request $request) {

        $agent = new Agent();
        if ($agent->isMobile()) {
            return redirect()->route('mobile.index');
        }

        return view('home.page_history', array(
            'hover'     => '10',
        ));

    }


    // 企业文化
    public function page_culture(Request $request) {

        $agent = new Agent();
        if ($agent->isMobile()) {
            return redirect()->route('mobile.index');
        }

        return view('home.page_culture', array(
            'hover'     => '11',
        ));

    }


}
