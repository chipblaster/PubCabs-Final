@extends('layouts.backend')

@section('content')
 <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-title-box">
                            <h4 class="page-title float-left">Social Create</h4>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">
                           
                            
                    <div class="col-12">
                        <div class="card-box">
                             <div class="col-md-8" style="margin-left: 33%;margin-bottom: 30px"> 
                                <div class="button-list">
                                        <button type="button" class="btn btn-facebook waves-effect waves-light" 
                                                data-name="fa fa-facebook">
                                            <i class="fa fa-facebook"></i>
                                        </button>

                                        <button type="button" class="btn btn-twitter waves-effect waves-light"
                                                data-name="fa fa-twitter">
                                            <i class="fa fa-twitter"></i>
                                        </button>

                                        <button type="button" class="btn btn-googleplus waves-effect waves-light"
                                                data-name="fa fa-google-plu">
                                            <i class="fa fa-google-plus"></i>
                                        </button>

                                        <button type="button" class="btn btn-instagram waves-effect waves-light"
                                                data-name="fa fa-instagram">
                                            <i class="fa fa-instagram"></i>
                                        </button>

                                        <button type="button" class="btn btn-pinterest waves-effect waves-light"
                                                data-name="fa fa-pinterest-p">
                                            <i class="fa fa-pinterest"></i>
                                        </button>

                                        <button type="button" class="btn btn-youtube waves-effect waves-light"
                                                data-name="fa fa-youtube">
                                            <i class="fa fa-youtube"></i>
                                        </button>
                                </div>
                            </div>
                            <form role="form" data-parsley-validate novalidate action="{{route('social.store')}}" method="post">
                                {{csrf_field()}}
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-4 form-control-label">Name</label>
                                    <div class="col-sm-7">
                                        <input type="email" placeholder="Name" name="name" required parsley-type="text" class="form-control"
                                               id="inputEmail3">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-4 form-control-label">Icon</label>
                                    <div class="col-sm-7">
                                        <input type="email" placeholder="Icon Name" name="icon" required parsley-type="text" class="form-control"
                                               id="inputEmail3">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="desc" class="col-sm-4 form-control-label">Url</label>
                                    <div class="col-sm-7">
                                        <input id="desc" type="text" name="url" placeholder="Url" required
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
@section('script')
<script type="text/javascript">
    $('.button-list button').hover(function() 
    {
        icon_name=$(this).data('name');
        $('input[name=icon]').val(icon_name);
    });
</script>
@endsection