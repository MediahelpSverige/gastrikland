<?php
/*Template name: Kontakt*/

 get_header(); ?>
<div class="page-wrap">
<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		?>
		<section class="white-section kontakt single">
		<div class="row">
		<div class="content <?php echo $post->post_name; ?> col-md-6">
		<?php the_content(); ?>
		</div>
		<div class="form col-md-6">
			<?php the_field('formular');?>
		</div>
		</div>
		<div class="map"><?php the_field('karta');?></div>
		</section>
<?php } // end while
} // end if
?>
</div>
<?php get_footer(); ?>
