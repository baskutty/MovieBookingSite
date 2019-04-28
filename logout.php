<?php

include('dbook.php');
session_start();

session_destroy();

echo "<script>window.open('start.php','_self')</script>";
?>
