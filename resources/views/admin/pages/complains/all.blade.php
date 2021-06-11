@extends('admin.template.master')

@section('main_content')
	<div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>All Complain</h2>
                    </div>            
                    <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                        <ul class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item active">Complain</li>
                        </ul>
                    </div>
                </div>
            </div>

            @include('admin.includes.messages')

            <div class="row clearfix">
                @foreach ($complains as $complain)
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>ID:</strong> #C00{{ $complain->id }}</h2>
                                <div class="float-right">
                                    <a href="#modal"  data-toggle="modal" data-target="#exampleModalCenter{{$complain->id}}" class="">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>
                            <small>Complained by <strong>{{ $complain->name }}</strong> {{ $complain->created_at->diffForHumans()}}</small>
                        </div>
                        <div class="body">
                            <h6>{{ $complain->subject }}</h6>
                            <p class="m-b-0">{{ $complain->complain }}
                            </p>
                        </div>
                    </div>
                </div>



                <!-- Modal starts-->
                <div class="modal fade" id="exampleModalCenter{{$complain->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Complain Delete</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        Are you sure to delete <strong>{{ $complain->name }}</strong> from system? 
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button onclick="document.getElementById('del_form{{$complain->id}}').submit()" class="btn btn-danger">Yes Delete</button>

                        <form method="POST" action="{{ route('admin.complains.delete', $complain->id ) }}" id="del_form{{$complain->id}}">
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