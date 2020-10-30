@extends('ducor::layouts.layout-5')


@section('pageTitle', 'FixedPlus - Laravel Admin Dashboard Template')


@section('breadcrumb')

		
            <div class="row page-header"><div class="col-lg-6 align-self-center ">
			  <h2>Products</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
					<li class="breadcrumb-item"><a href="#">E-Commerce</a></li>
					<li class="breadcrumb-item active">Products</li>
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
							<div class="float-right mt-10">
								<a href="javascript: void(0);" class="btn btn-primary btn-rounded box-shadow btn-icon"><i class="fa fa-plus"></i> Add New Product</a>
                            </div>
							Products
							<p class="text-muted">Lorem ipsum dolor sit amet</p>
                        </div>
						
                        <div class="card-body">
                                <table id="datatable1" class="table table-striped dt-responsive nowrap table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                <strong>ID</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>Name</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>Description</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>Price</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>Status</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>Added</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>Action</strong>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>0001</td>
                                            <td>Product 1</td>
                                            <td>Description for Product</td>
                                            <td>$ 12.20</td>
                                            <td class="text-center">
                                                <span class="label label-success">Stock</span>
                                            </td>
                                            <td>15/07/2018</td>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
												<button type="button" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></button>
												<button type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>0002</td>
                                            <td>Product 2</td>
                                            <td>Description for Product</td>
                                            <td>$ 13.20</td>
                                            <td class="text-center">
                                                <span class="label label-success">Stock</span>
                                            </td>
                                            <td>15/07/2018</td>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
												<button type="button" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></button>
												<button type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>0003</td>
                                            <td>Product 3</td>
                                            <td>Description for Product</td>
                                            <td>$ 14.20</td>
                                            <td class="text-center">
                                                <span class="label label-danger">Removed</span>
                                            </td>
                                            <td>15/07/2018</td>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
												<button type="button" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></button>
												<button type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>0004</td>
                                            <td>Product 4</td>
                                            <td>Description for Product</td>
                                            <td>$ 15.20</td>
                                            <td class="text-center">
                                                <span class="label label-warning">Out of Stock</span>
                                            </td>
                                            <td>15/07/2018</td>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
												<button type="button" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></button>
												<button type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>0005</td>
                                            <td>Product 5</td>
                                            <td>Description for Product</td>
                                            <td>$ 16.20</td>
                                            <td class="text-center">
                                                <span class="label label-danger">Removed</span>
                                            </td>
                                            <td>15/07/2018</td>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
												<button type="button" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></button>
												<button type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>0006</td>
                                            <td>Product 6</td>
                                            <td>Description for Product</td>
                                            <td>$ 17.20</td>
                                            <td class="text-center">
                                                <span class="label label-success">Stock</span>
                                            </td>
                                            <td>15/07/2018</td>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
												<button type="button" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></button>
												<button type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>0007</td>
                                            <td>Product 7</td>
                                            <td>Description for Product</td>
                                            <td>$ 18.20</td>
                                            <td class="text-center">
                                                <span class="label label-danger">Removed</span>
                                            </td>
                                            <td>15/07/2018</td>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
												<button type="button" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></button>
												<button type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>0008</td>
                                            <td>Product 8</td>
                                            <td>Description for Product</td>
                                            <td>$ 19.20</td>
                                            <td class="text-center">
                                                <span class="label label-warning">Out of Stock</span>
                                            </td>
                                            <td>15/07/2018</td>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
												<button type="button" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></button>
												<button type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>0009</td>
                                            <td>Product 9</td>
                                            <td>Description for Product</td>
                                            <td>$ 110.20</td>
                                            <td class="text-center">
                                                <span class="label label-danger">Removed</span>
                                            </td>
                                            <td>15/07/2018</td>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
												<button type="button" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></button>
												<button type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>00010</td>
                                            <td>Product 10</td>
                                            <td>Description for Product</td>
                                            <td>$ 111.20</td>
                                            <td class="text-center">
                                                <span class="label label-success">Stock</span>
                                            </td>
                                            <td>15/07/2018</td>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
												<button type="button" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></button>
												<button type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>00011</td>
                                            <td>Product 11</td>
                                            <td>Description for Product</td>
                                            <td>$ 112.20</td>
                                            <td class="text-center">
                                                <span class="label label-success">Stock</span>
                                            </td>
                                            <td>15/07/2018</td>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
												<button type="button" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></button>
												<button type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>00012</td>
                                            <td>Product 12</td>
                                            <td>Description for Product</td>
                                            <td>$ 113.20</td>
                                            <td class="text-center">
                                                <span class="label label-warning">Out of Stock</span>
                                            </td>
                                            <td>15/07/2018</td>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
												<button type="button" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></button>
												<button type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>00013</td>
                                            <td>Product 13</td>
                                            <td>Description for Product</td>
                                            <td>$ 114.20</td>
                                            <td class="text-center">
                                                <span class="label label-success">Stock</span>
                                            </td>
                                            <td>15/07/2018</td>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
												<button type="button" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></button>
												<button type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>00014</td>
                                            <td>Product 14</td>
                                            <td>Description for Product</td>
                                            <td>$ 115.20</td>
                                            <td class="text-center">
                                                <span class="label label-success">Stock</span>
                                            </td>
                                            <td>15/07/2018</td>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
												<button type="button" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></button>
												<button type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>00015</td>
                                            <td>Product 15</td>
                                            <td>Description for Product</td>
                                            <td>$ 116.20</td>
                                            <td class="text-center">
                                                <span class="label label-success">Stock</span>
                                            </td>
                                            <td>15/07/2018</td>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
												<button type="button" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></button>
												<button type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
            </div>

            

  


        </section>
        <!-- ============================================================== -->
		<!-- 						Content End 	 						-->
		<!-- ============================================================== -->





@endsection


@section('head-assets')

        <!-- DataTables -->
        <link href="{{ du_asset( 'layout-5/lib/datatables/jquery.dataTables.min.css' ) }}" rel="stylesheet" type="text/css">
        <link href="{{ du_asset( 'layout-5/lib/datatables/responsive.bootstrap.min.css' ) }}" rel="stylesheet" type="text/css">



@endsection


@section('footer-assets')


		
        <!-- Datatables-->
        <script src="{{ du_asset( 'layout-5/lib/datatables/jquery.dataTables.min.js' ) }}"></script>
        <script src="{{ du_asset( 'layout-5/lib/datatables/dataTables.responsive.min.js' ) }}"></script>
        <script>
            $(document).ready(function () {
                $('#datatable1').dataTable();
            });
        </script>

@endsection
