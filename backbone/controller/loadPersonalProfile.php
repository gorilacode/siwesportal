<?php

require_once($_SERVER["DOCUMENT_ROOT"]."/siwesportal/constant/config.php");

require_once(ROOT_PATH . 'core/init.php');

if (isset($_GET["id"])) {
    $id = $_GET["id"];
}

// echo $id;

  $variable = select_matric2('studentlogin', $id);

  foreach ($variable as $row) {
    $json[] = [
      "id"                	=> $row["id"],
      "firstName"         	=> $row["firstName"],
      "lastName"          	=> $row["lastName"],
      "email"         	  	  => $row["email"],
      "phoneNo"         		  => $row["phoneNo"],
      "matricNo"          => strtoupper($row["matricNo"]),
      "referralCode"         	 => $row["referralCode"],
      "siwesPlacement"         	=> $row["siwesPlacement"],
      "siwesPlacementAddress"          => $row["siwesPlacementAddress"]
    ];
  }

  $data['data'] = $json;




// $result =  mysqli_query($mysqli,$sqlTotal);


// $data['count'] = $count;


echo json_encode($data);




?>