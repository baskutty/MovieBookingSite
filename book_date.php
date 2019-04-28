<?php
session_start();
include('dbook.php');

date_default_timezone_set('Asia/Kolkata');
$today=date('Y-m-d');
$times=localtime();
$num1 = sprintf("%02d", $times[2]);
$num2 = sprintf("%02d", $times[1]);
$time=$num1.':'.$num2.':00';

$day=date('l');
$dayno=date('N');
$exceptions=array('07/03','12/25');

?>
<!DOCTYPE html>
<html>
<head>
  <title>Movies</title>
   <script src="jquery-3.2.1.min.js"></script>
<style>
* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;margin:0}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor:pointer;
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}



header
{
  background-color: black;
  color: white;
  text-align: center;
  padding: 1em;
  background-image: url('cij.jpg');
  height: 122px;
}
footer
{
  background-color: black;
  color: white;
  text-align: center;
  padding: 1em;
position: fixed;
bottom: 0;   

width: 100%;

}
  

ul{
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333333;

}

ul li
{
  float:left;

}

ul li a {
    display: block;
    color: white;
    text-align: center;
    padding: 16px;
    text-decoration: none;
}
ul li a:hover {
    background-color: #111111;
}
nav {
    line-height:30px;
    background-color:rgb(77, 105, 121);
    height:1220px;
    width:225px;
    float:left;
    padding:0px;        
}
div.lis ul li
{float: none;

}
body
{
  background-color: lightgrey;
}

article {
    margin-left: 10px;
    border-left: 1px solid grey;
    padding: 1px;
    overflow: hidden;
}
.sit
{
  font-family: "hf";
  text-align: center;
  color: brown;
  
}
form
{
	font-family: hf;
	color: purple;

}
#bas
{
  background-color: grey;
  opacity: 0.9;
  width: 450px;
  text-align: center;
  margin: auto;
  color: black;
}

#movie-list{float:left;list-style:none;margin-top:-3px;padding:0;width:190px;position: absolute;  background: white;}
#movie-list li{padding: 10px; background: white; border-bottom: #bbb9b9 1px solid;display: block; width: 190px;}
#movie-list li:hover{background:#ece3d2;cursor: pointer;display: block;}
</style>


</head>
<body>
<header style="font-size: 200%;"><div id='bas'>Online Ticket Booking </div>


</header>



<ul>

  <li><a href="start.php">Home</a></li>
  <?php
  if(!isset($_SESSION['customer_email']))
  {

  
  echo"<li><a href='registration.php'>Sign Up</a></li>";
  

  }
else
  echo"<li><a href='transactions.php'>Transactions</a></li>";

  ?>
  <li><a href="acamedics.php">Movies</a></li>
  <li ><a href="theatre.php">Theatres</a></li>

  <li style="float:right; color: white;padding-top: 15px;padding-right: 5px; "><?php 
    if(!isset($_SESSION['customer_email']))
{ 
  echo "Welcome Guest";
 
}
else
{

echo "Welcome ".$_SESSION['customer_email'];


}
  ?></li>

    <li style="float:right"><?php 
    if(!isset($_SESSION['customer_email']))
{ 
  echo "<a style='text-align:right' href='login.php'>Login</a>";
 
}
else
{

 echo "<a style='text-align:right' href='logout.php'>Logout</a>";


}
  ?></li>
  <div style="float: right; padding-top: 15px;padding-right: 5px;">
  
  <form method="get" action="results.php" enctype="multipart/form-data" class="navbar-form navbar-right search" >
           <input type="text" id='search-box'  name="user_query"  placeholder="Search a Movie"/>
            

 
  <input type="submit"  name="search" value="Search" /></form>
<div id="suggesstion-box"></div>
  </div>

  
</form>
    </div>

</ul> 

<nav>
<br>
  <img src="NIT-Calicut.jpg" style="width: 225px; height: 200px;">
  <div class="lis">
  <ul>
    <li><a href="hostel.php">Movie Ratings</a></li>
    <li><a href="library.php">Contact Us</a></li>
  </ul>
    </div>
</nav>
<article>

