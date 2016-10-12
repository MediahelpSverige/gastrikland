<!DOCTYPE html>

<html>

<head>

	<title><?php bloginfo ( 'name' ); ?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head();?>

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css">

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/owl.theme.css">

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/custom.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/owl.carousel.css">

	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700|Open+Sans:400,300italic' rel='stylesheet' type='text/css'>

	<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/img/icon.png">



	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.12.0.min.js"></script>

	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/owl.carousel.min.js"></script>

	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>

	<script data-host="//auctionet.com/embed" src="//auctionet.com/embed/js/auctionet-embed.v2.js" id="auctionet-embed-script"></script>

</head>

<body>

<div class="container">

<header>

<div class="top-section">

<div class="fb">

<a href="https://www.facebook.com/G%C3%A4striklands-Auktionskammare-625465784225895/?fref=ts"><i class="fa fa-facebook"></i></a>

</div>

<div class="clock"><a href=""></a><i class="fa fa-clock-o"></i> Våra Öppettider</div>

</div>

<div class="header-wrap">

<div class="logo"><img src="<?php the_field('logo', 4);?>"></div>

<div class="hours">

	

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

						'post_type'        => 'hours',

						'post_mime_type'   => '',

						'post_parent'      => '',

						'author'	   	   => '',

						'post_status'      => 'publish',

						'suppress_filters' => true 

					);

	$count = 0;

	$posts_array = get_posts( $args ); ?>



	<div class="hours-centering">

	

		<?php foreach ($posts_array as $post) { ?>

	<?php setup_postdata( $post ); ?>

	

			<div class="hours-wrap"><span class="hours-title"><?php the_title();?></span><span class="hours-content"><?php the_content(); ?></span></div>





	  				<?php } ?>

  				<?php wp_reset_postdata(); ?>





	</div>



</div>

</div>

<div class="bottom-section">

<div class="container">

<nav role="navigation">

 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

        <span class="icon-bar"></span> 

      </button>

<?php wp_nav_menu( array( 'theme_location' => 'header-menu',  'menu_class' => 'nav', 'depth' => 2, 'container_id'=> 'myNavbar', 'container_class'=> 'main-nav collapse navbar-collapse', 'walker' => new wp_bootstrap_navwalker()) ); ?>

</nav>

</div>

</div>

</header>