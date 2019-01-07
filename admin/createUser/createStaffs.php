<?php

$pageTitle="Create Staff Account";

require_once($_SERVER["DOCUMENT_ROOT"]."/siwesportal/constant/config.php");

require_once(ROOT_PATH . 'core/init.php');

include(ROOT_PATH . 'inc/staffDetails.php');

include(ROOT_PATH . 'inc/header.php');

include(ROOT_PATH. 'inc/adminNavBar.php');


?>
  
    
 <!-- End Navbar -->
      <!-- <input type="hidden" name="getId" id="getId" value="<?php echo $id ?>"> -->
      <div  class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card card1">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Staff Registration Form</h4>
                  <p class="card-category">Complete the Form</p>
                </div>
                
                <div  class="card-body">
                  <form id="createUser" class="profileForm">
                    <!-- <div id="contents">
                      
                    </div> -->
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Firstname</label>
                          <input type="text" id="firstName" name="firstName" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Lastname</label>
                          <input type="text" id="lastName" name="lastName" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Username</label>
                          <input type="text" id="username" name="username" class="form-control">
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
                          <label class="bmd-label-floating">Staff Role</label>
                          <select class="form-control" id="role" name="role">
                            <option value=""> ~ Select Role ~ </option>
                            <option value="3"> Supervisor </option>
                            <option value="2"> Course Adviser </option>
                          </select>
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

    <script type="text/javascript" src="<?php echo BASE_URL; ?>backbone/viewJs/registerStaff.js" ></script>
<?php 

include(ROOT_PATH . 'inc/footer.php');
?>