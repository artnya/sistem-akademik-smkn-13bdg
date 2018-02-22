@extends('master')

@section('content')
<!-- end messages session pop-up -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Input Nilai {{  $siswa->name}}
      </h1> 
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Data Rekap Nilai Siswa</a></li>
        <li><a href="#">Cari Data Siswa</a></li>
        <li class="active">Input Nilai {{ $siswa->name }}</li>
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
        	<form class="form-horizontal" method="POST" action="/inputnilai/add">
                        {{ csrf_field() }}
                        <input type="hidden" name="id_nis" value="{{ $siswa->name }}">
                        <input type="hidden" name="id_kelas" value="{{ $siswa->id_kelas }}">
                        <input type="hidden" name="id_jurusan" value="{{ $siswa->id_jurusan }}">
                        <div class="form-group{{ $errors->has('id_mapel') ? ' has-error' : '' }}">
                            <label for="id_mapel" class="col-md-4 control-label">Mata Pelajaran</label>

                            <div class="col-md-6">
                                <select id="id_mapel" type="text" class="form-control select2" name="id_mapel" value="{{ old('id_mapel') }}" required autofocus>
                                @foreach($mapel as $in)
                                	<option value="{{ $in->id }}">{{ $in->nama_mapel }}</option>
                                @endforeach
                                </select>

                                @if ($errors->has('id_mapel'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('id_mapel') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tugas1') ? ' has-error' : '' }}">
                            <label for="tugas1" class="col-md-4 control-label">Tugas 1</label>

                            <div class="col-md-6">
                                <input id="tugas1" type="number" class="form-control" name="tugas1" value="{{ old('tugas1') }}" required>

                                @if ($errors->has('tugas1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tugas1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tugas2') ? ' has-error' : '' }}">
                            <label for="tugas2" class="col-md-4 control-label">Tugas 2</label>

                            <div class="col-md-6">
                                <input id="tugas2" type="number" class="form-control" name="tugas2" value="{{ old('tugas2') }}" required>

                                @if ($errors->has('tugas2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tugas2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tugas3') ? ' has-error' : '' }}">
                            <label for="tugas3" class="col-md-4 control-label">Tugas 3</label>

                            <div class="col-md-6">
                                <input id="tugas3" type="number" class="form-control" name="tugas3" required>

                                @if ($errors->has('tugas3'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tugas3') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nilai_sikap" class="col-md-4 control-label">Nilai Sikap</label>

                            <div class="col-md-6">
                                <input id="nilai_sikap" type="number" class="form-control" name="nilai_sikap" required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nilai_pengetahuan') ? ' has-error' : '' }}">
                            <label for="nilai_pengetahuan" class="col-md-4 control-label">Nilai Pengetahuan</label>

                            <div class="col-md-6">
                                <input id="nilai_pengetahuan" class="form-control" name="nilai_pengetahuan" required>

                                @if ($errors->has('nilai_pengetahuan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nilai_pengetahuan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('uts') ? ' has-error' : '' }}">
                            <label for="uts" class="col-md-4 control-label">UTS</label>

                            <div class="col-md-6">
                                <input id="uts" class="form-control" name="uts" required>

                                @if ($errors->has('uts'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('uts') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('uas') ? ' has-error' : '' }}">
                            <label for="nilai_pengetahuan" class="col-md-4 control-label">UAS</label>

                            <div class="col-md-6">
                                <input id="uas" class="form-control" name="uas" required>

                                @if ($errors->has('uas'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('uas') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Tambah Nilai
                                </button>
                            </div>
                        </div>
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
