<?php

require_once($_SERVER["DOCUMENT_ROOT"]."/siwesportal/constant/config.php");

require_once(ROOT_PATH . 'core/init.php');

$path = "htdocs/siwesportal/";

if ($_FILES["img_file2"]["name"] != '') {
	$test = explode(".", $_FILES["img_file2"]["name"]);
	$extension = end($test);
	$name = $_FILES["img_file2"]["name"];
	$location = ROOT_PATH ."uploads/images/".$name;
	move_uploaded_file($_FILES["img_file2"]["tmp_name"], $location);
	echo "<img src='".BASE_URL."uploads/images/".$name."' height='150' width='300' class='img-thumbnail'>";
}

?>