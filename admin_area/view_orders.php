<div id="products">

           <form action="" method="post" enctype="multipart/form-data">
<table  style="background-color:rgb(5, 197, 228);" align="center" width="700"  border="2" >

<tr align="center">
  <th>S.N</th>
  
  <th>MOVIE</th>
  <th>THEATRE</th>
  <th>SEAT NO</th>
   <th>SHOW TIME</th>
   <th>SHOW DATE</th>
   <th>CUSTOMER ID</th>
    <th>PAYMENT</th>
  
  
</tr>

<?php



$con=mysqli_connect("localhost","root","","webp");
 

$i=1;

  
  $cus="select * from booking order by id";
  $run_cus=mysqli_query($con,$cus);
  while($row_cus=mysqli_fetch_array($run_cus))
  {
    

    $id=$row_cus['id'];
    $run_id=$row_cus['run_id'];

    $cus_id=$row_cus['cus_id'];
    $seat_no=$row_cus['seat_no'];
    $status=$row_cus['status'];
    if($status==0)
    {
      $payment="NOT RECIEVED";
    }
    else
    {$payment="RECIEVED";

    }
    $run="select * from running where id='$run_id'";
  $run_run=mysqli_query($con,$run);
  while($row_theatre=mysqli_fetch_array($run_run))
  {

    
    $movie_id=$row_theatre['movie_id'];

$theatre_id=$row_theatre['theatre_id'];
$date=$row_theatre['date'];
$time=$row_theatre['time'];
$get_the="select * from theatre where id='$theatre_id'";
$run_the=mysqli_query($con,$get_the);
$t_name;
while($row_the=mysqli_fetch_array($run_the))
{

$t_name=$row_the['name'];
}


$get_mov="select * from movies where id='$movie_id'";
$run_mov=mysqli_query($con,$get_mov);
while($row_mov=mysqli_fetch_array($run_mov))
{

$m_name=$row_mov['name'];}

}



     echo "<tr align='center'>
  <td>$i.</td>
  
  
  <td> $m_name</td>
  <td> $t_name</td>
  <td> $seat_no</td>
  <td> $time</td>
  <td> $date</td>
  <td> $cus_id</td>
   <td> $payment</td>

  
  
  
</tr>";

$i=$i+1;

  }


  

?>
</table>
</form>
</div>