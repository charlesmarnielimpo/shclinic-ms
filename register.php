<?php $title = "Register"; ?>
<?php 
  require_once 'php_action/db-connect.php';
  
  session_start();

  if (isset($_SESSION['session_id'])) {
    header('location: dashboard.php');
  }
?>
<?php require_once 'includes/header.php'; ?>

  <div class="middle-box register animated fadeInDown">
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
          <span class="line">Register</span>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="alert alert-info" style="border-left:3px solid #31708f;">
            <strong>Note: </strong><span>Fields with asterisk (*) are required.</span>
          </div>
        </div>
      </div>
      <form class="m-t" role="form" method="post" action="auth/register-user.php" id="frm-register">
        <div class="alert alert-danger" style="display: none;">
          <i class="fa fa-exclamation-triangle"></i>
          <span></span>
        </div>
        <div id="messages"></div>
        <h2>Role</h2>
        <div class="row role">
          <div class="form-group">
            <div class="col-md-1">
              <div class="i-checks">
                <label>
                  <input type="radio" value="2" name="iCheck" id="txt-register-role-doctor">
                </label>
              </div>
            </div>
            <div class="col-md-1">
              <img src="assets/custom/img/roles/doctor.png" width="40" height="40" class="img-circle" style="border: 2px solid #aaa; background-color: #aaa;">
            </div>
            <div class="col-md-10">
              <strong><span>Doctor</span></strong><br>
              <small><p class="text-muted" style="margin-bottom: 0;">Patients, Diagnosis, Prescriptions, Appointment Schedules</p></small>
            </div>
            <div class="code" style="margin-top: 10px; display: none;">
              <div class="col-md-10 col-md-offset-2">
                <div class="form-group code" style="margin: 10px 0 0 0;">
                  <label for="clinic_code" style="margin-bottom: 0;" class="control-label"><small>Please enter your clinic code</small></label>
                  <input type="text" class="form-control" name="clinic_code" id="txt-register-doctor-clinic-code">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row role">
          <div class="form-group">
            <div class="col-md-1">
              <div class="i-checks">
                <label>
                  <input type="radio" value="4" name="iCheck" id="txt-register-role-nurse">
                </label>
              </div>
            </div>
            <div class="col-md-1">
              <img src="assets/custom/img/roles/nurse.png" width="40" height="40" class="img-circle" style="border: 2px solid #aaa; background-color: #aaa;">
            </div>
            <div class="col-md-10">
              <strong><span>Nurse</span></strong><br>
              <small><p class="text-muted" style="margin-bottom: 0;">Patients, Report, Appointment Schedules</p></small>
            </div>
            <div class="code" style="margin-top: 10px; display: none;">
              <div class="col-md-10 col-md-offset-2">
                <div class="form-group code" style="margin: 10px 0 0 0;">
                  <label for="clinic_code" style="margin-bottom: 0;" class="control-label"><small>Please enter your clinic code</small></label>
                  <input type="text" class="form-control" name="clinic_code" id="txt-register-nurse-clinic-code">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row role">
          <div class="form-group">
            <div class="col-md-1">
              <div class="i-checks">
                <label>
                  <input type="radio" checked value="3" name="iCheck" id="txt-register-role-patient">
                </label>
              </div>
            </div>
            <div class="col-md-1">
              <img src="assets/custom/img/roles/patient.png" width="40" height="40" class="img-circle" style="border: 2px solid #aaa; background-color: #aaa;">
            </div>
            <div class="col-md-10">
              <strong><span>Patient</span></strong><br>
              <small><p class="text-muted" style="margin-bottom: 0;">Doctors, Appointment Schedules</p></small>
            </div>
          </div>
        </div>

        <hr class="hr-line-solid">

        <h2>Basic Information</h2>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="txt-register-first-name" class="control-label">First Name *</label>
              <input type="text" name="first_name" id="txt-register-first-name" class="form-control" placeholder="First name">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label for="txt-register-middle-name" class="control-label">Middle Name *</label>
              <input type="text" name="middle_name" id="txt-register-middle-name" class="form-control" placeholder="Middle name">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="txt-register-last-name" class="control-label">Last Name *</label>
              <input type="text" name="last_name" id="txt-register-last-name" class="form-control" placeholder="Last name">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label for="txt-register-ext">Ext</label>
              <input type="text" name="ext" id="txt-register-ext" class="form-control" placeholder="(e.g. Jr/Sr)">
            </div>
          </div>
        </div>
        <div class="patient">
          <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="ddl-register-civil-status" class="control-label">Civil Status *</label>
                  <select name="civil_status" class="form-control" id="ddl-register-civil-status">
                    <option disabled selected>Select</option>
                    <option>Single</option>
                    <option>Married</option>
                    <option>Separated</option>
                    <option>Divorced</option>
                    <option>Widowed</option>
                  </select>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="txt-register-contact-number" class="control-label">Mobile # *</label>
                  <input type="text" name="contact_number" class="form-control" id="txt-register-contact-number" placeholder="0936-352-9312" data-mask="9999-999-9999">
                </div>
              </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group" id="birth_date">
                <label for="txt-register-birth-date" class="control-label">Birth Date *</label>
                <div class="input-group date">
                  <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" id="txt-register-birth-date" name="birth_date" data-date-format="yyyy-mm-dd">
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="ddl-register-sex" class="control-label">Sex *</label>
                <select name="sex" class="form-control" id="ddl-register-sex">
                  <option disabled selected>Select</option>
                  <option>Male</option>
                  <option>Female</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="ddl-register-address" class="control-label">Address *</label>
                <select name="address" class="form-control" id="ddl-register-address">
                  <option disabled selected>Select</option>
                  <?php 
                    $sql = "SELECT * FROM barangays";
                    $result = $connect->query($sql);

                    foreach($result as $key => $barangay) {
                      echo '<option value="'.$barangay['barangay_number'].'">Barangay '.$barangay['barangay_number']. " - " .$barangay['barangay_name']. ', Legazpi City</option>';
                    }
                  ?>
                  </select>
              </div>
            </div>
          </div>
        </div>
        
        <div class="nurse" style="display: none">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="ddl-register-job-title" class="control-label">Job Title *</label>
                <select name="job_title" class="form-control" id="ddl-register-job-title">
                  <option disabled selected>Select</option>
                  <option value="Medical Director">Medical Director</option>
                  <option value="Physician">Physician</option>
                  <option value="Nurse">Nurse</option>
                </select>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="txt-register-license-number" class="control-label">License # *</label>
                <input type="number" name="license_number_nurse" id="txt-register-license-number" class="form-control" placeholder="License #">
              </div>
            </div>
          </div>
        </div>
        <div class="doctor" style="display: none;">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="ddl-register-job-title" class="control-label">Job Title *</label>
                <select name="job_title" class="form-control" id="ddl-register-job-title">
                  <option disabled selected>Select</option>
                  <option value="Medical Director">Medical Director</option>
                  <option value="Physician">Physician</option>
                  <option value="Nurse">Nurse</option>
                </select>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="txt-register-license-number" class="control-label">License # *</label>
                <input type="number" name="license_number_doctor" id="txt-register-license-number" class="form-control" placeholder="License #">
              </div>
            </div>
          </div>
          
          <hr class="hr-line-solid">

          <h2>Doctor's Affiliate</h2>

          <div class="add"></div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="ddl-register-affiliation" class="control-label">Affiliation *</label>
                <select name="affiliation" class="form-control" id="ddl-register-affiliation">
                  <option disabled selected>Select</option>
                  <option value="Sacred Heart Clinic">Sacred Heart Clinic</option>
                  <option value="Estevez Memorial Hospital">Estevez Memorial Hospital</option>
                  <option value="Ago General Hospital">Ago General Hospital</option>
                  <option value="Tanchuling Hospital">Tanchuling Hospital</option>
                  <option value="Albay Doctor's Hospital">Albay Doctor's Hospital</option>
                  <option value="Aquinas Hospital">Aquinas Hospital</option>
                </select>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="txt-register-affiliation-from" class="control-label">From *</label>
                <div class="input-group clockpicker" data-autoclose="true">
                  <input type="text" class="form-control" id="txt-register-affiliation-from" name="affiliation_from">
                  <span class="input-group-addon">
                      <span class="fa fa-clock-o"></span>
                  </span>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="txt-register-affiliation-to" class="control-label">To *</label>
                <div class="input-group clockpicker" data-autoclose="true">
                  <input type="text" class="form-control" id="txt-register-affiliation-to" name="affiliation_to">
                  <span class="input-group-addon">
                      <span class="fa fa-clock-o"></span>
                  </span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="ddl-register-affiliation-days" class="control-label">Day(s) *</label>
                <select name="affiliation_days" class="form-control" id="ddl-register-affiliation-days">
                  <option disabled selected>Select</option>
                  <option value="Monday">Monday</option>
                  <option value="Tuesday">Tuesday</option>
                  <option value="Wednesday">Wednesday</option>
                  <option value="Thursday">Thursday</option>
                  <option value="Friday">Friday</option>
                  <option value="Saturday">Saturday</option>
                  <option value="Sunday">Sunday</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <a class="btn btn-success add-row" style="float: right; margin-top: 25px;"><i class="fa fa-plus"></i></a>
            </div>
          </div>
        </div>

        <hr class="hr-line-solid">

        <h2>Account Information</h2>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="txt-register-username" class="control-label">Username *</label>
              <input type="text" name="username" id="txt-register-username" class="form-control" placeholder="Username">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label for="txt-register-email" class="control-label">Email *</label>
              <input type="email" name="email" id="txt-register-email" class="form-control" placeholder="Email">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="txt-register-password" class="control-label">Password *</label>
              <input type="password" name="password" id="txt-register-password" class="form-control" placeholder="Password">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label for="txt-register-confirm-password" class="control-label">Confirm Password *</label>
              <input type="password" name="confirm_password" id="txt-register-confirm-password" class="form-control" placeholder="Confirm Password">
            </div>
          </div>
        </div>

        <hr class="hr-line-solid">

        <button type="submit" class="btn btn-primary block full-width m-b" id="btn-register">Register</button>

        <p class="text-muted text-center"><small>Already have an account?</small></p>
        <a class="btn btn-sm btn-white btn-block" href="login.php">Login</a>
      </form>
    </div>
  </div>

<?php require_once 'includes/scripts.php'; ?>
<?php require_once 'includes/footer.php'; ?>