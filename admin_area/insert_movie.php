<!DOCTYPE>
<html>
<head>
	<title>INSERTING MOVIE</title>
	
	<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=nl7f1ceqvxqbzrybr358plda3lgdi6u85rwqzybk64jzb0ht"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
</head>
<body bgcolor="skyblue">
<form action="insert_movie.php" method="post" enctype="multipart/form-data">
	<table align="center" width="700" height="500" border="2" bgcolor="yellow" style="background-color: #ffc107">
		<tr align="center">
			<td colspan="5"><h1 style="text-align:center">INSERT NEW POST HERE</h1></td>
		</tr>

<tr>
			<td align="right">Movie Title</td>
			<td><input type="text" name="name" required></td>
		</tr>
		<tr>
			<td align="right">Director</td>
			<td>
               <input type="text" name="director" required>
			</td>
		</tr>
		<tr>
			<td align="right">Actors</td>
			<td>
               <input type="text" name="actors" required>
			</td>
		</tr>
		<tr>
			<td align="right">Movie Image</td>
			<td><input type="file" name="photo" required></td>
		</tr>
		<tr>
			<td align="right">Rating</td>
			<td><input type="text" name="rating" required></td>
		</tr>
		<tr>
			<td align="right">Raters</td>
			<td><input type="text" name="nor" required></td>
		</tr>
		<tr>
			<td align="right">Genres</td>
			<td><input type="text" name="genres" required></td>
		</tr>
		<tr>
			<td align="right">Movie Description</td>
			<td><textarea name="description" cols="20" rows="15"> </textarea></td>
		</tr>
		<tr>
			<td align="right">Movie Keywords</td>
			<td><input type="text" name="keywords" required></td>
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
$director=$_POST['director'];
$actors=$_POST['actors'];
$rating=$_POST['rating'];
$nor=$_POST['nor'];
$description=$_POST['description'];
$genres=$_POST['genres'];
$keywords=$_POST['keywords'];
$photo=$_FILES['photo']['name'];
$photo_temp=$_FILES['photo']['tmp_name'];
move_uploaded_file($photo_temp, "movie_images/$photo");
$insert_movie="insert into movies(name,director,actors,rating,nor,description,photo,keywords,genres) values ('$name','$director','$actors','$rating','$nor','$description','$photo','$keywords','$genres')";

$insert_mov= mysqli_query($con, $insert_movie);

if($insert_mov)
{
	echo "<script>alert('THE MOVIE HAS BEEN INSERTED!')</script>";
	echo "<script>window.open('index.php?im','_self')</script>";
}


}
?>