@extends('admin.template.master')

@section('main_content')
	<div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Add Semester</h2>
                    </div>            
                    <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                        <ul class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item">Semester</li>
                            <li class="breadcrumb-item active">Add</li>
                        </ul>
                    </div>
                </div>
            </div>

            @include('admin.includes.messages')

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Add</strong> Semester</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another Action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                        	<form action="{{ route('admin.semesters.store') }}" method="POST">
                        		@csrf
                        		
	                            <div class="row">
	                                <div class="col-sm-12">
	                                    <div class="form-group">
	                                        <input type="text" name="name" value="" placeholder="Semester Name (Ex. fall/summer)" class="form-control" required>
	                                    </div>
	                                </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="number" name="year" value="" placeholder="Semester Year(ex. 20/21)" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="date" name="start_date" value="" placeholder="Semester Start" class="form-control">
                                        </div>
                                    </div>
	                                <div class="col-sm-12">
                                        <label for="">Current Semseter?</label>
	                                    <div class="form-group">
	                                    	<select name="is_current" class="form-control">
	                                    		<option value="1">Yes</option>
	                                    		<option value="0">No</option>
	                                    	</select>
	                                    </div>
	                                </div>
	                                <div class="col-sm-12">
	                                    <button type="submit" class="btn btn-primary btn-lg btn-simple">Add Semester</button>
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