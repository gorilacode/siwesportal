<?php

require_once($_SERVER["DOCUMENT_ROOT"]."/siwesportal/constant/config.php");

require_once(ROOT_PATH . 'core/init.php');

if (isset($_POST["getToken"])&&isset($_POST["getCode"])) {
    $id = $_POST["getToken"];
    $key = $_POST["getCode"]; 
}

// $id = "F/hd/17/3210005";

  $variable = select_matric4('logbook', $id, $key);


  // $variable = select_all_reverse('logbook');
  if ($variable != null) {
 


  $count = row_count22('logbook', $id, $key);

  foreach ($variable as $row) {
    $json[] = [
      "id"            => $row["id"],
      "date"         	=> $row["date"],
      "activity"      => $row["activities"],
      "diagram"       => $row["diagram"]
    ];
  }

  $data['data'] = $json;




// $result =  mysqli_query($mysqli,$sqlTotal);


$data['count'] = $count;


echo json_encode($data);


}else{
  $json = 'zero';
  $data['data'] = $json;
  echo json_encode($data);
}

?>