@extends('layouts.backend')

@section('content')
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-title-box">
                            <h4 class="page-title float-left">Social</h4>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-12">
                        
                        <div class="card-box">
                             
                             <table class="table">
                            <thead class="thead-default">
                            <tr>
                                <th>Social Name</th>
                                <th>Social Url</th>
                                <th>Action</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                                <a href="{{route('social.create')}}"  class="btn waves-effect waves-light btn-success pull-right">Create
                            </a>
                          @foreach ($socials->sortByDesc('id') as $social)
                            <tr>
                                <td>{{ $social->name }}</td>
                                <td>{{ $social->url}}</td>
                                <td>
                                     <a  class="btn waves-effect waves-light btn-warning pull-right" href="{{route('social.edit',['id' => $social->id])}}" class="btn btn-info"><i class="fa fa-wrench"></i></a>  
                                </td>
                                <td>
                                    <form id="form-horizontal" action="{{route('social.destroy',['id' => $social->id])}}" method="post" class="form-horizontal">
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
