<?php
	$file = "./variables/doorstatus.txt";
	if($_POST["password"] == "FamilyAndFriends"){
		file_put_contents($file,$_POST["door"]);
	}
	else
	{
		echo "Password Incorrect";
		echo "<br>";
	}
	
	echo "<a href=http://tktprojects.esy.es/minecraft/homecontrol/v1/cp.html>Back to control panel</a>";
?>