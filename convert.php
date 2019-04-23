<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>File Converted</title>
  
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  
<style type="text/css" media="screen">
  


*{
 margin: 0;
 padding: 0;
}

html{
    width: 100vw;
    height: 100vh;
}

body{
 background-repeat: no-repeat;
 background-image:url(bg/x1.gif);
 background-size: cover;
 width: 100%;
 height: 100%;
 letter-spacing: 0.02em;
  font-weight: 400;
}

.blurred-box{
  position: relative;
  width: 500px;
  height: 350px;
  top: calc(50% - 175px);
  left: calc(50% - 250px);
   right: : calc(50% - 15px);
  bottom: calc(50% - 250px);
  background: inherit;
  border-radius: 20px;
  overflow: hidden;

}

.blurred-box:after{
 content: '';
 width: 500px;
 height: 300px;
 background: inherit; 
 position: absolute;
 left: -25px;
 left position
 right: 0;
 top: -25px;  
 top position 
 bottom: 0;
 box-shadow: inset 0 0 0 200px rgba(255,255,255,0.05);
 filter: blur(10px);
}


/* Form which you dont need */
.user-login-box{
  position: relative;
  margin-top: 50px;
  text-align: center;
  z-index: 1;
}
.user-login-box > *{
  display: inline-block;
  width: 200px;
}


</style>
</head>
<body >
<div >

<div class="blurred-box" >
  <div class="user-login-box">
    <?php 
require_once("funs.php");
$obj = new convertVideo;

$vidType = $_POST["type"];
if($vidType=="mp3"){
	goto a;
}
else{
$vidSize = $_POST["size"];
}
$qty="";

if (empty($_POST["type"]) && empty($_POST["size"])){
    echo 'Select a Container type and quality first';
}
if(isset($vidType) && isset($vidSize) &&  $_POST["submit"])
{ 

if($vidSize=="240")
		$qty="352x240";
	else if($vidSize=="360")
		$qty="480x360";
	else if($vidSize=="480")
		$qty="858x480";
	else if($qty=="540")
		$qty="960x540";
	else if($vidSize=="720")
		$qty="1280x720";
	else if($vidSize=="1080")
		$qty="1920x1080";
	

	if($vidType == "mp4")
	{
		$obj->advConvert("mp4",$qty);
	}
	elseif($vidType == "mpeg")
	{
		$obj->advConvert("mpeg",$qty);
	}
	elseif($vidType == "mkv")
	{
		$obj->advConvert("mkv",$qty);
	}
	elseif($vidType == "avi")
	{
		$obj->advConvert("avi",$qty);
	}
	elseif($vidType == "flv")
	{
		$obj->advConvert("flv",$qty);
	}
	elseif($vidType == "webm")
	{
		$obj->advConvert("webm",$qty);
	}
	elseif($vidType == "mp3")
	{
		a: 
		$obj->convMp3();
	}
	else
	{		
		debug_print_backtrace();
		echo " error";
	}
}
?>
  </div>
</div>
</body>
</html>
