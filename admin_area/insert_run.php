<!DOCTYPE>
<html>
<head>
	<title>INSERT RUNNING</title>
	
	<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=nl7f1ceqvxqbzrybr358plda3lgdi6u85rwqzybk64jzb0ht"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
</head>
<body bgcolor="skyblue">
<form action="insert_run.php" method="post" enctype="multipart/form-data">
	<table align="center" width="700" height="500" border="2" bgcolor="yellow" style="background-color: #ffc107">
		<tr align="center">
			<td colspan="5"><h1 style="text-align:center">INSERT NEW POST HERE</h1></td>
		</tr>

<tr>
			<td align="right">MOVIE</td>
			<td><select name="movie_id">

          <option>Select a Movie</option>
         <?php 
$con=mysqli_connect("localhost","root","","webp");

$get_cats="select * from movies";
$run_cats=mysqli_query($con,$get_cats);
while($row_cats=mysqli_fetch_array($run_cats))
{
	$cat_id=$row_cats['id'];
	$cat_title=$row_cats['name'];
	echo "<option value='$cat_id'>$cat_title</option>";
}


    ?>
      </select>

			</td>
		</tr>
		<tr>
			<td align="right">THEATRE</td>
			<td><select name="theatre_id">

          <option>Select a Theatre</option>
         <?php 
$con=mysqli_connect("localhost","root","","webp");

$get_cats="select * from theatre";
$run_cats=mysqli_query($con,$get_cats);
while($row_cats=mysqli_fetch_array($run_cats))
{
	$cat_id=$row_cats['id'];
	$cat_title=$row_cats['name'];
	echo "<option value='$cat_id'>$cat_title</option>";
}


    ?>
      </select>

			</td>
		</tr>
		<tr>
			<td align="right">Time</td>
			<td>
               <input type="text" name="time" required>
			</td>
		</tr>
		<tr>
			<td align="right">Date</td>
			<td>
               <input type="date" name="date" required>
			</td>
		</tr>
		
		
		
		<tr align="center">
			<td colspan="5"><input type="submit" name="insert_post" value="Insert Now"/></td>
		</tr>




	</table>
</form>


</body>



</html>
<?php
$con=mysqli_connect("localhost","root","","webp");
if(isset($_POST['insert_post']))
{
$movie_id=$_POST['movie_id'];
$theatre_id=$_POST['theatre_id'];
$time=$_POST['time'];
$date=$_POST['date'];


$insert_theatre="insert into running(movie_id,theatre_id,time,date) values ('$movie_id','$theatre_id','$time','$date')";

$insert_the= mysqli_query($con, $insert_theatre);

if($insert_the)
{
	echo "<script>alert('THE RUNNING MOVIE HAS BEEN INSERTED!')</script>";
	echo "<script>window.open('index.php?irun','_self')</script>";
}


}
?>