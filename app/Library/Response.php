<?php
/**
 * User: gedongdong@100tal.com
 * Date: 2019/1/31 下午8:01
 */

namespace App\Library;


class Response
{
    const OK = 0;

    const LOGIN_OUT = 2001;

    const BAD_REQUEST = 1000;

    const PARAM_ERROR = 1001;

    const SQL_ERROR = 4000;

    const FORBIDDEN = 4003;

    const UPLOAD_ERROR = 4004;

    const MOBILE_HAVE = 4005;

    const SERVER_ERROR = 5000;

    const IS_DATA = 5001;

    static $errMsg = [
        self::OK            => '操作成功！',
        self::LOGIN_OUT     => '退出成功',
        self::BAD_REQUEST   => '请求错误',
        self::PARAM_ERROR   => '参数错误',
        self::SQL_ERROR     => '数据库执行错误',
        self::UPLOAD_ERROR  => '请上传图片',
        self::MOBILE_HAVE   => '电话号码已经注册',
        self::SERVER_ERROR  => '服务器错误',
        self::IS_DATA       => '旗下还有数据',
    ];

    public static function response($code = 0, $msg = '', $data = [])
    {
        $msg = $msg ?: (key_exists($code, self::$errMsg) ? self::$errMsg[$code] : '未知错误');

        return response(['code' => $code, 'msg' => $msg, 'data' => $data]);
    }
}
