@extends('master')

@section('content')
<!-- end messages session pop-up -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Rekap Nilai Siswa
      </h1> 
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Data Rekap Nilai Siswa</a></li>
        <li class="active">Lihat Data Rekap Nilai Siswa</li>
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
          <h3 class="box-title">Pilih Siswa yang akan di rekap</h3>

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
            <table id="example" class="table table-bordered table-hover table-responsive">
              <thead>
                <tr>
                  <td>#</td>
                  <td>NIS</td>
                  <td>Nama Siswa</td>
                  <td>Kelas</td>
                  <td>Aksi</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  @foreach($siswa as $x)
                  <td>
                      <input type="checkbox" name="checked[]" id="option-1">
                  </td>
                  <td>{{ $x->username }}</td>
                  <td>{{ $x->name }}</td>
                  <td>{{ $x->kelas['tingkat_kelas'] }} - {{ $x->jurusan['nama_jurusan'] }} - {{ $x->kelas['jumlah_kelas'] }}</td>
                  <td>
                    <div class="btn-group">
                    <a data-toggle="modal" data-target="#edit{{$x->id}}" class="btn btn-info"><i class="fa fa-check"></i> Rekapitulasi Nilai</a>
                    </div>
                    </td>
                </tr>
                  @endforeach
              </tbody>
            </table>
          </form>
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
