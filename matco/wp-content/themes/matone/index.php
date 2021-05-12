<?php 
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Wp_Bootstrap
 * @since Wp Bootstrap 1.0
 */

    // Gets header.php
    get_header();?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 <div class="container">
 	<div class="row">
<h4 class="padd-t100 page-head"><?php the_title(); ?></h4>  
        <div class="entry">
            <?php the_content(); ?>
        </div><!-- entry -->
<?php endwhile; ?>
<?php endif; ?>

 		<div class="col-md-12">
<div class="navigation">
<?php previous_post_link(); ?>  
  <?php next_post_link(); ?>
 </div>
<?php  comments_template( '', true ); ?>
</div>
</div>
 	</div>
   <?php get_footer(); 

 ?>