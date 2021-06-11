@extends('student.template.master')

@section('main_content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>All Routines</h2>
                    </div>            
                    <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                        <ul class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item active">Routines</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="row clearfix">
                <div class="col-md-6">
                    <div class="card parents-list">
                        <div class="header">
                            <h2><strong>Routine</strong> List</h2>
                        </div>
                        <div class="body">
                            @include('student.includes.messages')
                            <div class="table-responsive">
                                <table class="table table-hover m-b-0">
                                    <thead class="thead-dark">
                                        <tr>                                       
                                            <th>#</th>
                                            <th>Day</th>
                                            <th>Routine</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($routines as $routine)   

                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td>{{ $routine->day }} </td>
                                                <td>
                                                    <a href="#modal"  data-toggle="modal" data-target="#img{{$routine->id}}" class="badge badge-success">
                                                        <i class="icon-eye mr-1"></i> View
                                                    </a>
                                                </td>                                                
                                            </tr>



                                            <!-- image Modal starts-->
                                            <div class="modal fade" id="img{{$routine->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                              <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Routine</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                                                  </div>
                                                  <div class="modal-body">

                                                    <img class="img-fluid" src="

                                                        @if ( !is_null($routine->image) )
                                                            {{ asset('backend/images/routines/'.$routine->image) }}
                                                        @endif

                                                    " alt="">

                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <!-- image Modal ends-->
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



