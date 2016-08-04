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
    <a class="btn btn-default" href="{!!  URL::previous() !!}" role="button" style="color: #FFF; background: #E21D24;float: right;margin-bottom: 10px;">Back</a> 
  </div>
  <div class="row">
  

    
    <div class="col-md-9">
    <div class="right-content-section">
      <div class="calendar-event-inner">
        <div class="calendar-event-title">
          <h2>{!! $event['0'] -> title !!} <small><span> @ </span>{!! $event['0'] -> eventLocation !!}</small></h2>
        </div>

        <div class="ragister-content">
          @if($event['0'] -> role_user_status == 2)
            @if($event['0'] -> eventRegisterStatus == 0)
            {!! Form::open(
                          array(
                              'url'         => 'events/create',
                              'novalidate'  => 'novalidate'
                              )
                      ) 

            !!}
            <input type ="hidden" name ="eventId" value = "{!! $event['0'] -> id !!}" />
            <input type = "submit" value=" Register For This Event" class="common-red-btn button">
            {!! FORM:: close()!!}
            @else
               <h4 style = "color:#e21d24;"> You already registered to this event</h4>
            @endif
          @endif
          <br/>
          <h4 style = "color:#e21d24;"> FROM: {!! $event['0'] -> start !!} TILL: {!! $event['0'] -> endDate !!}</h4>
          <p>
            {!! $event['0'] -> desc !!}
          </p>

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
</body>
</html>

