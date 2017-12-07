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
                            <form role="form" data-parsley-validate novalidate action="{{route('contact.update',['id' => $contact->id])}}" method="post">
                            	{{csrf_field()}}
                                {{method_field('PUT')}}
	                            <div class="form-group row">
	                                <label for="inputEmail3" class="col-sm-4 form-control-label">Description</label>
	                                <div class="col-sm-7">
	                                	 <textarea  rows="7" placeholder="Description" name="description" required parsley-type="te xt" class="form-control"
                                               id="inputEmail3">{{$contact->description}}</textarea>
	                                </div>
	                            </div>
	                            <div class="form-group row">
	                                <label for="hori-pass1" class="col-sm-4 form-control-label">Address</label>
	                                <div class="col-sm-7">
	                                    <input id="hori-pass1" type="text" name="address" placeholder="Address" required
	                                           class="form-control" value="{{$contact->address}}">
	                                </div>
	                            </div>
	                            <div class="form-group row">
	                                <label for="hori-pass2" class="col-sm-4 form-control-label">Phone</label>
	                                <div class="col-sm-7">
	                                    <input data-parsley-equalto="#hori-pass1" type="text" name="phone" required
	                                           placeholder="Phone" class="form-control" id="hori-pass2" 
	                                           value="{{$contact->phone}}">
	                                </div>
	                            </div>
	                            <div class="form-group row">
	                                <label for="webSite" class="col-sm-4 form-control-label">Email</label>
	                                <div class="col-sm-7">
	                                    <input type="url" required parsley-type="url" name="email" class="form-control"
	                                           id="webSite" placeholder="Email" value="{{$contact->email}}">
	                                </div>
	                            </div>
	                            <div class="form-group row">
	                                <div class="col-11">
	                                    <button type="submit" class="btn btn-primary waves-effect waves-light pull-right">
	                                        Update
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