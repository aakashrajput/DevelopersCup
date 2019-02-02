<?php include("../includes/header.php"); ?>
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
            <a class="navbar-brand" href="javascript:void(0)">Regular Forms</a>
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
                    <a href="regular.html#" class="nav-item dropdown-item">Mike John responded to your email</a>
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
                <a href="regular.html#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="photo">
                    <img src="../../assets/img/mike.jpg" alt="Profile Photo">
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
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Stacked Form</h4>
              </div>
              <div class="card-body">
                <form action="regular.html#">
                  <label>Email address</label>
                  <div class="form-group">
                    <input type="email" class="form-control">
                  </div>
                  <label>Password</label>
                  <div class="form-group">
                    <input type="password" class="form-control">
                  </div>
                  <div class="form-check mt-3">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox">
                      <span class="form-check-sign"></span>
                      Subscribe to newsletter
                    </label>
                  </div>
                </form>
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-fill btn-primary">Submit</button>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Horizontal Form</h4>
              </div>
              <div class="card-body">
                <form class="form-horizontal">
                  <div class="row">
                    <label class="col-md-3 col-form-label">Username</label>
                    <div class="col-md-9">
                      <div class="form-group">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-md-3 col-form-label">Email</label>
                    <div class="col-md-9">
                      <div class="form-group">
                        <input type="email" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-md-3 col-form-label">Password</label>
                    <div class="col-md-9">
                      <div class="form-group">
                        <input type="password" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-md-3 col-form-label"></label>
                    <div class="col-md-9">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox">
                          <span class="form-check-sign"></span>
                          Remember me
                        </label>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="card-footer">
                <form class="form-horizontal">
                  <div class="row">
                    <label class="col-md-3 col-form-label"></label>
                    <div class="col-md-9">
                      <button type="submit" class="btn btn-fill btn-primary">Sign in</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Form Elements</h4>
              </div>
              <div class="card-body">
                <form method="get" action="https://demos.creative-tim.com/" class="form-horizontal">
                  <div class="row">
                    <label class="col-sm-2 col-form-label">With help</label>
                    <div class="col-sm-10">
                      <div class="form-group">
                        <input type="text" class="form-control">
                        <span class="form-text">A block of help text that breaks onto a new line.</span>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <div class="form-group">
                        <input type="password" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-sm-2 col-form-label">Placeholder</label>
                    <div class="col-sm-10">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="placeholder">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-sm-2 col-form-label">Disabled</label>
                    <div class="col-sm-10">
                      <div class="form-group">
                        <input type="text" class="form-control" value="Disabled input here.." disabled>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-sm-2 col-form-label">Static control</label>
                    <div class="col-sm-10">
                      <div class="form-group">
                        <p class="form-control-static"><a href="https://demos.creative-tim.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1179747d7d7e5172637470657867743c65787c3f727e7c">[email&#160;protected]</a></p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-sm-2 col-form-label">Checkboxes and radios</label>
                    <div class="col-sm-10 checkbox-radios">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox">
                          <span class="form-check-sign"></span>
                          First Checkbox
                        </label>
                      </div>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox">
                          <span class="form-check-sign"></span>
                          Second Checkbox
                        </label>
                      </div>
                      <div class="form-check form-check-radio">
                        <label class="form-check-label">
                          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                          <span class="form-check-sign"></span>
                          First Radio
                        </label>
                      </div>
                      <div class="form-check form-check-radio">
                        <label class="form-check-label">
                          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                          <span class="form-check-sign"></span>
                          Second Radio
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-sm-2 col-form-label">Inline checkboxes</label>
                    <div class="col-sm-10">
                      <div class="form-check form-check-inline">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox">
                          <span class="form-check-sign"></span>
                          a
                        </label>
                      </div>
                      <div class="form-check form-check-inline">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox">
                          <span class="form-check-sign"></span>
                          b
                        </label>
                      </div>
                      <div class="form-check form-check-inline">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox">
                          <span class="form-check-sign"></span>
                          c
                        </label>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Input Variants</h4>
              </div>
              <div class="card-body">
                <form method="get" action="https://demos.creative-tim.com/" class="form-horizontal">
                  <div class="row">
                    <label class="col-sm-2 col-form-label">Custom Checkboxes &amp; radios</label>
                    <div class="col-sm-4 col-sm-offset-1 checkbox-radios">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox">
                          <span class="form-check-sign"></span>
                          Unchecked
                        </label>
                      </div>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" checked>
                          <span class="form-check-sign"></span>
                          Checked
                        </label>
                      </div>
                      <div class="form-check disabled">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" disabled>
                          <span class="form-check-sign"></span>
                          Disabled Unchecked
                        </label>
                      </div>
                      <div class="form-check disabled">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" disabled>
                          <span class="form-check-sign"></span>
                          Disabled Checked
                        </label>
                      </div>
                    </div>
                    <div class="col-sm-5 checkbox-radios">
                      <div class="form-check form-check-radio">
                        <label class="form-check-label">
                          <input class="form-check-input" type="radio" name="exampleRadio" id="exampleRadios3" value="option1">
                          <span class="form-check-sign"></span>
                          Radio is off
                        </label>
                      </div>
                      <div class="form-check form-check-radio">
                        <label class="form-check-label">
                          <input class="form-check-input" type="radio" name="exampleRadio" id="exampleRadios4" value="option2" checked>
                          <span class="form-check-sign"></span>
                          Radio is on
                        </label>
                      </div>
                      <div class="form-check form-check-radio disabled">
                        <label class="form-check-label">
                          <input class="form-check-input" type="radio" name="exampleRadio1" id="exampleRadios5" value="option1" disabled>
                          <span class="form-check-sign"></span>
                          Radio is off
                        </label>
                      </div>
                      <div class="form-check form-check-radio disabled">
                        <label class="form-check-label">
                          <input class="form-check-input" type="radio" name="exampleRadio1" id="exampleRadios6" value="option2" checked disabled>
                          <span class="form-check-sign"></span>
                          Radio is on
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-sm-2 col-form-label">Input with success</label>
                    <div class="col-sm-10">
                      <div class="form-group has-success">
                        <input type="text" class="form-control" value="Success">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-sm-2 col-form-label">Input with error</label>
                    <div class="col-sm-10">
                      <div class="form-group has-danger">
                        <input type="text" class="form-control" value="Error">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-sm-2 col-form-label">Column sizing</label>
                    <div class="col-sm-10">
                      <div class="row">
                        <div class="col-md-3">
                          <div class="form-group">
                            <input type="text" class="form-control" placeholder=".col-md-3">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <input type="text" class="form-control" placeholder=".col-md-4">
                          </div>
                        </div>
                        <div class="col-md-5">
                          <div class="form-group">
                            <input type="text" class="form-control" placeholder=".col-md-5">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include("../includes/footer.php"); ?>
