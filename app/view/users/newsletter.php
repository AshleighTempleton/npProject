<?php require_once "../app/view/inc/header.php" ?>
<?php require_once "../app/view/inc/nav.php" ?>

<div class="contentContainer d-flex justify-content-center align-items-center">
    <div class="col-md-9 col-lg-6 mx-auto">
      <div class="card card-body forum mt-4">
        <div class="m-5">
          <h2 class="text-center">Newsletter</h2>
          <form action="<?php echo URLROOT; ?>/users/newsletter" method="POST">
            <div class="form-group">
              <label for="email">Email: <sup>*</sup></label>
              <input type="email" name="email" class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>">
              <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
            </div>
            <button type="submit" class="btn btn-success w-100">Submit</button>
          </form>
        </div>
      </div>
    </div>
</div>

<?php require_once "../app/view/inc/footer.php" ?>

