<?php
namespace App\Http\Models;

use App\Library\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';

    protected $guarded = [];

    public $timestamps = false;


    public static function selectMethod($where=array(), $select='*', $page=0, $isPage=0){

        if ( false == $isPage ) {
            $list = self::select($select)->where($where)->get();
        } else {
            $list = self::select($select)->where($where)->paginate($page);
        }
        return $list;
    }



    // 分类列表
    public static function categoryLists ($arr, $pickId = 0) {

        $html = '<select name="cid" lay-verify="required" lay-filter="cid">';
        $html .= '<option value="0" selected="selected">新闻文章分类</option>';

        foreach($arr as $key => $val){
            // 被选中
            $selected = '';
            if($pickId == $val['id']){
                $selected = 'selected';
            }
            $html .= '<option value="' . $val['id'] . '" ' . $selected . '>' . get_tree_icons($val['pid']) . $val['name'] . '</option>';
        }

        $html .= '</select>';

        return $html;

    }


    public static function insertMethod($data) {

    	$data['create_time'] = time();

    	if ( self::insert($data) ) {
    		return Response::response();
    	}
    	return Response::response(response::SQL_ERROR);

    }

}
