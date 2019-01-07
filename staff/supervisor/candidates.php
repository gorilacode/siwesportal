<?php

$pageTitle="My Students";

require_once($_SERVER["DOCUMENT_ROOT"]."/siwesportal/constant/config.php");

require_once(ROOT_PATH . 'core/init.php');

include(ROOT_PATH . 'inc/staffDetails.php');

include(ROOT_PATH . 'inc/header.php');

include(ROOT_PATH. 'inc/supervisorNavBar.php');


?>
  
    
      <!-- End Navbar -->
      <input type="hidden" name="getcode" id="getcode" value="<?php echo $referralCode ?>">
      <input type="hidden" name="getId" id="getId" value="<?php echo $id ?>">
      <div class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-header card-header-primary">
              <div class="row">
                <div class="col-md-8">
                  <h4 class="card-title">My Students</h4>
                  <p class="card-category">Your Assigned Students</p>
                </div>
                
              </div>
            </div>
            <div class="card-body">
                <!-- <div class="row">
                  <div class="col-md-12">
                    <button class="btn btn-primary pull-right" data-toggle="modal" data-target=".add-log">Add a Log</button>
                  </div>
                </div> -->
              <table class="table table-hover">
                <thead style="font-weight: bolder; color: black; border-bottom: 3px solid black; " class="text-center">
                  <tr >
                    <th scope="col" hidden>#</th>
                    <th scope="col">Student Matric No</th>
                    <th scope="col">Placement Name</th>
                    <th scope="col">Placement Address</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody id="contents">
                  <!-- <tr>
                    <th scope="ro">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>
                      <span class="badge badge-success"> <i class="fa fa-check "> </i> </span> 
                      <span class="badge badge-warning"> <i class="fa fa-exclamation"> </i> </span>
                      <span class="badge badge-danger"> <i class="fa fa-remove"> </i> </span>
                    </td>
                    <td><button class="btn btn-primary btn-sm"> <i class="fa fa-eye"></i> </button> <button class="btn btn-primary btn-sm"> <i class="fa fa-edit"></i> </button> </td>
                  </tr> -->
                 
                </tbody>
              </table>
              <!-- The No Fill Dislays an Instruction when you have no value on your table -->
              <div id="nofill"></div>
            </div>

          </div>
        </div>
      </div>


      <!--  -->


      <!-- The modal for edit log view is below -->

<script type="text/javascript" src="<?php echo BASE_URL; ?>backbone/viewJs/loadCandidates.js" ></script>
<?php 
include(ROOT_PATH . 'inc/footer.php');
?>
