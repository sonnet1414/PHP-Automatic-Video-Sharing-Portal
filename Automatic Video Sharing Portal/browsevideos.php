
<!DOCTYPE html>
<html>
<head>
	<title>HOME PAGE</title>
	<style type="text/css">
		.list{
			margin-left: 5px;
		}
		form{
			text-align: center;
		}
	</style>
</head>
<body>
<div class="list">
	<form action="myvideos.php" method="post">
		<input type="submit" name="animation" value="Animation">
		<input type="submit" name="comedy" value="Comedy">
		<input type="submit" name="Documentary" value="Documentary">
		<input type="submit" name="Experimental" value="Experimental">
		<input type="submit" name="Education" value="Education">
		<input type="submit" name="food" value="food">
		<input type="submit" name="music" value="music">
		<input type="submit" name="instrumental" value="instrumental">
		<input type="submit" name="sports" value="sports">
		<input type="submit" name="nature" value="nature">
	</form>
</div>
<div style="margin-top: 10px;"></div>
<div>
<?php if(isset($_POST['animation'])){
	include('animation.php');
}
?>
<?php if(isset($_POST['Comedy'])){
	include('comedy.php');
}
?>
<?php if(isset($_POST['Documentary'])){
	include('documentary.php');
}
?>
<?php if(isset($_POST['Experimental'])){
	include('experimental.php');
}
?>
<?php if(isset($_POST['Education'])){
	include('education.php');
}
?>
<?php if(isset($_POST['food'])){
	include('food.php');
}
?>
<?php if(isset($_POST['music'])){
	include('music.php');
}
?>
<?php if(isset($_POST['instrumental'])){
	include('instrumental.php');
}
?>
<?php if(isset($_POST['sports'])){
	include('sports.php');
}
?>
<?php if(isset($_POST['food'])){
	include('nature.php');
}
?>

</div>
</body>
</html>