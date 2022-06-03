<?php

    include_once("dbconn.php");

    $id = $_GET['id'];

    if($id == null){
        header('Location: staff_update_parcel_list.php');
    }else{

        if(isset($_POST['btnUpdate'])){
            $tracking_number = trim($_POST["tracking_number"]);
            $latest_status = $_POST["delivery_status"];
            $latest_description = $_POST["description"];


            $update_query = "UPDATE `tblparcels` SET `latest_status`='$latest_status',`latest_update`=current_timestamp,`latest_description`='$latest_description' WHERE id='$id'";

            if(mysqli_query($conn, $update_query)){
                header('Location: staff_update_parcel_list.php');
            }else{
                echo "Error in updating!";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Parcel Form- LoveTech. Tracking Platform</title>
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
                    <h5 class="form-title text-center pb-0 fs-4">Update Parcel</h5>
                  </div>

                  <form action="#" method="POST" class="row g-3 was-validated">
                    <?php
                      $query = "SELECT * FROM tblparcels WHERE id='$id'";
                      $results = mysqli_query($conn, $query);
                      while($row = mysqli_fetch_assoc($results)){
                    ?>
                    <div class="col-12">
                      <label for="tracking_number" class="form-label">Tracking Number:</label>
                      <input type="text" class="form-control" value='<?php echo $row["tracking_number"] ?>' id="tracking_number" placeholder="Enter Tracking Number" name="tracking_number" disabled>
                      <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div>

                    <div class="col-12">
                      <label for="delivery_status" class="form-label">Latest Delivery Status:</label><br>
                      <select class="form-select" name="delivery_status" required>
                        <option value="Packing" <?php if ($row["latest_status"] == 'Packing') echo ' selected="selected"'; ?> >Packing</option>
                        <option value="Shipped" <?php if ($row["latest_status"] == 'Shipped') echo ' selected="selected"'; ?> >Shipped</option>
                        <option value="Out for delivery" <?php if ($row["latest_status"] == 'Out for delivery') echo ' selected="selected"'; ?> >Out for delivery</option>
                        <option value="Delivered" <?php if ($row["latest_status"] == 'Delivered') echo ' selected="selected"'; ?> >Delivered</option>
                      </select>
                      <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Invalid.</div>
                    </div>
                    <div class="col-12">
                      <label for="description" class="form-label">Latest Description:</label>
                      <input type="text" class="form-control" value='<?php echo $row["latest_description"] ?>' id="description" placeholder="Enter description" name="description" required>
                      <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="col-12">
                    <input type="submit" class="btn btn-primary"  value="Update Parcel" name="btnUpdate"></input>
                    <input type="reset" class="btn btn-secondary" value="Go Back to the list" name="btnBack" onclick="window.location.href='staff_update_parcel_list.php'">
                    </div>
                  </form>
                  <?php } ?>
                </div>
              </div>

              

            </div>
          </div>
        </div>

      </section>

    </div>
    <?php mysqli_close($conn); ?>
  </main>
</body>

</html>