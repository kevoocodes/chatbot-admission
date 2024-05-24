<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from mannatthemes.com/metrica_mvc5/default/forms-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Jan 2024 12:51:00 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Admission Chatbot</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/turdako.png') }}">

    <!--Form Wizard-->
    <link rel="stylesheet" href="https://mannatthemes.com/metrica_mvc5/plugins/jquery-steps/jquery.steps.css">

    <!-- App css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/jquery-ui.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/metisMenu.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

</head>

<body>

    @include('layouts/admin_layout/left_navigation')
    <!-- end leftbar-tab-menu-->

    <!-- Top Bar Start -->
    @include('layouts/admin_layout/top_bar')

    <!-- Top Bar End -->

    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-right">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Chatbot Admission</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Admin</a></li>
                            <li class="breadcrumb-item active"></li>
                        </ol>
                    </div>
                    <h4 class="page-title">All Admission</h4>
                </div><!--end page-title-box-->
            </div><!--end col-->
        </div>
        <!-- end page title end breadcrumb -->




        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">All Admission</h4>
                        <p class="text-muted mb-3">
                        </p>

                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Fullname</th>
                                    <th>Phonenumber</th>
                                    <th>Nacte Number</th>
                                   
                                    {{-- <th>Action</th> --}}
                                </tr>
                            </thead>


                            <tbody>


                                @foreach ($all_admissions as $admission)
                                    <tr>
                                        <td>{{ $admission->student_name}}</td>
                                        <td>{{ $admission->phoneNumberr }}</td>
                                        <td>{{ $admission->nacteNumber }}</td>
                                        {{-- <td>{{ $admission->status }}</td> --}}
                                        {{-- <td>
                                            <a href="{{$admission->id}}"><i class="fas fa-eye text-success font-16"></i></a>
                                        </td> --}}
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->





    </div><!-- container -->

    <!--  Modal content for the above example -->
    @include('layouts/admin_layout/top_navigation_modal')


    <footer class="footer text-center text-sm-left">
        &copy; 2019 - 2020 Metrica <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i
                class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
    </footer><!--end footer-->
    </div>
    <!-- end page content -->
    </div>
    <!-- end page-wrapper -->




    <!-- jQuery  -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/metismenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/waves.js') }}"></script>
    <script src="{{ asset('assets/js/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}"></script>
    <script src="https://mannatthemes.com/metrica_mvc5/plugins/apexcharts/apexcharts.min.js"></script>

    <!-- Required datatable js -->
    <script src="https://mannatthemes.com/metrica_mvc5/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="https://mannatthemes.com/metrica_mvc5/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="https://mannatthemes.com/metrica_mvc5/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="https://mannatthemes.com/metrica_mvc5/plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="https://mannatthemes.com/metrica_mvc5/plugins/datatables/jszip.min.js"></script>
    <script src="https://mannatthemes.com/metrica_mvc5/plugins/datatables/pdfmake.min.js"></script>
    <script src="https://mannatthemes.com/metrica_mvc5/plugins/datatables/vfs_fonts.js"></script>
    <script src="https://mannatthemes.com/metrica_mvc5/plugins/datatables/buttons.html5.min.js"></script>
    <script src="https://mannatthemes.com/metrica_mvc5/plugins/datatables/buttons.print.min.js"></script>
    <script src="https://mannatthemes.com/metrica_mvc5/plugins/datatables/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->
    <script src="https://mannatthemes.com/metrica_mvc5/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="https://mannatthemes.com/metrica_mvc5/plugins/datatables/responsive.bootstrap4.min.js"></script>
    <script src="{{ asset('assets/pages/jquery.datatable.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/js/app.js') }}"></script>

</body>


<!-- Mirrored from mannatthemes.com/metrica_mvc5/default/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Jan 2024 12:51:16 GMT -->

</html>
