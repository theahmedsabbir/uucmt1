
<div id="left-sidebar" class="sidebar">
    <div class="sidebar-scroll">
        <div class="user-account">
            <img src="
            @if ( Auth::user()->image != NULL )
                {{ asset('backend/images/Teachers/'.Auth::user()->image ) }}
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
                    <strong>{{ str_limit(Auth::user()->name, 15, '...')}}</strong></a>
                <ul class="dropdown-menu dropdown-menu-right account">
                    <li><a href="{{ route('teacher.profile') }}"><i class="icon-user"></i>My Profile</a></li>
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
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#teacher">Admin</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#setting"><i class="icon-settings"></i></a></li>
        </ul>
            
        <!-- Tab panes -->
        <div class="tab-content p-l-0 p-r-0">
            <div class="tab-pane active" id="teacher">
                <nav class="sidebar-nav">
                    <ul class="main-menu metismenu">
                        <li class="{{ Request::is('teacher/dashboard*') ? 'active' : '' }}">
                            <a href="{{ route('teacher.dashboard') }}">
                                <i class="icon-home"></i><span>Dashboard</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('teacher/profile*') ? 'active' : '' }}">
                            <a href="{{ route('teacher.profile') }}">
                                <i class="icon-home"></i><span>Profile</span>
                            </a>
                        </li>


                        <li><span>-- University</span></li>

                        <!-- Course start -->  
                        <li class="{{ Request::is('teacher/course/*') ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="has-arrow">
                                <i class="icon-graduation d-inline-block"></i><span>Courses</span> 
                            </a>
                            <ul  class="{{ Request::is('teacher/course/*') ? 'collapse in' : '' }}">
                                <li class="{{ Request::is('teacher/course/all') ? 'active' : '' }}">
                                    <a href="{{ route('teacher.courses.all') }}">My Courses</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Course end -->

                        <!-- Routine start --> 
                        <li class="{{ Request::is('teacher/routines/*') ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="has-arrow">
                                <i class="icon-calendar d-inline-block"></i><span>Routine</span> 
                            </a>
                            <ul  class="{{ Request::is('teacher/routines/*') ? 'collapse in' : '' }}">
                                <li class="{{ Request::is('teacher/routines/all') ? 'active' : '' }}">
                                    <a href="{{ route('teacher.routines.all') }}">List Routine</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Routine end -->

                        <!-- Notice start -->  
                        <li class="{{ Request::is('teacher/notices/*') ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="has-arrow">
                                <i class="icon-info d-inline-block"></i><span>Noticeboard</span> 
                            </a>
                            <ul  class="{{ Request::is('teacher/notices/*') ? 'collapse in' : '' }}">
                                <li class="{{ Request::is('teacher/notices/all') ? 'active' : '' }}">
                                    <a href="{{ route('teacher.notices.all') }}">List Notice</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Notice end -->

                        <!-- Payments start-->
                        <li class="{{ Request::is('teacher/payments/*') ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="has-arrow">
                                <i class="icon-wallet d-inline-block"></i><span>Payment</span> 
                            </a>
                            <ul  class="{{ Request::is('teacher/payments/*') ? 'collapse in' : '' }}">
                                <li class="{{ Request::is('teacher/payments/all') ? 'active' : '' }}">
                                    <a href="{{ route('teacher.payments.all') }}">All Payments</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Payments end-->

                        <!-- Bus Service start -->   
                        <li class="{{ Request::is('teacher/busServices/*') ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="has-arrow">
                                <i class="icon-support d-inline-block"></i><span>Bus Service</span> 
                            </a>
                            <ul  class="{{ Request::is('teacher/busServices/*') ? 'collapse in' : '' }}">
                                <li class="{{ Request::is('teacher/busServices/all') ? 'active' : '' }}">
                                    <a href="{{ route('teacher.busServices.all') }}">List Bus Schedule</a>
                                </li>
                            </ul>
                        </li>     
                        <!-- Bus Service end -->

                        <!-- Complain start -->  
                        <li class="{{ Request::is('teacher/complains/*') ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="has-arrow">
                                <i class="icon-call-end d-inline-block"></i><span>Complain</span> 
                            </a>
                            <ul  class="{{ Request::is('teacher/complains/*') ? 'collapse in' : '' }}">
                                <li class="{{ Request::is('teacher/complains/add') ? 'active' : '' }}">
                                    <a href="{{ route('teacher.complains.create') }}">Report An Issue</a>
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