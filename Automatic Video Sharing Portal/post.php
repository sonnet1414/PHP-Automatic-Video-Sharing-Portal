<?php 
session_start();
if(isset($_SESSION['username']))
{
	$id=$_SESSION['postid'];
	$conn = mysqli_connect('localhost','root','','avspdatabase');
	$ownername=$_SESSION['username'];
	$details=$_POST['posttext'];
	$time=date('Y-m-d H:i:s');
    $sql = "insert into newsfeed(id,ownername,description,posttime) values('$id','$ownername','$details','$time')";
    if($result= mysqli_query($conn,$sql))
    {
    	header("location:home.php");
    }
}
?>
