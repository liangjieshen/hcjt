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
            <p>当前位置：<a href="{{ route('index') }}">首页</a><span> >> 发展历程</span></p>
        </div>
        
        <h2 class="big-title">发展历程</h2>
        <em class="sketch">development history</em>
        <div class="history">
            <p>公司总部位于广州市番禺区CBD,拥有2000多方自持办公场地，主营业务范围包括人力外包、税务筹划、劳务派遣、代理招聘、猎头招聘、人事代理等。<br>现已在广州、深圳、南宁、贵阳、宁波、成都、武汉、西安、上海、芜湖、大连、呼和浩特等全国各大城市设立58家分公司，实行属地化管理，是中国人力资源行业规模、专业素质和客户满意度方面均位居前列的人力资源综合服务商。</p>
        </div>

        <div class="history-photo">
            <img src="/homes/image/img-08.png" alt="">
        </div>

        <h2 class="big-title">联系我们</h2>
        <em class="sketch">CONTACT US</em>
        <form action="" method="post" id="contaceForm">
            <div class="message-box">
                <ul>
                    <li>
                        <input type="text" name="username" placeholder="姓名（必填）" class="message-btn">
                        <i><img src="/homes/image/icon-26.png" alt=""></i>
                    </li>
                    <li>
                        <input type="text" name="mobile" placeholder="电话（必填）" class="message-btn">
                        <i><img src="/homes/image/icon-27.png" alt=""></i>
                    </li>
                    <li>
                        <input type="text" name="city" placeholder="城市" class="message-btn">
                        <i><img src="/homes/image/icon-28.png" alt=""></i>
                    </li>
                    <li>
                        <select name="type" class="message-btn contact-select">
                            <option value="0"  disabled="disabled" selected="selected">请选择</option>
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