<?php

require_once($_SERVER["DOCUMENT_ROOT"]."/siwesportal/constant/config.php");

require_once(ROOT_PATH . 'core/init.php');

if (isset($_GET["id"])) {
    $id = $_GET["id"]; 
}

// $id = "F/hd/17/3210005";

  $variable = select_des('logbook', 'diagram', $id);

  echo '<img src="../../uploads/images/'.$variable.'" height="520" width="800" class="img-thumbnail">';



?>