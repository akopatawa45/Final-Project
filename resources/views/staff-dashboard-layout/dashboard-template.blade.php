<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" type="image/x-icon" href="assets/img/logo-favi.png">

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <link rel="stylesheet" href="assets/css/lnr-icon.css">

        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <link rel="stylesheet" href="assets/css/style.css">
        <title>index Page</title>

        <!--[if lt IE 9]>
  <script src="assets/js/html5shiv.min.js"></script>
  <script src="assets/js/respond.min.js"></script>
  <![endif]-->
    </head>

    <body>

        <div id="loader-wrapper">
            <div class="loader">
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
        </div>

        <div class="inner-wrapper">

            <header class="header">

                <div class="top-header-section">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                                <div class="logo my-sm-0 my-3">
                                    <a href="{{ route('home') }}">
                                        <img src="assets/img/hr-logo1.png" style="border-radius: 15%;" alt="logo image"
                                            class="img-fluid" width="100">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-9 col-6 text-right">
                                <div class="user-block d-none d-lg-block">
                                    <div class="row align-items-center">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="user-notification-block align-right d-inline-block">
                                                <div class="top-nav-search">
                                                    <form>
                                                        <input type="text" class="form-control"
                                                            placeholder="Search here">
                                                        <button class="btn" type="submit"><i
                                                                class="fa fa-search"></i></button>
                                                    </form>
                                                </div>
                                            </div>

                                            <div class="user-notification-block align-right d-inline-block">
                                                <ul class="list-inline m-0">
                                                    <li class="list-inline-item" data-toggle="tooltip"
                                                        data-placement="top" title=""
                                                        data-original-title="Apply Leave">
                                                        <a href="/view-home-page-of-staff-account"
                                                            class="font-23 menu-style align-middle text-white">
                                                            <span class="lnr lnr-briefcase position-relative"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="user-info align-right dropdown d-inline-block header-dropdown">
                                                <a href="javascript:void(0)" data-toggle="dropdown"
                                                    class="menu-style dropdown-toggle">
                                                    <div class="user-avatar d-inline-block">
                                                        <img src="{{ asset('dashboard-template') }}/img/undraw_profile.svg"
                                                            alt="user avatar" class="rounded-circle img-fluid"
                                                            width="55">
                                                    </div>
                                                </a>

                                                <div
                                                    class="dropdown-menu notification-dropdown-menu dropdown-menu-right m-0 border-0 p-3 shadow-lg">
                                                    <a class="dropdown-item p-2"
                                                        href="/view-home-page-of-staff-account">
                                                        <span class="media align-items-center">
                                                            <span class="lnr lnr-user mr-3"></span>
                                                            <span class="media-body text-truncate">
                                                                <span class="text-truncate">Profile</span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                    <a class="dropdown-item p-2"
                                                        href="/view-settings-index-of-staff-account">
                                                        <span class="media align-items-center">
                                                            <span class="lnr lnr-cog mr-3"></span>
                                                            <span class="media-body text-truncate">
                                                                <span class="text-truncate">Settings</span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                    <a class="dropdown-item p-2" href="/handle-logout">
                                                        <span class="media align-items-center">
                                                            <span class="lnr lnr-power-switch mr-3"></span>
                                                            <span class="media-body text-truncate">
                                                                <span class="text-truncate">Logout</span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="d-block d-lg-none">
                                    <a href="javascript:void(0)">
                                        <span class="lnr lnr-user d-block display-5 text-white"
                                            id="open_navSidebar"></span>
                                    </a>

                                    <div class="offcanvas-menu" id="offcanvas_menu">
                                        <span
                                            class="lnr lnr-cross display-6 position-absolute t-1 l-1 float-left text-white"
                                            id="close_navSidebar"></span>
                                        <div class="user-info align-center bg-theme text-center">
                                            <a href="javascript:void(0)" class="d-block menu-style text-white">
                                                <div class="user-avatar d-inline-block mr-3">
                                                    <img src="assets/img/profiles/img-6.jpg" alt="user avatar"
                                                        class="rounded-circle img-fluid" width="55">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="user-notification-block align-center">
                                            <div class="top-nav-search">
                                                <form>
                                                    <input type="text" class="form-control"
                                                        placeholder="Search here">
                                                    <button class="btn" type="submit"><i
                                                            class="fa fa-search"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="user-menu-items m-0 px-3">
                                            <a class="px-0 pb-2 pt-0" href="employees-dashboard.html">
                                                <span class="media align-items-center">
                                                    <span class="lnr lnr-home mr-3"></span>
                                                    <span class="media-body text-truncate text-left">
                                                        <span class="text-truncate text-left">Dashboard</span>
                                                    </span>
                                                </span>
                                            </a>
                                            <a class="p-2" href="employees.html">
                                                <span class="media align-items-center">
                                                    <span class="lnr lnr-users mr-3"></span>
                                                    <span class="media-body text-truncate text-left">
                                                        <span class="text-truncate text-left">Employees</span>
                                                    </span>
                                                </span>
                                            </a>
                                            <a class="p-2" href="employees-list">
                                                <span class="media align-items-center">
                                                    <span class="lnr lnr-apartment mr-3"></span>
                                                    <span class="media-body text-truncate text-left">
                                                        <span class="text-truncate text-left">Company</span>
                                                    </span>
                                                </span>
                                            </a>
                                            <a class="p-2" href="employees-list">
                                                <span class="media align-items-center">
                                                    <span class="lnr lnr-calendar-full mr-3"></span>
                                                    <span class="media-body text-truncate text-left">
                                                        <span class="text-truncate text-left">Calendar</span>
                                                    </span>
                                                </span>
                                            </a>
                                            <a class="p-2" href="leave.html">
                                                <span class="media align-items-center">
                                                    <span class="lnr lnr-briefcase mr-3"></span>
                                                    <span class="media-body text-truncate text-left">
                                                        <span class="text-truncate text-left">Leave</span>
                                                    </span>
                                                </span>
                                            </a>
                                            <a class="p-2" href="employees-list">
                                                <span class="media align-items-center">
                                                    <span class="lnr lnr-star mr-3"></span>
                                                    <span class="media-body text-truncate text-left">
                                                        <span class="text-truncate text-left">Reviews</span>
                                                    </span>
                                                </span>
                                            </a>
                                            <a class="p-2" href="leave-reports.html">
                                                <span class="media align-items-center">
                                                    <span class="lnr lnr-rocket mr-3"></span>
                                                    <span class="media-body text-truncate text-left">
                                                        <span class="text-truncate text-left">Reports</span>
                                                    </span>
                                                </span>
                                            </a>
                                            <a class="p-2" href="employees-list">
                                                <span class="media align-items-center">
                                                    <span class="lnr lnr-sync mr-3"></span>
                                                    <span class="media-body text-truncate text-left">
                                                        <span class="text-truncate text-left">Manage</span>
                                                    </span>
                                                </span>
                                            </a>
                                            <a class="p-2" href="admin.html">
                                                <span class="media align-items-center">
                                                    <span class="lnr lnr-cog mr-3"></span>
                                                    <span class="media-body text-truncate text-left">
                                                        <span class="text-truncate text-left">Settings</span>
                                                    </span>
                                                </span>
                                            </a>
                                            <a class="p-2" href="details.html">
                                                <span class="media align-items-center">
                                                    <span class="lnr lnr-user mr-3"></span>
                                                    <span class="media-body text-truncate text-left">
                                                        <span class="text-truncate text-left">Profile</span>
                                                    </span>
                                                </span>
                                            </a>
                                            <a class="p-2" href="index.html">
                                                <span class="media align-items-center">
                                                    <span class="lnr lnr-power-switch mr-3"></span>
                                                    <span class="media-body text-truncate text-left">
                                                        <span class="text-truncate text-left">Logout</span>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </header>

            <div class="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-12 theiaStickySidebar">
                            <aside class="sidebar sidebar-user">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card ctm-border-radius grow shadow-sm">
                                            <div class="card-body py-4">
                                                <div class="row">
                                                    <div class="col-md-12 mr-auto text-left">
                                                        <div class="custom-search input-group">
                                                            <div class="custom-breadcrumb">
                                                                <ol
                                                                    class="breadcrumb no-bg-color d-inline-block m-0 mb-2 p-0">
                                                                    <li class="breadcrumb-item d-inline-block"><a
                                                                            href="employees-dashboard.html"
                                                                            class="text-dark">Home</a></li>
                                                                    <li class="breadcrumb-item d-inline-block active">
                                                                        Dashboard</li>
                                                                </ol>
                                                                <h4 class="text-dark">Employees Dashboard</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="user-card card ctm-border-radius grow bg-white text-center shadow-sm">
                                    <div class="user-info card-body">
                                        <div class="user-avatar mb-4">

                                            <img src="{{ asset('dashboard-template') }}/img/undraw_profile.svg"
                                                alt="User Avatar" class="img-fluid rounded-circle" width="100">
                                        </div>
                                        <div class="user-details">
                                            <h4><b>Welcome {{ $staff_basic_data[0]->firstname }}
                                                    {{ $staff_basic_data[0]->lastname }}</b></h4>
                                            <p>{{ date('D,d M Y') }}</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="sidebar-wrapper d-lg-block d-md-none d-none">
                                    <div class="card ctm-border-radius grow border-none shadow-sm">
                                        <div class="card-body">
                                            <div class="row no-gutters">
                                                <div class="col-12 align-items-center text-center">
                                                    <a href="/view-home-page-of-staff-account"
                                                        class="{{ Request::path() === 'view-home-page-of-staff-account' ? 'text-white active' : 'text-dark' }} first-slider-btn ctm-border-right ctm-border-left ctm-border-top p-4"><span
                                                            class="lnr lnr-home pb-lg-2 font-23 pr-0"></span><span
                                                            class="">Homepage</span></a>
                                                </div>
                                                <div class="col-12 align-items-center text-center shadow-none">
                                                    <a href="/view-my-leave-history-of-staff-account"
                                                        class="{{ Request::path() === 'view-my-leave-history-of-staff-account' ? 'text-white active' : 'text-dark' }} second-slider-btn ctm-border-right ctm-border-top p-4"><span
                                                            class="lnr lnr-users pb-lg-2 font-23 pr-0"></span><span
                                                            class="">My Leave History</span></a>
                                                </div>

                                                <div class="col-6 align-items-center text-center shadow-none">
                                                    <a href="/view-settings-index-of-staff-account"
                                                        class="{{ Request::path() === 'view-settings-index-of-staff-account' ? 'text-white active' : 'text-dark' }} ctm-border-right ctm-border-left p-4"><span
                                                            class="lnr lnr-cog pb-lg-2 font-23 pr-0"></span><span
                                                            class="">Settings</span></a>
                                                </div>
                                                <div class="col-6 align-items-center text-center shadow-none">
                                                    <a href="/handle-logout"
                                                        class="{{ Request::path() === 'handle-logout' ? 'text-white active' : 'text-dark' }} last-slider-btn ctm-border-right p-4"><span
                                                            class="lnr lnr-power-switch pb-lg-2 font-23 pr-0"></span><span
                                                            class="">Logout</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </aside>
                        </div>
                        <div class="col-xl-9 col-lg-8 col-md-12">

                            @yield('dashboard-staff-content')

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>

        </div>

        <div class="sidebar-overlay" id="sidebar_overlay"></div>

        <script src="assets/js/jquery-3.2.1.min.js"></script>

        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>

        <script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
        <script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

        <script src="assets/js/script.js"></script>
    </body>

</html>
