<?php get_header() ?>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <div class=" mt-5 pb-5 container border-radius-infographie bg-light">
    <h2 class="text-uppercase color-icons text-center pt-5 pb-5 pl-5 pr-5 bg-light rounded"><?php the_title(); ?></h2>
    <hr class="mb-5">
    <div class="d-flex justify-content-center">
      <?php the_content(); ?>
    </div>
  </div>

  <?php endwhile; endif ?>


<?php get_footer() ?>