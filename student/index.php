<?php 
$pageTitle="Dashboard";

require_once($_SERVER["DOCUMENT_ROOT"]."/siwesportal/constant/config.php");

require_once(ROOT_PATH . 'core/init.php');

include(ROOT_PATH . 'inc/studentDetails.php');

include(ROOT_PATH . 'inc/header.php');

include(ROOT_PATH. 'inc/navbar.php');
?>

    
   
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <input type="hidden" name="matricNo" id="matricNo" value="<?php echo $MatricNo; ?>">
            <!-- <input type="" name=""> -->
           
            <div id="displayLogs" class="col-lg-4 col-md-6 col-sm-6">

            </div>
            <div id="displaySeen" class="col-lg-4 col-md-6 col-sm-6">
              
            </div>
            <div id="displayUnseen" class="col-lg-4 col-md-6 col-sm-6">
              
          </div>
          <div class="row">
            
          </div>
         
        </div>
      </div>
    </div>

      <script type="text/javascript" src="<?php echo BASE_URL; ?>backbone/viewJs/loadTubes.js" ></script>
<?php 

include(ROOT_PATH . 'inc/footer.php');
?>