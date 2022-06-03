<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile - LoveTech. Tracking Platform</title>
  <?php include("link.php") ?>
</head>

<style>
/* Header */
#header {
    transition: all 0.5s;
    z-index: 997;
    padding: 15px 0;
  }
  #header.header-scrolled{
    background: rgba(0, 15, 37, 0.8);
  }
  #header .logo {
    font-size: 32px;
    margin: 0;
    padding: 0;
    line-height: 1;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
  }
  #header .logo img {
    max-height: 40px;
  }
  #header #logo_title{
    font-size: 20px;
  }

/* -------------------------------- */

/* Navigation Bar */
.navbar {
    padding: 0.5px;
  }
  .navbar ul {
    margin: 0;
    padding: 0;
    display: flex;
    list-style: none;
    align-items: center;
  }
  .navbar li {
    position: relative;
  }
  .navbar a, .navbar a:focus {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 0 10px 30px;
    font-size: 15px;
    font-weight: 600;
    color: white;
    white-space: nowrap;
    transition: 0.3s;
  }
  .navbar a i, .navbar a:focus i {
    font-size: 12px;
    line-height: 0;
    margin-left: 5px;
  }
  .navbar a:hover, .navbar .active, .navbar .active:focus, .navbar li:hover > a {
    color: #3db2ff;
  }


/* -------------------------------- */

/* Profile */
.Profile{
  padding: 0;
  margin: 0;
  text-decoration: none;
  list-style: none;
  box-sizing: border-box;
  padding-top: 100px;

}

.Profile row{
  display: flex;
  margin-right: -15px;
  margin-left: -15px;
  flex-wrap: wrap;
  padding: 0;
}

.Profile .panel{
  width: 200px;
  height: auto;
  padding: 0;
  margin: 0;
}

.container.align-items-center.justify-content-center{
    padding-top: auto;
    padding-bottom: auto;
    margin-top: -100px;
    margin-left: 500px;

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

/* -------------------------------- */

</style>
<body>
  <?php include("member_header.php") ?>

  <main>
  <div class="Profile">
        <div class="panel">
            <nav id="navigation" class="list-group list-group-flush">
                <ul>
                <li class="list-group-item"><a href="member_tracking.php" class="card-link">Service</a></li>
                <li class="list-group-item"><a href="logout.php" class="card-link">Log out</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="container align-items-center justify-content-center">
      <div class="profile">

        <h5 class="profile-title text-center pb-0 fs-4">Member Profile Details</h5>
        <?php
          $sql_query = "SELECT * FROM `tblusers` WHERE `username` = '$uname';";
          $results = mysqli_query($conn, $sql_query);
          while($row = mysqli_fetch_assoc($results)){
        ?>
        <h6 class="heading-small text-muted mb-4">User information</h6>
        <div class="row">
          <div class="col-lg-3 col-md-4 label">Username</div>
          <div class="col-lg-9 col-md-8"><?php echo $uname ?></div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-4 label">Full Name</div>
          <div class="col-lg-9 col-md-8"><?php echo $row["full_name"] ?></div>
        </div>
        <h6 class="heading-small text-muted mb-4">Password information</h6>
        <div class="row">
          <div class="col-lg-3 col-md-4 label">Password</div>
          <div class="col-lg-9 col-md-8">**********</div>
        </div>
        <h6 class="heading-small text-muted mb-4">Email information</h6>
        <div class="row">
          <div class="col-lg-3 col-md-4 label">Email</div>
          <div class="col-lg-9 col-md-8"><?php echo $row["email"] ?></div>
        </div>
        <h6 class="heading-small text-muted mb-4">Contact information</h6>
        <div class="row">
          <div class="col-lg-3 col-md-4 label">Phone</div>
          <div class="col-lg-9 col-md-8"><?php echo $row["phone"] ?></div>
        </div>
        <h6 class="heading-small text-muted mb-4">Address information</h6>
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
          <button type="reset" class="btn btn-primary" onclick="window.location.href='member_editprofile.php'">Edit</button>
          <button type="reset" class="btn btn-secondary" onclick="window.location.href='member_index.php'">HomePage</button>

        </div>
        <?php } ?>
        </div>
      </div>
      <?php mysqli_close($conn); ?>
  </main>
  <?php include("member_footer.php") ?>
</body>
  <?php include("js.php") ?>

  <script>
  function logout_confirm() {
    if (confirm("Are you confirm want to logout?"))
        window.location.href = "index.php";

    return false;
  }
</script>


</html>