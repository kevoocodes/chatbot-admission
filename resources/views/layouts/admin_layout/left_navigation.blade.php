<div class="leftbar-tab-menu">
    <div class="main-icon-menu slimscroll-menu">
        <a href="index.html" class="logo logo-metrica d-block text-center">
            <span>
                
            </span>
        </a>
        <nav class="nav">
            <a href="#MetricaDashboard" class="nav-link" data-toggle="tooltip-custom" data-placement="right"  data-trigger="hover" title="" data-original-title="Dashboard">
                <i data-feather="home" class="align-self-center menu-icon icon-dual"></i>
            </a><!--end MetricaDashboards--> 

            <a href="#MetricaApps" class="nav-link" data-toggle="tooltip-custom" data-placement="right"  data-trigger="hover" title="" data-original-title="Manage Admission">
                <i data-feather="users" class="align-self-center menu-icon icon-dual"></i>

            </a><!--end MetricaApps-->

            <a href="#MetricaStudent" class="nav-link" data-toggle="tooltip-custom" data-placement="right"  data-trigger="hover" title="" data-original-title="Manage Students">
                <i data-feather="users" class="align-self-center menu-icon icon-dual"></i>

            </a><!--end MetricaApps-->

            <a href="#MetricaUikit" class="nav-link" data-toggle="tooltip-custom" data-placement="right"  data-trigger="hover" title="" data-original-title="Manage Course">
                <i data-feather="book" class="align-self-center menu-icon icon-dual"></i>

            </a><!--end MetricaUikit-->

            <a href="#MetricaPages" class="nav-link" data-toggle="tooltip-custom" data-placement="right"  data-trigger="hover" title="" data-original-title="Manage Departments">
                <i data-feather="layers" class="align-self-center menu-icon icon-dual"></i>           
            </a><!--end MetricaPages-->

            <a href="#MetricaAuthentication" class="nav-link" data-toggle="tooltip-custom" data-placement="right"  data-trigger="hover" title="" data-original-title="Your Profile">
                <i data-feather="user" class="align-self-center menu-icon icon-dual"></i>

            </a> <!--end MetricaAuthentication--> 

        </nav><!--end nav-->
        <div class="pro-metrica-end">
            <a href="#" class="help" data-toggle="tooltip-custom" data-placement="right"  data-trigger="hover" title="" data-original-title="Chat">
                <i data-feather="message-circle" class="align-self-center menu-icon icon-md icon-dual mb-4"></i> 
            </a>
            <a href="#" class="profile">
                <img src="{{ asset('assets/images/users/user-4.jpg')}}" alt="profile-user" class="rounded-circle thumb-sm"> 
            </a>
        </div>
    </div><!--end main-icon-menu-->

    <div class="main-menu-inner">
        <!-- LOGO -->
        <div class="topbar-left">
            <a href="index.html" class="logo">
                <span>
                    <img src="{{ asset('assets/images/logo-dark.png')}}" alt="logo-large" class="logo-lg logo-dark">
                    <img src="{{ asset('assets/images/logo.png')}}" alt="logo-large" class="logo-lg logo-light">
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
                    <li class="nav-item"><a class="nav-link" href="{{route('admin.dashboard')}}">Dashboard</a></li>
                </ul>
            </div><!-- end Dashboards -->                

            <div id="MetricaApps" class="main-icon-menu-pane">
                <div class="title-box">
                    <h6 class="menu-title">Manage Adminssion</h6>
                </div>
                <ul class="nav metismenu">
                

                    <li class="nav-item"><a class="nav-link" href="apps-chat.html">New Admission</a></li>
                    <li class="nav-item"><a class="nav-link" href="apps-contact-list.html">All Admission</a></li>                            
                </ul>
            </div><!-- end Crypto -->

            <div id="MetricaStudent" class="main-icon-menu-pane">
                <div class="title-box">
                    <h6 class="menu-title">Manage Students</h6>
                </div>
                <ul class="nav metismenu">
                

                    <li class="nav-item"><a class="nav-link" href="apps-chat.html">New Students</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('all_students')}}">All Students</a></li>                            
                </ul>
            </div><!-- end Crypto -->
            
            <div id="MetricaUikit" class="main-icon-menu-pane">
                <div class="title-box">
                    <h6 class="menu-title">Manage Courses</h6>      
                </div>
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link" href="pages-profile.html">Add Course</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages-tour.html">All Courses</a></li>
                </ul>
               
            </div><!-- end Others -->

            <div id="MetricaPages" class="main-icon-menu-pane">
                <div class="title-box">
                    <h6 class="menu-title">Manage Departments</h6>        
                </div>
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link" href="pages-profile.html">Add Departments</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages-tour.html">All departments</a></li>
                  
                </ul>
            </div><!-- end Pages -->
            <div id="MetricaAuthentication" class="main-icon-menu-pane">
                <div class="title-box">
                    <h6 class="menu-title">Profile Management</h6>     
                </div>
                <ul class="nav">
            
                    <li class="nav-item"><a class="nav-link" href="auth-login-alt.html">Your Profile</a></li>
              
                </ul>
            </div><!-- end Authentication-->
        </div><!--end menu-body-->
    </div><!-- end main-menu-inner-->
</div>