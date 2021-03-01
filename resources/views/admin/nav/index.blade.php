@extends('layouts.admin')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

@section('content')
    <body>
    <div class="x-nav">
          <span class="layui-breadcrumb">
            <a href="javascript:void(0);">首页</a>
            <a href="javascript:void(0);">公共管理</a>
            <a>
              <cite>导航列表</cite></a>
          </span>
        <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right" onclick="location.reload()" title="刷新">
            <i class="layui-icon layui-icon-refresh" style="line-height:30px"></i></a>
    </div>
    <div class="layui-fluid">
        <div class="layui-row layui-col-space15">
            <div class="layui-col-md12">
                <div class="layui-card">
                    <div class="layui-card-header">
                        <button class="layui-btn" onclick="xadmin.open('添加导航','{{ route('admin.nav.add') }}',500,580)"><i class="layui-icon"></i>添加导航</button>
                    </div>
                    <div class="layui-card-body layui-table-body layui-table-main">
                        <table class="layui-table layui-form">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>导航名称</th>
                                <th>导航展示前图标</th>
                                <th>导航展示后图标</th>
                                <th>导航链接</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($list as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>
                                        @if ( isset($item->cover_before) && !empty($item->cover_before) )
                                            <img style="width:100px;height:70px;" class="img_big" title="{{ $item->cover_before }}" src="{{ $item->cover_before }}">
                                            <img alt="" style="display:none;" id="displayImg" src="">
                                        @else
                                            <img style="width:100px;height:70px;" src="/home/images/avatar.jpg" alt="">
                                        @endif
                                    </td>
                                    <td>
                                        @if ( isset($item->cover_after) && !empty($item->cover_after) )
                                            <img style="width:100px;height:70px;" class="img_big" title="{{ $item->cover_after }}" src="{{ $item->cover_after }}">
                                            <img alt="" style="display:none;" id="displayImg" src="">
                                        @else
                                            <img style="width:100px;height:70px;" src="/home/images/avatar.jpg" alt="">
                                        @endif
                                    </td>
                                    <td>{{ $item->url }}</td>
                                    <td>
                                        <button class="layui-btn layui-btn-warm layui-btn-sm"
                                                onclick="xadmin.open('编辑导航','{{ route('admin.nav.edit') }}?id={{ $item->id }}',900,580)">编辑
                                        </button>
                                        <button class="layui-btn layui-btn-danger layui-btn-sm" type="button"
                                                onclick="changeDelete({{ $item->id }})">删除
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="layui-card-body ">
                        <div class="page">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
@endsection

@section('script')
    <script>

        layui.use(['layer'], function () {
            var layer = layui.layer;

            // 图片放大缩小
            $(".img_big").click(function(){
                var url = $(this).attr('title');
                $("#displayImg").attr("src", url);
                layer.open({
                    type: 1,
                    title: false,
                    closeBtn: 0,//隐藏关闭按钮
                    shade: [0.3, '#000'],//黑色背景（0.3代表颜色深度）
                    shadeClose: true,//点击遮罩关闭大图
                    area: ['640' + 'px', '500' + 'px'], //宽高
                    resize:false,//不可拖拽缩放
                    skin: 'myskin',//大图背景色定义类
                    content: "<img style=\"width:640px;height:500px;\" alt=" + name + " title=" + name + " src=" + url + " />"
                });
            });

        });



        // 更改导航状态
        function changeDelete(id) {

            layer.confirm('确认要删除该导航吗?',function(index){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                });
                var load = layer.load();
                $.post("{{ route('admin.nav.delete') }}", {id: id},
                    function (data) {
                        layer.close(load);
                        if (data.code === 0) {
                            layer.msg('操作成功', {
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
