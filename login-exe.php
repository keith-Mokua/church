<?php 
include_once("db_con.php");
session_start();
global $link;
//Parse the log in form if the user has filled it out and pressed "Log in"
if(isset($_POST["login"])){
	
	$username = filter_var($_POST["username"],
	FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$password = filter_var($_POST["password"],
	FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	
	

$sql= mysqli_query($link, "SELECT * FROM users WHERE username='".$username."' AND password='".$password."' LIMIT 1") 
or die (mysqli_error());

//Make  sure the person exists
$count=mysqli_num_rows($sql);
$row = mysqli_fetch_array($sql);
if($count > 0)
{
$_SESSION['id']=$row['user_id'];
$id=$row['user_id'];
$username=$row['username'];
$email=$row['email'];
$password=$row['password'];

$sql = mysqli_query($link,"INSERT INTO login_activity(user_id,username,email,password,login_date) VALUES ('".$id."','".$username."','".$email."','".$password."',now())") or die (mysqli_error());


header("location: home.php");


}	
else
{
		header("location:login.php?login-error");
}

}

?>