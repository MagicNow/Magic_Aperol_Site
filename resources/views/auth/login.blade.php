@extends('admin.auth')

@section('htmlheader_title')
    Log in
@endsection

@section('content')
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="#">Admin</a>
        </div><!-- /.login-logo -->

        @if(count($errors) > 0)
           <div class="alert alert-danger">Email e/ou senha inválidos</div>
        @endif

    <div class="login-box-body">
    <!-- <p class="login-box-msg">Sign in to start your session</p> -->
    <form action="{{ url('/admin/login') }}" method="post">
		{{ csrf_field() }}
		
        <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="E-mail" name="email"/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="password"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
            </div><!-- /.col -->
        </div>
    </form>

</div><!-- /.login-box-body -->

</div><!-- /.login-box -->

    @include('admin.partials.scripts_auth')
</body>

@endsection
