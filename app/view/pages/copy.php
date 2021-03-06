<!DOCTYPE html>
<html>

<head>
    <title><?php echo SITENAME ?></title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/d9b3bd9a2e.js" crossorigin="anonymous"></script>

    <!-- OWL -->
    <!-- <link rel="stylesheet" href="../app/vendors/owl/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../app/vendors/owl/dist/assets/owl.theme.default.min.css"> -->

    <!-- Project CSS -->
    <!-- <link rel="stylesheet" href="../../../public/css/main.css"> -->
    <link rel="stylesheet" href="css/main.css">

    
    <!-- <link rel="stylesheet" href="./css/nav.css"> -->
    <!-- <link rel="stylesheet" href="./css/footer.css"> -->

    <!-- Traversy loaded css like this, need to test -->
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/main.css">


</head>

<body>




















<!-- header -->
<?php require_once "../app/view/inc/header.php" ?>



    <div class="outerContainer container-fluid">

        <header>

            <!-- NAV -->
            <?php require_once "../app/view/inc/nav.php" ?>

            <!-- Jumbotron -->

            <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
                <div class="col-md-6 px-0">
                <!-- delete approot later -->
                <?php echo APPROOT; ?>
                    <h1 class="display-4 font-italic"><?php echo $data['title']; ?></h1>
                    <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and
                        efficiently about what’s most interesting in this post’s contents.</p>
                    <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
                </div>
            </div>


            <!-- TOP STORIES -->

            <br><br><br><br><br><br>

            <h1>TOP STORIES</h1>

            <div class="topStories row">
                <!-- ONE -->
                <div class="col-12 col-md-4 d-flex justify-content-center align-items-center">
                    <div class="card">
                        <img src="../images/sample.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the
                                card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

                <!-- TWO -->
                <div class="col-12 col-md-4 d-flex justify-content-center align-items-center">
                    <div class="card">
                        <img src="../images/sample.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the
                                card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

                <!-- THREE -->
                <div class="col-12 col-md-4 d-flex justify-content-center align-items-center">
                    <div class="card">
                        <img src="images/sample.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the
                                card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>


            </div>


            <br><br><br><br><br><br>


            <h1>TOP STORIES</h1>

            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="row">
                        <div class="col-8">
                            <h3>THIS IS A STORY</h3>
                            <p>THIS IS SOME TEXT</p>
                        </div>
                        <div class="col-4">
                            <img src="" alt="sample">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-8">
                            <h3>THIS IS A STORY</h3>
                            <p>THIS IS SOME TEXT</p>
                        </div>
                        <div class="col-4">
                            <img src="" alt="sample">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-8">
                            <h3>THIS IS A STORY</h3>
                            <p>THIS IS SOME TEXT</p>
                        </div>
                        <div class="col-4">
                            <img src="" alt="sample">
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="col-12 col-md-6">
                    <div class="row">
                        <div class="col-8">
                            <h3>THIS IS A STORY</h3>
                            <p>THIS IS SOME TEXT</p>
                        </div>
                        <div class="col-4">
                            <img src="" alt="sample">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-8">
                            <h3>THIS IS A STORY</h3>
                            <p>THIS IS SOME TEXT</p>
                        </div>
                        <div class="col-4">
                            <img src="" alt="sample">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-8">
                            <h3>THIS IS A STORY</h3>
                            <p>THIS IS SOME TEXT</p>
                        </div>
                        <div class="col-4">
                            <img src="" alt="sample">
                        </div>
                    </div>
                    <hr>
                </div>


            </div>



            <!-- OWL CAROUEL -->

            <h2>Tech</h2>
            <div class="owl-carousel">
                <div><img src="images/sample.jpg" alt="sample">
                    <h3>Example Header</h3>
                    <p>Example Text</p>
                </div>
                <div class="item"><img src="../public/images/sample.jpg" alt="sample">
                    <h3>Example Header</h3>
                    <p>Example Text</p>
                </div>
                <div class="item"><img src="../public/images/sample.jpg" alt="sample">
                    <h3>Example Header</h3>
                    <p>Example Text</p>
                </div>
                <div class="item"><img src="../public/images/sample.jpg" alt="sample">
                    <h3>Example Header</h3>
                    <p>Example Text</p>
                </div>
                <div class="item"><img src="../public/images/sample.jpg" alt="sample">
                    <h3>Example Header</h3>
                    <p>Example Text</p>
                </div>
                <div class="item"><img src="../public/images/sample.jpg" alt="sample">
                    <h3>Example Header</h3>
                    <p>Example Text</p>
                </div>
                <div class="item"><img src="../public/images/sample.jpg" alt="sample">
                    <h3>Example Header</h3>
                    <p>Example Text</p>
                </div>
            </div>

            <h2>Future</h2>
            <div class="owl-carousel">
                <div class="item"><img src="../public/images/sample.jpg" alt="sample">
                    <h3>Example Header</h3>
                    <p>Example Text</p>
                </div>
                <div class="item"><img src="../public/images/sample.jpg" alt="sample">
                    <h3>Example Header</h3>
                    <p>Example Text</p>
                </div>
                <div class="item"><img src="../public/images/sample.jpg" alt="sample">
                    <h3>Example Header</h3>
                    <p>Example Text</p>
                </div>
                <div class="item"><img src="../public/images/sample.jpg" alt="sample">
                    <h3>Example Header</h3>
                    <p>Example Text</p>
                </div>
                <div class="item"><img src="../public/images/sample.jpg" alt="sample">
                    <h3>Example Header</h3>
                    <p>Example Text</p>
                </div>
                <div class="item"><img src="../public/images/sample.jpg" alt="sample">
                    <h3>Example Header</h3>
                    <p>Example Text</p>
                </div>
                <div class="item"><img src="../public/images/sample.jpg" alt="sample">
                    <h3>Example Header</h3>
                    <p>Example Text</p>
                </div>
            </div>

            <!-- FOOTER -->
            <?php require_once "../app/view/inc/footer.php" ?>



    </div>



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

    <!-- OWL -->
    <script src="../app/vendors/owl/docs/assets/vendors/jquery.min.js"></script>
    <script src="../app/vendors/owl/dist/owl.carousel.min.js"></script>
    <!-- OWL configuration -->
    <script src="js/owl.js"></script>


</body>

</html>