@extends('ducor::layouts.layout-5')


@section('pageTitle', 'FixedPlus - Laravel Admin Dashboard Template')


@section('breadcrumb')

	
        <div class="row page-header">
			<div class="col-lg-6 align-self-center ">
				<h2>Draggable Cards</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">UI Elements</a></li>
					<li class="breadcrumb-item active">Draggable Cards</li>
				</ol>
			</div>
		</div>
			
        
@endsection


@section('content')

        <!-- ============================================================== -->
		<!-- 						Content Start	 						-->
		<!-- ============================================================== -->
	

            <div class="row" id="sortable-view">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header sortable-title">
                            Drag me 1
                        </div>
                        <div class="card-body">
                            <p class="margin-b-0">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged.
                            </p> 
                        </div>
                    </div>
                     <div class="card">
                        <div class="card-header sortable-title">
                            Drag me 2
                        </div>
                        <div class="card-body">
                            <p class="margin-b-0">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged.
                            </p> 
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header sortable-title">
                            Drag me 3
                        </div>
                        <div class="card-body">
                            <p class="margin-b-0">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged.
                            </p> 
                        </div>
                    </div>
                     <div class="card">
                        <div class="card-header sortable-title">
                            Drag me 4
                        </div>
                        <div class="card-body">
                            <p class="margin-b-0">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged.
                            </p> 
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


        <!-- Jquery UI -->
        <script src="{{ du_asset( 'layout-5/lib/jquery-ui/jquery-ui.min.js' ) }}"></script>
        <script>
            $(document).ready(function () {
                $(function () {
                    var element = "[class*=col]";
                    var handle = ".card-header";
                    var connect = "[class*=col]";
                    $(element).sortable(
                            {
                                handle: handle,
                                connectWith: connect,
                                tolerance: 'pointer',
                                forcePlaceholderSize: true,
                                opacity: 0.8,
                                containment: '#sortable-view'
                            })
                            .disableSelection();
                });
            });
        </script>

@endsection
