@extends('ducor::layouts.layout-5')


@section('pageTitle', 'FixedPlus - Laravel Admin Dashboard Template')


@section('breadcrumb')


<div class="row page-header">
	<div class="col-lg-6 align-self-center ">
		<h2>Chat</h2>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
			<li class="breadcrumb-item"><a href="#">Apps</a></li>
			<li class="breadcrumb-item active">Chat</li>
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
					Chat Room
				</div>
				<div class="card-body no-padding">
					<div class="row">
								<div class="col-md-4">
							<div class="chat-contacts padding-20">
								<ul class="list-unstyled sidebar-contact-list">
							<li class="clearfix">
								<a href="#" class="media-box">
									<span class="float-right">
										<span class="circle circle-success circle-lg"></span>
									</span>
									<span class="float-left">
										<img src="{{ du_asset( 'layout-5/img/avtar-1.png' ) }}" alt="user" class="media-box-object rounded-circle" width="50">
									</span>
									<span class="media-box-body">
										<span class="media-box-heading">
											<strong>John Doe</strong>
											<br>
											<small class="text-muted">Designer</small>
										</span>
									</span>
								</a>
							</li>
							<li class="clearfix">
								<a href="#" class="media-box">
									<span class="float-right">
										<span class="circle circle-success circle-lg"></span>
									</span>
									<span class="float-left">
										
										<img src="{{ du_asset( 'layout-5/img/avtar-2.png' ) }}" alt="user" class="media-box-object rounded-circle" width="50">
									</span>
									
									<span class="media-box-body">
										<span class="media-box-heading">
											<strong>Gevinda Doe</strong>
											<br>
											<small class="text-muted">Designer</small>
										</span>
									</span>
								</a>
							</li>
							<li class="clearfix">
								<a href="#" class="media-box">
									<span class="float-right">
										<span class="circle circle-danger circle-lg"></span>
									</span>
									<span class="float-left">
										
										<img src="{{ du_asset( 'layout-5/img/avtar-3.png' ) }}" alt="user" class="media-box-object rounded-circle" width="50">
									</span>
									
									<span class="media-box-body">
										<span class="media-box-heading">
											<strong>Eluga Smith</strong>
											<br>
											<small class="text-muted">Designer</small>
										</span>
									</span>
								</a>
							</li>
							<li class="clearfix">
								<a href="#" class="media-box">
									<span class="float-right">
										<span class="circle circle-danger circle-lg"></span>
									</span>
									<span class="float-left">
										
										<img src="{{ du_asset( 'layout-5/img/avtar-4.png' ) }}" alt="user" class="media-box-object rounded-circle" width="50">
									</span>
									
									<span class="media-box-body">
										<span class="media-box-heading">
											<strong>Hritik Doe</strong>
											<br>
											<small class="text-muted">Designer</small>
										</span>
									</span>
								</a>
							</li>
							<li class="clearfix">
								<a href="#" class="media-box">
									<span class="float-right">
										<span class="circle circle-success circle-lg"></span>
									</span>
									<span class="float-left">
										
										<img src="{{ du_asset( 'layout-5/img/avtar-5.png' ) }}" alt="user" class="media-box-object rounded-circle" width="50">
									</span>
									
									<span class="media-box-body">
										<span class="media-box-heading">
											<strong>Bianca</strong>
											<br>
											<small class="text-muted">Designer</small>
										</span>
									</span>
								</a>
							</li>
								<li class="clearfix">
								<a href="#" class="media-box">
									<span class="float-right">
										<span class="circle circle-success circle-lg"></span>
									</span>
									<span class="float-left">
										<img src="{{ du_asset( 'layout-5/img/avtar-1.png' ) }}" alt="user" class="media-box-object rounded-circle" width="50">
									</span>
									<span class="media-box-body">
										<span class="media-box-heading">
											<strong>John Doe</strong>
											<br>
											<small class="text-muted">Designer</small>
										</span>
									</span>
								</a>
							</li>
							<li class="clearfix">
								<a href="#" class="media-box">
									<span class="float-right">
										<span class="circle circle-success circle-lg"></span>
									</span>
									<span class="float-left">
										
										<img src="{{ du_asset( 'layout-5/img/avtar-2.png' ) }}" alt="user" class="media-box-object rounded-circle" width="50">
									</span>
									
									<span class="media-box-body">
										<span class="media-box-heading">
											<strong>Gevinda Doe</strong>
											<br>
											<small class="text-muted">Designer</small>
										</span>
									</span>
								</a>
							</li>
							<li class="clearfix">
								<a href="#" class="media-box">
									<span class="float-right">
										<span class="circle circle-danger circle-lg"></span>
									</span>
									<span class="float-left">
										
										<img src="{{ du_asset( 'layout-5/img/avtar-3.png' ) }}" alt="user" class="media-box-object rounded-circle" width="50">
									</span>
									
									<span class="media-box-body">
										<span class="media-box-heading">
											<strong>Eluga Smith</strong>
											<br>
											<small class="text-muted">Designer</small>
										</span>
									</span>
								</a>
							</li>
							<li class="clearfix">
								<a href="#" class="media-box">
									<span class="float-right">
										<span class="circle circle-danger circle-lg"></span>
									</span>
									<span class="float-left">
										
										<img src="{{ du_asset( 'layout-5/img/avtar-4.png' ) }}" alt="user" class="media-box-object rounded-circle" width="50">
									</span>
									
									<span class="media-box-body">
										<span class="media-box-heading">
											<strong>Hritik Doe</strong>
											<br>
											<small class="text-muted">Designer</small>
										</span>
									</span>
								</a>
							</li>
							<li class="clearfix">
								<a href="#" class="media-box">
									<span class="float-right">
										<span class="circle circle-success circle-lg"></span>
									</span>
									<span class="float-left">
										
										<img src="{{ du_asset( 'layout-5/img/avtar-5.png' ) }}" alt="user" class="media-box-object rounded-circle" width="50">
									</span>
									
									<span class="media-box-body">
										<span class="media-box-heading">
											<strong>Bianca</strong>
											<br>
											<small class="text-muted">Designer</small>
										</span>
									</span>
								</a>
							</li>
							
						</ul>
							</div>
						</div>
					
						<div class="col-md-8">
							<div class="chat-room padding-20">
								<ul class="chat-list list-unstyled">
								<li class="clearfix chat-element media">
									<a href="javascript: void(0);" class="float-left">
										<img src="{{ du_asset( 'layout-5/img/avtar-2.png' ) }}" alt="" class="rounded-circle">
									</a>
									<div class="media-body ">
										<div class="speech-box">
											<small class="float-right text-primary">1m ago</small>
											<strong>John Doe</strong>
											<p class="margin-b-0">
												Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
											</p>
											<small class="text-info">Today 18:45 - 06.09.2018</small>
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
											<small class="text-info">Today 18:45 - 06.09.2018</small>
										</div>
									</div>
									<a href="javascript: void(0);" class="float-right">
										<img src="{{ du_asset( 'layout-5/img/avtar-2.png' ) }}" alt="" class="rounded-circle">
									</a>
								</li>
								<li class="clearfix chat-element media">
									<a href="javascript: void(0);" class="float-left">
										<img src="{{ du_asset( 'layout-5/img/avtar-2.png' ) }}" alt="" class="rounded-circle">
									</a>
									<div class="media-body ">
										<div class="speech-box">
											<small class="float-right text-primary">1m ago</small>
											<strong>John Doe</strong>
											<p class="margin-b-0">
												Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
											</p>
											<small class="text-info">Today 18:45 - 06.09.2018</small>
										</div>
									</div>
								</li>
								<li class="clearfix chat-element media">
									<a href="javascript: void(0);" class="float-left">
										<img src="{{ du_asset( 'layout-5/img/avtar-2.png' ) }}" alt="" class="rounded-circle">
									</a>
									<div class="media-body ">
										<div class="speech-box">
											<small class="float-right text-primary">1m ago</small>
											<strong>John Doe</strong>
											<p class="margin-b-0">
												Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
											</p>
											<small class="text-info">Today 18:45 - 06.09.2018</small>
										</div>
									</div>
								</li>

								<li class="clearfix chat-element right media active">
									<div class="media-body text-right float-left">
										<div class="speech-box">
											<strong class="float-left">John Doe</strong>
											<small class="text-right text-primary">1m ago</small>
											<p class="margin-b-0 text-left">
												Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
											</p>
											<small class="text-info">Today 18:45 - 06.09.2018</small>
										</div>
									</div>
									<a href="javascript: void(0);" class="float-right">
										<img src="{{ du_asset( 'layout-5/img/avtar-2.png' ) }}" alt="" class="rounded-circle">
									</a>
								</li>
								<li class="clearfix chat-element media">
									<a href="javascript: void(0);" class="float-left">
										<img src="{{ du_asset( 'layout-5/img/avtar-2.png' ) }}" alt="" class="rounded-circle">
									</a>
									<div class="media-body ">
										<div class="speech-box">
											<small class="float-right text-primary">1m ago</small>
											<strong>John Doe</strong>
											<p class="margin-b-0">
												Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
											</p>
											<small class="text-info">Today 18:45 - 06.09.2018</small>
										</div>
									</div>
								</li>
							</ul>
							</div>
						</div>
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
	</div>
	
  

</section>
<!-- ============================================================== -->
<!-- 						Content End	 							-->
<!-- ============================================================== -->




<script>
	$(document).ready(function () {
	$('.chat-room,.chat-contacts').slimScroll({
			color: '#eee',
			size: '5px',
			height: '500px',
			alwaysVisible: true
		});
	});
</script>

@endsection


@section('head-assets')

@endsection


@section('footer-assets')


@endsection
