<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from mannatthemes.com/metrica_mvc5/default/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Jan 2024 12:51:38 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Chatbot Admission</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- App css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/jquery-ui.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/metisMenu.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

</head>

<body class="account-body accountbg">

    <!-- Log In page -->
    <div class="container">
        <div class="row vh-100 ">
            <div class="col-12 align-self-center">
                <div class="auth-page">
                    <div class="card auth-card shadow-lg">
                        <div class="card-body">
                            <div class="px-3">
                                <div class="auth-logo-box">
                                    <a  href="index.html" class="logo logo-admin"><img style="width: 50px; height: 50px" src="{{ asset('assets/images/turdako.png')}}" alt="
                                            height="55" alt="logo" class="auth-logo"></a>
                                </div><!--end auth-logo-box-->

                                <div class="text-center auth-logo-text">
                                    <h4 class="mt-0 mb-3 mt-5">Admission Chatbot</h4>
                                    <p class="text-muted mb-0">Sign in to continue to Admission.</p>

                                </div> <!--end auth-logo-text-->
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif


                                <form method="POST" class="form-horizontal auth-form my-4"
                                    action="{{ route('authenticate') }}">
                                    @csrf

                                    <div class="form-group">
                                        <label for="username">Necta No</label>
                                        <div class="input-group mb-3">
                                            <span class="auth-form-icon">
                                                <i data-feather="user" class="icon-xs"></i>
                                            </span>
                                            <input type="text" name="nidaNumber" class="form-control" id="username"
                                                placeholder="Enter Nacte No">
                                        </div>

                                        @if ($errors->has('nidaNumber'))
                                            <span class="text-danger">{{ $errors->first('nidaNumber') }}</span>
                                        @endif
                                    </div><!--end form-group-->

                                    <div class="form-group">
                                        <label for="userpassword">Password</label>
                                        <div class="input-group mb-3">
                                            <span class="auth-form-icon">
                                                <i data-feather="key" class="icon-xs"></i>
                                            </span>
                                            <input type="password" name="password" class="form-control"
                                                id="userpassword" placeholder="Enter password">
                                        </div>
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif


                                    </div><!--end form-group-->

                                    <div class="form-group row mt-4">
                                        <div class="col-sm-6">
                                            <div class="custom-control custom-switch switch-success">
                                                <input type="checkbox" class="custom-control-input" id="customSwitchSuccess" name="remember">
                                                <label class="custom-control-label text-muted" for="customSwitchSuccess">Remember me</label>
                                            </div>
                                            
                                        </div><!--end col-->
                                        <div class="col-sm-6 text-right">
                                            <a href="{{ route('forgot-password.students') }}"
                                                class="text-muted font-13"><i class="dripicons-lock"></i> Forgot
                                                password?</a>
                                        </div><!--end col-->
                                    </div><!--end form-group-->

                                    <div class="form-group mb-0 row">
                                        <div class="col-12 mt-2">
                                            <button name="submit"
                                                class="btn btn-gradient-primary btn-round btn-block waves-effect waves-light"
                                                type="submit">Log In <i class="fas fa-sign-in-alt ml-1"></i></button>
                                        </div><!--end col-->
                                    </div> <!--end form-group-->
                                </form><!--end form-->
                            </div><!--end /div-->

                            <div class="m-3 text-center text-muted">
                                <p class="">Don't have an account ? <a href="{{ route('register.students') }}"
                                        class="text-primary ml-2">Free Register</a></p>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                
                </div><!--end auth-page-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
    <!-- End Log In page -->




    <!-- jQuery  -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/metismenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/waves.js') }}"></script>
    <script src="{{ asset('assets/js/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}"></script>
    <script>
        feather.replace()
    </script>

</body>


<!-- Mirrored from mannatthemes.com/metrica_mvc5/default/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Jan 2024 12:51:38 GMT -->

</html>
