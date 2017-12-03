@extends('layouts.backend')

@section('content')
 <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-title-box">
                            <h4 class="page-title float-left">Sub About Create</h4>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <form role="form" data-parsley-validate novalidate action="{{route('sub-about.store')}}" method="post">
                                {{csrf_field()}}
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-4 form-control-label">Title</label>
                                    <div class="col-sm-7">
                                        <input type="email" placeholder="Title" name="title" required parsley-type="text" class="form-control"
                                               id="inputEmail3">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="desc" class="col-sm-4 form-control-label">Description</label>
                                    <div class="col-sm-7">
                                        <input id="desc" type="text" name="description" placeholder="Description" required
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-11">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light pull-right">
                                            Create
                                        </button>
                                    </div>
                                    <div class="col-1"></div>
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