<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>My_Appraisal</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/S.jpg" rel="icon">
  <link href="assets/img/sinhgad_logo.jpg" rel="sinhgad_logo">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style2.css" rel="stylesheet">
<style> 
  #header{
    background-color: #312450;
    background-image: linear-gradient(to Right,#5e42a6,#b74e91);

  }
  #sidebar{
    background-color: #312450;
    background-image: linear-gradient(to Right,#5e42a6,#b74e91);

  }
  .tab-pane {
      padding: 30px;
	 background-color:#F0F8FF;
	 }
	
	table, th, td {
      border:none;
      border-collapse: collapse;
    }
    th, td {
      padding: 5px;
      text-align: left;
    }
    table.f1 {
      width: 100%;
    }
    input[type="text"] {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }
    .container {
      margin-top: 20px;
    }
    .card-header{
      padding-top: 10px!important;
      padding-bottom: 10px!important;
    }

    .nav>.nav-item> .nav-link{
        color:black;
    }
    .nav>.nav-item> .nav-link.active{

        background-color:#007bff;
        color:#fff;
    }
</style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
    <a href="" class="logo d-flex align-items-center">
    <img src="assets/img/S.jpg" alt="" style="border-radius:50%; height:55px; width:45px;">
        <span class="d-none d-lg-block">Sinhgad Institute </span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo --> 
    <div> 
      <img src="" >

    </div>


    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-1.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Bhushan Nikam</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Bhushan Nikam</h6>
              <span>Assistant Professor</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="/Profile">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="/Sinhgadportal">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>SELF APPRAISAL</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/My_Appraisal">
              <i class="bi bi-circle"></i><span>My Appraisal</span>
            </a>
          </li>
          <li>
            <a href="/Performance_Appraisal">
              <i class="bi bi-circle"></i><span>Performance_Appraisal</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link " href="/personal_info">
          <i class="bi bi-person"></i>
          <span>Personal Info</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="ri-chat-4-line"></i><span>Help !</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/Contact">
              <i class="bi bi-circle"></i><span>Contact Us</span>
            </a>
          </li>
          
        </ul>
      </li><!-- End Help Nav -->

    </ul>

  </aside>
  <!-- main Start -->
  <main id="main" class="main">
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div id="multiStepForm" class="card">
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="identify-tab" data-toggle="tab" href="#identify" role="tab" aria-controls="identify" aria-selected="true">Step1</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="kyc-tab" data-toggle="tab" href="#kyc" role="tab" aria-controls="kyc" aria-selected="false">Step2</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Step3</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Step4</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profileone" data-toggle="tab" href="#one" role="tab" aria-controls="one" aria-selected="false">Step5</a>
            </li>
            
          </ul>
        </div>
        <div class="tab-content" id="myTabContent">
          <!-- Step 1: Identify Yourself -->
          <div class="tab-pane fade show active" id="identify" role="tabpanel" aria-labelledby="identify-tab">
            <h4 class="text-left-side">Peformance Appriarasal Form For Teaching Faculty</h4><br>
            <center><table class="f1">
    <tr>
      <th>Name in Full:</th>
      <td><input type="text" name="name" size="10"></td>
      <th>Employee Code:</th>
      <td><input type="text" name="empCode" size="10"></td>
    </tr>
    <tr>
      <th>Aadhar No:</th>
      <td><input type="text" name="aadhar" size="10"></td>
      <th>Date of Birth:</th>
      <td><input type="text" name="dob" size="10"></td>
    </tr>
    <tr>
      <th>Designation:</th>
      <td><input type="text" name="designation" size="10"></td>
      <th>College / Institute:</th>
      <td><input type="text" name="institute" size="10"></td>
    </tr>
    <tr>
      <th>Department:</th>
      <td><input type="text" name="department" size="10"></td>
      <th>Campus:</th>
      <td><input type="text" name="campus" size="10"></td>
    </tr>
    <tr>
      <th>Qualification:</th>
      <td><input type="text" name="qualification" size="10"></td>
      <th>Specialization:</th>
      <td><input type="text" name="specialization" size="10"></td>
    </tr>
    <tr>
      <th>Registered for Ph.D. (if applicable):</th>
      <td>
        <input type="radio" name="phd" value="yes">Yes 
        <input type="radio" name="phd" value="no">No
      </td>
      <th>Name of the University for Ph.D.:</th>
      <td><input type="text" name="phdUniversity" size="10"></td>
    </tr>
    <tr>
      <th>Joining date at STES:</th>
      <td><input type="date" name="stesJoiningDate"></td>
      <th>Joining date at Institute:</th>
      <td><input type="date" name="instituteJoiningDate"></td>
    </tr>
    <tr>
      <th>Total Experience:</th>
      <td><input type="number" name="experience" size="10"></td>
      <th>Teaching:</th>
      <td><input type="number" name="teaching" size="10"></td>
    </tr>
    <tr>
      <th>Industry:</th>
      <td><input type="number" name="industry" size="10"></td>
    </tr>
    <tr>
      <th>Period of Assessment:</th>
      <td>From :<input type="date" name="assessmentFrom"></td>  <td> TO :<input type="date" name="assessmentTo"></td>
    </tr>
    <tr>
      <th colspan="4">Leave Availed during assessment period:</th>
    </tr>
    <tr>
      <td>Casual Leave:</td>
      <td><input type="number" name="casualLeave" size="10"></td>
      <td>Medical Leave:</td>
      <td><input type="number" name="medicalLeave" size="10"></td>
    </tr>
    <tr>
      <td>Earned Leave:</td>
      <td><input type="number" name="earnedLeave" size="10"></td>
      <td>Leave without Pay:</td>
      <td><input type="number" name="leaveWithoutPay" size="10"></td>
    </tr>
    <tr>
      <td>Maternity Leave:</td>
      <td><input type="number" name="maternityLeave" size="10"></td>
      <td>Study Leave:</td>
      <td><input type="number" name="studyLeave" size="10"></td>
    </tr>
    <tr>
      <th colspan="4">Appreciation Received (if any):</th>
    </tr>
    <tr>
      <th colspan="4"><textarea name="appreciation" rows="1" cols="100"></textarea></th>
    </tr>
    <tr>
      <th colspan="4">Memo Received (if any):</th>
    </tr>
    <tr>
      <th colspan="4"><textarea name="memo" rows="1" cols="100"></textarea></th>
    </tr>
    <tr>
      <th colspan="4">Status of Appointment (Approval from University):</th>
    </tr>
    <tr>
      <th colspan="4">
        <input type="radio" name="appointmentStatus" value="adhoc">Adhoc
        <input type="radio" name="appointmentStatus" value="regular">Regular
      </th>
    </tr>
    <tr>
      <th>Period of Approval:</th>
      <td>From : <input type="date" name="approvalFrom"></td>
	  <td>To : <input type="date" name="approvalTo"></td>
    </tr>
    <tr>
      <th>Pay Scale: Basic Pay:</th>
      <td><input type="number" name="basicPay" size="30"></td>
    </tr>
	<tr>
	<th>Level:</th>
      <td><input type="number" name="level" size="30"></td>
	</tr>
    <tr>
      <th>
      <a href="file:///C:/Users/HP/AppData/Local/Microsoft/Windows/INetCache/IE/MWFVH6BU/instruction[1].html">General Instructions</a>

      </th>
    </tr>
  </table></center>
  <button type="button" class="btn btn-primary next-tab">Next</button>
    </div>
  <!-- Step 2: Select KYC -->
    <div class="tab-pane fade" id="kyc" role="tabpanel" aria-labelledby="kyc-tab">
    <h5 class="text-center">Qualification Before Assisment Year</h5>

    <center> <table class="f1">
    <tr>
      <th>Degree</th>
      <th>Specialization</th>
      <th>Year</th>
      <th>Division/Grade/Percentage Marks</th>
      <th>Name of Institute/College</th>
      <th>University</th>
    </tr>
    <tr>
      <td>Graduate</td>
      <td><input type="text" size="30"></td>
      <td><input type="text" size="10"></td>
      <td><input type="text" size="30"></td>
      <td><input type="text" size="30"></td>
      <td><input type="text" size="30"></td>
    </tr>
    <tr>
      <td>Post Graduate</td>
      <td><input type="text" size="30"></td>
      <td><input type="text" size="10"></td>
      <td><input type="text" size="30"></td>
      <td><input type="text" size="30"></td>
      <td><input type="text" size="30"></td>
    </tr>
    <tr>
      <td>Ph.D./M.Phil. or Equivalent</td>
      <td><input type="text" size="30"></td>
      <td><input type="text" size="10"></td>
      <td><input type="text" size="30"></td>
      <td><input type="text" size="30"></td>
      <td><input type="text" size="30"></td>
    </tr>
    <tr>
      <td>Any Other</td>
      <td><input type="text" size="30"></td>
      <td><input type="text" size="10"></td>
      <td><input type="text" size="30"></td>
      <td><input type="text" size="30"></td>
      <td><input type="text" size="30"></td>
    </tr>
  </table></center>
    <button type="button" class="btn btn-primary prev-tab">Previous</button>
    <button type="button" class="btn btn-primary next-tab">Next</button>
    </div>

