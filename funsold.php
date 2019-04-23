<?php

interface Base { 

public function convertMp4();
public function convertWebm();
public function convertFlv();
public function convertMkv();
public function convertMpeg();
public function convertMp3();
public function convertAvi();
/*public function getQuality();
public function setQuality();*/
}


class convertVideo implements Base
	{
public function convertMp4(){
if (isset($_POST['submit'])) {
	$currentPath=$_FILES['video']['tmp_name'];
	exec("ffmpeg/ffmpeg.exe");
	$newFile = md5(time());
	exec("ffmpeg -i ".$currentPath." -codec copy ./output/".$newFile.".mp4");
	echo "<i class='fa fa-play-circle' style='font-size:150px;color:blue;'></i><h3 style='color:white;text-align:justify;'>File Converted  into mp4 <br>Click the link to download</h3>";
	echo"<br>";
	echo'<h2><a class="btn btn-success" href="output/'.$newFile.'.mp4" download><i class="fa fa-download"></i>&nbsp;Download Now</a></h2>';
	echo'<h2><a class="btn btn-primary" href="index.php"><i class="fa fa-file-movie-o"></i>&nbsp;Convert Another</a></h2>';


}
}
public function convertWebm(){
if (isset($_POST['submit'])) {
	$currentPath=$_FILES['video']['tmp_name'];
	exec("ffmpeg/ffmpeg.exe");
	$newFile = md5(time());
	exec("ffmpeg -i ".$currentPath." -codec copy ./output/".$newFile.".webm");
	echo "<i class='fa fa-play-circle' style='font-size:150px;color:blue;'></i><h3 style='color:white;text-align:justify;'>File Converted  into mp4 <br>Click the link to download</h3>";
	echo"<br>";
	echo'<h2><a class="btn btn-success" href="output/'.$newFile.'.webm" download><i class="fa fa-download"></i>&nbsp;Download Now</a></h2>';
	echo'<h2><a class="btn btn-primary" href="index.php"><i class="fa fa-file-movie-o"></i>&nbsp;Convert Another</a></h2>';

}
}
public function convertFlv(){
if (isset($_POST['submit'])) {
	$currentPath=$_FILES['video']['tmp_name'];
	exec("ffmpeg/ffmpeg.exe");
	$newFile = md5(time());
	exec("ffmpeg -i ".$currentPath." -codec copy ./output/".$newFile.".flv");
	echo "<i class='fa fa-play-circle' style='font-size:150px;color:blue;'></i><h3 style='color:white;text-align:justify;'>File Converted  into flv <br>Click the link to download</h3>";
	echo"<br>";
	echo'<h2><a class="btn btn-success" href="output/'.$newFile.'.flv" download><i class="fa fa-download"></i>&nbsp;Download Now</a></h2>';
	echo'<h2><a class="btn btn-primary" href="index.php"><i class="fa fa-file-movie-o"></i>&nbsp;Convert Another</a></h2>';
}
}
public function convertMkv(){
if (isset($_POST['submit'])) {
	$currentPath=$_FILES['video']['tmp_name'];
	exec("ffmpeg/ffmpeg.exe");
	$newFile = md5(time());
	exec("ffmpeg -i ".$currentPath." -codec copy ./output/".$newFile.".mkv");
	echo "<i class='fa fa-play-circle' style='font-size:150px;color:blue;'></i><h3 style='color:white;text-align:justify;'>File Converted  into mkv <br>Click the link to download</h3>";
	echo"<br>";
	echo'<h2><a class="btn btn-success" href="output/'.$newFile.'.mkv" download><i class="fa fa-download"></i>&nbsp;Download Now</a></h2>';
	echo'<h2><a class="btn btn-primary" href="index.php"><i class="fa fa-file-movie-o"></i>&nbsp;Convert Another</a></h2>';
}
}
public function convertMpeg(){
if (isset($_POST['submit'])) {
	$currentPath=$_FILES['video']['tmp_name'];
	exec("ffmpeg/ffmpeg.exe");
	
	$newFile = md5(time());
	exec("ffmpeg -i ".$currentPath." -codec copy ./output/".$newFile.".mpeg");
	echo "<i class='fa fa-play-circle' style='font-size:150px;color:blue;'></i><h3 style='color:white;text-align:justify;'>File Converted  into mpeg <br>Click the link to download</h3>";
	echo"<br>";
	echo'<h2><a class="btn btn-success" href="output/'.$newFile.'.mpeg" download><i class="fa fa-download"></i>&nbsp;Download Now</a></h2>';
	echo'<h2><a class="btn btn-primary" href="index.php"><i class="fa fa-file-movie-o"></i>&nbsp;Convert Another</a></h2>';

}
}
public function convertMp3(){
if (isset($_POST['submit'])) {
	$currentPath=$_FILES['video']['tmp_name'];
	exec("ffmpeg/ffmpeg.exe");
	$newFile = md5(time());
	exec("ffmpeg -i ".$currentPath." ./output/".$newFile.".mp3");
	echo "<i class='fa fa-play-circle' style='font-size:150px;color:blue;'></i><h3 style='color:white;text-align:justify;'>File Converted  into mp3 <br>Click the link to download</h3>";
	echo"<br>";
	echo'<h2><a class="btn btn-success" href="output/'.$newFile.'.mp3" download><i class="fa fa-download"></i>&nbsp;Download Now</a></h2>';
	echo'<h2><a class="btn btn-primary" href="index.php"><i class="fa fa-file-movie-o"></i>&nbsp;Convert Another</a></h2>';
}
}
public function convertAvi(){
if (isset($_POST['submit'])) {
	$currentPath=$_FILES['video']['tmp_name'];
	exec("ffmpeg/ffmpeg.exe");
	$newFile = md5(time());
	exec("ffmpeg -i ".$currentPath." -codec copy ./output/".$newFile.".avi");
	echo "<i class='fa fa-play-circle' style='font-size:150px;color:blue;'></i><h3 style='color:white;text-align:justify;'>File Converted  into avi <br>Click the link to download</h3>";
	echo"<br>";
	echo'<h2><a class="btn btn-success" href="output/'.$newFile.'.avi" download><i class="fa fa-download"></i>&nbsp;Download Now</a></h2>';
	echo'<h2><a class="btn btn-primary" href="index.php"><i class="fa fa-file-movie-o"></i>&nbsp;Convert Another</a></h2>';
}
}
};
?>