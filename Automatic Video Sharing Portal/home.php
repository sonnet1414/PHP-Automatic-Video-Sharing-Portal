<?php 
session_start();
if(!isset($_SESSION['username']))
{
	header('location:mainpage.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<style type="text/css">
		body{
			background-image: url("photo/upload_successful.jpg");
		}
	</style>
</head>
<body>
<?php include('header.php') ?>
<div style="margin-top: 70px;"></div>
</body>
</html>