<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-language" content="en" />
<meta name="description" content="seriousdatings.com community" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>seriousdatings.com - Find dates here!</title>
<head>
<!-- Basic Page Needs
 ================================================== -->
<meta charset="utf-8">
<!-- Mobile Specific
 ================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- CSS================================================== -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800,300italic,400italic,600italic,700italic,800italic' rel='stylesheet' type='text/css'>
{{ HTML::style('css/style.css') }}
{{ HTML::style('css/style_2.css') }}
{{ HTML::style('css/tooltip_skin.css') }}

<!-- Java Script ================================================== -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
{{ HTML::script('js/custom.js') }}
{{ HTML::script('js/ender.min.js') }}
{{ HTML::script('js/selectnav.js') }}
{{ HTML::script('js/effects.js') }}
{{ HTML::script('js/jquery.sky.carousel-1.0.2.min.js') }}
<script type="text/javascript">
	$(function() {
		$('.sky-carousel').carousel({
			itemWidth: 240,
			itemHeight: 240,
			distance: 10,
			selectedItemDistance: 70,
			selectedItemZoomFactor: 1,
			unselectedItemZoomFactor: 0.5,
			unselectedItemAlpha: 0.9,
			motionStartDistance: 200,
			topMargin: 140,
			gradientStartPoint: 0.35,
			gradientOverlayColor: "#ebebeb",
			gradientOverlaySize: 190,
			selectByClick: false,
			startIndex: 0,
			autoSlideshow: true,
			loop: true
		});
	});
</script>
<style type="text/css">
	@media only screen and (min-width: 960px) {#portfolio-wrapper img {min-height: 147px;}} 
	@media only screen and (min-width: 768px) and (max-width: 959px) {#portfolio-wrapper img {min-height: 115px;}}
</style>
</head>
<header>
  <div class="top">
    <div class="container">
      <div class="left">
        <div class="language">
          <select id="language">
            <option>English</option>
            <option>Hindi</option>
          </select>
        </div>
        <div class="social-iconbg">
          <ul>
            <li><a href="#"><i class="icon-sprite facebook-icon"></i></a></li>
            <li><a href="#"><i class="icon-sprite twiter-icon"></i></a></li>
            <li><a href="#"><i class="icon-sprite googleplus-icon"></i></a></li>
            <li><a href="#"><i class="icon-sprite linkedin-icon"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="right">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id congue ipsum</div>
    </div>
  </div>
  <!--/ top -->
  
  <div class="header-botom">
    <div class="container">
      <div class="logo-bg"><a href="{{ url() }}" title="Seriousdatings">{{ HTML::image('images/logo.jpg') }}</a></div>
	</div>
</header>
<!-- /header -->
<div class="middle inner-middle" id="step1">
	<div class="inner-header aboutyour-header">
    	<div class="container">
        	<h1><i class="icon-sprite signup-icon"></i>Compatability</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
        </div> 
    </div>
      
     <div class="inner-contendbg">

        	   <div class="sky-carousel">
					<div class="sky-carousel-wrapper">
						<ul class="sky-carousel-container">
						 @foreach($data as $d)
						<li>
							<a href="{{ url() }}/users/{{ $d['username'] }}/verify" target="_blank">
							<img src="{{ url() }}/images/users/{{ $d['username'] }}/{{ $d['image'] }}" alt="" />
							</a>
							<div class="sc-content">
								<h2>{{ $d['firstName'] }} {{ $d['lastName'] }}</h2>
								<p><a href="{{ url() }}/users/{{ $d['username'] }}/verify">{{ $d['username'] }}</a><br/>Compatability: {{ $d['percentage'] }}%</p>
							</div>
							</li>
						@endforeach
						</ul>
					</div>
  				</div>
  			</div>
 </div><!-- /middle -->
 
 <footer>
  <div class="container footer-top">
    <div class="left">
      <h2>Serious Dating About</h2>
      <p>Lorem ipsum dolor sit amet, consectetur  amet,Lorem ipsum dolor sit amet, consectetur  amet,</p>
    </div>
    <div class="center">
      <h2>Contact me!</h2>
      <div class="row">
        <div class="left">
          <input type="text"  placeholder="Email Id">
          <a href="#" class="email"><i class="icon-sprite email-icon"></i></a> </div>
        <div class="right">
          <ul>
            <li><i class="icon-sprite icon-tel"></i>0123 254 589</li>
            <li><i class="icon-sprite icon-address"></i>Lorem ipsum dolor sit amet, consectetur  amet.</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="right">
      <h2>Socialize with Us</h2>
      <ul>
        <li><a href="#"><i class="icon-sprite facebook-icon"></i></a></li>
        <li><a href="#"><i class="icon-sprite twiter-icon"></i></a></li>
        <li><a href="#"><i class="icon-sprite googleplus-icon"></i></a></li>
        <li><a href="#"><i class="icon-sprite flicker-icon"></i></a></li>
        <li><a href="#"><i class="icon-sprite rss-icon"></i></a></li>
        <li><a href="#"><i class="icon-sprite linkedin-icon"></i></a></li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <ul>
        <li><a href="#">home</a></li>
        <li><a href="#">about</a></li>
        <li><a href="#">Locations</a></li>
        <li><a href="#">News</a></li>
        <li><a href="#">Gallery </a></li>
        <li><a href="#">contact us</a></li>
      </ul>
      <div class="copyright">Copyright &copy; 2015, Serious Dating. All Rights Reserved.</div>
    </div>
  </div>
</footer>