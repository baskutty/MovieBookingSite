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
        <div class="col-sm-3 col-md-2 sidebar" style="height:116%;">
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
    if(isset($_GET['im']))
    {

include("insert_movie.php");


    }
 if(isset($_GET['it']))
    {

include("insert_theatre.php");


    }
     if(isset($_GET['irun']))
    {

include("insert_run.php");


    }
     if(isset($_GET['vm']))
    {

include("view_movie.php");


    }
     if(isset($_GET['vt']))
    {

include("view_theatre.php");


    }
      if(isset($_GET['urun']))
    {

include("update_run.php");


    }
 if(isset($_GET['vcu']))
    {

include("view_customer.php");


    }
    if(isset($_GET['vo']))
    {

include("view_orders.php");


    }
     if(isset($_GET['vp']))
    {

include("view_payments.php");


    }
         ?>

          <div id="products">

         
         

   

          </div>
          
          </div>
        
      </div>
         </div>
   
     
    



<div id="footer" style="text-align:center;margin-bottom:0;">


<footer style="text-align:center;margin-bottom:0;">
        <p style="text-align:center;margin-bottom:0;">&copy; <?php echo date('Y'); ?> JCB Comp.</p>
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