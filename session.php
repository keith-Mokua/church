 <?php 
include_once("db_con.php"); 
?>

<?php
 session_start(); 
 global $link;

//Check whether the session variable SESS_MEMBER_ID is present or not
 ?>

<?php

$session_id=$_SESSION['id'];

$user_query = mysqli_query($link,"select * from users where user_id = '$session_id'");
$user_row = mysqli_fetch_array($user_query);
$username = $user_row['username'];
?> 