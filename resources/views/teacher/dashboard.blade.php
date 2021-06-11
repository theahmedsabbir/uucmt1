@extends('teacher.template.master')

@section('main_content')

    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Dashboard</h2>
                    </div>            
                    <div class="col-lg-6 col-md-4 col-sm-12">
                        <ul class="breadcrumb  float-right">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>                        
                    </div>
                </div>
            </div>
            
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">

                    <!-- admin welcome -->
                    <div class="card">
                        <div class="header">
                            <h2>Welcome {{ Auth::user()->name }}</h2>                        
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <h6 class="m-b-15">This Is Your Dashboard</h6>       
                            <p>You Can Manage All The Essential Tasks From Here. Good Luck.</p>
                            {{-- <button type="button" class="btn btn-primary">Go To Site Frontend</button> --}}
                            <a href="{{ route('root') }}" class="btn btn-primary">Go To Site Frontend</a>
                        </div>
                    </div>
                    <!-- admin welcome -->

                </div>
            </div> 
            
        </div>
    </div>
    
@endsection


