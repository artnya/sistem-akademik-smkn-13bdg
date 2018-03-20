@extends('master')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Accounts
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Accounts Users</a></li>
        <li class="active">Data Accounts</li>
      </ol>
    </section>

<!-- notification session -->
@if(session('message'))      
  <!-- sweet alert -->
<link rel="stylesheet" href="/css/sweetalert.css">
<!-- sweet alert -->
<script src="/js/sweetalert.js"></script>
<script>
    swal("{{ session('message') }}", "Pastikan hanya administrator yang bisa mengendalikan sistem verifikasi ini", "success");
</script>
@endif
    <!-- Main content -->
    <section class="content">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Cari Akun</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>  
        <div class="box-body">
          <form action="/account" method="GET" class="form-horizontal">
            <div class="row">
              <div class="col-md-6">
                <input type="text" class="form-control" name="search" @if($cari == true) placeholder="{{ $cari }}" @else placeholder="Cari Akun..." @endif>
              </div>
              <div class="col-sm-4" style="">
                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Cari</button>
                  @if(count($cari) > 0)
                  <a href="/account" class="btn btn-danger"><i class="fa fa-back"></i> Kembali</a>
                  @elseif(count($account) == 0)
                  <a href="/account" class="btn btn-danger"><i class="fa fa-back"></i> Kembali</a>
                  @endif
              </div>
            </div>
          </form>
        </div>      
      </div>
      <!-- Default box -->

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Accounts</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <a href="#" data-toggle="modal" data-target="#add" class="btn btn-info"><i class="fa fa-plus"></i> Tambah Akun</a> 
          @foreach($account as $x)
          <form action="/account/deletechecked/{{ $x->id }}" method="POST">
          @endforeach
            {{ csrf_field() }}
            <div>
              <input type="submit" id="actions" value="Hapus" hidden>
            </div>
            <div class="col-sm-6">
              {{ $account->links() }}
            </div>
            <table @if(count($cari) > 0) id="example" @endif class="table table-bordered table-hover table-responsive">
              <thead>
                <tr>
                  <td><input type="checkbox" id="select_all" name="select_all" /></td>
                  <td>No</td>
                  <td>Nama pengguna</td>
                  <td>Username</td>
                  <td>Verifikasi sebagai</td>
                  <td>Email</td>
                  <td>Aksi</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  @if(count($account) > 0)
                  <?php $no = 1; ?>
                  @foreach($account as $x)
                  <td>
                    <input type="checkbox" name="checked[]" data-id="checkbox" value="{{$x->id}}" />
                  </td>
                  <td>{{ $no }}</td>
                  <td>{{ $x->name }}</td>
                  <td>{{ $x->username }}</td>
                  <td>
                    <!-- back-end -->
                        @if($x->role == '1')
                        Terverifikasi sebagai siswa
                        @elseif($x->role == '2')
                        Terverifikasi sebagai Admin
                        @elseif($x->role == '3')
                        Terverifikasi sebagai Guru
                        @elseif($x->role == '4')
                        Account di banned!
                        @else
                        Belum terverifikasi!
                        @endif
                    <!-- end oef back end -->
                  </td>
                  <td>{{ $x->email }}</td>
                  <td>
                    <div class="btn-group">
                    <a href="#" data-toggle="modal" data-target="#detail{{$x->id}}" class="btn btn-default text-aqua ajax"><i class="fa fa-eye"></i></a> 
                    <a data-toggle="modal" data-target="#edit{{$x->id}}" class="btn btn-default text-yellow"><i class="fa fa-refresh"></i></a>
                    </div>
                    </td>
                </tr>
                <?php $no++; ?>
                  @endforeach
                  @else
                  <td colspan="10">Ooops! Akun tidak di temukan, silahkan periksa kembali.</td>
                  @endif
              </tbody>
            </table>
          </form>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <div class="row">
            <div class="col-md-6">
              <form action="/account/import-excel" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="file" name="imported-file" class="form-control" required>
                <button type="submit" class="btn btn-primary"><i class="fa fa-file-excel-o"></i> Import akun siswa via excel</button>
              </form>              
            </div>
            <div class="col-md-6">
              <form action="/account/import-excel/guru" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="file" name="imported-file-guru" class="form-control" required>
                <button type="submit" class="btn btn-primary"><i class="fa fa-file-excel-o"></i> Import akun guru via excel</button>
              </form>
            </div>
          </div>
        </div>
        <!-- /.box-footer-->
      </div>
      <div class="ajax-content"></div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>

@include('account.create')
@include('account.edit')
@include('account.detail')

@endsection

