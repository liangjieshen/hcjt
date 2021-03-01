<?php
namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use App\Library\Response;
use Jenssegers\Agent\Agent;
use Illuminate\Http\Request;

class MoreController extends Controller
{

    public function __construct() {
        
    }

    public function page_more(Request $request) {

        $agent = new Agent();
        if ($agent->isMobile()) {
            return redirect()->route('mobile.index');
        }
        
        return view('home.page_more', [
        	'hover'	=> '12',
        ]);

    }


}
