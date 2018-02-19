
<!-- modal Tambah mapel -->
@foreach($guru as $in)
    <div class="modal fade" id="mapel{{ $in->id }}" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    Masukan guru mata pelajaran <span>{{ $in->name }}</span>
                </div>
                <div class="modal-body">
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/guru/input-mata-pelajaran/store/{{ $in->id }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('id_mapel') ? ' has-error' : '' }}">
                            <label for="nama_mapel" class="col-md-4 control-label">Nama Mata Pelajaran</label>

                            <div class="col-md-6">
                                <select id="id_mapel" class="form-control select2" name="id_mapel" data-width="100%" required>
									@foreach($mapel as $in)
										<option value="{{ $in->id }}">{{ $in->nama_mapel }}</option>
									@endforeach
										<option disabled>-----Mapel Produktif-----</option>
                                    @foreach($mapelproduktif as $on)
                                        <option value="{{ $on->id }}">{{ $on->nama_mapel }}</option>
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
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Tambah
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
    @endforeach
<!-- end modal Tambah mapel -->    
