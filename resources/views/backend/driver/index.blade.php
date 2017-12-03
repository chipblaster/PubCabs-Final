@extends('layouts.backend')

@section('content')
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-title-box">
                            <h4 class="page-title float-left">Drivers</h4>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <div class="row">
                    <div class="col-12">
                        
                      <div class="card-box">
                         <a href="{{route('sub-about.create')}}"  class="btn btn-success btn-rounded waves-effect waves-light pull-right">Create
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
                          @foreach ($drivers->sortByDesc('id') as $driver)
                            <tr>
                                <td>{{ $driver->description }}</td>
                                <td><img width="100" src="{{asset('assets/upload/'.$driver->banner_img)}}" > </td>
                                <td><img width="100" src="{{asset('assets/upload/'.$driver->content_img)}}" > </td>
                              
                                <td>
                                     <a  class="btn waves-effect waves-light btn-warning pull-right" href="{{route('driver.edit',['id' => $driver->id])}}" class="btn btn-info"><i class="fa fa-wrench"></i></a>  
                                </td>
                                <td>
                                    <form id="form-horizontal" action="{{route('driver.destroy',['id' => $driver->id])}}" method="post" class="form-horizontal">
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
