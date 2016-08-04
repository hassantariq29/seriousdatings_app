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

    {!! HTML::style('css/style.css') !!}
    {!! HTML::style('css/custom-fileds.css') !!}
    {!! HTML::style('css/jquery.bxslider.css') !!}
    {!! HTML::style('css/bootstrap.min.css') !!}
    {!! HTML::style('css/top.css') !!}
    {!! HTML::style('css/vortex.min.css') !!}
    {!! HTML::style('css/jquery.fullcalendar.css') !!}
    {!! HTML::style('css/reveal.css') !!}
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,700,600' rel='stylesheet' type='text/css'>

    <style type="text/css">
        thead tr
        {font-size: 18px;background: #EFEFEF!important;height: 50px !important;}
        thead tr th
        {padding: 10px !important;}
        tbody tr
        {font-size: 16px !important;height: 70px !important;}
        .fc-button-today
        {background: #E11C23 !important;color: #FFF !important; font-size: 16px; font-weight: bold !important;opacity:1}
        .fc-event-inner
        {background: #E11C23 !important;color: #FFF !important;}
        .calendar-outer
        {margin-left: 5px !important;}
        @media only screen and (max-width: 464px) 
        {
            .right-content-section
            {width:100% !important; }
            tbody
            {width: 100% !important;}
        }
    </style>
    <style type="text/css">
            body { font-family: "HelveticaNeue","Helvetica-Neue", "Helvetica", "Arial", sans-serif; }
            .big-link { display:block; margin-top: 100px; text-align: center; font-size: 70px; color: #06f; }
            .frgot_pass
            {font-weight: 300;font-style: italic;font-size: 13px;color: #000000;text-decoration: underline;}
    </style>



        


    {!! HTML::script('js/jquery.min1.js') !!}
    {!! HTML::script('js/jquery.vortex.min.js') !!}
    {!! HTML::script('js/bootstrap.min.js') !!}
    {!! HTML::script('js/jquery-1.7.2.min.js') !!}
    {!! HTML::script('js/jquery.selectbox-0.2.js') !!}
    {!! HTML::script('js/jquery.bxslider.js') !!}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js" type="text/javascript"></script>
    <script src="http://qtip2.com/static/javascripts/libs/jquery.fullcalendar.min.js"></script>
    <!-- Attach necessary scripts -->
    <!-- <script type="text/javascript" src="jquery-1.4.4.min.js"></script> -->
    {!! HTML::script('js/jquery.reveal.js') !!}
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script>
	   jQuery(document).ready(function()
	   {
		jQuery( ".three-cols" ).addClass( "customcolwidth" );
		//alert("hii");
	   });
    </script>
	 <!-- Attach our CSS -->
	<script type="text/javascript">
           function frgtpass_msg() {
            alert('New Password Set Successfully');
           }
    </script>
    <script type="text/javascript">
      $(function () {
      $("#language, #gender, #lookingfor, #age, #ageto,#zipcode, #weight, #relation, #relation-ship ").selectbox();
      });
    </script> 
    <script type="text/javascript">
        document.getElementById("uploadBtn").onchange = function () {
        document.getElementById("uploadFile").value = this.value;};
        // this script only for show images
        function readURL(input) {
        if (input.files && input.files[0]) {
        var reader = new FileReader();  
         reader.onload = function (e) {
         $('#blah').attr('src', e.target.result);
        }          
         reader.readAsDataURL(input.files[0]);
        }
        }
        $(".imgInp").change(function(){
        readURL(this);
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


   