@extends('ducor::layouts.layout-5')


@section('pageTitle', 'FixedPlus - Laravel Admin Dashboard Template')


@section('breadcrumb')

        <div class="row page-header">
			<div class="col-lg-6 align-self-center ">
			  <h2>Jquery UI</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item">UI Elements</li>
					<li class="breadcrumb-item active">Jquery UI</li>
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
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
							  <div class="card-header card-default">
								Jquery UI Select boxes
								</div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <fieldset class="jquery-Ui-fieldset">
                                                <label for="simple">Default style</label>
                                                <select name="simple" id="simple">
                                                    <option>Slower</option>
                                                    <option>Slow</option>
                                                    <option selected="selected">Medium</option>
                                                    <option>Fast</option>
                                                    <option>Faster</option>
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="col-sm-4">
                                            <fieldset class="jquery-Ui-fieldset">
                                                <label for="optgroup">Option groups</label>
                                                <select name="optgroup" id="optgroup">
                                                    <optgroup label="Mountain Time Zone">
                                                        <option value="AZ">Arizona</option>
                                                        <option value="CO">Colorado</option>
                                                        <option value="ID">Idaho</option>
                                                        <option value="WY">Wyoming</option>
                                                    </optgroup>
                                                    <optgroup label="Central Time Zone">
                                                        <option value="AL">Alabama</option>
                                                        <option value="AR">Arkansas</option>
                                                        <option value="KS">Kansas</option>
                                                        <option value="KY">Kentucky</option>
                                                    </optgroup>
                                                    <optgroup label="Eastern Time Zone">
                                                        <option value="CT">Connecticut</option>
                                                        <option value="FL">Florida</option>
                                                        <option value="MA">Massachusetts</option>
                                                        <option value="WV">West Virginia</option>
                                                    </optgroup>
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="col-sm-4">
                                            <fieldset class="jquery-Ui-fieldset">
                                                <label for="disabled">Disabled style</label>
                                                <select name="disabled" disabled="disabled" id="disabled">
                                                    <option>Slower</option>
                                                    <option>Slow</option>
                                                    <option selected="selected">Medium</option>
                                                    <option>Fast</option>
                                                    <option>Faster</option>
                                                </select>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <fieldset class="jquery-Ui-fieldset">
                                                <label for="select-icons">With custom icons</label>
                                                <select name="select-icons" id="select-icons">                 
                                                    <optgroup label="Browsers">
                                                        <option value="chrome" data-icon="fa-chrome" selected="selected">Chrome</option>
                                                        <option value="firefox" data-icon="fa-firefox">Firefox</option>
                                                        <option value="safari" data-icon="fa-safari">Safari</option>
                                                        <option value="opera" data-icon="fa-opera">Opera</option>
                                                        <option value="IE" data-icon="fa-internet-explorer">IE</option>
                                                    </optgroup>
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="col-sm-4">
                                            <fieldset class="jquery-Ui-fieldset">
                                                <label for="people">Select a Person:</label>
                                                <select name="people" id="people">
                                                    <option value="1" data-class="avatar" data-style="background-image: url(&apos;http://www.gravatar.com/avatar/b3e04a46e85ad3e165d66f5d927eb609?d=monsterid&amp;r=g&amp;s=16&apos;);">John Resig</option>
                                                    <option value="2" data-class="avatar" data-style="background-image: url(&apos;http://www.gravatar.com/avatar/e42b1e5c7cfd2be0933e696e292a4d5f?d=monsterid&amp;r=g&amp;s=16&apos;);">Tauren Mills</option>
                                                    <option value="3" data-class="avatar" data-style="background-image: url(&apos;http://www.gravatar.com/avatar/bdeaec11dd663f26fa58ced0eb7facc8?d=monsterid&amp;r=g&amp;s=16&apos;);">Jane Doe</option>
                                                </select>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Drag & drop-->
            <div class="row">
                <div class="col-sm-12">
				<div class="card " id="drag-default">
                               
						<div class="card-header card-default">
							Drag & Drop UI
							<p class="text-muted">Draggables</p>
						</div>
                   
						<div class="row">
                        <div class="col">
                           <div class="card-body">
									<h5><small>Default Functionality</small></h5>
									<p class="text-muted">
                                        Enable draggable functionality on any DOM element. Move the draggable object by clicking on it with the mouse and dragging it anywhere within the viewport.
                                    </p>
                                    <div class=" draggable-element draggable-default"><span>Drag</span></div>
                                    <div class=" draggable-element draggable-default"><span>Drag</span></div>
                                    <div class=" draggable-element draggable-default"><span>Drag</span></div>
                                </div>

                        </div>
                        <div class="col">
                                <div class="card-body">
									<h5><small>Cursor style</small></h5>
                                    <p class="text-muted">Position the cursor while dragging the object. Use the <code>cursorAt</code> option to specify another location relative to the draggable (specify a pixel value from the top, right, bottom, and/or left).</p>
                                    <div class="draggable-element" id="draggable-cursor-move"><span>Move</span></div>
                                    <div class="draggable-element" id="draggable-cursor-crosshair"><span>Crosshair</span></div>
                                    <div class="draggable-element" id="draggable-cursor-bottom"><span>Bottom</span></div>
                                </div>
                        </div>
						</div>
                       <div class="row">
                        <div class="col">
                                <div class="card-body">
									<h5><small>Constrain movement</small></h5>
                                    <p class="text-muted">Constrain the movement of each draggable by defining the boundaries of the draggable area. Set the <code>axis</code> option to limit the draggable's path to the x- or y-axis, or use the <code>containment</code> option to specify a parent DOM element or a jQuery selector, like 'document.'</p>
                                    <div class="draggable-element" id="draggable-move-both"><span>Both</span></div>
                                    <div class="draggable-element" id="draggable-move-vertical"><span>Vertical</span></div>
                                    <div class="draggable-element" id="draggable-move-horizontal"><span>Horizontal</span></div>
                                </div>
                            </div>
                        <div class="col">
                                <div class="card-body">
									<h5><small>Revert position</small></h5>
                                    <p class="text-muted">Return the draggable (or it's helper) to its original location when dragging stops with the boolean <code>revert</code> option.</p>
                                    <div class="draggable-element" id="draggable-revert-element"><span>Element</span></div>
                                    <div class="draggable-element" id="draggable-revert-clone"><span>Clone</span></div>
                                    <div class="draggable-element" id="draggable-revert-speed"><span>Speed</span></div>
                                </div>
                            </div>
					   </div>
					   <div class="row">
						<div class="col">
								<div class="card-body">
									<h5><small>Droppables Default functionality</small></h5>
                                    <p class="text-muted">
                                        Enable any DOM element to be droppable, a target for draggable elements.
                                    </p>
                                    <div class="draggable-element" id="droppable-basic-element"><span>Drag me</span></div>
                                    <div class="draggable-element droppable-target-element" id="droppable-basic-target"><span>Drop here</span></div>
								</div>
						</div>
                        <div class="col">
                                <div class="card-body">
									<h5><small>Droppables Accept not accept</small></h5>
                                    <p class="text-muted">Specify using the <code>accept</code> option which element (or group of elements) is accepted by the target droppable.</p>
                                    <div class="draggable-element" id="droppable-accept-yes"><span>Accept</span></div>
                                    <div class="draggable-element" id="droppable-accept-no"><span>Not accept</span></div>
                                    <div class="draggable-element droppable-target-element" id="droppable-accept-target"><span>Drop here</span></div>
                                </div>
                            </div>
                       </div>
						
				
			  </div>
			</div>
		</div>
            <!--end drag & drop-->

            <!--Modal dialogs-->
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header card-default">
                                    Modal dialog
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <tr>
                                                <td style="width: 30%">
                                                    Basic modal example 
                                                </td>
                                                <td>
                                                    
                                                    <button type="button" class="btn btn-default" id="dialog-basic-opener">Launch</button>
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 30%">
                                                    Overlay modal example 
                                                </td>
                                                <td>
                                                    
                                                    <button type="button" class="btn btn-default" id="dialog-overlay-opener">Launch</button>
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 30%">
                                                    Animated modal example 
                                                </td>
                                                <td>
                                                    
                                                    <button type="button" class="btn btn-default" id="dialog-animated-opener">Launch</button>
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 30%">
                                                    Buttons modal example 
                                                </td>
                                                <td>
                                                    
                                                    <button type="button" class="btn btn-default" id="dialog-buttons-opener">Launch</button>
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 30%">
                                                    Disable drag modal example 
                                                </td>
                                                <td>
                                                    
                                                    <button type="button" class="btn btn-default" id="dialog-drag-disabled-opener">Launch</button>
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 30%">
                                                    Form modal example 
                                                </td>
                                                <td>
                                                    
                                                    <button type="button" class="btn btn-default" id="dialog-form-opener">Launch</button>
                                                    
                                                </td>
                                            </tr>
                                        </table>
                                    </div>

                                    <div id="dialog-basic" title="Basic dialog">
                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    </div>

                                    <div id="dialog-overlay" title="Overlay dialog">
                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    </div>

                                    <div id="dialog-animated" title="Animated dialog">
                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    </div>

                                    <div id="dialog-buttons" title="Dialog with buttons">
                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    </div>

                                    <div id="dialog-drag-disabled" title="Disable drag">
                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    </div>

                                    <div id="dialog-form" title="Vertical form">
                                        <form action="#">
                                            <div class="form-control">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <label>First name</label>
                                                        <input type="text" placeholder="Eugene" class="form-control">
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <label>Last name</label>
                                                        <input type="text" placeholder="Kopyov" class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-control">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <label>Address line 1</label>
                                                        <input type="text" placeholder="124, Munna Wali" class="form-control">
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <label>Address line 2</label>
                                                        <input type="text" placeholder="Niwaru Road, Jhotwara" class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-control">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <label>City</label>
                                                        <input type="text" placeholder="jaipur" class="form-control">
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <label>State/Province</label>
                                                        <input type="text" placeholder="Rajsthan" class="form-control">
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <label>ZIP code</label>
                                                        <input type="text" placeholder="302012" class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-control">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <label>Email</label>
                                                        <input type="text" placeholder="support@support.com" class="form-control">
                                                        <span class="help-block">support@support.com</span>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <label>Phone #</label>
                                                        <input type="text" placeholder="+99-99-9999-9999" data-mask="+99-99-9999-9999" class="form-control">
                                                        <span class="help-block">+91-12-1234-5678</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
						<div class="card-header card-default">
							 Selectable
						</div>
                        <div class="card-body">
                            <ol id="selectable">
                                <li class="ui-widget-content">Item 1</li>
                                <li class="ui-widget-content">Item 2</li>
                                <li class="ui-widget-content">Item 3</li>
                                <li class="ui-widget-content">Item 4</li>
                                <li class="ui-widget-content">Item 5</li>
                            </ol>
                        </div>
                    </div>
                </div>
				<div class="col-sm-6">
                    <div class="card">
						<div class="card-header card-default">
							Accordions
						</div>
                        <div class="card-body">
                           <div id="accordion">
                                        <h3>Section 1</h3>
                                        <div>
                                            <p>
                                                Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
                                                ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
                                                amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
                                                odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
                                            </p>
                                        </div>
                                        <h3>Section 2</h3>
                                        <div>
                                            <p>
                                                Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
                                                purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
                                                velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
                                                suscipit faucibus urna.
                                            </p>
                                        </div>
                                        <h3>Section 3</h3>
                                        <div>
                                            <p>
                                                Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
                                                Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
                                                ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
                                                lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
                                            </p>
                                            <ul>
                                                <li>List item one</li>
                                                <li>List item two</li>
                                                <li>List item three</li>
                                            </ul>
                                        </div>
                                        <h3>Section 4</h3>
                                        <div>
                                            <p>
                                                Cras dictum. Pellentesque habitant morbi tristique senectus et netus
                                                et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
                                                faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
                                                mauris vel est.
                                            </p>
                                            <p>
                                                Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
                                                Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                                                inceptos himenaeos.
                                            </p>
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

		<!-- Jquery UI -->
        <link href="{{ du_asset( 'layout-5/lib/jquery-ui/jquery-ui.css' ) }}" rel="stylesheet">
		


@endsection


@section('footer-assets')

		
        <!-- Jquery UI -->
        <script src="{{ du_asset( 'layout-5/lib/jquery-ui/jquery-ui.min.js' ) }}"></script>
        <script src="{{ du_asset( 'layout-5/js/jquery.ui.custom.js' ) }}"></script>

@endsection
