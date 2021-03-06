<?php require_once "../app/view/inc/header.php" ?>
<?php require_once "../app/view/inc/nav.php" ?>


<div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card card-body bg-light mt-5">
      <?php flash('register_success'); ?>
        <h2>Login</h2>
        <p>Enter your credentials to go to the cloud district</p>
        <form action="<?php echo URLROOT; ?>/users/login" method="post">
        <div class="form-group">
            <label for="password">New Password: <sup>*</sup></label>
            <input type="password" name="password" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
            <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
          </div>
          <div class="form-group">
            <label for="confirmPW">Confirm Password: <sup>*</sup></label>
            <input type="password" name="confirmPW" class="form-control form-control-lg <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['confirmPW']; ?>">
            <span class="invalid-feedback"><?php echo $data['confirm_password_err']; ?></span>
          </div>
          </div>

          <div class="row">
            <div class="col">
              <input type="submit" value="Submit" class="btn btn-success btn-block">
            </div>
            
        </form>
      </div>
    </div>
  </div>









<?php require_once "../app/view/inc/footer.php" ?>

</body>
</html>
