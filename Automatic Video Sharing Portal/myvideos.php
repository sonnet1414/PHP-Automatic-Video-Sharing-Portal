<?php
session_start();
if (!isset($_SESSION['username'])) {
	header('location:mainpage.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>image view</title>
	<style type="text/css">
		#gridview{
			box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, .5);
		}
		.box{
			float:left;
			padding: 5px;
		}
		body{
			background-image: url("photo/upload_successful.jpg");
		}
	</style>
</head>
<body>
<?php include('header.php');?>
<?php include('browsevideos.php');?>
<?php 
$conn = mysqli_connect('localhost','root','','avspdatabase');
$id=$_SESSION['username'];
$sql = "select *from images where id like '$id%'";
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
			?>
			<div class="box">
				<table id="gridview">
				<tr>
					<td><a href="videodisplay.php?video=<?php echo $id;?>"><img src="<?php echo $path;?>" alt="photo" height="100" width="150"></a></td>
				</tr>
				<tr>
					<td></td>
				</tr>
			    </table>
			</div>
			<?php 
		}
		
	}
}
?>

</body>
</html>