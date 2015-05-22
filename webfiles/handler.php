<?php
	$doorFile = "./variables/doorstatus.txt";
	$lightFile = "./variables/lightstatus.txt";
	
	if($_POST["password"] == "<PASSWORD HERE>"){
		file_put_contents($doorFile,$_POST["door"]);
		file_put_contents($lightFile,$_POST["lights"]);
	
	
	}
	else
	{
		echo "Password Incorrect";
		echo "<br>";
	}
	
	
	
	
	echo "<a href=http://<URL HERE>/cp.html>Back to control panel</a>";
?>