
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
    <link rel="stylesheet" href="header.css">
</head>
<body>

    <div id="fixedheader">
        <div class="navbar0">
        <img src="photo/homeicon.png">  
        </div>
        <div class="navbar1">
        <ul>
        <li><a href="home.php">HOME</a></li>
        <li><a href="imageview.php">View</a></li>
        <li><a href="myvideos.php">Browse Videos</a></li>
        <li><a href="postvideo.php">post</a></li>
        <li><a href="shownewsfeed.php">Newsfeed</a></li>
        </ul>
        </div>
        <div class="navbarsearch">
        <?php include('searchbar.php');?>
            
        </div>
        
        <div class="navbar2">
        <img src="photo/uploadicon.png"><a href="upload.php">Upload</a>	
        </div>
    </div>
    
    <div class="sidebar">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="#news">Videos</a></li>
            <li><a href="#contact">Audios</a></li>
            <li><a href="#about">My Channel</a></li>
            <li><a href="#about">Trending</a></li>
            <li><a href="#about">Subscription</a></li>
            <li><a href="logout.php">logout</a></li>
        </ul>
    </div>
    <div style="margin-top: 70px;"></div>

</body>
</html>