<header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>13</b>SIA</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>@if(Auth()->user()->role == '2')ADMIN PANEL @elseif(Auth()->user()->role == '3') PANEL GURU @else SMKN 13 BANDUNG @endif</b> AKADEMIK
      </span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              @if(Auth::user()->unreadNotifications->count())
              <span class="label label-danger">{{Auth::user()->unreadNotifications->count()}}</span>
              @endif
            </a>
            <ul class="dropdown-menu">
              @if(Auth()->user()->unreadNotifications->count())
              <li class="header">Anda mempunyai {{ Auth()->user()->unreadNotifications->count() }} pemberitahuan</li>
              @else
              <li class="header">Pemberitahuan</li>
              @endif
              <li>
                <!-- inner menu: contains the actual data -->
                <!-- pusing sayah -->
                <ul class="menu">
                  @if(Auth()->user()->notifications->count())
                  <?php $no = 1; ?>
                  @foreach(Auth::user()->unreadNotifications as $notification)
                  @if($notification->type == 'App\Notifications\CommentNotification')
                  <li><a style="background-color: #d2d6de;" href="/home/timeline">({{ $no }}) {{ $notification->data['id'] }} {{ $notification->data['data'] }}</a></li>
                  @elseif($notification->type == 'App\Notifications\ReportNotification')
                  <li><a style="background-color: #d2d6de;" href="/reports">({{ $no }}) {{ $notification->data['id'] }} {{ $notification->data['data'] }}</a></li>
                  @endif
                  <?php $no++; ?>
                  @endforeach
                  @foreach(Auth::user()->readNotifications()->paginate(3) as $notification)
                  <li class="active"><a href="#">{{ $notification->data['id'] }} {{ $notification->data['data'] }}</a></li>
                  @endforeach
                  @else
                  <li class=""><a href="#"> Tidak ada pemberitahuan apapun</a></li>
                  @endif
                  {{ Auth::user()->readNotifications()->paginate(10)->links() }} 
                </ul>
              </li>
              <li class="footer"><a href="{{ route('notify-read') }}">Pilih semua anggap sudah di baca </a></li>
              @if(Auth()->user()->readNotifications->count())
              <li class="footer"><a href="{{ route('notify-clearly') }}">Hapus Pemberitahuan</a></li>
              @endif
            </ul>
          </li>
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img @if(Auth::user()->photo == 'Not Setting' || Auth::user()->photo == NULL) src="https://s17.postimg.org/bfpk18wcv/default.jpg" @else src="{{ url('uploadgambar') }}/{{ Auth::user()->photo }}" @endif class="user-image img-circle" alt="User Image">
              <span class="hidden-xs">{{ Auth::user()->name}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img @if(Auth::user()->photo == 'Not Setting' || Auth::user()->photo == NULL) src="https://s17.postimg.org/bfpk18wcv/default.jpg" @else src="{{ url('uploadgambar') }}/{{ Auth::user()->photo }}" @endif class="img-circle" alt="User Image">

                <p>
                  {{ Auth::user()->name}} - 
                  @if(Auth::user()->role == '2')
                    <small>Anda login sebagai Admin</small> 
                  @elseif(Auth::user()->role == '3')
                    <small>Anda login sebagai Guru</small> 
                  @elseif(Auth::user()->role == '1')
                    <small>Anda login sebagai Siswa</small> 
                  @endif
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="/profile/{{ str_slug(Auth::user()->name) }}" class="btn btn-default btn-flat"><i class="fa fa-user"></i>Profile</a>
                </div>
                <div class="pull-right">
                  	<a class="btn btn-default btn-flat" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i>Logout</a>
                  	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						{{ csrf_field() }}
					</form>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  @include('account.notify')
