<?php
    require_once 'Application/Models/User.php';

    $user = new User(null);
?>
<div class="container text-start">
    <h2>User registration</h2>
    <form class="needs-validation" novalidate>
        <div class="row g-3">
            <div class="col-sm-6">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Username" autocomplete="off" required="">
                <div class="invalid-feedback">
                    Valid username is required.
                </div>
            </div>

            <div class="col-6">
                <label for="email" class="form-label">Email address</label>
                <div class="input-group has-validation">
                    <span class="input-group-text">@</span>
                    <input type="text" class="form-control" id="email" placeholder="Email" autocomplete="off" required="">
                    <div class="invalid-feedback">
                        Your email is required.
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" autocomplete="off" required="">
                <div class="invalid-feedback">
                    Valid name is required.
                </div>
            </div>

            <div class="col-6">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" autocomplete="off">
                <div class="invalid-feedback">
                    Please enter a password valid.
                </div>
            </div>

            <div class="col-md-6">
                <label for="role" class="form-label">Role</label>
                <select class="form-select" id="role" required="">
                    <option value="">Choose...</option>
                    <?php
                    foreach ($user->roles as $index => $role) {
                        echo '<option value="' . $index . '">' . $role . '</option>';
                    }
                    ?>
                </select>
                <div class="invalid-feedback">
                    Please select a valid role.
                </div>
            </div>

        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="same-address">
            <label class="form-check-label" for="same-address">By cliking Submit, you agree to our <a>Terms and Conditions</a> and <a>Privacy Statement</a>.</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>