@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Verifikasi telah di kirim.</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="#">
                        {{ csrf_field() }}

                      <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h4><i class="icon fa fa-info"></i> Berhasil!</h4>
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
                        <!-- sweet alert -->
                        <link rel="stylesheet" href="/css/sweetalert.css">
                        <!-- sweet alert -->
                        <script src="/js/sweetalert.js"></script>
                        <script>
                            swal("{!! session('message') !!}", "", "success");
                        </script>
                        @endif
                      </div>
                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="nis" class="col-md-4 control-label">Username (NIS/NIP Anda)</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" value="{{ Auth()->user()->username }}" disabled required>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ Auth()->user()->email }}" disabled required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('id_kelas') ? ' has-error' : '' }}">
                            <label for="id_kelas" class="col-md-4 control-label">Kelas</label>

                            <div class="col-md-6">
                                <select id="id_kelas" class="form-control select2" name="id_kelas" value="{{ old('id_kelas') }}" disabled required>
                                    <option selected disabled>---PILIH KELAS---</option>
                                    @foreach($kelas as $in)
                                    <option value="{{ $in->id }}" @if((Auth()->user()->id_kelas) == ($in->id)) selected @endif>{{ $in->tingkat_kelas }} - {{ $in->jurusan['nama_jurusan'] }} - {{ $in->jumlah_kelas }}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('id_kelas'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('id_kelas') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <input type="hidden" value="5" name="role">
                        <div class="form-group">
                            <div class="col-md-12 col-md-offset-6">
                                <a class="btn btn-primary" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-logout"></i>
                                             Logout
                                </a>
                                <button type="button" onclick="location.reload(true);" class="btn btn-info">Refresh</button>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
