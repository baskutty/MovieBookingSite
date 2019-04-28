<?php



date_default_timezone_set('Asia/Kolkata');
$today=date('Y-m-d');
$times=localtime();
$num1 = sprintf("%02d", $times[2]);
$num2 = sprintf("%02d", $times[1]);
$timed=$num1.':'.$num2.':00';

$day=date('l');
$dayno=date('N');
$exceptions=array('07/03','12/25');

?>
<div id="products">

           <form action="" method="post" enctype="multipart/form-data">
<table  style="background-color:rgb(5, 197, 228);" align="center" width="700"  border="2" >

<tr align="center">
  <th>S.N</th>
  <th>MOVIE</th>
  <th>THEATRE</th>
  <th>DATE</th>
  <th>TIME</th>
  <th>EDIT</th>
  <th>DELETE</th>
</tr>

<?php



$con=mysqli_connect("localhost","root","","webp");
 

$i=1;

  
  $run="select * from running order by date,time";
  $run_run=mysqli_query($con,$run);
  while($row_theatre=mysqli_fetch_array($run_run))
  {

    $id=$row_theatre['id'];
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

     echo "<tr align='center'>
  <td>$i.</td>
  
  
  <td> $m_name</td>
  <td> $t_name</td>
  <td> $date</td>
  <td> $time</td>
  <td><a href='edit.php?run_id=$id'>edit</a></td>
  <td><a href='delete.php?run_id=$id'>delete</a></td>
</tr>";

$i=$i+1;

  }


  

?>
</table><center>
<input type="submit" name="update" value="update">
</center>
</form>
</div>
<?php

if(isset($_POST['update']))
    {

$con=mysqli_connect("localhost","root","","webp");
 


  
  $run="select * from running order by date,time";
  $run_run=mysqli_query($con,$run);
  while($row_theatre=mysqli_fetch_array($run_run))
  {
    

    $id=$row_theatre['id'];
    $movie_id=$row_theatre['movie_id'];

$theatre_id=$row_theatre['theatre_id'];
$date=$row_theatre['date'];
$time=$row_theatre['time'];
if(($timed>$time && $date==$today) || $date<$today )
{
$get_the="delete from running where id=$id";
$run_the=mysqli_query($con,$get_the);
}
echo "<script>alert('THE RUNNING MOVIES HAVE BEEN UPDATED!')</script>";
  echo "<script>window.open('index.php?urun','_self')</script>";


}
}

?>