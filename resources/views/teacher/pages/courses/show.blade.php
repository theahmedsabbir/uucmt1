@extends('teacher.template.master')

@section('main_content')
	<div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Courseroom</h2>
                    </div>            
                    <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                        <ul class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="{{ route('teacher.dashboard') }}"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item">Course</li>
                            <li class="breadcrumb-item active">Courseroom</li>
                        </ul>
                    </div>
                </div>
            </div>



            <div class="row clearfix">
                <div class="col-md-12 col-lg-4">
                    <div class="card">                        
                        <div class="body">
                            @if ($course->image!=NULL || $course->image!="")
                                <img src="{{ asset('backend/images/courses/'.$course->image ) }}" alt="" class="img-fluid rounded m-b-20" style="max-height: 208px;">
                            @else
                                <img src="{{ asset('backend/images/courses/course_default.jpg' ) }}" alt="" class="img-fluid rounded m-b-20">
                            @endif
                            <h6 class="mb-4">{{$course->name}}</h6>
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
                            <a href="{{$course->link}}" target="_blank" class="btn btn-block  btn-primary" role="button">Go Live</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-8">
                	@include('teacher.includes.messages')
                    <div class="card">
                        <div class="body">
                            <ul class="nav nav-tabs-new2">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Details">Course Room</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Structure">Course Details</a></li>
                                <li class="nav-item"><a class="nav-link " data-toggle="tab" href="#Gallery">Course Exams 
                                	@if ( $examCount>0 )
                                		<span class="badge badge-warning">{{ $examCount }}</span>
                                	@endif
                                </a></li>
                            </ul>
                            <div class="tab-content padding-0 mt-3">
                                <div class="tab-pane active" id="Details">

                                	<!-- course announcement -->
                                	
                            		<div class="row clearfix">
                            			<div class="col-sm-12">
                            				<form action="{{ route('teacher.coursePosts.store') }}" method="POST" enctype="multipart/form-data">
                            					@csrf
                            					
                            					<input type="hidden" name="course_id" value="{{ $course->id }}">
                            					<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                            					<div class="form-group">	                            						
	                            					<label for="">Announce Something To The Class</label>
	                            					<textarea name="post" id="" rows="5" class="form-control" placeholder="Say something here..."></textarea>
	                            				</div>
	                            				<div class="form-group">
	                            					<label for="files">Attachments:</label>
	                            					<input type="file" name="files[]" multiple class="pl-3">
	                            					<input type="submit" value="Post" class="btn btn-primary float-right">
	                            				</div>
	                            				<div class="form-group">
	                            					
	                            				</div>
	                            				
                            				</form>
                            			</div>
                            		</div>
                                	
                                	<!-- course announcement -->

                                	<!-- course posts start -->
									<div class="row clearfix">
						                <div class="col-lg-12">
						                    <div class="card">
						                        <div class="body">

						                        	{{-- single post start --}}
						                        	@foreach ($coursePosts as $post)
						                            <div class="timeline-item 

						                            	@if (isset($post->author) && $post->author->user_role == 2)
						                            		blue
						                            	@elseif (isset($post->author) && $post->author->user_role == 1)
						                            		green
						                            	@else
						                            		warning
						                            	@endif

						                            ">
						                                <span class="date">{{ $post->created_at->format('F j, Y, g:i a') }}</span>



						                                <div class="row clearfix">
						                                	<div class="col-sm-1">

													            <img src="
													            @if ( isset($post->author->image) && $post->author->image != NULL )

													            	@if ($post->author->user_role==1)
													            		{{ asset('backend/images/Admins/'.$post->author->image ) }}

													            	@elseif ($post->author->user_role==2)
													            		{{ asset('backend/images/Teachers/'.$post->author->image ) }}
													            	@elseif ($post->author->user_role==4)
													            		{{ asset('backend/images/Students/'.$post->author->image ) }}
													            	@endif

													                
													            @else
													                @if ($post->author->gender == 1)
													                    {{ asset('backend/images/default_male.png') }}
													                @else
													                    {{ asset('backend/images/default_female.png') }}
													                @endif
													            @endif" class="rounded-circle" alt="User Profile Picture" width="50">
						                                		
						                                	</div>
						                                	<div class="col-sm-10">
						                                		<h6 class="mb-0"><a href="javascript:void(0);">{{ isset($post->author) ? $post->author->name : 'An Author'}}</a>
						                                		</h6>
						                                		<p>
						                                			@if (isset($post->author))

														            	@if ($post->author->user_role==1)
														            		{{ 'admin' }}

														            	@elseif ($post->author->user_role==2)
														            		{{ 'teacher' }}
														            	@elseif ($post->author->user_role==4)
														            		{{ 'student' }}
														            	@endif
						                                			@endif
						                                		</p>
						                                		
						                                	</div>
						                                	<div class="col-sm-1">	 
                       											{{-- delete post start --}}
						                                    	<a href="javascript:void(0);" class="dropdown-toggle float-right" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
						                                        <ul class="dropdown-menu dropdown-menu-right p-3 float-right">
						                                            <li>
						                                            	<a href="#anything" onclick=" 
						                                            		document.getElementById('form_{{$post->id}}').submit();
						                                            	">Delete</a>

						                                            	<form id="form_{{$post->id}}" action="{{ route('teacher.coursePosts.delete', $post->id ) }}" method="POST" class="d-none">
						                                            		@csrf
						                                            		
						                                            	</form>

						                                            </li>
						                                        </ul>
								                                {{-- delete post end --}}
						                                	</div>
						                                </div>




						                                <div class="msg">
						                                	{{-- post --}}
						                                    <p>{{ $post->post }}</p>

						                                    {{-- attachments --}}
						                                    @if ( $post->files->count() > 0 )
							                                    	
							                                    <div class="row clearfix">

							                                    	@foreach ($post->files as $file)
							                                    		
							                                    	<div class="col-sm-2 pb-3">
							                                    		<a href="{{ asset( 'backend/uploads/'. $file->file ) }}" class="btn btn-default" target="_blank">
							                                    			File {{$loop->index+1 }}
							                                    		</a>
							                                    	</div>

							                                    	@endforeach

							                                    </div>
						                                    @endif

						                                    {{-- add a comment --}}
						                                    <a role="button" data-toggle="collapse" href="#collapseExample_{{$post->id}}" aria-expanded="true" aria-controls="collapseExample_{{$post->id}}"><i class="icon-bubbles"></i> Comment</a>

						                                    {{-- comment view --}}
						                                    @if ( $post->comments->count() > 0 )
						                                    	<a href="javascript:void(0)" class="ml-3 text-primary"  data-toggle="modal" data-target="#post_{{$post->id}}">View all comments({{ $post->comments->count() }})</a>
						                                    @endif

						                                    {{-- comment box to add a comment --}}
						                                    <div class="collapse m-t-10" id="collapseExample_{{$post->id}}">
						                                        <div class="well">
						                                            <form id="form_{{$post->id}}" action="{{ route('teacher.coursePosts.commentStore') }}" method="POST">
						                                            	@csrf
						                                            	
						                                                <div class="form-group">
						                                                	<input type="hidden" name="course_post_id" value="{{ $post->id }}">
						                                                	<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
						                                                    <textarea name="comment" rows="2" class="form-control no-resize" placeholder="Enter here for comment..." required></textarea>
						                                                </div>
						                                                <button class="btn btn-primary">Submit</button>
						                                            </form>
						                                        </div>
						                                    </div>

						                                </div>                                
						                            </div>

        {{-- comment modal starts--}}

		<!-- Modal -->
		<div class="modal fade" id="post_{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		  <div class="modal-dialog modal-lg" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLongTitle">Course Comments</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">

		        {{-- post comments here start --}}
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card mb-0 shadow-none">
                            <div class="body">

                                {{-- single comment start --}}
                                @foreach ($post->comments->sortByDesc('created_at') as $comment)
	                                <div class="timeline-item pb-0 

	                                    @if (isset($comment->commentor) && $comment->commentor->user_role == 2)
	                                        blue
	                                    @elseif (isset($comment->commentor) && $comment->commentor->user_role == 1)
	                                        green
	                                    @else
	                                        warning
	                                    @endif

	                                ">
	                                    <span class="date">{{ $comment->created_at->diffForHumans() }}</span>

	                                    <div class="row clearfix">
	                                        <div class="col-sm-1">

	                                            <img src="
	                                            @if ( isset($comment->commentor->image) && $comment->commentor->image != NULL )

	                                                @if ($comment->commentor->user_role==1)
	                                                    {{ asset('backend/images/Admins/'.$comment->commentor->image ) }}

	                                                @elseif ($comment->commentor->user_role==2)
	                                                    {{ asset('backend/images/Teachers/'.$comment->commentor->image ) }}
	                                                @elseif ($comment->commentor->user_role==4)
	                                                    {{ asset('backend/images/Students/'.$comment->commentor->image ) }}
	                                                @endif

	                                                
	                                            @else
	                                                @if ( $comment->commentor->gender == 1 )
	                                                    {{ asset('backend/images/default_male.png') }}
	                                                @else
	                                                    {{ asset('backend/images/default_female.png') }}
	                                                @endif
	                                            @endif" class="rounded-circle" alt="User Profile Picture" width="50">
	                                            
	                                        </div>
	                                        <div class="col-sm-10">
	                                            <h6 class="mb-0"><a href="javascript:void(0);">
	                                            	{{ isset($comment->commentor) ? $comment->commentor->name : 'An User'}}
	                                            </a>
	                                        	</h6>
	                                            <p>
	                                                @if ( isset($comment->commentor) )

	                                                    @if ($comment->commentor->user_role==1)
	                                                        {{ 'admin' }}
	                                                    @elseif ($comment->commentor->user_role==2)
	                                                        {{ 'teacher' }}
	                                                    @elseif ($comment->commentor->user_role==4)
	                                                        {{ 'student' }}
	                                                    @endif

	                                                @endif
	                                            </p>
	                                            
	                                        </div>
	                                        <div class="col-sm-1">	
	                                        	<form action="{{ route('teacher.coursePosts.commentDelete', $comment->id ) }}" method="POST">
	                                        		@csrf
	                                        		<button type="submit" onclick="return confirm('Are you sure?')" class="badge badge-danger" style="cursor:pointer">
	                                        			<i class="fa fa-trash-o"></i>
	                                        		</button>
	                                        	</form>
	                                        </div>
	                                    </div>



	                                    <div class="msg">
	                                        {{-- post --}}
	                                        <p>{{ $comment->comment }}</p>

	                                    </div>                                
	                                </div>
                                @endforeach
                                {{-- single post end --}}

                            </div>
                        </div>
                    </div>
                </div>
		        {{-- post comments here end --}}

		      </div>
		      <div class="modal-footer d-block">
                <form action="{{ route('teacher.coursePosts.commentStore') }}" method="POST">
			      	<div class="row clearfix">
			      		<div class="col-sm-11 pr-0">
			                	@csrf
			                	
			                    <div class="form-group">
			                    	<input type="hidden" name="course_post_id" value="{{ $post->id }}">
			                    	<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
			                        <textarea name="comment" rows="1" class="form-control no-resize" placeholder="Enter here for comment..." style="width:100%;" required></textarea>
			                    </div>
			                    

						        {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
						        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
			      		</div>
			      		<div class="col-sm-1 pl-0">
			      			<button type="submit" class="btn btn-primary float-right" style="border:none;"><i class="fa fa-send-o"></i></button>
			      		</div>
			      	</div>
                </form>		      			
		      </div>
		    </div>
		  </div>
		</div>

        {{-- comment modal ends--}}
						                        	@endforeach
						                            {{-- single post end --}}

						                        </div>
						                    </div>
						                </div>
						            </div>
						            <!-- course posts end -->
                                </div>
                                <div class="tab-pane" id="Structure">
                                    <h6>Course Details</h6>
                                    <p>{{ $course->description }}</p>
                                </div>
                                <div class="tab-pane " id="Gallery">                                    
                                    <div class="row">
                                        <div class="col-sm-12">


				                            <div class="table-responsive">
				                                <table class="table table-hover m-b-0">
				                                    <thead class="thead-dark">
				                                        <tr> 
				                                            <th>Date</th>
				                                            <th>Exam</th>
				                                            <th>Time</th>
				                                            <th>Marks</th>
				                                            <th>Action</th>
				                                        </tr>
				                                    </thead>
				                                    <tbody>
				                                        @foreach ($exams as $exam)   

				                                            <tr>
				                                                <td>
				                                                	@php
				                                                		$date = new DateTime(''.$exam->date );
																		echo $date->format('d-m-Y');
				                                                	@endphp	
				                                                </td>
				                                                <td><span class="list-name">
				                                                	{{ $exam->name }} 
				                                                	@if ($exam->is_open == 1)
				                                                		<i class="icon-eye text-success"></i>
				                                                	@endif
				                                                	</span>
				                                                </td>
				                                                <td>
				                                                	@php
				                                                		$time=date_create("0000-00-00 ".$exam->start_time);
				                                                		echo date_format($time, 'g:i A');
				                                                	@endphp
				                                                </td>
				                                                <td>{{ $exam->total_marks }}</td>
				                                                <td>
				                                                    <a href="{{ route('teacher.exams.showQuestionMaker', $exam->id) }}" class="badge badge-warning">
				                                                        <i class="icon-question"></i>
				                                                    </a>
				                                                    <a href="#mark" class="badge badge-primary"   data-toggle="modal" data-target="#mark{{$exam->id}}">
				                                                        <i class="icon-list"></i>
				                                                    </a>
				                                                    {{-- {{ route('teacher.exams.edit', $exam->id) }} --}}
				                                                    <a href="#editOn" class="badge badge-primary"  data-toggle="modal" data-target="#edit{{$exam->id}}">
				                                                        <i class="icon-note"></i>
				                                                    </a>
				                                                    <a href="#modal"  data-toggle="modal" data-target="#exampleModalCenter{{$exam->id}}" class="badge badge-danger">
				                                                        <i class="icon-trash"></i>
				                                                    </a>
				                                                </td>
				                                                
				                                            </tr>



				                                            <!-- exam edit modal starts-->
				                                            <div class="modal fade" id="edit{{$exam->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				                                              <div class="modal-dialog modal-dialog-centered" role="document">
				                                                <div class="modal-content">
				                                                  <div class="modal-header">
				                                                    <h5 class="modal-title" id="exampleModalLongTitle">Exam Edit</h5>
				                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				                                                      <span aria-hidden="true">&times;</span>
				                                                    </button>
				                                                  </div>
				                                                  <div class="modal-body">	                

				                                                    <form method="POST" action="{{ route('teacher.exams.update', $exam->id ) }}" id="edit{{$exam->id}}">
				                                                        @csrf

				                                                        <div class="form-group">	
					                                                        <label for="">Exam Visibility</label>
					                                                        <input type="checkbox" name="is_open" class="ml-3" 
					                                                        {{ $exam->is_open==1? 'checked' : ''}}>
				                                                        </div>

				                                                  </div>
				                                                  <div class="modal-footer">
				                                                    <button type="submit" class="btn btn-primary">Go</button>
				                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				                                                  </div>
				                                              		</form>
				                                                </div>
				                                              </div>
				                                            </div>
				                                            <!-- exam edit Modal ends-->



				                                            <!-- exam delete modal starts-->
				                                            <div class="modal fade" id="exampleModalCenter{{$exam->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				                                              <div class="modal-dialog modal-dialog-centered" role="document">
				                                                <div class="modal-content">
				                                                  <div class="modal-header">
				                                                    <h5 class="modal-title" id="exampleModalLongTitle">Exam Delete</h5>
				                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				                                                      <span aria-hidden="true">&times;</span>
				                                                    </button>
				                                                  </div>
				                                                  <div class="modal-body">
				                                                    Are you sure to delete <strong>{{ $exam->name }}</strong> from system? 
				                                                  </div>
				                                                  <div class="modal-footer">
				                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				                                                    <button onclick="document.getElementById('del_form{{$exam->id}}').submit()" class="btn btn-danger">Yes Delete</button>

				                                                    <form method="POST" action="{{ route('teacher.exams.delete', $exam->id ) }}" id="del_form{{$exam->id}}">
				                                                        @csrf
				                                                        
				                                                    </form>
				                                                  </div>
				                                                </div>
				                                              </div>
				                                            </div>
				                                            <!-- exam delete Modal ends-->



				                                            <!-- result makr modal starts-->
				                                            <div class="modal fade" id="mark{{$exam->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				                                              <div class="modal-dialog modal-dialog-centered" role="document">
				                                                <div class="modal-content">
				                                                  <div class="modal-header">
				                                                    <h5 class="modal-title" id="exampleModalLongTitle">Select Student</h5>
				                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				                                                      <span aria-hidden="true">&times;</span>
				                                                    </button>
				                                                  </div>
				                                                  <div class="modal-body">
				                                                  	@if ($exam->results->count())
				                                                  		
					                                                    <form action="{{ route('teacher.exams.answerMark') }}" method="POST" id="mark_{{$exam->id}}">
					                                                    	@csrf
					                                                    	
					                                                    	<input type="hidden" name="exam_id" value="{{$exam->id}}">
					                                                    	<label for="">Student ID:</label>
					                                                    	<select name="user_id" id="">
					                                                    		@foreach ($exam->results as $result)
					                                                    		<option value="{{$result->user_id}}">
					                                                    			{{$result->student->username}}
					                                                    		</option>
					                                                    		@endforeach
					                                                    	</select>
					                                                    </form>
				                                                  	@endif
				                                                  </div>
				                                                  <div class="modal-footer">
				                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				                                                    <button onclick="document.getElementById('mark_{{$exam->id}}').submit()" class="btn btn-primary">GO</button>
				                                                  </div>
				                                                </div>
				                                              </div>
				                                            </div>
				                                            <!-- result makr Modal ends-->
				                                        @endforeach
				                                    </tbody>
				                                </table>
				                            </div>
                                            
                                            <a href="#add_exam" class="btn btn-primary m-3" data-toggle="modal" data-target="#exam{{$course->id}}">Add Exam</a>

                                            {{-- add exam modal starts --}}
											<div class="modal fade" id="exam{{$course->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											  <div class="modal-dialog" role="document">
											    <div class="modal-content">
											      <div class="modal-header">
											        <h5 class="modal-title" id="exampleModalLabel">Exam Information</h5>
											        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
											          <span aria-hidden="true">&times;</span>
											        </button>
											      </div>
											      <div class="modal-body">
											        
						                        	<form action="{{ route('teacher.exams.store') }}" method="POST">
						                        		@csrf
						                        		
							                            <div class="row">
							                                <div class="col-sm-12">
							                                    <div class="form-group">
							                                    	<label for="">Exam Name</label>
							                                    	<input type="hidden" name="course_id" value="{{$course->id }}">
							                                        <input type="text" name="name" value="" placeholder="Exam Name" class="form-control" required>
							                                    </div>
							                                </div>
						                                    <div class="col-sm-12">
						                                        <div class="form-group">
						                                        	<label for="">Date</label>
						                                            <input type="date" name="date" value="" placeholder="Exam Date" class="form-control" required>
						                                        </div>
						                                    </div>
						                                    <div class="col-sm-12">
						                                        <div class="form-group">
						                                        	<label for="">Start Time</label>
						                                            <input type="time" name="start_time" value="" placeholder="Start Time" class="form-control" required>
						                                        </div>
						                                    </div>
						                                    <div class="col-sm-12">
						                                        <div class="form-group">
						                                        	<label for="">End Time</label>
						                                            <input type="time" name="end_time" value="" placeholder="End Time" class="form-control" required>
						                                        </div>
						                                    </div>
						                                    <div class="col-sm-12">
						                                        <div class="form-group">
						                                        	<label for="">Total Marks</label>
						                                            <input type="number" name="total_marks" value=""  class="form-control" required>
						                                        </div>
						                                    </div>
						                                    <div class="col-sm-12">
						                                        <div class="form-group">
						                                        	<label for="">Instructions</label>
						                                            <textarea name="description" placeholder="Write instructions here..." cols="30" rows="3" class="form-control"></textarea>
						                                        </div>
						                                    </div>
							                                <div class="col-sm-12">
						                                        <label for="">Is Open?</label>
							                                    <div class="form-group">
							                                    	<select name="is_open" class="form-control" required>
							                                    		<option value="0">No</option>
							                                    		<option value="1">Yes</option>
							                                    	</select>
							                                    </div>
							                                </div>
							                            </div>
											      </div>
											      <div class="modal-footer">
											        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											        <button type="submit" class="btn btn-primary btn-lg btn-simple">Add Exam</button>
											      </div>
											      </form>
											    </div>
											  </div>
											</div>

                                            {{-- add exam modal ends --}}
                                        </div>
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