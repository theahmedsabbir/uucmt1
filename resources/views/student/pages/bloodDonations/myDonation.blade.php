@extends('student.template.master')

@section('main_content')
	<div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>My Blood Donations</h2>
                    </div>            
                    <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                        <ul class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item active">Blood Donations</li>
                        </ul>
                    </div>
                </div>
            </div>

            @include('student.includes.messages')

            <div class="row clearfix">                
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="card w_profile">
                        <div class="body">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="profile-image float-md-right"> 
                                        <img src="

                                            @if ( Auth::user()->image != NULL )
                                                {{ asset('backend/images/Students/'.Auth::user()->image ) }}
                                            @else
                                                @if (Auth::user()->gender == 1)
                                                    {{ asset('backend/images/default_male.png') }}
                                                @else
                                                    {{ asset('backend/images/default_female.png') }}
                                                @endif
                                            @endif

                                        " alt=""> 
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8 col-12">
                                    <h4 class="m-t-0 m-b-0"><strong>{{ $bloodDonation->user->name }}</strong></h4>
                                    <span class="job_post">Student</span>
                                    <p>{{ str_limit($bloodDonation->user->address, 30, '...') }}</p>
                                    <div class="row">
                                        <div class="col-12">
                                            <strong>Email: </strong> {{ $bloodDonation->user->email }}
                                        </div>
                                        <div class="col-12">
                                            
                                            <strong>Phone: </strong> {{ $bloodDonation->user->phone }}
                                        </div>
                                    </div>
                                    <div class="m-t-40">
                                        <button class="btn btn-success">Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="card">
                        <div class="header">
                            <h2>Blood Donation Record <small>List of all the donation records here</small> </h2>                            
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tbody>
                                        @if ($bloodDonation)      
                                            <tr>
                                               <td> <strong>Last Donation Date : </strong></td>
                                               <td> {{ $bloodDonation->donation_date }}</td>
                                            </tr>                  
                                            <tr>
                                               <td> <strong>Re-Donation Date : </strong></td>
                                               <td> {{ $bloodDonation->redonation_date }}</td>
                                            </tr>                   
                                            <tr>
                                               <td> <strong>Blood Group : </strong></td>
                                               <td> {{ $bloodDonation->blood_group }}</td>
                                            </tr>                   
                                            <tr>
                                               <td> <strong>Frequency : </strong></td>
                                               <td> {{ $bloodDonation->frequency }}</td>
                                            </tr>                  
                                            <tr>
                                               <td> <strong>Phone : </strong></td>
                                               <td> {{ $bloodDonation->user->phone }}</td>
                                            </tr>               
                                            <tr>
                                               <td> <strong>Email : </strong></td>
                                               <td> {{ $bloodDonation->user->email }}</td>
                                            </tr>      
                                        @endif                                          
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