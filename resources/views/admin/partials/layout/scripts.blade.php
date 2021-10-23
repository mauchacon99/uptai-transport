<!-- Common Plugins -->
<script src="{{ asset('/admin/lib/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('/admin/lib/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('/admin/lib/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/admin/lib/pace/pace.min.js') }}"></script>
<script src="{{ asset('/admin/lib/jasny-bootstrap/js/jasny-bootstrap.min.js') }}"></script>
<script src="{{ asset('/admin/lib/slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('/admin/lib/nano-scroll/jquery.nanoscroller.min.js') }}"></script>
<script src="{{ asset('/admin/lib/metisMenu/metisMenu.min.js') }}"></script>

<script src="{{ asset( 'admin/lib/datatables/jquery.dataTables.min.js' ) }}"></script>
<script src="{{ asset( 'admin/lib/datatables/dataTables.responsive.min.js' ) }}"></script>
<script src="{{ asset( 'admin/lib/datatables/dataTables.buttons.min.js' ) }}"></script>
<script src="{{ asset( 'admin/lib/datatables/jszip.min.js' ) }}"></script>
<script src="{{ asset( 'admin/lib/datatables/pdfmake.min.js' ) }}"></script>
<script src="{{ asset( 'admin/lib/datatables/vfs_fonts.js' ) }}"></script>
<script src="{{ asset( 'admin/lib/datatables/buttons.html5.min.js' ) }}"></script>
{{-- <script src="{{ asset('js/app.js') }}"></script> --}}

<script src="{{ asset('/admin/lib/toastr/jquery.toastr.min.js') }}"></script>
<script src="{{ asset('/admin/js/custom.js') }}"></script>

@notify_render

{{-- othere  --}}
@yield('footer-assets')
