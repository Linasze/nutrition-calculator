<?php require_once APPROOT . '/views/theme/publicheader.php'; ?>
<div class="row">
    <div class="col-md-6 mx-auto mt-5">
        <div class="card card-body bg-light mt-5">
            <h2>Create an Account</h2>
            <p>Please fill out this form to register with us</p>
            <form action="<?php echo URLROOT; ?>/users/register" method="post">

                <div class="form-group">
                    <label for="name">Name:
                        <sup>*</sup>
                    </label>
                    <input name="name" type="text" class="form-control form-control-md <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['name']; ?>">
                    <span class="invalid-feedback">
                        <?php echo $data['name_err'];?>
                    </span>
                </div>
                <div class="form-group">
                    <label for="email">Email:
                        <sup>*</sup>
                    </label>
                    <input type="email" name="email" class="form-control form-control-md <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>"
                        value="<?php echo $data['email']; ?>">
                    <span class="invalid-feedback">
                        <?php echo $data['email_err'];?>
                    </span>

                </div>
                <div class="form-group">
                    <label for="password">Password:
                        <sup>*</sup>
                    </label>
                    <input type="password" name="password" class="form-control form-control-md <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>"
                        value="<?php echo $data['password']; ?>">
                    <span class="invalid-feedback">
                        <?php echo $data['password_err'];?>
                    </span>

                </div>
                <div class="form-group">
                    <label for="confirm_password">Confirm Password:
                        <sup>*</sup>
                    </label>
                    <input type="password" name="confirm_password" class="form-control form-control-md <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?>"
                        value="<?php echo $data['confirm_password']; ?>">
                    <span class="invalid-feedback">
                        <?php echo $data['confirm_password_err'];?>
                    </span>
                </div>

      <input type="hidden" name="kcal" id="kcal" value="<?php echo $data['kcal']; ?>">
      <input type="hidden" name="age" id="age" value="<?php echo $data['age']; ?>">
      <input type="hidden" name="sex" id="sex" value="<?php echo $data['sex']; ?>">
      <input type="hidden" name="height" id="height"  value="<?php echo $data['height']; ?>">
      <input type="hidden" name="weight" id="weight"  value="<?php echo $data['weight']; ?>">
      <input type="hidden" name="activity" id="activity" value="<?php echo $data['activity']; ?>">
      <input type="hidden" name="purpose" id="purpose" value="<?php echo $data['purpose']; ?>">


                <div class="row">
                    <div class="col">
                        <input type="submit" value="Register" class="btn btn-success btn-block">
                    </div>
                    <div class="col">
                        <a href="<?php echo URLROOT; ?>/users/login" class="btn btn-light btn-block">Have an account? Login</a>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
<?php require_once APPROOT . '/views/theme/publicfooter.php'; ?>

