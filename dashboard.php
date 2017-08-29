<?php $title = "Dashboard"; ?>
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
            <h2>Dashboard</h2>
            <ol class="breadcrumb">
              <li class="active">
                <a href="dashboard.php"><strong>Dashboard</strong></a>
              </li>
            </ol>
          </div>
        </div>

        <div class="wrapper wrapper-content">
          <div class="middle-box text-center animated fadeInRightBig">
            <h3 class="font-bold">This is page content</h3>
            <div class="error-desc">
                You can create here any grid layout you want. And any variation layout you imagine:) Check out
                main dashboard and other site. It use many different layout.
              <br/><a href="index-2.html" class="btn btn-primary m-t">Dashboard</a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
<?php require_once 'includes/scripts.php'; ?>
<?php require_once 'includes/footer.php'; ?>
