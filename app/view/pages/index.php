
<?php require_once "../app/view/inc/header.php" ?>


        <header>

            <!-- NAV -->
            <?php require_once "../app/view/inc/nav.php" ?>
            
            <!-- Jumbotron -->

            <div class="jumbotron text-white rounded bg-dark">
                <div class="col-md-6 px-0">
                <!-- delete approot later -->
                <?php echo URLROOT; ?>
                    <h1 class="display-4 font-italic"><?php echo $data['title']; ?></h1>
                    <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and
                        efficiently about what’s most interesting in this post’s contents.</p>
                    <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
                </div>
            </div>


    <div class="outerContainer container-fluid">

        <div class="row">
            <div class="col-12 col-lg-8 d-flex justify-content-center align-items-center">
                    <div class="card main-card">
                        <div class="card-body">
                            <h5 class="card-title">For I am your Shepard</h5>
                            <p class="card-text">The next chapter is coming.. and a trilogy remaster!</p>
                            <a href="https://www.pcgamer.com/the-new-mass-effects-teaser-image-references-both-mass-effect-2-and-andromeda/" class="btn btn-primary">Read the full article</a>
                        </div>
                    </div>
                
                <!-- <div class="card bg-dark text-white main-card"> -->
                    <!-- <img src="images/sample.jpg" class="card-img" alt="..."> -->
                    <!-- <div class="card-img-overlay">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text">Last updated 3 mins ago</p>
                    </div> -->
                <!-- </div> -->
            </div>
            <div class="col-12 col-lg-4 d-flex justify-content-center align-items-center">
                <?php require_once "../app/view/inc/weather.php" ?>
            </div>
        </div>



            <!-- TOP STORIES -->

            <br><br><br><br><br><br>

            <h1>TOP STORIES</h1>

            <div class="topStories row">
                <!-- ONE -->
                <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center align-items-center">
                    <div class="card top-stories mass">
                        <!-- <img src="images/me.jpg" class="card-img-top" alt="..."> -->
                        <div class="card-body">
                            <h5 class="card-title">For I am your Shepard</h5>
                            <p class="card-text">The next chapter is coming.. and a trilogy remaster!</p>
                            <a href="https://www.pcgamer.com/the-new-mass-effects-teaser-image-references-both-mass-effect-2-and-andromeda/" class="btn btn-primary">Read the full article</a>
                        </div>
                    </div>
                </div>

                <!-- TWO -->
                <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center align-items-center">
                    <div class="card top-stories ac">
                        <!-- <img src="images/AC.jpg" class="card-img-top" alt="..."> -->
                        <div class="card-body">
                            <h5 class="card-title">Praise Odin!</h5>
                            <p class="card-text">Assassin's Creed Valhalla's extensive options should be the new standard for PC gaming</p>
                            <a href="https://www.pcgamer.com/assassins-creed-valhallas-extensive-options-should-be-the-new-standard-for-pc-gaming/" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

                <!-- THREE -->
                <div class="col-12 col-lg-4 d-flex justify-content-center align-items-center">
                    <div class="card top-stories yakuza">
                        <!-- <img src="images/yakuza.jpg" class="card-img-top" alt="Yakuza"> -->
                        <div class="card-body">
                            <h5 class="card-title">Like a Dragon</h5>
                            <p class="card-text">A fresh start for the Yakuza series?</p>
                            <a href="https://www.theverge.com/21558093/yakuza-like-a-dragon-review-xbox-series-x"" class="btn btn-primary">More here</a>
                        </div>
                    </div>
                </div>


            </div>


            <br><br><br><br><br><br>


<!-- 
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="row">
                        <div class="col-6">
                            <h3>Like a dragon</h3>
                            <p>A fresh start for the Yakuza series?</p>
                        </div>
                        <div class="col-4">
                            <a href="https://www.theverge.com/21558093/yakuza-like-a-dragon-review-xbox-series-x">
                            <img src="images/yakuza.jpg" alt="yakuza like a dragon" class="img-small">
                        </a>
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
                <div class="col-12 col-lg-6">
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


            </div> -->



            <!-- OWL CAROUEL -->

            <h2>Tech</h2>
            <div class="owl-carousel">
                <div><img src="<?php echo URLROOT; ?>/images/sample.jpg" alt="sample">
                    <h3>Example Header</h3>
                    <p>Example Text</p>
                </div>
                <div class="item"><img src="<?php echo URLROOT; ?>/images/sample.jpg" alt="sample">
                    <h3>Example Header</h3>
                    <p>Example Text</p>
                </div>
                <div class="item"><img src="<?php echo URLROOT; ?>/images/sample.jpg" alt="sample">
                    <h3>Example Header</h3>
                    <p>Example Text</p>
                </div>
                <div class="item"><img src="<?php echo URLROOT; ?>/images/sample.jpg" alt="sample">
                    <h3>Example Header</h3>
                    <p>Example Text</p>
                </div>
                <div class="item"><img src="<?php echo URLROOT; ?>/images/sample.jpg" alt="sample">
                    <h3>Example Header</h3>
                    <p>Example Text</p>
                </div>
                <div class="item"><img src="<?php echo URLROOT; ?>/images/sample.jpg" alt="sample">
                    <h3>Example Header</h3>
                    <p>Example Text</p>
                </div>
                <div class="item"><img src="<?php echo URLROOT; ?>/images/sample.jpg" alt="sample">
                    <h3>Example Header</h3>
                    <p>Example Text</p>
                </div>
            </div>


            </div>

            <!-- FOOTER -->
            <?php require_once "../app/view/inc/footer.php" ?>





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
    <script src="<?php echo URLROOT; ?>/vendors/owl/docs/assets/vendors/jquery.min.js"></script>
    <script src="<?php echo URLROOT; ?>/vendors/owl/dist/owl.carousel.min.js"></script>
    <!-- OWL configuration -->
    <script src="<?php echo URLROOT; ?>/js/owl.js"></script>


<script src="<?php echo URLROOT; ?>/js/main.js"></script>

</body>
</html>