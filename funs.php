<?php

interface Base { 

public function convert($conv);
public function getQuality($qty);
public function advConvert($conv,$qty);
public function sharp();
public function invert();
public function saturate();
public function reverse();
public function r90();
public function bw();

}


class convertVideo implements Base
	{
public function convert($conv){
if (isset($_POST['submit'])) {
	$currentPath=$_FILES['video']['tmp_name'];

	$newFile = md5(time());
	exec("ffmpeg -i ".$currentPath." -codec copy ./output/".$newFile.".$conv");
	
	echo "<i class='fa fa-play-circle' style='font-size:150px;color:blue;'></i><h3 style='color:white;text-align:justify;'>File Converted  into mp4 <br>Click the link to download</h3>";
	echo"<br>";
	echo'<h2><a class="btn btn-success" href="output/'.$newFile.'.'.$conv.'" download><i class="fa fa-download"></i>&nbsp;Download Now</a></h2>';
	echo'<h2><a class="btn btn-primary" href="index.php"><i class="fa fa-file-movie-o"></i>&nbsp;Convert Another</a></h2>';


}
}

public function getQuality($qty){
if(isset($_POST['submit'])){

if($qty=="240")
		$size="352x240";
	else if($qty=="360")
		$size="480x360";
	else if($qty=="480")
		$size="858x480";
	else if($qty=="540")
		$size="960x540";
	else if($qty=="720")
		$size="1280x720";
	else if($qty=="1080")
		$size="1920x1080";
	else
		$size=""; 
	return size;
}
}


public function advConvert($conv,$qty){
	if (isset($_POST['submit'])) {
	$currentPath=$_FILES['video']['tmp_name'];
	$newFile = md5(time());

	exec("ffmpeg -i ".$currentPath." -s $qty ./output/".$newFile.".$conv");


	echo "<i class='fa fa-play-circle' style='font-size:150px;color:blue;'></i><h3 style='color:white;text-align:justify;'>File Converted  into $conv <br>Click the link to download</h3>";
	echo"<br>";
	echo'<h2><a class="btn btn-success" href="output/'.$newFile.'.'.$conv.'" download><i class="fa fa-download"></i>&nbsp;Download Now</a></h2>';
	echo'<h2><a class="btn btn-primary" href="index.php"><i class="fa fa-file-movie-o"></i>&nbsp;Convert Another</a></h2>';


}

	
}


public function convMp3(){
	if (isset($_POST['submit'])) {
	$currentPath=$_FILES['video']['tmp_name'];

	$newFile = md5(time());
	exec("ffmpeg -i ".$currentPath." ./output/".$newFile.".mp3");
	echo "<i class='fa fa-play-circle' style='font-size:150px;color:blue;'></i><h3 style='color:white;text-align:justify;'>File Converted  into mp3 <br>Click the link to download</h3>";
	echo"<br>";
	echo'<h2><a class="btn btn-success" href="output/'.$newFile.'.mp3" download><i class="fa fa-download"></i>&nbsp;Download Now</a></h2>';
	echo'<h2><a class="btn btn-primary" href="index.php"><i class="fa fa-file-movie-o"></i>&nbsp;Convert Another</a></h2>';
}
}

public function sharp(){
if (isset($_POST['submit'])) {
	$currentPath=$_FILES['video']['tmp_name'];
	$newFile = md5(time());


		exec("ffmpeg -i ".$currentPath." -vf unsharp ./output/".$newFile.".mp4");

		echo "<i class='fa fa-play-circle' style='font-size:150px;color:blue;'></i><h3 style='color:white;text-align:justify;'>File Converted  <br>Click the link to download</h3>";
	echo"<br>";
	echo'<h2><a class="btn btn-success" href="output/'.$newFile.'.mp4" download><i class="fa fa-download"></i>&nbsp;Download Now</a></h2>';
	echo'<h2><a class="btn btn-primary" href="index.php"><i class="fa fa-file-movie-o"></i>&nbsp;Convert Another</a></h2>';

}
}

public function invert(){
if (isset($_POST['submit'])) {
	$currentPath=$_FILES['video']['tmp_name'];
	$newFile = md5(time());


		exec("ffmpeg -i ".$currentPath." -vf negate ./output/".$newFile.".mp4");

		echo "<i class='fa fa-play-circle' style='font-size:150px;color:blue;'></i><h3 style='color:white;text-align:justify;'>File Converted  <br>Click the link to download</h3>";
	echo"<br>";
	echo'<h2><a class="btn btn-success" href="output/'.$newFile.'.mp4" download><i class="fa fa-download"></i>&nbsp;Download Now</a></h2>';
	echo'<h2><a class="btn btn-primary" href="index.php"><i class="fa fa-file-movie-o"></i>&nbsp;Convert Another</a></h2>';

}
}


public function saturate(){
if (isset($_POST['submit'])) {
	$currentPath=$_FILES['video']['tmp_name'];
	$newFile = md5(time());


	exec("ffmpeg -i ".$currentPath."  -vf eq=saturation=+2   ./output/".$newFile.".mp4");

	echo "<i class='fa fa-play-circle' style='font-size:150px;color:blue;'></i><h3 style='color:white;text-align:justify;'>File Converted   <br>Click the link to download</h3>";
	echo"<br>";
	echo'<h2><a class="btn btn-success" href="output/'.$newFile.'.mp4" download><i class="fa fa-download"></i>&nbsp;Download Now</a></h2>';
	echo'<h2><a class="btn btn-primary" href="index.php"><i class="fa fa-file-movie-o"></i>&nbsp;Convert Another</a></h2>';

}
}


public function bw(){
if (isset($_POST['submit'])) {
	$currentPath=$_FILES['video']['tmp_name'];
	$newFile = md5(time());


	exec("ffmpeg -i ".$currentPath."  -vf eq=saturation=-1   ./output/".$newFile.".mp4");

	echo "<i class='fa fa-play-circle' style='font-size:150px;color:blue;'></i><h3 style='color:white;text-align:justify;'>File Converted   <br>Click the link to download</h3>";
	echo"<br>";
	echo'<h2><a class="btn btn-success" href="output/'.$newFile.'.mp4" download><i class="fa fa-download"></i>&nbsp;Download Now</a></h2>';
	echo'<h2><a class="btn btn-primary" href="index.php"><i class="fa fa-file-movie-o"></i>&nbsp;Convert Another</a></h2>';


}
}


public function r90(){
if (isset($_POST['submit'])) {
	$currentPath=$_FILES['video']['tmp_name'];
	$newFile = md5(time());


	exec("ffmpeg -i ".$currentPath."  -vf transpose=1   ./output/".$newFile.".mp4");

	echo "<i class='fa fa-play-circle' style='font-size:150px;color:blue;'></i><h3 style='color:white;text-align:justify;'>File Converted  <br>Click the link to download</h3>";
	echo"<br>";
	echo'<h2><a class="btn btn-success" href="output/'.$newFile.'.mp4" download><i class="fa fa-download"></i>&nbsp;Download Now</a></h2>';
	echo'<h2><a class="btn btn-primary" href="index.php"><i class="fa fa-file-movie-o"></i>&nbsp;Convert Another</a></h2>';

}
}

public function reverse(){
if (isset($_POST['submit'])) {
	$currentPath=$_FILES['video']['tmp_name'];

	$newFile = md5(time());
	exec("ffmpeg -i ".$currentPath." -vf reverse ./output/".$newFile.".mp4");
	
	echo "<i class='fa fa-play-circle' style='font-size:150px;color:blue;'></i><h3 style='color:white;text-align:justify;'>File Converted   <br>Click the link to download</h3>";
	echo"<br>";
	echo'<h2><a class="btn btn-success" href="output/'.$newFile.'.mp4" download><i class="fa fa-download"></i>&nbsp;Download Now</a></h2>';
	echo'<h2><a class="btn btn-primary" href="index.php"><i class="fa fa-file-movie-o"></i>&nbsp;Convert Another</a></h2>';


}
}


};
?>