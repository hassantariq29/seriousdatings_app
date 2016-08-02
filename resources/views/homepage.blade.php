<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-language" content="en" />
<meta name="description" content="seriousdatings.com community" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>seriousdatings.com - Find dates here!</title>
<style>
input[type=text]{
	display: block;
    height: 36px;
    left: 0;
    line-height: 36px;
    outline: none;
    overflow: hidden;
    text-indent: 10px;
    top: 0;
    width: 100%;
}
input[type=password]{
	display: block;
    height: 36px;
    left: 0;
    line-height: 36px;
    outline: none;
    overflow: hidden;
    text-indent: 10px;
    top: 0;
    width: 100%;
}
</style>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800,300italic,400italic,600italic,700italic,800italic' rel='stylesheet' type='text/css'>
{!! HTML::style('css/style.css') !!}
{!! HTML::style('css/custom-fileds.css') !!}
{!! HTML::style('css/jquery.bxslider.css') !!}
{!! HTML::style('css/jquery.horizontal.scroll.css') !!}

{!! HTML::script('js/jquery-1.7.2.min.js') !!}
{!! HTML::script('js/jquery.horizontal.scroll.js') !!}
{!! HTML::script('js/jquery.selectbox-0.2.js') !!}
{!! HTML::script('js/jquery.bxslider.js') !!}
<script type="text/javascript">
	$(function () {
	$("#language, #gender, #lookingfor, #age, #ageto,#zipcode, #weight, #relation, #relation-ship ").selectbox();
	$("#signup").click( function()
           {
             //alert('button clicked');
			 document.location.href="users/create";
			 return false;
           }
        );
	});
</script> 
</head>
<body>
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
</header>
@include('header_bottom')

<!-- /header -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5&appId=1544055289192431";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="middle inner-middle">
  <div class="inner-header travel-banner">
    <div class="container">
	</div>
