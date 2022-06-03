<?php
  include_once("dbconn.php");

  $sql_query = "SELECT * FROM tblparcels";
  $results = mysqli_query($conn, $sql_query);


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Parcel List - LoveTech. Tracking Platform</title>
  <?php include("link.php") ?>
</head>

<style>
  body{
    margin-top: 80px;
  }
  table, th, td{
    padding: 5px;
  }
  h3{
    font-weight: 500;
    color: #012970;
    font-family: "Poppins", sans-serif;
  }

  .match{
    color: #15a33b;
  }

  .error{
    color: #f23f3f;
  }
</style>

<body>
  <main>
    <section>
      <h3 class="text-center">Search Parcel</h3>
  
      <?php include("staff_tracking_bar.php") ?>
    </section>
    <section>
      <div class="container">
        <h3>Results: </h3>

        <?php include("staff_update_parcel_table.php") ?>

        

        <?php mysqli_close($conn); ?>
          
            <button type="reset" class="btn btn-secondary" onclick="window.location.href='staff_homepage.php'">HomePage</button>
        
      </div>
      
    </section>
  </main>
  
  <button type="button" class="btn btn-primary btn-floating btn-lg" id="btn-back-to-top"><i class="fas fa-arrow-up"></i></button>

</body>
</html>