<?php

require_once($_SERVER["DOCUMENT_ROOT"]."/siwesportal/constant/config.php");

require_once(ROOT_PATH . 'core/init.php');

if (isset($_POST["matricNo"])) {
    $id = $_POST["matricNo"]; 
}

// $id = "F/hd/17/3210005";

  $variable = select_matric('logbook', $id);


  // $variable = select_all_reverse('logbook');
  if ($variable != null) {
 


  $count = row_count('logbook', $id);

  foreach ($variable as $row) {
    $json[] = [
      "id"            => $row["id"],
      "date"         	=> $row["date"],
      "activity"      => $row["activities"],
      "diagram"       => $row["diagram"],
      "status"        => $row["status"],
      "remark"        => $row["remark"],
      "comment"       => $row["comment"]
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