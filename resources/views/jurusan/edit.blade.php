
<!-- modal edit Jurusan -->
@foreach($jurusan as $in)
    <div class="modal fade" id="edit{{ $in->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    Edit data Jurusan
                </div>
                <div class="modal-body">
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/jurusan/update/{{ $in->id }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('nis') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nama Jurusan</label>

                            <div class="col-md-6">
                                <input id="nama_jurusan" type="text" class="form-control" name="nama_jurusan" value="{{ $in->nama_jurusan }}" required>

                                @if ($errors->has('nama_jurusan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama_jurusan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('type_jurusan') ? ' has-error' : '' }}">
                            <label for="type_jurusan" class="col-md-4 control-label">Urutan Jurusan Ke</label>

                            <div class="col-md-6">
                                <input type="text" name="type_jurusan" value="{{ $in->type_jurusan }}" class="form-control" id="type_jurusan">
                                @if ($errors->has('type_jurusan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('type_jurusan') }}</strong>
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
<!-- end modal edit Jurusan -->    

@endforeach
