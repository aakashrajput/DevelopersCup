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
            <a class="navbar-brand" href="javascript:void(0)">Charts</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto">
              <li class="search-bar input-group">
                <button class="btn btn-link" id="search-button" data-toggle="modal" data-target="#searchModal"><i class="tim-icons icon-zoom-split"></i>
                  <span class="d-lg-none d-md-block">Search</span>
                </button>
              </li>
              <li class="dropdown nav-item">
                <a href="javascript:void(0)" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="notification d-none d-lg-block d-xl-block"></div>
                  <i class="tim-icons icon-sound-wave"></i>
                  <p class="d-lg-none">
                    Notifications
                  </p>
                </a>
                <ul class="dropdown-menu dropdown-menu-right dropdown-navbar">
                  <li class="nav-link">
                    <a href="charts.html#" class="nav-item dropdown-item">Mike John responded to your email</a>
                  </li>
                  <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">You have 5 more tasks</a>
                  </li>
                  <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">Your friend Michael is in town</a>
                  </li>
                  <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">Another notification</a>
                  </li>
                  <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">Another one</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown nav-item">
                <a href="charts.html#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="photo">
                    <img src="../assets/img/mike.jpg" alt="Profile Photo">
                  </div>
                  <b class="caret d-none d-lg-block d-xl-block"></b>
                  <p class="d-lg-none">
                    Log out
                  </p>
                </a>
                <ul class="dropdown-menu dropdown-navbar">
                  <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">Profile</a>
                  </li>
                  <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">Settings</a>
                  </li>
                  <li class="dropdown-divider"></li>
                  <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">Log out</a>
                  </li>
                </ul>
              </li>
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
      <!-- End Navbar -->
      <div class="content">
        <h2 class="text-center">Charts.js</h2>
        <p class="category text-center">Simple yet flexible JavaScript charting for designers &amp; developers. Made by our friends from
          <a target="_blank" href="http://www.chartjs.org">Charts.js</a>. Please check
          <a target="_blank" href="http://www.chartjs.org/docs/latest/">the full documentation</a>.</p>
        <div class="row mt-5">
          <div class="col-md-5 ml-auto">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Simple With Gradient</h5>
                <h3 class="card-title"><i class="tim-icons icon-chart-bar-32 text-primary "></i> 10,000</h3>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="chartSimpleWithGradient"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-5 mr-auto">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">With Numbers and Grid</h5>
                <h3 class="card-title"><i class="tim-icons icon-send text-info "></i> 750,000€</h3>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="chartWithNumbersAndGrid"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5 ml-auto">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Gradient Bar Chart</h5>
                <h3 class="card-title"><i class="tim-icons icon-shape-star text-danger "></i> 1,000,000£
                </h3>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="BarChart"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-5 mr-auto">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Multiple Bars Chart With Grid</h5>
                <h3 class="card-title"><i class="tim-icons icon-time-alarm text-warning "></i> 130,000$</h3>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="MultipleBarsChart"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5 ml-auto">
            <div class="card card-chart card-chart-pie">
              <div class="card-header">
                <h5 class="card-category">Simple Pie Chart</h5>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-6">
                    <div class="chart-area">
                      <canvas id="PieChart"></canvas>
                    </div>
                  </div>
                  <div class="col-6">
                    <h4 class="card-title"><i class="tim-icons  icon-trophy text-success "></i> 10.000$</h4>
                    <p class="category">A total of $54000</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-5 mr-auto">
            <div class="card card-chart card-chart-pie">
              <div class="card-header">
                <h5 class="card-category">Multiple Pie Chart</h5>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-6">
                    <div class="chart-area">
                      <canvas id="PieChartGradient"></canvas>
                    </div>
                  </div>
                  <div class="col-6">
                    <h4 class="card-title"><i class="tim-icons  icon-tag text-warning "></i> 130,000</h4>
                    <p class="category">Feedback from 20.000 users</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
       <?php include("./includes/footer.php"); ?>
