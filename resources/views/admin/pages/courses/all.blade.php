@extends('admin.template.master')

@section('main_content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>All Courses</h2>
                    </div>            
                    <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                        <ul class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item active">Courses</li>
                        </ul>
                    </div>
                </div>
            </div>

            @include('admin.includes.messages')

            <div class="row clearfix">
                @foreach ($courses as $course)
                    
                    <div class="col-md-6 col-lg-4">
                        <div class="card">                        
                            <div class="body">
                                @if ($course->image!=NULL || $course->image!="")
                                    <img src="{{ asset('backend/images/courses/'.$course->image ) }}" alt="" class="img-fluid rounded m-b-20" style="max-height: 208px;">
                                @else
                                    <img src="{{ asset('backend/images/courses/course_default.jpg' ) }}" alt="" class="img-fluid rounded m-b-20">
                                @endif
                                <h6 class="mb-4">{{ $course->name }}


                                    <div class="float-right">
                                        <a href="{{ route('admin.courses.edit', $course->id) }}" class="">
                                                            <i class="fa fa-pencil m-r-15"></i>
                                                        </a>
                                                        <a href="#modal"  data-toggle="modal" data-target="#exampleModalCenter{{$course->id}}" class="">
                                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </div>

                                </h6>

                                <ul class="list-unstyled">
                                    <li>
                                        <label class="m-b-5 font-weight-500">Semester:</label>
                                        <span>{{$course->semester->name}}</span>
                                    </li>
                                    <li>
                                        <label class="m-b-5 font-weight-500">Course Code:</label>
                                        <span>CSEC{{$course->code}}</span>
                                    </li>
                                    <li>
                                        <label class="m-b-5 font-weight-500">Duration:</label>
                                        <span>4 Months</span>
                                    </li>
                                    <li>
                                        <label class="m-b-5 font-weight-500">Credit:</label>
                                        <span>{{ $course->credit }}</span>
                                    </li>
                                    <li>
                                        <label class="m-b-5 font-weight-500">Professor:</label>
                                        <span>{{ $course->teacher->name }}</span>
                                    </li>
                                    <li>
                                        <label class="m-b-5 font-weight-500">Batch:</label>
                                        <span>{{ $course->batch->name }}</span>
                                    </li>
                                    <li>
                                        <label class="m-b-5 font-weight-500">Students:</label>
                                        <span>
                                            @if (isset($course->batch->batchStudents) && $course->batch->batchStudents->count() > 0 )
                                                {{ $course->batch->batchStudents->count()}}+
                                            @else
                                                {{"N/A"}}
                                            @endif
                                        </span>
                                    </li>
                                </ul>
                                <a href="{{ route('admin.courses.show', $course->id ) }}" class="btn btn-block  btn-success btn-simple" role="button">Go To Courseroom</a>
                            </div>
                        </div>
                    </div>





                    <!-- Modal starts-->
                    <div class="modal fade" id="exampleModalCenter{{$course->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Admin Delete</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            Are you sure to delete <strong>{{ $course->name }}</strong> from system? 
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button onclick="document.getElementById('del_form{{$course->id}}').submit()" class="btn btn-danger">Yes Delete</button>

                            <form method="POST" action="{{ route('admin.courses.delete', $course->id ) }}" id="del_form{{$course->id}}">
                                @csrf
                                
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Modal ends-->

                @endforeach
            </div>

        </div>
    </div>
@endsection



