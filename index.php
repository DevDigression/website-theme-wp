<?php get_header(); ?>
<div class="blog-page-nav">
<div class="blog-page-nav-icon">
  <a href="../#landing"><img class="nav-icon" src="<?php bloginfo('template_url'); ?>/img/Nav-Icon.png" /></a>
</div>
  <ul>
    <li class="about-nav"><a href="../#about">About Me</a></li>
    <li class="projects-nav"><a href="../#projects">Projects</a></li>
    <li class="contact-nav"><a href="../#contact">Contact</a></li>
  </ul>
</div>

 <div class="blog-page">
<!-- 	<header class="blog-header">
		<h1>Dev Digression</h1>
		<h2>by Chris Rodgers</h2>
	</header> -->

<?php while (have_posts()) {
  the_post();
?> 

<?php if ( has_post_thumbnail() ) { ?>
	<div class="featured-image">
		<?php the_post_thumbnail(); ?>
	</div>
<?php } ?> 

<div class="post-item">
    <div class="post-info"><p><!-- Posted by <?php the_author_posts_link(); ?> on --> <?php the_time('F m, Y'); ?> <!-- in <?php echo get_the_category_list(', '); ?> --></p></div>

  <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

  <div class="post-excerpt"><?php the_content(); ?></div>
  <div class="continue-button"><a href="<?php the_permalink(); ?>" class="post-full-link"><button>Continue Reading</button></a></div>
</div>

<?php } 
  echo paginate_links();
?>

 </div>