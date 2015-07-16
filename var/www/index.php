<html>
    <head>
    <title>Easy Cam</title>
	<meta charst="utf-8">
	<meta name="viewport" content="width=device - width,initial-scale=1">
	<script  src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
    <body>
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Easy HD-Surveillance Cam</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="download.php">Download</a></li>
	     <li><a href="howto.html">How to</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <br><br><br>
    <div class="container">
	<?php
	$lmachine = $_SERVER['SERVER_ADDR'];
	$rmachine = $_SERVER['REMOTE_ADDR'];
	?>
	<strong>Live stream URL :</strong> rtsp://<?php echo $lmachine;?>:8554/
	<ul><h2>Features</h2>
	<li>24/7 Survelliance</li>
	<li>Night Vision</li>
	<li>Hight Definition </li>
	<li>5MP</li>
	<li>Live Video Streaming</li> 
	<li>Three Days HD Video Backup</li>
	<li>Easy to download/
	<li>Easy to view recorded video</li>
	</ul>
    <small>Your IP Address :<?php echo $rmachine; ?></small>
    </div>
     </body>
</html>
