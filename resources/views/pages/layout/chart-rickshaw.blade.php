@extends('ducor::layouts.layout-5')


@section('pageTitle', 'FixedPlus - Laravel Admin Dashboard Template')


@section('breadcrumb')
	<div class="row page-header"><div class="col-lg-6 align-self-center ">
		<h2>Chart Rickshaw</h2>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item"><a href="#">Charts</a></li>
			<li class="breadcrumb-item active">Chart Rickshaw</li>		
		</ol></div></div>
	

@endsection


@section('content')



<!-- ============================================================== -->
<!-- 						Content End		 						-->
<!-- ============================================================== -->




	<div class="row">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header card-default">
					Area chart
				</div>
				<div class="card-body">
					<div>
						<div id="area-chart" class="rickshaw-graph"></div>
					</div>
				</div>
			</div>
		</div>
			<div class="col-md-6">
			<div class="card">
				<div class="card-header card-default">
					Bar chart
				</div>
				<div class="card-body">
					<div>
						<div id="bar-chart" class="rickshaw-graph"></div>
					</div>
				</div>
			</div>
		</div>
	</div>  
	<div class="row">
		<div class="col-md-4">
			<div class="card">
				<div class="card-header card-default">
					Line chart
				</div>
				<div class="card-body">
					<div>
						<div id="line-chart" class="rickshaw-graph"></div>
					</div>
				</div>
			</div>
		</div>
			<div class="col-md-8">
			<div class="card">
				<div class="card-header card-default">
					Scatterplot chart
				</div>
				<div class="card-body">
					<div>
						<div id="scatterplot-chart" class="rickshaw-graph"></div>
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



<!-- Rickshaw Chart -->
<script src="{{ du_asset( 'layout-5/lib/rickshaw/d3.v3.js' ) }}"></script>
<script src="{{ du_asset( 'layout-5/lib/rickshaw/rickshaw.min.js' ) }}"></script>
<script src="{{ du_asset( 'layout-5/js/rickshaw.custom.js' ) }}"></script>


@endsection
