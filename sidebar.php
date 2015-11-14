<!-- sidebar -->
  <aside class="sidebar" role="complementary" id="sidebar">
    <div class="isla-div">
      <div class="isla-top">
        <img src="<?php echo get_template_directory_uri(); ?>/img/pruebaisla.svg" alt="isla" class="isla-img">
      </div>
    </div>
    
    <div class="sidebar-widget">
      <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
    </div>
    <div class="sidebar-widget">
      <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
    </div>

    <?php get_template_part('searchform'); ?>

    <div class="isla-div">
      <div class="isla-bottom">
        <img src="<?php echo get_template_directory_uri(); ?>/img/pruebaisla.svg" alt="isla" class="isla-img">
      </div>
    </div>

  </aside>
</div>
<!-- /sidebar -->
