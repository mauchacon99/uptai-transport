@extends('ducor::layouts.layout-5')


@section('pageTitle', 'FixedPlus - Laravel Admin Dashboard Template')


@section('breadcrumb')

		<div class="row page-header">
			<div class="col-lg-6 align-self-center ">
				<h2>Alertify</h2>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item"><a href="#">UI Elements</a></li>
						<li class="breadcrumb-item active">Alertify</li>
					</ol>
			</div>
		</div>
			
@endsection


@section('content')

        
		<!-- ============================================================== -->
		<!-- 						Content Start	 						-->
		<!-- ============================================================== -->

        
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-header card-default">
                            Basic example
                        </div>
                        <div class="card-body">
                            <button type="button" id="alertify-basic" class="btn btn-default">Show Me</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-header card-default">
                            Multiple Alerts
                        </div>
                        <div class="card-body">
                            <button type="button" id="alertify-multi" class="btn btn-default">Show Me</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-header card-default">
                            Multiple Alerts
                        </div>
                        <div class="card-body">
                            <button type="button" id="alertify-licence-agree" class="btn btn-default">Show Me</button>
                            <div id="la" style="display: none;">

                                The MIT License (MIT)

                                Copyright (c) 2014 Mohammad Younes

                                Permission is hereby granted, free of charge, to any person obtaining a copy
                                of this software and associated documentation files (the "Software"), to deal
                                in the Software without restriction, including without limitation the rights
                                to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
                                copies of the Software, and to permit persons to whom the Software is
                                furnished to do so, subject to the following conditions:

                                The above copyright notice and this permission notice shall be included in all
                                copies or substantial portions of the Software.

                                THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
                                IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
                                FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
                                AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
                                LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
                                OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
                                SOFTWARE.
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

		<!-- Alertify -->
        <link href="{{ du_asset( 'layout-5/lib/alertify/css/alertify.min.css' ) }}" rel="stylesheet">
        <link href="{{ du_asset( 'layout-5/lib/alertify/css/themes/alertify-bootstrap.min.css' ) }}" rel="stylesheet">
		

@endsection


@section('footer-assets')

		<!-- Alertify -->
        <script src="{{ du_asset( 'layout-5/lib/alertify/alertify.min.js' ) }}"></script>
        <script src="{{ du_asset( 'layout-5/js/alertify.custom.js' ) }}"></script>


@endsection
