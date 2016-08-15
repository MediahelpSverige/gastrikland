<?php get_header(); ?>
<div class="page-wrap">
	<?php 

	$args = array(
						'posts_per_page'   => -1,
						'offset'           => 0,
						'category'         => '',
						'orderby'          => 'date',
						'order'            => 'DESC',
						'include'          => '',
						'exclude'          => '',
						'meta_key'         => '',
						'meta_value'       => '',
						'post_type'        => 'hemsldier',
						'post_mime_type'   => '',
						'post_parent'      => '',
						'author'	   	   => '',
						'post_status'      => 'publish',
						'suppress_filters' => true 
					);
	$count = 0;
	$posts_array = get_posts( $args ); ?>

<div id="slider" class="owl-carousel">
	<?php foreach ($posts_array as $post) { ?>
	<?php setup_postdata( $post ); ?>
	<div class="item" style="background-image:url(' <?php the_post_thumbnail_url( 'full' ); ?> ')">

  				<div class="slidebox">
  				<div class="slidewrap">
	  				<div class="slidetitle">
	  					<a href="<?php the_permalink(); ?>"><?php the_title('<h1>','</h1>'); ?></a>
	  				</div>
	  				<div class="slidetext">
	  					<?php the_excerpt(); ?>
	  				</div>
	  				
  				</div>
  				</div>
  				</div>
  				<?php } ?>
  				<?php wp_reset_postdata(); ?>
</div>


<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		?>
		<section class="gray-section">
		<div class="content">
		<?php the_content(); ?>
		<div class="auctionnet">
		<div><h2>Se alla våra auktioner</h2></div>
		<a href=""><img src="http://gastrikland.mediahelpcrm.se/wp-content/uploads/2016/02/Auctionet.com_.jpg"></a>
		</div>
		</div>
		<div class="facebook"><iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FG%25C3%25A4striklands-Auktionskammare-625465784225895%2F%3Ffref%3Dts&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe></div>
		</section>
<?php } // end while
} // end if
?>
</div>
<section class="news-section">
<div class="container">
<div class="row">
	<div class="col-md-12">
	<div class="news-wrap content">

	<h1>Händer just nu</h1>


	<?php $my_query = new WP_Query(array( 'post_type' => 'nyheter', 'post_per_page' => 3) );
//print_r($query8);
					  while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
					  <div class="col-md-4">

		<?php the_title('<h2>','</h2>'); ?>

		<?php the_excerpt(); ?>

		<div class="date-section"><?php echo get_the_date(); ?></div>
</div>
	    <?php endwhile;?>
		
</div>
	</div>
	</div>
</section>
<script type="text/javascript">
	$(document).ready(function() {

		var w = $(window).width();


		if (w < 990) {
			var clock = $('.clock').detach();
			$('.hours').prepend(clock);
		};



						  $("#slider").owlCarousel({
						 
						      navigation : false, // Show next and prev buttons
						      slideSpeed : 1000,
						      paginationSpeed : 400,
						      autoPlay: 5000,
						      singleItem:true,
						      dots: true,
						       itemsScaleUp:true
						 
						      // "singleItem:true" is a shortcut for:
						      // items : 1, 
						      // itemsDesktop : false,
						      // itemsDesktopSmall : false,
						      // itemsTablet: false,
						      // itemsMobile : false
						 
						  });
						});
</script>
<?php get_footer(); ?>
