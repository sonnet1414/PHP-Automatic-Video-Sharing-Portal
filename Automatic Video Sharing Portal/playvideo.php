<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$id=$_GET['video'];
$conn = mysqli_connect('localhost','root','','avspdatabase');
$sql = "select * from videos where id='$id'";
if($result= mysqli_query($conn,$sql))
{
	if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_array($result))
		{
			$id = $row['id'];
			$extension = $row['extension'];
			$url = $row['url'];
			$path=$url.$id.'.'.$extension;
			$ogg=$url.$id.'.ogg';
		}
		?>
			<video width="100%" controls>
				<source src="<?php echo $path;?>" type="video/mp4">
				<source src="<?php echo $ogg;?>" type="video/ogg">
			</video>
			<?php
		
	}
}
?>

</body>
</html>