<?php get_header(); ?>
<div class="page-wrap">
<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		?>
		<section class="white-section">
		<div class="content <?php echo $post->post_name; ?>">
		<?php the_content(); ?>
		</div>
		</section>
<?php } // end while
} // end if
?>
</div>
<?php get_footer(); ?>
