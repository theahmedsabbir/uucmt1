@extends('stuff.template.master')

@section('main_content')
	<div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>All Blood Donations</h2>
                    </div>            
                    <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                        <ul class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item active">Blood Donations</li>
                        </ul>
                    </div>
                </div>
            </div>

            @include('stuff.includes.messages')


            
            <div class="row clearfix">

                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Blood Donation List <small>List of all the donation records here</small> </h2>                            
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover js-basic-example dataTable table-custom">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Image</th>
                                            <th>Donor</th>
                                            <th>Donation Date</th>
                                            <th>Re-Donation Date</th>
                                            <th>Blood Group</th>
                                            <th>Frequency</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($bloodDonations as $bloodDonation)                                            
                                            <tr>
                                                <td><span class="list-icon">
                                                    <img class="rounded" style="width: 40px !important" src="
                                                        @if ( !is_null($bloodDonation->user->image) )
                                                            @if ($bloodDonation->user->user_role==1)
                                                                {{ asset('backend/images/Admins/'.$bloodDonation->user->image) }}
                                                            @elseif($bloodDonation->user->user_role==2)
                                                                {{ asset('backend/images/Teachers/'.$bloodDonation->user->image) }}
                                                            @elseif($bloodDonation->user->user_role==3)
                                                                {{ asset('backend/images/Stuffs/'.$bloodDonation->user->image) }}
                                                            @else
                                                                {{ asset('backend/images/Students/'.$bloodDonation->user->image) }}
                                                            @endif
                                                        @else
                                                            @if ( $bloodDonation->user->gender == 1)
                                                                {{ asset('backend/images/default_male.png') }}
                                                            @else
                                                                {{ asset('backend/images/default_female.png') }}
                                                            @endif
                                                        @endif

                                                    " alt="">
                                                </span></td>
                                                <td>{{ $bloodDonation->user->name }}</td>
                                                <td>{{ $bloodDonation->donation_date }}</td>
                                                <td>{{ $bloodDonation->redonation_date }}</td>
                                                <td>{{ $bloodDonation->blood_group }}</td>
                                                <td>{{ $bloodDonation->frequency }}</td>
                                                <td>{{ $bloodDonation->user->phone }}</td>
                                                <td>{{ $bloodDonation->user->email }}</td>
                                                <td>
                                                    <a href="{{ route('stuff.bloodDonations.edit', $bloodDonation->id) }}" class="">
                                                        <i class="fa fa-pencil m-r-15"></i>
                                                    </a>
                                                    <a href="#modal"  data-toggle="modal" data-target="#exampleModalCenter{{$bloodDonation->id}}" class="">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr> 



                                            <!-- Modal starts-->
                                            <div class="modal fade" id="exampleModalCenter{{$bloodDonation->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                              <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Record Delete</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                                                  </div>
                                                  <div class="modal-body">
                                                    Are you sure to delete <strong>{{ $bloodDonation->name }}</strong> from system? 
                                                  </div>
                                                  <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button onclick="document.getElementById('del_form{{$bloodDonation->id}}').submit()" class="btn btn-danger">Yes Delete</button>

                                                    <form method="POST" action="{{ route('stuff.bloodDonations.delete', $bloodDonation->id ) }}" id="del_form{{$bloodDonation->id}}">
                                                        @csrf
                                                        
                                                    </form>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <!-- Modal ends-->
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