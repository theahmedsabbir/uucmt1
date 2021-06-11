
<div id="left-sidebar" class="sidebar">
    <div class="sidebar-scroll">
        <div class="user-account">

            <img src="
            @if ( Auth::user()->image != NULL )
                {{ asset('backend/images/Admins/'.Auth::user()->image ) }}
            @else
                @if (Auth::user()->gender == 1)
                    {{ asset('backend/images/default_male.png') }}
                @else
                    {{ asset('backend/images/default_female.png') }}
                @endif
            @endif" class="rounded-circle user-photo" alt="User Profile Picture">
            <div class="dropdown">
                <span>Welcome,</span>
                <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown">
                    <strong>{{str_limit(Auth::user()->name, 15, '...')}}</strong></a>
                <ul class="dropdown-menu dropdown-menu-right account">
                    <li><a href="{{ route('admin.profile') }}"><i class="icon-user"></i>My Profile</a></li>
                    <li><a href="app-inbox.html"><i class="icon-envelope-open"></i>Messages</a></li>
                    <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
                    <li class="divider"></li>
                    <li><a href="#logout" onclick="event.preventDefault();document.getElementById('logout_form').submit();"><i class="icon-power"></i>Logout</a></li>



                        <form action="{{ route('logout') }}" method="POST" id="logout_form" style="display: none;">
                            @csrf
                            
                        </form>
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
                        <li class="{{ Request::is('admin/dashboard*') ? 'active' : '' }}">
                            <a href="{{ route('admin.dashboard') }}">
                                <i class="icon-home"></i><span>Dashboard</span>
                            </a>
                        </li>

                        <li class="{{ Request::is('admin/profile*') ? 'active' : '' }}">
                            <a href="{{ route('admin.profile') }}">
                                <i class="icon-user"></i><span>My Profile</span>
                            </a>
                        </li>

                        <li><span>-- Users</span></li>

                        <!-- admin start -->
                        <li class="{{ Request::is('admin/admins/*') ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="has-arrow">
                                <i class="icon-users"></i><span>Admins</span> 
                            </a>
                            <ul  class="{{ Request::is('admin/admins/*') ? 'collapse in' : '' }}">
                                <li class="{{ Request::is('admin/admins/all') ? 'active' : '' }}">
                                    <a href="{{ route('admin.admins.all') }}">All Admins</a>
                                </li>
                                <li class="{{ Request::is('admin/admins/add') ? 'active' : '' }}">
                                    <a href="{{ route('admin.admins.create') }}">Add Admin</a>
                                </li>
                            </ul>
                        </li>
                        <!-- admin end -->

                        <!-- teachers start -->
                        <li class="{{ Request::is('admin/teachers/*') ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="has-arrow">
                                <i class="icon-users"></i><span>Teachers</span> 
                            </a>
                            <ul  class="{{ Request::is('admin/teachers/*') ? 'collapse in' : '' }}">
                                <li class="{{ Request::is('admin/teachers/all') ? 'active' : '' }}">
                                    <a href="{{ route('admin.teachers.all') }}">All Teachers</a>
                                </li>
                                <li class="{{ Request::is('admin/teachers/add') ? 'active' : '' }}">
                                    <a href="{{ route('admin.teachers.create') }}">Add Teacher</a>
                                </li>
                            </ul>
                        </li>
                        <!-- teachers end -->

                        <!-- students start -->
                        <li class="{{ Request::is('admin/students/*') ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="has-arrow">
                                <i class="icon-users"></i><span>Students</span> 
                            </a>
                            <ul  class="{{ Request::is('admin/students/*') ? 'collapse in' : '' }}">
                                <li class="{{ Request::is('admin/students/all') ? 'active' : '' }}">
                                    <a href="{{ route('admin.students.all') }}">All Students</a>
                                </li>
                                <li class="{{ Request::is('admin/students/add') ? 'active' : '' }}">
                                    <a href="{{ route('admin.students.create') }}">Add Student</a>
                                </li>
                            </ul>
                        </li>
                        <!-- students end -->

                        <!-- stuff start -->
                        <li class="{{ Request::is('admin/stuffs/*') ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="has-arrow">
                                <i class="icon-users"></i><span>Stuffs</span> 
                            </a>
                            <ul  class="{{ Request::is('admin/stuffs/*') ? 'collapse in' : '' }}">
                                <li class="{{ Request::is('admin/stuffs/all') ? 'active' : '' }}">
                                    <a href="{{ route('admin.stuffs.all') }}">All Stuffs</a>
                                </li>
                                <li class="{{ Request::is('admin/stuffs/add') ? 'active' : '' }}">
                                    <a href="{{ route('admin.stuffs.create') }}">Add Stuff</a>
                                </li>
                            </ul>
                        </li>
                        <!-- stuff end -->


                        <li><span>-- University</span></li>

                        <!-- Batch start -->

                        <li class="{{ Request::is('admin/batch/*') ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="has-arrow">
                                <i class="icon-share fa-rotate-90 d-inline-block"></i><span>Batch</span> 
                            </a>
                            <ul  class="{{ Request::is('admin/batch/*') ? 'collapse in' : '' }}">
                                <li class="{{ Request::is('admin/batch/all') ? 'active' : '' }}">
                                    <a href="{{ route('admin.batch.all') }}">All Batches</a>
                                </li>
                                <li class="{{ Request::is('admin/batch/add') ? 'active' : '' }}">
                                    <a href="{{ route('admin.batch.create') }}">Add Batch</a>
                                </li>
                            </ul>
                        </li>

                        <!-- batch end -->

                        <!-- Semester start -->  
                        <li class="{{ Request::is('admin/semester/*') ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="has-arrow">
                                <i class="icon-clock d-inline-block"></i><span>Semester</span> 
                            </a>
                            <ul  class="{{ Request::is('admin/semester/*') ? 'collapse in' : '' }}">
                                <li class="{{ Request::is('admin/semester/all') ? 'active' : '' }}">
                                    <a href="{{ route('admin.semesters.all') }}">All Semesters</a>
                                </li>
                                <li class="{{ Request::is('admin/semester/add') ? 'active' : '' }}">
                                    <a href="{{ route('admin.semesters.create') }}">Add Semester</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Course end -->

                        <!-- Course start -->  
                        <li class="{{ Request::is('admin/course/*') ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="has-arrow">
                                <i class="icon-graduation d-inline-block"></i><span>Course</span> 
                            </a>
                            <ul  class="{{ Request::is('admin/course/*') ? 'collapse in' : '' }}">
                                <li class="{{ Request::is('admin/course/all') ? 'active' : '' }}">
                                    <a href="{{ route('admin.courses.all') }}">All Courses</a>
                                </li>
                                <li class="{{ Request::is('admin/course/add') ? 'active' : '' }}">
                                    <a href="{{ route('admin.courses.create') }}">Add Course</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Course end -->

                        <!-- Routine start --> 
                        <li class="{{ Request::is('admin/routines/*') ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="has-arrow">
                                <i class="icon-calendar d-inline-block"></i><span>Routine</span> 
                            </a>
                            <ul  class="{{ Request::is('admin/routines/*') ? 'collapse in' : '' }}">
                                <li class="{{ Request::is('admin/routines/all') ? 'active' : '' }}">
                                    <a href="{{ route('admin.routines.all') }}">List Routine</a>
                                </li>
                                <li class="{{ Request::is('admin/routines/add') ? 'active' : '' }}">
                                    <a href="{{ route('admin.routines.create') }}">Add Routine</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Routine end -->

                        <!-- Exam Schedule start -->                            
