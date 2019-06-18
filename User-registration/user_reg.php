<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="https://demos.creative-tim.com/marketplace/black-dashboard-pro/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="https://demos.creative-tim.com/marketplace/black-dashboard-pro/assets/img/favicon.png">
  <title>
    User Registeration | DevelopHowTo
  </title>
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://www.creative-tim.com/product/black-dashboard" />
  <!--  Social tags      -->
  <meta name="keywords" content="creative tim, html dashboard, html css dashboard, web dashboard, bootstrap 4 dashboard, bootstrap 4, css3 dashboard, bootstrap 4 admin, black dashboard bootstrap 4 dashboard, frontend, responsive bootstrap 4 dashboard, black design, black dashboard bootstrap 4 dashboard">
  <meta name="description" content="Black Dashboard PRO is a beautiful Bootstrap 4 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you.">
  <!-- Schema.org markup for Google+ -->
  <meta itemprop="name" content="Black Dashboard PRO by Creative Tim">
  <meta itemprop="description" content="Black Dashboard PRO is a beautiful Bootstrap 4 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you.">
  <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/93/opt_bd_thumbnail.jpg">
  <!-- Twitter Card data -->
  <meta name="twitter:card" content="product">
  <meta name="twitter:site" content="@creativetim">
  <meta name="twitter:title" content="Black Dashboard PRO by Creative Tim">
  <meta name="twitter:description" content="Black Dashboard PRO is a beautiful Bootstrap 4 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you.">
  <meta name="twitter:creator" content="@creativetim">
  <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/93/opt_bd_thumbnail.jpg">
  <!-- Open Graph data -->
  <meta property="fb:app_id" content="655968634437471">
  <meta property="og:title" content="Black Dashboard PRO by Creative Tim" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="http://demos.creative-tim.com/black-dashboard-pro/examples/dashboard.html" />
  <meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/93/opt_bd_thumbnail.jpg" />
  <meta property="og:description" content="Black Dashboard PRO is a beautiful Bootstrap 4 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you." />
  <meta property="og:site_name" content="Creative Tim" />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="../assets/css/black-dashboard.min.css" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="register-page">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent fixed-top">
    <div class="container-fluid">
      <div class="navbar-wrapper">
        <div class="navbar-toggle d-inline">
          <button type="button" class="navbar-toggler">
            <span class="navbar-toggler-bar bar1"></span>
            <span class="navbar-toggler-bar bar2"></span>
            <span class="navbar-toggler-bar bar3"></span>
          </button>
        </div>
        <a class="navbar-brand" href="javascript:void(0)">Register Page</a>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-bar navbar-kebab"></span>
        <span class="navbar-toggler-bar navbar-kebab"></span>
        <span class="navbar-toggler-bar navbar-kebab"></span>
      </button>
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="\DevelopersCup/Admin/index.php" class="nav-link text-primary">
              <i class="tim-icons icon-minimal-left"></i> Back to Dashboard
            </a>
          </li>
          <li class="nav-item ">
            <a href="user_reg.php" class="nav-link">
              <i class="tim-icons icon-laptop"></i>User Register
            </a>
          </li>
          <li class="nav-item ">
            <a href="login.php" class="nav-link">
              <i class="tim-icons icon-single-02"></i> Login
            </a>
          </li>
          <li class="nav-item  active ">
            <a href="pricing.php" class="nav-link">
              <i class="tim-icons icon-coins"></i> Pricing
            </a>
          </li>
          <li class="nav-item ">
            <a href="lock.php" class="nav-link">
              <i class="tim-icons icon-lock-circle"></i> Lock
            </a>
          </li>
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
  <div class="wrapper wrapper-full-page ">
    <div class="full-page register-page">
      <div class="content">
        <div class="container">
          <div class="row">
            <div class="col-md-5 ml-auto">
              <div class="info-area info-horizontal mt-5">
                <div class="icon icon-warning">
                  <i class="tim-icons icon-wifi"></i>
                </div>
                <div class="description">
                  <h3 class="info-title">Marketing</h3>
                  <p class="description">
                    We've created the marketing campaign of the website. It was a very interesting collaboration.
                  </p>
                </div>
              </div>
              <div class="info-area info-horizontal">
                <div class="icon icon-primary">
                  <i class="tim-icons icon-triangle-right-17"></i>
                </div>
                <div class="description">
                  <h3 class="info-title">Fully Coded in HTML5</h3>
                  <p class="description">
                    We've developed the website with HTML5 and CSS3. The client has access to the code using GitHub.
                  </p>
                </div>
              </div>
              <div class="info-area info-horizontal">
                <div class="icon icon-info">
                  <i class="tim-icons icon-trophy"></i>
                </div>
                <div class="description">
                  <h3 class="info-title">Built Audience</h3>
                  <p class="description">
                    There is also a Fully Customizable CMS Admin Dashboard for this product.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-7 mr-auto">
              <div class="card card-register card-white">
                <div class="card-header">
                  <img class="card-img" src="../assets/img/card-primary.png" alt="Card image">
                  <h4 class="card-title">User Register</h4>
                </div>
                <div class="card-body">
                  <form class="form">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="tim-icons icon-single-02"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" placeholder="Full Name">
                    </div>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="tim-icons icon-email-85"></i>
                        </div>
                      </div>
                      <input type="text" placeholder="Email" class="form-control">
                    </div>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="tim-icons icon-lock-circle"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" placeholder="Password">
                    </div>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="tim-icons icon-lock-circle"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" placeholder="Password1">
                    </div>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="tim-icons icon-badge"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" placeholder="College Name">
                    </div>
                    <div class="form-check text-left">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox">
                        <span class="form-check-sign"></span>
                        I agree to the
                        <a href="javascript:void(0)">terms and conditions</a>.
                      </label>
                    </div>
                  </form>
                </div>
                <div class="card-footer">
                  <a href="javascript:void(0)" class="btn btn-primary btn-round btn-lg">Get Started</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     <?php include("includes/footer.php"); ?>
