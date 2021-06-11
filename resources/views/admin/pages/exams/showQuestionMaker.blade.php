@extends('admin.template.master')

@section('main_content')
	<div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Make Question</h2>
                    </div>            
                    <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                        <ul class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item">Course</li>
                            <li class="breadcrumb-item">Exam</li>
                            <li class="breadcrumb-item active">Question Make</li>
                        </ul>
                    </div>
                </div>
            </div>

            @include('admin.includes.messages')


            
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            {{-- <h2><strong>Make</strong> Question</h2> --}}
                            <a href="#any" data-toggle="modal" data-target="#exampleModal">View All Questions</a>


                            <!-- all question modal start -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">All Question</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table class="table table-responsive">
                                              <thead class="thead-dark">
                                                <tr>
                                                  <th scope="col">#</th>
                                                  <th scope="col">Question</th>
                                                  <th scope="col">Option 1</th>
                                                  <th scope="col">Option 2</th>
                                                  <th scope="col">Option 3</th>
                                                  <th scope="col">Option 4</th>
                                                  <th scope="col">Answer</th>
                                                  <th scope="col">Mark</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                @if ( $exam->questions->count() > 0 )
                                                @foreach ($exam->questions as $question)
                                                    <tr>
                                                      <th scope="row">{{ $loop->index +1 }}</th>
                                                      <td>{{ $question->question }}</td>
                                                      <td>{{ $question->option1 != NULL ? $question->option1 : '' }}</td>
                                                      <td>{{ $question->option2 != NULL ? $question->option2 : '' }}</td>
                                                      <td>{{ $question->option3 != NULL ? $question->option3 : '' }}</td>
                                                      <td>{{ $question->option4 != NULL ? $question->option4 : '' }}</td>
                                                      <td>{{ $question->default_answer }}</td>
                                                      <td>{{ $question->mark }}</td>
                                                    </tr>
                                                @endforeach
                                                @endif
                                              </tbody>
                                            </table>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            {{-- all question modal end --}}

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
                            <form action="{{ route('admin.exams.questionStore') }}" method="POST">
                                @csrf
                                
                                <input type="hidden" name="exam_id" value="{{ $id }}">


                                <div class="form-group">
                                    <input type="hidden" name="type" value="1">
                                    <label for="">Enter MCQ Question</label>
                                    <input type="text" name="question" class="form-control" required placeholder="Enter Question">
                                    <input type="number" step="0.1" name="mark" class="form-control" required placeholder="marks">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type="text" name="option1" class="form-control" required placeholder="Option 1">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" name="option2" class="form-control" required placeholder="Option 2">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" name="option3" class="form-control" required placeholder="Option 3">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" name="option4" class="form-control" required placeholder="Option 4">
                                        </div>
                                    </div>                                    
                                    <input type="text" name="default_answer" class="form-control"  placeholder="Default Answer">
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Submit" class="btn btn-primary">
                                    <a href="{{ route('admin.courses.show', $exam->course->id ) }}" class="btn btn-danger">Go Back</a>
                                </div>
                            </form>
                            <form action="{{ route('admin.exams.questionStore') }}" method="POST" class="mt-5">
                                @csrf
                                
                                <input type="hidden" name="exam_id" value="{{ $id }}">


                                <div class="form-group">
                                    <input type="hidden" name="type" value="2">
                                    <label for="">Add Short Question</label>
                                    <input type="text" name="question" class="form-control" required placeholder="Enter Question">
                                    <input type="number" step="0.1" name="mark" class="form-control" required placeholder="marks">  
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Submit" class="btn btn-primary">
                                    <a href="{{ route('admin.courses.show', $exam->course->id ) }}" class="btn btn-danger">Go Back</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
@endsection