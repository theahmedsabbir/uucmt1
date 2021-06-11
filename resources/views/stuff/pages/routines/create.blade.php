@extends('stuff.template.master')

@section('main_content')
	<div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Add Routine</h2>
                    </div>            
                    <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                        <ul class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="{{ route('stuff.dashboard') }}"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item">Routine</li>
                            <li class="breadcrumb-item active">Add</li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Basic</strong> Information <small>Add All Description here...</small> </h2>
                        </div>
                        <div class="body">
                        	@include('stuff.includes.messages')
                        	<form action="{{ route('stuff.routines.store') }}" method="POST" enctype="multipart/form-data">
                        		@csrf
                        		
	                            <div class="row clearfix">
	                                <div class="col-md-12 col-sm-12">
	                                    <div class="form-group">
	                                    	<label for="">Which Day? </label>
	                                        <input type="text" name="day" class="form-control" required>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="row clearfix">
	                                <div class="col-sm-12">
	                                	<label for="">Routine Image</label>
	                                    <input type="file" name="image" class="dropify" required>
	                                </div>
	                                <div class="col-sm-12 mt-3">
	                                    <button type="submit" class="btn btn-primary">Submit</button>
	                                    <button onclick="location.href='{{ route("stuff.dashboard") }}';" class="btn btn-outline-secondary">Cancel</button>
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