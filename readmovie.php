<?php
$con=mysqli_connect("localhost","root","","webp");
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_POST["keyword"])) {
	$keywords=$_POST['keyword'];
$query ="select * from movies where keywords like '%$keywords%'";
$result = $db_handle->runQuery($query);
if(!empty($result)) {
?>
<ul id="movie-list">
<?php
foreach($result as $movie) {
?>
<div style="display: block;width: 190px;">
<li  onClick="selectMovie('<?php echo $movie["name"]; ?>');"><?php echo $movie["name"].'<br>'; ?></li></div>
<?php } ?>
</ul>
<?php } } ?>