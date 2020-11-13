<form id="address-form" method="post" data-model="Address">
    <div class="form-group row">
        <label for="street" class="col-4 col-form-label">Street</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-address-card"></i>
                    </div>
                </div>
                <input id="street" name="street" placeholder="Street" type="text" aria-describedby="streetHelpBlock" required="required" class="form-control">
            </div>
            <span id="streetHelpBlock" class="form-text text-muted">Hauptbanhauf str.</span>
        </div>
    </div>
    <div class="form-group row">
        <label for="house_number" class="col-4 col-form-label">House Number</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-address-card"></i>
                    </div>
                </div>
                <input id="house_number" name="house_number" placeholder="House number" type="text" class="form-control" aria-describedby="house_numberHelpBlock" required="required">
            </div>
            <span id="house_numberHelpBlock" class="form-text text-muted">23</span>
        </div>
    </div>
    <div class="form-group row">
        <label for="zip_code" class="col-4 col-form-label">Zip code</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-address-card"></i>
                    </div>
                </div>
                <input id="zip_code" name="zip_code" placeholder="Zip code" type="text" class="form-control" aria-describedby="zip_codeHelpBlock" required="required">
            </div>
            <span id="zip_codeHelpBlock" class="form-text text-muted">48143</span>
        </div>
    </div>
    <div class="form-group row">
        <label for="city" class="col-4 col-form-label">City</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-address-card"></i>
                    </div>
                </div>
                <input id="city" name="city" placeholder="City" type="text" class="form-control" aria-describedby="cityHelpBlock" required="required">
            </div>
            <span id="cityHelpBlock" class="form-text text-muted">Hamburg</span>
        </div>
    </div>
    <div class="form-group row">
        <label for="country" class="col-4 col-form-label">Country</label>
        <div class="col-8">
            <select id="country" name="country" class="custom-select">
                <option value="DE">Germany</option>
                <option value="EG">Egypt</option>
                <option value="CY">Cyprus</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Next</button>
        </div>
    </div>
</form>
