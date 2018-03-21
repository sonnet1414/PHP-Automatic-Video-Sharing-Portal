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
	<title>available video</title>
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
		.news{
			text-align: center;
			font-size: 40px;
			padding: 10px;
			margin-top: 10px;
			color: green;
		}
	</style>
</head>
<body>
<?php include('header.php');?>
<div class="news">select videos to post in Newsfeed</div>
<?php 
$user=$_SESSION['username'];
$conn = mysqli_connect('localhost','root','','avspdatabase');
$sql = "select distinct images.id,images.extension,images.url,fileinfo.filename from fileinfo,images where images.id=fileinfo.id";
if($result= mysqli_query($conn,$sql))
{
	if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_array($result))
		{
			$id = $row['id'];
			$extension = $row['extension'];
			$url = $row['url'];
			$filename= $row['filename'];
			$path=$url.$id.'.'.$extension;
			?>
			<div class="box">
				<table id="gridview">
				<tr>
					<td><a href="postnews.php?video=<?php echo $id;?>"><img src="<?php echo $path;?>" alt="photo" height="100" width="150"></a></td>
				</tr>
				<tr>
					<td><?php echo $filename;?></td>
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