@extends('ducor::layouts.layout-5')


@section('pageTitle', 'FixedPlus - Laravel Admin Dashboard Template')


@section('breadcrumb')

		<div class="row page-header">
			<div class="col-lg-6 align-self-center ">
			    <h2>Tree View</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">UI Elements</a></li>
					<li class="breadcrumb-item active">Tree view</li>
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
                            Basic tree view
                        </div>
                        <div class="card-body">
                            <div id="basicTree">
                                <ul>
                                    <li data-jstree='{"opened":true}'>Admin
                                        <ul>
                                            <li data-jstree='{"opened":true}'>Html
                                                <ul>
                                                    <li data-jstree='{"type":"file"}'>Css</li>
                                                    <li data-jstree='{"opened":true}'>Plugins
                                                        <ul>
                                                            <li data-jstree='{"type":"file"}'>Bootstrap</li>
                                                            <li data-jstree='{"type":"file"}'>chart-c3</li>
                                                            <li data-jstree='{"type":"file"}'>chartJs</li>
                                                            <li data-jstree='{"type":"file"}'>datatables</li>
                                                            <li data-jstree='{"type":"file"}'>dropzone</li>
                                                            <li data-jstree='{"type":"file"}'>----</li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li data-jstree='{"opened":true}'>images
                                                <ul>
                                                    <li data-jstree='{"type":"file"}'>img1.jpg</li>
                                                    <li data-jstree='{"type":"file"}'>img2.jpg</li>
                                                    <li data-jstree='{"type":"file"}'>----</li>
                                                </ul>
                                            </li>
                                            <li data-jstree='{"opened":true}'>Js
                                                <ul>
                                                    <li data-jstree='{"type":"file"}'>custom.js</li>
                                                    <li data-jstree='{"type":"file"}'>morris-custom.js</li>
                                                    <li data-jstree='{"type":"file"}'>----</li>
                                                </ul>
                                            </li>
                                            <li data-jstree='{"opened":true}'>scss
                                                <ul>
                                                    <li data-jstree='{"type":"file"}'>_variables.scss</li>
                                                    <li data-jstree='{"type":"file"}'>_button.scss</li>
                                                    <li data-jstree='{"type":"file"}'>----</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li data-jstree='{"type":"file"}'>Landing page</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-default">
                            Checkbox tree view
                        </div>
                        <div class="card-body">
                            <div id="checkTree">
                                <ul>
                                    <li data-jstree='{"opened":true}'>Admin
                                        <ul>
                                            <li data-jstree='{"opened":true}'>Html
                                                <ul>
                                                    <li data-jstree='{"type":"file"}'>Css</li>
                                                    <li data-jstree='{"opened":true}'>Plugins
                                                        <ul>
                                                            <li data-jstree='{"type":"file"}'>Bootstrap</li>
                                                            <li data-jstree='{"type":"file"}'>chart-c3</li>
                                                            <li data-jstree='{"type":"file"}'>chartJs</li>
                                                            <li data-jstree='{"type":"file"}'>datatables</li>
                                                            <li data-jstree='{"type":"file"}'>dropzone</li>
                                                            <li data-jstree='{"type":"file"}'>----</li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li data-jstree='{"opened":true}'>images
                                                <ul>
                                                    <li data-jstree='{"type":"file"}'>img1.jpg</li>
                                                    <li data-jstree='{"type":"file"}'>img2.jpg</li>
                                                    <li data-jstree='{"type":"file"}'>----</li>
                                                </ul>
                                            </li>
                                            <li data-jstree='{"opened":true}'>Js
                                                <ul>
                                                    <li data-jstree='{"type":"file"}'>custom.js</li>
                                                    <li data-jstree='{"type":"file"}'>morris-custom.js</li>
                                                    <li data-jstree='{"type":"file"}'>----</li>
                                                </ul>
                                            </li>
                                            <li data-jstree='{"opened":true}'>scss
                                                <ul>
                                                    <li data-jstree='{"type":"file"}'>_variables.scss</li>
                                                    <li data-jstree='{"type":"file"}'>_button.scss</li>
                                                    <li data-jstree='{"type":"file"}'>----</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li data-jstree='{"type":"file"}'>Landing page</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                 <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-default">
                            Drag & drop
                        </div>
                        <div class="card-body">
                            <div id="dragTree">
                                <ul>
                                    <li data-jstree='{"opened":true}'>Admin
                                        <ul>
                                            <li data-jstree='{"opened":true}'>Html
                                                <ul>
                                                    <li data-jstree='{"type":"file"}'>Css</li>
                                                    <li data-jstree='{"opened":true}'>Plugins
                                                        <ul>
                                                            <li data-jstree='{"type":"file"}'>Bootstrap</li>
                                                            <li data-jstree='{"type":"file"}'>chart-c3</li>
                                                            <li data-jstree='{"type":"file"}'>chartJs</li>
                                                            <li data-jstree='{"type":"file"}'>datatables</li>
                                                            <li data-jstree='{"type":"file"}'>dropzone</li>
                                                            <li data-jstree='{"type":"file"}'>----</li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li data-jstree='{"opened":true}'>images
                                                <ul>
                                                    <li data-jstree='{"type":"file"}'>img1.jpg</li>
                                                    <li data-jstree='{"type":"file"}'>img2.jpg</li>
                                                    <li data-jstree='{"type":"file"}'>----</li>
                                                </ul>
                                            </li>
                                            <li data-jstree='{"opened":true}'>Js
                                                <ul>
                                                    <li data-jstree='{"type":"file"}'>custom.js</li>
                                                    <li data-jstree='{"type":"file"}'>morris-custom.js</li>
                                                    <li data-jstree='{"type":"file"}'>----</li>
                                                </ul>
                                            </li>
                                            <li data-jstree='{"opened":true}'>scss
                                                <ul>
                                                    <li data-jstree='{"type":"file"}'>_variables.scss</li>
                                                    <li data-jstree='{"type":"file"}'>_button.scss</li>
                                                    <li data-jstree='{"type":"file"}'>----</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li data-jstree='{"type":"file"}'>Landing page</li>
                                </ul>
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

        <!-- Treeview -->
        <link href="{{ du_asset( 'layout-5/lib/js-tree/dist/themes/default/style.css' ) }}" rel="stylesheet" type="text/css" />
		
@endsection


@section('footer-assets')


		
        <!-- TreeView -->
        <script src="{{ du_asset( 'layout-5/lib/js-tree/dist/jstree.min.js' ) }}"></script>
        <script>
            $(document).ready(function () {
                // Basic
                $('#basicTree').jstree({
                    'core': {
                        'themes': {
                            'responsive': false
                        }
                    },
                    'types': {
                        'default': {
                            'icon': 'md md-folder'
                        },
                        'file': {
                            'icon': 'md md-insert-drive-file'
                        }
                    },
                    'plugins': ['types']
                });
                //checkbox
                $('#checkTree').jstree({
                    'core': {
                        'themes': {
                            'responsive': false
                        }
                    },
                    'types': {
                        'default': {
                            'icon': 'fa fa-folder'
                        },
                        'file': {
                            'icon': 'fa fa-file'
                        }
                    },
                    'plugins': ['types', 'checkbox']
                });
                // Drag & Drop
                $('#dragTree').jstree({
                    'core': {
                        'check_callback': true,
                        'themes': {
                            'responsive': false
                        }
                    },
                    'types': {
                        'default': {
                            'icon': 'fa fa-folder'
                        },
                        'file': {
                            'icon': 'fa fa-file'
                        }
                    },
                    'plugins': ['types', 'dnd']
                });
            });
        </script>


@endsection
