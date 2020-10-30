@extends('ducor::layouts.layout-5')


@section('pageTitle', 'FixedPlus - Laravel Admin Dashboard Template')


@section('breadcrumb')

        <div class="row page-header">
			<div class="col-lg-6 align-self-center ">
				<h2>Form Validations</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Form</a></li>
					<li class="breadcrumb-item active">Form Validations</li>		
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
                    <div class="card">
                        <div class="card-header card-default">
                            Basic Steps
                        </div>
                        <div class="card-body">
                            <form id="signupForm" method="post" class="form-horizontal" action="">
							<div class="form-group">
								<label for="firstname">First name</label>
								<input type="text" class="form-control" id="firstname" name="firstname" placeholder="First name" />
							</div>

							<div class="form-group">
								<label for="lastname">Last name</label>
								<input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last name" />
							</div>

							<div class="form-group">
								<label for="username">Username</label>
								<input type="text" class="form-control" id="username" name="username" placeholder="Username" />
							</div>

							<div class="form-group">
								<label for="email">Email</label>
								<input type="text" class="form-control" id="email" name="email" placeholder="Email" />
							</div>

							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" class="form-control" id="password" name="password" placeholder="Password" />
							</div>

							<div class="form-group">
								<label for="confirm_password">Confirm password</label>
								<input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm password" />
							</div>

							<div class="form-group">
								<div class="checkbox checkbox-primary margin-r-5">

									<input type="checkbox" id="checkbox2 agree" name="agree" value="agree" />
									<label for="checkbox2 agree"> Please agree to our policy</label>
								</div>
							</div>

							<div class="form-group">
									<button type="submit" class="btn btn-primary" name="signup" value="Sign up">Sign up</button>
							</div>
						</form>
                        </div>
                    </div>
                </div>
            </div>
			
			<div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header card-default">
                            Using feedback icons
                        </div>
                        <div class="card-body">
                            <form id="signupForm1" method="post" class="form-horizontal" action="">
							
							<div class="form-group">
								<label for="firstname1">First name</label>
								<input type="text" class="form-control" id="firstname1" name="firstname1" placeholder="First name" />
							</div>

							<div class="form-group">
								<label for="lastname1">Last name</label>
								<input type="text" class="form-control" id="lastname1" name="lastname1" placeholder="Last name" />
							</div>

							<div class="form-group">
								<label for="username1">Username</label>
								<input type="text" class="form-control" id="username1" name="username1" placeholder="Username" />
							</div>

							<div class="form-group">
								<label for="email1">Email</label>
								<input type="text" class="form-control" id="email1" name="email1" placeholder="Email" />
							</div>

							<div class="form-group">
								<label for="password1">Password</label>
								<input type="password" class="form-control" id="password1" name="password1" placeholder="Password" />
							</div>

							<div class="form-group">
								<label for="confirm_password1">Confirm password</label>
								<input type="password" class="form-control " id="confirm_password1" name="confirm_password1" placeholder="Confirm password" />
							</div>


							<div class="form-group">
	
									<div class="checkbox checkbox-primary margin-r-5">
										<input type="checkbox" id="agree1" name="agree1" value="agree" />
										<label for="agree1">Please agree to our policy</label>
									</div>
			
							</div>

							<div class="form-group">
							
									<button type="submit" class="btn btn-primary" name="signup1" value="Sign up">Sign up</button>
							
							</div>
						</form>
                        </div>
                    </div>
                </div>
            </div>

  


        </section>
        <!-- ============================================================== -->
		<!-- 						Content End	 						-->
		<!-- ============================================================== -->



@endsection


@section('head-assets')

@endsection


