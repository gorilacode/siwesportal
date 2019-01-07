<?php 

require_once($_SERVER["DOCUMENT_ROOT"]."/siwesportal/constant/config.php");

require_once(ROOT_PATH . 'core/init.php');



$output = select_all_count('studentlogin');

 
echo '<div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-group"></i>
                  </div>
                  <p class="card-category">Siwes Students</p>
                  <h3 class="card-title">'.$output.'</h3>
                </div>
                <div class="card-footer">
                </div>
              </div>';

?>