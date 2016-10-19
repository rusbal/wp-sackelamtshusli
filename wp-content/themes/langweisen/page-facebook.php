<?php
/**
 * Template Name: Facebook Template
 * Author: Maker
 * Date: 2016-10-16
 * Time: 14:11
 */
?>
<!doctype html>
<html>
<head>
  <title>Eigentumswohnung Breite Schaffhausen kaufen | Einfamilienhaus in Schaffhausen auf der Breite kaufen mit 5,5 Zimmer</title>

  <?php include "header.meta.php"; ?>
  <?php include "html5shiv.html"; ?>

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/index.css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/facebook-homepage.css">
  <?php include "header.mailchimp-tracking.html"; ?>
</head>
<body>
<div id="banner">
   <a href="/rhein"><img src="/wp-content/uploads/2016/01/saeckelamtshuesli_panorama-768x174.jpg"></a>
</div>
<!-- iframe -->
<div id="fb-iframes">

    <?php
    // TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : ?> <!--Because the_content() works only inside a WP Loop -->
      <!--<?php the_post(); ?>-->
        <div class="entry-content-page">
            <?php the_content(); ?> <!-- Page Content -->
        </div><!-- .entry-content-page -->

    <?php
    endwhile; //resetting the page loop
    wp_reset_query(); //resetting the page query
    ?>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
<script type="text/javascript">
$(function(){
  $( "a" ).each(function( index ) {
    if (!$(this).attr("id")) {
      $(this).attr("id", "linkattr_" + (index+1));
    }
  });
});
/* Move item to first */
if ($(".facebook-stream-white-panel").length > 0) {
  $(".facebook-stream-container").prepend($(".facebook-stream-white-panel")[$(".facebook-stream-white-panel").length - 7]);
}
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-31350028-3', 'auto');
  ga('require', 'linkid');
  ga('send', 'pageview');

</script>
<div class="no-height">
  <?php include "_google_tag_params.js.html"; ?>
</div>
</body>
</html>
