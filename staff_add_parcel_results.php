<?php
    include_once("dbconn.php");

    if(isset($_POST['submit'])){
      $courier_company = $_POST['courier_company'];
      $tracking_number = strtoupper(trim($_POST['tracking_number']));
      $from = $_POST['fromState'];
      $to = $_POST['toState'];
      $delivery_status = $_POST['delivery_status'];
      $desc = $_POST['description'];

      // check duplication tracking numbner
      $tracking_number_sql = "SELECT * FROM tblparcels WHERE tracking_number='$tracking_number'";

      $result = mysqli_query($conn,$tracking_number_sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count==1){
        echo"<script>alert('Tracking Number Exist!')</script>";
        echo"<script>window.location.href='staff_add_parcel.php'</script>";
      }else{
        $insert_sql = "INSERT INTO `tblparcels`( `courier_company`, `tracking_number`, `departure`, `destination`, `latest_status`, `latest_description`) 
        VALUES ('$courier_company','$tracking_number','$from','$to','$delivery_status','$desc')";
        if(mysqli_query($conn,$insert_sql)){
        echo "<script>alert('Add Parcel Successfully!')</script>";
        }else{
        echo"<script>alert('Error in adding new parcel')</script>";
        }
      }
    }

      mysqli_close($conn);
  
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add New Parcel Results - LoveTech. Tracking Platform</title>
  <?php include("link.php") ?>
</head>

<style>
  .result {
    margin-bottom: 30px;
    border: none;
    border-radius: 5px;
    box-shadow: 0px 0 30px rgba(1, 41, 112, 0.1);
  }
  .result-title {
    padding: 20px 0 15px 0;
    font-size: 18px;
    font-weight: 500;
    color: #012970;
    font-family: "Poppins", sans-serif;
  }
  .result-body {
    padding: 0 20px 20px 20px;
  }
  p {
    font-weight: 600;
    color: rgba(1, 41, 112, 0.6);
    font-size: 18px;
  }
  .col-12{
    padding: 10px;
  }

</style>
<body>
  <main>
    <div class="container">

      <section class="section min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
              
              <div class="result mb-3">

                <div class="result-body">

                  <div class="pt-4 pb-2">
                    <h5 class="result-title text-center pb-0 fs-4">Results of New Parcel: </h5>
                  </div>

                    <div class="col-12">
                      <p>Courier Company:</p>
                      <span><?=(isset($courier_company)) ? $courier_company : '';?></span>
                    </div>
                    <div class="col-12">
                      <p>Tracking Number:</p>
                      <span><?=(isset($tracking_number)) ? $tracking_number : '';?></span>
                    </div>
                    <div class="col-12">
                      <p>From:</p>
                      <span><?=(isset($from)) ? $from : '';?></span>
                    </div>
                    <div class="col-12">
                      <p>To:</p>
                      <span><?=(isset($to)) ? $to : '';?></span>
                    </div>
                    <div class="col-12">
                      <p>Delivery Status:</p>
                      <span><?=(isset($delivery_status)) ? $delivery_status : '';?></span>
                    </div>
                    <div class="col-12">
                      <p>Description:</p>
                      <span><?=(isset($desc)) ? $desc : '';?></span>
                    </div>
                    <div class="col-12">
                      <button type="reset" class="btn btn-primary" onclick="window.location.href='staff_add_parcel.php'">ADD More...</button>
                      <button type="reset" class="btn btn-secondary" onclick="window.location.href='staff_homepage.php'">HomePage</button>
                    </div>

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