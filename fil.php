<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Video Converter</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--Bootstrap files-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.4/css/mdb.min.css" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.4/js/mdb.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- -->
<style type="text/css" media="screen">

div{
    text-align: center
}	

#cont{
/*position: absolute;
top : 80px;
left : 450px;*/
margin-left: auto;
margin-right: auto; 
background: white;
max-width: 450px;
border-radius: 16px;
}

body{
	background: url("bg/x1.gif");
}

</style>
</head>
<body>
	<div class="container" id="cont">
	<div class="row" id="rowcont">
	<form action="filcon.php" method="post" enctype="multipart/form-data">
	<div class="col-sm-4">
		<h1 class="text-primary" style="color: #0099CC;font-size: 40px;font-weight:80%;"> Video Converter</h1>
	</div>	<div class=row>
	<div class="col-sm-4">
		<H3>Enter the Video file</H3>
	</div>
	<div class="col-sm-4">
		<input class="bg-primary" data-toggle="tooltip" title="Upload" type="file" name="video" accept="video/*" required  style="border-radius: 5px;">
	</div> 	
		<div class="col-sm-4">
		<H3>Select a filter type</H3>
	</div></div></div>
	<div class="row">
	<div class="col-sm-4">
		Sharp	<input type="radio" name="ftype" value="sharpen" required>
	</div>
	<div class="col-sm-4">
		Invert <input type="radio" name="ftype" value="invert" required>
	</div>
	<div class="col-sm-4">
		Colorfull	<input type="radio" name="ftype" value="saturate" required>
	</div>
	<div class="col-sm-4">
		Reverse	<input type="radio" name="ftype" value="reverse" required>
	</div>
	<div class="col-sm-4">
		B&W<input type="radio" name="ftype" value="bw" required>
	</div>
	<div class="col-sm-4">
		Rotate to 90<sup>o</sup> <input type="radio" name="ftype" value="r90" required>
	</div>
	<br>
</div>
	<div class="col-sm-4">
		<input class="btn btn-primary" type="submit" name="submit">
		<a class="btn btn-secondary" href="index.php"><i class="fa fa-file-movie-o"></i>&nbsp;Home</a>
	</div>

	<pre>	
			*Still in Beta 
	     video size limit is 1 gig 
			v0.3
					</pre>
</div>	</form>
</body>
</html>