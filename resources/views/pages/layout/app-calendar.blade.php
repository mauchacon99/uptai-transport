@extends('ducor::layouts.layout-5')


@section('pageTitle', 'FixedPlus - Laravel Admin Dashboard Template')


@section('breadcrumb')

<div class="row page-header">
		<div class="col-lg-6 align-self-center ">
			<h2>Calendar</h2>
			<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
			<li class="breadcrumb-item"><a href="#">Apps</a></li>
			<li class="breadcrumb-item active">Calendar</li>
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
	
		<div class="card-header">
				Calendar
				</div>
		<div class="card-body">
			<div class="row">
		<div class="col-md-3">
			<h4 class="card-title">Drag & Drop Event</h4>

				<div id="external-events">
					<div class="fc-event bg-info" data-color="bg-info">My Event Info</div>
					<div class="fc-event bg-success" data-class="bg-success">My Event Success</div>
					<div class="fc-event bg-danger" data-class="bg-danger">My Event Danger</div>
					<div class="fc-event bg-warning" data-class="bg-warning">My Event Warning</div>
					<div class="fc-event bg-primary" data-class="bg-primary">My Event Primary</div>
					<div class="fc-event bg-indigo" data-class="bg-indigo">My Event Indigo</div>
					<p>
						<div class="checkbox checkbox-primary margin-r-5">
							<input id="checkbox2" type="checkbox">
							<label for="checkbox2">Remove after drop</label>
						</div>
					</p>
					<a href="#" class="btn btn-success btn-icon btn-block btn-rounded box-shadow"><i class="fa fa-plus"></i> Add New Event</a>
				</div>
		</div>
		<div class="col-md-9">
				<div id="fc-external-drag"></div>
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

<!-- FullCalendar -->
<link href="{{ du_asset( 'layout-5/lib/fullcalendar/fullcalendar.css' ) }}" rel="stylesheet">   

@endsection


@section('footer-assets')


<!-- Full Calendar -->
<script src="{{ du_asset( 'layout-5/lib/jquery-ui/jquery-ui.min.js' ) }}"></script>
<script src="{{ du_asset( 'layout-5/lib/momentJs/moment.min.js' ) }}"></script>
<script src="{{ du_asset( 'layout-5/lib/fullcalendar/fullcalendar.min.js' ) }}"></script>
<script src="{{ du_asset( 'layout-5/js/fullcalendar.js' ) }}"></script>


@endsection
