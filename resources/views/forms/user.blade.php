<form id="user-form" method="post" data-model="User">
    <div class="form-group row">
        <label for="first_name" class="col-4 col-form-label">First Name</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-address-card"></i>
                    </div>
                </div>
                <input id="first_name" value="{{ isset($data->user) ? $data->user->getFirstName() : '' }}" name="first_name" placeholder="First name" type="text" aria-describedby="first_nameHelpBlock" required="required" class="form-control">
            </div>
            <span id="first_nameHelpBlock" class="form-text text-muted">Mahmoud</span>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-4 col-form-label" for="last_name">Last Name</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-address-card"></i>
                    </div>
                </div>
                <input id="last_name" value="{{ isset($data->user) ? $data->user->getLastName() : '' }}" name="last_name" placeholder="Last name" type="text" aria-describedby="last_nameHelpBlock" required="required" class="form-control">
            </div>
            <span id="last_nameHelpBlock" class="form-text text-muted">Mostafa</span>
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-4 col-form-label">Email</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-vcard-o"></i>
                    </div>
                </div>
                <input id="email" value="{{ isset($data->user) ? $data->user->getEmail() : '' }}" name="email" placeholder="Email" type="text" aria-describedby="emailHelpBlock" required="required" class="form-control">
            </div>
            <span id="emailHelpBlock" class="form-text text-muted">email@domain.com</span>
        </div>
    </div>
    <div class="form-group row">
        <label for="telephone" class="col-4 col-form-label">Phone</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-phone"></i>
                    </div>
                </div>
                <input id="telephone" value="{{ isset($data->user) ? $data->user->getTelephone() : '' }}" name="telephone" placeholder="Telephone" type="text" aria-describedby="telephoneHelpBlock" required="required" class="form-control">
            </div>
            <span id="telephoneHelpBlock" class="form-text text-muted">015167186688</span>
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Next</button>
        </div>
    </div>
</form>
