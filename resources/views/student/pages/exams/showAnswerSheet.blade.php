@extends('student.template.master')

@section('main_content')
	<div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Answer Question</h2>
                    </div>            
                    <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                        <ul class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item">Course</li>
                            <li class="breadcrumb-item">Exam</li>
                            <li class="breadcrumb-item active">Answer</li>
                        </ul>
                    </div>
                </div>
            </div>

            @include('student.includes.messages')


            
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header text-center">
                            <h3 class="text-center"><strong>Uttara University</strong></h3>
                            <h2 class="text-center"><strong>Department Of Computer Science & Engineering</strong></h2>
                            <h2 class="text-center"><strong>Exam: {{ $exam->name }}</strong></h2>
                            <div class="row">
                              <div class="offset-sm-2 col-sm-2">
                                <p class="mt-3"><strong>Credit:</strong> {{ $exam->course->credit }}</p>
                              </div>
                              <div class="col-sm-2">
                                <p class="mt-3"><strong>Start:</strong> 
                                    @php
                                      $start_time=date_create("0000-00-00 ".$exam->start_time);
                                      echo date_format($start_time, 'g:i A');
                                    @endphp
                                </p>
                              </div>
                              <div class="col-sm-2">
                                <p class="mt-3"><strong>End:</strong> 
                                    @php
                                      $end_time=date_create("0000-00-00 ".$exam->end_time);
                                      echo date_format($end_time, 'g:i A');
                                    @endphp
                                </p>
                              </div>
                              <div class="col-sm-2">
                                <p class="mt-3"><strong>Marks:</strong> {{ $exam->total_marks }}</p>
                              </div>
                            </div>
                        </div>
                        <div class="body">
                            <div class="row text-left">
                              <div class="col-sm-12">
                                <h5>Instructions</h5>
                                <p>{{ $exam->description }}</p>
                              </div>
                            </div>
                            <form action="{{ route('student.exams.answerStore') }}" method="POST" class="mt-5">
                                @csrf

                                @foreach ($exam->questions as $question)
                                @if ($question->type==1) 
                                <div class="form-group">
                                    <input type="hidden" name="exam_id" value="{{ $exam->id }}">
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                    <label class="mb-3">{{$loop->index+1}}. {{ $question->question }}</label>
                                    <div class="float-right badge badge-info">{{$question->mark}}</div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <input type="radio" name="a{{$loop->index+1}}" value="1" required> {{$question->option1}}
                                        </div>
                                        <div class="col-sm-12">
                                            <input type="radio" name="a{{$loop->index+1}}" value="2"> {{$question->option2}}
                                        </div>
                                        <div class="col-sm-12">
                                            <input type="radio" name="a{{$loop->index+1}}" value="3"> {{$question->option3}}
                                        </div>
                                        <div class="col-sm-12">
                                            <input type="radio" name="a{{$loop->index+1}}" value="4"> {{$question->option4}}
                                        </div>
                                    </div>   
                                </div>
                                @else
                                <div class="form-group">
                                    <input type="hidden" name="exam_id" value="{{ $exam->id }}">
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                    <label class="mb-3">{{$loop->index+1}}. {{ $question->question }}</label><div class="float-right badge badge-info">{{$question->mark}}</div>
                                    <textarea name="a{{$loop->index+1}}" rows="5" required class="form-control"></textarea>  
                                </div>
                                @endif
                                @endforeach

                                <div class="form-group">
                                    <input type="submit" value="Submit" class="btn btn-primary">
                                    <a href="{{ route('student.courses.show', $exam->course->id ) }}" class="btn btn-danger">Go Back</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
@endsection