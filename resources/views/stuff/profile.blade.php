@extends('stuff.template.master')

@section('main_content')

    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>My Profile</h2>
                    </div>            
                    <div class="col-lg-6 col-md-4 col-sm-12">
                        <ul class="breadcrumb  float-right">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item active">My Profile</li>
                        </ul>                        
                    </div>
                </div>
            </div>


			<div class="row clearfix">
                <div class="col-lg-4 col-md-12">
                    <div class="card profile-header">
                        <div class="body text-center">
                            <div class="profile-image mb-3 text-center"> 
                            	<img class="img-fluid rounded" src="

						            @if ( Auth::user()->image != NULL )
						                {{ asset('backend/images/Stuffs/'.Auth::user()->image ) }}
						            @else
						                @if (Auth::user()->gender == 1)
						                    {{ asset('backend/images/default_male.png') }}
						                @else
						                    {{ asset('backend/images/default_female.png') }}
						                @endif
						            @endif

                            	" alt="" style="max-width: 180px; max-height: 210px;"> 
                            </div>
                            <div>
                                <h4 class="m-b-0"><strong>{{str_limit(Auth::user()->name, 18, '...')}}</strong></h4>
                                <span class="job_post">Stuff</span>
                                <p class="pl-lg-5 pr-lg-5">{{Auth::user()->address}}</p>
                            </div>
                            <div>
                                <button class="btn btn-primary btn-round">Follow</button>
                                <button class="btn btn-primary btn-simple">Message</button>
                            </div>
                            <p class="social-icon m-t-5 m-b-0">
                                <a title="Twitter" href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                <a title="Facebook" href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                                <a title="Google-plus" href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                <a title="Behance" href="javascript:void(0);"><i class="fa fa-behance"></i></a>
                                <a title="Instagram" href="javascript:void(0);"><i class="fa fa-instagram "></i></a>
                            </p>
                        </div>                    
                    </div>                               
                    
                               
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="card">
                        <div class="body">
                            <ul class="nav nav-tabs-new2 mb-3">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#about">About</a></li>
                                {{-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Account">Account</a></li>                         --}}
                            </ul>
                            <div class="tab-content padding-0">
                                <div class="tab-pane active" id="about">
                                    <ul class="list-unstyled">
                                        <li><p><i class="fa fa-user m-r-5"></i><strong>Username:</strong> {{Auth::user()->username}}</p></li>
                                        <li><p><i class="fa fa-star m-r-5"></i><strong>Email:</strong> {{Auth::user()->email}} </p></li>
                                        <li><p><i class="fa fa-phone m-r-5"></i><strong>Phone:</strong> {{Auth::user()->phone }}</p></li>
                                        <li><p><i class="fa fa-male m-r-5"></i><strong>Gender:</strong> {{Auth::user()->gender==1? 'Male' : 'Female' }}</p></li>
                                        <li><p><i class="fa fa-check m-r-5"></i><strong>Status:</strong> {{Auth::user()->is_approved==1? 'Aprroved' : 'Disabled' }}</p></li>
                                        <li><p><i class="fa fa-group m-r-5"></i><strong>Joined:</strong> {{Auth::user()->created_at->diffForHumans() }}</p></li>
                                    </ul>
                                    <hr>
                                    <p style="text-align: justify;">
                                    	@if (!is_null(Auth::user()->bio) or Auth::user()->bio!="")
                                    		{{ Auth::user()->bio }}
                                    	@else
                                    		{{"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in finibus neque. Vivamus in ipsum quis elit vehicula tempus vitae quis lacus. Vestibulum interdum diam non mi cursus venenatis. Morbi lacinia libero et elementum vulputate. Vivamus et facilisis mauris. Maecenas nec massa auctor, ultricies massa eu, tristique erat. Vivamus in ipsum quis elit vehicula tempus vitae quis lacus. Eu pellentesque, accumsan tellus leo, ultrices mi dui lectus sem nulla eu.Eu pellentesque, accumsan tellus leo, ultrices mi dui</p>
                                    <p>lectus sem nulla eu. Maecenas arcu, nec ridiculus quisque orci, vulputate mattis risus erat. lectus sem nulla eu.Eu pellentesque, accumsan tellus leo, ultrices mi dui lectus sem nulla eu. Maecenas arcu, nec ridiculus quisque orci, vulputate mattis risus erat."}}
                                    	@endif

                                    </p>                                                        
                                </div>
                            {{--     <div class="tab-pane" id="Account">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Current Password">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="New Password">
                                    </div>
                                    <button class="btn btn-info btn-round">Save Changes</button>
                                    <hr>
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Last Name">
                                            </div>
                                        </div>                                    
                                        <div class="col-lg-4 col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="City">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="E-mail">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Country">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group m-b-10">
                                                <textarea rows="4" class="form-control no-resize" placeholder="Address Line 1"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="fancy-checkbox">
                                                <label>
                                                    <input id="procheck2" type="checkbox">
                                                    <span>New task notifications</span>
                                                </label>
                                            </div>
                                            <div class="fancy-checkbox">
                                                <label for="procheck3">
                                                    <input id="procheck3" type="checkbox">
                                                    <span>New friend request notifications</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="btn btn-primary btn-round">Save Changes</button>
                                        </div>
                                    </div>
                                </div>   --}}                      
                            </div>
                        </div>
                    </div>                             
                </div>
            </div>


        </div>
    </div>
    
@endsection


