<?php

session_start();

if (isset($_SESSION['Admin_id'])) {
	session_destroy();
	header("location:login");
}else{
	header("location:index");
}


?>