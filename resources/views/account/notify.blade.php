<!-- Modal SHOW -->
@foreach (Auth::user()->unreadNotifications as $in)    
    <div class="modal fade" id="notify{{$in->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <a href="{{ route('notify-read-one', $in->id) }}"><span aria-hidden="true">&times;</span></a>
            <h4 class="modal-title" id="myModalLabel">Account Detail Who accessed the unauthorized page</h4>
          </div>
          <div class="modal-body">
          <table class="table table-striped">
                <thead>
                    <tr>
                      <th><b>Nama Pengguna :</b></th>
                      <td>{{ $in->data['id'] }}</td>
                    </tr>
                    <tr>
                      <th><b>Kejadian Pada Saat :</b></th>
                      <td>{{ $in->created_at }}</td>
                    </tr>
                </thead>
            </table>
          </div>
          <div class="modal-footer">
            <a href="{{ route('notify-read-one', $in->id) }}" class="btn btn-xs btn-default">Ok</a>
          </div>
        </div>
      </div>
    </div>
@endforeach

<!-- end modal SHOW -->
