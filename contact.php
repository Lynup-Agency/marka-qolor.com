<!DOCTYPE html>
<!-- 
    16 columns grid - foundation v3 
-->
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />
  <meta name="description" content="World class printers located in Tijuana, México">
  <meta name="keywords" content="Marka, printing, mexico, tijuana, quality, offset, cmyk">
  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />
  <title>Contact Us - Marka Printing</title>

  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="stylesheets/foundation.min.css">
  <link rel="stylesheet" href="stylesheets/app.css">
  <link rel="stylesheet" href="stylesheets/movil.css">
  <link rel="stylesheet" href="stylesheets/jquery.maximage.css?v=1.2" type="text/css" media="screen" charset="utf-8" />

  <style type="text/css">
      html, body {   /* para no romper el plugin de sticky footer*/
        height: auto;
      }
  </style> 


  <!-- modernize browser.. -->
  <script src="javascripts/modernizr.foundation.js"></script>

</head>
<body class="contact">
  <div id="maximage">
    <img src="images/background-contact-1440x912.jpg">
  </div>
  <?php include('nav.inc') ?>

  <div class="row">
        <div class="seven columns offset-by-one contact">
            <h1 class="markaHeading contact">Contact Us</h1>

            <h2>We are open for business.</h2>
            <p>Feel free to drop us a line or send your brief.</p>

            <ul>
               <li><a href="mailto:contact@markaprinting.com" class="contact-icon mail">contact@marka-mexico.com</a></li>
               <li><a href="tel:52664000-0000" class="contact-icon phone">+52(664)622.2010</a></li>
               <li class="contact-icon location">Tijuana, Baja California</li> 
            </ul>

            <h2>Social networks</h2>
            <p>Follow us to be always up to date.</p>

            <ul>
                <li><a href="#" class="contact-icon facebook">Facebook</a></li>
                <li><a href="#" class="contact-icon linkedin">Linkedin</a></li>
                <li><a href="#" class="contact-icon googleplus">Google+</a></li>
                <li><a href="#" class="contact-icon twitter">Twitter</a></li>
            </ul> 

        </div>

        <div class="eight columns">
             <div class="row">
                <div class="sixteen columns">
                     
                                <form id="markaform"> 
                                  <div id="formContainer">
                                  <input type="text" name="name" placeholder="Your name" class="fields" id="name">
                                  <input type="text" name="email" placeholder="Your email" class="fields" id="email">
                                  <input type="text" name="company" placeholder="Company" class="fields" id="company">
                                  <textarea name="message" placeholder="Your message" class="fields" id="message" rows="8"></textarea>
                                  </div>
                                  <input type="submit" value="Send" class="sendButton">
                                </form>
                     
                </div>
             </div>
        </div>
  </div>

  <footer>
      <div class="row">
        <div class="three columns offset-by-one brok">
           Design: octavioflores.com  
        </div>
        <div class="three columns brok">
          All Rights Reserved.
        </div>
        <div class="three columns brok">
         &copy; <?php echo date(Y)?> Marka Printing.
        </div>
        <div class="six columns socialBtns">
         <a href="https://twitter.com/share" class="twitter-share-button" data-text="Contact Marka Printing :)" >Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
<!-- FACEBOOK share -->

<a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fmarka-mexico.com" target="_blank" class="fbShare hide-text">
  Share on Facebook
</a>



<!-- Place this tag where you want the +1 button to render. -->
<div class="g-plusone" data-href="http://marka-mexico.com"></div>

<!-- Place this tag after the last +1 button tag. -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>

        </div>
      </div>
     
  </footer>
    

    <!-- THIS IS THE END,. -->

    <!-- Included JS Files (Compressed) -->
    <script src="javascripts/foundation.min.js"></script>

    <!-- Initialize JS Plugins -->
    <script src="javascripts/app.js"></script>
    <script src="javascripts/jquery.stickyfooter.js" type="text/javascript"></script>
    <script src="javascripts/jquery.cycle.all.js" type="text/javascript" charset="utf-8"></script>
    <script src="javascripts/jquery.maximage.js" type="text/javascript" charset="utf-8"></script>
    <script src="javascripts/maximgmarka.js" type="text/javascript"></script>
    <script src="javascripts/jquery.validate.min.js" type="text/javascript"></script>
    <script src="javascripts/contact.js" type="text/javascript"></script>

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
