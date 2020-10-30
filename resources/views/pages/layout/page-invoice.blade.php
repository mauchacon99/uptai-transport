@extends('ducor::layouts.layout-5')


@section('pageTitle', 'FixedPlus - Laravel Admin Dashboard Template')


@section('breadcrumb')

            <div class="row page-header"><div class="col-lg-6 align-self-center ">
			  <h2>Invoice</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Pages</a></li>
					<li class="breadcrumb-item active">Invoice</li>
				</ol></div></div>

@endsection


@section('content')



        <!-- ============================================================== -->
		<!-- 						Content Start	 						-->
		<!-- ============================================================== -->
					

        

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4>Invoice No :<small>85659-2018</small></h4>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-right">
                                        <button class="btn btn-default btn-sm"><i class="fa fa-pencil"></i> Edit </button>
                                        <button class="btn btn-default btn-sm"><i class="fa fa-check "></i> Save </button>
                                        <button class="btn btn-primary btn-sm"><i class="fa fa-dollar"></i> Make A Payment</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row margin-b-40">
                                <div class="col-sm-6">
                                    <h4>85659-2018</h4>

                                    <address>
                                        <strong>ThemeTurka, Inc.</strong><br>
                                        Ataturk district<br>
                                        Turkey, P 06582<br>
                                        <abbr title="Phone">Pbx:</abbr> (0241) 256-52-58
                                    </address>
                                </div>
                              
                            </div>

                            <div class="table-responsive margin-b-40">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Item List</th>
                                            <th>Quantity</th>
                                            <th>Unit Price</th>
                                            <th>Tax</th>
                                            <th>Total Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div><strong>Lorem ipsum dolor sit amet</strong></div>
                                                <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore.
                                                </small>
                                            </td>
                                            <td>1</td>
                                            <td>$120.00</td>
                                            <td>$240.20</td>
                                            <td>$533.20</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div><strong>Lorem ipsum dolor sit amet</strong></div>
                                                <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua.
                                                    Eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                </small>
                                            </td>
                                            <td>2</td>
                                            <td>$120.00</td>
                                            <td>$240.20</td>
                                            <td>$533.20</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div><strong>Lorem ipsum dolor sit amet</strong></div>
                                                <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua.
                                                </small>
                                            </td>
                                            <td>3</td>
                                            <td>$120.00</td>
                                            <td>$240.20</td>
                                            <td>$533.20</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div><strong>Lorem ipsum dolor sit amet</strong></div>
                                                <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua.
                                                </small>
                                            </td>
                                            <td>4</td>
                                            <td>$120.00</td>
                                            <td>$240.20</td>
                                            <td>$533.20</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class='col-md-6'>
                                    <h5>Additional Information</h5>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua.
                                    </p>
                                </div>
                                <div class="col-md-4 col-md-offset-2">
                                    <table class="table table-striped text-right">
                                        <tbody>
                                            <tr>
                                                <td><strong>Sub Total :</strong></td>
                                                <td>$1000.00</td>
                                            </tr>
                                            <tr>
                                                <td><strong>TAX :</strong></td>
                                                <td>$180.00</td>
                                            </tr>
                                            <tr>
                                                <td><strong>TOTAL :</strong></td>
                                                <td>$1180.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <div>
                                        <button class="btn btn-success" onclick="window.print();"><i class="fa fa-print"></i> Print</button>            
                                        <button class="btn btn-default">Invoice Submit</button>            
                                    </div>
                                </div>
                            </div>

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
