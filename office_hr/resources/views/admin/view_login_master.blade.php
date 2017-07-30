<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Neon Admin Panel" />
    <meta name="author" content="" />

    <link rel="icon" href="{{asset('public/admin/assets/images/favicon.ico')}}">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{asset('public/admin/assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin/assets/css/font-icons/entypo/css/entypo.css')}}">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
    <link rel="stylesheet" href="{{asset('public/admin/assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin/assets/css/neon-core.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin/assets/css/neon-theme.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin/assets/css/neon-forms.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin/assets/css/custom.css')}}">

    <script src="{{asset('public/admin/assets/js/jquery-1.11.3.min.js')}}"></script>

    <!--[if lt IE 9]><script src="{{asset('public/admin/assets/js/ie8-responsive-file-warning.js')}}"></script><![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body class="page-body login-page login-form-fall" data-url="http://demo.neontheme.com">


<!-- This is needed when you send requests via Ajax -->
<script type="text/javascript">
    var baseurl = 'http://demo.neontheme.com/';
</script>

<div class="login-container">

    <div class="login-header login-caret">

        <div class="login-content">

            @include('admin.include.view_login_master_logo')

            @yield('login_registration_title')


            <!-- progress bar indicator -->
            <div class="login-progressbar-indicator">
                <h3>0%</h3>
                <span>logging in...</span>
            </div>
        </div>

    </div>

    <div class="login-progressbar">
        <div></div>
    </div>

    @yield('login_registration_body')

</div>


<!-- Bottom scripts (common) -->
<script src="{{asset('public/admin/assets/js/gsap/TweenMax.min.js')}}"></script>
<script src="{{asset('public/admin/assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js')}}"></script>
<script src="{{asset('public/admin/assets/js/bootstrap.js')}}"></script>
<script src="{{asset('public/admin/assets/js/joinable.js')}}"></script>
<script src="{{asset('public/admin/assets/js/resizeable.js')}}"></script>
<script src="{{asset('public/admin/assets/js/neon-api.js')}}"></script>
<script src="{{asset('public/admin/assets/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('public/admin/assets/js/neon-login.js')}}"></script>
<script src="{{asset('public/admin/assets/js/neon-register.js')}}"></script>
<script src="{{asset('public/admin/assets/js/jquery.inputmask.bundle.js')}}"></script>


<!-- JavaScripts initializations and stuff -->
<script src="{{asset('public/admin/assets/js/neon-custom.js')}}"></script>


<!-- Demo Settings -->
<script src="{{asset('public/admin/assets/js/neon-demo.js')}}"></script>

</body>
</html>