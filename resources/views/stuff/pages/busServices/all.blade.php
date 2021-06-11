@extends('stuff.template.master')

@section('main_content')
	<div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>All Bus Schedules</h2>
                    </div>            
                    <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                        <ul class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item active">Bus Schedules</li>
                        </ul>
                    </div>
                </div>
            </div>

            @include('stuff.includes.messages')


            
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Bus Schedule</strong> List: Up</h2>
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
                                <table class="table table-hover mb-0 c_table_v1">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Starting Station</th>
                                            <th>Time</th>
                                            <th>Route</th>
                                            <th>Destination</th>
                                            <th>Active Days</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($busServices->where('type', 1) as $busService)                                            
                                            <tr>
                                                <td>{{ $loop->index+1 }}</td>
                                                <td>{{ $busService->starting_station }}</td>
                                                <td>
                                                    @php       
                                                    $time=date_create("0000-00-00 ".$busService->time);
                                                    echo date_format($time, 'g:i A');
                                                    @endphp
                                                </td>
                                                <td>{{ $busService->route }}</td>
                                                <td>{{ $busService->destination }}</td>
                                                <td>{{ $busService->active_days }}</td>
                                                <td>
                                                    {{-- <a href="{{ route('stuff.busServices.edit', $busService->id) }}" class="">
                                                        <i class="fa fa-pencil m-r-15"></i>
                                                    </a> --}}
                                                    <a href="#modal"  data-toggle="modal" data-target="#exampleModalCenter{{$busService->id}}" class="">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr> 



                                            <!-- Modal starts-->
                                            <div class="modal fade" id="exampleModalCenter{{$busService->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                              <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Bus Schedule Delete</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                                                  </div>
                                                  <div class="modal-body">
                                                    Are you sure to delete <strong>{{ $busService->name }}</strong> from system? 
                                                  </div>
                                                  <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button onclick="document.getElementById('del_form{{$busService->id}}').submit()" class="btn btn-danger">Yes Delete</button>

                                                    <form method="POST" action="{{ route('stuff.busServices.delete', $busService->id ) }}" id="del_form{{$busService->id}}">
                                                        @csrf
                                                        
                                                    </form>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <!-- Modal ends-->
                                        @endforeach                                          
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2><strong>Bus Schedule</strong> List: Down</h2>
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
                                <table class="table table-hover mb-0 c_table_v1">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Starting Station</th>
                                            <th>Time</th>
                                            <th>Route</th>
                                            <th>Destination</th>
                                            <th>Active Days</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($busServices->where('type', 2) as $busService)                                            
                                            <tr>
                                                <td>{{ $loop->index+1 }}</td>
                                                <td>{{ $busService->starting_station }}</td>
                                                <td>
                                                    @php       
                                                    $time=date_create("0000-00-00 ".$busService->time);
                                                    echo date_format($time, 'g:i A');
                                                    @endphp
                                                </td>
                                                <td>{{ $busService->route }}</td>
                                                <td>{{ $busService->destination }}</td>
                                                <td>{{ $busService->active_days }}</td>
                                                <td>
                                                    {{-- <a href="{{ route('stuff.busServices.edit', $busService->id) }}" class="">
                                                        <i class="fa fa-pencil m-r-15"></i>
                                                    </a> --}}
                                                    <a href="#modal"  data-toggle="modal" data-target="#exampleModalCenter{{$busService->id}}" class="">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr> 



                                            <!-- Modal starts-->
                                            <div class="modal fade" id="exampleModalCenter{{$busService->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                              <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Bus Schedule Delete</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                                                  </div>
                                                  <div class="modal-body">
                                                    Are you sure to delete <strong>{{ $busService->name }}</strong> from system? 
                                                  </div>
                                                  <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button onclick="document.getElementById('del_form{{$busService->id}}').submit()" class="btn btn-danger">Yes Delete</button>

                                                    <form method="POST" action="{{ route('stuff.busServices.delete', $busService->id ) }}" id="del_form{{$busService->id}}">
                                                        @csrf
                                                        
                                                    </form>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <!-- Modal ends-->
                                        @endforeach                                          
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
@endsection