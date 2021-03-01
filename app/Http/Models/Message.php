<?php
namespace App\Http\Models;

use App\Library\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'message';

    protected $guarded = [];

    public $timestamps = false;

    // 获取单值
    public static function valueMethod ($where, $value) {

        return self::where($where)->value($value);
    }



    // 获取单条
    public static function getMethod($where=array(), $select='*') {
        return self::select($select)->where($where)->first();
    }



    // 获取全部
    public static function selectMethod($where=array(), $select='*', $isPage=false) {
        if ( false == $isPage ) {
            return self::select($select)->where($where)->orderBy('create_time', 'DESC')->get();
        } else {
            return self::select($select)->where($where)->orderBy('create_time', 'DESC')->paginate(config('view.page_size'));
        }
    }
    
    
    
    // 删除记录
    public static function getDelete($id) {

        if ( self::where('id', $id)->delete() ) {
            return Response::response();
        }
        return Response::response(response::SQL_ERROR);
    }


    
    // 插入记录
    public static function insertMethod($data) {

    	$data['create_time'] = time();

    	if ( self::insert($data) ) {
    		return Response::response();
    	}
    	return Response::response(response::SQL_ERROR);

    }

}
