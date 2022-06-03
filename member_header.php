<?php
 session_start(); 
 include_once("dbconn.php");

 if(isset( $_SESSION["loggedin"] )){
   $uname = $_SESSION["username"]; 

 }
 ?>


<header id="header" class="fixed-top header-scrolled">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <a href="member_index.php" class="logo me-auto me-lg-0"><img src="assets/img/mainlogo.png" alt="" class="img-fluid"><span id="logo_title">Love Tech.</span></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link" href="member_index.php">Home</a></li>
          <ul>
            <li class="dropdown"><a style="color: white;"><span>About</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="member_index.php#development_team">Development Team</a></li>
                <li><a href="member_index.php#about">Mission Vision</a></li>
              </ul>
          <li><a class="nav-link" href="member_tracking.php">Track Now</a></li>
          <li><a class="nav-link" href="member_feedback.php">Feedback</a></li>
        </ul>
      </nav>
      <a href="member_profile.php" class="profile-btn" style="color: aqua; font-weight: 1000;">Profile</a>
      <button class="login-signup-btn" onclick="javascript:logout_confirm()">Hi, <?php echo $uname ?></button>
    </div>
</header>


<script>
  function logout_confirm() {
    if (confirm("Are you confirm want to logout?"))
        window.location.href = "index.php";

    return false;
  }
</script>