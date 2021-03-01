<?php
namespace App\Http\Models;

use App\Library\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\Model;

class NewsList extends Model
{
    protected $table = 'news_list';

    protected $guarded = [];

    public $timestamps = false;

    const STATE_YES = 1; const STATE_NO = 0;


    // 获取单值
    public static function valueMethod ($where, $value) {

        return self::where($where)->value($value);
    }



    // 获取单条
    public static function getMethod($where=array(), $select='*') {
        return self::select($select)->where($where)->first();
    }



    // 查找一条column列表
    public static function pluckMethod ($where, $value) {
        return self::where($where)->pluck($value);
    }



    // 获取多条记录
    public static function selectMethod($where=array(), $select="*", $page=0, $isPage=0) {

        if ( false == $isPage ) {
            $list = self::select($select)->where($where)->orderBy('modify_time', 'DESC')->get();
        } else {
            $list = self::select($select)->where($where)->orderBy('modify_time', 'DESC')->paginate($page);
        }
        return $list;
    }



    // 删除记录
    public static function getDelete($id) {

        if ( self::where('id', $id)->delete() ) {
            return Response::response();
        }
        return Response::response(response::SQL_ERROR);
    }




    public static function newsList($where=array()) {

        $list = self::select('news_list.*', 'category.name as category_name')
            ->leftJoin('category', 'category.id', '=', 'news_list.cid')
            ->where($where)
            ->orderBy('news_list.modify_time', 'DESC')
            ->paginate(config('view.page_size'));

        return $list;
    }


    public static function insertMethod($data) {

    	$data['create_time'] = time();
        $data['modify_time'] = time();

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

}