<?php
if(isset($_GET['mov_id']))
    {

$movie_id=$_GET['mov_id'];
$con=mysqli_connect("localhost","root","","webp");

$get_movs="select * from movies where id=$movie_id";
$run_movs=mysqli_query($con,$get_movs);
while($row_movs=mysqli_fetch_array($run_movs))
{
 $mname=$row_movs['name'];
 $mimage=$row_movs['photo'];
}

echo "
<center>
<p><b>Book Tickets for the movie :</b></p>
<p style='font-size: 200%; color:red; font-family: hf;'><b>
 $mname</b></p>

<img width='400' height='400' src='admin_area/movie_images/$mimage' style='margin-top:0px; border: 2px solid grey;
    border-radius: 8px;'/>";
  echo "</center>
  <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <center><p><b>Select Theatre and Date: </b></p></center>";
  }
?>
  <form action="#poi" method="post" enctype="multipart/form-data" style="font-size: 120%;">
<center><br>
THEATRE:&nbsp&nbsp&nbsp<select name="theatre_id" style="width: 200px; height: 30px;">

          <option><b>Select a Theatre</b></option>
         <?php 
         $mov_id=$_GET['mov_id'];
$con=mysqli_connect("localhost","root","","webp");

$get_cats="select distinct theatre_id from running where movie_id='$mov_id'";
$run_cats=mysqli_query($con,$get_cats);
while($row_cats=mysqli_fetch_array($run_cats))
{
  $cat_id=$row_cats['theatre_id'];
  $get_the="select  * from theatre where id='$cat_id'";
$run_the=mysqli_query($con,$get_the);
while($row_the=mysqli_fetch_array($run_the))
  {$cat_title=$row_the['name'];
  echo "<option value='$cat_id'>$cat_title</option>";
}
}




    ?>
      </select>

     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp DATE:&nbsp&nbsp&nbsp
      <input type="date" name="date" style="width: 200px; height: 30px;"/>&nbsp&nbsp&nbsp
      <input type="submit" name="submit" value="Submit" style="width: 200px; height: 30px;">
      </center>



  </form>
<center>
<br>
<h4 id="poi" style="text-align: center;">-----------------------------------------------------------------------------------------------------------------------------------------</h4>
</center>
<?php
$con=mysqli_connect("localhost","root","","webp");
if(isset($_POST['submit']))
{
  $theatre_id=$_POST['theatre_id'];
  $date=$_POST['date'];

$get_mov="select * from theatre where id='$theatre_id'";
$run_mov=mysqli_query($con,$get_mov);
while($row_mov=mysqli_fetch_array($run_mov))
{
$id=$row_mov['id'];
$name=$row_mov['name'];
$image=$row_mov['photo'];
$city=$row_mov['city'];
$state=$row_mov['state'];


echo "



<center><p style='color:red; font-family:hf; font-size:150%'><br>Theatre Name: <b>$name</b></p></center>";
echo "<center> <b>Select Showtime :</b></center>";
$mov_id=$_GET['mov_id'];
$get_run="select * from running  where theatre_id='$theatre_id' and date='$date' and movie_id='$mov_id' order by time";
$run_run=mysqli_query($con,$get_run);
$f=0;
while($row_run=mysqli_fetch_array($run_run))
{$id=$row_run['id'];
$movie_id=$row_run['movie_id'];
$times=$row_run['time'];
$get_mov="select * from movies where id='$movie_id'";
$run_mov=mysqli_query($con,$get_mov);

while($row_mov=mysqli_fetch_array($run_mov))
{$name=$row_mov['name'];

if(($time>$times && $date==$today) || $date<$today )
{
  

 
}
else
{  $f=1;
   echo"<center><p>$name
&nbsp&nbsp&nbsp
<a href='book.php?run_id=$id'>$times
      </a> </p></center>
";
}
}

}
if($f==0)
{echo"<p><center>No Shows Available(Select a different date).</center></p>


";
}

echo"<br><br>

";






}

}
?>
</article>



<footer>Copyright &copy; JCB</footer>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript">
  // AJAX call for autocomplete 
$(document).ready(function(){
  $("#search-box").keyup(function(){
    $.ajax({
    type: "POST",
    url: "readmovie.php",
    data:'keyword='+$(this).val(),
    beforeSend: function(){
      $("#search-box").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
    },
    success: function(data){
      $("#suggesstion-box").show();
      $("#suggesstion-box").html(data);
      $("#search-box").css("background","#FFF");
    }
    });
  });
});
//To select country name
function selectMovie(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}

</script>
</body>

</html>