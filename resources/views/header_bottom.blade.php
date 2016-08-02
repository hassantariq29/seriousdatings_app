	  <div class="header-botom">
    <div class="container">
    <div class="row">
   
    <div class=" col-md-2">
      <div class="logo-bg"><a href="index.php" title="Seriousdatings">{!! Html::image('images/logo.jpg') !!}</a></div>
      </div>
    
      <div class="col-md-9">
      
        @if(Auth::check())
          
           <div class="login_pagehead">
       <a href="#"></a>
        <a href="{!! url() !!}/logout"><input type="button" value="Logout" class="button"/></a></span>
        </div>
       
      </div>
      <div class="col-md-1" style="margin:0px;padding: 0px;">
        <a href="advertise.php">

    {!! HTML::image('images/A5.jpg', 'image', array('class' => 'img-responsive' , 'width' => '100%' , 'height' => '100%')) !!}
    </div>

        @else
          <div class="login_pagehead">
            @include('login_form')
          </div>
      @endif
     
      
      </div>
    </div>

  <div class="container" style="margin-bottom: 4%; margin-top: 1%;">
    <div class="row"> 
       
     <div class="col-md-12"> 
    <div class="new_navbar">    
    <ul class="nav nav-pills">
		<li><a href="index.php">Home</a></li>
		<li>
			<a href="#">View</a>
			 <ul class="hiddens">
     <li><a href="profile.php">Profile</a></li>
      <li><a href="news.php">News</a></li>
      <li><a href="after_login.php">User Home</a></li>
     <li><a href="privacy_policy.php">Privacy Policy</a></li>
     <li><a href="terms_condition.php">Terms of Use</a></li>
      <li><a href="success_story.php">Success Story</a></li>
     
     </ul>
		</li>
        
         <li><a href="about.php">About</a></li>
     <li><a href="gallery.php">Gallery</a></li>
     
  <li><a href="#">Services</a>
   	<ul class="hiddens">
      <li><a href="dating_plan.php">Dating Plans</a></li>
      <li><a href="paid_services.php">Paid Services</a></li>
      <li><a href="new_search.php">Search Persons</a></li>
     <li><a href="readyto_date.php">Ready to Date</a></li>
     <li><a href="invite_friend.php">Invite Friends</a></li>
     <li><a href="browse_member.php">Meet People</a></li>
     <li><a href="video_chat.php">Video Chat</a></li>
   </ul>
  </li>
        
      <li><a href="all_groups.php">Groups</a></li>
      <li><a href="#">Events</a>
        <ul class="hiddens">
        <li><a href="new_calendar.php">All Events</a></li>
        <li><a href="kids_event.php">Kids Events</a></li>
        <li><a href="travel.php">Travel</a></li>
        <li><a href="location.php">Locations</a></li>
        <li><a href="affiliate.php">Become Affiliate</a></li>
        </ul>
        </li>
		<li><a href="contact.php">Contact</a></li>
	</ul>
  
    </div>
    </div>
  
    
      </div>
    </div>
    
    
    
    </div>