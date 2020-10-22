<!DOCTYPE html>
<html>
<head>
    <title>Register</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/d9b3bd9a2e.js" crossorigin="anonymous"></script>

    <!-- Project CSS -->
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/footer.css">
</head>

<body>

            <!-- NAV -->
            <?php require_once "./nav.php" ?>



<!-- NEED TO CHECK CLASSES FOR STYLING -->


        <section id="cover2" class="min-vh-100">

                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-6 col-sm-10 mx-auto text-center form p-4">
                            <h1 class="title">Register</h1>
                                <div class="px-2">
                                    <form action="register.php" method="post" class="needs-validation" novalidate="" >
                                        <div class="form-group usernameSi">
                                            <input class="form-control mb-3" type="text" name="firstName" placeholder="Joey" required pattern="^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$">
                                            <div class="invalid-feedback">Please enter a valid name.</div>
                                        </div>
                                        <div class=" form-group usernameSi">
                                            <input class="form-control mb-3"type="text" name="lastName" placeholder="Wheeler" required pattern="^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$">
                                             <div class="invalid-feedback">please enter a valid last name.</div>
                                        </div>

                                        <div class="form-group passwordSi">
                                            <input class="form-control mb-3" type="text" name="user" placeholder="User name : JW" required pattern="^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z0-9]*)*$">                                          <div class="invalid-feedback">Anything but special characters</div>
                                            
                                        </div>
                                        <div class="form-group usernameSi">
                                            <input class="form-control mb-3" type="text" name="email" placeholder="jdoe@gmail.com" required pattern="^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$">        
                                            <div class="invalid-feedback">Oops, this doesn't look like an email to me</div>
                                        </div>
                                        

                                        <div class="form-group was-validated usernameSi">
                                            <input id="password" class="form-control mb-3" type="password" name="pw" placeholder="Enter password" required pattern=".{8,}" required title="8 characters minimum">
                                                <div class="valid-feedback">Valid password</div>
                                                <div class="invalid-feedback">Password should be minimum 8 characters</div>
                                        </div>
                                        <div class="passwordSi form-group">
                                            <input id="confirm_password" class="form-control mb-3" type="password" name="confirm_pw" placeholder="Confirm password" required onChange="checkPasswordMatch();">
                                            <div id="checkmatch"></div>
                                        </div>

                                        <button type="submit" name="submit" class="btn btn-danger"><b>Go!  <i class="fas fa-check animate__animated animate__fadeIn" aria-hidden="true"></i></b></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </section>


            <!-- FOOTER -->
            <?php require_once "./footer.php" ?>


    <!-- BOOTSTRAP -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>

</body>

</html>