@extends('master')

@section('content')
<!-- end messages session pop-up -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Penginputan Nilai</h1> 
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Rekap Nilai</a></li>
        <li class="active"><a href="#">Import Nilai</a></li>
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
        	<form class="form-horizontal" method="POST" action="/imported-file/progress" enctype="multipart/form-data">
                        {{ csrf_field() }}
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

                        <div class="form-group{{ $errors->has('id_mapel') ? ' has-error' : '' }}">
                            <label for="id_mapel" class="col-md-4 control-label">Mata Pelajaran</label>
                            <div class="col-md-6">
                                <select id="id_mapel" type="text" class="form-control select2" name="id_mapel" value="{{ old('id_mapel') }}" required autofocus>
                                    <option disabled selected>Pilih Mapel</option>
                                    @foreach($mapel as $x)
                                    <option value="{{ $x->nama_mapel }}" @if($x->id == Auth::user()->id_mapel) selected @elseif(Auth::user()->role) @else disabled @endif>{{ $x->nama_mapel }}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('id_mapel'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('id_mapel') }}</strong>
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

                        <div class="form-group{{ $errors->has('kkm') ? ' has-error' : '' }}">
                            <label for="kkm" class="col-md-4 control-label">KKM</label>
                            <div class="col-md-6">
                                <input type="number" class="form-control" name="kkm" placeholder="Masukan KKM..." required>
                                @if ($errors->has('kkm'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kkm') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('id_kelas') ? ' has-error' : '' }}">
                            <label for="id_kelas" class="col-md-4 control-label">Kelas</label>
                            <div class="col-md-6">
                                <select id="id_kelas" type="text" class="form-control select2" name="id_kelas" value="{{ old('id_kelas') }}" required autofocus>
                                    <option disabled selected>Pilih Kelas</option>
                                    @foreach($kelas as $x)
                                    <option value="{{ $x->id }}">{{ $x->tingkat_kelas }} {{ $x->jurusan['nama_jurusan'] }} {{ $x->jumlah_kelas }}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('id_kelas'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('id_kelas') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('id_jurusan') ? ' has-error' : '' }}">
                            <label for="id_jurusan" class="col-md-4 control-label">Jurusan</label>
                            <div class="col-md-6">
                                <select id="id_jurusan" type="text" class="form-control select2" name="id_jurusan" value="{{ old('id_jurusan') }}" required autofocus>
                                    <option disabled selected>Pilih Jurusan Siswa</option>
                                    @foreach($jurusan as $x)
                                    <option value="{{ $x->id }}">{{ $x->nama_jurusan }}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('id_jurusan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('id_jurusan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('import_nilai') ? ' has-error' : '' }}">
                            <label for="import_nilai" class="col-md-4 control-label">File</label>
                            <div class="col-md-6">
                                <input type="file" class="form-control" name="import_nilai" required title="File excel harus berisi nis, nama siswa dan nilai nilai">
                                <span class="help-block text-red">
                                    <strong>File harus berisi data nis, nama siswa, dan nilai nilai. <a href="/cara-penggunaan-excel">Pelajari lebih lanjut.</a></strong>
                                </span>
                                @if ($errors->has('import_nilai'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('import_nilai') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-upload"></i> Import Nilai
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
