@extends('ducor::layouts.layout-5')


@section('pageTitle', 'FixedPlus - Laravel Admin Dashboard Template')


@section('breadcrumb')

            <div class="row page-header"><div class="col-lg-6 align-self-center ">
			  <h2>Radial Charts</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Charts</a></li>
					<li class="breadcrumb-item active">Radial Charts</li>		
				</ol></div></div>
           
@endsection


@section('content')



        <!-- ============================================================== -->
		<!-- 						Content Start	 						-->
		<!-- ============================================================== -->
		

        

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header card-default">
                            Knob Chart example
                        </div>
                        <div class="card-body text-center">
							<div class="row">
								<div class="col-md-3">
									<h3><small>Default</small></h3>
									<input class="knob" data-fgColor="#34bfa3" data-thickness=".4" value="5">
								</div>
								
								<div class="col-md-3">
									<h3><small>Ready only</small></h3>
									<input class="knob" data-fgColor="#36a3f7" data-thickness=".4" readonly value="22">
								</div>
								
								<div class="col-md-3">
									<h3><small>Offset and arc</small></h3>
									<input class="knob" data-angleOffset=-125 data-angleArc=250 data-fgColor="#f4516c" data-rotation="anticlockwise" value="35">
								</div>
								
								<div class="col-md-3">
									<h3><small>Display previous</small></h3>
									<input class="knob" data-min="-10000" data-fgColor="#ffb822" data-displayPrevious=true data-max="10000" data-step=".1" value="0">
								</div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
			
			
			<div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header card-default">
                            Easy Pie Chart
                        </div>
                        <div class="card-body text-center">
							<div class="row">
								<div class="col-md-3">
									<h3><small>Default</small></h3>
									<div id="easypie1" data-percent="85" class="easypie-chart">
										<span>85</span>
									</div>
								</div>
								
								<div class="col-md-3">
									<h3><small>Slim</small></h3>
									 <div id="easypie2" data-percent="45" class="easypie-chart">
										<span>45</span>
									 </div>
								</div>
								
								<div class="col-md-3">
									<h3><small>Track color</small></h3>
									 <div id="easypie3" data-percent="75" class="easypie-chart">
										<span>75</span>
									 </div>
								</div>
								
								<div class="col-md-3">
									<h3><small>Scale color</small></h3>
									<div id="easypie4" data-percent="60" class="easypie-chart">
										<span>60</span>
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




        <!-- Radial Chart-->
        <script src="{{ du_asset( 'layout-5/lib/radial-charts/jquery.knob.js' ) }}"></script>
        <script src="{{ du_asset( 'layout-5/lib/radial-charts/jquery.easypiechart.js' ) }}"></script>
		<script src="{{ du_asset( 'layout-5/js/radial.custom.js' ) }}"></script>
  

@endsection
