<?php 
session_start();
if(isset($_SESSION['username']))
{
	echo $_SESSION['uploadid'];
	if(isset($_FILES['videofile']))
	{
		$name = $_FILES['videofile']['name'];
	    $type = explode('.', $name);
	    $type = end($type);
	    if($type == 'mp4' || $type == 'flv' || $type == 'mkv' || $type == 'avi' || $type == 'mov' || $type == '3gp')
	    {
	    	$conn = mysqli_connect('localhost','root','','avspdatabase');
	    	$id = $_SESSION['uploadid'];
	    	$sql = "insert into videos(id,extension,url) values('$id','$type','upload/video/')";
	    	if(mysqli_query($conn,$sql))
	    	{
	    		$url = 'upload/video/'.$id.'.'.$type;
	    		$tmp = $_FILES['videofile']['tmp_name'];
	    		move_uploaded_file($tmp,$url);
	    		header("location:uploadsuccess.php");
	    	}
	    	else
	    	{
	    		echo "not uploaded <br/>";
	    	}

	    }
	    else
	    {
	    	echo "file format not supported <br/>";
	    }
	}
}
else
{
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>upload image</title>
</head>
<body>
<div style="margin-top: 70px;"></div>
<?php include('header.php');?>
<form action="uploadvideo.php" method="post" enctype="multipart/form-data">
    Select video to upload:
    <input type="file" name="videofile" id="videofile">
    <input type="submit" name="submit" value="upload">
</form>

</body>
</html>    	    	