@extends('ducor::layouts.layout-5')


@section('pageTitle', 'FixedPlus - Laravel Admin Dashboard Template')


@section('breadcrumb')

		
        <div class="row page-header">
			<div class="col-lg-6 align-self-center ">
			    <h2>Tooltip & Popovers</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">UI Elements</a></li>
					<li class="breadcrumb-item active">Tooltip & Popovers</li>
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
                            Tooltips
                        </div>
                        <div class="card-body">
                            <div class="buttons">
                                <a href="javascript: void(0);" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Top Align">Top Align</a>
                                <a href="javascript: void(0);" class="btn btn-indigo" data-toggle="tooltip" data-placement="left" title="Left Align">Left Align</a>
                                <a href="javascript: void(0);" class="btn btn-info" data-toggle="tooltip" data-placement="right" title="Right Align">Right Align</a>
                                <a href="javascript: void(0);" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="Bottom Align">Bottom Align</a>                  
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-default">
                           Popovers
                        </div>
                        <div class="card-body">
                              <div class="buttons">
                                <a href="javascript: void(0);" data-content="And here's some amazing content. It's very engaging. Right?" class="btn btn-default" data-toggle="popover" data-placement="top" title="Top Align">Top Align</a>
                                <a href="javascript: void(0);" data-content="And here's some amazing content. It's very engaging. Right?" class="btn btn-success" data-toggle="popover" data-placement="left" title="Left Align">Left Align</a>
                                <a href="javascript: void(0);" data-content="And here's some amazing content. It's very engaging. Right?" class="btn btn-teal" data-toggle="popover" data-placement="right" title="Right Align">Right Align</a>
                                <a href="javascript: void(0);" data-content="And here's some amazing content. It's very engaging. Right?" class="btn btn-warning" data-toggle="popover" data-placement="bottom" title="Bottom Align">Bottom Align</a>                  
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


@endsection