<!--                         <li><a href="javascript:void(0);" class="has-arrow"><i class="icon-share-alt"></i><span>Exam Schedule</span> </a>
                            <ul>
                                <li><a href="courses.html">All Schedule</a></li>
                                <li><a href="add-courses.html">Add Schedule</a></li>
                            </ul>
                        </li> -->
                        <!-- Exam Schedule end -->

                        <!-- Results -->     
                        <li class="{{ Request::is('admin/result/*') ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="has-arrow">
                                <i class="icon-note d-inline-block"></i><span>Result</span> 
                            </a>
                            <ul  class="{{ Request::is('admin/result/*') ? 'collapse in' : '' }}">
                                <li class="{{ Request::is('admin/result/all') ? 'active' : '' }}">
                                    <a href="{{ route('admin.results.all') }}">Exam Results</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Results -->

                        <!-- Notice start -->  
                        <li class="{{ Request::is('admin/notices/*') ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="has-arrow">
                                <i class="icon-info d-inline-block"></i><span>Noticeboard</span> 
                            </a>
                            <ul  class="{{ Request::is('admin/notices/*') ? 'collapse in' : '' }}">
                                <li class="{{ Request::is('admin/notices/all') ? 'active' : '' }}">
                                    <a href="{{ route('admin.notices.all') }}">List Notice</a>
                                </li>
                                <li class="{{ Request::is('admin/notices/add') ? 'active' : '' }}">
                                    <a href="{{ route('admin.notices.create') }}">Add Notice</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Notice end -->

                        <!-- Library start-->
                        <li class="{{ Request::is('admin/libraries/*') ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="has-arrow">
                                <i class="icon-layers d-inline-block"></i><span>Library</span> 
                            </a>
                            <ul  class="{{ Request::is('admin/libraries/*') ? 'collapse in' : '' }}">
                                <li class="{{ Request::is('admin/libraries/all') ? 'active' : '' }}">
                                    <a href="{{ route('admin.libraries.all') }}">Book List</a>
                                </li>
                                <li class="{{ Request::is('admin/libraries/add') ? 'active' : '' }}">
                                    <a href="{{ route('admin.libraries.create') }}">Add Book</a>
                                </li>
                                <li class="{{ Request::is('admin/libraries/myBooks') ? 'active' : '' }}">
                                    <a href="{{ route('admin.libraries.myBooks') }}">My Books</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Library end-->

                        <!-- Payments start-->
                        <li class="{{ Request::is('admin/payments/*') ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="has-arrow">
                                <i class="icon-wallet d-inline-block"></i><span>Payment</span> 
                            </a>
                            <ul  class="{{ Request::is('admin/payments/*') ? 'collapse in' : '' }}">
                                <li class="{{ Request::is('admin/payments/all') ? 'active' : '' }}">
                                    <a href="{{ route('admin.payments.all') }}">All Payments</a>
                                </li>
                                <li class="{{ Request::is('admin/payments/add') ? 'active' : '' }}">
                                    <a href="{{ route('admin.payments.create') }}">Add Payment</a>
                                </li>
                                <li class="{{ Request::is('admin/payments/myPayment') ? 'active' : '' }}">
                                    <a href="{{ route('admin.payments.myPayment' ) }}">My Payment</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Payments end-->

                        <!-- Bus Service start -->   
                        <li class="{{ Request::is('admin/busServices/*') ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="has-arrow">
                                <i class="icon-support d-inline-block"></i><span>Bus Service</span> 
                            </a>
                            <ul  class="{{ Request::is('admin/busServices/*') ? 'collapse in' : '' }}">
                                <li class="{{ Request::is('admin/busServices/all') ? 'active' : '' }}">
                                    <a href="{{ route('admin.busServices.all') }}">List Bus Schedule</a>
                                </li>
                                <li class="{{ Request::is('admin/busServices/add') ? 'active' : '' }}">
                                    <a href="{{ route('admin.busServices.create') }}">Add Bus Schedule</a>
                                </li>
                            </ul>
                        </li>     
                        <!-- Bus Service end -->

                        <!-- Club start -->   
                        <li class="{{ Request::is('admin/clubs/*') ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="has-arrow">
                                <i class="icon-rocket d-inline-block"></i><span>Club</span> 
                            </a>
                            <ul  class="{{ Request::is('admin/clubs/*') ? 'collapse in' : '' }}">
                                <li class="{{ Request::is('admin/clubs/all') ? 'active' : '' }}">
                                    <a href="{{ route('admin.clubs.all') }}">List Club</a>
                                </li>
                                <li class="{{ Request::is('admin/clubs/add') ? 'active' : '' }}">
                                    <a href="{{ route('admin.clubs.create') }}">Add Club</a>
                                </li>
                            </ul>
                        </li>   
                        <!-- Club end -->

                        <!-- Blood Donation start -->  
                        <li class="{{ Request::is('admin/bloodDonations/*') ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="has-arrow">
                                <i class="icon-drop d-inline-block"></i><span>Blood Donations</span> 
                            </a>
                            <ul  class="{{ Request::is('admin/bloodDonations/*') ? 'collapse in' : '' }}">
                                <li class="{{ Request::is('admin/bloodDonations/all') ? 'active' : '' }}">
                                    <a href="{{ route('admin.bloodDonations.all') }}">List Blood Donations</a>
                                </li>
                                <li class="{{ Request::is('admin/bloodDonations/add') ? 'active' : '' }}">
                                    <a href="{{ route('admin.bloodDonations.create') }}">Add Blood Donation</a>
                                </li>
                                <li class="{{ Request::is('admin/bloodDonations/myDonation') ? 'active' : '' }}">
                                    <a href="{{ route('admin.bloodDonations.myDonation') }}">My Blood Donation</a>
                                </li>
                            </ul>
                        </li>     
                        <!-- Blood Donation end -->

                        <!-- Complain start -->  
                        <li class="{{ Request::is('admin/complains/*') ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="has-arrow">
                                <i class="icon-call-end d-inline-block"></i><span>Complain</span> 
                            </a>
                            <ul  class="{{ Request::is('admin/complains/*') ? 'collapse in' : '' }}">
                                <li class="{{ Request::is('admin/complains/all') ? 'active' : '' }}">
                                    <a href="{{ route('admin.complains.all') }}">List Complains</a>
                                </li>
                                <li class="{{ Request::is('admin/complains/add') ? 'active' : '' }}">
                                    <a href="{{ route('admin.complains.create') }}">Report An Issue</a>
                                </li>
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