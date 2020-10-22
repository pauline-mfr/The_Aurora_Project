<?php get_header()?>

<section>
    <article>
    <h1><span class="jaune">Votre</span> recherche.</h1>

    </article>
           
    <?php if(have_posts()) : while (have_posts()) : the_post(); ?>

    <article class="blog-fiche">
        <div class="blog-fiche-img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail("liste_articles"); ?></a></div>
        <div class="blog-fiche-info">
        <h1><?php the_title(); ?></h1>
            <div class="meta">Publié le <?php the_time('j F Y'); ?> par <b><?php the_author(); ?></b> dans <?php the_category(', '); ?> </div>
            <ul>
                <li><?php echo substr(strip_tags($post->post_content), 0, 140); ?>...</li>
                <li><a href="<?php the_permalink(); ?>">Lire la suite</a></li>
            </ul>
        </div>
    </article>
</section>

    <?php endwhile; else : ?>
    <p>Bonjour, Désolé mais il n'y a aucun article sur cette page</p>
    <?php endif; ?>
    
<?php get_footer()?>