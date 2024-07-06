<?php
session_start();
 ob_start();
 echo $scriptname = $_SERVER['HTTP_SCRIPT'];
 echo $http_referer = $_SERVER['HTTP_REFERER'];
	 
    ?>