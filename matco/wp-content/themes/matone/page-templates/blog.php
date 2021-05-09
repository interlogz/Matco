<?php
/*
Template Name: Blog
*/

get_header();
?>
<div class="container padd-t100">
	<div class="row">
		<div class="col-md-12">
		<h2 class="text-center">Blog</h2>
			<?php 
			$args=array(
			
				'posts_per_page'=>-1,
				'post_type'=>'post',
				'order'=>'ASC',
				'order_by'=> 'menu_order'
			);

			$blog = get_posts($args);

			 ?>
			 <div class="row">
			 	<?php   foreach ($blog as $serv){
        	$serimg= wp_get_attachment_image_src(get_post_thumbnail_id( $serv->ID),'single-post-thumbnail');
 ?>
			 	<div class="col-md-4">
			 		<img src="<?= $serimg[0];?>" class="img-fluid cust-img">
			 		<h4><?= $serv->post_title; ?></h4>
			 		<div>
			 			<p><?= $serv->post_date;?></p>
			 		</div>
			 		<div>
			 			<p><?= wp_trim_words($serv->post_content,15);?></p>
			 		</div>
			 		<a href="<?= $serv->guid;?>"><div>read More</div></a>
			 	</div>
			 <?php } ?>
			 </div>
		</div>
	</div>
</div>

<?php get_footer(); ?>