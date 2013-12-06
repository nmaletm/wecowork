<?php

$type = $_REQUEST['type'];
$id = $_REQUEST['id'];
$default = $_REQUEST['default'];

$path = $type."/".$id.".png";

if(!file_exists($path)){
	$path =  $type."/".$default.".png";
}

include $path;

$filetype = mime_content_type($path);
header('Content-Type: image/png');

?>