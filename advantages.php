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
  <title>Advantages - Marka Printing</title>

  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="stylesheets/foundation.min.css">
  <link rel="stylesheet" href="stylesheets/app.css">
  <link rel="stylesheet" href="stylesheets/movil.css">
  <link rel="stylesheet" href="stylesheets/jquery.maximage.css?v=1.2" type="text/css" media="screen" charset="utf-8" />

  <!-- modernize browser.. -->
  <script src="javascripts/modernizr.foundation.js"></script>

</head>
<body class="advantages">
  <div id="maximage">
    <img src="images/background-advantages-1940x1229.jpg">
  </div>
  <?php include('nav.inc') ?>

  <div class="row">
    <div class="fourteen columns centered text-center">

      <h1 class="markaHeading advantages">WHY CHOOSE MARKA?</h1>

    </div>
    <div class="row">
      <div class="fourteen columns centered">
        <div class="row">

          <!-- reason --> 
          <div class="four columns">
            <div class="reason">
              <span class="building-reason-icon icon"><!-- icon goes here --></span>
              <hr class="icon-reason-separator">
              <a href="#" class="reason hasTooltip" data-reason="building">Building friendships with our clients</a>
              <a href="#" class="reason-more-link hasTooltip" data-reason="building">read more</a>

            </div>

          </div>

          <!-- reason  -->  
          <div class="four columns">
            <div class="reason">
              <span class="lowering-reason-icon icon"><!-- icon goes here --></span>
              <hr class="icon-reason-separator">
              <a href="#" class="reason hasTooltip" data-reason="lowering">Lowering your costs</a>
              <a href="#" class="reason-more-link hasTooltip" data-reason="lowering">read more</a>

            </div>

          </div>

          <!-- reason  --> 
          <div class="four columns">
            <div class="reason">
              <span class="saving-reason-icon icon"><!-- icon goes here --></span>
              <hr class="icon-reason-separator">
              <a href="#" class="reason hasTooltip" data-reason="saving">Saving you time</a>
              <a href="#" class="reason-more-link hasTooltip" data-reason="saving">read more</a>
            </div>

          </div>

          <!-- reason  --> 
          <div class="four columns">
            <div class="reason">
              <span class="reducing-reason-icon icon"><!-- icon goes here --></span>
              <hr class="icon-reason-separator">
              <a href="#" class="reason hasTooltip" data-reason="reducing">Reducing your inventories</a>
              <a href="#" class="reason-more-link hasTooltip" data-reason="reducing">read more</a>
            </div>

          </div>

        </div>

        <span id="reasonindicator"><!-- triangle --></span>
        <div>
          <div class="hidden building readmorecopy"> 
            <p>More than just building a business association, we believe in developing strong, interpersonal bonds with our clients.  It’s a very powerful dynamic that notably contributes to your business goals.</p>


            </div> 

            <div class="hidden lowering readmorecopy">
              <p>This is important to us.  In order for us to develop long term, we have to present you with with the most price competitive solution.   Our clients usually save from 20% to 50% on costs.   We are saving our clients, combined, many millions of dollars each year, compared to their previous print purchasing model. </p>

            </div>

            <div class="hidden saving readmorecopy">
              <p>
                A buyers time is very valuable. Time is a resource that can never be replenished. It is intensive in costs, not only directly, but can be indirectly damaging when wasted, when a future opportunity is lost or another cost saving project can’t be started because we lack time. Our job is to save you time, by keeping you up to date on the status of your projects. In the event of a problem, we value your time, and react in a way that is fast and considerate to your requirement.
              </p>

            </div>
            <div class="hidden reducing readmorecopy">
              <p>
                Keeping inventories at its optimal level, can be an eternal goal, and such a critical and at times stressful element to keeping inventories at its sweet spot.  But when a problem arises, and you are in a situation with too much inventory or the more problematic extreme were your production stops because lack of a material, we are there for you. Our goal is to help you keep this balancing challenge at its best, by working with you in understanding your needs. We offer programs such as Vendor Managed Inventory (VMI), and Just In Time delivery (JIT).
              </p>

            </div>    

          </div>
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
    <script src="javascripts/sitefades.js" type="text/javascript"></script>



    <!--  -->
    <script type="text/javascript">
    $(document).ready(function(){   

// hacemos que el link icon se 'active' y mostramos la info correspondiente
$('.reason-more-link').click(function(){

  $('span.icon').removeClass('active-reason-icon');
  var foo = $(this).attr('data-reason')+'-reason-icon';
  $('span.'+foo).toggleClass('active-reason-icon');
  return false;

});

// truco de la info de cada razon      
$('.hasTooltip').each(function() { 

  $(this).click(function(){

    $('#reasonindicator').animate({opacity: 1});

    $('div.readmorecopy').each(function(){
      $(this).addClass('hidden')
    });

    var dat = $(this).attr('data-reason');
    $('div.'+dat).toggleClass('hidden');

// animate el reason indicator segun la selesccion del usuario.
switch (dat) {    
  case 'building':
  $('#reasonindicator').animate({left: '86px'})
  break;
  case 'lowering':
  $('#reasonindicator').animate({left: '298px'})
  break;
  case 'saving':
  $('#reasonindicator').animate({left: '507px'})
  break;
  case 'reducing':
  $('#reasonindicator').animate({left: '716px'})
  break;
} 
});

});
$('.showthisreason').click(); // mostramos el globo que queremos por default.

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
