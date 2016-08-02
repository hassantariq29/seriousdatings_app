
  
     @include('header_new')
     @include('header_bottom')
   
<!-- /header -->

<div class="middle inner-middle">
  <div class="inner-header upcoming-banner">
    <div class="container">
       <h1><i class="calendar-event-icon"><img src="images/dating-plan-icon.png"  alt=""/></i>Dating Plan</h1>
    </div>
  </div>
  <div class="inner-contendbg">
  
  <div class="container">
  
  <div class="row">
  
    <!--Main content-->
    
    @include('new_leftsidebar')
    
    <div class="col-md-9" style="padding:0px">
    
  <div class="middle inner-middle" style="margin-left: 10px;">
  <div class="inner-header dating-plan">
    <div class="container">
      <h1><i class="calendar-event-icon"><img src="images/dating-plan-icon.png"  alt=""/></i>Dating Plan</h1>
    </div>
  </div>
  <div class="inner-contendbg">
  
    <div class="row">
    <div class="dating-plan-ad"><img src="images/dating-plan-ad-img.png"  alt=""/></div>
    </div>
    
    <div class="row">
    <div class="dating-plan-outer">
    
    @foreach($data['plans'] as $plan)
    <div class="col-md-3" style="padding-right: 2px;padding-left: 12px;">
      <div class="dating-plan-comman">
        <div class="month-plan">
          @if($plan -> type == 'Month')
            <h1>{!! $plan -> noOfDay!!}</h1>
            <h2>{!! $plan -> type!!} PLAN </h2>
          @else
            <h1>{!! $plan -> noOfDay!!}</h1>
            <h2>{!! $plan -> type!!} Trial</h2>
          @endif
        </div>
        <div class="dating-plan-offer-outer">
          <div class="dating-plan-offer">
          @if($plan -> discountPercentage == 0)
            <h4>No comment required</h4>
            <h1><span>${!! $plan -> price !!}</span><br/>
              <small>/{!! $plan -> type !!}</small></h1>
            <p>Today's charge:${!! $plan -> price * $plan -> noOfDay!!} *</p>
            @else
              <h5>Save {!! $plan -> discountPercentage !!}%</h5>
              <h1><span>${!! $plan -> price !!}</span><br/>
              <small>/{!! $plan -> type !!}</small></h1>
            <p>Today's charge:${!! $plan -> price * $plan -> noOfDay!!} *</p>
            @endif
          </div>
          <div class="countinue-btn-outer"> <a href="https://www.paypal.com/in/webapps/mpp/home">Continue Plan</a> </div>
        </div>
      </div>
      </div>
      @endforeach
    </div>
    
</div>
    
    <div class="row">
    <div class="benifit-of-member">
      <h2>Enjoy the benefits of membership:</h2>
      
      <div class="col-md-4">
      <ul class="benefits-membership1">
        <li>Send and receive email</li>
        <li>See who's viewed your profile</li>
        <li>Access to Mate 1 mobile and iPhone app</li>
      </ul>
      </div>
      
      <div class="col-md-4">
      <ul class="benefits-membership2">
        <li>Enjoy live online chat </li>
        <li>View ALL photo GAlleries </li>
        <li>Appear higher in Search results</li>
      </ul>
      </div>
      
      <div class="col-md-4">
	 <ul class="benefits-membership2">
        <li>Enjoy live online chat </li>
        <li>View ALL photo GAlleries </li>
        <li>Appear higher in Search results</li>
      </ul>
      </div>
      
    </div>
    </div>
    
  </div>
</div>
<!-- /middle -->
   
   </div>
    
    <!--Main content end-->
    
    </div>
    
    </div>
    
    </div>
   
  </div>

<!-- /middle -->

@include('footer_new')
