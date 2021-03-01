<?php
namespace App\Http\Controllers\Admins;


use App\Http\Controllers\Controller;
use App\Library\Response;
use App\Library\Typer;
use App\Http\Models\Message;
use App\Http\Models\Page;
use Illuminate\Http\Request;

class MessageController extends Controller
{


    // 预约方案
    public function planAppointment(Request $request) {

        $params['times'] = $request->get('?times');
        $params['page'] = $request->get('?page');
        
        $pageList = Page::selectMethod();

        if ( $params['times'] ) {
            $todayStart= strtotime(date('Y-m-d 00:00:00', strtotime($params['times'])));
            $todayEnd= strtotime(date('Y-m-d 23:59:59', strtotime($params['times'])));
            $where[] = [function($query) use ($todayStart, $todayEnd){
                $query->where('place', 1);
                $query->whereBetween('create_time', [$todayStart, $todayEnd]);
            }];
        } elseif ( $params['page'] ) {
            $where['page'] = $params['page'];
            $where['place'] = 1;
        } else {
            $where = ['place'=>1];
        }
        
        $select = ['id', 'page', 'username', 'mobile', 'type', 'create_time'];
        $list = Message::selectMethod($where, $select, true);
        foreach ($list as $k => $v) {
            $v['pageType'] = Typer::pageType($v['page']);
            $v['planType'] = Typer::planType($v['type']);
        }

        return view('admin.message.appointment.index', [
            'params'    => $params,
            'pageList'  => $pageList,
            'list'      => $list,
        ]);
    }
    
    
    
    // 预约方案删除
    public function planDelete(Request $request) {
        
        $id = $request->input('id');
        
        $save = Message::getDelete($id);
        return $save;
        
    }



    // 方案获取
    public function planObtain(Request $request) {
    
        $params['times'] = $request->get('?times');
        $params['page'] = $request->get('?page');
        
        $pageList = Page::selectMethod();

        if ( $params['times'] ) {
            $todayStart= strtotime(date('Y-m-d 00:00:00', strtotime($params['times'])));
            $todayEnd= strtotime(date('Y-m-d 23:59:59', strtotime($params['times'])));
            $where[] = [function($query) use ($todayStart, $todayEnd){
                $query->where('place', 2);
                $query->whereBetween('create_time', [$todayStart, $todayEnd]);
            }];
        } elseif ( $params['page'] ) {
            $where['page'] = $params['page'];
            $where['place'] = 2;
        } else {
            $where = ['place'=>2];
        }
        
        $select = ['id', 'page', 'username', 'mobile', 'type', 'content', 'create_time'];
        $list = Message::selectMethod($where, $select, true);
        foreach ($list as $k => $v) {
            $v['pageType'] = Typer::pageType($v['page']);
            $v['planType'] = Typer::planType($v['type']);
        }

        return view('admin.message.obtain.index', [
            'params'    => $params,
            'pageList'  => $pageList,
            'list'      => $list,
        ]);
    }



    // 领取方案
    public function planReceive(Request $request) {
        
        $params['times'] = $request->get('?times');
        $params['page'] = $request->get('?page');
        
        $pageList = Page::selectMethod();

        if ( $params['times'] ) {
            $todayStart= strtotime(date('Y-m-d 00:00:00', strtotime($params['times'])));
            $todayEnd= strtotime(date('Y-m-d 23:59:59', strtotime($params['times'])));
            $where[] = [function($query) use ($todayStart, $todayEnd){
                $query->where('place', 3);
                $query->whereBetween('create_time', [$todayStart, $todayEnd]);
            }];
        } elseif ( $params['page'] ) {
            $where['page'] = $params['page'];
            $where['place'] = 3;
        } else {
            $where = ['place'=>3];
        }
        
        $select = ['id', 'page', 'username', 'mobile', 'type', 'create_time'];
        $list = Message::selectMethod($where, $select, true);
        foreach ($list as $k => $v) {
            $v['pageType'] = Typer::pageType($v['page']);
            $v['planType'] = Typer::planType($v['type']);
        }

        return view('admin.message.receive.index', [
            'params'    => $params,
            'pageList'  => $pageList,
            'list'      => $list,
        ]);
    }
    
    
    
    // 联系我们
    public function contaceList(Request $request) {
        
        $params['times'] = $request->get('?times');
        $params['page'] = $request->get('?page');
        
        $pageList = Page::select('id', 'name')->whereIn('id', [1,8,9,10,11,12])->get();

        if ( $params['times'] ) {
            $todayStart= strtotime(date('Y-m-d 00:00:00', strtotime($params['times'])));
            $todayEnd= strtotime(date('Y-m-d 23:59:59', strtotime($params['times'])));
            $where[] = [function($query) use ($todayStart, $todayEnd){
                $query->where('place', 4);
                $query->whereBetween('create_time', [$todayStart, $todayEnd]);
            }];
        } elseif ( $params['page'] ) {
            $where['page'] = $params['page'];
            $where['place'] = 4;
        } else {
            $where = ['place'=>4];
        }
        
        $select = ['id', 'page', 'username', 'mobile', 'type', 'city', 'content', 'create_time'];
        $list = Message::selectMethod($where, $select, true);
        foreach ($list as $k => $v) {
            $v['pageType'] = Typer::pageType($v['page']);
            $v['planType'] = Typer::planType($v['type']);
        }

        return view('admin.message.contact.index', [
            'params'    => $params,
            'pageList'  => $pageList,
            'list'      => $list,
        ]);
    }




}
