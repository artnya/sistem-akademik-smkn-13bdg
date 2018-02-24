<?php if(Auth()->user()->role != '4'): ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <?php if(Auth()->user()->unreadNotifications->count()): ?>
  <title>(<?php echo e(Auth()->user()->unreadNotifications->count()); ?>) Akademik SMKN 13 Bandung</title>
  <?php else: ?>
  <title>Akademik SMKN 13 Bandung</title>
  <?php endif; ?>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
   <link rel="shortcut icon" href="<?php echo e(asset('favicon.png')); ?>">
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="
https://cdn.datatables.net/buttons/1.5.1/css/buttons.bootstrap.min.css">
  <style>
    tfoot input {
        width: 100%;
        padding: 3px;
        box-sizing: border-box;
    }
  </style>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/css/font-awesome.min.css">
  <!-- my css -->
  <link rel="stylesheet" href="/css/mycss.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="/css/skins/_all-skins.min.css">
  <!-- Pace style -->
  <link rel="stylesheet" href="/css/pace.css">
  <!-- loading style -->
  <link rel="stylesheet" href="/css/loading.css">
  <!-- sweet alert -->
  <link rel="stylesheet" href="/css/sweetalert.css">
  <!-- select 2 -->
  <link rel="stylesheet" href="/css/select2.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- Morris chart 
  <link rel="stylesheet" href="/js/morris.js/morris.css"> -->
  <!-- jvectormap
  <link rel="stylesheet" href="/js/jquery-jvectormap.min.css"> -->
  <!-- Date Picker -->
  <link rel="stylesheet" href="/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/css/daterangepicker.min.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <!-- <link rel="stylesheet" href="/css/bootstrap3-wysihtml5.min.css"> -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
<body class="hold-transition skin-blue fixed sidebar-mini">
<div class="wrapper">

	<?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<?php echo $__env->make('layouts.aside', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<?php echo $__env->yieldContent('content'); ?>

	<?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <?php echo $__env->make('layouts.control-sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <?php if(session()->has('message')): ?>
  <?php echo $__env->make('layouts.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php endif; ?>
      <div class="ajax-content"></div>

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->  
</div>
<!-- ./wrapper -->
<script src="/js/app.min.js"></script>
<!-- jQuery 3 -->
<script src="/js/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/js/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="/js/jquery.dataTables.min.js"></script>
<script src="/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.colVis.min.js"></script>
<!-- 
<script src="/js/raphael.min.js"></script>
 Morris.js charts -->

<!-- <script src="/js/morris.min.js"></script> -->

<!-- Sparkline -->
<!-- <script src="/js/jquery.sparkline.min.js"></script> -->

<!-- jvectormap -->
<!-- <script src="/js/jquery-jvectormap-1.2.2.min.js"></script>-->

<!-- <script src="/js/jquery-jvectormap-world-mill-en.js"></script> -->
<!-- jQuery Knob Chart -->

<!-- <script src="/js/jquery-knob/dist/jquery.knob.min.js"></script> -->

<!-- daterangepicker -->

<!-- <script src="/js/moment.min.js"></script> -->
<!-- 
<script src="/js/daterangepicker.js"></script>
data pickrange -->

<!-- datepicker -->
<script src="/js/bootstrap-datepicker.min.js"></script>
<!-- select 2 -->
<script src="/js/select2.full.min.js"></script>
<!-- 
<script src="/js/bootstrap3-wysihtml5.all.min.js"></script>
Bootstrap WYSIHTML5 -->
<!-- sweet alert -->
<script src="/js/sweetalert.js"></script>
<!-- Slimscroll -->
<script src="/js/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<!-- PACE -->
<script src="/js/pace.js"></script>
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
<script src="/js/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/js/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/js/demo.js"></script>
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
        stateSave: true,
        initComplete: function () {
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
        }
    } );
} );
</script>
<!-- page script -->
<script type="text/javascript">
  // To make Pace works on Ajax calls
  $(document).ajaxStart(function () {
    Pace.restart()
  })
  $('.ajax').click(function () {
    $.ajax({
      url: '#', success: function (result) {
        $('.ajax-content').html('<hr>Ajax Request Completed !')
      }
    })
  })
</script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2().css('width', '100%');
  });
</script>
</body>
</html>
<?php else: ?>
<?php echo $__env->make('errors.banned', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>
