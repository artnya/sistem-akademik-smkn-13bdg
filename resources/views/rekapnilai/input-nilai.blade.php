@extends('master')

@section('content')
<!-- end messages session pop-up -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{  $siswa->username}} {{  $siswa->name}} - {{  $siswa->kelas['tingkat_kelas']}} {{  $siswa->jurusan['nama_jurusan']}} {{  $siswa->kelas['jumlah_kelas']}}
      </h1> 
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Data Rekap Nilai Siswa</a></li>
        <li><a href="#">Cari Data Siswa</a></li>
        <li class="active">Input Nilai {{ $siswa->name }}</li>
      </ol>
    </section>
<!-- notification session -->
@if(session('message'))      
      <!-- sweet alert -->
    <link rel="stylesheet" href="/css/sweetalert.css">
    <!-- sweet alert -->
    <script src="/js/sweetalert.js"></script>
    <script>
        swal("{!! session('message') !!}", "Pastikan nilai lengkap dan sesuai yang di inputkan!", "success");
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
        <div class="alert alert-info alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-info"></i> Penting!</h4>
                @if(session('messageerror'))
                 <!-- sweet alert -->
                <link rel="stylesheet" href="/css/sweetalert.css">
                <!-- sweet alert -->
                <script src="/js/sweetalert.js"></script>
                <script>
                            swal("{!! session('messageerror') !!}", "", "error");
                </script>
                @endif
                @if(session('message'))
                    {{ session('message') }}
                @endif
                Dalam penginputan nilai siswa harus teliti dalam mengisi form nilai dan sesuaikan dengan semester dan tahun ajaran yang akan di masukan.
        </div>

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
                            <input type="hidden" name="id_siswa" value="{{ $siswa->id }}">
                            <input type="hidden" name="id_kelas" value="{{ $siswa->id_kelas }}">
                            <input type="hidden" name="id_jurusan" value="{{ $siswa->id_jurusan }}">
                        <div class="form-group{{ $errors->has('id_tahun') ? ' has-error' : '' }}">
                            <label for="id_tahun" class="col-md-4 control-label">Tahun Ajaran</label>
                            <div class="col-md-6">
                                <select id="id_tahun" class="form-control select2" name="id_tahun" value="{{ old('id_tahun') }}" required autofocus>
                                    <option disabled selected>Pilih Tahun Ajaran</option>
                                    @foreach($tahun as $now)
                                        <option value="{{ $now->tahun }}">{{ $now->tahun }}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('id_tahun'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('id_tahun') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('semester') ? ' has-error' : '' }}">
                            <label for="semester" class="col-md-4 control-label">Semester</label>
                            <div class="col-md-6">
                                <select id="semester" type="text" class="form-control select2" name="semester" value="{{ old('semester') }}" required autofocus>
                                    <option disabled selected>Pilih Semester</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>

                                @if ($errors->has('semester'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('semester') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('id_mapel') ? ' has-error' : '' }}">
                            <label for="id_mapel" class="col-md-4 control-label">Mata Pelajaran</label>

                            <div class="col-md-6">
                                <select id="id_mapel" type="text" class="form-control select2" name="id_mapel" value="{{ old('id_mapel') }}" required autofocus>
                                @foreach($mapel as $in)
                                @if(Auth()->user()->id_mapel == $in->id)
                                    <option value="{{ $in->id }}" selected>{{ $in->nama_mapel }}</option>
                                @else
                                <option value="{{ $in->id }}" disabled>{{ $in->nama_mapel }}</option>
                                @endif
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
                                <a class="btn btn-info" href="/rekapnilai/show/{{ $siswa->id }}">Lihat Nilai</a>
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
