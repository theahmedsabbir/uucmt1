@extends('admin.template.master')

@section('main_content')
	<div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Add Batch</h2>
                    </div>            
                    <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                        <ul class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item">Batch</li>
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
                            <h2><strong>Add</strong> Batch</h2>
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
                        	<form action="{{ route('admin.batch.store') }}" method="POST">
                        		@csrf
                        		
	                            <div class="row">
	                                <div class="col-sm-12">
	                                    <div class="form-group">
	                                        <input type="number" name="name" value="" placeholder="Batch Name" class="form-control" required>
	                                    </div>
	                                </div>
	                                <div class="col-sm-12">
	                                    <div class="form-group">
	                                    	<select name="session" class="form-control">
	                                    		<option value="1">Day</option>
	                                    		<option value="2">Evening</option>
	                                    	</select>
	                                    </div>
	                                </div>
	                                <div class="col-sm-12">
	                                    <button type="submit" class="btn btn-primary btn-lg btn-simple">Add Batch</button>
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