<?php 

require_once($_SERVER["DOCUMENT_ROOT"]."/siwesportal/constant/config.php");

require_once(ROOT_PATH . 'core/init.php');

if(isset($_GET["matricNo"]) && isset($_GET["date"])){
	$matricNo = $_GET["matricNo"];
	$date = $_GET["date"];
}

$values = ExistValues('logbook', $date, $matricNo);

// var_dump($values);

if ($values > 0 ) {
	
	echo 'exist';
}

// $output = '';

// foreach ($values as $row) {

//  $output .='<a href="" class="simple-text logo-normal">'.$row['firstName'].' '.$row['lastName'].'</a>';
// } 
// echo $values;

?>
