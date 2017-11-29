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
                                    <div class="col-sm-7">
                                        {{$about->description}}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 form-control-label">Photo</label>
                                    <div class="col-sm-7">
                                        {{$about->photo}}  
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 form-control-label">Image for single about page</label>
                                    <div class="col-sm-7">
                                        {{$about->banner_img}}
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
                <h3>Single About Page</h3>

                  <div class="card-box">
                    <form  action="{{route('sub-about.create')}}">
                         <button type="button" class="btn btn-success btn-rounded waves-effect waves-light pull-right">Create
                        </button>
                    </form>
                        <table class="table">
                            <thead class="thead-default">
                            <tr>
                                <th>About Title</th>
                                <th>About Description</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                          @foreach ($about->sub_about as $sub_about)
                            <tr>
                                <td>{{ $sub_about->title }}</td>
                                <td>{{ $sub_about->description }}</td>
                                <td>
                                     <a  class="btn btn-success btn-rounded waves-effect waves-light pull-right" href="{{route('sub-about.edit',['sub-about' => $sub_about->id])}}" class="btn btn-info">Edit</a>   
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
