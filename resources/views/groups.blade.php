 @include('header_new')
 @include('header_bottom')

        
        
        
        
        <div id="myModal" class="reveal-modal" style="background: none;">
		
			<div class="popup-bg">
	<div class="popup-inner">
   
    	<div class="popup-content-bg new-dating-bg">
        <div class="popup-header">
        	<h2 class="text-shedow new-dating-icon">Fill details to join Group </h2>
         </div>
         
         <div class="new-dating">
         	<h4>After joining you can participate in all group events.</h4>
          </div>
         
         
            <div class="clear"></div>
		
        <div class="new-dating-content">
        
        <form>
        
        <div class="form-group">
        <label for="exampleInputName2">Your Name</label>
        <input type="text" class="form-control" id="exampleInputName2" placeholder="Name"/>
        </div>
        
       <div class="form-group">
       <label for="exampleInputEmail1">Your Email</label>
       <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email"/>
       </div>
       
       <div class="form-group">
        <label for="exampleInputName2">Contact</label>
        <input type="text" class="form-control" id="exampleInputName2" placeholder="Contact no."/>
        </div>
      
        <div class="form-group">
        <label for="exampleInputName2">Address</label>
        <textarea class="form-control" rows="3"  placeholder="Type your address here"></textarea>
        </div>
        
      <button type="submit" class="btn btn-default">Submit</button>
   </form>
          
        </div>
        </div>
    </div>
</div>
 <a class="close-reveal-modal">&#215;</a>
</div>
        
<!-- /header -->

<div class="middle inner-middle">

	<div class="inner-header upcoming-banner">
    <div class="container">
      <h1>
        <i class="calendar-event-icon">
         {!! HTML::Image('images/upcoming-event-icon.png','') !!}
        
        </i>Groups
      </h1>
      
    </div>
  </div>
  
  <div class="inner-contendbg">
  
  <div class="container">
  
  <div class="row">
  @if($groups != null)
    @if($groups['0'] -> logged_in != 0)
      @include('new_leftsidebar')
    @endif
  @endif
    
    <div class="col-md-9" style="padding:0px">
    
    <div class="middle-content-section">
    
    <div class="groups_cntent">
    
    <div class="row">
    
    <div class="col-md-7"><h2> Groups</h2> </div>
    
    <div class="col-md-5">
    @if(Auth::check())
      @if($groups != null)
        @if($groups['0'] -> logged_in != 0)
          <a class="btn btn-default btn_link" href="{!! url() !!}/profile/groups/create" role="button">Create Group</a>
        @endif
        @else
         <a class="btn btn-default btn_link" href="{!! url() !!}/profile/groups/create" role="button">Create Group</a>
      @endif
    @else
        <a class="btn btn-default btn_link" href="{!! url() !!}/profile/groups/create" role="button">Create Group</a>
    @endif
    </div>
    </div>
    
    <div class="row" style="margin-bottom: 2%;">
    @if($groups != null)
        @foreach($groups as $group)
        <div class="col-md-3">
            <a href="{!! url() !!}/groups/{!! $group -> id !!}">
            <div class="grup_member">
              <div>
                  <img src="{!! url() !!}/images/groups/{!! $group -> id !!}/{!! $group -> image !!}" alt="group memberadmin image" class="img-responsive" /> 
                  </div>
            </div>
           <div><p> <b>Group Name:</b>{!! $group -> group_name !!}</p></div> 
            </a>
        </div>
        @endforeach
    @else
     <h4> No Groups Found </h4>
    @endif
   
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