<!-- Step 3: Contact Details -->
<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
<h4>Qualification(Acquired During Assesment Period)</h4>
 <center> <table class="f1">
    <tr>
      <th>Degree</th>
      <th>Specialization</th>
      <th>Year</th>
      <th>Division/Grade/Percentage Marks</th>
      <th>Name of Institute/College</th>
      <th>University</th>
    </tr>
    <tr>
      <td>Ph.D./M.Phil. or Equivalent</td>
      <td><input type="text" size="30"></td>
      <td><input type="text" size="10"></td>
      <td><input type="text" size="30"></td>
      <td><input type="text" size="30"></td>
      <td><input type="text" size="30"></td>
    </tr>
    <tr>
      <td>Any Other</td>
      <td><input type="text" size="30"></td>
      <td><input type="text" size="10"></td>
      <td><input type="text" size="30"></td>
      <td><input type="text" size="30"></td>
      <td><input type="text" size="30"></td>
    </tr>
  </table> </center>
  <button type="button" class="btn btn-primary prev-tab">Previous</button>
    <button type="button" class="btn btn-primary next-tab">Next</button>
</div>


 <!-- Step 4: Your Profile -->
<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
<h3>Calculation of Faculty Performance Indicator(FPI)
<h4>Table 1: Performance Parameters Marks</h4></center>
    <center>
  <table class="f1">
    <tr>
      <th>Assessment Head<br>Maximum Marks</th>
      <th>Self Evaluation Marks</th>
      <th>Assessment Marks by HOD & Principal</th>
      <th>Performance Index (I)</th>
      <th>Weight (W)</th>
      <th>Weighted Performance Index (I x W)</th>
      <th>Faculty Performance Index (FPI)</th>
    </tr>
    <tr>
      <td>Academic Activities (AA)</td>
      <td><input type="text" placeholder="Enter Marks"></td>
      <td><input type="text" placeholder="Enter Marks"></td>
      <td><input type="text" placeholder="Enter Index"></td>
      <td>20%(P) 35% (A&S9C) 50%(AP)</td>
      <td><input type="text" placeholder="Enter Calculated Value"></td>
      <td><input type="text" placeholder="Enter Calculated Value"></td>
    </tr>
    <tr>
      <td>Professional & Extension Activities (PEA)</td>
      <td><input type="text" placeholder="Enter Marks"></td>
      <td><input type="text" placeholder="Enter Marks"></td>
      <td><input type="text" placeholder="Enter Index"></td>
      <td>15%(AP)<br>20% (A&S9C)<br>20%(P)</td>
      <td><input type="text" placeholder="Enter Calculated Value"></td>
      <td><input type="text" placeholder="Enter Calculated Value"></td>
    </tr>
    <tr>
      <td>Administrative Duties (AD)</td>
      <td><input type="text" placeholder="Enter Marks"></td>
      <td><input type="text" placeholder="Enter Marks"></td>
      <td><input type="text" placeholder="Enter Index"></td>
      <td>15%(AP)<br>20% (A&S9C)<br>30%(P)</td>
      <td><input type="text" placeholder="Enter Calculated Value"></td>
      <td><input type="text" placeholder="Enter Calculated Value"></td>
    </tr>
    <tr>
      <td>Research Activities (RA)</td>
      <td><input type="text" placeholder="Enter Marks"></td>
      <td><input type="text" placeholder="Enter Marks"></td>
      <td><input type="text" placeholder="Enter Index"></td>
      <td>20%(AP)<br>25% (A&S9C)<br>30%(P)</td>
      <td><input type="text" placeholder="Enter Calculated Value"></td>
      <td><input type="text" placeholder="Enter Calculated Value"></td>
    </tr>
    <tr>
      <td>Total</td>
      <td><input type="text" placeholder="Enter Marks"></td>
      <td><input type="text" placeholder="Enter Marks"></td>
      <td><input type="text" placeholder="Enter Marks"></td>
      <td>100% for all</td>
      <td><input type="text" placeholder="Enter Marks"></td>
      <td><input type="text" placeholder="Enter Marks"></td>
    </tr>
  </table></center>
            <button type="button" class="btn btn-primary prev-tab">Previous</button>
            <button type="button" class="btn btn-primary next-tab">Next</button>
          </div>

