<html>
<head>
	<title>Video Converter</title>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		<H3>Enter the Video File</H3>
		<input type="file" name="video">
		<input type="submit" name="submit">
	</form>
</body>
</html>
<?php 

if (isset($_POST['submit'])) {
	$currentPath=$_FILES['video']['tmp_name'];
	exec("ffmpeg/ffmpeg.exe"); 
	exec("ffmpeg -i ".$currentPath."  ./output/video.avi");

	echo "converted just fine";
}

 ?>