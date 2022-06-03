<section>
    <h3 class="text-center">Track & Trace</h3>

    <form action="#" class="was-validated" method="GET" style="padding-bottom: 183px;">
      <div class="container input-group mb-3">
      <label for="tracking_number" class="form-label"></label>
      <input type="text" class="form-control p-4 no-zoom" value="<?=(isset($tracking_number)) ? $tracking_number : '';?>" pattern="^[a-zA-Z]{2,3}[0-9]{10}$" placeholder="Eg: DHL1234567890" name="tracking_number" required="required" 
        style="border-top-left-radius: 15px; border-bottom-left-radius: 15px;">
        <button id="btn-form-tracking-submit" name="track" class="btn btn-primary" type="submit" 
        style="width: 80px; border-top-right-radius: 15px; border-bottom-right-radius: 15px;">Track</button>
      </div>
      <div class="text-center">
        Enter your waybil number
      </div>
    </form>
  </section>