@extends('admin.template.master')

@section('main_content')
	<div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>All Teachers</h2>
                    </div>            
                    <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                        <ul class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item active">Teachers</li>
                        </ul>
                    </div>
                </div>
            </div>

            @include('admin.includes.messages')
            <div class="row clearfix">
                @foreach ($teachers->sortBy('designation') as $teacher)                    
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card member-card">
                            <div class="body">
                                <div class="member-thumb" style="height: 140px;">
                                    <img src="

                                        @if ( !is_null($teacher->image) )
                                            {{ asset('backend/images/Teachers/'.$teacher->image) }}
                                        @else
                                            @if ( $teacher->gender == 1)
                                                {{ asset('backend/images/default_male.png') }}
                                            @else
                                                {{ asset('backend/images/default_female.png') }}
                                            @endif
                                        @endif

                                    " class="img-fluid rounded" alt="profile-image" style="min-width: 140px; max-width:150px;">                               
                                </div>
                                <div class="detail">
                                    <h4 class="m-b-0">{{ $teacher->name }}</h4>
                                    <p class="text-muted">
                                        @if ($teacher->designation == 1)
                                            Chairman
                                        @elseif ($teacher->designation == 2)
                                            Associate Professor & Coordinator
                                        @elseif ($teacher->designation == 3)
                                            Associate Professor
                                        @elseif ($teacher->designation == 4)
                                            Assistant Professor & Coordinator
                                        @elseif ($teacher->designation == 5)
                                            Assistant Professor
                                        @elseif ($teacher->designation == 6)
                                            Senior Lecturer
                                        @else
                                            Lecturer
                                        @endif
                                    </p>
                                    <p class="text-muted">{{ str_limit($teacher->email, 33, '..') }}</p>
                                    <p class="text-muted">{{ $teacher->address }}</p>                           
                                    <a href="{{ route('admin.teachers.edit', $teacher->id ) }};" class="btn btn-default btn-simple"><i class="icon-note"></i></a>                                    
                                    <a href="#modal"  data-toggle="modal" data-target="#exampleModalCenter{{$teacher->id}}" class="btn btn-default btn-simple">
                                        <i class="icon-trash"></i>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Modal starts-->
                    <div class="modal fade" id="exampleModalCenter{{$teacher->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Admin Delete</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            Are you sure to delete <strong>{{ $teacher->name }}</strong> from system? 
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button onclick="document.getElementById('del_form{{$teacher->id}}').submit()" class="btn btn-danger">Yes Delete</button>

                            <form method="POST" action="{{ route('admin.teachers.delete', $teacher->id ) }}" id="del_form{{$teacher->id}}">
                                @csrf
                                
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Modal ends-->
                @endforeach


            </div>
            <div class="mt-3">
                <div class="row">
                    <div class="col-sm-6">
                        <a href="{{ route('admin.teachers.create') }}" class="btn btn-success float-sm-left">Add Teacher</a>
                    </div>
                    <div class="col-sm-6">
                        {{ $teachers->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection