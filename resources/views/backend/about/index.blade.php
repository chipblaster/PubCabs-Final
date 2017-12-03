@extends('layouts.backend')

@section('content')
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-title-box">
                            <h4 class="page-title float-left">About</h4>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-12">
                         
                        <div class="card-box">
                            <form action="#" class="form-horizontal">
                                <div class="form-group row">
                                    <label class="col-sm-5 form-control-label">About Description</label>
                                    <div class="col-sm-5">
                                        {{$about->description}}
                                    </div>
                                    <div class="col-sm-2">
                                         <a href="{{route('about.edit',['id' => $about->id])}}"  class="btn waves-effect waves-light btn-warning pull-right"><i class="fa fa-wrench"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 form-control-label">Photo</label>
                                    <div class="col-sm-7">
                                        <img width="100" src="{{asset('assets/upload/'.$about->photo)}}" > 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 form-control-label">Content Image</label>
                                    <div class="col-sm-7">
                                        <img width="100" src="{{asset('assets/upload/'.$about->banner_img)}}" > 
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>  
                <h3>Single About Page</h3>
                  <div class="card-box">
                         <a href="{{route('sub-about.create')}}"  class="btn btn-success btn-rounded waves-effect waves-light pull-right">Create
                        </a>
                        <table class="table">
                            <thead class="thead-default">
                            <tr>
                                <th>About Title</th>
                                <th>About Description</th>
                                <th>Action</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                          @foreach ($about->sub_about->sortByDesc('id') as $sub_about)
                            <tr>
                                <td>{{ $sub_about->title }}</td>
                                <td>{{ $sub_about->description }}</td>
                                
                                <td>
                                     <a  class="btn waves-effect waves-light btn-warning pull-right" href="{{route('sub-about.edit',['id' => $sub_about->id])}}" class="btn btn-info"><i class="fa fa-wrench"></i></a>  
                                </td>
                                <td>
                                    <form id="form-horizontal" action="{{route('sub-about.destroy',['id' => $sub_about->id])}}" method="post" class="form-horizontal">
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
                <!-- end row -->

            </div> <!-- container -->

        </div> <!-- content -->



    </div>
@endsection
