 <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright &copy; 2018 <a href="https://colorlib.com/wp/templates/">Colorlib</a> All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


  <!-- jquery
		============================================ -->
    <script src="{{ url('public/admin/js/vendor/jquery-1.11.3.min.js') }}"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{ url('public/admin/js/bootstrap.min.js') }}"></script>
    <!-- wow JS
		============================================ -->
    <script src="{{ url('public/admin/js/wow.min.js') }}"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{{ url('public/admin/js/jquery-price-slider.js') }}"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{ url('public/admin/js/jquery.meanmenu.js') }}"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{{ url('public/admin/js/owl.carousel.min.js') }}"></script>
    <!-- sticky JS
		============================================ -->
    <script src="{{ url('public/admin/js/jquery.sticky.js') }}"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{ url('public/admin/js/jquery.scrollUp.min.js') }}"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{ url('public/admin/js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ url('public/admin/js/scrollbar/mCustomScrollbar-active.js') }}"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="{{ url('public/admin/js/metisMenu/metisMenu.min.js') }}"></script>
    <script src="{{ url('public/admin/js/metisMenu/metisMenu-active.js') }}"></script>

    <script src="{{ url('public/admin/js/morrisjs/raphael-min.js') }}"></script>
    <script src="{{ url('public/admin/js/morrisjs/morris.js') }}"></script>
    <script src="{{ url('public/admin/js/morrisjs/morris-active.js') }}"></script>
    <!-- morrisjs JS
   
		============================================ -->
    <script src="{{ url('public/admin/js/tab.js') }}"></script>
    <!-- icheck JS
		============================================ -->
    <script src="{{ url('public/admin/js/icheck/icheck.min.js') }}"></script>
    <script src="{{ url('public/admin/jjs/icheck/icheck-active.js') }}"></script>

     <script src="{{ url('public/admin/js/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ url('public/admin/js/sparkline/jquery.charts-sparkline.js') }}"></script>
    <!-- calendar JS
        ============================================ -->
    <script src="{{ url('public/admin/js/calendar/moment.min.js') }}"></script>
    <script src="{{ url('public/admin/js/calendar/fullcalendar.min.js') }}"></script>
    <script src="{{ url('public/admin/js/calendar/fullcalendar-active.js') }}"></script>
    <!-- plugins JS

  
		============================================ -->
    <script src="{{ url('public/admin/js/plugins.js') }}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{ url('public/admin/js/main.js') }}"></script>

    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>




<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
CKEDITOR.replace( 'description' );
</script>


    <script type="text/javascript">
        $(document).ready(function(){
            var table = $('.table-category').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ url('admin/category') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'name', name: 'name'},
                    {data: 'slug', name: 'slug'},
                    {data: 'date', name: 'date'},
                    {
                        data: 'action', 
                        name: 'action', 
                        orderable: true, 
                        searchable: true
                    },
                ]
            });
        })
    </script>


<!-- article -->
    <script type="text/javascript">
        $(document).ready(function(){


            var table = $('.table-article').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ url('admin/article') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'image', name: 'image'},
                    {data: 'title', name: 'title'},
                    {data: 'description', name: 'description'},
                    {data: 'date', name: 'date'},
                    {
                        data: 'action', 
                        name: 'action', 
                        orderable: true, 
                        searchable: true
                    },
                ]
            });
        })
    </script>


</body>

</html>