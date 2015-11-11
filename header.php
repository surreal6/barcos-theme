<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

    <script src="<?php echo get_template_directory_uri(); ?>/js/sea.js"></script>
    
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/sun-style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/fonts/font-awesome-4.4.0/css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/fonts/Kingthings-Trypewriter-fontfacekit/stylesheet.css" charset="utf-8" />
    

    <?php wp_head(); ?>
    <script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

  </head>
  <body <?php body_class(); ?>>

    <!-- wrapper -->
    <div class="wrapper" id="wrapper">

      <!-- header -->
      <header class="header clear" role="banner" id="header">

          <!-- logo -->
          <div class="logo">
            <a href="<?php echo home_url(); ?>">
              <!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
              <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
            </a>
          </div>
          <!-- /logo -->

          <div id="sun-menu">
            <div  id="sun">
              <button class="cn-button" id="cn-button"><h1 id="menu">+</h1></button>
            </div>
            <div class="cn-wrapper" id="cn-wrapper">
              <!-- nav -->
              <nav class="nav" role="navigation">
                <!-- <?php html5blank_nav(); ?> -->
                <ul>
                  <li><a href="#DE QUE VA" title="de que vá?"><i class="fa fa-question"></i></a></li> 
                  <li><a href="#BITACORA" title="bitácora"><i class="fa fa-compass"></i></a></li>  
                  <li><a href="#MONOGRAFICOS" title="monográficos"><i class="fa fa-map"></i></a></li> 
                  <li><a href="#RUTAS DE EXPLORACION" title="rutas de exploracion"><i class="fa fa-map-signs"></i></a></li>    
                  <li><a href="#CONTACTO" title="contacto"><i class="fa fa-envelope"></i></a></li>  
                </ul>
              </nav>
              <!-- /nav -->
            </div>
          </div>
      
          <div id="cn-overlay" class="cn-overlay"></div>
  
          <script src="<?php echo get_template_directory_uri(); ?>/js/lib/polyfills.js"></script>
          <script src="<?php echo get_template_directory_uri(); ?>/js/sun.js"></script>
      </header>
      <!-- /header -->
