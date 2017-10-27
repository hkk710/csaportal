<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">

<title>CSA PORTAL</title>
<link rel="icon" href="favicon.png" type="image/png">
<link rel="shortcut icon" href="favicon.ico" type="img/x-icon">

<!--<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Spirax" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Spirax|Ubuntu" rel="stylesheet">-->
 <link rel="stylesheet" href="fonts/Gtek Technology free promo.ttf">
<!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>
-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">

<!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->

<script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/wow.js"></script>
<script type="text/javascript" src="js/classie.js"></script>

<style>
h1#main{
    font-family: moonhouse;
}
@font-face {
    font-family: 'moonhouse';
    src: url('../fonts/moonhouse.ttf');
}
</style>
</head>
<body>
    @if(Session::has('success'))
        <div class="card-panel teal lighten-2" style="background-color:#f21263 ;color:white;width:100%;margin:0px;top:0px;font-size:25px;text-align: center">
            {{ Session::get('success') }}
        </div>
    @endif
<div style="overflow:hidden;">
<header class="header" id="header"><!--header-start-->
	<div class="container">
    	<figure class="logo animated fadeInDown delay-07s">
        	<a href="#"><img src="img/new.gif" alt=""></a>
        </figure>
        <h1 id="main" class="animated fadeInDown delay-07s" style="font-family:moonhouse">WELCOME TO CSA PORTAL</h1>
        <ul class="we-create animated fadeInUp delay-1s">
        	<li style="color:#7cc576;">The digital web portal of CSA department of Amrita University, Amritapuri Campus.</li>
        </ul>
            <a class="link animated fadeInUp delay-1s" href="/login">Enter Here</a>
    </div>
</div>
</header><!--header-end-->


<nav class="main-nav-outer" id="test" style="background-color:#000;color:#fff;"><!--main-nav-start-->
	<div class="container" style="background-color:#000;color:#fff;max-height:150px;">
        <ul class="main-nav" style="background-color:#000;color:#fff;max-height:100px;">
            <li><a href="#know" style="color:#7cc576;">Know our department</a></li>
            <li><a href="#career" style="color:#7cc576;">Carrer Paths</a></li>
            <li><a href="#hub" style="color:#7cc576;">Knowledge Hub</a></li>
            <li><a href="/login" style="color:#7cc576;">Student Corner</a></li>
            <li>
            <figure class="logo animated fadeInDown delay-07s" style="background-color:#000;max-height:67px;border-radius:20px;">
                <a href="#"><img src="img/new.gif" style="max-height:50px;" alt=""></a>
            </figure></li>
            <!--<li><a href="#contact">Contact Us</a></li>-->
        </ul>
        <a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
    </div>
</nav><!--main-nav-end-->



<section class="main-section" id="know" style="background-color:#ffe6cc;"><!--main-section-start-->
	<div class="container">
        <h2>KNOW OUR DEPARTMENT</h2>
    	<h6 style="font-family: 'Ubuntu', sans-serif; font-size:20px">Know more about CSA Department which comprises of BCA and MCA</h6>
        <div class="row">
        	<div class="col-lg-4 col-sm-6 wow fadeInLeft delay-05s">
            	<div class="service-list">
                	<div class="service-list-col1">
                    	<i class="fa-paw"></i>
                    </div>
                	<div class="service-list-col2">
                        <h3>Courses Offered</h3>
                        <p>CSA Department offers 3 years Bachleor Of Computer Applications and 2 years Master Of Computer Applications.</p>
                    </div>
                </div>
                <div class="service-list">
                	<div class="service-list-col1">
                    	<i class="fa-gear"></i>
                    </div>
                	<div class="service-list-col2">
                        <h3>Objectives</h3>
                        <p>To make an impact through Value Based Technical Education, Technology Innovation, Research and Service to Society.</p>
                    </div>
                </div>
                <div class="service-list">
                	<div class="service-list-col1">
                    	<i class="fa-apple"></i>
                    </div>
                	<div class="service-list-col2">
                        <h3>Excellent Placement</h3>
                        <p>On successful completion of couse eligible students will get excellent placement opportunites as well as for higher studies.</p>
                    </div>
                </div>
                <div class="service-list">
                	<div class="service-list-col1">
                    	<i class="fa-medkit"></i>
                    </div>
                	<div class="service-list-col2">
                        <h3>Certification Courses</h3>
                        <p>CSA department also offers several certificationcourses such as CISCO CCNA etc.</p>
                    </div>
                </div>
            </div>
            <figure class="col-lg-8 col-sm-6  text-right  rocket animatedimg bounce">
                <img  src="{{asset('img/motarboard.png')}}" alt="">
            </figure>

        </div>
	</div>
