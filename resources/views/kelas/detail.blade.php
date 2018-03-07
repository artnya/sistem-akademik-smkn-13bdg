<!-- Modal SHOW -->
@foreach ($kelas as $in)    
    <div class="modal fade" id="detail{{$in->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Kelas Detail</h4>
          </div>
          <div class="modal-body">
          <table class="table table-striped">
                <thead>
                    <tr>
                      <th><b>Tingkat Kelas</b></th>
                      <td>{{ $in->tingkat_kelas }}</td>
                    </tr>
                    <tr>
                      <th><b>Urutan Kelas Ke :</b></th>
                      <td>{{ $in->jumlah_kelas }}</td>
                    </tr>
                    <tr>
                      <th><b>Wali Kelas</b></th>
                      <td>{{ $in->user['name'] }}</td>
                    </tr>
                    <tr>
                      <th><b>Jurusan</b></th>
                      <td>{{ $in->jurusan['nama_jurusan'] }}</td>
                    </tr>
                </thead>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-xs btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
@endforeach

<!-- end modal SHOW -->
