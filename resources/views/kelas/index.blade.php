@extends('master')

@section('content')
<!-- end messages session pop-up -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Kelas
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Data Kelas</a></li>
        <li class="active">Lihat Data Kelas</li>
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
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Kelas</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          @foreach($kelas as $in)
          <form action="/kelas/deletechecked/{{ $in->id }}">
            {{ csrf_field() }}
          @endforeach
            <div>
            @if(Auth()->user()->role == '2')
            <a href="#" style="margin: 10px 10px;" data-toggle="modal" class="btn btn-success ajax" data-target="#add"><i class="fa fa-plus"></i> Tambah Kelas</a>
            @endif
            </div>
            <div>
              <input type="submit" id="actions" value="Hapus" hidden>
            </div>
            <table id="example" class="table table-bordered table-hover table-responsive">
              <thead>
                <tr>
                  @if(Auth::user()->role == '2')
                  <td><input type="checkbox" name="select_all" id="select_all"></td>
                  @endif
                  <td>Kelas</td>
                  <td>Wali Kelas</td>
                  <td>Aksi</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  @foreach($kelas as $x)
                  @if(Auth::user()->role == '2')
                  <td>
                      <input type="checkbox" name="checked[]" id="option-1" value="{{ $x->id }}">
                  </td>
                  @endif
                  <td>{{ $x->tingkat_kelas }} {{ $x->jurusan['nama_jurusan'] }} {{ $x->jumlah_kelas }}</td>
                  <td>
                    @if(($x->nip == NULL) || ($x->user['id'] == NULL))
                      <span class="label label-danger">Tidak ada wali kelas/kosong</span>
                    @else
                      {{ $x->user['name'] }}
                    @endif
                  <td>
                    <div class="btn-group">
                    <a href="#" data-toggle="modal" data-target="#detail{{$x->id}}" class="btn btn-default text-aqua"><i class="fa fa-eye"></i></a> 
                    @if(Auth()->user()->role == '2')
                    <a data-toggle="modal" data-target="#edit{{$x->id}}" class="btn btn-default  text-yellow"><i class="fa fa-pencil"></i></a>
                    <a href="#" data-toggle="modal" class="btn btn-default text-red" data-target="#delete{{$x->id}}"><i class="fa fa-trash"></i></a>
                    @endif
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
      <div class="ajax-content"></div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>

@include('kelas.create')
@include('kelas.detail')
@include('kelas.delete')
@include('kelas.edit-kelas')

@endsection
