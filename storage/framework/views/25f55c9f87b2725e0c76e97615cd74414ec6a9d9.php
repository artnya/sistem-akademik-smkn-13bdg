
<!-- jQuery 3 -->
<script src="/js/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 
<script src="/js/jquery-ui.min.js"></script>
-->
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo e(asset('/js/bootstrap.min.js')); ?>"></script>
<!-- DataTables -->
<script src="<?php echo e(asset('/plugins/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('/plugins/datatables.net-bs/js/dataTables.bootstrap.min.js')); ?>"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
<!-- -->
<script src="<?php echo e(asset('/js/raphael.min.js')); ?>"></script>

<!-- <script src="/js/morris.min.js"></script> -->

<!-- Sparkline -->
<script src="<?php echo e(asset('/js/jquery.sparkline.min.js')); ?>"></script> 

<!-- jvectormap -->
<!-- <script src="/js/jquery-jvectormap-1.2.2.min.js"></script>-->

<!-- <script src="/js/jquery-jvectormap-world-mill-en.js"></script> -->
<!-- jQuery Knob Chart -->

<script src="<?php echo e(asset('/js/jquery-knob/dist/jquery.knob.min.js')); ?>"></script>

<!-- daterangepicker -->

<!-- <script src="/js/moment.min.js"></script> -->
<!-- 
<script src="/js/daterangepicker.js"></script>
data pickrange -->

<!-- datepicker -->
<script src="<?php echo e(asset('/js/bootstrap-datepicker.min.js')); ?>"></script>
<!-- select 2 -->
<script src="<?php echo e(asset('/js/select2.full.min.js')); ?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo e(asset('/js/bootstrap3-wysihtml5.all.min.js')); ?>"></script>
<!-- sweet alert -->
<script src="<?php echo e(asset('/js/sweetalert.js')); ?>"></script>
<!-- Slimscroll -->
<script src="<?php echo e(asset('/js/jquery.slimscroll.min.js')); ?>"></script>
<!-- FastClick -->
<!-- PACE -->
<script src="<?php echo e(asset('/js/pace.js')); ?>"></script>

<!-- checked at least for button showing -->
<script>
  $( document ).ready(function() {
    
    var checkboxes = $("input[type='checkbox']"),
    actions = $("#actions");

    checkboxes.click(function() {
    
       actions.attr("hidden", !checkboxes.is(":checked"));
      
    });

    $('#select_all').click(function(event) {
    if(this.checked) {
        // Iterate each checkbox
        $(':checkbox').each(function() {
            this.checked = true;
        });
    }
    else {
      $(':checkbox').each(function() {
            this.checked = false;
        });
    }
  });
      
});
</script>
<script src="<?php echo e(asset('/js/fastclick.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('/js/adminlte.min.js')); ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo e(asset('/js/dashboard.js')); ?>"></script>
<!-- AdminLTE for demo purposes 
<script src="/js/demo.js"></script>
-->
<!-- CK EDITOR -->
<script src="<?php echo e(asset('/js/ckeditor/ckeditor.js')); ?>"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>
<!--
<script>
 $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [ 
            {
                extend:    'copyHtml5',
                text:      '<i class="fa fa-files-o text-purple"></i>',
                titleAttr: 'Copy'
            },
            {
                extend:    'excelHtml5',
                text:      '<i class="fa fa-file-excel-o text-green"></i>',
                titleAttr: 'Excel'
            },
            {
                extend:    'csvHtml5',
                text:      '<i class="fa fa-file-text-o text-aqua"></i>',
                titleAttr: 'CSV'
            },
            {
                extend:    'pdfHtml5',
                text:      '<i class="fa fa-file-pdf-o text-red"></i>',
                titleAttr: 'PDF'
            },
            'colvis', 
            'print'
        ]
    } );
     $('#example-mapel-produktif-table').DataTable( {
        dom: 'Bfrtip',
        buttons: [ 
            {
                extend:    'copyHtml5',
                text:      '<i class="fa fa-files-o text-purple"></i>',
                titleAttr: 'Copy'
            },
            {
                extend:    'excelHtml5',
                text:      '<i class="fa fa-file-excel-o text-green"></i>',
                titleAttr: 'Excel'
            },
            {
                extend:    'csvHtml5',
                text:      '<i class="fa fa-file-text-o text-aqua"></i>',
                titleAttr: 'CSV'
            },
            {
                extend:    'pdfHtml5',
                text:      '<i class="fa fa-file-pdf-o text-red"></i>',
                titleAttr: 'PDF'
            },
            'colvis', 
            'print'
        ]
    } );
} );
</script>
-->
<script>
$(document).ready(function() {
    $('#example').DataTable( {
        scrollY:        350,
        scrollCollapse: true,
        paging:         false,
        stateSave: true,
        "processing": true,
        paginate : false,
        /* initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select><option value="">Semua</option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        } */
    } );
} );
</script>
<script>
    $(document).ready(function() {
    $('#rekapnilaidownload').DataTable( {
        paging:         false,
        dom: 'Bfrtip',
        buttons: [
            {
                extend:    'copyHtml5',
                className: 'btn btn-info btn-flat',
                text:      '<i class="fa fa-files-o"></i>',
                titleAttr: 'Copy'
            },
            {
                extend:    'excelHtml5',
                className: 'btn btn-info btn-flat',
                text:      '<i class="fa fa-file-excel-o"></i> Download Excel',
                titleAttr: 'Download Excel'
            },
            {
                extend:    'pdfHtml5',
                className: 'btn btn-info btn-flat',
                text:      '<i class="fa fa-file-pdf-o"></i> Download PDF',
                titleAttr: 'Download PDF'
            }
        ]
    } );
} );
</script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2().css('width', '100%');
  });
</script>
<!-- jam real time -->
<script type="text/javascript">
  function clock() {// We create a new Date object and assign it to a variable called "time".
var time = new Date(),
    
    // Access the "getHours" method on the Date object with the dot accessor.
    hours = time.getHours(),
    
    // Access the "getMinutes" method with the dot accessor.
    minutes = time.getMinutes(),
    
    
    seconds = time.getSeconds();

    document.querySelectorAll('#clock')[0].innerHTML = harold(hours) + ":" + harold(minutes) + ":" + harold(seconds);
  
  function harold(standIn) {
    if (standIn < 10) {
      standIn = '0' + standIn
    }
    return standIn;
  }
}
setInterval(clock, 1000);
</script>
