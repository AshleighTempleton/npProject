<?php require_once "../app/view/inc/header.php" ?>



<div class="row">
    <div class="col-md-6 m-auto">
      <div class="card card-body forum my-4">
        <div class="m-5">
        <h2>Take an arrow to the knee</h2>
        <p>Surrender your details to register</p>
        <form action="<?php echo URLROOT; ?>/users/register" method="POST">
          <div class="form-group">
            <label for="userName">User Name: <sup>*</sup></label>
            <input type="text" name="userName" class="form-control form-control-lg <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['userName']; ?>">
            <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
          </div>
          <div class="form-group">
            <label for="email">Email: <sup>*</sup></label>
            <input type="email" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
            <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
          </div>
          <div class="form-group">
            <label for="password">Password: <sup>*</sup></label>
            <input type="password" name="password" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
            <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
          </div>
          <div class="form-group">
            <label for="confirmPW">Confirm Password: <sup>*</sup></label>
            <input type="password" name="confirmPW" class="form-control form-control-lg <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['confirmPW']; ?>">
            <span class="invalid-feedback"><?php echo $data['confirm_password_err']; ?></span>
          </div>

          <div class="row">
            <div class="col-md-6 p-1 mt-2">
              <input type="submit" value="Register" class="btn btn-success w-100">
            </div>
            <div class="col-md-6 p-1 mt-2">
              <a href="<?php echo URLROOT; ?>/users/login" class="btn btn-info w-100">Have an account? Login</a>
            </div>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
