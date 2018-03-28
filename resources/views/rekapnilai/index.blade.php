@extends('master')

@section('content')
<!-- end messages session pop-up -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Rekap Nilai Siswa
      </h1> 
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Rekap Nilai Siswa</a></li>
        <li class="active">Lihat Data Siswa</li>
      </ol>
    </section>

<!-- notification session -->
@if(session('message'))      
      <!-- sweet alert -->
    <link rel="stylesheet" href="/css/sweetalert.css">
    <!-- sweet alert -->
    <script src="/js/sweetalert.js"></script>
    <script>
        swal("{!! session('message') !!}", "Pastikan nilai lengkap dan sesuai yang di inputkan!", "success");
    </script>
@endif

@if(session('messageerror'))      
      <!-- sweet alert -->
    <link rel="stylesheet" href="/css/sweetalert.css">
    <!-- sweet alert -->
    <script src="/js/sweetalert.js"></script>
    <script>
        swal("{!! session('messageerror') !!}", "", "success");
    </script>
@endif
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Cari Siswa Per-kelas</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <form action="rekapnilai" class="form-horizontal" method="get">
                <div class="row">
                  <div class="col-md-6">
                    <select name="search" id="" class="form-control select2">
                      @foreach($kelas as $in)
                        <option value="{{ $in->id }}" @if($in->id == $cari) selected @endif>{{ $in->tingkat_kelas }} {{ $in->jurusan['nama_jurusan'] }} {{ $in->jumlah_kelas }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col-md-6">
                    <button type="submit" class="btn btn-success"><i class="fa fa-search"></i> Cari</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Cari Nama/NIS Siswa</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <form action="" class="form-horizontal" method="get">
                <div class="row">
                  <div class="col-md-6">
                    <input type="text" name="search-siswa" class="form-control" @if($cari) value="{{ $cari }}"  @else placeholder="Cari nama/nis..." @endif required>
                  </div>
                  <div class="col-md-6">
                    <button type="submit" class="btn btn-success"><i class="fa fa-search"></i> Cari</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Default box -->
      @if(count($cari) > 0)
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Hasil pencarian siswa yang akan di input / rekap nilai</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          @foreach($siswa as $in)
          <form action="/rekapnilai/deletechecked/{{ $in->id }}">
          @endforeach
            <div>
              <input type="submit" id="actions" value="Hapus" hidden>
            </div>
            <table id="example" class="display table table-stripped table-responsive">
              <thead>
                <tr>
                  <th>#</th>
                  <th>NIS</th>
                  <th>Nama Siswa</th>
                  <th>Kelas</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  @if(count($cari) > 0)
                  @foreach($siswa as $x)
                  <td>
                      <input type="checkbox" name="checked[]" id="option-1">
                  </td>
                  <td>{{ $x->username }}</td>
                  <td>{{ $x->name }}</td>
                  <td>{{ $x->kelas['tingkat_kelas'] }} {{ $x->jurusan['nama_jurusan'] }} {{ $x->kelas['jumlah_kelas'] }}</td>
                  <td>
                    <div class="btn-group">
                    <a href="/nilai/cari/{{ $x->id }}" class="btn btn-info"><i class="fa fa-check"></i> Rekap Nilai</a>
                    </div>
                    </td>
                </tr>
                  @endforeach
                  @else
                  <td colspan="8"><p class="text-muted text-center">Data tidak di temukan!</p></td>
                  @endif
              </tbody>
              <tfoot>
                <tr>
                  <th>#</th>
                  <th>NIS</th>
                  <th>Nama Siswa</th>
                  <th>Kelas</th>
                  <th>Aksi</th>
                </tr>
              </tfoot>
            </table>
          </form>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        </div>
        <!-- /.box-footer-->
      </div>
      @endif
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>

@endsection
