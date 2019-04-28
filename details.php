<?php
session_start();
include('dbook.php');
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

ul.active
{
 border-color: white;
    border-left-color: black; 
    border-top-color: black;
    color: green; 
    background-color: #adadad;

}
#movie_box
{
  
  background-color: white;
  
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
#pot
{
	color: brown;
	font-size: 200%;
}

#movie-list{float:left;list-style:none;margin-top:-3px;padding:0;width:190px;position: absolute;  background: white;}
#movie-list li{padding: 10px; background: white; border-bottom: #bbb9b9 1px solid;display: block; width: 190px;}
#movie-list li:hover{background:#ece3d2;cursor: pointer;display: block;}
</style>


</head>
<body>
<header style="font-size: 200%;"><div id='bas'>Online Ticket Booking</div>


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
  <li class="active"><a href="acamedics.php">Movies</a></li>
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
<center>



<?php
$con=mysqli_connect("localhost","root","","webp");
if(isset($_GET['mov_id']))
{
  $mov_id=$_GET['mov_id'];
$count=0;
$get_mov="select * from movies where id='$mov_id'";
$run_mov=mysqli_query($con,$get_mov);
while($row_mov=mysqli_fetch_array($run_mov))
{
$id=$row_mov['id'];
$name=$row_mov['name'];
$image=$row_mov['photo'];
$genres=$row_mov['genres'];
$director=$row_mov['director'];
$actors=$row_mov['actors'];
$rating=$row_mov['rating'];
$nor=$row_mov['nor'];
$description=$row_mov['description'];
$rat=number_format((float)$rating/$nor, 2, '.', '');
if(isset($_SESSION['customer_email']))
{$customer_id=$_SESSION['customer_id'];
$get_rat="select * from ratings where movie_id='$id' AND customer_id='$customer_id'";
$run_rat=mysqli_query($con,$get_rat);
$count=mysqli_num_rows($run_rat);
while($row_rat=mysqli_fetch_array($run_rat))
{

  $your=$row_rat['rating'];
}

}
if(!isset($_SESSION['customer_email']))
{

echo "
<div id='movie_box' class='dashdiv' style='
    padding: 10px;
    margin-top:50px;
    text-align: center;
    width:600px;
    display: inline-block;
    background-color: white;
    border: 2px solid grey;
    border-radius: 8px;
    margin-bottom: 20px;'>
<img width='400' height='400' src='admin_area/movie_images/$image' style='margin-top:25px; border: 2px solid grey;
    border-radius: 8px;'/>

<h4 font-size:150%>$name</h4>
<p>Rating :<b>$rat/5 ($nor)</b></p>
<p><i>(Login to rate)</i></p>
<p>Director: <b>$director</b></p>
<p>Actors:<b> $actors</b></p>
<p>Genres: <b>$genres</b></p>
<div style='text-align:left;'><b>$description</b></div>


<a href='acamedics.php' style='float:left; padding-top:5px;'><img src='gb.png' style='width:160px; height:65px;'></a>

<a href='book_date.php?mov_id=$id' style='float:right;'><img src='be.jpg' style='width:160px; height:105px;'>
      </a>
</div>";
}

else if($count!=0 )
{

echo "<center>
<div id='movie_box' class='dashdiv' style='
    padding: 10px;
    margin-top:50px;
    text-align: center;
    width:600px;
    display: inline-block;
    background-color: white;
    border: 2px solid grey;
    border-radius: 8px;
    margin-bottom: 20px;'>
<img width='400' height='400' src='admin_area/movie_images/$image' style='margin-top:25px; border: 2px solid grey;
    border-radius: 8px;'/>

<h4 font-size:150%>$name</h4>
<p>Rating :<b>$rat/5 ($nor)</b></p>
<p>Your Rating :<b>$your/5</b></p>
<p>Director: <b>$director</b></p>
<p>Actors:<b> $actors</b></p>
<p>Genres: <b>$genres</b></p>
<div style='text-align:left;'><b>$description</b></div>


<a href='acamedics.php' style='float:left; padding-top:5px;'><img src='gb.png' style='width:160px; height:65px;'></a>

<a href='book_date.php?mov_id=$id' style='float:right;'><img src='be.jpg' style='width:160px; height:105px;'>
      </a>
      </center>
</div>";
}
else
{
echo "<center>
<div id='movie_box' class='dashdiv' style='
    padding: 10px;
    margin-top:50px;
    text-align: center;
    width:600px;
    display: inline-block;
    border: 2px solid grey;
    border-radius: 8px;
    background-color: white;
    margin-bottom: 20px;'>
<img width='400' height='400' src='admin_area/movie_images/$image' style='margin-top:25px; border: 2px solid grey;
    border-radius: 8px;'/>

<h4 font-size:150%>$name</h4>
<form action='' method='post' enctype='multipart/form-data'>
Rating:<input type='text' name='r' placeholder='out of 5' required>&nbsp&nbsp
<input type='submit' name='insert_post' value='Rate Now'/>
</form>";
echo "<br><i>(You can only rate once)</i>";
if(isset($_POST['insert_post']))
{
if(isset($_POST['r']))
{$rati=$_POST['r'];
$insert_rat="insert into ratings(movie_id,customer_id,rating) values ('$id','$customer_id','$rati')";
$insert_rati= mysqli_query($con, $insert_rat);
$rating=$rating+$rati;
$nor=$nor+1;
$update_rating="update movies set rating='$rating' where id='$id'";
$run_update=mysqli_query($con,$update_rating);
$update_nor="update movies set nor='$nor' where id='$id'";
$run_update=mysqli_query($con,$update_nor);
if($insert_rati)
{
  echo "<script>alert('THANK YOU FOR YOUR RATING!')</script>";
  echo "<script>window.open('details.php?mov_id=$id','_self')</script>";
}


}


}

echo"<p>Director: <b>$director</b></p>
<p>Actors: <b>$actors</b></p>
<p>Genres: <b>$genres</b></p>
<p id='pot' style='text-align:left;'><b>$description</b></p>


<a href='acamedics.php' style='float:left; padding-top:5px;'><img src='gb.png' style='width:160px; height:65px;'></a>

<a href='book_date.php?mov_id=$id' style='float:right;'><img src='be.jpg' style='width:160px; height:105px;'>
      </a>
      </center>
</div>";



}

}
}
?>
</center>
</article>



<footer>Copyright &copy; JCB</footer>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('div.dashdiv').each(function(i) {
  $(this).fadeOut(0).delay(200*i).fadeIn(1850);
});
});
</script> 
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