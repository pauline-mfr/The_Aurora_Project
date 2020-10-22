<?php get_header()?>


<div class="accordion">
		<ul class="ul">
			<li class="li">
				<img src="https://www.voyageavecnous.fr/wp-content/uploads/2015/01/plage-paradisiaque-maldives.jpg">
				<a href="#" class="a">Tree</a>
			</li>
			<li  class="li">
				<img src="https://www.voyageavecnous.fr/wp-content/uploads/2015/01/plage-paradisiaque-maldives.jpg">
				<a href="#" class="a">Chair</a>
			</li>
			<li  class="li">
				<img src="https://www.voyageavecnous.fr/wp-content/uploads/2015/01/plage-paradisiaque-maldives.jpg">
				<a href="#" class="a">Room</a>
			</li>
			<li class="li">
				<img src="https://www.voyageavecnous.fr/wp-content/uploads/2015/01/plage-paradisiaque-maldives.jpg">
				<a href="#" class="a">Lamp</a>
			</li>
			<li  class="li">
				<img src="https://www.voyageavecnous.fr/wp-content/uploads/2015/01/plage-paradisiaque-maldives.jpg">
				<a href="#" class="a">Chairs</a>
			</li>
			<li  class="li">
				<img src="https://www.voyageavecnous.fr/wp-content/uploads/2015/01/plage-paradisiaque-maldives.jpg">
				<a href="#" class="a">JP</a>
			</li>
			<li  class="li">
				<img src="https://www.voyageavecnous.fr/wp-content/uploads/2015/01/plage-paradisiaque-maldives.jpg">
				<a href="#" class="a">JP Web</a>
			</li>
		</ul>
	</div>


<h1>Les dernières infographies</h1>

<?php
    query_posts(array(
    'post_type' => 'infographies',
    'showposts' => 3
    ) );
?>

<!--<div class="container div-accordion">



<div class="accordion">
		<ul class="ul">
			<li class="li">
       
			</li>
		</ul>
	</div>
</div>

<div id="carouselExampleControls" class="carousel slide" data-interval="2000"data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">

    </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>-->


<div class="row">
  <?php while (have_posts()) : the_post(); ?>
    <div class="col-lg-4">
      <div class="card" style="width: 18rem;">
        <a href="<?php the_permalink(); ?>" target="_blank">
        <?php the_post_thumbnail('medium', ['class' => 'card-img-top']);?>
        </a>
      <div class="card-body">
        <p class="card-text"><?php the_title(); ?></p>
      </div>
    </div>
</div>

<?php endwhile; ?>


<?php get_footer()?>