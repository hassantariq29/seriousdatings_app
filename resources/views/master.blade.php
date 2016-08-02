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
			 document.location.href="signup.php";
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
  
  <div class="header-botom">
    <div class="container">
      <div class="logo-bg"><a href="{!! url() !!}" title="Seriousdatings">{!! HTML::image('images/logo.jpg') !!}</a></div>
      <div class="login-formbg">
        @yield('login')
      </div>
    </div>
  </div>
</header>
<!-- /header -->

<div class="middle inner-middle" id="step1">
	<div class="inner-header aboutyour-header">
    	<div class="container">
        	 @yield('container')
        </div> 
    </div>
     <div class="inner-contendbg">
     @yield('form_area')
	 </div>
</div>
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
         <li><a href="privacy_policy.php">Policy</a></li>
          <li><a href="terms_condition.php">Terms</a></li>
           <li><a href="dating_plan.php">Payments</a></li>
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
    </body>
</html>