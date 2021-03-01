<?php
namespace App\Http\Models;

use App\Library\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\Model;

class NewsLook extends Model
{
    protected $table = 'news_look';

    protected $guarded = [];

    public $timestamps = false;


    public static function insertMethod($data) {

        $data['create_time'] = time();

        if ( self::insert($data) ) {
            return Response::response();
        }
        return Response::response(response::SQL_ERROR);

    }



    public static function updateMethod($data) {

        $data['modify_time'] = time();
        if ( self::where('id', $data['id'])->update($data) ) {
            return Response::response();
        }
        return Response::response(response::SQL_ERROR);
    }


    // 获取单值
    public static function valueMethod ($where, $value) {

        return self::where($where)->value($value);
    }



    // 获取单条
    public static function getMethod($where=array(), $select='*') {
        return self::select($select)->where($where)->first();
    }



    // 获取多条记录
    public static function selectMethod($where=array(), $select="*", $page=0, $isPage=0) {

        if ( false == $isPage ) {
            $list = self::select($select)->where($where)->orderBy('create_time', 'DESC')->get();
        } else {
            $list = self::select($select)->where($where)->orderBy('create_time', 'DESC')->paginate($page);
        }
        return $list;
    }
