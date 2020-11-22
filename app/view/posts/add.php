



<?php require_once "../app/view/inc/header.php" ?>
<?php require_once "../app/view/inc/nav.php" ?>

  <div class="container">
        <div class="card forum card-body my-5">
          <h2 class="text-center">Create new post</h2>
          <form action="<?php echo URLROOT; ?>/posts/add" method="post" class="mb-2 mx-5 mt-2">
            <div class="form-group">
              <label for="title">Title: <sup>*</sup></label>
              <input type="text" name="title" class="form-control form-control-lg <?php echo (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['title']; ?>">
              <span class="invalid-feedback"><?php echo $data['title_err']; ?></span>
            </div>
            <div class="form-group">
              <label for="body">Body: <sup>*</sup></label>
              <textarea name="body" class="form-control form-control-lg <?php echo (!empty($data['body_err'])) ? 'is-invalid' : ''; ?>" <?php echo $data['body']; ?>></textarea>
              <span class="invalid-feedback"><?php echo $data['body_err']; ?></span>
            </div>
            <div class="row mt-5">
              <div class="col-md-6">
                <input type="submit" class="btn btn-success w-100" value="Submit">
              </div>
              <div class="col-md-6">
                <a href="<?php echo URLROOT;?>/posts" class="btn btn-warning float-right w-100"><i class="fa fa-backward"></i> Back to forum</a>
                </div>
            </div> 
          </form>
        </div>
  </div>

<?php require_once "../app/view/inc/footer.php" ?>

