<?php
 session_start(); 
 include_once("dbconn.php");

 if(isset( $_SESSION["loggedin"] )){
   $uname = $_SESSION["username"]; 

 }
 ?>

<?php
  include_once("dbconn.php");
  
  
  if(isset($_POST['btnEdit'])){
      $username = $_POST["username"];
      $email = $_POST["email"];
      $phone = $_POST["phone"];
      $password = $_POST["password"];
      $full_name = $_POST["name"];
      $address = $_POST["address"];
      $city = $_POST["city"];
      $country = $_POST["country"];
      $postal_code = $_POST["postal_code"];


      $update_query = "UPDATE `tblusers` SET `phone`='$phone', `email`='$email',`password`='$password',`full_name`='$full_name',`address`='$address',`city`='$city',`country`='$country',`postal_code`='$postal_code' WHERE username='$uname'";

      if(mysqli_query($conn, $update_query)){
          header('Location: member_profile.php');
      }else{
          echo "Error in updating!";
      }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Profile - LoveTech. Tracking Platform</title>
  <?php include("link.php") ?>
</head>

<style>
  .container{
    padding-top: 0px;
    padding-bottom: 0px;
  }
  .container1{
    margin-top: 100px;
    margin-left: 400px;
    margin-right: 400px;
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

  .match{
    color: #15a33b;
  }

  .error{
    color: #f23f3f;
  }

</style>

<body>
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
  <main>
    <div class="container1 align-items-center justify-content-center">
      <div class="profile">

        <h5 class="profile-title text-center pb-0 fs-4">Modify Member Profile Details</h5>
        <form action="#" class="was-validated" method="post">
        <?php
          $sql_query = "SELECT * FROM `tblusers` WHERE `username` = '$uname';";
          $results = mysqli_query($conn, $sql_query);
          while($row = mysqli_fetch_assoc($results)){
        ?>
        <div class="row">
          <div class="col-lg-3 col-md-4 label">Username</div>
          <div class="col-lg-9 col-md-8">
            <div>
              <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" value="<?php echo $uname ?>" pattern="^(?=.{5,50}$)(?![_.])(?!.*[_.]{2})[a-zA-Z0-9._]+(?<![_.])$" disabled>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Invalid.</div>
            </div>
        </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-4 label">Email</div>
          <div class="col-lg-9 col-md-8">
            <div>
              <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $row["email"] ?>" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Invalid.</div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-4 label">Password</div>
          <div class="col-lg-9 col-md-8">
            <div>
              <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" value="<?php echo $row["password"] ?>" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Invalid.</div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-4 label">Full Name</div>
          <div class="col-lg-9 col-md-8">
            <div>
              <input type="text" class="form-control" id="name" placeholder="Enter full name" name="name" value="<?php echo $row["full_name"] ?>" pattern="^[a-zA-Z '.-,]{4,}(?: [a-zA-Z]+)?(?: [a-zA-Z]+)?$" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Invalid.</div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-4 label">Phone Number</div>
          <div class="col-lg-9 col-md-8">
            <div>
              <input type="text" class="form-control" id="phone" placeholder="Enter phone number" name="phone" value="<?php echo $row["phone"] ?>" pattern="^(01)[0-9]{8}$" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Invalid.</div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-4 label">Address</div>
          <div class="col-lg-9 col-md-8">
            <div>
              <input type="text" class="form-control" id="address" placeholder="Enter address" name="address" value="<?php echo $row["address"] ?>" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Invalid.</div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-4 label">City</div>
          <div class="col-lg-9 col-md-8">
            <div>
              <input type="text" class="form-control" id="city" placeholder="Enter city" name="city" value="<?php echo $row["city"] ?>" pattern="[A-Za-z ]{3,}" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Invalid.</div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-4 label">Country</div>
          <div class="col-lg-9 col-md-8">
            <div>
              <input type="text" class="form-control" id="country" placeholder="Enter country" name="country" value="<?php echo $row["country"] ?>" pattern="[A-Za-z]{3,}" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Invalid.</div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-4 label">Postal Code</div>
          <div class="col-lg-9 col-md-8">
            <div>
              <input type="text" class="form-control" id="postal_code" placeholder="Enter postal code" name="postal_code" value="<?php echo $row["postal_code"] ?>" pattern="[0-9]{5}" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Invalid.</div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary" name="btnEdit">Done Edit</button>
          <button type="reset" class="btn btn-secondary" onclick="window.location.href='member_index.php'">HomePage</button>
        </div>
      </form>
      <?php } ?>
        </div>
      </div>

  </main>
  <?php mysqli_close($conn); ?>
  <?php include("member_footer.php") ?>
</body>

<script>
  function logout_confirm() {
    if (confirm("Are you confirm want to logout?"))
        window.location.href = "index.php";

    return false;
  }
</script>


</html>