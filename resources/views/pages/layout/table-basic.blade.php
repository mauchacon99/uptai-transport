@extends('ducor::layouts.layout-5')


@section('pageTitle', 'FixedPlus - Laravel Admin Dashboard Template')


@section('breadcrumb')

		           
		   <div class="row page-header"><div class="col-lg-6 align-self-center ">
			  <h2>Basic Tables</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Tables</a></li>
					<li class="breadcrumb-item active">Basic Tables</li>		
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
                            Full Width Table Basic
                        </div>
                        <div class="card-body">
                            <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Username</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Systems Administrator</td>
                                <td>New York</td>
                                <td>@newyork</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Regional Director</td>
                                <td>London</td>
                                <td>@london</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Office Manager</td>
                                <td>San Francisco</td>
                                <td>@sanfrancisco</td>
                            </tr>
							<tr>
                                <td>4</td>
                                <td>Junior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>@edinburgh</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Director</td>
                                <td>London</td>
                                <td>@london</td>
                            </tr>
							<tr>
                                <td>6</td>
                                <td>Systems Administrator</td>
                                <td>New York</td>
                                <td>@newyork</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Regional Director</td>
                                <td>London</td>
                                <td>@london</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Office Manager</td>
                                <td>San Francisco</td>
                                <td>@sanfrancisco</td>
                            </tr>
							<tr>
                                <td>9</td>
                                <td>Junior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>@edinburgh</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Director</td>
                                <td>London</td>
                                <td>@london</td>
                            </tr>
                            </tbody>
                        </table>
                         </div>
                    </div>
                </div>
			 </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-default">
                            Table basic
                        </div>
                        <div class="card-body">
                            <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                        </table>
                         </div>
                    </div>
                </div>
                 <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-default">
                            Table Striped
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                        </table>
                         </div>
                    </div>
                </div>
            </div>
              <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-default">
                            Table hover
                        </div>
                        <div class="card-body">
                            <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                        </table>
                         </div>
                    </div>
                </div>
                 <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-default">
                            Table bordered
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
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

@endsection


@section('footer-assets')


@endsection
