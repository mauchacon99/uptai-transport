@extends('ducor::layouts.layout-5')


@section('pageTitle', 'FixedPlus - Laravel Admin Dashboard Template')


@section('breadcrumb')
	
            <div class="row page-header"><div class="col-lg-6 align-self-center ">
			  <h2>Add and Update Using Php</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Ajax & Php Examples</a></li>
					<li class="breadcrumb-item active">Add and Update Using Php</li>
				</ol></div></div>


@endsection


@section('content')



        <!-- ============================================================== -->
		<!-- 						Content Start	 						-->
		<!-- ============================================================== -->
	
        

			<div id="message"></div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header card-default">
							Add and Update Using Php
                        </div>
                        <div class="card-body">
							
                            <form id="admin_form" method="get" action="" class="form-horizontal">
							<input name="action" type="hidden" value="processPages">
                               
                                    <div class="form-group">
                                        <label>Page Name</label>
                                        <input type="text" placeholder="Page name" value="About Us" class="form-control form-control-rounded">
                                    </div>
                                
                                    <div class="form-group">
                                        <label>Slug</label>
                                        <input type="text" placeholder="Page slug" value="about-us" class="form-control form-control-rounded">
										<small class="text-muted">Sample : <code>corporate-page</code></small>
                                    </div>
                        
                                   <div class="form-group">
                                        <label>Content</label>
                                        <div class="summernote" style="display: none;"><p>Hello Summernote</p></div>
                                    </div>
                               
									<button type="submit" name="dosubmit" class="btn btn-success btn-icon"><i class="fa fa-floppy-o "></i> Save</button>
									<a href="#" class="btn btn-warning btn-icon"><i class="fa fa-reply"></i>Back</a>
									<a href="#" class="btn btn-danger btn-icon"><i class="fa fa-times"></i>Cancel</a>		
														
                            </form>
                        </div>
                    </div>
                </div>
            </div>
			
			<div class="row">
                <div class="col-sm-12">
                    <div class="card ">
                        <div class="card-header card-default">
							Source Code
                        </div>
                        <div class="card-body">
							<!-- HTML generated using hilite.me --><div style="background: #202020; overflow:auto;width:auto;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><table><tr><td><pre style="margin: 0; line-height: 125%"> 1
 2
 3
 4
 5
 6
 7
 8
 9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #6ab825; font-weight: bold">var</span> <span style="color: #d0d0d0">options</span> <span style="color: #d0d0d0">=</span> <span style="color: #d0d0d0">{</span>
  <span style="color: #d0d0d0">target:</span> <span style="color: #ed9d13">&#39;#message&#39;</span><span style="color: #d0d0d0">,</span>
  <span style="color: #d0d0d0">beforeSubmit:</span> <span style="color: #d0d0d0">showLoader,</span>
  <span style="color: #d0d0d0">success:</span> <span style="color: #d0d0d0">showResponse,</span>
  <span style="color: #d0d0d0">url:</span> <span style="color: #ed9d13">&#39;php/controller.php&#39;</span><span style="color: #d0d0d0">,</span>
  <span style="color: #d0d0d0">type:</span> <span style="color: #ed9d13">&#39;post&#39;</span><span style="color: #d0d0d0">,</span>
  <span style="color: #d0d0d0">clearForm:</span> <span style="color: #3677a9">0</span><span style="color: #d0d0d0">,</span>
  <span style="color: #d0d0d0">resetForm:</span> <span style="color: #3677a9">0</span>
<span style="color: #d0d0d0">};</span>
<span style="color: #d0d0d0">$(</span><span style="color: #ed9d13">&#39;#admin_form&#39;</span><span style="color: #d0d0d0">).ajaxForm(options);</span>

<span style="color: #6ab825; font-weight: bold">function</span> <span style="color: #d0d0d0">showLoader()</span> <span style="color: #d0d0d0">{</span>
  <span style="color: #d0d0d0">$(</span><span style="color: #ed9d13">&quot;#loader&quot;</span><span style="color: #d0d0d0">).fadeIn(</span><span style="color: #3677a9">200</span><span style="color: #d0d0d0">);</span>
<span style="color: #d0d0d0">}</span>

<span style="color: #6ab825; font-weight: bold">function</span> <span style="color: #d0d0d0">hideLoader()</span> <span style="color: #d0d0d0">{</span>
  <span style="color: #d0d0d0">$(</span><span style="color: #ed9d13">&quot;#loader&quot;</span><span style="color: #d0d0d0">).fadeOut(</span><span style="color: #3677a9">200</span><span style="color: #d0d0d0">);</span>
<span style="color: #d0d0d0">};</span>

<span style="color: #6ab825; font-weight: bold">function</span> <span style="color: #d0d0d0">showResponse(msg)</span> <span style="color: #d0d0d0">{</span>
  <span style="color: #d0d0d0">hideLoader();</span>
  <span style="color: #d0d0d0">$(</span><span style="color: #6ab825; font-weight: bold">this</span><span style="color: #d0d0d0">).html(msg);</span>
  <span style="color: #d0d0d0">$(</span><span style="color: #ed9d13">&quot;html, body&quot;</span><span style="color: #d0d0d0">).animate({</span>
    <span style="color: #d0d0d0">scrollTop:</span> <span style="color: #3677a9">0</span>
  <span style="color: #d0d0d0">},</span> <span style="color: #3677a9">600</span><span style="color: #d0d0d0">);</span>
<span style="color: #d0d0d0">}</span>
</pre></td></tr></table></div>

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

		<!-- Summernote -->
        <link href="{{ du_asset( 'layout-5/lib/summernote/summernote.css' ) }}" rel="stylesheet">
        <link href="{{ du_asset( 'layout-5/lib/summernote/summernote-bs4.min.css' ) }}" rel="stylesheet">
		
		
@endsection


@section('footer-assets')


		<!-- Ajax Form -->
		<script src="{{ du_asset( 'layout-5/lib/ajax-form/form.js' ) }}"></script>
		
		<!-- Summernote-->
        <script src="{{ du_asset( 'layout-5/lib/summernote/summernote.min.js' ) }}"></script>
        <script>
            $(document).ready(function () {
				/* Ajax Form Post */
				
				var options = { 
					target:'#message',
					beforeSubmit:  showLoader,
					success: showResponse,
					url:'php/controller.php',
					type:'post',
					clearForm: 0, 
					resetForm: 0
				}; 
				$('#admin_form').ajaxForm(options); 


				function showLoader() {
					$("#loader").fadeIn(200);
				}
				
				function hideLoader() {
					$("#loader").fadeOut(200);
				};	
				
				function showResponse(msg) {
					hideLoader();
					$(this).html(msg);
					$("html, body").animate({
						scrollTop: 0
					}, 600);
				}
				
				
				$('.summernote').summernote({
					height:'300px',
				});
            });
        </script>


@endsection
