<?php 
session_start();
if(isset($_SESSION['username']))
{
	if (isset($_POST['submit'])) {

		$conn = mysqli_connect('localhost','root','','avspdatabase');
		$id = $_SESSION['username'];
		$ownername = $id;
	    $id .= time();
	    $filename = $_POST['filename'];
	    $category = $_POST['category'];
	    $subcategory = $_POST['subcategory'];
	    	    
	    $sql = "insert into fileinfo(id,ownername,filename,category,subcategory) values('$id','$ownername','$filename','$category','$subcategory')";	   
	    if (mysqli_query($conn,$sql)){

	    	$_SESSION['uploadid'] = $id;
	    	header("location:uploadimage.php");
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
	<title>upload</title>
	<script>
    function validateform() {
    var name = document.forms["uploadform"]["filename"].value;
    var category = document.forms["uploadform"]["category"].value;
    var subcategory = document.forms["uploadform"]["subcategory"].value;
    if (name == "" || name == null || category == "" || category == 0 || subcategory == "" || subcategory == 0) {
        alert("All Fields must be filled out");
        return false;
    }
   }
</script>
<style type="text/css">
#namearea{
	width: 500px;
	height: 30px;
}
	
</style>

</head>
<body>
<div style="margin-top: 70px;"></div>
<?php include('header.php');?>
<div>
<form action="upload.php" method="post" name="uploadform" onsubmit="return validateform()">
	<table>
		<tr>
			<td>File Name</td>
			<td><input type="text" name="filename" id="namearea"></td>
		</tr>
		<tr>
		    <td>Select Category</td>
			<td><select name="category"><option></option><option>audio</option><option>video</option></select></td>
		</tr>
		<tr>
			<td>Select Subcategory</td>
			<td><select name="subcategory"><option></option><option>animation</option><option>comedy</option><option>documentary</option><option>documentary</option><option>experimental</option><option>education</option><option>food</option><option>music</option><option>instrumental</option><option>sports</option><option>nature</option></select></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Next"></td>
		</tr>
	</table>
</form>
</div>
</body>
</html>