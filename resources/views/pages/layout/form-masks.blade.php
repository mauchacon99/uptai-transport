@extends('ducor::layouts.layout-5')


@section('pageTitle', 'FixedPlus - Laravel Admin Dashboard Template')


@section('breadcrumb')
				
        <div class="row page-header">
			<div class="col-lg-6 align-self-center ">
			    <h2>Form Masks</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Form</a></li>
					<li class="breadcrumb-item active">Form Masks</li>		
				</ol>
			</div>
		</div>


@endsection


@section('content')


        <!-- ============================================================== -->
		<!-- 						Content Start	 						-->
		<!-- ============================================================== -->
	
        

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header card-default">
                           Form Masks Example
                        </div>
                        <div class="card-body">
                            <form action="#">
								<div  class="form-group">
									<div class="row">
										<div class="col-md-6">
											<label for="date-input">Date</label>
											<input placeholder="2018-01-01" id="date-input" type="text" class="form-control">
										</div>
										<div class="col-md-6">
											<label for="date-input1">Date</label>
											<input placeholder="01/01/2018" id="date-input1" type="text" class="form-control">
										</div>
									</div>
								</div>
								
								<div  class="form-group">
									<div class="row">
										<div class="col-md-6">
											<label for="time-demo1">Time</label>
											<input placeholder="00:00" id="time-demo1" type="text" class="form-control">
										</div>
										<div class="col-md-6">
											<label for="date-time">Date & Time</label>
											<input placeholder="2018/01/01 00:00:00" id="date-time" type="text" class="form-control">
										</div>
									</div>
								</div>
								
								<div  class="form-group">
									<div class="row">
										<div class="col-md-6">
											<label for="time-demo2">Time</label>
											<input placeholder="00:00:00" id="time-demo2" type="text" class="form-control">
										</div>
										<div class="col-md-6">
											<label for="characters">Characters (Only)</label>
											<input placeholder="asdfghjkl (max10)" id="characters-demo" type="text" class="form-control">
										</div>
									</div>
								</div>

								<div  class="form-group">
									<div class="row">
										<div class="col-md-6">
											<label for="phone-demo">Phone</label>
											<input id="phone-demo" type="text" class="form-control">
										</div>
										<div class="col-md-6">
											<label for="phone_code">Phone Code</label>
											<input id="phone-code" type="text" class="form-control">
										</div>
									</div>
								</div>
								
								<div  class="form-group">
									<div class="row">
										<div class="col-md-6">
											<label for="currency_demo" >Currency</label>
											<input id="currency-demo" type="text" class="form-control">
										</div>
										<div class="col-md-6">
											<label for="credit_demo">Credit Card</label>
											<input id="credit-demo" type="text" class="form-control">
										</div>
									</div>
								</div>
								
								<div  class="form-group">
									<div class="row">
										<div class="col-md-6">
											<label for="product_key">Product Key</label>
											<input id="product-key" type="text" class="form-control">
										</div>
										<div class="col-md-6">
											<label for="purchase_code">Purchase Code</label>
											<input id="purchase-code" type="text" class="form-control">
										</div>
									</div>
								</div>
							</form>
                        </div>
                    </div>
                </div>
            </div>

  

        </section>
        <!-- ============================================================== -->
		<!-- 						Content End	 						-->
		<!-- ============================================================== -->



@endsection


@section('head-assets')

@endsection

@section('footer-assets')		
<!-- Fotmatter Form Mask -->
<script src="{{ du_asset( 'layout-2/lib/formatter/jquery.formatter.min.js' ) }}"></script>
<script src="{{ du_asset('layout-1/lib/formatter/example.js') }}"></script>
@endsection