<?php

require_once($_SERVER["DOCUMENT_ROOT"]."/siwesportal/constant/config.php");

require_once(ROOT_PATH . 'core/init.php');

$path = "htdocs/siwesportal/";

if ($_FILES["pdf_file"]["name"] != '') {
	$test = explode(".", $_FILES["pdf_file"]["name"]);
	$extension = end($test);
	$name = $_FILES["pdf_file"]["name"];
	$location = ROOT_PATH ."uploads/diagrams/".$name;
	move_uploaded_file($_FILES["pdf_file"]["tmp_name"], $location);
}

?>