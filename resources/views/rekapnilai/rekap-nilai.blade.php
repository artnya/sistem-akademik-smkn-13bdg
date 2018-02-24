@extends('master')

@section('content')
<!-- end messages session pop-up -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{  $siswa->username}} {{  $siswa->name}} - {{  $siswa->kelas['tingkat_kelas']}} {{  $siswa->jurusan['nama_jurusan']}} {{  $siswa->kelas['jumlah_kelas']}}
      </h1> 
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Data Rekap Nilai Siswa</a></li>
        <li><a href="#">Cari Data Siswa</a></li>
        <li class="active">Data Nilai {{ $siswa->name }}</li>
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

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Nilai</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
            <div>
              <input type="submit" id="actions" value="Hapus" hidden>
            </div>
            <table id="rekap" class="table table-bordered table-hover table-responsive">
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
                <tr>
                @if(!$rekapnilai->count() < 1)
                @foreach($rekapnilai as $in)
                	<td>{{ $in->mapel['nama_mapel'] }}</td>
                	<td><input type="text" class="form-control col-md-3" value="{{ $in->tugas1 }}" ></td>
                	<td><input type="text" class="form-control col-md-3" value="{{ $in->tugas2 }}" ></td>
                	<td><input type="text" class="form-control col-md-3" value="{{ $in->tugas3 }}" ></td>
                	<td><input type="text" class="form-control col-md-3" value="{{ $in->nilai_sikap }}" ></td>
                	<td><input type="text" class="form-control col-md-3" value="{{ $in->nilai_pengetahuan }}" ></td>
                	<td><input type="text" class="form-control col-md-3" value="{{ $in->uts }}" ></td>
                	<td><input type="text" class="form-control col-md-3" value="{{ $in->uas }}" ></td>
                	<td><input type="text" class="form-control col-md-3" value="{{ $in->mapel['kkm'] }}"></td>
                </tr>
                @endforeach
                @else
                <td class="text-center" colspan="12">Belum ada nilai yang di input.</td>
                @endif
              </tbody>
            </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <a class="btn btn-info" href="/inputnilai/siswa/{{ $siswa->id }}">Input Nilai</a>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>

@endsection
