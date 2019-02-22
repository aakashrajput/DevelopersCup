<?php
session_start();

  if (!isset($_SESSION['admin_username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: .././index.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['admin_username']);
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
    Admin Dashboard | DevelopHowTo
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
  <script src="../ckeditor/ckeditor.js"></script>
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
                <?php  if (isset($_SESSION['admin_username'])) : ?>
                            <?php echo $_SESSION['admin_username']; ?>
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
            <a href="user_list.php">
              <i class="tim-icons icon-paper"></i>
              <p>User List</p>
            </a>
          </li>

          <li>
            <a data-toggle="collapse" href="#MentorPage">
              <i class="tim-icons icon-support-17"></i>
              <p>
                Mentor
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="MentorPage">
              <ul class="nav">
                <li>
                  <a href="../examples/pages/pricing.html">
                    <span class="sidebar-mini-icon">+</span>
                    <span class="sidebar-normal"> Add </span>
                  </a>
                </li>
                <li>
                  <a href="../examples/pages/rtl.html">
                    <span class="sidebar-mini-icon">-</span>
                    <span class="sidebar-normal">Remove</span>
                  </a>
                </li>
                <li>
                  <a href="./mentor_list.php">
                    <span class="sidebar-mini-icon">L</span>
                    <span class="sidebar-normal">List</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a data-toggle="collapse" href="#ContestPage">
              <i class="tim-icons icon-planet"></i>
              <p>
                Contest
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="ContestPage">
              <ul class="nav">
                <li>
                  <a href="./create_contest.php">
                    <span class="sidebar-mini-icon">C.C</span>
                    <span class="sidebar-normal"> Create Contest </span>
                  </a>
                </li>
                <li>
                  <a href="../examples/pages/rtl.html">
                    <span class="sidebar-mini-icon">C.L</span>
                    <span class="sidebar-normal">Contest List</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a data-toggle="collapse" href="#pagesExamples">
              <i class="tim-icons icon-volume-98"></i>
              <p>
                Events
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="pagesExamples">
              <ul class="nav">
                <li>
                  <a href="../examples/pages/pricing.html">
                    <span class="sidebar-mini-icon">C.E</span>
                    <span class="sidebar-normal"> Create Event </span>
                  </a>
                </li>
                <li>
                  <a href="../examples/pages/rtl.html">
                    <span class="sidebar-mini-icon">E.L</span>
                    <span class="sidebar-normal">Event List</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a data-toggle="collapse" href="#pagesExamples2">
              <i class="tim-icons icon-image-02"></i>
              <p>
                Tasks
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="pagesExamples2">
              <ul class="nav">
                <li>
                  <a href="../examples/pages/pricing.html">
                    <span class="sidebar-mini-icon">C.T</span>
                    <span class="sidebar-normal"> Create Tasks By Event </span>
                  </a>
                </li>
                <li>
                  <a href="../examples/pages/rtl.html">
                    <span class="sidebar-mini-icon">T.L</span>
                    <span class="sidebar-normal">Taks List</span>
                  </a>
                </li>
              </ul>
            </div>
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
