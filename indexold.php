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
	<form action="convert.php" method="post" enctype="multipart/form-data">
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
		<H3>Select a container type</H3>
	</div></div></div>
	<div class="row">
	<div class="col-sm-4">
		MP4	<input type="radio" name="type" value="mp4" required>
	</div>
	<div class="col-sm-4">
		WEBM <input type="radio" name="type" value="webm" required>
	</div>
	<div class="col-sm-4">
		FLV	<input type="radio" name="type" value="flv" required>
	</div>
	<div class="col-sm-4">
		MKV	<input type="radio" name="type" value="mkv" required>
	</div>
	<div class="col-sm-4">
		AVI	<input type="radio" name="type" value="avi" required>
	</div>
	<div class="col-sm-4">
		MPEG <input type="radio" name="type" value="mpeg" required>
	</div>
	<div class="col-sm-4">
		MP3 <input type="radio" name="type" value="mp3" required>
	</div>
	<br>
</div>
	<div class="col-sm-4">
		<input class="btn btn-primary" type="submit" name="submit">
	</div>

	<pre>	
			*Still in Beta 
	     video size limit is 1 gig 
			v0.2
					</pre>
</div>	</form>
</body>
</html>