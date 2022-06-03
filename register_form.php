<?php

    include_once("dbconn.php");
    $errors = array(); 

    if(isset($_POST['registerBtn'])){
      $uname = $_POST['username'];
      $password = $_POST['password'];
      $password2 = $_POST['confPassword'];
      $email = trim($_POST['email']);
      $phone = trim($_POST['phone']); 

      if ($password != $password2) {
        array_push($errors, "The two passwords do not match");
      }

      // Check username exists?
      $username_sql = "SELECT * FROM tblusers WHERE username='$uname'";

      $result = mysqli_query($conn,$username_sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count==1){
        echo"<script>alert('Username Exist!')</script>";
      }elseif(count($errors) != 0){
        echo"<script>alert('The confirmation password does not match')</script>";
      }else{
        $insert_sql = "INSERT INTO `tblusers`( `username`, `password`, `email`, `phone`) 
        VALUES ('$uname','$password','$email','$phone')";
        if(mysqli_query($conn,$insert_sql)){
          echo "<script>alert('Account Created Successfully!')</script>";
          header("location: login_form.php");
        }else{
          echo"<script>alert('Error in creating the account')</script>";
          header("location: register_form.php");
        }
      }

      mysqli_close($conn);
  }
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LoveTech. Tracking Platform</title>
  <?php include("link.php") ?>

</head>

<body>
  <?php include("header.php") ?>

  <main id="ltr_form">
    <main class="section min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

            <div class="form mb-3">

              <div class="form-body">

                <div class="pt-4 pb-2">
                  <h5 class="form-title text-center pb-0 fs-4">MEMBER REGISTER</h5>
                </div>

                <form action="" class="row g-3 was-validated" method="POST">
                  <div class="col-12">
                    <label for="username" class="form-label">Username:</label>
                    <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" pattern="^(?=.{5,50}$)(?![_.])(?!.*[_.]{2})[a-zA-Z0-9._]+(?<![_.])$" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Username must consists of more than 5 characters.</div>
                  </div>
                  <div class="col-12">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please insert valid email.</div>
                  </div>
                  <div class="col-12">
                    <label for="phone" class="form-label">Phone Number:</label>
                    <input type="text" class="form-control" id="phone" placeholder="Enter phone number" name="phone" pattern="^(01)[0-9]{8}$" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Only valid Malaysian phone number start with "01" allowed.</div>
                  </div>
                  <div class="col-12">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Password must consists of more than 8 characters with at least one digit, one uppercase and lowercase letters.</div>
                  </div>
                  <div class="col-12">
                    <label for="confPassword" class="form-label">Confirm Password:</label>
                    <input type="password" class="form-control" id="confPassword" placeholder="Enter confirm password" name="confPassword" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Confirm Password and Password must be matched.</div>
                  </div>
                  <div class="col-12">
                    <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required>
                    <label for="agree-term" class="label-agree-term">I agree all statements in <a href="#termsCondModalLong" class="term-service" data-toggle="modal" data-target="#termsCondModalLong">Terms of service</a>.</label>

                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback" style="font-size: smaller;">*Required</div>
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary" name="registerBtn" id="registerBtn">REGISTER</button>
                  </div>
                </form>
                <p class="here">
                  Have an account ? <a href="login_form.php">Login here</a>
                </p>
              </div>
            </div>



          </div>
        </div>
      </div>

    </main>
  </main>

  <?php include("footer.php") ?>

  <div>
    <?php include("term&condition.php") ?>
  </div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
<?php include("js.php") ?>

</html>