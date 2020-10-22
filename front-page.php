<?php get_header()?>


<h1>Les dernières infographies</h1>

<?php
    query_posts(array(
    'post_type' => 'infographies',
    'showposts' => 3
    ) );
?>

<div class="container div-accordion">
<div class="accordion">
		<ul>
    <?php while (have_posts()) : the_post(); ?>
			<li>
        <?php the_post_thumbnail("original");?>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
			</li>
		</ul>
	</div>
</div>

<?php endwhile; ?>



<?php get_footer()?>