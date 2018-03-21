<?php 
session_start();
if(isset($_SESSION['username']))
{
	echo $_SESSION['uploadid'];
	if(isset($_FILES['imagefile']))
	{
		$name = $_FILES['imagefile']['name'];
	    $type = explode('.', $name);
	    $type = end($type);
	    if($type == 'jpg' || $type == 'jpeg' || $type == 'gif' || $type == 'png' || $type == 'tiff' || $type == 'bmp')
	    {
	    	$conn = mysqli_connect('localhost','root','','avspdatabase');
	    	$id = $_SESSION['uploadid'];
	    	$sql = "insert into images(id,extension,url) values('$id','$type','upload/image/')";
	    	if(mysqli_query($conn,$sql))
	    	{
	    		$url = 'upload/image/'.$id.'.'.$type;
	    		$tmp = $_FILES['imagefile']['tmp_name'];
	    		move_uploaded_file($tmp,$url);
	    		header("location:uploadvideo.php");
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
<form action="uploadimage.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="imagefile" id="imagefile">
    <input type="submit" name="submit" value="Next">
</form>

</body>
</html>    	    	