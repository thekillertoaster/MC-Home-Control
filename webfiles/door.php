<?php
	$file = "./variables/doorstatus.txt";
	if($_POST["password"] == "<PASSWORD HERE>"){
		file_put_contents($file,$_POST["door"]);
	}
	else
	{
		echo "Password Incorrect";
		echo "<br>";
	}
	
	echo "<a href=http://<URL HERE>/cp.html>Back to control panel</a>";
?>