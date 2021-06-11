@extends('stuff.template.master')

@section('main_content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>All Books</h2>
                    </div>            
                    <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                        <ul class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item active">Libraries</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card parents-list">
                        <div class="header">
                            <h2><strong>Book</strong> List</h2>
                        </div>
                        <div class="body">
                            @include('stuff.includes.messages')
                            <div class="table-responsive">

                                <table class="table table-bordered table-hover js-basic-example dataTable">
                                    <thead class="">
                                        <tr>                                       
                                            <th>ID</th>
                                            <th>Image</th>
                                            <th>Book Name</th>
                                            <th>Subject</th>
                                            <th>Details</th>
                                            <th>Stock</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($libraries as $library)   

                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td><span class="list-icon">
                                                    <img class="rounded" src="

                                                        @if ( !is_null($library->image) )
                                                            {{ asset('backend/images/libraries/'.$library->image) }}
                                                        @else
                                                            {{ asset('backend/images/libraries/default.jpg') }}
                                                        @endif

                                                    " alt="">
                                                </span></td>
                                                <td>{{ $library->book_name }}</td>
                                                <td>{{ $library->subject }}</td>
                                                <td>{{ $library->details }}</td>
                                                <td>{{ $library->stock }}</td>
                                                <td>
                                                    <a href="{{ route('stuff.libraries.edit', $library->id) }}" class="badge badge-primary">
                                                        <i class="icon-note"></i>
                                                    </a>
                                                    <a href="#modal"  data-toggle="modal" data-target="#exampleModalCenter{{$library->id}}" class="badge badge-danger">
                                                        <i class="icon-trash"></i>
                                                    </a>
                                                </td>
                                                
                                            </tr>



                                            <!--Delete Modal starts-->
                                            <div class="modal fade" id="exampleModalCenter{{$library->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                              <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Admin Delete</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                                                  </div>
                                                  <div class="modal-body">
                                                    Are you sure to delete <strong>{{ $library->book_name }}</strong> from system? 
                                                  </div>
                                                  <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button onclick="document.getElementById('del_form{{$library->id}}').submit()" class="btn btn-danger">Yes Delete</button>

                                                    <form method="POST" action="{{ route('stuff.libraries.delete', $library->id ) }}" id="del_form{{$library->id}}">
                                                        @csrf
                                                        
                                                    </form>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <!--Delete Modal ends-->
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>




                    <a href="#modal"  data-toggle="modal" data-target="#borrow" class="btn btn-primary">
                        <i class="icon-share-alt"></i>  Borrow A Book
                    </a>



                    <!--Borrow Modal starts-->
                    <div class="modal fade" id="borrow" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Borrow Books</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">

                            <form method="POST" action="{{ route('stuff.libraries.borrow', $library->id ) }}" id="borrow{{$library->id}}">
                                @csrf
                        
                                <div class="form-group">
                                    <label for="">Student</label>
                                    <select name="user_id" class="form-control" required>
                                        @foreach ($students as $student)
                                            <option value="{{$student->id}}">{{$student->username}}</option>
                                        @endforeach
                                    </select>
                                </div>
                        
                                <div class="form-group">
                                    <label for="">Book</label>
                                    <select name="library_id" class="form-control" required>
                                        @foreach ($libraries as $library)
                                            <option value="{{$library->id}}">{{$library->book_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                        
                                <div class="form-group">
                                    <label for="">Amount</label>
                                    <input type="number" name="amount" class="form-control" required>
                                </div>
                        
                                <div class="form-group">
                                    <label for="">Date to Borrow</label>
                                    <input type="date" name="date_taken" class="form-control" required>
                                </div>
                        
                                <div class="form-group">
                                    <label for="">Date to Submit</label>
                                    <input type="date" name="date_to_submit" class="form-control" required>
                                </div>
                            </form>

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button onclick="document.getElementById('borrow{{$library->id}}').submit()" class="btn btn-danger">Submit</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--Borrow Modal ends-->


                    

                    <a href="#modal"  data-toggle="modal" data-target="#borrow_list" class="btn btn-success">
                        <i class="icon-list"></i>  Borrowed List
                    </a>



                    <!--Borrowed List Modal starts-->
                    <div class="modal fade" id="borrow_list" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Borrowed Books</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <table class="table">
                              <thead class="thead-light">
                                <tr>
                                  <th scope="col">Book Name</th>
                                  <th scope="col">Given To</th>
                                  <th scope="col">Copy</th>
                                  <th scope="col">Date Borrowed</th>
                                  <th scope="col">Date To Submit</th>
                                  <th scope="col">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($borrowed_books as $book)
                                    <tr>
                                      <th scope="row">{{ $book->library->book_name }}</th>
                                      <td>{{ $book->student->username }}</td>
                                      <td>{{ $book->amount }}</td>
                                      <td>{{ $book->date_taken }}</td>
                                      <td>{{ $book->date_to_submit }}</td>
                                      <td>
                                        <form action="{{ route('stuff.libraries.borrowDelete') }}" method="POST" style="cursor:pointer">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$book->id}}"> 
                                            <button type="submit" class="badge badge-danger" style="cursor:pointer">Delete</button>
                                        </form>
                                      </td>
                                    </tr>
                                @endforeach
                              </tbody>
                            </table>

                          </div>
                        </div>
                      </div>
                    </div>
                    <!--Borrowed List Modal ends-->
                </div>
            </div>

        </div>
    </div>
@endsection



