<!DOCTYPE html>
<html lang="en">

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
                                    <a href="index.html" class="logo logo-admin"><img style="width: 50px; height: 50px" src="assets/images/turdako.png" alt="
                                        height="55" alt="logo" class="auth-logo"></a>
                                </div><!--end auth-logo-box-->

                                <div class="text-center auth-logo-text">
                                    <h4 class="mt-0 mb-3 mt-5">Admission Chatbot</h4>
                                    <p class="text-muted mb-0">Get your admission account now.</p>
                                </div> <!--end auth-logo-text-->


                                <form class="form-horizontal auth-form my-4" action="{{ route('student.register') }}"
                                    method="POST">
                                    @csrf
                                    <div class="error-messages">
                                        @if (session('error'))
                                            <div class="alert alert-danger">{{ session('error') }}</div>
                                        @endif
                                        @error('nacte_no')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        @error('useremail')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        @error('password')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="useremail">Email</label>
                                        <div class="input-group mb-3">
                                            <span class="auth-form-icon">
                                                <i data-feather="mail" class="icon-xs"></i>
                                            </span>
                                            <input type="email" class="form-control" name="useremail" id="useremail"
                                                placeholder="Enter Email" required> <br>

                                        </div>

                                    </div><!--end form-group-->


                                    <div class="form-group">
                                        <label for="username">Nact No</label>
                                        <div class="input-group mb-3">
                                            <span class="auth-form-icon">
                                                <i data-feather="user" class="icon-xs"></i>
                                            </span>
                                            <input type="text" class="form-control" name="nacte_no" id="username"
                                                placeholder="Enter username" required> <br>

                                        </div>

                                    </div><!--end form-group-->

                              

                                    <div class="form-group">
                                        <label for="userpassword">Password</label>
                                        <div class="input-group mb-3">
                                            <span class="auth-form-icon">
                                                <i data-feather="lock" class="icon-xs"></i>
                                            </span>
                                            <input type="password" class="form-control" name="password"
                                                id="userpassword" placeholder="Enter password" required> <br>

                                        </div>

                                    </div><!--end form-group-->

                                    <div class="form-group">
                                        <label for="conf_password">Confirm Password</label>
                                        <div class="input-group mb-3">
                                            <span class="auth-form-icon">
                                                <i data-feather="key" class="icon-xs"></i>
                                            </span>
                                            <input type="password" class="form-control" name="password_confirmation"
                                                id="conf_password" placeholder="Enter Confirm Password" required>

                                        </div>


                                    </div><!--end form-group-->

                                    <div class="form-group row mt-4">
                                        <div class="col-sm-12">
                                            <div class="custom-control custom-switch switch-success">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="customSwitchSuccess">
                                                <label class="custom-control-label text-muted"
                                                    for="customSwitchSuccess">By registering you agree to the Admission
                                                    chatbot <a href="#" class="text-primary">Terms of
                                                        Use</a></label>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end form-group-->

                                    <div class="form-group mb-0 row">
                                        <div class="col-12 mt-2">
                                            <button
                                                class="btn btn-gradient-primary btn-round btn-block waves-effect waves-light"
                                                type="submit" name="submit">Register <i
                                                    class="fas fa-sign-in-alt ml-1"></i></button>
                                        </div><!--end col-->
                                    </div> <!--end form-group-->
                                </form><!--end form-->
                                <!-- Success Message (Displayed after form submission) -->
                                @if (session('success'))
                                    <div class="alert alert-success mt-3">{{ session('success') }}</div>
                                @endif
                            </div><!--end /div-->

                            <div class="m-3 text-center text-muted">
                                <p class="">Already have an account ? <a href="{{ route('login.students') }}"
                                        class="text-primary ml-2">Log in</a></p>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end auth-card-->
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


</html>
