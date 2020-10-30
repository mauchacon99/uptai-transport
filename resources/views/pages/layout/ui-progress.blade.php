@extends('ducor::layouts.layout-5')


@section('pageTitle', 'FixedPlus - Laravel Admin Dashboard Template')


@section('breadcrumb')
		
        <div class="row page-header">
			<div class="col-lg-6 align-self-center ">
			   <h2>Bootstrap Progress</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">UI Elements</a></li>
					<li class="breadcrumb-item active">Bootstrap Progress</li>
				</ol>
			</div>
		</div>

        

@endsection


@section('content')


        <!-- ============================================================== -->
		<!-- 						Content Start	 						-->
		<!-- ============================================================== -->

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-default">
                            Basic Example
                        </div>
                        <div class="card-body">
							<div class="progress-info text-muted">Current Status <span class="float-right">25%</span></div>
                            <div class="progress margin-b-20">
							  <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="progress-info text-muted">TaskLists <span class="float-right">50%</span></div>
							<div class="progress margin-b-20">
							  <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="progress-info text-muted">To Do List <span class="float-right">75%</span></div>
							<div class="progress margin-b-20">
							  <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="progress-info text-muted">Bugs <span class="float-right">85%</span></div>
							<div class="progress margin-b-20">
							  <div class="progress-bar bg-danger" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="progress-info text-muted">Completed <span class="float-right">100%</span></div>
							<div class="progress">
							  <div class="progress-bar btn-indigo" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
                        </div>
                    </div>
                </div>
				<div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-default">
                            Basic Example
                        </div>
                        <div class="card-body">
							<div class="progress-info text-muted">Current Status <span class="float-right">25%</span></div>
                            <div class="progress margin-b-20">
							  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
							</div>
							<div class="progress-info text-muted">TaskLists <span class="float-right">50%</span></div>
							<div class="progress margin-b-20">
							  <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
							</div>
							<div class="progress-info text-muted">To Do List <span class="float-right">75%</span></div>
							<div class="progress margin-b-20">
							  <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
							</div>
							<div class="progress-info text-muted">Bugs <span class="float-right">85%</span></div>
							<div class="progress margin-b-20">
							  <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
							</div>
							<div class="progress-info text-muted">Completed <span class="float-right">100%</span></div>
							<div class="progress">
							  <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
							</div>
                        </div>
                    </div>
                </div>
			</div>
			
			<div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-default">
                            Animated Example
                        </div>
                        <div class="card-body">
							<div class="progress-info text-muted">Current Status <span class="float-right">25%</span></div>
                            <div class="progress margin-b-20">
							  <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="progress-info text-muted">TaskLists <span class="float-right">50%</span></div>
							<div class="progress margin-b-20">
							  <div class="progress-bar bg-info progress-bar-striped progress-bar-animated" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="progress-info text-muted">To Do List <span class="float-right">75%</span></div>
							<div class="progress margin-b-20">
							  <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="progress-info text-muted">Bugs <span class="float-right">85%</span></div>
							<div class="progress margin-b-20">
							  <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="progress-info text-muted">Completed <span class="float-right">100%</span></div>
							<div class="progress">
							  <div class="progress-bar btn-indigo progress-bar-striped progress-bar-animated" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
                        </div>
                    </div>
                </div>
				<div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-default">
                            Animated Example
                        </div>
                        <div class="card-body">
							<div class="progress-info text-muted">Current Status <span class="float-right">25%</span></div>
                            <div class="progress margin-b-20">
							  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
							</div>
							<div class="progress-info text-muted">TaskLists <span class="float-right">50%</span></div>
							<div class="progress margin-b-20">
							  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
							</div>
							<div class="progress-info text-muted">To Do List <span class="float-right">75%</span></div>
							<div class="progress margin-b-20">
							  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
							</div>
							<div class="progress-info text-muted">Bugs <span class="float-right">85%</span></div>
							<div class="progress margin-b-20">
							  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
							</div>
							<div class="progress-info text-muted">Completed <span class="float-right">100%</span></div>
							<div class="progress">
							  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
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
