
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-language" content="en" />
<meta name="description" content="seriousdatings.com community" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
 
<title>seriousdatings.com - Find dates here!</title>

<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,700,600' rel='stylesheet' type='text/css'>

{!! HTML::style('css/style.css') !!}
{!! HTML::style('css/custom-fileds.css') !!}
{!! HTML::style('css/jquery.bxslider.css') !!}
{!! HTML::style('css/bootstrap.min.css') !!}
{!! HTML::style('css/top.css') !!}
{!! HTML::style('css/vortex.min.css') !!}


    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    	<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>
  
  	{!! HTML::script('js/bootstrap.min.js') !!}

    
    <script>
	jQuery(document).ready(function()
	{
		jQuery( ".three-cols" ).addClass( "customcolwidth" );
		//alert("hii");
	});
    </script>
    
    {!! HTML::script('js/jquery.waterwheelCarousel.js') !!}

    
    <script type="text/javascript">
      $(document).ready(function () {
        var carousel = $("#carousel").waterwheelCarousel({
          flankingItems: 3,
          movingToCenter: function ($item) {
            $('#callback-output').prepend('movingToCenter: ' + $item.attr('id') + '<br/>');
          },
          movedToCenter: function ($item) {
            $('#callback-output').prepend('movedToCenter: ' + $item.attr('id') + '<br/>');
          },
          movingFromCenter: function ($item) {
            $('#callback-output').prepend('movingFromCenter: ' + $item.attr('id') + '<br/>');
          },
          movedFromCenter: function ($item) {
            $('#callback-output').prepend('movedFromCenter: ' + $item.attr('id') + '<br/>');
          },
          clickedCenter: function ($item) {
            $('#callback-output').prepend('clickedCenter: ' + $item.attr('id') + '<br/>');
          }
        });

        $('#prev').bind('click', function () {
          carousel.prev();
          return false
        });

        $('#next').bind('click', function () {
          carousel.next();
          return false;
        });

        $('#reload').bind('click', function () {
          newOptions = eval("(" + $('#newoptions').val() + ")");
          carousel.reload(newOptions);
          return false;
        });

      });
    </script>

    <style type="text/css">
      
      #carousel {
        width:100%;
        height:400px;
        position:relative;
        clear:both;
        overflow:hidden;
        background:#FFF;
      }
      #carousel img {
        visibility:hidden; /* hide images until carousel can handle them */
        cursor:pointer; /* otherwise it's not as obvious items can be clicked */
        border: 2px solid gray !important; box-shadow:2px 2px 2px ;
      }

      .split-left {
        width:450px;
        float:left;
      }
      .split-right {
        width:400px;
        float:left;
        margin-left:10px;
      }
      #callback-output {
        height:250px;
        overflow:scroll;
      }
      textarea#newoptions {
        width:430px;
      }
    </style>
    
    
    <!-- css for bottom sliders-->
    
    <style>
    
    .bx-viewport
    {height: 350px !important;}
    .images-shape a img
    {top:5px !important;left:2px !important}
    .hexagon
    {width: 100% !important;}
    
    </style>
    
     <!-- css for profile popup-->
    
    <!-- Attach our CSS -->
	  	

		{!! HTML::style('css/reveal.css') !!}
        <!-- Attach necessary scripts -->
		<!-- <script type="text/javascript" src="jquery-1.4.4.min.js"></script> -->
	
		{!! HTML::script('js/jquery.reveal.js') !!}

		<style type="text/css">
			body { font-family: "HelveticaNeue","Helvetica-Neue", "Helvetica", "Arial", sans-serif; }
			.big-link { display:block; margin-top: 100px; text-align: center; font-size: 70px; color: #06f; }
            
            .new-dating-left
            {width: 100% !important;}
            .new-dating-user
            {width: 50% !important;}
             .new-dating-user img
             {width: 100% !important;}
             .new-dating-user-detail
             {width:50% !important; margin: 0px !important;padding: 1% !important;}
              .new-dating-user-detail h2
              {padding: 0px !important;margin-top: 10px !important;}
               .new-dating-user-detail p
               {margin: 0px !important;}
                .new-dating-user-detail h3
                {margin-bottom: 5px !important; margin-top: 5px !important;}
                .compatibility-factors
                {width: 100% !important;}
                .you-match h2
                {text-align: center !important; float: none !important;}
                .you-match .common-red-btn
                {float: none !important; margin-left: 20% !important;}
                
                .reveal-modal
                {background: none; top:5% !important;padding-left: 0px !important;}
            
		</style>
        
        
        <div id="myModal" class="reveal-modal">
		
			<div class="popup-bg">
	<div class="popup-inner">
   
    	<div class="popup-content-bg new-dating-bg">
        <div class="popup-header">
        	<h2 class="text-shedow new-dating-icon">Profile Details </h2>
         </div>
         
         <div class="new-dating">
         	<h4>We would like to introduce you to chas600</h4>
          </div>
         
         <div class="clear"></div>
		
        <div class="new-dating-content">
        <div class="new-dating-left">
        <div class="new-dating-user">
        	 {!! HTML::image('images/3.jpg', '', array('id' => '')) !!}
        </div>
        <div class="new-dating-user-detail">
        <h2>About chas600</h2>
        <p>From San Leandro, <br/>CA 58 Years Old <br/>Transportation</p>
        <h3>Hobbies and Interests:</h3>
        <p>Movies <br/>Outdoor activities</p>
        
        </div>
        </div>
        <div class="compatibility-factors">
        <h2>Compatibility Factors</h2>
        <ul>
        <li><a href="#">Risk Taker</a></li>
        <li class="border-bottom"><a href="#">High Energy</a></li>
        <li class="border-none"><a href="#">Optimistic</a></li>                       
        <li class="border-bottom border-none"><a href="#" >Seeks variety</a></li>
        </ul>
        </div>
          <div class="you-match">
          	<h2>See Why You Match!</h2>
            <a class="button common-red-btn" href="#"><span>View 'Compare Us'</span></a>
        </div>
        </div>
        </div>
    </div>
</div>    
    <a class="close-reveal-modal" style="background: none;">&#215;</a>
</div>

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
  
 @include('header_bottom')

<div class="middle inner-middle">
  <div class="inner-header calendar-event-banner">
    <div class="container">
      <h1><i class="calendar-event-icon">

      	{!! HTML::image('images/calendar-event-icon.png', '', array('id' => '')) !!}
    </div>
  </div>
  
  <div class="inner-contendbg">
  
  <div class="row">
  

    
    <div class="col-md-9">
   
    <div>
    
    <div class="row" style="background: #E9E9E9 !important;">
    <div class="col-md-12">
    
    <h2>Your Compatibility</h2>
    <div id="carousel">
      @foreach($data['slider'] as $d)
      <a href="#" class="big-link" data-reveal-id="myModals" data-animation="fade">
    	<img src="{!! url() !!}/images/users/{!! $d['username'] !!}/{!! $d['image'] !!}" id="item-{!! $d['i']  !!}" width="259" height="194"">
      </a>
    @endforeach
    </div>
    <div style="text-align: center;">
    <a href="#" id="prev">Prev</a> | <a href="#" id="next">Next</a>
   </div>
    <br/>
    
    </div>
    </div>
    
    <div class="row">

    <div class="just-registered-bg">
    <div class="container">
    
    <div class="row custom_indexcol">
    
    <div class="col-md-6">
    <div class="just-registered">
      <h2 class="registered-h">NEWSFEED</h2>
      <div class="row" style="margin-left: 0px !important; height: 300px !important;">
        
        <ul class="row images-shape bxslider3">
          <li>
          	@foreach($data['newsFeed'] as $d) 
		          	<div class="col-md-4" style="padding-right: 0px;">
			          	<a href="{!! $data['verifyKey'] !!}" style="width: 100%;">
			            	<div class="hexagon"></div>
			            	<img src="{!! url() !!}/images/users/{!! $d['username'] !!}/{!! $d['image'] !!}">
						</a>
					</div>
			@endforeach
         </li>
        </ul>
      </div>
      </div>
      </div>
      
  <div class="col-md-6">
    <div class="just-registered">
      <h2 class="registered-h">Users</h2>
      <div class="row" style="margin-left: 0px !important; height: 300px !important;">
        
        <ul class="row images-shape bxslider3">
          <li> 

          	@foreach($data['newsFeed'] as $d) 
		          	<div class="col-md-4" style="padding-right: 0px;">
			          	<a href="{!! $data['verifyKey'] !!}" style="width: 100%;">
			            	<div class="hexagon"></div>
			            	<img src="{!! url() !!}/images/users/{!! $d['username'] !!}/{!! $d['image'] !!}">
						</a>
					</div>
			@endforeach

          </li>
            
          </ul>
          
      </div>
      
      </div>
      </div>
        
        </div>
        
        <div class="row" style="margin-top:7% ;text-align: right;" >
      
        
        
        </div>
        
    </div>
  </div>
    
    </div>
   
    </div>
    </div>
    
    </div>
   
  </div>
  
</div>

<!-- /middle -->


<footer>
  <div class="container footer-top" >

  <div class="footer-bottom">
    <div class="container">
    <div class="row">
    
    <div class="col-md-12">
      <ul>
        <li><a href="index.php">home</a></li>
        <li><a href="about.php">about</a></li>
        <li><a href="location.php">Locations</a></li>
        <li><a href="news.php">News</a></li>
        <li><a href="gallery.php">Gallery </a></li>
        <li><a href="contact.php">contact us</a></li>
      </ul>
      <div class="copyright">Copyright &copy; 2015, Serious Dating. All Rights Reserved.</div>
    
      </div>
      
      </div>
      
    </div>
    
    </div>
  
  </div>
</footer>


<script>

{
  flankingItems: 3,
  movingToCenter: function ($item) {
    $('#callback-output').prepend('movingToCenter: ' + $item.attr('id') + '<br/>');
  },
  movedToCenter: function ($item) {
    $('#callback-output').prepend('movedToCenter: ' + $item.attr('id') + '<br/>');
  },
  movingFromCenter: function ($item) {
    $('#callback-output').prepend('movingFromCenter: ' + $item.attr('id') + '<br/>');
  },
  movedFromCenter: function ($item) {
    $('#callback-output').prepend('movedFromCenter: ' + $item.attr('id') + '<br/>');
  },
  clickedCenter: function ($item) {
    $('#callback-output').prepend('clickedCenter: ' + $item.attr('id') + '<br/>');
  }
}

</script>

{!! HTML::script('js/jquery.selectbox-0.2.js') !!}
{!! HTML::script('js/jquery.bxslider.js') !!}
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


          