<?php
 session_start(); 
 include_once("dbconn.php");

 if(isset( $_SESSION["loggedin"] )){
   $uname = $_SESSION["username"];
 }
 ?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Staff Profile - LoveTech. Tracking Platform</title>
  <?php include("link.php") ?>
</head>

<style>
  .container{
    margin-top: 100px;
  }
  .profile {
    margin-bottom: 30px;
    border: none;
    border-radius: 5px; 
    box-shadow: 0px 0 30px rgba(1, 41, 112, 0.1);
    padding: 0 20px 20px 20px;
  }
  .profile-title {
    padding: 20px 0 15px 0;
    font-size: 18px;
    font-weight: 500;
    color: #012970;
    font-family: "Poppins", sans-serif;
  }
  .profile-body {
    padding: 0 20px 20px 20px;
  }
  .profile .row {
    margin-bottom: 20px;
    font-size: 15px;
  }
  .label {
  font-weight: 600;
  color: rgba(1, 41, 112, 0.6);
}
  h5 {
    margin-bottom: 30px;
  }

</style>
<body>
  <main>
    <div class="container align-items-center justify-content-center">
      <div class="profile">

        <h5 class="profile-title text-center pb-0 fs-4">Staff Profile Details</h5>
        <?php
          $sql_query = "SELECT * FROM `tbladmins` WHERE `username` = '$uname';";
          $results = mysqli_query($conn, $sql_query);
          while($row = mysqli_fetch_assoc($results)){
        ?>
        <div class="row">
          <div class="col-lg-3 col-md-4 label">Username</div>
          <div class="col-lg-9 col-md-8"><?php echo $uname ?></div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-4 label">Password</div>
          <div class="col-lg-9 col-md-8">**********</div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-4 label">Full Name</div>
          <div class="col-lg-9 col-md-8"><?php echo $row["full_name"] ?></div>
        </div>
        
        <div class="row">
          <div class="col-lg-3 col-md-4 label">Email</div>
          <div class="col-lg-9 col-md-8"><?php echo $row["email"] ?></div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-4 label">Phone</div>
          <div class="col-lg-9 col-md-8"><?php echo $row["phone"] ?></div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-4 label">Address</div>
          <div class="col-lg-9 col-md-8"><?php echo $row["address"] ?></div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-4 label">City</div>
          <div class="col-lg-9 col-md-8"><?php echo $row["city"] ?></div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-4 label">Country</div>
          <div class="col-lg-9 col-md-8"><?php echo $row["country"] ?></div>
        </div>
        
        <div class="row">
          <div class="col-lg-3 col-md-4 label">Postal Code</div>
          <div class="col-lg-9 col-md-8"><?php echo $row["postal_code"] ?></div>
        </div>

        <div class="col-12">
          <button type="reset" class="btn btn-primary" onclick="window.location.href='staff_editprofile.php'">Edit</button>
          <button type="reset" class="btn btn-secondary" onclick="window.location.href='staff_homepage.php'">HomePage</button>

        </div>
        <?php } ?>
        </div>
      </div>
      <?php mysqli_close($conn); ?>
  </main>
</body>
</html>