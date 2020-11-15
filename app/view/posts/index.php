<?php require_once "../app/view/inc/header.php" ?>

<?php require_once "../app/view/inc/nav.php" ?>


<?php flash('post_message'); ?>
    <div class="container">
        <div class="card forumHead card-body m-4">
            <div class="row">
                <div class="col-md-8 d-flex flex-column justify-content-center align-items-center text-center">
                    <h3 class="card-title">Join the brotherhood</h3>  
                    <h1 class="card-title">Post your message!</h1>  
                </div>
                <div class="col-md-4 d-flex flex-column justify-content-center align-items-center text-center">
                    <a href="<?php echo URLROOT; ?>/posts/add" 
                        class="btn btn-success create pull-right">
                        <i class="fas fa-pencil-alt"></i> 
                        Create post</a>
                </div>  
            </div>
        </div>

    <?php foreach($data['posts'] as $post) : ?>
        <div class="card forum card-body m-4 p-5">
            <h4 class="card-title "><?php echo $post->title; ?></h4>
            <div class="px-2 mb-3 font-italic">By <?php echo $post->userName; ?> on <?php echo $post->postCreated; ?>
            </div>
            <p class="card-text px-2 mb-3"><?php echo $post->body; ?></p>
            <a href="<?php echo URLROOT;?>/posts/show/<?php echo $post->postId; ?>" class="btn btn-light">More</a>
        </div>
    <?php endforeach; ?>

    </div>

<?php require_once "../app/view/inc/footer.php" ?>

</body>
</html>

