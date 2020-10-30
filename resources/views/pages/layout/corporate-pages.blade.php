@extends('ducor::layouts.layout-5')


@section('pageTitle', 'FixedPlus - Laravel Admin Dashboard Template')


@section('breadcrumb')
		
            <div class="row page-header"><div class="col-lg-6 align-self-center ">
			  <h2>All Pages</h2>
				<ol class="breadcrumb">
					<li  class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
					<li  class="breadcrumb-item"><a href="#">Corporate</a></li>
					<li  class="breadcrumb-item active">All Pages</li>
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
								<a href="javascript: void(0);" class="btn btn-primary btn-icon btn-rounded box-shadow"><i class="fa fa-plus"></i> Add New Page</a>
                            </div>
							All Pages
							<p class="text-muted">Lorem Ipsum is simply dummy text of the <code>printing and typesetting</code> industry.</p>
                        </div>
						
                        <div class="card-body">
                                <table id="datatable1" class="table table-striped dt-responsive nowrap table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                <strong>ID</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>Page Name</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>Menu Position</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>Published</strong>
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
                                            <td>About us</td>
                                            <td>Header Menu</td>
                                            <td class="text-center">
                                                <span class="label label-success">Yes</span>
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
                                            <td>Our Vision</td>
                                            <td>Header Menu</td>
                                            <td class="text-center">
                                                <span class="label label-success">Yes</span>
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
                                            <td>Team</td>
                                            <td>Footer Menu</td>
                                            <td class="text-center">
                                                <span class="label label-success">Yes</span>
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
                                            <td>Our Documents</td>
                                            <td>Header Menu</td>
                                            <td class="text-center">
                                                <span class="label label-danger">No</span>
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
                                            <td>Why us?</td>
                                            <td>Footer Menu</td>
                                            <td class="text-center">
                                                <span class="label label-danger">No</span>
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
		<!-- 						Content End		 						-->
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
