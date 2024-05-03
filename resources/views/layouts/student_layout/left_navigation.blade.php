<div class="leftbar-tab-menu">
    <div class="main-icon-menu slimscroll-menu">
        <a href="index.html" class="logo logo-metrica d-block text-center">
            <span>
                <img src="{{ asset('assets/images/logo-sm.png') }}" alt="logo-small" class="logo-sm">
            </span>
        </a>
        <nav class="nav">
            <a href="#MetricaDashboard" class="nav-link" data-toggle="tooltip-custom" data-placement="right"
                data-trigger="hover" title="" data-original-title="Dashboard">
                <i data-feather="home" class="align-self-center menu-icon icon-dual"></i>
            </a><!--end MetricaDashboards-->

            <a href="#MetricaApps" class="nav-link" data-toggle="tooltip-custom" data-placement="right"
                data-trigger="hover" title="" data-original-title="Admission">
                <i data-feather="plus" class="align-self-center menu-icon icon-dual"></i>
            </a><!--end MetricaApps-->

            <a href="#MetricaUikit" class="nav-link" data-toggle="tooltip-custom" data-placement="right"
                data-trigger="hover" title="" data-original-title="Profile">
                <i data-feather="user" class="align-self-center menu-icon icon-dual"></i>

            </a><!--end MetricaUikit-->

            <a href="#MetricaPages" class="nav-link" data-toggle="tooltip-custom" data-placement="right"
                data-trigger="hover" title="" data-original-title="Change Password">
                <i data-feather="lock" class="align-self-center menu-icon icon-dual"></i>

            </a><!--end MetricaPages-->

          


        </nav><!--end nav-->
        <div class="pro-metrica-end">
            <a href="#" class="help" data-toggle="tooltip-custom" data-placement="right" data-trigger="hover"
                title="" data-original-title="Chat">
                <i data-feather="message-circle" class="align-self-center menu-icon icon-md icon-dual mb-4"></i>
            </a>
            <a href="#" class="profile">
                <img src="{{ asset('assets/images/users/user-4.jpg') }}" alt="profile-user"
                    class="rounded-circle thumb-sm">
            </a>
        </div>
    </div><!--end main-icon-menu-->

    <div class="main-menu-inner">
        <!-- LOGO -->
        <div class="topbar-left">
            <a href="index.html" class="logo">
                <span>
                    <img style="width: 60px; height: 60px; margin-top: 20px" src="{{ asset('assets/images/turdako.png')}}" alt="logo-large" class="logo-lg logo-dark">
                    
                </span>
            </a>
        </div>
        <!--end logo-->
        <div class="menu-body slimscroll">
            <div id="MetricaDashboard" class="main-icon-menu-pane">
                <div class="title-box">
                    <h6 class="menu-title">Dashboard</h6>
                </div>
                <ul class="nav">
                    <li class=" "><a class="nav-link" href="{{ route('student.dashboard') }}">Dashboard</a></li>

                </ul>
            </div><!-- end Dashboards -->

            <div id="MetricaApps" class="main-icon-menu-pane">
                <div class="title-box">
                    <h6 class="menu-title">Admission Management</h6>
                </div>
                <ul class="nav metismenu">
                    <li class="nav-item"><a class="nav-link" href="{{ route('student.admission') }}">Add Admission</a>
                    </li>
                </ul>
            </div><!-- end Crypto -->

            <div id="MetricaUikit" class="main-icon-menu-pane">
                <div class="title-box">
                    <h6 class="menu-title">Profile</h6>
                </div>
                <ul class="nav metismenu">

                    <li class="nav-item"><a class="nav-link" href="{{ route('student.profile') }}">Profile</a>
                    </li>




                </ul><!--end nav-->
            </div><!-- end Others -->

            <div id="MetricaPages" class="main-icon-menu-pane">
                <div class="title-box">
                    <h6 class="menu-title">Change Password</h6>
                </div>
                <ul class="nav">

                    <li class="nav-item"><a class="nav-link" href="{{route('students.changepassword')}}">Change Password</a></li>
                </ul>
            </div><!-- end Pages -->
           
        </div><!--end menu-body-->
    </div><!-- end main-menu-inner-->
</div>
