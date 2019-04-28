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

  
  $movie="select * from movies order by id";
  $run_movie=mysqli_query($con,$movie);
  while($row_movie=mysqli_fetch_array($run_movie))
  {
    

    $id=$row_movie['id'];
    $name=$row_movie['name'];

$image=$row_movie['photo'];


     echo "<tr align='center'>
  <td>$i.</td>
  <td style='padding:5'><img style='padding:5' width='60' height='60' src='movie_images/$image' /></td>
  
  <td> $name</td>
  <td><a href='edit.php?movie_id=$id'>edit</a></td>
  <td><a href='delete.php?movie_id=$id'>delete</a></td>
</tr>";

$i=$i+1;

  }


  

?>
</table>
</form>
</div>