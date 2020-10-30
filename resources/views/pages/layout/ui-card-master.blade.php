@extends('ducor::layouts.layout-5')


@section('pageTitle', 'FixedPlus - Laravel Admin Dashboard Template')


@section('breadcrumb')

		
        <div class="row page-header">
			<div class="col-lg-6 align-self-center ">
			   <h2>Card Master</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">UI Elements</a></li>
					<li class="breadcrumb-item active">Card Master</li>
				</ol>
			</div>
		</div>

        
@endsection


@section('content')

        
		<!-- ============================================================== -->
		<!-- 						Content Start	 						-->
		<!-- ============================================================== -->

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-default">
                            Card Master
                        </div>
                        <div class="card-body">
                            <div class="col-md-12">
								<div class="card-wrapper"></div>
								<div class="form-container active">
									<form  role="form" id="card-master">
										<div class="form-group">
											<input placeholder="Card number" type="tel" name="number" class="form-control">
										</div>
										<div class="form-group">
											<input placeholder="Full name" type="text" name="name" class="form-control">
										</div>
										<div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input placeholder="MM/YY" type="tel" name="expiry"class="form-control">
                                                </div>
                                                <div class="col-md-6">
                                                    <input placeholder="CVC" type="number" name="cvc" class="form-control">
                                                </div>
                                            </div>
										</div>
										<button class="btn col-md-12 btn-primary">Submit</button>
									</form>
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

		<!-- Card Master -->
		<link href="{{ du_asset( 'layout-5/lib/card-master/card.css' ) }}" rel="stylesheet">
		
@endsection


@section('footer-assets')


		<!-- Card Master -->
		<script src="{{ du_asset( 'layout-5/lib/card-master/card.js' ) }}"></script>
		<script>
			new Card({
				form: document.querySelector('#card-master'),
				container: '.card-wrapper'
			});
		</script>

@endsection
