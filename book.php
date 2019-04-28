<?php

session_start();

date_default_timezone_set('Asia/Kolkata');
$today=date('Y-m-d');
$times=localtime();
$time=$times[2].':'.$times[1].':00';

$day=date('l');
$dayno=date('N');
$exceptions=array('07/03','12/25');


if(!isset($_SESSION['customer_email']))
           {
            echo"<script>alert('LOGIN TO BOOK')</script>";
           echo"<script>window.open('login.php','_self')</script>";


           }
  

else
{
  

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
if(isset($_GET['run_id']))
    {$con=mysqli_connect("localhost","root","","webp");
  global $run_id;
  global $no;
      $run_id=$_GET['run_id'];
$get_run="select * from running  where id=$run_id";
$run_run=mysqli_query($con,$get_run);
$count=mysqli_num_rows($run_run);

while($row_run=mysqli_fetch_array($run_run))
{$id=$row_run['id'];
$movie_id=$row_run['movie_id'];
$theatre_id=$row_run['theatre_id'];
$times=$row_run['time'];
$dates=$row_run['date'];

$con=mysqli_connect("localhost","root","","webp");

$get_movs="select * from movies where id=$movie_id";
$run_movs=mysqli_query($con,$get_movs);
while($row_movs=mysqli_fetch_array($run_movs))
{
 $mname=$row_movs['name'];
 $mimage=$row_movs['photo'];
}
$get_mov="select * from theatre where id='$theatre_id'";
$run_mov=mysqli_query($con,$get_mov);
while($row_mov=mysqli_fetch_array($run_mov))
{

$t_name=$row_mov['name'];
}

echo "
<center>
<p><b>Book Tickets for the movie :</b></p>
</center>

<center>
<p style='font-size: 120%; color:black; font-family: hf;'>Movie : <b> $mname</b> <br><br>Theatre :  <b>
 $t_name</b></p>
  
  <p style='font-size: 120%; color:green; font-family: hf;'> Date :<b>
 $dates</b>&nbsp&nbsp&nbsp&nbsp&nbsp </p>
  
  </center>
  ";
  }

?>
  
<center>

<h1 style="text-align: center;"></h1>
</center>

<center>
<form action="" method="post" enctype="multipart/form-data" style="font-size: 120%; color:purple;">
   Select No of Seats : <select name="no" style="width: 100px; height: 30px; text-align: center;">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
   </select>
&nbsp&nbsp&nbsp
<input type="submit" name="submit" value="Submit" style="width: 150px; height: 30px;">


</form>
</center>
<?php
if(isset($_POST['submit']))
{global $no;
$no=$_POST['no'];

$i=1;
?>
<br><br><br>
<center>
<img src="Capture.png">
<br><br>
</center>
<?php
for($i=1;$i<=$no;$i++)
{

?>
<form action="" method="post" enctype="multipart/form-data">
  <?php if($i==1)
  {
  ?>
  <center>
  <p style="font-size: 120%;">Select <select   name="no" >

<option value=<?php echo $no;?>><?php echo $no;?></option>
</select> seats from the below dropdown lists.&nbsp&nbsp(Seats will be booked for <b>unique</b> seat no:s only.) </p>
</center>

<?php } ?>

  



<center>
   <select name=<?php echo"no".$i;?>>
<?php
$con=mysqli_connect("localhost","root","","webp");

$s=1;
$l=1;
$a="A";
for($l=1;$l<=6;$l++)
{
for($s=1;$s<=25;$s++)
{$abc=$a.$s;
  $get_mov="select * from booking where run_id='$run_id' and seat_no='$abc' and status='0'";
$run_mov=mysqli_query($con,$get_mov);
$count=mysqli_num_rows($run_mov);
$get_mov2="select * from booking where run_id='$run_id' and seat_no='$abc' and status='1'";
$run_mov2=mysqli_query($con,$get_mov2);
$count2=mysqli_num_rows($run_mov2);

if($count==0 && $count2==0)
{

  echo "<option value='$abc'>$abc</option>";}
  
}
$a++;
}

?>
   </select>

   </center>
   <?php } ?>
   <center>
   <br>
<input type="submit" name="book" value="BOOK NOW">
</center>
  </form>
<?php } ?>
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

<?php
if(isset($_POST['book']))
{
$k=$_POST['no'];
$cost=$k*130;

for($i=1;$i<=$k;$i++)
{$noi="no".$i;
$layi="lay".$i;
$cus_id=$_SESSION['customer_id'];
$seat_no=$_POST[$noi];
$get_mov="select * from booking where run_id='$run_id' and seat_no='$seat_no' and status='0'";
$run_mov=mysqli_query($con,$get_mov);
$count=mysqli_num_rows($run_mov);

if($count==0)
{
  if($i==1)
  {$seats=$seat_no;
  }
  else
  {
 $seats=$seats.','.$seat_no;
}

$insert_book="insert into booking(run_id,seat_no,cus_id,status) values ('$run_id','$seat_no','$cus_id','0')";

$insert_the= mysqli_query($con, $insert_book);

if($insert_the && $i==$k)
{
  echo "<script>alert('YOUR BOOKED SEATS $seats COSTS $cost')</script>";
  echo "<script>window.open('payment.php?run_id=$run_id&seats=$seats&cost=$cost','_self')</script>";
 
}
}
else
{
  $cost=($i-1)*130;
  echo "<script>alert('YOUR BOOKED SEATS $seats COSTS $cost')</script>";
echo "<script>window.open('payment.php?run_id=$run_id&seats=$seats&cost=$cost','_self')</script>";
}

}
}
}}

?>
