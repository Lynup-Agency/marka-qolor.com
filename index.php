<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />
  <meta name="description" content="World class printers located in Tijuana, México">
  <meta name="keywords" content="Marka, printing, mexico, tijuana, quality, offset, cmyk">
  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />
  <meta property="og:image" content="http://marka-mexico.com/images/share-on-facebook.png"/>
  <meta property="og:url" content="http://marka-mexico.com"/>
  <title>Marka Printing</title>

  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="stylesheets/foundation.min.css">
  <link rel="stylesheet" href="stylesheets/app.css">
  <link rel="stylesheet" href="stylesheets/movil.css">
  <link rel="stylesheet" href="stylesheets/jquery.maximage.css?v=1.2" type="text/css" media="screen" charset="utf-8" />

  <script src="javascripts/modernizr.foundation.js"></script>
</head>

<!-- THIS IS THE BEGining 
We have outgrown our infancy..
--> 
<body class="markaintro">
  <div id="intro" class="foobark index">

    <div class="row">
      <div class="ten columns centered text-center">
        <img src="images/intro-marka-logo.png" style="margin-top:25%">
      </div>
    </div>
    <div class="row">
      <div class="sixteen columns text-center">
        <img src="images/intro-slogan.png" style="margin-top:5%">
        <a href="#welcometomarka" class="scrolllink hide-text" style="margin: 20% auto 0 auto;">Scroll down to learn more</a>

      </div>
    </div>  

  </div>

  <div class="clear"></div>

  <div id="welcometomarka" class="foobark"> <!-- div para contenido  -->

    <div class="index">

      <div class="row">
        <div class="sixteen columns">
          <img src="images/fold-marka.png" class="fold">
        </div>
      </div>
    </div>


    <div class="row">
      <div class="sixteen columns text-center">
        <img src="images/welcome-to-marka.png" class="welcomeToMarka">
      </div>
    </div>

    <div class="row">
      <div class="twelve columns text-center centered">
        <p>
          MARKA is a printing and packaging company based out of Tijuana, Mexico servicing 
          the needs of purchasing departments in companies located in Baja California.
          Thanks for checking out our website, and we look forward to serving you.
        </p>
      <a href="#aboutUs" class="scrolllink hide-text" style="margin: 8% auto 0 auto;">Scroll down to learn more</a>

      </div>
    </div>   


  </div>

  <div id="aboutUs" class="foobark"> <!-- ultimo div -->
  <div id="maximage">
    <img src="images/background-about-us-1940x1229.jpg" width="1940" height="1229">
  </div>
    <?php include('nav.inc') ?>  

    <div class="row">
      <div class="fourteen columns centered text-center">

        <h1 class="markaHeading aboutUs">OUR BUSINESS IDEA</h1>

        <p>Born in July 2007, with a small 1 color vintage printing press, in the world famous border town city of Tijuana, Mexico, with the goal of serving some of the greatest companies in the world. What a crazy idea one would think? We actually think it makes perfect sense.</p>
        <p>Tijuana is a world class manufacturing center. Some of the worlds leading companies are setup in Tijuana. Over 800 factories known as “maquiladoras” span this fast growing city.</p>

        <a href="http://en.wikipedia.org/wiki/Tijuana#Economy" class="button tijuana" style="margin-top: 20%">About Tijuana</a>

      </div>
    </div>  


  </div>



  <!-- THIS IS THE END,. -->
  <!-- Included JS Files (Compressed) -->
  <script src="javascripts/foundation.min.js"></script>
  <!-- Initialize JS Plugins -->
  <script src="javascripts/app.js"></script>
  <script src="javascripts/jquery.cycle.all.js" type="text/javascript" charset="utf-8"></script>
  <script src="javascripts/jquery.maximage.js" type="text/javascript" charset="utf-8"></script>
  <script src="javascripts/maximgmarka.js" type="text/javascript"></script>
  <script type="text/javascript">



  $(document).ready(function(){   
    var $root = $('html, body');
    $('.scrolllink').click(function () {

      $root.animate({

        scrollTop: $($.attr(this, 'href')).offset().top

      }, 500);

      return false;
    });

     $('#maximage').maximage({
          cycleOptions: {
            fx: 'fade',
            speed: 1000, // Has to match the speed for CSS transitions in jQuery.maximage.css (lines 30 - 33)
            timeout: 0
          }
        });

  });


  </script>


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
