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
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico')}}">

        <!-- App css -->
        <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/jquery-ui.min.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/metisMenu.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <!-- leftbar-tab-menu -->
        <div class="leftbar-tab-menu">
            <div class="main-icon-menu slimscroll-menu">
                <a href="index.html" class="logo logo-metrica d-block text-center">
                    <span>
                        <img src="{{ asset('assets/images/logo-sm.png')}}" alt="logo-small" class="logo-sm">
                    </span>
                </a>
                <nav class="nav">
                    <a href="#MetricaDashboard" class="nav-link" data-toggle="tooltip-custom" data-placement="right"  data-trigger="hover" title="" data-original-title="Dashboard">
                        <i data-feather="home" class="align-self-center menu-icon icon-dual"></i>
                    </a><!--end MetricaDashboards--> 

                    <a href="#MetricaApps" class="nav-link" data-toggle="tooltip-custom" data-placement="right"  data-trigger="hover" title="" data-original-title="Apps">
                        <i data-feather="grid" class="align-self-center menu-icon icon-dual"></i>
                    </a><!--end MetricaApps-->

                    <a href="#MetricaUikit" class="nav-link" data-toggle="tooltip-custom" data-placement="right"  data-trigger="hover" title="" data-original-title="UI Kit">
                        <i data-feather="package" class="align-self-center menu-icon icon-dual"></i>
                    </a><!--end MetricaUikit-->

                    <a href="#MetricaPages" class="nav-link" data-toggle="tooltip-custom" data-placement="right"  data-trigger="hover" title="" data-original-title="Pages">
                        <i data-feather="copy" class="align-self-center menu-icon icon-dual"></i>             
                    </a><!--end MetricaPages-->

                    <a href="#MetricaAuthentication" class="nav-link" data-toggle="tooltip-custom" data-placement="right"  data-trigger="hover" title="" data-original-title="Authentication">
                        <i data-feather="lock" class="align-self-center menu-icon icon-dual"></i>
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
                            <li class="nav-item"><a class="nav-link" href="index.html">Analytics</a></li>
                            <li class="nav-item"><a class="nav-link" href="crypto-index.html">Crypto</a></li>
                            <li class="nav-item"><a class="nav-link" href="crm-index.html">CRM</a></li>
                            <li class="nav-item"><a class="nav-link" href="projects-index.html">Project</a></li> 
                            <li class="nav-item"><a class="nav-link" href="ecommerce-index.html">Ecommerce</a></li>
                            <li class="nav-item"><a class="nav-link" href="helpdesk-index.html">Helpdesk</a></li>
                            <li class="nav-item"><a class="nav-link" href="hospital-index.html">Hospital</a></li>
                        </ul>
                    </div><!-- end Dashboards -->                

                    <div id="MetricaApps" class="main-icon-menu-pane">
                        <div class="title-box">
                            <h6 class="menu-title">Apps</h6>
                        </div>
                        <ul class="nav metismenu">
                            <li class="nav-item">
                                <a class="nav-link" href="javascript: void(0);"><span class="w-100">Analytics</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="analytics-customers.html">Customers</a></li>
                                    <li><a href="analytics-reports.html">Reports</a></li>            
                                </ul>            
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="javascript: void(0);"><span class="w-100">Crypto</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="crypto-exchange.html">Exchange</a></li>
                                    <li><a href="crypto-wallet.html">Wallet</a></li> 
                                    <li><a href="crypto-news.html">Crypto News</a></li>
                                    <li><a href="crypto-ico.html">ICO List</a></li>
                                    <li><a href="crypto-settings.html">settings</a></li>         
                                </ul>            
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="javascript: void(0);"><span class="w-100">CRM</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="crm-contacts.html">Contacts</a></li>
                                    <li><a href="crm-opportunities.html">Opportunities</a></li>
                                    <li><a href="crm-leads.html">Leads</a></li>
                                    <li><a href="crm-customers.html">Customers</a></li>      
                                </ul>            
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="javascript: void(0);"><span class="w-100">Projects</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="projects-clients.html">Clients</a></li>
                                    <li><a href="projects-team.html">Team</a></li>
                                    <li><a href="projects-project.html">Project</a></li>
                                    <li><a href="projects-task.html">Task</a></li>
                                    <li><a href="projects-kanban-board.html">Kanban Board</a></li>
                                    <li><a href="projects-chat.html">Chat</a></li>
                                    <li><a href="projects-users.html">Users</a></li>
                                    <li><a href="projects-create.html">Project Create</a></li>           
                                </ul>            
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="javascript: void(0);"><span class="w-100">Ecommerce</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="ecommerce-products.html">Products</a></li>
                                    <li><a href="ecommerce-product-list.html">Product List</a></li>
                                    <li><a href="ecommerce-product-detail.html">Product Detail</a></li>
                                    <li><a href="ecommerce-cart.html">Cart</a></li>
                                    <li><a href="ecommerce-checkout.html">Checkout</a></li>            
                                </ul>            
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="javascript: void(0);"><span class="w-100">Helpdesk</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="helpdesk-teckets.html">Tickets</a></li>
                                    <li><a href="helpdesk-reports.html">Reports</a></li>
                                    <li><a href="helpdesk-agents.html">Agents</a></li>          
                                </ul>            
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="javascript: void(0);"><span class="w-100">Hospital</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="javascript: void(0);">Appointments <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                        <ul class="nav-second-level" aria-expanded="false">
                                            <li><a href="hospital-doctor-shedule.html">Dr. Shedule</a></li>  
                                            <li><a href="hospital-all-appointments.html">All Appointments</a></li> 
                                        </ul>
                                    </li> 
                                    <li>
                                        <a href="javascript: void(0);">Doctors <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                        <ul class="nav-second-level" aria-expanded="false">
                                            <li><a href="hospital-all-doctors.html">All Doctors</a></li>
                                            <li><a href="hospital-add-doctor.html">Add Doctor</a></li>
                                            <li><a href="hospital-doctor-edit.html">Doctor Edit</a></li>
                                            <li><a href="hospital-doctor-profile.html">Doctor Profile</a></li> 
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);">Patients <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                        <ul class="nav-second-level" aria-expanded="false">
                                            <li><a href="hospital-all-patients.html">All Patients</a></li>
                                            <li><a href="hospital-add-patient.html">Add Patient</a></li>
                                            <li><a href="hospital-patient-edit.html">Patient Edit</a></li>
                                            <li><a href="hospital-patient-profile.html">Patient Profile</a></li>
                                        </ul>
                                    </li> 
                                    <li>
                                        <a href="javascript: void(0);">Payments <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                        <ul class="nav-second-level" aria-expanded="false">
                                            <li><a href="hospital-all-payments.html">All Payments</a></li>
                                            <li><a href="hospital-payment-invoice.html">Payment Invoice</a></li>
                                            <li><a href="hospital-cashless-payments.html">Cashless Payments</a></li>
                                        </ul>
                                    </li> 
                                    <li>
                                        <a href="javascript: void(0);">Staff <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                        <ul class="nav-second-level" aria-expanded="false">
                                            <li><a href="hospital-all-staff.html">All Staff</a></li>  
                                            <li><a href="hospital-add-member.html">Add Member</a></li> 
                                            <li><a href="hospital-edit-member.html">Edit Member</a></li>  
                                            <li><a href="hospital-member-profile.html">Member Profile</a></li>  
                                            <li><a href="hospital-salary.html">Staff Salary</a></li> 
                                        </ul>
                                    </li> 
                                    <li>
                                        <a href="javascript: void(0);">General <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                        <ul class="nav-second-level" aria-expanded="false">
                                            <li><a href="hospital-all-rooms.html">Room Allotments</a></li>
                                            <li><a href="hospital-expenses.html">Expenses Report</a></li>
                                            <li><a href="hospital-departments.html">Departments</a></li>
                                            <li><a href="hospital-insurance-company.html">Insurance Co.</a></li>
                                            <li><a href="hospital-events.html">Events</a></li>
                                            <li><a href="hospital-leaves.html">Leaves</a></li>
                                            <li><a href="hospital-holidays.html">Holidays</a></li>
                                            <li><a href="hospital-attendance.html">Attendance</a></li> 
                                            <li><a href="hospital-chat.html">Chat</a></li>
                                        </ul>
                                    </li>              
                                </ul>            
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="javascript: void(0);"><span class="w-100">Email</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="apps-email-inbox.html">Inbox</a></li>
                                    <li><a href="apps-email-read.html">Read Email</a></li>            
                                </ul>            
                            </li><!--end nav-item-->
                            <li class="nav-item"><a class="nav-link" href="apps-chat.html">Chat</a></li>
                            <li class="nav-item"><a class="nav-link" href="apps-contact-list.html">Contact List</a></li>
                            <li class="nav-item"><a class="nav-link" href="apps-calendar.html">Calendar</a></li>
                            <li class="nav-item"><a class="nav-link" href="apps-invoice.html">Invoice</a></li>                            
                        </ul>
                    </div><!-- end Crypto -->
                    
                    <div id="MetricaUikit" class="main-icon-menu-pane">
                        <div class="title-box">
                            <h6 class="menu-title">UI Kit</h6>      
                        </div>
                        <ul class="nav metismenu">                                
                            <li class="nav-item">
                                <a class="nav-link" href="#"><span class="w-100">UI Elements</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="ui-bootstrap.html">Bootstrap</a></li>
                                    <li><a href="ui-animation.html">Animation</a></li>
                                    <li><a href="ui-avatar.html">Avatar</a></li>
                                    <li><a href="ui-clipboard.html">Clip Board</a></li>
                                    <li><a href="ui-files.html">File Manager</a></li>
                                    <li><a href="ui-ribbons.html">Ribbons</a></li>
                                    <li><a href="ui-dragula.html">Dragula</a></li>
                                    <li><a href="ui-check-radio.html">Check & Radio</a></li>
                                </ul>            
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="#"><span class="w-100">Advanced UI</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="advanced-rangeslider.html">Range Slider</a></li>
                                    <li><a href="advanced-sweetalerts.html">Sweet Alerts</a></li>
                                    <li><a href="advanced-nestable.html">Nestable List</a></li>
                                    <li><a href="advanced-ratings.html">Ratings</a></li>
                                    <li><a href="advanced-highlight.html">Highlight</a></li>
                                    <li><a href="advanced-session.html">Session Timeout</a></li>
                                    <li><a href="advanced-idle-timer.html">Idle Timer</a></li>
                                </ul>            
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="#"><span class="w-100">Forms</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="forms-elements.html">Basic Elements</a></li>
                                    <li><a href="forms-advanced.html">Advance Elements</a></li>
                                    <li><a href="forms-validation.html">Validation</a></li>
                                    <li><a href="forms-wizard.html">Wizard</a></li>
                                    <li><a href="forms-editors.html">Editors</a></li>
                                    <li><a href="forms-repeater.html">Repeater</a></li>
                                    <li><a href="forms-x-editable.html">X Editable</a></li>
                                    <li><a href="forms-uploads.html">File Upload</a></li>
                                    <li><a href="forms-img-crop.html">Image Crop</a></li>
                                </ul>            
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="#"><span class="w-100">Charts</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="charts-apex.html">Apex</a></li>
                                    <li><a href="charts-morris.html">Morris</a></li>
                                    <li><a href="charts-chartist.html">Chartist</a></li>
                                    <li><a href="charts-flot.html">Flot</a></li>
                                    <li><a href="charts-peity.html">Peity</a></li>
                                    <li><a href="charts-chartjs.html">Chartjs</a></li>
                                    <li><a href="charts-sparkline.html">Sparkline</a></li>
                                    <li><a href="charts-knob.html">Jquery Knob</a></li>
                                    <li><a href="charts-justgage.html">JustGage</a></li>
                                </ul>            
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="#"><span class="w-100">Tables</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="tables-basic.html">Basic</a></li>
                                    <li><a href="tables-datatable.html">Datatables</a></li>
                                    <li><a href="tables-responsive.html">Responsive</a></li>
                                    <li><a href="tables-footable.html">Footable</a></li>
                                    <li><a href="tables-jsgrid.html">Jsgrid</a></li>
                                    <li><a href="tables-dragger.html">Dragger</a></li>
                                    <li><a href="tables-editable.html">Editable</a></li>
                                </ul>            
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="#"><span class="w-100">Icons</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="icons-materialdesign.html">Material Design</a></li>
                                    <li><a href="icons-dripicons.html">Dripicons</a></li>
                                    <li><a href="icons-fontawesome.html">Font awesome</a></li>
                                    <li><a href="icons-themify.html">Themify</a></li>
                                    <li><a href="icons-feather.html">Feather</a></li>
                                    <li><a href="icons-typicons.html">Typicons</a></li>
                                    <li><a href="icons-emoji.html">Emoji <i class="em em-ok_hand"></i></a></li>
                                </ul>            
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="#"><span class="w-100">Maps</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="maps-google.html">Google Maps</a></li>
                                    <li><a href="maps-leaflet.html">Leaflet Maps</a></li>
                                    <li><a href="maps-vector.html">Vector Maps</a></li>       
                                </ul>            
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="#"><span class="w-100">Email Templates</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="email-templates-basic.html">Basic Action Email</a></li>
                                    <li><a href="email-templates-alert.html">Alert Email</a></li>
                                    <li><a href="email-templates-billing.html">Billing Email</a></li>         
                                </ul>            
                            </li><!--end nav-item-->
                        </ul><!--end nav-->
                    </div><!-- end Others -->

                    <div id="MetricaPages" class="main-icon-menu-pane">
                        <div class="title-box">
                            <h6 class="menu-title">Pages</h6>        
                        </div>
                        <ul class="nav">
                            <li class="nav-item"><a class="nav-link" href="pages-profile.html">Profile</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages-tour.html">Tour</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages-timeline.html">Timeline</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages-treeview.html">Treeview</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages-starter.html">Starter Page</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages-pricing.html">Pricing</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages-blogs.html">Blogs</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages-faq.html">FAQs</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages-gallery.html">Gallery</a></li>
                        </ul>
                    </div><!-- end Pages -->
                    <div id="MetricaAuthentication" class="main-icon-menu-pane">
                        <div class="title-box">
                            <h6 class="menu-title">Authentication</h6>     
                        </div>
                        <ul class="nav">
                            <li class="nav-item"><a class="nav-link" href="auth-login.html">Log in</a></li>
                            <li class="nav-item"><a class="nav-link" href="auth-login-alt.html">Log in alt</a></li>
                            <li class="nav-item"><a class="nav-link" href="auth-register.html">Register</a></li>
                            <li class="nav-item"><a class="nav-link" href="auth-register-alt.html">Register-alt</a></li>
                            <li class="nav-item"><a class="nav-link" href="auth-recover-pw.html">Re-Password</a></li>
                            <li class="nav-item"><a class="nav-link" href="auth-recover-pw-alt.html">Re-Password-alt</a></li>
                            <li class="nav-item"><a class="nav-link" href="auth-lock-screen.html">Lock Screen</a></li>
                            <li class="nav-item"><a class="nav-link" href="auth-lock-screen-alt.html">Lock Screen-alt</a></li>
                            <li class="nav-item"><a class="nav-link" href="auth-404.html">Error 404</a></li>
                            <li class="nav-item"><a class="nav-link" href="auth-404-alt.html">Error 404-alt</a></li>
                            <li class="nav-item"><a class="nav-link" href="auth-500.html">Error 500</a></li>                            
                            <li class="nav-item"><a class="nav-link" href="auth-500-alt.html">Error 500-alt</a></li>
                        </ul>
                    </div><!-- end Authentication-->
                </div><!--end menu-body-->
            </div><!-- end main-menu-inner-->
        </div>
        <!-- end leftbar-tab-menu-->

        <!-- Top Bar Start -->
        <div class="topbar">           
            <!-- Navbar -->
            <nav class="navbar-custom">    
                <ul class="list-unstyled topbar-nav float-right mb-0"> 
                    <li class="hidden-sm">
                        <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="javascript: void(0);" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            English <img src="{{ asset('assets/images/flags/us_flag.jpg')}}" class="ml-2" height="16" alt=""/> <i class="mdi mdi-chevron-down"></i> 
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="javascript: void(0);"><span> German </span><img src="{{ asset('assets/images/flags/germany_flag.jpg')}}" alt="" class="ml-2 float-right" height="14"/></a>
                            <a class="dropdown-item" href="javascript: void(0);"><span> Italian </span><img src="{{ asset('assets/images/flags/italy_flag.jpg')}}" alt="" class="ml-2 float-right" height="14"/></a>
                            <a class="dropdown-item" href="javascript: void(0);"><span> French </span><img src="{{ asset('assets/images/flags/french_flag.jpg')}}" alt="" class="ml-2 float-right" height="14"/></a>
                            <a class="dropdown-item" href="javascript: void(0);"><span> Spanish </span><img src="{{ asset('assets/images/flags/spain_flag.jpg')}}" alt="" class="ml-2 float-right" height="14"/></a>
                            <a class="dropdown-item" href="javascript: void(0);"><span> Russian </span><img src="{{ asset('assets/images/flags/russia_flag.jpg')}}" alt="" class="ml-2 float-right" height="14"/></a>
                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <i class="ti-bell noti-icon"></i>
                            <span class="badge badge-danger badge-pill noti-icon-badge">2</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg pt-0">
                           
                            <h6 class="dropdown-item-text font-15 m-0 py-3 bg-primary text-white d-flex justify-content-between align-items-center">
                                Notifications <span class="badge badge-light badge-pill">2</span>
                            </h6> 
                            <div class="slimscroll notification-list">
                                <!-- item-->
                                <a href="#" class="dropdown-item py-3">
                                    <small class="float-right text-muted pl-2">2 min ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-primary">
                                           <i class="la la-cart-arrow-down text-white"></i>
                                        </div>
                                        <div class="media-body align-self-center ml-2 text-truncate">
                                            <h6 class="my-0 font-weight-normal text-dark">Your order is placed</h6>
                                            <small class="text-muted mb-0">Dummy text of the printing and industry.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                                <!-- item-->
                                <a href="#" class="dropdown-item py-3">
                                    <small class="float-right text-muted pl-2">10 min ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-success">
                                            <i class="la la-group text-white"></i>
                                        </div>
                                        <div class="media-body align-self-center ml-2 text-truncate">
                                            <h6 class="my-0 font-weight-normal text-dark">Meeting with designers</h6>
                                            <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                                <!-- item-->
                                <a href="#" class="dropdown-item py-3">
                                    <small class="float-right text-muted pl-2">40 min ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-pink">
                                            <i class="la la-list-alt text-white"></i>
                                        </div>
                                        <div class="media-body align-self-center ml-2 text-truncate">
                                            <h6 class="my-0 font-weight-normal text-dark">UX 3 Task complete.</h6>
                                            <small class="text-muted mb-0">Dummy text of the printing.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                                <!-- item-->
                                <a href="#" class="dropdown-item py-3">
                                    <small class="float-right text-muted pl-2">1 hr ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-warning">
                                            <i class="la la-truck text-white"></i>
                                        </div>
                                        <div class="media-body align-self-center ml-2 text-truncate">
                                            <h6 class="my-0 font-weight-normal text-dark">Your order is placed</h6>
                                            <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                                <!-- item-->
                                <a href="#" class="dropdown-item py-3">
                                    <small class="float-right text-muted pl-2">2 hrs ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-info">
                                            <i class="la la-check-circle text-white"></i>
                                        </div>
                                        <div class="media-body align-self-center ml-2 text-truncate">
                                            <h6 class="my-0 font-weight-normal text-dark">Payment Successfull</h6>
                                            <small class="text-muted mb-0">Dummy text of the printing.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                            </div>
                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                                View all <i class="fi-arrow-right"></i>
                            </a>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <img src="assets/images/users/user-4.jpg" alt="profile-user" class="rounded-circle" /> 
                            <span class="ml-1 nav-user-name hidden-sm">Amelia <i class="mdi mdi-chevron-down"></i> </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i class="dripicons-user text-muted mr-2"></i> Profile</a>
                            <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted mr-2"></i> My Wallet</a>
                            <a class="dropdown-item" href="#"><i class="dripicons-gear text-muted mr-2"></i> Settings</a>
                            <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted mr-2"></i> Lock screen</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="dripicons-exit text-muted mr-2"></i> Logout</a>
                        </div>
                    </li>
                    <li class="mr-2">
                        <a href="#" class="nav-link" data-toggle="modal" data-animation="fade" data-target=".modal-rightbar">
                            <i data-feather="align-right" class="align-self-center"></i>
                        </a>                  
                    </li>
                </ul><!--end topbar-nav-->
    
                <ul class="list-unstyled topbar-nav mb-0">  
                    <li>
                        <a href="crm-index.html">
                            <span class="responsive-logo">
                                <img src="{{ asset('assets/images/logo-sm.png')}}" alt="logo-small" class="logo-sm align-self-center" height="34">
                            </span>
                        </a>
                    </li>                      
                    <li>
                        <button class="button-menu-mobile nav-link waves-effect waves-light">
                            <i data-feather="menu" class="align-self-center"></i>
                        </button>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">                            
                            <span class="ml-1 p-2 bg-soft-classic nav-user-name hidden-sm rounded">System <i class="mdi mdi-chevron-down"></i> </span>
                        </a>
                        <div class="dropdown-menu dropdown-xl dropdown-menu-left p-0">
                            <div class="row no-gutters">
                                <div class="col-12 col-lg-6">
                                    <div class="text-center system-text">
                                        <h4 class="text-white">The Poworfull Dashboard</h4>
                                        <p class="text-white">See all the pages Metrica.</p>
                                        <a href="https://mannatthemes.com/metrica/" class="btn btn-sm btn-pink mt-2">See Dashboard</a>
                                    </div>
                                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="{{ asset('assets/images/dashboard/dash-1.png')}}" class="d-block img-fluid" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{ asset('assets/images/dashboard/dash-4.png')}}" class="d-block img-fluid" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{ asset('assets/images/dashboard/dash-2.png')}}" class="d-block img-fluid" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{ asset('assets/images/dashboard/dash-3.png')}}" class="d-block img-fluid" alt="...">
                                            </div>                                            
                                        </div>                                        
                                    </div>                                    
                                </div><!--end col-->
                                <div class="col-12 col-lg-6">
                                    <div class="divider-custom mb-0">
                                        <div class="divider-text bg-light">All Dashboard</div>
                                    </div>
                                    <div class="p-4 text-left">                                        
                                        <div class="row">                                            
                                            <div class="col-6">
                                                <a class="dropdown-item mb-2" href="index.html"> Analytics</a>
                                                <a class="dropdown-item mb-2" href="crypto-index.html"> Crypto</a>
                                                <a class="dropdown-item mb-2" href="crm-index.html"> CRM</a>
                                                <a class="dropdown-item" href="projects-index.html"> Project</a>
                                            </div>
                                            <div class="col-6">
                                                <a class="dropdown-item mb-2" href="ecommerce-index.html"> Ecommerce</a>
                                                <a class="dropdown-item mb-2" href="helpdesk-index.html"> Helpdesk</a>
                                                <a class="dropdown-item" href="hospital-index.html"> Hospital</a>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div><!--end col-->
                            </div><!--end row-->                                                       
                        </div>
                    </li>
                    <li class="hide-phone app-search">
                        <form role="search" class="">
                            <input type="text" id="AllCompo" placeholder="Search..." class="form-control">
                            <a href="#"><i class="fas fa-search"></i></a>
                        </form>
                    </li>
                </ul>
            </nav>
            <!-- end navbar-->
        </div>
        <!-- Top Bar End -->

        <div class="page-wrapper">

            <!-- Page Content-->
            <div class="page-content-tab">

                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="float-right">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Metrica</a></li>
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
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
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
                                        <div class="progress-bar bg-purple" role="progressbar" style="width: 39%;" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
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
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 48%;" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
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
                                            <div class="progress-bar bg-pink" role="progressbar" style="width: 22%;" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
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
                            <div class="row">
                                <div class="col-md-6 col-lg-6">                            
                                    <div class="card">
                                        <div class="card-body">
                                            <div class=" d-flex justify-content-between">
                                                <img src="{{ asset('assets/images/widgets/monthly-re.png')}}" alt="" height="80">
                                                <div class="align-self-center">
                                                    <h2 class="mt-0 mb-2 font-weight-semibold">$955<span class="badge badge-soft-success font-11 ml-2"><i class="fas fa-arrow-up"></i> 8.6%</span></h2>
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
                                <div class="col-md-6 col-lg-6">                            
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="card dash-data-card text-center">
                                                <div class="card-body"> 
                                                    <div class="icon-info mb-3">
                                                        <i class="fab fa-facebook bg-soft-primary"></i>
                                                    </div>
                                                    <h3 class="text-dark">184k</h3>
                                                    <h6 class="font-14 text-dark">Followers</h6>                                                                                                                            
                                                </div><!--end card-body--> 
                                            </div><!--end card-->   
                                        </div><!-- end col-->
                                        <div class="col-lg-6">
                                            <div class="card dash-data-card text-center">
                                                <div class="card-body"> 
                                                    <div class="icon-info mb-3">
                                                        <i class="fab fa-twitter bg-soft-secondary"></i>
                                                    </div>
                                                    <h3 class="text-dark">101k</h3>
                                                    <h6 class="font-14 text-dark">Followers</h6>                                                                                                                            
                                                </div><!--end card-body--> 
                                            </div><!--end card-->   
                                        </div><!-- end col-->  
                                                              
                                    </div><!--end row-->                         
                                </div><!--end col-->
                                
                            </div><!--end row-->     
                        </div><!--end col-->
                        <div class="col-xl-4">                            
                            <div class="card">
                                <div class="card-body dash-info-carousel">
                                    <h4 class="mt-0 header-title mb-4">New Leads</h4>
                                    <div id="carousel_2" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item">
                                                <div class="media">
                                                    <img src="{{ asset('assets/images/users/user-1.jpg')}}" class="mr-2 thumb-lg rounded-circle" alt="...">
                                                    <div class="media-body align-self-center">                                                          
                                                        <h4 class="mt-0 mb-1 title-text text-dark">Important Watch</h4>
                                                        <p class="text-muted mb-0">Python Devloper</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item active">
                                                <div class="media">
                                                    <img src="{{ asset('assets/images/users/user-2.jpg')}}" class="mr-2 thumb-lg rounded-circle" alt="...">
                                                    <div class="media-body align-self-center">                                                           
                                                        <h4 class="mt-0 mb-1 title-text">Wireless Headphone</h4>
                                                        <p class="text-muted mb-0">Python Devloper</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="media">
                                                    <img src="{{ asset('assets/images/users/user-3.jpg')}}" class="mr-2 thumb-lg rounded-circle" alt="...">
                                                    <div class="media-body align-self-center">                                                          
                                                        <h4 class="mt-0 mb-1 title-text">Leather Bag</h4>
                                                        <p class="text-muted mb-0">Python Devloper</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carousel_2" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel_2" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                   
                                    <div class="m-0">
                                        <div id="apex_radialbar3" class="apex-charts"></div>
                                    </div> 
                                    <div class="bg-light p-3 d-flex justify-content-between">
                                        <div>
                                            <h2 class="mb-1 font-weight-semibold">402</h2>
                                            <p class="text-muted mb-0">Recent Leads</p>
                                        </div>
                                        <div class="img-group align-self-center">
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="{{ asset('assets/images/users/user-6.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="{{ asset('assets/images/users/user-2.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="{{ asset('assets/images/users/user-3.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="{{ asset('assets/images/users/user-4.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a href="#" class="avatar-box thumb-xs align-self-center">
                                                <span class="avatar-title bg-soft-info rounded-circle font-13 font-weight-normal">+25</span>
                                            </a>    
                                        </div>
                                    </div>
                                    <div class="media mt-3">
                                        <i data-feather="globe" class="align-self-center icon-lg icon-dual-primary mr-2"></i>                                     
                                        <div class="media-body align-self-center">
                                            <h5 class="mt-0 mb-1">Website</h5>
                                            <a href="#" class="text-primary mb-0 font-14 pr-5">www.example123.com</a>
                                        </div><!--end media-body-->
                                    </div>
                                    <hr class="hr-dashed">
                                    <div class="media mt-3">
                                        <i data-feather="tag" class="align-self-center icon-lg icon-dual-primary mr-2"></i>                                     
                                        <div class="media-body align-self-center">
                                            <h5 class="mt-0 mb-1">Tags</h5>
                                            <span class="badge badge-light">HTML5</span>
                                            <span class="badge badge-light">Css3</span>
                                            <span class="badge badge-light">Python</span>
                                            <span class="badge badge-light">Flutter</span>
                                        </div><!--end media-body-->
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                    
                    
                    <div class="row">
                        <div class="col-lg-8">
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
                                                    <td><img src="{{ asset('assets/images/users/user-10.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">Donald Gardner</td>
                                                    <td>xyx@gmail.com</td>
                                                    <td>+123456789</td>
                                                    <td>Starbucks coffee</td>
                                                    <td> <span class="badge badge-md badge-soft-purple">New Lead</span></td>
                                                    <td>                                                                                                       
                                                        <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                        <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                    </td>
                                                </tr><!--end tr-->
                                                <tr>
                                                    <td><img src="{{ asset('assets/images/users/user-9.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">Matt Rosales</td>
                                                    <td>xyx@gmail.com</td>
                                                    <td>+123456789</td>
                                                    <td>Mac Donald</td>
                                                    <td> <span class="badge badge-md badge-soft-purple">New Lead</span></td>
                                                    <td>                                                       
                                                        <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                        <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                    </td>
                                                </tr><!--end tr-->
                                                <tr>
                                                    <td><img src="{{ asset('assets/images/users/user-8.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">Michael Hill</td>
                                                    <td>xyx@gmail.com</td>
                                                    <td>+123456789</td>
                                                    <td>Life Good</td>
                                                    <td> <span class="badge badge-md badge-soft-danger">Lost</span></td>
                                                    <td>                                                       
                                                        <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                        <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                    </td>
                                                </tr><!--end tr-->
                                                <tr>
                                                    <td><img src="{{ asset('assets/images/users/user-7.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">Nancy Flanary</td>
                                                    <td>xyx@gmail.com</td>
                                                    <td>+123456789</td>
                                                    <td>Flipcart</td>
                                                    <td> <span class="badge badge-md badge-soft-purple">New Lead</span></td>
                                                    <td>                                                       
                                                        <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                        <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                    </td>
                                                </tr><!--end tr--> 
                                                <tr>
                                                    <td><img src="{{ asset('assets/images/users/user-6.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">Dorothy Key</td>
                                                    <td>xyx@gmail.com</td>
                                                    <td>+123456789</td>
                                                    <td>Adidas</td>
                                                    <td> <span class="badge badge-md badge-soft-primary">Follow Up</span></td>
                                                    <td>                                                       
                                                        <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                        <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                    </td>
                                                </tr><!--end tr-->
                                                <tr>
                                                    <td><img src="{{ asset('assets/images/users/user-5.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">Joseph Cross</td>
                                                    <td>xyx@gmail.com</td>
                                                    <td>+123456789</td>
                                                    <td>Reebok</td>
                                                    <td> <span class="badge badge-md badge-soft-success">Converted</span></td>
                                                    <td>                                                       
                                                        <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                        <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                    </td>
                                                </tr><!--end tr-->                                    
                                            </tbody>
                                        </table>                    
                                    </div>  
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-4">
                            <div class="card">                                       
                                <div class="card-body"> 
                                    <h4 class="header-title mt-0 mb-3">Activity</h4>
                                    <div class="slimscroll crm-dash-activity">
                                        <div class="activity">
                                            <div class="activity-info">
                                                <div class="icon-info-activity">
                                                    <i class="mdi mdi-checkbox-marked-circle-outline bg-soft-success"></i>
                                                </div>
                                                <div class="activity-info-text">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h6 class="m-0 w-75">Task finished</h6>
                                                        <span class="text-muted d-block">10 Min ago</span>
                                                    </div>
                                                    <p class="text-muted mt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.
                                                        <a href="#" class="text-info">[more info]</a>
                                                    </p>
                                                </div>
                                            </div> 

                                            <div class="activity-info">
                                                <div class="icon-info-activity">
                                                    <i class="mdi mdi-timer-off bg-soft-pink"></i>
                                                </div>
                                                <div class="activity-info-text">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h6 class="m-0  w-75">Task Overdue</h6>
                                                        <span class="text-muted">50 Min ago</span>
                                                    </div>
                                                    <p class="text-muted mt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.
                                                        <a href="#" class="text-info">[more info]</a>
                                                    </p>
                                                    <span class="badge badge-soft-secondary">Design</span>
                                                    <span class="badge badge-soft-secondary">HTML</span>  
                                                </div>
                                            </div>
                                            <div class="activity-info">
                                                <div class="icon-info-activity">
                                                    <i class="mdi mdi-alert-decagram bg-soft-purple"></i>
                                                </div>
                                                <div class="activity-info-text">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h6 class="m-0  w-75">New Task</h6>
                                                        <span class="text-muted">10 hours ago</span>
                                                    </div> 
                                                    <p class="text-muted mt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.
                                                        <a href="#" class="text-info">[more info]</a>
                                                    </p>
                                                </div>
                                            </div>   

                                            <div class="activity-info">
                                                <div class="icon-info-activity">
                                                    <i class="mdi mdi-clipboard-alert bg-soft-warning"></i>
                                                </div>
                                                <div class="activity-info-text">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h6 class="m-0">New Comment</h6>
                                                        <span class="text-muted">Yesterday</span>
                                                    </div>
                                                    <p class="text-muted mt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.
                                                        <a href="#" class="text-info">[more info]</a>
                                                    </p>     
                                                </div>
                                            </div>  
                                            <div class="activity-info">
                                                <div class="icon-info-activity">
                                                    <i class="mdi mdi-clipboard-alert bg-soft-secondary"></i>
                                                </div>
                                                <div class="activity-info-text">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h6 class="m-0">New Lead Miting</h6>
                                                        <span class="text-muted">14 Nov 2019</span>
                                                    </div>
                                                    <p class="text-muted mt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.
                                                        <a href="#" class="text-info">[more info]</a>
                                                    </p> 
                                                </div>
                                            </div>                                                                                                              
                                        </div><!--end activity-->
                                    </div><!--end crm-dash-activity-->
                                </div>  <!--end card-body-->                                     
                            </div><!--end card--> 
                        </div><!--end col-->  
                    </div><!--end row-->

                </div><!-- container -->

                <!--  Modal content for the above example -->
                <div class="modal modal-rightbar fade" tabindex="-1" role="dialog" aria-labelledby="MetricaRightbar" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title mt-0" id="MetricaRightbar">Appearance</h5>
                                <button type="button" class="btn btn-sm btn-soft-primary btn-circle btn-square" data-dismiss="modal" aria-hidden="true"><i class="mdi mdi-close"></i></button>
                            </div>
                            <div class="modal-body">                                
                               <!-- Nav tabs -->
                               <ul class="nav nav-pills nav-justified mt-2 mb-4" role="tablist">
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link active" data-toggle="tab" href="#ActivityTab" role="tab">Activity</a>
                                    </li>
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link" data-toggle="tab" href="#TasksTab" role="tab">Tasks</a>
                                    </li>
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link" data-toggle="tab" href="#SettingsTab" role="tab">Settings</a>
                                    </li>
                                </ul>                                
                                
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active " id="ActivityTab" role="tabpanel">
                                        <div class="bg-light mx-n3">
                                            <img src="{{ asset('assets/images/small/img-1.gif')}}" alt="" class="d-block mx-auto my-4" height="180">
                                        </div>
                                        <div class="slimscroll scroll-rightbar">
                                            <div class="activity">
                                                <div class="activity-info">
                                                    <div class="icon-info-activity">
                                                        <i class="mdi mdi-checkbox-marked-circle-outline bg-soft-success"></i>
                                                    </div>
                                                    <div class="activity-info-text mb-2">
                                                        <div class="mb-1">
                                                            <small class="text-muted d-block mb-1">10 Min ago</small>
                                                            <a href="#" class="m-0 w-75">Task finished</a>                                                            
                                                        </div>
                                                        <p class="text-muted mb-2 text-truncate">There are many variations of passages.</p>
                                                    </div>
                                                </div> 
    
                                                <div class="activity-info">
                                                    <div class="icon-info-activity">
                                                        <i class="mdi mdi-timer-off bg-soft-pink"></i>
                                                    </div>
                                                    <div class="activity-info-text mb-2">
                                                        <div class="mb-1">
                                                            <small class="text-muted d-block mb-1">50 Min ago</small>
                                                            <a href="#" class="m-0 w-75">Task Overdue</a>                                                            
                                                        </div>
                                                        <p class="text-muted mb-2 text-truncate">There are many variations of passages.</p>
                                                        <span class="badge badge-soft-secondary">Design</span>
                                                        <span class="badge badge-soft-secondary">HTML</span>
                                                    </div>                                                   
                                                </div>
                                                <div class="activity-info">
                                                    <div class="icon-info-activity">
                                                        <i class="mdi mdi-alert-decagram bg-soft-purple"></i>
                                                    </div>
                                                    <div class="activity-info-text mb-2">
                                                        <div class="mb-1">
                                                            <small class="text-muted d-block mb-1">10 hours ago</small>
                                                            <a href="#" class="m-0 w-75">New Task</a>                                                            
                                                        </div>
                                                        <p class="text-muted mb-2 text-truncate">There are many variations of passages.</p>
                                                    </div>        
                                                </div>   
    
                                                <div class="activity-info">
                                                    <div class="icon-info-activity">
                                                        <i class="mdi mdi-clipboard-alert bg-soft-warning"></i>
                                                    </div>
                                                    <div class="activity-info-text mb-2">
                                                        <div class="mb-1">
                                                            <small class="text-muted d-block mb-1">yesterday</small>
                                                            <a href="#" class="m-0 w-75">New Comment</a>                                                            
                                                        </div>
                                                        <p class="text-muted mb-2 text-truncate">There are many variations of passages.</p>
                                                    </div>    
                                                </div>  
                                                <div class="activity-info">
                                                    <div class="icon-info-activity">
                                                        <i class="mdi mdi-clipboard-alert bg-soft-secondary"></i>
                                                    </div>
                                                    <div class="activity-info-text mb-2">
                                                        <div class="mb-1">
                                                            <small class="text-muted d-block mb-1">01 feb 2020</small>
                                                            <a href="#" class="m-0 w-75">New Lead Meting</a>                                                            
                                                        </div>
                                                        <p class="text-muted mb-2 text-truncate">There are many variations of passages.</p>
                                                    </div>    
                                                </div>   
                                                <div class="activity-info">
                                                    <div class="icon-info-activity">
                                                        <i class="mdi mdi-checkbox-marked-circle-outline bg-soft-success"></i>
                                                    </div>
                                                    <div class="activity-info-text mb-2">
                                                        <div class="mb-1">
                                                            <small class="text-muted d-block mb-1">26 jan 2020</small>
                                                            <a href="#" class="m-0 w-75">Task finished</a>                                                            
                                                        </div>
                                                        <p class="text-muted mb-2 text-truncate">There are many variations of passages.</p>
                                                    </div>
                                                </div>                                                                                                            
                                            </div><!--end activity-->
                                        </div><!--end activity-scroll-->
                                    </div><!--end tab-pane-->
                                    <div class="tab-pane" id="TasksTab" role="tabpanel">
                                        <div class="m-0">
                                            <div id="rightbar_chart" class="apex-charts"></div>                                            
                                        </div>  
                                        <div class="text-center mt-n2 mb-2">
                                            <button type="button" class="btn btn-soft-primary">Create Project</button>
                                            <button type="button" class="btn btn-soft-primary">Create Task</button>
                                        </div>
                                        <div class="slimscroll scroll-rightbar">
                                            <div class="p-2">
                                                <div class="media mb-3">
                                                    <img src="assets/images/widgets/project3.jpg" alt="" class="thumb-lg rounded-circle">                                      
                                                    <div class="media-body align-self-center text-truncate ml-3">
                                                        <p class="text-success font-weight-semibold mb-0 font-14">Project</p>
                                                        <h4 class="mt-0 mb-0 font-weight-semibold text-dark font-18">Payment App</h4>                                            
                                                    </div><!--end media-body-->
                                                </div>
                                                <span><b>Deadline:</b> 02 June 2020</span>
                                                <a href="javascript: void(0);" class="d-block mt-3">
                                                    <p class="text-muted mb-0">Complete Tasks<span class="float-right">75%</span></p>
                                                    <div class="progress mt-2" style="height: 4px;">
                                                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </a>                                            
                                            </div>
                                            <hr class="hr-dashed">                                            
                                        </div>                                        
                                    </div><!--end tab-pane-->
                                    <div class="tab-pane" id="SettingsTab" role="tabpanel">
                                        <div class="p-1 bg-light mx-n3">
                                            <h6 class="px-3">Account Settings</h6>
                                        </div>
                                        <div class="p-2 text-left mt-3">
                                            <div class="custom-control custom-switch switch-primary mb-3">
                                                <input type="checkbox" class="custom-control-input" id="settings-switch1" checked="">
                                                <label class="custom-control-label" for="settings-switch1">Auto updates</label>
                                            </div>

                                            <div class="custom-control custom-switch switch-primary mb-3">
                                                <input type="checkbox" class="custom-control-input" id="settings-switch2">
                                                <label class="custom-control-label" for="settings-switch2">Location Permission</label>
                                            </div>

                                            <div class="custom-control custom-switch switch-primary mb-3">
                                                <input type="checkbox" class="custom-control-input" id="settings-switch3" checked="">
                                                <label class="custom-control-label" for="settings-switch3">Show offline Contacts</label>
                                            </div>    
                                        </div>
                                        <div class="p-1 bg-light mx-n3">
                                            <h6 class="px-3">General Settings</h6>
                                        </div>
                                        <div class="p-2 text-left mt-3">
                                            <div class="custom-control custom-switch switch-primary mb-3">
                                                <input type="checkbox" class="custom-control-input" id="settings-switch4" checked="">
                                                <label class="custom-control-label" for="settings-switch4">Show me Online</label>
                                            </div>

                                            <div class="custom-control custom-switch switch-primary mb-3">
                                                <input type="checkbox" class="custom-control-input" id="settings-switch5">
                                                <label class="custom-control-label" for="settings-switch5">Status visible to all</label>
                                            </div>

                                            <div class="custom-control custom-switch switch-primary mb-3">
                                                <input type="checkbox" class="custom-control-input" id="settings-switch6" checked="">
                                                <label class="custom-control-label" for="settings-switch6">Notifications Popup</label>
                                            </div> 
                                        </div>
                                    </div><!--end tab-pane-->
                                </div> <!--end tab-content--> 
                            </div><!--end modal-body-->
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal --> 

                <footer class="footer text-center text-sm-left">
                    &copy; 2019 - 2020 Metrica <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
                </footer><!--end footer-->
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

        


        <!-- jQuery  -->
        <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{ asset('assets/js/jquery-ui.min.js')}}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('assets/js/metismenu.min.js')}}"></script>
        <script src="{{ asset('assets/js/waves.js')}}"></script>
        <script src="{{ asset('assets/js/feather.min.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.slimscroll.min.js')}}"></script>
        <script src="https://mannatthemes.com/metrica_mvc5/plugins/apexcharts/apexcharts.min.js"></script> 

        <script src="{{ asset('assets/pages/jquery.crm_dashboard.init.js')}}"></script> 
        
        <!-- App js -->
        <script src="{{ asset('assets/js/app.js')}}"></script>
        
    </body>


</html>