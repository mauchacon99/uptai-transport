@extends('ducor::layouts.layout-5')


@section('pageTitle', 'FixedPlus - Laravel Admin Dashboard Template')


@section('breadcrumb')

		
        <div class="row page-header">
			  <div class="col-lg-6 align-self-center ">
			  <h2>Inbox</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Mailbox</a></li>
					<li class="breadcrumb-item active">Inbox</li>
				</ol>
			</div>
		</div>

@endsection


@section('content')



        <!-- ============================================================== -->
		<!-- 						Content Start	 						-->
		<!-- ============================================================== -->

        

            <div class="row">
                <div class="col-md-3 mailbox-sidenav">
                 
                    <div class="card">
                        <div class="card-body">
							<div class="clearfix margin-b-10">
								<a href="#" class="btn btn-danger compose btn-block box-shadow btn-rounded">
									<em class="fa fa-pencil"></em>
									<span>Compose</span>
								</a>
							</div>
                            <ul class="nav nav-pills nav-stacked flex-column">
                                <li class="side-nav-header">
                                    <small class="text-muted">Mailbox</small>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">
                                        <span class="badge badge-success float-right mt-1">18</span>
                                        <em class="fa fa-inbox"></em>
                                        <span>Inbox</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <em class="fa fa-star"></em>
                                        <span>Starred</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <em class="fa fa-paper-plane-o"></em>
                                        <span>Sent</span>
                                    </a>
                                </li>
                                <li class="nav-item" >
                                    <a class="nav-link" href="#">
                                        <span class="badge badge-success float-right mt-1">8</span>
                                        <em class="fa fa-edit"></em>
                                        <span>Draft</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <em class="fa fa-trash"></em>
                                        <span>Trash</span>
                                    </a>
                                </li>

                                <li class="side-nav-header">
                                    <small class="text-muted">Labels</small>
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
                <div class="col-md-9">
                   
                    <div class="card">
                        
						<div class="card-header card-default">
                            <div class="row">
                                <div class="col-md-6">
                                    Inbox
                                </div>
                                <div class="col-md-6">
                                    <div class="card-search">
                                        <form action="#">                                      
                                            <input type="text" class="form-control" placeholder="Search inbox..." name="s">                                          
                                            <span class="fa fa-search"></span>                                                                               
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
						
						<div class="card-body">
						 <div class="clearfix margin-b-10 mail-right-buttons">
                        <div class="btn-group float-left">
                            <button type="button" class="btn btn-default btn-sm">
                                <em class="fa fa-mail-reply"></em>
                            </button>
                            <button type="button" class="btn btn-default btn-sm">
                                <em class="fa fa-mail-reply-all"></em>
                            </button>
                            <button type="button" class="btn btn-default btn-sm">
                                <em class="fa fa-mail-forward"></em>
                            </button>
                        </div>
                        <div class="btn-group float-right">
                            <button type="button" class="btn btn-default btn-sm">
                                <em class="fa fa-exclamation"></em>
                            </button>
                            <button type="button" class="btn btn-default btn-sm">
                                <em class="fa fa-times "></em>
                            </button>
                        </div>
                    </div>

                            <div class="table-responsive">
                                <table class="table table-hover table-maillist">
                                    <tr>
                                        <td>
                                            <a class="float-left" href="#"><img class="media-object rounded-circle" src="{{ du_asset( 'layout-5/img/avtar-1.png' ) }}" width="40" alt=""> </a>
                                        </td>
                                        <td><strong><a href="mail-view" class="color-info">John Doe</a></strong></td>
                                        <td>
                                            <a href="mail-view">At vero eos et accusamus et iusto odio dignissimos...</a>
                                        </td>
                                        <td class="mail-date">8:30 pm</td>
                                    </tr>
                                    <tr>
                                        <td>
                                             <a class="float-left" href="#"><img class="media-object rounded-circle" src="{{ du_asset( 'layout-5/img/avtar-2.png' ) }}" width="40" alt=""> </a>
                                        </td>
                                        <td><a href="mail-view" class="color-info">Govinda Doe</a></td>
                                        <td>
                                            <a href="mail-view">Accusamus et iusto odio dignissimos...</a>
                                        </td>
                                        <td class="mail-date">Sept 10</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="float-left" href="#"><img class="media-object rounded-circle" src="{{ du_asset( 'layout-5/img/avtar-3.png' ) }}" width="40" alt=""> </a>
                                        </td>
                                        <td><a href="mail-view" class="color-info">Megan Doe</a></td>
                                        <td>
                                            <a href="mail-view">Checkout the new items...</a>
                                        </td>
                                        <td class="mail-date">Sept 10</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="float-left" href="#"><img class="media-object rounded-circle" src="{{ du_asset( 'layout-5/img/avtar-4.png' ) }}" width="40" alt=""> </a>
                                        </td>
                                        <td><a href="mail-view" class="color-info">Hritik Doe</a></td>
                                        <td>
                                            <a href="mail-view">John Doe Mention you in a tweet...</a>
                                        </td>
                                        <td class="mail-date">Sept 10</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="float-left" href="#"><img class="media-object rounded-circle" src="{{ du_asset( 'layout-5/img/avtar-5.png' ) }}" width="40" alt=""> </a>
                                        </td>
                                        <td><strong><a href="mail-view" class="color-info">Bianca Doe</a></strong></td>
                                        <td>
                                            <a href="mail-view">What about assan new admin...</a>
                                        </td>
                                        <td class="mail-date">Sept 9</td>
                                    </tr>
									
									<tr>
                                        <td>
                                            <a class="float-left" href="#"><img class="media-object rounded-circle" src="{{ du_asset( 'layout-5/img/avtar-1.png' ) }}" width="40" alt=""> </a>
                                        </td>
                                        <td><strong><a href="mail-view" class="color-info">John Doe</a></strong></td>
                                        <td>
                                            <a href="mail-view">At vero eos et accusamus et iusto odio dignissimos...</a>
                                        </td>
                                        <td class="mail-date">Sept 9</td>
                                    </tr>
                                    <tr>
                                        <td>
                                             <a class="float-left" href="#"><img class="media-object rounded-circle" src="{{ du_asset( 'layout-5/img/avtar-2.png' ) }}" width="40" alt=""> </a>
                                        </td>
                                        <td><a href="mail-view" class="color-info">Govinda Doe</a></td>
                                        <td>
                                            <a href="mail-view">Accusamus et iusto odio dignissimos...</a>
                                        </td>
                                        <td class="mail-date">Sept 8</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="float-left" href="#"><img class="media-object rounded-circle" src="{{ du_asset( 'layout-5/img/avtar-3.png' ) }}" width="40" alt=""> </a>
                                        </td>
                                        <td><a href="mail-view" class="color-info">Megan Doe</a></td>
                                        <td>
                                            <a href="mail-view">Checkout the new items...</a>
                                        </td>
                                        <td class="mail-date">Sept 7</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="float-left" href="#"><img class="media-object rounded-circle" src="{{ du_asset( 'layout-5/img/avtar-4.png' ) }}" width="40" alt=""> </a>
                                        </td>
                                        <td><a href="mail-view" class="color-info">Hritik Doe</a></td>
                                        <td>
                                            <a href="mail-view">John Doe Mention you in a tweet...</a>
                                        </td>
                                        <td class="mail-date">Sept 6</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="float-left" href="#"><img class="media-object rounded-circle" src="{{ du_asset( 'layout-5/img/avtar-5.png' ) }}" width="40" alt=""> </a>
                                        </td>
                                        <td><strong><a href="mail-view" class="color-info">Bianca Doe</a></strong></td>
                                        <td>
                                            <a href="mail-view">What about assan new admin...</a>
                                        </td>
                                        <td class="mail-date">Sept 5</td>
                                    </tr>
                                 
                                </table>

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
