@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Cetak Nilai {{ $un->username }} {{ $un->name }} </div>

                <div class="panel-body">
                    <table id="example" class="table table-striped table-hover table-responsive">
              <thead>
                <tr>
                    <th>Mata Pelajaran</th>
                    <th>Tugas 1</th>
                    <th>Tugas 2</th>
                    <th>Tugas 3</th>
                    <th>Sikap</th>
                    <th>Pengetahuan</th>
                    <th>UTS</th>
                    <th>UAS</th>
                    <th>KKM</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                @if(!$semester->count() < 1)
                @foreach($semester as $in)
                  <td>{{ $in->mapel['nama_mapel'] }}</td>
                  <td>{{ $in->tugas1 }}</td>
                  <td>{{ $in->tugas2 }}</td>
                  <td>{{ $in->tugas3 }}</td>
                  <td>{{ $in->nilai_sikap }}</td>
                  <td>{{ $in->nilai_pengetahuan }}</td>
                  <td>{{ $in->uts }}</td>
                  <td>{{ $in->uas }}</td>
                  <td>{{ $in->mapel['kkm'] }}</td>
                </tr>
                @endforeach
                @else
                <td class="text-center" colspan="12">Belum ada nilai yang di input.</td>
                @endif
              </tbody>
              <tfoot>
              </tfoot>
            </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
