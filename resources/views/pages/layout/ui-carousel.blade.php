@extends('ducor::layouts.layout-5')


@section('pageTitle', 'FixedPlus - Laravel Admin Dashboard Template')


@section('breadcrumb')

        <div class="row page-header">
			<div class="col-lg-6 align-self-center ">
			  <h2>Carousel</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">UI Elements</a></li>
					<li class="breadcrumb-item active">Carousel</li>
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
                            Carousel slider example 
                        </div>
                        <div class="card-body">
							<div id="myCarousel" class="carousel slide" data-ride="carousel">
							  <!-- Indicators -->
							  <ol class="carousel-indicators">
								<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
								<li data-target="#myCarousel" data-slide-to="1"></li>
								<li data-target="#myCarousel" data-slide-to="2"></li>
								<li data-target="#myCarousel" data-slide-to="3"></li>
							  </ol>

							  <!-- Wrapper for slides -->
							  <div class="carousel-inner" role="listbox">
								<div class="carousel-item active">
								  <img src="{{ du_asset( 'layout-5/img/gallery/1.jpg' ) }}" alt="" class="img-fluid">
								</div>

								<div class="carousel-item">
								  <img src="{{ du_asset( 'layout-5/img/gallery/2.jpg' ) }}" alt="" class="img-fluid">
								</div>

								<div class="carousel-item">
									<img src="{{ du_asset( 'layout-5/img/gallery/3.jpg' ) }}" alt="" class="img-fluid">
								</div>

								<div class="carousel-item">
								 <img src="{{ du_asset( 'layout-5/img/gallery/4.jpg' ) }}" alt="" class="img-fluid">
								</div>
							  </div>

							  <!-- Left and right controls -->
							  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							  </a>
							  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							  </a>
							</div>
                        </div>
                    </div>
                </div>
            </div>


            

  


        </section>
        <!--end main content-->

@endsection


@section('head-assets')

@endsection


@section('footer-assets')


@endsection
