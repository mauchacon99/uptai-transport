@extends('ducor::layouts.layout-5')


@section('pageTitle', 'FixedPlus - Laravel Admin Dashboard Template')


@section('breadcrumb')

		
            <div class="row page-header"><div class="col-lg-6 align-self-center ">
			  <h2>Delete Using Php</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Ajax & Php Examples</a></li>
					<li class="breadcrumb-item active">Delete Using Php</li>
				</ol></div></div>
             
@endsection


@section('content')



        <!-- ============================================================== -->
		<!-- 						Content Start	 						-->
		<!-- ============================================================== -->

        

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
					 <div class="card-header card-default">
							Delete Using Php
                        </div>
						
                        <div class="card-body">
                                <table id="datatable1" class="table table-striped dt-responsive nowrap table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                <strong>ID</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>Page Name</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>Menu Position</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>Published</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>Added</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>Action</strong>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>0001</td>
                                            <td>About us</td>
                                            <td>Header Menu</td>
                                            <td class="text-center">
                                                <span class="label label-success">Yes</span>
                                            </td>
                                            <td>15/07/2018</td>
                                            <td class="text-center">
												<a class="btn btn-sm btn-danger"  href="#" data-type="delete" data-set='{"title": "Pages", "parent": "en", "option": "deletepages", "id": "0001", "name": "About us"}'><i class="fa fa-trash"></i> Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>0002</td>
                                            <td>Our Vision</td>
                                            <td>Header Menu</td>
                                            <td class="text-center">
                                                <span class="label label-success">Yes</span>
                                            </td>
                                            <td>15/07/2018</td>
                                            <td class="text-center">
												<a class="btn btn-sm btn-danger"  href="#" data-type="delete" data-set='{"title": "Pages", "parent": "en", "option": "deletepages", "id": "0002", "name": "Our Vision"}'><i class="fa fa-trash"></i> Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>0003</td>
                                            <td>Team</td>
                                            <td>Footer Menu</td>
                                            <td class="text-center">
                                                <span class="label label-success">Yes</span>
                                            </td>
                                            <td>15/07/2018</td>
                                            <td class="text-center">
												<a class="btn btn-sm btn-danger"  href="#" data-type="delete" data-set='{"title": "Pages", "parent": "en", "option": "deletepages", "id": "0003", "name": "Team"}'><i class="fa fa-trash"></i> Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>0004</td>
                                            <td>Our Documents</td>
                                            <td>Header Menu</td>
                                            <td class="text-center">
                                                <span class="label label-danger">No</span>
                                            </td>
                                            <td>15/07/2018</td>
                                            <td class="text-center">
												<a class="btn btn-sm btn-danger"  href="#" data-type="delete" data-set='{"title": "Pages", "option": "deletepages", "id": "0004", "name": "Our Documents"}'><i class="fa fa-trash"></i> Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>0005</td>
                                            <td>Why us?</td>
                                            <td>Footer Menu</td>
                                            <td class="text-center">
                                                <span class="label label-danger">No</span>
                                            </td>
                                            <td>15/07/2018</td>
                                            <td class="text-center">
												<a class="btn btn-sm btn-danger"  href="#" data-type="delete" data-set='{"title": "Pages", "parent": "en", "option": "deletepages", "id": "0005", "name": "Why us?"}'><i class="fa fa-trash"></i> Delete</a>
											</td>
                                        </tr>
                                    </tbody>
                                </table>
								
	

                        </div>
                    </div>
                </div>
            </div>

		
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
					 <div class="card-header card-default">
							Source Code
							
                        </div>
						
                        <div class="card-body">

													
