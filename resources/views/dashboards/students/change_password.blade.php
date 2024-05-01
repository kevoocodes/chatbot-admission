@include('layouts/header')
<link href="https://mannatthemes.com/metrica_mvc5/plugins/dropify/css/dropify.min.css" rel="stylesheet">
<link href="https://mannatthemes.com/metrica_mvc5/plugins/filter/magnific-popup.css" rel="stylesheet" type="text/css" />


<!-- leftbar-tab-menu -->
@include('layouts/student_layout/left_navigation')
<!-- end leftbar-tab-menu-->

<!-- Top Bar Start -->
@include('layouts/student_layout/top_bar')
<!-- Top Bar End -->



<div class="container-fluid">
    <!-- Row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Chatbot</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Admssion</a></li>
                        <li class="breadcrumb-item active">Change Password</li>
                    </ol>
                </div>
                <h4 class="page-title">Change Password</h4>
            </div><!--end page-title-box-->
        </div><!--end col-->
    </div>
    <!-- end page title end breadcrumb -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="met-profile">
                        <div class="row">


                            <form action="{{ route('update-password') }}" method="POST">
                                @csrf
                                <div class="card-body">
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @elseif (session('error'))
                                        <div class="alert alert-danger" role="alert">
                                            {{ session('error') }}
                                        </div>
                                    @endif

                                    <div class="mb-3">
                                        <label for="oldPasswordInput" class="form-label">Old Password</label>
                                        <input name="old_password" type="password"
                                            class="form-control @error('old_password') is-invalid @enderror"
                                            id="oldPasswordInput" placeholder="Old Password">
                                        @error('old_password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="newPasswordInput" class="form-label">New Password</label>
                                        <input name="new_password" type="password"
                                            class="form-control @error('new_password') is-invalid @enderror"
                                            id="newPasswordInput" placeholder="New Password">
                                        @error('new_password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="confirmNewPasswordInput" class="form-label">Confirm New
                                            Password</label>
                                        <input name="new_password_confirmation" type="password" class="form-control"
                                            id="confirmNewPasswordInput" placeholder="Confirm New Password">
                                    </div>

                                </div>

                                <div class="card-footer">
                                    <button class="btn btn-success">Submit</button>
                                </div>

                            </form>


                        </div><!--end row-->
                    </div><!--end f_profile-->
                </div><!--end card-body-->

            </div><!--end card-->
        </div><!--end col-->
    </div><!--end row-->

</div><!-- container -->

<!--  Modal content for the above example -->
@include('layouts/student_layout/top_navigation_modal')



<script src="https://mannatthemes.com/metrica_mvc5/plugins/dropify/js/dropify.min.js"></script>
<script src="https://mannatthemes.com/metrica_mvc5/plugins/filter/isotope.pkgd.min.js"></script>
<script src="https://mannatthemes.com/metrica_mvc5/plugins/filter/masonry.pkgd.min.js"></script>
<script src="https://mannatthemes.com/metrica_mvc5/plugins/filter/jquery.magnific-popup.min.js"></script>
<script src="{{ asset('assets/pages/jquery.gallery.init.js') }}"></script>

<!-- App js -->
<script src="{{ asset('assets/js/app.js') }}"></script>
<script>
    $('.dropify').dropify();
</script>
@include('layouts/footer')
