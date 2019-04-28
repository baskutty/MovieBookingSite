<?php 

if(isset($_SESSION['customer_email']))
{
$con=mysqli_connect("localhost","root","","webp");
$fu="select * from booking where status='0'";
  $run_fu=mysqli_query($con,$fu);
  while($row_fu=mysqli_fetch_array($run_fu))
  {$id=$row_fu['id'];
$cus_id=$row_fu['cus_id'];
$c_id=$_SESSION['customer_id'];
if($cus_id==$c_id)
{
$get_fu="delete from booking where id=$id";
$run_fuc=mysqli_query($con,$get_fu);
}

  }

}

  ?> 