@include('layouts.header')

<!-- Left Navigation -->
@include('layouts.admin_layout.left_navigation')

<!-- Top Bar Start -->
@include('layouts.admin_layout.top_bar')
<!-- Top Bar End -->

<div class="container-fluid">
    <!-- Page Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Admission Chatbot</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">CRM</a></li>
                        <li class="breadcrumb-item active">Edit Course</li>
                    </ol>
                </div>
                <h4 class="page-title">Edit Course</h4>
            </div><!--end page-title-box-->
        </div><!--end col-->
    </div><!--end row-->
    
    <!-- Form for editing a course -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">        
                    <h4 class="mt-0 header-title">Edit Course</h4>
                    
                    @if(session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form class="form-parsley" method="POST" action="{{ route('admin.store_course') }}">
                        @csrf
                        <input type="hidden" name="course_id" value="{{ $course->id }}">
                        <div class="form-group">
                            <label for="course">Course Name</label>
                            <input type="text" id="course" name="courseName" class="form-control" value="{{ $course->courseName }}" required placeholder="Type Course Name"/>
                        </div><!--end form-group-->

                        <div class="form-group">
                            <label for="duration">Duration</label>
                            <input type="text" id="duration" name="duration" class="form-control" value="{{ $course->duration }}" required placeholder="Enter Duration"/>
                        </div><!--end form-group-->

                        <div class="form-group">
                            <label for="fees">Fee</label>
                            <input type="text" id="fees" name="fees" class="form-control" value="{{ $course->fees }}" required placeholder="Fees"/>
                        </div><!--end form-group-->

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea id="description" name="description" required class="form-control" rows="5">{{ $course->description }}</textarea>
                        </div><!--end form-group-->

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-gradient-primary waves-effect waves-light">
                                Update
                            </button>
                        </div><!--end form-group-->
                    </form><!--end form-->
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->
    </div><!--end row-->
</div><!--end container-fluid-->

<!-- Modal content for the above example -->
@include('layouts.admin_layout.top_navigation_modal')

@include('layouts.footer')
