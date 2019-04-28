<!DOCTYPE>
<html>
<head>
	<title>INSERTING THEATRE</title>
	
	<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=nl7f1ceqvxqbzrybr358plda3lgdi6u85rwqzybk64jzb0ht"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
</head>
<body bgcolor="skyblue">
<form action="insert_theatre.php" method="post" enctype="multipart/form-data">
	<table align="center" width="700" height="500" border="2" bgcolor="yellow" style="background-color: #ffc107">
		<tr align="center">
			<td colspan="5"><h1 style="text-align:center">INSERT NEW POST HERE</h1></td>
		</tr>

<tr>
			<td align="right">Theatre Name</td>
			<td><input type="text" name="name" required></td>
		</tr>
		<tr>
			<td align="right">City</td>
			<td>
               <input type="text" name="city" required>
			</td>
		</tr>
		<tr>
			<td align="right">State</td>
			<td>
               <input type="text" name="state" required>
			</td>
		</tr>
		<tr>
			<td align="right">Theatre Image</td>
			<td><input type="file" name="photo" required></td>
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
$name=$_POST['name'];
$city=$_POST['city'];
$state=$_POST['state'];

$photo=$_FILES['photo']['name'];
$photo_temp=$_FILES['photo']['tmp_name'];
move_uploaded_file($photo_temp, "theatre_images/$photo");
$insert_theatre="insert into theatre(name,city,state,photo) values ('$name','$city','$state','$photo')";

$insert_the= mysqli_query($con, $insert_theatre);

if($insert_the)
{
	echo "<script>alert('THE THEATRE HAS BEEN INSERTED!')</script>";
	echo "<script>window.open('index.php?it','_self')</script>";
}


}
?>