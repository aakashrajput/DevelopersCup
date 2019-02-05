<?php
session_start();

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: .././index.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: .././index.php");
  }
?>
<?php include ("db.php");
$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];




?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    User Dashboard | DevelopHowTo
  </title>
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

<body class="sidebar-mini">
  <div class="wrapper">
    <div class="navbar-minimize-fixed">
      <button class="minimize-sidebar btn btn-link btn-just-icon">
        <i class="tim-icons icon-align-center visible-on-sidebar-regular text-muted"></i>
        <i class="tim-icons icon-bullet-list-67 visible-on-sidebar-mini text-muted"></i>
      </button>
    </div>
    <div class="sidebar">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
    -->
      <div class="sidebar-wrapper">
        <div class="logo">
          <a href="javascript:void(0)" class="simple-text logo-mini">
            <img src="../assets/img/mike.jpg" alt="Profile Photo">
          </a>
          <a href="javascript:void(0)" class="simple-text logo-normal">
              <?php  if (isset($_SESSION['username'])) : ?>
                          <?php echo $_SESSION['username']; ?>
             <?php endif ?>
          </a>
        </div>
        <ul class="nav">
          <li class="active">
            <a href="./">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="./event_list.php">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p>Even List</p>
            </a>
          </li>
          <li>
            <a href="./user_profile.php">
              <i class="tim-icons icon-settings"></i>
              <p>User Profile</p>
            </a>
          </li>
          <li>
            <a href="widgets.php">
              <i class="tim-icons icon-settings"></i>
              <p>Widgets</p>
            </a>
          </li>
          <li>
            <a href="charts.php">
              <i class="tim-icons icon-chart-bar-32"></i>
              <p>Charts</p>
            </a>
          </li>
          <li>
            <a href="calendar.php">
              <i class="tim-icons icon-time-alarm"></i>
              <p>Calendar</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
