<?php
/**
 * Created by PhpStorm.
 * User: jayson
 * Date: 2020-03-06
 * Time: 07:06
 */

namespace App\Library;

class Typer
{

    // 页面
    public static function pageType ($type) {

        switch ($type) {

            case 1:
                $str = '网站首页';
                break;

            case 2:
                $str = '人力外包';
                break;

            case 3:
                $str = '税务筹划';
                break;

            case 4:
                $str = '劳务派遣';
                break;

            case 5:
                $str = '代理招聘';
                break;

            case 6:
                $str = '猎头招聘';
                break;

            case 7:
                $str = '业务外包';
                break;

            case 8:
                $str = '新闻政策';
                break;

            case 9:
                $str = '联系我们';
                break;

            case 10:
                $str = '发展历程';
                break;

            case 11:
                $str = '企业文化';
                break;

            case 12:
                $str = '了解更多';
                break;

            default:
                $str = '未知类型';
                break;

        }
        return $str;

    }



    // 方案类型
    public static function planType ($type) {

        switch ($type) {

            case 1:
                $str = '人力外包';
                break;

            case 2:
                $str = '税务筹划';
                break;

            case 3:
                $str = '劳务派遣';
                break;

            case 4:
                $str = '代理招聘';
                break;

            case 5:
                $str = '猎头招聘';
                break;

            case 6:
                $str = '业务外包';
                break;

            case 7:
                $str = '其他';
                break;

            default:
                $str = '未知类型';
                break;

        }
        return $str;

    }



}
