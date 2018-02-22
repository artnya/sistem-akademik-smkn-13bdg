@extends('master')
@section('title','Ajax Live Search Table Demo -')

@section('content')
<!-- end messages session pop-up -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Rekap Nilai Siswa
      </h1> 
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Data Rekap Nilai Siswa</a></li>
        <li class="active">Lihat Data Rekap Nilai Siswa</li>
      </ol>
    </section>

<!-- notification session -->
@if (session('message'))      
  @include('layouts.session')
@endif
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Cari Kelas</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
			<!-- search box container starts  -->
			    <div class="search">
			        <h3 class="text-center title-color">Pencarian data siswa berdasarkan kelas</h3>
			        <p>&nbsp;</p>
			        <div class="row">
			            <div class="col-lg-10 col-lg-offset-0">
			                <div class="input-group">
			                	<form action="{{ url('query') }}" method="GET">
			                		{{ csrf_field() }}
			                		<input type="text" autocomplete="off" name="q" class="form-control input-lg select2" placeholder="Enter Blog Title Here">
				                    <button class="btn btn-info btn-lg" type="submit">Cari</button>
			                	</form>
								<div class="card-panel green white-text">Hasil pencarian : <b></b></div>
									<?php $no= 1; ?>
								    <div class="row">
										<div class="col-lg-12">
											<table class="table table-border table-striped table-hover table-responsive">
												<thead>
													<tr>
														<td>No</td>
														<td>Nama Siswa</td>
														<td>Kelas</td>
														<td>Aksi</td>
													</tr>
												</thead>
												<tbody>
								   					<tr>
								   						<?php $no = 1; ?>
								   					@foreach($siswa as $data)
								   						<td>{{ $no }}</td>
								   						<td>{{ $data->name }}</td>
								   						<td>{{ $data->kelas['tingkat_kelas'] }} - {{ $data->jurusan['nama_jurusan'] }} - {{ $data->kelas['tingkat_kelas'] }}</td>
								   						<td>a</td>
								   					</tr>	
								   					@endforeach
												</tbody>
											</table>
										</div>
									</div>

								</div>

			                </div>
			            </div>
			        </div>   
			    </div>  
			<!-- search box container ends  -->
			<div id="txtHint" class="title-color" style="padding-top:50px; text-align:center;" ><b>Blogs information will be listed here...</b></div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
     
@stop
