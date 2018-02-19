<!-- modal edit guru -->
@foreach($guru as $in)
    <div class="modal fade" id="edit-photo{{ $in->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    Edit Foto Profil Guru
                </div>
                <div class="modal-body">
                <div class="panel-body">
                	@if($in->photo == 'Not Setting' || $in->photo == NULL)
                	@else
                	<form action="/guru/resetpic/{{ $in->id }}" method="post">
                        {{ csrf_field() }}
                          <input type="hidden" name="reset" value="Not Setting">
	                         <button type="submit" class="btn btn-danger">
	                             Hapus Foto
	                         </button>
                    </form>
                    @endif
                    <form class="form-horizontal" method="POST" action="/guru/uploadpic/{{ $in->id }}" enctype="multipart/form-data">
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

                        <div class="form-group{{ $errors->has('photo') ? ' has-error' : '' }}">
                            <label for="photo" class="col-md-4 control-label">Upload Photo Profile</label>

                            <div class="col-md-6">

                            	<input id="photo" type="file" class="form-control" name="photo" value="{{ $in->photo }}">

                                @if ($errors->has('photo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('photo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success">
                                    Upload
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

