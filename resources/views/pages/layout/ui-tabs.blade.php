@extends('ducor::layouts.layout-5')


@section('pageTitle', 'FixedPlus - Laravel Admin Dashboard Template')


@section('breadcrumb')
		
        <div class="row page-header">
			<div class="col-lg-6 align-self-center ">
			    <h2>Tabs</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">UI Elements</a></li>
					<li class="breadcrumb-item active">Tabs</li>
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
                            Default Style
                        </div>
                        <div class="card-body">
                            <div class="tabs">
                                <!-- Nav tabs -->
	
                                <ul class="nav nav-tabs">
                                    <li class="nav-item" role="presentation"><a class="nav-link  active" href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link" href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link" href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="home">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam porta lacus ipsum, tempus consequat turpis auctor sit amet. Pellentesque porta mollis nisi, pulvinar convallis tellus tristique nec.
                                        <br>
                                        Nam aliquet consequat quam sit amet dignissim. Quisque vel massa est. Donec dictum nisl dolor, ac malesuada tellus efficitur non. Pellentesque pellentesque odio neque, eget imperdiet eros vehicula lacinia.
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="profile">
                                        <h4>Heading</h4>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam porta lacus ipsum, tempus consequat turpis auctor sit amet. Pellentesque porta mollis nisi, pulvinar convallis tellus tristique nec.
                                        <br>
                                        Nam aliquet consequat quam sit amet dignissim. Quisque vel massa est. Donec dictum nisl dolor, ac malesuada tellus efficitur non. Pellentesque pellentesque odio neque, eget imperdiet eros vehicula lacinia.

                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="messages">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos facilis laboriosam, vitae ipsum tenetur atque vel repellendus culpa reiciendis velit quas, unde soluta quidem voluptas ipsam, rerum fuga placeat rem error voluptate eligendi modi. Delectus, iure sit impedit? Facere provident expedita itaque, magni, quas assumenda numquam eum! Sequi deserunt, rerum.
                                        <br>
                                        <a href="#">Read More</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-default">
                            Bottom Tabs Style
                        </div>
                        <div class="card-body">
                            <div class="tabs">

                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="t1">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam porta lacus ipsum, tempus consequat turpis auctor sit amet. Pellentesque porta mollis nisi, pulvinar convallis tellus tristique nec.
                                        <br>
                                        Nam aliquet consequat quam sit amet dignissim. Quisque vel massa est. Donec dictum nisl dolor, ac malesuada tellus efficitur non. Pellentesque pellentesque odio neque, eget imperdiet eros vehicula lacinia.
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="t2">
                                        <h4>Heading</h4>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam porta lacus ipsum, tempus consequat turpis auctor sit amet. Pellentesque porta mollis nisi, pulvinar convallis tellus tristique nec.
                                        <br>
                                        Nam aliquet consequat quam sit amet dignissim. Quisque vel massa est. Donec dictum nisl dolor, ac malesuada tellus efficitur non. Pellentesque pellentesque odio neque, eget imperdiet eros vehicula lacinia.

                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="t3">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos facilis laboriosam, vitae ipsum tenetur atque vel repellendus culpa reiciendis velit quas, unde soluta quidem voluptas ipsam, rerum fuga placeat rem error voluptate eligendi modi. Delectus, iure sit impedit? Facere provident expedita itaque, magni, quas assumenda numquam eum! Sequi deserunt, rerum.
                                        <br>
                                        <a href="#">Read More</a>
                                    </div>                          
                                </div>
                                 <ul class="nav nav-tabs">
                                    <li class="nav-item" role="presentation"><a class="nav-link  active" href="#t1" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link" href="#t2" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link" href="#t3" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-default">
                            Left align
                        </div>
                        <div class="card-body">
                            <div class="tabs left-tabs">
                                <ul class="list-unstyled tabs-nav tabs-bottom" role="tablist">
                                    <li role="presentation" class="active"><a href="#t4" aria-controls="t4" role="tab" data-toggle="tab">Home</a></li>
                                    <li role="presentation"><a href="#t5" aria-controls="t5" role="tab" data-toggle="tab">Profile</a></li>
                                    <li role="presentation"><a href="#t6" aria-controls="t6" role="tab" data-toggle="tab">Messages</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="t4">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam porta lacus ipsum, tempus consequat turpis auctor sit amet. Pellentesque porta mollis nisi, pulvinar convallis tellus tristique nec.
                                        <br>
                                        Nam aliquet consequat quam sit amet dignissim. Quisque vel massa est. Donec dictum nisl dolor, ac malesuada tellus efficitur non. Pellentesque pellentesque odio neque, eget imperdiet eros vehicula lacinia.
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="t5">
                                        <h4>Heading</h4>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam porta lacus ipsum, tempus consequat turpis auctor sit amet. Pellentesque porta mollis nisi, pulvinar convallis tellus tristique nec.
                                        <br>
                                        Nam aliquet consequat quam sit amet dignissim. Quisque vel massa est. Donec dictum nisl dolor, ac malesuada tellus efficitur non. Pellentesque pellentesque odio neque, eget imperdiet eros vehicula lacinia.

                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="t6">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos facilis laboriosam, vitae ipsum tenetur atque vel repellendus culpa reiciendis velit quas, unde soluta quidem voluptas ipsam, rerum fuga placeat rem error voluptate eligendi modi. Delectus, iure sit impedit? Facere provident expedita itaque, magni, quas assumenda numquam eum! Sequi deserunt, rerum.
                                        <br>
                                        <a href="#">Read More</a>
                                    </div>                          
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-default">
                            Right align
                        </div>
                        <div class="card-body">
                            <div class="tabs right-tabs">
                                <ul class="list-unstyled tabs-nav tabs-bottom" role="tablist">
                                    <li role="presentation" class="active"><a href="#t7" aria-controls="t7" role="tab" data-toggle="tab">Home</a></li>
                                    <li role="presentation"><a href="#t8" aria-controls="t8" role="tab" data-toggle="tab">Profile</a></li>
                                    <li role="presentation"><a href="#t9" aria-controls="t9" role="tab" data-toggle="tab">Messages</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="t7">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam porta lacus ipsum, tempus consequat turpis auctor sit amet. Pellentesque porta mollis nisi, pulvinar convallis tellus tristique nec.
                                        <br>
                                        Nam aliquet consequat quam sit amet dignissim. Quisque vel massa est. Donec dictum nisl dolor, ac malesuada tellus efficitur non. Pellentesque pellentesque odio neque, eget imperdiet eros vehicula lacinia.
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="t8">
                                        <h4>Heading</h4>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam porta lacus ipsum, tempus consequat turpis auctor sit amet. Pellentesque porta mollis nisi, pulvinar convallis tellus tristique nec.
                                        <br>
                                        Nam aliquet consequat quam sit amet dignissim. Quisque vel massa est. Donec dictum nisl dolor, ac malesuada tellus efficitur non. Pellentesque pellentesque odio neque, eget imperdiet eros vehicula lacinia.

                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="t9">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos facilis laboriosam, vitae ipsum tenetur atque vel repellendus culpa reiciendis velit quas, unde soluta quidem voluptas ipsam, rerum fuga placeat rem error voluptate eligendi modi. Delectus, iure sit impedit? Facere provident expedita itaque, magni, quas assumenda numquam eum! Sequi deserunt, rerum.
                                        <br>
                                        <a href="#">Read More</a>
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
