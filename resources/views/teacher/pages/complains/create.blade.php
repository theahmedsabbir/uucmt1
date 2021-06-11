@extends('teacher.template.master')

@section('main_content')
	<div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Add Complain</h2>
                    </div>            
                    <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                        <ul class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="{{ route('teacher.dashboard') }}"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item">Complain</li>
                            <li class="breadcrumb-item active">Add</li>
                        </ul>
                    </div>
                </div>
            </div>

            @include('teacher.includes.messages')

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Add</strong> Complain</h2>
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
                        	<form action="{{ route('teacher.complains.store') }}" method="POST">
                        		@csrf
                        		
	                            <div class="row">
	                                <div class="col-sm-12">
	                                    <div class="form-group">
                                            <label for="">Your name? (Can leave the field blank)</label>
	                                        <input type="text" name="name" class="form-control">
	                                    </div>
                                        <div class="form-group">
                                            <label for="">Subject</label>
                                            <input type="text" name="subject" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Your complain? </label>
                                            <textarea name="complain" id="" cols="30" rows="7" class="form-control" required></textarea>
                                        </div>
	                                </div>	                                
                                    <div class="col-sm-12">
	                                    <button type="submit" class="btn btn-primary btn-lg btn-simple">Add Complain</button>
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