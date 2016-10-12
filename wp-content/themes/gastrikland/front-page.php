<?php get_header(); ?>

<div class="page-wrap">

<?php 

if ( have_posts() ) {

	while ( have_posts() ) {

		the_post(); 

		?>

		<section class="gray-section">

		<div class="container">

		<div class="row">
			<div class="col-md-12" >
			<div class="welcome-text">
			<?php the_content(); ?>
			</div>
			</div>
		</div>

		<div class="row">

		<div class="col-md-7 col-sm-7">

		<script id="auctionet-embed">
  auctionet.init({
    companyId: 72,
    locale: "sv",
    howManyItems: 6,
    heading: 'Våra senaste auktioner',
        textColors: {
      itemId: '#000',
      link: '#252525',
      heading: '#000',
      bidOrEstimateText: '#5d5d5d',
      bidOrEstimateValue: '#5d5d5d',
      endsAtText: '#5d5d5d',
      endsAtValue: '#5d5d5d'
    },

  });
</script>

		</div>

		<div class="col-md-4 col-sm-4 col-md-offset-1">
		<h3>Gilla oss på facebook</h3>
		<p>Följ oss på facebook för att snabbt ta del av nya auktioner och nyheter</p>
			<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FG%25C3%25A4striklands-Auktionskammare-625465784225895%2F%3Ffref%3Dts&tabs=timeline&width=340&height=600&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="300" height="600" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

		</div>

		<div class="facebook"></div>

		</div>
		</div>

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

