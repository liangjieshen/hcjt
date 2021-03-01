<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ env('APP_NAME') }}-后台登录</title>
    <link rel="shortcut icon" href="/logo.png">
    <link rel="stylesheet" href="/admin/login/css/normalize.css">
    <link rel="stylesheet" href="/admin/login/css/login.css">
    <link rel="stylesheet" href="/admin/login/css/sign-up-login.css">
    <link rel="stylesheet" href="https://cdn.bootcss.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/admin/login/css/inputEffect.css" />
    <link rel="stylesheet" href="/admin/login/css/tooltips.css" />
    <link rel="stylesheet" href="/admin/login/css/spop.min.css" />

    <script src="/admin/login/js/jquery.min.js"></script>
    <script src="/admin/login/js/snow.js"></script>
    <script src="/admin/login/js/jquery.pure.tooltips.js"></script>
    <script src="/admin/login/js/spop.min.js"></script>
    <script src="/admin/login/layui/layui.all.js"></script>
</head>
<script type="text/javascript" charset="utf-8">
    (function() {
        if (!String.prototype.trim) {
            (function() {
                // Make sure we trim BOM and NBSP
                var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
                String.prototype.trim = function() {
                    return this.replace(rtrim, '');
                };
            })();
        }

        [].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
            // in case the input is already filled..
            if( inputEl.value.trim() !== '' ) {
                classie.add( inputEl.parentNode, 'input--filled' );
            }

            // events:
            inputEl.addEventListener( 'focus', onInputFocus );
            inputEl.addEventListener( 'blur', onInputBlur );
        } );

        function onInputFocus( ev ) {
            classie.add( ev.target.parentNode, 'input--filled' );
        }

        function onInputBlur( ev ) {
            if( ev.target.value.trim() === '' ) {
                classie.remove( ev.target.parentNode, 'input--filled' );
            }
        }
    })();

    $(function() {
        $('#login #login-password').focus(function() {
            $('.login-owl').addClass('password');
        }).blur(function() {
            $('.login-owl').removeClass('password');
        });
        $('#login #register-password').focus(function() {
            $('.register-owl').addClass('password');
        }).blur(function() {
            $('.register-owl').removeClass('password');
        });
        $('#login #register-repassword').focus(function() {
            $('.register-owl').addClass('password');
        }).blur(function() {
            $('.register-owl').removeClass('password');
        });
        $('#login #forget-password').focus(function() {
            $('.forget-owl').addClass('password');
        }).blur(function() {
            $('.forget-owl').removeClass('password');
        });
    });
</script>
<body>
<!-- 雪花背景 -->
<div class="snow-container"></div>
<!-- 登录控件 -->
<div id="login">
    <input id="tab-1" type="radio" name="tab" class="sign-in hidden" checked />
    <input id="tab-2" type="radio" name="tab" class="sign-up hidden" />
    <input id="tab-3" type="radio" name="tab" class="sign-out hidden" />
    <div class="wrapper">
        <!-- 登录页面 -->
        <div class="login sign-in-htm">
            <form class="container offset1 loginform layui-form" id="_from">
                <!-- 猫头鹰控件 -->
                <div id="owl-login" class="login-owl">
                    <div class="hand"></div>
                    <div class="hand hand-r"></div>
                    <div class="arms">
                        <div class="arm"></div>
                        <div class="arm arm-r"></div>
                    </div>
                </div>
                <div class="pad input-container">
                    <section class="content">
							<span class="input input--hideo">
								<input class="input__field input__field--hideo" name="email" type="text" autocomplete="off" placeholder="请输入用户名" tabindex="1" lay-verify="required" />
								<label class="input__label input__label--hideo" for="login-username">
									<i class="fa fa-fw fa-user icon icon--hideo"></i>
									<span class="input__label-content input__label-content--hideo"></span>
								</label>
							</span>
                            <span class="input input--hideo">
								<input class="input__field input__field--hideo" name="password" type="password" placeholder="请输入密码" tabindex="1" lay-verify="required" />
								<label class="input__label input__label--hideo" for="login-password">
									<i class="fa fa-fw fa-lock icon icon--hideo"></i>
									<span class="input__label-content input__label-content--hideo"></span>
								</label>
							</span>
                            <span class="input input--hideo">
								<input class="input__field input__field--hideo" type="text" placeholder="请输入验证码" tabindex="1" name="captcha" lay-verify="required" />
								<label class="input__label input__label--hideo" for="login-code">
									<i class="fa fa-fw fa-file-code-o icon icon--hideo"></i>
									<span class="input__label-content input__label-content--hideo"></span>
								</label>
                                <div id="code_box">
                                    <img src="{{ captcha_src('math') }}" onclick="this.src='/captcha/math?'+Math.random()" id="captcha_img">
                                </div>
							</span>
                    </section>
                </div>
                <div class="form-actions">
                    <input class="btn btn-primary" lay-submit lay-filter="LAY-user-login-submit" type="button" value="登录" style="color:white;"/>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
<script type="text/javascript" charset="utf-8">

    $(function  () {
        layui.use('form', function(){
            var form = layui.form;

            //监听提交
            form.on('submit(LAY-user-login-submit)', function (data) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                });
                $.post("{{ route('admin.login.post.white') }}", data.field,
                    function (data) {
                        if (data.code === 0) {
                            layer.msg('登入成功', {
                                offset: '15px'
                                , icon: 1
                                , time: 1000
                            }, function () {
                                location.href = "{{ route('admin.index.white') }}";
                            });

                        } else {
                            layer.msg(data.msg, {
                                offset: '15px'
                                , icon: 2
                                , time: 2000
                            });
                            $('#captcha_img').attr('src', '/captcha/math?' + Math.random());
                        }
                    });
            });

        });
    })

</script>
