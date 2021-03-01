@extends('layouts.home')

@section('title', '税收筹划_税务筹划公司|合理避税-广州欢创信息咨询有限公司【官网】')
@section('keywords', '税收筹划,税务筹划公司,合理避税')
@section('description', '广州欢创信息是国内知名税务筹划公司,主营业务包括税收筹划,节税筹划,代理报税,财务外包,税务咨询,是利用税收优惠政策工具帮助企业合理避税的灵活用工平台. ')

@section('head')
    <link rel="stylesheet" type="text/css" href="/homes/css/taxation.css">
@endsection('head')

@section('content')
    <!-- banner-start -->
    <div class="banner">
        <img style="width: 100%;" src="/homes/image/banner04.jpg" />
    </div>
    <!-- banner-end -->

    <!-- 内容--start -->
    <div class="middle">
        
        <div class="content">
            <h2 class="tax-title">您是否遇以下税务难题困扰？</h2>
            <small class="tax-small_title">您还在面临税务常见问题吗？</small>
            <ul class="problem-ul">
                <li>
                    <div>
                        <p>税后利润小</p>
                        <span>企业所得利润的25%交了税负担重</span>
                    </div>
                </li>
                <li>
                    <div>
                        <p>缺成本票</p>
                        <span>成本票不足，居间费，提成等无票支出</span>
                    </div>
                </li>
                <li>
                    <div>
                        <p>利润高分红小</p>
                        <span>分红需缴20%个税，企业不敢分红</span>
                    </div>
                </li>
                <li>
                    <div>
                        <p>个税高</p>
                        <span>工资、奖金、劳务等收入高，税负越高</span>
                    </div>
                </li>
                <li>
                    <div>
                        <p>增值税高</p>
                        <span>增信税税负高，该如何返还</span>
                    </div>
                </li>
                <li>
                    <div>
                        <p>个税、社保缴纳多</p>
                        <span>希望节省个税、社保等费用</span>
                    </div>
                </li>
            </ul>
            <div class="search-box online_service">我也有这样的问题，怎么解决？<img src="/homes/image/shubiao.png" alt=""></div>
        </div>

        <div class="plan">
            <h2 class="tax-title">欢创1V1专属定制税筹方案</h2>
            <small class="tax-small_title">根据不同行业，定制具体筹划方案，降低税负</small>
            <div class="type-box">
                <a id="plan1" onclick="setPlan('plan',1,2)" class="type-active">个人筹划适用行业<i></i></a>
                <a id="plan2" onclick="setPlan('plan',2,2)">企业筹划适用行业<i></i></a>
            </div>
            <div class="content">
                <ul class="type-ul" id="plan_ul_1">
                    <li>
                        <img src="/homes/image/shuiwu/icon-1.png" alt="">
                        <p>企业高管</p>
                    </li>
                    <li>
                        <img src="/homes/image/shuiwu/icon-2.png" alt="">
                        <p>网红主播</p>
                    </li>
                    <li>
                        <img src="/homes/image/shuiwu/icon-3.png" alt="">
                        <p>自由职业者</p>
                    </li>
                    <li>
                        <img src="/homes/image/shuiwu/icon-4.png" alt="">
                        <p>股东</p>
                    </li>
                    <li>
                        <img src="/homes/image/shuiwu/icon-5.png" alt="">
                        <p>微商群体</p>
                    </li>
                    <li>
                        <img src="/homes/image/shuiwu/icon-6.png" alt="">
                        <p>高净值人群</p>
                    </li>
                    <li>
                        <img src="/homes/image/shuiwu/icon-7.png" alt="">
                        <p>培训，咨询老师</p>
                    </li>
                    <li>
                        <img src="/homes/image/shuiwu/icon-8.png" alt="">
                        <p>作家</p>
                    </li>
                </ul>
                
                <ul class="type-ul" id="plan_ul_2" style="display: none;">
                    <li>
                        <img src="/homes/image/shuiwu/qiye/icon-1.png" alt="">
                        <p>房地产行业</p>
                    </li>
                    <li>
                        <img src="/homes/image/shuiwu/qiye/icon-2.png" alt="">
                        <p>主播行业</p>
                    </li>
                    <li>
                        <img src="/homes/image/shuiwu/qiye/icon-3.png" alt="">
                        <p>医疗行业</p>
                    </li>
                    <li>
                        <img src="/homes/image/shuiwu/qiye/icon-4.png" alt="">
                        <p>贸易行业</p>
                    </li>
                    <li>
                        <img src="/homes/image/shuiwu/qiye/icon-5.png" alt="">
                        <p>建材行业</p>
                    </li>
                    <li>
                        <img src="/homes/image/shuiwu/qiye/icon-6.png" alt="">
                        <p>制造行业</p>
                    </li>
                    <li>
                        <img src="/homes/image/shuiwu/qiye/icon-7.png" alt="">
                        <p>物流交通行业</p>
                    </li>
                    <li>
                        <img src="/homes/image/shuiwu/qiye/icon-8.png" alt="">
                        <p>家政服务</p>
                    </li>
                </ul>
                <div class="search-box setOnline">我要领取专属方案<img src="/homes/image/shubiao.png" alt=""></div>
            </div>
        </div>
        
        <div class="content">
            <div class="tax-box">
                <i class="tax-box-left"></i>
                <h2 class="tax-title">欢创税务筹划经典案例</h2>
                <i class="tax-box-right"></i>
                <small class="tax-small_title">真实筹划案例，节税效能立竿见影</small>
            </div>
            <ul class="case-ul">
                <li id="case1" onclick="setCase('case', 1, 5);" class="case-active">制造行业筹划案例<i></i></li>
                <li id="case2" onclick="setCase('case', 2, 5);">医药行业筹划案例<i></i></li>
                <li id="case3" onclick="setCase('case', 3, 5);">培训行业筹划案例<i></i></li>
                <li id="case4" onclick="setCase('case', 4, 5);">建筑行业筹划案例<i></i></li>
                <li id="case5" onclick="setCase('case', 5, 5);">租赁行业筹划案例<i></i></li>
            </ul>
            <div class="table-box">
                <table class="tab" id="tab_case_1">
                    <thead>
                        <tr>
                            <td colspan="5"><h3>浙江某大型食品制造商，内有员工500人，平均工资5000元，因人员流动性较强，长期未给员工缴纳社保，金税三期后面临稽查风险，遂寻求欢创提供专业筹划方案</h3></td>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td></td>
                            <td>税筹前</td>
                            <td>税筹后</td>
                        <tr>
                        <tr>
                            <td>税务项目</td>
                            <td>社保+公职金+残保金+工会费</td>
                            <td>增值税+附加税+残保金</td>
                        <tr>
                        <tr>
                            <td>税务总额</td>
                            <td><em>110.5万</em></td>
                            <td><em>1.85万</em></td>
                        <tr>
                        <tr>
                            <td>节税比例</td>
                            <td colspan="2"><div class="yun"><em>98%</em></div></td>
                        <tr>  
                    </tbody>
                </table>
                
                <table class="tab" id="tab_case_2">
                    <thead>
                        <tr>
                            <td colspan="5"><h3>广东某医药公司，外部存在多名收入较高的医药代表，平均20万/月，财务总监想要为医药代表节省个税，提高可支配收入，遂寻求欢创提供专业筹划方案</h3></td>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td></td>
                            <td>税筹前</td>
                            <td>税筹后</td>
                        <tr>
                        <tr>
                            <td>税务项目</td>
                            <td>劳务所得</td>
                            <td>增值税+附加税+核定个税</td>
                        <tr>
                        <tr>
                            <td>税务总额</td>
                            <td><em>5.7万</em></td>
                            <td><em>0.3万</em></td>
                        <tr>
                        <tr>
                            <td>节税比例</td>
                            <td colspan="2"><div class="yun"><em>95 %</em></div></td>
                        <tr>  
                    </tbody>
                </table>

                <table class="tab" id="tab_case_3">
                    <thead>
                        <tr>
                            <td colspan="5"><h3>北京某培训公司，课程销售代表收入普遍较高，平均工资到手9.3万/月，由于金税三期监管日益加强，如果按照劳务所得报税则税负较重，按公司薪金所得又没有劳动关系，同时会涉及社保成本问题，遂寻求欢创提供专业筹划方案</h3></td>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td></td>
                            <td>税筹前</td>
                            <td>税筹后</td>
                        <tr>
                        <tr>
                            <td>税务项目</td>
                            <td>劳务所得</td>
                            <td>增值税+附加税+核定个税</td>
                        <tr>
                        <tr>
                            <td>税务总额</td>
                            <td><em>3.35万</em></td>
                            <td><em>0.14万</em></td>
                        <tr>
                        <tr>
                            <td>节税比例</td>
                            <td colspan="2"><div class="yun"><em>96%</em></div></td>
                        <tr>  
                    </tbody>
                </table>

                <table class="tab" id="tab_case_4">
                    <thead>
                        <tr>
                            <td colspan="5"><h3>上海某建筑工程公司，承接多地建筑劳务工程，每年工程工资款500万，以前该公司发工资均以现金形式发放，现银行监察已开始着力于私人账户的监管，故无法沿用以前的方式，遂寻求欢创提供专业筹划方案</h3></td>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td></td>
                            <td>税筹前</td>
                            <td>税筹后</td>
                        <tr>
                        <tr>
                            <td>税务项目</td>
                            <td>社保+公职金+残保金+工会费</td>
                            <td>增值税+附加税+核定企业所得税</td>
                        <tr>
                        <tr>
                            <td>税务总额</td>
                            <td><em>221万</em></td>
                            <td><em>10万</em></td>
                        <tr>
                        <tr>
                            <td>节税比例</td>
                            <td colspan="2"><div class="yun"><em>95%</em></div></td>
                        <tr>  
                    </tbody>
                </table>

                <table class="tab" id="tab_case_5">
                    <thead>
                        <tr>
                            <td colspan="5"><h3>某大型工程公司，因业务需要经常租用个人吊车设备，租金每月80万，因个人工程设备租赁使用手续流程难以完善，无发票入账等问题，造成企业成本结构失真，遂寻求欢创提供专业筹划方案某大型工程公司，因业务需要经常租用个人吊车设备，租金每月80万，因个人工程设备租赁使用手续流程难以完善，无发票入账等问题，造成企业成本结构失真，遂寻求欢创提供专业筹划方案</h3></td>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td></td>
                            <td>税筹前</td>
                            <td>税筹后</td>
                        <tr>
                        <tr>
                            <td>税务项目</td>
                            <td>社保+公职金+残保金+工会费</td>
                            <td>增值税+附加税+残保金</td>
                        <tr>
                        <tr>
                            <td>税务总额</td>
                            <td><em>24.15万</em></td>
                            <td><em>2万</em></td>
                        <tr>
                        <tr>
                            <td>节税比例</td>
                            <td colspan="2"><div class="yun"><em>92%</em></div></td>
                        <tr>
                    </tbody>
                </table>

                <div class="search-box table-search setOnline">点击了解节税过程<img src="/homes/image/shubiao.png" alt=""></div>
                <div class="search-box table-search setOnline">测一测你能节税多少<img src="/homes/image/shubiao.png" alt=""></div>
            </div>
        </div>
        
        <div class="both"></div>
        <div class="content">
            <div class="tax-box">
                <i class="tax-box-left"></i>
                <h2 class="tax-title">欢创全国<span>220+</span>直营税优园区</h2>
                <i class="tax-box-right"></i>
                <small class="tax-small_title">高效对接园区，精准匹配适合您的税收洼地</small>
            </div>
            <ul class="area-ul">
                <li><p>通过地方税收洼<br>地直接<span>降低税率</span></p></li>
                <li><p>税优地受邀入驻<br>享受<span>最优政策</span></p></li>
                <li><p>专业个性定制<br>综合<span>节税98%方案</span></p></li>
            </ul>
            <div class="both"></div>

            <div class="content" style="margin: 0 auto;width: 100%;">
                
                <div class="area-left">
                    <img src="/homes/image/shuiwu/ditu.png" alt="">
                </div>

                <div class="area-right">
                    <div class="area-right-content">
                        <p>凭借多年的行业积累和稳定的体量规模，现已受邀进驻超&nbsp;220 + 税优地，&nbsp;建立500多个服务网点，&nbsp;与各地政府园区达成深度战&nbsp;略合作，在全国范围内构建成熟的一站式税筹服务网络。</p>
                    </div>
                </div>
    
            </div> 
            <div class="both"></div>
        </div>
        <div class="search-box setOnline" style="width: 20%;">查一查我最适合哪个园区<img src="/homes/image/shubiao.png" alt=""></div>
        <div class="content">
            <div class="tax-box">
                <i class="tax-box-left"></i>
                <h2 class="tax-title">欢创专业定制个性化服务优势</h2>
                <i class="tax-box-right"></i>
                <small class="tax-small_title">提供优质、稳健、便利的财税服务</small>
            </div>
            <ul class="good-ul">
                <li>
                    <div>
                        <h3>合理合规</h3>
                        <p>基于真实业务场景，<br>实现<span>四流合一</span></p>
                    </div>
                </li>
                <li>
                    <div>
                        <h3>量身定制</h3>
                        <p><span>60+</span>细分行业经验，<br>精准匹配定制</p>
                    </div>
                </li>
                <li>
                    <div>
                        <h3>高效快捷</h3>
                        <p>最快<span>7</span>个工作日落地，<br>一站式服务</p>
                    </div>
                </li>
                <li>
                    <div>
                        <h3>专业安全</h3>
                        <p><span>10年</span>深耕积累，<br>专业赢得信赖</p>
                    </div>
                </li>
                <li>
                    <div>
                        <h3>覆盖点广</h3>
                        <p><span>220+</span>直属税优园区，<br><span>500+</span>服务网点</p>
                    </div>
                </li>
                <li>
                    <div>
                        <h3>售后无忧</h3>
                        <p>专属落地顾问，<br><span>超百人</span>持证税务师团队</p>
                    </div>
                </li>
            </ul>
            <div class="search-box setOnline">立即定制筹划方案<img src="/homes/image/shubiao.png" alt=""></div>
        </div>

        <div class="content-server">
            <div class="tax-box">
                <i class="tax-box-left" style="position:absolute;top:22%;left:35%;"></i>
                <h2 class="tax-title">节税流程</h2>
                <i class="tax-box-right" style="position:absolute;top:22%;right:35%;"></i>
                <small class="tax-small_title">专业服务，快速落地</small>
            </div>
            <div class="content-box">
                <ul class="server-ul">
                    <li class="server-li">
                        <p>1对1顾问服务</p>
                        <span>详细咨询沟通为你接单疑惑</span>
                    </li>
                    <li>
                        <div class="server-img"><img src="/homes/image/jiantou.png" alt=""></div>
                    </li>
                    <li class="server-li">
                        <p>定制最优方案</p>
                        <span>专业团队为您定制最优专属方案</span>
                    </li>
                    <li>
                        <div class="server-img"><img src="/homes/image/jiantou.png" alt=""></div>
                    </li>
                    <li class="server-li">
                        <p>签署合作协议</p>
                        <span>确认服务细节保障您的权益</span>
                    </li>
                    <li>
                        <div class="server-img"><img src="/homes/image/jiantou.png" alt=""></div>
                    </li>
                    <li class="server-li">
                        <p>方案落地实施</p>
                        <span>持续助力降本增效创造更优价值</span>
                    </li>
                </ul>
                <div class="search-box setOnline" style="margin: 3% auto 0;width: 20%;">免费获取节税方案<img src="/homes/image/shubiao.png" alt=""></div>
            </div>
        </div>

        <div class="cooperation">
            <h2 class="big-title">合作伙伴</h2>
            <div class="cooperation-box">
                <ul>
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
        </div>
    <!-- 内容--end -->
@endsection

@section('script')
<script src="/homes/js/taxation.js"></script>
<script src="/homes/js/common.js"></script>
<script>
    
</script>
@endsection
