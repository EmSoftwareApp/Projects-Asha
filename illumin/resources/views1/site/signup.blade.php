<!DOCTYPE html>

<html lang="en" dir="ltr">



<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Signup</title>



    <!-- Prevent the demo from appearing in search engines -->

    <meta name="robots" content="noindex">



    <!-- Perfect Scrollbar -->

    <link type="text/css" href="{{ asset('assets/vendor/perfect-scrollbar.css') }}" rel="stylesheet">



    <!-- App CSS -->

    <link type="text/css" href="{{ asset('assets/css/app.css') }}" rel="stylesheet">

    <link type="text/css" href="{{ asset('assets/css/app.rtl.css') }}" rel="stylesheet">



    <!-- Material Design Icons -->

    <link type="text/css" href="{{ asset('assets/css/vendor-material-icons.css') }}" rel="stylesheet">

    <link type="text/css" href="{{ asset('assets/css/vendor-material-icons.rtl.css') }}" rel="stylesheet">



    <!-- Font Awesome FREE Icons -->

    <link type="text/css" href="{{ asset('assets/css/vendor-fontawesome-free.css') }}" rel="stylesheet">

    <link type="text/css" href="{{ asset('assets/css/vendor-fontawesome-free.rtl.css') }}" rel="stylesheet">



    <!-- ion Range Slider -->

    <link type="text/css" href="{{ asset('assets/css/vendor-ion-rangeslider.css') }}" rel="stylesheet">

    <link type="text/css" href="{{ asset('assets/css/vendor-ion-rangeslider.rtl.css') }}" rel="stylesheet">



    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">

    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">



</head>



<body class="layout-login-centered-boxed">











    <div class="layout-login-centered-boxed__form">

        <div class="d-flex flex-column justify-content-center align-items-center mt-2 mb-4 navbar-light">

            <a href="index.html" class="text-center text-light-gray mb-4">



                <!-- LOGO -->

                <h3>{{ App\Models\tblSystemSettigs::systemname('systemname') }}</h3>



            </a>

        </div>

        <div class="card card-body">

            



            



            <form action="{{ url('/user-signup') }}" method="post" enctype="multipart/form-data">

                {{ csrf_field() }}

                @if(count($errors)>0)

                    @foreach($errors->all() as $error)

                        <p class="alert alert-success">{{$error}}</p>

                    @endforeach

                @endif

                <div class="form-group">

                    <label class="text-label" for="name_2">Name:</label>

                    <div class="input-group input-group-merge">

                        <input id="name_2" name="name" type="text" required="" class="form-control form-control-prepended" placeholder="Enter your Name">

                        <div class="input-group-prepend">

                            <div class="input-group-text">

                                <span class="far fa-user"></span>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="form-group">

                    <label class="text-label" for="name_2">Mobile:</label>

                    <div class="input-group input-group-merge">

                        <input name="contact" type="text" required="" class="form-control form-control-prepended" placeholder="Enter your Mobile" maxlength="10" minlength="10" onKeyPress="return isNumberKey(event)">

                        <div class="input-group-prepend">

                            <div class="input-group-text">

                                <span class="fa fa-mobile-alt"></span>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="form-group">

                    <label class="text-label" for="email_2">Email Address:</label>

                    <div class="input-group input-group-merge">

                        <input name="email" type="email" required="" class="form-control form-control-prepended" placeholder="Enter your Email Address">

                        <div class="input-group-prepend">

                            <div class="input-group-text">

                                <span class="far fa-envelope"></span>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="form-group">

                   <label class="text-label" for="password_2">Password:<span style="text-transform:lowercase;">(minimum 6 characters</span>)</label>

                    <div class="input-group input-group-merge">

                        <input name="password" type="password" required="" class="form-control form-control-prepended" placeholder="Enter your password(min - 6 characters)" minlength="6">

                        <div class="input-group-prepend">

                            <div class="input-group-text">

                                <span class="fa fa-lock"></span>

                            </div>

                        </div>

                    </div>

                </div>



                <input type="hidden" name="year" value="<?php echo date('Y'); ?>">

                <input type="hidden" name="type" value="3">

                <input type="hidden" name="instid" value="{{ App\Models\tblBasicSettings::activeinst() }}">



                <div class="form-group mb-2 text-center">

                    <div class="custom-control custom-checkbox">

                        <input type="checkbox" checked="" class="custom-control-input" id="terms" />

                        <label class="custom-control-label" for="terms">I accept <a href="#">Terms and Conditions</a></label>

                    </div>

                </div>

                <div class="form-group text-center">

                    <button class="btn btn-success btn-lg btn-block mb-3" type="submit">Create Account</button>

                </div>

                <div class="text-center">

                    <span>Have an account?</span> <a class="text-body text-underline" href="{{ url('/login') }}"> Login</a>

                </div>

            </form>



            <div class="page-separator">

                <div class="page-separator__text">or</div>

            </div>



            <a href="" class="btn btn-light btn-block">

                <span class="mr-2">

                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 48 48" class="abcRioButtonSvg">

                        <g>

                            <path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"></path>

                            <path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"></path>

                            <path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"></path>

                            <path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"></path>

                            <path fill="none" d="M0 0h48v48H0z"></path>

                        </g>

                    </svg>

                </span>

                Continue with Google

            </a>

        </div>

    </div>





    <!-- jQuery -->

    <script src="{{ asset('assets/vendor/jquery.min.js') }}"></script>



    <!-- Bootstrap -->

    <script src="{{ asset('assets/vendor/popper.min.js') }}"></script>

    <script src="{{ asset('assets/vendor/bootstrap.min.js') }}"></script>



    <!-- Perfect Scrollbar -->

    <script src="{{ asset('assets/vendor/perfect-scrollbar.min.js') }}"></script>



    <!-- DOM Factory -->

    <script src="{{ asset('assets/vendor/dom-factory.js') }}"></script>



    <!-- MDK -->

    <script src="{{ asset('assets/vendor/material-design-kit.js') }}"></script>



    <!-- Range Slider -->

    <script src="{{ asset('assets/vendor/ion.rangeSlider.min.js') }}"></script>

    <script src="{{ asset('assets/js/ion-rangeslider.js') }}"></script>



    <!-- App -->

    <script src="{{ asset('assets/js/toggle-check-all.js') }}"></script>

    <script src="{{ asset('assets/js/check-selected-row.js') }}"></script>

    <script src="{{ asset('assets/js/dropdown.js') }}"></script>

    <script src="{{ asset('assets/js/sidebar-mini.js') }}"></script>

    <script src="{{ asset('assets/js/app.js') }}"></script>



    <!-- App Settings (safe to remove) -->

    <script src="{{ asset('assets/js/app-settings.js') }}"></script>



    <script type="text/javascript">

        function isNumberKey(evt)

        {

            var charCode = (evt.which) ? evt.which : event.keyCode

            if (charCode > 31 && (charCode < 48 || charCode > 57))

               return false;



            return true;

        }

    </script>





</body>



</html>