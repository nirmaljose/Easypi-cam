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
	<OBJECT classid="clsid:9BE31822-FDAD-461B-AD51-BE1D1C159921"
     codebase="http://downloads.videolan.org/pub/videolan/vlc/latest/win32/axvlc.cab"
     width="640" height="480" id="vlc" events="True">
   <param name="Src" value="rtsp://<?php echo $lmachine; ?>:8554/" />
   <param name="ShowDisplay" value="True" />
   <param name="AutoLoop" value="False" />
   <param name="AutoPlay" value="True" />
   <embed id="vlcEmb"  type="application/x-google-vlc-plugin" version="VideoLAN.VLCPlugin.2" autoplay="yes" loop="no" width="640" height="480"
     target="rtsp://<?php echo $lmachine; ?>:8554/" ></embed>
</OBJECT>
</body>
</html>   
