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
            <table id="example" class="table table-stripped table-responsive">
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
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>

@yield('siswa.detail')
@yield('siswa.edit')
@yield('siswa.delete')
@yield('siswa.upload-pic')
@endsection
