<?php
namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Library\Response;
use App\Http\Models\Category;
use App\Http\Models\NewsList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class ArticleController  extends Controller
{


	public function newsList(Request $request) {

        $params['times'] = $request->get('?times');
        $params['types'] = $request->get('?types');

        $types = Category::selectMethod(['type'=>1]);

        $where['news_list.state'] = 1;
        if ( $params['times'] ) {
            $todayStart= strtotime(date('Y-m-d 00:00:00', strtotime($params['times'])));
            $todayEnd= strtotime(date('Y-m-d 23:59:59', strtotime($params['times'])));
            $where[] = [function($query) use ($todayStart, $todayEnd){
                $query->whereBetween('news_list.modify_time', [$todayStart, $todayEnd]);
            }];
        } elseif ( $params['types'] ) {
            $where['news_list.cid'] = $params['types'];
        }
		$list = NewsList::newsList($where);
        

        return view('admin.article.news.index', [
            'types'     => $types,
            'list'      => $list,
            'params'      => $params,
        ]);
    }



    // 删除新闻
    public function newsDelete(Request $request) {

        $id = $request->input('id');
        
        $save = NewsList::getDelete($id);
        return $save;

    }



    // 添加新闻
    public function newsAdd(Request $request) {

        $list = Category::selectMethod(['type'=>1]);
        $categoryLists = Category::categoryLists($list);

        return view('admin.article.news.add', [
            'categoryLists'     => $categoryLists,
        ]);
    }



    // 编辑新闻
    public function newsEdit(Request $request) {

        $id = $request->input('?id');
        $list = NewsList::getMethod(['id'=>$id]);
        
        $lists = Category::selectMethod(['type'=>1]);
        $categoryLists = Category::categoryLists($lists, $list['cid']);

        return view('admin.article.news.edit', [
            'list'              => $list,
            'categoryLists'     => $categoryLists,
        ]);
    }



    // 查看新闻内容
    public function newsContent(Request $request) {


        $id = $request->input('?id');
        $list = NewsList::getMethod(['id'=>$id], 'content');

        return view('admin.article.news.content',['list'=>$list]);
    }



    // 保存新闻
    public function newsSave(Request $request) {
    	
        $post = $request->input();
        unset($post['file']);

        if ( empty($post['id']) ) {

            $post['cover'] = empty($post['cover']) ? ' ' : $post['cover'];
            $save = NewsList::insertMethod($post);
            return $save;

        } else {

            if ( empty($post['cover']) ) {
                unset($post['cover']);
            } else {
                // 删除旧图片
                $cover = NewsList::valueMethod(['id' => $post['id']], 'cover');
                deleteOldImg($cover);
            }
            $save = NewsList::updateMethod($post);
            return $save;

        }
        

    }


}