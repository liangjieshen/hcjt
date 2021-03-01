@extends('layouts.home')

@section('title', '人力外包|税务筹划|劳务派遣-广州欢创信息,人力资源公司【官网】')
@section('description', '广州欢创信息主营人力外包,税务筹划,劳务派遣,代理招聘,猎头招聘,人事代理等业务,是国内知名人力资源公司,为企业提供灵活用工平台,合理节税方案的品牌服务机构.')
@section('keywords', '人力外包,税务筹划,劳务派遣')

@section('head')
    <link rel="stylesheet" type="text/css" href="/homes/css/page.css">
@endsection('head')

@section('content')
    <!-- 内容--start -->
    <div class="content">
        
        <div class="address">
            <p>当前位置：<a href="{{ route('index') }}">首页</a><span> >> 了解更多</span></p>
        </div>
        
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

        <h2 class="big-title">公司环境</h2>
        <em class="sketch">Company environment</em>
        <div class="content-box">
            <div class="environment-top">
                <div class="environment-top-left">
                    <p>轻松舒适的办公环境</p>
                    <span>公司斥巨资购置两千多平的办公楼层为员工打造高端、舒适、轻松的办公环境</span>
                </div>
                <div class="environment-top-right"><img src="/homes/image/img-10.png" alt=""></div>
            </div>
            <ul class="environment-ul">
                <li>
                    <img src="/homes/image/img-11.png" alt="">
                    <div>
                        <p>安静独立的洽谈区</p>
                        <span>公司设立多个独立客户洽谈区集休闲商务于一体，环境温馨舒适</span>
                    </div>
                </li>
                <li>
                    <img src="/homes/image/img-12.png" alt="">
                    <div>
                        <p>公司前台</p>
                        <span>我们在基盛万科大厦的高楼中寻找属于我们的梦想</span>
                    </div>
                </li>
                <li>
                    <img src="/homes/image/img-13.png" alt="">
                    <div>
                        <p>广州核心商务区</p>
                        <span>公司大楼位于区府核心商圈，事业单位及商贸服务类机构云集，交通便利，办公氛围浓厚</span>
                    </div>
                </li>
            </ul>
        </div>

        <h2 class="big-title">联系我们</h2>
        <em class="sketch">CONTACT US</em>
        <form action="" method="post" id="contaceForm">
            <div class="message-box">
                <ul>
                    <li>
                        <input type="text" name="username" lay-verify="required" placeholder="姓名（必填）" class="message-btn">
                        <i><img src="/homes/image/icon-26.png" alt=""></i>
                    </li>
                    <li>
                        <input type="text" name="mobile" lay-verify="required" placeholder="电话（必填）" class="message-btn">
                        <i><img src="/homes/image/icon-27.png" alt=""></i>
                    </li>
                    <li>
                        <input type="text" name="city" placeholder="城市" class="message-btn">
                        <i><img src="/homes/image/icon-28.png" alt=""></i>
                    </li>
                    <li>
                        <select name="type" class="message-btn contact-select">
                            <option value="0"  disabled="disabled" selected="selected">请选择</option>
                            <option value="1">人才外包</option>
                            <option value="2">税务策划</option>
                            <option value="3">劳务派遣</option>
                            <option value="4">代理招聘</option>
                            <option value="5">猎头招聘</option>
                            <option value="6">业务外包</option>
                            <option value="7">其他</option>
                        </select>
                        <i><img src="/homes/image/icon-29.png" alt=""></i>
                    </li>
                    <li>
                        <input type="text" name="content" placeholder="留言（请在此输入留言内容，我们会尽快与您联系）" class="message-btn">
                        <i><img src="/homes/image/icon-30.png" alt=""></i>
                    </li>
                </ul>
                <div class="message-box-button"><button type="button" id="setContaceAdd" class="button">提交</button></div>
            </div>
        </form>

    </div>
    <!-- 内容--end -->
@endsection

@section('script')
<script src="/homes/js/common.js"></script>
<script type="text/javascript">
    $("#setContaceAdd").click(function(){

        var datas = $.param({
            // 当前页数
            "place" : 4,
            // 每页显示多少条
            "page" : "{{ $hover }}"
        }) + "&" +$("#contaceForm").serialize();
        
        if ( checkPhone($("#contaceForm").serializeArray()[1].value) == false ) {
            swal("提示", "请填写正确的手机号码！", "warning");
        }
        if ( $("#contaceForm").serializeArray()[3].value == '' ) {
            swal("提示", "请选择类型", "warning");
        }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        });
        
        $.post("{{ route('home.setReceive') }}", datas,
            function (data) {
                if (data.code === 0) {
                    swal({title:"恭喜",
                        text:"申请成功!我们尽快与您联系",
                        type:"success"
                    },function(){
                        location.reload();
                    })

                } else {
                    swal('警告', data.msg, 'error');
                }
            });

    });
</script>
@endsection