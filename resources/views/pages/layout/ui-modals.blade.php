@extends('ducor::layouts.layout-5')


@section('pageTitle', 'FixedPlus - Laravel Admin Dashboard Template')


@section('breadcrumb')

		<div class="row page-header">
			<div class="col-lg-6 align-self-center ">
			   <h2>Bootstrap Modals</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">UI Elements</a></li>
					<li class="breadcrumb-item active">Modals</li>
				</ol>
			</div>
		</div>

@endsection


@section('content')



        <!-- ============================================================== -->
		<!-- 						Content start		 						-->
		<!-- ============================================================== -->

        
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-default">
                            Bootstrap Popup Modals 
                        </div>
                        <div class="card-body">
                            <a href="#" class="btn btn-success margin-r-5" data-toggle="modal" data-target="#loginModal" >Login Modal</a>                         
                            <a href="#" class="btn btn-primary margin-r-5" data-toggle="modal" data-target="#signupModal">Sign Up Modal</a>                               
                            <a href="#" class="btn btn-teal margin-r-5" data-toggle="modal" data-target="#textModal">Text Modal</a>
                            <a href="#" class="btn btn-warning margin-r-5" data-toggle="modal" data-target="#videoModal">Video Modal</a>                         
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-default">
                            Modals Size
                        </div>
                        <div class="card-body">
                                <button type="button" class="btn btn-indigo margin-r-5" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button>
                                <button type="button" class="btn btn-danger margin-r-5" data-toggle="modal" data-target=".bs-example-modal-default">Default size modal</button>            
                                <button type="button" class="btn btn-teal margin-r-5" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>
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
