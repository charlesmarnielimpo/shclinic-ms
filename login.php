<?php $title = "Log in"; ?>
<?php 
  require_once 'php_action/db-connect.php';
  
  session_start();

  if (isset($_SESSION['session_id'])) {
    header('location: dashboard.php');
  }
?>
<?php require_once 'includes/header.php'; ?>

  <div class="middle-box loginscreen animated fadeInDown">
    <div class="well">       
      <div class="row">
        <center>
          <img src="assets/custom/img/SHC-CH-Logo.png" class="m-sm" alt="Logo" style="height: 100px;">
        </center>
      </div>
      <div class="row">
        <center>
          <img src="assets/custom/img/SHC-Font-Logo.png" alt="Logo" style="height: 40px;">
        </center>
      </div>
      <div class="row">
        <div class="divider">
          <span class="line">Log in</span>
        </div>
      </div>
      <form class="m-t" role="form" method="POST" action="auth/login-user.php" id="frm-login">
        <!-- <div id="messages"></div> -->
        <div class="alert alert-danger" style="display: none;">
          <i class="fa fa-exclamation-triangle"></i>
          <span></span>
        </div>
        <div class="form-group">
          <input type="text" name="username" id="txt-login-username" class="form-control" placeholder="Username" autocomplete="off">
        </div>
        <div class="form-group">
          <input type="password" name="password" id="txt-login-password" class="form-control" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary block full-width m-b" id="btn-login">Log in</button>

        <a href="#"><small>Forgot password?</small></a>
        <p class="text-muted text-center"><small>Do not have an account?</small></p>
        <a class="btn btn-sm btn-white btn-block" href="register.php">Create an account</a>
      </form>
    </div>
  </div>

<?php require_once 'includes/scripts.php'; ?>
<?php require_once 'includes/footer.php'; ?>