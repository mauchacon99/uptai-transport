@extends('ducor::layouts.layout-5')


@section('pageTitle', 'FixedPlus - Laravel Admin Dashboard Template')


@section('breadcrumb')
            
    <div class="row page-header"><div class="col-lg-6 align-self-center ">
        <h2>Orders</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
            <li class="breadcrumb-item"><a href="#">E-Commerce</a></li>
            <li class="breadcrumb-item active">Orders</li>
        </ol></div></div>



@endsection


@section('content')



<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->


    <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header card-default">
                    Orders
                    <p class="text-muted">Lorem ipsum dolor sit amet</p>
                </div>
                <div class="card-body">
                
                        <table id="datatable2" class="table table-striped dt-responsive nowrap">
                            <thead>
                                <tr>
                                    <th style="width:80px">
                                        <strong>ORDER ID</strong>
                                    </th>
                                    <th>
                                        <strong>PURCHASED ON</strong>
                                    </th>
                                    <th>
                                        <strong>CLIENT NAME</strong>
                                    </th>
                                    <th>
                                        <strong>AMOUNT</strong>
                                    </th>
                                    <th>
                                        <strong>QUANTITY</strong>
                                    </th>
                                    <th>
                                        <strong>SHIPMENT</strong>
                                    </th>
                                    <th class="text-center">
                                        <strong>STATUS</strong>
                                    </th>
                                    <th class="text-center">
                                        <strong>VIEW</strong>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>0001</td>
                                    <td>02/08/2018</td>
                                    <td>Description for Product</td>
                                    <td>$28.55</td>
                                    <td>385</td>
                                    <td>04/09/2018</td>
                                    <td class="text-center">
                                        <span class="badge badge-success">Was Delivered</span>
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-sm btn-default">
                                            <em class="fa fa-search"></em>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>0002</td>
                                    <td>02/08/2018</td>
                                    <td>Description for Product</td>
                                    <td>$28.55</td>
                                    <td>385</td>
                                    <td>04/09/2018</td>
                                    <td class="text-center">
                                        <span class="badge badge-warning">Pending</span>
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-sm btn-default">
                                            <em class="fa fa-search"></em>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>0003</td>
                                    <td>02/08/2018</td>
                                    <td>Description for Product</td>
                                    <td>$28.55</td>
                                    <td>385</td>
                                    <td>04/09/2018</td>
                                    <td class="text-center">
                                        <span class="badge badge-danger">Cancel</span>
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-sm btn-default">
                                            <em class="fa fa-search"></em>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>0004</td>
                                    <td>02/08/2018</td>
                                    <td>Description for Product</td>
                                    <td>$28.55</td>
                                    <td>385</td>
                                    <td>04/09/2018</td>
                                    <td class="text-center">
                                        <span class="badge badge-success">Was Delivered</span>
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-sm btn-default">
                                            <em class="fa fa-search"></em>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>0005</td>
                                    <td>02/08/2018</td>
                                    <td>Description for Product</td>
                                    <td>$28.55</td>
                                    <td>385</td>
                                    <td>04/09/2018</td>
                                    <td class="text-center">
                                        <span class="badge badge-warning">Pending</span>
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-sm btn-default">
                                            <em class="fa fa-search"></em>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>0006</td>
                                    <td>02/08/2018</td>
                                    <td>Description for Product</td>
                                    <td>$28.55</td>
                                    <td>385</td>
                                    <td>04/09/2018</td>
                                    <td class="text-center">
                                        <span class="badge badge-danger">Cancel</span>
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-sm btn-default">
                                            <em class="fa fa-search"></em>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>0007</td>
                                    <td>02/08/2018</td>
                                    <td>Description for Product</td>
                                    <td>$28.55</td>
                                    <td>385</td>
                                    <td>04/09/2018</td>
                                    <td class="text-center">
                                        <span class="badge badge-success">Was Delivered</span>
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-sm btn-default">
                                            <em class="fa fa-search"></em>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>0008</td>
                                    <td>02/08/2018</td>
                                    <td>Description for Product</td>
                                    <td>$28.55</td>
                                    <td>385</td>
                                    <td>04/09/2018</td>
                                    <td class="text-center">
                                        <span class="badge badge-warning">Pending</span>
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-sm btn-default">
                                            <em class="fa fa-search"></em>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>0009</td>
                                    <td>02/08/2018</td>
                                    <td>Description for Product</td>
                                    <td>$28.55</td>
                                    <td>385</td>
                                    <td>04/09/2018</td>
                                    <td class="text-center">
                                        <span class="badge badge-danger">Cancel</span>
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-sm btn-default">
                                            <em class="fa fa-search"></em>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>0010</td>
                                    <td>02/08/2018</td>
                                    <td>Description for Product</td>
                                    <td>$28.55</td>
                                    <td>385</td>
                                    <td>04/09/2018</td>
                                    <td class="text-center">
                                        <span class="badge badge-success">Was Delivered</span>
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-sm btn-default">
                                            <em class="fa fa-search"></em>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>0011</td>
                                    <td>02/08/2018</td>
                                    <td>Description for Product</td>
                                    <td>$28.55</td>
                                    <td>385</td>
                                    <td>04/09/2018</td>
                                    <td class="text-center">
                                        <span class="badge badge-warning">Pending</span>
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-sm btn-default">
                                            <em class="fa fa-search"></em>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>0012</td>
                                    <td>02/08/2018</td>
                                    <td>Description for Product</td>
                                    <td>$28.55</td>
                                    <td>385</td>
                                    <td>04/09/2018</td>
                                    <td class="text-center">
                                        <span class="badge badge-danger">Cancel</span>
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-sm btn-default">
                                            <em class="fa fa-search"></em>
                                        </button>
                                    </td>
                                </tr>
                                
                                
                            </tbody>
                        </table>
            
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <span>Copyright &copy; 2018 FixedPlus</span>
    </footer>

</section>
<!-- ============================================================== -->
<!-- 						Content End 	 						-->
<!-- ============================================================== -->





@endsection


@section('head-assets')


<!-- DataTables -->
<link href="{{ du_asset( 'layout-5/lib/datatables/jquery.dataTables.min.css' ) }}" rel="stylesheet" type="text/css">
<link href="{{ du_asset( 'layout-5/lib/datatables/responsive.bootstrap.min.css' ) }}" rel="stylesheet" type="text/css">
<link href="{{ du_asset( 'layout-5/lib/datatables/buttons.dataTables.css' ) }}" rel="stylesheet" type="text/css">


@endsection


@section('footer-assets')



<!-- DataTables-->
<script src="{{ du_asset( 'layout-5/lib/datatables/jquery.dataTables.min.js' ) }}"></script>
<script src="{{ du_asset( 'layout-5/lib/datatables/dataTables.responsive.min.js' ) }}"></script>
<script src="{{ du_asset( 'layout-5/lib/datatables/dataTables.buttons.min.js' ) }}"></script>
<script src="{{ du_asset( 'layout-5/lib/datatables/jszip.min.js' ) }}"></script>
<script src="{{ du_asset( 'layout-5/lib/datatables/pdfmake.min.js' ) }}"></script>
<script src="{{ du_asset( 'layout-5/lib/datatables/vfs_fonts.js' ) }}"></script>
<script src="{{ du_asset( 'layout-5/lib/datatables/buttons.html5.min.js' ) }}"></script>
<script>
    $(document).ready(function () {
        $('#datatable2').DataTable({
                dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
        });

    });
</script>

@endsection
