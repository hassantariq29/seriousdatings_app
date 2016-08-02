 @extends('master')
@section('login')
    @include('login_form')
@stop
@section('container')

@stop
@section('form_area')
    

<div class="middle inner-middle">
  
     <div class="inner-contendbg">
     
     <div class="container">
     
     <div class="row">
      
     <div class="col-md-8">
     
     <div class="row">
     
     <div class="col-md-5 email_head">
     <h4>EMAIL VERIFICATION</h4>
     </div>
     
     <div class="col-md-7">
     
     <div style="float: left;">
     {!! HTML::Image($data["image"],'profile_pic',array('class' => 'img-responsive', 'width' => '174', 'height' => '174'))!!}
     </div>
     
     <div style="margin-top: 32%; margin-left: 50%;">
     <p>{!! $data['name'] !!}</p>
    <p><a href="{!! url() !!}/users/{!! $data['username'] !!}">View your profile</a></p>
     </div>
     
     </div>
     </div>
     
     <div class="row">
    <div class="vemail_cont">
    <p class="pera1">Verify your email address</p>
    
    <div class="row">
    
    <div class="col-md-3">
    {!! HTML::Image('images/emailimg.jpg' ,'image' ,  array('class' => 'img-responsive', 'height' => '80', 'width' => '100%','align' => 'middle') ) !!}
    <div style="margin-top: 10px;"><a class="btn btn-default" href="#" role="button" style="background: #E21D24;color: #FFF;">Verify email address</a></div>
    </div>
    
    <div class="col-md-9">
    
    <div>
    <p>You are almost done! A verification message has been sent to <b>{!! $data['email'] !!}.</b></p>
    </div>
    
    <div>
    <p style="text-align:justify">Check your email and follow the link to finish creating your account.
    Once you verify your email address,you will be able to view profiles and access all features and services.</p>
    </div>
    <hr/>
    
    <div>
    
    <label>Can't find the email?</label>
    <span><a href="#">Resend verification email</a></span>
    </div>
    
    
    </div>
    </div>
    
    </div>
    
    </div>
     
     </div>
     
     <div class="col-md-4"></div>
     
     
     </div>
     </div>
     
     </div>
     
</div><!-- /middle -->

@stop
