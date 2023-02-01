 <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
 <script src="https://code.jquery.com/jquery-3.5.1.min.js"
     integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
 <script src="{{ asset('assets/src/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
 <script src="{{ asset('assets/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
 <script src="{{ asset('assets/src/plugins/src/mousetrap/mousetrap.min.js') }}"></script>
 <script src="{{ asset('assets/layouts/vertical-dark-menu/app.js') }}"></script>
 <!-- END GLOBAL MANDATORY SCRIPTS -->

 <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
 <script src="{{ asset('assets/src/plugins/src/apex/apexcharts.min.js') }}"></script>
 <script src="{{ asset('assets/src/assets/js/dashboard/dash_1.js') }}"></script>
 <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

 <!--  Data table style  -->
 <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
 <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
 <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>
 <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
 <!--  End Data table style  -->

 <script>
     $(document).ready(function() {
         $('#myTable').DataTable({
            "scrollX": true,
             dom: 'Bfrtip',
             buttons: [
                 'copyHtml5',
                 'excelHtml5',
                 'csvHtml5',
                 'pdfHtml5'
             ]

         });
     });
 </script>
