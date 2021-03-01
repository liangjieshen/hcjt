@extends('layouts.admin')
@section('content')
    <body class="index">
        <!-- 顶部开始 -->
        <div class="container">
            <!--<div class="logo" style="height: 100%;float: left;">-->
            <!--    <img style="height: 100%;" src="/homes/image/logo.png" alt="LOGO">-->
            <!--</div>-->
            <div class="left_open">
                <a><i title="展开左侧栏" class="iconfont">&#xe699;</i></a>
            </div>
            <ul class="layui-nav left fast-add" lay-filter="">
                <!-- <li class="layui-nav-item">
                    <a href="javascript:;">+新增</a>
                    <dl class="layui-nav-child">
                        <dd>
                            <a onclick="xadmin.open('最大化','http://www.baidu.com','','',true)">
                                <i class="iconfont">&#xe6a2;</i>弹出最大化</a></dd>
                        <dd>
                            <a onclick="xadmin.open('弹出自动宽高','http://www.baidu.com')">
                                <i class="iconfont">&#xe6a8;</i>弹出自动宽高</a></dd>
                        <dd>
                            <a onclick="xadmin.open('弹出指定宽高','http://www.baidu.com',500,300)">
                                <i class="iconfont">&#xe6a8;</i>弹出指定宽高</a></dd>
                        <dd>
                            <a onclick="xadmin.add_tab('在tab打开','member-list.blade.php')">
                                <i class="iconfont">&#xe6b8;</i>在tab打开</a></dd>
                        <dd>
                            <a onclick="xadmin.add_tab('在tab打开刷新','member-del.html',true)">
                                <i class="iconfont">&#xe6b8;</i>在tab打开刷新</a></dd>
                    </dl>
                </li> -->
            </ul>
            <ul class="layui-nav right" lay-filter="">
                <li class="layui-nav-item">
                    <a href="javascript:;">{{ session('user')['name'] }}</a>
                    <dl class="layui-nav-child">
                        <!-- 二级菜单 -->
                        <dd>
                            <a onclick="xadmin.open('个人信息', '{{ route('admin.myself.index') }}')">个人信息</a></dd>
                        <dd>
                            <a href="{{ route('admin.modify_pwd.white') }}">修改密码</a></dd>
                        <dd>
                            <a href="javascript:void(0);" onclick="logOut()">退出</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item to-index">
                    <a href="{{ route('index') }}" target="_blank">前台首页</a></li>
            </ul>
        </div>
        <!-- 顶部结束 -->
        <!-- 中部开始 -->
        <!-- 左侧菜单开始 -->
        <div class="left-nav">
            <div id="side-nav">
                <ul id="nav">
                    @foreach($menu_tree as $menu)
                    <li>
                        <a href="javascript:;">
                            <i class="iconfont left-nav-li" lay-tips="{{ $menu['name'] }}">&#xe6b8;</i>
                            <cite>{{ $menu['name'] }}</cite>
                            <i class="iconfont nav_right">&#xe697;</i>
                        </a>
                        <ul class="sub-menu">
                            @if(key_exists('children',$menu))
                                @foreach($menu['children'] as $child)
                                <li>
                                    <a onclick="xadmin.add_tab('{{ $child['name'] }}','{{ route($child['route']) }}')">
                                        <i class="iconfont">&#xe6a7;</i>
                                        <cite>{{ $child['name'] }}</cite>
                                    </a>
                                </li>
                                @endforeach
                            @endif
                        </ul>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!-- 左侧菜单结束 -->
        <!-- 右侧主体开始 -->
        <div class="page-content">
            <div class="layui-tab tab" lay-filter="xbs_tab" lay-allowclose="false">
                <ul class="layui-tab-title">
                    <li class="home">
                        <a href="{{ route('admin.index.white') }}"><i class="layui-icon">&#xe68e;</i>我的桌面</a></li></ul>
                <div class="layui-unselect layui-form-select layui-form-selected" id="tab_right">
                    <dl>
                        <dd data-type="this">关闭当前</dd>
                        <dd data-type="other">关闭其它</dd>
                        <dd data-type="all">关闭全部</dd></dl>
                </div>
                <div class="layui-tab-content">
                    <div class="layui-tab-item layui-show">
                        <iframe src="{{ route('admin.welcome') }}" frameborder="0" scrolling="yes" class="x-iframe"></iframe>
                    </div>
                </div>
                <div id="tab_show"></div>
            </div>
        </div>
        <div class="page-content-bg"></div>
        <style id="theme_style"></style>
        <!-- 右侧主体结束 -->
        <!-- 中部结束 -->
    </body>
@endsection
@section('script')
    <script>
        function logOut() {
            layer.confirm('是否退出后台？',function(index){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                });
                var load = layer.load();
                $.post("{{ route('admin.logout.white') }}",
                    function (data) {
                        layer.close(load);
                        if (data.code === 2001) {
                            layer.msg(data.msg, {
                                offset: '15px'
                                , icon: 1
                                , time: 1000
                            }, function () {
                                window.location.reload();
                            });

                        } else {
                            layer.msg(data.msg, {
                                offset: '15px'
                                , icon: 2
                                , time: 2000
                            });
                        }
                    }
                );
            });
        }
    </script>
@endsection
