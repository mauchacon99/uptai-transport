@extends('ducor::layouts.layout-5')


@section('pageTitle', 'FixedPlus - Laravel Admin Dashboard Template')


@section('breadcrumb')

            <div class="row page-header"><div class="col-lg-6 align-self-center ">
			  <h2>Morris Charts</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Charts</a></li>
					<li class="breadcrumb-item active">Morris Charts</li>		
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
                            Line chart
                        </div>
                        <div class="card-body">
                            <div class="morris-chart-content">
                                 <div id="morris-line-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
                  <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-default">
                            Bar chart example
                        </div>
                        <div class="card-body">
                            <div class="morris-chart-content">
                                 <div id="morris-bar-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                        <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-default">
                            Donut chart
                        </div>
                        <div class="card-body">
                            <div class="morris-chart-content">
                                 <div id="morris-donut-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-default">
                            Area chart
                        </div>
                        <div class="card-body">
                            <div class="morris-chart-content">
                                 <div id="morris-area-chart"></div>
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
	   <!-- Morris Chart -->
	   <link href="{{ du_asset( 'layout-5/lib/morris/morris-0.4.3.min.css' ) }}" rel="stylesheet">
		

@endsection


@section('footer-assets')



        <!-- Morris -->
		<script src="{{ du_asset( 'layout-5/lib/morris/raphael-2.1.0.min.js' ) }}"></script>
		<script src="{{ du_asset( 'layout-5/lib/morris/morris.js' ) }}"></script>
        <script src="{{ du_asset( 'layout-5/js/morris.custom.js' ) }}"></script>

@endsection
