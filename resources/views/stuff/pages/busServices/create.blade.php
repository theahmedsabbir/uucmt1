@extends('stuff.template.master')

@section('main_content')
	<div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Add Bus Schedule</h2>
                    </div>            
                    <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                        <ul class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="{{ route('stuff.dashboard') }}"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item">Bus Schedule</li>
                            <li class="breadcrumb-item active">Add</li>
                        </ul>
                    </div>
                </div>
            </div>

            @include('stuff.includes.messages')

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Add</strong> Bus Schedule</h2>
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
                        	<form action="{{ route('stuff.busServices.store') }}" method="POST">
                        		@csrf
                        		
	                            <div class="row">
	                                <div class="col-sm-12">
	                                    <div class="form-group">
                                            <label>Type</label>
	                                        <select name="type" id="" class="form-control" required>
                                                <option value="1">Up</option>   
                                                <option value="2">Down</option>   
                                            </select>
	                                    </div>
                                        <div class="form-group">
                                            <label>Starting Station</label>
                                            <input type="text" name="starting_station" value=""  class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Time</label>
                                            <input type="time" name="time" value=""  class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Route</label>
                                            <input type="text" name="route" value=""  class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Destination</label>
                                            <input type="text" name="destination" value=""  class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>active_days</label>
                                            <input type="text" name="active_days" value=""  class="form-control" required>
                                        </div>
	                                </div>
	                                <div class="col-sm-12">
	                                    <button type="submit" class="btn btn-primary btn-lg btn-simple">Add Bus Schedule</button>
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