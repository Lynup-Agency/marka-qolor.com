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
  <title>The products we make - Marka Printing</title>

  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="stylesheets/foundation.min.css">
  <link rel="stylesheet" href="stylesheets/app.css">
  <link rel="stylesheet" href="stylesheets/movil.css">
  <link rel="stylesheet" href="stylesheets/jquery.maximage.css?v=1.2" type="text/css" media="screen" charset="utf-8" />

  <!-- modernize browser.. -->
  <script src="javascripts/modernizr.foundation.js"></script>

</head>
<body class="products">
  <div id="maximage">
    <img src="images/background-products-1940x1229.jpg">
  </div>
  <?php include('nav.inc') ?>

  <div class="row">
    <div class="fifteen columns centered">
      <h1 class="products hide-text">PRODUCTS WE MAKE</h1>           
    </div>
    <div class="row">
      <div class="ten columns centered">
        <h2>We makes us different from most of our competitors, is that we manufacture a diverse range of packaging products, all in house.  This allows for faster turns, better service and lower pricing.</h2>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="four columns">
        <div class="productContainer">
          <img src="images/instruction-manuals.png">
        </div>
        <h3 class="productHeading">Instruction Manuals</h3>
         <ul>
             <li>Folder Manuals</li> 
             <li>Plastic Laminated Manuals</li>
             <li>Saddle Stitched Manuals</li>
             <li>Perfect Bound Manuals</li>
             <li>Pharmaceutical Folds</li>
             <li>1 to 6 color printing</li>
         </ul> 
      </div>

                <div class="four columns">
                  <div class="productContainer">
                    <img src="images/folding-cartons.png">
                  </div>
                  <h3 class="productHeading">Folding Cartons</h3>
                  <ul>
                    <li>Straight Line</li>
                    <li>Auto Bottom</li>
                    <li>UV Coating</li>
                    <li>Matte and Gloss Laminating</li>
                  </ul>

                </div>

      <div class="four columns">
        <div class="productContainer">
          <img src="images/corrugated-packaging.png">
        </div>
        <h3 class="productHeading">Corrugated Packaging</h3>
        <ul>
            <li>2 Color High Quality Flexo</li>      
            <li>Full Litho and Spot Label</li>
            <li>Rotary and Platen Die Cutting</li>
            <li>POP Displays</li>
            <li>In House Flat and Rotary Die Making</li>
        </ul>



      </div>


      <div class="four columns end">
        <div class="productContainer">
          <img src="images/commercial-printing.png">
        </div>
        <h3 class="productHeading">Commercial Printing</h3>
        <ul>
           <li>Magazines</li>
           <li>Brochures</li>
           <li>Inserts</li>
           <li>Flyers (Med to High Volume Only)</li>
        </ul>
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


  <!--  -->
<script type="text/javascript">

$(document).ready(function(){   
var foo = $('.three.columns p');
$(foo).css({opacity:0});
$(foo).animate({opacity:1},1200)


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
