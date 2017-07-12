    </div>
</div>
    <footer class="footer">
            &copy; <?php echo date("Y"); ?> by ACYST Technology LTD
    </footer>
</div>
<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/plugins/chartist-js/dist/chartist.min.js"></script>
<script src="assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
<script src="assets/plugins/echarts/echarts-all.js"></script>
<script src="assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
<!-- start - This is for export functionality only -->
  <script src="assets/plugins/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
  <script src="assets/plugins/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
  <script src="assets/plugins/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
  <script src="assets/plugins/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
  <script src="assets/plugins/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
  <script src="assets/plugins/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
  <script src="assets/plugins/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
  <!-- end - This is for export functionality only -->
<script src="js/sidebarmenu.js"></script>
<script src="js/custom.min.js"></script>
<script src="js/dashboard1.js"></script>
<script>
  $(document).ready(function() {
      $('#myTable').DataTable();
      $(document).ready(function() {
          var table = $('#example').DataTable({
              "columnDefs": [{
                  "visible": false,
                  "targets": 2
              }],
              "order": [
                  [2, 'asc']
              ],
              "displayLength": 25,
              "drawCallback": function(settings) {
                  var api = this.api();
                  var rows = api.rows({
                      page: 'current'
                  }).nodes();
                  var last = null;
                  api.column(2, {
                      page: 'current'
                  }).data().each(function(group, i) {
                      if (last !== group) {
                          $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                          last = group;
                      }
                  });
              }
          });
      });
  });
  $('#example23').DataTable({
      dom: 'Bfrtip',
      buttons: [
          'copy', 'excel', 'pdf', 'print'
      ]
  });
  </script>
</body>
</html>
