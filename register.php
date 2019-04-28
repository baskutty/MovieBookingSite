<?php
session_start();

function getIp() {
    $ip = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
 
    return $ip;
}
$con=mysqli_connect("localhost","root","","webp");
if(isset($_POST['signup_submit']))
{$customer_ip=getIp();
$customer_name=$_POST['customer_name'];
$customer_email=$_POST['customer_email'];
$customer_pass=$_POST['customer_pass'];
$customer_country=$_POST['customer_country'];
$customer_city=$_POST['customer_city'];
$customer_no=$_POST['customer_no'];

$get_cus="select * from customers where customer_email='$customer_email'";
$run_cus=mysqli_query($con,$get_cus);
$count1=mysqli_num_rows($run_cus);
if($count1!=0)
{echo "<script>alert('USER ALREADY PRESENT WITH SAME EMAIL!')</script>";
	echo "<script>window.open('registration.php','_self')</script>";


}
$get_cus="select * from customers where customer_no='$customer_no'";
$run_cus=mysqli_query($con,$get_cus);
$count2=mysqli_num_rows($run_cus);
if($count2!=0)
{echo "<script>alert('USER ALREADY PRESENT WITH SAME MOBILE NUMBER!')</script>";
	echo "<script>window.open('registration.php','_self')</script>";


}

if($count1==0 && $count2==0)
{

$insert_customer="insert into customers(customer_ip,customer_name,customer_email,customer_pass,customer_country,customer_city,customer_no) values ('$customer_ip','$customer_name','$customer_email','$customer_pass','$customer_country','$customer_city','$customer_no')";

 if(mysqli_query($con, $insert_customer))

{$get_id="select * from customers where customer_email='$customer_email' AND customer_pass='$customer_pass'";
$run_id=mysqli_query($con,$get_id);
$row_id=mysqli_fetch_array($run_id);
 $_SESSION['customer_email']=$customer_name;
 $_SESSION['customer_id']=$row_id['customer_id'];
	echo "<script>alert('REGISTRATION SUCCESSFULL!')</script>";
	echo "<script>window.open('start.php','_self')</script>";

}

}
}
?>