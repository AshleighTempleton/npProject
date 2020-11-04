


<form action="<?php echo URLROOT; ?>pages/test" method="POST">
<input type="email" name="mail" 
                                class="form-control form-control-lg <?php echo (!empty($data['mail_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['mail']; ?>"
                                 >
                                <span class="invalid-feedback"><?php echo $data['mail_err']; ?></span>
<button type="submit">submit</button>
</form>


                                <!-- catflix -->
                                <!-- <div class="form-group usernameSi">
                                            <input class="form-control mb-3" type="text" name="email" placeholder="jdoe@gmail.com" required pattern="^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$">        
                                            <div class="invalid-feedback">Oops, this doesn't look like an email to me</div>
                                        </div> -->

                                        <input type="email" name="newsletter" class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['newsletter']; ?>">
