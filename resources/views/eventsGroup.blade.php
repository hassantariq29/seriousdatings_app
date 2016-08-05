@include('header_new')

@include('header_bottom')


</header>

<div class="middle inner-middle">
  <div class="inner-header calendar-event-banner">
    <div class="container">
      <h1><i class="calendar-event-icon"><img src="images/calendar-event-icon.png"  alt=""></i>Calendar of Event</h1>
    </div>
  </div>
  
  <div class="inner-contendbg">
  
   <div class="row">
    <a class="btn btn-default" href="{!! url() !!}/events" role="button" style="color: #FFF; background: #E21D24;float: right;margin-bottom: 10px;">Back</a> 
  </div>
  <div class="row">
  
  <div class="col-md-3" style="padding: 0px;">
    <div class="left-section">
      <div class="left-section-inner">
        <div class="add-grouph">
          <h2>Age Groups For Serious Dating Events</h2>
        </div>
        <div class="age-grouph">
          <ul>
            @if($events!= null)
            <li>
              <a href="#">
                {!! $events["eventTypeString"]!!}
                </a>
              </li>
              @else
              <li>  No Event Found </li>
              @endif
          </ul>
        </div>
       
        
      </div>
    </div>
    </div>
    
    <div class="col-md-9">
    <div class="right-content-section">
      <div class="calendar-event-inner">
        <div class="calendar-event-title">
          <h2>Calendar of Event<small><span>*</span>Click on the DAY of the event to View all details</small></h2>
        </div>
        <div class="ragister-content">
         
        </div>
        
        
        <div class="row">
        <div class="calendar-outer">
      
       <div class="page">

		<div style="width:100%; display:inline-block;padding: 10px;">
			
            <div id="fullcalendar"></div>    
            
         <div id="dialog" title="Event Description" style="display:none;height: auto !important;">
          <form>
            <fieldset>
              <label for="Id">Id</label><br />
               <input type="text" name="name" id="name" class="text ui-widget-content ui-corner-all" readonly=""/><br />
               <label for="Id">Title</label><br />
               <input type="text" name="title" id="title" class="text ui-widget-content ui-corner-all" readonly=""/><br />
	          <label for="Id">description</label><br />
              <input type="text" name="desc" id="desc" class="text ui-widget-content ui-corner-all" readonly="" style="height: auto !important;"/><br />
         </fieldset>
        </form>
       </div>
     </div>
	
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

@include('footer_new')

<script>
(function() {

   @if($events != null)
      var events = '{!! $events["encodedEvents"] !!}';
      var json = $.parseJSON(events);
  @else
    var events = '';
    var json = $.parseJSON(events);
  @endif
    
  var date = new Date();
  var d = date.getDate();
  var m = date.getMonth();
  var y = date.getFullYear();



  $('#fullcalendar').fullCalendar({
    editable: true,
    height: 300,
    header: {
      left: 'title',
      center: '',
      right: 'today prev,next'
    },

    eventClick: function(calEvent, jsEvent, view) {

      console.log("Clicked");
      var id = calEvent.title;
      var url =  "{!! url() !!}/events/"+id;
      window.location.href = url;
      //console.log(url);
      /*
      $("#dialog").dialog({
          autoOpen: false,

        }

      );
*/
      
      $("#name").val(calEvent.id);


      $("#title").val(calEvent.title);
	   $("#desc").val(calEvent.desc);
	   
      $('#dialog').dialog('open');
    },
    
    events: json
  });
}());

</script>

</body>
</html>

