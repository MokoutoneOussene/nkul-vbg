
  <script src="{{asset('mobile/js/plugins/jquery.min.js')}}"></script>
  <script src="{{asset('mobile/js/plugins/anime.min.js')}}"></script>
  <script src="{{asset('mobile/js/plugins/swiper.min.js')}}"></script>
  <script src="{{asset('mobile/js/plugins/progressbar.min.js')}}"></script>
  <script src="{{asset('mobile/js/plugins/smooth-scrollbar.min.js')}}"></script>
  <script src="{{asset('mobile/js/plugins/overscroll.min.js')}}"></script>
  <script src="{{asset('mobile/js/plugins/typing.min.js')}}"></script>
  <script src="{{asset('mobile/js/plugins/isotope.min.js')}}"></script>
  <script src="{{asset('mobile/js/plugins/fancybox.min.js')}}"></script>
  <script src="{{asset('mobile/js/plugins/swup.min.js')}}"></script>
  <script src="{{asset('mobile/js/main.js')}}"></script>

<!-- DataTables  & Plugins -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<script>
    $(function() {
        $("#example1").DataTable({
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>

