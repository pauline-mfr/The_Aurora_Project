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
        <div class="position-categorie text-center">
            <h4 class="text-uppercase color-purple"><?php the_category(); ?></h4>
            <p class="mt-5 pl-5 pr-5 pb-4"><?php echo wp_trim_words( get_the_content(), 40, '...' ); ?></p>
            <a href="<?php the_permalink() ?>" class="color-purple text-uppercase border-lire-la-suite"> > Lire la suite</a>
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
<div class="pagination d-flex justify-content-center mt-5 mb-5">
    <a href="#">&laquo;</a>
    <a href="#">1</a>
    <a href="#">2</a>
    <a href="#">3</a>
    <a href="#">4</a>
    <a href="#">5</a>
    <a href="#">6</a>
    <a href="#">&raquo;</a>
</div>


<?php get_footer()?>