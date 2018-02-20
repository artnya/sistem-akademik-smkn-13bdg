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
    swal("{!! session('message') !!}", "", "success");
</script>
@endif
    <!-- Main content -->
    <section class="content">

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
          @foreach($account as $in)
          <form action="/account/deletechecked/{{ $in->id }}">
          @endforeach
            <div>
              <input type="submit" id="actions" value="Hapus" hidden>
            </div>
            <table id="example" class="table table-bordered table-hover table-responsive">
              <thead>
                <tr>
                  <td>#</td>
                  <td>Nama pengguna</td>
                  <td>Username</td>
                  <td>Verifikasi sebagai</td>
                  <td>Email</td>
                  <td>Aksi</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  @foreach($account as $x)
                  <td>
                      <input type="checkbox" name="checked[]" id="option-1">
                  </td>
                  <td>{{ $x->name }}</td>
                  <td>{{ $x->username }}</td>
                  <td>
                    <!-- back-end -->
                        @if($x->role == '1')
                        <small class="text-green">Terverifikasi sebagai siswa</small>
                        @elseif($x->role == '2')
                        <small class="text-orange">Terverifikasi sebagai Admin</small>
                        @elseif($x->role == '3')
                        <small class="text-blue">Terverifikasi sebagai Guru</small>
                        @elseif($x->role == '4')
                        <small class="text-red">Account di banned!</small>
                        @else
                        <small class="text-red">Belum terverifikasi!</small>
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

@include('account.edit')
@include('account.detail')

@endsection

