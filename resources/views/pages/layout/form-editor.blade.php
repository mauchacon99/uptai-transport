@extends('ducor::layouts.layout-5')


@section('pageTitle', 'FixedPlus - Laravel Admin Dashboard Template')


@section('breadcrumb')

		           
        <div class="row page-header">
			<div class="col-lg-6 align-self-center ">
			    <h2>Text Editor</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Form</a></li>
					<li class="breadcrumb-item active">Text Editor</li>		
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
                            Wysihtml5 text editor
                        </div>
                        <div class="card-body">
                            <form>
                                <textarea class="form-control" id="textarea" rows="10" style="height:300px;" ></textarea>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header card-default">
                            Summernote Standard editor
                        </div>
                        <div class="card-body">
                            <div class="summernote">
                                <h3>Hello Rakesh! </h3>
                                <p>dummy text of the printing and typesetting industry. <strong>Lorem Ipsum has been the dustrys</strong> standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more
                                    <br/><br/>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.
                                    recently with.</p><p>Mark Smith
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header card-default">
                            Summernote with custom toolbar
                        </div>
                        <div class="card-body">
                            <div class="summernote1">
                                <h4>It is a long established fact</h4>
                                <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)</p><p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)with.</p>
                            </div>

                        </div>
                    </div>
                </div>         
            </div>
			<div class="row">
			   <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header card-default">
                            Summernote Airmode
                        </div>
                        <div class="card-body">
                            <div class="summernote2">
                                <h4>It is a long established fact</h4>
                                <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)</p><p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)with.</p>
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


        <!-- Wysihtml5 and Summernote -->
        <link href="{{ du_asset( 'layout-5/lib/wysihtml5/bootstrap-wysihtml5.css' ) }}" rel="stylesheet">
        <link href="{{ du_asset( 'layout-5/lib/summernote/summernote.css' ) }}" rel="stylesheet">
		
@endsection


@section('footer-assets')


		<!-- Wysihtml5 and Summernote -->
        <script src="{{ du_asset( 'layout-5/lib/wysihtml5/wysihtml5-0.3.0.js' ) }}"></script>
        <script src="{{ du_asset( 'layout-5/lib/wysihtml5/bootstrap-wysihtml5.js' ) }}"></script>
		
        <script src="{{ du_asset( 'layout-5/lib/summernote/summernote.js' ) }}"></script>
		
        <script>
            $(document).ready(function () {
                //wysihtml5
                $('#textarea').wysihtml5({
					height:'500px',
				});

                //summernote
                $(function () {

					$('.summernote').summernote({
						height:'400px',
					});
					
                    $('.summernote1').summernote({
						height:'400px',
                        toolbar: [
                            ['headline', ['style']],
                            ['style', ['bold', 'italic', 'underline', 'superscript', 'subscript', 'strikethrough', 'clear']],
                            ['textsize', ['fontsize']],
                            ['alignment', ['ul', 'ol', 'paragraph', 'lineheight']]
                        ]
                    });

                    $('.summernote2').summernote({
                        airMode: true,
                    });

                });

            });
        </script>


@endsection
