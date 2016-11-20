<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/templatemo-style.css">
<!--
Puzzle Template
http://www.templatemo.com/tm-477-puzzle
-->
    <title>Rails Girls Novi Sad</title>
</head>

<body>
    <div class="fixed-header">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>
                <a class="navbar-brand" href="#">Rails Girls Novi Sad</a>
            </div>
            <nav class="main-menu">
                <ul>
                    <li><a href="#home">Šta je RGNS?</a></li>
                    <li><a href="#services">Događaji</a></li>
                    <li><a href="#clients">FAQs</a></li>
                    <li><a class="external" href="https://railsgirls.com/novisad" target="_blank">Spoljni</a></li>
                    <li><a href="#externals">Kontakt</a></li>
                </ul>
            </nav>
        </div>
    </div>
    
    <div class="container">
        <section class="col-md-12 content" id="home">
           <div class="col-lg-6 col-md-6 content-item">
               <img src="images/1.jpg" alt="Image" class="tm-image">
           </div>
           <div class="col-lg-6 col-md-6 content-item content-item-1 background">
               <h2 class="section-title text-center dark-red-text">Šta je Rails Girls Novi Sad?</h2>
               <p>Rails Girls Novi Sad je deo globalne inicijative koja ima za cilj da približi IT svet ženama i osnaži njihovo interesovanje za aktivnu izgradnju web-a. <i>Ruby on Rails	</i> je platforma uz pomoć koje se web aplikacije mogu brzo razvijati, a zasnovana je na programskom jeziku Ruby.<p>
				</p>Tokom dvodnevne radionice imaćete priliku da se upoznate sa prvim koracima pravljenja web aplikacija. Nije neophodno imati predznanje, potreban je samo laptop, interesovanje i želja da se malo slobodnog vremena odvoji na neformalno učenje početnog nivoa programiranja. I sve to u prijateljskom okruženju u malim grupama, potpuno besplatno i u pozitivnoj volonterskoj atmosferi.<p/>
           </div>
       </section>

       <section class="col-md-12 content padding" id="services">
        <div class="col-lg-6 col-md-6 col-md-push-6 content-item">
           <img src="images/2.jpg" alt="Image" class="tm-image">
       </div>
       <div class="col-lg-6 col-md-6 col-md-pull-6 content-item background flexbox">
           <h2 class="section-title">Prethodni RGNS događaji</h2>
           <p class="section-text">U Novom Sadu su do sada uspešno održane četiri Rails Girls radionice:</p>
           <ul class="dark-red-text">
               <li><a href="./novisad-01-2015.html">24. i 25. januar 2015.</a></li>
               <li><a href="./novisad-06-2015.html">13. i 14. jun 2015.</a></li>
               <li><a href="./novisad-12-2015.html">5. i 6. decembar 2015.</a></li>
               <li><a href="./novisad-06-2016.html">25. i 26. jun 2016.</a></li>
           </ul>
           <p>Na sledećem <a href="https://www.youtube.com/watch?v=bGOEs_IRrFs">linku</a> možete pogledati kako je izgledala jedna od prethodnih Rails Girls NS radionica.</p>
       </div>

   </section>


   <section class="col-md-12 content" id="clients">
       <div class="col-lg-6 col-md-6 content-item">
           <img src="images/3.jpg" alt="Image" class="tm-image">
       </div>
       <div class="col-lg-6 col-md-6 content-item background flexbox">
	       <h2 class="section-title">Često postavljana pitanja</h2>
		<p>
			<strong>Koliko košta učešće na radionici?</strong>
			<br/>
			Učešće na radionici je potpuno besplatno!
		</p>
		<p>
			<strong>Ko sve može da se prijavi?</strong>
			<br/>
			Devojke i žene svih uzrasta i zanimanja. Potrebno je samo imati laptop, koji ćete poneti, i osnovno znanje o korišćenju računara.
		</p>   
		<p>
			<strong>Znam da programiram, kako mogu da pomognem?</strong>
			<br/>
			Ukoliko imate želju da se pridružite našem mentorskom timu, <a href="mailto:railsgirlsnovisad@gmail.com">pišite nam</a>.
		</p>             
       </div>
   </section>

<footer class="col-md-12 content" id="externals">

<div class="col-lg-6 col-md-6 background last about-text-container">
   <h2 class="section-title">Kontakt</h2>
   <p class="about-text">Kontaktirajte nas putem e-mail-a <a href="mailto:railsgirlsnovisad@gmail.com">railsgirlsnovisad@gmail.com</a>, <a href="https://twitter.com/RailsGirlsNS">Twitter</a>-a ili <a href="https://www.facebook.com/RailsGirlsNoviSad">Facebook</a> stranice.</p>       
</div>
 <div class="col-lg-6 col-md-6 last">
   <img src="images/5.png" alt="Image" class="tm-image">
</div>	
</footer>

</div>

<div class="text-center footer">
	<div class="container">
		Copyright @ 2016 Rails Girls Novi Sad
    </div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.singlePageNav.min.js"></script>

<script>

// Check scroll position and add/remove background to navbar
function checkScrollPosition() {
    if($(window).scrollTop() > 50) {
      $(".fixed-header").addClass("scroll");
  } else {        
      $(".fixed-header").removeClass("scroll");
  }
}

$(document).ready(function () {   
    // Single page nav
    $('.fixed-header').singlePageNav({
        offset: 59,
        filter: ':not(.external)',
        updateHash: true        
    });

    checkScrollPosition();

    // nav bar
    $('.navbar-toggle').click(function(){
        $('.main-menu').toggleClass('show');
    });

    $('.main-menu a').click(function(){
        $('.main-menu').removeClass('show');
    });
});

$(window).on("scroll", function() {
    checkScrollPosition();    
});
</script>
</body>
</html>
