
<!-- modal edit mapel -->
@foreach($mapel as $in)
    <div class="modal fade" id="edit{{ $in->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    Edit data Mata Pelajaran
                </div>
                <div class="modal-body">
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/mapel/update/{{ $in->id }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('nama_mapel') ? ' has-error' : '' }}">
                            <label for="nama_mapel" class="col-md-4 control-label">Nama Mata Pelajaran</label>

                            <div class="col-md-6">
                                <input id="nama_mapel" type="text" class="form-control" name="nama_mapel" value="{{ $in->nama_mapel }}" required>

                                @if ($errors->has('nama_mapel'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama_mapel') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <input type="hidden" value="Non produktif" name="type_mapel">
                        <div class="form-group{{ $errors->has('kkm') ? ' has-error' : '' }}">
                            <label for="kkm" class="col-md-4 control-label">KKM</label>

                            <div class="col-md-6">
                                <input type="number" class="form-control" name="kkm" value="{{ $in->kkm }}" required>
                                @if ($errors->has('kkm'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kkm') }}</strong>
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
<!-- end modal edit mapel -->    

@endforeach
