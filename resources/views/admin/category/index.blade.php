@extends('layouts.admin')

@section('content')
    <body>
    <div class="x-nav">
              <span class="layui-breadcrumb">
                <a href="javascript:void(0);">首页</a>
                <a href="javascript:void(0);">分类管理</a>
                <a>
                  <cite>分类列表</cite></a>
              </span>
        <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right" onclick="location.reload()" title="刷新">
            <i class="layui-icon layui-icon-refresh" style="line-height:30px"></i></a>
    </div>
    <div class="layui-fluid">
        <div class="layui-row layui-col-space15">
            <div class="layui-col-md12">
                <div class="layui-card">
                    <div class="layui-card-body">
                        <a onclick="xadmin.open('分类添加','{{ route('admin.category.add') }}',400,500)" class="layui-btn">添加分类</a>
                    </div>
                    <div class="layui-card-body layui-table-body layui-table-main">
                        <table class="layui-table layui-form" id="tree-table"></table>
                    </div>
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
                data: {!! $info !!},
                icon_key: 'title',
                is_checkbox: false,
                is_cache: false,
                end: function (e) {
                    form.render();
                },
                cols: [
                    {
                        title: 'ID',
                        width: '100px',
                        align: 'center',
                        template: function (item) {
                            return '<span style="color:blue;">' + item.id + '</span>';
                        }
                    },

                    {
                        key: 'title',
                        title: '名称',
                        width: '150px',
                        template: function (item) {
                            if (item.level == 0) {
                                return '<span style="color:#FF5722;">' + item.name + '</span>';
                            } else if (item.level == 1) {
                                return '<span style="color:blue;">' + item.name + '</span>';
                            } else if (item.level == 2) {
                                return '<span style="color:green;">' + item.name + '</span>';
                            } else {
                                return '<span style="color:#000;">' + item.name + '</span>';
                            }
                        }
                    },
                    {
                        title: '封面图',
                        align: 'center',
                        template: function (item) {
                            var html = '';
                            if (item.cover != null) {
                                var html = '<img style="width:100px;height:70px;" src="'+item.cover+'" alt="">';
                            } else {
                                var html = '<img style="width:100px;height:70px;" src="/admin/images/avatar.jpg" alt="">';
                            }
                            return html;
                        }
                    },
                    {
                        title: '类型',
                        align: 'center',
                        template: function (item) {
                            if (item.state == 1) {
                                var html = '<span class="layui-badge layui-bg-blue">' + '显示' + '</span>'
                            } else if (item.types == 0){
                                var html = '<span class="layui-badge layui-bg-danger">' + '隐藏' + '</span>'
                            } else {
                                var html = '<span class="layui-badge layui-bg-orange">' + '未知状态' + '</span>'
                            }

                            return html;
                        }
                    },
                    {
                        title: '排序',
                        width: '100px',
                        align: 'center',
                        template: function (item) {
                            return "<input style=\"color:blue;\" name='sort' value="+ item.sort +" class='_sort layui-input' />";
                        }
                    },
                    {
                        title: '操作',
                        align: 'center',
                        width: '100px',
                        template: function (item) {
                            var html = '<a href="{{ route('admin.category.edit') }}?id=' + item.id + '" class="layui-btn layui-btn-xs">编辑</a>';
                            html += '<button class="layui-btn layui-btn-danger layui-btn-xs" type="button" onclick="del(' + item.id + ')">删除 </button>';
                            return html;
                        }
                    },
                ]
            });


            // 排序事件
            $("._sort").change (function () {
                var sort = $(this).val();
                var id = $(this).parent().siblings('td').children('span').eq(1).html();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                });
                $.post("{{ route('admin.category.sortChange') }}", {id: id, sort: sort},
                    function (data) {
                        if (data.code === 0) {
                            layer.msg('操作成功', {
                                offset: '15px'
                                , icon: 1
                                , time: 1000
                            }, function () {
                                location.reload();
                            });
                        } else {
                            layer.msg(data.msg, {
                                offset: '15px'
                                , icon: 2
                                , time: 2000
                            });
                        }
                    });
            })

        });


        // 删除分类
        function del(id) {
            layer.confirm('你确定要删除这个分类吗？', {
                title: '删除确认',
                btn: ['确定', '取消'] //按钮
            }, function () {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                });
                var load = layer.load();
                $.post("{{ route('admin.category.delete') }}", {id: id},
                    function (data) {
                        layer.close(load);
                        if (data.code === 0) {
                            layer.msg('操作成功', {
                                offset: '15px'
                                , icon: 1
                                , time: 1000
                            }, function () {
                                location.href = '{{ route('admin.category.index') }}';
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
