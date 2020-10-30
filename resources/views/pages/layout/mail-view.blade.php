@extends('ducor::layouts.layout-5')


@section('pageTitle', 'FixedPlus - Laravel Admin Dashboard Template')


@section('breadcrumb')
		<div class="row page-header">
			  <div class="col-lg-6 align-self-center ">
			  <h2>Mail Detail</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Mailbox</a></li>
					<li class="breadcrumb-item active">Mail Detail</li>
				</ol>
			</div>
		</div>
        

@endsection


@section('content')

		<!-- ============================================================== -->
		<!-- 						Content Start							-->
		<!-- ============================================================== -->

            <div class="row">
                <div class="col-sm-3 mailbox-sidenav">
                    
                    <div class="card">
                        <div class="card-body">
							<div class="clearfix margin-b-10">
								<a href="#" class="btn btn-danger compose btn-block btn-rounded box-shadow">
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
                <div class="col-sm-9">


                    <div class="card">
                        <div class="card-body">
                            <div class="float-right">
                                    <button type="button" class="btn btn-default btn-sm">
                                        <em class="fa fa-print"></em>
                                    </button>
                            </div>
                            <h3 class="text-capitalize font-300">Established fact that a reader...</h3>
                            <hr class="clearfix">
                            <div class="media margin-b-20">

                                <a class="float-left" href="#"><img class="media-object rounded-circle" src="{{ du_asset( 'layout-5/img/avtar-2.png' ) }}" width="40" alt=""> </a>
                                <div class="media-body margin-l-10"> 
									<span class=" float-right">
                                    <a href="mail-compose" class="btn btn-info btn-sm btn-rounded box-shadow">
                                        <em class="fa fa-reply"></em> Reply
                                    </a>
                                    </span>
                                    <h4 class="text-danger font-300 margin-b-0">John Doe</h4>
                                    <small class="text-muted"> demo@domain.com <strong>To Me</strong> 13:30 - 23 September 2018</small> 
								</div>
                            </div>

                            <p>
                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. 
                            </p>
                            <p>
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                            </p>
                            <p>
                                Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.
                            </p>
                            <hr>
                            <div class="inbox-attachments margin-b-20">
                                <span><i class="fa fa-paperclip margin-r-10 "></i> Attachments (3)</span>
                            </div>
                            <div class="clearfix row">
                                <div class="col-sm-2">
                                    <div class="attachment-box">
                                        <img src="{{ du_asset( 'layout-5/img/gallery/1s.jpg' ) }}" alt="" class="img-fluid rounded">  
                                        <div class="attachment-overlay">
                                            <a href="#"><i class="fa fa-download"></i></a>
                                        </div>
                                    </div>                                    
                                </div>
                                  <div class="col-sm-2">
                                    <div class="attachment-box">
                                        <img src="{{ du_asset( 'layout-5/img/gallery/2s.jpg' ) }}" alt="" class="img-fluid rounded">  
                                        <div class="attachment-overlay">
                                            <a href="#"><i class="fa fa-download"></i></a>
                                        </div>
                                    </div>                                    
                                </div>
                                  <div class="col-sm-2">
                                    <div class="attachment-box">
                                        <img src="{{ du_asset( 'layout-5/img/gallery/3s.jpg' ) }}" alt="" class="img-fluid rounded">  
                                        <div class="attachment-overlay">
                                            <a href="#"><i class="fa fa-download"></i></a>
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

@endsection


@section('footer-assets')


@endsection
