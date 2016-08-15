<?php
/*Template name: Nyhetsarkiv */

 get_header(); ?>
<div class="page-wrap">
<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		?>
		<section class="white-section single">
		<div class="content <?php echo $post->post_name; ?>">
		<?php the_title('<h1>','</h1>');?>

		<?php the_content(); ?>

		<?php } // end while
		wp_reset_postdata();
} // end if
?>

			<div class="news-wrap-archive content">

	<?php $my_query = new WP_Query(array( 'post_type' => 'nyheter', 'post_per_page' => -1) );
//print_r($query8);
					  while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
					  <div class="news-item col-md-12">

		<?php the_post_thumbnail('full'); ?>

		<?php the_title('<h2>','</h2>'); ?>

		<?php the_excerpt(); ?>

		<div class="date-section"><?php echo get_the_date(); ?></div>
</div>
	    <?php endwhile;?>
		
</div>
		</div>
		</section>

</div>
<?php get_footer(); ?>
