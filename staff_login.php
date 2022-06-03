<?php
    session_start();
    include_once("dbconn.php");

    if(isset($_POST["login"])){
        $uname =  $_POST["username"];
        $password = $_POST["password"];

        $sql = "SELECT * FROM tbladmins WHERE username='$uname' AND password='$password'";

        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count==1){
            echo "Login successful";
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $row["username"];
            header("Location: staff_homepage.php");
        }else{
            $error_msg = "<p class='error_msg'>Login Failed! Username or Password Wrong!</p>";
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
  <title>Staff Login - LoveTech. Tracking Platform</title>
  <?php include("link.php") ?>
</head>

<style>
  .form {
    margin-bottom: 30px;
    border: none;
    border-radius: 5px;
    box-shadow: 0px 0 30px rgba(1, 41, 112, 0.1);
  }
  .form-title {
    padding: 20px 0 15px 0;
    font-size: 18px;
    font-weight: 500;
    color: #012970;
    font-family: "Poppins", sans-serif;
  }
  .form-body {
    padding: 0 20px 20px 20px;
  }
  .error_msg{
    border: 1px red solid;
    text-align: center;
    border-radius: 5px;
    background-color: #FFAAAA;
    color: black;
    font-size: 15px;
    font-weight: bold;
  }

</style>
<body>
  <main>
    <div class="container">

      <section class="section min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
              
              <div class="form mb-3">

                <div class="form-body">

                  <div class="pt-4 pb-2">
                    <h5 class="form-title text-center pb-0 fs-4">Staff Login</h5>
                  </div>

                  <form action="" method="POST" class="row g-3 was-validated">
                  <?=(isset($error_msg)) ? $error_msg : '';?>
                    <div class="col-12">
                      <label for="username" class="form-label">Username:</label>
                      <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" pattern="^(?=.{5,50}$)(?![_.])(?!.*[_.]{2})[a-zA-Z0-9._]+(?<![_.])$" required>
                      <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="col-12">
                      <label for="password" class="form-label">Password:</label>
                      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$" required>
                      <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="col-12">
                      <button type="submit" name="login" class="btn btn-primary">Login</button>
                      <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                  </form>

                </div>
              </div>

              

            </div>
          </div>
        </div>

      </section>

    </div>
  </main>
</body>
</html>