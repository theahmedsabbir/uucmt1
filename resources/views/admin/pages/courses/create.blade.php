@extends('admin.template.master')

@section('main_content')
	<div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Add Stuff</h2>
                    </div>            
                    <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                        <ul class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item">Stuff</li>
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
                        	<form action="{{ route('admin.courses.store') }}" method="POST" enctype="multipart/form-data">
                        		@csrf
                        		
	                            <div class="row clearfix">
	                                <div class="col-md-6 col-sm-12">
	                                    <div class="form-group">
	                                        <input type="text" name="name" class="form-control" placeholder="Course Name" required>
	                                    </div>
	                                </div>
	                                <div class="col-md-6 col-sm-12">
	                                    <div class="form-group">
	                                        <input type="number" name="code" class="form-control" placeholder="Course Code" required>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="row clearfix">
	                                <div class="col-md-4 col-sm-12">
	                                    <div class="form-group">
	                                        <input type="text" name="link" class="form-control" placeholder="Meeting URL">
	                                    </div>
	                                </div>
	                                <div class="col-md-2 col-sm-12">                                
	                                    <select name="semester_id" class="form-control show-tick" required>
	                                        {{-- <option value="">-- Gender --</option> --}}
	                                        @foreach ($semesters as $semester)
	                                        	<option value="{{ $semester->id }}">{{ $semester->name }}</option>
	                                        @endforeach
	                                    </select>
	                                </div>
	                                <div class="col-md-2 col-sm-12">                                
	                                    <select name="batch_id" class="form-control show-tick" required>
	                                        {{-- <option value="">-- Gender --</option> --}}
	                                        @foreach ($batches as $batch)
	                                        	<option value="{{ $batch->id }}">{{ $batch->name }}</option>
	                                        @endforeach
	                                    </select>
	                                </div>
	                                <div class="col-md-2 col-sm-12">                                
	                                    <select name="user_id" class="form-control show-tick" required>
	                                        {{-- <option value="">-- Gender --</option> --}}
	                                        @foreach ($teachers as $teacher)
	                                        	<option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
	                                        @endforeach
	                                    </select>
	                                </div>
	                                <div class="col-md-2 col-sm-12">
	                                    <div class="form-group">
	                                        <input type="number" name="credit" class="form-control" placeholder="Credits" step="0.1" required>
	                                    </div>
	                                </div>
	                                <div class="col-sm-12">
	                                        <input type="file" name="image" class="dropify">
	                                </div>
	                                <div class="col-sm-12">
	                                    <div class="form-group mt-3">
	                                        <textarea rows="4" name="description" class="form-control no-resize" placeholder="Add Some Description"></textarea>
	                                    </div>
	                                </div>
	                                <div class="col-sm-12">
	                                    <button type="submit" class="btn btn-primary">Submit</button>
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