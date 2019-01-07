<?php 

require_once($_SERVER["DOCUMENT_ROOT"]."/siwesportal/constant/config.php");

require_once(ROOT_PATH . 'core/init.php');



$output = select_all_count('report');

 
echo '<div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-exclamation-triangle"></i>
                  </div>
                  <p class="card-category">Reports</p>
                  <h3 class="card-title">'.$output.'</h3>
                </div>
                <div class="card-footer">
                </div>
              </div>';

?>