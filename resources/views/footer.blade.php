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

{!! HTML::script('js/jquery-1.7.2.min.js') !!}
{!! HTML::script('js/jquery.selectbox-0.2.js') !!}
{!! HTML::script('js/jquery.bxslider.js') !!}

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