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
            <li><a href="index.php">Home</a></li>
            <li class="active"><a href="download.php">Download</a></li>
	     <li><a href="howto.html">How to</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <br>
	<h5>Displayed as 'Recent to Old'</h5>
	<table class="table table-condensed table-hover">
	<tr>
	<th>#</th>
	<th>Filname</th>
	<th>Size</th>
	<th>Download</th>
	</tr>
        <?php
	$video = glob("video/*");
	rsort($video);
	$s = 1;
	for($i=0;$i < sizeof($video);$i++)
	{
	echo "<tr>";
	echo "<td>".$s."</td>"; 
	echo "<td>".basename($video[$i])."</td>";
	echo "<td>".round(filesize($video[$i])/(1024*1024),2)."MB</td>";
        echo "<td><a href=".$video[$i]." download><button type='button' class='btn btn-primary'>Download</button></a><br>";
	echo "</tr>";
	$s = $s + 1;
	}
	?>
    </body>
</html>
