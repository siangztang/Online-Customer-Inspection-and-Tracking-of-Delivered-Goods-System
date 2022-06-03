<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add New Parcel - LoveTech. Tracking Platform</title>
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
    <section class="section min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
              
              <div class="form mb-3">

                <div class="form-body">

                  <div class="pt-4 pb-2">
                    <h5 class="form-title text-center pb-0 fs-4">New Parcel Key-in Platform</h5>
                  </div>

                  <span style="color: red;font-size:small"><i>* Required</i></span>
                  <form action="staff_add_parcel_results.php" class="row g-3 was-validated" method="post">
                    <div class="col-12">
                      
                      <label for="courier_company" class="form-label">Courier Company:</label><br>
                      <select class="form-select" id="courier_company" name="courier_company" required>
                        <option value="City Link">City Link</option>
                        <option value="DHL E-commerce">DHL E-commerce</option>
                        <option value="GDex">GDex</option>
                        <option value="J&T Express">J&T Express</option>
                        <option value="Pgeon">Pgeon</option>
                        <option value="Pos Laju">Pos Laju</option>
                        <option value="Shopee Xpress">Shopee Xpress</option>
                        <option value="Skynet">Skynet</option>
                        <option value="UPS">UPS</option>
                      </select>
                      <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Invalid.</div>
                    </div>
                    <div class="col-12">
                      <label for="tracking_number" class="form-label">Tracking Number:</label>
                      <input type="text" class="form-control" id="tracking_number" placeholder="Enter Tracking Number" name="tracking_number" pattern="^[a-zA-Z]{2,3}[0-9]{10}$" required>
                      <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Invalid.</div>
                      
                    </div>
                    <div class="col-12">
                      <label for="from" class="form-label">From:</label><br>
                      <select class="form-select" name="fromState" id="fromLocation" required>
                        <option value="Johor">Johor</option>
                        <option value="Kedah">Kedah</option>
                        <option value="Kelantan">Kelantan</option>
                        <option value="Kuala Lumpur">Kuala Lumpur</option>
                        <option value="Labuan">Labuan</option>
                        <option value="Malacca">Malacca</option>
                        <option value="Negeri Sembilan">Negeri Sembilan</option>
                        <option value="Pahang">Pahang</option>
                        <option value="Perak">Perak</option>
                        <option value="Perlis">Perlis</option>
                        <option value="Penang">Penang</option>
                        <option value="Sabah">Sabah</option>
                        <option value="Sarawak">Sarawak</option>
                        <option value="Selangor">Selangor</option>
                        <option value="Terengganu">Terengganu</option>
                        </select>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Invalid.</div>
                    </div>
                    <div class="col-12">
                      <label for="to" class="form-label">To:</label><br>
                      <select class="form-select" name="toState" id="toLocation" required>
                        <option value="Johor">Johor</option>
                        <option value="Kedah">Kedah</option>
                        <option value="Kelantan">Kelantan</option>
                        <option value="Kuala Lumpur">Kuala Lumpur</option>
                        <option value="Labuan">Labuan</option>
                        <option value="Malacca">Malacca</option>
                        <option value="Negeri Sembilan">Negeri Sembilan</option>
                        <option value="Pahang">Pahang</option>
                        <option value="Perak">Perak</option>
                        <option value="Perlis">Perlis</option>
                        <option value="Penang">Penang</option>
                        <option value="Sabah">Sabah</option>
                        <option value="Sarawak">Sarawak</option>
                        <option value="Selangor">Selangor</option>
                        <option value="Terengganu">Terengganu</option>
                        </select>
                      <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Invalid.</div>
                    </div>
                    <div class="col-12">
                      <label for="delivery_status" class="form-label">Delivery Status:</label><br>
                      <select class="form-select" name="delivery_status" required>
                        <option value="Packing">Packing</option>
                        <option value="Shipped">Shipped</option>
                        <option value="Out for delivery">Out for delivery</option>
                        <option value="Delivered">Delivered</option>
                        </select>
                    </div>
                    <div class="col-12">
                      <label for="description" class="form-label">Description:</label>
                      <input type="text" class="form-control" id="description" placeholder="Enter description" name="description" required >
                      <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Invalid.</div>
                    </div>
                    <div class="col-12">
                      <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                      <button type="reset" class="btn btn-secondary">Reset</button>
                      <button type="reset" class="btn btn-secondary" onclick="window.location.href='staff_homepage.php'">HomePage</button>
                    </div>
                  </form>
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