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
  <title>Team - Marka Printing</title>

  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="/stylesheets/foundation.min.css">
  <link rel="stylesheet" type="text/css" href="/stylesheets/magnific-popup.css"> 
  <link rel="stylesheet" href="/stylesheets/app.css">
  <link rel="stylesheet" href="/stylesheets/movil.css">
  <link rel="stylesheet" href="/stylesheets/jquery.maximage.css?v=1.2" type="text/css" media="screen" charset="utf-8" />
  <link rel="stylesheet" href="stylesheets/lynup-extends.css">

  <!-- modernize browser.. -->
  <script src="/javascripts/modernizr.foundation.js"></script>

</head>
<body class="team">
  <div id="maximage">
    <img src="/images/background-team-1440x912.jpg">
  </div>
  <?php include('nav.inc') ?>

<div class="row">
  <div class="nine columns centered">
      <h1 class="markaHeading team">MEET THE TEAM</h1>
  </div>
</div>

<div class="row">
  <div class="ten columns centered text-center">

       <p class="team">
            Throughout the years Marka®  has become an enthusiastic team of professionals directed to provide our clients quality services and attention. Next you will find a button to know each member of the team and some of the details of what they do here and in their free time.
            </p>
      <a href="" class="button tijuana meettheteam">Get to know us.</a>
           

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
<script src="/javascripts/jquery.magnific-popup.min.js" type="text/javascript"></script>


