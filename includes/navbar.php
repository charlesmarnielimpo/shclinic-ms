<?php if($title == "Home") :?>
  <div class="navbar-wrapper">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">WEBAPPLAYERS</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a class="page-scroll" href="#page-top">Home</a></li>
            <li><a class="page-scroll" href="#features">Features</a></li>
            <li><a class="page-scroll" href="#team">Team</a></li>
            <li><a class="page-scroll" href="#testimonials">Testimonials</a></li>
            <li><a class="page-scroll" href="#pricing">Pricing</a></li>
            <li><a class="page-scroll" href="#contact">Contact</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="login.php">Log in</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
<?php endif ?>

<?php if($title != "Home") :?>
  <div class="row border-bottom">
    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
      <div class="navbar-header">
        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
        <?php if($_SESSION['session_role'] == 3) :?>
          <form role="search" class="navbar-form-custom" action="http://webapplayers.com/inspinia_admin-v2.7.1/search_results.html">
            <div class="form-group">
              <input type="text" placeholder="Search Physician/Doctor" class="form-control" name="top-search" id="top-search">
            </div>
          </form>
        <?php endif ?>
      </div>
      <ul class="nav navbar-top-links navbar-right">
        <li>
          <a href="logout.php">
            <i class="fa fa-sign-out"></i> Log out
          </a>
        </li>
      </ul>
    </nav>
  </div>
<?php endif ?>