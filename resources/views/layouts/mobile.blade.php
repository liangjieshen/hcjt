<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset='utf-8'>
    <title>@yield('title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="description" content="@yield('description')"/>
    <meta name="keywords" content="@yield('keywords')"/>
    <meta name="author" content="欢创集团"/>
    <meta name="robots" content="index,follow"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    

    <link rel="stylesheet" type="text/css" href="/homes/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/homes/mobile/css/style.css">
    <link rel="stylesheet" type="text/css" href="/homes/mobile/css/common.css">

    <!-- 移动端下拉框特效 -->
    <link rel="stylesheet" type="text/css" href="/homes/mobile/select/mobileSelect.css">
    <script src="/homes/mobile/select/mobileSelect.js"></script>
    
    <!-- sweet弹窗插件 -->
    <script src="/homes/dist/sweetalert.min.js"></script>
    <link href="/homes/dist/sweetalert.css" rel="stylesheet">

    
    <script src="/homes/js/jquery-3.4.1.js"></script>
    <script src="/homes/js/host.js"></script>
    <script src="/homes/dist/bootstrap.viewer.min.js"></script>
    <script src="/homes/bootstrap/js/bootstrap.min.js"></script>
    <!-- 数据统计 -->
    <div style="display:none">
        <script>
            // src="https://s9.cnzz.com/z_stat.php?id=1279524712&web_id=1279524712"
            var cnzz_s_tag =document.createElement('script');
            cnzz_s_tag.type ='text/javascript';
            cnzz_s_tag.async =true;
            cnzz_s_tag.charset= 'utf-8';
            cnzz_s_tag.src ='https://w.cnzz.com/z_stat.php?id=1279524712&web_id=1279524712';
            var root_s =document.getElementsByTagName('script')[0];
            root_s.parentNode.insertBefore(cnzz_s_tag,root_s);
        </script>
    </div>
    @yield('head')
</head>
@yield('style')
<style>
.layui-layer-setwin .layui-layer-close2{display: none;}
</style>
<body>
    
    <div class="container-fluid" style="padding: 0;">

        <div class="head-top navbar-fixed-top">
            <div class="col-xs-6 col-sm-6" style="padding:0;">
                <div class="logo"><a href="{{ route('mobile') }}"><img src="/homes/mobile/image/logo.png" alt=""></a></div>
            </div>
            <div class="col-xs-6 col-sm-6" style="padding:0;">
                <ul class="nav-btn">
                    <li><a href="javascript:void(0)" class="navbar-btn"><img src="/homes/mobile/image/nav.png" alt=""></a></li>
                    <li><a href="tel:400-888-3323"><img src="/homes/mobile/image/phone.png" alt=""></a></li>
                </ul>
            </div>
        </div>

    </div>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <a class="nav-link" href="{{ route('mobile') }}">
                    <li class="nav-item @if($hover==1) active @endif">网站首页</li>
                </a>
                <a class="nav-link" href="{{ route('mobile.outsource') }}">
                    <li class="nav-item @if($hover==2) active @endif">人力外包</li>
                </a>
                <a class="nav-link" href="{{ route('mobile.taxation') }}">
                    <li class="nav-item @if($hover==3) active @endif">税务筹划</li>
                </a>
                <a class="nav-link" href="{{ route('mobile.labour') }}">
                    <li class="nav-item @if($hover==4) active @endif">劳务派遣</li>
                </a>
                <a class="nav-link" href="{{ route('mobile.agent') }}">
                    <li class="nav-item @if($hover==5) active @endif">代理招聘</li>
                </a>
                <a class="nav-link" href="{{ route('mobile.headhunter') }}">
                    <li class="nav-item @if($hover==6) active @endif">猎头招聘</li>
                </a>
                <a class="nav-link" href="{{ route('mobile.personnel') }}">
                    <li class="nav-item @if($hover==7) active @endif">业务外包</li>
                </a>
                <a class="nav-link" href="{{ route('mobile.news') }}">
                    <li class="nav-item @if($hover==8) active @endif">新闻政策</li>
                </a>
                <a class="nav-link" href="{{ route('mobile.contact') }}">
                    <li class="nav-item @if($hover==9) active @endif">联系我们</li>
                </a>
            </ul>
        </div>
    </nav>
    <div class="navbar-right"></div>

    

    <!-- 内容--start -->
    <div class="container-fluid" style="padding: 0;">
        @yield('content')
    </div>
    <!-- 内容--end -->



    <!-- 底部--start -->
    <footer class="am-menu">
        <div class="am-menu-column getOrder">
          <a href="javascript:void(0)">
            <div class="am-menu-img"><img src="/homes/mobile/image/icon_1.png" alt=""></div>
            <span>预约</span>
          </a>
        </div>
        <div class="am-menu-column">
          <a href="javascript:void(0)" class="online_service">
            <div class="am-menu-img"><img src="/homes/mobile/image/icon_2.png" alt=""></div>
            <span>在线咨询</span>
          </a>
        </div>
        <div class="am-menu-column">
          <a href="javascript:void(0)" class="navbar-btn">
            <div class="am-menu-img"><img src="/homes/mobile/image/icon_3.png" alt=""></div>
            <span>导航</span>
          </a>
        </div>
        <div class="am-menu-column">
          <a href="tel:400-888-3323">
            <div class="am-menu-img"><img src="/homes/mobile/image/icon_4.png" alt=""></div>
            <span>电话咨询</span>
          </a>
        </div>
        <div class="am-menu-column">
          <a href="{{ route('mobile') }}">
            <div class="am-menu-img"><img src="/homes/mobile/image/icon_5.png" alt=""></div>
            <span>首页</span>
          </a>
        </div>
    </footer>
    <!-- 底部--end -->

    

    <!-- ----------------------------------------------------------- -->
    <div class="order-box">
        <img src="/homes/image/fixed/img-01.png" alt="">
        <form action="" method="post" id="orderForm">
            <div class="input-border">
                <input type="text" name="username" placeholder="姓名：">
                <i class="need-btn">*</i>
            </div>
            <div class="input-border">
                <input type="text" name="mobile" placeholder="电话：">
                <i class="need-btn">*</i>
            </div>
            <div class="input-border">
                <div class="weui-cell__hd">
                    <input class="weui-input" type="text" id="home_type" name="home_type" placeholder="请选择：" required readonly>
                </div>
                <i class="need-btn">*</i>
            </div>
            <button type="button" class="button" id="setOrderAdd">立即申请</button>
        </form>
    </div>
    <div id="order"></div>

</body>
</html>
@yield('script')
<script src="/homes/layer_mobile/layer.js"></script>
<script src="/homes/mobile/js/common.js"></script>
<script>

    // 在线留言
    $(".online_service").click(function(){
        window.open('http://p.qiao.baidu.com/cps/chat?siteId=14116522&userId=29330970&siteToken=98672689a9d3c14c28e97f800dec230d', 'newwindow', 'height=600, width=800, top=0,left=0, toolbar=no, menubar=no, scrollbars=no, resizable=no,location=no, status=no')
    })



    // 导航
    $(".navbar-btn").click(function(){
        // $("body").toggleClass("shadow")
        $(".navbar").toggleClass("open-navbar")
        $(".navbar-right").toggleClass('navbar-shadow');
    })
    $(".navbar-right").click(function(){
        $(".navbar").removeClass('open-navbar');
        $(this).removeClass('navbar-shadow');
    })


    // 预约按钮
    $(".getOrder").click(function(){
        $("#order").css('display', 'block');
        $(".order-box").animate({top:"30%"});
    })
    $("#order").click(function(){
        $(this).css("display", "none");
        $(".order-box").animate({top:"-35%"});
    })


    // 下拉框
    var houseTypeObj = new MobileSelect({
          trigger: '#home_type',
          title: '请选择类型',
                wheels: [
                    {data:['人才外包','税务策划','劳务派遣','代理招聘','猎头招聘','业务外包','其他']}
          ],
          position:[0],
          callback:function(indexArr, data){
                $("#home_type").val(data[0]);
                $("#home_type").blur();
          }
    });
    $("#setOrderAdd").click(function() {

        var datas = $.param({
            // 当前页数
            "place" : 1,
            // 每页显示多少条
            "page" : "{{ $hover }}"
        }) + "&" +$("#orderForm").serialize();
        
        if ( checkPhone($("#orderForm").serializeArray()[1].value) == false ) {
            swal("提示", "请填写正确的手机号码！", "warning");
        }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        });
        $.post("{{ route('mobile.setReceive') }}", datas,
            function (data) {
                if (data.code === 0) {
                    swal({title:"恭喜",
                        text:"申请成功!我们尽快与您联系",
                        type:"success"
                    },function(){
                        location.reload();
                    })
    

                } else {
                    swal("警告", data.msg, "error");
                }
            });

    });
</script>