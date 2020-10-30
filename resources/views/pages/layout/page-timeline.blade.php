@extends('ducor::layouts.layout-5')


@section('pageTitle', 'FixedPlus - Laravel Admin Dashboard Template')


@section('breadcrumb')

		
            <div class="row page-header"><div class="col-lg-6 align-self-center ">
			  <h2>Timeline</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Pages</a></li>
					<li class="breadcrumb-item active">Timeline</li>
				</ol></div></div>

        
@endsection


@section('content')


        <!-- ============================================================== -->
		<!-- 						Content Start	 						-->
		<!-- ============================================================== -->


            <div class="row">
                <div class="col-md-12">
                    <div class="card">
			
                        <div class="card-body">
                            <section id="cd-timeline" class="cd-container">
                                <div class="cd-timeline-block">
                                    <div class="cd-timeline-img cd-picture">
                                        <img src="{{ du_asset( 'layout-5/img/timeline/cd-icon-picture.svg' ) }}" alt="Picture">
                                    </div> 

                                    <div class="cd-timeline-content">
                                        <h2>John Doe</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
                                        <a href="#0" class="btn btn-primary btn-rounded">Read more</a>
                                        <span class="cd-date">08 September 18</span>
                                    </div> 
                                </div> 

                                <div class="cd-timeline-block">
                                    <div class="cd-timeline-img cd-movie">
                                        <img src="{{ du_asset( 'layout-5/img/timeline/cd-icon-movie.svg' ) }}" alt="Movie">
                                    </div> 

                                    <div class="cd-timeline-content">
                                        <h2>John Doe</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde?</p>
                                        <a href="#0" class="btn btn-primary btn-rounded">Read more</a>
                                        <span class="cd-date">08 September 18</span>
                                    </div> 
                                </div> 

                                <div class="cd-timeline-block">
                                    <div class="cd-timeline-img cd-picture">
                                        <img src="{{ du_asset( 'layout-5/img/timeline/cd-icon-picture.svg' ) }}" alt="Picture">
                                    </div> 

                                    <div class="cd-timeline-content">
                                        <h2>John Doe</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, obcaecati, quisquam id molestias eaque asperiores voluptatibus cupiditate error assumenda delectus odit similique earum voluptatem doloremque dolorem ipsam quae rerum quis. Odit, itaque, deserunt corporis vero ipsum nisi eius odio natus ullam provident pariatur temporibus quia eos repellat consequuntur perferendis enim amet quae quasi repudiandae sed quod veniam dolore possimus rem voluptatum eveniet eligendi quis fugiat aliquam sunt similique aut adipisci.</p>
                                        <a href="#0" class="btn btn-primary btn-rounded">Read more</a>
                                        <span class="cd-date">08 September 18</span>
                                    </div> 
                                </div> 

                                <div class="cd-timeline-block">
                                    <div class="cd-timeline-img cd-location">
                                        <img src="{{ du_asset( 'layout-5/img/timeline/cd-icon-location.svg' ) }}" alt="Location">
                                    </div> 

                                    <div class="cd-timeline-content">
                                        <h2>John Doe</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
                                        <a href="#0" class="btn btn-primary btn-rounded">Read more</a>
                                        <span class="cd-date">08 September 18</span>
                                    </div> 
                                </div> 

                                <div class="cd-timeline-block">
                                    <div class="cd-timeline-img cd-location">
                                        <img src="{{ du_asset( 'layout-5/img/timeline/cd-icon-location.svg' ) }}" alt="Location">
                                    </div> 

                                    <div class="cd-timeline-content">
                                        <h2>John Doe</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum.</p>
                                        <a href="#0" class="btn btn-primary btn-rounded">Read more</a>
                                        <span class="cd-date">08 September 18</span>
                                    </div> 
                                </div> 

                                <div class="cd-timeline-block">
                                    <div class="cd-timeline-img cd-movie">
                                        <img src="{{ du_asset( 'layout-5/img/timeline/cd-icon-movie.svg' ) }}" alt="Movie">
                                    </div> 

                                    <div class="cd-timeline-content">
                                        <h2>John Doe</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum.</p>
                                        <span class="cd-date">08 September 18</span>
                                    </div> 
                                </div> 
                            </section>
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

@endsection


@section('footer-assets')


@endsection
