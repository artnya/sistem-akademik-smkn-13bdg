<!DOCTYPE html>
<html>
    <head>
        <title>PDF PREVIEW</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <style media="screen">
        .page{
            width: 55%;
            margin: 0px auto;
        }
        </style>
    </head>
    <body onload='window.print();'>
        <div class="page" style="margin: 0px auto;">
           <div class="imgschool" style="padding:10px; float:left">
                <img src="{{asset('images/image001.png')}}" style="height:80px">
            </div>
            <div class="centertext" style="float:left; height:80px;">
                <p style="text-align:center">
                    PEMERINTAH KOTA BANDUNG <br>
                    DINAS PENDIDIKAN SEKOLAH MENENGAH KEJURUAN NEGERI 13 <br>
                    Jl. Soekarno – Hatta Km.10 Telp. /Fax. +62-22-7318960 Bandung 40286 <br>
                    E-mail : smkn13@bdg.centrin.net.id Home Page: http\\www.smk-13bdg.com <br>
                    <hr>
                </p>
            </div>
            <div class="imgcert" style="padding:10px; float:left">
                <img src="{{asset('images/image002.png')}}" style="height:80px">
            </div>
            <div class="judulsurat" style="text-align:center">
                <h4>Hasil Nilai {{ $un->name }}</h4>
            </div>
            <div class="datasurat" style="padding-left:15%; padding-right:15%">
               <table id="example">
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
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                        @if(!$semester->count() < 1)
                        @foreach($semester as $in)
                          <td>{{ $in->mapel->nama_mapel }}</td>
                          <td>{{ $in->tugas1 }}</td>
                          <td>{{ $in->tugas2 }}</td>
                          <td>{{ $in->tugas3 }}</td>
                          <td>{{ $in->nilai_sikap }}</td>
                          <td>{{ $in->nilai_pengetahuan }}</td>
                          <td>{{ $in->uts }}</td>
                          <td>{{ $in->uas }}</td>
                        </tr>
                        @endforeach
                        @else
                        <td class="text-center" colspan="12">Belum ada nilai yang di input.</td>
                        @endif
                      </tbody>
                      <tfoot>
                      </tfoot>
                    </table>         
                <img src="{{asset('images/image003.png')}}" style="height:80px; float:right"> <br><br><br><br><br>
                <span style="float:right">Wali Kelas SMKN13</span> <br>
            </div>
        </div>
    </body>
</html>
