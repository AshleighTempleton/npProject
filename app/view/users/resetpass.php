<?php require_once "../app/view/inc/header.php" ?>
<div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card card-body forum mt-5">
      <div class="mb-5 mx-5 mt-2 ">
        <?php flash('register_success'); ?>
        <h2 class="text-center">Reset your password</h2>
        <p class="text-center">Please fill in your credentials to reset your password.</p>
        <form action="<?php echo URLROOT; ?>/users/resetpass" method="post">
          <div class="form-group">
              <label>Email:<sup>*</sup></label>
              <input type="text" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
              <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
          </div>    
          <div class="form-group">
              <label>Password:<sup>*</sup></label>
              <input type="password" name="password" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
              <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
          </div>
          <div class="form-group">
            <label>Confirm Password:<sup>*</sup></label>
            <input type="password" name="confirm_password" class="form-control form-control-lg <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['confirm_password']; ?>">
            <span class="invalid-feedback"><?php echo $data['confirm_password_err']; ?></span>
        </div>
          <div class="form-row">
            <div class="col-12 mt-3">
              <input type="submit" class="btn btn-success btn-block" value="Set password">
            </div>
            <div class="col mt-3">
            <a href="<?php echo URLROOT; ?>/users/login" class="">Back to Login</a>
           
            </div>
          </div>
        </form>
      </div>
        </div>
    </div>
    </div>
  </div>
  

