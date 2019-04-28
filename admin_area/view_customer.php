<div id="products">

           <form action="" method="post" enctype="multipart/form-data">
<table  style="background-color:rgb(5, 197, 228);" align="center" width="700"  border="2" >

<tr align="center">
  <th>S.N</th>
  
  <th>NAME</th>
  <th>EMAIL</th>
  <th>MOBILE</th>
  
  <th>DELETE</th>
</tr>

<?php



$con=mysqli_connect("localhost","root","","webp");
 

$i=1;

  
  $cus="select * from customers order by customer_id";
  $run_cus=mysqli_query($con,$cus);
  while($row_cus=mysqli_fetch_array($run_cus))
  {
    

    $id=$row_cus['customer_id'];
    $name=$row_cus['customer_name'];

$email=$row_cus['customer_email'];
$no=$row_cus['customer_no'];


     echo "<tr align='center'>
  <td>$i.</td>
  
  
  <td> $name</td>
  <td> $email</td>
  <td> $no</td>
  
  <td><a href='delete.php?customer_id=$id'>delete</a></td>
</tr>";

$i=$i+1;

  }


  

?>
</table>
</form>
</div>