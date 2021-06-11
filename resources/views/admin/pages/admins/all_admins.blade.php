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
                    </div>
                </div>
            </div>
            
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card parents-list">
                        <div class="header">
                            <h2><strong>Admins</strong> List</h2>
                        </div>
                        <div class="body">
                            @include('admin.includes.messages')
                            <div class="table-responsive">
                                <table class="table table-hover m-b-0">
                                    <thead class="thead-dark">
                                        <tr>                                       
                                            <th>Media</th>
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Phone</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	@foreach ($admins as $admin)   

	                                        <tr>
	                                            <td><span class="list-icon">
	                                            	<img class="rounded" src="

	                                            		@if ( !is_null($admin->image) )
	                                            			{{ asset('backend/images/Admins/'.$admin->image) }}
	                                            		@else
											                @if ( $admin->gender == 1)
											                    {{ asset('backend/images/default_male.png') }}
											                @else
											                    {{ asset('backend/images/default_female.png') }}
											                @endif
	                                            		@endif

	                                            	" alt="">
	                                            </span></td>
	                                            <td><span class="list-name">{{ $admin->name }}</span></td>
	                                            <td>{{ $admin->username }}</td>
	                                            <td>{{ $admin->email }}</td>
	                                            <td>{{ $admin->address }}</td>
	                                            <td>{{ $admin->phone }}</td>
	                                            <td>
	                                            	<a href="{{ route('admin.admins.edit', $admin->id) }}" class="badge badge-primary">
	                                            		<i class="icon-note"></i>
	                                            	</a>
	                                            	<a href="#modal"  data-toggle="modal" data-target="#exampleModalCenter{{$admin->id}}" class="badge badge-danger">
	                                            		<i class="icon-trash"></i>
	                                            	</a>
	                                            </td>
	                                            
	                                        </tr>



                                            <!-- Modal starts-->
                                            <div class="modal fade" id="exampleModalCenter{{$admin->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                              <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Admin Delete</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                                                  </div>
                                                  <div class="modal-body">
                                                    Are you sure to delete <strong>{{ $admin->name }}</strong> from system? 
                                                  </div>
                                                  <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button onclick="document.getElementById('del_form{{$admin->id}}').submit()" class="btn btn-danger">Yes Delete</button>

                                                    <form method="POST" action="{{ route('admin.admins.delete', $admin->id ) }}" id="del_form{{$admin->id}}">
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

                            <div class="mt-3">
                                <div class="row">
                                    <div class="col-sm-6">
                                        {{ $admins->links() }}
                                    </div>
                                    <div class="col-sm-6">
                                        <a href="{{ route('admin.admins.create') }}" class="btn btn-success float-sm-right">Add Admin</a>
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