<div style="background: #202020; overflow:auto;width:auto;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><table><tr><td><pre style="margin: 0; line-height: 125%"> 1
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
26
27
28
29
30
31
32
33
34
35
36
37
38
39
40
41
42
43
44
45
46
47
48
49
50
51
52
53
54
55
56
57
58
59
60</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #d0d0d0">$(</span><span style="color: #ed9d13">&#39;.btn-danger&#39;</span><span style="color: #d0d0d0">).on(</span><span style="color: #ed9d13">&#39;click&#39;</span><span style="color: #d0d0d0">,</span> <span style="color: #6ab825; font-weight: bold">function</span><span style="color: #d0d0d0">()</span> <span style="color: #d0d0d0">{</span>
  <span style="color: #6ab825; font-weight: bold">var</span> <span style="color: #d0d0d0">type</span> <span style="color: #d0d0d0">=</span> <span style="color: #d0d0d0">$(</span><span style="color: #6ab825; font-weight: bold">this</span><span style="color: #d0d0d0">).data(</span><span style="color: #ed9d13">&#39;type&#39;</span><span style="color: #d0d0d0">);</span>
  <span style="color: #6ab825; font-weight: bold">var</span> <span style="color: #d0d0d0">data</span> <span style="color: #d0d0d0">=</span> <span style="color: #d0d0d0">$(</span><span style="color: #6ab825; font-weight: bold">this</span><span style="color: #d0d0d0">).data(</span><span style="color: #ed9d13">&quot;set&quot;</span><span style="color: #d0d0d0">);</span>
  <span style="color: #6ab825; font-weight: bold">var</span> <span style="color: #d0d0d0">parent</span> <span style="color: #d0d0d0">=</span> <span style="color: #d0d0d0">$(</span><span style="color: #6ab825; font-weight: bold">this</span><span style="color: #d0d0d0">).parent().parent();</span>
  <span style="color: #6ab825; font-weight: bold">if</span> <span style="color: #d0d0d0">(type</span> <span style="color: #d0d0d0">===</span> <span style="color: #ed9d13">&#39;delete&#39;</span><span style="color: #d0d0d0">)</span> <span style="color: #d0d0d0">{</span>
    <span style="color: #d0d0d0">swal({</span>
      <span style="color: #d0d0d0">title:</span> <span style="color: #d0d0d0">data.title</span> <span style="color: #d0d0d0">+</span> <span style="color: #ed9d13">&#39; Delete&#39;</span><span style="color: #d0d0d0">,</span>
      <span style="color: #d0d0d0">text:</span> <span style="color: #ed9d13">&#39;&quot;&#39;</span> <span style="color: #d0d0d0">+</span> <span style="color: #d0d0d0">data.name</span> <span style="color: #d0d0d0">+</span> <span style="color: #ed9d13">&#39;&quot; are you sure you want to delete?&#39;</span><span style="color: #d0d0d0">,</span>
      <span style="color: #d0d0d0">type:</span> <span style="color: #ed9d13">&#39;warning&#39;</span><span style="color: #d0d0d0">,</span>
      <span style="color: #d0d0d0">showCancelButton:</span> <span style="color: #6ab825; font-weight: bold">true</span><span style="color: #d0d0d0">,</span>
      <span style="color: #d0d0d0">confirmButtonColor:</span> <span style="color: #ed9d13">&#39;#3085d6&#39;</span><span style="color: #d0d0d0">,</span>
      <span style="color: #d0d0d0">cancelButtonColor:</span> <span style="color: #ed9d13">&#39;#d33&#39;</span><span style="color: #d0d0d0">,</span>
      <span style="color: #d0d0d0">cancelButtonText:</span> <span style="color: #ed9d13">&#39;Cancel&#39;</span><span style="color: #d0d0d0">,</span>
      <span style="color: #d0d0d0">confirmButtonText:</span> <span style="color: #ed9d13">&#39;Delete&#39;</span><span style="color: #d0d0d0">,</span>
      <span style="color: #d0d0d0">confirmButtonClass:</span> <span style="color: #ed9d13">&#39;btn btn-space btn-lg btn-success hover&#39;</span><span style="color: #d0d0d0">,</span>
      <span style="color: #d0d0d0">cancelButtonClass:</span> <span style="color: #ed9d13">&#39;btn btn-space btn-lg btn-danger hover&#39;</span><span style="color: #d0d0d0">,</span>
      <span style="color: #d0d0d0">buttonsStyling:</span> <span style="color: #6ab825; font-weight: bold">false</span><span style="color: #d0d0d0">,</span>
      <span style="color: #d0d0d0">preConfirm:</span> <span style="color: #6ab825; font-weight: bold">function</span><span style="color: #d0d0d0">()</span> <span style="color: #d0d0d0">{</span>
        <span style="color: #6ab825; font-weight: bold">return</span> <span style="color: #6ab825; font-weight: bold">new</span> <span style="color: #d0d0d0">Promise(</span><span style="color: #6ab825; font-weight: bold">function</span><span style="color: #d0d0d0">(resolve)</span> <span style="color: #d0d0d0">{</span>
          <span style="color: #d0d0d0">$.ajax({</span>
            <span style="color: #d0d0d0">url:</span> <span style="color: #ed9d13">&#39;php/controller.php&#39;</span><span style="color: #d0d0d0">,</span>
            <span style="color: #999999; font-style: italic">/* php post url */</span>
            <span style="color: #d0d0d0">type:</span> <span style="color: #ed9d13">&#39;POST&#39;</span><span style="color: #d0d0d0">,</span>
            <span style="color: #d0d0d0">data:</span> <span style="color: #d0d0d0">{</span>
              <span style="color: #d0d0d0">id:</span> <span style="color: #d0d0d0">data.id,</span>
              <span style="color: #6ab825; font-weight: bold">delete</span><span style="color: #d0d0d0">:</span> <span style="color: #d0d0d0">data.option,</span>
              <span style="color: #d0d0d0">extra:</span> <span style="color: #d0d0d0">data.extra</span> <span style="color: #d0d0d0">?</span> <span style="color: #d0d0d0">data.extra</span> <span style="color: #d0d0d0">:</span> <span style="color: #6ab825; font-weight: bold">null</span><span style="color: #d0d0d0">,</span>
              <span style="color: #d0d0d0">title:</span> <span style="color: #24909d">encodeURIComponent</span><span style="color: #d0d0d0">(data.name)</span>
            <span style="color: #d0d0d0">},</span>
            <span style="color: #d0d0d0">dataType:</span> <span style="color: #ed9d13">&#39;html&#39;</span>
          <span style="color: #d0d0d0">}).done(</span><span style="color: #6ab825; font-weight: bold">function</span><span style="color: #d0d0d0">(response)</span> <span style="color: #d0d0d0">{</span>
            <span style="color: #d0d0d0">swal({</span>
              <span style="color: #d0d0d0">title:</span> <span style="color: #ed9d13">&#39;Deleted!&#39;</span><span style="color: #d0d0d0">,</span>
              <span style="color: #d0d0d0">text:</span> <span style="color: #d0d0d0">data.title</span> <span style="color: #d0d0d0">+</span> <span style="color: #ed9d13">&#39; successfully deleted.&#39;</span><span style="color: #d0d0d0">,</span>
              <span style="color: #d0d0d0">type:</span> <span style="color: #ed9d13">&#39;success&#39;</span><span style="color: #d0d0d0">,</span>
              <span style="color: #d0d0d0">confirmButtonClass:</span> <span style="color: #ed9d13">&#39;btn btn-space btn-lg btn-primary hover&#39;</span><span style="color: #d0d0d0">,</span>
              <span style="color: #d0d0d0">confirmButtonText:</span> <span style="color: #ed9d13">&#39;Ok&#39;</span><span style="color: #d0d0d0">,</span>
              <span style="color: #d0d0d0">buttonsStyling:</span> <span style="color: #6ab825; font-weight: bold">false</span>
            <span style="color: #d0d0d0">});</span>
            <span style="color: #d0d0d0">parent.fadeOut(</span><span style="color: #3677a9">400</span><span style="color: #d0d0d0">,</span> <span style="color: #6ab825; font-weight: bold">function</span><span style="color: #d0d0d0">()</span> <span style="color: #d0d0d0">{</span>
              <span style="color: #d0d0d0">parent.remove();</span>
            <span style="color: #d0d0d0">});</span>
            <span style="color: #d0d0d0">$(</span><span style="color: #ed9d13">&#39;html, body&#39;</span><span style="color: #d0d0d0">).animate({</span>
              <span style="color: #d0d0d0">scrollTop:</span> <span style="color: #3677a9">0</span>
            <span style="color: #d0d0d0">},</span> <span style="color: #3677a9">600</span><span style="color: #d0d0d0">);</span>
          <span style="color: #d0d0d0">}).fail(</span><span style="color: #6ab825; font-weight: bold">function</span><span style="color: #d0d0d0">()</span> <span style="color: #d0d0d0">{</span>
            <span style="color: #d0d0d0">swal({</span>
              <span style="color: #d0d0d0">title:</span> <span style="color: #ed9d13">&#39;An error occurred&#39;</span><span style="color: #d0d0d0">,</span>
              <span style="color: #d0d0d0">text:</span> <span style="color: #ed9d13">&#39;Please try again later :)&#39;</span><span style="color: #d0d0d0">,</span>
              <span style="color: #d0d0d0">type:</span> <span style="color: #ed9d13">&#39;error&#39;</span><span style="color: #d0d0d0">,</span>
              <span style="color: #d0d0d0">confirmButtonClass:</span> <span style="color: #ed9d13">&#39;btn btn-primary btn-lg&#39;</span><span style="color: #d0d0d0">,</span>
              <span style="color: #d0d0d0">buttonsStyling:</span> <span style="color: #6ab825; font-weight: bold">false</span>
            <span style="color: #d0d0d0">});</span>
          <span style="color: #d0d0d0">});</span>
        <span style="color: #d0d0d0">});</span>
      <span style="color: #d0d0d0">},</span>
      <span style="color: #d0d0d0">allowOutsideClick:</span> <span style="color: #6ab825; font-weight: bold">false</span>
    <span style="color: #d0d0d0">});</span>
  <span style="color: #d0d0d0">}</span>
