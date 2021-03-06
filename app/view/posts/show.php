<?php require_once "../app/view/inc/header.php" ?>
<?php require_once "../app/view/inc/nav.php" ?>

<div class="contentContainer d-flex justify-content-center align-items-center">
	<div class="container">
		<div class="card forum card-body m-5">
			<div class="mb-5 mx-5 mt-2">
				<h1 class="card-title text-center"><?php echo $data['post']->title; ?></h1>
				<div class="px-2 mb-3 font-italic">By <?php echo $data['user']->userName; ?> on
					<?php echo $data['post']->created; ?>
				</div>
				<p class="card-text px-2 mb-3"><?php echo $data['post']->body; ?></p>
				<?php if($data['post']->userID == $_SESSION['user_id']) : ?>
				<div class="row">
					<div class="col-md-6">
						<a href="<?php echo URLROOT; ?>/posts/edit/<?php echo $data['post']->id; ?>"
							class="btn btn-primary mb-3 w-100">Edit</a>
					</div>
					<div class="col-md-6">
						<form class="" action="<?php echo URLROOT; ?>/posts/delete/<?php echo $data['post']->id; ?>" method="post">
							<input type="submit" value="Delete" class="btn btn-danger w-100">
						</form>
					</div>
					<?php endif; ?>
					<div class="col">
						<a href="<?php echo URLROOT; ?>/posts" class="btn btn-warning w-100"><i class="fa fa-backward"></i> Back to
							Forum</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php require_once "../app/view/inc/footer.php" ?>