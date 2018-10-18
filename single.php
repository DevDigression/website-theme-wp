<!--
 
      single.php = Layout for a single POST


 -->

<?php 

	get_header();

	while (have_posts()) {
		the_post(); 

$next_post_url = get_permalink( get_adjacent_post(false,'',false)->ID );
$previous_post_url = get_permalink( get_adjacent_post(false,'',true)->ID );

?>

<div class="blog-home-link">
	<a href="<?php echo site_url('/blog'); ?>"><i class="fas fa-home"></i>  Blog Home</a>
</div>

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

	<div class="post-content">
		<?php the_content(); ?>
	</div>

	<div class="post-nav-links">

	<?php if (get_adjacent_post(false, '', true)): ?>
		<a href="<?php echo get_permalink(get_adjacent_post(false,'',true)); ?>" class="post-nav-prev"><button><i class="fas fa-step-backward"></i> Previous Post</button></a>
	<?php endif; ?>

	<?php if (get_adjacent_post(false, '', false)): ?>
		<a href="<?php echo get_permalink(get_adjacent_post(false,'',false)); ?>" class="post-nav-next"><button>Next Post <i class="fas fa-step-forward"></i></button></a>
	<?php endif; ?>

</div>
	<?php }

	// get_footer();
?>