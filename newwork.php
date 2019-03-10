<?php 

require_once("funs.php");

$obj = new convertVideo;

$vidType = $_POST["type"];

if (empty($_POST["type"])) {
    echo 'Select a Container type first';
}

if($obj){

	echo "obj created";
}


?>