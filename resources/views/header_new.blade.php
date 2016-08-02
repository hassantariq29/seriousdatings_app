<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-language" content="en" />
    <meta name="description" content="seriousdatings.com community" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{!!  csrf_token() !!}">

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
	 <!-- Attach our CSS -->
	  	<link rel="stylesheet" type="text/css" href="css/reveal.css"/>
	    
        <!-- Attach necessary scripts -->
		<!-- <script type="text/javascript" src="jquery-1.4.4.min.js"></script> -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>

		<script type="text/javascript" src="js/jquery.reveal.js"></script>

		<style type="text/css">
			body { font-family: "HelveticaNeue","Helvetica-Neue", "Helvetica", "Arial", sans-serif; }
			.big-link { display:block; margin-top: 100px; text-align: center; font-size: 70px; color: #06f; }
            .frgot_pass
            {font-weight: 300;font-style: italic;font-size: 13px;color: #000000;text-decoration: underline;}
		</style>
        
        <script type="text/javascript">
           function frgtpass_msg() {
            alert('New Password Set Successfully');
           }
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


   