<!-- Modal SHOW -->
@foreach ($account as $in)    
    <div class="modal fade" id="detail{{$in->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Account Detail {{ $in->name }}</h4>
          </div>
          <div class="modal-body">
          	<div>
          		<img @if($in->photo == '' || $in->photo == 'Not Setting') src="https://s17.postimg.org/bfpk18wcv/default.jpg" @else src="{{ url('uploadgambar') }}/{{ $in->photo }}" @endif class="img-thumbnail img-responsive" width="100" height="100">
          	</div>
          <table class="table table-striped">
                <thead>
                    <tr>
                      <th><b>Nama Pengguna :</b></th>
                      <td>{{ $in->name }}</td>
                    </tr>
                    <tr>
                      <th><b>Username :</b></th>
                      <td>{{ $in->username }}</td>
                    </tr>
                    <tr>
                      <th><b>Terverifikasi sebagai :</b></th>
                      <td>
                      	 <!-- back-end -->
                        @if($in->role == '1')
                        <small class="text-green">Terverifikasi sebagai siswa</small>
                        @elseif($in->role == '2')
                        <small class="text-orange">Terverifikasi sebagai Admin</small>
                        @elseif($in->role == '3')
                        <small class="text-blue">Terverifikasi sebagai Guru</small>
                        @else
                        <small class="text-red">Account di banned!</small>
                        @endif
                    <!-- end oef back end -->
                      </td>
                    </tr>
                    <tr>
                      <th><b>Email Pengguna :</b></th>
                      <td>{{ $in->email }}</td>
                    </tr>
                </thead>
            </table>
          </div>
          <div class="modal-footer">
               <a class="btn btn-xs btn-warning" href="#" data-dismiss="modal" data-toggle="modal" data-target="#edit{{$in->id}}">Edit</a>
            <button type="button" class="btn btn-xs btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
@endforeach

<!-- end modal SHOW -->
