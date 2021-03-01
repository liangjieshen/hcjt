@extends('layouts.mobile')

@section('title', '人力外包|税务筹划|劳务派遣-广州欢创信息,人力资源公司【官网】')
@section('keywords', '人力外包,税务筹划,劳务派遣')
@section('description', '广州欢创信息主营人力外包,税务筹划,劳务派遣,代理招聘,猎头招聘,人事代理等业务,是国内知名人力资源公司,为企业提供灵活用工平台,合理节税方案的品牌服务机构.')

@section('head')
    <link rel="stylesheet" type="text/css" href="/homes/mobile/css/index.css">
@endsection('head')

@section('style')
<style>
    .carousel-indicators li{width: 1rem;height: 1rem;background-color: #ccc;border: 0;}
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

    <div class="content top-menu">
        <div class="top-menu-column">
            <div class="top-menu-img"><img src="/homes/mobile/image/index/img_1.png" alt=""></div>
            <span>精耕10年</span>
        </div>
        <div class="top-menu-column">
            <div class="top-menu-img"><img src="/homes/mobile/image/index/img_2.png" alt=""></div>
            <span>覆盖网点500+</span>
        </div>
        <div class="top-menu-column">
            <div class="top-menu-img"><img src="/homes/mobile/image/index/img_3.png" alt=""></div>
            <span>客户超10万</span>
        </div>
        <div class="top-menu-column">
            <div class="top-menu-img"><img src="/homes/mobile/image/index/img_4.png" alt=""></div>
            <span>人才库1000万+</span>
        </div>
    </div>

    <div class="content enter-hc">
        <h1 class="big-title">走进欢创</h1>
        <em class="sketch">欢乐共创，合作共赢</em>
        <div class="enter-hc-img"><img src="/homes/mobile/image/index/img_5.png" class="img-responsive"></div>
        <div class="enter-hc-content">
            <p>广州欢创信息咨询有限公司是一家专注于人力资源服务和提升人力资源运营绩效的供应商，公司拥有人社局......</p>
        </div>
        <div class="enter-hc-icon">
            <a href="{{ route('mobile.history') }}">
                <div class="enter-hc-column">
                    <div class="enter-hc-column-img"><img src="/homes/mobile/image/index/img_6.png" alt=""></div>
                    <span>发展历程</span>
                </div>
            </a>
            <a href="{{ route('mobile.culture') }}">
                <div class="enter-hc-column">
                    <div class="enter-hc-column-img"><img src="/homes/mobile/image/index/img_7.png" alt=""></div>
                    <span>企业文化</span>
                </div>
            </a>
            <a href="{{ route('mobile.more') }}">
                <div class="enter-hc-column">
                    <div class="enter-hc-column-img"><img src="/homes/mobile/image/index/img_8.png" alt=""></div>
                    <span>了解更多</span>
                </div>
            </a>
        </div>
    </div>

    <div class="content my-server">
        <h1 class="big-title">我们的服务</h1>
        <em class="sketch">以技术驱动的整体人才解决方案服务商</em>
        <div class="content-box">
            <ul class="my-server-ul">
                <li>
                    <a href="{{ route('mobile.outsource') }}">
                        <div class="my-server-img"><img src="/homes/mobile/image/index/img_9.png" alt=""></div>
                        <span>人力外包</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('mobile.taxation') }}">
                        <div class="my-server-img"><img src="/homes/mobile/image/index/img_10.png" alt=""></div>
                        <span>税务筹划</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('mobile.labour') }}">
                        <div class="my-server-img"><img src="/homes/mobile/image/index/img_11.png" alt=""></div>
                        <span>劳务派遣</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('mobile.agent') }}">
                        <div class="my-server-img"><img src="/homes/mobile/image/index/img_12.png" alt=""></div>
                        <span>代理招聘</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('mobile.headhunter') }}">
                        <div class="my-server-img"><img src="/homes/mobile/image/index/img_13.png" alt=""></div>
                        <span>猎头服务</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('mobile.personnel') }}">
                        <div class="my-server-img"><img src="/homes/mobile/image/index/img_14.png" alt=""></div>
                        <span>业务外包</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="content flow-path">
        <h1 class="big-title">服务流程</h1>
        <em class="sketch">专业团队，高效落地</em>
        <div class="content-box">
            <div class="flow-path-img"><img src="/homes/mobile/image/index/img_15.png" alt=""></div>
        </div>
    </div>

    <div class="content advantage">
        <h1 class="big-title">十大优势</h1>
        <em class="sketch">优势价值奠定优质服务</em>
        <div class="content-box">
            <div class="advantage-img"><img src="/homes/mobile/image/index/img_16.png" alt=""></div>
        </div>
    </div>

    <div class="content">
        <h1 class="big-title">行业案例</h1>
        <em class="sketch">60+细分行业合作品质服务</em>
        <div class="case">
            <div class="content-box">
                <div class="case-left">
                    <div class="case-left-box" id="con_case_1">
                        <h3>通用行业</h3>
                        <span>每年的招聘压力大，招聘数量和岗位种类多，企业综合招聘成本居高不下，人资部门压力太大，看欢创的通用行业人资解决之道。</span>
                        <ul>
                            <li><img class="img-responsive" src="/homes/image/buss/small-1.png" alt=""></li>
                            <li><img class="img-responsive" src="/homes/image/buss/small-2.png" alt=""></li>
                            <li><img class="img-responsive" src="/homes/image/buss/small-3.png" alt=""></li>
                            <li><img class="img-responsive" src="/homes/image/buss/small-4.png" alt=""></li>
                            <li><img class="img-responsive" src="/homes/image/buss/small-5.png" alt=""></li>
                        </ul>
                    </div>
                    <div class="case-left-box" id="con_case_2">
                        <h3>餐饮服务</h3>
                        <span>员工分配不均，闲时太闲，忙时又太忙，如何解决餐饮行业的人员浪费困扰？降低企业用工成本？</span>
                        <ul>
                            <li><img class="img-responsive" src="/homes/image/buss/small-6.png" alt=""></li>
                            <li><img class="img-responsive" src="/homes/image/buss/small-7.png" alt=""></li>
                            <li><img class="img-responsive" src="/homes/image/buss/small-8.png" alt=""></li>
                            <li><img class="img-responsive" src="/homes/image/buss/small-9.png" alt=""></li>
                            <li><img class="img-responsive" src="/homes/image/buss/small-10.png" alt=""></li>
                        </ul>
                    </div>
                    <div class="case-left-box" id="con_case_3">
                        <h3>社交电商</h3>
                        <span>市场拓展难，营销任务重，又得管控线上营销人员，又得推动线下营销方案落地，人手明显不足？</span>
                        <ul>
                            <li><img class="img-responsive" src="/homes/image/buss/small-11.png" alt=""></li>
                            <li><img class="img-responsive" src="/homes/image/buss/small-12.png" alt=""></li>
                            <li><img class="img-responsive" src="/homes/image/buss/small-13.png" alt=""></li>
                            <li><img class="img-responsive" src="/homes/image/buss/small-14.png" alt=""></li>
                            <li><img class="img-responsive" src="/homes/image/buss/small-15.png" alt=""></li>
                        </ul>
                    </div>
                    <div class="case-left-box" id="con_case_4">
                        <h3>物流快递</h3>
                        <span>人员需求量大，流动频繁，管理难度大，用工风险高，成本高，如何破解物流用人之困？欢创满足企业灵活用工需求。</span>
                        <ul>
                            <li><img class="img-responsive" src="/homes/image/buss/small-16.png" alt=""></li>
                            <li><img class="img-responsive" src="/homes/image/buss/small-17.png" alt=""></li>
                            <li><img class="img-responsive" src="/homes/image/buss/small-18.png" alt=""></li>
                            <li><img class="img-responsive" src="/homes/image/buss/small-19.png" alt=""></li>
                            <li><img class="img-responsive" src="/homes/image/buss/small-20.png" alt=""></li>
                        </ul>
                    </div>
                    <div class="case-left-box" id="con_case_5">
                        <h3>医美医药</h3>
                        <span>铺设网点、拓展市场，用工复杂，非核心业务流程消耗企业大量的时间、人员、资金和管理资源，如何快速助企业打开局面？</span>
                        <ul>
                            <li><img class="img-responsive" src="/homes/image/buss/small-21.png" alt=""></li>
                            <li><img class="img-responsive" src="/homes/image/buss/small-22.png" alt=""></li>
                            <li><img class="img-responsive" src="/homes/image/buss/small-23.png" alt=""></li>
                            <li><img class="img-responsive" src="/homes/image/buss/small-24.png" alt=""></li>
                            <li><img class="img-responsive" src="/homes/image/buss/small-25.png" alt=""></li>
                        </ul>
                    </div>
                    <div class="case-left-box" id="con_case_6">
                        <h3>教育机构</h3>
                        <span>人才选拔周期长，人岗匹配难度大，教师管理困难，客户体验不好，看欢创在线教育行业的破解之道。</span>
                        <ul>
                            <li><img src="/homes/image/buss/small-26.png" alt=""></li>
                            <li><img src="/homes/image/buss/small-27.png" alt=""></li>
                            <li><img src="/homes/image/buss/small-28.png" alt=""></li>
                            <li><img src="/homes/image/buss/small-29.png" alt=""></li>
                            <li><img src="/homes/image/buss/small-30.png" alt=""></li>
                        </ul>
                    </div>
                </div>
                <div class="case-right">
                    <ul>
                        <li><a id="case1" onclick="setCase('case',1,6)" class="case-active">通用</a></li>
                        <li><a id="case2" onclick="setCase('case',2,6)">餐饮</a></li>
                        <li><a id="case3" onclick="setCase('case',3,6)">物流</a></li>
                        <li><a id="case4" onclick="setCase('case',4,6)">医药</a></li>
                        <li><a id="case5" onclick="setCase('case',5,6)">新零售</a></li>
                        <li><a id="case6" onclick="setCase('case',6,6)">在线教育</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <h1 class="big-title">荣誉资质</h1>
        <em class="sketch">行业经验丰富，被授予多项荣誉</em>
        <div class="content-box c-banner">
            <div id="myCarousel-2" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators" style="bottom:-10%;">
                    <li data-target = '#myCarousel-2' data-slide-to = "0" class="active"></li>
                    <li data-target = '#myCarousel-2' data-slide-to = "1"></li>
                    <li data-target = '#myCarousel-2' data-slide-to = "2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <ul class="certificate">
                            <li>
                                <img class="img-responsive" src="/homes/image/certificate/01.png">
                            </li>
                            <li>
                                <img class="img-responsive" src="/homes/image/certificate/02.png">
                            </li>
                            <li>
                                <img class="img-responsive" src="/homes/image/certificate/03.png">
                            </li>
                            <li>
                                <img class="img-responsive" src="/homes/image/certificate/04.png">
                            </li>
                            <li>
                                <img class="img-responsive" src="/homes/image/certificate/05.png">
                            </li>
                            <li>
                                <img class="img-responsive" src="/homes/image/certificate/06.png">
                            </li>
                            <li>
                                <img class="img-responsive" src="/homes/image/certificate/07.png">
                            </li>
                            <li>
                                <img class="img-responsive" src="/homes/image/certificate/08.png">
                            </li>
                            <li>
                                <img class="img-responsive" src="/homes/image/certificate/09.png">
                            </li>
                        </ul>
                    </div>
                    <div class="item">
                        <ul class="certificate">
                            <li>
                                <img class="img-responsive" src="/homes/image/certificate/10.png">
                            </li>
                            <li>
                                <img class="img-responsive" src="/homes/image/certificate/11.png">
                            </li>
                            <li>
                                <img class="img-responsive" src="/homes/image/certificate/12.png">
                            </li>
                            <li>
                                <img class="img-responsive" src="/homes/image/certificate/13.png">
                            </li>
                            <li>
                                <img class="img-responsive" src="/homes/image/certificate/14.png">
                            </li>
                            <li>
                                <img class="img-responsive" src="/homes/image/certificate/15.png">
                            </li>
                            <li>
                                <img class="img-responsive" src="/homes/image/certificate/16.png">
                            </li>
                            <li>
                                <img class="img-responsive" src="/homes/image/certificate/17.png">
                            </li>
                            <li>
                                <img class="img-responsive" src="/homes/image/certificate/18.png">
                            </li>
                        </ul>
                    </div>
                    <div class="item">
                        <ul class="certificate">
                            <li>
                                <img class="img-responsive" src="/homes/image/certificate/14.png">
                            </li>
                            <li>
                                <img class="img-responsive" src="/homes/image/certificate/15.png">
                            </li>
                            <li>
                                <img class="img-responsive" src="/homes/image/certificate/16.png">
                            </li>
                            <li>
                                <img class="img-responsive" src="/homes/image/certificate/18.png">
                            </li>
                            <li>
                                <img class="img-responsive" src="/homes/image/certificate/19.png">
                            </li>
                            <li>
                                <img class="img-responsive" src="/homes/image/certificate/20.png">
                            </li>
                            <li>
                                <img class="img-responsive" src="/homes/image/certificate/21.png">
                            </li>
                            <li>
                                <img class="img-responsive" src="/homes/image/certificate/22.png">
                            </li>
                            <li>
                                <img class="img-responsive" src="/homes/image/certificate/23.png">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <h1 class="big-title">企业合作</h1>
        <em class="sketch">知名品牌企业，覆盖各细分行业</em>
        <div class="content-box">
            <ul class="cooperate-nav">
                <li>
                    <span id="menu1" onclick="setTab('menu',1,5)" class="hover">金融业</span>
                </li>
                <li>
                    <span id="menu2" onclick="setTab('menu',2,5)">制造业</span>
                </li>
                <li>
                    <span id="menu3" onclick="setTab('menu',3,5)">服务业</span>
                </li>
            </ul>
            <ul class="cooperate-nav" style="width: 70%;">
                <li>
                    <span id="menu4" onclick="setTab('menu',4,5)" style="padding: 1rem 6rem;">酒店业</span>
                </li>
                <li>
                    <span id="menu5" onclick="setTab('menu',5,5)" style="padding: 1rem 5rem;">其他行业</span>
                </li>
            </ul>
            <div class="cooperate-box">
                <div class="cooperate-conent" id="con_menu_1">
                    <ul>
                        <li><img class="img-responsive" src="/homes/image/buss/img-01.png"></li>
                        <li><img class="img-responsive" src="/homes/image/buss/img-02.png"></li>
                        <li><img class="img-responsive" src="/homes/image/buss/img-03.png"></li>
                        <li><img class="img-responsive" src="/homes/image/buss/img-04.png"></li>
                        <li><img class="img-responsive" src="/homes/image/buss/img-05.png"></li>
                        <li><img class="img-responsive" src="/homes/image/buss/img-06.png"></li>
                        <li><img class="img-responsive" src="/homes/image/buss/img-07.png"></li>
                        <li><img class="img-responsive" src="/homes/image/buss/img-08.png"></li>
                        <li><img class="img-responsive" src="/homes/image/buss/img-09.png"></li>
                        <li><img class="img-responsive" src="/homes/image/buss/img-10.png"></li>
                        <li><img class="img-responsive" src="/homes/image/buss/img-11.png"></li>
                        <li><img class="img-responsive" src="/homes/image/buss/img-12.png"></li>
                    </ul>
                </div>
                <div class="cooperate-conent" id="con_menu_2">
                    <ul>
                        <li><img class="img-responsive" src="/homes/image/buss/zhizao/1.png"></li>
                        <li><img class="img-responsive" src="/homes/image/buss/zhizao/2.png"></li>
                        <li><img class="img-responsive" src="/homes/image/buss/zhizao/3.png"></li>
                        <li><img class="img-responsive" src="/homes/image/buss/zhizao/4.png"></li>
                        <li><img class="img-responsive" src="/homes/image/buss/zhizao/5.png"></li>
                        <li><img class="img-responsive" src="/homes/image/buss/zhizao/6.png"></li>
                        <li><img class="img-responsive" src="/homes/image/buss/zhizao/7.png"></li>
                        <li><img class="img-responsive" src="/homes/image/buss/zhizao/8.png"></li>
                        <li><img class="img-responsive" src="/homes/image/buss/zhizao/9.png"></li>
                        <li><img class="img-responsive" src="/homes/image/buss/zhizao/10.png"></li>
                        <li><img class="img-responsive" src="/homes/image/buss/zhizao/11.png"></li>
                        <li><img class="img-responsive" src="/homes/image/buss/zhizao/12.png"></li>
                    </ul>
                </div>
                <div class="cooperate-conent" id="con_menu_3">
                    <ul>
                        <li><img class="img-responsive" src="/homes/image/buss/xinxi/1.png"></li>
                        <li><img class="img-responsive" src="/homes/image/buss/xinxi/2.png"></li>
                        <li><img class="img-responsive" src="/homes/image/buss/xinxi/3.png"></li>
                        <li><img class="img-responsive" src="/homes/image/buss/xinxi/4.png"></li>
                        <li><img class="img-responsive" src="/homes/image/buss/xinxi/5.png"></li>
                        <li><img class="img-responsive" src="/homes/image/buss/xinxi/6.png"></li>
                        <li><img class="img-responsive" src="/homes/image/buss/xinxi/7.png"></li>
                        <li><img class="img-responsive" src="/homes/image/buss/xinxi/8.png"></li>
                        <li><img class="img-responsive" src="/homes/image/buss/xinxi/9.png"></li>
                        <li><img class="img-responsive" src="/homes/image/buss/xinxi/10.png"></li>
                        <li><img class="img-responsive" src="/homes/image/buss/xinxi/11.png"></li>
                        <li><img class="img-responsive" src="/homes/image/buss/xinxi/12.png"></li>
                    </ul>
                </div>
                <div class="cooperate-conent" id="con_menu_4">
                    <ul>
                        <li><img class="img-responsive" src="/homes/image/buss/jiudian/1.png"></li>
                        <li><img class="img-responsive" src="/homes/image/buss/jiudian/2.png"></li>
                        <li><img class="img-responsive" src="/homes/image/buss/jiudian/3.png"></li>
                        <li><img class="img-responsive" src="/homes/image/buss/jiudian/4.png"></li>
                        <li><img class="img-responsive" src="/homes/image/buss/jiudian/5.png"></li>
                        <li><img class="img-responsive" src="/homes/image/buss/jiudian/6.png"></li>
                        <li><img class="img-responsive" src="/homes/image/buss/jiudian/7.png"></li>
                        <li><img class="img-responsive" src="/homes/image/buss/jiudian/8.png"></li>
                        <li><img class="img-responsive" src="/homes/image/buss/jiudian/9.png"></li>
                        <li><img class="img-responsive" src="/homes/image/buss/jiudian/10.png"></li>
                        <li><img class="img-responsive" src="/homes/image/buss/jiudian/11.png"></li>
                        <li><img class="img-responsive" src="/homes/image/buss/jiudian/12.png"></li>
                    </ul>
                </div>
                <div class="cooperate-conent" id="con_menu_5">
                    <ul>
                        <li><img class="img-responsive" src="/homes/image/buss/qita/1.png"></li>
                        <li><img class="img-responsive" src="/homes/image/buss/qita/2.png"></li>
                        <li><img class="img-responsive" src="/homes/image/buss/qita/3.png"></li>
                        <li><img class="img-responsive" src="/homes/image/buss/qita/4.png"></li>
                        <li><img class="img-responsive" src="/homes/image/buss/qita/5.png"></li>
                        <li><img class="img-responsive" src="/homes/image/buss/qita/6.png"></li>
                        <li><img class="img-responsive" src="/homes/image/buss/qita/7.png"></li>
                        <li><img class="img-responsive" src="/homes/image/buss/qita/8.png"></li>
                        <li><img class="img-responsive" src="/homes/image/buss/qita/9.png"></li>
                        <li><img class="img-responsive" src="/homes/image/buss/qita/10.png"></li>
                        <li><img class="img-responsive" src="/homes/image/buss/qita/11.png"></li>
                        <li><img class="img-responsive" src="/homes/image/buss/qita/12.png"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <h3 align="center" class="caisui">关于<em>用工</em>/<em>财税</em>你是否还有这些困恼？</h3>
        <div class="content-box">
            <ul class="caisui-num">
                <li>
                    <div class="caisui-num-bg"><i>01</i></div>
                    <div class="caisui-num-content">
                        <div class="caisui-num-content-box" style="margin: 35% 0 0 22%">
                            <p>用工成本、<br>越来越高</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="caisui-num-bg"><i>02</i></div>
                    <div class="caisui-num-content">
                        <div class="caisui-num-content-box" style="margin: 35% 0 0 16%">
                            <p>临时用工多、<br>自主招聘难</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="caisui-num-bg"><i>03</i></div>
                    <div class="caisui-num-content">
                        <div class="caisui-num-content-box" style="margin: 35% 0 0 15%">
                            <p>异地雇佣难、<br>业务拓展受限</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="caisui-num-bg"><i>04</i></div>
                    <div class="caisui-num-content">
                        <div class="caisui-num-content-box" style="margin: 36% 0 0 20%">
                            <p>合适人选难</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="caisui-num-bg"><i>05</i></div>
                    <div class="caisui-num-content">
                        <div class="caisui-num-content-box" style="margin: 36% 0 0 20%">
                            <p>员工个税、<br>社保支出高</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="caisui-num-bg"><i>06</i></div>
                    <div class="caisui-num-content">
                        <div class="caisui-num-content-box" style="margin: 25% 0 0 9%; width:90%;">
                            <p>企业/个人税<br>负重，无票<br>入账，利润虚高</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="content">
        <h1 class="big-title">新闻政策</h1>
        <div class="news-nav-box">
            <ul class="news-nav">
                <li><a href="javascript:void(0)" id="cateNews1" onclick="setNews('cateNews',1,4)" class="news-active">公司动态</a></li>
                <li><a href="javascript:void(0)" id="cateNews2" onclick="setNews('cateNews',2,4)">政策动态</a></li>
                <li><a href="javascript:void(0)" id="cateNews3" onclick="setNews('cateNews',3,4)">人力外包</a></li>
                <li><a href="javascript:void(0)" id="cateNews4" onclick="setNews('cateNews',4,4)">税务筹划</a></li>
                <li><a href="{{ route('mobile.news') }}">更多</a></li>
            </ul>
        </div>
        <div class="content-box">
            <div class="news-box-item" id="con_cateNews_1">
                <div class="news-box">
                    <div class="news-box-left"><img class="img-responsive" src="/homes/mobile/image/index/img_22.png" alt=""></div>
                    <div class="news-box-right">
                        <a href="{{ route('mobile.newsContent') }}">
                            <h3>2020年欢创集团管理层秋游<br><i>2020-12-28</i></h3>
                            <span>金秋时节，天朗气清。为丰富公司管理业余文化生活，增强部们团队凝聚力，体现公司的人文关怀，让公司管理层体现公司的人文关怀，让公司管理层体现公司的人文关怀，让公司管理层</span>
                        </a>
                    </div>
                </div>
                <div class="news-box">
                    <div class="news-box-left"><img class="img-responsive" src="/homes/mobile/image/index/img_23.png" alt=""></div>
                    <div class="news-box-right">
                        <a href="{{ route('mobile.newsContent') }}">
                            <h3>11月份欢创员工生日会<br><i>2020-12-28</i></h3>
                            <span>金秋时节，天朗气清。为丰富公司管理业余文化生活，增强部们团队凝聚力，体现公司的人文关怀，让公司管理层体现公司的人文关怀，让公司管理层体现公司的人文关怀，让公司管理层</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="news-box-item" id="con_cateNews_2">
                <div class="news-box">
                    <div class="news-box-left"><img class="img-responsive" src="/homes/mobile/image/index/img_22.png" alt=""></div>
                    <div class="news-box-right">
                        <a href="{{ route('mobile.newsContent') }}">
                            <h3>2020年欢创集团管理层秋游<br><i>2020-12-28</i></h3>
                            <span>金秋时节，天朗气清。为丰富公司管理业余文化生活，增强部们团队凝聚力，体现公司的人文关怀，让公司管理层体现公司的人文关怀，让公司管理层体现公司的人文关怀，让公司管理层</span>
                        </a>
                    </div>
                </div>
                <div class="news-box">
                    <div class="news-box-left"><img class="img-responsive" src="/homes/mobile/image/index/img_23.png" alt=""></div>
                    <div class="news-box-right">
                        <a href="{{ route('mobile.newsContent') }}">
                            <h3>11月份欢创员工生日会<br><i>2020-12-28</i></h3>
                            <span>金秋时节，天朗气清。为丰富公司管理业余文化生活，增强部们团队凝聚力，体现公司的人文关怀，让公司管理层体现公司的人文关怀，让公司管理层体现公司的人文关怀，让公司管理层</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="news-box-item" id="con_cateNews_3">
                <div class="news-box">
                    <div class="news-box-left"><img class="img-responsive" src="/homes/mobile/image/index/img_22.png" alt=""></div>
                    <div class="news-box-right">
                        <a href="{{ route('mobile.newsContent') }}">
                            <h3>2020年欢创集团管理层秋游<br><i>2020-12-28</i></h3>
                            <span>金秋时节，天朗气清。为丰富公司管理业余文化生活，增强部们团队凝聚力，体现公司的人文关怀，让公司管理层体现公司的人文关怀，让公司管理层体现公司的人文关怀，让公司管理层</span>
                        </a>
                    </div>
                </div>
                <div class="news-box">
                    <div class="news-box-left"><img class="img-responsive" src="/homes/mobile/image/index/img_23.png" alt=""></div>
                    <div class="news-box-right">
                        <a href="{{ route('mobile.newsContent') }}">
                            <h3>11月份欢创员工生日会<br><i>2020-12-28</i></h3>
                            <span>金秋时节，天朗气清。为丰富公司管理业余文化生活，增强部们团队凝聚力，体现公司的人文关怀，让公司管理层体现公司的人文关怀，让公司管理层体现公司的人文关怀，让公司管理层</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="news-box-item" id="con_cateNews_4">
                <div class="news-box">
                    <div class="news-box-left"><img class="img-responsive" src="/homes/mobile/image/index/img_22.png" alt=""></div>
                    <div class="news-box-right">
                        <a href="{{ route('mobile.newsContent') }}">
                            <h3>2020年欢创集团管理层秋游<br><i>2020-12-28</i></h3>
                            <span>金秋时节，天朗气清。为丰富公司管理业余文化生活，增强部们团队凝聚力，体现公司的人文关怀，让公司管理层体现公司的人文关怀，让公司管理层体现公司的人文关怀，让公司管理层</span>
                        </a>
                    </div>
                </div>
                <div class="news-box">
                    <div class="news-box-left"><img class="img-responsive" src="/homes/mobile/image/index/img_23.png" alt=""></div>
                    <div class="news-box-right">
                        <a href="{{ route('mobile.newsContent') }}">
                            <h3>11月份欢创员工生日会<br><i>2020-12-28</i></h3>
                            <span>金秋时节，天朗气清。为丰富公司管理业余文化生活，增强部们团队凝聚力，体现公司的人文关怀，让公司管理层体现公司的人文关怀，让公司管理层体现公司的人文关怀，让公司管理层</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="news-box-item" id="con_cateNews_5">
                <div class="news-box">
                    <div class="news-box-left"><img class="img-responsive" src="/homes/mobile/image/index/img_22.png" alt=""></div>
                    <div class="news-box-right">
                        <a href="{{ route('mobile.newsContent') }}">
                            <h3>2020年欢创集团管理层秋游<br><i>2020-12-28</i></h3>
                            <span>金秋时节，天朗气清。为丰富公司管理业余文化生活，增强部们团队凝聚力，体现公司的人文关怀，让公司管理层体现公司的人文关怀，让公司管理层体现公司的人文关怀，让公司管理层</span>
                        </a>
                    </div>
                </div>
                <div class="news-box">
                    <div class="news-box-left"><img class="img-responsive" src="/homes/mobile/image/index/img_23.png" alt=""></div>
                    <div class="news-box-right">
                        <a href="{{ route('mobile.newsContent') }}">
                            <h3>11月份欢创员工生日会<br><i>2020-12-28</i></h3>
                            <span>金秋时节，天朗气清。为丰富公司管理业余文化生活，增强部们团队凝聚力，体现公司的人文关怀，让公司管理层体现公司的人文关怀，让公司管理层体现公司的人文关怀，让公司管理层</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script src="/homes/mobile/js/index.js"></script>
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
