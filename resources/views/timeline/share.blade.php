@extends('master')

@section('content')<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Timeline
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Post</a></li>
        <li class="active">Share</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- =========================================================== -->
      <div class="row">
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#post" data-toggle="tab">Share Posting</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="post">
                <form class="form-horizontal" method="post" action="/home/timeline/share/add">
                  {{ csrf_field() }}
                  <div class="form-group">
                    <label for="post_user" class="col-sm-2 control-label">Posting From :</label>

                    <div class="col-sm-10">
                      <span class="username" id="post_user"><a href="#">{{ $shares->user->name }}</a></span>
                      <input type="hidden" name="shared_user" value="{{ $shares->user->name }}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="share_by" class="col-sm-2 control-label">Will be share by :</label>

                    <div class="col-sm-10">
                      <span class="username" id="share_by"><a href="#">{{ Auth()->user()->name }}</a></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="post" class="col-sm-2 control-label">Description</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" name="shared_desc" id="post"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="post" class="col-sm-2 control-label">Post</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" name="post" id="post">{{ $shares->post }}</textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Share</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
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