</section><!--main-section-end-->


<section class="main-section alabaster" id="career"><!--main-section alabaster-start-->
	<div class="container">
    	<div class="row">
			<figure class="col-lg-5 col-sm-4 wow fadeInLeft">
            	<img  src="img/carrer.png" alt="">
            </figure>
        	<div class="col-lg-7 col-sm-8 featured-work">
            	<h2>Career Paths</h2>
            	<P class="padding-b">Whether its BCA or MCA , each one offers a high quality and high rewarding carrer ahead.</P>
            	<div class="featured-box">
              <div class="featured-box-col1 wow fadeInRight delay-02s">
                    	<i class="fa-magic"></i>
                    </div>
                	<div class="featured-box-col2 wow fadeInRight delay-02s">
                        <h3>Excellent Placements</h3>
                        <p>Be placed as a tester/developer in a good reputed company. It depends on the final projet that youu are doing </p>
                    </div>
                </div>
                <div class="featured-box">
                	<div class="featured-box-col1 wow fadeInRight delay-04s">
                    	<i class="fa-gift"></i>
                    </div>
                	<div class="featured-box-col2 wow fadeInRight delay-04s">
                        <h3>Internship Abroad and MS</h3>
                        <p>Final Semester can be aboard and pursue MS after internship / project. </p>
                    </div>
                </div>
                <div class="featured-box">
                	<div class="featured-box-col1 wow fadeInRight delay-06s">
                    	<i class="fa-dashboard"></i>
                    </div>
                	<div class="featured-box-col2 wow fadeInRight delay-06s">
                        <h3>Higher Studies in MCA or MBA</h3>
                        <p>Join MCA lateral entry scheme directly to second year.
                          <br>

                           Join MBA Systems / Marketing. IT exposure is good </p>
                    </div>
                    <div class="featured-box-col1 wow fadeInRight delay-06s">
                      	<i class="fa-dashboard"></i>
                      </div>
                      <br>
                  	<div class="featured-box-col2 wow fadeInRight delay-06s">
                      <h3>MSc CS/IT</h3>
                      <p>Join M.Sc. / IT and get job in teaching / research projects</p>
                    </div>
                </div>
                <a class="Learn-More" href="#">Learn More</a>
            </div>
        </div>
	</div>
</section><!--main-section alabaster-end-->



<section class="main-section alabaster" id="hub"><!--main-section alabaster-start-->
	<div class="container">
    	<div class="row">
			<figure class="col-lg-5 col-sm-4 wow fadeInLeft">
            	<img  src="img/hh.jpg" alt="">
            </figure>
        	<div class="col-lg-7 col-sm-8 featured-work">
            	<h2>KNOWLEDGE HUB</h2>
            	<P class="padding-b">Stay Up to date on the current trends in history.</P>
            	<div class="featured-box">
              <div class="featured-box-col1 wow fadeInRight delay-02s">
                    	<i class="fa-magic"></i>
                    </div>
                	<div class="featured-box-col2 wow fadeInRight delay-02s">
                        <h3>Blog Updates</h3>
                        <p>An always updated blog which covers various informations from the technlogoical world. </p>
                    </div>
                </div>
                <div class="featured-box">
                	<div class="featured-box-col1 wow fadeInRight delay-04s">
                    	<i class="fa-gift"></i>
                    </div>
                	<div class="featured-box-col2 wow fadeInRight delay-04s">
                        <h3>References</h3>
                        <p>A collection of Reference materials and Text books from various fields of technology </p>
                    </div>
                </div>
                <div class="featured-box">
                	<div class="featured-box-col1 wow fadeInRight delay-06s">
                    	<i class="fa-dashboard"></i>
                    </div>
                	<div class="featured-box-col2 wow fadeInRight delay-06s">
                        <h3>Events and Festivals</h3>
                        <p>A completely updated section which gives informations about the upcoming technical fests and competitions. </p>
                    </div>
                    <div class="featured-box-col1 wow fadeInRight delay-06s">
                      	<i class="fa-dashboard"></i>
                      </div>
                      <br>
                  	<div class="featured-box-col2 wow fadeInRight delay-06s">
                      <h3>Online Micro - Courses</h3>
                      <p>Information of several online courses offered by different universities and platforms that will help you to excel in your career.</p>
                    </div>
                </div>
                <a class="Learn-More" href="#">Learn More</a>
            </div>
        </div>
	</div>
</section><!--main-section alabaster-end-->



