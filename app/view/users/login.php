<?php require_once "../app/view/inc/header.php" ?>

<div class="userContainer d-flex justify-content-center align-items-center">
    <div class="col-md-6 m-auto">
      <div class="card card-body forum my-5">
      <?php flash('register_success'); ?>
      <div class="my-3 mx-5">

        <h2 class="text-center">Login</h2>
        <p class="text-center">Hey you, you're finally awake!</p>
        <form action="<?php echo URLROOT; ?>/users/login" method="post">
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

          <div class="row pt-3">
            <div class="col-md-6 p-1">
              <input type="submit" value="Login" class="btn btn-success w-100">
            </div>
            <div class="col-md-6 p-1">
              <a href="<?php echo URLROOT; ?>/users/register" class="btn btn-info w-100">Register</a>
            </div>
          </div>
          <div class="row">
            <div class="col p-2">
              <a href="<?php echo URLROOT; ?>/users/request" class="mt-2 text-light">Forgot your password?</a>
            </div>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
  </div>

</body>
</html>
