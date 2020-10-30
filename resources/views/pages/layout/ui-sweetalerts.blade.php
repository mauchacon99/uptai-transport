@extends('ducor::layouts.layout-5')


@section('pageTitle', 'FixedPlus - Laravel Admin Dashboard Template')


@section('breadcrumb')
        <div class="row page-header">
			<div class="col-lg-6 align-self-center ">
			    <h2>Sweet Alerts 2</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">UI Elements</a></li>
					<li class="breadcrumb-item active">Sweet Alerts 2</li>
				</ol>
			</div>
		</div>


@endsection


@section('content')

        <!-- ============================================================== -->
		<!-- 						Content End		 						-->
		<!-- ============================================================== -->

        
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-default">
                            Sweet Alert 2 Examples 
                        </div>
                        <div class="card-body">

                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="min-width:50%;">Alert Type</th>
                                        <th>Example</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="middle-align">Basic Example</td>
                                        <td>
                                            <button class="btn btn-default" id="sa-basic">Click me</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="middle-align">A title with a text under</td>
                                        <td>
                                            <button class="btn btn-default" id="sa-title">Click me</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="middle-align">A success message!</td>
                                        <td>
                                            <button class="btn btn-default" id="sa-success">Click me</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="middle-align">A warning message, with a function attached to the "Confirm"-button...</td>
                                        <td>
                                            <button class="btn btn-default" id="sa-warning">Click me</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="middle-align">By passing a parameter, you can execute something else for "Cancel".</td>
                                        <td>
                                            <button class="btn btn-default" id="sa-params">Click me</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="middle-align">A message with custom Image Header</td>
                                        <td>
                                            <button class="btn btn-default" id="sa-image">Click me</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="middle-align">A message with auto close timer</td>
                                        <td>
                                            <button class="btn btn-default" id="sa-close">Click me</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="middle-align">A message with button primary</td>
                                        <td>
                                            <button class="btn btn-primary" id="primary-alert">Click me</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="middle-align">A message with button info</td>
                                        <td>
                                            <button class="btn btn-info" id="info-alert">Click me</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="middle-align">A message with button success</td>
                                        <td>
                                            <button class="btn btn-success " id="success-alert">Click me</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="middle-align">A message with button warning</td>
                                        <td>
                                            <button class="btn btn-warning " id="warning-alert">Click me</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="middle-align">A message with button danger</td>
                                        <td>
                                            <button class="btn btn-danger " id="danger-alert">Click me</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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

        <!-- Sweet Alerts -->
        <link href="{{ du_asset( 'layout-5/lib/sweet-alerts2/sweetalert2.min.css' ) }}" rel="stylesheet">
		
@endsection


@section('footer-assets')


		
        <!--Sweet Alerts-->
        <script src="{{ du_asset( 'layout-5/lib/sweet-alerts2/sweetalert2.min.js' ) }}"></script>
		
        <script>
            $(document).ready(function () {
                //Basic
                $('#sa-basic').click(function () {
                    swal("Here's a message!");
                });
				
                //A title with a text under
                $('#sa-title').click(function () {
                    swal("Here's a message!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat, tincidunt vitae ipsum et, pellentesque maximus enim. Mauris eleifend ex semper, lobortis purus sed, pharetra felis");
                });

                //Success Message
                $('#sa-success').click(function () {
                    swal("Good job!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat, tincidunt vitae ipsum et, pellentesque maximus enim. Mauris eleifend ex semper, lobortis purus sed, pharetra felis", "success");
                });

                //Warning Message
                $('#sa-warning').click(function () {
                    swal({
                        title: "Are you sure?",
                        text: "You will not be able to recover this imaginary file!",
                        type: "warning",
                        showCancelButton: true,
                        cancelButtonClass: 'btn-secondary ',
                        confirmButtonClass: 'btn-warning',
                        confirmButtonText: "Yes, delete it!",
                        closeOnConfirm: false
                    }, function () {
                        swal("Deleted!", "Your imaginary file has been deleted.", "success");
                    });
                });

                //Parameter
                $('#sa-params').click(function () {
                    swal({
                        title: "Are you sure?",
                        text: "You will not be able to recover this imaginary file!",
                        type: "warning",
                        showCancelButton: true,
                        cancelButtonClass: 'btn-secondary ',
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Yes, delete it!",
                        cancelButtonText: "No, cancel plx!",
                        closeOnConfirm: false,
                        closeOnCancel: false
                    }, function (isConfirm) {
                        if (isConfirm) {
                            swal("Deleted!", "Your imaginary file has been deleted.", "success");
                        } else {
                            swal("Cancelled", "Your imaginary file is safe :)", "error");
                        }
                    });
                });

                //Custom Image
                $('#sa-image').click(function () {
                    swal({
                        title: "Sweet!",
                        text: "Here's a custom image.",
                        imageUrl: "assets/assets/lib/bootstrap-sweetalert/thumbs-up.jpg' ) }}"
                    });
                });

                //Auto Close Timer
                $('#sa-close').click(function () {
                    swal({
                        title: "Auto close alert!",
                        text: "I will close in 2 seconds.",
                        timer: 2000,
                        showConfirmButton: false
                    });
                });

                //Primary
                $('#primary-alert').click(function () {
                    swal({
                        title: "Are you sure?",
                        text: "You will not be able to recover this imaginary file!",
                        type: "info",
                        showCancelButton: true,
                        cancelButtonClass: 'btn-secondary  ',
                        confirmButtonClass: 'btn-primary ',
                        confirmButtonText: 'Primary!'
                    });
                });

                //Info
                $('#info-alert').click(function () {
                    swal({
                        title: "Are you sure?",
                        text: "You will not be able to recover this imaginary file!",
                        type: "info",
                        showCancelButton: true,
                        cancelButtonClass: 'btn-secondary ',
                        confirmButtonClass: 'btn-info  ',
                        confirmButtonText: 'Info!'
                    });
                });

                //Success
                $('#success-alert').click(function () {
                    swal({
                        title: "Are you sure?",
                        text: "You will not be able to recover this imaginary file!",
                        type: "success",
                        showCancelButton: true,
                        cancelButtonClass: 'btn-secondary ',
                        confirmButtonClass: 'btn-success',
                        confirmButtonText: 'Success!'
                    });
                });

                //Warning
                $('#warning-alert').click(function () {
                    swal({
                        title: "Are you sure?",
                        text: "You will not be able to recover this imaginary file!",
                        type: "warning",
                        showCancelButton: true,
                        cancelButtonClass: 'btn-secondary ',
                        confirmButtonClass: 'btn-warning',
                        confirmButtonText: 'Warning!'
                    });
                });

                //Danger
                $('#danger-alert').click(function () {
                    swal({
                        title: "Are you sure?",
                        text: "You will not be able to recover this imaginary file!",
                        type: "error",
                        showCancelButton: true,
                        cancelButtonClass: 'btn-secondary',
                        confirmButtonClass: 'btn-danger',
                        confirmButtonText: 'Danger!'
                    });
                });
            });

        </script>

@endsection
