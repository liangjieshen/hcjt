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
    <link rel="stylesheet" type="text/css" href="/homes/css/style.css">
    <link rel="stylesheet" type="text/css" href="/homes/css/common.css">

    <!-- sweet弹窗插件 -->
    <script src="/homes/dist/sweetalert.min.js"></script>
    <link href="/homes/dist/sweetalert.css" rel="stylesheet">

    <script src="/homes/js/jquery-3.4.1.js"></script>
    <script src="/homes/js/host.js"></script>
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
    <!-- 这段代码是专属于这个站点的:hunterint.cn
    此段代码添加在</head>前。为保证统计准确，请勿将同一段代码添加到多个站点中。 -->
    <script> 
        // var _hmt = _hmt || []; 
        // (function() { 
        //     var hm = document.createElement("script"); 
        //     hm.src = "https://hm.baidu.com/hm.js?019ffc17b6a8e939fb7c7decc290e8d7"; 
        //     var s = document.getElementsByTagName("script")[0];
        //     s.parentNode.insertBefore(hm, s);
        // })(); 
    </script>
    @yield('head')
</head>
@yield('style')
<body>
    
    <!-- header-start -->
    <header id="header">

        <div class="header-one">
            <div class="header-one-box">
                <div class="ziti">欢迎访问欢创人力资源服务！</div>
                <ul>
                    <li><a href="{{ route('contact') }}" target="_blank">联系我们</a></li>
                    <li><a href="javascript:void(0);" onclick="shoucang()">加入收藏</a></li>
                    <li><a href="javascript:void(0);" class="setOnline">在线留言</a></li>
                </ul>
            </div>
        </div>

        <div class="header-two">
            
            <div class="header-two-box">
                <div class="header-two-box-1"><a href="{{ route('index') }}"><img src="/homes/image/logo.png" alt=""></a></div>
                <div class="header-two-box-2"><a href="javascript:void(0);" class="online_service"><img src="/homes/image/lianxirexian.png" alt=""></a></div>
            </div>
        </div>

        <nav id="nav">
            <ul class="main">
                @if($hover=='1')
                    <li>
                        <a href="{{ route('index') }}" @if($hover==1)class='nav_active'@endif>网站首页</a>
                    </li>
                    <li>
                        <a href="{{ route('page_outsource') }}" @if($hover=='2')class="nav_active"@endif target="_blank">人力外包</a>
                    </li>
                    <li>
                        <a href="{{ route('page_taxation') }}" @if($hover=='3')class="nav_active"@endif target="_blank">税务筹划</a>
                    </li>
                    <li>
                        <a href="{{ route('page_labour') }}" @if($hover=='4')class="nav_active"@endif target="_blank">劳务派遣</a>
                    </li>
                    <li>
                        <a href="{{ route('page_agent') }}" @if($hover=='5')class="nav_active"@endif target="_blank">代理招聘</a>
                    </li>
                    <li>
                        <a href="{{ route('page_headhunter') }}" @if($hover=='6')class="nav_active"@endif target="_blank">猎头招聘</a>
                    </li>
                    <li>
                        <a href="{{ route('page_personnel') }}" @if($hover=='7')class="nav_active"@endif target="_blank">业务外包</a>
                    </li>
                    <li>
                        <a href="{{ route('page_news') }}" @if($hover=='8')class="nav_active"@endif target="_blank">新闻政策</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" @if($hover=='9')class="nav_active"@endif target="_blank">联系我们</a>
                    </li>
                @else
                    <li>
                        <a href="{{ route('index') }}" @if($hover=='1')class='nav_active'@endif>网站首页</a>
                    </li>
                    <li>
                        <a href="{{ route('page_outsource') }}" @if($hover=='2')class="nav_active"@endif>人力外包</a>
                    </li>
                    <li>
                        <a href="{{ route('page_taxation') }}" @if($hover=='3')class="nav_active"@endif>税务筹划</a>
                    </li>
                    <li>
                        <a href="{{ route('page_labour') }}" @if($hover=='4')class="nav_active"@endif>劳务派遣</a>
                    </li>
                    <li>
                        <a href="{{ route('page_agent') }}" @if($hover=='5')class="nav_active"@endif>代理招聘</a>
                    </li>
                    <li>
                        <a href="{{ route('page_headhunter') }}" @if($hover=='6')class="nav_active"@endif>猎头招聘</a>
                    </li>
                    <li>
                        <a href="{{ route('page_personnel') }}" @if($hover=='7')class="nav_active"@endif>业务外包</a>
                    </li>
                    <li>
                        <a href="{{ route('page_news') }}" @if($hover=='8')class="nav_active"@endif>新闻政策</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" @if($hover=='9')class="nav_active"@endif>联系我们</a>
                    </li>
                @endif

            </ul>
        </nav>
        
    </header>

    <!-- header-end -->

    @yield('content')

    <!-- 底部--start -->
    <div class="footer">
        <div class="footer-box">
            <div class="left-box">
                <p>服务热线</p>
                <h1>400-888-3323</h1>
                <ul>
                    <li><img src="/homes/image/icon-23.png" alt=""><span>hc@gzhclw.com</span></li>
                    <li><img src="/homes/image/icon-24.png" alt=""><span>http://www.gzhclw.com</span></li>
                    <li><img src="/homes/image/icon-25.png" alt=""><span>广州市番禺区基盛万科大厦A栋301室</span></li>
                </ul>
                <div class="left-box-bottom-left">
                    <img src="/homes/image/qrcode/img-01.png" alt="">
                    <span>欢创集团</span>
                </div>
                <div class="left-box-bottom-right">
                    <img src="/homes/image/qrcode/img-02.png" alt="">
                    <span>欢创人力</span>
                </div>
            </div>
            <div class="right-box">
                <ul class="bottom-main">
                    <li>
                        <a href="{{ route('page_outsource') }}" target="_blane">人力外包</a>
                        <ul class="bottom-main-2">
                            <li>走进欢创</li>
                            <li>我们的服务</li>
                            <li>服务流程</li>
                            <li>十大优势</li>
                            <li>行业案例</li>
                            <li>资质荣誉</li>
                            <li>合作企业</li>
                            <li>新闻政策</li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('page_taxation') }}" target="_blane">税务策划</a>
                        <ul class="bottom-main-2">
                            <li>税务困扰</li>
                            <li>税筹方案</li>
                            <li>经典案例</li>
                            <li>全国直营区</li>
                            <li>定制服务</li>
                            <li>节税流程</li>
                            <li>合作伙伴</li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('page_labour') }}" target="_blane">劳务派遣</a>
                        <ul class="bottom-main-2">
                            <li>全方位服务</li>
                            <li>服务内容</li>
                            <li>解决难题</li>
                            <li>专业服务</li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('page_agent') }}" target="_blane">代理招聘</a>
                        <ul class="bottom-main-2">
                            <li>服务场景</li>
                            <li>我们的服务</li>
                            <li>服务优势</li>
                            <li>更多服务</li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('page_headhunter') }}" target="_blane">猎头招聘</a>
                        <ul class="bottom-main-2">
                            <li>干将难找</li>
                            <li>欢创服务</li>
                            <li>三懂四强</li>
                            <li>猎头优势</li>
                            <li>投入产出比</li>
                            <li>欢创优势</li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('page_personnel') }}" target="_blane">业务外包</a>
                        <ul class="bottom-main-2">
                            <li>摆脱困扰</li>
                            <li>服务全覆盖</li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('page_news') }}" target="_blane">新闻政策</a>
                        <ul class="bottom-main-2">
                            <li>新闻政策</li>
                            <li>联系我们</li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" target="_blane">联系我们</a>
                        <ul class="bottom-main-2">
                            <li>联系我们</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="bottom-box">
                <p>
                    广州欢创信息咨询有限公司
                    <span>粤ICP备16071409号</span>
                    <a href="https://www.cnzz.com/stat/website.php?web_id=1279524712" target="_blank">站长统计</a>
                </p>
            </div>
        </div>
    </div>
    <!-- 底部--end -->
    
    <!-------------------------------------------- 固定定位--start ----------------------------------------------->
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
                <select name="type">
                    <option value="0" disabled="disabled" selected="selected">请选择</option>
                    <option value="1">人才外包</option>
                    <option value="2">税务策划</option>
                    <option value="3">劳务派遣</option>
                    <option value="4">代理招聘</option>
                    <option value="5">猎头招聘</option>
                    <option value="6">业务外包</option>
                    <option value="7">其他</option>
                </select>
                <i class="need-btn">*</i>
            </div>
            <button type="button" class="button" id="setOrderAdd">立即申请</button>
        </form>
    </div>
    
    <div class="receive-box">
        <img src="/homes/image/fixed/img-02.png" alt="">
    </div>
    <div class="receive-box-son">
        <form method="post" id="receiveForm">
            <ul>
                <li>
                    <input type="text" name="username" placeholder="请输入您的名字">
                    <i><img src="/homes/image/fixed/img-11.png" alt=""></i>
                </li>
                <li>
                    <select name="type">
                        <option value="0" disabled selected="selected">请选择</option>
                        <option value="1">人才外包</option>
                        <option value="2">税务策划</option>
                        <option value="3">劳务派遣</option>
                        <option value="4">代理招聘</option>
                        <option value="5">猎头招聘</option>
                        <option value="6">业务外包</option>
                        <option value="7">其他</option>
                    </select>
                    <i><img src="/homes/image/fixed/img-09.png" alt=""></i>
                </li>
                <li>
                    <input type="text" name="mobile" placeholder="请输入您的手机号">
                    <i><img src="/homes/image/fixed/img-10.png" alt=""></i>
                </li>
                <li>
                    <button type="button" class="button" id="setReceiveAdd">立即领取方案</button>
                </li>
            <div class="receive-box-son-next"><img src="/homes/image/fixed/img-12.png" alt=""></div>
            <div class="receive-box-son-bg"><img src="/homes/image/fixed/img-08.png" alt=""></div>
            </ul>
        </form>
    </div>

    <ul class="fixed-right">
        <!-- <li class="dhlx11">
            <a href="javascript:void(0);">
                <div class="right_box_img"><img src="/homes/image/fixed/img-05.png" alt=""></div>
                <div class="right_box_int">节税计算器</div>
            </a>
        </li> -->
        <li class="dhlx11">
            <a href="javascript:void(0);" class="setOnline">
                <div class="right_box_img"><img src="/homes/image/fixed/img-05.png" alt="方案获取"></div>
                <div class="right_box_int"><span>方案获取</span></div>
                
            </a>
        </li>
        <li class="dhlx">
            <a class="f-cb" target="_blank" rel="nofollow">
                <div class="dhlx_left fl">
                    <div class="right_box_img01">
                        <img src="/homes/image/fixed/img-03.png" alt="电话咨询">
                        <div class="right_box_int01"><span>电话咨询</span></div>
                    </div>
                </div>
                <div class="dhzx_box fl">
                    400-888-3323
                </div>
            </a>
        </li>
        <li class="dhlx11">
            <a href="javascript:void(0);" class="online_service">
                <div class="right_box_img"><img src="/homes/image/fixed/img-06.png" alt=""></div>
                <div class="right_box_int"><span>在线咨询</span></div>
                
            </a>
            <!-- nb-icon-wrap nb-icon-base icon-right-center nb-icon-skin-0 nb-icon-icon nb-customer-icon-style -->
        </li>
        <li class="dhlx11">
            <a href="javascript:scroll(0,0)">
                <div class="right_box_img"><img src="/homes/image/fixed/img-04.png" alt=""></div>
                <div class="right_box_int"><span>返回顶部</span></div>
                
            </a>
        </li>
    </ul>
    
    <!-- 获取方案 -->
    <form method="post" class="white-pink setOnlineContent" id="messageForm" style="z-index:9999;">
        
        <div class="onlineContent">
            <a class="chaOut setOnlineOut"><img src="/homes/image/chahao.png" /></a>
            <h1>请您留言
                <span>欢创信息-欢乐共创，合作共赢</span>
            </h1>
            <label>
                <span>类型 :</span>
                <select name="type">
                    <option value="0" disabled="disabled" selected="selected">请选择</option>
                    <option value="1">人才外包</option>
                    <option value="2">税务策划</option>
                    <option value="3">劳务派遣</option>
                    <option value="4">代理招聘</option>
                    <option value="5">猎头招聘</option>
                    <option value="6">业务外包</option>
                    <option value="7">其他</option>
                </select>
            </label>
            <label>
                <span>姓名 :</span>
                <input id="name" type="text" name="username" placeholder="您的姓名（必填）" />
            </label>
            <label>
                <span>电话 :</span>
                <input id="phone" type="email" name="mobile" placeholder="您的电话（必填）" />
            </label>
            <label>
                <span>留言 :</span>
                <textarea id="message" name="content" placeholder="请输入留言内容，我们尽快与你联系。"></textarea>
            </label>
            <label>
                <span>&nbsp;</span>
                <input type="button" class="button" id="setMessageAdd" value="发送" />
            </label>
        </div>

    </form>
    <!-- 固定定位--end -->

