@include('layouts/header')
<!-- leftbar-tab-menu -->
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
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Admission Chatbot</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">CRM</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
                <h4 class="page-title">Dashboard</h4>
            </div><!--end page-title-box-->
        </div><!--end col-->
    </div>
    <!-- end page title end breadcrumb -->
    <div class="row">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4 align-self-center">
                            <div class="icon-info">
                                <i data-feather="smile" class="align-self-center icon-lg icon-dual-warning"></i>
                            </div>
                        </div>
                        <div class="col-8 align-self-center text-right">
                            <div class="ml-2">
                                <p class="mb-1 text-muted">New Registered</p>
                                <h3 class="mt-0 mb-1 font-weight-semibold">1200</h3>
                            </div>
                        </div>
                    </div>
                    <div class="progress mt-2" style="height:3px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 55%;" aria-valuenow="55"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->

        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4 align-self-center">
                            <div class="icon-info">
                                <i data-feather="users" class="align-self-center icon-lg icon-dual-purple"></i>
                            </div>
                        </div>
                        <div class="col-8 align-self-center text-right">
                            <div class="ml-2">
                                <p class="mb-1 text-muted">Students</p>
                                <h3 class="mt-0 mb-1 font-weight-semibold">40k</h3>
                            </div>
                        </div>
                    </div>
                    <div class="progress mt-2" style="height:3px;">
                        <div class="progress-bar bg-purple" role="progressbar" style="width: 39%;" aria-valuenow="39"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->

        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4 align-self-center">
                            <div class="icon-info">
                                <i data-feather="headphones" class="align-self-center icon-lg icon-dual-success"></i>
                            </div>
                        </div>
                        <div class="col-8 align-self-center text-right">
                            <div class="ml-2">
                                <p class="mb-0 text-muted">Courses</p>
                                <h3 class="mt-0 mb-1 font-weight-semibold d-inline-block">5</h3>
                                <span class="badge badge-soft-success mt-1 shadow-none">Courses</span>
                            </div>
                        </div>
                    </div>
                    <div class="progress mt-2" style="height:3px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 48%;" aria-valuenow="48"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->

        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4 col-4 align-self-center">
                            <div class="icon-info">
                                <i data-feather="check-square" class="align-self-center icon-lg icon-dual-pink"></i>
                            </div>
                        </div>
                        <div class="col-sm-8 col-8 align-self-center text-right">
                            <div class="ml-2">
                                <p class="mb-1 text-muted">Classes</p>
                                <h3 class="mt-0 mb-1 font-weight-semibold">890</h3>
                            </div>
                        </div>
                    </div>
                    <div class="progress mt-2" style="height:3px;">
                        <div class="progress-bar bg-pink" role="progressbar" style="width: 22%;" aria-valuenow="22"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->
    </div><!--end row-->

    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mt-0">Admission Year Report</h4>
                    <div class="">
                        <div id="liveVisits" class="apex-charts"></div>
                    </div>
                </div><!--end card-body-->
            </div><!--end card-->

        </div><!--end col-->

        <div class="col-md-4 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class=" d-flex justify-content-between">
                        <img src="{{ asset('assets/images/widgets/monthly-re.png') }}" alt="" height="80">
                        <div class="align-self-center">
                            <h2 class="mt-0 mb-2 font-weight-semibold">$955<span
                                    class="badge badge-soft-success font-11 ml-2"><i class="fas fa-arrow-up"></i>
                                    8.6%</span></h2>
                            <h4 class="title-text mb-0">Yearly Revenue</h4>
                        </div>
                    </div>
                    <hr class="hr-dashed">
                    <div class="d-flex justify-content-between bg-light p-2 mt-3 rounded">
                        <div class="align-self-center">
                            <h6 class="m-0 font-weight-semibold">Last Year</h6>
                        </div>
                        <div class="align-self-center">
                            <h4 class=" m-0 font-weight-semibold font-20">$3512.00</h4>
                        </div>
                    </div>
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->





    </div><!-- container -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mt-0 mb-3">Students</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th>Fullname</th>
                                    <th>Email</th>
                                    <th>Phone No</th>
                                    <th>Company</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr><!--end tr-->
                            </thead>

                            <tbody>
                                <tr>
                                    <td><img src="{{ asset('assets/images/users/user-10.jpg') }}" alt=""
                                            class="thumb-sm rounded-circle mr-2">Donald Gardner</td>
                                    <td>xyx@gmail.com</td>
                                    <td>+123456789</td>
                                    <td>Starbucks coffee</td>
                                    <td> <span class="badge badge-md badge-soft-purple">New Lead</span></td>
                                    <td>
                                        <a href="#" class="mr-2"><i
                                                class="fas fa-edit text-info font-16"></i></a>
                                        <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                    </td>
                                </tr><!--end tr-->
                                <tr>
                                    <td><img src="{{ asset('assets/images/users/user-9.jpg') }}" alt=""
                                            class="thumb-sm rounded-circle mr-2">Matt Rosales</td>
                                    <td>xyx@gmail.com</td>
                                    <td>+123456789</td>
                                    <td>Mac Donald</td>
                                    <td> <span class="badge badge-md badge-soft-purple">New Lead</span></td>
                                    <td>
                                        <a href="#" class="mr-2"><i
                                                class="fas fa-edit text-info font-16"></i></a>
                                        <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                    </td>
                                </tr><!--end tr-->
                                <tr>
                                    <td><img src="{{ asset('assets/images/users/user-8.jpg') }}" alt=""
                                            class="thumb-sm rounded-circle mr-2">Michael Hill</td>
                                    <td>xyx@gmail.com</td>
                                    <td>+123456789</td>
                                    <td>Life Good</td>
                                    <td> <span class="badge badge-md badge-soft-danger">Lost</span></td>
                                    <td>
                                        <a href="#" class="mr-2"><i
                                                class="fas fa-edit text-info font-16"></i></a>
                                        <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                    </td>
                                </tr><!--end tr-->
                                <tr>
                                    <td><img src="{{ asset('assets/images/users/user-7.jpg') }}" alt=""
                                            class="thumb-sm rounded-circle mr-2">Nancy Flanary</td>
                                    <td>xyx@gmail.com</td>
                                    <td>+123456789</td>
                                    <td>Flipcart</td>
                                    <td> <span class="badge badge-md badge-soft-purple">New Lead</span></td>
                                    <td>
                                        <a href="#" class="mr-2"><i
                                                class="fas fa-edit text-info font-16"></i></a>
                                        <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                    </td>
                                </tr><!--end tr-->
                                <tr>
                                    <td><img src="{{ asset('assets/images/users/user-6.jpg') }}" alt=""
                                            class="thumb-sm rounded-circle mr-2">Dorothy Key</td>
                                    <td>xyx@gmail.com</td>
                                    <td>+123456789</td>
                                    <td>Adidas</td>
                                    <td> <span class="badge badge-md badge-soft-primary">Follow Up</span></td>
                                    <td>
                                        <a href="#" class="mr-2"><i
                                                class="fas fa-edit text-info font-16"></i></a>
                                        <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                    </td>
                                </tr><!--end tr-->
                                <tr>
                                    <td><img src="{{ asset('assets/images/users/user-5.jpg') }}" alt=""
                                            class="thumb-sm rounded-circle mr-2">Joseph Cross</td>
                                    <td>xyx@gmail.com</td>
                                    <td>+123456789</td>
                                    <td>Reebok</td>
                                    <td> <span class="badge badge-md badge-soft-success">Converted</span></td>
                                    <td>
                                        <a href="#" class="mr-2"><i
                                                class="fas fa-edit text-info font-16"></i></a>
                                        <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                    </td>
                                </tr><!--end tr-->
                            </tbody>
                        </table>
                    </div>
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->

    </div><!--end row-->


    <!--  Modal content for the above example -->
    @include('layouts/admin_layout/top_navigation_modal')


    @include('layouts/footer')
