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
        <h1 class="big-title">企业文化</h1>
        <em class="sketch">company culture</em>
        <div class="content-box">
            <div class="single">
                <img src="/homes/mobile/image/single/img_2.png" alt="">
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