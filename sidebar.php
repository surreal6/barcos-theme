<!-- sidebar -->
<aside class="sidebar" role="complementary" id="sidebar">
  <div class="container sidebar-div">
    <div class="row">
      <div class="six columns">
        <div class="sidebar-widget">
          <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
        </div>
      </div>
      <div class="six columns">
        <div class="sidebar-widget">
          <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="twelve columns">
        <?php get_template_part('searchform'); ?>
      </div>
    </div>
  </div>
</aside>
<!-- /sidebar -->
