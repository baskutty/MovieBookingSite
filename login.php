<?php
session_start();


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
    height:810px;
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

#login-box {
  background-image: url('login.jpg');
    background-size: cover;
  background-position: center;
  border-radius: 0 2px 2px 0;
  position: relative;
  margin: 5% auto;
  width: 250px;
  height: 300px;
  
  
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
}

input[name="email"],
input[type="password"]
 {
  display: block;
  box-sizing: border-box;
  margin-bottom: 20px;
  padding: 14px;
  width: 220px;
  height: 32px;
  border: none;
  border-bottom: 1px solid #AAA;
  font-family: 'Roboto', sans-serif;
  font-weight: 400;
  font-size: 15px;
  transition: 0.2s ease;
  margin: 10px;
}

input[name="email"]:focus,
input[type="password"]:focus {
  border-bottom: 2px solid #16a085;
  color: #16a085;
  transition: 0.2s ease;
}


input[name="signup_submit"] {
  margin-top: 28px;
  width: 120px;
  height: 32px;
  background: #16a085;
  border: none;
  border-radius: 2px;
  color: #FFF;
  font-family: 'Roboto', sans-serif;
  font-weight: 500;
  text-transform: uppercase;
  transition: 0.1s ease;
  cursor: pointer;
}

input[name="signup_submit"]:hover,
input[name="signup_submit"]:focus {
  opacity: 0.8;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
  transition: 0.1s ease;
}

input[name="signup_submit"]:active {
  opacity: 1;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
  transition: 0.1s ease;
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
<center>




</center>

<div id="login-box">
<form action="" method="post" enctype="multipart/form-data">
<img src="log.jpg" style="height: 80px; width: 250px;">
  <br><br><input type="text" name="email" placeholder="E-mail" required />
  <input type="password" name="pass" placeholder="Password" required />
  
    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp<input type="submit" id="soo" name="signup_submit" value="Login" />
</form>
<br><br><br>
<p style="text-align:right;padding-right: 19px;"><a style="text-decoration:none" href="registration.php">New User! REGISTER HERE</a></p>
</div>


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

$con=mysqli_connect("localhost","root","","webp");
if(isset($_POST['signup_submit']))
{
$customer_email=$_POST['email'];
$customer_pass=$_POST['pass'];

$get_cus="select * from customers where customer_email='$customer_email' AND customer_pass='$customer_pass'";
$run_cus=mysqli_query($con,$get_cus);



if($row_cus=mysqli_fetch_array($run_cus))
{
$cus_id=$row_cus['customer_id'];

$cus_name=$row_cus['customer_name'];

$_SESSION['customer_email']=$cus_name;
$_SESSION['customer_id']=$cus_id;
echo "<script>alert('LOGIN SUCCESSFULL')</script>";
echo "<script>window.open('start.php','_self')</script>";

}





else
{echo "<script>alert('LOGIN UNSUCCESSFULL')</script>";
echo "<script>window.open('login.php','_self')</script>";

}

}
?>