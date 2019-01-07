<?php 

require_once($_SERVER["DOCUMENT_ROOT"]."/siwesportal/constant/config.php");

require_once(ROOT_PATH . 'core/init.php');

if(isset($_GET["name"])){
	$id = $_GET["name"];
}

$values = displayName('userstable', $id);

$output = '';

foreach ($values as $row) {

 $output .='<a href="" class="simple-text logo-normal">'.$row['firstName'].' '.$row['lastName'].'</a>';
} 
echo $output;

?>

        