<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<meta name="csrf-token" content="{!!  csrf_token() !!}">
<title>Serious Dating | Login</title>
<!-- Bootstrap Core CSS -->
{!! HTML::style('css/bootstrap.css') !!}
{!! HTML::style('css/admin-style.css') !!}
{!! HTML::style('css/login-style.css') !!}
<!-- Custom Fonts -->
{!! HTML::style('css/font-awesome.css') !!}
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="login-body2">
<div class="login-wrapper">
  <div class="login-wrapper-inner">
    <div class="cover-container">
      <div class="login-inner">
        <div class="login-logo">Serious Dating</div>
        <div class="login-panel">
          <div class="login-heading">
            <h3>Sign in to your account</h3>
            <p>Please enter your name and password to log in. </p>
          </div>
		  {!! Form::open(
				array(
					'url' => 'login',
					'method' => 'post',
					'role' => 'form',
					'class' => 'form-login',
					)) !!}
          <div class="successHandler alert alert-success no-display alert-dismissible fade in">
            <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span></button>
            <strong>You have some form errors!</strong> Please check below. </div>
          <div class="errorHandler alert alert-danger no-display alert-dismissible fade in">
            <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span></button>
            <strong>You have some form errors!</strong> Please check below. </div>
        
            <fieldset>
              <div class="form-group"><span class="input-icon">
                <input type="text" placeholder="Username" name="username" id="username" class="form-control" required>
                <i class="fa fa-user"></i> </span> </div>
              <div class="form-group"> <span class="input-icon">
                <input type="password" placeholder="password" name="password" id="password" class="form-control" required>
                <i class="fa fa-lock"></i> </span> </div>
              <div class="clearfix ">
                <div class="checkbox pull-left">
                  <label>
                    <input name="remember" type="checkbox" value="Remember Me">
                    Remember Me </label>
                </div>
                <a class="Forgott" href="forgot-password.html"> Forgot Password ?</a> </div>
              <!-- Change this to a button or input when using this as a form -->
              <input type="submit" value="Login" class="btn btn-success btn-block">
               <input type="submit" value="Login" class="btn btn-flickr btn-block">
               <input type="submit" value="Login" class="btn btn-danger btn-block">
               <input type="submit" value="Login" class="btn btn-google-plus btn-block">
            </fieldset>
          {!! Form::close() !!}
          
        </div>
        <div class="copyright">Copyright © 2015, Serious Dating. All Rights Reserved.</div>
      </div>
      
    </div>
  </div>
</div>

<!-- jQuery --> 
{!! HTML::script('plugins/jquery/jquery.min.js') !!}
{!! HTML::script('js/bootstrap.min.js') !!}
{!! HTML::script('plugins/jquery-validation/dist/jquery.validate.min.js') !!}
{!! HTML::script('js/login-form.js') !!}
<!-- jquery-validation --> 
<script>
jQuery(document).ready(function(){
	//loginValidator.init();
});
</script>
</body>
</html>