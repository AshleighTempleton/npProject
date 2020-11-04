<?php require_once "../app/view/inc/header.php" ?>
<?php require_once "../app/view/inc/nav.php" ?>


<div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card card-body bg-light mt-5">
        <h2>Newsletter</h2>
        <p>Newsletter</p>
        <form action="<?php echo URLROOT; ?>/users/newsletter" method="POST">

          <div class="form-group">
            <label for="email">Email: <sup>*</sup></label>
            <!--  remove all php and there  is no error-->
            <input type="email" name="email" class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>">
            <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
          </div>
          <button type="submit">Submit</button>
        </form>
      </div>
    </div>
  </div>



























<?php require_once "../app/view/inc/footer.php" ?>

</body>
</html>
