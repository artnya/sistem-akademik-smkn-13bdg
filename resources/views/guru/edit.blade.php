
<!-- modal edit guru -->
@foreach($guru as $in)
    <div class="modal fade" id="edit{{ $in->id }}" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    Edit data Guru
                </div>
                <div class="modal-body">
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/guru/update/{{ $in->id }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('photo') ? ' has-error' : '' }}">
                            <label for="photo" class="col-md-4 control-label">Foto</label>

                            <div class="col-md-6">
                                <img id="showgambar" @if($in->photo == 'Not Setting' || $in->photo == NULL) src="https://s17.postimg.org/bfpk18wcv/default.jpg" @else src="{{ url('uploadgambar') }}/{{ $in->photo }}" @endif class="img-thumbnail img-responsive" width="100" height="100">
                                @if ($errors->has('photo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('photo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">NIP</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" value="{{ $in->username }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nama Guru</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $in->name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('addres') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email" value="{{ $in->email }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('id_mapel') ? ' has-error' : '' }}">
                            <label for="id_mapel" class="col-md-4 control-label">Guru Mata Pelajaran</label>

                            <div class="col-md-6">
                                <select name="id_mapel" class="form-control select2" data-width="100%" id="id_mapel">
                                    @foreach($mapel as $x)
                                    <option value="{{ $x->id }}" @if(($in->id_mapel) == ($x->id)) selected @endif >{{ $x->nama_mapel }}</option>
                                    @endforeach
                                    @foreach($mapelproduktif as $z)
                                    <option value="{{ $z->id }}" @if(($in->id_mapel) == ($z->id)) selected @endif >{{ $z->nama_mapel }}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('id_mapel'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('id_mapel') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tmp_lahir" class="col-md-4 control-label">Tempat Lahir</label>

                            <div class="col-md-6">
                                <input id="tmp_lahir" type="text" class="form-control" name="tmp_lahir" value="{{ $in->tmp_lahir }}" required>

                                @if ($errors->has('tmp_lahir'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tmp_lahir') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tgl_lahir" class="col-md-4 control-label">Tanggal Lahir</label>

                            <div class="col-md-6">
                                <input id="tgl_lahir" type="date" class="form-control" name="tgl_lahir" value="{{ $in->tgl_lahir }}" required>

                                @if ($errors->has('tgl_lahir'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tgl_lahir') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="jenis_kelamin" class="col-md-4 control-label">Jenis Kelamin</label>

                            <div class="col-md-6">
                                <select id="jenis_kelamin" type="date" class="form-control" name="jenis_kelamin">
                                    <option value="{{ $in->jenis_kelamin }}" selected>{{ $in->jenis_kelamin }}</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>

                                @if ($errors->has('jenis_kelamin'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jenis_kelamin') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="agama" class="col-md-4 control-label">Agama</label>

                            <div class="col-md-6">
                                <input id="agama" type="text" class="form-control" name="agama" value="{{ $in->agama }}" required>

                                @if ($errors->has('agama'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('agama') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="goldar" class="col-md-4 control-label">Goldar</label>

                            <div class="col-md-6">
                                <select name="goldar" class="form-control" id="goldar">
                                    <option value="{{ $in->goldar }}" selected>{{ $in->goldar }}</option>
                                    <option value="O">O</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="AB">AB</option>
                                </select>
                                @if ($errors->has('goldar'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('goldar') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="alamat" class="col-md-4 control-label">Alamat</label>

                            <div class="col-md-6">
                                <input id="alamat" type="text" class="form-control" name="alamat" value="{{ $in->alamat}}" required>

                                @if ($errors->has('alamat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('alamat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Edit
                                </button>
                                <button type="reset" data-dismiss="modal" class="btn btn-warning">
                                    Batal
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
<!-- end modal edit guru -->    

@endforeach
