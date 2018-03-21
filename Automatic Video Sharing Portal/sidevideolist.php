<!DOCTYPE html>
<html>
<head>
	<title>image view</title>
	<style type="text/css">
		.box{
			float:left;
			padding: 5px;
		}
		
	</style>
</head>
<body>
<?php
$conn = mysqli_connect('localhost','root','','avspdatabase');
$query = "select *from fileinfo";
if($result= mysqli_query($conn,$query)){
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_array($result)) {
			$id=$row['id'];
			$ownername= $row['ownername'];
			$filename= $row['filename'];
			$category= $row['category'];
			$subcategory= $row['subcategory'];
		}
	}

}

?>

<?php 
$sql = "select *from images";
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