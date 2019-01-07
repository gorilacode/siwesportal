<?php

$pageTitle="Reports";

require_once($_SERVER["DOCUMENT_ROOT"]."/siwesportal/constant/config.php");

require_once(ROOT_PATH . 'core/init.php');

include(ROOT_PATH . 'inc/staffDetails.php');

include(ROOT_PATH . 'inc/header.php');

include(ROOT_PATH. 'inc/staffNavBar.php');


?>
  
    
      <!-- End Navbar -->
      <input type="hidden" name="getId" id="getId" value="<?php echo $id ?>">
      <!-- <input type="hidden" name="getmatric" id="getmatric" value="<?php echo $MatricNo ?>"> -->
      <div class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-header card-header-primary">
              <div class="row">
                <div class="col-md-8">
                  <h4 class="card-title">Reports</h4>
                  <p class="card-category"></p>
                </div>
                
              </div>
            </div>
            <div class="card-body">
              <table class="table table-hover">
                <thead style="font-weight: bolder; color: black; border-bottom: 3px solid black; " class="text-center">
                  <tr >
                    <th scope="col" hidden>#</th>
                    <th scope="col">Date</th>
                    <th scope="col">Matric No</th>
                    <th scope="col">Referral Code</th>
                    <th scope="col">Action</th>
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
              <div id="nofill"></div>
            </div>

          </div>
        </div>
      </div>


      


      <!-- The Modal for view log views -->

      <div id="view-values" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            
            <div class="modal-header" style="font-weight: bolder; color: black; border-bottom: 3px solid black; ">
              <h4 class="modal-title" id="myModalLabel">View Activity </h4>
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            </div>
            <div class="modal-body">

              <!-- <input type="text" id="pin" name="pin"> -->
              <div class="row">
                <div class="col-md-6">
                    <label class="bmd-label-floating">Date</label>
                    <div id="date"></div>
                </div>
                <div class="col-md-6">
                    <label class="bmd-label-floating"> MatricNo</label>
                    <div id="matricNo"></div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                    <label class="bmd-label-floating"> Issue</label>
                    <div id="issue"></div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                    <label class="bmd-label-floating">Referral Code</label>
                    <div id="referralCode"></div>
                </div>
                <div class="col-md-6">
                    <label class="bmd-label-floating"> Supervisor Name</label>
                    <div id="supervisorName"></div>
                </div>
              </div>

            </div>
            
          </div>
        </div>
      </div>


      <!-- The modal for edit log view is below -->

<script type="text/javascript" src="<?php echo BASE_URL; ?>backbone/viewJs/loadReports.js" ></script>
<?php 
include(ROOT_PATH . 'inc/footer.php');
?>
