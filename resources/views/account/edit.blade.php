
<!-- modal edit account -->
@foreach($account as $in)
    <div class="modal fade" id="edit{{ $in->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    Edit data account
                </div>
                <div class="modal-body">
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/account/update/{{ $in->id }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nama asli Pengguna</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $in->name }}" required>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">Username </label>

                            <div class="col-md-6">
                                <input type="text" name="username" value="{{ $in->username }}" class="form-control" id="username">
                                @if ($errors->has('jumlah_account'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jumlah_account') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
                            <label for="nip" class="col-md-4 control-label">Verifikasi ke :</label>

                            <div class="col-md-6">
                                <select id="role" type="text" class="form-control" name="role">
                                    <option value="1">Siswa</option>
                                    <option value="2">Admin</option>
                                    <option value="3">Guru</option>
                                    <option value="4">Banned</option>
                                </select>

                                @if ($errors->has('role'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('role') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Email</label>

                            <div class="col-md-6">
                                <input type="text" name="email" id="email" class="form-control" value="{{ $in->email }}">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-check"></i><span> Verifikasi</span>
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
<!-- end modal edit account -->    

@endforeach
