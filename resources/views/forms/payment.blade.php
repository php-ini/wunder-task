<form id="payment-form" method="post" data-model="Payment">
    <div class="form-group row">
        <label for="account_owner_name" class="col-4 col-form-label">Account Owner Name</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-address-card"></i>
                    </div>
                </div>
                <input id="account_owner_name" name="account_owner_name" placeholder="Account owner name" type="text" aria-describedby="account_owner_nameHelpBlock" required="required" class="form-control">
            </div>
            <span id="account_owner_nameHelpBlock" class="form-text text-muted">Mahmoud Abdelsattar</span>
        </div>
    </div>
    <div class="form-group row">
        <label for="iban" class="col-4 col-form-label">IBAN</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-address-card"></i>
                    </div>
                </div>
                <input id="iban" name="iban" placeholder="IBAN" type="text" class="form-control" required="required" aria-describedby="ibanHelpBlock">
            </div>
            <span id="ibanHelpBlock" class="form-text text-muted">DE22-xxxx-xxxx-xxxx-xxxx-xx</span>
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
