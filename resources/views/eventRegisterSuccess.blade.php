@include('header_new')

@include('header_bottom')


</header>

<div class="middle inner-middle">
  <div class="inner-header calendar-event-banner">
    <div class="container">
      <h1><i class="calendar-event-icon">{!! HTML::Image('images/calendar-event-icon.png' , '') !!}</i>Calendar of Event</h1>
    </div>
  </div>
  
  <div class="inner-contendbg">
  
  <div class="row">
  

    
    <div class="col-md-9">
    <div class="right-content-section">
      <div class="calendar-event-inner">
        <div class="calendar-event-title">
          
        </div>

        <div class="ragister-content">
         		<h2>
         			<a href="#"> Successfully Registered </a>
         		</h2>
         		<h2>
         			<a href="{!! url() !!}/events"> Go Back To Events </a>
         		</h2>
        </div>
        
        
        <div class="row">
        	
		</div>
        
      </div>
    </div>
    </div>
    
    
    </div>
    
  </div>
  
</div>

<!-- /middle -->

@include('footer_new')
<script type="text/javascript">
	$(document).ready(function() {
		console.log("ready");
		var url = "{!! url() !!}/events";
		var delay = 3000; //Your delay in milliseconds
		//setTimeout(function(){ window.location = url; }, delay);
    });
</script>
</body>
</html>

