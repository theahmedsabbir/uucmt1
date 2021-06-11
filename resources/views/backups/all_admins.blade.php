@extends('admin.template.master')

@section('main_content')
	<div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>All Admins</h2>
                    </div>            
                    <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                        <ul class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item active">Admins</li>
                        </ul>
                        {{-- <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
                            <div class="sparkline text-left" data-type="line" data-width="8em" data-height="20px" data-line-width="1" data-line-color="#00c5dc" data-fill-color="transparent"><canvas width="112" height="20" style="display: inline-block; width: 112px; height: 20px; vertical-align: top;"></canvas></div>
                            <span>Visitors</span>
                        </div>
                        <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
                            <div class="sparkline text-left" data-type="line" data-width="8em" data-height="20px" data-line-width="1" data-line-color="#f4516c" data-fill-color="transparent"><canvas width="112" height="20" style="display: inline-block; width: 112px; height: 20px; vertical-align: top;"></canvas></div>
                            <span>Visits</span>
                        </div> --}}
                    </div>
                </div>
            </div>
            
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card parents-list">
                        <div class="header">
                            <h2><strong>Admins</strong> List</h2>
{{--                             <ul class="header-dropdown">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another Action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                            </ul> --}}
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover m-b-0">
                                    <thead class="thead-dark">
                                        <tr>                                       
                                            <th>Media</th>
                                            <th>Student ID</th>
                                            <th>Department</th>
                                            <th>Parents Name</th>
                                            <th>Address</th>
                                            <th>Number</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><span class="list-icon"><img class="rounded" src="../assets/images/xs/avatar1.jpg" alt=""></span></td>
                                            <td><span class="list-name">OU 00456</span></td>
                                            <td><span class="badge badge-primary">MCA</span></td>
                                            <td>Joseph</td>
                                            <td>70 Bowman St. South Windsor, CT 06074</td>
                                            <td>404-447-6013</td>
                                        </tr>
                                        <tr>
                                            <td><span class="list-icon"><img class="rounded" src="../assets/images/xs/avatar2.jpg" alt=""></span></td>
                                            <td><span class="list-name">KU 00789</span></td>
                                            <td><span class="badge badge-warning">Medical</span></td>
                                            <td>Cameron</td>
                                            <td>123 6th St. Melbourne, FL 32904</td>
                                            <td>404-447-4569</td>
                                        </tr>
                                        <tr>
                                            <td><span class="list-icon"><img class="rounded" src="../assets/images/xs/avatar3.jpg" alt=""></span></td>
                                            <td><span class="list-name">KU 00987</span></td>
                                            <td><span class="badge badge-info">M.COM</span></td>
                                            <td>Alex</td>
                                            <td>123 6th St. Melbourne, FL 32904</td>
                                            <td>404-447-7412</td>
                                        </tr>
                                        <tr>
                                            <td><span class="list-icon"><img class="rounded" src="../assets/images/xs/avatar4.jpg" alt=""></span></td>
                                            <td><span class="list-name">OU 00951</span></td>
                                            <td><span class="badge badge-default">MBA</span></td>
                                            <td>James</td>
                                            <td>44 Shirley Ave. West Chicago, IL 60185</td>
                                            <td>404-447-2589</td>
                                        </tr>
                                        <tr>
                                            <td><span class="list-icon"><img class="rounded" src="../assets/images/xs/avatar1.jpg" alt=""></span></td>
                                            <td><span class="list-name">OU 00953</span></td>
                                            <td><span class="badge badge-success">BBA</span></td>
                                            <td>charlie</td>
                                            <td>123 6th St. Melbourne, FL 32904</td>
                                            <td>404-447-9632</td>
                                        </tr>
                                        <tr>
                                            <td><span class="list-icon"><img class="rounded" src="../assets/images/xs/avatar1.jpg" alt=""></span></td>
                                            <td><span class="list-name">OU 00456</span></td>
                                            <td><span class="badge badge-primary">MCA</span></td>
                                            <td>Joseph</td>
                                            <td>70 Bowman St. South Windsor, CT 06074</td>
                                            <td>404-447-6013</td>
                                        </tr>
                                        <tr>
                                            <td><span class="list-icon"><img class="rounded" src="../assets/images/xs/avatar2.jpg" alt=""></span></td>
                                            <td><span class="list-name">KU 00789</span></td>
                                            <td><span class="badge badge-warning">Medical</span></td>
                                            <td>Cameron</td>
                                            <td>123 6th St. Melbourne, FL 32904</td>
                                            <td>404-447-4569</td>
                                        </tr>
                                        <tr>
                                            <td><span class="list-icon"><img class="rounded" src="../assets/images/xs/avatar3.jpg" alt=""></span></td>
                                            <td><span class="list-name">KU 00987</span></td>
                                            <td><span class="badge badge-info">M.COM</span></td>
                                            <td>Alex</td>
                                            <td>123 6th St. Melbourne, FL 32904</td>
                                            <td>404-447-7412</td>
                                        </tr>
                                        <tr>
                                            <td><span class="list-icon"><img class="rounded" src="../assets/images/xs/avatar4.jpg" alt=""></span></td>
                                            <td><span class="list-name">OU 00951</span></td>
                                            <td><span class="badge badge-default">MBA</span></td>
                                            <td>James</td>                                        
                                            <td>44 Shirley Ave. West Chicago, IL 60185</td>
                                            <td>404-447-2589</td>
                                        </tr>
                                        <tr>
                                            <td><span class="list-icon"><img class="rounded" src="../assets/images/xs/avatar1.jpg" alt=""></span></td>
                                            <td><span class="list-name">OU 00953</span></td>
                                            <td><span class="badge badge-success">BBA</span></td>
                                            <td>charlie</td>
                                            <td>123 6th St. Melbourne, FL 32904</td>
                                            <td>404-447-9632</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <ul class="pagination pagination-primary mt-3 mb-0">
                                <li class="page-item disabled"><a class="page-link" href="javascript:void(0);">previous</a></li>
                                <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection