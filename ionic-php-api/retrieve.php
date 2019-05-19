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

$sql = "Select fullname, aboutme From firstapp";

$res = mysqli_query($conn, $sql);

if($res){
	while ($row = mysqli_fetch_assoc($res)) {
			$data[] = $row;
	}
	echo json_encode($data);
	
}
else{
	echo 'error result';
}