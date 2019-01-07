<?php 

require_once($_SERVER["DOCUMENT_ROOT"]."/siwesportal/constant/config.php");

require_once(ROOT_PATH . 'core/init.php');

if(isset($_GET["name"])){
	$id = $_GET["name"];
}

$output = row_count_special('logbook', $id, 'unseen');

 
echo '<div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-eye-slash "></i>
                  </div>
                  <p class="card-category">Unseen Activities</p>
                  <h3 class="card-title">'.$output.'</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">update</i> Just Updated
                  </div>
                </div>
              </div>
            </div>';

?>