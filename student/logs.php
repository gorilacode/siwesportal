<?php

$pageTitle="Logs";

require_once($_SERVER["DOCUMENT_ROOT"]."/siwesportal/constant/config.php");

require_once(ROOT_PATH . 'core/init.php');

include(ROOT_PATH . 'inc/studentDetails.php');

include(ROOT_PATH . 'inc/header.php');

include(ROOT_PATH. 'inc/navbar.php');


?>
  
    
      <!-- End Navbar -->
      <input type="hidden" name="getmatric" id="getmatric" value="<?php echo $MatricNo ?>">
      <div class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-header card-header-primary">
              <div class="row">
                <div class="col-md-8">
                  <h4 class="card-title">Daily Activities Logbook</h4>
                  <p class="card-category">Fill in your daily Activities</p>
                </div>
                
              </div>
            </div>
            <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <button class="btn btn-primary pull-right" data-toggle="modal" id="addlog" data-target=".add-log">Add a Log</button>
                  </div>
                </div>
              <table class="table table-hover">
                <thead style="font-weight: bolder; color: black; border-bottom: 3px solid black; " class="text-center">
                  <tr >
                    <th scope="col" hidden>#</th>
                    <th scope="col">Date</th>
                    <th scope="col">Activity</th>
                    <th scope="col">Diagram</th>
                    <th scope="col" >Status</th>
                    <th scope="col" hidden>Remark</th>
                    <th scope="col" hidden>Comment</th>
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


      <div class="modal fade add-log" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            
            <div class="modal-header" style="font-weight: bolder; color: black; border-bottom: 3px solid black; ">
              <h4 class="modal-title" id="myModalLabel">Log Book </h4>
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            </div>
            <div class="modal-body">
              <form id="createUser" role="form">

                <span id="msg">
                </span>


                <div class="row">
                  <div class="col-md-5">
                    <div class="form-group">
                      <label class="bmd-label-floating">Date</label>
                      <input type="text" name="date" id="date" class="form-control" value="<?php echo date('d-m-Y');?>" readonly>
                    </div>
                  </div>
                </div>

                <div class="row">
                   <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating">Fill in Activities</label>
                      <textarea type="text" class="form-control" id="activity" name="activity" id="activity"></textarea>
                      <!-- <iframe src=""></iframe> -->
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                     <div class="form-group">
                      <label for="img_file" class="btn btn-primary"><i class="fa fa-upload"> </i> Upload Diagram</label>
                      <input type="file" id="img_file" name="img_file">
                      <p class="help-block"> Click Button to Upload Diagram / Sketches</p>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <!-- <label class="bmd-label-floating">Job Role</label> -->
                      <input type="hidden" id="img_show" name="img_show" class="form-control" value="no-image.png">
                    </div>
                  </div>
                  

                  <div class="col-md-3">
                    <span id="uploaded_image">
                    </span>
                  </div>
                  
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <!-- <label class="bmd-label-floating">Job Role</label> -->
                      <input type="hidden" id="matricNo" name="matricNo" class="form-control" value="<?php echo $MatricNo; ?>">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <!-- <label class="bmd-label-floating">Job Role</label> -->
                      <input type="hidden" id="tokenId" name="tokenId" class="form-control" value="<?php echo $tokenId; ?>">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <!-- <label class="bmd-label-floating">Job Role</label> -->
                      <input type="hidden" id="referralCode" name="referralCode" class="form-control" value="<?php echo $referralCode; ?>">
                    </div>
                  </div>
                </div>
                <div class="pull-right">
                  <button type="submit" class="btn btn-primary" id="send">Submit Log</button>
                </div>
              </form>
              <div id="existMsg"> </div>
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
                    <div id="dateview"></div>
                </div>
               <!--  <div class="col-md-6">
                    <label class="bmd-label-floating"> Status</label>
                    <div id="status"></div>
                </div> -->
              </div>
              <div class="row">
                <div class="col-md-12">
                    <label class="bmd-label-floating"> Activity</label>
                    <div id="activity"></div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                    <label class="bmd-label-floating">Remark</label>
                    <div id="remark"></div>
                </div>
                <div class="col-md-6">
                    <label class="bmd-label-floating"> Comment</label>
                    <div id="comment"></div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                    <label class="bmd-label-floating">Diagram</label>
                    <div id="image"></div>
                </div>
              </div>

            </div>
            
          </div>
        </div>
      </div>


      <div id="log-Updates" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            
            <div class="modal-header" style="font-weight: bolder; color: black; border-bottom: 3px solid black; ">
              <h4 class="modal-title" id="myModalLabel">Log Book </h4>
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            </div>
            <div class="modal-body">
              <form id="updateLogBook" role="form">

                <span id="msg2">
                </span>


                <div class="row">
                  
                  <div class="col-md-5">
                    <div class="form-group">
                      <label class="bmd-label-floating">Date</label>
                      <input type="text" name="date" id="date" class="form-control" readonly>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="form-group">
                      <input type="hidden" name="updateId" id="updateId" class="form-control"  readonly>
                    </div>
                  </div>
                </div>

                <div class="row">
                   <div class="col-md-12">
                    <div class="form-group">
                      <textarea type="text" class="form-control" id="activity2" name="activity2"></textarea>
                      <!-- <iframe src=""></iframe> -->
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                     <div class="form-group">
                      <label for="img_file2" class="btn btn-primary"><i class="fa fa-upload"> </i> Upload Diagram</label>
                      <input type="file" id="img_file2" name="img_file2">
                      <p class="help-block"> Click Button to Upload Diagram / Sketches</p>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <input type="text" id="img_show2" name="img_show2" class="form-control" readonly>
                    </div>
                  </div>
                  

                  <div class="col-md-3">
                    <span id="uploaded_image2">
                    </span>
                  </div>
                  
                </div>
                <div class="pull-right">
                  <button type="submit" class="btn btn-primary" id="submitUpdate">Update LogBook</button>
                </div>
              </form>
              <div id="existMsg"> </div>
            </div>
            

          </div>
        </div>
      </div>


      <!-- The modal for edit log view is below -->

<script type="text/javascript" src="<?php echo BASE_URL; ?>backbone/viewJs/loadDiagram.js" ></script>
<?php 
include(ROOT_PATH . 'inc/footer.php');
?>
