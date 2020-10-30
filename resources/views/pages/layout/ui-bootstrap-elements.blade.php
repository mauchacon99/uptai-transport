@extends('ducor::layouts.layout-5')


@section('pageTitle', 'FixedPlus - Laravel Admin Dashboard Template')


@section('breadcrumb')

		
		<div class="row page-header">
			<div class="col-lg-6 align-self-center ">
			  <h2>Bootstrap UI</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item">UI Elements</li>
					<li class="breadcrumb-item active">Bootstrap UI</li>
				</ol>
			</div>
		</div>
		
        
@endsection


@section('content')


     

        <!-- ============================================================== -->
		<!-- 						Content Start	 						-->
		<!-- ============================================================== -->


            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
							  <div class="card-header card-default">
								Badges
								</div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                        <h1>Example heading <span class="badge badge-primary">New</span></h1>
										<h2>Example heading <span class="badge badge-indigo">New</span></h2>
										<h3>Example heading <span class="badge badge-teal">New</span></h3>
										<h4>Example heading <span class="badge badge-success">New</span></h4>
										<h5>Example heading <span class="badge badge-danger">New</span></h5>
										<h6>Example heading <span class="badge badge-warning">New</span></h6>   
                                        </div>
                                        <div class="col-sm-3">
										<h5><small>Contextual variations</small></h5>
										<p class="text-muted">Add any of the below mentioned modifier classes to change the appearance of a badge.</p>
										    <span class="badge badge-default">Default</span>
											<span class="badge badge-primary">Primary</span>
											<span class="badge badge-success">Success</span>
											<span class="badge badge-info">Info</span>
											<span class="badge badge-warning">Warning</span>
											<span class="badge badge-danger">Danger</span>
                                        </div>
										<div class="col-sm-3">
											<h5><small>Pill badges</small></h5>
											<p class="text-muted">Use the <code>.badge-pill</code> modifier class to make badges more rounded (with a larger <code>border-radius</code> and additional horizontal <code>padding</code>). Useful if you miss the badges from v3.</p>
											<span class="badge badge-pill badge-default">Default</span>
											<span class="badge badge-pill badge-primary">Primary</span>
											<span class="badge badge-pill badge-success">Success</span>
											<span class="badge badge-pill badge-info">Info</span>
											<span class="badge badge-pill badge-warning">Warning</span>
											<span class="badge badge-pill badge-danger">Danger</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
			<div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
							  <div class="card-header card-default">
								Breadcrumb
								</div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6">
											<ol class="breadcrumb">
											  <li class="breadcrumb-item active">Home</li>
											</ol>
											<ol class="breadcrumb">
											  <li class="breadcrumb-item"><a href="#">Home</a></li>
											  <li class="breadcrumb-item active">Library</li>
											</ol>
											<ol class="breadcrumb">
											  <li class="breadcrumb-item"><a href="#">Home</a></li>
											  <li class="breadcrumb-item"><a href="#">Library</a></li>
											  <li class="breadcrumb-item active">Data</li>
											</ol>
											<ol class="breadcrumb">
											  <li class="breadcrumb-item"><a href="#">Home</a></li>
											  <li class="breadcrumb-item"><a href="#">Library</a></li>
											  <li class="breadcrumb-item"><a href="#">Data</a></li>
											   <li class="breadcrumb-item active">Bootstrap</li>
											</ol>
                                        </div>
                                        <div class="col-sm-6">
											<ol class="breadcrumb colored bg-primary">
											  <li class="breadcrumb-item active">Home</li>
											</ol>
											<ol class="breadcrumb colored bg-success">
											  <li class="breadcrumb-item"><a href="#">Home</a></li>
											  <li class="breadcrumb-item active">Library</li>
											</ol>
											<ol class="breadcrumb colored bg-warning">
											  <li class="breadcrumb-item"><a href="#">Home</a></li>
											  <li class="breadcrumb-item"><a href="#">Library</a></li>
											  <li class="breadcrumb-item active">Data</li>
											</ol>
											<ol class="breadcrumb colored bg-danger">
											  <li class="breadcrumb-item"><a href="#">Home</a></li>
											  <li class="breadcrumb-item"><a href="#">Library</a></li>
											  <li class="breadcrumb-item"><a href="#">Data</a></li>
											   <li class="breadcrumb-item active">Bootstrap</li>
											</ol>
                                        </div>
									
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
			<div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
							  <div class="card-header card-default">
								Pagination
								</div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-4">
											<h5><small>Simple pagination</small></h5>
											<nav aria-label="Page navigation example">
											  <ul class="pagination">
												<li class="page-item"><a class="page-link" href="#">Previous</a></li>
												<li class="page-item"><a class="page-link" href="#">1</a></li>
												<li class="page-item"><a class="page-link" href="#">2</a></li>
												<li class="page-item"><a class="page-link" href="#">3</a></li>
												<li class="page-item"><a class="page-link" href="#">Next</a></li>
											  </ul>
											</nav> 
                                        </div>
                                        <div class="col-sm-3">
											<h5><small>Working with icons</small></h5>
											<nav aria-label="Page navigation example">
											  <ul class="pagination">
												<li class="page-item">
												  <a class="page-link" href="#" aria-label="Previous">
													<span aria-hidden="true">&laquo;</span>
													<span class="sr-only">Previous</span>
												  </a>
												</li>
												<li class="page-item"><a class="page-link" href="#">1</a></li>
												<li class="page-item"><a class="page-link" href="#">2</a></li>
												<li class="page-item"><a class="page-link" href="#">3</a></li>
												<li class="page-item">
												  <a class="page-link" href="#" aria-label="Next">
													<span aria-hidden="true">&raquo;</span>
													<span class="sr-only">Next</span>
												  </a>
												</li>
											  </ul>
											</nav>                                      
										</div>
										<div class="col-sm-3">
											<h5><small>Disabled and active states</small></h5>
											
											<nav aria-label="...">
											  <ul class="pagination">
												<li class="page-item disabled">
												  <a class="page-link" href="#" tabindex="-1">Previous</a>
												</li>
												<li class="page-item"><a class="page-link" href="#">1</a></li>
												<li class="page-item active">
												  <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
												</li>
												<li class="page-item"><a class="page-link" href="#">3</a></li>
												<li class="page-item">
												  <a class="page-link" href="#">Next</a>
												</li>
											  </ul>
											</nav>
                                        </div>
                                    </div>
                                </div>
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
		<!-- Jquery UI -->
        <link href="{{ du_asset( 'layout-5/lib/jquery-ui/jquery-ui.css' ) }}" rel="stylesheet">
		
@endsection


@section('footer-assets')


        <!-- Jquery UI -->
        <script src="{{ du_asset( 'layout-5/lib/jquery-ui/jquery-ui.min.js' ) }}"></script>
        <script src="{{ du_asset( 'layout-5/js/jquery.ui.custom.js' ) }}"></script>

@endsection
