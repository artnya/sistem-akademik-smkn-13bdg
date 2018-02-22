@extends('master')

@section('content')
<!-- end messages session pop-up -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Nilai {{  $siswa->name}}
      </h1> 
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Data Rekap Nilai Siswa</a></li>
        <li><a href="#">Cari Data Siswa</a></li>
        <li class="active">Data Nilai {{ $siswa->name }}</li>
      </ol>
    </section>

<!-- notification session -->
@if (session('message'))      
  @include('layouts.session')
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
                	<td>Mata Pelajaran</td>
                	<td>Tugas 1</td>
                	<td>Tugas 2</td>
                	<td>Tugas 3</td>
                	<td>Sikap</td>
                	<td>Pengetahuan</td>
                	<td>UTS</td>
                	<td>UAS</td>
                	<td>KKM</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                @foreach($rekapnilai as $in)
                	<td>{{ $in->mapel['nama_mapel'] }}</td>
                	<td>{{ $in->tugas1 }}</td>
                	<td>{{ $in->tugas2 }}</td>
                	<td>{{ $in->tugas3 }}</td>
                	<td>{{ $in->nilai_sikap }}</td>
                	<td>{{ $in->nilai_pengetahuan }}</td>
                	<td>{{ $in->uts }}</td>
                	<td>{{ $in->uas }}</td>
                	<td>{{ $in->mapel['kkm'] }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>

@endsection
