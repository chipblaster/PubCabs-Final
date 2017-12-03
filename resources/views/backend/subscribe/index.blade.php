@extends('layouts.backend')

@section('content')
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-title-box">
                            <h4 class="page-title float-left">Subscribes</h4>

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
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Country</th>
                                <th>Zip Code</th>
                                <th>Type</th>
                            </tr>
                            </thead>
                            <tbody>
                          @foreach ($subscribes->sortByDesc('id') as $subscribe)
                            <tr>
                                <td>{{ $subscribe->first_name }}</td>
                                <td>{{ $subscribe->last_name }}</td>
                                <td>{{ $subscribe->email }}</td>
                                <td>{{ $subscribe->phone }}</td>
                                <td>{{ $subscribe->country_id }}</td>
                                <td>{{ $subscribe->zip_code }}</td>
                                <td>{{ $subscribe->type == "1" ? "Driver" : "Rider"}}</td>
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
s