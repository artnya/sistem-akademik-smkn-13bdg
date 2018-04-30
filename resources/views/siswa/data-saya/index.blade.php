@extends('master')

@section('content')
<!-- end messages session pop-up -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Saya
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Data Saya</a></li>
        <li class="active">Lihat Nilai Saya</li>
      </ol>
    </section>

<!-- notification session -->
@if(session('message'))      
  <!-- sweet alert -->
<link rel="stylesheet" href="/css/sweetalert.css">
<!-- sweet alert -->
<script src="/js/sweetalert.js"></script>
<script>
    swal("{!! session('message') !!}", "", "success");
</script>
@endif
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box box-solid box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Cari Nilai Per-Semester</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <form action="" method="get">
              <div class="input-group input-group-sm">
                <select type="text" class="form-control" name="q">
                  <option value="" selected disabled>--Pilih Semester--</option>
                  <option value="1">Semester 1</option>
                  <option value="2">Semester 2</option>
                  <option value="3">Semester 3</option>
                  <option value="4">Semester 4</option>
                  <option value="5">Semester 5</option>
                  <option value="6">Semester 6</option>
                </select>
                    <span class="input-group-btn">
                      <button type="submit" class="btn btn-info btn-flat"><i class="fa fa-search"></i> Go!</button>
                    </span>
              </div>
          </form>
        </div>
      </div>
      <div class="box box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">Nilai semester {{ $q }}</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <form action="#">
            <div>
              @if(Auth()->user()->role == '2')
            <a href="#" style="margin: 10px 10px;" data-toggle="modal" class="btn btn-success ajax" data-target="#add"><i class="fa fa-plus"></i> Tambah Nilai</a>
              @endif
            </div>
            <div>
              <input type="submit" id="actions" value="Hapus" hidden>
            </div>
              <div class="row">
                <div class="col-md-12">
                <table id="example" class="table table-bordered table-hover table-responsive">
                  <thead>
                    <tr>
                      <th>Mata Pelajaran</th>
                      <th>Tugas 1</th>
                      <th>Tugas 2</th>
                      <th>Tugas 3</th>
                      <th>Sikap</th>
                      <th>Pengetahuan</th>
                      <th>UTS</th>
                      <th>UAS</th>
                      <th>KKM</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if(!$hasil->count() < 1)
                    @foreach($hasil as $in)
                    <tr>
                      <td>{{ $in->mapel['nama_mapel'] }}</td>
                      <td>{{ $in->tugas1 }}</td>
                      <td>{{ $in->tugas2 }}</td>
                      <td>{{ $in->tugas3 }}</td>
                      <td>{{ $in->nilai_sikap }}</td>
                      <td>{{ $in->nilai_pengetahuan }}</td>
                      <td>{{ $in->uts }}</td>
                      <td>{{ $in->uas }}</td>
                      <td>{{ $in->kkm }}</td>
                    </tr>
                    @endforeach
                    @else
                    <td class="text-center" colspan="12">Nilai pada semester ini belum di input.</td>
                    @endif
                  </tbody>
                </table>                  
                </div>
              </div>
          </form>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        </div>
        <!-- /.box-footer-->
      </div>
        <!-- /.box-footer-->

      </section>
    </div>


@endsection
