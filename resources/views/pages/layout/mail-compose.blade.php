@extends('ducor::layouts.layout-5')


@section('pageTitle', 'FixedPlus - Laravel Admin Dashboard Template')


@section('breadcrumb')

					
        <div class="row page-header">
			<div class="col-lg-6 align-self-center ">
			  <h2>Compose</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Mailbox</a></li>
					<li class="breadcrumb-item active">Compose</li>
				</ol>
			</div>
		</div>
        
@endsection


@section('content')


        <!-- ============================================================== -->
		<!-- 						Content Start	 						-->
		<!-- ============================================================== -->

            <div class="row">
                <div class="col-sm-3 mailbox-sidenav">
                    <div class="clearfix margin-b-10">
                        <a href="#" class="btn btn-danger compose btn-block">
                            <em class="fa fa-pencil"></em>
                            <span>Compose</span>
                        </a>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-pills nav-stacked flex-column">
                                <li class="side-nav-header">
                                    <small class="text-muted">Mailbox</small>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">
                                        <span class="mt-1 badge badge-success float-right">18</span>
                                        <em class="fa fa-inbox"></em>
                                        <span>Inbox</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span class="mt-1 badge badge-success float-right">3</span>
                                        <em class="fa fa-star"></em>
                                        <span>Starred</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span class="mt-1 badge badge-success float-right">5</span>
                                        <em class="fa fa-paper-plane-o"></em>
                                        <span>Sent</span>
                                    </a>
                                </li>
                                <li class="nav-item" >
                                    <a class="nav-link" href="#">
                                        <span class="mt-1 badge badge-success float-right">8</span>
                                        <em class="fa fa-edit"></em>
                                        <span>Draft</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span class="mt-1 badge badge-success float-right">2</span>
                                        <em class="fa fa-trash"></em>
                                        <span>Trash</span>
                                    </a>
                                </li>
                                <li class="side-nav-header">
                                    <small class="text-muted">LABELS</small>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span class="badge badge-danger float-right"></span>
                                        <span>Red</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span class="badge badge-teal float-right"></span>
                                        <span>Teal</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span class="badge badge-info float-right"></span>
                                        <span>Blue</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span class="badge badge-warning float-right"></span>
                                        <span>Yellow</span>
                                    </a>
                                </li>
                            </ul>
							<ul class="list-group list-unstyled">
									<li class="side-nav-header">
                                    <small class="text-muted">Friends</small>
									</li>
									<li class="margin-b-10">
										<a class="media-box" href="#"><span class="float-right"><span class="circle circle-danger circle-lg"></span></span> 
										<span class="float-left margin-r-10">
										 <img alt="user" class="media-box-object rounded-circle" src="{{ du_asset( 'layout-5/img/avtar-3.png' ) }}" width="40"></span>
										 <span class="media-box-body"><span class="media-box-heading"><strong>Megan Doe</strong><br>
										<small class="text-muted">Designer</small></span></span></a>
									</li>
									<li class="margin-b-10">
										<a class="media-box" href="#"><span class="float-right"><span class="circle circle-success circle-lg"></span></span> 
										<span class="float-left margin-r-10">
										 <img alt="user" class="media-box-object rounded-circle" src="{{ du_asset( 'layout-5/img/avtar-4.png' ) }}" width="40"></span>
										 <span class="media-box-body"><span class="media-box-heading"><strong>Hritik Doe</strong><br>
										<small class="text-muted">Designer</small></span></span></a>
									</li>
									<li class="margin-b-10">
										<a class="media-box" href="#"><span class="float-right"><span class="circle circle-danger circle-lg"></span></span> 
										 <span class="float-left margin-r-10">
											<img alt="user" class="media-box-object rounded-circle" src="{{ du_asset( 'layout-5/img/avtar-3.png' ) }}" width="40">
										 </span>
										 <span class="media-box-body"><span class="media-box-heading"><strong>Megan Doe</strong><br>
										<small class="text-muted">Designer</small></span></span></a>
									</li>
									<li class="margin-b-10">
										<a class="media-box" href="#"><span class="float-right"><span class="circle circle-success circle-lg"></span></span>
										<span class="float-left margin-r-10">
										 <img alt="user" class="media-box-object rounded-circle" src="{{ du_asset( 'layout-5/img/avtar-4.png' ) }}" width="40">
										 </span>
										 <span class="media-box-body"><span class="media-box-heading"><strong>Hritik Doe</strong><br>
										<small class="text-muted">Designer</small></span></span></a>
									</li>
								</ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9">


                    <div class="card">
                        <div class="card-body mail-compose">
                            <div class="float-right">
                                <button type="button" class="btn btn-default btn-sm">
                                    <em class="fa fa-print"></em>
                                </button>
                            </div>
                            <h3 class="text-capitalize font-300"> Reply</h3>
                            <hr class="clearfix">
                            <form class="form-horizontal" method="get">
                                <div class="form-group">
									<label>To:</label>
                                    <input type="text" class="form-control" value="john.doe@domain.com">
                                </div>
                                <div class="form-group">
									<label>Subject:</label>
                                    <input type="text" class="form-control" value="">
                                </div>
                       
								<div class="form-group">
										<label>Attachments:</label>
										
											<div class="fileinput fileinput-new input-group" data-provides="fileinput">
											  <div class="form-control" data-trigger="fileinput"><span class="fileinput-filename"></span></div>
											  <span class="input-group-addon btn btn-primary btn-file ">
											  <span class="fileinput-new">Select</span>
											  <span class="fileinput-exists">Change</span>
											  <input type="file"  name="image">
											  </span>
											  <a href="#" class="input-group-addon btn btn-danger  hover fileinput-exists" data-dismiss="fileinput">Remove</a>
											</div>
								
									</div>
                            </form>
                            <textarea class="form-control" id="textarea" rows="10" style="height:300px;"></textarea>
                            <div class="mail-body text-right tooltip-demo">
                        <a href="mail-index" class="btn btn-sm btn-primary btn-rounded box-shadow" data-toggle="tooltip" data-placement="top" title="" data-original-title="Send"><i class="fa fa-reply"></i> Send</a>
                        <a href="mail-index" class="btn btn-dark btn-sm btn-rounded box-shadow" data-toggle="tooltip" data-placement="top" title="Discard email"><i class="fa fa-times"></i> Discard</a>
                        <a href="mail-index" class="btn btn-success btn-sm btn-rounded box-shadow" data-toggle="tooltip" data-placement="top" title="Move to draft folder"><i class="fa fa-pencil"></i> Draft</a>
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


		<!-- Wysihtml5 -->
        <link href="{{ du_asset( 'layout-5/lib/wysihtml5/bootstrap-wysihtml5.css' ) }}" rel="stylesheet">
		

@endsection


@section('footer-assets')

        <!-- Wysihtml5 -->
        <script src="{{ du_asset( 'layout-5/lib/wysihtml5/wysihtml5-0.3.0.js' ) }}"></script>
        <script src="{{ du_asset( 'layout-5/lib/wysihtml5/bootstrap-wysihtml5.js' ) }}"></script>
        <script>
            $(document).ready(function () {
                $('#textarea').wysihtml5({});
            });
        </script>


@endsection
