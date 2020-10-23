<?php get_header() ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class=" mt-5 pb-5 container border rounded">
      <section class="container">
        <h2 class="text-uppercase text-center pt-5 pb-2"><?php the_title(); ?></h2>
        <a href="#" class="mb-5 d-flex justify-content-center"><?php the_category(); ?></a>
      </section>
      <section class="d-flex justify-content-center pt-5">
        <p class="text-center"><?php the_content(); ?></p>
      </section>
    </div>

<?php endwhile; endif ?>


<?php get_footer() ?>