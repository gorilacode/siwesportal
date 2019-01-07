<?php

$pageTitle="Individual Student Activities";

require_once($_SERVER["DOCUMENT_ROOT"]."/siwesportal/constant/config.php");

require_once(ROOT_PATH . 'core/init.php');

include(ROOT_PATH . 'inc/staffDetails.php');

include(ROOT_PATH . 'inc/header.php');

include(ROOT_PATH. 'inc/supervisorNavBar.php');

if (isset($_GET["tokenId"])&&isset($_GET["referralCode"])) {

  $Number = $_GET["tokenId"];
  $key = $_GET["referralCode"];
  # code...
}
?>
   
    
     <input type="hidden" name="getToken" id="getToken" value="<?php echo $Number ?>">
     <input type="hidden" name="getCode" id="getCode" value="<?php echo $key ?>">
     <input type="hidden" name="getId" id="getId" value="<?php echo $id ?>">
      <div class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-header card-header-primary">
              <div class="row">
                <div class="col-md-8">
                  <h4 class="card-title"><?php 
                      $student = StudentMatric("logbook", "matricNo", $Number);
                      echo strtoupper($student);
                  ?>
                  </h4>
                  <p class="card-category">Daily Activities</p>
                </div>
                  <div class="col-md-4">
                    <button class="btn btn-primary pull-right" data-toggle="modal" id="addlog" data-target=".add-log"><i class="fa fa-exclamation-triangle "></i> Report Student </button>
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
                    <th scope="col">Date</th>
                    <th scope="col">Activity</th>
                    <th scope="col">Diagram</th>
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
              <!-- The No Fill Dislays an Instruction when you have no value on your table -->
              <div id="nofill"></div>
            </div>

          </div>
        </div>
      </div>

       <div class="modal fade add-log" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            
            <div class="modal-header" style="font-weight: bolder; color: black; border-bottom: 3px solid black; ">
              <h4 class="modal-title" id="myModalLabel" >Report Form </h4>
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            </div>
            <div class="modal-body">
              <form id="createUser" role="form">

                <span id="msg">
                </span>


                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Date</label>
                      <input type="text" name="date" id="date" class="form-control" value="<?php echo date('d-m-Y');?>" readonly>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Matric No</label>
                      <input type="text" class="form-control" id="matricNo" name="matricNo"  value="<?php echo $student; ?>" >
                      <!-- <iframe src=""></iframe> -->
                    </div>
                  </div>
                </div>

                <div class="row">
                   <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating">Issue</label>
                      <textarea type="text" class="form-control" id="issue" name="issue" ></textarea>
                      <!-- <iframe src=""></iframe> -->
                    </div>
                  </div>
                </div>
               
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <!-- <label class="bmd-label-floating">Job Role</label> -->
                      <input type="hidden" id="supervisorName" name="supervisorName" class="form-control" value="<?php echo $firstName.' '.$lastName; ?>">
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
                  <button type="submit" class="btn btn-primary" id="send">Submit Report</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

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
                <div class="col-md-12">
                    <label class="bmd-label-floating">Diagram</label>
                    <div id="image"></div>
                </div>
              </div>

            </div>
            
          </div>
        </div>
      </div>

      <div id="comment-values" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            
            <div class="modal-header" style="font-weight: bolder; color: black; border-bottom: 3px solid black; ">
              <h4 class="modal-title" id="myModalLabel">Comment on Activity</h4>
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            </div>
            <div class="modal-body">

              <!-- <input type="text" id="pin" name="pin"> -->
              <form id="createComment">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="hidden" name="commentid" id="commentid" class="form-control" readonly>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <select class="form-control" id="remark" name="remark">
                        <option value="">~Select Remark ~</option>
                        <option value="satisfied">Satisfied</option>
                        <option value="not satisfied">Unsatisfied</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Comments <i>(if Remark is Unsatisfied)</i></label>
                      <input type="text" class="form-control" id="comment" name="comment" >
                    </div>
                  </div>
                </div>

                <div class="pull-right">
                  <button type="submit" class="btn btn-primary" id="submitComment">Submit Comment</button>
                </div>
              </form>

            </div>
            
          </div>
        </div>
      </div>

      <script type="text/javascript" src="<?php echo BASE_URL; ?>backbone/viewJs/loadActivities.js" ></script>
<?php 


include(ROOT_PATH . 'inc/footer.php');
?>