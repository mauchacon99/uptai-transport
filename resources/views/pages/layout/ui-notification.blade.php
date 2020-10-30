@extends('ducor::layouts.layout-5')


@section('pageTitle', 'FixedPlus - Laravel Admin Dashboard Template')


@section('breadcrumb')
		<div class="row page-header">
			<div class="col-lg-6 align-self-center ">
			   <h2>Notification</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">UI Elements</a></li>
					<li class="breadcrumb-item active">Notification</li>
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
                        <div class="card-header card-default">
                            Simple alerts
                        </div>
                        <div class="card-body">
                             <div class="alert alert-warning alert-dismissible" role="alert"> <strong>Warning !</strong> This is an example top alert. You can edit what u wish.. </div>
                             <div class="alert alert-danger alert-dismissible" role="alert">  <strong>Error !</strong> This is an example top alert. You can edit what u wish.. </div>
                             <div class="alert alert-info alert-dismissible" role="alert"><strong>Information !</strong> This is an example top alert. You can edit what u wish.. </div>
                             <div class="alert alert-success alert-dismissible margin-b-0" role="alert"> <strong>Success !</strong> This is an example top alert. You can edit what u wish.. </div>
                        </div>
                    </div>
                </div>
			</div>
			 <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header card-default">
                           Dismiss alerts
                        </div>
                        <div class="card-body">
                             <div class="alert alert-warning alert-dismissible" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> <strong>Warning !</strong> This is an example top alert. You can edit what u wish.. </div>
                             <div class="alert alert-danger alert-dismissible" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> <strong>Error !</strong> This is an example top alert. You can edit what u wish.. </div>
                             <div class="alert alert-info alert-dismissible" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> <strong>Information!</strong> This is an example top alert. You can edit what u wish.. </div>
                             <div class="alert alert-success alert-dismissible margin-b-0" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> <strong>Success !</strong> This is an example top alert. You can edit what u wish.. </div>
                        </div>
                    </div>
                </div>
            </div>
			
			
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header card-default">
                            Simple alerts
                        </div>
                        <div class="card-body">
                             <div class="alert bg-warning alert-dismissible" role="alert"> <strong>Warning !</strong> This is an example top alert. You can edit what u wish.. </div>
                             <div class="alert bg-danger alert-dismissible" role="alert">  <strong>Error !</strong> This is an example top alert. You can edit what u wish.. </div>
                             <div class="alert bg-info alert-dismissible" role="alert"><strong>Information !</strong> This is an example top alert. You can edit what u wish.. </div>
                             <div class="alert bg-success alert-dismissible margin-b-0" role="alert"> <strong>Success !</strong> This is an example top alert. You can edit what u wish.. </div>
                        </div>
                    </div>
                </div>
			</div>
			<div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header card-default">
                           Dismiss alerts
                        </div>
                        <div class="card-body">
                             <div class="alert bg-warning alert-dismissible" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> <strong>Warning !</strong> This is an example top alert. You can edit what u wish.. </div>
                             <div class="alert bg-danger alert-dismissible" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> <strong>Error !</strong> This is an example top alert. You can edit what u wish.. </div>
                             <div class="alert bg-info alert-dismissible" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> <strong>Information !</strong> This is an example top alert. You can edit what u wish.. </div>
                             <div class="alert bg-success alert-dismissible margin-b-0" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> <strong>Success !</strong> This is an example top alert. You can edit what u wish.. </div>
                        </div>
                    </div>
                </div>
            </div>
			
            <div class="row">
                   <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-default">
                            Toastr alerts
                        </div>
                        <div class="card-body">
                             <div class="buttons">
                                <a href="#" class="btn btn-info toastr1">Info Message</a>
                                <a href="#" class="btn btn-warning toastr2">Warning Message</a>
                                <a href="#" class="btn btn-success toastr3">Success Message</a>
                                <a href="#" class="btn btn-danger toastr4">Error Message</a>
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
		<!-- Toast -->
        <link href="{{ du_asset( 'layout-5/lib/toast/jquery.toast.min.css' ) }}" rel="stylesheet">
		

@endsection


@section('footer-assets')


		
        <!-- Toast -->
        <script src="{{ du_asset( 'layout-5/lib/toast/jquery.toast.min.js' ) }}"></script>
        <script>
            $(document).ready(function () {
                $(".toastr1").click(function () {
                    $.toast({
                        heading: 'Information !',
                        text: 'This is an example top alert. You can edit what u wish..',
                        position: 'top-right',
                        loaderBg: '#fff',
                        icon: 'info',
                        hideAfter: 3000,
                        stack: 1
                    });
                });
                $(".toastr2").click(function () {
                    $.toast({
                        heading: 'Warning !',
                        text: 'This is an example top alert. You can edit what u wish..',
                        position: 'top-right',
                        loaderBg: '#fff',
                        icon: 'warning',
                        hideAfter: 3000,
                        stack: 1
                    });
                });
                $(".toastr3").click(function () {
                    $.toast({
                        heading: 'Success !',
                        text: 'This is an example top alert. You can edit what u wish..',
                        position: 'top-right',
                        loaderBg: '#fff',
                        icon: 'success',
                        hideAfter: 3000,
                        stack: 1
                    });
                });
                $(".toastr4").click(function () {
                    $.toast({
                        heading: 'Error !',
                        text: 'This is an example top alert. You can edit what u wish..',
                        position: 'top-right',
                        loaderBg: '#fff',
                        icon: 'error',
                        hideAfter: 3000,
                        stack: 1
						
                    });
                });
            });
        </script>

@endsection
