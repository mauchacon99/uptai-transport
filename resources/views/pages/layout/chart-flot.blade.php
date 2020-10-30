@extends('ducor::layouts.layout-5')


@section('pageTitle', 'FixedPlus - Laravel Admin Dashboard Template')


@section('breadcrumb')

	<div class="row page-header"><div class="col-lg-6 align-self-center ">
		<h2>Flot Charts</h2>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item"><a href="#">Charts</a></li>
			<li class="breadcrumb-item active">Flot Charts</li>		
		</ol></div></div>

@endsection


@section('content')



<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->
			


	<div class="row">
		<div class="col-md-7">
			<div class="card">
				<div class="card-header card-default">
					Line type chart
				</div>
				<div class="card-body">
					<div class="flot-chart">
						<div class="flot-chart-content" id="flot-line-chart"></div>
					</div>
				</div>
			</div>
		</div>
			<div class="col-md-5">
			<div class="card">
				<div class="card-header card-default">
					Bar chart example
				</div>
				<div class="card-body">
						<div class="flot-chart">
								<div class="flot-chart-content" id="flot-bar-chart"></div>
						</div>
				</div>
			</div>
		</div>
	</div>
		<div class="row">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header card-default">
					Pie Chart
				</div>
				<div class="card-body">
					<div class="flot-chart">
								<div class="flot-chart-content" id="flot-pie-chart"></div>
						</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card">
				<div class="card-header card-default">
					Moving chart
				</div>
				<div class="card-body">
					<div class="flot-chart">
						<div class="flot-chart-content" id="flot-line-chart-moving"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header card-default">
					Multiple Axes Line Chart Example 
				</div>
				<div class="card-body">
					<div class="flot-chart">
						<div class="flot-chart-content" id="multi-axes-line"></div>
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


<!-- Flot Chart-->
<script src="{{ du_asset( 'layout-5/lib/flot/jquery.flot.js' ) }}"></script>
<script src="{{ du_asset( 'layout-5/lib/flot/jquery.flot.resize.js' ) }}"></script>
<script src="{{ du_asset( 'layout-5/lib/flot/jquery.flot.pie.js' ) }}"></script>
<script src="{{ du_asset( 'layout-5/lib/flot/jquery.flot.time.js' ) }}"></script>
<script src="{{ du_asset( 'layout-5/lib/flot/jquery.flot.tooltip.min.js' ) }}"></script>
<script src="{{ du_asset( 'layout-5/js/flot.custom.js' ) }}"></script>


@endsection