<!-- codigo solo para esta pagina.. -->
<script type="text/javascript">
$(document).ready(function() {
  
// Define data for the popup
var data = [
    {
    staffname: "Juan Carlos Rodriguez",
    staffPost: 'Production Manager',
    staffPicture_img: '/images/staff/juancarlos.png',
    staffDescription: 'JCR is a work-hard, play-hard type of guy.  If you don’t find him at the plant, you will most likely find him on the soccer field. He started a soccer team at Marka that competes with other companies. ',
    staffEmail_href: '',
    staffEmail_href: ''
  },

  {
    staffname: "Lorena Aguilar", // Key "staffname" means that Magnific Popup will look for an element with class "mfp-staffname" in markup and will replace its inner HTML with the value.
    
    staffPost: 'Quality Manager', // Key "staffEmail_href" means that Magnific Popup will look for an element with class "mfp-staffEmail" and will change its "href" attribute. Instead of ending "href" you may put any other attribute.
    
    staffPicture_img: '/images/staff/lorena.png', // Prefix "_img" is special. With it Magnific Popup finds an  element "staffPicture" and replaces it completely with image tag.
    
    staffDescription: 'Lorena leads our quality culture, not only making sure we comply with ISO and other requirements, but also getting everyone enthusiastic quality methodologies. She also loves the outdoors, and drives a lifted Jeep Wrangles Sahara with mud tires.',
    staffEmail: '',
    staffEmail_href: ''
  },
  
  {
    staffname: 'Laura Kim',
    staffPost: 'Controller',
    staffPicture_img: '/images/staff/laura.png',
    staffDescription: ' Laura, comes from a rich heritage of Koreans that immigrated to Mexico.  Laura ensures we make the correct financial decisions, and also is as precise in the bowling rink.   She is a competitive bowler, and has multiple trophies of her glorious victories.',
    staffEmail: '',
    staffEmail_href: ''

  },
      {
    staffname: "Paola Alvarez Fitch",
    staffPost: 'Sr Account Manager',
    staffPicture_img: '/images/staff/paola.png',
    staffDescription: 'Paola is the epitome of caring.  She cares so much about customers and her fellow employees that she is always doing something extra for people.   At her University, she convinced Rigoberta Menchu , the Nobel Prize winner to go to her University to give a talk about human rights, being the first Nobel  laureate to visit her state (Sinaloa).',
    staffEmail: '',
    staffEmail_href: ''
  },
      {
    staffname: "Sergio Camacho",
    staffPost: 'Pre Press Manager',
    staffPicture_img: '/images/staff/sergio.png',
    staffDescription: 'Sergio runs our pre-press department.  He is a remarkable pre-press tech, and also a sort of a true Jack of All Trades.  He goes to night school, where he studies philosophy.  He is a professional carpenter.  Knows how to edit videos.  Learned perfect English just by watching English TV as a kid.   He is like the guy from the XX commercial,  “tha most inte-restin man in the world”',
    staffEmail: '',
    staffEmail_href: ''
  },
    {
    staffname: "Ernesto Vazquez Peñuñuri",
    staffPost: 'Sales Director',
    staffPicture_img: '/images/staff/ernesto.png',
    staffDescription: 'Ernesto loves working with customers.  50% of his time is visiting clients, making sure their expectations are met.  He also is airplane pilot, and loves flying.  We have this goal for 2015 to have our own “Marka Express” plane and fly customers to places.',
    staffEmail: '',
    staffEmail_href: ''
  },
 {
    staffname: "Thomas Long",
    staffPost: 'USA Finances',
    staffPicture_img: '/images/staff/thomas.png',
    staffDescription: 'Tom runs all of our USA finances.  Besides making sure we run a tight ship when it comes to our finances, he also ran a tight ship when in the USA Navy, where he served for 6 years, mostly under water, in nuclear submarines. ',
    staffEmail: '',
    staffEmail_href: ''
  },
   {
    staffname: "Angel Robles",
    staffPost: 'Master planner and buyer',
    staffPicture_img: '/images/staff/angel.png',
    staffDescription: 'Ink runs through Angel’s veins.  He is a true printer, the rare kind that just love with the industry.  You won’t get a lot of talk from Angel, but mention a printing press or a die cutter, and you wont get him to stop!',
    staffEmail: '',
    staffEmail_href: ''
  },
   {
    staffname: "Alex Galicia",
    staffPost: 'Director - Corrugated Plant',
    staffPicture_img: '/images/staff/alex.png',
    staffDescription: 'Alex is a genius when it comes to corrugated.  He can comprehend the most complicated structures in seconds, and has this enormous drive to exceed customer expectations.  It is not uncommon for him to come in to the plant at 4am to schedule a rush job that will make a difference for the customer.  He is also a very cool guy, and frequently rides his Harley like motorcycle to work.',
    staffEmail: '',
    staffEmail_href: ''
  },
     {
    staffname: "Brenda Grijalva",
    staffPost: 'Human Resources',
    staffPicture_img: '/images/staff/brenda.png',
    staffDescription: 'Brenda not only our HR department, but she also helps with our charity events, and environmental goals of reducing our footprint.  She has a beautiful daughter, and another on the way!',
    staffEmail: '',
    staffEmail_href: ''
  },
     {
    staffname: "Alma López",
    staffPost: 'Import/Export',
    staffPicture_img: '/images/staff/alma.png',
    staffDescription: 'Alma, handles all our inter-maquila paperwork as well as export paperwork for our clients in USA.',
    staffEmail: '',
    staffEmail_href: ''
  },
       {
    staffname: "Mary Camacho",
    staffPost: 'Accountant',
    staffPicture_img: '/images/staff/marycamacho.png',
    staffDescription: 'Mary is involved in both USA and Mexico finances.  She is the newest member to the Marka family.',
    staffEmail: '',
    staffEmail_href: ''
  }
];


// initalize popup
$('.meettheteam').magnificPopup({ 
  key: 'my-popup',
  closeMarkup: '<button title="%title%" class="mfp-close">&times;</button>',
  items: data,
  type: 'inline',
  inline: {
    // Define markup. Class names should match key names.
    markup: '<div class="staff-card"><div class="mfp-close"></div>'+
            '<img class="mfp-staffPicture">'+
            '<div class="staff-data">'+
            '<span class="mfp-staffname"></span>'+
            '<span class="mfp-staffPost"></span>'+
            '<p class="mfp-staffDescription"></p>'+
            '</div></div>'
  },
  gallery: {
    enabled: true
  },
  callbacks: {
    markupParse: function(template, values, item) {
      // optionally apply your own logic - modify "template" element based on data in "values"
      // console.log('Parsing:', template, values, item);
    }
  }
});



}); //doc ready

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
