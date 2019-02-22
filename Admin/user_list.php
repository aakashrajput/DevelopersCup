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
          <h2 class="text-center">DevelopersCup Registered Users</h2>
          <?php
        $query = "SELECT * FROM user_reg ORDER BY id DESC";
        $run = mysqli_query($link,$query);
        if(mysqli_num_rows($run) > 0){
         ?>
          <p class="text-center">A beautiful plugin, highly flexible tool build upon the foundations of progressive enhancement, that adds all of these advanced features to any HTML table. Handcrafted by our friends. Please check out the
            <a href="https://datatables.net/" target="_blank">full documentation.</a>
          </p>
        </div>
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <div class="toolbar">
                  <!--        Here you can write extra buttons/actions for the toolbar              -->
                </div>
                <table id="datatable" class="table table-striped">
                  <thead>
                    <tr>
                      <th>User Name</th>
                      <th>Name</th>
                      <th>College</th>
                      <th>Email</th>
                      <th>Contact No</th>
                      <th>Role</th>
                      <th class="sorting_desc_disabled sorting_asc_disabled text-right">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                       while($row = mysqli_fetch_array($run)){
                         $id = $row['id'];
                         $fullname = ucfirst($row['name']);
                         $username = ucfirst($row['username']);
                         $username = $row['username'];
                         $email = $row['email'];
                         $phone_no = $row['phone_no'];
                         $role = $row['role'];
                         $college_name = $row['college_name'];
                         $branch = $row['branch'];
                         $country = $row['country'];
                         $state = $row['state'];
                         $reg_date = $row['reg_date'];
                         $tandc = $row['tandc'];
                      ?>
                      <tr>
                        <td><?php echo $username; ?></td>
                        <td><?php echo $fullname; ?></td>
                        <td><?php echo $college_name; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $phone_no; ?></td>
                        <td><?php echo $role; ?></td>
                        <td class="text-right">
                          <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i class="tim-icons icon-heart-2"></i></a>
                          <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i class="tim-icons icon-pencil"></i></a>
                          <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i class="tim-icons icon-simple-remove"></i></a>
                        </td>
                      </tr>
                       <?php } ?>
                  </tbody>
                  <tfoot>
                    <tr>
                        <th>User Name</th>
                        <th>Name</th>
                        <th>College</th>
                        <th>Email</th>
                        <th>Contact No</th>
                        <th>Role</th>
                        <th class="sorting_desc_disabled sorting_asc_disabled text-right">Actions</th>
                    </tr>
                  </tfoot>
                      <?php
                    }else {
                      echo "<center><h2>No users Available</h2><br><hr></center>";
                    }
                 ?>
                </table>
              </div>
              <!-- end content-->
            </div>
            <!--  end card  -->
          </div>
          <!-- end col-md-12 -->
        </div>
        <!-- end row -->
      </div>
<?php include("./includes/footer.php"); ?>
