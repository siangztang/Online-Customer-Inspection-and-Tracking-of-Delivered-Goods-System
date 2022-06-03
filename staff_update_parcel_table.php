<?php
            if($row = mysqli_query($conn, $sql_query)){
                if(mysqli_num_rows($row) > 0){ ?>

                        <table class="table table-bordered table-hover" style="width: 100%; margin-bottom: 150px;">
                                <tr class="table-primary">
                                  <th>ID: </th>
                                  <th>Courier Company: </th>
                                  <th>Tracking Number: </th>
                                  <th>Latest Updated: </th>
                                  <th>Latest Status: </th>
                                  <th>Latest Description: </th>
                                  <th>Action: </th>
                                </tr>

                                <?php while($row = mysqli_fetch_assoc($results)){ ?>

                                <tr class="table-light">
                                    <td><?php echo $row["id"]; ?></td>
                                    <td><?php echo $row["courier_company"]; ?></td>
                                    <td><?php echo $row["tracking_number"]; ?></td>
                                    <td><?php echo $row["latest_update"]; ?></td>
                                    <td><?php echo $row["latest_status"]; ?></td>
                                    <td><?php echo $row["latest_description"]; ?></td>
                                    <td style="text-align: center;">
                                        <a href="staff_update_parcel_form.php?id=<?php echo $row['id']; ?>">Edit</a> |
                                        <a href="staff_delete_parcel.php?id=<?php echo $row['id']; ?>">Delete</a>
                                    </td>
                                </tr>
                                <?php } ?>
                        </table>

        <?php
                }else{
                    echo "There are not parcel records to display...";
                    echo "<br>";
                    echo "<br>";
                    echo "<br>";
                }
            }
        ?>