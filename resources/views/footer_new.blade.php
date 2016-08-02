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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    {!! HTML::script('js/bootstrap.min.js') !!}
    
</head>





<body>

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
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="js/jquery.selectbox-0.2.js"></script> 
<script type="text/javascript" src="js/jquery.bxslider.js"></script> 
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
</body>
</html>
