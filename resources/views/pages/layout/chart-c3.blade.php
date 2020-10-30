@extends('ducor::layouts.layout-5')


@section('pageTitle', 'FixedPlus - Laravel Admin Dashboard Template')


@section('breadcrumb')

	<div class="row page-header"><div class="col-lg-6 align-self-center ">
		<h2>C3 Charts</h2>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item"><a href="#">Charts</a></li>
			<li class="breadcrumb-item active">C3 Charts</li>		
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
					Line chart
				</div>
				<div class="card-body">
					<div>
						<div id="lineChart"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header card-default">
					time series type chart
				</div>
				<div class="card-body">
					<div>
						<div id="timeseriesChart"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header card-default">
					scatter Chart
				</div>
				<div class="card-body">
					<div>
						<div id="scatterChart"></div>
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
					<div>
						<div id="pieChart"></div>
					</div>
				</div>
			</div>
		</div>
			<div class="col-md-6">
			<div class="card">
				<div class="card-header card-default">
					Bar type chart
				</div>
				<div class="card-body">
					<div>
						<div id="stocked"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="card">
				<div class="card-header card-default">
					Gauge type chart
				</div>
				<div class="card-body">
					<div>
						<div id="gauge"></div>
					</div>
				</div>
			</div>
		</div>
			<div class="col-md-8">
			<div class="card">
				<div class="card-header card-default">
					donut type chart
				</div>
				<div class="card-body">
					<div>
						<div id="donut"></div>
					</div>
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

<!-- Chart C3 -->
<link href="{{ du_asset( 'layout-5/lib/chart-c3/c3.min.css' ) }}" rel="stylesheet">



@endsection


@section('footer-assets')


<!-- Chart C3 -->
<script src="{{ du_asset( 'layout-5/lib/chart-c3/d3.min.js' ) }}"></script>
<script src="{{ du_asset( 'layout-5/lib/chart-c3/c3.min.js' ) }}"></script>
<script src="{{ du_asset( 'layout-5/js/chart-c3.custom.js' ) }}"></script>


@endsection
