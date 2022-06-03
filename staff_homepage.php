<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff HomePage - LoveTech. Tracking Platform</title>
    <?php include("link.php") ?>

</head>
<style>
    body {
        font-family: "Raleway", sans-serif;
        margin: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%);
    }
    .selections {
        background: #fff;
        padding: 60px 0;
    }
    .selections .small_body {
        margin-bottom: 20px;
        overflow: hidden;
        border-radius: 5px;
        background: #fff;
        box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
    }
    .selections .small_body img {
        position: relative;
        overflow: hidden;
        width: 306px;
        height: 306px;
    }
    .selections .small_body .title {
        padding: 25px 15px;
    
    }
    .selections .small_body a {
        color: #3db2ff;
        text-decoration: none;
    }
    .selections .small_body a h4{
        text-align: center;
        letter-spacing: 2px;
        font-size: 35px;
        font-weight: 600;
    }
    .selections .small_body a:hover {
        color: #0099ff;
        text-decoration: none;
    }

</style>

<body>
    <main>
        <section id="selections" class="selections">
            <div class="container d-flex flex-column align-items-center justify-content-center">
      
              <div class="row">
      
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="small_body">
                        <a href="staff_add_parcel.php">
                            <img src="assets/img/staff/parcel.webp" class="img-fluid" alt="">
                            <div class="title">
                                <h4>Add Parcel</h4>
                            </div>
                        </a>
                    </div>
                </div>
      
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="small_body">
                        <a href="staff_update_parcel_list.php">
                            <img src="assets/img/staff/edit_parcel.png" class="img-fluid" alt="">
                            <div class="title">
                                <h4>Update Parcel</h4>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="small_body">
                        <a href="staff_feedback_list.php">
                            <img src="assets/img/staff/feedback.png" class="img-fluid" alt="">
                            <div class="title">
                                <h4>Feedback Review</h4>
                            </div>
                        </a>
                    </div>
                </div>
      
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="small_body">
                        <a href="staff_profile.php">
                            <img src="assets/img/staff/edit_profile.png" class="img-fluid" alt="">
                            <div class="title">
                                <h4>Profile</h4>
                            </div>
                        </a>
                    </div>
                </div>
      
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="small_body">
                        <a href="logout.php">
                            <img src="assets/img/staff/logout.webp" class="img-fluid" alt="">
                            <div class="title">
                                <h4>Log Out</h4>
                            </div>
                        </a>
                    </div>
                </div>
      
              </div>
      
            </div>
          </section>
    </main>
</body>
</html>