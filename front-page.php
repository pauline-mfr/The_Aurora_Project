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
      <div id="circle" data-toggle="modal" data-target="#modal">
        <div id="play"><a href="#"></a></div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"><?php the_title(); ?></h5>
            </div>
            <div class="modal-body text-center">
              <?php the_content(); ?>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            </div>
          </div>
        </div>
      </div>
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


<!--  INFOGRAPHIES -->

<?php
    query_posts(array(
    'post_type' => 'infographies',
    'showposts' => 3
    ) );
?>

<div class="container">
  <h2 class="size-color-title-info border-title-info">Les dernières infographies</h2>
  <div class="row mt-3 mb-5 pb-5">
    <?php while (have_posts()) : the_post(); ?>
    <div class="col">
      <div class="card" style="width: 18rem;">
                <a href="<?php the_permalink(); ?>" target="_blank">
        <?php the_post_thumbnail('medium', ['class' => 'card-img-top']);?>
        </a>
      </div>
    </div>
    <?php endwhile; ?>
  </div>
</div>

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
      <div><?php the_post_thumbnail('thumbnail'); ?></div>
      <h4><?php the_title(); ?></h4>
      <p><?php the_excerpt(); ?></p>
    </div>
    <?php endwhile;?>

  </div>
</div>

<?php get_footer()?>
