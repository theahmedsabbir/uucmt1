@extends('admin.template.master')

@section('main_content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>All Stuffs</h2>
                    </div>            
                    <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                        <ul class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item active">Stuffs</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card parents-list">
                        <div class="header">
                            <h2><strong>Stuffs</strong> List</h2>
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
                                        @foreach ($stuffs as $stuff)   

                                            <tr>
                                                <td><span class="list-icon">
                                                    <img class="rounded" src="

                                                        @if ( !is_null($stuff->image) )
                                                            {{ asset('backend/images/Stuffs/'.$stuff->image) }}
                                                        @else
                                                            @if ( $stuff->gender == 1)
                                                                {{ asset('backend/images/default_male.png') }}
                                                            @else
                                                                {{ asset('backend/images/default_female.png') }}
                                                            @endif
                                                        @endif

                                                    " alt="">
                                                </span></td>
                                                <td><span class="list-name">{{ $stuff->name }}</span></td>
                                                <td>{{ $stuff->username }}</td>
                                                <td>{{ $stuff->email }}</td>
                                                <td>{{ $stuff->address }}</td>
                                                <td>{{ $stuff->phone }}</td>
                                                <td>
                                                    <a href="{{ route('admin.stuffs.edit', $stuff->id) }}" class="badge badge-primary">
                                                        <i class="icon-note"></i>
                                                    </a>
                                                    <a href="#modal"  data-toggle="modal" data-target="#exampleModalCenter{{$stuff->id}}" class="badge badge-danger">
                                                        <i class="icon-trash"></i>
                                                    </a>
                                                </td>
                                                
                                            </tr>



                                            <!-- Modal starts-->
                                            <div class="modal fade" id="exampleModalCenter{{$stuff->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                              <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Stuff Delete</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                                                  </div>
                                                  <div class="modal-body">
                                                    Are you sure to delete <strong>{{ $stuff->name }}</strong> from system? 
                                                  </div>
                                                  <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button onclick="document.getElementById('del_form{{$stuff->id}}').submit()" class="btn btn-danger">Yes Delete</button>

                                                    <form method="POST" action="{{ route('admin.stuffs.delete', $stuff->id ) }}" id="del_form{{$stuff->id}}">
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



