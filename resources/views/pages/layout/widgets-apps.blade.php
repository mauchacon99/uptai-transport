@extends('ducor::layouts.layout-5')


@section('pageTitle', 'FixedPlus - Laravel Admin Dashboard Template')


@section('breadcrumb')

		<div class="row page-header">
				<div class="col-lg-6 align-self-center ">
				  <h2>Widgets Apps</h2>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item"><a href="#">Widgets</a></li>
						<li class="breadcrumb-item active">Widgets Apps</li>
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
                            Chat
							<p class="text-muted">Lorem ipsum dolor sit amet</p>
                        </div>
						
                        <div class="card-body">
                            <div class="scrollDiv">
                                <ul class="chat-list list-unstyled">
                                    <li class="clearfix chat-element media">
                                        <a href='javascript: void(0);' class="float-left">
                                            <img src="{{ du_asset( 'layout-5/img/avtar-2.png' ) }}" alt="" class="rounded-circle">
                                        </a>
                                        <div class="media-body ">
                                            <div class="speech-box">
                                                <small class="float-right text-primary">1m ago</small>
                                                <strong>John Doe</strong>
                                                <p class="margin-b-0">
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                                </p>
                                                <small class="text-info">Today 12:31 pm - 10.08.2016</small>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="clearfix chat-element right media">
                                        <div class="media-body text-right float-left">
                                            <div class="speech-box">
                                                <strong class="float-left">John Doe</strong>
												<small class="text-right text-primary">1m ago</small>
                                                <p class="margin-b-0 text-left">
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                                </p>
                                                <small class="text-info">Today 12:31 pm - 10.08.2016</small>
                                            </div>
                                        </div>
										<a href='javascript: void(0);' class="float-right">
                                            <img src="{{ du_asset( 'layout-5/img/avtar-2.png' ) }}" alt="" class="rounded-circle">
                                        </a>
                                    </li>
                                    <li class="clearfix chat-element media">
                                        <a href='javascript: void(0);' class="float-left">
                                            <img src="{{ du_asset( 'layout-5/img/avtar-2.png' ) }}" alt="" class="rounded-circle">
                                        </a>
                                        <div class="media-body ">
                                            <div class="speech-box">
                                                <small class="float-right text-primary">1m ago</small>
                                                <strong>John Doe</strong>
                                                <p class="margin-b-0">
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                                </p>
                                                <small class="text-info">Today 12:31 pm - 10.08.2016</small>
                                            </div>
                                        </div>
                                    </li>
									 <li class="clearfix chat-element media">
                                        <a href='javascript: void(0);' class="float-left">
                                            <img src="{{ du_asset( 'layout-5/img/avtar-2.png' ) }}" alt="" class="rounded-circle">
                                        </a>
                                        <div class="media-body ">
                                            <div class="speech-box">
                                                <small class="float-right text-primary">1m ago</small>
                                                <strong>John Doe</strong>
                                                <p class="margin-b-0">
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                                </p>
                                                <small class="text-info">Today 12:31 pm - 10.08.2016</small>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Type your message here...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary"><i class="fa fa-send"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                	<div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
							<div class="row">
                            <div class="col-md-6">
                                Todo List
								<p class="text-muted">Lorem ipsum dolor sit amet</p>
                            </div>
                            <div class="col-md-6">
								<a href="javascript: void(0);" class="btn btn-success btn-border box-shadow btn-circle pull-right"><i class="fa fa-plus"></i></a>
                            </div>
							 </div>
                        </div>
                        <div class="card-body">
                            <div class="scrollDiv">
                                <ul class="todo-list">
                                  <li>
                                       <div class="checkbox checkbox-primary margin-r-5">
											<input id="checkbox1" type="checkbox">
											<label for="checkbox1">Lorem Ipsum is simply dummy text of the printing <small class="label label-info">Today</small></label>
										</div>
                                    </li>
									<li>
                                       <div class="checkbox checkbox-primary margin-r-5">
											<input id="checkbox2" type="checkbox">
											<label for="checkbox2"> Lorem Ipsum is simply dummy text of the printing  dummy text of the printing and typesetting industry. <small class="label label-danger">Yesterday</small></label>
										</div>
                                    </li>
									<li>
                                       <div class="checkbox checkbox-primary margin-r-5">
											<input id="checkbox3" type="checkbox">
											<label for="checkbox3"> Lorem Ipsum is simply dummy text of the printing  dummy text of the <small class="label label-info">1 Week</small></label>
										</div>
                                    </li>
									<li>
                                       <div class="checkbox checkbox-primary margin-r-5">
											<input id="checkbox1" type="checkbox" >
											<label for="checkbox1"> Lorem Ipsum is simply dummy text of the 	<small class="label label-primary"><i class="fa fa-clock-o"></i> 3 Mins</small></label>
										
										</div>
                                    </li>
									<li>
                                       <div class="checkbox checkbox-primary margin-r-5">
											<input id="checkbox4" type="checkbox">
											<label for="checkbox4"> Lorem Ipsum is simply dummy text of the printing  dummy text of the printing<small class="label label-warning">2 Week</small></label>
										</div>
                                    </li>
                                    <li>
                                       <div class="checkbox checkbox-primary margin-r-5">
											<input id="checkbox5" type="checkbox">
											<label for="checkbox5"> Lorem Ipsum is simply dummy text of the<small class="label label-info">Today</small></label>
										</div>
                                    </li>
                                   <li>
                                       <div class="checkbox checkbox-primary margin-r-5">
											<input id="checkbox1" type="checkbox">
											<label for="checkbox1"> Lorem Ipsum is simply dummy text of the printing  dummy text of<small class="label label-danger">Yesterdat</small></label>
										</div>
                                    </li>
									<li>
                                       <div class="checkbox checkbox-primary margin-r-5">
											<input id="checkbox4" type="checkbox" >
											<label for="checkbox4"> Lorem Ipsum is simply dummy text of the printing  dummy text of the printing<small class="label label-info"><i class="fa fa-clock-o"></i> 3 Mins</small></label>
										</div>
                                    </li>
                                    <li>
                                       <div class="checkbox checkbox-primary margin-r-5">
											<input id="checkbox5" type="checkbox" >
											<label for="checkbox5"> Lorem Ipsum is simply dummy text of the<small class="label label-danger"><i class="fa fa-clock-o"></i> 1 Week</small></label>
										</div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div class="card-footer">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Add Todo...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        Add</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
				 <div class="col-md-6">
					<div class="card">
					  <div class="card-header">
						Recent Comments
						<p class="text-muted">Latest Comments on users</p>
					  </div>
						<div class="comment-widgets">
						  <div class="d-flex flex-row comment-row">
							<div class="mr-2"><img alt="user" class="rounded-circle" src="{{ du_asset( 'layout-5/img/avtar-1.png' ) }}" width="50"></div>
							<div class="comment-text w-100">
							  <h5>John Doe</h5>
							  <p class="m-b-5">Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>
							  <div class="comment-footer">
								<span class="text-muted pull-right">April 8, 2018</span> 
								<span class="label label-info">Pending</span> 
								<span class="action-icons">
									<a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a> 
									<a href="javascript:void(0)"><i class="ti-check"></i></a>
									<a href="javascript:void(0)"><i class="ti-heart"></i></a>
								</span>
							  </div>
							</div>
						  </div>
						  <div class="d-flex flex-row comment-row active">
							<div class="mr-2">
							  <span class="round"><img alt="user" src="{{ du_asset( 'layout-5/img/avtar-2.png' ) }}" width="50"></span>
							</div>
							<div class="comment-text active w-100">
							  <h5>John Doe</h5>
							  <p class="m-b-5">Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>
							  <div class="comment-footer">
								<span class="text-muted pull-right">April 7, 2018</span> 
								<span class="label label-success">Approved</span> 
								<span class="action-icons">
									<a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a> 
									<a href="javascript:void(0)"><i class="ti-check"></i></a>
									<a href="javascript:void(0)"><i class="ti-heart"></i></a>
								</span>
							  </div>
							</div>
						  </div><!-- Comment Row -->
						  <div class="d-flex flex-row comment-row">
							<div class="mr-2">
							  <span class="round"><img alt="user" src="{{ du_asset( 'layout-5/img/avtar-3.png' ) }}" width="50"></span>
							</div>
							<div class="comment-text w-100">
							  <h5>John Doe</h5>
							  <p class="m-b-5">Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing and type setting industry.</p>
							  <div class="comment-footer">
								<span class="text-muted pull-right">April 6, 2018</span> <span class="label label-danger">Rejected</span> <span class="action-icons"><a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a> <a href="javascript:void(0)"><i class="ti-check"></i></a> <a href="javascript:void(0)"><i class="ti-heart"></i></a></span>
							  </div>
							</div>
						  </div><!-- Comment Row -->
						  <div class="d-flex flex-row comment-row">
							<div class="mr-2">
							  <span class="round"><img alt="user" src="{{ du_asset( 'layout-5/img/avtar-4.png' ) }}" width="50"></span>
							</div>
							<div class="comment-text w-100">
							  <h5>John Doe</h5>
							  <p class="m-b-5">Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>
							  <div class="comment-footer">
								<span class="text-muted pull-right">April 5, 2018</span> <span class="label label-info">Pending</span> <span class="action-icons"><a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a> <a href="javascript:void(0)"><i class="ti-check"></i></a> <a href="javascript:void(0)"><i class="ti-heart"></i></a></span>
							  </div>
							</div>
						  </div>
						  <div class="d-flex flex-row comment-row">
							<div class="mr-2">
							  <span class="round"><img alt="user" src="{{ du_asset( 'layout-5/img/avtar-2.png' ) }}" width="50"></span>
							</div>
							<div class="comment-text active w-100">
							  <h5>John Doe</h5>
							  <p class="m-b-5">Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>
							  <div class="comment-footer">
								<span class="text-muted pull-right">April 7, 2018</span> 
								<span class="label label-success">Approved</span> 
								<span class="action-icons">
									<a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a> 
									<a href="javascript:void(0)"><i class="ti-check"></i></a>
									<a href="javascript:void(0)"><i class="ti-heart"></i></a>
								</span>
							  </div>
							</div>
						  </div>
						</div>
			
					</div>
				</div>
				
				<div class="col-lg-6 col-xlg-9">
                        <div class="card">
							<div class="card-header card-default">
                            Activity Timeline
							<p class="text-muted">Lorem ipsum dolor sit amet</p>
							</div>
                            <div class="card-body">

                                <div class="profiletimeline">
                                    <div class="sl-item">
                                        <div class="sl-left"> <img src="{{ du_asset( 'layout-5/img/avtar-1.png' ) }}" alt="user" class="rounded-circle"> </div>
                                        <div class="sl-right">
                                            <div><a href="#" class="link">John Doe</a> <span class="sl-date">12 minutes ago</span>
                                                <p>assign a new task <a href="#"> Design weblayout</a></p>
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-6 mb-2"><img src="{{ du_asset( 'layout-5/img/gallery/1s.jpg' ) }}" alt="user" class="img-fluid rounded"></div>
                                                    <div class="col-lg-3 col-md-6 mb-2"><img src="{{ du_asset( 'layout-5/img/gallery/2s.jpg' ) }}" alt="user" class="img-fluid rounded"></div>
                                                    <div class="col-lg-3 col-md-6 mb-2"><img src="{{ du_asset( 'layout-5/img/gallery/3s.jpg' ) }}" alt="user" class="img-fluid rounded"></div>
                                                    <div class="col-lg-3 col-md-6 mb-2"><img src="{{ du_asset( 'layout-5/img/gallery/4s.jpg' ) }}" alt="user" class="img-fluid rounded"></div>
                                                </div>
                                                <div class="like-comm">
													<a href="javascript:void(0)" class="link mr-2">385 comment</a> 
													<a href="javascript:void(0)" class="link mr-2"><i class="fa fa-heart text-danger"></i> 174 Love</a> 
												</div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="sl-item">
                                        <div class="sl-left"> <img src="{{ du_asset( 'layout-5/img/avtar-2.png' ) }}" alt="user" class="rounded-circle"> </div>
                                        <div class="sl-right">
                                            <div> <a href="#" class="link">John Doe</a> <span class="sl-date">8 minutes ago</span>
                                                <div class="mt-2 row">
                                                    <div class="col-md-3 col-xs-12"><img src="{{ du_asset( 'layout-5/img/gallery/1s.jpg' ) }}" alt="user" class="img-fluid rounded"></div>
                                                    <div class="col-md-9 col-xs-12">
                                                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. </p> <a href="#" class="btn btn-success box-shadow btn-rounded"> Design weblayout</a></div>
                                                </div>
                                                <div class="like-comm mt-2"> 
												<a href="javascript:void(0)" class="link mr-2">248 comment</a> 
												<a href="javascript:void(0)" class="link mr-2"><i class="fa fa-heart text-danger"></i> 84 Love</a> 
												</div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="sl-item">
                                        <div class="sl-left"> <img src="{{ du_asset( 'layout-5/img/avtar-3.png' ) }}" alt="user"> </div>
                                        <div class="sl-right">
                                            <div><a href="#" class="link">John Doe</a> <span class="sl-date">6 minutes ago</span>
                                                <p class="mt-1"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper </p>
                                            </div>
                                            <div class="like-comm mt-2"> 
											<a href="javascript:void(0)" class="link mr-2">68 comment</a> 
											<a href="javascript:void(0)" class="link mr-2"><i class="fa fa-heart text-danger"></i> 36 Love</a> 
											</div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="sl-item">
                                        <div class="sl-left"> <img src="{{ du_asset( 'layout-5/img/avtar-4.png' ) }}" alt="user" class="rounded-circle"> </div>
                                        <div class="sl-right">
                                            <div><a href="#" class="link">John Doe</a> <span class="sl-date">4 minutes ago</span>
                                                <blockquote class="mt-1">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
           </div>
		   
		   
            <div class="row">
                <div class=" col-md-4 col-xs-12">
                    <div class="card">
                        <div class="card-body text-center">
                            <img alt="profile" class="rounded-circle margin-b-10" src="{{ du_asset( 'layout-5/img/avtar-4.png' ) }}" width="80">
                            <p class="lead margin-b-0">John Doe</p>
                            <p class="text-muted">Administrator</p>
                            <p class="text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
                            <button class="btn btn-primary"><i class="demo-pli-male icon-fw"></i>Follow</button>
                            <hr>
                            <ul class="list-unstyled margin-b-0 text-center row">
                                <li class="col-4">
                                    <span class="font-600">1,345</span>
                                    <p class="text-muted text-sm margin-b-0">Following</p>
                                </li>
                                <li class="col-4">
                                    <span class="font-600">23K</span>
                                    <p class="text-muted text-sm margin-b-0">Followers</p>
                                </li>
                                <li class="col-4">
                                    <span class="font-600">278</span>
                                    <p class="text-muted text-sm margin-b-0">Post</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget text-center bg-indigo">
                        <img alt="Profile Picture" class=" rounded-circle margin-b-10" width="70" src="{{ du_asset( 'layout-5/img/avtar-3.png' ) }}">
                        <h4 class="font-400 margin-b-10">John Doe</h4>
                        <ul class="list-inline text-center margin-b-0">
                            <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="widget white-bg text-center">
                        <img alt="Profile Picture" width="70" class="rounded-circle mar-btm margin-b-10" src="{{ du_asset( 'layout-5/img/avtar-1.png' ) }}">
                        <h4 class="font-400 margin-b-0">John Doe</h4>
                        <p class="text-muted margin-b-10">Web and Graphic designer</p>
                        <div>
                            <button class="btn btn-teal">Follow</button>
                            <button class="btn btn-success">Message</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget padding-0 white-bg">
                        <div class="bg-danger" style="height: 120px"></div>
                        <div class="thumb-over">
                            <img src="{{ du_asset( 'layout-5/img/avtar-5.png' ) }}" alt="" width="100" class="rounded-circle">
                        </div>
                        <div class="padding-20 text-center">
                            <p class="lead font-500 margin-b-0">John Doe</p>
                            <p class="text-muted">Administrator</p>
                            <p class="text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
                            <button class="btn btn-primary"><i class="demo-pli-male icon-fw"></i>Follow</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
					    <div class="card">
                        <div class="card-header card-default">
                            Server Stats
							<p class="text-muted">Lorem ipsum dolor sit amet</p>
                        </div>
							  <div class="card-body">
									
									<div>
										<span>Email Accounts</span>
										<small class="float-right">3/10</small>
									</div>
									<div class="progress progress-mini">
										<div style="width:70%;" class="progress-bar bg-warning"></div>
									</div>

									<div>
										<span>CPU Usage</span>
										<small class="float-right">%50</small>
									</div>
									<div class="progress progress-mini">
										<div style="width: 50%;" class="progress-bar bg-danger"></div>
									</div>
									<div>
										<span>SQL Databases</span>
										<small class="float-right">1/4</small>
									</div>
									<div class="progress progress-mini">
										<div style="width: 25%;" class="progress-bar bg-teal"></div>
									</div>
									<div>
										<span>Subdomains</span>
										<small class="float-right">1/10</small>
									</div>
									<div class="progress progress-mini">
										<div style="width: 10%;" class="progress-bar bg-dark"></div>
									</div>
									<div>
										<span>Email Accounts</span>
										<small class="float-right">50/100</small>
									</div>
									<div class="progress progress-mini">
										<div style="width: 50%;" class="progress-bar bg-muted"></div>
									</div>
							
							</div>		
					</div>
				</div>
				
				<div class="col-md-4">
				<div class="card weather">
					<div class="city-selected">
						<div class="weather-box">
							<div class="info">
								<div class="city">Ankara</div>
								<div class="night">Night - 22:07 PM</div>
								<div class="temp text-primary">3°</div>
								<div class="wind">
									<i class="wi wi-windy"></i>
									<span>25 km/h</span>
								</div>
							</div>
							<div class="icon text-primary">
								<i class="wi wi-night-alt-hail"></i>
							</div>
						</div>
					</div>

					<div class="days">
						<div class="row row-no-gutter">
							<div class="col-md-4">
								<div class="day">
									<h1>Monday</h1>
									<i class="wi wi-day-rain"></i>
								</div>
							</div>

							<div class="col-md-4">
								<div class="day">
									<h1>Tuesday</h1>
									<i class="wi wi-day-storm-showers"></i>
								</div>
							</div>

							<div class="col-md-4">
								<div class="day">
									<h1>Wednesday</h1>
									<i class="wi wi-solar-eclipse"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				</div>
				
				<div class="col-md-4">
				<div  class="card weather">
					<div class="city-selected bg-indigo">
						<div class="weather-box">
							<div class="info text-light">
								<div class="city">Ankara</div>
								<div class="night">Night - 22:07 PM</div>
								<div class="temp">3°</div>
								<div class="wind">
									<i class="wi wi-windy"></i>
									<span>25 km/h</span>
								</div>
							</div>
							<div class="icon text-light">
								<i class="wi wi-day-storm-showers"></i>
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


		
        <!-- Flot -->
        <script src="{{ du_asset( 'layout-5/lib/flot/jquery.flot.js' ) }}"></script>
        <script src="{{ du_asset( 'layout-5/lib/flot/jquery.flot.tooltip.min.js' ) }}"></script>
        <script src="{{ du_asset( 'layout-5/lib/flot/jquery.flot.resize.js' ) }}"></script>
		
        <!-- Sparkline-->
        <script src="{{ du_asset( 'layout-5/lib/sparkline/jquery.sparkline.min.js' ) }}"></script>
        <script>
					
            $('#sparkline1').sparkline([4, 5, 0, 10, 9, 12, 4, 9, 4, 5, 3, 10, 9, 12, 10, 9, 12, 4, 9, 4, 5, 0, 10, 9, 12, 4, 9, 4, 5, 3, 10, 9, 12, 10, 9, 12, 4, 9, 12, 10, 9, 12, 4, 9 ], 
			{
				type: 'bar',
				width: '100%',
				height: '80',
				barWidth: '2',
				resize: true,
				barSpacing: '6',
				barColor: 'rgba(255, 255, 255, 0.3)'
			});
			
            $("#sparkline2").sparkline([34, 43, 43, 35, 44, 32, 15, 22, 46, 33, 86, 54, 73, 53, 12, 53, 23, 65, 23, 63, 53, 42, 34, 56, 76, 15, 54, 23, 44], {
				type: 'line',
				width: '100%',
				height: '80',
				lineColor: '#4150c4',
				fillColor: '#4150c4',
				minSpotColor:'#4150c4',
				maxSpotColor: '#4150c4',
				highlightLineColor: 'rgba(0, 0, 0, 0.2)',
				highlightSpotColor: '#4150c4'
            });
			
			$("#sparkline3").sparkline([34, 43, 43, 35, 44, 32, 15, 22, 46, 33, 86, 54, 73, 53, 12, 53, 23, 65, 23, 63, 53, 42, 34, 56, 76, 15, 54, 23, 44], {
                type: 'line',
				width: '100%',
				height: '80',
				lineColor: '#fff',
				fillColor: '#f4516c',
				maxSpotColor: '#f4516c',
				highlightLineColor: 'rgba(0, 0, 0, 0.2)',
				highlightSpotColor: '#26c6da'
            });
			
			$('#sparkline4').sparkline([ 4, 5, 2, 10, 9, 12, 4, 9], {
				type: 'bar',
				width: '100%',
				height: '70',
				barWidth: '8',
				resize: true,
				barSpacing: '5',
				barColor: '#5867dd'
			});
			
			$('#sparkline5').sparkline([ 4, 5, 2, 10, 9, 12, 4, 9], {
				type: 'bar',
				width: '100%',
				height: '70',
				barWidth: '8',
				resize: true,
				barSpacing: '5',
				barColor: '#66BB6A'
			});
			
			$('#sparkline6').sparkline([ 4, 5, 2, 10, 9, 12, 4, 9], {
				type: 'bar',
				width: '100%',
				height: '70',
				barWidth: '8',
				resize: true,
				barSpacing: '5',
				barColor: '#f8c200'
			});
			
			$('#sparkline7').sparkline([ 4, 5, 2, 10, 9, 12, 4, 9], {
				type: 'bar',
				width: '100%',
				height: '70',
				barWidth: '8',
				resize: true,
				barSpacing: '5',
				barColor: '#EF5350'
			});
		
        </script>

@endsection
