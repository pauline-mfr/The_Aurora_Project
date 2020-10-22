<?php get_header()?>

<div id="css-script-menu">
  <div class="css-script-center">
    <div class="css-script-ads"><script type="text/javascript"><!--
google_ad_client = "ca-pub-2783044520727903";
/* CSSScript Demo Page */
google_ad_slot = "3025259193";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
      <script type="text/javascript"
src="//pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>
    <div class="css-script-clear"></div>
  </div>
</div>

<h1>Les dernières infographies</h1>

<?php
    query_posts(array(
    'post_type' => 'infographies',
    'showposts' => 3
    ) );
?>

<?php while (have_posts()) : the_post(); ?>
<div class="container div-accordion">
<div class="accordion">
		<ul>
			<li>
                <?php the_post_thumbnail("original");?>
				<a href="<?php the_permalink(); ?>"> Lien </a>
			</li>
		</ul>
	</div>

</div>

<?php endwhile; ?>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-46156385-1', 'cssscript.com');
  ga('send', 'pageview');
</script>


<?php get_footer()?>