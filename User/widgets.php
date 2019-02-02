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
            <a class="navbar-brand" href="javascript:void(0)">Widgets</a>
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
                    <a href="widgets.html#" class="nav-item dropdown-item">Mike John responded to your email</a>
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
                <a href="widgets.html#" class="dropdown-toggle nav-link" data-toggle="dropdown">
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
          <div class="col-lg-6 col-sm-6 text-center">
            <div class="card card-tasks text-left">
              <div class="card-header">
                <h6 class="title d-inline">Tasks(5)</h6>
                <p class="card-category d-inline">today</p>
                <div class="dropdown">
                  <button type="button" class="btn btn-link dropdown-toggle btn-icon" data-toggle="dropdown">
                    <i class="tim-icons icon-settings-gear-63"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="widgets.html#">Action</a>
                    <a class="dropdown-item" href="widgets.html#">Another action</a>
                    <a class="dropdown-item" href="widgets.html#">Something else here</a>
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
                            <i class="tim-icons icon-settings"></i>
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
                          <p class="text-muted">Alki Ave SW, Seattle, WA 98116, SUA 12:29 PM</p>
                        </td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                            <i class="tim-icons icon-settings"></i>
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
                          <p class="text-muted">Capitol Hill, Seattle, WA 12:34 AM</p>
                        </td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                            <i class="tim-icons icon-settings"></i>
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
                            <i class="tim-icons icon-settings"></i>
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
                          <p class="text-muted">Caption Hill, LA 12:34 AM</p>
                        </td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                            <i class="tim-icons icon-settings"></i>
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
                            <i class="tim-icons icon-settings"></i>
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="card card-contributions">
              <div class="card-body">
                <h1 class="card-title">6,332</h1>
                <h3 class="card-category">Total Public Contributions</h3>
                <p class="card-description">After a very successful two-year run, we’re going to be changing the way that contributions work.</p>
              </div>
              <hr>
              <div class="card-footer">
                <div class="row">
                  <div class="col-lg-6 col-md-8 ml-auto mr-auto">
                    <div class="card-stats justify-content-center">
                      <input type="checkbox" name="checkbox" class="bootstrap-switch" data-on-label="ON" data-off-label="OFF" checked>
                      <span>All public contributions</span>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-8 ml-auto mr-auto">
                    <div class="card-stats justify-content-center">
                      <input type="checkbox" name="checkbox" class="bootstrap-switch" data-on-label="ON" data-off-label="OFF">
                      <span>Past week contributions</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-sm-6">
            <div class="card card-timeline card-plain">
              <div class="card-body">
                <ul class="timeline timeline-simple">
                  <li class="timeline-inverted">
                    <div class="timeline-badge danger">
                      <i class="tim-icons icon-bag-16"></i>
                    </div>
                    <div class="timeline-panel">
                      <div class="timeline-heading">
                        <span class="badge badge-danger">Some Title</span>
                      </div>
                      <div class="timeline-body">
                        <p>Wifey made the best Father's Day meal ever. So thankful so happy so blessed. Thank you for making my family We just had fun with the “future” theme !!! It was a fun night all together ... The always rude Kanye Show at 2am Sold Out Famous viewing @ Figueroa and 12th in downtown.</p>
                      </div>
                      <h6>
                        <i class="ti-time"></i> 11 hours ago via Twitter
                      </h6>
                    </div>
                  </li>
                  <li class="timeline-inverted">
                    <div class="timeline-badge success">
                      <i class="tim-icons icon-gift-2"></i>
                    </div>
                    <div class="timeline-panel">
                      <div class="timeline-heading">
                        <span class="badge badge-success">Another One</span>
                      </div>
                      <div class="timeline-body">
                        <p>Thank God for the support of my wife and real friends. I also wanted to point out that it’s the first album to go number 1 off of streaming!!! I love you Ellen and also my number one design rule of anything I do from shoes to music to homes is that Kim has to like it....</p>
                      </div>
                    </div>
                  </li>
                  <li class="timeline-inverted">
                    <div class="timeline-badge info">
                      <i class="tim-icons icon-planet"></i>
                    </div>
                    <div class="timeline-panel">
                      <div class="timeline-heading">
                        <span class="badge badge-info">Another Title</span>
                      </div>
                      <div class="timeline-body">
                        <p>Called I Miss the Old Kanye That’s all it was Kanye And I love you like Kanye loves Kanye Famous viewing @ Figueroa and 12th in downtown LA 11:10PM</p>
                        <p>What if Kanye made a song about Kanye Royère doesn't make a Polar bear bed but the Polar bear couch is my favorite piece of furniture we own It wasn’t any Kanyes Set on his goals Kanye</p>
                        <hr>
                      </div>
                      <div class="timeline-footer">
                        <div class="dropdown">
                          <button type="button" class="btn btn-round btn-info dropdown-toggle" data-toggle="dropdown">
                            <i class="tim-icons icon-bullet-list-67"></i>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="widgets.html#">Action</a>
                            <a class="dropdown-item" href="widgets.html#">Another action</a>
                            <a class="dropdown-item" href="widgets.html#">Something else here</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="card card-pricing card-primary card-white">
              <div class="card-body">
                <h1 class="card-title">pro</h1>
                <img class="card-img" src="../assets/img/card-primary.png" alt="Image">
                <ul class="list-group">
                  <li class="list-group-item">300 messages</li>
                  <li class="list-group-item">150 emails</li>
                  <li class="list-group-item">24/7 Support</li>
                </ul>
                <div class="card-prices">
                  <h3 class="text-on-front">
                    <span>$</span>95</h3>
                  <h5 class="text-on-back">95</h5>
                  <p class="plan">Professional plan</p>
                </div>
              </div>
              <div class="card-footer text-center mb-3 mt-3">
                <button class="btn btn-round btn-just-icon btn-primary">Get started</button>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="card card-pricing card-primary">
              <div class="card-body">
                <h1 class="card-title">pro</h1>
                <img class="card-img" src="../assets/img/card-primary.png" alt="Image">
                <ul class="list-group">
                  <li class="list-group-item">300 messages</li>
                  <li class="list-group-item">150 emails</li>
                  <li class="list-group-item">24/7 Support</li>
                </ul>
                <div class="card-prices">
                  <h3 class="text-on-front">
                    <span>$</span>95</h3>
                  <h5 class="text-on-back">95</h5>
                  <p class="plan">Professional plan</p>
                </div>
              </div>
              <div class="card-footer text-center mb-3 mt-3">
                <button class="btn btn-round btn-just-icon btn-primary">Get started</button>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card card-testimonial">
              <div class="card-header card-header-avatar">
                <a href="widgets.html#pablo">
                  <img class="img img-raised" src="../assets/img/james.jpg" alt="Card image">
                </a>
              </div>
              <div class="card-body">
                <p class="card-description">
                  The networking at Web Summit is like no other European tech conference.
                </p>
                <div class="icon icon-primary">
                  <i class="fa fa-quote-right"></i>
                </div>
              </div>
              <div class="card-footer">
                <h4 class="card-title">Robert Priscen</h4>
                <p class="category">@robertpriscen</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include("./includes/footer.php"); ?>
