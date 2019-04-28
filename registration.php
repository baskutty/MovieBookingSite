<?php
session_start();

?>


<!DOCTYPE html>
<html>
<head>
	<title>Movies</title>
   <script src="jquery-3.2.1.min.js"></script>
<style>



*:focus {
  outline: none;
}

body {
  margin: 0;
  padding: 0;
  background: #DDD;
  font-size: 16px;
  color: #222;
  font-family: 'Roboto', sans-serif;
  font-weight: 300;
}

#login-box {
  
  position: relative;
  margin: 3% auto;
  width: 600px;
  height: 490px;
  background: #FFF;
  border-radius: 2px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
}

.left {
  position: absolute;
  top: 0;
  left: 0;
  box-sizing: border-box;
  padding: 40px;
  width: 300px;
  height: 400px;
}

h1 {
  margin: 0 0 20px 0;
  font-weight: 300;
  font-size: 28px;
}

#p01
{ display: inline;
  
  height: 20px;
  width: 140px;
  border: none;
  

}


input[name="customer_name"],
input[name="customer_email"],
input[name="customer_pass"],
input[name="customer_country"],
input[name="customer_city"],
input[name="customer_no"],
input[type="password"]
 {
  display: block;
  box-sizing: border-box;
  margin-bottom: 20px;
  padding: 4px;
  width: 220px;
  height: 32px;
  border: none;
  border-bottom: 1px solid #AAA;
  font-family: 'Roboto', sans-serif;
  font-weight: 400;
  font-size: 15px;
  transition: 0.2s ease;
}

input[name="customer_name"]:focus,
input[name="customer_email"]:focus,
input[name="customer_pass"]:focus,
input[name="customer_country"]:focus,
input[name="customer_city"]:focus,
input[name="customer_no"]:focus,
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

.or {
  position: absolute;
  top: 180px;
  left: 280px;
  width: 40px;
  height: 40px;
  background: #DDD;
  border-radius: 50%;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
  line-height: 40px;
  text-align: center;
}

.right {
  position: absolute;
  top: 0;
  right: 0;
  box-sizing: border-box;
  padding: 40px;
  width: 300px;
  height: 490px;
  background: url('good.jpg');
  background-size: cover;
  background-position: center;
  border-radius: 0 2px 2px 0;
}

.right .loginwith {
  display: block;
  margin-bottom: 40px;
  font-size: 28px;
  color: #FFF;
  text-align: center;
}

button.social-signin {
  margin-bottom: 20px;
  width: 220px;
  height: 36px;
  border: none;
  border-radius: 2px;
  color: #FFF;
  font-family: 'Roboto', sans-serif;
  font-weight: 500;
  transition: 0.2s ease;
  cursor: pointer;
}

button.social-signin:hover,
button.social-signin:focus {
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
  transition: 0.2s ease;
}

button.social-signin:active {
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
  transition: 0.2s ease;
}

button.social-signin.facebook {
  background: #32508E;
}

button.social-signin.twitter {
  background: #55ACEE;
}

button.social-signin.google {
  background: #DD4B39;
}



body {font-family: Verdana,sans-serif;margin:0

}


#f01
{

background-color: orange;
border:solid; 
width:20%; 
padding: 20px;
 border-color:green;
}
header
{
	background-color: black;
	color: white;
	text-align: center;
	padding: 1em;
  background-image: url('cij.jpg');
  height: 57.997px;
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

#bas
{
  background-color: grey;
  opacity: 0.9;
  width: 450px;
  text-align: center;
  margin: auto;
  color: black;
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

  
  echo"<li class='active'><a href='registration.php'>Sign Up</a></li>";
  

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
<h1><b>Sign Up</b></h1>
<p style="color: red;"><b>Sign Up NOW </b>to get 10% discount on Movie Tickets.</p>


</center>
<div id="login-box" class='dashdiv'>
  <div class="left">
    <h1>Sign up</h1>
    <form method="post" action="register.php" enctype="multipart/form-data">
    <input type="text" name="customer_name" placeholder="Username" required/>
    <input type="email" name="customer_email" placeholder="E-mail" required />
    <input type="password" name="customer_pass" placeholder="Password" required />
    <input type="text" name="customer_country" placeholder="Country" required/>
    <input type="text" name="customer_city" placeholder="City" required/>
    <input type="text" name="customer_no" placeholder="Mobile" required/>
    
    <input type="submit" id="soo" name="signup_submit" value="Sign me up" />
  </form>
  </div>
  
  <div class="right">
    <span class="loginwith">Sign in with<br />social network</span>
    
    <button class="social-signin facebook">Log in with facebook</button>
    <button class="social-signin twitter">Log in with Twitter</button>
    <button class="social-signin google">Log in with Google+</button>
  </div>
  <div class="or">OR</div>
</div>

</article>

<center>
	<p>&nbsp&nbsp&nbspAlready Have an Account? </p>
	&nbsp&nbsp<a href="login.php">Login</a>
	<br><br></center>

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