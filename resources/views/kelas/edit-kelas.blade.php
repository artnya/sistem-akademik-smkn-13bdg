
<!-- modal edit Kelas -->
@foreach($kelas as $in)
    <div class="modal fade" id="edit{{ $in->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    Edit data Kelas
                </div>
                <div class="modal-body">
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/kelas/update/{{ $in->id }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('nis') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Tingkat Kelas</label>

                            <div class="col-md-6">
                                <input id="tingkat_kelas" type="text" class="form-control" name="tingkat_kelas" value="{{ $in->tingkat_kelas }}" required>

                                @if ($errors->has('tingkat_kelas'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tingkat_kelas') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('jumlah_kelas') ? ' has-error' : '' }}">
                            <label for="jumlah_kelas" class="col-md-4 control-label">Urutan Kelas Ke</label>

                            <div class="col-md-6">
                                <input type="text" name="jumlah_kelas" value="{{ $in->jumlah_kelas }}" class="form-control" id="jumlah_kelas">
                                @if ($errors->has('jumlah_kelas'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jumlah_kelas') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('addres') ? ' has-error' : '' }}">
                            <label for="nip" class="col-md-4 control-label">Wali Kelas</label>

                            <div class="col-md-6">
                                <select id="nip" type="text" class="form-control" name="nip">
                                    @foreach($user as $x)
                                    <option value="{{ $x->id }}" @if(($in->nip) == ($x->id)) selected @endif>{{ $x->name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('nip'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nip') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('id_jurusan') ? ' has-error' : '' }}">
                            <label for="id_jurusan" class="col-md-4 control-label">Jurusan</label>

                            <div class="col-md-6">
                                <select class="form-control" name="id_jurusan" id="id_jurusan">
                                    @foreach($jurusan as $xx)
                                    <option value="{{ $xx->id }}" @if(($in->id_jurusan) == ($xx->id)) selected @endif>{{ $xx->nama_jurusan }}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('id_jurusan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('id_jurusan') }}</strong>
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
<!-- end modal edit Kelas -->    

@endforeach
