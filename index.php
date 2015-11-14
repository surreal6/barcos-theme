<?php get_header(); ?>

<main role="main" class="main-content">

  <div class="bitacora-div">
    <?php get_template_part('loop'); ?>
    <div class="pagination-div">
      <?php get_template_part('pagination'); ?>
    </div>
  </div>
  
</main>

<?php get_footer(); ?>
