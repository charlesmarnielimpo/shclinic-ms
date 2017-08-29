<?php 
  $name = $_SESSION['session_name'];
  $role = "";
  if ($_SESSION['session_role'] == 1) {
    $role = "Administrator";
  } else if ($_SESSION['session_role'] == 2) {
    $role = "Doctor";
  } else if ($_SESSION['session_role'] == 3) {
    $role = "Patient";
  } else {
    $role = "Nurse";
  }
?>
<nav class="navbar-default navbar-static-side fixed-sidebar" role="navigation">
  <div class="sidebar-collapse">
    <ul class="nav metismenu" id="side-menu">
      <li class="nav-header">
        <div class="dropdown profile-element">
          <span>
            <img alt="image" class="img-circle" src="assets/custom/img/profile_small.jpg" />
          </span>
          <a data-toggle="dropdown" class="dropdown-toggle" href="#">
            <span class="clear">
              <span class="block m-t-xs"> 
                <strong class="font-bold"><?php echo $name; ?></strong>
              </span> 
            <span class="text-muted text-xs block"><?php echo $role; ?> <b class="caret"></b></span> </span> </a>
          <ul class="dropdown-menu animated fadeInRight m-t-xs">
            <li><a href="profile.html">Profile</a></li>
            <li><a href="contacts.html">Contacts</a></li>
            <li><a href="mailbox.html">Mailbox</a></li>
            <li class="divider"></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
        <div class="logo-element">
          <img alt="image" src="assets/custom/img/SHC-CH-Logo.png" width="40">
        </div>
      </li>
      <li>
        <a href="dashboard.php"><i class="fa fa-laptop"></i> <span class="nav-label">Dashboards</span></a>
      </li>
      <li>
        <a href="doctor.php"><i class="fa fa-user-md"></i> <span class="nav-label">Doctors</span></a>
      </li>
      <li>
        <a href="patients.php"><i class="fa fa-medkit"></i> <span class="nav-label">Patients</span></a>
      </li>
      <li>
        <a href="appointments.php"><i class="fa fa-calendar"></i> <span class="nav-label">Appointments</span></a>
      </li>
      <li>
        <a href="#"><i class="fa fa-file-text"></i> <span class="nav-label">Reports</span></a>
      </li>
    </ul>
  </div>
</nav>