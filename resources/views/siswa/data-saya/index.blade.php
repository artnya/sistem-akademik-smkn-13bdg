@extends('master')

@section('content')
<!-- end messages session pop-up -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Saya
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Data Saya</a></li>
        <li class="active">Lihat Nilai Saya</li>
      </ol>
    </section>

<!-- notification session -->
@if(session('message'))      
  <!-- sweet alert -->
<link rel="stylesheet" href="/css/sweetalert.css">
<!-- sweet alert -->
<script src="/js/sweetalert.js"></script>
<script>
    swal("{!! session('message') !!}", "", "success");
</script>
@endif
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box box-solid box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Nilai Saya Semester I</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <form action="#">
            <div>
              @if(Auth()->user()->role == '2')
            <a href="#" style="margin: 10px 10px;" data-toggle="modal" class="btn btn-success ajax" data-target="#add"><i class="fa fa-plus"></i> Tambah Nilai</a>
            @endif
            </div>
            <div>
              <input type="submit" id="actions" value="Hapus" hidden>
            </div>
              <div class="row">
                <div class="col-md-12">
                <table id="rekap" class="table table-bordered table-hover table-responsive">
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
                      <td>Perbaiki Nilai</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    @if(!$semester1->count() < 1)
                    @foreach($semester1 as $in)
                      <td>{{ $in->mapel['nama_mapel'] }}</td>
                      <td>{{ $in->tugas1 }}</td>
                      <td>{{ $in->tugas2 }}</td>
                      <td>{{ $in->tugas3 }}</td>
                      <td>{{ $in->nilai_sikap }}</td>
                      <td>{{ $in->nilai_pengetahuan }}</td>
                      <td>{{ $in->uts }}</td>
                      <td>{{ $in->uas }}</td>
                      <td>{{ $in->mapel['kkm'] }}</td>
                      <td><button type="button" id="elementId" class="btn btn-xs btn-warning">Perbaiki Nilai</button></td>
                    </tr>
                    @endforeach
                    @else
                    <td class="text-center" colspan="12">Nilai pada semester ini belum di input.</td>
                    @endif
                  </tbody>
                </table>                  
                </div>
              </div>
          </form>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        </div>
        <!-- /.box-footer-->
      </div>

      <!-- SEMESTER II -->
      <div class="box box-solid box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Nilai Saya Semester II</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <form action="#">
            <div>
              @if(Auth()->user()->role == '2')
            <a href="#" style="margin: 10px 10px;" data-toggle="modal" class="btn btn-success ajax" data-target="#add"><i class="fa fa-plus"></i> Tambah Nilai</a>
            @endif
            </div>
            <div>
              <input type="submit" id="actions" value="Hapus" hidden>
            </div>
              <div class="row">
                <div class="col-md-12">
                <table id="rekap" class="table table-bordered table-hover table-responsive">
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
                      <td>Perbaiki Nilai</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    @if(!$semester2->count() < 1)
                    @foreach($semester2 as $in)
                      <td>{{ $in->mapel['nama_mapel'] }}</td>
                      <td>{{ $in->tugas1 }}</td>
                      <td>{{ $in->tugas2 }}</td>
                      <td>{{ $in->tugas3 }}</td>
                      <td>{{ $in->nilai_sikap }}</td>
                      <td>{{ $in->nilai_pengetahuan }}</td>
                      <td>{{ $in->uts }}</td>
                      <td>{{ $in->uas }}</td>
                      <td>{{ $in->mapel['kkm'] }}</td>
                      <td><button type="button" id="elementId" class="btn btn-xs btn-warning">Perbaiki Nilai</button></td>
                    </tr>
                    @endforeach
                    @else
                    <td class="text-center" colspan="12">Nilai pada semester ini belum di input.</td>
                    @endif
                  </tbody>
                </table>                  
                </div>
              </div>
          </form>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        </div>
        <!-- /.box-footer-->
      </div>

      <!-- SEMESTER III -->
      <div class="box box-solid box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Nilai Saya Semester III</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <form action="#">
            <div>
              @if(Auth()->user()->role == '2')
            <a href="#" style="margin: 10px 10px;" data-toggle="modal" class="btn btn-success ajax" data-target="#add"><i class="fa fa-plus"></i> Tambah Nilai</a>
            @endif
            </div>
            <div>
              <input type="submit" id="actions" value="Hapus" hidden>
            </div>
              <div class="row">
                <div class="col-md-12">
                <table id="rekap" class="table table-bordered table-hover table-responsive">
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
                      <td>Perbaiki Nilai</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    @if(!$semester3->count() < 1)
                    @foreach($semester3 as $on)
                      <td>{{ $on->mapel['nama_mapel'] }}</td>
                      <td>{{ $on->tugas1 }}</td>
                      <td>{{ $on->tugas2 }}</td>
                      <td>{{ $on->tugas3 }}</td>
                      <td>{{ $on->nilai_sikap }}</td>
                      <td>{{ $on->nilai_pengetahuan }}</td>
                      <td>{{ $on->uts }}</td>
                      <td>{{ $on->uas }}</td>
                      <td>{{ $on->mapel['kkm'] }}</td>
                      <td><button type="button" id="elementId" class="btn btn-xs btn-warning">Perbaiki Nilai</button></td>
                    </tr>
                    @endforeach
                    @else
                    <td class="text-center" colspan="12">Nilai pada semester ini belum di input.</td>
                    @endif
                  </tbody>
                </table>                  
                </div>
              </div>
          </form>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        </div>
        <!-- /.box-footer-->
      </div>

    <!-- SEMESTER III -->
      <div class="box box-solid box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Nilai Saya Semester III</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <form action="#">
            <div>
              @if(Auth()->user()->role == '2')
            <a href="#" style="margin: 10px 10px;" data-toggle="modal" class="btn btn-success ajax" data-target="#add"><i class="fa fa-plus"></i> Tambah Nilai</a>
            @endif
            </div>
            <div>
              <input type="submit" id="actions" value="Hapus" hidden>
            </div>
              <div class="row">
                <div class="col-md-12">
                <table id="rekap" class="table table-bordered table-hover table-responsive">
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
                      <td>Perbaiki Nilai</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    @if(!$semester3->count() < 1)
                    @foreach($semester3 as $on)
                      <td>{{ $on->mapel['nama_mapel'] }}</td>
                      <td>{{ $on->tugas1 }}</td>
                      <td>{{ $on->tugas2 }}</td>
                      <td>{{ $on->tugas3 }}</td>
                      <td>{{ $on->nilai_sikap }}</td>
                      <td>{{ $on->nilai_pengetahuan }}</td>
                      <td>{{ $on->uts }}</td>
                      <td>{{ $on->uas }}</td>
                      <td>{{ $on->mapel['kkm'] }}</td>
                      <td><button type="button" id="elementId" class="btn btn-xs btn-warning">Perbaiki Nilai</button></td>
                    </tr>
                    @endforeach
                    @else
                    <td class="text-center" colspan="12">Nilai pada semester ini belum di input.</td>
                    @endif
                  </tbody>
                </table>                  
                </div>
              </div>
          </form>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        </div>
        <!-- /.box-footer-->
      </div>

    <!-- SEMESTER IV -->
      <div class="box box-solid box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Nilai Saya Semester IV</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <form action="#">
            <div>
              @if(Auth()->user()->role == '2')
            <a href="#" style="margin: 10px 10px;" data-toggle="modal" class="btn btn-success ajax" data-target="#add"><i class="fa fa-plus"></i> Tambah Nilai</a>
            @endif
            </div>
            <div>
              <input type="submit" id="actions" value="Hapus" hidden>
            </div>
              <div class="row">
                <div class="col-md-12">
                <table id="rekap" class="table table-bordered table-hover table-responsive">
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
                      <td>Perbaiki Nilai</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    @if(!$semester4->count() < 1)
                    @foreach($semester4 as $on)
                      <td>{{ $on->mapel['nama_mapel'] }}</td>
                      <td>{{ $on->tugas1 }}</td>
                      <td>{{ $on->tugas2 }}</td>
                      <td>{{ $on->tugas3 }}</td>
                      <td>{{ $on->nilai_sikap }}</td>
                      <td>{{ $on->nilai_pengetahuan }}</td>
                      <td>{{ $on->uts }}</td>
                      <td>{{ $on->uas }}</td>
                      <td>{{ $on->mapel['kkm'] }}</td>
                      <td><button type="button" id="elementId" class="btn btn-xs btn-warning">Perbaiki Nilai</button></td>
                    </tr>
                    @endforeach
                    @else
                    <td class="text-center" colspan="12">Nilai pada semester ini belum di input.</td>
                    @endif
                  </tbody>
                </table>                  
                </div>
              </div>
          </form>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        </div>
        <!-- /.box-footer-->
      </div>

    <!-- SEMESTER V -->
      <div class="box box-solid box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Nilai Saya Semester V</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <form action="#">
            <div>
              @if(Auth()->user()->role == '2')
            <a href="#" style="margin: 10px 10px;" data-toggle="modal" class="btn btn-success ajax" data-target="#add"><i class="fa fa-plus"></i> Tambah Nilai</a>
            @endif
            </div>
            <div>
              <input type="submit" id="actions" value="Hapus" hidden>
            </div>
              <div class="row">
                <div class="col-md-12">
                <table id="rekap" class="table table-bordered table-hover table-responsive">
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
                      <td>Perbaiki Nilai</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    @if(!$semester5->count() < 1)
                    @foreach($semester5 as $on)
                      <td>{{ $on->mapel['nama_mapel'] }}</td>
                      <td>{{ $on->tugas1 }}</td>
                      <td>{{ $on->tugas2 }}</td>
                      <td>{{ $on->tugas3 }}</td>
                      <td>{{ $on->nilai_sikap }}</td>
                      <td>{{ $on->nilai_pengetahuan }}</td>
                      <td>{{ $on->uts }}</td>
                      <td>{{ $on->uas }}</td>
                      <td>{{ $on->mapel['kkm'] }}</td>
                      <td><button type="button" id="elementId" class="btn btn-xs btn-warning">Perbaiki Nilai</button></td>
                    </tr>
                    @endforeach
                    @else
                    <td class="text-center" colspan="12">Nilai pada semester ini belum di input.</td>
                    @endif
                  </tbody>
                </table>                  
                </div>
              </div>
          </form>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        </div>
        <!-- /.box-footer-->
      </div>

    <!-- SEMESTER VI -->
      <div class="box box-solid box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Nilai Saya Semester VI</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <form action="#">
            <div>
              @if(Auth()->user()->role == '2')
            <a href="#" style="margin: 10px 10px;" data-toggle="modal" class="btn btn-success ajax" data-target="#add"><i class="fa fa-plus"></i> Tambah Nilai</a>
            @endif
            </div>
            <div>
              <input type="submit" id="actions" value="Hapus" hidden>
            </div>
              <div class="row">
                <div class="col-md-12">
                <table id="rekap" class="table table-bordered table-hover table-responsive">
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
                      <td>Perbaiki Nilai</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    @if(!$semester6->count() < 1)
                    @foreach($semester6 as $on)
                      <td>{{ $on->mapel['nama_mapel'] }}</td>
                      <td>{{ $on->tugas1 }}</td>
                      <td>{{ $on->tugas2 }}</td>
                      <td>{{ $on->tugas3 }}</td>
                      <td>{{ $on->nilai_sikap }}</td>
                      <td>{{ $on->nilai_pengetahuan }}</td>
                      <td>{{ $on->uts }}</td>
                      <td>{{ $on->uas }}</td>
                      <td>{{ $on->mapel['kkm'] }}</td>
                      <td><button type="button" id="elementId" class="btn btn-xs btn-warning">Perbaiki Nilai</button></td>
                    </tr>
                    @endforeach
                    @else
                    <td class="text-center" colspan="12">Nilai pada semester ini belum di input.</td>
                    @endif
                  </tbody>
                </table>                  
                </div>
              </div>
          </form>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        </div>
        <!-- /.box-footer-->
      </div>

    </section>
    <!-- /.content -->
  </div>

@endsection
