<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<meta name="csrf-token" content="{!!  csrf_token() !!}">
<title>Serious Dating | Forgot Password</title>
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
            <h3>Reset your Password </h3>
            <p>Please enter your email to rest your password. </p>
          </div>
          <h3 style="color:white"><strong>{!! $data['status'] !!}</strong></h3> 
		  {!! Form::open(
				array(
					'url' => url().'/updatePassword',
					'method' => 'post',
					'role' => 'form',
					'class' => 'form-login',
					)) !!}
          
        
            <fieldset>
              <input type = "hidden" name = "email" value = "{!! $data['email'] !!}" />
              <div class="form-group"><span class="input-icon">
                <input type="password" placeholder="New Password" name="password" id="password" class="form-control" required>
                <i class="fa fa-user"></i> </span> 
                </div>
                <div class="form-group"><span class="input-icon">
                <input type="password" placeholder="Confirm Password" name="confirmPassword" id="confirmPassword" class="form-control" required>
                <i class="fa fa-user"></i> </span> 
                </div>
              <div class="clearfix ">
                <a class="Forgott" href="{!! url() !!}/login"> Login </a> </div>
              <!-- Change this to a button or input when using this as a form -->
              <input type="submit" value="Update Password"  id = "reset" class="btn btn-success btn-block">
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
  if($("#password").val() != $("#password").val()){

        alert("Confirm Password donot match");
  }
  @if($data['status'] != ""){
      $(".form-group").hide();
      $("#reset").hide();
      $(".login-heading").hide();
      
  }
  @endif
});
</script>
</body>
</html>