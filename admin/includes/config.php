<?php
	$connect = mysqli_connect('localhost','root','','smdk');
	if($connect == false){
      
		echo"your are not connect to servae";
	}
	echo "your connect to sarver";
?>