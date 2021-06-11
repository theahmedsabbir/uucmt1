@extends('admin.template.master')

@section('main_section')

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
                            <button type="button" class="btn btn-primary">Go To Site Frontend</button>
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
                                            <th>Age</th>
                                            <th>Address</th>
                                            <th>Number</th>
                                            <th>Batch</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><span class="list-name">2172081009</span></td>
                                            <td>Farhan</td>
                                            <td>25</td>
                                            <td>70 Bowman St. South Windsor, CT 06074</td>
                                            <td>404-447-6013</td>
                                            <td><span class="badge badge-primary">42</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="list-name">2172081011</span></td>
                                            <td>Emu</td>
                                            <td>27</td>
                                            <td>123 6th St. Melbourne, FL 32904</td>
                                            <td>404-447-4569</td>
                                            <td><span class="badge badge-warning">41A</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="list-name">2172081040</span></td>
                                            <td>Afsana</td>
                                            <td>23</td>
                                            <td>123 6th St. Melbourne, FL 32904</td>
                                            <td>404-447-7412</td>
                                            <td><span class="badge badge-info">43</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="list-name">2172081060</span></td>
                                            <td>Mamun</td>
                                            <td>23</td>
                                            <td>44 Shirley Ave. West Chicago, IL 60185</td>
                                            <td>404-447-2589</td>
                                            <td><span class="badge badge-default">45</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="list-name">2172081001</span></td>
                                            <td>Joy</td>
                                            <td>25</td>
                                            <td>70 Bowman St. South Windsor, CT 06074</td>
                                            <td>404-447-6013</td>
                                            <td><span class="badge badge-primary">50C</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="list-name">2172081030</span></td>
                                            <td>Rakibul</td>
                                            <td>21</td>
                                            <td>123 6th St. Melbourne, FL 32904</td>
                                            <td>404-447-9632</td>                                       
                                            <td><span class="badge badge-success">40</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- new admissions list -->

                    <div class="row clearfix">
                        <div class="col-md-12 col-lg-6">
                            <div class="card">
                                <div class="header">
                                    <h2>Students</h2>
                                </div>
                                <div class="body">
                                    <div class="sparkline" data-type="line" data-spot-Radius="1" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                                        data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgba(3, 116, 192, 0.7)"
                                        data-offset="90" data-width="100%" data-height="70" data-line-Width="1" data-line-Color="#b089ff"
                                        data-fill-Color="#ebe1ff">1,8,2,5,6,7,3,4,1,9,3,7,2</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <div class="card">
                                <div class="header">
                                    <h2>Teachers</h2>
                                </div>
                                <div class="body">
                                    <div class="sparkline" data-type="bar" data-width="97%" data-height="70" data-bar-Width="10" data-bar-Spacing="10" data-bar-Color="#02b5b2">2,8,3,4,6,2,3,8,7,6,5,2,1,8</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- university income -->
                    <div class="card">
                        <div class="header">
                            <h2>University Income</h2>
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
                            <div id="university_income" class="chartist text-center"></div>
                        </div>
                    </div>
                    <!-- university income -->
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card">
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
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-6">
                            <div class="card top_counter">
                                <div class="body">
                                    <div class="icon text-info"><i class="fa fa-user"></i> </div>
                                    <div class="content">
                                        <div class="text">Total Student</div>
                                        <h5 class="number">530</h5>
                                    </div>
                                    <hr>
                                    <div class="icon text-warning"><i class="fa fa-user-circle"></i> </div>
                                    <div class="content">
                                        <div class="text">Total Teacher</div>
                                        <h5 class="number">14</h5>
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
                                        <h5 class="number">7</h5>
                                    </div>
                                    <hr>
                                    <div class="icon"><i class="fa fa-graduation-cap"></i> </div>
                                    <div class="content">
                                        <div class="text">Courses</div>
                                        <h5 class="number">35</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6">
                            <div class="card top_counter">
                                <div class="body">
                                    <div class="icon text-danger"><i class="icon-paper-clip font-weight-bold"></i> </div>
                                    <div class="content">
                                        <div class="text">Notifications</div>
                                        <h5 class="number">205</h5>
                                    </div>
                                    <hr>
                                    <div class="icon text-success"><i class="icon-info font-weight-bold"></i> </div>
                                    <div class="content">
                                        <div class="text">Pending Notices</div>
                                        <h5 class="number">325</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6">
                            <div class="card top_counter">
                                <div class="body">
                                    <div class="icon"><i class="icon-call-end font-weight-bold"></i> </div>
                                    <div class="content">
                                        <div class="text">Complaints</div>
                                        <h5 class="number">28</h5>
                                    </div>
                                    <hr>
                                    <div class="icon text-success"><i class="icon-drop font-weight-bold"></i> </div>
                                    <div class="content">
                                        <div class="text">Blood Donations</div>
                                        <h5 class="number">528</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6">
                            <div class="card top_counter">
                                <div class="body">
                                    <div class="icon"><i class="icon-call-end font-weight-bold"></i> </div>
                                    <div class="content">
                                        <div class="text">Complaints</div>
                                        <h5 class="number">28</h5>
                                    </div>
                                    <hr>
                                    <div class="icon text-success"><i class="icon-drop font-weight-bold"></i> </div>
                                    <div class="content">
                                        <div class="text">Blood Donations</div>
                                        <h5 class="number">528</h5>
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


