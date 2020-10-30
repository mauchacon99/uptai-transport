@extends('ducor::layouts.layout-5')


@section('pageTitle', 'FixedPlus - Laravel Admin Dashboard Template')


@section('breadcrumb')

					
            <div class="row page-header"><div class="col-lg-6 align-self-center ">
			  <h2>Add Pages</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Corporate</a></li>
					<li class="breadcrumb-item active">Add Pages</li>
				</ol></div></div>
           
@endsection


@section('content')




        
		<!-- ============================================================== -->
		<!-- 						Content Start	 						-->
		<!-- ============================================================== -->

        

			<div class="alert bg-success alert-dismissible" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> <strong>Success!</strong> Page successfully added.. </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header card-default">
							Add Pages
							<p class="text-muted">Lorem Ipsum is simply dummy text of the <code>printing and typesetting</code> industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                        <div class="card-body">
							
                            <form method="get" action="" class="form-horizontal">
                                    <div class="form-group">
                                        <label>Menu Position</label>
                                           <select name="account" class="form-control m-b">
                                                <option>Header Menu</option>
                                                <option>Footer Menu</option>
                                                <option>Side Menu</option>
                                            </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Page Name</label>
                                            <input type="text" placeholder="Page name" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Slug</label>
                                            <input type="text" placeholder="Page slug" class="form-control">
											<small class="text-muted">Sample : <code>corporate-page</code></small>
                                    </div>

                                   <div class="form-group">
                                        <label>Content</label>
                                        <div class="summernote" style="display: none;"><p>Hello Summernote</p></div>
                                    </div>

                                   <div class="form-group">
										<label>Featured Image</label>
										<div class="fileinput-new" data-provides="fileinput">
										  <div class="fileinput-preview" data-trigger="fileinput" style="width: 200px; height:150px;"></div>
											<span class="btn btn-primary  btn-file">
												<span class="fileinput-new">Select</span>
												<span class="fileinput-exists">Change</span>
												<input type="file" id="image" name="image">
											</span>
											<a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
										</div>
									</div>
								
								<div class="">
									Meta Settings
									<p class="text-muted">Lorem Ipsum is simply dummy text of the <code>printing and typesetting</code> industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
								</div>
							<hr>
                                    <div class="form-group">
                                        <label>Title</label>
                                            <input type="text" placeholder="Page title" class="form-control form-control-rounded">
                                    </div>
									
                                    <div class="form-group">
                                        <label>Description</label>
                                            <input type="text" placeholder="Page description" class="form-control form-control-rounded">
                                    </div>

                                    <div class="form-group">
                                        <label>Keywords</label>
                                            <input type="text" placeholder="Page keywords" class="form-control form-control-rounded">
										    <small class="text-muted">Sample : <code>apple, pear, banana, wholesale</code></small>
                                    </div>
									
                                   <div class="form-group">
                                        <label>Published</label>
											<div class="row">
												<div class="radio radio-success">
													<input type="radio" name="radio4" id="radio12" value="option4" checked="">
													<label for="radio12"> Yes </label>
												</div>
												<div class="radio radio-danger">
													<input type="radio" name="radio4" id="radio13" value="option4">
													<label for="radio13"> No </label>
												</div>
							
                                          </div>
                                    </div> 
								
									<a href="#" class="btn btn-success btn-icon"><i class="fa fa-floppy-o "></i>Save</a>
									<a href="#" class="btn btn-warning btn-icon"><i class="fa fa-reply"></i>Back</a>
									<a href="#" class="btn btn-danger btn-icon"><i class="fa fa-times"></i>Cancel</a>		
																	
                            </form>
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

		<!-- Summernote -->
        <link href="{{ du_asset( 'layout-5/lib/summernote/summernote.css' ) }}" rel="stylesheet">
        <link href="{{ du_asset( 'layout-5/lib/summernote/summernote-bs4.min.css' ) }}" rel="stylesheet">
		

@endsection


@section('footer-assets')



		<!-- Summernote -->
        <script src="{{ du_asset( 'layout-5/lib/summernote/summernote.min.js' ) }}"></script>

        <script type="text/javascript">
			$(document).ready(function() {
				$('.summernote').summernote({
					height:'300px',
				});
			});
		</script>

@endsection
