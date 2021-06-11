@extends('student.template.master')

@section('main_content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>My Borrowed Books</h2>
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
                            @include('student.includes.messages')
                            <div class="table-responsive">

                                <table class="table table-bordered table-hover js-basic-example dataTable">
                                    <thead class="">
                                        <tr>                                       
                                            <th>ID</th>
                                            <th>Image</th>
                                            <th>Book Name</th>
                                            <th>Subject</th>
                                            <th>Details</th>
                                            <th>Amount</th>
                                            <th>Date Taken</th>
                                            <th>Date To Submit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($borrowed_books as $borrowed)   

                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td><span class="list-icon">
                                                    <img class="rounded" src="

                                                        @if ( !is_null($borrowed->library->image) )
                                                            {{ asset('backend/images/libraries/'.$borrowed->library->image) }}
                                                        @else
                                                            {{ asset('backend/images/libraries/default.jpg') }}
                                                        @endif

                                                    " alt="">
                                                </span></td>
                                                <td>{{ $borrowed->library->book_name }}</td>
                                                <td>{{ $borrowed->library->subject }}</td>
                                                <td>{{ $borrowed->library->details }}</td>
                                                <td>{{ $borrowed->amount }}</td>
                                                <td>{{ $borrowed->date_taken }}</td>
                                                <td>{{ $borrowed->date_to_submit }}</td>
                                                
                                            </tr>

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



