<?php /*Template Name: About*/  ?>
<?php  get_header();  ?>
<div class="container">
	<div class="row padd-t100 align-items-center">
		<div class="col-md-12">
			<h2 class="text-center">About us</h2>
		</div>
		<div class="col-sm-12 col-md-6">
			<?php $ser_image = wp_get_attachment_image_src( get_post_thumbnail_id( 56 ), 'single-post-thumbnail' ); ?>
			<img src="<?= $ser_image[0];?>" class="img-fluid">
		</div>
		<div class="col-sm-12 col-md-6">
			<p><?php echo get_post_field('post_content', 56);?></p>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2 class="text-center">Achievements</h2>
		</div>
	</div>
	<div class="row" style="padding: 20px;">
		<div class="col-md-4">
			<img src="http://via.placeholder.com/300" class="img-fluid">
		</div>
		<div class="col-md-4">
			<img src="http://via.placeholder.com/300" class="img-fluid">
		</div>
		<div class="col-md-4">
			<img src="http://via.placeholder.com/300" class="img-fluid">
		</div>
	</div>
		<div class="row" style="padding: 20px;">
		<div class="col-md-4">
			<img src="http://via.placeholder.com/300" class="img-fluid">
		</div>
		<div class="col-md-4">
			<img src="http://via.placeholder.com/300" class="img-fluid">
		</div>
		<div class="col-md-4">
			<img src="http://via.placeholder.com/300" class="img-fluid">
		</div>
	</div>
</div>
<?php get_footer();  ?>