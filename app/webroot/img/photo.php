<?php

$type = $_REQUEST['type'];
$id = $_REQUEST['id'];
$default = $_REQUEST['default'];

$path = $type."/".$id;

if(!file_exists($path)){
	$$path =  $type."/".$default;
}

include $path;

$filetype = mime_content_type($path);
header('Content-Type: ' . $filetype);

?>