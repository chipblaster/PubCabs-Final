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

                     @if(Session::has('status'))
                    <div class="alert alert-info">
                        <a class="close" data-dismiss="alert">×</a>
                        <strong>{{ session('status') }}</strong>
                    </div>
                     @endif

                <div class="row">
                    <div class="col-12">
                        
                       <div class="card-box">
                        <form action="{{route('subscribe_mail')}}" method="POST">
                            {{csrf_field()}}
                        <table id="datatable" class="table table-bordered select" cellspacing="0" width="100%">
                            <thead class="thead-default">
                            <tr>
                                <th>
                                <div class="checkbox checkbox-primary">
                                    <input type="checkbox" id="checkbox-select-all" name="select_all">
                                    <label for="checkbox-select-all"></label>
                                </div>
                                </th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Country</th>
                                <th>Zip Code</th>
                                <th>Type</th>
                                <th>Block</th>
                            </tr>
                            </thead>
                            <tbody>
                               
                          @foreach ($subscribes->sortByDesc('id') as $key => $subscribe)

                            <tr>
                                <td>
                                <div class="checkbox checkbox-primary">
                                    <input  type="checkbox" id="checkbox-select-{{$subscribe->id}}" class="select_single" name="id[]" value="{{$subscribe->id}}">
                                     <label for="checkbox-select-{{$subscribe->id}}"></label>
                                </div>
                                </td>
                                <td>{{ $subscribe->first_name }}</td>
                                <td>{{ $subscribe->last_name }}</td>
                                <td>{{ $subscribe->email }}</td>
                                <td>{{ $subscribe->phone }}</td>
                                <td>{{ $subscribe->country->name}}</td>
                                <td>{{ $subscribe->zip_code }}</td>
                                <td>{{ $subscribe->type == "1" ? "Driver" : "Rider"}}</td>
                                <td>
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox-{{$subscribe->id}}" type="checkbox" {{$subscribe->is_block == "1" ? 'checked' : ""}} class="block" name="is_block">
                                    <label for="checkbox-{{$subscribe->id}}"></label>
                                </div>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                         <div class="form-group">
                            <label>Message </label>
                            <textarea  name="message" class="form-control"></textarea>
                        </div>
                        <input class="form-control btn btn-info" type="submit" name="" value="submit">
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
  <!-- Required datatable js -->
        <script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
        <!-- Buttons examples -->
        <script src="{{asset('assets/plugins/datatables/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatables/jszip.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatables/pdfmake.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatables/vfs_fonts.js')}}"></script>
        <script src="{{asset('assets/plugins/datatables/buttons.html5.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatables/buttons.print.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatables/buttons.colVis.min.js')}}"></script>
        <!-- Responsive examples -->
        <script src="{{asset('assets/plugins/datatables/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>
      
 <script type="text/javascript">
            $(document).ready(function() {
               $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var table =$('#datatable').DataTable();
                // $('#datatable thead #datatable-select-all').on( 'click', function () 
                // {
                //     // toggleClass('selected');
                //     console.log("yes");
                // } );
              
               
                $('#checkbox-select-all').on('click', function(){
                   // Get all rows with search applied
                   var rows = table.rows({ 'search': 'applied' }).nodes();
                   // Check/uncheck checkboxes for all rows in the table
                   var checkeds=$(".select_single", rows).prop('checked', this.checked);
                   checkeds.each(function(i)
                   {
                     var val = [];
                     val[i] = $(this).val();
                        $('.result').append(val[i]);
                   });
                });

                $('.block').change(function(){
                    if (this.checked) 
                    {
                        $(this).val('1');
                    }
                    else
                    {
                         $(this).val('0');
                    }
                    block=$(this).val();
                    id=$(this).data("id");
                    console.log(block);
                    $.ajax({
                            url: "/admin/subscribe/block/user",
                            type: "GET",
                            data:{
                                id:id,
                                block:block
                            },
                            success: function(result)
                            {
                                console.log(result);
                            }
                     });

                });

            } );

        </script>
@endsection