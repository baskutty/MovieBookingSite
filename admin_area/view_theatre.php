<div id="products">

           <form action="" method="post" enctype="multipart/form-data">
<table  style="background-color:rgb(5, 197, 228);" align="center" width="700"  border="2" >

<tr align="center">
  <th>S.N</th>
  <th>IMAGE</th>
  <th>NAME</th>
  <th>EDIT</th>
  <th>DELETE</th>
</tr>

<?php



$con=mysqli_connect("localhost","root","","webp");
 

$i=1;

  
  $theatre="select * from theatre order by id";
  $run_theatre=mysqli_query($con,$theatre);
  while($row_theatre=mysqli_fetch_array($run_theatre))
  {
    

    $id=$row_theatre['id'];
    $name=$row_theatre['name'];

$image=$row_theatre['photo'];


     echo "<tr align='center'>
  <td>$i.</td>
  <td style='padding:5'><img style='padding:5' width='60' height='60' src='theatre_images/$image' /></td>
  
  <td> $name</td>
  <td><a href='edit.php?theatre_id=$id'>edit</a></td>
  <td><a href='delete.php?theatre_id=$id'>delete</a></td>
</tr>";

$i=$i+1;

  }


  

?>
</table>
</form>
</div>