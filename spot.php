<?php

ob_start();
require 'config/config.php';
include'functions.php';
$pokemon = $_POST['pokemon'];
$cp = $_POST['cp'];
$hour = $_POST['hour'];
$min = $_POST['min'];
$ampm = $_POST['ampm'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];

$sql = "INSERT INTO spots (pokemon, cp, hour, min, ampm, latitude, longitude) VALUES ('$pokemon','$cp','$hour','$min','$ampm','$latitude','$longitude')";
	if(!mysqli_query($conn,$sql))
		{
			echo 'Not Inserted';
		}
			else
			{
				echo 'Inserted';
			}	

	header('Location:index.php');
	
?>
