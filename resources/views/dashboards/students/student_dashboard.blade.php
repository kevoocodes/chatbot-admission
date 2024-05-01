<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from mannatthemes.com/metrica_mvc5/default/hospital-all-patients.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Jan 2024 12:50:32 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Admission Chatbot</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- DataTables -->
    <link href="https://mannatthemes.com/metrica_mvc5/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />
    <link href="https://mannatthemes.com/metrica_mvc5/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="https://mannatthemes.com/metrica_mvc5/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/jquery-ui.min.css" rel="stylesheet">
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

</head>

<body>
    <!-- leftbar-tab-menu -->
    @include('layouts/student_layout/left_navigation')
    <!-- end leftbar-tab-menu-->

    <!-- Top Bar Start -->
    @include('layouts/student_layout/top_bar')
    <!-- Top Bar End -->



    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-right">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Admission Chatbot</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">chatbot admission</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Dashboard</h4>
                </div><!--end page-title-box-->
            </div><!--end col-->
        </div>
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body  met-pro-bg">
                        <div class="met-profile">
                            <div class="row">
                                <div class="col-lg-4 align-self-center mb-3 mb-lg-0">
                                    <div class="met-profile-main">
                                        <div class="met-profile-main-pic">
                                            <img src="assets/images/users/dr-4.jpg" alt=""
                                                class="rounded-circle">
                                            <span class="fro-profile_main-pic-change">
                                                <i class="fas fa-camera"></i>
                                            </span>
                                        </div>
                                        <div class="met-profile_user-detail">
                                            <h5 class="met-user-name">Kelvin Aron Msindai</h5>
                                            <p class="mb-0 met-user-name-post"></p>
                                        </div>
                                    </div>
                                </div><!--end col-->
                                <div class="col-lg-4 ml-auto">
                                    <ul class="list-unstyled personal-detail">
                                        <li class=""><i class="dripicons-phone mr-2 text-info font-18"></i> <b>
                                                phone </b> : +91 23456 78910</li>
                                        <li class="mt-2"><i class="dripicons-mail text-info font-18 mt-2 mr-2"></i>
                                            <b> Email </b> : mannat.theme@gmail.com</li>
                                        <li class="mt-2"><i
                                                class="dripicons-location text-info font-18 mt-2 mr-2"></i>
                                            <b>Location</b> : USA</li>
                                    </ul>

                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end f_profile-->
                    </div><!--end card-body-->

                </div><!--end card-->
            </div><!--end col-->
        </div><!--end row-->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <button type="button" class="btn btn-gradient-primary px-4 mt-0 mb-3"
                            onclick="location.href='{{ route('student.admission') }}'"><i
                                class="mdi mdi-plus-circle-outline mr-2"></i>Add Admission</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <h2>Our Courses</h2>
                        <div class="table-responsive">
                            <table id="datatable" class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Course Name</th>
                                        <th>Description</th>
                                        <th>Years</th>
                                        <th>Fees</th>
                                        <th class="text-right">Action</th>
                                    </tr><!--end tr-->
                                </thead>

                                <tbody>


                                    @foreach ($courses as $course)
                                        <tr>
                                            <td><a href="patient-profile.html">{{ $course->courseName }}</a></td>
                                            <td>{{ $course->description }}</td>
                                            <td>{{ $course->duration }}</td>
                                            <td>{{ $course->fees }}</td>

                                            <td class="text-right">
                                                <a href="patient-edit.html" class="mr-2"><i
                                                        class="fas fa-eye text-info font-16"></i></a>

                                            </td>
                                        </tr><!--end tr-->
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div><!--end card-body-->
                </div><!--end card-->
            </div> <!--end col-->
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mt-0 mb-3">Our Departments</h4>
                        <div class="slimscroll crm-dash-activity">
                            <div class="activity">
                                

         
                                @foreach ($departments as $department)
                                <div class="activity-info">
                                    <div class="icon-info-activity">
                                        <i class="mdi mdi-clipboard-alert bg-soft-secondary"></i>
                                    </div>
                                    <div class="activity-info-text">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h6 class="m-0">{{$department->departmentName}}</h6>
                                           
                                        </div>
                                        <p class="text-muted mt-3">
                                            {{$department->description}}
                                           
                                        </p>
                                    </div>
                                </div>
                                @endforeach
                             
                              
                            </div><!--end activity-->
                        </div><!--end crm-dash-activity-->
                    </div> <!--end card-body-->
                </div><!--end card-->
            </div><!--end col-->
        </div><!--end row-->

    </div><!-- container -->

    <!--  Modal content for the above example -->
    @include('layouts/student_layout/top_navigation_modal')




    <footer class="footer text-center text-sm-left">
        &copy; 2024 Chatbot Admission <span class="text-muted d-none d-sm-inline-block float-right">Deeveloped <i
                class="mdi mdi-heart text-danger"></i> by kevoocodes</span>
    </footer><!--end footer-->
    </div>
    <!-- end page content -->
    </div>
    <!-- end page-wrapper -->




    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/metismenu.min.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/feather.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
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
    <script src="assets/pages/jquery.datatable.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>

</body>


<!-- Mirrored from mannatthemes.com/metrica_mvc5/default/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Jan 2024 12:51:16 GMT -->

</html>
