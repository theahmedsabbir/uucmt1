@extends('admin.template.master')

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
                <div class="col-lg-8 col-md-12">

                    <!-- admin welcome -->
                    <div class="card">
                        <div class="header">
                            <h2>Welcome Admin</h2>                        
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
                            <p>You Can Manage All The Essential Admin Tasks From Here. Good Luck.</p>
                            {{-- <button type="button" class="btn btn-primary">Go To Site Frontend</button> --}}
                            <a href="{{ route('root') }}" class="btn btn-primary">Go To Site Frontend</a>
                        </div>
                    </div>
                    <!-- admin welcome -->


                    <!-- new admissions list -->
                    <div class="card">
                        <div class="header">
                            <h2>New Admission List</h2>
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
                            <div class="table-responsive">
                                <table class="table table-hover m-b-0">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Address</th>
                                            <th>Phone</th>
                                            <th>Batch</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach (App\User::where('user_role', 4)->orderBy('id', 'desc')->take(6)->get() as $student)

                                            <tr>
                                                <td><span class="list-name">{{ $student->username }}</span></td>
                                                <td>{{ $student->name }}</td>
                                                <td>{{ str_limit($student->address, 30, "...")}}</td>
                                                <td>{{ $student->phone }}</td>
                                                <td><span class="badge badge-primary">{{ $student->studentBatch->batch->name }}</span></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- new admissions list -->

                </div>
                @php
                    
                @endphp
                <div class="col-lg-4 col-md-12">
                    {{-- <div class="card">
                        <div class="header">
                            <h2>University Stats</h2>
                        </div>
                        <div class="body">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="sparkline-pie">6,4,8,1</div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="progress-container m-b-20">
                                        <span class="progress-badge">Students</span>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                                <span class="progress-value">86%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-container m-b-20">
                                        <span class="progress-badge">Teachers</span>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100" style="width: 36%;">
                                                <span class="progress-value">36%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-container m-b-20">
                                        <span class="progress-badge">Stuffs</span>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;">
                                                <span class="progress-value">23%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-container m-b-10">
                                        <span class="progress-badge">Admins</span>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
                                                <span class="progress-value">5%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-6">
                            <div class="card top_counter">
                                <div class="body">
                                    <div class="icon text-info"><i class="fa fa-user"></i> </div>
                                    <div class="content">
                                        <div class="text">Total Student</div>
                                        <h5 class="number">{{ App\User::where('user_role', 4)->count() }}</h5>
                                    </div>
                                    <hr>
                                    <div class="icon text-warning"><i class="icon-user"></i> </div>
                                    <div class="content">
                                        <div class="text">Total Teacher</div>
                                        <h5 class="number">{{ App\User::where('user_role', 2)->count() }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6">
                            <div class="card top_counter">
                                <div class="body">
                                    <div class="icon text-warning"><i class="fa fa-tags"></i> </div>
                                    <div class="content">
                                        <div class="text">Batches</div>
                                        <h5 class="number">{{ App\Batch::count() }}</h5>
                                    </div>
                                    <hr>
                                    <div class="icon"><i class="fa fa-graduation-cap"></i> </div>
                                    <div class="content">
                                        <div class="text">Courses</div>
                                        <h5 class="number">{{ App\Course::count() }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6">
                            <div class="card top_counter">
                                <div class="body">
                                    <div class="icon text-success"><i class="icon-info font-weight-bold"></i> </div>
                                    <div class="content">
                                        <div class="text">Notices</div>
                                        <h5 class="number">{{ App\Notice::count() }}</h5>
                                    </div>
                                    <hr>
                                    <div class="icon"><i class="icon-call-end font-weight-bold"></i> </div>
                                    <div class="content">
                                        <div class="text">Complaints</div>
                                        <h5 class="number">{{ App\Complain::count() }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            
        </div>
    </div>
    
@endsection


