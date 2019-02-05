<footer class="footer">
  <div class="container-fluid">
    <ul class="nav">
      <li class="nav-item">
        <a href="javascript:void(0)" class="nav-link">
          DevelopHowTo
        </a>
      </li>
      <li class="nav-item">
        <a href="javascript:void(0)" class="nav-link">
          About Us
        </a>
      </li>
      <li class="nav-item">
        <a href="javascript:void(0)" class="nav-link">
          Blog
        </a>
      </li>
    </ul>
    <div class="copyright">
      ©
      <script>
        document.write(new Date().getFullYear())
      </script> made with <i class="tim-icons icon-heart-2"></i> by
      <a href="javascript:void(0)" target="_blank">DevelopHowTo</a> for a better future.
    </div>
  </div>
</footer>
</div>
</div>
<div class="fixed-plugin">
<div class="dropdown show-dropdown">
<a href="dashboard.html#" data-toggle="dropdown">
  <i class="fa fa-cog fa-2x"> </i>
</a>
<ul class="dropdown-menu">
  <li class="header-title"> Sidebar Background</li>
  <li class="adjustments-line">
    <a href="javascript:void(0)" class="switch-trigger background-color">
      <div class="badge-colors text-center">
        <span class="badge filter badge-primary active" data-color="primary"></span>
        <span class="badge filter badge-info" data-color="blue"></span>
        <span class="badge filter badge-success" data-color="green"></span>
        <span class="badge filter badge-warning" data-color="orange"></span>
        <span class="badge filter badge-danger" data-color="red"></span>
      </div>
      <div class="clearfix"></div>
    </a>
  </li>
  <li class="header-title">
    Sidebar Mini
  </li>
  <li class="adjustments-line">
    <div class="togglebutton switch-sidebar-mini">
      <span class="label-switch">OFF</span>
      <input type="checkbox" name="checkbox" checked class="bootstrap-switch" data-on-label="" data-off-label="" />
      <span class="label-switch label-right">ON</span>
    </div>
    <div class="togglebutton switch-change-color mt-3">
      <span class="label-switch">LIGHT MODE</span>
      <input type="checkbox" name="checkbox" checked class="bootstrap-switch" data-on-label="" data-off-label="" />
      <span class="label-switch label-right">DARK MODE</span>
    </div>
  </li>
  <li class="button-container mt-4">
    <a href="" class="btn btn-default btn-block btn-round">
      Documentation
    </a>
  </li>
  <li class="header-title">Thank you for 95 shares!</li>
  <li class="button-container text-center">
    <button id="twitter" class="btn btn-round btn-info"><i class="fab fa-twitter"></i> &middot; 45</button>
    <button id="facebook" class="btn btn-round btn-info"><i class="fab fa-facebook-f"></i> &middot; 50</button>
    <br>
    <br>
    <a class="github-button" href="" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
  </li>
</ul>
</div>
</div>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<script src="../assets/js/plugins/moment.min.js"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for Sweet Alert -->
<script src="../assets/js/plugins/sweetalert2.min.js"></script>
<!--  Plugin for Sorting Tables -->
<script src="../assets/js/plugins/jquery.tablesorter.js"></script>
<!-- Forms Validations Plugin -->
<script src="../assets/js/plugins/jquery.validate.min.js"></script>
<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="../assets/js/plugins/bootstrap-selectpicker.js"></script>
<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="../assets/js/plugins/bootstrap-datetimepicker.js"></script>
<!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
<script src="../assets/js/plugins/jquery.dataTables.min.js"></script>
<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="../assets/js/plugins/bootstrap-tagsinput.js"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="../assets/js/plugins/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="../assets/js/plugins/fullcalendar.min.js"></script>
<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="../assets/js/plugins/jquery-jvectormap.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="../assets/js/plugins/nouislider.min.js"></script>
<!-- Chart JS -->
<script src="../assets/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/black-dashboard.min.js"></script>
<!-- Black Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/demo/demo.js"></script>
<!-- Sharrre libray -->
<script src="../assets/demo/jquery.sharrre.js"></script>

<script>
$(document).ready(function() {


$('#facebook').sharrre({
  share: {
    facebook: true
  },
  enableHover: false,
  enableTracking: false,
  enableCounter: false,
  click: function(api, options) {
    api.simulateClick();
    api.openPopup('facebook');
  },
  template: '<i class="fab fa-facebook-f"></i> Facebook',
  url: 'https://cup.develophowto.com/'
});

$('#google').sharrre({
  share: {
    googlePlus: true
  },
  enableCounter: false,
  enableHover: false,
  enableTracking: true,
  click: function(api, options) {
    api.simulateClick();
    api.openPopup('googlePlus');
  },
  template: '<i class="fab fa-google-plus"></i> Google',
  url: 'https://cup.develophowto.com/'
});

$('#twitter').sharrre({
  share: {
    twitter: true
  },
  enableHover: false,
  enableTracking: false,
  enableCounter: false,
  buttons: {
    twitter: {
      via: 'CreativeTim'
    }
  },
  click: function(api, options) {
    api.simulateClick();
    api.openPopup('twitter');
  },
  template: '<i class="fab fa-twitter"></i> Twitter',
  url: 'https://cup.develophowto.com/'
});
});
</script>

<noscript>
<img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&ev=PageView&noscript=1" />
</noscript>
<script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');
        $navbar = $('.navbar');
        $main_panel = $('.main-panel');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');
        sidebar_mini_active = true;
        white_color = false;

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



        $('.fixed-plugin a').click(function(event) {
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .background-color span').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data', new_color);
          }

          if ($main_panel.length != 0) {
            $main_panel.attr('data', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data', new_color);
          }
        });

        $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            sidebar_mini_active = false;
            blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
          } else {
            $('body').addClass('sidebar-mini');
            sidebar_mini_active = true;
            blackDashboard.showSidebarMessage('Sidebar mini activated...');
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);
        });

        $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (white_color == true) {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').removeClass('white-content');
            }, 900);
            white_color = false;
          } else {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').addClass('white-content');
            }, 900);

            white_color = true;
          }


        });

        $('.light-badge').click(function() {
          $('body').addClass('white-content');
        });

        $('.dark-badge').click(function() {
          $('body').removeClass('white-content');
        });
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      $('#datatable').DataTable({
        "pagingType": "full_numbers",
        "lengthMenu": [
          [10, 25, 50, -1],
          [10, 25, 50, "All"]
        ],
        responsive: true,
        language: {
          search: "_INPUT_",
          searchPlaceholder: "Search records",
        }

      });

      var table = $('#datatable').DataTable();

      // Edit record
      table.on('click', '.edit', function() {
        $tr = $(this).closest('tr');

        var data = table.row($tr).data();
        alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
      });

      // Delete a record
      table.on('click', '.remove', function(e) {
        $tr = $(this).closest('tr');
        table.row($tr).remove().draw();
        e.preventDefault();
      });

      //Like record
      table.on('click', '.like', function() {
        alert('You clicked on Like button');
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

      demo.initVectorMap();

    });
  </script>
</body>

</html>
