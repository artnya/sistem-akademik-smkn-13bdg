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
        <li><a href="#">Examples</a></li>
        <li class="active">User profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- =========================================================== -->
      <div class="row">
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Activity</a></li>
              <li><a href="#post" data-toggle="tab">Posting</a></li>
              <li><a href="#settings" data-toggle="tab">Settings</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
          <!-- Box Comment -->
          @foreach($posts as $post)
          <div id="reload" class="box box-widget">
            <div class="box-header with-border">
           @if($post->count())
              <div class="user-block">
                <img class="img-circle" @if($post->user->photo == 'Not Setting' || $post->user->photo == '') src="https://s17.postimg.org/bfpk18wcv/default.jpg" @else src="{{ url('uploadgambar') }}/{{ $post->user->photo }}" @endif alt="User Image">
                <span class="username"><a href="#">{{ $post->user->name }}</a></span>
                <span class="description">Posted at - {{ $post->created_at->diffForHumans() }} </span>
              </div>
              <!-- /.user-block -->
              <div class="box-tools">
                @if($post->id_user == Auth::user()->id )
                <a href="/home/timeline/post/edit/{{ $post->id }}" class="btn btn-box-tool" data-widget="remove" title="Edit post"><i class="fa fa-pencil"></i></a>
                @endif
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
              <!-- /.box-tools -->
          @else
          No has posted activity discuss right now.
          @endif
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              @if($post->shared_user == NULL && $post->shared_desc == NULL)
              <p>{{ $post->post }}</p>
              @else
              <p>{{ $post->shared_desc }}</p>
              <div class="user-block">
                <span class="username"><a href="#">{{ $post->shared_user }}</a></span>
                <p class="description">{{ $post->post }}</p>
              </div>
              @endif

            </div>
            <div class="box-footer">
              <a href="/home/timeline/comment/post/{{ $post->id }}" class="btn btn-primary btn-xs"><i class="fa fa-comment"></i> Lihat atau komentar</a>
              <a href="/home/comments/post/share/{{ $post->id }}" class="btn btn-info btn-xs"><i class="fa fa-share"></i> Share</a>
            </div>
            <!-- /.box-footer -->
          </div>
          @endforeach
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="settings">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Experience</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
              <!-- /.tab-pane -->

              <div class="tab-pane" id="post">
                <form class="form-horizontal" method="post" action="/timeline/add">
                  {{ csrf_field() }}
                  <div class="form-group">
                    <label for="post" class="col-sm-2 control-label">Description</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" name="post" id="post"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
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
