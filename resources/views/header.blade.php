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


{!! HTML::script('js/jquery.min1.js') !!}
{!! HTML::script('js/jquery.vortex.min.js') !!}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
{!! HTML::script('js/bootstrap.min.js') !!}
<script>
	jQuery(document).ready(function()
	{
		jQuery( ".three-cols" ).addClass( "customcolwidth" );
		//alert("hii");
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
    <div class="row">
    <div class=" col-md-2">
    
      <div class="logo-bg"><a href="{!! url() !!" title="Seriousdatings">{!! HTML::image('images/logo.jpg') !!}</a></div>
      
      </div>
      
      
      <div class="col-md-10">
      
      <div class="login-formbg">
        <form>
          <div class="input-cols">
            <input type="text" name="username" placeholder="User Name">
            <a href="#" class="input-icon"><i class="user-icon"></i></a> </div>
          <div class="input-cols">
            <input type="password" name="Password" placeholder="Password">
            <a href="#" class="input-icon"><i class="password-icon"></i></a> </div>
          <a href="after_login.php"><input type="button" value="Login" class="button"></a>
          <a href="signup.php"><input type="button" value="sign up" class="button signup"></a>
          <div class="row">
            <div class="input-cols">
            	 <input type="checkbox" id="remember" name="check">
                 <label for="remember"><span></span>Remember me!</label>
            </div>
            <div class="input-cols"> <a href="#">Forgot Password ? </a> </div>
          </div>
        </form>
      </div>
      
      </div>
      
      </div>
      
      
      
    </div>
  </div>
</header>
<!-- /header -->