<section class="main-section paddind" id="Portfolio"><!--main-section-start-->
	<div class="container">
    	<h2>Gallery</h2>
    	<h6>“Success doesn’t come to you, you’ve got to go to it.” </h6>
      <div class="portfolioFilter">
        <ul class="Portfolio-nav wow fadeIn delay-02s">
        	<li><a href="#" data-filter="*" class="current" >All</a></li>
            <li><a href="#" data-filter=".academics" >Academics</a></li>
            <li><a href="#" data-filter=".webdesign" >Web design</a></li>
            <li><a href="#" data-filter=".sports" >Sports</a></li>
            <li><a href="#" data-filter=".cultural" >Cultural events</a></li>
        </ul>
       </div>

	</div>
    <div class="portfolioContainer wow fadeInUp delay-04s">
            	<div class=" Portfolio-box academics">
                	<a href="#"><img src="img/academics.jpg" alt=""></a>
                	<h3>Foto Album</h3>
                    <p></p>
                </div>
                <div class="Portfolio-box webdesign">
                	<a href="#"><img src="img/webdesign.jpg" alt=""></a>
                	<h3></h3>
                    <p></p>
                </div>
                <div class=" Portfolio-box sports">
                	<a href="#"><img src="img/sports.jpg" alt=""></a>
                	<h3>Uni Sans</h3>
                    <p>Branding</p>
                </div>
                <div class=" Portfolio-box cultural" >
                	<a href="#"><img src="img/cul.png" alt=""></a>
                	<h3>Vinyl Record</h3>
                    <p>Photography</p>
                </div>
                <div class=" Portfolio-box academics">
                	<a href="#"><img src="img/academics.jpg" alt=""></a>
                	<h3>Hipster</h3>
                    <p>Branding</p>
                </div>
                <div class=" Portfolio-box webdesign">
                	<a href="#"><img src="img/webdesign.jpg" alt=""></a>
                	<h3>Windmills</h3>
                    <p>Photography</p>
                </div>
    </div>
</section><!--main-section-end-->
<!--
<section class="main-section client-part" id="client">
	<div class="container">
		<b class="quote-right wow fadeInDown delay-03"><i class="fa-quote-right"></i></b>
    	<div class="row">
        	<div class="col-lg-12">
            	<p class="client-part-haead wow fadeInDown delay-05">It was a pleasure to work with the guys at Knight Studio. They made sure
we were well fed and drunk all the time!</p>
            </div>
        </div>
    	<ul class="client wow fadeIn delay-05s">
        	<li><a href="#">
            	<img src="img/client-pic1.jpg" alt="">
                <h3>James Bond</h3>
                <span>License To Drink Inc.</span>
            </a></li>
        </ul>
    </div>
</section>


<div class="c-logo-part">
	<div class="container">
    	<ul>
        	<li><a href="#"><img src="img/c-liogo1.png" alt=""></a></li>
            <li><a href="#"><img src="img/c-liogo2.png" alt=""></a></li>
            <li><a href="#"><img src="img/c-liogo3.png" alt=""></a></li>
            <li><a href="#"><img src="img/c-liogo4.png" alt=""></a></li>
            <li><a href="#"><img src="img/c-liogo5.png" alt=""></a></li>
    	</ul>
	</div>
</div>
-->


<section class="business-talking"><!--business-talking-start-->
	<div class="container">
        <h2>CONTACT US</h2>
    </div>
</section><!--business-talking-end-->
<div class="container">
<section class="main-section contact" id="contact">

        <div class="row">
            <div class="col-lg-12 col-sm-10 wow fadeInUp delay-05s">
                <form class="form" method="POST" action="/send" data-parsley-validate>
                    {{ csrf_field() }}
                    <input class="input-text" name="name" required="required" maxlength="255" type="text" value="Your Name *" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
                    <input class="input-text" type="text" name="email" required="required" maxlength="255" value="Your E-mail *" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
                    <textarea class="input-text text-area" name="comment" required="required" minlength="5" cols="0" rows="0" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">Your Message *</textarea>
                    <input class="input-btn col-md-offset-10" type="submit" value="SEND MESSAGE">
                </form>
                </div>
                @if (count($errors) > 0)
                    <div class="w3-container w3-red" style="margin-top: 10px">
                        <h3>Sorry!</h3>
                        <p>
                @foreach ($errors->all() as $error)
                    {{ $error }}
                @endforeach
                </p>
                </div>
                @endif
        </div>
            <div class="col-lg-5 col-sm-5 wow fadeInLeft">
                <!-- Add Google Maps -->
                <div id="googleMap" class="w3-round-large w3-greyscale slideanim" style="width:100%;height:400px;"></div>
            </div>
        	<div class="col-lg-5 col-sm-5 wow fadeInLeft">
            	<div class="contact-info-box address clearfix">
                	<h3><i class=" icon-map-marker"></i>Address:</h3>
                	<span>Department of Computer Science and Applications<br>Amrita university,Amritapuri Campus.</span>
                </div>
                <div class="contact-info-box phone clearfix">
                	<h3><i class="fa-phone"></i>Phone:</h3>
                	<span>+919746469548</span>
                </div>
                <div class="contact-info-box email clearfix">
                	<h3><i class="fa-pencil"></i>email:</h3>
                	<span>csaportal@gmail.com</span>
                </div>
            	<div class="contact-info-box hours clearfix">
                	<h3><i class="fa-clock-o"></i>Hours:</h3>
                	<span><strong>Monday - Friday:</strong> 9am - 6pm<br><strong>Friday:</strong> People work on Fridays now?<br><strong>Saturday - Sunday:</strong> Best not to ask.</span>
                </div>
