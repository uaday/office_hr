@extends('admin.view_login_master')

@section('title')
    Office Hr | Login
@endsection

@section('login_registration_title')
    <p class="description">Dear user, log in to access the admin area!</p>
@endsection

@section('login_registration_body')
    <div class="login-form">

        <div class="login-content">

            <div class="form-login-error">
                <h3>Invalid login</h3>
                <p>Enter <strong>demo</strong>/<strong>demo</strong> as login and password.</p>
            </div>

            <form method="post" role="form" id="form_login">

                <div class="form-group">

                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="entypo-user"></i>
                        </div>

                        <input type="text" class="form-control" name="username" id="username" placeholder="Username"
                               autocomplete="off"/>
                    </div>

                </div>

                <div class="form-group">

                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="entypo-key"></i>
                        </div>

                        <input type="password" class="form-control" name="password" id="password" placeholder="Password"
                               autocomplete="off"/>
                    </div>

                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block btn-login">
                        <i class="entypo-login"></i>
                        Login In
                    </button>
                </div>

            {{--<!-- Implemented in v1.1.4 -->--}}
            {{--<div class="form-group">--}}
            {{--<em>- or -</em>--}}
            {{--</div>--}}

            {{--<div class="form-group">--}}

            {{--<button type="button" class="btn btn-default btn-lg btn-block btn-icon icon-left facebook-button">--}}
            {{--Login with Facebook--}}
            {{--<i class="entypo-facebook"></i>--}}
            {{--</button>--}}

            {{--</div>--}}



            <!-- You can also use other social network buttons
                <div class="form-group">

                    <button type="button" class="btn btn-default btn-lg btn-block btn-icon icon-left twitter-button">
                        Login with Twitter
                        <i class="entypo-twitter"></i>
                    </button>

                </div>

                <div class="form-group">

                    <button type="button" class="btn btn-default btn-lg btn-block btn-icon icon-left google-button">
                        Login with Google+
                        <i class="entypo-gplus"></i>
                    </button>

                </div>
                 -->
            </form>


            <div class="login-bottom-links">

                <a href="{{url('/registration')}}" class="link">Registration</a> |
                <a href="extra-forgot-password.html" class="link">Forgot your password?</a>

                <br/>

                <a href="#">ToS</a> - <a href="#">Privacy Policy</a>

            </div>

        </div>

    </div>
@endsection