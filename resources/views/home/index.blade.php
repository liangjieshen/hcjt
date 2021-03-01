@extends('layouts.home')

@section('title', '人力外包|税务筹划|劳务派遣-广州欢创信息,人力资源公司【官网】')
@section('keywords', '人力外包,税务筹划,劳务派遣')
@section('description', '广州欢创信息主营人力外包,税务筹划,劳务派遣,代理招聘,猎头招聘,人事代理等业务,是国内知名人力资源公司,为企业提供灵活用工平台,合理节税方案的品牌服务机构.')

@section('head')
    <link rel="stylesheet" type="text/css" href="/homes/css/index.css">
@endsection('head')

@section('content')
    <!-- banner-start -->
    <div id="myCarousel" class="carousel slide banner">
        <ol class="carousel-indicators">
            <li data-target = '#myCarousel' data-slide-to = "0" class="active"></li>
            <li data-target = '#myCarousel' data-slide-to = "1"></li>
            <li data-target = '#myCarousel' data-slide-to = "2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <img src="/homes/image/banner01.jpg" alt="First slide" />
            </div>
            <div class="item">
                <img src="/homes/image/banner02.jpg" alt="Second slide" />
            </div>
            <div class="item">
                <img src="/homes/image/banner03.jpg" alt="Third slide" />
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-left" aria-hidden="true"><img src="/homes/image/banner-left.png" alt=""></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-right" aria-hidden="true"><img src="/homes/image/banner-right.png" alt=""></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- banner-end -->
    
    <!-- content-start -->
    <div class="both"></div>
    <div class="banner-child">
        <ul>
            <li>
                <div class="banner-child-img"><img src="/homes/image/icon-01.png"></div>
                <div class="child-con">
                    <p>精耕行业</p>
                    <b id="hangye">10</b>
                    <em>年</em>
                </div>
            </li>
            <li>
                <div class="banner-child-img"><img src="/homes/image/icon-02.png"></div>
                <div class="child-con">
                    <p>覆盖网点</p>
                    <b id="wangdian">500</b>
                    <em>+</em>
                </div>
            </li>
            <li>
                <div class="banner-child-img"><img src="/homes/image/icon-03.png"></div>
                <div class="child-con">
                    <p>服务客户超</p>
                    <b id="fuwu">10</b>
                    <em>万</em>
                </div>
            </li>
            <li>
                <div class="banner-child-img"><img src="/homes/image/icon-04.png"></div>
                <div class="child-con">
                    <p>自有人才库</p>
                    <b id="rencai">1000</b>
                    <em>万+</em>
                </div>
            </li>
        </ul>
    </div>
    <div class="both"></div>
    <div class="content">

        <h2 class="big-title">走进欢创</h2>
        <em class="sketch">欢乐共创，合作共赢</em>
        <div class="big-title-box">
            <div class="big-title-box-left">
                <img src="/homes/image/img-01.png" alt="">
            </div>
            <div class="big-title-box-right">
                <h3>广州欢创信息咨询有限公司</h3>
                <p>
                    广州欢创信息咨询有限公司是一家以技术驱动的整体人才解决方案服务商，公司拥有人社局颁发的劳务经营许可、人力资源服务许可等相关行业资质，已获得行业门槛较高的《增值电信业务经营许可证》，现同时是众多大型企业的呼叫中心外包服务商。公司现任广东省人才交流协会副会长单位、广东劳动学会、广东省人力资源管理协会理事单位，广州人力资源服务协会常务理事单位，已顺利通过IS09001质量管理体系认证，荣获第七届世界军人运动会住宿保障突出贡献奖、58集团颁发中国卓越雇主奖、被招商银行评为薪酬福利典范企业，是中国人力资源行业规模、专业素质和客户满意度均位居前列的人力资源综合服务商。
                </p>
                <div class="big-title-box-right-img">
                    <ul>
                        <li>
                            <div class="big-title-box-right-img-box right-img-bgcolor">
                                <a href="{{ route('page_history') }}" target="_blank">
                                    <img src="/homes/image/icon-05.png" alt="">
                                    <p>发展历程</p>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="big-title-box-right-img-box right-img-bgcolor">
                                <a href="{{ route('page_culture') }}" target="_blank">
                                    <img src="/homes/image/icon-06.png" alt="">
                                    <p>企业文化</p>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="big-title-box-right-img-box right-img-bgcolor">
                                <a href="{{ route('page_more') }}" target="_blank">
                                    <img src="/homes/image/icon-07.png" alt="">
                                    <p>了解更多</p>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="com-phone online_service">
            <a href="javascript:void(0);">联系欢创 400-888-3323</a>
        </div>

        <h2 class="big-title">我们的服务</h2>
        <em class="sketch">以技术驱动的整体人才解决方案服务商</em>
        <div class="big-title-box-server">
            <ul>
                <li>
                    <a href="{{ route('page_outsource') }}" target="_blank">
                        <img src="/homes/image/icon-11.png">
                        <p>人力外包</p>
                        <span>更低成本，更高效率</span>
                        <div class="detail">
                            <img src="/homes/image/icon-17.png">
                            <p>人力外包</p>
                            <span>更低成本，更高效率</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('page_taxation') }}" target="_blank">
                        <img src="/homes/image/icon-12.png">
                        <p>税务筹划</p>
                        <span>合理合规，节税降费</span>
                        <div class="detail">
                            <img src="/homes/image/icon-18.png">
                            <p>税务筹划</p>
                            <span>合理合规，节税降费</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('page_labour') }}" target="_blank">
                        <img src="/homes/image/icon-13.png">
                        <p>劳务派遣</p>
                        <span>极速响应，安心无忧</span>
                        <div class="detail">
                            <img src="/homes/image/icon-19.png">
                            <p>劳务派遣</p>
                            <span>极速响应，安心无忧</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('page_agent') }}" target="_blank">
                        <img src="/homes/image/icon-14.png">
                        <p>代理招聘</p>
                        <span>省时省力，高质高量</span>
                        <div class="detail">
                            <img src="/homes/image/icon-20.png">
                            <p>代理招聘</p>
                            <span>省时省力，高质高量</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('page_headhunter') }}" target="_blank">
                        <img src="/homes/image/icon-15.png">
                        <p>猎头服务</p>
                        <span>高效寻猎，精准匹配</span>
                        <div class="detail">
                            <img src="/homes/image/icon-21.png">
                            <p>猎头服务</p>
                            <span>高效寻猎，精准匹配</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('page_headhunter') }}" target="_blank">
                        <img src="/homes/image/icon-16.png">
                        <p>业务外包</p>
                        <span>一手包办，无编无忧</span>
                        <div class="detail">
                            <img src="/homes/image/icon-22.png">
                            <p>业务外包</p>
                            <span>一手包办，无编无忧</span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>

        <div class="com-phone online_service">
            <a href="javascript:void(0);">立即咨询 400-888-3323</a>
        </div>

        <h2 class="big-title">服务流程</h2>
        <em class="sketch">专业团队，高效落地</em>
        <div class="content-box">
            <div class="server-img"><img src="/homes/image/home_img1.png" alt=""></div>
        </div>

        <div class="com-phone online_service">
            <a href="javascript:void(0);">领取专属方案 400-888-3323</a>
        </div>

        <h2 class="big-title">欢创十大优势</h2>
        <em class="sketch">优势价值奠定优质服务</em>
        <div class="content-box">
            <div class="advantage"><img src="/homes/image/img-02.png" alt=""></div>
        </div>

        <div class="com-phone online_service" style="margin:0 auto 5%;">
            <a href="javascript:void(0);">立即合作 400-888-3323</a>
        </div>

    </div>

    <div class="content-case">
        <h2 class="big-title">行业案例</h2>
        <em class="sketch">60+细分行业合作品质服务</em>
        <div class="case-box">
            <div class="case-left-content">
                <div class="case-left-content-box" id="con_case_1">
                    <h2>通用行业</h2>
                    <p>每年的招聘压力大，招聘数量和岗位种类多，企业综合招聘成本居高不下，人资部门压力太大，看欢创的通用行业人资解决之道。</p>
                    <ul>
                        <li><img src="/homes/image/buss/small-1.png" alt=""></li>
                        <li><img src="/homes/image/buss/small-2.png" alt=""></li>
                        <li><img src="/homes/image/buss/small-3.png" alt=""></li>
                        <li><img src="/homes/image/buss/small-4.png" alt=""></li>
                        <li><img src="/homes/image/buss/small-5.png" alt=""></li>
                    </ul>
                </div>
                <div class="case-left-content-box" id="con_case_2">
                    <h2>餐饮服务</h2>
                    <p>员工分配不均，闲时太闲，忙时又太忙，如何解决餐饮行业的人员浪费困扰？降低企业用工成本？</p>
                    <ul>
                        <li><img src="/homes/image/buss/small-6.png" alt=""></li>
                        <li><img src="/homes/image/buss/small-7.png" alt=""></li>
                        <li><img src="/homes/image/buss/small-8.png" alt=""></li>
                        <li><img src="/homes/image/buss/small-9.png" alt=""></li>
                        <li><img src="/homes/image/buss/small-10.png" alt=""></li>
                    </ul>
                </div>
                <div class="case-left-content-box" id="con_case_3">
                    <h2>社交电商</h2>
                    <p>市场拓展难，营销任务重，又得管控线上营销人员，又得推动线下营销方案落地，人手明显不足？</p>
                    <ul>
                        <li><img src="/homes/image/buss/small-11.png" alt=""></li>
                        <li><img src="/homes/image/buss/small-12.png" alt=""></li>
                        <li><img src="/homes/image/buss/small-13.png" alt=""></li>
                        <li><img src="/homes/image/buss/small-14.png" alt=""></li>
                        <li><img src="/homes/image/buss/small-15.png" alt=""></li>
                    </ul>
                </div>
                <div class="case-left-content-box" id="con_case_4">
                    <h2>物流快递</h2>
                    <p>人员需求量大，流动频繁，管理难度大，用工风险高，成本高，如何破解物流用人之困？欢创满足企业灵活用工需求。</p>
                    <ul>
                        <li><img src="/homes/image/buss/small-16.png" alt=""></li>
                        <li><img src="/homes/image/buss/small-17.png" alt=""></li>
                        <li><img src="/homes/image/buss/small-18.png" alt=""></li>
                        <li><img src="/homes/image/buss/small-19.png" alt=""></li>
                        <li><img src="/homes/image/buss/small-20.png" alt=""></li>
                    </ul>
                </div>
                <div class="case-left-content-box" id="con_case_5">
                    <h2>医美医药</h2>
                    <p>铺设网点、拓展市场，用工复杂，非核心业务流程消耗企业大量的时间、人员、资金和管理资源，如何快速助企业打开局面？</p>
                    <ul>
                        <li><img src="/homes/image/buss/small-21.png" alt=""></li>
                        <li><img src="/homes/image/buss/small-22.png" alt=""></li>
                        <li><img src="/homes/image/buss/small-23.png" alt=""></li>
                        <li><img src="/homes/image/buss/small-24.png" alt=""></li>
                        <li><img src="/homes/image/buss/small-25.png" alt=""></li>
                    </ul>
                </div>
                <div class="case-left-content-box" id="con_case_6">
                    <h2>教育机构</h2>
                    <p>人才选拔周期长，人岗匹配难度大，教师管理困难，客户体验不好，看欢创在线教育行业的破解之道。</p>
                    <ul>
                        <li><img src="/homes/image/buss/small-26.png" alt=""></li>
                        <li><img src="/homes/image/buss/small-27.png" alt=""></li>
                        <li><img src="/homes/image/buss/small-28.png" alt=""></li>
                        <li><img src="/homes/image/buss/small-29.png" alt=""></li>
                        <li><img src="/homes/image/buss/small-30.png" alt=""></li>
                    </ul>
                </div>
                <div class="com-phone online_service case-com-phone">
                    <a href="javascript:void(0);">立即领取方案 400-888-3323</a>
                </div>
            </div>
            <div class="case-right-content">
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


    <div class="content">

        <h2 class="big-title">资质荣誉</h2>
        <em class="sketch">行业经验丰富，被授予多项荣誉</em>
        <div class="content-box c-banner" style="margin: 0 auto;">
            <div class="banner">
                <ul class="certificate">
                    <li>
                        <img src="/homes/image/certificate/01.png">
                    </li>
                    <li>
                        <img src="/homes/image/certificate/02.png">
                    </li>
                    <li>
                        <img src="/homes/image/certificate/03.png">
                    </li>
                    <li>
                        <img src="/homes/image/certificate/04.png">
                    </li>
                    <li>
                        <img src="/homes/image/certificate/05.png">
                    </li>
                    <li>
                        <img src="/homes/image/certificate/06.png">
                    </li>
                </ul>
                <ul class="certificate">
                    <li>
                        <img src="/homes/image/certificate/07.png">
                    </li>
                    <li>
                        <img src="/homes/image/certificate/08.png">
                    </li>
                    <li>
                        <img src="/homes/image/certificate/09.png">
                    </li>
                    <li>
                        <img src="/homes/image/certificate/10.png">
                    </li>
                    <li>
                        <img src="/homes/image/certificate/11.png">
                    </li>
                    <li>
                        <img src="/homes/image/certificate/12.png">
                    </li>
                </ul>
                <ul class="certificate">
                    <li>
                        <img src="/homes/image/certificate/13.png">
                    </li>
                    <li>
                        <img src="/homes/image/certificate/14.png">
                    </li>
                    <li>
                        <img src="/homes/image/certificate/15.png">
                    </li>
                    <li>
                        <img src="/homes/image/certificate/16.png">
                    </li>
                    <li>
                        <img src="/homes/image/certificate/17.png">
                    </li>
                    <li>
                        <img src="/homes/image/certificate/18.png">
                    </li>
                </ul>
                <ul class="certificate">
                    <li>
                        <img src="/homes/image/certificate/18.png">
                    </li>
                    <li>
                        <img src="/homes/image/certificate/19.png">
                    </li>
                    <li>
                        <img src="/homes/image/certificate/20.png">
                    </li>
                    <li>
                        <img src="/homes/image/certificate/21.png">
                    </li>
                    <li>
                        <img src="/homes/image/certificate/22.png">
                    </li>
                    <li>
                        <img src="/homes/image/certificate/23.png">
                    </li>
                </ul>
            </div>
            <div class="nexImg">
                <img src="homes/image/banner-right.png" />
            </div>
            <div class="preImg">
                <img src="homes/image/banner-left.png" />
            </div>
            <div class="jumpBtn">
                <ul>
                    <li jumpImg="0"></li>
                    <li jumpImg="1"></li>
                    <li jumpImg="2"></li>
                    <li jumpImg="3"></li>
                </ul>
            </div>
        </div>

        <div class="com-phone online_service" style="margin: 8% auto;">
            <a href="javascript:void(0);">立即合作 400-888-3323</a>
        </div>

        <h2 class="big-title">企业合作</h2>
        <em class="sketch">知名品牌企业，覆盖各细分行业</em>
        <div class="content-box">
            <ul class="content-nav">
                <li>
                    <span id="menu1" onclick="setTab('menu',1,5)" class="hover">金融业</span>
                </li>
                <li>
                    <span id="menu2" onclick="setTab('menu',2,5)">制造业</span>
                </li>
                <li>
                    <span id="menu3" onclick="setTab('menu',3,5)">信息服务业</span>
                </li>
                <li>
                    <span id="menu4" onclick="setTab('menu',4,5)">酒店业</span>
                </li>
                <li>
                    <span id="menu5" onclick="setTab('menu',5,5)">其他行业</span>
                </li>
            </ul>
            <div class="Contentbox">
                <div class="Contentbox-box" id="con_menu_1">
                    <ul class="content-content">
                        <li><img src="/homes/image/buss/img-01.png"></li>
                        <li><img src="/homes/image/buss/img-02.png"></li>
                        <li><img src="/homes/image/buss/img-03.png"></li>
                        <li><img src="/homes/image/buss/img-04.png"></li>
                        <li><img src="/homes/image/buss/img-05.png"></li>
                        <li><img src="/homes/image/buss/img-06.png"></li>
                        <li><img src="/homes/image/buss/img-07.png"></li>
                        <li><img src="/homes/image/buss/img-08.png"></li>
                        <li><img src="/homes/image/buss/img-09.png"></li>
                        <li><img src="/homes/image/buss/img-10.png"></li>
                        <li><img src="/homes/image/buss/img-11.png"></li>
                        <li><img src="/homes/image/buss/img-12.png"></li>
                    </ul>
                </div>
                <div class="Contentbox-box" id="con_menu_2">
                    <ul class="content-content">
                        <li><img src="/homes/image/buss/zhizao/1.png"></li>
                        <li><img src="/homes/image/buss/zhizao/2.png"></li>
                        <li><img src="/homes/image/buss/zhizao/3.png"></li>
                        <li><img src="/homes/image/buss/zhizao/4.png"></li>
                        <li><img src="/homes/image/buss/zhizao/5.png"></li>
                        <li><img src="/homes/image/buss/zhizao/6.png"></li>
                        <li><img src="/homes/image/buss/zhizao/7.png"></li>
                        <li><img src="/homes/image/buss/zhizao/8.png"></li>
                        <li><img src="/homes/image/buss/zhizao/9.png"></li>
                        <li><img src="/homes/image/buss/zhizao/10.png"></li>
                        <li><img src="/homes/image/buss/zhizao/11.png"></li>
                        <li><img src="/homes/image/buss/zhizao/12.png"></li>
                    </ul>
                </div>
                <div class="Contentbox-box" id="con_menu_3">
                    <ul class="content-content">
                        <li><img src="/homes/image/buss/xinxi/1.png"></li>
                        <li><img src="/homes/image/buss/xinxi/2.png"></li>
                        <li><img src="/homes/image/buss/xinxi/3.png"></li>
                        <li><img src="/homes/image/buss/xinxi/4.png"></li>
                        <li><img src="/homes/image/buss/xinxi/5.png"></li>
                        <li><img src="/homes/image/buss/xinxi/6.png"></li>
                        <li><img src="/homes/image/buss/xinxi/7.png"></li>
                        <li><img src="/homes/image/buss/xinxi/8.png"></li>
                        <li><img src="/homes/image/buss/xinxi/9.png"></li>
                        <li><img src="/homes/image/buss/xinxi/10.png"></li>
                        <li><img src="/homes/image/buss/xinxi/11.png"></li>
                        <li><img src="/homes/image/buss/xinxi/12.png"></li>
                    </ul>
                </div>
                <div class="Contentbox-box" id="con_menu_4">
                    <ul class="content-content">
                        <li><img src="/homes/image/buss/jiudian/1.png"></li>
                        <li><img src="/homes/image/buss/jiudian/2.png"></li>
                        <li><img src="/homes/image/buss/jiudian/3.png"></li>
                        <li><img src="/homes/image/buss/jiudian/4.png"></li>
                        <li><img src="/homes/image/buss/jiudian/5.png"></li>
                        <li><img src="/homes/image/buss/jiudian/6.png"></li>
                        <li><img src="/homes/image/buss/jiudian/7.png"></li>
                        <li><img src="/homes/image/buss/jiudian/8.png"></li>
                        <li><img src="/homes/image/buss/jiudian/9.png"></li>
                        <li><img src="/homes/image/buss/jiudian/10.png"></li>
                        <li><img src="/homes/image/buss/jiudian/11.png"></li>
                        <li><img src="/homes/image/buss/jiudian/12.png"></li>
                    </ul>
                </div>
                <div class="Contentbox-box" id="con_menu_5">
                    <ul class="content-content">
                        <li><img src="/homes/image/buss/qita/1.png"></li>
                        <li><img src="/homes/image/buss/qita/2.png"></li>
                        <li><img src="/homes/image/buss/qita/3.png"></li>
                        <li><img src="/homes/image/buss/qita/4.png"></li>
                        <li><img src="/homes/image/buss/qita/5.png"></li>
                        <li><img src="/homes/image/buss/qita/6.png"></li>
                        <li><img src="/homes/image/buss/qita/7.png"></li>
                        <li><img src="/homes/image/buss/qita/8.png"></li>
                        <li><img src="/homes/image/buss/qita/9.png"></li>
                        <li><img src="/homes/image/buss/qita/10.png"></li>
                        <li><img src="/homes/image/buss/qita/11.png"></li>
                        <li><img src="/homes/image/buss/qita/12.png"></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="com-phone online_service" style="margin: 0 auto;">
            <a href="javascript:void(0);">立即合作 400-888-3323</a>
        </div>

        <h2 align="center" class="caisui">关于<em>用工</em>/<em>财税</em>你是否还有这些困恼？</h2>
        <div class="content-box" style="margin-left: 2%;">
            <ul class="finance">
                <li>
                    <div class="hexagon2"><div class="left"></div><p>01</p><div class="right"></div></div>
                    <div class="finance-box">
                        <div class="finance-box-content">
                            <p>企业用工成本风险越来越高</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="hexagon2"><div class="left"></div><p>02</p><div class="right"></div></div>
                    <div class="finance-box">
                        <div class="finance-box-content">
                            <p>临时用工人数巨大，自主招聘力不从心</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="hexagon2"><div class="left"></div><p>03</p><div class="right"></div></div>
                    <div class="finance-box">
                        <div class="finance-box-content">
                            <p>跨地域雇佣困难,业务多地域拓展受限</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="hexagon2"><div class="left"></div><p>04</p><div class="right"></div></div>
                    <div class="finance-box">
                        <div class="finance-box-content">
                            <p>精英高管苦苦寻觅，无合适人选</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="hexagon2"><div class="left"></div><p>05</p><div class="right"></div></div>
                    <div class="finance-box">
                        <div class="finance-box-content">
                            <p>员工个人所得税、社保支出过高</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="hexagon2"><div class="left"></div><p>06</p><div class="right"></div></div>
                    <div class="finance-box">
                        <div class="finance-box-content">
                            <p>企业/个人税负重，无票入账，利润虚高</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <div class="com-phone online_service">
            <a href="javascript:void(0);">更多问题咨询 400-888-3323</a>
        </div>

        <h2 class="big-title">免费定制您的专属解决案例</h2>
        <em class="sketch">一线实战专家团队为您全面把关设计与落地</em>

    </div>
    <!-- content-end -->

    <div class="content-made">
        <div class="content-made-box">
            <div class="made-big-box">
                <div class="made-second-box">
                    <div class="made-content">
                        <div class="made-content-border">
                            <h2>欢创告诉您</h2>
                            <i>+</i>
                            <em>您的同行正以更低的人力、税务成本与您竞争</em>
                            <span>基于企业风险之源--用工关系进行顶层设计<br>规避社保、工会费、劳动纠纷等各种潜在风<br>险平均可节约企业成本40%</span>
                            <div class="yuan"></div>
                        </div>
                    </div>
                </div>
            </div>
            <form method="post" id="homeForm">
                <div class="made-right-box">
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
                            <option value="请选择">请选择</option >
                            <option value="1">人才外包</option>
                            <option value="2">税务策划</option>
                            <option value="3">劳务派遣</option>
                            <option value="4">代理招聘</option>
                            <option value="5">猎头招聘</option>
                            <option value="6">人事代理</option>
                            <option value="7">其他</option>
                        </select>
                        <i class="need-btn">*</i>
                    </div>
                    <div class="input-border">
                        <textarea name="content" placeholder="您的留言："></textarea>
                    </div>
                    <div class="input-border">
                        <button type="button" class="button" id="setHomeAdd">提交申请</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- content-start -->
    <div style="width: 100%">
        <div class="content">
            <h2 class="big-title">新闻政策</h2>
            <em class="sketch">因为预见，所以看见，相信品牌的力量</em>
            <div class="content-box">
                <div class="content-box-left">
                    <div class="box-left-one">
                        <h3>公司动态</h3>
                        <span>Company news</span>
                    </div>
                    <a class="box-left-one-more" href="{{ route('page_news', ['cid'=>2]) }}" target="_blank">更多</a>
                    <img src="/homes/image/img-01.png" alt="">
                    <h4>2020年欢创集团管理层秋游</h4>
                    <i>2020-12-12</i>
                    <div class="box-left-content">
                        <a href="{{ route('newsContent', ['news'=>2]) }}" target="_blank"><span>金秋时节，天朗气清。为丰富公司管理业余文化生活，增强部们团队凝聚力，体现公司的人文关怀，让公司管理层更加体现公司的人文关怀</span></a>
                    </div>
                    <div class="box-left-bottom">
                        <ul>
                            <li onclick="newsTiao(1);">
                                <span>2020年11月份欢创员工生日会</span><i>2020-12-12</i>
                            </li>
                            <li onclick="newsTiao(2);">
                                <span>广州增城区政府考察代表团到欢创集团调研</span><i>2020-12-12</i>
                            </li>
                            <li onclick="newsTiao(3);">
                                <span>欢创集团再次荣获2020中国数字服务暨服欢创集团再次荣获2020中国数字服务暨服务务</span><i>2020-12-12</i>
                            </li>
                        </ul>
                    </div>
                </div>
                

                <div class="content-box-right">
                    <ul class="box-right-nav">
                        <li>
                            <a href="javascript:void(0);" id="cateNews1" onclick="setNews('cateNews',1,4)" class="hover">政策动态</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" id="cateNews2" onclick="setNews('cateNews',2,4)">人才外包</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" id="cateNews3" onclick="setNews('cateNews',3,4)">税务筹划</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" id="cateNews4" onclick="setNews('cateNews',4,4)">劳务派遣</a>
                        </li>
                        <li><a href="{{ route('page_news') }}" target="_blank">更&nbsp;&nbsp;多</a></li>
                    </ul>
                    
                    <div class="right-border-company">
                        <div class="border-box" id="con_cateNews_1">
                            <div class="box-right-border" onclick="newsContent();">
                                <div class="box-right-border-img"><img src="/homes/image/img-05.png" alt=""></div>
                                <div class="right-border-content">
                                    <h3>车票抵扣增值税，注意要点</h3>
                                    <i>2020-12-12</i>
                                    <p>1、日期必须是2019年4月1日后取得的车票才可以抵扣，<br>之前的车票不得抵扣增值税；<br>2、境内产生的符合条件的旅客运输服务才可以抵扣， 车票不得抵扣增值税；票不得抵扣增值税票不得抵扣增值税票不得抵扣增值税票不得抵扣增值税</p>
                                </div>
                            </div>
                            <div class="box-right-border" onclick="newsContent();">
                                <div class="box-right-border-img"><img src="/homes/image/img-06.png" alt=""></div>
                                <div class="right-border-content">
                                    <h3>财政补贴收入是否需要缴纳增值税？</h3>
                                    <i>2020-12-12</i>
                                    <p>1、当收到财政补贴时，先判断是否与取得收入或者数量直接挂钩。<br>与其销售货物、劳务、服务、无形资产、不动产的收入或者数量<br>直接挂钩的，应按规定计算缴纳增值税...</p>
                                </div>
                            </div>
                            <div class="box-right-border" onclick="newsContent();">
                                <div class="box-right-border-img"><img src="/homes/image/img-07.png" alt=""></div>
                                <div class="right-border-content">
                                    <h3>社保代缴是违法的吗？需要社保代理该怎么办？</h3>
                                    <i>2020-12-12</i>
                                    <p>社保代理是人力资源服务里面一项服务，只要有国家法定资质的<br>都是合法的，而代缴社保对于企业还是个人来说都是有好处的...</p>
                                </div>
                            </div>
                        </div>
                        <div class="border-box" id="con_cateNews_2">
                            <div class="box-right-border">
                                <div class="box-right-border-img"><img src="/homes/image/img-05.png" alt=""></div>
                                <div class="right-border-content">
                                    <h3>车票抵扣增值税，注意要点</h3>
                                    <i>2020-12-12</i>
                                    <p>1、日期必须是2019年4月1日后取得的车票才可以抵扣，之前的车票不得抵扣增值税；</p>
                                    <p>2、境内产生的符合条件的旅客运输服务才可以抵扣， 车票不得抵扣增值税；票不得抵扣增值税票不得抵扣增值税票不得抵扣增值税票不得抵扣增值税</p>
                                </div>
                            </div>
                            <div class="box-right-border">
                                <div class="box-right-border-img"><img src="/homes/image/img-06.png" alt=""></div>
                                <div class="right-border-content">
                                    <h3>财政补贴收入是否需要缴纳增值税？</h3>
                                    <i>2020-12-12</i>
                                    <p>1、当收到财政补贴时，先判断是否与取得收入或者数量直接挂钩。与其销售货物、劳务、服务、无形资产、不动产的收入或者数量直接挂钩的，应按规定计算缴纳增值税...</p>
                                </div>
                            </div>
                            <div class="box-right-border">
                                <div class="box-right-border-img"><img src="/homes/image/img-07.png" alt=""></div>
                                <div class="right-border-content">
                                    <h3>社保代缴是违法的吗？需要社保代理该怎么办？</h3>
                                    <i>2020-12-12</i>
                                    <p>社保代理是人力资源服务里面一项服务，只要有国家法定资质的都是合法的，而代缴社保对于企业还是个人来说都是有好处的...</p>
                                </div>
                            </div>
                        </div>
                        <div class="border-box" id="con_cateNews_3">
                            <div class="box-right-border">
                                <div class="box-right-border-img"><img src="/homes/image/img-05.png" alt=""></div>
                                <div class="right-border-content">
                                    <h3>车票抵扣增值税，注意要点</h3>
                                    <i>2020-12-12</i>
                                    <p>1、日期必须是2019年4月1日后取得的车票才可以抵扣，之前的车票不得抵扣增值税；</p>
                                    <p>2、境内产生的符合条件的旅客运输服务才可以抵扣， 车票不得抵扣增值税；票不得抵扣增值税票不得抵扣增值税票不得抵扣增值税票不得抵扣增值税</p>
                                </div>
                            </div>
                            <div class="box-right-border">
                                <div class="box-right-border-img"><img src="/homes/image/img-06.png" alt=""></div>
                                <div class="right-border-content">
                                    <h3>财政补贴收入是否需要缴纳增值税？</h3>
                                    <i>2020-12-12</i>
                                    <p>1、当收到财政补贴时，先判断是否与取得收入或者数量直接挂钩。与其销售货物、劳务、服务、无形资产、不动产的收入或者数量直接挂钩的，应按规定计算缴纳增值税...</p>
                                </div>
                            </div>
                            <div class="box-right-border">
                                <div class="box-right-border-img"><img src="/homes/image/img-07.png" alt=""></div>
                                <div class="right-border-content">
                                    <h3>社保代缴是违法的吗？需要社保代理该怎么办？</h3>
                                    <i>2020-12-12</i>
                                    <p>社保代理是人力资源服务里面一项服务，只要有国家法定资质的都是合法的，而代缴社保对于企业还是个人来说都是有好处的...</p>
                                </div>
                            </div>
                        </div>
                        <div class="border-box" id="con_cateNews_4">
                            <div class="box-right-border">
                                <div class="box-right-border-img"><img src="/homes/image/img-05.png" alt=""></div>
                                <div class="right-border-content">
                                    <h3>车票抵扣增值税，注意要点</h3>
                                    <i>2020-12-12</i>
                                    <p>1、日期必须是2019年4月1日后取得的车票才可以抵扣，之前的车票不得抵扣增值税；</p>
                                    <p>2、境内产生的符合条件的旅客运输服务才可以抵扣， 车票不得抵扣增值税；票不得抵扣增值税票不得抵扣增值税票不得抵扣增值税票不得抵扣增值税</p>
                                </div>
                            </div>
                            <div class="box-right-border">
                                <div class="box-right-border-img"><img src="/homes/image/img-06.png" alt=""></div>
                                <div class="right-border-content">
                                    <h3>财政补贴收入是否需要缴纳增值税？</h3>
                                    <i>2020-12-12</i>
                                    <p>1、当收到财政补贴时，先判断是否与取得收入或者数量直接挂钩。与其销售货物、劳务、服务、无形资产、不动产的收入或者数量直接挂钩的，应按规定计算缴纳增值税...</p>
                                </div>
                            </div>
                            <div class="box-right-border">
                                <div class="box-right-border-img"><img src="/homes/image/img-07.png" alt=""></div>
                                <div class="right-border-content">
                                    <h3>社保代缴是违法的吗？需要社保代理该怎么办？</h3>
                                    <i>2020-12-12</i>
                                    <p>社保代理是人力资源服务里面一项服务，只要有国家法定资质的都是合法的，而代缴社保对于企业还是个人来说都是有好处的...</p>
                                </div>
                            </div>
                        </div
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- content-end -->
@endsection

@section('script')
<script src="/homes/js/index.js"></script>
<script src="/homes/js/common.js"></script>
<script>
    $("#setHomeAdd").click(function(){

        var datas = $.param({
            "place" : 4,
            "page" : "{{ $hover }}"
        }) + "&" +$("#homeForm").serialize();
        
        if ( $("#homeForm").serializeArray()[0].value == '' ) {
            swal("提示", "请输入您的名字！", "warning");
        }
        if ( checkPhone($("#homeForm").serializeArray()[1].value) == false ) {
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
                    swal('警告', data.msg, 'error');
                }
            });

    });


    function newsTiao(id){
        window.open("{{route('newsContent', ['news'=>"+ id +"])}}");
    }
    function newsContent(){
        window.open("{{route('newsContent')}}");
    }
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
                }else{  
                    $('#myCarousel').carousel('prev');//当开始的坐标小于结束的坐标时，滑动到上一附图  

                }  
                          
            }  
        });

        // 头部附近数字滚动
        numScroll('hangye', 10, 1000)
        numScroll('wangdian', 500, 1000)
        numScroll('fuwu', 10, 1000)
        numScroll('rencai', 1000, 1000)
    })
</script>
@endsection