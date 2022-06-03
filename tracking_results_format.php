<?php
  if(isset($_GET['track'])){
    if($row = mysqli_query($conn, $sql_query)){
        if(mysqli_num_rows($row) > 0){ ?>
          <?php while($row = mysqli_fetch_assoc($results)){ ?>
          <div class="container tracking-info">
            <div class="accordin accordin-flush">
              <div class="accordin-item my-4 shadow" style="border-radius: 15px;">
                <div class="accordin-header" style="background: white; border-radius: 15px;">

                  <div class="p-3" style="background: #26b1d4;  color: white; border-top-left-radius: 15px;   border-top-right-radius: 15px; ">

                    <div class="text-start">
                      Courier_Company: <?php echo $row["courier_company"]; ?>
                      <div class="fw-bold">
                        Tracking Number: <?php echo $row["tracking_number"]; ?>&zwj;
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-12 text-start">
                        <?php echo $row["departure"]; ?>
                        <i class="bi bi-arrow-right"></i>
                        <?php echo $row["destination"]; ?>
                      </div>
                    </div>

                  </div>
                  <br>
                  <div class="text-center mx-auto mb-3 fw-bold h3 text-uppercase"><?php echo $row["latest_status"]; ?></div>
                  <div class="text-center mx-auto mb-3 fw-light h6"></div>

                  <?php
                    $dtime = $row["latest_update"];
                    $break = explode(" ", $dtime);
                  ?>

                  <div class="accordin-body p-0">
                    <div style="background: white;">
                    <div class="row">
                      <div class="col-12 col-sm-4">
                        <div class="text-sm-end fs-5 pt-3" style="color: #acacac;">
                          <?php echo $break[0]; ?>
                        </div>

                      </div>
                    </div>
                    <div class="container text-start p-1 pt-3" style="background: white;">
                      <div class="row">
                        <div class="col-4 text-end" style="border-right: 1px solid #acacac;">
                          <div class="fw-b mt-3">
                          <?php echo $break[1]; ?>
                          </div>

                        </div>
                        <div class="col-7 mt-3">
                          <b style="color: #26b1d4"><?php echo $row["latest_status"]; ?></b>
                          <div class="fw-light">
                          <?php echo $row["latest_description"]; ?>
                          </div>
                        </div>

                      </div>
                    </div>

                  </div>

                </div>
                <div class="d-grid gap-2 mt-4" style="border-radius: 15px;"></div>
                </div>
                <?php } ?>
                <?php
                }else{
                    echo "<div class='container'>There are not parcel records to display...</div>";
                    echo "<br>";
                    echo "<br>";
                    echo "<br>";  
                }
            }
          }
        ?>


      </div>
    </div>
  </div>