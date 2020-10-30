@extends('ducor::layouts.layout-5')


@section('pageTitle', 'FixedPlus - Laravel Admin Dashboard Template')


@section('breadcrumb')

		
        <div class="row page-header">
			<div class="col-lg-6 align-self-center ">
			   <h2>Grid system</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">UI Elements</a></li>
					<li class="breadcrumb-item active">Grid system</li>
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
						Grid system
						<p></p>
                 </div>
                 <div class="card-body">
				 <p class="text-muted margin-b-10">Using a single set of <code>.col-md-*</code> grid classes, you can create a basic grid system that starts out stacked on mobile devices and tablet devices (the extra small to small range) before becoming horizontal on desktop (medium) devices. Place grid columns in any <code>.row</code>.</p>
				 <div class="row">
                <div class="col-md-2">
					<div class="demo-grid-block">
                       .col-md-2
                    </div> 
                </div>
                <div class="col-md-2">
                    <div class="demo-grid-block">
                            .col-md-2
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="demo-grid-block">
                            .col-md-2
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="demo-grid-block">
                            .col-md-2
                    </div>
                </div>
               <div class="col-md-2">
                    <div class="demo-grid-block">
                            .col-md-2
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="demo-grid-block">
                            .col-md-2
                    </div>
                </div>
			</div>
          
            <div class="row">             
                <div class="col-md-3">
                   <div class="demo-grid-block">
                            .col-md-3
                    </div>
                </div>
                <div class="col-md-3">
                   <div class="demo-grid-block">
                            .col-md-3
                    </div>
                </div>
                 <div class="col-md-3">
                   <div class="demo-grid-block">
                            .col-md-3
                    </div>
                </div>
               <div class="col-md-3">
                   <div class="demo-grid-block">
                            .col-md-3
                    </div>
                </div>
            </div>
              <div class="row">             
                <div class="col-md-4">
                    <div class="demo-grid-block">
                            .col-md-4
                    </div>
                </div>
               <div class="col-md-4">
                    <div class="demo-grid-block">
                            .col-md-4
                    </div>
                </div>
              <div class="col-md-4">
                    <div class="demo-grid-block">
                            .col-md-4
                    </div>
                </div>
            </div>
              <div class="row">             
                <div class="col-md-6">
                   <div class="demo-grid-block">
                            .col-md-6
                    </div>
                </div>
                <div class="col-md-6">
                   <div class="demo-grid-block">
                            .col-md-6
                    </div>
                </div>
            </div>
            <div class="row">             
                <div class="col-md-12">
                      <div class="demo-grid-block">
                            .col-md-12
                    </div>
                </div>
            </div>
   
			</div>
			</div>
			</div>
			</div>
			
			 <div class="row">  
				<div class="col-md-12">
				 <div class="card">
                 <div class="card-header card-default">
						Offset Grid
                 </div>
                 <div class="card-body">
				<p class="text-muted margin-b-10">Move columns to the right using <code>.col-md-offset-*</code> classes. These classes increase the left margin of a column by <code>*</code> columns. For example, <code>.col-md-offset-4</code> moves <code>.col-md-4</code> over four columns.</p>
             <div class="row">             
                <div class="col-md-10 col-md-offset-2">
                     <div class="demo-grid-block">
                            .col-md-10 col-md-offset-2 <small class="text-muted">Offset Grid</small>
                    </div>
                </div>
				<div class="col-md-6 col-md-offset-1">
                     <div class="demo-grid-block">
                            .col-md-6 col-md-offset-1 <small class="text-muted">Offset Grid</small>
                    </div>
                </div>
				
				<div class="col-md-6 col-md-offset-3">
				<div class="demo-grid-block">
                            .col-md-6 .col-md-offset-3 <small class="text-muted">Offset Grid</small>
                    </div>
                </div>

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
