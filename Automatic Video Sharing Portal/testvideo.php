<?php
if(isset($_POST['submit']))
{
$target_dir = "upload/videos";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>upload image</title>
</head>
<body>
<form action="testvideo.php" method="post" enctype="multipart/form-data">
<label for="file"><span>Filename:</span></label>
<input type="file" name="file" id="file" /> 
<br />
<input type="submit" name="submit" value="Submit" />
</form>

</body>
</html>    	    	