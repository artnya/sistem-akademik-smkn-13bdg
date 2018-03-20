@extends('master')

@section('content')<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Diskusi Group
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Timeline</a></li>
        <li class="active">Edit Post</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- =========================================================== -->
      <div class="row">
        <div class="col-md-12">
            <div class="tab-content">
                <form class="form-horizontal" method="post" action="/timeline/update/{{ $timeline->id }}">
                  {{ csrf_field() }}
                  <div class="box-body pad">
                    <textarea id="editor1" name="post" rows="10" cols="80">
                      {!! $timeline->post !!}
                    </textarea>
                  </div>
                  <button type="submit" class="btn btn-danger">Edit Post</button>
                </form>
              <!-- /.tab-pane -->
            </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
@endsection