<!--
                <ul class="social-link">
                	<li class="twitter"><a href="#"><i class="fa-twitter"></i></a></li>
                    <li class="facebook"><a href="#"><i class="fa-facebook"></i></a></li>
                    <li class="pinterest"><a href="#"><i class="fa-pinterest"></i></a></li>
                    <li class="gplus"><a href="#"><i class="fa-google-plus"></i></a></li>
                    <li class="dribbble"><a href="#"><i class="fa-dribbble"></i></a></li>
                </ul>-->
            </div>
            <div class="col-md-offset-6">
            <form class="form" action="/subscriber" method="post" data-parsley-validate>
                {{ csrf_field() }}
                <h2 class="copyright" style="text-align:left; color:#000;"><br>Subscribe to Our Newsletter</h2>
                <input type="text" name="Email" placeholder="Email" id="control_EMAIL" label="Email" class="">
                <input type="submit" class="" style="font-size: 16px !important;line-height: 1;height: 42px;box-shadow: none !important;" value="Submit">
            </form>
        </div>
        </div>
</section>
</div>
<footer class="footer">
    <div class="container">
        <div class="footer-logo"><a href="#"><img src="img/new.gif" alt=""></a></div>
        <span class="copyright">Copyright © 2017 &nbsp;  by <a href="/webteam"> &nbsp; WebTeam</a>.</span>
    </div>
</footer>

<script type="text/javascript">
    $(document).ready(function(e) {
        $('#test').scrollToFixed();
        $('.res-nav_click').click(function(){
            $('.main-nav').slideToggle();
            return false

        });

    });
</script>

  <script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100
      }
    );
    wow.init();
    document.getElementById('').onclick = function() {
      var section = document.createElement('section');
      section.className = 'wow fadeInDown';
      this.parentNode.insertBefore(section, this);
    };
  </script>


<script type="text/javascript">
	$(window).load(function(){

		$('.main-nav li a').bind('click',function(event){
			var $anchor = $(this);

			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top - 102
			}, 1500,'easeInOutExpo');
			/*
			if you don't want to use the easing effects:
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1000);
			*/
			event.preventDefault();
		});
	})
</script>

<script type="text/javascript">

$(window).load(function(){


  var $container = $('.portfolioContainer'),
      $body = $('body'),
      colW = 375,
      columns = null;


  $container.isotope({
    // disable window resizing
    resizable: true,
    masonry: {
      columnWidth: colW
    }
  });

  $(window).smartresize(function(){
    // check if columns has changed
    var currentColumns = Math.floor( ( $body.width() -30 ) / colW );
    if ( currentColumns !== columns ) {
      // set new column count
      columns = currentColumns;
      // apply width to container manually, then trigger relayout
      $container.width( columns * colW )
        .isotope('reLayout');
    }

  }).smartresize(); // trigger resize to set container width
  $('.portfolioFilter a').click(function(){
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');

        var selector = $(this).attr('data-filter');
        $container.isotope({

            filter: selector,
         });
         return false;
    });

});

</script>

<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
<!-- Google Map Location -->
var myCenter = new google.maps.LatLng(9.093855, 76.491880);

function initialize() {
var mapProp = {
  center: myCenter,
  zoom: 12,
  scrollwheel: false,
  draggable: false,
  mapTypeId: google.maps.MapTypeId.ROADMAP
  };

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker = new google.maps.Marker({
  position: myCenter,
});

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
</body>
</html>
