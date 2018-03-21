<?php 
session_start();
echo "look";
if (isset($_SESSION['username'])) {
	unset($_SESSION['username']);
	unset($_SESSION['uploadid']);
	session_destroy();
	header("location:mainpage.php");
}
?>
