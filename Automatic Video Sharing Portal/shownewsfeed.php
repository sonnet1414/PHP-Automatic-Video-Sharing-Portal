
<!DOCTYPE html>
<html>
<head>
	<title>Newsfeed</title>
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
<?php 
$conn = mysqli_connect('localhost','root','','avspdatabase');
$sql = "select distinct images.id,images.extension,images.url,fileinfo.filename,newsfeed.ownername,newsfeed.description from fileinfo,images,newsfeed where newsfeed.id=images.id and newsfeed.id=fileinfo.id GROUP BY category order by posttime ASC";
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
			$ownername=$row['ownername'];
			$description=$row['description'];
			$path=$url.$id.'.'.$extension;
			?>
			<div class="box">
				<table id="gridview">
				<tr>
					<td>File Shared By-<?php echo $ownername;?></td>
				</tr>
				<tr>
					<td><?php echo $description;?></td>
				</tr>
				<tr>
					<td><a href="videodisplay.php?video=<?php echo $id;?>"><img src="<?php echo $path;?>" alt="photo" height="500" width="500"></a></td>
				</tr>
				<tr>
					<td><?php echo $filename;?></td>
				</tr>
			    </table>
			</div>
			<?php
			echo "<br/>";
		}
		
	}
}
?>

</body>
</html>