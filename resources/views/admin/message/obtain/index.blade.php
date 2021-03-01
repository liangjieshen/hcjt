@extends('layouts.admin')

@section('content')
    <body>
    <div class="x-nav">
          <span class="layui-breadcrumb">
            <a href="javascript:void(0);">首页</a>
            <a href="javascript:void(0);">留言管理</a>
            <a>
              <cite>获取方案列表</cite></a>
          </span>
        <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right" onclick="location.reload()" title="刷新">
            <i class="layui-icon layui-icon-refresh" style="line-height:30px"></i></a>
    </div>
    <div class="layui-fluid">
        <div class="layui-row layui-col-space15">
            <div class="layui-col-md12">
                <div class="layui-card">
                    <div class="layui-card-body">
                        <form class="layui-form" method="get" action="{{ route('admin.message.planObtain') }}">
                            <div class="layui-inline layui-show-xs-block">
                                <input type="text" autocomplete="off" class="layui-input" id="times" placeholder="日期搜索...">
                            </div>
                            <div class="layui-inline layui-show-xs-block">
                                <select name="page" class="layui-select" lay-filter="page">
                                    <option value="0">请筛选页面</option>
                                    @foreach($pageList as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="layui-inline">
                                <button class="layui-btn layui-btn-color7"  lay-submit="" lay-filter="sreach"><i class="layui-icon">&#xe615;</i>搜索</button>
                            </div>
                        </form>
                    </div>
                    <div class="layui-card-body layui-table-body layui-table-main">
                        <table class="layui-table layui-form">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>访问页面</th>
                                <th>姓名</th>
                                <th>电话号码</th>
                                <th>方案类型</th>
                                <th>留言内容</th>
                                <th>发布时间</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($list as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->pageType }}</td>
                                    <td>{{ $item->username }}</td>
                                    <td>{{ $item->mobile }}</td>
                                    <td>{{ $item->planType }}</td>
                                    <td>{{ $item->content }}</td>
                                    <td>{{ date('Y-m-d H:i', $item->create_time) }}</td>
                                    <td>
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
                            {{ $list->appends($params)->links() }}
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

        layui.use(['element', 'form', 'layer', 'laydate'], function () {
            var layer = layui.layer;
            var laydate = layui.laydate;

            laydate.render({
                elem: '#times' //指定元素
                ,range: false //true 或 range: '~' 来自定义分割字符
                // ,value: new Date() //参数即为：2018-08-20 20:08:08 的时间戳
                ,trigger: 'click' //采用click弹出
                ,show: false //直接显示
                ,closeStop: '#times' //这里代表的意思是：点击 test1 所在元素阻止关闭事件冒泡。如果不设定，则无法弹出控件
                ,position: 'fixed'
                ,change: function(value, date){ //监听日期被切换
                    lay('#times').html(value);
                }
                ,btns: ['clear', 'now', 'confirm'] // 右下角按钮
                ,theme: 'molv' //自定义背景色主题 - 非常实用
                ,calendar: true //允许显示公历节日
                ,done: function(value, date, endDate){
                    // console.log(value); 得到日期生成的值，如：2017-08-18
                    // console.log(date); 得到日期时间对象：{year: 2017, month: 8, date: 18, hours: 0, minutes: 0, seconds: 0}
                    // console.log(endDate); 得结束的日期时间对象，开启范围选择（range: true）才会返回。对象成员同上。
                    window.location.href = "{{ route('admin.message.planObtain') }}?times="+value;
                }
            });

        });


        // 删除相册
        function changeDelete(id) {

            layer.confirm('是否删除该方案(留言)？',function(index){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                });
                var load = layer.load();
                $.post("{{ route('admin.message.planDelete') }}", {id: id},
                    function (data) {
                        layer.close(load);
                        if (data.code === 0) {
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
