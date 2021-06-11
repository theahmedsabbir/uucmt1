
<div id="left-sidebar" class="sidebar">
    <div class="sidebar-scroll">
        <div class="user-account">

            <img src="
            @if ( Auth::user()->image != NULL )
                {{ asset('backend/images/Students/'.Auth::user()->image ) }}
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
                    <li><a href="{{ route('student.profile') }}"><i class="icon-user"></i>My Profile</a></li>
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
                            <a href="{{ route('student.dashboard') }}">
                                <i class="icon-home"></i><span>Dashboard</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('admin/profile*') ? 'active' : '' }}">
                            <a href="{{ route('student.profile') }}">
                                <i class="icon-home"></i><span>My Profile</span>
                            </a>
                        </li>


                        <li><span>-- University</span></li>

                        <!-- Course start -->  
                        <li class="{{ Request::is('student/course/*') ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="has-arrow">
                                <i class="icon-graduation d-inline-block"></i><span>Course</span> 
                            </a>
                            <ul  class="{{ Request::is('student/course/*') ? 'collapse in' : '' }}">
                                <li class="{{ Request::is('student/course/all') ? 'active' : '' }}">
                                    <a href="{{ route('student.courses.all') }}">My Courses</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Course end -->

                        <!-- Routine start --> 
                        <li class="{{ Request::is('student/routines/*') ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="has-arrow">
                                <i class="icon-calendar d-inline-block"></i><span>Routine</span> 
                            </a>
                            <ul  class="{{ Request::is('student/routines/*') ? 'collapse in' : '' }}">
                                <li class="{{ Request::is('student/routines/all') ? 'active' : '' }}">
                                    <a href="{{ route('student.routines.all') }}">List Routine</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Routine end -->

                        <!-- Results -->     
                        <li class="{{ Request::is('student/result/*') ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="has-arrow">
                                <i class="icon-note d-inline-block"></i><span>Results</span> 
                            </a>
                            <ul  class="{{ Request::is('student/result/*') ? 'collapse in' : '' }}">
                                <li class="{{ Request::is('student/result/all') ? 'active' : '' }}">
                                    <a href="{{ route('student.results.all') }}">My Results</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Results -->

                        <!-- Notice start -->  
                        <li class="{{ Request::is('student/notices/*') ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="has-arrow">
                                <i class="icon-info d-inline-block"></i><span>Noticeboard</span> 
                            </a>
                            <ul  class="{{ Request::is('student/notices/*') ? 'collapse in' : '' }}">
                                <li class="{{ Request::is('student/notices/all') ? 'active' : '' }}">
                                    <a href="{{ route('student.notices.all') }}">List Notice</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Notice end -->

                        <!-- Library start-->
                        <li class="{{ Request::is('student/libraries/*') ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="has-arrow">
                                <i class="icon-layers d-inline-block"></i><span>Library</span> 
                            </a>
                            <ul  class="{{ Request::is('student/libraries/*') ? 'collapse in' : '' }}">
                                <li class="{{ Request::is('student/libraries/all') ? 'active' : '' }}">
                                    <a href="{{ route('student.libraries.all') }}">Book List</a>
                                </li>
                                <li class="{{ Request::is('student/libraries/myBooks') ? 'active' : '' }}">
                                    <a href="{{ route('student.libraries.myBooks') }}">My Books</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Library end-->

                        <!-- Payments start-->
                        <li class="{{ Request::is('student/payments/*') ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="has-arrow">
                                <i class="icon-wallet d-inline-block"></i><span>Payment</span> 
                            </a>
                            <ul  class="{{ Request::is('student/payments/*') ? 'collapse in' : '' }}">
                                <li class="{{ Request::is('student/payments/myPayment') ? 'active' : '' }}">
                                    <a href="{{ route('student.payments.myPayment' ) }}">My Payment</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Payments end-->

                        <!-- Bus Service start -->   
                        <li class="{{ Request::is('student/busServices/*') ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="has-arrow">
                                <i class="icon-support d-inline-block"></i><span>Bus Service</span> 
                            </a>
                            <ul  class="{{ Request::is('student/busServices/*') ? 'collapse in' : '' }}">
                                <li class="{{ Request::is('student/busServices/all') ? 'active' : '' }}">
                                    <a href="{{ route('student.busServices.all') }}">List Bus Schedule</a>
                                </li>
                            </ul>
                        </li>     
                        <!-- Bus Service end -->

                        <!-- Club start -->   
                        <li class="{{ Request::is('student/clubs/*') ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="has-arrow">
                                <i class="icon-rocket d-inline-block"></i><span>Club</span> 
                            </a>
                            <ul  class="{{ Request::is('student/clubs/*') ? 'collapse in' : '' }}">
                                <li class="{{ Request::is('student/clubs/all') ? 'active' : '' }}">
                                    <a href="{{ route('student.clubs.all') }}">List Club</a>
                                </li>
                            </ul>
                        </li>   
                        <!-- Club end -->

                        <!-- Blood Donation start -->  
                        <li class="{{ Request::is('student/bloodDonations/*') ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="has-arrow">
                                <i class="icon-drop d-inline-block"></i><span>Blood Donations</span> 
                            </a>
                            <ul  class="{{ Request::is('student/bloodDonations/*') ? 'collapse in' : '' }}">
                                <li class="{{ Request::is('student/bloodDonations/myDonation') ? 'active' : '' }}">
                                    <a href="{{ route('student.bloodDonations.myDonation') }}">My Blood Donation</a>
                                </li>
                            </ul>
                        </li>     
                        <!-- Blood Donation end -->

                        <!-- Complain start -->  
                        <li class="{{ Request::is('student/complains/*') ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="has-arrow">
                                <i class="icon-call-end d-inline-block"></i><span>Complain Box</span> 
                            </a>
                            <ul  class="{{ Request::is('student/complains/*') ? 'collapse in' : '' }}">
                                <li class="{{ Request::is('student/complains/add') ? 'active' : '' }}">
                                    <a href="{{ route('student.complains.create') }}">Report An Issue</a>
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