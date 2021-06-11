@extends('admin.template.master')

@section('main_content')
	<div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Add Book</h2>
                    </div>            
                    <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                        <ul class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item">Book</li>
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
                        	@include('admin.includes.messages')
                        	<form action="{{ route('admin.libraries.store') }}" method="POST" enctype="multipart/form-data">
                        		@csrf
                        		
	                            <div class="row clearfix">
	                                <div class="col-md-12 col-sm-12">
	                                    <div class="form-group">
	                                    	<label for="">Book Name</label>
	                                        <input type="text" name="book_name" value="" class="form-control" required>
	                                    </div>
	                                </div>
	                                <div class="col-md-12 col-sm-12">
	                                    <div class="form-group">
	                                    	<label for="">Subject</label>
	                                        <input type="text" name="subject" value="" class="form-control" required>
	                                    </div>
	                                </div>
	                                <div class="col-md-12 col-sm-12">
	                                    <div class="form-group">
	                                    	<label for="">Details</label>
	                                        <textarea name="details" rows="5" class="form-control"></textarea>
	                                    </div>
	                                </div>
	                                <div class="col-md-12 col-sm-12">
	                                    <div class="form-group">
	                                    	<label for="">Stock</label>
	                                        <input type="number" name="stock" value="" class="form-control" required>
	                                    </div>
	                                </div>
	                            </div>

	                            <div class="row clearfix">
	                                <div class="col-sm-12">
	                                	<label for="">Image</label>
	                                    <input type="file" name="image" class="dropify">
	                                </div>
	                                <div class="col-sm-12">
	                                	<div class="form-group mt-3">
		                                    <button type="submit" class="btn btn-primary">Submit</button>
		                                    <button onclick="location.href='{{ route("admin.dashboard") }}';" class="btn btn-outline-secondary">Cancel</button>
	                                		
	                                	</div>
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