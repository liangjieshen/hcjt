<?php
namespace App\Http\Controllers\Admins;


use App\Http\Controllers\Controller;
use App\Http\Models\Users;
use App\Library\Response;
use App\Validate\ModifyPwdValidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.home.index');
    }

    public function welcome() {
        return view('admin.home.welcome');
    }

    public function modifyPwd()
    {
        return view('admin.home.modifyPwd');
    }

    public function newPwd(Request $request)
    {
        $validate = new ModifyPwdValidate($request);
        if (!$validate->goCheck()) {
            return Response::response(Response::PARAM_ERROR, $validate->errors->first());
        }

        $params = $validate->requestData;

        $user = Users::find(session('user')['id']);
        if (!$user) {
            return Response::response(Response::BAD_REQUEST);
        }

        if (!Hash::check($params['oldPassword'], $user->password)) {
            return Response::response(Response::BAD_REQUEST, '请输入正确的当前密码');
        }

        $user->password = Hash::make($params['password']);

        if ($user->save()) {
            //退出登录
            $request->session()->forget('user');
            return Response::response();
        }
        return Response::response(Response::SQL_ERROR);
    }
}
