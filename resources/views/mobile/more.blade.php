@extends('layouts.mobile')

@section('title', '人力外包|税务筹划|劳务派遣-广州欢创信息,人力资源公司【官网】')
@section('description', '广州欢创信息主营人力外包,税务筹划,劳务派遣,代理招聘,猎头招聘,人事代理等业务,是国内知名人力资源公司,为企业提供灵活用工平台,合理节税方案的品牌服务机构.')
@section('keywords', '人力外包,税务筹划,劳务派遣')

@section('head')
    <link rel="stylesheet" type="text/css" href="/homes/mobile/css/single.css">
@endsection('head')

@section('style')
<style>
    .carousel-indicators li{width: 1rem;height: 1rem;background-color: #999;border: 0;}
    .carousel-indicators .active{width: 1rem;height: 1rem;background-color: #f26d00;}
</style>
@endsection('style')

@section('content')
    <!-- banner-start -->
    <div id="myCarousel" class="carousel slide banner" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target = '#myCarousel' data-slide-to = "0" class="active"></li>
            <li data-target = '#myCarousel' data-slide-to = "1"></li>
            <li data-target = '#myCarousel' data-slide-to = "2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="/homes/mobile/image/index/banner-1.png" alt="" />
            </div>
            <div class="item">
                <img src="/homes/mobile/image/index/banner-2.png" alt="" />
            </div>
            <div class="item">
                <img src="/homes/mobile/image/index/banner-3.png" alt="" />
            </div>
        </div>
    </div>
    <!-- banner-end -->

    <div class="content">
        <div class="content-box">
            <div class="profile-title">
                <h2 class="big-title">公司简介</h2>
                <em class="sketch">Company Profile</em>
            </div>
            <div class="profile-box">
                <div class="profile">
                    <p>
                        广州欢创信息咨询有限公司是一家专注于人力资源服务和提升人力资源运营绩效的供应商，前身是欢创集团第一事业部，总部位于广州市番禺区CBD,拥有2000多方自持办公场地，主营业务范围包括人力外包、税务筹划、劳务派遣、代理招聘、猎头招聘、人事代理等。<br><br>

        公司已在广州、深圳、南宁、贵阳、宁波、成都、武汉、西安、上海、芜湖、大连、呼和浩特等全国各大城市设立58家分公司，实行属地化管理，拥有人社局颁发的劳务经营许可、人力资源服务许可等相关行业资质，已获得行业门槛较高的《增值电信业务经营许可证》，现同时是
        众多大型企业的呼叫中心外包服务商。<br><br>

        现任广东省人才交流协会副会长单位、广东劳动学会、广东省人力资源管理协会理事单位，广州人力资源服务协会常务理事单位，已顺利通过IS09001质量管理体系认证，荣获第七届世界军人运动会住宿保障突出贡献奖、58集团颁发中国卓越雇主奖、招商银行薪酬福利
        典范企业，是中国人力资源行业规模、专业素质和客户满意度方面均位居前列的人力资源综合服务商。
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <h2 class="big-title">公司环境</h2>
        <em class="sketch">Company environment</em>
        <div class="content-box">
            <div class="surroundings">
                <div class="surroundings-img"><img src="/homes/mobile/image/single/img_3.png" alt=""></div>
                <div class="surroundings-con">
                    <p>洽谈区</p>
                    <span>公司设立多个独立客户<br>洽谈区集休闲商务于一体，<br>环境温馨舒适</span>
                </div>
            </div>
            <div class="surroundings">
                <div class="surroundings-con">
                    <p>公司前台</p>
                    <span>我们在基盛万科大厦的<br>高楼中，寻找属于我们<br>的梦想</span>
                </div>
                <div class="surroundings-img"><img src="/homes/mobile/image/single/img_4.png" alt=""></div>
            </div>
            <div class="surroundings">
                <div class="surroundings-img"><img src="/homes/mobile/image/single/img_5.png" alt=""></div>
                <div class="surroundings-con">
                    <p>广州核心商务区</p>
                    <span>公司大楼位于区府核心<br>商圈，事业单位及商贸<br>服务类机构云集，交通便利，<br>办公氛围浓厚</span>
                </div>
            </div>
            <div class="surroundings">
                <div class="surroundings-con">
                    <p>办公环境</p>
                    <span>公司斥巨资购买两千多平的<br>办公楼层为员工打造高端、<br>舒适、轻松的办公环境</span>
                </div>
                <div class="surroundings-img"><img src="/homes/mobile/image/single/img_6.png" alt=""></div>
            </div>
        </div>
    </div>


@endsection

@section('script')
<script>
    $(function(){
        var startX,endX;//声明触摸的两个变量  
        var offset = 30;//声明触摸距离的变量  
        $('.carousel-inner').on('touchstart',function (e) {  
            startX= e.originalEvent.touches[0].clientX;//当触摸开始时的x坐标；  
        });  
        $('.carousel-inner').on('touchmove',function (e) {  
            endX = e.originalEvent.touches[0].clientX;//当触摸离开时的x坐标；  
        });  
        $('.carousel-inner').on('touchend',function (e) {  
            //当触摸完成时进行的事件；  
            var distance = Math.abs(startX - endX);//不论正负，取值为正值；  
            if (distance > offset){  
                if(startX > endX){  
                    $('#myCarousel').carousel('next');//当开始的坐标大于结束的坐标时，滑动到下一附图  
                    $('#myCarousel-2').carousel('next');//当开始的坐标大于结束的坐标时，滑动到下一附图  
                }else{  
                    $('#myCarousel').carousel('prev');//当开始的坐标小于结束的坐标时，滑动到上一附图  
                    $('#myCarousel-2').carousel('prev');//当开始的坐标小于结束的坐标时，滑动到上一附图  

                }  
                          
            }  
        }); 
    })
</script>
@endsection