<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Soyuz is a bootstrap 4x + laravel admin dashboard template">
    <meta name="keywords"
          content="admin, admin dashboard, admin panel, admin template, analytics, bootstrap 4, laravel, clean, crm, ecommerce, hospital, responsive, rtl, sass support, ui kits">
    <meta name="author" content="Themesbox17">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>{{$title??''}}</title>
    <!-- Fevicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <!-- Start css -->
    <!-- Apex css -->
    <link href="{{asset('assets/dashboard/plugins/apexcharts/apexcharts.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- DataTables css -->
    <link href="{{asset('')}}assets/dashboard/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('')}}assets/dashboard/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet"
          type="text/css"/>
    <!-- Responsive Datatable css -->
    <link href="{{asset('')}}assets/dashboard/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet"
          type="text/css"/>
    <!-- jvectormap css -->
    <link href="{{asset('assets/dashboard/plugins/jvectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet">
    <!-- Slick css -->
    <link href="{{asset('assets/dashboard/plugins/slick/slick.css')}}" rel="stylesheet">
    <link href="{{asset('assets/dashboard/plugins/slick/slick-theme.css')}}" rel="stylesheet">
    <!-- Switchery css -->
    <link href="{{asset('assets/dashboard/plugins/switchery/switchery.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/dashboard/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/dashboard/css/icons.css')}}/" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/dashboard/css/flag-icon.min.css')}}=" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/dashboard/css/style.css')}}" rel="stylesheet" type="text/css">
    <!-- End css -->
</head>

<body class="vertical-layout">
<!-- Start Infobar Setting Sidebar -->
<div id="infobar-settings-sidebar" class="infobar-settings-sidebar">
    <div class="infobar-settings-sidebar-head d-flex w-100 justify-content-between">
        <h4>Settings</h4><a href="javascript:void(0)" id="infobar-settings-close" class="infobar-settings-close"><img
                src="{{asset('assets/dashboard/images/svg-icon/close.svg')}}" class="img-fluid menu-hamburger-close"
                alt="close"></a>
    </div>
    <div class="infobar-settings-sidebar-body">
        <div class="custom-mode-setting">
            <div class="row align-items-center pb-3">
                <div class="col-8"><h6 class="mb-0">New Order Notification</h6></div>
                <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-first" checked/></div>
            </div>
            <div class="row align-items-center pb-3">
                <div class="col-8"><h6 class="mb-0">Low Stock Alerts</h6></div>
                <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-second" checked/></div>
            </div>
            <div class="row align-items-center pb-3">
                <div class="col-8"><h6 class="mb-0">Vacation Mode</h6></div>
                <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-third"/></div>
            </div>
            <div class="row align-items-center pb-3">
                <div class="col-8"><h6 class="mb-0">Order Tracking</h6></div>
                <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-fourth" checked/></div>
            </div>
            <div class="row align-items-center pb-3">
                <div class="col-8"><h6 class="mb-0">Newsletter Subscription</h6></div>
                <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-fifth" checked/></div>
            </div>
            <div class="row align-items-center pb-3">
                <div class="col-8"><h6 class="mb-0">Show Review</h6></div>
                <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-sixth"/></div>
            </div>
            <div class="row align-items-center pb-3">
                <div class="col-8"><h6 class="mb-0">Enable Wallet</h6></div>
                <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-seventh" checked/></div>
            </div>
            <div class="row align-items-center">
                <div class="col-8"><h6 class="mb-0">Sales Report</h6></div>
                <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-eightth" checked/></div>
            </div>
        </div>
        <div class="custom-layout-setting">
            <div class="row align-items-center pb-3">
                <div class="col-12">
                    <h6 class="mb-3">Select Account</h6>
                </div>
                <div class="col-6">
                    <div class="account-box active">
                        <img src="assets/images/users/boy.svg" class="img-fluid" alt="user">
                        <h5>John</h5>
                        <p>CEO</p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="account-box">
                        <img src="assets/images/users/women.svg" class="img-fluid" alt="user">
                        <h5>Kate</h5>
                        <p>COO</p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="account-box">
                        <img src="assets/images/users/men.svg" class="img-fluid" alt="user">
                        <h5>Mark</h5>
                        <p>MD</p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="account-box">
                        <p class="dash-analytic-icon"><i class="feather icon-plus font-35"></i></p>
                        <h5>Add</h5>
                        <p>ACCOUNT</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="infobar-settings-sidebar-overlay"></div>
