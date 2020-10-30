@extends('ducor::layouts.layout-5')


@section('pageTitle', 'FixedPlus - Laravel Admin Dashboard Template')


@section('breadcrumb')

				
            <div class="row page-header"><div class="col-lg-6 align-self-center ">
			  <h2>Gallery</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Pages</a></li>
					<li class="breadcrumb-item active">Gallery</li>
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
                            Lightbox2 Gallery
                        </div>
                        <div class="card-body">
                            <div class="lightboxGallery">
                                <a href="{{ du_asset( 'layout-5/img/gallery/1.jpg' ) }}" title="Unsplash Images" data-lightbox="gallery"><img src="{{ du_asset( 'layout-5/img/gallery/1s.jpg' ) }}" alt=""></a>
                                <a href="{{ du_asset( 'layout-5/img/gallery/2.jpg' ) }}" title="Unsplash Images" data-lightbox="gallery"><img src="{{ du_asset( 'layout-5/img/gallery/2s.jpg' ) }}" alt=""></a>
                                <a href="{{ du_asset( 'layout-5/img/gallery/3.jpg' ) }}" title="Unsplash Images" data-lightbox="gallery"><img src="{{ du_asset( 'layout-5/img/gallery/3s.jpg' ) }}" alt=""></a>
                                <a href="{{ du_asset( 'layout-5/img/gallery/4.jpg' ) }}" title="Unsplash Images" data-lightbox="gallery"><img src="{{ du_asset( 'layout-5/img/gallery/4s.jpg' ) }}" alt=""></a>
                                <a href="{{ du_asset( 'layout-5/img/gallery/2.jpg' ) }}" title="Unsplash Images" data-lightbox="gallery"><img src="{{ du_asset( 'layout-5/img/gallery/2s.jpg' ) }}" alt=""></a>
                                <a href="{{ du_asset( 'layout-5/img/gallery/3.jpg' ) }}" title="Unsplash Images" data-lightbox="gallery"><img src="{{ du_asset( 'layout-5/img/gallery/3s.jpg' ) }}" alt=""></a>
                                <a href="{{ du_asset( 'layout-5/img/gallery/4.jpg' ) }}" title="Unsplash Images" data-lightbox="gallery"><img src="{{ du_asset( 'layout-5/img/gallery/4s.jpg' ) }}" alt=""></a>
                                <a href="{{ du_asset( 'layout-5/img/gallery/2.jpg' ) }}" title="Unsplash Images" data-lightbox="gallery"><img src="{{ du_asset( 'layout-5/img/gallery/2s.jpg' ) }}" alt=""></a>
                                <a href="{{ du_asset( 'layout-5/img/gallery/4.jpg' ) }}" title="Unsplash Images" data-lightbox="gallery"><img src="{{ du_asset( 'layout-5/img/gallery/4s.jpg' ) }}" alt=""></a>
                                <a href="{{ du_asset( 'layout-5/img/gallery/2.jpg' ) }}" title="Unsplash Images" data-lightbox="gallery"><img src="{{ du_asset( 'layout-5/img/gallery/2s.jpg' ) }}" alt=""></a>
                                <a href="{{ du_asset( 'layout-5/img/gallery/3.jpg' ) }}" title="Unsplash Images" data-lightbox="gallery"><img src="{{ du_asset( 'layout-5/img/gallery/3s.jpg' ) }}" alt=""></a>
                                <a href="{{ du_asset( 'layout-5/img/gallery/1.jpg' ) }}" title="Unsplash Images" data-lightbox="gallery"><img src="{{ du_asset( 'layout-5/img/gallery/1s.jpg' ) }}" alt=""></a>
                            </div>
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

		<!-- Lightbox-->
        <link href="{{ du_asset( 'layout-5/lib/lightbox2/dist/css/lightbox.css' ) }}" rel="stylesheet">
		

@endsection


@section('footer-assets')
        <!-- Lightbox -->
        <script src="{{ du_asset( 'layout-5/lib/lightbox2/dist/js/lightbox.min.js' ) }}"></script>


@endsection
