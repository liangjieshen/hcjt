@extends('layouts.mobile')

@section('title', '人力派遣_人力派遣公司_人力资源公司排名-广州欢创信息【官网】')
@section('keywords', '人力派遣,人力派遣公司,人力资源公司排名')
@section('description', '广州欢创信息主营人力派遣业务,是国内知名人力派遣公司,经过十年的行业深耕,现已是人力资源公司排名靠前的旗舰品牌服务机构.')

@section('head')
    <link rel="stylesheet" type="text/css" href="/homes/mobile/css/news.css">
@endsection('head')

@section('style')
<style>
    html{overflow-x:hidden;}
    .pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover {background-color: #f26d00;border-color: #f26d00;}
</style>
@endsection('style')

@section('content')

    <div class="content" style="margin:0;text-align: center;">
        <div class="nav-menu">
        　　<nav class="nav">
        　　　　<p class="con">
        　　　　　　<a href="javascript:void(0);" class="active">最新资讯</a>
        　　　　　　<a href="javascript:void(0);">公司新闻</a>
        　　　　　　<a href="javascript:void(0);">政策动态</a>
        　　　　　　<a href="javascript:void(0);">人力外包</a>
        　　　　　　<a href="javascript:void(0);">税务策划</a>
        　　　　　　<a href="javascript:void(0);">劳务派遣</a>
        　　　　　　<a href="javascript:void(0);">代理招聘</a>
        　　　　　　<a href="javascript:void(0);">猎头招聘</a>
        　　　　　　<a href="javascript:void(0);">业务外包</a>
            　　</p>
        　　</nav>
        </div>
        <div class="content-box">
            <div class="news-list">
                <ul class="news-list-ul">
                    <li>
                        <div class="news-list-img"><img src="/homes/mobile/image/news/img_1.png" alt=""></div>
                        <a href="{{ route('mobile.newsContent') }}">
                            <div class="news-list-con">
                                <p>工资，下面6种不得在企业工资，下面6种不得在企业</p>
                                <i>2020-01-01</i>
                                <span>1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务......</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="news-list-img"><img src="/homes/mobile/image/news/img_1.png" alt=""></div>
                        <a href="{{ route('mobile.newsContent') }}">
                            <div class="news-list-con">
                                <p>工资，下面6种不得在企业工资，下面6种不得在企业</p>
                                <i>2020-01-01</i>
                                <span>1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务......</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="news-list-img"><img src="/homes/mobile/image/news/img_1.png" alt=""></div>
                        <a href="{{ route('mobile.newsContent') }}">
                            <div class="news-list-con">
                                <p>工资，下面6种不得在企业工资，下面6种不得在企业</p>
                                <i>2020-01-01</i>
                                <span>1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务......</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="news-list-img"><img src="/homes/mobile/image/news/img_1.png" alt=""></div>
                        <a href="{{ route('mobile.newsContent') }}">
                            <div class="news-list-con">
                                <p>工资，下面6种不得在企业工资，下面6种不得在企业</p>
                                <i>2020-01-01</i>
                                <span>1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务......</span>
                            </div>
                        </a>
                    </li>
                </ul>
                <ul class="pagination  pagination-lg">
                    <li><a href="#">&laquo;</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>
            </div>
            <div class="news-list">
                <ul class="news-list-ul">
                    <li>
                        <div class="news-list-img"><img src="/homes/mobile/image/news/img_1.png" alt=""></div>
                        <a href="{{ route('mobile.newsContent') }}">
                            <div class="news-list-con">
                                <p>222222工资，下面6种不得在企业工资，下面6种不得在企业</p>
                                <i>2020-01-01</i>
                                <span>1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务......</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="news-list-img"><img src="/homes/mobile/image/news/img_1.png" alt=""></div>
                        <a href="{{ route('mobile.newsContent') }}">
                            <div class="news-list-con">
                                <p>工资，下面6种不得在企业工资，下面6种不得在企业</p>
                                <i>2020-01-01</i>
                                <span>1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务......</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="news-list-img"><img src="/homes/mobile/image/news/img_1.png" alt=""></div>
                        <a href="{{ route('mobile.newsContent') }}">
                            <div class="news-list-con">
                                <p>工资，下面6种不得在企业工资，下面6种不得在企业</p>
                                <i>2020-01-01</i>
                                <span>1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务......</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="news-list-img"><img src="/homes/mobile/image/news/img_1.png" alt=""></div>
                        <a href="{{ route('mobile.newsContent') }}">
                            <div class="news-list-con">
                                <p>工资，下面6种不得在企业工资，下面6种不得在企业</p>
                                <i>2020-01-01</i>
                                <span>1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务......</span>
                            </div>
                        </a>
                    </li>
                </ul>
                <ul class="pagination  pagination-lg">
                    <li><a href="#">&laquo;</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>
            </div>
            <div class="news-list">
                <ul class="news-list-ul">
                    <li>
                        <div class="news-list-img"><img src="/homes/mobile/image/news/img_1.png" alt=""></div>
                        <a href="{{ route('mobile.newsContent') }}">
                            <div class="news-list-con">
                                <p>工资，下面6种不得在企业工资，下面6种不得在企业</p>
                                <i>2020-01-01</i>
                                <span>1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务......</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="news-list-img"><img src="/homes/mobile/image/news/img_1.png" alt=""></div>
                        <a href="{{ route('mobile.newsContent') }}">
                            <div class="news-list-con">
                                <p>工资，下面6种不得在企业工资，下面6种不得在企业</p>
                                <i>2020-01-01</i>
                                <span>1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务......</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="news-list-img"><img src="/homes/mobile/image/news/img_1.png" alt=""></div>
                        <a href="{{ route('mobile.newsContent') }}">
                            <div class="news-list-con">
                                <p>工资，下面6种不得在企业工资，下面6种不得在企业</p>
                                <i>2020-01-01</i>
                                <span>1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务......</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="news-list-img"><img src="/homes/mobile/image/news/img_1.png" alt=""></div>
                        <a href="{{ route('mobile.newsContent') }}">
                            <div class="news-list-con">
                                <p>工资，下面6种不得在企业工资，下面6种不得在企业</p>
                                <i>2020-01-01</i>
                                <span>1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务......</span>
                            </div>
                        </a>
                    </li>
                </ul>
                <ul class="pagination  pagination-lg">
                    <li><a href="#">&laquo;</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>
            </div>
            <div class="news-list">
                <ul class="news-list-ul">
                    <li>
                        <div class="news-list-img"><img src="/homes/mobile/image/news/img_1.png" alt=""></div>
                        <a href="{{ route('mobile.newsContent') }}">
                            <div class="news-list-con">
                                <p>工资，下面6种不得在企业工资，下面6种不得在企业</p>
                                <i>2020-01-01</i>
                                <span>1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务......</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="news-list-img"><img src="/homes/mobile/image/news/img_1.png" alt=""></div>
                        <a href="{{ route('mobile.newsContent') }}">
                            <div class="news-list-con">
                                <p>工资，下面6种不得在企业工资，下面6种不得在企业</p>
                                <i>2020-01-01</i>
                                <span>1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务......</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="news-list-img"><img src="/homes/mobile/image/news/img_1.png" alt=""></div>
                        <a href="{{ route('mobile.newsContent') }}">
                            <div class="news-list-con">
                                <p>工资，下面6种不得在企业工资，下面6种不得在企业</p>
                                <i>2020-01-01</i>
                                <span>1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务......</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="news-list-img"><img src="/homes/mobile/image/news/img_1.png" alt=""></div>
                        <a href="{{ route('mobile.newsContent') }}">
                            <div class="news-list-con">
                                <p>工资，下面6种不得在企业工资，下面6种不得在企业</p>
                                <i>2020-01-01</i>
                                <span>1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务......</span>
                            </div>
                        </a>
                    </li>
                </ul>
                <ul class="pagination  pagination-lg">
                    <li><a href="#">&laquo;</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>
            </div>
            <div class="news-list">
                <ul class="news-list-ul">
                    <li>
                        <div class="news-list-img"><img src="/homes/mobile/image/news/img_1.png" alt=""></div>
                        <a href="{{ route('mobile.newsContent') }}">
                            <div class="news-list-con">
                                <p>工资，下面6种不得在企业工资，下面6种不得在企业</p>
                                <i>2020-01-01</i>
                                <span>1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务......</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="news-list-img"><img src="/homes/mobile/image/news/img_1.png" alt=""></div>
                        <a href="{{ route('mobile.newsContent') }}">
                            <div class="news-list-con">
                                <p>工资，下面6种不得在企业工资，下面6种不得在企业</p>
                                <i>2020-01-01</i>
                                <span>1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务......</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="news-list-img"><img src="/homes/mobile/image/news/img_1.png" alt=""></div>
                        <a href="{{ route('mobile.newsContent') }}">
                            <div class="news-list-con">
                                <p>工资，下面6种不得在企业工资，下面6种不得在企业</p>
                                <i>2020-01-01</i>
                                <span>1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务......</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="news-list-img"><img src="/homes/mobile/image/news/img_1.png" alt=""></div>
                        <a href="{{ route('mobile.newsContent') }}">
                            <div class="news-list-con">
                                <p>工资，下面6种不得在企业工资，下面6种不得在企业</p>
                                <i>2020-01-01</i>
                                <span>1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务......</span>
                            </div>
                        </a>
                    </li>
                </ul>
                <ul class="pagination  pagination-lg">
                    <li><a href="#">&laquo;</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>
            </div>
            <div class="news-list">
                <ul class="news-list-ul">
                    <li>
                        <div class="news-list-img"><img src="/homes/mobile/image/news/img_1.png" alt=""></div>
                        <a href="{{ route('mobile.newsContent') }}">
                            <div class="news-list-con">
                                <p>工资，下面6种不得在企业工资，下面6种不得在企业</p>
                                <i>2020-01-01</i>
                                <span>1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务......</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="news-list-img"><img src="/homes/mobile/image/news/img_1.png" alt=""></div>
                        <a href="{{ route('mobile.newsContent') }}">
                            <div class="news-list-con">
                                <p>工资，下面6种不得在企业工资，下面6种不得在企业</p>
                                <i>2020-01-01</i>
                                <span>1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务......</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="news-list-img"><img src="/homes/mobile/image/news/img_1.png" alt=""></div>
                        <a href="{{ route('mobile.newsContent') }}">
                            <div class="news-list-con">
                                <p>工资，下面6种不得在企业工资，下面6种不得在企业</p>
                                <i>2020-01-01</i>
                                <span>1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务......</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="news-list-img"><img src="/homes/mobile/image/news/img_1.png" alt=""></div>
                        <a href="{{ route('mobile.newsContent') }}">
                            <div class="news-list-con">
                                <p>工资，下面6种不得在企业工资，下面6种不得在企业</p>
                                <i>2020-01-01</i>
                                <span>1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务......</span>
                            </div>
                        </a>
                    </li>
                </ul>
                <ul class="pagination  pagination-lg">
                    <li><a href="#">&laquo;</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>
            </div>
            <div class="news-list">
                <ul class="news-list-ul">
                    <li>
                        <div class="news-list-img"><img src="/homes/mobile/image/news/img_1.png" alt=""></div>
                        <a href="{{ route('mobile.newsContent') }}">
                            <div class="news-list-con">
                                <p>工资，下面6种不得在企业工资，下面6种不得在企业</p>
                                <i>2020-01-01</i>
                                <span>1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务......</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="news-list-img"><img src="/homes/mobile/image/news/img_1.png" alt=""></div>
                        <a href="{{ route('mobile.newsContent') }}">
                            <div class="news-list-con">
                                <p>工资，下面6种不得在企业工资，下面6种不得在企业</p>
                                <i>2020-01-01</i>
                                <span>1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务......</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="news-list-img"><img src="/homes/mobile/image/news/img_1.png" alt=""></div>
                        <a href="{{ route('mobile.newsContent') }}">
                            <div class="news-list-con">
                                <p>工资，下面6种不得在企业工资，下面6种不得在企业</p>
                                <i>2020-01-01</i>
                                <span>1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务......</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="news-list-img"><img src="/homes/mobile/image/news/img_1.png" alt=""></div>
                        <a href="{{ route('mobile.newsContent') }}">
                            <div class="news-list-con">
                                <p>工资，下面6种不得在企业工资，下面6种不得在企业</p>
                                <i>2020-01-01</i>
                                <span>1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务......</span>
                            </div>
                        </a>
                    </li>
                </ul>
                <ul class="pagination  pagination-lg">
                    <li><a href="#">&laquo;</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>
            </div>
            <div class="news-list">
                <ul class="news-list-ul">
                    <li>
                        <div class="news-list-img"><img src="/homes/mobile/image/news/img_1.png" alt=""></div>
                        <a href="{{ route('mobile.newsContent') }}">
                            <div class="news-list-con">
                                <p>工资，下面6种不得在企业工资，下面6种不得在企业</p>
                                <i>2020-01-01</i>
                                <span>1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务......</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="news-list-img"><img src="/homes/mobile/image/news/img_1.png" alt=""></div>
                        <a href="{{ route('mobile.newsContent') }}">
                            <div class="news-list-con">
                                <p>工资，下面6种不得在企业工资，下面6种不得在企业</p>
                                <i>2020-01-01</i>
                                <span>1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务......</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="news-list-img"><img src="/homes/mobile/image/news/img_1.png" alt=""></div>
                        <a href="{{ route('mobile.newsContent') }}">
                            <div class="news-list-con">
                                <p>工资，下面6种不得在企业工资，下面6种不得在企业</p>
                                <i>2020-01-01</i>
                                <span>1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务......</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="news-list-img"><img src="/homes/mobile/image/news/img_1.png" alt=""></div>
                        <a href="{{ route('mobile.newsContent') }}">
                            <div class="news-list-con">
                                <p>工资，下面6种不得在企业工资，下面6种不得在企业</p>
                                <i>2020-01-01</i>
                                <span>1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务......</span>
                            </div>
                        </a>
                    </li>
                </ul>
                <ul class="pagination  pagination-lg">
                    <li><a href="#">&laquo;</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>
            </div>
            <div class="news-list">
                <ul class="news-list-ul">
                    <li>
                        <div class="news-list-img"><img src="/homes/mobile/image/news/img_1.png" alt=""></div>
                        <a href="{{ route('mobile.newsContent') }}">
                            <div class="news-list-con">
                                <p>工资，下面6种不得在企业工资，下面6种不得在企业</p>
                                <i>2020-01-01</i>
                                <span>1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务......</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="news-list-img"><img src="/homes/mobile/image/news/img_1.png" alt=""></div>
                        <a href="{{ route('mobile.newsContent') }}">
                            <div class="news-list-con">
                                <p>工资，下面6种不得在企业工资，下面6种不得在企业</p>
                                <i>2020-01-01</i>
                                <span>1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务......</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="news-list-img"><img src="/homes/mobile/image/news/img_1.png" alt=""></div>
                        <a href="{{ route('mobile.newsContent') }}">
                            <div class="news-list-con">
                                <p>工资，下面6种不得在企业工资，下面6种不得在企业</p>
                                <i>2020-01-01</i>
                                <span>1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务......</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="news-list-img"><img src="/homes/mobile/image/news/img_1.png" alt=""></div>
                        <a href="{{ route('mobile.newsContent') }}">
                            <div class="news-list-con">
                                <p>工资，下面6种不得在企业工资，下面6种不得在企业</p>
                                <i>2020-01-01</i>
                                <span>1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务1、企业对实际发放的工资薪金，没有依法履行了代扣代缴个人所得税义务......</span>
                            </div>
                        </a>
                    </li>
                </ul>
                <ul class="pagination  pagination-lg">
                    <li><a href="#">&laquo;</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>
            </div>
        </div>
    </div>


@endsection

@section('script')
<script src="/homes/mobile/js/news.js"></script>
<script>
    
</script>
@endsection