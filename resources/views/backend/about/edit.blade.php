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
                            <form role="form" data-parsley-validate novalidate action="{{route('about.update',['id' => $about->id])}}" method="post" enctype="multipart/form-data">
                            	{{csrf_field()}}
                                {{method_field('PUT')}}
	                            <div class="form-group row">
	                                <label for="inputEmail3" class="col-sm-4 form-control-label">Description</label>
	                                <div class="col-sm-7">
	                                    <input type="email" placeholder="Description" name="description" required parsley-type="text" class="form-control"
	                                           id="inputEmail3" value="{{$about->description}}">
	                                </div>
	                            </div>
	                            <div class="form-group row">
	                                <label for="hori-pass1" class="col-sm-4 form-control-label">Photo</label>
	                                <div class="col-sm-7">
	                                	 <input type="file" class="dropify" name="banner_img" data-default-file="{{asset('assets/upload/'.$about->banner_img)}}" value="{{$about->banner_img}}" />
	                                </div>
	                            </div>
	                            <div class="form-group row">
	                                <label for="hori-pass2" class="col-sm-4 form-control-label">Content Image</label>
	                                <div class="col-sm-7">
	                                    <input type="file" class="dropify" name="photo" data-default-file="{{asset('assets/upload/'.$about->photo)}}" value="{{$about->photo}}" />
	                                   
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
@section('script')
<script src="{{asset('assets/plugins/fileuploads/js/dropify.min.js')}}"></script>

    <script type="text/javascript">
            $('.dropify').dropify({
                messages: {
                    'default': 'Drag and drop a file here or click',
                    'replace': 'Drag and drop or click to replace',
                    'remove': 'Remove',
                    'error': 'Ooops, something wrong appended.'
                },
                error: {
                    'fileSize': 'The file size is too big (1M max).'
                }
            });
        </script>
@endsection
