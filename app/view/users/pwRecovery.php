<?php require_once "../app/view/inc/header.php" ?>
<?php require_once "../app/view/inc/nav.php" ?>


<div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card card-body bg-light mt-5">
      <?php flash('register_success'); ?>
        <h2>Reset Password</h2>
        <p>Enter your email to receive the reset link</p>
        <form action="<?php echo URLROOT; ?>/users/pwRecovery" method="post">
          <div class="form-group">
            <label for="email">Email: <sup>*</sup></label>
            <input type="email" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
            <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
          </div>

          <div class="row">
            <div class="col">
              <input type="submit" value="GO" class="btn btn-success btn-block">
            </div>
            <div class="col">
              <a href="<?php echo URLROOT; ?>/users/register" class="btn btn-light btn-block">No account? Register here!</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>


























<?php require_once "../app/view/inc/footer.php" ?>

</body>
</html>
