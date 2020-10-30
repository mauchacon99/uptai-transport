@extends('ducor::layouts.layout-5')


@section('pageTitle', 'FixedPlus - Laravel Admin Dashboard Template')


@section('breadcrumb')

					
        <div class="row page-header">
			<div class="col-lg-6 align-self-center ">
			   <h2>Typography</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">UI Elements</a></li>
					<li class="breadcrumb-item active">Typography</li>
				</ol>
			</div>
		</div>
        
@endsection


@section('content')



        <!-- ============================================================== -->
		<!-- 						Content Start	 						-->
		<!-- ============================================================== -->

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-default">
                            Heading Styles
                        </div>
                        <div class="card-body">
                            <h1>h1. Heading 1</h1>
                            <h2>h2. Heading 2</h2>
                            <h3>h3. Heading 3</h3>
                            <h4>h4. Heading 4</h4>
                            <h5>h5. Heading 5</h5>
                            <h6 class="margin-b-0">h6. Heading 6</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-default">
                           Styled Headings
                        </div>
                        <div class="card-body">
                            <h1>Heading 1 <small>Secondary Text</small></h1>
                            <h2>Heading 2 <small>Secondary Text</small></h2>
                            <h3>Heading 3 <small>Secondary Text</small></h3>
                            <h4>Heading 4 <small>Secondary Text</small></h4>
                            <h5>Heading 5 <small>Secondary Text</small></h5>
                            <h6>Heading 6 <small>Secondary Text</small></h6>
                        </div>
                    </div>
                </div>
            </div>


              <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-default">
                           Inline text elements
                        </div>
                        <div class="card-body">
                            <p class="lead">
                                Lead text example
                            </p>
                            <p> Hello, i am <mark>highlight</mark> text, write me into <code>&lt;mark&gt;</code> tag</p>
                            <p><del>Lorem ipsum dolor sit amet</del></p>
                            <p>
                                lorem ipsum <strong>dolor</strong> sit amter
                            </p>
                             <p>
                                 <em>lorem ipsum dolor sit amter</em>
                            </p>
                            <p class="dropcap">
                                Lorem ipsum dolor sit amet
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-default">
                           text colors
                        </div>
                        <div class="card-body">
                            <p class="text-muted">
                               Nullam id dolor id nibh ultricies vehicula ut id elit. 
                            </p>
                            <p class="text-primary">
                             Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.
                            </p>
                            <p class="text-warning">
                               Duis mollis, est non commodo luctus, nisi erat porttitor ligula. 
                            </p>
                            <p class="text-info">
                                Maecenas sed diam eget risus varius blandit sit amet non magna.
                            </p>
                            <p class="text-warning">
                                Etiam porta sem malesuada magna mollis euismod.
                            </p>
                            <p class="text-danger">
                                Etiam porta sem malesuada magna mollis euismod.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-default">
                           Ordered list
                        </div>
                        <div class="card-body">
                            <ol>
                                <li>
                                    Nullam id dolor id nibh ultricies vehicula ut id elit. 
                                </li>
                                  <li>
                                   Duis mollis, est non commodo luctus, nisi erat porttitor ligula. 
                                </li>
                                  <li>
                                    Etiam porta sem malesuada magna mollis euismod. 
                                </li>
                                  <li>
                                    Nullam id dolor id nibh ultricies vehicula ut id elit. 
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-default">
                         Unordered list
                        </div>
                        <div class="card-body">
                          <ul>
                                <li>
                                    Nullam id dolor id nibh ultricies vehicula ut id elit. 
                                </li>
                                  <li>
                                   Duis mollis, est non commodo luctus, nisi erat porttitor ligula. 
                                </li>
                                  <li>
                                    Etiam porta sem malesuada magna mollis euismod. 
                                </li>
                                  <li>
                                    Nullam id dolor id nibh ultricies vehicula ut id elit. 
                                </li>
                            </ul>
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
