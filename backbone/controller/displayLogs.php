<?php 

require_once($_SERVER["DOCUMENT_ROOT"]."/siwesportal/constant/config.php");

require_once(ROOT_PATH . 'core/init.php');

if(isset($_GET["name"])){
	$id = $_GET["name"];
}

$output = row_count222('logbook', $id);

 
echo '<div class="card card-stats">
                <div class="card-header card-header-dafault card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-list "></i>
                  </div>
                  <p class="card-category">Logs</p>
                  <h3 class="card-title">'.$output.'</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i> Last 24 Hours
                  </div>
                </div>
              </div>';

?>