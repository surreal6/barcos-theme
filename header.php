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
  <body <?php body_class(); ?> id="body">

    <!-- wrapper -->
    <div class="wrapper" id="wrapper">

      <!-- header -->
      <header class="header clear" role="banner" id="header">

      <div class="header-div" id="header-div">

        <div class="sun-div">
          <div class="cn-button" id="cn-button"></div>
          <div class="cn-wrapper" id="cn-wrapper">
              <!-- nav -->
              <nav class="nav" role="navigation">
                <!-- <?php html5blank_nav(); ?> -->
                <ul>
                  <li><a href="index.php/de-que-va-esto/" title="de que vá esto?"><i class="fa fa-question"></i></a></li> 
                  <li><a href="index.php/monograficos/" title="monográficos"><i class="fa fa-map"></i></a></li> 
                  <li><a href="<?php echo home_url(); ?>" title="bitácora"><i class="fa fa-compass"></i></a></li>  
                  <li><a href="index.php/rutas-de-exploracion/" title="rutas de exploración"><i class="fa fa-map-signs"></i></a></li>    
                  <li><a href="index.php/contacto/" title="contacto"><i class="fa fa-envelope"></i></a></li>  
                </ul>
              </nav>
              <!-- /nav -->
          </div>  
        </div>

        <div class="isla-top-div">
          <img src="<?php echo get_template_directory_uri(); ?>/img/pruebaisla.svg" alt="isla" class="isla-top-img">
        </div>
        
        <div class="sidebar-content-div">
          <?php get_sidebar(); ?>
        </div>
        
        <div class="isla-bottom-div">
          <img src="<?php echo get_template_directory_uri(); ?>/img/pruebaisla2.svg" alt="isla2" class="isla-bottom-img">
        </div>

        <div id="cn-overlay" class="cn-overlay"></div>

      </div>
  
      </header>
      <!-- /header -->
