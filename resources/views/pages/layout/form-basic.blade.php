@extends('ducor::layouts.layout-5')


@section('pageTitle', 'FixedPlus - Laravel Admin Dashboard Template')


@section('breadcrumb')

		
        <div class="row page-header">
			<div class="col-lg-6 align-self-center ">
			  <h2>Basic elements</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Form</a></li>
					<li class="breadcrumb-item active">Basic elements</li>		
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
                            Form elements
                        </div>
                        <div class="card-body">
                            <form method="get" action="">
                                <div class="form-group ">
                                    <label>Rounded Corners</label>
                                        <input type="text" class="form-control form-control-rounded">
                                </div>
                            
                                <div class="form-group">
                                    <label>With help</label>
										<input type="text" class="form-control">
                                        <small class="text-muted">A block of help text that breaks onto a new line and may extend beyond one line.</small>
                                </div>
                                    <div class="form-group">
                                        <label >Label focus</label>
                                            <input id="input-id-1" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                            <input type="password" name="password" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Placeholder</label>
                                        <input type="text" placeholder="placeholder" class="form-control">
                                    </div>
             
                                    <div class="form-group">
                                        <label>Disabled</label>
                                        <input type="text" placeholder="Disabled input here..." disabled="" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Static control</label>
                                        <p class="form-control-static">email@example.com</p>
                                    </div>

                                    <div class="form-group">
                                        <label>Select</label>
                                            <select name="account" class="form-control m-b">
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                                <option>Option 4</option>
                                            </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Custom Checkboxes &amp; radios</label>
										<div class="row">
                                        <div class="col">
												<div class="checkbox checkbox-primary margin-r-5">
													<input id="checkbox1" type="checkbox" checked="">
													<label for="checkbox1"> Option one </label>
												</div>
												<div class="checkbox checkbox-danger margin-r-5">
													<input id="checkbox2" type="checkbox" checked="">
													<label for="checkbox2"> Option one </label>
												</div>
												<div class="checkbox checkbox-info margin-r-5">
													<input id="checkbox3" type="checkbox" checked="">
													<label for="checkbox3"> Option one </label>
												</div>
												<div class="checkbox checkbox-warning margin-r-5">
													<input id="checkbox4" type="checkbox" checked="">
													<label for="checkbox4"> Option one </label>
												</div>
												<div class="checkbox checkbox-success margin-r-5">
													<input id="checkbox5" type="checkbox" checked="">
													<label for="checkbox5"> Option one </label>
												</div>
												<div class="checkbox checkbox-purple margin-r-5">
													<input id="checkbox6" type="checkbox" checked="">
													<label for="checkbox6"> Option one </label>
												</div>
												<div class="checkbox checkbox-red margin-r-5">
													<input id="checkbox7" type="checkbox" checked="">
													<label for="checkbox7"> Option one </label>
												</div>
												<div class="checkbox checkbox-inverse margin-r-5">
													<input id="checkbox8" type="checkbox" checked="" >
													<label for="checkbox8"> Option one </label>
												</div>
                                        </div>
										<div class="col">
												<div class="radio radio-primary">
													<input type="radio" name="radio4" id="radio1" value="option4" checked="">
													<label for="radio1"> Option one </label>
												</div>
												
												<div class="radio radio-danger">
													<input type="radio" name="radio4" id="radio2" value="option4">
													<label for="radio2"> Option one </label>
												</div>
												
												<div class="radio radio-info">
													<input type="radio" name="radio4" id="radio3" value="option4">
													<label for="radio3"> Option one </label>
												</div>
												
												<div class="radio radio-warning">
													<input type="radio" name="radio4" id="radio4" value="option4">
													<label for="radio4"> Option one </label>
												</div>
												
												<div class="radio radio-success">
													<input type="radio" name="radio4" id="radio5" value="option4">
													<label for="radio5"> Option one </label>
												</div>
												
												<div class="radio radio-purple">
													<input type="radio" name="radio4" id="radio6" value="option4">
													<label for="radio6"> Option one </label>
												</div>
												
												<div class="radio radio-red">
													<input type="radio" name="radio4" id="radio7" value="option4">
													<label for="radio7"> Option one </label>
												</div>
	
												<div class="radio radio-inverse">
													<input type="radio" name="radio4" id="radio8" value="option4">
													<label for="radio8"> Option one </label>
												</div>
											
                                        </div>
										</div>
                                    </div>
                         
                                    <div class="form-group ">
                                        <label>Inline checkboxes</label>
					
											<div class="form-inline">
                                           <div class="checkbox checkbox-inline checkbox-success">
													<input id="checkbox10" type="checkbox" checked="">
													<label for="checkbox10"> Option one </label>
												</div>
                                            <div class="checkbox checkbox-inline checkbox-primary mx-sm-3">
													<input id="checkbox11" type="checkbox" checked="">
													<label for="checkbox11"> Option one </label>
												</div>
                                            <div class="checkbox checkbox-inline checkbox-danger">
													<input id="checkbox12" type="checkbox" checked="">
													<label for="checkbox12"> Option one </label>
												</div>
                                      </div>
                                    </div>
             
                                    <div class="form-group has-success">
                                        <label>Input with success</label>
                                            <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group has-warning">
                                        <label>Input with warning</label>
                                            <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group has-error">
                                        <label>Input with error</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label >Control sizing</label>
 
                                            <input type="text" placeholder=".input-lg" class="form-control input-lg m-b">
                                            <br>
                                            <input type="text" placeholder="Default input" class="form-control m-b">
                                            <br>
                                            <input type="text" placeholder=".input-sm" class="form-control input-sm">
     
                                    </div>

                                    <div class="form-group">
                                        <label>Column sizing</label>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <input type="text" placeholder=".col-md-2" class="form-control">
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" placeholder=".col-md-3" class="form-control">
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="text" placeholder=".col-md-4" class="form-control">
                                                </div>
                                            </div>
                                    </div>

                                    <div class="form-group">
                                        <label >Input groups</label>

                                            <div class="input-group m-b">
                                                <span class="input-group-addon">@</span>
                                                <input type="text" placeholder="Username" class="form-control">
                                            </div>
                                            <br>
                                            <div class="input-group m-b">
                                                <input type="text" class="form-control">
                                                <span class="input-group-addon">.00</span>
                                            </div>
                                            <br>
                                            <div class="input-group m-b">
                                                <span class="input-group-addon">$</span>
                                                <input type="text" class="form-control">
                                                <span class="input-group-addon">.00</span>
                                            </div>
                                            <br>
                                            <div class="input-group m-b">
                                                <span class="input-group-addon">
                                                    <input type="checkbox">
                                                </span>
                                                <input type="text" class="form-control">
                                            </div>
                                            <br>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <input type="radio">
                                                </span>
                                                <input type="text" class="form-control">
                                            </div>

                                    </div>

                                    <div class="form-group">
                                        <label>Button addons</label>
                                            <div class="input-group m-b">
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn btn-default">Go!</button>
                                                </span>
                                                <input type="text" class="form-control">
                                            </div>
                                            <br>
                                            <div class="input-group">
                                                <input type="text" class="form-control">
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn btn-default">Go!</button>
                                                </span>
                                            </div>
                                    </div>

                                    <div class="form-group">
                                        <label>With dropdowns</label>
     
                                            <div class="input-group">
                                                <div class="input-group-btn">
                                                    <button type="button" data-toggle="dropdown" class="btn btn-default">Action
                                                        <span class="caret"></span>
                                                    </button>
                                                    <ul id="ddinput1" class="dropdown-menu">
                                                        <li><a href="#">Action</a>
                                                        </li>
                                                        <li><a href="#">Another action</a>
                                                        </li>
                                                        <li><a href="#">Something else here</a>
                                                        </li>
                                                        <li class="divider"></li>
                                                        <li><a href="#">Separated link</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <input type="text" class="form-control">
												</div>
                                            <br>
                                            <div class="input-group">
                                                <input type="text" class="form-control">
                                                <div class="input-group-btn">
                                                    <button type="button" data-toggle="dropdown" class="btn btn-default">Action
                                                        <span class="caret"></span>
                                                    </button>
                                                    <ul id="ddinput2" class="dropdown-menu float-right">
                                                        <li><a href="#">Action</a>
                                                        </li>
                                                        <li><a href="#">Another action</a>
                                                        </li>
                                                        <li><a href="#">Something else here</a>
                                                        </li>
                                                        <li class="divider"></li>
                                                        <li><a href="#">Separated link</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                           

                                    <div class="form-group">
										  <label>Segmented</label>
									<div class="row">
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <div class="input-group-btn">
                                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Action
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div role="separator" class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                                    <div class="input-group-btn">
                                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Action
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right" x-placement="top-end" style="position: absolute; transform: translate3d(93px, -1px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div role="separator" class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                      </div>
                                    </div>


                                   <div class="form-group">
										<label>File Input</label>
										<div class="fileinput-new" data-provides="fileinput">
										  <div class="fileinput-preview" data-trigger="fileinput" style="width: 200px; height:150px;"></div>
											<span class="btn btn-primary  btn-file">
												<span class="fileinput-new">Select</span>
												<span class="fileinput-exists">Change</span>
												<input type="file" id="image" name="image">
											</span>
											<a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
										</div>
									</div>

                                    <div class="form-group">
										<label>File Input</label>
										
											<div class="fileinput fileinput-new input-group col-md-6" data-provides="fileinput">
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
                        </div>
                    </div>
                </div>
            </div>
			
			
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-default">Inline form</div>
                        <div class="card-body">
                            <form role="form" class="form-inline">
                                <div class="form-group">
                                    <label for="input-email" class="sr-only">Email address</label>
                                    <input id="input-email" type="email" placeholder="Type your email" class="form-control">
                                </div>
                                <div class="form-group mx-sm-3">
                                    <label for="input-password" class="sr-only">Password</label>
                                    <input id="input-password" type="password" placeholder="Type your password" class="form-control">
                                </div>
								<div class="form-group ">
									<div class="checkbox checkbox-primary ">
                                        <input id="checkbox22" type="checkbox" checked="">
                                        <label for="checkbox22"> Remember Me </label>
                                    </div>
								</div>
                                <button type="submit" class="btn btn-primary margin-l-5 mx-sm-3">Sign in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    
                    <div class="card">
                        <div class="card-header card-default">Stacked form</div>
                        <div class="card-body">
                            <form role="form">
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" placeholder="Enter email" class="form-control">
                                </div>
                                <div class="form-group ">
                                    <label>Password</label>
                                    <input type="password" placeholder="Password" class="form-control">
                                </div>
								<div class="form-group ">
									<div class="checkbox checkbox-primary ">
										<input id="checkbox21" type="checkbox" checked="">
										<label for="checkbox21"> Remember Me </label>
									</div>
								</div>
                                <button type="submit" class="btn btn-sm btn-primary">Sign in</button>
                            </form>
                        </div>
                    </div>
                    
                </div>
                <div class="col-sm-6">
                    
                    <div class="card">
                        <div class="card-header card-default">Horizontal form</div>
                        <div class="card-body">
                            <form>
							
								<div class="form-group row">
								  <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
								  <div class="col-sm-10">
									<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
								  </div>
								</div>
								
                                <div class="form-group row">
								  <label for="inputEmail3" class="col-sm-2 col-form-label">Password</label>
								  <div class="col-sm-10">
									<input type="password" placeholder="Password" class="form-control">
								  </div>
								</div>
                               
                                <div class="form-group ">
									<div class="checkbox checkbox-primary ">
										<input id="checkbox20" type="checkbox" checked="">
										<label for="checkbox20"> Remember Me </label>
									</div>
								</div>
								
                                <button type="submit" class="btn btn-sm btn-primary">Sign in</button>
                            </form>
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
