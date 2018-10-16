<!--
 
      single.php = Layout for a single POST


 -->

<?php 

	get_header();

	while (have_posts()) {
		the_post(); ?>

<a class="blog-home-link" href="<?php echo site_url('/blog'); ?>">Blog Home</a>
<?php if ( has_post_thumbnail() ) { ?>
	<div class="featured-image-single">
		<?php the_post_thumbnail(array(1092,420)); ?>
	</div>
<?php } ?> 
	<div class="post-title-single">
  		<h1><?php the_title(); ?></h1>
	</div>  

  <div class="post-header">
        <p>Posted by <?php the_author_posts_link(); ?> on <?php the_time('F m, Y'); ?> in <?php echo get_the_category_list(', '); ?></p>
  </div>

<div class="post-content"><?php the_content(); ?></div>
	<?php }

	// get_footer();
?>