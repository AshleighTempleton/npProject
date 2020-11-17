<?php require_once "../app/view/inc/header.php" ?>

<div class="row">

    <div class="col-md-6 mx-auto">

      <div class="card card-body forum mt-5">
      <div class="mb-5 mx-5 mt-2">
        <?php flash('register_success'); ?>
        <h2>Reset your password</h2>
        <p>Please enter your email</p>
        <form action="<?php echo URLROOT; ?>/users/request" method="post">
         
          <div class="form-group">
              <label>Email:<sup>*</sup></label>
              <input type="email" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
              <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
          </div>    
         
          <div class="form-row">
            <div class="col-12">
              <input type="submit" class="btn btn-success btn-block mb-4" value="Send">
          </div>

            <div class="col-md-6">
              <a href="<?php echo URLROOT; ?>/users/register" class="btn btn-warning btn-block">Register</a>
            </div>
            <div class="col-md-6">
            <a href="<?php echo URLROOT; ?>/users/login" class="btn btn-info btn-block">Login</a>                
           
            </div>
          
        </form>
        </div>
      </div>




      </div>

    </div>

</div>
  
