<?php 

require_once($_SERVER["DOCUMENT_ROOT"]."/siwesportal/constant/config.php");

require_once(ROOT_PATH . 'core/init.php');

if(isset($_GET["name"])){
  $id = $_GET["name"];
}

$output = select_all_count34('studentlogin','referralCode', $id);

 
echo '<div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-group"></i>
                  </div>
                  <p class="card-category">My Students</p>
                  <h3 class="card-title">'.$output.'</h3>
                </div>
                <div class="card-footer">
                </div>
              </div>';

?>