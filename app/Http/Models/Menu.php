<?php
namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu';

    protected $guarded = [];

    public function roles()
    {
        return $this->belongsToMany('App\Http\Models\Roles', 'menu_roles');
    }

    public static function menuTree(&$all_meuns, &$tree)
    {
        foreach($all_meuns as $key=>$menu){
            if(isset($all_meuns[$menu['pid']])){
                $all_meuns[$menu['pid']]['children'][] = &$all_meuns[$key];
            }else{
                $tree[] = &$all_meuns[$menu['id']];
            }
        }
    }


    //形成树状格式
    public static function getTree($tree, $rootId = 0,$level=1) {
        $return = array();
        foreach($tree as $leaf) {
            if($leaf['pid'] == $rootId) {
                $leaf["id"] = $level;
                foreach($tree as $subleaf) {
                    if($subleaf['pid'] == $leaf['id']) {
                        $leaf['children'] = self::getTree($tree, $leaf['id'],$level+1);
                        break;
                    }
                }
                $return[] = $leaf;
            }
        }
        return $return;
    }
}
