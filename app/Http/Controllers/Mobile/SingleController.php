<?php
namespace App\Http\Controllers\Mobile;
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
    public function outsource(Request $request) {

        $agent = new Agent();
        if ($agent->isDesktop()) {
            return redirect()->route('index');
        }

        return view('mobile.outsource', array(
            'hover'     => '2',
        ));

    }


    // 税务筹划
    public function taxation(Request $request) {

        $agent = new Agent();
        if ($agent->isDesktop()) {
            return redirect()->route('index');
        }

        return view('mobile.taxation', array(
            'hover'     => '3',
        ));

    }


    // 劳务派遣
    public function labour(Request $request) {

        $agent = new Agent();
        if ($agent->isDesktop()) {
            return redirect()->route('index');
        }

        return view('mobile.labour', array(
            'hover'     => '4',
        ));

    }



    // 代理招聘
    public function agent(Request $request) {

        $agent = new Agent();
        if ($agent->isDesktop()) {
            return redirect()->route('index');
        }

        return view('mobile.agent', array(
            'hover'     => '5',
        ));

    }


    // 猎头招聘
    public function headhunter(Request $request) {

        $agent = new Agent();
        if ($agent->isDesktop()) {
            return redirect()->route('index');
        }

        return view('mobile.headhunter', array(
            'hover'     => '6',
        ));

    }


    // 业务外包
    public function personnel(Request $request) {

        $agent = new Agent();
        if ($agent->isDesktop()) {
            return redirect()->route('index');
        }

        return view('mobile.personnel', array(
            'hover'     => '7',
        ));

    }


    // 新闻政策
    public function news(Request $request) {

        $agent = new Agent();
        if ($agent->isDesktop()) {
            return redirect()->route('index');
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


        return view('mobile.news', array(
            'hover'             => '8',
            'cid'               => $cid,
            'category_list'     => $category_list,
            'newsList'          => $newsList,
        ));

    }


    // 联系我们
    public function contact(Request $request) {

        $agent = new Agent();
        if ($agent->isDesktop()) {
            return redirect()->route('index');
        }

        return view('mobile.contact', array(
            'hover'     => '9',
        ));

    }


    // 发展历程
    public function history(Request $request) {

        $agent = new Agent();
        if ($agent->isDesktop()) {
            return redirect()->route('index');
        }

        return view('mobile.history', array(
            'hover'     => '10',
        ));

    }


    // 企业文化
    public function culture(Request $request) {

        $agent = new Agent();
        if ($agent->isDesktop()) {
            return redirect()->route('index');
        }

        return view('mobile.culture', array(
            'hover'     => '11',
        ));

    }



    // 了解更多
    public function more(Request $request) {

        $agent = new Agent();
        if ($agent->isDesktop()) {
            return redirect()->route('index');
        }

        return view('mobile.more', array(
            'hover'     => '12',
        ));

    }


}
