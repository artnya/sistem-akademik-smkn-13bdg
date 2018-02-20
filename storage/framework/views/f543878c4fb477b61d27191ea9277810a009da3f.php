<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left circle-img img-circle">
          <img <?php if(Auth::user()->photo == 'Not Setting' || Auth::user()->photo == ''): ?> src="https://s17.postimg.org/bfpk18wcv/default.jpg" <?php else: ?> src="<?php echo e(url('uploadgambar')); ?>/<?php echo e(Auth::user()->photo); ?>" <?php endif; ?> alt="User Image" width="50" height="50">
        </div>
        <div class="pull-left info">
          <p><?php echo e(Auth::user()->name); ?></p>
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
        <?php if(Auth()->user()->role == '1'): ?>
        <li class="header">PERSONAL AREA</li>
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
        <?php endif; ?>

        <li class="header">MAIN NAVIGATION</li>
        <li <?php echo e((Request::is('/home') ? 'class=active' : '')); ?> class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="/home"><i class="fa fa-circle-o"></i> Home Page</a></li>
            <li><a href="/home/timeline"><i class="fa fa-circle-o"></i> Discuss Group</a>
          </ul>
        </li>
        <?php if(Auth()->user()): ?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>Data Siswa</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/siswa"><i class="fa fa-circle-o"></i> Lihat Data Siswa</a></li>
            <?php if(Auth()->user()->role == '2' || Auth()->user()->role == '3'): ?>
            <li><a href="/rekapnilai"><i class="fa fa-circle-o"></i> Rekap Nilai Siswa</a></li>
            <?php endif; ?>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Data Guru</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
              <ul class="treeview-menu">
                <li><a href="/guru"><i class="fa fa-circle-o"></i> Lihat Data Guru</a></li>
             </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-university"></i> <span>Kelas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/kelas"><i class="fa fa-circle-o"></i> Lihat Data Kelas</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i> <span>Mata Pelajaran</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="mapel-produktif"><i class="fa fa-circle-o"></i> Produktif</a></li>
            <li><a href="/mapel"><i class="fa fa-circle-o"></i> Non-Produktif</a></li>
          </ul>
        </li>
        <?php endif; ?>
        <?php if(Auth()->user()->role == '2'): ?>
        <li>
        <li class="header">ADMIN COMMAND AREA</li>
        <li><a href="/account"><i class="fa fa-group text-red"></i> <span>Account users</span></a></li>
        <li><a href="/tahun"><i class="fa fa-pencil text-yellow"></i> <span>Tahun Ajaran</span></a></li>
        <li><a href="/jurusan"><i class="fa fa-university text-blue"></i> <span>Jurusan</span></a></li>
        </li>
        <?php endif; ?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
