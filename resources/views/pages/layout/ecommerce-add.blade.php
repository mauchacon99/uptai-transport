@extends('ducor::layouts.layout-5')


@section('pageTitle', 'FixedPlus - Laravel Admin Dashboard Template')


@section('breadcrumb')


	<div class="row page-header"><div class="col-lg-6 align-self-center ">
		<h2>Add Product</h2>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item"><a href="#">E-Commerce</a></li>
			<li class="breadcrumb-item active">Add Product</li>
		</ol></div></div>
@endsection


@section('content')



<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->

	


	<div class="alert bg-success alert-dismissible " role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> <strong>Success!</strong> Product successfully added. </div>

	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-header card-default">
					Add Products
					<p class="text-muted">Lorem ipsum dolor sit amet</p>
				</div>
				<div class="card-body">
					
					<form method="get" action="" class="form-horizontal">
					
							<div class="form-group">
								<label>Product Name</label>
								<input type="text" placeholder="New product name" class="form-control form-control-rounded">
							</div>
						
							<div class="form-group">
								<label>Main Category</label>
								<select name="account" class="form-control m-b">
									<option>Option 1</option>
									<option>Option 2</option>
									<option>Option 3</option>
									<option>Option 4</option>
								</select>
								<small class="text-muted">Lorem ipsum dolor sit amet</small>
							</div>
							<div class="form-group">
								<label>Current Price</label>
								<div class="input-group col-md-4">
									<span class="input-group-addon">$</span>
									<input type="text" class="form-control">
									<span class="input-group-addon">.00</span>
								</div>     	
							</div>

							<div class="form-group">
								<label>Previous Price</label>
								<div class="input-group col-md-4">
									<span class="input-group-addon">$</span>
									<input type="text" class="form-control">
									<span class="input-group-addon">.00</span>
								</div>
							</div>
							
							<div class="form-group">
								<label>Stock</label>
								<input type="text" class="form-control form-control-rounded col-md-4">
							</div>

							<div class="form-group">
								<label>Description</label>
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

							
							<div class="form-group">
								<label>Gallery Images</label>
								<div class="fileinput fileinput-new input-group col-md-3" data-provides="fileinput">
										<div class="form-control" data-trigger="fileinput"><span class="fileinput-filename"></span></div>
										<span class="input-group-addon btn btn-primary btn-file ">
										<span class="fileinput-new">Select</span>
										<span class="fileinput-exists">Change</span>
										<input type="file"  name="image">
										</span>
										<a href="#" class="input-group-addon btn btn-danger  hover fileinput-exists" data-dismiss="fileinput">Remove</a>
								</div>
							</div>

							<div class="form-group">
								<label>Status</label>
									<div class="row">
										<div class="radio radio-success">
											<input type="radio" name="radio4" id="radio12" value="option4" checked="">
											<label for="radio12"> Stock </label>
										</div>
										<div class="radio radio-danger">
											<input type="radio" name="radio4" id="radio13" value="option4">
											<label for="radio13"> Removed </label>
										</div>
										<div class="radio radio-warning">
											<input type="radio" name="radio4" id="radio14" value="option4">
											<label for="radio14"> Out of Stock </label>
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
<!-- 						Content Start	 						-->
<!-- ============================================================== -->




@endsection


@section('head-assets')

<!-- Summernote -->
<link href="{{ du_asset( 'layout-5/lib/summernote/summernote.css' ) }}" rel="stylesheet">

@endsection


@section('footer-assets')


<!-- Summernote -->
<script src="{{ du_asset( 'layout-5/lib/summernote/summernote.js' ) }}"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('.summernote').summernote({
			height:'300px',
			toolbar: [
			['style', ['bold', 'italic', 'underline', 'clear']],
			['font', ['strikethrough', 'superscript', 'subscript']],
			['fontsize', ['fontsize']],
			['color', ['color']],
			['para', ['ul', 'ol', 'paragraph']]

			]
		});
		$('button[data-event="showImageDialog"]').attr('data-toggle', 'image').removeAttr('data-event'); 
	});
	</script>


@endsection
