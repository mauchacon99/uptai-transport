@extends('ducor::layouts.layout-5')


@section('pageTitle', 'FixedPlus - Laravel Admin Dashboard Template')


@section('breadcrumb')

				
            <div class="row page-header"><div class="col-lg-6 align-self-center ">
			  <h2>Google Maps</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Maps</a></li>
					<li class="breadcrumb-item active">Google Maps</li>		
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
                            Basic Map 
                        </div>
                        <div class="card-body">
                            <div id="gmaps-simple" style="width: 100%;height: 350px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-default">
                            Marker Map
                        </div>
                        <div class="card-body">
                            <div id="markermap" style="width: 100%;height: 350px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">            
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-default">
                            Polygon Map
                        </div>
                        <div class="card-body">
                            <div id="polymap" style="width: 100%;height: 350px;"></div>
                        </div>
                    </div>
                </div>
            </div>
              <div class="row">            
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-default">
                            Routes Map
                        </div>
                        <div class="card-body">
                             <div id="routesmap" style="width: 100%;height: 350px;"></div>
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


        <!-- Map -->
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="{{ du_asset( 'layout-5/lib/google-map/gmaps.min.js' ) }}"></script>
        <script src="{{ du_asset( 'layout-5/js/jquery.gmaps.js' ) }}"></script>


@endsection
