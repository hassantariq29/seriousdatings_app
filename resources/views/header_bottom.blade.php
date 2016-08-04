<div class="header-botom">
    <div class="container">
    <div class="row">
   
    <div class=" col-md-2">
      <div class="logo-bg"><a href="{!! url() !!}" title="Seriousdatings">
        <img src="{!! url()!!}/images/logo.jpg" alt="logo"/></a></div>
      </div>
    
      <div class="col-md-9">
      
      <div class="login_pagehead">
        @if(Auth::check())
       <a href="#">Username or Email</a>
        <a href="{!! url() !!}/logout"><input type="button" value="Logout" class="button"/></a></span>
        @else
          @include('login_form')
        @endif
        </div>
       
      </div>
      <div class="col-md-1" style="margin:0px;padding: 0px;">
        <a href="#">
          <img src="{!! url()!!}/images/A5.jpg" class="img-responsive" alt="image" height="100%" width="100%"/></a>
      </div>
      
      </div>
    </div>

  <div class="container" style="margin-bottom: 4%; margin-top: 1%;">
    <div class="row"> 
       
     <div class="col-md-12"> 
    <div class="new_navbar">    
    <ul class="nav nav-pills">
    <li><a href="{!! url() !!}">Home</a></li>
    <li>
      <a href="#">View</a>
       <ul class="hiddens">
      <li><a href="#">News</a></li>
      @if(Auth::check())
      <li><a href="{!! url() !!}/profile">User Home</a></li>
      
      <li><a href="{!! url() !!}/users/{!! Auth::user()->username !!}">Profile</a></li>
     @endif
     <li><a href="#">Privacy Policy</a></li>
     <li><a href="#">Terms of Use</a></li>
      <li><a href="#">Success Story</a></li>
     
     </ul>
    </li>
        
         <li><a href="#">About</a></li>
     <li><a href="#">Gallery</a></li>
     
  <li><a href="#">Services</a>
    <ul class="hiddens">
      <li><a href="{!! url() !!}/datingPlan">Dating Plans</a></li>
      <li><a href="#">Paid Services</a></li>
      <li><a href="#">Search Persons</a></li>
     <li><a href="#">Ready to Date</a></li>
     <li><a href="#">Invite Friends</a></li>
     <li><a href="#">Meet People</a></li>
     <li><a href="#">Video Chat</a></li>
   </ul>
  </li>
        
      <li><a href="{!! url() !!}/groups">Groups</a></li>
      <li><a href="{!! url() !!}/events">Events</a>
        <ul class="hiddens">
        <li><a href="{!! url() !!}/events">All Events</a></li>
        <li><a href="#">Kids Events</a></li>
        <li><a href="#">Travel</a></li>
        <li><a href="#">Locations</a></li>
        <li><a href="#">Become Affiliate</a></li>
        </ul>
        </li>
    <li><a href="#">Contact</a></li>
  </ul>
  
    </div>
    </div>
  
    
      </div>
    </div>
    
    
    
    </div>
   