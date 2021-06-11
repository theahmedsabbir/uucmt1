@extends('student.template.master')

@section('main_content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>All Results</h2>
                    </div>            
                    <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                        <ul class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item active">Results</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card parents-list">
                        <div class="header">
                            <h2><strong>Results</strong> List</h2>
                        </div>
                        <div class="header">
                            <h2><strong>Name: </strong> {{ Auth::user()->name }}</h2>
                            <h2><strong>ID: </strong> {{ Auth::user()->username }}</h2>
                        </div>
                        <div class="body">
                            @include('student.includes.messages')
                            <div class="table-responsive">

                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead class="">
                                        <tr>                                       
                                            <th>#</th>
                                            <th>Exam</th>
                                            <th>Semester</th>
                                            <th>Marks</th>
                                            <th>Result</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($results as $result)   

                                            <tr>
                                                <td>{{ $loop->index+1 }}</td>
                                                <td>{{ $result->exam->name }}</td>
                                                <td>{{ $result->exam->course->semester->name }}</td>
                                                <td>{{ $result->total_marks }}</td>
                                                <td>{{ $result->result }}</td>
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



