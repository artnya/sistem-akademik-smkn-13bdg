<!-- Modal SHOW -->
@foreach ($siswa as $in)    
    <div class="modal fade" id="detail{{$in->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Detail {{ $in->name }}</h4>
          </div>
          <div class="modal-body"><a href="{{ url('uploadgambar') }}/{{ $in->photo }}">
            <img id="showgambar" @if($in->photo == 'Not Setting') src="https://s17.postimg.org/bfpk18wcv/default.jpg" @else src="{{ url('uploadgambar') }}/{{ $in->photo }}" @endif class="user-image img-responsive img-thumbnail" style="float:left;"></a>
          <table class="table table-striped">
                <thead>
                    <tr>
                      <th><b>NIS</b></th>
                      <td>{{ $in->username }}</td>
                    </tr>
                    <tr>
                      <th><b>Nama Siswa</b></th>
                      <td>{{ $in->name }}</td>
                    </tr>
                    <tr>
                      <th><b>Email</b></th>
                      <td>{{ $in->email }}</td>
                    </tr>
                    <tr>
                      <th><b>Jurusan</th>
                      <td>{{ $in->jurusan['nama_jurusan'] }}</td>
                    </tr>
                    <tr>
                      <th><b>Kelas</b></th>
                      <td>{{ $in->kelas['tingkat_kelas'] }} - {{ $in->jurusan['nama_jurusan'] }} - {{ $in->kelas['jumlah_kelas'] }}</td>
                    </tr>
                    <tr>
                      <th><b>Tempat Lahir</b></th>
                      <td>{{ $in->tmp_lahir }}</td>
                    </tr>
                    <tr>
                      <th><b>Tanggal Lahir</b></th>
                      <td>{{ $in->tgl_lahir }}</td>
                    </tr>
                    <tr>
                      <th><b>Agama</b></th>
                      <td>{{ $in->agama }}</td>
                    </tr>
                    <tr>
                      <th><b>Goldar</b></th>
                      <td>{{ $in->goldar }}</td>
                    </tr>
                    <tr>
                      <th><b>Alamat</b></th>
                      <td>{{ $in->alamat }}</td>
                    </tr>
                    <tr>
                      <th><b>Nama Orang Tua</b></th>
                      <td>{{ $in->nama_ortu }}</td>
                    </tr>
                </thead>
            </table>
          </div>
          <div class="modal-footer">
               <a class="btn btn-xs btn-warning" href="#" data-dismiss="modal" data-toggle="modal" data-target="#confirm-edit{{$in->id}}">Edit</a>
                                   <!-- Button trigger modal -->
                <a class="btn btn-xs btn-danger" href="#" data-href="siswa/deletemanual/{{ $in->id }}" data-toggle="modal" data-target="#confirm-delete" data-confirm="Are you sure you want to delete?">Delete</a>
            <button type="button" class="btn btn-xs btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
@endforeach

<!-- end modal SHOW -->
