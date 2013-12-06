<?php
error_reporting(E_ALL);

$type = $_REQUEST['type'];
$id = $_REQUEST['id'];
$default = $_REQUEST['default'];
$filetype = $_REQUEST['filetype'];

$path = $type."/".$id;

if($filetype == "png"){
	header("Content-Type: image/png");
	$path .= ".png";
	$default .= ".png";
}
else if($filetype == "jpg"){
	header("Content-Type: image/jpeg");
	$path .= ".jpg";
	$default .= ".jpg";
}

if(!file_exists($path)){
	$path =  $type."/".$default;
}

header("Content-Length: " .(string)(filesize($path)) );

include $path;


?>