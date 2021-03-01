@extends('layouts.admin')

@section('content')
<body>
    <div class="x-nav">
        <span class="layui-breadcrumb">
            <a href="">首页</a>
            <a href="">演示</a>
            <a>
                <cite>菜单管理</cite></a>
        </span>
        <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right" onclick="location.reload()" title="刷新">
            <i class="layui-icon layui-icon-refresh" style="line-height:30px"></i>
        </a>
    </div>
    <div class="layui-fluid">
        <div class="layui-row layui-col-space15">
            <div class="layui-col-md12">
                <div class="layui-card">
                    <div class="layui-card-header">
                        <a href="{{ route('admin.menu.create') }}" class="layui-btn">添加菜单</a>
                    </div>
                    
                    <table class="layui-table layui-form" id="tree-table"></table>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection

@section('script')
    <script src="/admin/lib/layui/ext/treeTable.js"></script>
    <script>
        layui.use(['layer', 'form'], function () {
            var layer = layui.layer;
            var form = layui.form;
            var treeTable = layui.treeTable;

            var re = treeTable.render({
                elem: '#tree-table',
                data: {!! $menu !!},
                icon_key: 'title',
                is_checkbox: false,
                is_cache: false,
                end: function (e) {
                    form.render();
                },
                cols: [
                    {
                        key: 'title',
                        title: '名称',
                        width: '150px',
                        template: function (item) {
                            if (item.level == 0) {
                                return '<span style="color:#FF5722;">' + item.title + '</span>';
                            } else if (item.level == 1) {
                                return '<span style="color:green;">' + item.title + '</span>';
                            } else if (item.level == 2) {
                                return '<span style="color:#aaa;">' + item.title + '</span>';
                            }
                        }
                    },
                    {
                        title: '路由',
                        align: 'left',
                        template: function (item) {
                            if (item.route != null) {
                                return item.route;
                            } else {
                                return '';
                            }
                        }
                    },
                    {
                        title: '可见角色',
                        align: 'left',
                        template: function (item) {
                            var html = '';
                            $.each(item.roles, function (i, n) {
                                html += '<span class="layui-badge layui-bg-blue" style="margin-right: 5px;margin-bottom: 5px;">' + n + '</span>';
                            });
                            return html;
                        }
                    },
                    {
                        key: 'created_at',
                        title: '创建时间',
                        width: '100px',
                        align: 'center'
                    },
                    {
                        title: '操作',
                        align: 'center',
                        width: '100px',
                        template: function (item) {
                            var html = '<a href="{{ route('admin.menu.edit') }}?menu_id=' + item.id + '" class="layui-btn layui-btn-xs">编辑</a>';
                            if (item.id != 1 && item.pid != 1) {
                                html += '<button class="layui-btn layui-btn-danger layui-btn-xs" type="button" onclick="del(' + item.id + ')">删除 </button>';
                            }
                            return html;
                        }
                    },
                ]
            });

        });

        function del(id) {
            layer.confirm('你确定要删除这个菜单吗？', {
                title: '删除确认',
                btn: ['确定', '取消'] //按钮
            }, function () {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                });
                var load = layer.load();
                $.post("{{ route('admin.menu.delete') }}", {id: id},
                    function (data) {
                        layer.close(load);
                        if (data.code === 0) {
                            layer.msg('操作成功', {
                                offset: '15px'
                                , icon: 1
                                , time: 1000
                            }, function () {
                                location.href = '{{ route('admin.menu.index') }}';
                            });
                        } else {
                            layer.msg(data.msg, {
                                offset: '15px'
                                , icon: 2
                                , time: 2000
                            });
                        }
                    });
            });
        }
    </script>
@endsection