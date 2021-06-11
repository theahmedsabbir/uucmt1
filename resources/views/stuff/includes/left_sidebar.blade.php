
<div id="left-sidebar" class="sidebar">
    <div class="sidebar-scroll">
        <div class="user-account">

            <img src="
            @if ( Auth::user()->image != NULL )
                {{ asset('backend/images/Stuffs/'.Auth::user()->image ) }}
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
                    <li><a href="{{ route('stuff.profile') }}"><i class="icon-user"></i>My Profile</a></li>
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
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#admin">Stuff</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#setting"><i class="icon-settings"></i></a></li>
        </ul>
            
        <!-- Tab panes -->
        <div class="tab-content p-l-0 p-r-0">
            <div class="tab-pane active" id="admin">
                <nav class="sidebar-nav">
                    <ul class="main-menu metismenu">
                        <li class="{{ Request::is('stuff/dashboard*') ? 'active' : '' }}">
                            <a href="{{ route('stuff.dashboard') }}">
                                <i class="icon-home"></i><span>Dashboard</span>
                            </a>
                        </li>

                        <li class="{{ Request::is('stuff/profile*') ? 'active' : '' }}">
                            <a href="{{ route('stuff.profile') }}">
                                <i class="icon-user"></i><span>My Profile</span>
                            </a>
                        </li>


                        <li><span>-- University</span></li>

                        <!-- Routine start --> 
                        <li class="{{ Request::is('stuff/routines/*') ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="has-arrow">
                                <i class="icon-calendar d-inline-block"></i><span>Routine</span> 
                            </a>
                            <ul  class="{{ Request::is('stuff/routines/*') ? 'collapse in' : '' }}">
                                <li class="{{ Request::is('stuff/routines/all') ? 'active' : '' }}">
                                    <a href="{{ route('stuff.routines.all') }}">List Routine</a>
                                </li>
                                <li class="{{ Request::is('stuff/routines/add') ? 'active' : '' }}">
                                    <a href="{{ route('stuff.routines.create') }}">Add Routine</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Routine end -->

                        <!-- Notice start -->  
                        <li class="{{ Request::is('stuff/notices/*') ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="has-arrow">
                                <i class="icon-info d-inline-block"></i><span>Noticeboard</span> 
                            </a>
                            <ul  class="{{ Request::is('stuff/notices/*') ? 'collapse in' : '' }}">
                                <li class="{{ Request::is('stuff/notices/all') ? 'active' : '' }}">
                                    <a href="{{ route('stuff.notices.all') }}">List Notice</a>
                                </li>
                                <li class="{{ Request::is('stuff/notices/add') ? 'active' : '' }}">
                                    <a href="{{ route('stuff.notices.create') }}">Add Notice</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Notice end -->

                        <!-- Library start-->
                        <li class="{{ Request::is('stuff/libraries/*') ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="has-arrow">
                                <i class="icon-layers d-inline-block"></i><span>Library</span> 
                            </a>
                            <ul  class="{{ Request::is('stuff/libraries/*') ? 'collapse in' : '' }}">
                                <li class="{{ Request::is('stuff/libraries/all') ? 'active' : '' }}">
                                    <a href="{{ route('stuff.libraries.all') }}">Book List</a>
                                </li>
                                <li class="{{ Request::is('stuff/libraries/add') ? 'active' : '' }}">
                                    <a href="{{ route('stuff.libraries.create') }}">Add Book</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Library end-->

                        <!-- Payments start-->
                        <li class="{{ Request::is('stuff/payments/*') ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="has-arrow">
                                <i class="icon-wallet d-inline-block"></i><span>Payment</span> 
                            </a>
                            <ul  class="{{ Request::is('stuff/payments/*') ? 'collapse in' : '' }}">
                                <li class="{{ Request::is('stuff/payments/all') ? 'active' : '' }}">
                                    <a href="{{ route('stuff.payments.all') }}">All Payments</a>
                                </li>
                                <li class="{{ Request::is('stuff/payments/add') ? 'active' : '' }}">
                                    <a href="{{ route('stuff.payments.create') }}">Add Payment</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Payments end-->

                        <!-- Bus Service start -->   
                        <li class="{{ Request::is('stuff/busServices/*') ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="has-arrow">
                                <i class="icon-support d-inline-block"></i><span>Bus Service</span> 
                            </a>
                            <ul  class="{{ Request::is('stuff/busServices/*') ? 'collapse in' : '' }}">
                                <li class="{{ Request::is('stuff/busServices/all') ? 'active' : '' }}">
                                    <a href="{{ route('stuff.busServices.all') }}">List Bus Schedule</a>
                                </li>
                                <li class="{{ Request::is('stuff/busServices/add') ? 'active' : '' }}">
                                    <a href="{{ route('stuff.busServices.create') }}">Add Bus Schedule</a>
                                </li>
                            </ul>
                        </li>     
                        <!-- Bus Service end -->

                        <!-- Club start -->   
                        <li class="{{ Request::is('stuff/clubs/*') ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="has-arrow">
                                <i class="icon-rocket d-inline-block"></i><span>Club</span> 
                            </a>
                            <ul  class="{{ Request::is('stuff/clubs/*') ? 'collapse in' : '' }}">
                                <li class="{{ Request::is('stuff/clubs/all') ? 'active' : '' }}">
                                    <a href="{{ route('stuff.clubs.all') }}">List Club</a>
                                </li>
                                <li class="{{ Request::is('stuff/clubs/add') ? 'active' : '' }}">
                                    <a href="{{ route('stuff.clubs.create') }}">Add Club</a>
                                </li>
                            </ul>
                        </li>   
                        <!-- Club end -->

                        <!-- Blood Donation start -->  
                        <li class="{{ Request::is('stuff/bloodDonations/*') ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="has-arrow">
                                <i class="icon-drop d-inline-block"></i><span>Blood Donations</span> 
                            </a>
                            <ul  class="{{ Request::is('stuff/bloodDonations/*') ? 'collapse in' : '' }}">
                                <li class="{{ Request::is('stuff/bloodDonations/all') ? 'active' : '' }}">
                                    <a href="{{ route('stuff.bloodDonations.all') }}">List Blood Donations</a>
                                </li>
                                <li class="{{ Request::is('stuff/bloodDonations/add') ? 'active' : '' }}">
                                    <a href="{{ route('stuff.bloodDonations.create') }}">Add Blood Donation</a>
                                </li>
                            </ul>
                        </li>     
                        <!-- Blood Donation end -->

                        <!-- Complain start -->  
                        <li class="{{ Request::is('stuff/complains/*') ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="has-arrow">
                                <i class="icon-call-end d-inline-block"></i><span>Complain</span> 
                            </a>
                            <ul  class="{{ Request::is('stuff/complains/*') ? 'collapse in' : '' }}">
                                <li class="{{ Request::is('stuff/complains/all') ? 'active' : '' }}">
                                    <a href="{{ route('stuff.complains.all') }}">List Complains</a>
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