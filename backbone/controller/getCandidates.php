<?php

require_once($_SERVER["DOCUMENT_ROOT"]."/siwesportal/constant/config.php");

require_once(ROOT_PATH . 'core/init.php');

if (isset($_POST["referralCode"])) {
    $id = $_POST["referralCode"]; 
}

// $id = "F/hd/17/3210005";

  $variable = select_matric3('studentlogin', $id);


  // $variable = select_all_reverse('logbook');
  if ($variable != null) {
 


  // $count = row_count('logbook', $id);

  foreach ($variable as $row) {
    $json[] = [
      "id"                      => $row["id"],
      "matricNo"         	      => $row["matricNo"],
      "siwesPlacement"          => $row["siwesPlacement"],
      "siwesPlacementAddress"   => $row["siwesPlacementAddress"],
      "tokenId"                 => urlencode($row["tokenId"]),
      "referralCode"                 => urlencode($row["referralCode"]),
    ];
  }

  $data['data'] = $json;




// $result =  mysqli_query($mysqli,$sqlTotal);


// $data['count'] = $count;


echo json_encode($data);


}else{
  $json = 'zero';
  $data['data'] = $json;
  echo json_encode($data);
}

?>