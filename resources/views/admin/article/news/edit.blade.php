@extends('layouts.admin')

@section('content')
    <body>
        <div class="layui-fluid">
            <div class="layui-row">
                <form class="layui-form" action="" style="width: 800px;">

                    <!-- id -->
                    <input type="hidden" name="id" value="{{ $list->id }}">

                    <div class="layui-form-item">
                        <label for="" class="layui-form-label">新闻封面图片</label>
                        <div class="layui-input-block">
                            <div class="layui-upload">
                                <button type="button" class="layui-btn" id="uploadPic"><i class="layui-icon">&#xe67c;</i>图片上传</button>
                                <div class="layui-upload-list" >
                                    <ul id="layui-upload-box" class="layui-clear">
                                        @if(isset($article->thumb))
                                            <li>
                                                <img style="width:240px;" src="{{ $article->thumb }}" />
                                                <p class="x-red"><span class="x-red">*</span>上次成功</p>
                                            </li>
                                        @else
                                            <li>
                                                <img style="width:240px;" src="{{ $list->cover }}" />
                                            </li>
                                        @endif
                                    </ul>
                                    <input type="hidden" name="cover" id="thumb" value="{{ $article->thumb??'' }}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="layui-form-item" style="width: 500px;">
                        <label class="layui-form-label">所属分类</label>
                        <div class="layui-input-block">
                            {!! $categoryLists !!}
                        </div>
                    </div>

                    <div class="layui-form-item article_radio">

                    </div>

                    <div class="layui-form-item" style="width: 500px;">
                        <label class="layui-form-label">新闻标题</label>
                        <div class="layui-input-block">
                            <input type="text" name="title" required lay-verify="required|title" placeholder="请输入新闻标题"
                                   autocomplete="off" class="layui-input" value="{{ $list->title }}">
                        </div>
                    </div>

                    <div class="layui-form-item" style="width: 500px;">
                        <label class="layui-form-label">浏览量</label>
                        <div class="layui-input-block">
                            <input type="text" name="look" required lay-verify="required|look"
                                   autocomplete="off" class="layui-input" value="{{ $list->look }}">
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label">是否显示</label>
                        <div class="layui-input-block">
                            <input type="checkbox" name="state" value="1" lay-skin="switch" lay-text="显示|隐藏" @if($list->state == \App\Http\Models\NewsList::STATE_YES) checked @endif>
                        </div>
                    </div>

                    <div class="layui-form-item" style="width: 500px;">
                        <label class="layui-form-label">排序(最多4位数)</label>
                        <div class="layui-input-block">
                            <input type="number" name="sort" required lay-verify="required|sort"
                                   autocomplete="off" class="layui-input" value="{{ $list->sort }}">
                        </div>
                    </div>

                    
                    <div class="layui-form-item">
                        <label class="layui-form-label">博客内容</label>
                        <div class="layui-input-block">
                            <textarea id="content" name="content" style="display: none;">{{ $list->content }}</textarea>
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <button class="layui-btn" lay-submit lay-filter="formDemo" type="button">立即提交</button>
                            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
@endsection

@section('script')

    <script>

        layui.use(['element', 'form', 'upload', 'layedit', 'layer'], function () {
            var element = layui.element;
            var form = layui.form;
            var layer = layui.layer;
            var upload = layui.upload;
            var layedit = layui.layedit;

            // 封面上传
            var uploadInst = upload.render({
                elem: '#uploadPic'
                ,url: '{{ route("admin.upload") }}'
                ,multiple: false
                ,data:{"_token":"{{ csrf_token() }}"}
                ,before: function(obj){
                    //预读本地文件示例，不支持ie8
                    // obj.preview(function(index, file, result){
                    //     $('#layui-upload-box').append('<li><img src="'+result+'" /><p>待上传</p></li>')
                    // });
                    obj.preview(function(index, file, result){
                        $('#layui-upload-box').html('<li><img style="width:240px;" src="'+result+'" /><p class="x-red">上传中</p></li>')
                    });

                }
                ,done: function(res){
                    //如果上传失败
                    if(res.code == 0){
                        $("#thumb").val(res.url);
                        $('#layui-upload-box li p').text('上传成功');
                        return layer.msg(res.msg);
                    }
                    layer.msg(res.msg, {
                        offset: '15px'
                        , icon: 2
                        , time: 2000
                    });
                }
            });

            layedit.set({
                uploadImage: {
                    url: '{{ route("admin.LayEdit") }}' //接口url
                    ,type: 'post' //默认post
                },
            });
            var content = layedit.build('content', {
                tool: [
                    'strong' //加粗
                    ,'italic' //斜体
                    ,'underline' //下划线
                    ,'del' //删除线
                    ,'|' //分割线
                    ,'left' //左对齐
                    ,'center' //居中对齐
                    ,'right' //右对齐
                    ,'link' //超链接
                    ,'unlink' //清除链接
                    ,'face' //表情
                    ,'image' //插入图片
                ]
            }); //建立编辑器

            //监听提交
            form.on('submit(formDemo)', function (data) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                });
                var load = layer.load();
                data.field['content'] = layedit.getContent(content);
                $.post("{{ route('admin.article.newsSave') }}", data.field,
                    function (data) {
                        layer.close(load);
                        if (data.code === 0) {
                            layer.msg(data.msg, {
                                offset: '15px'
                                , icon: 1
                                , time: 1000
                            }, function () {
                                //关闭当前frame
                                xadmin.close();
                                // 可以对父窗口进行刷新
                                xadmin.father_reload();
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

        });

    </script>
@endsection