<!-- Step 5: Your Profile -->
<div class="tab-pane fade" id="one" role="tabpanel" aria-labelledby="one">
<h4>Table 2: Reference Guidelines for FPI</h4>
<div class="container">
    <center><table class="f1">
      <tr>
        <th>Sr. No.</th>
        <th>Parameter</th>
        <th>Performance Index (PI)</th>
        <th>Professor</th>
        <th>Associate Professor</th>
        <th>Assistant Professor</th>
      </tr>
      <tr>
        <td>1</td>
        <td>Academic Activities (AA)</td>
        <td>I1</td>
        <td>0.2</td>
        <td>0.35</td>
        <td>0.5</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Professional & Extension Activities (PEA)</td>
        <td>I2</td>
        <td>0.2</td>
        <td>0.2</td>
        <td>0.15</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Administrative Duties (AD)</td>
        <td>I3</td>
        <td>0.3</td>
        <td>0.2</td>
        <td>0.15</td>
      </tr>
      <tr>
        <td>4</td>
        <td>Research Activities (RA)</td>
        <td>I4</td>
        <td>0.3</td>
        <td>0.25</td>
        <td>0.2</td>
      </tr>
      <tr>
        <td>5</td>
        <td>Total</td>
        <td>-</td>
        <td>1.0</td>
        <td>1.0</td>
        <td>1.0</td>
      </tr>
    </table>
  </div></center>
            
              <button type="button" class="btn btn-primary prev-tab">Previous</button>
              <button type="submit" class="btn btn-success">Submit</button>
           
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

    
        

  </main><!-- End #main -->


    
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Sinhgad Institute</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- jQuery and Bootstrap Bundle with Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
  $(document).ready(function(){
    $('.next-tab').click(function(){
      var nextTab = $(this).closest('.tab-pane').next().attr('id');
      $('a[href="#' + nextTab + '"]').tab('show');
    });

    $('.prev-tab').click(function(){
      var prevTab = $(this).closest('.tab-pane').prev().attr('id');
      $('a[href="#' + prevTab + '"]').tab('show');
    });
  });
</script>

</body>

</html>