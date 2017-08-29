<?php $title = "Appointments"; ?>
<?php require_once 'php_action/core.php'; ?>
<?php require_once 'includes/header.php'; ?>

  <div id="wrapper">

    <?php require_once 'includes/sidebar.php'; ?>

    <div id="page-wrapper" class="gray-bg">
      <?php require_once 'includes/navbar.php'; ?>

      <div id="content">
        <div id="err500">
          <div class="middle-box text-center animated fadeInDown">
            <h1>500</h1>
            <h3 class="font-bold">Internal Server Error</h3>

            <div class="error-desc">
              The server encountered something unexpected that didn't allow it to complete the request. We apologize.</div>
          </div>
        </div>
        <div class="row wrapper border-bottom white-bg page-heading">
          <div class="col-sm-4">
            <h2>Appointments</h2>
            <ol class="breadcrumb">
              <li>
                <a href="dashboard.php">Dashboard</a>
              </li>
              <li class="active">
                <a href="appointments.php"><strong>Appointments</strong></a>
              </li>
            </ol>
          </div>
        </div>
        
        <div class="wrapper wrapper-content animated fadeInRight">
          <div class="row">
            <div class="col-lg-12">
              <div class="ibox">
                <div class="ibox-content">
                  <div id="calendar"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php require_once 'includes/scripts.php'; ?>
<?php require_once 'includes/footer.php'; ?>
