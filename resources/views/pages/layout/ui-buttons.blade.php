@extends('ducor::layouts.layout-5')


@section('pageTitle', 'FixedPlus - Laravel Admin Dashboard Template')


@section('breadcrumb')

		
        <div class="row page-header">
			<div class="col-lg-6 align-self-center ">
				<h2>Buttons</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
					<li class="breadcrumb-item" ><a href="#">UI Elements</a></li>
					<li class="breadcrumb-item active">Buttons</li>
				</ol>
			</div>
		</div>

@endsection


@section('content')

        <!-- ============================================================== -->
		<!-- 						Content Start	 						-->
		<!-- ============================================================== -->

        
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header  card-default">
                            Default Buttons
                        </div>
                        <div class="card-body">
                            <p class="text-muted margin-b-10">classes <code>btn btn-default</code> for create a default btn.</p>
                            <div class="buttons">
                                <a href="javascript: void(0);" class="btn btn-default">Default</a>
                                <a href="javascript: void(0);" class="btn btn-primary">Primary</a>
                                <a href="javascript: void(0);" class="btn btn-indigo">Indigo</a>
                                <a href="javascript: void(0);" class="btn btn-teal">Teal</a>
                                <a href="javascript: void(0);" class="btn btn-success">Success</a>
                                <a href="javascript: void(0);" class="btn btn-info">Info</a> 
                                <a href="javascript: void(0);" class="btn btn-danger">Danger</a>
                                <a href="javascript: void(0);" class="btn btn-warning">Warning</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
			<div class="row">
			 <div class="col">
                    <div class="card">
                        <div class="card-header card-default">
                            Boxshadow Buttons
                        </div>
                        <div class="card-body">
                            <p class="text-muted margin-b-10">classes <code>btn btn-default btn-rounded box-shadow</code> for create a border btn.</p>
                            <div class="buttons">
                                <a href="javascript: void(0);" class="btn btn-default btn-rounded box-shadow">Default</a>
                                <a href="javascript: void(0);" class="btn btn-primary btn-rounded box-shadow">Primary</a>
                                <a href="javascript: void(0);" class="btn btn-indigo btn-rounded box-shadow">Indigo</a>
                                <a href="javascript: void(0);" class="btn btn-teal btn-rounded box-shadow">Teal</a>
                                <a href="javascript: void(0);" class="btn btn-success btn-rounded box-shadow">Success</a>
                                <a href="javascript: void(0);" class="btn btn-info btn-rounded box-shadow">Info</a> 
                                <a href="javascript: void(0);" class="btn btn-danger btn-rounded box-shadow">Danger</a>
                                <a href="javascript: void(0);" class="btn btn-warning btn-rounded box-shadow">Warning</a>
                            </div>
                        </div>
                    </div>
                </div>
			</div>

            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header  card-default">
                            Size Buttons
                        </div>
                        <div class="card-body">
                            <p class="text-muted margin-b-10">classes <code>btn btn-default btn-xs</code> for create a fill size btn.</p>
                            <div class="buttons margin-b-20">
                                <a href="javascript: void(0);" class="btn btn-primary btn-xs">Small</a>
                                <a href="javascript: void(0);" class="btn btn-primary btn-sm">Medium</a>
                                <a href="javascript: void(0);" class="btn btn-primary ">Default</a>
                                <a href="javascript: void(0);" class="btn btn-primary btn-lg ">Large</a>
                            </div>
                            <p class="text-muted margin-b-10">classes <code>btn btn-default btn-border btn-xs</code> for create a border size btn.</p>
                            <div class="buttons margin-b-20">
                                <a href="javascript: void(0);" class="btn btn-primary btn-border btn-xs">Small</a>
                                <a href="javascript: void(0);" class="btn btn-primary btn-border btn-sm">Medium</a>
                                <a href="javascript: void(0);" class="btn btn-primary btn-border ">Default</a>
                                <a href="javascript: void(0);" class="btn btn-primary btn-border btn-lg ">Large</a>
                            </div>
                            <div class="buttons">
                                <p class="text-muted margin-b-10">classes <code>btn btn-default btn-border btn-rounded btn-xs</code> for create a border rounded size btn.</p>
                                <a href="javascript: void(0);" class="btn btn-primary btn-rounded btn-border btn-xs">Small</a>
                                <a href="javascript: void(0);" class="btn btn-primary btn-rounded btn-border btn-sm">Medium</a>
                                <a href="javascript: void(0);" class="btn btn-primary btn-rounded btn-border ">Default</a>
                                <a href="javascript: void(0);" class="btn btn-primary btn-rounded btn-border btn-lg ">Large</a>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
			
			<div class="row">
                <div class="col ">
                    <div class="card">
                        <div class="card-header card-default">
                            Rounded Buttons
                        </div>
                        <div class="card-body">
                            <p class="text-muted margin-b-10">classes <code>btn btn-default btn-rounded</code> for create a rounded btn.</p>
                            <div class="buttons margin-b-20">
                                <a href="javascript: void(0);" class="btn btn-default btn-rounded">Default</a>
                                <a href="javascript: void(0);" class="btn btn-primary btn-rounded">Primary</a>
                                <a href="javascript: void(0);" class="btn btn-indigo btn-rounded">Indigo</a>
                                <a href="javascript: void(0);" class="btn btn-teal btn-rounded">Teal</a>
                                <a href="javascript: void(0);" class="btn btn-success btn-rounded">Success</a>
                                <a href="javascript: void(0);" class="btn btn-info btn-rounded">Info</a> 
                                <a href="javascript: void(0);" class="btn btn-danger btn-rounded">Danger</a>
                                <a href="javascript: void(0);" class="btn btn-warning btn-rounded">Warning</a>                       
                            </div>
                            <div class="buttons">
                                <p class="text-muted margin-b-10">classes <code>btn btn-default  btn-border btn-rounded</code> for create a border rounded btn.</p>
                                <a href="javascript: void(0);" class="btn btn-default btn-border btn-rounded">Default</a>
                                <a href="javascript: void(0);" class="btn btn-primary btn-border btn-rounded">Primary</a>
                                <a href="javascript: void(0);" class="btn btn-indigo btn-border btn-rounded">Indigo</a>
                                <a href="javascript: void(0);" class="btn btn-teal btn-border btn-rounded">Teal</a>
                                <a href="javascript: void(0);" class="btn btn-success btn-border btn-rounded">Success</a>
                                <a href="javascript: void(0);" class="btn btn-info btn-border btn-rounded">Info</a> 
                                <a href="javascript: void(0);" class="btn btn-danger btn-border btn-rounded">Danger</a>
                                <a href="javascript: void(0);" class="btn btn-warning btn-border btn-rounded">Warning</a>                       
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
            <div class="row">
                <div class="col ">
                    <div class="card">
                        <div class="card-header  card-default">
                            Dropdown Buttons
                        </div>
                        <div class="card-body">
                            <p class="text-muted margin-b-10">Add dropdown-menu ul list into <code>btn-group</code> </p>
                           
							<div class="buttons">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <li class="dropdown-item"><a href="#">Action</a></li>
                                        <li class="dropdown-item"><a href="#">Another action</a></li>
                                        <li class="dropdown-item"><a href="#">Something else here</a></li>
                                        <li class="dropdown-divider"></li>
                                        <li class="dropdown-item"><a href="#">Separated link</a></li>
                                    </ul>
                                </div>
							
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <li class="dropdown-item"><a href="#">Action</a></li>
                                        <li class="dropdown-item"><a href="#">Another action</a></li>
                                        <li class="dropdown-item"><a href="#">Something else here</a></li>
                                        <li class="dropdown-divider"></li>
                                        <li class="dropdown-item"><a href="#">Separated link</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-success dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <li class="dropdown-item"><a href="#">Action</a></li>
                                        <li class="dropdown-item"><a href="#">Another action</a></li>
                                        <li class="dropdown-item"><a href="#">Something else here</a></li>
                                        <li class="dropdown-divider"></li>
                                        <li class="dropdown-item"><a href="#">Separated link</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-teal dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <li class="dropdown-item"><a href="#">Action</a></li>
                                        <li class="dropdown-item"><a href="#">Another action</a></li>
                                        <li class="dropdown-item"><a href="#">Something else here</a></li>
                                        <li class="dropdown-divider"></li>
                                        <li class="dropdown-item"><a href="#">Separated link</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
	
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header card-default">
                            Icon Buttons
                        </div>
                        <div class="card-body">
                            <p class="text-muted margin-b-10">Classes <code>btn btn-default  btn-icon</code> and add icon into i tag before text</p>
                            <div class="buttons margin-b-10">
                                <a href="javascript: void(0);" class="btn btn-primary btn-icon"><i class="fa fa-cloud-download"></i> Download</a>
                                <a href="javascript: void(0);" class="btn btn-success btn-icon"><i class="fa fa-user"></i> Login</a>
                                <a href="javascript: void(0);" class="btn btn-danger btn-icon"><i class="fa fa-times"></i> Danger</a>
                                <a href="javascript: void(0);" class="btn btn-warning btn-icon"><i class="fa fa-warning"></i> Warning</a>
                            </div>
                            <div class="buttons margin-b-20">
                                <a href="javascript: void(0);" class="btn btn-primary btn-rounded btn-icon"><i class="fa fa-cloud-download"></i> Download</a>
                                <a href="javascript: void(0);" class="btn btn-success btn-rounded btn-icon"><i class="fa fa-user"></i> Login</a>
                                <a href="javascript: void(0);" class="btn btn-danger btn-rounded btn-icon"><i class="fa fa-times"></i> Danger</a>
                                <a href="javascript: void(0);" class="btn btn-warning btn-rounded btn-icon"><i class="fa fa-warning"></i> Warning</a>
                            </div>
                            <div class="buttons">
                                <p>File upload button</p>
                                <div class="fileupload btn btn-primary btn-icon margin-r-5">
                                    <i class="fa fa-cloud-upload"></i>   <span>Upload</span>
                                    <input type="file" class="upload">
                                </div>
                                <div class="fileupload btn btn-success btn-rounded btn-icon">
                                    <i class="fa fa-cloud-upload"></i>   <span>Upload</span>
                                    <input type="file" class="upload">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
			
			<div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header  card-default">
                            Social buttons
                        </div>
                        <div class="card-body">
                            <p class="text-muted margin-b-10">Example <code>btn btn-facebook</code> </p>
                            <div class="buttons margin-b-10">
                                <a href="javascript: void(0);" class="btn btn-facebook"><i class="fa fa-facebook"></i></a>
                                <a href="javascript: void(0);" class="btn btn-twitter"><i class="fa fa-twitter"></i></a>
                                <a href="javascript: void(0);" class="btn btn-googleplus"><i class="fa fa-google-plus"></i></a>
                                <a href="javascript: void(0);" class="btn btn-pinterest"><i class="fa fa-pinterest"></i></a>
                                <a href="javascript: void(0);" class="btn btn-linkedin"><i class="fa fa-linkedin"></i></a>
                                <a href="javascript: void(0);" class="btn btn-youtube"><i class="fa fa-youtube"></i></a>
                                <a href="javascript: void(0);" class="btn btn-dribbble"><i class="fa fa-dribbble"></i></a>
                                <a href="javascript: void(0);" class="btn btn-github"><i class="fa fa-github"></i></a>
                                <a href="javascript: void(0);" class="btn btn-skype"><i class="fa fa-skype"></i></a>
                            </div>
                            <div class="buttons margin-b-10">
                                <a href="javascript: void(0);" class="btn btn-facebook"><i class="fa fa-facebook margin-r-5"></i> facebook</a>
                                <a href="javascript: void(0);" class="btn btn-twitter"><i class="fa fa-twitter margin-r-5"></i> twitter</a>
                                <a href="javascript: void(0);" class="btn btn-googleplus"><i class="fa fa-google-plus margin-r-5"></i> google plus</a>
                                <a href="javascript: void(0);" class="btn btn-pinterest"><i class="fa fa-pinterest margin-r-5"></i> pinterest</a>
                                <a href="javascript: void(0);" class="btn btn-linkedin"><i class="fa fa-linkedin margin-r-5"></i> linkedin</a>
                                <a href="javascript: void(0);" class="btn btn-youtube"><i class="fa fa-youtube margin-r-5"></i> youtube</a>
                                <a href="javascript: void(0);" class="btn btn-dribbble"><i class="fa fa-dribbble margin-r-5"></i> dribbble</a>
                                <a href="javascript: void(0);" class="btn btn-github"><i class="fa fa-github margin-r-5"></i> github</a>
                                <a href="javascript: void(0);" class="btn btn-skype"><i class="fa fa-skype margin-r-5"></i> skype</a>
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
