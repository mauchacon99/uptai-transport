@extends('ducor::layouts.layout-5')


@section('pageTitle', 'FixedPlus - Laravel Admin Dashboard Template')


@section('breadcrumb')

        <div class="row page-header">
			<div class="col-lg-6 align-self-center ">
			  <h2>Nestable</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">UI Elements</a></li>
					<li class="breadcrumb-item active">Nestable</li>
				</ol>
			</div>
		</div>
@endsection


@section('content')



        <!-- ============================================================== -->
		<!-- 						Content Start		 						-->
		<!-- ============================================================== -->
		


        
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
					<div class="card-header card-default">
                            Nestable
                        </div>
                        <div class="card-body">
							<div class="row">
							<div class="col-md-6">
                            <div id="nestable" class="dd">
                                <ol class="dd-list">
                                    <li data-id="1" class="dd-item">
                                        <div class="dd-handle">Item 1</div>
                                    </li>
                                    <li data-id="2" class="dd-item">
                                        <div class="dd-handle">Item 2</div>
                                        <ol class="dd-list">
                                            <li data-id="3" class="dd-item">
                                                <div class="dd-handle">Item 3</div>
                                            </li>
                                            <li data-id="4" class="dd-item">
                                                <div class="dd-handle">Item 4</div>
                                            </li>
                                            <li data-id="5" class="dd-item">
                                                <div class="dd-handle">Item 5</div>
                                                <ol class="dd-list">
                                                    <li data-id="6" class="dd-item">
                                                        <div class="dd-handle">Item 6</div>
                                                    </li>
                                                    <li data-id="7" class="dd-item">
                                                        <div class="dd-handle">Item 7</div>
                                                    </li>
                                                    <li data-id="8" class="dd-item">
                                                        <div class="dd-handle">Item 8</div>
                                                    </li>
                                                </ol>
                                            </li>
                                            <li data-id="9" class="dd-item">
                                                <div class="dd-handle">Item 9</div>
                                            </li>
                                            <li data-id="10" class="dd-item">
                                                <div class="dd-handle">Item 10</div>
                                            </li>
                                        </ol>
                                    </li>
                                    <li data-id="11" class="dd-item">
                                        <div class="dd-handle">Item 11</div>
                                    </li>
                                    <li data-id="12" class="dd-item">
                                        <div class="dd-handle">Item 12</div>
                                    </li>
                                </ol>
                            </div>
                            <textarea id="nestable-output" class="form-control"></textarea>
							</div>
							<div class="col-md-6">

                            <div id="nestable2" class="dd">
                        <ol class="dd-list">
                           <li data-id="13" class="dd-item dd3-item">
                              <div class="dd-handle dd3-handle">Drag</div>
                              <div class="dd3-content">Item 13</div>
                           </li>
                           <li data-id="14" class="dd-item dd3-item">
                              <div class="dd-handle dd3-handle">Drag</div>
                              <div class="dd3-content">Item 14</div>
                           </li>
                           <li data-id="15" class="dd-item dd3-item">
                              <div class="dd-handle dd3-handle">Drag</div>
                              <div class="dd3-content">Item 15</div>
                              <ol class="dd-list">
                                 <li data-id="16" class="dd-item dd3-item">
                                    <div class="dd-handle dd3-handle">Drag</div>
                                    <div class="dd3-content">Item 16</div>
                                 </li>
                                 <li data-id="17" class="dd-item dd3-item">
                                    <div class="dd-handle dd3-handle">Drag</div>
                                    <div class="dd3-content">Item 17</div>
                                 </li>
                                 <li data-id="18" class="dd-item dd3-item">
                                    <div class="dd-handle dd3-handle">Drag</div>
                                    <div class="dd3-content">Item 18</div>
                                 </li>
								 <li data-id="18" class="dd-item dd3-item">
                                    <div class="dd-handle dd3-handle">Drag</div>
                                    <div class="dd3-content">Item 18</div>
                                 </li>
                                 <li data-id="19" class="dd-item dd3-item">
                                    <div class="dd-handle dd3-handle">Drag</div>
                                    <div class="dd3-content">Item 19</div>
                                 </li>
                                 <li data-id="20" class="dd-item dd3-item">
                                    <div class="dd-handle dd3-handle">Drag</div>
                                    <div class="dd3-content">Item 20</div>
                                 </li>
								  <li data-id="21" class="dd-item dd3-item">
                                    <div class="dd-handle dd3-handle">Drag</div>
                                    <div class="dd3-content">Item 21</div>
                                 </li>
                                 <li data-id="22" class="dd-item dd3-item">
                                    <div class="dd-handle dd3-handle">Drag</div>
                                    <div class="dd3-content">Item 22</div>
                                 </li>
								  <li data-id="23" class="dd-item dd3-item">
                                    <div class="dd-handle dd3-handle">Drag</div>
                                    <div class="dd3-content">Item 23</div>
                                 </li>
                              </ol>
                           </li>
                        </ol>
                     </div>
                     <textarea id="nestable2-output" class="form-control"></textarea>
                     
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
		<!-- NesTable -->
        <link rel="stylesheet" href="{{ du_asset( 'layout-5/lib/nestable/nestable.css' ) }}">
		
@endsection


@section('footer-assets')


		
        <!-- NesTable-->
        <script src="{{ du_asset( 'layout-5/lib/nestable/jquery.nestable.js' ) }}"></script>
        <script>
            (function (window, document, $, undefined) {

                $(function () {

                    var updateOutput = function (e)
                    {
                        var list = e.length ? e : $(e.target),
                                output = list.data('output');
                        if (window.JSON) {
                            output.val(window.JSON.stringify(list.nestable('serialize')));//, null, 2));
                        } else {
                            output.val('JSON browser support required for this demo.');
                        }
                    };

                    // activate Nestable for list 1
                    $('#nestable').nestable({
                        group: 1
                    })
                            .on('change', updateOutput);

                    // activate Nestable for list 2
                    $('#nestable2').nestable({
                        group: 1
                    })
                            .on('change', updateOutput);

                    // output initial serialised data
                    updateOutput($('#nestable').data('output', $('#nestable-output')));
                    updateOutput($('#nestable2').data('output', $('#nestable2-output')));

                    $('.js-nestable-action').on('click', function (e)
                    {
                        var target = $(e.target),
                                action = target.data('action');
                        if (action === 'expand-all') {
                            $('.dd').nestable('expandAll');
                        }
                        if (action === 'collapse-all') {
                            $('.dd').nestable('collapseAll');
                        }
                    });

                });

            })(window, document, window.jQuery);
        </script>

@endsection