</body>
</html>
@yield('script')
<script>
    // document.getElementById("cnzz_stat_icon_1279524712").style.display = "none";
    // var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " https://");document.write(unescape("%3Cspan style='display:none;' id='cnzz_stat_icon_1279524712'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s5.cnzz.com/stat.php%3Fid%3D5844924' type='text/javascript'%3E%3C/script%3E"));

    // 立即领取方案
    $("#setReceiveAdd").click(function(){

        var datas = $.param({
            // 当前页数
            "place" : 3,
            // 每页显示多少条
            "page" : "{{ $hover }}"
        }) + "&" +$("#receiveForm").serialize();
        
        if ( $("#receiveForm").serializeArray()[0].value == '' ) {
            swal("提示", "请输入您的名字！", "warning");
        }
        if ( checkPhone($("#receiveForm").serializeArray()[1].value) == false ) {
            swal("提示", "请填写正确的手机号码！", "warning");
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
                    swal("警告", data.msg, "error");
                }
            });

    });
    

    // 左侧申请
    $("#setOrderAdd").click(function(){

        var datas = $.param({
            // 当前页数
            "place" : 1,
            // 每页显示多少条
            "page" : "{{ $hover }}"
        }) + "&" +$("#orderForm").serialize();
        
        if ( $("#orderForm").serializeArray()[0].value == '' ) {
            swal("提示", "请输入您的名字！", "warning");
        }
        if ( checkPhone($("#orderForm").serializeArray()[1].value) == false ) {
            swal("提示", "请填写正确的手机号码！", "warning");
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
                    swal("警告", data.msg, "error");
                }
            });

    });


    // 右侧留言
    $("#setMessageAdd").click(function(){

        var datas = $.param({
            // 当前页数
            "place" : 2,
            // 每页显示多少条
            "page" : "{{ $hover }}"
        }) + "&" +$("#messageForm").serialize();

        if ( $("#messageForm").serializeArray()[0].value == '' ) {
            swal("提示", "请输入您的名字！", "warning");
        }
        if ( checkPhone($("#messageForm").serializeArray()[2].value) == false ) {
            swal("提示", "请填写正确的手机号码！", "warning");
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
                    swal("警告", data.msg, "error");
                }
            });

    });

    
</script>
