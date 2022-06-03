<?php
  include_once("dbconn.php");

  $sql_query = "SELECT * FROM `tblfeedbacks`";
  $results = mysqli_query($conn, $sql_query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feedback List - LoveTech. Tracking Platform</title>
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
    <div class="container">

      <h3 class="fw-blod">Feedback List</h3>

      <hr>

      <section>
      <?php
            if($row = mysqli_query($conn, $sql_query)){
                if(mysqli_num_rows($row) > 0){ ?>

                        <table class="table table-bordered table-hover" style="width: 100%; margin-bottom: 150px">
                                <tr class="table-primary">
                                  <th style="width: 3%;">ID: </th>
                                  <th style="width: 20%;">Name: </th>
                                  <th style="width: 22%;">Email: </th>
                                  <th style="width: 45%;">Message: </th>
                                  <th style="width: 10%;">Action: </th>
                                </tr>

                                <?php while($row = mysqli_fetch_assoc($results)){ ?>

                                <tr class="table-light">
                                    <td><?php echo $row["id"]; ?></td>
                                    <td><?php echo $row["name"]; ?></td>
                                    <td><?php echo $row["email"]; ?></td>
                                    <td><?php echo $row["message"]; ?></td>
                                    <td style="text-align: center;">
                                    
                                        <a href="mailto:<?php echo $row['email']; ?>">Reply</a> |
                                        <a href="staff_delete_feedback.php?id=<?php echo $row['id']; ?>">Delete</a>

                                    </td>
                                </tr>
                                <?php } ?>
                        </table>

        <?php
                }else{
                    echo "There are not feedback to display...";
                    echo "<br>";
                    echo "<br>";
                    echo "<br>";
                }
            }
        ?>

        <?php mysqli_close($conn); ?>
          
            <button type="reset" class="btn btn-secondary" onclick="window.location.href='staff_homepage.php'">HomePage</button>
        
      </div>
      </section>
  </main>

  <button type="button" class="btn btn-primary btn-floating btn-lg" id="btn-back-to-top"><i class="fas fa-arrow-up"></i></button>
  
</body>
</html>