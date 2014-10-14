<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<?php 
/* Short and sweet */
define('WP_USE_THEMES', false);
require('blog/wp-blog-header.php');
?>
<head>
  <meta charset="utf-8" />
  <meta name="description" content="World class printers located in Tijuana, México">
  <meta name="keywords" content="Marka, printing, mexico, tijuana, quality, offset, cmyk">
  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />
  <title>News - Marka Printing</title>

  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="/stylesheets/foundation.min.css">
  <link rel="stylesheet" href="/stylesheets/app.css">
  <link rel="stylesheet" href="/stylesheets/movil.css">
  <link rel="stylesheet" href="/stylesheets/jquery.maximage.css?v=1.2" type="text/css" media="screen" charset="utf-8" />
  <link rel="stylesheet" href="stylesheets/lynup-extends.css">


  <!-- modernize browser.. -->
  <script src="/javascripts/modernizr.foundation.js"></script>

</head>
<body class="news">
  <div id="maximage">
    <img src="/images/background-news-1440x912.jpg">
  </div>
  <?php include('nav.inc') ?>

  <div class="row">
    <div class="fourteen columns centered text-center">

      <h1 class="markaHeading news">MEET OUR NEWS</h1>
     

<!-- 
aqui traemos la info del blog..
// Get the last 3 posts.

-->
<div class="row">
  <div class="sixteen columns centered">
    <div class="row">
      <?php
      global $post;
      $args = array( 'posts_per_page' => 3 );
      $count = 1;
      $myposts = get_posts( $args );
      foreach( $myposts as $post ) : setup_postdata($post); ?>
      <div class="five columns news-item text-left <?php if ($count == 3){ echo "end"; } elseif ($count == 1) { echo "fark "; };
      $count++ ?>">
      <?php if (has_post_thumbnail( $post->ID ) ): ?>
      <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumbnail' ); ?>
      <img src="<?php echo $image[0]; ?>" class="news-item-image hide-for-small" >
      <div class="news-item-content">

        <h3>
          <a class="newsItemlink" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
            <?php the_title(); ?>
          </a>
        </h3>
        <?php 
//excertp
        the_excerpt();
        ?>

      </div>
    </div>

  <?php endif; ?>

<?php endforeach; ?>

</div>
<a href="/blog" class="button tijuana more-news">More news</a>
</div>
</div>
</div>
</div>

<!-- THIS IS THE END,. -->

<!-- Included JS Files (Compressed) -->
<script src="/javascripts/foundation.min.js"></script>

<!-- Initialize JS Plugins -->
<script src="/javascripts/app.js"></script>
<script src="/javascripts/jquery.cycle.all.js" type="text/javascript" charset="utf-8"></script>
<script src="/javascripts/jquery.maximage.js" type="text/javascript" charset="utf-8"></script>
<script src="/javascripts/maximgmarka.js" type="text/javascript"></script>


<!--  -->
<!-- GOOGLE ANALYTICS -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-40513689-2', 'marka-mexico.com');
  ga('send', 'pageview');

</script>
</body>
</html>
