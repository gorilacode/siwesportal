<?php

require_once($_SERVER["DOCUMENT_ROOT"]."/siwesportal/constant/config.php");

require_once(ROOT_PATH . 'core/init.php');



// // $id = "F/hd/17/3210005";

  $variable = select_all('studentlogin');


  // $variable = select_all_reverse('logbook');
  // if ($variable != null) {
 


  // $count = row_count('logbook', $id);

  foreach ($variable as $row) {
    $json[] = [
      "id"                => $row["id"],
      "matricNo"         => $row["matricNo"],
      "siwesPlacement"          => $row["siwesPlacement"],
      "siwesPlacementAddress"      => $row["siwesPlacementAddress"],
      "referralCode"      => $row["referralCode"],
    ];
  }

  $data['data'] = $json;




// $result =  mysqli_query($mysqli,$sqlTotal);


// $data['count'] = $count;


echo json_encode($data);


// }else{matricNo

?>