</div>
</div>
<div class="middle">
  <div class="top-banner">
  	<div class="top-cloud"><img src="images/top-cloud.png" alt="cloud"></div>
    <ul class="bxslider">
    
    <li><img src="images/banner1.png" alt="slider-1"/>
        <div class="top-slider-description">
          <div class="slider-top-heading"><img src="images/joinus.png" alt="joinus"></div>
          <div class="attractive">Attractive & Successful Single</div>
          <div class="banner-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id congue ipsum. Quisque vehicula massa quis urna malesuada viverra.</div>
          <a href="#" class="slider-btn">Meeting Some New People</a> </div>
      </li>
      
      
      <li><img src="images/banner2.png" alt="slider-1"/>
        <div class="top-slider-description">
          <div class="slider-top-heading"><img src="images/joinus.png" alt="joinus"></div>
          <div class="attractive">Attractive & Successful Single</div>
          <div class="banner-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id congue ipsum. Quisque vehicula massa quis urna malesuada viverra. </div>
          <a href="#" class="slider-btn">Meeting Some New People</a> </div>
      </li>
      <li><img src="images/banner3.png" alt="slider-1"/>
        <div class="top-slider-description">
          <div class="slider-top-heading"><img src="images/joinus.png" alt="joinus"></div>
          <div class="attractive">Successful Single</div>
          <div class="banner-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id congue ipsum. Quisque vehicula massa quis urna malesuada viverra. </div>
          <a href="#" class="slider-btn">Meeting Some New People</a> </div>
      </li>
    </ul>
  </div>
  <div class="container search-welcomebg">
    <div class="add-searchprofile-bg">
      <div class="letadd-bg"><img src="images/search-add.jpg" alt="searchadd"></div>
      <div class="search-peoplebg">
        <div class="topheading"><i class="icon-sprite"></i>Search People</div>
      </div>
      <div class="searchpeople-form">
	  <form method="post" action ="search_result.php" >
        <div class="two-cols">
          <label>I am :</label>
          <select name="gender" id="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>
        </div>
        <div class="two-cols">
          <label>Looking For :</label>
          <select name="looking_for" id="lookingfor">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>
        </div>
        <div class="two-cols">
          <label>Age :</label>
          <select name="age_from" id="age">
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
          </select>
        </div>
        <div class="two-cols">
          <label>To :</label>
          <select name="age_to" id="ageto">
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
          </select>
        </div>
        <div class="two-cols">
          <label>Zipcode :</label>
          <input type="text" name="zipcode">
        </div>
        <div class="two-cols">
          <label>Miles :</label>
          <select name="miles" id="weight" >
            <option value="20">20</option>
            <option value="25">25</option>
            <option value="30">30</option>
            <option value="30">30</option>
          </select>
        </div>
        <div class="row">
          <input type="submit" value="Search" class="button">
		  </form>
        </div>
      </div>
    </div>
    <div class="welcomebox">
      <h2>Welcome to Seriuos Dating</h2>
      <div class="inner-deta">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id congue ipsum. Quisque vehicula massa quis urna malesuada viverra. Proin sit amet odio urna, eu volutpat ante. Fusce eget nisi pulvinar neque venenatis aliquam. </p>
      </div>
      <div class="row">
        <div class="signature-bg"> <a href="#" class="signature-box">
          <div class="heart"><i class="icon-sprite heart-icon"></i></div>
          <p>Lorem ipsum</p>
          </a> <a href="#" class="signature-box">
          <div class="heart"><i class="icon-sprite heart-icon"></i></div>
          <p>Lorem ipsum</p>
          </a> </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="full-width-add"><img src="images/full-add.jpg" alt="add"></div>
  </div>
  <div class="just-registered-bg">
    <div class="container">
    <div class="just-registered">
      <h2 class="registered-h">They just registered</h2>
      <div class="row">
        <ul class="images-shape bxslider3">


        	@foreach($just_registered as $registered)
				@if($registered->count == 1) 
				<li>
				@endif
				<a href="users/{!! $registered->username !!}">
				<div class="hexagon"></div>
				{!! HTML::image('images/users/'.$registered->username.'/'.$registered->photo) !!}
				<span class="image-title">{!! $registered->username !!}</span>
				</a>
				@if($registered->count == 2){ 
				</li>
				@endif
		@endforeach        
        </ul>
      </div>
      </div>
      
      <div class="invite-frd-right">
        <div class="now-onlinebg"> 
        	<div class="online-heading">Now Online <div class="onlineindigater"><span class="green-signal"></span></div></div>
            <div class="online-user-bg">
            	<div class="container">
                      <ul class="bxslider2">
                        
				@foreach($online as $on)
						@if($on->count == 1)
						<li>
						@endif
						<a href="users/{!! $registered->username !!}">
						<div class="images-bg">
							{!! HTML::image('images/users/'.$on->username.'/'.$on->photo) !!}
						</div>
						<span class="user-name">{!! $on->username !!}</span>
						@if($on->online == 1) 
						<div class="user-status-detailbg"><span class="user-status-detail online"></span></div>
						@else
						<div class="user-status-detailbg"><span class="user-status-detail offline"></span></div>
						</a>
						@endif
						
						@if($on->count == 6)
						</li>
						@endif
@endforeach   
		
		
						</ul>
   				 </div>
            </div>
        </div>
        </div>
        
        
    </div>
  </div>
  <div class="invite-container">
      <div class="container">
      		  <div class="invite-frd-row">
              <div class="three-frd"><img src="images/three-frd.png" alt="frd"></div>
              <div class="connect-arrow"><img src="images/connect-arrow.png" alt="connect"></div>
        	  <a href="#" class="invite-frnbtn"><i>+</i> Invite Your Friends</a>
             <div class="connect-arrow"><img src="images/connect-arrow.png" alt="connect"></div>
            <div class="invide-social">
            	<ul>
                	<li><a href="#"><i class="icon-sprite icon-rss-r"></i></a></li>
                    <li><a href="#"><i class="icon-sprite icon-fb-r"></i></a></li>
                    <li><a href="#"><i class="icon-sprite icon-twitter-r"></i></a></li>
                    <li><a href="#"><i class="icon-sprite icon-linked-r"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
  </div>
  <div class="container video-event-bg">
    <div class="video-continer">
      <div class="left-video"> <img src="images/video-one1.jpg" alt="video"> </div>
      <div class="video-chatbg">
        <h2>Speed Dating</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id congue ipsum. Quisque vehicula massa quis urna malesuada viverra. Proin sit amet odio urna, eu volutpat ante. Fusce eget nisi pulvinar neque venenatis aliquam. </p>
        <a href="video-chat.php" class="button red-btn">Video Chat</a> </div>
    </div>
    <!-- /video-continer -->
    
    <div class="event-fbbg">
      <div class="speed-datingbg"><img src="images/speed-dating.jpg" alt="speeddating"></div>
      <div class="upcoming-event">
        <h3>Upcoming Event</h3>
        <div class="event-bg">
		  <ul>
			@foreach($events as $event)
			<li>
              <div class="date-year"> <span>{!! $event->single_date !!}</span> <span>{!! $event->single_month !!}</span> </div>
              <div class="commenter-detail-year"> <span><a href="#">{!! $event->title !!}</a></span> <span>{!! $event->title !!}</span> <span>{!! $event->description !!}</span> </div>
            </li>
			@endforeach
          </ul>
        </div>
      </div>
      <!-- upcoming-event-->
      
      <div class="facebook-find">
		<div class="fb-page" data-href="https://www.facebook.com/SeriousDating" data-width="293" data-height="293" data-small-header="false" data-adapt-container-width="false" data-hide-cover="true" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/SeriousDating"><a href="https://www.facebook.com/SeriousDating">seriousdatings.com</a></blockquote></div></div>
	  </div>
      <div class="dating-type">
        <ul>
          <li><a href="#">Ecards <span>Lorem ipsum dolor </span></a> <span class="icon-sprite ecard-icon"></span></li>
          <li><a href="#">Background <span>Lorem ipsum dolor </span></a> <span class="icon-sprite background-icon"></span></li>
          <li><a href="#">Phone Chat <span>Lorem ipsum dolor </span></a> <span class="icon-sprite phone-icon"></span></li>
        </ul>
        <div class="calual-dating"><img src="images/casual-dating.jpg" alt="casul-dating"></div>
      </div>
    </div>
  </div>
  <div class="bottom-imagesslider-bg">
    <div class="container">
      <ul class="bxslider1">
        <li><a href="#"><img src="images/b-slide1.png" alt="slider-profile"/></a></li>
        <li><a href="#"><img src="images/b-slide2.png" alt="slider-profile"/></a></li>
        <li><a href="#"><img src="images/b-slide3.png" alt="slider-profile"/></a></li>
        <li><a href="#"><img src="images/b-slide4.png" alt="slider-profile"/></a></li>
        <li><a href="#"><img src="images/b-slide1.png" alt="slider-profile"/></a></li>
        <li><a href="#"><img src="images/b-slide2.png" alt="slider-profile"/></a></li>
        <li><a href="#"><img src="images/b-slide3.png" alt="slider-profile"/></a></li>
        <li><a href="#"><img src="images/b-slide4.png" alt="slider-profile"/></a></li>
        <li><a href="#"><img src="images/b-slide1.png" alt="slider-profile"/></a></li>
        <li><a href="#"><img src="images/b-slide2.png" alt="slider-profile"/></a></li>
        <li><a href="#"><img src="images/b-slide3.png" alt="slider-profile"/></a></li>
        <li><a href="#"><img src="images/b-slide4.png" alt="slider-profile"/></a></li>
        <li><a href="#"><img src="images/b-slide1.png" alt="slider-profile"/></a></li>
        <li><a href="#"><img src="images/b-slide2.png" alt="slider-profile"/></a></li>
        <li><a href="#"><img src="images/b-slide3.png" alt="slider-profile"/></a></li>
        <li><a href="#"><img src="images/b-slide4.png" alt="slider-profile"/></a></li>
      </ul>
    </div>
  </div>
</div>
@include('footer_new')
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="js/jquery.selectbox-0.2.js"></script> 
<script type="text/javascript" src="js/jquery.bxslider.js"></script> 
<script type="text/javascript">
	$(function () {
	$("#language, #gender, #lookingfor, #age, #ageto,#zipcode, #weight ").selectbox();
	});
	</script> 
<script type="text/javascript">
$('.bxslider').bxSlider({
  mode: 'fade',
  pager: false,

});
$('.bxslider1').bxSlider({
  minSlides: 7,
  maxSlides: 8,
  slideWidth: 88,
  slideMargin: 33,
   pager: false,
});

$('.bxslider2').bxSlider({
  minSlides: 1,
  maxSlides: 1,
  slideWidth: 516,
  slideMargin: 17,
   pager: false,
});

$('.bxslider3').bxSlider({
  minSlides: 1,
  maxSlides: 1,
  slideWidth: 580,
  slideMargin: 18,
  pager: false,
});

</script>
</body>
</html>
