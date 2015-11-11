<?php get_header(); ?>

<main role="main" class="main-content">
  <h1 class="bitacora-title">Bitácora</h1>
  <div class="bitacora-div">
    <?php get_template_part('loop'); ?>
  </div>
  <div class="pagination-div">
    <?php get_template_part('pagination'); ?>
  </div>
  <div class="sidebar-div" id="sidebar-div">
    <?php get_sidebar(); ?>
  </div>
</main>

<?php get_footer(); ?>
