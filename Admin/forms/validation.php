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
            <a class="navbar-brand" href="javascript:void(0)">Validation Forms</a>
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
                    <a href="validation.html#" class="nav-item dropdown-item">Mike John responded to your email</a>
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
                <a href="validation.html#" class="dropdown-toggle nav-link" data-toggle="dropdown">
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
            <form id="RegisterValidation">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Register Form</h4>
                </div>
                <div class="card-body">
                  <div class="form-group has-label">
                    <label>
                      Email Address *
                    </label>
                    <input class="form-control" name="email" type="email" required />
                  </div>
                  <div class="form-group has-label">
                    <label>
                      Password *
                    </label>
                    <input class="form-control" name="password" id="registerPassword" type="password" required />
                  </div>
                  <div class="form-group has-label">
                    <label>
                      Confirm Password *
                    </label>
                    <input class="form-control" name="password_confirmation" id="registerPasswordConfirmation" type="password" equalto="#registerPassword" />
                  </div>
                  <div class="category form-category">* Required fields</div>
                </div>
                <div class="card-footer text-right">
                  <div class="form-check pull-left">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" name="optionCheckboxes">
                      <span class="form-check-sign"></span>
                      Accept the terms and conditions
                    </label>
                  </div>
                  <button type="submit" class="btn btn-primary">Register</button>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-6">
            <form id="LoginValidation">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Login Form</h4>
                </div>
                <div class="card-body">
                  <div class="form-group has-label">
                    <label>Full Name *</label>
                    <input class="form-control" name="fullname" type="text" required />
                  </div>
                  <div class="form-group has-label">
                    <label>Email Address *</label>
                    <input class="form-control" name="email" type="email" />
                  </div>
                  <div class="form-group has-label">
                    <label>Password *</label>
                    <input class="form-control" name="password" type="password" />
                  </div>
                  <div class="category form-category">* Required fields</div>
                </div>
                <div class="card-footer text-left">
                  <button type="submit" class="btn btn-primary">Register</button>
                  <a href="javascript:void(0)" class="pull-right">Forgot password?</a>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-12">
            <form id="TypeValidation" class="form-horizontal">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Type Validation</h4>
                </div>
                <div class="card-body">
                  <div class="row">
                    <label class="col-sm-2 col-form-label">Required Text</label>
                    <div class="col-sm-7">
                      <div class="form-group">
                        <input class="form-control" type="text" name="required" required />
                      </div>
                    </div>
                    <label class="col-sm-3 label-on-right">
                      <code>required</code>
                    </label>
                  </div>
                  <div class="row">
                    <label class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-7">
                      <div class="form-group">
                        <input class="form-control" type="email" name="email" required />
                      </div>
                    </div>
                    <label class="col-sm-3 label-on-right">
                      <code>type="email"</code>
                    </label>
                  </div>
                  <div class="row">
                    <label class="col-sm-2 col-form-label">Number</label>
                    <div class="col-sm-7">
                      <div class="form-group">
                        <input class="form-control" type="number" name="number" required />
                      </div>
                    </div>
                    <label class="col-sm-3 label-on-right">
                      <code>type="number"</code>
                    </label>
                  </div>
                  <div class="row">
                    <label class="col-sm-2 col-form-label">Url</label>
                    <div class="col-sm-7">
                      <div class="form-group">
                        <input class="form-control" type="url" name="url" required />
                      </div>
                    </div>
                    <label class="col-sm-3 label-on-right">
                      <code>type="url"</code>
                    </label>
                  </div>
                  <div class="row">
                    <label class="col-sm-2 col-form-label">Equal to</label>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <input class="form-control" id="idSource" type="text" placeholder="#idSource" />
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <input class="form-control" id="idDestination" type="text" placeholder="#idDestination" equalTo="#idSource" />
                      </div>
                    </div>
                    <label class="col-sm-4 label-on-right">
                      <code>equalTo="#idSource"</code>
                    </label>
                  </div>
                </div>
                <div class="card-footer text-center">
                  <button type="submit" class="btn btn-primary">Validate Inputs</button>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-12">
            <form id="RangeValidation" class="form-horizontal">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Range Validation</h4>
                </div>
                <div class="card-body">
                  <div class="row">
                    <label class="col-sm-2 col-form-label">Min Length</label>
                    <div class="col-sm-7">
                      <div class="form-group">
                        <input class="form-control" type="text" name="min_length" minLength="5" required />
                      </div>
                    </div>
                    <label class="col-sm-3 label-on-right">
                      <code>minLength="5"</code>
                    </label>
                  </div>
                  <div class="row">
                    <label class="col-sm-2 col-form-label">Max Length</label>
                    <div class="col-sm-7">
                      <div class="form-group">
                        <input class="form-control" type="text" name="max_length" maxLength="5" />
                      </div>
                    </div>
                    <label class="col-sm-3 label-on-right">
                      <code>maxLength="5"</code>
                    </label>
                  </div>
                  <div class="row">
                    <label class="col-sm-2 col-form-label">Range</label>
                    <div class="col-sm-7">
                      <div class="form-group">
                        <input class="form-control" type="number" min="6" max="10" />
                      </div>
                    </div>
                    <label class="col-sm-3 label-on-right">
                      <code>min="6" max="10"</code>
                    </label>
                  </div>
                  <div class="row">
                    <label class="col-sm-2 col-form-label">Min Value</label>
                    <div class="col-sm-7">
                      <div class="form-group">
                        <input class="form-control" type="number" name="min" min="6" />
                      </div>
                    </div>
                    <label class="col-sm-3 label-on-right">
                      <code>min="6"</code>
                    </label>
                  </div>
                  <div class="row">
                    <label class="col-sm-2 col-form-label">Max Value</label>
                    <div class="col-sm-7">
                      <div class="form-group">
                        <input class="form-control" type="number" name="max" max="6" />
                      </div>
                    </div>
                    <label class="col-sm-3 label-on-right">
                      <code>max="6"</code>
                    </label>
                  </div>
                </div>
                <div class="card-footer text-center">
                  <button type="submit" class="btn btn-primary">Validate Inputs</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <?php include("../includes/footer.php"); ?>
