@extends('master')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Mata Pelajaran
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Mata Pelajaran Users</a></li>
        <li class="active">Data Mata Pelajaran</li>
      </ol>
    </section>

<!-- notification session -->
@if(session('message'))      
      <!-- sweet alert -->
    <link rel="stylesheet" href="/css/sweetalert.css">
    <!-- sweet alert -->
    <script src="/js/sweetalert.js"></script>
    <script>
        swal("{!! session('message') !!}", "Pastikan hanya administrator yang bisa mengendalikan sistem verifikasi ini", "success");
    </script>
@endif
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Mata Pelajaran Umum</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              @if(Auth()->user()->role == '2')
              <a href="#" data-toggle="modal" data-target="#add" class="btn btn-default text-aqua ajax"><i class="fa fa-plus"></i></a> 
              @endif
              @foreach($mapel as $in)
              <form action="/mapel/deletechecked/{{ $in->id }}">
                {{ csrf_field() }}
              @endforeach
                <div>
                  <input type="submit" id="actions" value="Hapus" hidden>
                </div>
                <table id="example" class="table table-bordered table-hover table-responsive">
                  <thead>
                    <tr>
                      @if(Auth::user()->role != '1')
                      <td><input type="checkbox" name="select_all" id="select_all"></td>
                      @endif
                      <td>Nama Mata Pelajaran</td>
                      <td>Type Mata Pelajaran</td>
                      <td>KKM</td>
                      @if(Auth()->user()->role == '2')
                      <td>Aksi</td>
                      @endif
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      @foreach($mapel as $x)
                      @if(Auth::user()->role != '1')
                      <td>
                          <input type="checkbox" name="checkeditems[]" id="option-1">
                      </td>
                      @endif
                      <td>{{ $x->nama_mapel }}</td>
                      <td>{{ $x->type_mapel }}</td>
                      <td>
                        @if($x->kkm == NULL)
                          <span class="text-red">KKM belum di atur</span>
                        @else
                          {{ $x->kkm }}
                        @endif
                      </td>
                      @if(Auth()->user()->role == '2')
                      <td>
                        <div class="btn-group">
                        <a data-toggle="modal" data-target="#edit{{$x->id}}" class="btn btn-default text-yellow"><i class="fa fa-pencil"></i></a>
                        <a data-toggle="modal" data-target="#delete{{$x->id}}" class="btn btn-default text-yellow"><i class="fa fa-trash"></i></a>
                        </div>
                      </td>
                      @endif
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
        </div>
      </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>

@include('mapel.edit')
@include('mapel.create')
@include('mapel.delete')

@endsection

