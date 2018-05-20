<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>FullyCMS | Log in</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="{!! url('backend/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{!! url('backend/css/AdminLTE.min.css') !!}" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="{!! url('backend/plugins/iCheck/square/blue.css') !!}" rel="stylesheet" type="text/css" />
    {!! HTML::style("assets/css/github-right.css") !!}
    
</head>
<body class="login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html"><b>Moon CMS</a>
    </div><!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Connecte Toi</p>
            {!! Form::open(array()) !!}

            @if ($errors->has('login'))
                <div class="alert alert-danger">
                    <a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>{!! $errors->first('login', ':message') !!}
                </div>
            @endif

            <div class="form-group has-feedback">
                <input type="text" class="form-control" name="email" placeholder="Email"/>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" name="password" placeholder="Password"/>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox"> Se Rappeler de Moi
                        </label>
                    </div>
                </div><!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Se Connecter</button>
                </div><!-- /.col -->
            </div>
        {!! Form::close() !!}

        <div class="social-auth-links text-center">
            <!--<p>- OR -</p>
            <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>
            <a href="#" class="btn btn-block btn-social btn-google-plus btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>
        </div>

        <a href="#">I forgot my password</a><br>
        <a href="#" class="text-center">Register a new membership</a>-->

    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->

<!-- jQuery 2.1.3 -->
<script src="{!! url('backend/plugins/jQuery/jQuery-2.1.3.min.js') !!}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{!! url('backend/bootstrap/js/bootstrap.min.js') !!}" type="text/javascript"></script>
<!-- iCheck -->
<script src="{!! url('backend/plugins/iCheck/icheck.min.js') !!}" type="text/javascript"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>