<!doctype html>
<html>
<head>
	
	<title></title>
  <script type="text/javascript" src="onepagescroll.js"></script>
  <link href='onepage-scroll.css' rel='stylesheet' type='text/css'>
  <style>
    html {
      height: 100%;
    }
    body {
      background: #E2E4E7;
      padding: 0;
      text-align: center;
      font-family: 'open sans';
      position: relative;
      margin: 0;
      height: 100%;
      -webkit-font-smoothing: antialiased;
    }
    
    .wrapper {
    	height: 100% !important;
    	height: 100%;
    	margin: 0 auto; 
    	overflow: hidden;
    }

    .main {
      float: left;
      width: 100%;
      margin: 0 auto;
    }
    
    .main section  {
      overflow: hidden;
    }
    
    .main section > img {
      position: absolute;
      max-width: 100%;
      z-index: 1;
    }
    
    .main section.page1 {
      background: #555557 url('photo/page2.jpg') no-repeat center -150px ;
    }

    .main section.page2 {
      background: #555557 url('photo/page3.jpg') no-repeat center -150px ;
    }
    .main section.page2 > img {
      position: absolute;
      top: -300px;
      left: 50%;
      margin-left: -1095px;
    }
    .viewing-page-2 .back{
      background: rgba(0, 0, 0, 0.25);
      color: #FFF;
      }
    .main section.page3 {
      background: #555557 url('photo/page3.jpg') no-repeat center -150px ;
    }
    body.disabled-onepage-scroll .onepage-wrapper  section {
      min-height: 100%;
      height: auto;
    }
    
    
    body.disabled-onepage-scroll .main section.page1 > img {
      position: absolute;
      width: 80%;
      left: 10%;
    }
    
    body.disabled-onepage-scroll .main section > img {
      position: relative;
      max-width: 80%;
      bottom: 0;
    }
    #text{
      text-align: center;
      font-size: 60px;
      color: white;
      margin-top: 160px;
      
    }
  .button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 300px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
a:link, a:visited {
    color: white;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}


a:hover, a:active {
}
	</style>
</head>
<body>
    
    <div class="wrapper">	
	  <div class="main">
	    
      <section class="page1">
      <div id="text">Feel Free to Share</div>
      <div id="note"><a href="registration.php"><button class="button" style="vertical-align:middle"><span>Get Started</span></button></a></div>
      <div id="note"><a href="login.php"><button class="button" style="vertical-align:middle"><span>Log In</span></button></a></div>
      </section>
	    
	    <section class="page2">
      <?php include('registration.php');?>
      </section>
	    
	    <section class="page3">
      <?php include('login.php');?>
      </section>
      
    </div>
  </div>
  <script>
	 amit(".main", {
     sectionContainer: "section",
     loop: true,
     responsiveFallback: false
   });
		
	</script>
</body>
</html>