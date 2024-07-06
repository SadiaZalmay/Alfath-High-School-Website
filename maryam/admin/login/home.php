<?php
session_start();
ob_start();
if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
	echo 'You are logged in. <a href = "logout.php"> Logout';
}
else {
	header('Location: index.php');
}
?>