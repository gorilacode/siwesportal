<?php 
$pageTitle="Dashboard";

require_once($_SERVER["DOCUMENT_ROOT"]."/siwesportal/constant/config.php");

require_once(ROOT_PATH . 'core/init.php');

include(ROOT_PATH . 'inc/staffDetails.php');

include(ROOT_PATH . 'inc/header.php');

include(ROOT_PATH. 'inc/adminNavBar.php');
?>

   
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
           
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-file"></i>
                  </div>
                  <p class="card-category">Logs</p>
                  <h3 class="card-title">20</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i> Last 24 Hours
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <p class="card-category">Awaiting appiontment</p>
                  <h3 class="card-title">5</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">local_offer</i> from supervisor
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-check"></i>
                  </div>
                  <p class="card-category">Remarks</p>
                  <h3 class="card-title">23</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">update</i> Just Updated
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            
          </div>
         
        </div>
      </div>
<?php 


include(ROOT_PATH . 'inc/footer.php');
?>