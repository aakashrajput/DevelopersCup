<?php include("./includes/header.php"); ?>
<div class="main-panel">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
    <div class="container-fluid">
      <div class="navbar-wrapper">
        <div class="navbar-minimize d-inline">
          <button class="minimize-sidebar btn btn-link btn-just-icon" rel="tooltip" data-original-title="Sidebar toggle" data-placement="right">
            <i class="tim-icons icon-align-center visible-on-sidebar-regular"></i>
            <i class="tim-icons icon-bullet-list-67 visible-on-sidebar-mini"></i>
          </button>
        </div>
        <div class="navbar-toggle d-inline">
          <button type="button" class="navbar-toggler">
            <span class="navbar-toggler-bar bar1"></span>
            <span class="navbar-toggler-bar bar2"></span>
            <span class="navbar-toggler-bar bar3"></span>
          </button>
        </div>
        <a class="navbar-brand" href="javascript:void(0)">Dashboard</a>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-bar navbar-kebab"></span>
        <span class="navbar-toggler-bar navbar-kebab"></span>
        <span class="navbar-toggler-bar navbar-kebab"></span>
      </button>
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="navbar-nav ml-auto">
          <?php include("./includes/search.php"); ?>
          <?php include("./includes/notification.php"); ?>
          <?php include("./includes/settings.php"); ?>
          <li class="separator d-lg-none"></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="tim-icons icon-simple-remove"></i>
          </button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- End Navbar -->
      <div class="content">
        <div class="col-md-8 ml-auto mr-auto">
          <h2 class="text-center">DevelopersCup Contest Creation</h2>
          <p class="text-center">A beautiful plugin, highly flexible tool build upon the foundations of progressive enhancement, that adds all of these advanced features to any HTML table. Handcrafted by our friends. Please check out the
            <a href="https://datatables.net/" target="_blank">full documentation.</a>
          </p>
        </div>
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Create Contest</h4>
              </div>
              <div class="card-body">
                <form name="form1" class="form-horizontal" method="POST" enctype="multipart/form-data">
                    <?php
                    if(isset($_POST['submit'])){
                      //$author = $_POST['author'];
                      $title = $_POST['title'];
                      $intro = $_POST['intro'];
                      $overview = $_POST['overview'];
                      $reg_fees = $_POST['reg_fees'];
                      $duration = $_POST['duration'];
                      $date = time();
                              if(empty($title)){
                                $error_msg = "Title Field is blank";
                              } else {
                                $query = "INSERT INTO `contests` (`id`, `date`, `title`, `intro`, `overview`,`reg_fees`, `duration`,`status`) VALUES (NULL, '$date', '$title', '$intro','$overview', '$reg_fees', '$duration','Active')";
                                if(mysqli_query($link,$query)){
                                  $msg = "post Added";
                                  //$category = "";
                                } else {
                                  $error_msg = "Failed to Add";
                                  //print_r($errors);
                                }
                              }
                              }
                        ?>
                  <div class="row">
                    <label class="col-sm-2 col-form-label">Contest Name</label>
                    <div class="col-sm-10">
                      <div class="form-group">
                        <input type="text" class="form-control" name="title">
                        <span class="form-text">A Valid name that can describe what type of contest you are creating.</span>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-sm-2 col-form-label">Intro</label>
                    <div class="col-sm-10">
                      <div class="form-group">
                        <input type="text" class="form-control" name="intro">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-sm-2 col-form-label">Overview</label>
                    <div class="col-sm-10">
                      <div class="form-group">
                        <textarea rows="4" class="ckeditor form-control form-control-alternative" name="overview">Write overview here...</textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-sm-2 col-form-label">Registration Fees</label>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <input type="text" class="form-control" name="reg_fees" placeholder="Enter the Registration fees.">
                      </div>
                    </div>
                    <label class="col-sm-2 col-form-label">Duration</label>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <input type="text" class="form-control" name="duration" placeholder="Enter time in hours.">
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-8">
                   <input type="submit" name="submit" class="btn btn-primary" value="submit">
                   <?php if(isset($error_msg)){
                                echo "<span style='color:red;' class='pull-right'>$error_msg</span>";
                              }else if(isset($msg)) {
                                 echo "<span style='color:green;' class='pull-right'>$msg</span>";
                              }
                   ?>
                 </div>
                </form>
              </div>
            </div>
          </div>
        <!-- end row -->
      </div>
<?php include("./includes/footer.php"); ?>
