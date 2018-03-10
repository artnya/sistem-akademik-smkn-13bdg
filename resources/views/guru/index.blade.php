@extends('master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Guru
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Data Guru</a></li>
        <li class="active">Lihat Data Guru</li>
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
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-user-md"></i> Total guru sekarang ({{ $guru->count() }}) Guru</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          @foreach($guru as $in)
          <form action="/guru/deletechecked/{{ $in->id }}" method="get">
          @endforeach
          <div>
              <input type="submit" id="actions" value="Hapus" hidden>
          </div>
            <table id="example" class="table table-stripped table-responsive">
              <thead>
                <tr>
                  <td><input type="checkbox" name="select_all" id="select_all"></td>
                  <td>NIP</td>
                  <td>Nama Guru</td>
                  <td>Mata Pelajaran</td>
                  <td>L/P</td>
                  <td>Aksi</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  @foreach($guru as $x)
                  <td>
                        <input type="checkbox" name="checked[]" id="option-1">
                  </td>
                  <td>{{ $x->username }}</td>
                  <td>{{ $x->name }}</td>
                  <td>
                    @if($x->id_mapel == "Not Verified" || $x->id_mapel == NULL)
                        @if(Auth()->user()->role == '2')
                      <button type="button" data-toggle="modal" data-target="#mapel{{$x->id}}" class="btn btn-info btn-xs">Tambahkan mata pelajaran</button>
                      @else
                          <span class="text-orange">Belum di setting oleh admin</span>
                      @endif
                    @else
                    {{ $x->mapel['nama_mapel'] }}
                    {{ $x->mapelproduktif['nama_mapel'] }}
                    @endif
                  </td>
                  <td>{{ $x->jenis_kelamin }}</td>
                  <td>
                    <a title="Detail" href="#" data-toggle="modal" data-target="#detail{{$x->id}}" class="btn text-aqua"><i class="fa fa-eye"></i></a>
                        @if(Auth::user()->role == '2')
                          <a title="Edit" data-toggle="modal" data-target="#edit{{$x->id}}" class="btn text-yellow"><i class="fa fa-pencil"></i></a> 
                          <a title="Upload Photo" data-toggle="modal" data-target="#edit-photo{{$x->id}}" class="btn text-yellow"><i class="fa fa-upload"></i></a>
                          <a title="Hapus/Akun" href="#" data-toggle="modal" class="btn text-red" data-target="#delete{{$x->id}}"><i class="fa fa-trash"></i></a>                        
                    @endif
                  </td>
                </tr>
                  @endforeach
              </tbody>
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

@include('guru.detail')
@include('guru.edit')
@include('guru.delete')
@include('guru.upload-pic')
@include('guru.tambah-mapel')
@endsection
