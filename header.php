<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>
           
        <meta name="author" content="Softeclab">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link rel="shortcut icon" href="favicon.png">
        <link rel="apple-touch-icon" href="favicon.png">

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page()) && !(is_home() || is_front_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home() || is_front_page()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css">


        <!--[if lt IE 9]>
        <script src="<?php bloginfo('template_directory'); ?>/assets/bootstrap/js/html5shiv.min.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/assets/bootstrap/js/respond.min.js"></script>
        <![endif]-->
        <script src="<?php bloginfo('template_directory'); ?>/assets/js/modernizr.custom.js"></script>
        

	<?php wp_head(); ?>
</head>


<body class=" ballet">
    
    <div class="ct-menuMobile">
        <?php
            wp_nav_menu(array(
                'theme_location' => 'header-menu',
                'menu_class' => 'ct-menuMobile-navbar',
                'container' => 'ul'
            ));
         ?>
        
    </div>
<div id="ct-js-wrapper" class="ct-pageWrapper">
    <div class="ct-navbarMobile ct-navbarMobile--inverse">
        <button type="button" class="navbar-toggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <div class="navbarLogoTxt1">The <span>KHARATIAN</span></div>
            <div class="navbarLogoTxt2">Arts Center Gyumri</div>
        </a>
    </div>
    <nav class="navbar main-navigation" role="navigation" data-startnavbar="0" data-offset="115"><!-- NavBar [begin] -->
        <div class="container-fluid padd0">
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="row">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <div class="col-lg-3 col-md-3 col-sm-2">
                        <div class="navbar-header">
                            <div class="navbarLogoTxt1">The <span>KHARATIAN</span></div>
                            <div class="navbarLogoTxt2">Arts Center Gyumri</div>
                        </div>
                    </div>
                   <div class="col-lg-9 col-md-9 col-sm-10">
                        <?php
                            wp_nav_menu(array(
                                'theme_location' => 'header-menu',
                                'menu_class' => 'nav navbar-nav navbar-right site-header-menu',
                                'container' => 'ul'
                            ));
                        ?>
                       <div class="clearfix"></div>
                   </div>
                </div>
            </div>
        </div>
    </nav><!-- NavBar [end] -->
    
    <div class="clearfix"></div>
	
	