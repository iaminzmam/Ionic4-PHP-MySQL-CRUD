<?php

header('Access-Control-Allow-Origin: *');

$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "ionicdb";

$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

if(!$conn){
    die("Connection failed|: ".mysqli_connect_error());
}


$key  = strip_tags($_REQUEST['key']);
$data  = array();

$name = filter_var($_REQUEST['name'], FILTER_SANITIZE_STRING, FILTER_FLAG_ENCODE_LOW);
$about = filter_var($_REQUEST['about'], FILTER_SANITIZE_STRING, FILTER_FLAG_ENCODE_LOW);

try {
	$sql = "insert into firstapp(fullname, aboutme) VALUES('$name', '$about')";
	$res = mysqli_query($conn, $sql);
	if($res){
		echo "successfully database updated";
	}else{
		echo "try again";
	}
	
} catch (Exception $e) {
	echo "sql error some";
}