@extends('layouts.mobile')

@section('title', '人力外包|税务筹划|劳务派遣-广州欢创信息,人力资源公司【官网】')
@section('description', '广州欢创信息主营人力外包,税务筹划,劳务派遣,代理招聘,猎头招聘,人事代理等业务,是国内知名人力资源公司,为企业提供灵活用工平台,合理节税方案的品牌服务机构.')
@section('keywords', '人力外包,税务筹划,劳务派遣')

@section('head')
    <link rel="stylesheet" type="text/css" href="/homes/mobile/css/contact.css">
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=67jMQ5DmYTe1TLMBKFUTcZAR"></script>
@endsection('head')

@section('content')
    <!-- banner-start -->
    <div class="banner">
        <div id="map" style="width: 100%; height: 53rem;"></div>
    </div>
    <!-- banner-end -->

    <div class="content" style="margin-top: 7%;">
        <div class="content-box contact">
            <div class="contact-box">
                <div class="contact-img"><img src="/homes/mobile/image/contact/img_1.png" alt=""></div>
                <p style="margin-top: 10%;">官方邮箱</p>
                <span>cathy.chen@gzhclw.com</span>
            </div>
            <div class="contact-box">
                <div class="contact-img"><img src="/homes/mobile/image/contact/img_2.png" alt=""></div>
                <p>微信公众号</p>
                <span>欢创人力集团</span>
            </div>
            <div class="contact-box">
                <div class="contact-img"><img src="/homes/mobile/image/contact/img_3.png" alt=""></div>
                <p style="margin-top: 7%;">集团总部</p>
                <span>广东省广州市番禺区<br>基盛万科大厦A栋301</span>
            </div>
            <div class="contact-box">
                <div class="contact-img"><img src="/homes/mobile/image/contact/img_4.png" alt=""></div>
                <p>全国统一热线</p>
                <span>400-888-3323</span>
            </div>
        </div>
    </div>




@endsection

@section('script')
<script>
    $(function () {
        ShowMap('113.393732,22.938455', '欢创人力资源集团', '广州市番禺区基盛万科大厦A栋3F','20');
    })
    function getInfo(id) {
        $.ajax({
            type: "POST",
            url: "WebUserControl/Contact/GetInfo.ashx",
            cache: false,
            async: false,
            data: { ID: id },
            success: function (data) {
                data = eval(data);
                var length = data.length;
                if (length > 0) {
                    ShowMap(data[0]["Image"], data[0]["NewsTitle"], data[0]["Address"], data[0]["NewsNum"]);
                }
            }
        });
    }
    function ShowMap(zuobiao, name, addrsee , zoom) {
        var arrzuobiao = zuobiao.split(',');
        var map = new BMap.Map("map");
        map.centerAndZoom(new BMap.Point(arrzuobiao[0], arrzuobiao[1]), zoom);
        map.addControl(new BMap.NavigationControl());
        var marker = new BMap.Marker(new BMap.Point(arrzuobiao[0], arrzuobiao[1]));
        map.addOverlay(marker);
        var infoWindow = new BMap.InfoWindow('<p style="color: #bf0008;font-size:14px;">' + name + '</p><p>地址：' + addrsee + '</p>');
        marker.addEventListener("click", function () {
            this.openInfoWindow(infoWindow);
        });
        marker.openInfoWindow(infoWindow);
    }
</script>
@endsection