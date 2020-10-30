@extends('ducor::layouts.layout-5')


@section('pageTitle', 'FixedPlus - Laravel Admin Dashboard Template')


@section('breadcrumb')
		
        <div class="row page-header">
			<div class="col-lg-6 align-self-center ">
			    <h2>Range Slider</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">UI Elements</a></li>
					<li class="breadcrumb-item active">Range Slider</li>
				</ol>
			</div>
		</div>


@endsection


@section('content')


        <!-- ============================================================== -->
		<!-- 						Content Start	 						-->
		<!-- ============================================================== -->

        
            <div class="row">             
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-default">
                            Sliders
                        </div>
                        <div class="card-body">
							<div class="row">
								 <div class="col-md-6">
									<h5><small>Default</small></h5>
									<input type="text" id="range_01">
								 </div>
								 <div class="col-md-6">
									<h5><small>Min-Max</small></h5>
									<input type="text" id="range_02">
								</div>
							</div>
							
							<div class="row mt-5">
								 <div class="col-md-6">
									<h5><small>Prefix</small></h5>
									<input type="text" id="range_03">
								</div>
								<div class="col-md-6">
									<h5><small>Range</small></h5>
									<input type="text" id="range_04">
								</div>
							</div>
							
							<div class="row  mt-5">
								<div class="col-md-6">
									<h5><small>Steps</small></h5>
									<input type="text" id="range_05">
								</div>	
								<div class="col-md-6">
									<h5><small>Custom Values</small></h5>
									<input type="text" id="range_06">
								</div>
							</div>
							
							<div class="row mt-5">
								<div class="col-md-6">
									<h5><small>Prettify Numbers</small></h5>
									<input type="text" id="range_07">
								</div>	
								<div class="col-md-6">
									<h5><small>Disabled</small></h5>
									<input type="text" id="range_08">
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

        <!-- Ion Slider -->
        <link href="{{ du_asset( 'layout-5/lib/ion-range-sliders/ion.rangeSlider.css' ) }}" rel="stylesheet" type="text/css"/>
        <link href="{{ du_asset( 'layout-5/lib/ion-range-sliders/ion.rangeSlider.skinHTML5.css' ) }}" rel="stylesheet" type="text/css"/>
		

@endsection


@section('footer-assets')


		
        <!-- Ion range slider -->
        <script src="{{ du_asset( 'layout-5/lib/ion-range-sliders/ion.rangeSlider.min.js' ) }}"></script>
        <script>
            $(document).ready(function () {
                $("#range_01").ionRangeSlider();
                $("#range_02").ionRangeSlider({
                    min: 100,
                    max: 1000,
                    from: 550
                });
                $("#range_03").ionRangeSlider({
                    type: "double",
                    grid: true,
                    min: 0,
                    max: 1000,
                    from: 200,
                    to: 800,
                    prefix: "$"
                });

                $("#range_04").ionRangeSlider({
                    type: "double",
                    grid: true,
                    min: -1000,
                    max: 1000,
                    from: -500,
                    to: 500
                });
                $("#range_05").ionRangeSlider({
                    type: "double",
                    grid: true,
                    min: -1000,
                    max: 1000,
                    from: -500,
                    to: 500,
                    step: 250
                });

                $("#range_06").ionRangeSlider({
                    grid: true,
                    from: 3,
                    values: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"]
                });
            
             $("#range_07").ionRangeSlider({
				grid: true,
				min: 1000,
				max: 1000000,
				from: 200000,
				step: 1000,
				prettify_enabled: true
			});
			
			$("#range_08").ionRangeSlider({
				min: 100,
				max: 1000,
				from: 550,
				disable: true
			});
		});
        </script>

@endsection
