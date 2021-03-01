<?php
namespace App\Http\Models;

use App\Library\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = 'page';

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
            return self::select($select)->where($where)->get();
        } else {
            return self::select($select)->where($where)->paginate(config('view.page_size'));
        }
    }



    public static function insertMethod($data) {

        $data['create_time'] = time();

        if ( self::insert($data) ) {
            return Response::response();
        }
        return Response::response(response::SQL_ERROR);

    }

}
