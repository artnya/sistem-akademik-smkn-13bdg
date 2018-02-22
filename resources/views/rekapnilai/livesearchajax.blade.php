<?php
if(!empty($posts ))  
{ 
    $count = 1;
    $outputhead = '';
    $outputbody = '';  
    $outputtail ='';

    $outputhead .= '<div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tingkat Kelas</th>
                                <th>Kelas Ke</th>
                                <th>Jurusan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                ';
                  
    foreach ($posts as $post)    
    {   
    $body = substr(strip_tags($post->jumlah_kelas),0,50)."...";
    $show = url('blog/'.$post->slug);
    $outputbody .=  ' 
                
                            <tr> 
		                        <td>'.$count++.'</td>
		                        <td>'.$post->tingkat_kelas.'</td>
		                        <td>'.$body.'</td>
                                <td>'.$post->id_jurusan.'</td>
                                <td><a href="'.$show.'" target="_blank" title="SHOW" ><span class="glyphicon glyphicon-list"></span></a></td>
                            </tr> 
                    ';
                
    }  

    $outputtail .= ' 
                        </tbody>
                    </table>
                </div>';
         
    echo $outputhead; 
    echo $outputbody; 
    echo $outputtail; 
 }  
 
 else  
 {  
    echo 'Data Not Found';  
 } 
 ?>  
