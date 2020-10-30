@extends('ducor::layouts.layout-5')


@section('pageTitle', 'FixedPlus - Laravel Admin Dashboard Template')


@section('breadcrumb')

					
            <div class="row page-header"><div class="col-lg-6 align-self-center ">
			  <h2>Sparkline Charts</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Charts</a></li>
					<li class="breadcrumb-item active">Sparkline Charts</li>		
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
                           Inline charts
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered white-bg">
                    <thead>
                    <tr>
                        <th>Graph</th>
                        <th>Type</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td>
                            <span id="sparkline1"></span>
                        </td>
                        <td>
                            Inline line chart
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span id="sparkline2"></span>
                        </td>
                        <td>
                            Bar chart
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span id="sparkline3"></span>
                        </td>
                        <td>
                            Pie chart
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span id="sparkline4"></span>
                        </td>
                        <td>
                            Long inline chart
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span id="sparkline5"></span>
                        </td>
                        <td>
                            Tristate chart
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span id="sparkline6"></span>
                        </td>
                        <td>
                            Discrete chart
                        </td>
                    </tr>
                    </tbody>
                </table>
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



        <!-- Sparkline Chart-->
        <script src="{{ du_asset( 'layout-5/lib/sparkline/jquery.sparkline.min.js' ) }}"></script>
        <script src="{{ du_asset( 'layout-5/js/sparkline.custom.js' ) }}"></script>


@endsection
