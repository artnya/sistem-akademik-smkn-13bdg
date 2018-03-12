@extends('master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Siswa
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Data Siswa</a></li>
        <li class="active">Lihat Data Siswa</li>
      </ol>
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
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Cari Siswa Per-Kelas</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>  
        <div class="box-body">
          <form action="/siswa" method="GET" class="form-horizontal">
            <div class="row">
              <div class="col-md-6">
                <select name="search" class="form-control select2" data-width="100%" id="">
                  @foreach($kelas as $in)
                  <option value="{{ $in->id }}" @if($in->id == $cari) selected @else @endif>{{ $in->tingkat_kelas }} {{ $in->jurusan['nama_jurusan'] }} {{ $in->jumlah_kelas }}</option>
                  @endforeach
                </select>
              </div>
              <div class="col-sm-4" style="">
                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Cari</button>
                @if(count($cari) > 0)
                <a href="/siswa" class="btn btn-danger"><i class="fa fa-back"></i> Kembali</a>
                @endif
              </div>
            </div>
          </form>
        </div>      
      </div>
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Siswa</h3>

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
          <form action="/siswa/deletechecked/{{ $in->id }}" method="get">
          @endforeach
          <div>
              <input type="submit" id="actions" value="Hapus" hidden>
          </div>
          <div class="col-md-12">
            {{ $siswa->appends(Request::only('search'))->links() }}
          </div>
            <table @if(count($cari) > 0 ) id="example" @endif class="table table-hover table-striped table-bordered table-responsive">
              <thead>
                <tr>
                  <th><input type="checkbox" name="select_all" id="select_all"></th>
                  <th>NIS</th>
                  <th>Nama Siswa</th>
                  <th>Kelas</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  @if(count($siswa) > 0)
                  @foreach($siswa as $x)
                  <td>
                        <input type="checkbox" name="checked[]" id="option-1">
                  </td>
                  <td>{{ $x->username }}</td>
                  <td>{{ $x->name }}</td>
                  <td>{{ $x->kelas['tingkat_kelas'] }} {{ $x->jurusan['nama_jurusan'] }} {{ $x->kelas['jumlah_kelas'] }}</td>
                  <td>
                    <a href="#" data-toggle="modal" data-target="#detail{{$x->id}}" class="btn text-aqua"><i class="fa fa-eye"></i></a>
                    @if(Auth::user()->role == '2') 
                    <a data-toggle="modal" data-target="#edit{{$x->id}}" class="btn text-yellow"><i class="fa fa-pencil"></i></a> 
                    <a href="/siswa/uploadpic/#{{$x->id}}" data-toggle="modal" data-target="#edit-photo{{$x->id}}" class="btn text-yellow"><i class="fa fa-upload"></i></a>
                    <a href="#" data-toggle="modal" class="btn text-red" data-target="#delete{{$x->id}}"><i class="fa fa-trash"></i></a>
                    @endif
                  </td>
                </tr>
                  @endforeach
                  @else
                  <tr>
                    <td colspan="8"><h2 class="text-center text-muted">Ooops! Data yang anda cari tidak ditemukan.</h2></td>
                  </tr>
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
          <div class="ajax-content">
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <div class="col-md-offset-5">
            {{ $siswa->appends(Request::only('search'))->links() }}
          </div>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>

@include('siswa.detail')
@include('siswa.edit')
@include('siswa.delete')
@include('siswa.upload-pic')
@endsection
