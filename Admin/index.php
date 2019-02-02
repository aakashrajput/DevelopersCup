<?php include ("./includes/header.php"); ?>
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
                    <a href="dashboard.html#" class="nav-item dropdown-item">Mike John responded to your email</a>
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
                <a href="dashboard.html#" class="dropdown-toggle nav-link" data-toggle="dropdown">
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
        <div class="row">
          <div class="col-12">
            <div class="card card-chart">
              <div class="card-header">
                <div class="row">
                  <div class="col-sm-6 text-left">
                    <h5 class="card-category">Total Shipments</h5>
                    <h2 class="card-title">Performance</h2>
                  </div>
                  <div class="col-sm-6">
                    <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                      <label class="btn btn-sm btn-primary btn-simple active" id="0">
                        <input type="radio" name="options" checked>
                        <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Accounts</span>
                        <span class="d-block d-sm-none">
                          <i class="tim-icons icon-single-02"></i>
                        </span>
                      </label>
                      <label class="btn btn-sm btn-primary btn-simple" id="1">
                        <input type="radio" class="d-none d-sm-none" name="options">
                        <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Purchases</span>
                        <span class="d-block d-sm-none">
                          <i class="tim-icons icon-gift-2"></i>
                        </span>
                      </label>
                      <label class="btn btn-sm btn-primary btn-simple" id="2">
                        <input type="radio" class="d-none" name="options">
                        <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Sessions</span>
                        <span class="d-block d-sm-none">
                          <i class="tim-icons icon-tap-02"></i>
                        </span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="chartBig1"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="card card-stats">
              <div class="card-body">
                <div class="row">
                  <div class="col-5">
                    <div class="info-icon text-center icon-warning">
                      <i class="tim-icons icon-chat-33"></i>
                    </div>
                  </div>
                  <div class="col-7">
                    <div class="numbers">
                      <p class="card-category">Number</p>
                      <h3 class="card-title">150GB</h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <hr>
                <div class="stats">
                  <i class="tim-icons icon-refresh-01"></i> Update Now
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="card card-stats">
              <div class="card-body">
                <div class="row">
                  <div class="col-5">
                    <div class="info-icon text-center icon-primary">
                      <i class="tim-icons icon-shape-star"></i>
                    </div>
                  </div>
                  <div class="col-7">
                    <div class="numbers">
                      <p class="card-category">Followers</p>
                      <h3 class="card-title">+45k</h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <hr>
                <div class="stats">
                  <i class="tim-icons icon-sound-wave"></i> Last Research
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="card card-stats">
              <div class="card-body">
                <div class="row">
                  <div class="col-5">
                    <div class="info-icon text-center icon-success">
                      <i class="tim-icons icon-single-02"></i>
                    </div>
                  </div>
                  <div class="col-7">
                    <div class="numbers">
                      <p class="card-category">Users</p>
                      <h3 class="card-title">150,000</h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <hr>
                <div class="stats">
                  <i class="tim-icons icon-trophy"></i> Customers feedback
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="card card-stats">
              <div class="card-body">
                <div class="row">
                  <div class="col-5">
                    <div class="info-icon text-center icon-danger">
                      <i class="tim-icons icon-molecule-40"></i>
                    </div>
                  </div>
                  <div class="col-7">
                    <div class="numbers">
                      <p class="card-category">Errors</p>
                      <h3 class="card-title">12</h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <hr>
                <div class="stats">
                  <i class="tim-icons icon-watch-time"></i> In the last hours
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Total Shipments</h5>
                <h3 class="card-title"><i class="tim-icons icon-bell-55 text-primary"></i> 763,215</h3>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="chartLinePurple"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Daily Sales</h5>
                <h3 class="card-title"><i class="tim-icons icon-delivery-fast text-info"></i> 3,500€</h3>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="CountryChart"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Completed Tasks</h5>
                <h3 class="card-title"><i class="tim-icons icon-send text-success"></i> 12,100K</h3>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="chartLineGreen"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-5">
            <div class="card card-tasks">
              <div class="card-header">
                <h6 class="title d-inline">Tasks(5)</h6>
                <p class="card-category d-inline">today</p>
                <div class="dropdown">
                  <button type="button" class="btn btn-link dropdown-toggle btn-icon" data-toggle="dropdown">
                    <i class="tim-icons icon-settings-gear-63"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="dashboard.html#pablo">Action</a>
                    <a class="dropdown-item" href="dashboard.html#pablo">Another action</a>
                    <a class="dropdown-item" href="dashboard.html#pablo">Something else</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="table-full-width table-responsive">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td>
                          <p class="title">Update the Documentation</p>
                          <p class="text-muted">Dwuamish Head, Seattle, WA 8:47 AM</p>
                        </td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                            <i class="tim-icons icon-pencil"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="" checked="">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td>
                          <p class="title">GDPR Compliance</p>
                          <p class="text-muted">The GDPR is a regulation that requires businesses to protect the personal data and privacy of Europe citizens for transactions that occur within EU member states.</p>
                        </td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                            <i class="tim-icons icon-pencil"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td>
                          <p class="title">Solve the issues</p>
                          <p class="text-muted">Fifty percent of all respondents said they would be more likely to shop at a company </p>
                        </td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                            <i class="tim-icons icon-pencil"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td>
                          <p class="title">Release v2.0.0</p>
                          <p class="text-muted">Ra Ave SW, Seattle, WA 98116, SUA 11:19 AM</p>
                        </td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                            <i class="tim-icons icon-pencil"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td>
                          <p class="title">Export the processed files</p>
                          <p class="text-muted">The report also shows that consumers will not easily forgive a company once a breach exposing their personal data occurs. </p>
                        </td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                            <i class="tim-icons icon-pencil"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td>
                          <p class="title">Arival at export process</p>
                          <p class="text-muted">Capitol Hill, Seattle, WA 12:34 AM</p>
                        </td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                            <i class="tim-icons icon-pencil"></i>
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="card">
              <div class="card-header">
                <div class="tools float-right">
                  <div class="dropdown">
                    <button type="button" class="btn btn-link dropdown-toggle btn-icon" data-toggle="dropdown">
                      <i class="tim-icons icon-settings-gear-63"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="dashboard.html#pablo">Action</a>
                      <a class="dropdown-item" href="dashboard.html#pablo">Another action</a>
                      <a class="dropdown-item" href="dashboard.html#pablo">Something else</a>
                      <a class="dropdown-item text-danger" href="dashboard.html#pablo">Remove Data</a>
                    </div>
                  </div>
                </div>
                <h5 class="card-title">Management Table</h5>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class="text-primary">
                      <tr>
                        <th class="text-center">
                          #
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          Job Position
                        </th>
                        <th>
                          Milestone
                        </th>
                        <th class="text-right">
                          Salary
                        </th>
                        <th class="text-right">
                          Actions
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-center">
                          <div class="photo">
                            <img src="../assets/img/tania.jpg" alt="photo">
                          </div>
                        </td>
                        <td>
                          Tania Mike
                        </td>
                        <td>
                          Develop
                        </td>
                        <td class="text-center">
                          <div class="progress-container progress-sm">
                            <div class="progress">
                              <span class="progress-value">25%</span>
                              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                            </div>
                          </div>
                        </td>
                        <td class="text-right">
                          € 99,225
                        </td>
                        <td class="text-right">
                          <button type="button" rel="tooltip" class="btn btn-success btn-link btn-icon btn-sm btn-neutral" data-original-title="Tooltip on top" title="Refresh">
                            <i class="tim-icons icon-refresh-01"></i>
                          </button>
                          <button type="button" rel="tooltip" class="btn btn-danger btn-link btn-icon btn-sm btn-neutral" data-original-title="Tooltip on top" title="Delete">
                            <i class="tim-icons icon-simple-remove"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">
                          <div class="photo">
                            <img src="../assets/img/robi.jpg" alt="photo">
                          </div>
                        </td>
                        <td>
                          John Doe
                        </td>
                        <td>
                          CEO
                        </td>
                        <td class="text-center">
                          <div class="progress-container progress-sm">
                            <div class="progress">
                              <span class="progress-value">77%</span>
                              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                            </div>
                          </div>
                        </td>
                        <td class="text-right">
                          € 89,241
                        </td>
                        <td class="text-right">
                          <button type="button" rel="tooltip" class="btn btn-success btn-link btn-sm btn-icon btn-neutral" data-original-title="Tooltip on top" title="Refresh">
                            <i class="tim-icons icon-refresh-01"></i>
                          </button>
                          <button type="button" rel="tooltip" class="btn btn-danger btn-link btn-sm btn-icon btn-neutral" data-original-title="Tooltip on top" title="Delete">
                            <i class="tim-icons icon-simple-remove"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">
                          <div class="photo">
                            <img src="../assets/img/lora.jpg" alt="photo">
                          </div>
                        </td>
                        <td>
                          Alexa Mike
                        </td>
                        <td>
                          Design
                        </td>
                        <td class="text-center">
                          <div class="progress-container progress-sm">
                            <div class="progress">
                              <span class="progress-value">41%</span>
                              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 41%;"></div>
                            </div>
                          </div>
                        </td>
                        <td class="text-right">
                          € 92,144
                        </td>
                        <td class="text-right">
                          <button type="button" rel="tooltip" class="btn btn-success btn-link btn-icon btn-sm btn-neutral" data-original-title="Tooltip on top" title="Refresh">
                            <i class="tim-icons icon-refresh-01"></i>
                          </button>
                          <button type="button" rel="tooltip" class="btn btn-danger btn-link btn-icon btn-sm btn-neutral" data-original-title="Tooltip on top" title="Delete">
                            <i class="tim-icons icon-simple-remove"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">
                          <div class="photo">
                            <img src="../assets/img/jana.jpg" alt="photo">
                          </div>
                        </td>
                        <td>
                          Jana Monday
                        </td>
                        <td>
                          Marketing
                        </td>
                        <td class="text-center">
                          <div class="progress-container progress-sm">
                            <div class="progress">
                              <span class="progress-value">50%</span>
                              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                            </div>
                          </div>
                        </td>
                        <td class="text-right">
                          € 49,990
                        </td>
                        <td class="text-right">
                          <button type="button" rel="tooltip" class="btn btn-success btn-link btn-sm btn-icon" data-original-title="Tooltip on top" title="Refresh">
                            <i class="tim-icons icon-refresh-01"></i>
                          </button>
                          <button type="button" rel="tooltip" class="btn btn-danger btn-link btn-sm btn-icon" data-original-title="Tooltip on top" title="Delete">
                            <i class="tim-icons icon-simple-remove"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">
                          <div class="photo">
                            <img src="../assets/img/mike.jpg" alt="photo">
                          </div>
                        </td>
                        <td>
                          Paul Dickens
                        </td>
                        <td>
                          Develop
                        </td>
                        <td class="text-center">
                          <div class="progress-container progress-sm">
                            <div class="progress">
                              <span class="progress-value">100%</span>
                              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="text-right">
                          € 69,201
                        </td>
                        <td class="text-right">
                          <button type="button" rel="tooltip" class="btn btn-success btn-link btn-sm  btn-icon" data-original-title="Tooltip on top" title="Refresh">
                            <i class="tim-icons icon-refresh-01"></i>
                          </button>
                          <button type="button" rel="tooltip" class="btn btn-danger btn-link btn-sm btn-icon" data-original-title="Tooltip on top" title="Delete">
                            <i class="tim-icons icon-simple-remove"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">
                          <div class="photo">
                            <img src="../assets/img/emilyz.jpg" alt="photo">
                          </div>
                        </td>
                        <td>
                          Manuela Rico
                        </td>
                        <td>
                          Manager
                        </td>
                        <td class="text-center">
                          <div class="progress-container progress-sm">
                            <div class="progress">
                              <span class="progress-value">15%</span>
                              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 15%;"></div>
                            </div>
                          </div>
                        </td>
                        <td class="text-right">
                          € 99,201
                        </td>
                        <td class="text-right">
                          <button type="button" rel="tooltip" class="btn btn-success btn-link btn-sm btn-icon" data-original-title="Tooltip on top" title="Refresh">
                            <i class="tim-icons icon-refresh-01"></i>
                          </button>
                          <button type="button" rel="tooltip" class="btn btn-danger btn-link btn-sm btn-icon" data-original-title="Tooltip on top" title="Delete">
                            <i class="tim-icons icon-simple-remove"></i>
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Global Sales by Top Locations</h4>
                <p class="card-category">All products that were shipped</p>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="table-responsive">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td>
                              <div class="flag">
                                <img src="../assets/img/US.png" alt="flag">
                              </div>
                            </td>
                            <td>USA</td>
                            <td class="text-right">
                              2.920
                            </td>
                            <td class="text-right">
                              53.23%
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="flag">
                                <img src="../assets/img/DE.png" alt="flag">
                              </div>
                            </td>
                            <td>Germany</td>
                            <td class="text-right">
                              1.300
                            </td>
                            <td class="text-right">
                              20.43%
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="flag">
                                <img src="../assets/img/AU.png" alt="flag">
                              </div>
                            </td>
                            <td>Australia</td>
                            <td class="text-right">
                              760
                            </td>
                            <td class="text-right">
                              10.35%
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="flag">
                                <img src="../assets/img/GB.png" alt="flag">
                              </div>
                            </td>
                            <td>United Kingdom</td>
                            <td class="text-right">
                              690
                            </td>
                            <td class="text-right">
                              7.87%
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="flag">
                                <img src="../assets/img/RO.png" alt="flag">
                              </div>
                            </td>
                            <td>Romania</td>
                            <td class="text-right">
                              600
                            </td>
                            <td class="text-right">
                              5.94%
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="flag">
                                <img src="../assets/img/BR.png" alt="flag">
                              </div>
                            </td>
                            <td>Brasil</td>
                            <td class="text-right">
                              550
                            </td>
                            <td class="text-right">
                              4.34%
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="col-md-6 ml-auto mr-auto">
                    <div id="worldMap" style="height: 300px;"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php include("./includes/footer.php"); ?>
