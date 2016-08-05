@include('header_new')
@include('header_bottom')

<!-- /header -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5&appId=1544055289192431";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="middle">
  <div class="top-banner">
    <div class="top-cloud"><img src="images/top-cloud.png" alt="cloud"></div>
    <ul class="bxslider">
    @if($slides != null)
      @foreach($slides as $slide)
          <li><img src="{!! url() !!}/images/slider/{!! $slide -> image!!}" alt="slider-1"/>
              <div class="top-slider-description">
                <div class="slider-top-heading">
                  <img src="images/joinus.png" alt="joinus">
                </div>
                <div class="attractive">{!! $slide -> title !!}</div>
                <div class="banner-description">{!! $slide -> description !!}</div>
                <a href="#" class="slider-btn">Meeting Some New People</a> </div>
            </li>
        @endforeach
      @endif
    </ul>
  </div>
  <div class="container search-welcomebg">
    <div class="add-searchprofile-bg">
      <div class="letadd-bg"><img src="images/search-add.jpg" alt="searchadd"></div>
      <div class="search-peoplebg">
        <div class="topheading"><i class="icon-sprite"></i>Search People</div>
      </div>
      <div class="searchpeople-form">
          {!!  Form::open(array('action' => 'SearchController@postIndex','method' => 'POST','target' => '_blank')) !!}
        <div class="two-cols">
          <label>I am :</label>
          <select name="myGender" id="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select>
        </div>
        <div class="two-cols">
          <label>Looking For :</label>
          <select name="gender" id="lookingfor">
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select>
        </div>
        <div class="two-cols">
          <label>Age :</label>
          <select name="age_from" id="age">
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
          </select>
        </div>
        <div class="two-cols">
          <label>To :</label>
          <select name="age_to" id="ageto">
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
          </select>
        </div>
        <div class="two-cols">
          <label>Zipcode :</label>
          <input type="text" name="zipcode">
        </div>
        <div class="two-cols">
          <label>Miles :</label>
          <select name="range" id="weight" >
            <option value="20">20</option>
            <option value="25">25</option>
            <option value="30">30</option>
            <option value="30">30</option>
          </select>
        </div>
        <div class="row">
          <input type="submit" value="Search" class="button">
        {!! Form::close() !!}
        </div>
      </div>
    </div>
    <div class="welcomebox">
      <h2>Welcome to Seriuos Dating</h2>
      <div class="inner-deta">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id congue ipsum. Quisque vehicula massa quis urna malesuada viverra. Proin sit amet odio urna, eu volutpat ante. Fusce eget nisi pulvinar neque venenatis aliquam. </p>
      </div>
      <div class="row">
        <div class="signature-bg"> <a href="#" class="signature-box">
          <div class="heart"><i class="icon-sprite heart-icon"></i></div>
          <p>Lorem ipsum</p>
          </a> <a href="#" class="signature-box">
          <div class="heart"><i class="icon-sprite heart-icon"></i></div>
          <p>Lorem ipsum</p>
          </a> </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="full-width-add"><img src="images/full-add.jpg" alt="add"></div>
  </div>
    <div class="just-registered-bg">
    <div class="container">
    
    <div class="row custom_indexcol">
    
    <div class="col-md-6" style="padding: 0px;">
    <div class="just-registered">
      <h2 class="registered-h">They just registered</h2>
      <div class="row" style="margin-left: 0px !important;">
        <ul class="images-shape bxslider3">
          <li>
           @if($just_registered != null)
                  @foreach($just_registered as $registered)
                      <a href="{!! url() !!}/users/{!! $registered->username !!}">
                        <div class="hexagon"></div>
                        {!! HTML::image('images/users/'.$registered->username.'/'.$registered->photo,'shape1',array('class' =>'img-responsive')) !!}
                        <span class="image-title">{!! $registered->username !!}</span>
                     </a>
                  @endforeach
             @endif  
          </li>
        </ul>
      </div>
      </div>
      </div>
      
      <div class="col-md-6">
      <div class="invite-frd-right">
        <div class="now-onlinebg"> 
          <div class="online-heading">Now Online <div class="onlineindigater"><span class="green-signal"></span></div></div>
            <div class="online-user-bg">
              <div class="container">
                      <ul class="bxslider2">
                        <li>
                          @if($online != null)
                              @foreach($online as $on)
                                <a href="{!! url() !!}/users/{!! $on -> username !!}">
                                    <div class="images-bg">
                                        {!! HTML::image('images/users/'.$on->username.'/'.$on->photo,'user-one',array('class' => '')) !!}
                                    </div>
                                      <span class="user-name">{!! $on -> username !!}</span>
                                      <span class="user-detail"></span>
                                        @if($on -> online == 1) 
                                            <div class="user-status-detailbg"><span class="user-status-detail online"></span></div>
                                        @else
                                            <div class="user-status-detailbg"><span class="user-status-detail offline"></span></div>
                                        @endif
                                  </a>
                                @endforeach
                            @endif
                        </li>
                      </ul>
           </div>
            </div>
        </div>
        </div>
        </div>
        
        </div>
        
        
    </div>
  </div>
  <div class="invite-container">
      <div class="container">
            <div class="invite-frd-row">
              <div class="three-frd"><img src="images/three-frd.png" alt="frd"></div>
              <div class="connect-arrow"><img src="images/connect-arrow.png" alt="connect"></div>
            <a href="#" class="invite-frnbtn"><i>+</i> Invite Your Friends</a>
             <div class="connect-arrow"><img src="images/connect-arrow.png" alt="connect"></div>
            <div class="invide-social">
              <ul>
                  <li><a href="#"><i class="icon-sprite icon-rss-r"></i></a></li>
                    <li><a href="#"><i class="icon-sprite icon-fb-r"></i></a></li>
                    <li><a href="#"><i class="icon-sprite icon-twitter-r"></i></a></li>
                    <li><a href="#"><i class="icon-sprite icon-linked-r"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
  </div>
  <div class="container video-event-bg">
      <div class="row video-continer">
       
       <div class="col-md-6">
      <div class="left-video"> 
            @if($video != null)
                 <video width="580" height = "340" controls>
                      <source src="{!! url() !!}/videos/{!! $video -> video !!}" type="video/mp4">
                          Your browser does not support HTML5 video.
                  </video>
              @endif
         </div>
      </div>
      
      <div class="col-md-6">
      <div class="video-chatbg">
        <h2>Speed Dating</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
        Maecenas id congue ipsum. Quisque vehicula massa quis urna malesuada viverra.
         Proin sit amet odio urna, eu volutpat ante. Fusce eget nisi pulvinar neque venenatis aliquam. </p>
        <a href="video_chat.php" class="button red-btn">Video Chat</a> </div>
        </div>
        
    </div>
    <!-- /video-continer -->
    
    <div class="event-fbbg">
      <div class="speed-datingbg"><img src="images/speed-dating.jpg" alt="speeddating"/></div>
      <div class="upcoming-event">
       <a href="new_calendar.php"> <h3 style="color: black;">Upcoming Event</h3> </a>
        <div class="event-bg">
          <ul>
            @if($events != null)
                   @foreach($events as $event)
                      <li>
                        <div class="date-year"> <span>{!! $event->single_date !!}</span> <span>{!! $event->single_month !!}</span> </div>
                        <div class="commenter-detail-year">
                          <span>
                            <a href="{!! url() !!}/events/{!! $event -> title !!}">
                              {!! $event -> title !!}
                            </a>
                          </span> 
                          <span>{!! $event->title !!}</span> 
                          <span>{!! $event->desc !!}</span> 
                        </div>
                      </li>
                    @endforeach
              @endif
          </ul>
        </div>
      </div>
      <!-- upcoming-event-->
      
      <div class="facebook-find">
          <div class="fb-page" data-href="https://www.facebook.com/SeriousDating" data-width="293" data-height="293" data-small-header="false" data-adapt-container-width="false" data-hide-cover="true" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/SeriousDating"><a href="https://www.facebook.com/SeriousDating">seriousdatings.com</a></blockquote></div></div>
      </div>
      <div class="dating-type">
        <ul>
          <li><a href="#">Ecards <span>Lorem ipsum dolor </span></a> <span class="icon-sprite ecard-icon"></span></li>
          <li><a href="#">Background <span>Lorem ipsum dolor </span></a> <span class="icon-sprite background-icon"></span></li>
          <li><a href="phone_chat.php">Phone Chat <span>Lorem ipsum dolor </span></a> <span class="icon-sprite phone-icon"></span></li>
        </ul>
        <div class="calual-dating"><img src="images/casual-dating.jpg" alt="casul-dating"/></div>
      </div>
    </div>
  </div>
  <div class="bottom-imagesslider-bg">
    <div class="container">
      <ul class="bxslider1">
        @if($giftCards != null)
          @foreach($giftCards as $giftCard)
            <li>
              <a href="#">
                  <img src="{!! url() !!}/images/gift_cards/{!! $giftCard -> image !!}" alt="slider-profile"/>
              </a>
            </li>
          @endforeach
        @endif
      </ul>
    </div>
  </div>
</div>
@include('footer_new')
<script type="text/javascript" src="{!! url() !!}/js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="{!! url() !!}/js/jquery.selectbox-0.2.js"></script> 
<script type="text/javascript" src="{!! url() !!}/js/jquery.bxslider.js"></script> 
<script type="text/javascript">
  $(function () {
  $("#language, #gender, #lookingfor, #age, #ageto,#zipcode, #weight ").selectbox();
  });
  </script> 
<script type="text/javascript">
$('.bxslider').bxSlider({
  mode: 'fade',
  pager: false,

});
$('.bxslider1').bxSlider({
  minSlides: 7,
  maxSlides: 8,
  slideWidth: 88,
  slideMargin: 33,
   pager: false,
});

$('.bxslider2').bxSlider({
  minSlides: 1,
  maxSlides: 1,
  slideWidth: 516,
  slideMargin: 17,
   pager: false,
});

$('.bxslider3').bxSlider({
  minSlides: 1,
  maxSlides: 1,
  slideWidth: 580,
  slideMargin: 18,
  pager: false,
});

</script>
</body>
</html>
