<?php

$type = $_REQUEST['type'];
$id = $_REQUEST['id'];
$default = $_REQUEST['default'];
$filetype = $_REQUEST['filetype'];

$path = $type."/".$id.".png";

if(!file_exists($path)){
	$path =  $type."/".$default
}

if($filetype == "png"){
	header("Content-Type: image/png");
	$path .= ".png";
}
else if($filetype == "jpg"){
	header("Content-Type: image/jpeg");
	$path .= ".jpg";
}
header("Content-Length: " .(string)(filesize($path)) );


include $path;


?>