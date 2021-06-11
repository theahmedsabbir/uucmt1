@extends('admin.template.master')

@section('main_content')
	<div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Edit Admin</h2>
                    </div>            
                    <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                        <ul class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item">Admin</li>
                            <li class="breadcrumb-item active">Edit</li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Basic</strong> Information <small>Edit All Description here...</small> </h2> 
                        </div>
                        <div class="body">
                        	@include('admin.includes.messages')
                        	<form action="{{ route('admin.admins.update',$admin->id ) }}" method="POST" enctype="multipart/form-data">
                        		@csrf
                        		
	                            <div class="row clearfix">
	                                <div class="col-md-6 col-sm-12">
	                                    <div class="form-group">
	                                        <input type="text" name="name" value="{{ $admin->name }}" class="form-control" placeholder="Full Name" required>
	                                    </div>
	                                </div>
	                                <div class="col-md-6 col-sm-12">
	                                    <div class="form-group">
	                                        <input type="text" name="username" value="{{ $admin->username }}" class="form-control" placeholder="Username" required>
	                                    </div>
	                                </div>
	                                <div class="col-md-6 col-sm-12">
	                                    <div class="form-group">
	                                        <input type="email" name="email" value="{{ $admin->email }}" class="form-control" placeholder="Email" required>
	                                    </div>
	                                </div>
	                                <div class="col-md-6 col-sm-12">
	                                    <div class="form-group">
	                                        <input type="password" name="password" value="11111111" class="form-control" placeholder="Password" required>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="row clearfix">
	                                <div class="col-md-6 col-sm-12">
	                                    <div class="form-group">
	                                        <input type="text" name="address" value="{{ $admin->address }}" class="form-control" placeholder="Address">
	                                    </div>
	                                </div>
	                                <div class="col-md-3 col-sm-12">                                
	                                    <select name="gender" class="form-control show-tick" required>
	                                        <option value="">-- Gender --</option>
	                                        <option value="1" {{ $admin->gender==1 ? 'selected' : '' }}>Male</option>
	                                        <option value="2" {{ $admin->gender==2 ? 'selected' : '' }}>Female</option>
	                                    </select>
	                                </div>
	                                <div class="col-md-3 col-sm-12">
	                                    <div class="form-group">
	                                        <input type="text" name="phone" value="{{ $admin->phone }}" class="form-control" placeholder="Phone">
	                                    </div>
	                                </div>
	                                <div class="col-sm-12">
	                                        <input type="file" name="image" class="dropify">
	                                </div>
	                                <div class="col-sm-12">
	                                    <div class="form-group mt-3">
	                                        <textarea rows="4" name="bio" class="form-control no-resize" placeholder="Add Some Bio...">{{ $admin->bio }}</textarea>
	                                    </div>
	                                </div>
	                                <div class="col-sm-12">
	                                    <button type="submit" class="btn btn-primary">Update</button>
	                                    <button onclick="location.href='{{ route("admin.dashboard") }}';" class="btn btn-outline-secondary">Cancel</button>
	                                </div>
	                            </div>
                        		
                        	</form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection