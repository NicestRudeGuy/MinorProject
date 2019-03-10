<?php

interface Base { 

public function convertMp4();
public function convertWebm();
public function convertFlv();
public function convertMkv();
public function convertMpeg();
public function convertMp3();
public function convertAvi();
}


class convertVideo implements Base
	{
public function convertMp4(){
if (isset($_POST['submit'])) {
	$currentPath=$_FILES['video']['tmp_name'];
	exec("ffmpeg/ffmpeg.exe");
	$newFile = md5(time());
	exec("ffmpeg -i ".$currentPath." -codec copy ./output/".$newFile.".mp4");
	echo "<h2 style='color:white'>Programming is Fun!</h2>";
	echo "<h2 style='color:white'>Converted file  into mp4</h2>";
	echo"<br>";
	echo'<h2><a href="output/'.$newFile.'.mp4" download>Download Now</a></h2>';

}
}
public function convertWebm(){
if (isset($_POST['submit'])) {
	$currentPath=$_FILES['video']['tmp_name'];
	exec("ffmpeg/ffmpeg.exe");
	$newFile = md5(time());
	exec("ffmpeg -i ".$currentPath." -codec copy ./output/".$newFile.".webm");
	echo "<h2 style='color:white'>Programming is Fun!</h2>";
	echo "<h2 style='color:white'>Converted file  into webm</h2>";
	echo"<br>";
	echo'<h2><a href="output/'.$newFile.'.webm" download>Download Now</a></h2>';
}
}
public function convertFlv(){
if (isset($_POST['submit'])) {
	$currentPath=$_FILES['video']['tmp_name'];
	exec("ffmpeg/ffmpeg.exe");
	$newFile = md5(time());
	exec("ffmpeg -i ".$currentPath." -codec copy ./output/".$newFile.".flv");
	echo "<h2 style='color:white'>Programming is Fun!</h2>";
	echo "<h2 style='color:white'>Converted file into flv</h2> ";
	echo"<br>";
	echo'<h2><a href="output/'.$newFile.'.flv" download>Download Now</a></h2>';
}
}
public function convertMkv(){
if (isset($_POST['submit'])) {
	$currentPath=$_FILES['video']['tmp_name'];
	exec("ffmpeg/ffmpeg.exe");
	$newFile = md5(time());
	exec("ffmpeg -i ".$currentPath." -codec copy ./output/".$newFile.".mkv");
	echo "<h2 style='color:white'>Programming is Fun!</h2>";
	echo "<h2 style='color:white'>Converted file into mkv</h2>";
	echo"<br>";
	echo'<h2><a href="output/'.$newFile.'.mkv" download>Download Now</a></h2>';
}
}
public function convertMpeg(){
if (isset($_POST['submit'])) {
	$currentPath=$_FILES['video']['tmp_name'];
	exec("ffmpeg/ffmpeg.exe");
	
	$newFile = md5(time());
	exec("ffmpeg -i ".$currentPath." -codec copy ./output/".$newFile.".mpeg");
	echo "<h2 style='color:white'>Programming is Fun!</h2>";
	echo "<h2 style='color:white'>Converted file into mpeg</h2>";
	echo"<br>";
echo'<h2><a href="output/'.$newFile.'.mpeg" download>Download Now</a><h2>';
}
}
public function convertMp3(){
if (isset($_POST['submit'])) {
	$currentPath=$_FILES['video']['tmp_name'];
	exec("ffmpeg/ffmpeg.exe");
	$newFile = md5(time());
	exec("ffmpeg -i ".$currentPath." ./output/".$newFile.".mp3");
	echo "<h2 style='color:white'>Programming is Fun!</h2>";
	echo "<h2 style='color:white'>Converted file into mp3</h2>";
	echo"<br>";
	echo'<h2><a href="output/'.$newFile.'.mp3" download>Download Now</a></h2>';
}
}
public function convertAvi(){
if (isset($_POST['submit'])) {
	$currentPath=$_FILES['video']['tmp_name'];
	exec("ffmpeg/ffmpeg.exe");
	$newFile = md5(time());
	exec("ffmpeg -i ".$currentPath." -codec copy ./output/".$newFile.".avi");
	echo "<h2 style='color:white'>Programming is Fun!</h2>";
	echo "<h2 style='color:white'>Converted file into avi</h2>";
	echo"<br>";
	echo'<h2><a href="output/'.$newFile.'.avi" download>Download Now</a></h2>';

}
}
};
?>