<span style="color: #d0d0d0">});</span>
</pre></td></tr></table></div>

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

		<!-- Sweet Alerts-->
        <link href="{{ du_asset( 'layout-5/lib/sweet-alerts2/sweetalert2.min.css' ) }}" rel="stylesheet">
		
		<!-- DataTables -->
        <link href="{{ du_asset( 'layout-5/lib/datatables/jquery.dataTables.min.css' ) }}" rel="stylesheet" type="text/css">
        <link href="{{ du_asset( 'layout-5/lib/datatables/responsive.bootstrap.min.css' ) }}" rel="stylesheet" type="text/css">
		
    
	
@endsection


@section('footer-assets')

		<!-- DataTables-->
        <script src="{{ du_asset( 'layout-5/lib/datatables/jquery.dataTables.min.js' ) }}"></script>
        <script src="{{ du_asset( 'layout-5/lib/datatables/dataTables.responsive.min.js' ) }}"></script>
		
        <!-- Sweet Alerts -->
        <script src="{{ du_asset( 'layout-5/lib/sweet-alerts2/sweetalert2.min.js' ) }}"></script>
		
        <script>
         $(document).ready(function(){
			$('.btn-danger').on('click', function() {		
			var type = $(this).data('type');
			var data = $(this).data("set");
			var parent = $(this).parent().parent();
			
			if (type === 'delete') {
			swal({
				title: data.title+' Delete',
				text: '"'+data.name+'" are you sure you want to delete?',
				type: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				cancelButtonText: 'Cancel',
				confirmButtonText: 'Delete',
				confirmButtonClass: 'btn btn-space btn-lg btn-success hover',
				cancelButtonClass: 'btn btn-space btn-lg btn-danger hover',
				buttonsStyling: false,
				preConfirm: function() {
				return new Promise(function(resolve) {
					 $.ajax({
						url: 'php/controller.php', /* php post url */
						type: 'POST',
						data: {
							id: data.id,
							delete: data.option,
							extra: data.extra ? data.extra : null,
							title: encodeURIComponent(data.name)
						},
						dataType: 'html'
					 })
					 
					 .done(function(response){
						swal({
							title: 'Deleted!',
							text: data.title+' successfully deleted.',
							type: 'success',
							confirmButtonClass: 'btn btn-space btn-lg btn-primary hover',
							confirmButtonText: 'Ok',
							buttonsStyling: false
						});
							parent.fadeOut(400, function () {
											  parent.remove();
										  });
										  $('html, body').animate({
											  scrollTop: 0
										  }, 600);
					
						 })
						 .fail(function(){
							 swal({
								title: 'An error occurred',
								text: 'Please try again later :)',
								type: 'error',
								confirmButtonClass: 'btn btn-primary btn-lg',
								buttonsStyling: false
							});
						 });
					  });
					},
					allowOutsideClick: false			  
				});	
				}
				});
	
				<!-- Datatables-->
				$('#datatable1').dataTable();
		
        });

        </script>



@endsection
