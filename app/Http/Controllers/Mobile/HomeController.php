<?php
namespace App\Http\Controllers\Mobile;
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
        if ($agent->isDesktop()) {
            return redirect()->route('index');
        }
        
        return view('mobile.index', [
        	'hover'		        => 1,
        ]);

    }



    // 领取方案接口
    public function setReceive(Request $request) {

        $post = $request->input();
        if ( $request->isMethod('post') ) {

            $post['type'] = '';
            switch ($post['home_type']) {
                case '人才外包':
                    $post['type'] .= 1;
                    break;
                case '税务策划':
                    $post['type'] .= 2;
                    break;
                case '劳务派遣':
                    $post['type'] .= 3;
                    break;
                case '代理招聘':
                    $post['type'] .= 3;
                    break;
                case '猎头招聘':
                    $post['type'] .= 4;
                    break;
                case '业务外包':
                    $post['type'] .= 5;
                    break;
                case '其他':
                    $post['type'] .= 6;
                    break;
            }
            unset($post['home_type']);

            $save = Message::insertMethod($post);

            return $save;

        }

    }



}