<?php
require ("db_con.php");

if (isset($_POST['announcments'])) {
	$word=filter_var($_POST['word'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
}
$sqlquery="INSERT INTO 'announcments'('word','time') VALUES('$word',now())";

$sql=mysqli_query($link,$sqlquery)or die(mysqli_error("Error"));

?>