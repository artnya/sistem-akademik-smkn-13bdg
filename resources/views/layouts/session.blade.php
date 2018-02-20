@section('notif')
  <!-- sweet alert -->
<link rel="stylesheet" href="/css/sweetalert.css">
<!-- sweet alert -->
<script src="/js/sweetalert.js"></script>
  <script>
    swal("{{ session('message') }}", "You clicked the button!", "success");
  </script>
@endsection
