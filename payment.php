<?php
session_start();
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
  margin: 2% auto;
  width: 500px;
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
input[name="customer_no"],
input[type="password"]
 {
  display: block;
  box-sizing: border-box;
  margin-bottom: 20px;
  padding: 4px;
  width: 320px;
  height: 32px;
  border: none;
  border-bottom: 1px solid #AAA;
  font-family: 'Roboto', sans-serif;
  font-weight: 400;
  font-size: 15px;
  transition: 0.2s ease;
}

input[name="customer_country"],
input[name="customer_city"]
{
  display: block;
  box-sizing: border-box;
  margin-bottom: 20px;
  padding: 4px;
  width: 320px;
  height: 32px;
  border: none;
  border-bottom: 1px solid #AAA;
  font-weight: 800;
  font-size: 15px;
  transition: 0.2s ease;
}

input[name="customer_name"]:focus,
input[name="customer_email"]:focus,
input[name="customer_pass"]:focus,
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
  height: 122px;
}
footer
{
	background-color: black;
	color: white;
	text-align: center;
	padding: 1em;
position: relative;
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
    height:820px;
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
  global $seats;
  global $no;
      $run_id=$_GET['run_id'];
      $seats=$_GET['seats'];
      $cost=$_GET['cost'];
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
 $dates</b>&nbsp&nbsp&nbsp&nbsp&nbsp Showtime :<b>
 $times</b></p>
  
  </center>
  ";
  }
}

?>
  


<center>

<div id="login-box">
    <br>
    <h1 style="color: green;"><u>Card Details</u></h1>
    <br>
    <form method="post" action="" enctype="multipart/form-data">
    <input type="text" name="customer_name" placeholder="Name on Card" required />
    <input type="text" name="customer_email" placeholder="Card Number" required />
    <input type="password" name="customer_pass" placeholder="CVV Number" required/>
      <input type="text" name="customer_no" placeholder="Mobile" required/>
    <b><input type="text" name="customer_country" placeholder="Amount to be paid : <?php echo $cost;?>" readonly />
    <input type="text" name="customer_city" placeholder=" Transaction Id : <?php echo $run_id;?>" " readonly /></b>
  
    
    <input type="submit" id="soo" name="pay_submit" value="Pay Now" />
  </form>
  </div>
  
  

</article>

<center>
	<p>&nbsp&nbsp&nbsp<a href='start.php' > Cancel Payment </a></p>
	
	<br><br></center>
  

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
   if(isset($_POST['pay_submit']))
   {$con=mysqli_connect("localhost","root","","webp");

   $name=$_POST['customer_name'];
   $cus_id=$_SESSION['customer_id'];
$temp=$seats;
    $seat_nos = explode(",", $seats);
for($i = 0; $i < count($seat_nos); $i++){
  $w = $seat_nos[$i];
  $update_stat="update booking set status='1' where run_id='$run_id' and seat_no='$w'";
$run_update=mysqli_query($con,$update_stat);
}
$insert_bill="insert into bill(name,cus_id,run_id,seats,date,time,s_date,s_time,m_name,t_name,cost) values ('$name','$cus_id','$run_id','$seats','$today','$time','$dates','$times','$mname','$t_name','$cost')";

$insert_b= mysqli_query($con, $insert_bill);
if($insert_b)

{$get_i="select * from bill where run_id='$run_id' AND seats='$temp'";
$run_i=mysqli_query($con,$get_i);
$row_i=mysqli_fetch_array($run_i);
$bill_id=$row_i['id'];

}

    


echo "<script>window.open('bill.php?bill_id=$bill_id&run_id=$run_id&seats=$seats&cost=$cost&mname=$mname&tname=$t_name&dates=$dates&times=$times&s_date=$today&s_time=$time','_self')</script>";


}
