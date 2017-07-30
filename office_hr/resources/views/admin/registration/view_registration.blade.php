@extends('admin.view_login_master')

@section('title')
    Office Hr | Registration
@endsection
@section('login_registration_title')
    <p class="description">Create an account, it's free and takes few moments only!</p>
@endsection
@section('login_registration_body')
    <div class="login-form">

        <div class="login-content">

            <form method="post" role="form" id="form_register">

                <div class="form-register-success">
                    <i class="entypo-check"></i>
                    <h3>You have been successfully registered.</h3>
                    <p>We have emailed you the confirmation link for your account.</p>
                </div>

                <div class="form-steps">

                    <div class="step current" id="step-1">

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="entypo-user"></i>
                                </div>

                                <input type="text" class="form-control" name="name" id="name" placeholder="Full Name" autocomplete="off" />
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="entypo-phone"></i>
                                </div>

                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number" data-mask="phone" autocomplete="off" />
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="entypo-calendar"></i>
                                </div>

                                <input type="text" class="form-control" name="birthdate" id="birthdate" placeholder="Date of Birth (DD/MM/YYYY)" data-mask="date" autocomplete="off" />
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="button" data-step="step-2" class="btn btn-primary btn-block btn-login">
                                <i class="entypo-right-open-mini"></i>
                                Next Step
                            </button>
                        </div>

                        <div class="form-group">
                            Step 1 of 2
                        </div>

                    </div>

                    <div class="step" id="step-2">

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="entypo-user-add"></i>
                                </div>

                                <input type="text" class="form-control" name="username" id="username" placeholder="Username" data-mask="[a-zA-Z0-1\.]+" data-is-regex="true" autocomplete="off" />
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="entypo-mail"></i>
                                </div>

                                <input type="text" class="form-control" name="email" id="email" data-mask="email" placeholder="E-mail" autocomplete="off" />
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="entypo-lock"></i>
                                </div>

                                <input type="password" class="form-control" name="password" id="password" placeholder="Choose Password" autocomplete="off" />
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-block btn-login">
                                <i class="entypo-right-open-mini"></i>
                                Complete Registration
                            </button>
                        </div>

                        <div class="form-group">
                            Step 2 of 2
                        </div>

                    </div>

                </div>

            </form>


            <div class="login-bottom-links">

                <a href="{{url('/')}}" class="link">
                    <i class="entypo-lock"></i>
                    Return to Login Page
                </a>

                <br />

                <a href="#">ToS</a>  - <a href="#">Privacy Policy</a>

            </div>

        </div>

    </div>
@endsection