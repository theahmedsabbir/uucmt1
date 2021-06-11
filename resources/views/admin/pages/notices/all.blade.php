@extends('admin.template.master')

@section('main_content')
	<div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>All Notices</h2>
                    </div>            
                    <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                        <ul class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item active">Notices</li>
                        </ul>
                    </div>
                </div>
            </div>

            @include('admin.includes.messages')


            
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Notice</strong> List</h2>
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
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Date</th>
                                            <th>Image</th>
                                            <th>Posted By</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Approved</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($notices as $notice)                                            
                                            <tr>
                                                <td>{{ $notice->created_at->format('d/m/Y g:i a') }}</td>
                                                <td><span class="list-icon">
                                                    <img class="rounded" width="40" src="

                                                        @if ( !is_null($notice->image) )
                                                            {{ asset('backend/images/notices/'.$notice->image) }}
                                                        @else
                                                            {{ asset('backend/images/notices/default.png') }}
                                                        @endif

                                                    " alt="">
                                                </span></td>
                                                <td>{{ $notice->posted_by }}</td>
                                                <td>{{ str_limit($notice->headline, 20, '...') }}</td>
                                                <td>{{ str_limit($notice->description, 40, '...') }}</td>
                                                <td>{{ $notice->is_approved==1? 'Yes' : 'No' }}</td>
                                                <td>
                                                    <a href="{{ route('admin.notices.edit', $notice->id) }}" class="">
                                                        <i class="fa fa-pencil m-r-15"></i>
                                                    </a>
                                                    <a href="#modal"  data-toggle="modal" data-target="#exampleModalCenter{{$notice->id}}" class="">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr> 



                                            <!-- Modal starts-->
                                            <div class="modal fade" id="exampleModalCenter{{$notice->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                              <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Notice Delete</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                                                  </div>
                                                  <div class="modal-body">
                                                    Are you sure to delete <strong>{{ $notice->id }}</strong> from system? 
                                                  </div>
                                                  <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button onclick="document.getElementById('del_form{{$notice->id}}').submit()" class="btn btn-danger">Yes Delete</button>

                                                    <form method="POST" action="{{ route('admin.notices.delete', $notice->id ) }}" id="del_form{{$notice->id}}">
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