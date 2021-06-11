<!-- header section start -->

<!doctype html>
<html lang="en">
<head>
<title>UU Cse Management Tool</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="UU CSE Management Tool Admin Template">

<link rel="icon" href="favicon.ico" type="image/x-icon">


<!-- header section end -->



<!-- css section start -->
<!-- VENDOR CSS -->
<link rel="stylesheet" href="{{ asset('backend/vendor/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('backend/vendor/font-awesome/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('backend/vendor/jvectormap/jquery-jvectormap-2.0.3.min.css') }}"/>
<link rel="stylesheet" href="{{ asset('backend/vendor/chartist/css/chartist.min.css') }}">

<!-- MAIN CSS -->
<link rel="stylesheet" href="{{ asset('backend/css/main.css') }}">
<link rel="stylesheet" href="{{ asset('backend/css/color_skins.css') }}">
<!-- css section end -->

</head>
<body class="theme-blue">

    <!-- Page Loader start-->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30 text-white">
                <!-- <img src="http://www.wrraptheme.com/templates/lucid/university/html/assets/images/logo-icon.svg" width="48" height="48" alt="Lucid"> -->
                UU CSE MANAGEMENT TOOL
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- Page Loader end-->

    <div id="wrapper">



        <!-- nav section start -->
        <nav class="navbar navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-btn">
                    <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
                </div>

                <div class="navbar-brand">
                    <a href="index.html" style="color: #5A5A5A; font-weight: bold" class="">
                        <!-- <img src="http://www.wrraptheme.com/templates/lucid/university/html/assets/images/logo.svg" alt="Lucid Logo" class="img-responsive logo"> -->
                        <img src="{{ asset('backend/img/logo/admin-logo1.png') }}" alt="Lucid Logo" class="img-responsive logo">
                        <!-- UUCMT -->
                    </a>
                </div>
                
                <div class="navbar-right">
                    <form id="navbar-search" class="navbar-form search-form">
                        <input value="" class="form-control" placeholder="Search here..." type="text">
                        <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
                    </form>

                    <div id="navbar-menu">
                        <ul class="nav navbar-nav">
                            <li><a href="events.html" class="icon-menu d-none d-sm-block d-md-none d-lg-block"><i class="icon-calendar"></i></a></li>
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                    <i class="icon-bell"></i>
                                    <span class="notification-dot"></span>
                                </a>
                                <ul class="dropdown-menu notifications">
                                    <li class="header"><strong>You have 4 new Notifications</strong></li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <div class="media-left">
                                                    <i class="icon-info text-warning"></i>
                                                </div>
                                                <div class="media-body">
                                                    <p class="text">Campaign <strong>Holiday Sale</strong> is nearly reach budget limit.</p>
                                                    <span class="timestamp">10:00 AM Today</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <div class="media-left">
                                                    <i class="icon-like text-success"></i>
                                                </div>
                                                <div class="media-body">
                                                    <p class="text">Your New Campaign <strong>Holiday Sale</strong> is approved.</p>
                                                    <span class="timestamp">11:30 AM Today</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                     <li>
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <div class="media-left">
                                                    <i class="icon-pie-chart text-info"></i>
                                                </div>
                                                <div class="media-body">
                                                    <p class="text">Website visits from Twitter is 27% higher than last week.</p>
                                                    <span class="timestamp">04:00 PM Today</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <div class="media-left">
                                                    <i class="icon-info text-danger"></i>
                                                </div>
                                                <div class="media-body">
                                                    <p class="text">Error on website analytics configurations</p>
                                                    <span class="timestamp">Yesterday</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="footer"><a href="javascript:void(0);" class="more">See all notifications</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown"><i class="icon-equalizer"></i></a>
                                <ul class="dropdown-menu user-menu menu-icon">
                                    <li class="menu-heading">ACCOUNT SETTINGS</li>
                                    <li><a href="javascript:void(0);"><i class="icon-note"></i> <span>Basic</span></a></li>
                                    <li><a href="javascript:void(0);"><i class="icon-equalizer"></i> <span>Preferences</span></a></li>
                                    <li><a href="javascript:void(0);"><i class="icon-lock"></i> <span>Privacy</span></a></li>
                                    <li><a href="javascript:void(0);"><i class="icon-bell"></i> <span>Notifications</span></a></li>
                                    <li class="menu-heading">BILLING</li>
                                    <li><a href="javascript:void(0);"><i class="icon-credit-card"></i> <span>Payments</span></a></li>
                                    <li><a href="javascript:void(0);"><i class="icon-printer"></i> <span>Invoices</span></a></li>
                                    <li><a href="javascript:void(0);"><i class="icon-refresh"></i> <span>Renewals</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#logout" onclick="event.preventDefault();document.getElementById('logout_form').submit();" class="icon-menu"><i class="icon-login"></i></a>

                                <form action="{{ route('logout') }}" method="POST" id="logout_form" style="display: none;">
                                    @csrf
                                    
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- nav section end -->

        <!-- left sidebar start -->
        <div id="left-sidebar" class="sidebar">
            <div class="sidebar-scroll">
                <div class="user-account">
                    <img src="{{ asset('backend/images/user.png') }}" class="rounded-circle user-photo" alt="User Profile Picture">
                    <div class="dropdown">
                        <span>Welcome,</span>
                        <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>Farhan Siddique</strong></a>
                        <ul class="dropdown-menu dropdown-menu-right account">
                            <li><a href="professors-profile.html"><i class="icon-user"></i>My Profile</a></li>
                            <li><a href="app-inbox.html"><i class="icon-envelope-open"></i>Messages</a></li>
                            <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
                            <li class="divider"></li>
                            <li><a href="page-login.html"><i class="icon-power"></i>Logout</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#admin">Admin</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#setting"><i class="icon-settings"></i></a></li>
                </ul>
                    
                <!-- Tab panes -->
                <div class="tab-content p-l-0 p-r-0">
                    <div class="tab-pane active" id="admin">
                        <nav class="sidebar-nav">
                            <ul class="main-menu metismenu">
                                <li class="active"><a href="index.html"><i class="icon-home"></i><span>Dashboard</span></a></li>

                                <li><span>-- Users</span></li>

                                <!-- admin start -->
                                <li><a href="javascript:void(0);" class="has-arrow">
                                    <i class="icon-users"></i><span>Admin</span> </a>
                                    <ul>
                                        <li><a href="#">All Admins</a></li>
                                        <li><a href="#">Add Admin</a></li>
                                    </ul>
                                </li>
                                <!-- admin end -->

                                <!-- teachers start -->
                                <li><a href="javascript:void(0);" class="has-arrow">
                                    <i class="icon-users"></i><span>Teachers</span> </a>
                                    <ul>
                                        <li><a href="professors-list.html">All Teachers</a></li>
                                        <li><a href="add-professors.html">Add Teacher</a></li>
                                    </ul>
                                </li>
                                <!-- teachers end -->

                                <!-- students start -->
                                <li><a href="javascript:void(0);" class="has-arrow">
                                    <i class="icon-users"></i><span>Students</span> </a>
                                    <ul>
                                        <li><a href="students-list.html">All Students</a></li>
                                        <li><a href="add-students.html">Add Student</a></li>
                                    </ul>
                                </li>
                                <!-- students end -->

                                <!-- stuff start -->
                                <li><a href="javascript:void(0);" class="has-arrow">
                                    <i class="icon-users"></i><span>Stuffs</span> </a>
                                    <ul>
                                        <li><a href="#">All Stuffs</a></li>
                                        <li><a href="#">Add Stuff</a></li>
                                    </ul>
                                </li>
                                <!-- stuff end -->


                                <li><span>-- University</span></li>

                                <!-- Batch start -->

                                <li><a href="javascript:void(0);" class="has-arrow"><i class="icon-share fa-rotate-90 d-inline-block"></i><span>Batch</span> </a>
                                    <ul>
                                        <li><a href="add-classroom.html">Add Batch</a></li>
                                        <li><a href="classroom.html">List Batch</a></li>
                                    </ul>
                                </li>

                                <!-- Batch end -->

                                <!-- Course start -->                            
                                <li><a href="javascript:void(0);" class="has-arrow"><i class="icon-graduation"></i><span>Courses</span> </a>
                                    <ul>
                                        <li><a href="courses.html">All Courses</a></li>
                                        <li><a href="add-courses.html">Add Courses</a></li>
                                        <li><a href="courses-info.html">Courses Info</a></li>
                                    </ul>
                                </li>
                                <!-- Course end -->

                                <!-- Routine start -->                            
                                <li><a href="javascript:void(0);" class="has-arrow"><i class="icon-calendar"></i><span>Routine</span> </a>
                                    <ul>
                                        <li><a href="#">List Routine</a></li>
                                        <li><a href="">Add Routine</a></li>
                                    </ul>
                                </li>
                                <!-- Routine end -->

                                <!-- Exam Schedule start -->                            
                                <li><a href="javascript:void(0);" class="has-arrow"><i class="icon-share-alt"></i><span>Exam Schedule</span> </a>
                                    <ul>
                                        <li><a href="courses.html">All Schedule</a></li>
                                        <li><a href="add-courses.html">Add Schedule</a></li>
                                    </ul>
                                </li>
                                <!-- Exam Schedule end -->

                                <!-- Results -->
                                <li><a href="#"><i class="icon-note"></i>Results</a></li>
                                <!-- Results -->

                                <!-- Notice start -->                            
                                <li><a href="javascript:void(0);" class="has-arrow"><i class="icon-info"></i><span>Noticeboard</span> </a>
                                    <ul>
                                        <li><a href="noticeboard.html">List Notice</a></li>
                                        <li><a href="#">Add Notice</a></li>
                                    </ul>
                                </li>
                                <!-- Notice end -->

                                <!-- Events start -->                            
                                <li><a href="javascript:void(0);" class="has-arrow"><i class="icon-pin"></i><span>Events</span> </a>
                                    <ul>
                                        <li><a href="events.html">List Events</a></li>
                                        <li><a href="#">Add Events</a></li>
                                    </ul>
                                </li>
                                <!-- Events end -->

                                <!-- Payments start-->                            
                                <li><a href="javascript:void(0);" class="has-arrow"><i class="icon-wallet"></i><span>Payments</span> </a>
                                    <ul>
                                        <li><a href="payments.html">Payments</a></li>
                                        <li><a href="payments-add.html">Add Payment</a></li>
                                        <li><a href="payments-invoice.html">Invoice</a></li>
                                    </ul>
                                </li>
                                <!-- Payments end-->

                                <!-- Bus Service start -->                            
                                <li><a href="javascript:void(0);" class="has-arrow"><i class="icon-support"></i><span>Bus Service</span> </a>
                                    <ul>
                                        <li><a href="transport.html">List Bus Schedule</a></li>
                                        <li><a href="#">Add Bus Schedule</a></li>
                                    </ul>
                                </li>
                                <!-- Bus Service end -->

                                <!-- Club start -->                            
                                <li><a href="javascript:void(0);" class="has-arrow"><i class="icon-rocket"></i><span>Club</span> </a>
                                    <ul>
                                        <li><a href="#">List Clubs</a></li>
                                        <li><a href="#">Add Club</a></li>
                                    </ul>
                                </li>
                                <!-- Club end -->

                                <!-- Blood Donation start -->                            
                                <li><a href="javascript:void(0);" class="has-arrow"><i class="icon-drop"></i><span>Blood Donation</span> </a>
                                    <ul>
                                        <li><a href="#">List Blood Donations</a></li>
                                        <li><a href="#">Add Blood Donation</a></li>
                                    </ul>
                                </li>
                                <!-- Blood Donation end -->

                                <!-- Complain start -->                            
                                <li><a href="javascript:void(0);" class="has-arrow"><i class="icon-call-end"></i><span>Complain</span> </a>
                                    <ul>
                                        <li><a href="#">List Complains</a></li>
                                    </ul>
                                </li>
                                <!-- Complain end -->
                            </ul>
                        </nav>
                    </div>
                    <div class="tab-pane p-l-15 p-r-15" id="setting">
                        <h6>Choose Skin</h6>
                        <ul class="choose-skin list-unstyled">
                            <li data-theme="purple">
                                <div class="purple"></div>
                                <span>Purple</span>
                            </li>                   
                            <li data-theme="blue" class="active">
                                <div class="blue"></div>
                                <span>Blue</span>
                            </li>
                            <li data-theme="cyan">
                                <div class="cyan"></div>
                                <span>Cyan</span>
                            </li>
                            <li data-theme="green">
                                <div class="green"></div>
                                <span>Green</span>
                            </li>
                            <li data-theme="orange">
                                <div class="orange"></div>
                                <span>Orange</span>
                            </li>
                            <li data-theme="blush">
                                <div class="blush"></div>
                                <span>Blush</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- left sidebar end -->


        <!-- main section start -->
        <div id="main-content">
            <div class="container-fluid">
                <div class="block-header">
                    <div class="row">
                        <div class="col-lg-6 col-md-8 col-sm-12">
                            <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Dashboard</h2>
                        </div>            
                        <div class="col-lg-6 col-md-4 col-sm-12">
                            <ul class="breadcrumb  float-right">
                                <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ul>                        
                        </div>
                    </div>
                </div>
                
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12">

                        <!-- admin welcome -->
                        <div class="card">
                            <div class="header">
                                <h2>Welcome Admin</h2>                        
                                <ul class="header-dropdown">
                                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <h6 class="m-b-15">This Is Your Dashboard</h6>       
                                <p>You Can Manage All The Essential Admin Tasks From Here. Good Luck.</p>
                                <button type="button" class="btn btn-primary">Go To Site Frontend</button>
                            </div>
                        </div>
                        <!-- admin welcome -->


                        <!-- new admissions list -->
                        <div class="card">
                            <div class="header">
                                <h2>New Admission List</h2>
                                <ul class="header-dropdown">
                                    <li class="dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another Action</a></li>
                                            <li><a href="javascript:void(0);">Something else</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">                          
                                <div class="table-responsive">
                                    <table class="table table-hover m-b-0">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Age</th>
                                                <th>Address</th>
                                                <th>Number</th>
                                                <th>Batch</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><span class="list-name">2172081009</span></td>
                                                <td>Farhan</td>
                                                <td>25</td>
                                                <td>70 Bowman St. South Windsor, CT 06074</td>
                                                <td>404-447-6013</td>
                                                <td><span class="badge badge-primary">42</span></td>
                                            </tr>
                                            <tr>
                                                <td><span class="list-name">2172081011</span></td>
                                                <td>Emu</td>
                                                <td>27</td>
                                                <td>123 6th St. Melbourne, FL 32904</td>
                                                <td>404-447-4569</td>
                                                <td><span class="badge badge-warning">41A</span></td>
                                            </tr>
                                            <tr>
                                                <td><span class="list-name">2172081040</span></td>
                                                <td>Afsana</td>
                                                <td>23</td>
                                                <td>123 6th St. Melbourne, FL 32904</td>
                                                <td>404-447-7412</td>
                                                <td><span class="badge badge-info">43</span></td>
                                            </tr>
                                            <tr>
                                                <td><span class="list-name">2172081060</span></td>
                                                <td>Mamun</td>
                                                <td>23</td>
                                                <td>44 Shirley Ave. West Chicago, IL 60185</td>
                                                <td>404-447-2589</td>
                                                <td><span class="badge badge-default">45</span></td>
                                            </tr>
                                            <tr>
                                                <td><span class="list-name">2172081001</span></td>
                                                <td>Joy</td>
                                                <td>25</td>
                                                <td>70 Bowman St. South Windsor, CT 06074</td>
                                                <td>404-447-6013</td>
                                                <td><span class="badge badge-primary">50C</span></td>
                                            </tr>
                                            <tr>
                                                <td><span class="list-name">2172081030</span></td>
                                                <td>Rakibul</td>
                                                <td>21</td>
                                                <td>123 6th St. Melbourne, FL 32904</td>
                                                <td>404-447-9632</td>                                       
                                                <td><span class="badge badge-success">40</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- new admissions list -->

                        <div class="row clearfix">
                            <div class="col-md-12 col-lg-6">
                                <div class="card">
                                    <div class="header">
                                        <h2>Students</h2>
                                    </div>
                                    <div class="body">
                                        <div class="sparkline" data-type="line" data-spot-Radius="1" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                                            data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgba(3, 116, 192, 0.7)"
                                            data-offset="90" data-width="100%" data-height="70" data-line-Width="1" data-line-Color="#b089ff"
                                            data-fill-Color="#ebe1ff">1,8,2,5,6,7,3,4,1,9,3,7,2</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6">
                                <div class="card">
                                    <div class="header">
                                        <h2>Teachers</h2>
                                    </div>
                                    <div class="body">
                                        <div class="sparkline" data-type="bar" data-width="97%" data-height="70" data-bar-Width="10" data-bar-Spacing="10" data-bar-Color="#02b5b2">2,8,3,4,6,2,3,8,7,6,5,2,1,8</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- university income -->
                        <div class="card">
                            <div class="header">
                                <h2>University Income</h2>
                                <ul class="header-dropdown">
                                    <li class="dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another Action</a></li>
                                            <li><a href="javascript:void(0);">Something else</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <div id="university_income" class="chartist text-center"></div>
                            </div>
                        </div>
                        <!-- university income -->
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2>University Stats</h2>
                            </div>
                            <div class="body">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="sparkline-pie">6,4,8,1</div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="progress-container m-b-20">
                                            <span class="progress-badge">Students</span>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                                    <span class="progress-value">86%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-container m-b-20">
                                            <span class="progress-badge">Teachers</span>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100" style="width: 36%;">
                                                    <span class="progress-value">36%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-container m-b-20">
                                            <span class="progress-badge">Stuffs</span>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;">
                                                    <span class="progress-value">23%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-container m-b-10">
                                            <span class="progress-badge">Admins</span>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
                                                    <span class="progress-value">5%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-6">
                                <div class="card top_counter">
                                    <div class="body">
                                        <div class="icon text-info"><i class="fa fa-user"></i> </div>
                                        <div class="content">
                                            <div class="text">Total Student</div>
                                            <h5 class="number">530</h5>
                                        </div>
                                        <hr>
                                        <div class="icon text-warning"><i class="fa fa-user-circle"></i> </div>
                                        <div class="content">
                                            <div class="text">Total Teacher</div>
                                            <h5 class="number">14</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <div class="card top_counter">
                                    <div class="body">
                                        <div class="icon text-warning"><i class="fa fa-tags"></i> </div>
                                        <div class="content">
                                            <div class="text">Batches</div>
                                            <h5 class="number">7</h5>
                                        </div>
                                        <hr>
                                        <div class="icon"><i class="fa fa-graduation-cap"></i> </div>
                                        <div class="content">
                                            <div class="text">Courses</div>
                                            <h5 class="number">35</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <div class="card top_counter">
                                    <div class="body">
                                        <div class="icon text-danger"><i class="icon-paper-clip font-weight-bold"></i> </div>
                                        <div class="content">
                                            <div class="text">Notifications</div>
                                            <h5 class="number">205</h5>
                                        </div>
                                        <hr>
                                        <div class="icon text-success"><i class="icon-info font-weight-bold"></i> </div>
                                        <div class="content">
                                            <div class="text">Pending Notices</div>
                                            <h5 class="number">325</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <div class="card top_counter">
                                    <div class="body">
                                        <div class="icon"><i class="icon-call-end font-weight-bold"></i> </div>
                                        <div class="content">
                                            <div class="text">Complaints</div>
                                            <h5 class="number">28</h5>
                                        </div>
                                        <hr>
                                        <div class="icon text-success"><i class="icon-drop font-weight-bold"></i> </div>
                                        <div class="content">
                                            <div class="text">Blood Donations</div>
                                            <h5 class="number">528</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <div class="card top_counter">
                                    <div class="body">
                                        <div class="icon"><i class="icon-call-end font-weight-bold"></i> </div>
                                        <div class="content">
                                            <div class="text">Complaints</div>
                                            <h5 class="number">28</h5>
                                        </div>
                                        <hr>
                                        <div class="icon text-success"><i class="icon-drop font-weight-bold"></i> </div>
                                        <div class="content">
                                            <div class="text">Blood Donations</div>
                                            <h5 class="number">528</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                
            </div>
        </div>
        <!-- main section end -->  
    </div>

    <!-- script section start -->
    <script src="{{ asset('backend/bundles/libscripts.bundle.js') }}"></script>    
    <script src="{{ asset('backend/bundles/vendorscripts.bundle.js') }}"></script>

    <script src="{{ asset('backend/bundles/chartist.bundle.js') }}"></script>
    <script src="{{ asset('backend/bundles/jvectormap.bundle.js') }}"></script> 
    <!-- JVectorMap Plugin Js -->

    <script src="{{ asset('backend/bundles/mainscripts.bundle.js') }}"></script>
    <script src="{{ asset('backend/js/index.js') }}"></script>
    <!-- script section end -->


</body>
</html>