@section('footer-assets')


        <!-- Validations -->
        <script type="text/javascript" src="{{ du_asset( 'layout-5/lib/jquery-validate/jquery.validate.js' ) }}"></script>
        <script type="text/javascript">
		$.validator.setDefaults( {
			submitHandler: function () {
				alert( "submitted!" );
			}
		} );

		$( document ).ready( function () {
			$( "#signupForm" ).validate( {
				rules: {
					firstname: "required",
					lastname: "required",
					username: {
						required: true,
						minlength: 2
					},
					password: {
						required: true,
						minlength: 5
					},
					confirm_password: {
						required: true,
						minlength: 5,
						equalTo: "#password"
					},
					email: {
						required: true,
						email: true
					},
					agree: "required"
				},
				messages: {
					firstname: "Please enter your firstname",
					lastname: "Please enter your lastname",
					username: {
						required: "Please enter a username",
						minlength: "Your username must consist of at least 2 characters"
					},
					password: {
						required: "Please provide a password",
						minlength: "Your password must be at least 5 characters long"
					},
					confirm_password: {
						required: "Please provide a password",
						minlength: "Your password must be at least 5 characters long",
						equalTo: "Please enter the same password as above"
					},
					email: "Please enter a valid email address",
					agree: "Please accept our policy"
				},
				errorElement: "em",
				errorPlacement: function ( error, element ) {
					// Add the `help-block` class to the error element
					error.addClass( "help-block" );

					if ( element.prop( "type" ) === "checkbox" ) {
						error.insertAfter( element.parent( "label" ) );
					} else {
						error.insertAfter( element );
					}
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".form-group" ).addClass( "has-error" ).removeClass( "has-success" );
				},
				unhighlight: function (element, errorClass, validClass) {
					$( element ).parents( ".form-group" ).addClass( "has-success" ).removeClass( "has-error" );
				}
			} );

			$( "#signupForm1" ).validate( {
				rules: {
					firstname1: "required",
					lastname1: "required",
					username1: {
						required: true,
						minlength: 2
					},
					password1: {
						required: true,
						minlength: 5
					},
					confirm_password1: {
						required: true,
						minlength: 5,
						equalTo: "#password1"
					},
					email1: {
						required: true,
						email: true
					},
					agree1: "required"
				},
				messages: {
					firstname1: "Please enter your firstname",
					lastname1: "Please enter your lastname",
					username1: {
						required: "Please enter a username",
						minlength: "Your username must consist of at least 2 characters"
					},
					password1: {
						required: "Please provide a password",
						minlength: "Your password must be at least 5 characters long"
					},
					confirm_password1: {
						required: "Please provide a password",
						minlength: "Your password must be at least 5 characters long",
						equalTo: "Please enter the same password as above"
					},
					email1: "Please enter a valid email address",
					agree1: "Please accept our policy"
				},
				errorElement: "em",
				errorPlacement: function ( error, element ) {
					// Add the `help-block` class to the error element
					error.addClass( "help-block" );

					// Add `has-feedback` class to the parent div.form-group
					// in order to add icons to inputs
					element.parents( ".form-group" ).addClass( "has-feedback" );

					if ( element.prop( "type" ) === "checkbox" ) {
						error.insertAfter( element.parent( "label" ) );
					} else {
						error.insertAfter( element );
					}

					// Add the span element, if doesn't exists, and apply the icon classes to it.
					if ( !element.next( "input" )[ 0 ] ) {
						$('input').addClass( "form-control-danger" ).removeClass( "form-control-success" );
					}
				},
				success: function ( label, element ) {
					// Add the span element, if doesn't exists, and apply the icon classes to it.
					if ( !$( element ).next( "input" )[ 0 ] ) {
						$('input').addClass( "form-control-success" ).removeClass( "form-control-danger" );
					}
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".form-group" ).addClass( "has-danger" ).removeClass( "has-success" );
					$('input').addClass( "form-control-danger" ).removeClass( "form-control-success" );
				},
				unhighlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".form-group " ).addClass( "has-success" ).removeClass( "has-danger" );
					$('input').addClass( "form-control-success" ).removeClass( "form-control-danger" );
				}
			} );
		} );
	</script>


@endsection
