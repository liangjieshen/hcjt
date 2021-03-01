@extends('layouts.admin')

@section('content')
    <a href="{{ route('admin.category.index') }}" class="layui-btn layui-btn-primary layui-btn-sm">返回</a>
    <hr>
    <form class="layui-form" action="" style="width: 900px;">
        <!-- id -->
        <input type="hidden" name="id" value="{{ $list->id }}">

        <div class="layui-form-item" style="width: 500px;">
            <label class="layui-form-label">分类名称</label>
            <div class="layui-input-block">
                <input type="text" name="name" required lay-verify="required" placeholder="请输入分类名称"
                       autocomplete="off" class="layui-input" value="{{ $list->name }}">
            </div>
        </div>

        <div class="layui-form-item">
            <label for="" class="layui-form-label">分类图片</label>
            <div class="layui-input-block">
                <div class="layui-upload">
                    <button type="button" class="layui-btn" id="uploadPic"><i class="layui-icon">&#xe67c;</i>图片上传</button>
                    <div class="layui-upload-list" >
                        <ul id="layui-upload-box" class="layui-clear">
                            @if(isset($article->thumb))
                                <li><img src="{{ $article->thumb }}" /><p>上传成功</p></li>
                            @elseif(empty($list->cover))
                                <img style="width:130px;height:100px;" src="/admin/images/avatar.jpg" />
                            @else
                                <img style="width:130px;height:100px;" src="{{ $list->cover }}" />
                            @endif
                        </ul>
                        <input type="hidden" name="cover" id="thumb" value="{{ $article->thumb??'' }}">
                    </div>
                </div>
            </div>
        </div>

        <div class="layui-form-item" style="width: 380px;">
            <label class="layui-form-label">分类排序</label>
            <div class="layui-input-block">
                <input type="number" name="sort" required lay-verify="required" placeholder="请输入分类名称"
                       autocomplete="off" class="layui-input" value="{{ $list->sort }}">
            </div>
        </div>

        <div class="layui-form-item">
            <div class="layui-input-block">
                <button class="layui-btn" lay-submit lay-filter="formDemo" type="button">立即提交</button>
                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
            </div>
        </div>
    </form>
@endsection

@section('script')
    <script>
        layui.use(['form', 'upload', 'layer'], function () {
            var form = layui.form;
            var upload = layui.upload;
            var layer = layui.layer;

            // 图片上传
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
                        $('#layui-upload-box').html('<li><img style="width: 300px;height:250px;" src="'+result+'" /><p>上传中</p></li>')
                    });

                }
                ,done: function(res){
                    //如果上传失败
                    if(res.code == 0){
                        $("#thumb").val(res.url);
                        $('#layui-upload-box li p').text('上传成功');
                        return layer.msg(res.msg);
                    }
                    return layer.msg(res.msg);
                }
            });

            //监听提交
            form.on('submit(formDemo)', function (data) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                });
                var load = layer.load();
                $.post("{{ route('admin.category.save') }}", data.field,
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
        });
    </script>
@endsection
