@extends('ducor::layouts.layout-5')


@section('pageTitle', 'FixedPlus - Laravel Admin Dashboard Template')


@section('breadcrumb')

            <div class="row page-header"><div class="col-lg-6 align-self-center ">
			  <h2>File Upload</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Form</a></li>
					<li class="breadcrumb-item active">File Upload</li>		
				</ol></div></div>

@endsection


@section('content')


	 
        <!-- ============================================================== -->
		<!-- 						Content Start	 						-->
		<!-- ============================================================== -->
				

        

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header card-default">
                           Drag & drop file upload

                        </div>
                        <div class="card-body">
                            <form id="my-awesome-dropzone" action="#" class="dropzone">
                                <button type="submit" class="btn btn-primary btn-rounded box-shadow float-right">Submit!</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            

  


        </section>
        <!-- ============================================================== -->
		<!-- 						Content End		 						-->
		<!-- ============================================================== -->


        <!-- Dropzone -->
        <script src="{{ du_asset( 'layout-5/lib/dropzone/js/dropzone.js' ) }}"></script>
        <script>
            $(document).ready(function () {
                Dropzone.options.myAwesomeDropzone = {
                    autoProcessQueue: false,
                    uploadMultiple: true,
                    parallelUploads: 100,
                    maxFiles: 100
                };
            });
        </script>

    </body>
</html>
@endsection


@section('head-assets')

        <!-- Dropzone -->
        <link href="{{ du_asset( 'layout-5/lib/dropzone/css/basic.css' ) }}" rel="stylesheet">
        <link href="{{ du_asset( 'layout-5/lib/dropzone/css/dropzone.css' ) }}" rel="stylesheet">
		
     
@endsection


@section('footer-assets')


@endsection
