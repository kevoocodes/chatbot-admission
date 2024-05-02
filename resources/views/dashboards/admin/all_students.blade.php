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
        <link rel="shortcut icon" href="assets/images/favicon.ico">

         <!--Form Wizard-->
         <link rel="stylesheet" href="https://mannatthemes.com/metrica_mvc5/plugins/jquery-steps/jquery.steps.css">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/jquery-ui.min.css" rel="stylesheet">
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

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
                                <h4 class="page-title">All students</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
   


    
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
    
                                    <h4 class="mt-0 header-title">All students</h4>
                                    <p class="text-muted mb-3">
                                    </p>
    
                                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>Fullname</th>
                                            <th>Course</th>
                                            <th>Department</th>
                                            <th>Age</th>
                                            <th>Registered Date</th>
                                            <th>Phonenumber</th>
                                        </tr>
                                        </thead>
    
    
                                        <tbody>
                                        
                                        
                                    
                                        <tr>
                                            <td>Jenette Caldwell</td>
                                            <td>Computer Science</td>
                                            <td>Computer Science</td>
                                            <td>30</td>
                                            <td>2011/09/03</td>
                                            <td>0712999999</td>
                                        </tr>
                                        <tr>
                                            <td>Yuri Berry</td>
                                            <td>Acount</td>
                                            <td>Account</td>
                                            <td>40</td>
                                            <td>2009/06/25</td>
                                            <td>071222222</td>
                                        </tr>
                                        <tr>
                                            <td>Caesar Vance</td>
                                            <td>Information Technology</td>
                                            <td>Computer Science</td>
                                            <td>21</td>
                                            <td>2011/12/12</td>
                                            <td>0644123311</td>
                                        </tr>
                                        <tr>
                                            <td>Doris Wilder</td>
                                            <td>Degree of  Law</td>
                                            <td>law</td>
                                            <td>23</td>
                                            <td>2010/09/20</td>
                                            <td>0212000000</td>
                                        </tr>
                                       
                                       
                                       
                                       
                                      
                                    
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
                    &copy; 2019 - 2020 Metrica <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
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