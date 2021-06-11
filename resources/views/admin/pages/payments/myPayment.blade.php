@extends('admin.template.master')

@section('main_content')
	<div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>All Payments</h2>
                    </div>            
                    <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                        <ul class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item active">Payments</li>
                        </ul>
                    </div>
                </div>
            </div>

            @include('admin.includes.messages')


            
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Payment</strong> List</h2>
                        </div>
                        <div class="header">
                            <h2><strong>ID: </strong> {{ Auth::user()->username }}</h2>
                            <h2><strong>Name: </strong> {{ Auth::user()->name }}</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Semester</th>
                                            <th>Semester Fee</th>
                                            <th>Per Credit</th>
                                            <th>Total Credit</th>
                                            <th>Payable</th>
                                            <th>Paid</th>
                                            <th>Due</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($payments as $payment)                                            
                                            <tr>
                                                <td>{{ $payment->semester->name }}</td>
                                                <td>{{ $payment->semester_fee }}</td>
                                                <td>{{ $payment->per_credit_fee }}</td>
                                                <td>{{ $payment->total_credit }}</td>
                                                <td>{{ $payment->payable }}</td>
                                                <td>{{ $payment->paid }}</td>
                                                <td>{{ $payment->due }}</td>
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