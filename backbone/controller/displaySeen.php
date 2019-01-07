<?php 

require_once($_SERVER["DOCUMENT_ROOT"]."/siwesportal/constant/config.php");

require_once(ROOT_PATH . 'core/init.php');

if(isset($_GET["name"])){
	$id = $_GET["name"];
}

$output = row_count_special('logbook', $id, 'seen');

 
echo '<div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-eye"></i>
                  </div>
                  <p class="card-category">Seen Activities</p>
                  <h3 class="card-title">'.$output.'</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">local_offer</i> from supervisor
                  </div>
                </div>
              </div>';

?>