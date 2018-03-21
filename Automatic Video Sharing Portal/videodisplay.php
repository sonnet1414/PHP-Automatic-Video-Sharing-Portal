<?php
$id=$_GET['video'];
$conn = mysqli_connect('localhost','root','','avspdatabase');
$sql = "select distinct *from fileinfo where id='$id'";
$filename="";
if($result= mysqli_query($conn,$sql))
{
	if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_array($result))
		{
			$id = $row['id'];
			$ownername = $row['ownername'];
			$filename = $row['filename'];
			$category = $row['category'];
			$subcategory = $row['subcategory']; 
		}
		
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">

		div.left{
			margin-left: 15px;
			float:left;
			width: 60%;
			box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, .5);
		}
		div.right{
			float:right;
			width: 23%;
			box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, .5);
		}
		#playtable th{
			font-size: 60px;
		}
		body{
			background-image: url("photo/upload_successful.jpg");
		}

	</style>
</head>
<body>
<?php include('header.php') ?>
<div style="margin-top: 70px;"></div>
<div class="left"><?php include('playvideo.php');?>
	<table id="playtable">
			<th><?php echo $filename; ?></th>
	</table>
</div>
<div class="right"><?php include('sidevideolist.php');?></div>
</body>
</html>