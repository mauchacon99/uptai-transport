@extends('ducor::layouts.layout-5')


@section('pageTitle', 'FixedPlus - Laravel Admin Dashboard Template')


@section('breadcrumb')

            <div class="row page-header"><div class="col-lg-6 align-self-center ">
			  <h2>Jsgrid Table</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Tables</a></li>
					<li class="breadcrumb-item active">Jsgrid Table</li>		
				</ol></div></div>
@endsection


@section('content')

        <!-- ============================================================== -->
		<!-- 						Content Start	 						-->
		<!-- ============================================================== -->
		

			
        

            <div class="row">
               
                 <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-default">
                            Jsgrid Table
                        </div>
                        <div class="card-body">
                          
							<div id="jsGrid"></div>

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

        <!-- Js Grid plugins -->
		<link rel="stylesheet" type="text/css" href="{{ du_asset( 'layout-5/lib/jsgrid/css/jsgrid.css' ) }}" />
		<link rel="stylesheet" type="text/css" href="{{ du_asset( 'layout-5/lib/jsgrid/css/theme.css' ) }}" />
		

@endsection


@section('footer-assets')


		<!-- Js Grid -->
		<script src="{{ du_asset( 'layout-5/lib/jsgrid/jsgrid.min.js' ) }}"></script>
		<script src="{{ du_asset( 'layout-5/lib/jsgrid/db.js' ) }}"></script>
        
		<script>
        $(document).ready(function() {
            $("#jsGrid").jsGrid({
                 height: "700px",
                width: "100%",
                filtering: true,
                editing: true,
                inserting: true,
                sorting: true,
                paging: true,
                autoload: true,
                pageSize: 15,
                pageButtonCount: 5,
                deleteConfirm: "Do you really want to delete the client?",
                controller: db,
                fields: [
                    { name: "Name", type: "text", width: 150 },
                    { name: "Age", type: "number", width: 50 },
                    { name: "Address", type: "text", width: 200 },
                    { name: "Country", type: "select", items: db.countries, valueField: "Id", textField: "Name" },
                    { name: "Married", type: "checkbox", title: "Is Married", sorting: false },
                    { type: "control" }
                ]
            });
        });
    </script>

@endsection
