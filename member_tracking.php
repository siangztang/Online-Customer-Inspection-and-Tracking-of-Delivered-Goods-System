<?php
  include_once("dbconn.php");

  if(isset($_GET['track'])){
    $tracking_number = trim($_GET['tracking_number']);
    
    $sql_query = "SELECT * FROM `tblparcels` WHERE `tracking_number` = '$tracking_number';";

    $results = mysqli_query($conn, $sql_query);
  }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tracking - LoveTech. Tracking Platform</title>
    <?php include("link.php") ?>
</head>
<style>
  section h3{
      padding: 15px 0;
      min-height: 40px;
      margin-top: 74px;
      font-size: 28px;
      font-weight: 400;
  }
  .match{
  color: #15a33b;
  }

  .error{
    color: #f23f3f;
  }
</style>

<body>
  <?php include("member_header.php") ?>

  <?php include("tracking_bar.php") ?>

  <?php include("tracking_results_format.php") ?>
  
  <?php include("collaboration.php") ?>

  <?php include("member_footer.php") ?>

  <?php mysqli_close($conn); ?>

</body>
    <?php include("js.php") ?>
</html>