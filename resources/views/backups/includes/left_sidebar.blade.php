
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