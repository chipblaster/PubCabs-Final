@extends('layouts.backend')

@section('content')
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-title-box">
                            <h4 class="page-title float-left">Riders</h4>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <div class="row">
                    <div class="col-12">
                      <div class="card-box">
                         <a href="{{route('rider.create')}}"  class="btn btn-success btn-rounded waves-effect waves-light pull-right">Create
                        </a>
                        <table class="table">
                            <thead class="thead-default">
                            <tr>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Content Image</th>
                                <th>Action</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                          @foreach ($riders->sortByDesc('id') as $rider)
                            <tr>
                                <td>{{ $rider->description }}</td>
                                <td><img width="100" src="{{asset('assets/upload/'.$rider->banner_img)}}" > </td>
                                <td><img width="100" src="{{asset('assets/upload/'.$rider->content_img)}}" > </td>
                              
                                <td>
                                     <a  class="btn waves-effect waves-light btn-warning pull-right" href="{{route('rider.edit',['id' => $rider->id])}}" class="btn btn-info"><i class="fa fa-wrench"></i></a>  
                                </td>
                                <td>
                                    <form id="form-horizontal" action="{{route('rider.destroy',['id' => $rider->id])}}" method="post" class="form-horizontal">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                         <button class="btn waves-effect waves-light btn-danger "><i class="fa fa-remove"></i></button>  
                                    </form>
                                </td>
                                
                                  
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                <!-- end row -->


            </div> <!-- container -->

        </div> <!-- content -->
    </div>
@endsection
