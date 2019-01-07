<?php

$pageTitle="Create Student Account";

require_once($_SERVER["DOCUMENT_ROOT"]."/siwesportal/constant/config.php");

require_once(ROOT_PATH . 'core/init.php');

include(ROOT_PATH . 'inc/staffDetails.php');

include(ROOT_PATH . 'inc/header.php');

include(ROOT_PATH. 'inc/adminNavBar.php');

// $details = select_matric("student_profile", $MatricNo);

// var_dump($details);
?>
   
    
      <!-- End Navbar -->
      <!-- <input type="hidden" name="getId" id="getId" value="<?php echo $id ?>"> -->
      <div  class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card card1">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Personal Profile</h4>
                  <p class="card-category">Complete your profile</p>
                </div>
                
                <div  class="card-body">
                  <form id="createUser" class="profileForm">
                    <!-- <div id="contents">
                      
                    </div> -->
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Matric Number</label>
                          <input type="text" id="matricNo" name="matricNo" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Password</label>
                          <input type="password" id="password" name="password" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <!-- <label class="bmd-label-floating">Email Address</label> -->
                          <input type="hidden" id="tokenId" name="tokenId" class="form-control" value="<?php echo Token::generate(); ?>">
                        </div>
                      </div>
                    </div>
                    <!-- <button type="button" id="editButton" class="btn btn-primary pull-right">Edit Profile</button> -->
                    <button type="submit" id="send" class="btn btn-primary pull-right">Create Profile</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    <script type="text/javascript" src="<?php echo BASE_URL; ?>backbone/viewJs/registerStudent.js" ></script>
<?php 

include(ROOT_PATH . 'inc/footer.php');
?>