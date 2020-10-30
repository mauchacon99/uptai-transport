@extends('ducor::layouts.layout-5')


@section('pageTitle', 'FixedPlus - Laravel Admin Dashboard Template')


@section('breadcrumb')
	
            <div class="row page-header"><div class="col-lg-6 align-self-center ">
			  <h2>Vector Maps</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Maps</a></li>
					<li class="breadcrumb-item active">Vector Maps</li>		
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
                            World Map 
                        </div>
                        <div class="card-body">
                            <div id="world-map-markers" style="height: 500px"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-default">
                            USA Map
                        </div>
                        <div class="card-body">
                            <div id="usa" style="height: 400px"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-default">
                            Australia Map
                        </div>
                        <div class="card-body">
                            <div id="australia" style="height: 400px"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-default">
                            UK Map
                        </div>
                        <div class="card-body">
                            <div id="uk" style="height: 400px"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card ">
                        <div class="card-header card-default">
                            India Map
                        </div>
                        <div class="card-body">
                            <div id="india" style="height: 400px"></div>
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

        <!-- Vector Map -->
        <link href="{{ du_asset( 'layout-5/lib/vectormap/jquery-jvectormap-2.0.2.css' ) }}" rel="stylesheet" />
		

@endsection


@section('footer-assets')
        <!-- Vector Maps -->
        <script src="{{ du_asset( 'layout-5/lib/vectormap/jquery-jvectormap-2.0.2.min.js' ) }}"></script>
        <script src="{{ du_asset( 'layout-5/lib/vectormap/jquery-jvectormap-world-mill-en.js' ) }}"></script>
        <script src="{{ du_asset( 'layout-5/lib/vectormap/jquery-jvectormap-in-mill.js' ) }}"></script>
        <script src="{{ du_asset( 'layout-5/lib/vectormap/jquery-jvectormap-us-aea-en.js' ) }}"></script>
        <script src="{{ du_asset( 'layout-5/lib/vectormap/jquery-jvectormap-uk-mill-en.js' ) }}"></script>
        <script src="{{ du_asset( 'layout-5/lib/vectormap/jquery-jvectormap-au-mill.js' ) }}"></script>
        <script src="{{ du_asset( 'layout-5/js/jvectormap.custom.js' ) }}"></script>


@endsection
