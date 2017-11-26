@extends('layouts.backend')

@section('content')
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-title-box">
                            <h4 class="page-title float-left">Contact</h4>

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
                                    <label class="col-sm-5 form-control-label">Phone</label>
                                    <div class="col-sm-7">
                                        {{$contact->phone}}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 form-control-label">Email</label>
                                    <div class="col-sm-7">
                                        {{$contact->email}}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 form-control-label">Address</label>
                                    <div class="col-sm-7">
                                        {{$contact->address}}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 form-control-label">Description</label>
                                    <div class="col-sm-7">
                                        {{$contact->description}}
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <!-- end row -->


            </div> <!-- container -->

        </div> <!-- content -->



    </div>
@endsection