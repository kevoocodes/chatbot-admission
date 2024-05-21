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
    <link rel="shortcut icon" href="{{ asset('assets/images/turdako.png') }}">

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
                                    <a href="index.html" class="logo logo-admin"><img style="width: 50px; height: 50px"
                                            src="{{ asset('assets/images/turdako.png') }}"
                                            alt="
                                        height="55" alt="logo"
                                            class="auth-logo"></a>
                                </div><!--end auth-logo-box-->

                                <div class="text-center auth-logo-text">
                                    <h4 class="mt-0 mb-3 mt-5">Admission Chatbot</h4>
                                    <p class="text-muted mb-0">Get your admission account now.</p>
                                </div> <!--end auth-logo-text-->


                                <form class="form-horizontal auth-form my-4" action="{{ route('student.register') }}"
                                    method="POST">
                                    @csrf
                                    <!-- Display validation errors -->
                                    @if (!empty($errors))
                                       
                                            <ul>
                                                @foreach ($errors as $error)
                                                    <li class="text-danger">{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                       
                                    @endif

                                    <!-- Display $nacteUser error -->
                                    @if (!empty($error))
                                        <p class="alert alert-danger">
                                            {{ $error }}
                                        </p>
                                    @endif

                                    <!-- Your existing HTML code -->


                                    <div class="form-group">
                                        <label for="username">Nact No</label>
                                        <div class="input-group mb-3">
                                            <span class="auth-form-icon">
                                                <i data-feather="user" class="icon-xs"></i>
                                            </span>
                                            <input type="text" class="form-control" name="nacteNumber" id="username"
                                                placeholder="Enter username" > <br>

                                        </div>

                                    </div><!--end form-group-->


                                    <div class="form-group">
                                        <label for="useremail">Email</label>
                                        <div class="input-group mb-3">
                                            <span class="auth-form-icon">
                                                <i data-feather="mail" class="icon-xs"></i>
                                            </span>
                                            <input type="email" class="form-control" name="email" id="useremail"
                                                placeholder="Enter Email" > <br>

                                        </div>


                                    </div><!--end form-group-->

                                    <div class="form-group">
                                        <label for="userpassword">Password</label>
                                        <div class="input-group mb-3">
                                            <span class="auth-form-icon">
                                                <i data-feather="lock" class="icon-xs"></i>
                                            </span>
                                            <input type="password" class="form-control" name="password"
                                                id="userpassword" placeholder="Enter password" > <br>

                                        </div>

                                    </div><!--end form-group-->

                                    <div class="form-group">
                                        <label for="conf_password">Confirm Password</label>
                                        <div class="input-group mb-3">
                                            <span class="auth-form-icon">
                                                <i data-feather="key" class="icon-xs"></i>
                                            </span>
                                            <input type="password" class="form-control" name="password_confirmation"
                                                id="conf_password" placeholder="Enter Confirm Password" >

                                        </div>


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
