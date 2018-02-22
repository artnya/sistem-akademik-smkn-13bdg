<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left circle-img img-circle">
          <img @if(Auth::user()->photo == 'Not Setting' || Auth::user()->photo == '') src="https://s17.postimg.org/bfpk18wcv/default.jpg" @else src="{{ url('uploadgambar') }}/{{ Auth::user()->photo }}" @endif alt="User Image" width="50" height="50">
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->name}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        @if(Auth()->user()->role == '1')
        <li class="header">STUDENT AREA</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>Data saya</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/siswa"><i class="fa fa-circle-o"></i> Lihat nilai saya
            <span class="pull-right-container">
              <small class="label pull-right bg-red">Soon</small>
            </span>
            </a></li>
            <li><a href="/rekapnilai"><i class="fa fa-circle-o"></i> Dokumen saya
            <span class="pull-right-container">
              <small class="label pull-right bg-red">Soon</small>
            </span></a></li>
          </ul>
        </li>
        @endif

        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview {{{ (Request::is('home') ? 'active' : '') }}} {{{ (Request::is('home/timeline') ? 'active' : '') }}} ">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li {{{ (Request::is('home') ? 'class=active' : '') }}}><a href="/home"><i class="fa fa-circle-o"></i> Home Page</a></li>
            <li {{{ (Request::is('home/timeline') ? 'class=active' : '') }}}><a href="/home/timeline"><i class="fa fa-circle-o"></i> Discuss Group</a>
          </ul>
        </li>
        @if(Auth()->user())
        <li class="treeview {{{ (Request::is('siswa') ? 'active' : '') }}} {{{ (Request::is('rekapnilai') ? 'active' : '') }}}">
          <a href="#">
            <i class="fa fa-user"></i> <span>Data Siswa</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li {{{ (Request::is('siswa') ? 'clas=active' : '') }}}><a href="/siswa"><i class="fa fa-circle-o"></i> Lihat Data Siswa</a></li>
            @if(Auth()->user()->role == '2' || Auth()->user()->role == '3')
            <li {{{ (Request::is('rekapnilai') ? 'class=active' : '') }}}><a href="/rekapnilai"><i class="fa fa-circle-o"></i> Input & Rekap Nilai Siswa</a></li>
            @endif
          </ul>
        </li>
        <li class="treeview {{{ (Request::is('guru') ? 'active' : '') }}}">
          <a href="#">
            <i class="fa fa-table"></i> <span>Data Guru</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
              <ul class="treeview-menu">
                <li {{{ (Request::is('guru') ? 'class=active' : '') }}}><a href="/guru"><i class="fa fa-circle-o"></i> Lihat Data Guru</a></li>
             </ul>
        </li>
        <li class="treeview {{{ (Request::is('kelas') ? 'active' : '') }}}">
          <a href="#">
            <i class="fa fa-university"></i> <span>Kelas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li {{{ (Request::is('kelas') ? 'class=active' : '') }}}><a href="/kelas"><i class="fa fa-circle-o"></i> Lihat Data Kelas</a></li>
          </ul>
        </li>
        <li class="treeview {{{ (Request::is('mapel') ? 'active' : '') }}} {{{ (Request::is('mapel-produktif') ? 'active' : '') }}}">
          <a href="#">
            <i class="fa fa-book"></i> <span>Mata Pelajaran</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li {{{ (Request::is('mapel-produktif') ? 'class=active' : '') }}}><a href="mapel-produktif"><i class="fa fa-circle-o"></i> Produktif</a></li>
            <li {{{ (Request::is('mapel') ? 'class=active' : '') }}}><a href="/mapel"><i class="fa fa-circle-o"></i> Non-Produktif</a></li>
          </ul>
        </li>
        @endif
        @if(Auth()->user()->role == '2')
        <li>
        <li class="header">ADMIN COMMAND AREA</li>
        <li {{{ (Request::is('account') ? 'class=active' : '') }}}><a href="/account"><i class="fa fa-group text-red"></i> <span>Account users</span></a></li>
        <li {{{ (Request::is('tahun') ? 'class=active' : '') }}}><a href="/tahun"><i class="fa fa-pencil text-yellow"></i> <span>Tahun Ajaran</span></a></li>
        <li {{{ (Request::is('jurusan') ? 'class=active' : '') }}}><a href="/jurusan"><i class="fa fa-university text-blue"></i> <span>Jurusan</span></a></li>
        </li>
        @endif
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
