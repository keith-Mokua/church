<?php  

require ("db_con.php");

if(isset($_POST['reg_submit']))
{
	$firstname=filter_var($_POST['firstname'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
	$lastname=filter_var($_POST['lastname'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH) ;
	$username=filter_var($_POST['username'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
	$email=filter_var($_POST['email'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
	$member=filter_var($_POST['member'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
	$location=filter_var($_POST['location'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
	$password=filter_var($_POST['password'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
	$pass=md5($password);

	
	// $sql = mysqli_query($link,"SELECT email FROM users WHERE email='".$email."' LIMIT 1");
	// $data_match=mysqli_num_rows($sql);
	
	// if($data_match>0){
	// 	echo<script>
	// 	if(confirm('User with that email already exist, Try to register with another email')){
	// 		window.location='./login.php',;
	// 	}
	// 	</script>;
		
	// }
	
	//$time=now();
	
	$queryCom="INSERT INTO `users`(`firstname`, `lastname`, `username`, `email`, `member`, `location`, `password`, `reg_date`) VALUES ('$firstname','$lastname','$username','$email','$member','$location',
	'$pass',now())";

	// $sqlquery="INSERT INTO users(firstname,lastname,username,email,member,location,password,reg_date) VALUES ('".$firstname."','".$lastname."','".$username."','".$email."','".$member."','".$location."','".$pass."',now())";

	$sql=mysqli_query($link,$queryCom) or die (mysqli_error($link));

	if(!empty($queryCom)){

		header('location:login.php?success');
	}
	else{
		echo "error in query execution";
	}
	/*if($sql){
		header('location:index.php?success');
	}else{
		echo"<script> alert('<?php echo $mysqli_error($link); ?>')</script>";
		
	}*/
	
						   
		

	//exit();

?>