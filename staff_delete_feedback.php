<?php

    include_once("dbconn.php");

    

    $id = $_GET['id'];

    $sql_query = "SELECT * FROM `tblfeedbacks` WHERE id='$id'";
    $results = mysqli_query($conn, $sql_query);

    if($id == null){
        header('Location: staff_feedback_list.php');
    }else{

        if(isset($_POST['btnDelete'])){

            $delete_query = "DELETE FROM `tblfeedbacks` WHERE id='$id'";

            if(mysqli_query($conn, $delete_query)){
                header('Location: staff_feedback_list.php');
            }else{
                echo "Feedback update unsuccessfully";
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
  <title>Delete Feedback Confirmation - LoveTech. Tracking Platform</title>
  <?php include("link.php") ?>
</head>
<style>
  table, th, td{
    border: 2px solid black;
    padding: 5px;
  }
  h2{
    padding: 20px 0 15px 0;
    font-size: 32px;
    font-weight: 500;
    color: #012970;
    font-family: "Poppins", sans-serif;
  }
</style>
<body>
    <div class="container">
        <h2 style="margin-bottom: 30px">Delete Confirmation Page</h2>
        <table class="table table-bordered table-hover" style="width: 100%;">
          <tr class="table-primary">
            <th>ID: </th>
            <th>Name: </th>
            <th>Email: </th>
            <th>Message: </th>
          </tr>

          <?php while($row = mysqli_fetch_assoc($results)){ ?>

          <tr class="table-light">
              <td><?php echo $row["id"]; ?></td>
              <td><?php echo $row["name"]; ?></td>
              <td><?php echo $row["email"]; ?></td>
              <td><?php echo $row["message"]; ?></td>
          </tr>

          <?php } ?>
          </table>
        <hr>
        <form action="#" method="post">
          
            <input type="submit" class="btn btn-primary" value="Delete Feedback" name="btnDelete"></input>
            <input type="reset" class="btn btn-secondary" value="Go Back to the list" name="btnBack" onclick="window.location.href='staff_feedback_list.php'">

        </form>

    </div>
    <?php mysqli_close($conn); ?>
</body>

</html>