<?php
session_start();

if(!isset($_SESSION['admin']))
           {

            include('admin_login.php');


           }
           else
           {
  
?>


<!DOCTYPE>
<html>
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/logo.gif">

    <title>ADMIN PANEL</title>


    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  

    <!-- Custom styles for this template -->
   
    <link href="css/custom.css" rel="stylesheet" media="all">
<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=nl7f1ceqvxqbzrybr358plda3lgdi6u85rwqzybk64jzb0ht"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	</head>





<body>
<img class="logo" src="images/bg-header.jpg" title="logo" alt="logo" />
 


    
      
          <div class="container-fluid">
      <div class="row" >
        <div class="col-sm-3 col-md-2 sidebar">
           <div id="sidebar_title">MANAGE CONTENT</div>
          <ul class="nav nav-sidebar">
              <li> <a href="index.php">ADMIN HOME</a></li>
           <li> <a href="index.php?im">INSERT MOVIE</a></li>
           <li> <a href="index.php?vm">VIEW ALL MOVIES</a></li>
           <li> <a href="index.php?it">INSERT THEATRE</a></li>
           <li> <a href="index.php?vt">VIEW ALL THEATRES</a></li>
           <li> <a href="index.php?irun">INSERT RUNNING MOVIES</a></li>
           <li> <a href="index.php?urun">UPDATE RUNNING MOVIES</a></li>
           
           <li> <a href="index.php?vcu">VIEW CUSTOMERS</a></li>
          
           <li> <a href="index.php?vp">VIEW PAYMENTS</a></li>
           <li> <a href="admin_logout.php">ADMIN LOGOUT</a></li>
          </ul>
           </div>
        <div class="main">
         <?php
    if(isset($_GET['movie_id']))
    {

$movie_id=$_GET['movie_id'];
$con=mysqli_connect("localhost","root","","webp");

$get_movs="select * from movies where id=$movie_id";
$run_movs=mysqli_query($con,$get_movs);
while($row_movs=mysqli_fetch_array($run_movs))
{
  
 

 $name=$row_movs['name'];
$director=$row_movs['director'];
$actors=$row_movs['actors'];

$description=$row_movs['description'];
$genres=$row_movs['genres'];
$keywords=$row_movs['keywords'];




    ?>
<form action="edit.php?movie_id=<?php echo"$movie_id"; ?>" method="post" enctype="multipart/form-data">
  <table align="center" width="700" height="500" border="2" bgcolor="yellow" style="background-color: #ffc107">

    <tr align="center">
      <td colspan="5"><h1 style="text-align:center">UPDATE MOVIE HERE</h1></td>
    </tr>

<tr>
      <td align="right">Movie Title</td>
      <td><input type="text"  name="name" value="<?php echo $name;?>" /></td>
    </tr>
    
    <tr>
      <td align="right">Director</td>
      <td><input type="text" name="director" value="<?php echo $director;?>" />

      </td>
    </tr>
    
    <tr>
      <td align="right">Actors</td>
      <td><input type="text" name="actors" value="<?php echo $actors;?>"/></td>
    </tr>
    <tr>
      <td align="right">Description</td>
      <td><textarea name="description" cols="20" rows="15"><?php echo"$description";?> </textarea></td>
    </tr>
    <tr>
      <td align="right">Keywords</td>
      <td><input type="text" name="keywords" value="<?php echo $keywords;?>" /></td>
    </tr>
    <tr>
      <td align="right">Genres</td>
      <td><input type="text" name="genres" value="<?php echo $genres;?>" /></td>
    </tr>
    <tr align="center">
      <td colspan="5"><input type="submit" name="insert_post" value="Update Now"/></td>
    </tr>




  </table>
</form>



<?php
$con=mysqli_connect("localhost","root","","webp");
if(isset($_POST['insert_post']))
{
$name=$_POST['name'];
$update_title="update movies set name='$name' where id='$movie_id'";
$run_update=mysqli_query($con,$update_title);

$director=$_POST['director'];
$update_director="update movies set director='$director' where id='$movie_id'";
$run_update=mysqli_query($con,$update_director);

$actors=$_POST['actors'];
$update_actors="update movies set actors='$actors' where id='$movie_id'";
$run_update=mysqli_query($con,$update_actors);

$description=$_POST['description'];
$update_description="update movies set description='$description' where id='$movie_id'";
$run_update=mysqli_query($con,$update_description);

$genres=$_POST['genres'];
$update_genres="update movies set genres='$genres' where id='$movie_id'";
$run_update=mysqli_query($con,$update_genres);

$keywords=$_POST['keywords'];
$update_keywords="update movies set keywords='$keywords' where id='$movie_id'";
$run_update=mysqli_query($con,$update_keywords);

echo "<script>alert('THE MOVIE HAS BEEN UPDATED!')</script>";
  echo "<script>window.open('index.php?vm','_self')</script>";



}
}
}

?>


   



  <?php
    if(isset($_GET['theatre_id']))
    {

$theatre_id=$_GET['theatre_id'];
$con=mysqli_connect("localhost","root","","webp");

$get_the="select * from theatre where id=$theatre_id";
$run_the=mysqli_query($con,$get_the);
while($row_the=mysqli_fetch_array($run_the))
{
  
 

 $name=$row_the['name'];
$city=$row_the['city'];
$state=$row_the['state'];






    ?>
<form action="edit.php?theatre_id=<?php echo"$theatre_id"; ?>" method="post" enctype="multipart/form-data">
  <table align="center" width="700" height="500" border="2" bgcolor="yellow" style="background-color: #ffc107">

    <tr align="center">
      <td colspan="5"><h1 style="text-align:center">UPDATE THEATRE HERE</h1></td>
    </tr>

<tr>
      <td align="right">NAME</td>
      <td><input type="text"  name="name" value="<?php echo $name;?>" /></td>
    </tr>
    
    <tr>
      <td align="right">CITY</td>
      <td><input type="text" name="city" value="<?php echo $city;?>" />

      </td>
    </tr>
    
    <tr>
      <td align="right">STATE</td>
      <td><input type="text" name="state" value="<?php echo $state;?>"/></td>
    </tr>
    
    <tr align="center">
      <td colspan="5"><input type="submit" name="insert_post" value="Update Now"/></td>
    </tr>




  </table>
</form>



<?php
$con=mysqli_connect("localhost","root","","webp");
if(isset($_POST['insert_post']))
{
$name=$_POST['name'];
$update_title="update theatre set name='$name' where id='$theatre_id'";
$run_update=mysqli_query($con,$update_title);

$city=$_POST['city'];
$update_city="update theatre set city='$city' where id='$theatre_id'";
$run_update=mysqli_query($con,$update_city);

$state=$_POST['state'];
$update_state="update theatre set state='$state' where id='$theatre_id'";
$run_update=mysqli_query($con,$update_state);



echo "<script>alert('THE THEATRE HAS BEEN UPDATED!')</script>";
  echo "<script>window.open('index.php?vt','_self')</script>";



}
}
}

?>
<?php
    if(isset($_GET['run_id']))
    {

$run_id=$_GET['run_id'];
$con=mysqli_connect("localhost","root","","webp");

$get_the="select * from running where id=$run_id";
$run_the=mysqli_query($con,$get_the);
while($row_the=mysqli_fetch_array($run_the))
{
  
 

 $movie_id=$row_the['movie_id'];
 $theatre_id=$row_the['theatre_id'];
 $date=$row_the['date'];
 $time=$row_the['time'];







    ?>
<form action="edit.php?run_id=<?php echo"$run_id"; ?>" method="post" enctype="multipart/form-data">
  
  <table align="center" width="700" height="500" border="2" bgcolor="yellow" style="background-color: #ffc107">
    <tr align="center">
      <td colspan="5"><h1 style="text-align:center">EDIT HERE</h1></td>
    </tr>

<tr>
      <td align="right">MOVIE</td>
      <td><select name="movie_id">

          <option value=<?php echo"$movie_id";?>><?php 
$con=mysqli_connect("localhost","root","","webp");

$get_cats="select * from movies where id=$movie_id";
$run_cats=mysqli_query($con,$get_cats);
while($row_cats=mysqli_fetch_array($run_cats))
{
  $cat_id=$row_cats['id'];
  $cat_title=$row_cats['name'];
  echo "$cat_title";
}


    ?></option>
         <?php 
$con=mysqli_connect("localhost","root","","webp");

$get_cats="select * from movies";
$run_cats=mysqli_query($con,$get_cats);
while($row_cats=mysqli_fetch_array($run_cats))
{
  $cat_id=$row_cats['id'];
  $cat_title=$row_cats['name'];
  if($cat_id!=$movie_id)
  echo "<option value='$cat_id'>$cat_title</option>";
}


    ?>
      </select>

      </td>
    </tr>
    <tr>
      <td align="right">THEATRE</td>
      <td><select name="theatre_id">

             <option value=<?php echo"$theatre_id";?>><?php 
$con=mysqli_connect("localhost","root","","webp");

$get_cats="select * from theatre where id=$theatre_id";
$run_cats=mysqli_query($con,$get_cats);
while($row_cats=mysqli_fetch_array($run_cats))
{
  $cat_id=$row_cats['id'];
  $cat_title=$row_cats['name'];
  echo "$cat_title";
}


    ?></option>
         <?php 
$con=mysqli_connect("localhost","root","","webp");

$get_cats="select * from theatre";
$run_cats=mysqli_query($con,$get_cats);
while($row_cats=mysqli_fetch_array($run_cats))
{
  $cat_id=$row_cats['id'];
  $cat_title=$row_cats['name'];
  if($cat_id!=$theatre_id)
  echo "<option value='$cat_id'>$cat_title</option>";
}


    ?>
      </select>

      </td>
    </tr>
    <tr>
      <td align="right">Time</td>
      <td>
               <input type="text" name="time" value="<?php echo $time;?>" required>
      </td>
    </tr>
    <tr>
      <td align="right">Date</td>
      <td>
               <input type="date" name="date" value="<?php echo $date;?>"required>
      </td>
    </tr>
    
    
    
    <tr align="center">
      <td colspan="5"><input type="submit" name="insert_post" value="Update Now"/></td>
    </tr>




  </table>
</form>


<?php
$con=mysqli_connect("localhost","root","","webp");
if(isset($_POST['insert_post']))
{
$movie_id=$_POST['movie_id'];
$update_title="update running set movie_id='$movie_id' where id='$run_id'";
$run_update=mysqli_query($con,$update_title);

$theatre_id=$_POST['theatre_id'];
$update_city="update running set theatre_id='$theatre_id' where id='$run_id'";
$run_update=mysqli_query($con,$update_city);

$date=$_POST['date'];
$update_state="update running set date='$date' where id='$run_id'";
$run_update=mysqli_query($con,$update_state);
$time=$_POST['time'];
$update_state="update running set time='$time' where id='$run_id'";
$run_update=mysqli_query($con,$update_state);


echo "<script>alert('THE RUNNING MOVIE HAS BEEN UPDATED!')</script>";
  echo "<script>window.open('index.php?urun','_self')</script>";



}
}
}

?>

          <div id="products">

         
         

   

          </div>
          
          </div>
        
      </div>
         </div>
   
     
    



<div id="footer">


<footer style="text-align:center;margin-bottom:0">
        <p style="text-align:center;">&copy; <?php echo date('Y'); ?> <?php echo "JCB"; ?>,Comp.</p>
      </footer>


</div>






<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
   
	</body>



	</html>
<?php
}
  ?>