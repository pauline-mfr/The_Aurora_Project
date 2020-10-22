<?php get_header()?>

<div class="container-fluid">
    <div class="mt-2 d-flex justify-content-between">
        <div>
            <i class="fas fa-search fa-3x color-icons"></i>
        </div>
        <div>
            <img src="logo.png" alt="logo Aurora Project">
        </div>
        <div>
            <i class="fas fa-bars fa-3x color-icons"></i>
        </div>
    </div>
</div>
    
<!-- ARTICLES -->
<div class="container-fluid">
    <h2 class="color-purple border-bottom-title-articles">Articles récents</h2>
</div>

<?php

if (have_posts()) :
  while ( have_posts() ) : the_post();
?>

<div class="container-fluid position-div-articles mt-5 margin-bottom-articles">
    <div class="position-title">
        <h3 class="text-uppercase color-purple"><?php the_title() ?></h3>
    </div>
    <div class="position-image">
    <?php the_post_thumbnail('original', ['class' =>'img-articles border-radius', 'alt' => '']); ?>
    </div>
    <div class="border-radius bg-vert-eau d-flex flex-column position-text pt-5">
        <div class="position-categorie mt-4 text-center">
            <?php $categories = get_the_category();
            foreach ($categories as $category){
            echo '<div class="mb-5"> <a class="text-uppercase color-purple" href="' . get_category_link($category->term_id) . '" target="_blank">' . $category->cat_name . '</a> </div>';
            }?>
            <p class="mt-4 pl-5 pr-5 pb-4"><?php echo wp_trim_words( get_the_content(), 40, '...' ); ?></p>
            <a href="<?php the_permalink() ?>" target="_blank" class="color-purple text-uppercase border-lire-la-suite"> > Lire la suite</a>
        </div>
    </div>
</div>


<?php

endwhile;
else :
?>
<p>Il n'y a aucun articles</p>
<?php
endif;
?>

<hr>
<!-- PAGINATION -->

<div class="d-flex justify-content-center mt-5 mb-5">
    <?php the_posts_pagination(array(
            'mid_size' => 2,
            'prev_text' => __( '<i class="fas fa-angle-double-left"></i>', 'textdomain' ),
            'next_text' => __( '<i class="fas fa-angle-double-right"></i>', 'textdomain'), 
            'screen_reader_text' => ' ',
    ) ); ?>
</div>


<?php get_footer()?>