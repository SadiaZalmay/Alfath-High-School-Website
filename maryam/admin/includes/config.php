<?php
	$connect = mysqli_connect('localhost','root','','sdk');
	if($connect == false){
      
		echo"your are not connect to servae";
	}
	echo "your connect to sarver";
?>