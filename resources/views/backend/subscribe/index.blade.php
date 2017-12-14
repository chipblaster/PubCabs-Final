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
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead class="thead-default">
                            <tr>
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
                          @foreach ($subscribes->sortByDesc('id') as $subscribe)
                            <tr>
                                <td>{{ $subscribe->first_name }}</td>
                                <td>{{ $subscribe->last_name }}</td>
                                <td>{{ $subscribe->email }}</td>
                                <td>{{ $subscribe->phone }}</td>
                                <td>{{ $subscribe->country_id}}</td>
                                <td>{{ $subscribe->zip_code }}</td>
                                <td>{{ $subscribe->type == "1" ? "Driver" : "Rider"}}</td>
                                <td>
                                    <input type="checkbox" {{$subscribe->is_block == "1" ? 'checked' : ""}} class="block" name="is_block" data-id="{{$subscribe->id}}" value="0">
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
                $('#datatable').DataTable();

                //Buttons examples
                var table = $('#datatable-buttons').DataTable({
                    lengthChange: false,
                    buttons: ['copy', 'excel', 'pdf']
                });

                table.buttons().container()
                        .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');

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