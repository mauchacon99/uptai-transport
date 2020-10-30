@extends('ducor::layouts.layout-5')


@section('pageTitle', 'FixedPlus - Laravel Admin Dashboard Template')


@section('breadcrumb')

		<div class="row page-header">
		<div class="col-lg-6 align-self-center ">
			   <h2>Picker</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Form</a></li>
					<li class="breadcrumb-item active"> Picker</li>
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
                            Date Range Picker
                        </div>
                        <div class="card-body">
							<div class="row">
								<div class="col-md-6">
									<h5><small>Date Range Picker</small></h5>
									<div class="form-group">
										<div class="input-group m-b">
											<span class="input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
											<input type="text" class="form-control" name="daterange" value="01/01/2015 - 01/31/2015" />
                                        </div>
									</div>
								</div>
								
								<div class="col-md-6">
									<h5><small>Date and Time</small></h5>
									<div class="form-group">
										<div class="input-group m-b">	
										<span class="input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
										<input type="text" name="daterange2" value="01/01/2015 1:30 PM - 01/01/2015 2:00 PM" />
										</div>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-6">
									<h5><small>Single Date Picker</small></h5>
									<div class="form-group">
										<div class="input-group m-b">
										<span class="input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
										<input type="text" name="birthdate" value="10/24/1984" />
										</div>
									</div>
								</div>
								
								<div class="col-md-6">
									<h5><small>Input Initially Empty</small></h5>
									<div class="form-group">
										<div class="input-group m-b">
										<span class="input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
										<input type="text" name="datefilter" value="" />
										</div>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-6">
									<h5><small>Predefined Ranges</small></h5>
									<div class="form-group">
										<div id="reportrange" class="float-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
											<i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
											<span></span> <b class="caret"></b>
										</div>
									</div>
								</div>
							</div>
							
							
                        </div>
					  </div>
                    </div>
                </div>
				
				<div class="row">             

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-default">
                            Clock Picker
                        </div>
                        <div class="card-body">
							<div class="row">
								<div class="col-md-6">
									<h5><small>Default</small></h5>
									<div class="form-group">
									<div class="input-group clockpicker">
										<input type="text" class="form-control" value="09:30">
										<span class="input-group-addon">
											<span class="glyphicon glyphicon-time fa fa-clock-o"></span>
										</span>
									</div>
									</div>
								</div>
								
								<div class="col-md-6">
									<h5><small>Place at left, align the arrow to top, auto close</small></h5>
									<div class="form-group">
										<div class="input-group clockpicker" data-placement="left" data-align="top" data-autoclose="true">
											<input type="text" class="form-control" value="13:14">
											<span class="input-group-addon">
												<span class="glyphicon glyphicon-time fa fa-clock-o"></span>
											</span>
										</div>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-6">
									<h5><small>Set options in javascript, instead of <code>data-*</code></small></h5>
									<div class="form-group">
										<div class="input-group clockpicker2">
											<input type="text" class="form-control" value="18:00">
											<span class="input-group-addon">
												<span class="glyphicon glyphicon-time fa fa-clock-o"></span>
											</span>
										</div>
									</div>
								</div>
								
								<div class="col-md-6">
									<h5><small>Set default value, input without addon, and manual operations</small></h5>
									<div class="form-group">
									<div class="input-group">
										<input class="form-control" id="single-input" value="" placeholder="Now">
										<button type="button" id="check-minutes" class="btn btn-primary">Check the minutes</button>
										</div>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-6">
									<h5><small>Callbacks</small></h5>
									<div class="form-group">
										<input class="form-control clockpicker-with-callbacks" id="single-input" value="" placeholder="Now">
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


		<!-- DataTimePicker -->
        <link href="{{ du_asset( 'layout-5/lib/bootstrap-daterangepicker/daterangepicker.css' ) }}" rel="stylesheet">
		
		<!-- Clock Picker -->
		<link href="{{ du_asset( 'layout-5/lib/clockpicker/bootstrap-clockpicker.min.css' ) }}" rel="stylesheet">


@endsection


@section('footer-assets')


		<!-- DataTimePicker -->
        <script type="text/javascript" src="{{ du_asset( 'layout-5/lib/bootstrap-daterangepicker/moment.js' ) }}"></script>
		<script type="text/javascript" src="{{ du_asset( 'layout-5/lib/bootstrap-daterangepicker/daterangepicker.js' ) }}"></script>
		
		<!-- Clock Picker -->
		<script type="text/javascript" src="{{ du_asset( 'layout-5/lib/clockpicker/bootstrap-clockpicker.min.js' ) }}"></script>
		
        <script>
            $(function() {
				/* DataRange */
				$('input[name="daterange"]').daterangepicker();
				
				
				/* Datarange2 */
				$('input[name="daterange2"]').daterangepicker({
					timePicker: true,
					timePickerIncrement: 30,
					locale: {
						format: 'MM/DD/YYYY h:mm A'
					}
				});
				
				/* BirthDate */
				$('input[name="birthdate"]').daterangepicker({
					singleDatePicker: true,
					showDropdowns: true
				}, 
				function(start, end, label) {
					var years = moment().diff(start, 'years');
					alert("You are " + years + " years old.");
				});
				
				/* DataFilter */
				$('input[name="datefilter"]').daterangepicker({
					  autoUpdateInput: false,
					  locale: {
						  cancelLabel: 'Clear'
					  }
				  });
				  $('input[name="datefilter"]').on('apply.daterangepicker', function(ev, picker) {
					  $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
				  });
				  $('input[name="datefilter"]').on('cancel.daterangepicker', function(ev, picker) {
					  $(this).val('');
				 });
				 
				 /* Predefined Ranges */
				var start = moment().subtract(29, 'days');
				var end = moment();

				function cb(start, end) {
					$('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
				}

				$('#reportrange').daterangepicker({
					startDate: start,
					endDate: end,
					ranges: {
					   'Today': [moment(), moment()],
					   'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
					   'Last 7 Days': [moment().subtract(6, 'days'), moment()],
					   'Last 30 Days': [moment().subtract(29, 'days'), moment()],
					   'This Month': [moment().startOf('month'), moment().endOf('month')],
					   'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
					}
				}, cb);

				cb(start, end);
				
				<!-- Default Clock Picker -->
				$('.clockpicker').clockpicker();
				
				<!-- Set options in javascript -->
				$('.clockpicker2').clockpicker({
					placement: 'top',
					align: 'left',
					donetext: 'Done'
				});
				
				<!-- Set default value, input without addon, and manual operations -->
				var input = $('#single-input').clockpicker({
					placement: 'bottom',
					align: 'left',
					autoclose: true,
					'default': 'now'
				});

				$('#check-minutes').click(function(e){
					e.stopPropagation();
					input.clockpicker('show')
							.clockpicker('toggleView', 'minutes');
				});
				
				<!-- Callbacks -->
				var input = $('.clockpicker-with-callbacks').clockpicker({
                    donetext: 'Done',
                        init: function() { 
                            console.log("colorpicker initiated");
                        },
                        beforeShow: function() {
                            console.log("before show");
                        },
                        afterShow: function() {
                            console.log("after show");
                        },
                        beforeHide: function() {
                            console.log("before hide");
                        },
                        afterHide: function() {
                            console.log("after hide");
                        },
                        beforeHourSelect: function() {
                            console.log("before hour selected");
                        },
                        afterHourSelect: function() {
                            console.log("after hour selected");
                        },
                        beforeDone: function() {
                            console.log("before done");
                        },
                        afterDone: function() {
                            console.log("after done");
                        }
                });
                
			});
        </script>


@endsection
