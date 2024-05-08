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
                        <li class="breadcrumb-item active">Add Department</li>
                    </ol>
                </div>
                <h4 class="page-title">Add Department</h4>
            </div><!--end page-title-box-->
        </div><!--end col-->
    </div>
    <!-- end page title end breadcrumb -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">        
                    <h4 class="mt-0 header-title">Add Department</h4>

                    <!-- Check if success message exists -->
                    @if(session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form class="form-parsley" method="POST" action="{{ route('admin.store_department') }}">
                        @csrf
                        <div class="form-group">
                            <label for="department">Department Name</label>
                            <input type="text" id="department" name="departmentName" class="form-control" required placeholder="Department Name"/>
                        </div><!--end form-group-->
                    
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea id="description" name="description" required class="form-control" rows="5"></textarea>
                        </div><!--end form-group-->
                    
                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-gradient-primary waves-effect waves-light">
                                Submit
                            </button>
                        </div><!--end form-group-->
                    </form><!--end form-->
                           
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->
    </div><!--end row-->

    <!--  Modal content for the above example -->
    @include('layouts/admin_layout/top_navigation_modal')

    @include('layouts/footer')