<!-- End Infobar Setting Sidebar -->
<!-- Start Containerbar -->
<div id="containerbar">
    <!-- Start Leftbar -->
    <div class="leftbar">
        <!-- Start Sidebar -->
        <div class="sidebar">
            <!-- Start Navigationbar -->
            <div class="navigationbar">

                <div class="vertical-menu-detail">
                    <div class="logobar">
                        <a href="" class="logo logo-large"><img
                                src="{{asset('assets/dashboard/images/logo.svg')}}" class="img-fluid" alt="logo"></a>
                    </div>
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-crm" role="tabpanel"
                             aria-labelledby="v-pills-crm-tab">
                            <ul class="vertical-menu">
                                <li><h5 class="menu-title">Devs Community</h5></li>
                                <li><a href=""><img
                                            src="{{asset('assets/dashboard/images/svg-icon/dashboard.svg')}}"
                                            class="img-fluid" alt="dashboard">Users</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <!-- End Navigationbar -->
        </div>
        <!-- End Sidebar -->
    </div>
    <!-- End Leftbar -->
    <!-- Start Rightbar -->
    <div class="rightbar">
        <!-- Start Topbar Mobile -->
        <div class="topbar-mobile">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="mobile-logobar">
                        <a href="index.html" class="mobile-logo"><img src="assets/images/logo.svg" class="img-fluid"
                                                                      alt="logo"></a>
                    </div>
                    <div class="mobile-togglebar">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <div class="topbar-toggle-icon">
                                    <a class="topbar-toggle-hamburger" href="javascript:void();">
                                        <img src="{{asset('assets/dashboard/images/svg-icon/horizontal.svg')}}"
                                             class="img-fluid menu-hamburger-horizontal" alt="horizontal">
                                        <img src="{{asset('assets/dashboard/images/svg-icon/verticle.svg')}}"
                                             class="img-fluid menu-hamburger-vertical" alt="verticle">
                                    </a>
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <div class="menubar">
                                    <a class="menu-hamburger" href="javascript:void();">
                                        <img src="{{asset('assets/dashboard/assets/images/svg-icon/menu.svg')}}"
                                             class="img-fluid menu-hamburger-collapse" alt="collapse">
                                        <img src="{{asset('assets/dashboard/assets/images/svg-icon/close.svg')}}"
                                             class="img-fluid menu-hamburger-close" alt="close">
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Topbar -->
        <div class="topbar">
            <!-- Start row -->
            <div class="row align-items-center">
                <!-- Start col -->
                <div class="col-md-12 align-self-center">
                    <div class="togglebar">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <div class="menubar">
                                    <a class="menu-hamburger" href="javascript:void();">
                                        <img src="{{asset('assets/dashboard/images/svg-icon/menu.svg')}}"
                                             class="img-fluid menu-hamburger-collapse" alt="menu">
                                        <img src="{{asset('assets/dashboard/images/svg-icon/close.svg')}}"
                                             class="img-fluid menu-hamburger-close" alt="close">
                                    </a>
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <div class="searchbar">
                                    <form>
                                        <div class="input-group">
                                            <div class="input-group-append">
                                                <button class="btn" type="submit" id="button-addonSearch"><img
                                                        src="{{asset('assets/dashboard/images/svg-icon/search.svg')}}"
                                                        class="img-fluid" alt="search"></button>
                                            </div>
                                            <input type="search" class="form-control" placeholder="Search"
                                                   aria-label="Search" aria-describedby="button-addonSearch">
                                        </div>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="infobar">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <div class="notifybar">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle infobar-icon" href="#" role="button"
                                           id="notoficationlink" data-toggle="dropdown" aria-haspopup="true"
                                           aria-expanded="false"><img
                                                src="{{asset('assets/dashboard/images/svg-icon/notifications.svg')}}"
                                                class="img-fluid" alt="notifications">
                                            <span class="live-icon">2</span></a>
                                        <div class="dropdown-menu dropdown-menu-right"
                                             aria-labelledby="notoficationlink">
                                            <div class="notification-dropdown-title">
                                                <h4>Notifications</h4>
                                            </div>
                                            <ul class="list-unstyled">
                                                <li class="media dropdown-item">
                                                    <span class="action-icon badge badge-success-inverse">N</span>
                                                    <div class="media-body">
                                                        <h5 class="action-title">New trends for you</h5>
                                                        <p><span class="timing">10 min ago</span></p>
                                                    </div>
                                                </li>
                                                <li class="media dropdown-item">
                                                    <span class="action-icon badge badge-primary-inverse"><i
                                                            class="feather icon-gift"></i></span>
                                                    <div class="media-body">
                                                        <h5 class="action-title">John birthday today</h5>
                                                        <p><span class="timing">Today, 12:00 AM</span></p>
                                                    </div>
                                                </li>
                                                <li class="media dropdown-item">
                                                    <span class="action-icon badge badge-warning-inverse">T</span>
                                                    <div class="media-body">
                                                        <h5 class="action-title">This is start of your story</h5>
                                                        <p><span class="timing">Yesterday, 01:25 PM</span></p>
                                                    </div>
                                                </li>
                                                <li class="media dropdown-item">
                                                    <span class="action-icon badge badge-danger-inverse"><i
                                                            class="feather icon-thumbs-up"></i></span>
                                                    <div class="media-body">
                                                        <h5 class="action-title">Admin has 1 new like</h5>
                                                        <p><span class="timing">5 Feb 2020, 03:31 PM</span></p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <div class="profilebar">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="profilelink"
                                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                                src="{{asset('assets/dashboard/images/users/profile.svg')}}"
                                                class="img-fluid" alt="profile"><span
                                                class="live-icon">{{\Illuminate\Support\Facades\Auth::user()->name}}</span><span
                                                class="feather icon-chevron-down live-icon"></span></a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profilelink">
                                            <div class="dropdown-item">
                                                <div class="profilename">
                                                    <h5>{{\Illuminate\Support\Facades\Auth::user()->name}}</h5>
                                                </div>
                                            </div>
                                            <div class="userbox">
                                                <ul class="list-unstyled mb-0">
                                                    <li class="media dropdown-item">
                                                        <a href="#" class="profile-icon"><img
                                                                src="{{asset('assets/dashboard/images/svg-icon/crm.svg')}}"
                                                                class="img-fluid" alt="user">My Profile</a>
                                                    </li>
                                                    <li class="media dropdown-item">
                                                        <a href="#" class="profile-icon"><img
                                                                src="{{asset('assets/dashboard/images/svg-icon/email.svg')}}"
                                                                class="img-fluid" alt="email">Email</a>
                                                    </li>
                                                    <li class="media dropdown-item">
                                                        <form action="{{ route('logout') }}" method="POST">
                                                            @csrf
                                                            <button class="profile-icon" type="submit"><img
                                                                    src="{{asset('assets/dashboard/images/svg-icon/logout.svg')}}"
                                                                    class="img-fluid" alt="logout">Logout
                                                            </button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End col -->
            </div>
            <!-- End row -->
        </div>
        <!-- End Topbar -->
        <!-- Start Breadcrumbbar -->
        <div class="breadcrumbbar">
            <div class="row align-items-center">
                <div class="col-md-8 col-lg-8">
                    <h4 class="page-title">{{$pageName??''}}</h4>
                    <div class="breadcrumb-list">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">CRM</li>
                        </ol>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    {{$action??''}}
                </div>
            </div>
        </div>
        <!-- End Breadcrumbbar -->
        <!-- Start Contentbar -->
        <div class="contentbar">
            <!-- Start row -->
            <div class="row">
                {{$slot??''}}
                <!-- End row -->
            </div>
            <!-- End Contentbar -->
            <!-- Start Footerbar -->
            <div class="footerbar">
                <footer class="footer">
                    <p class="mb-0">© 2020 Soyuz - All Rights Reserved.</p>
                </footer>
            </div>
            <!-- End Footerbar -->
        </div>
        <!-- End Rightbar -->
    </div>
    <!-- End Containerbar -->
    <!-- Start js -->

    <script src="{{asset('assets/dashboard/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/dashboard/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/dashboard/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/dashboard/assets/js/modernizr.min.js')}}"></script>
    <script src="{{asset('assets/dashboard/js/detect.js')}}"></script>
    <script src="{{asset('assets/dashboard/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('assets/dashboard/js/vertical-menu.js')}}"></script>
    <!-- Switchery js -->
    <script src="{{asset('assets/dashboard/plugins/switchery/switchery.min.js')}}"></script>
    <!-- Apex js -->
    <script src="{{asset('assets/dashboard/plugins/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/dashboard/plugins/apexcharts/irregular-data-series.js')}}"></script>
    <!-- Slick js -->
    <script src="{{asset('assets/dashboard/plugins/slick/slick.min.js')}}"></script>
    <!-- Vector Maps js -->
    <script src="{{asset('assets/dashboard/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('assets/dashboard/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <!-- Custom Dashboard js -->
    <script src="{{asset('assets/dashboard/js/custom/custom-dashboard.js')}}"></script>
    <!-- Core js -->
    <script src="{{asset('assets/dashboard/js/core.js')}}"></script>
    <!-- Datatable js -->
    <script src="{{asset('')}}assets/dashboard/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{asset('')}}assets/dashboard/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="{{asset('')}}assets/dashboard/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="{{asset('')}}assets/dashboard/plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="{{asset('')}}assets/dashboard/plugins/datatables/jszip.min.js"></script>
    <script src="{{asset('')}}assets/dashboard/plugins/datatables/pdfmake.min.js"></script>
    <script src="{{asset('')}}assets/dashboard/plugins/datatables/vfs_fonts.js"></script>
    <script src="{{asset('')}}assets/dashboard/plugins/datatables/buttons.html5.min.js"></script>
    <script src="{{asset('')}}assets/dashboard/plugins/datatables/buttons.print.min.js"></script>
    <script src="{{asset('')}}assets/dashboard/plugins/datatables/buttons.colVis.min.js"></script>
    <script src="{{asset('')}}assets/dashboard/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="{{asset('')}}assets/dashboard/plugins/datatables/responsive.bootstrap4.min.js"></script>
    <script src="{{asset('')}}assets/dashboard/js/custom/custom-table-datatable.js"></script>
    <!-- End js -->
</body>
</html>
