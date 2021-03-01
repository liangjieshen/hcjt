<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::namespace('Admins')->prefix('admins')->group(function () {

    Route::get('login', 'LoginController@index')->name('admin.login.white');
    Route::post('login', 'LoginController@login')->name('admin.login.post.white');


    Route::middleware(['login', 'menu'])->group(function () {

        Route::get('/', 'AdminController@index')->name('admin.index.white');
        Route::post('logout', 'LoginController@logout')->name('admin.logout.white');
        Route::get('modify_pwd', 'AdminController@modifyPwd')->name('admin.modify_pwd.white');
        Route::post('new_pwd', 'AdminController@newPwd')->name('admin.new_pwd.white');
        Route::get('forbidden', function () {
            return view('admin.403');
        })->name('admin.forbidden.white');

        Route::middleware('auth.can')->group(function () {

            // 个人信息
            Route::any('myself/index', 'MyselfController@index')->name('admin.myself.index');
            // 图片上传
            Route::post('upload', 'UploadsController@upload')->name('admin.upload');
            // 编辑器上传
            Route::post('LayEdit', 'UploadsController@LayEdit')->name('admin.LayEdit');

            Route::get('user', 'UserController@index')->name('admin.user.index');
            Route::get('user/create', 'UserController@create')->name('admin.user.create');
            Route::post('user/store', 'UserController@store')->name('admin.user.store');
            Route::post('user/status', 'UserController@status')->name('admin.user.status');
            Route::get('user/edit', 'UserController@edit')->name('admin.user.edit');
            Route::post('user/update', 'UserController@update')->name('admin.user.update');
            Route::post('user/reset', 'UserController@reset')->name('admin.user.reset');

            Route::get('permission', 'PermissionController@index')->name('admin.permission.index');
            Route::get('permission/create', 'PermissionController@create')->name('admin.permission.create');
            Route::post('permission/store', 'PermissionController@store')->name('admin.permission.store');
            Route::get('permission/edit', 'PermissionController@edit')->name('admin.permission.edit');
            Route::post('permission/update', 'PermissionController@update')->name('admin.permission.update');
            Route::post('permission/delete', 'PermissionController@delete')->name('admin.permission.delete');

            Route::get('roles', 'RolesController@index')->name('admin.roles.index');
            Route::get('roles/create', 'RolesController@create')->name('admin.roles.create');
            Route::post('roles/store', 'RolesController@store')->name('admin.roles.store');
            Route::get('roles/edit', 'RolesController@edit')->name('admin.roles.edit');
            Route::post('roles/update', 'RolesController@update')->name('admin.roles.update');
            Route::post('roles/delete', 'RolesController@delete')->name('admin.roles.delete');

            Route::get('menu', 'MenuController@index')->name('admin.menu.index');
            Route::get('menu/create', 'MenuController@create')->name('admin.menu.create');
            Route::post('menu/store', 'MenuController@store')->name('admin.menu.store');
            Route::get('menu/edit', 'MenuController@edit')->name('admin.menu.edit');
            Route::post('menu/update', 'MenuController@update')->name('admin.menu.update');
            Route::post('menu/delete', 'MenuController@delete')->name('admin.menu.delete');

            // 首页
            Route::get('welcome', 'AdminController@welcome')->name('admin.welcome');

            /***************************  留言管理 *********************************/
            // 预约方案
            Route::get('message/planAppointment', 'MessageController@planAppointment')->name('admin.message.planAppointment');
            
            Route::post('message/planDelete', 'MessageController@planDelete')->name('admin.message.planDelete');
            // 方案获取
            Route::get('message/planObtain', 'MessageController@planObtain')->name('admin.message.planObtain');
            // 领取方案
            Route::get('message/planReceive', 'MessageController@planReceive')->name('admin.message.planReceive');
            // 联系我们
            Route::get('message/contaceList', 'MessageController@contaceList')->name('admin.message.contaceList');
            
            
            
            /***************************  文章管理 *********************************/
            // 新闻文章列表
            Route::get('article/newsList', 'ArticleController@newsList')->name('admin.article.newsList');
            Route::get('article/newsAdd', 'ArticleController@newsAdd')->name('admin.article.newsAdd');
            Route::get('article/newsEdit', 'ArticleController@newsEdit')->name('admin.article.newsEdit');
            Route::post('article/newsDelete', 'ArticleController@newsDelete')->name('admin.article.newsDelete');
            Route::get('article/newsContent', 'ArticleController@newsContent')->name('admin.article.newsContent');
            Route::post('article/newsSave', 'ArticleController@newsSave')->name('admin.article.newsSave');

        });


    });


});

Route::namespace('Home')->prefix('/')->group(function () {

    Route::any('/', 'HomeController@index')->name('index');
    Route::post('index/setReceive', 'HomeController@setReceive')->name('home.setReceive');
    Route::any('page_outsource', 'SingleController@page_outsource')->name('page_outsource');
    Route::any('page_taxation', 'SingleController@page_taxation')->name('page_taxation');
    Route::any('page_labour', 'SingleController@page_labour')->name('page_labour');
    Route::any('page_agent', 'SingleController@page_agent')->name('page_agent');
    Route::any('page_headhunter', 'SingleController@page_headhunter')->name('page_headhunter');
    Route::any('page_personnel', 'SingleController@page_personnel')->name('page_personnel');
    Route::any('page_news', 'SingleController@page_news')->name('page_news');
    Route::any('contact', 'SingleController@contact')->name('contact');
    Route::any('newsContent', 'ContentController@newsContent')->name('newsContent');
    Route::post('newsContent/look', 'ContentController@look')->name('newsContent.look');
    Route::any('page_culture', 'SingleController@page_culture')->name('page_culture');
    Route::any('page_history', 'SingleController@page_history')->name('page_history');
    Route::any('page_more', 'MoreController@page_more')->name('page_more');


});



Route::namespace('Mobile')->prefix('mobile')->group(function () {

    Route::any('/', 'HomeController@index')->name('mobile');
    Route::post('index/setReceive', 'HomeController@setReceive')->name('mobile.setReceive');
    Route::any('outsource', 'SingleController@outsource')->name('mobile.outsource');
    Route::any('taxation', 'SingleController@taxation')->name('mobile.taxation');
    Route::any('labour', 'SingleController@labour')->name('mobile.labour');
    Route::any('agent', 'SingleController@agent')->name('mobile.agent');
    Route::any('headhunter', 'SingleController@headhunter')->name('mobile.headhunter');
    Route::any('personnel', 'SingleController@personnel')->name('mobile.personnel');
    Route::any('news', 'SingleController@news')->name('mobile.news');
    Route::any('contact', 'SingleController@contact')->name('mobile.contact');
    Route::any('newsContent', 'ContentController@newsContent')->name('mobile.newsContent');
    Route::post('newsContent/look', 'ContentController@look')->name('mobile.newsContent.look');
    Route::any('history', 'SingleController@history')->name('mobile.history');
    Route::any('culture', 'SingleController@culture')->name('mobile.culture');
    Route::any('more', 'SingleController@more')->name('mobile.more');

});