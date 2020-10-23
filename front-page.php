<?php get_header()?>


<div class="container py-5" id="video">
  <?php
  query_posts(array(
    'post_type' => 'Vidéos',
    'showposts' => 1
    ) ); ?>
    <?php while (have_posts()) : the_post(); ?>    <!-- VIDEO HEADER -->
  <div class="row">
    <div class="col-md-4 relative">
      <h2 class="relative"><?php the_title(); ?></h2>
      <h2 id="video-mobile"><?php the_title(); ?></h2>
      <button class="btn relative">Button text ></button>
      <div id="left-border"></div>
    </div>
    <div class="col-12 col-md-8 d-flex justify-content-center align-items-center pt-5">
      <div id="circle">
        <div id="play"><a href="#"></a></div>
      </div>
      <?php the_content(); ?>
    </div>
  </div>
  <?php endwhile;?>
</div>

<div class="container" id="articles">
<?php
$articles = get_posts('showposts=3');
  $i = 0;
while (have_posts() ) : the_post(); ?>
<?php
foreach ($articles as $post) {
  $i++;
  if ($i <= 3) {
  if ($i % 2 == 0) {
     ?>
    <div class="row">
      <div class="col-12 col-md-6">
        <div><?php the_post_thumbnail('medium', ['class' => 'img-fluid', 'alt' => '', 'style' => 'height: auto;']); ?></div>
      </div>
      <div class="col-12 col-md-6">
        <div class="line"></div>
        <h3><?php the_title(); ?></h3>
        <p><?php the_excerpt() ?></p>
        <a href="<?php the_permalink() ?>">Read more</a>
      </div>
    </div>
  <?php } else { ?>
    <div class="row">
      <div class="col-12 col-md-6">
        <div class="line"></div>
        <h3><?php the_title(); ?></h3>
        <p><?php the_excerpt() ?></p>
        <a href="<?php the_permalink() ?>">Read more</a>
      </div>
      <div class="col-12 col-md-6">
        <div><?php the_post_thumbnail('medium', ['class' => 'img-fluid', 'alt' => '', 'style' => 'height: auto;']); ?></div>
      </div>
    </div>
  <?php }
  }
} ?>
<?php endwhile;?>
</div>
<!--  END ARTICLES -->



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



<div class="container" id="missions">
  <div class="row">
    <h2>Missions</h2>
    <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
  </div>
  <div class="row">
  <?php
  query_posts(array(
    'post_type' => 'Missions',
    'showposts' => 3
    ) ); ?>
    <?php while (have_posts()) : the_post(); ?>

    <div class="col-sm-12 col-md-4">
      <div class="rounded"><?php the_post_thumbnail('thumbnail'); ?></div>
      <h4><?php the_title(); ?></h4>
      <p><?php the_excerpt(); ?></p>
    </div>
    <?php endwhile;?>

  </div>
</div>

<?php get_footer()?>
