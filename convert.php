<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>File Converted</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">
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
  width: 250px;
  height: 350px;
  top: calc(50% - 175px);
  left: calc(50% - 125px);
  background: inherit;
  border-radius: 20px;
  overflow: hidden;
}

.blurred-box:after{
 content: '';
 width: 300px;
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
<body>
<div class="blurred-box">
  <div class="user-login-box">
    <?php 
require_once("funs.php");
$obj = new convertVideo;

$vidType = $_POST["type"];

if (empty($_POST["type"])) {
    echo 'Select a Container type first';
}
if(isset($vidType) && $_POST["submit"])
{
	if($vidType == "mp4")
	{
		$obj->convertMp4();
	}
	elseif($vidType == "mpeg")
	{
		$obj->convertMpeg();
	}
	elseif($vidType == "mkv")
	{
		$obj->convertMkv();
	}
	elseif($vidType == "avi")
	{
		$obj->convertAvi();
	}
	elseif($vidType == "flv")
	{
		$obj->convertFlv();
	}
	elseif($vidType == "webm")
	{
		$obj->convertWebm();
	}
	elseif($vidType == "mp3")
	{
		$obj->convertMp3();
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
