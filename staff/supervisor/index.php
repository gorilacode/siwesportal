<?php 
$pageTitle="Dashboard";

require_once($_SERVER["DOCUMENT_ROOT"]."/siwesportal/constant/config.php");

require_once(ROOT_PATH . 'core/init.php');

include(ROOT_PATH . 'inc/staffDetails.php');

include(ROOT_PATH . 'inc/header.php');

include(ROOT_PATH. 'inc/supervisorNavBar.php');
?>

   
      <!-- End Navbar -->
      <input type="hidden" name="getId" id="getId" value="<?php echo $id ?>">
      <input type="hidden" name="key" id="key" value="<?php echo $referralCode ?>">
      <div class="content">
        <div class="container-fluid">
          <div class="row">
           
            <div id="displayStudent2" class="col-lg-4 col-md-6 col-sm-6">
              
            </div>
            
            <div id="displayReport2" class="col-lg-4 col-md-6 col-sm-6">

            </div>
          </div>
          <div class="row">
            
          </div>
         
        </div>
      </div>

      <script type="text/javascript" src="<?php echo BASE_URL; ?>backbone/viewJs/loadName.js" ></script>
<?php 


include(ROOT_PATH . 'inc/footer.php');
?>