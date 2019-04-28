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
    height:1700px;
    width:225px;
    float:left;
    padding:0px;	      
}
div.lis ul li
{float: none;

}
ul.active
{
 border-color: white;
    border-left-color: black; 
    border-top-color: black;
    color: green; 
    background-color: #adadad;

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

#movie_box
{
background-color: white;
background-position: center;
background-size: cover;
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
  <li class='active'><a href="acamedics.php">Movies</a></li>
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

<h1 style="text-align: center;">Movie List</h1>
</center>
<?php
$con=mysqli_connect("localhost","root","","webp");
if(isset($_GET['user_query']))
{
  
$search=$_GET['user_query'];

$get_mov="select * from movies where keywords like '%$search%'";
$run_mov=mysqli_query($con,$get_mov);
$count=mysqli_num_rows($run_mov);

if($count==0)
{
  echo "<p style='text-align:center'>NO MOVIES FOUND</p>";
}
while($row_mov=mysqli_fetch_array($run_mov))
{
$id=$row_mov['id'];
$name=$row_mov['name'];
$image=$row_mov['photo'];
echo "
<div id='movie_box' class='dashdiv' style='margin-left: 120px;
    padding: 20px;
    margin-top: 10px;
    height:420px;
    text-align: center;
    width:320px;
    display: inline-block;
     
    
border: 2px solid black;
    border-radius: 8px;

    
    margin-bottom: 80px;'>
<a href='details.php?mov_id=$id'><img width='240' height='240' src='admin_area/movie_images/$image'  style=' border: 2px solid grey;
    border-radius: 8px;'/></a>
<br>
<a href='details.php?mov_id=$id'><h4 style='color:rgb(0,69,135);'>$name</h4></a>



<a href='book_date.php?mov_id=$id' ><img src='nb.jpg' style='width:130px; height:65px;'>
      </a>
</div>";


}
}
?>
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