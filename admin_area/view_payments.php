<div id="products">

           <form action="" method="post" enctype="multipart/form-data">
<table  style="background-color:rgb(5, 197, 228);" align="center" width="900"  border="2" >

<tr align="center">
  <th>S.N</th>
  
  <th>NAME</th>
  <th>RUN ID</th>
  <th>CUSTOMER ID</th>
  <th>SEATS</th>
  <th>DATE</th>

  <th>TIME</th>
  <th>SHOW DATE</th>
  <th>SHOW TIME</th>
  <th>MOVIE NAME</th>
  <th>THEATRE NAME</th>
  <th>COST</th>
</tr>

<?php



$con=mysqli_connect("localhost","root","","webp");
 

$i=1;

  
  $movie="select * from bill order by id";
  $run_movie=mysqli_query($con,$movie);
  while($row_movie=mysqli_fetch_array($run_movie))
  {
    

    $id=$row_movie['id'];
    $name=$row_movie['name'];
    $run_id=$row_movie['run_id'];
    $cus_id=$row_movie['cus_id'];
    $seats=$row_movie['seats'];
    
    $date=$row_movie['date'];
    $time=$row_movie['time'];
    $s_date=$row_movie['s_date'];
    $s_time=$row_movie['s_time'];
    $m_name=$row_movie['m_name'];
    $t_name=$row_movie['t_name'];
    $cost=$row_movie['cost'];



     echo "<tr align='center'>
  <td>$i.</td>
  
  
  <td> $name</td>
  <td >$run_id</td>
  <td >$cus_id</td>
  <td >$seats</td>
  <td >$date</td>
  <td >$time</td>
  <td >$s_date</td>
  <td >$s_time</td>
  <td >$m_name</td>
  <td >$t_name</td>
  <td >$cost</td>

</tr>";

$i=$i+1;

  }


  

?>
</table>
</form>
</div>