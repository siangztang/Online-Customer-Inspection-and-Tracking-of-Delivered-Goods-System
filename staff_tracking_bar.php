<form action="staff_update_parcel_results.php" class="was-validated" method="GET" style="padding-bottom: 50px;">
        <div>
          <div class="container input-group mb-3">
            <input type="text" class="form-control p-4 no-zoom" value="<?=(isset($tracking_number)) ? $tracking_number : '';?>" pattern="^[a-zA-Z]{2,3}[0-9]{10}$" placeholder="Enter Tracking Number" name="tracking_number" required="required" 
            style="border-top-left-radius: 15px; border-bottom-left-radius: 15px;">
            <button id="btn-form-tracking-submit" name="search" class="btn btn-primary" type="submit" 
            style="width: 80px; border-top-right-radius: 15px; border-bottom-right-radius: 15px;">Search</button>
          </div>
        </div>
</form>
