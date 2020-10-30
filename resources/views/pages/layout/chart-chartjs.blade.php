@extends('ducor::layouts.layout-5')


@section('pageTitle', 'FixedPlus - Laravel Admin Dashboard Template')


@section('breadcrumb')

					
            <div class="row page-header"><div class="col-lg-6 align-self-center ">
			  <h2>ChartJs</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Charts</a></li>
					<li class="breadcrumb-item active">ChartJs</li>		
				</ol></div></div>
@endsection


@section('content')


        <!-- ============================================================== -->
		<!-- 						Content Start	 						-->
		<!-- ============================================================== -->

           
        

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-default">
                           Line Chart
                        </div>
                        <div class="card-body">
                            <div>
                                <canvas id="linechart" height="140"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-default">
                           Bar Chart
                        </div>
                        <div class="card-body">
                            <div>
                                <canvas id="barchart" height="140"></canvas>
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
                                <canvas id="piechart" height="140"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-default">
                            Bar Chart Horizontal
                        </div>
                        <div class="card-body">
                            <div>
                                <canvas id="bar-chart-horizontal" height="140"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
			<div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-default">
                            Polar Area Chart
                        </div>
                        <div class="card-body">
                            <div>
                                <canvas id="polar-chart" height="140"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-default">
                            Radar Chart
                        </div>
                        <div class="card-body">
                            <div>
                                <canvas id="radar-chart" height="140"></canvas>
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


        <!-- Chart Js -->
        <!--Chart Script-->
        <script src="{{ du_asset( 'layout-5/lib/chartjs/chart.min.js' ) }}"></script>
		<script src="{{ du_asset( 'layout-5/lib/chartjs/chartjs-sass.js' ) }}"></script>
        <script src="{{ du_asset( 'layout-5/js/chartJs.custom.js' ) }}"></script>
@endsection
