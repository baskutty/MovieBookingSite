<?php
session_start();
include('dbook.php');
?>


<!DOCTYPE html>
<html>
<head>
  <title>JCB Movies</title>
   <script src="jquery-3.2.1.min.js"></script>
<style>
* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;margin:0}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 500px;
  max-height: 600px;
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



ul li
{
  float:left;

}

ul li div
{
  float:right;
}




nav {
    line-height:30px;
    background-color:rgb(77, 105, 121);
    height:840px;
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

#movie-list{float:left;list-style:none;margin-top:-3px;padding:0;width:190px;position: absolute;  background: white;}
#movie-list li{padding: 10px; background: white; border-bottom: #bbb9b9 1px solid;display: block; width: 190px;}
#movie-list li:hover{background:#ece3d2;cursor: pointer;display: block;}
.logo p
{
  display: inline-block;
    vertical-align: top;

    
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
  echo"<li class='active'><a href='transactions.php'>Transactions</a></li>";

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
  <p>
    Your Recent Transcations appear Here
  </p>
</center>
<div id="products">

           <form action="" method="post" enctype="multipart/form-data">
<table  style="background-color:rgb(5, 197, 228); margin-top: 50px;" align="center" width="900"  border="2" cellpadding="10px" >

<tr align="center">
  <th>S.N</th>
  
  <th>Name</th>
  <th>Run Id</th>
  <th>Bill Id</th>
  <th>Seats</th>
  <th>Date</th>

  <th>Time</th>
  <th>Show Date</th>
  <th>Show Time</th>
  <th>Movie Name</th>
  <th>Theatre Name</th>

  <th>Cost</th>
  <th>Bill</th>
</tr>

<?php



$con=mysqli_connect("localhost","root","","webp");
$cust_id=$_SESSION['customer_id'];
 

$i=1;

  
  $movie="select * from bill where cus_id='$cust_id' order by id desc ";
  $run_movie=mysqli_query($con,$movie);
  while($row_movie=mysqli_fetch_array($run_movie))
  {
    

    $id=$row_movie['id'];
    $name=$row_movie['name'];
    $run_id=$row_movie['run_id'];
    $cus_id=$row_movie['cus_id'];
    $seats=$row_movie['seats'];
    
    $date=$row_movie['date'];
    $time=$row_movie['time'];
    $s_date=$row_movie['s_date'];
    $s_time=$row_movie['s_time'];
    $m_name=$row_movie['m_name'];
    $t_name=$row_movie['t_name'];
    $cost=$row_movie['cost'];



     echo "<tr align='center'>
  <td>$i.</td>
  
  
  <td> $name</td>
  <td >$run_id</td>
  <td >$id</td>
  <td >$seats</td>
  <td >$date</td>
  <td >$time</td>
  <td >$s_date</td>
  <td >$s_time</td>
  <td >$m_name</td>
  <td >$t_name</td>
  <td >$cost</td>
  <td><a href='bill.php?bill_id=$id&run_id=$run_id&seats=$seats&cost=$cost&mname=$m_name&tname=$t_name&dates=$date&times=$time&s_date=$s_date&s_time=$s_time'>show bill</a></td>

</tr>";

$i=$i+1;

  }


  

?>
</table>
</form>
</div>

</article>


<div >
<footer >Copyright &copy; JCB</footer>
</div>
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