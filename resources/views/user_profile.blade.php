@include('header_new')


@include('header_bottom')


</header>
<!-- /header -->

<div class="middle inner-middle">

    <div class="inner-contendbg">

        <div class="row">
          @if(Auth::check())
                @if ($user -> role_user_status === 0)

                    <a class="btn btn-default" href="#" role="button" style="color: #FFF; background: #E21D24;float: right;margin-bottom: 10px;" id="subscribe">Subscribe</a> 
                @elseif ($user -> friend_status == 1)
                    <a class="btn btn-default" href="#" role="button" style="color: #FFF; background: #E21D24;float: right;margin-bottom: 10px;" id="removeFriendRequest">Remove Friend</a> 
                    <a class="btn btn-default" href="#" role="button" style="color: #FFF; background: #E21D24;float: right;margin-bottom: 10px;" id="message">Message</a> 
                    <a class="btn btn-default" href="#" role="button" style="color: #FFF; background: #E21D24;float: right;margin-bottom: 10px;" id="call">Call</a> 
              @else
                     <a class="btn btn-default" href="#" role="button" style="color: #FFF; background: #E21D24;float: right;margin-bottom: 10px;" id="friendRequest">Send Friend Request</a> 
             
                @endif
         @else
                  <a class="btn btn-default" href="{!! url() !!}/login" role="button" style="color: #FFF; background: #E21D24;float: right;margin-bottom: 10px;" id="login">Login To Access Services</a> 
         @endif
           
          
        </div>

        <div class="container">

            @if($user != null)

            <div class="row">

                <div class="col-md-3" style="padding:0px">

                    <div class="left-section">

                        <div class="quick-search">
                            <center> <div class="profile_pic">{!! HTML::image('images/users/'.$user->username.'/'.$user->photo,'alt_profile_pic',array( 'width' => '100%', 'height' => '100%' )) !!}</div></center>
                            <div class="prof_page">
                                <ul>
                                    <li><a href="{!! url() !!}/users/{!! $user -> username !!}">Profile</a></li>
                                     @if ($user -> role_user_status === 1 && $user -> friend_status == 1)
                                         <li><a href="{!! url() !!}/users/{!! $user -> username !!}/photos">Pictures</a></li>
                                         <li><a href="{!! url() !!}/users/{!! $user -> username !!}/videos">Videos</a></li>
                                     @endif
                                </ul>
                            </div>

                        </div>


                                         </div>

                </div>




                <div class="col-md-9" style="padding:0px">


                    <div class="middle-content-section">

                        <div class="prof_cntent">

                            <div><h2 style="color:#E21D24;">Profile:</h2></div>

                            <div class="row" style="margin:0;padding:0">

                                <div class="col-md-6">
                                    <ul>
                                        <li><label>FirstName:</label><span>{!! $user->firstName !!}</span></li>
                                        <li><label>Email:</label><span>{!! $user->email !!}</span></li>
                                        <li><label>Relatioship goal:</label><span>{!! $user->relationshipGoal !!}</span></li>
                                        <li><label>Occupation:</label><span>{!! $user->occupation !!}</span></li>
                                        <li><label>Income:</label><span>${!! $user->income !!}</span></li>
                                        <li> <label> Have children?:</label><span>{!! $user->haveChildren !!}</span></li>
                                        <li><label> Own a car?:</label><span>{!! $user->doYouOwnACar !!}</span></li>
                                        <li> <label>Ambitious are you?:</label><span>{!! $user->howAmbitiousAreYou !!}</span></li>
                                        <li> <label>Longest relationship you have:</label><span>{!! $user->whatIsTheLongestRelationshipYouHaveBeenIn !!}</span></li>
                                        <li><label> Drugs?:</label><span>{!! $user->drugs !!}</span></li>
                                        <li><label> Hair color?:</label><span>{!! $user->hairColor !!}</span></li>
                                        <li><label> Hair style:</label><span>{!! $user->hairStyle !!}</span></li>
                                        <li><label> Smoke?:</label><span>{!! $user->smoke !!}</span></li>
                                        <li><label> Drink?:</label><span>{!! $user->drink !!}</span></li>
                                        <li><label> Excercise?:</label><span>{!! $user->excerciseSchedule !!}</span></li>
                                        <li><label> What excercise :</label><span>{!! $user->excercise !!}</span></li>

                                    </ul>

                                </div>

                                <div class="col-md-6">
                                    <ul>
                                        <li><label>LastName:</label><span>{!! $user->lastName !!}</span></li>
                                        <li><label>About your job:</label><span>{!! $user->jobAndJobSchedule !!}</span></li>
                                        <li><label>Social situation:</label><span>{!! $user->yourSocialSituation !!}</span></li>
                                        <li> <label>On any medication?:</label><span>{!! $user->areYouOnAnyMedication !!}</span></li>
                                        <li><label>My partner's dependability?:</label><span>{!! $user->partnerDependability !!}</span></li>
                                        <li><label>Relationship is sexual compatibility:</label><span>{!! $user->sexualCompatibility !!}</span></li>
                                        <li><label> Eye color?:</label><span>{!! $user->eyeColor !!}</span></li>
                                        <li><label> Height:</label><span>{!! $user->height !!}</span></li>
                                        <li><label> Body type?:</label><span>{!! $user->bodyType !!}</span></li>
                                        <li><label> Zodic sign?:</label><span>{!! $user->zodicSign !!}</span></li>
                                        <li><label> Laguage do you speak?:</label><span>{!! $user->language !!}</span></li>
                                        <li><label> Your ethnicity? :</label><span>{!! $user->ethnicity !!}</span></li>
                                        <li><label> Education level?:</label><span>{!! $user->educationLevel !!}</span></li>
                                        <li><label> Religiouse you do beliefs?:</label><span>{!! $user->religiousBeliefs !!}</span></li>
                                    </ul>

                                </div>

                            </div>



                        </div>

                    </div>

                </div>













            </div>
      @else
                <h3>Sorry No User Found</h3>
    @endif
        </div>

    </div>


</div>
</div>


<script>
    $(document).ready(function()
    {

        



        $('#removeFriendRequest').on('click', function (e) {
            
            
            var user_id = "{!! $user -> user_id !!}";
            var friend_id = "{!! $user -> friend_id !!}";
            
            var dataToSend =  '{ "data" : [' +
                        '{ "action":"removeFriendRequest" , "user_id":"'+user_id +'" , "friend_id":"'+friend_id +'" } ]}';
            
            var obj = JSON.parse(dataToSend);
            
            console.log(obj);
            $.ajax({
                url: 'ajax/profile',
                type: 'GET',
                data: {'data' : obj},
                success: function(ajax_result){
                    location.reload();
                }
            })
                    .done(function() {

                    })
                    .fail(function() {

                    });
        });

        $('#friendRequest').on('click', function (e) {
            
            
            var user_id = "{!! $user -> user_id !!}";
            var friend_id = "{!! $user -> friend_id !!}";
            
            var dataToSend =  '{ "data" : [' +
                        '{ "action":"sendRequest" , "user_id":"'+user_id +'" , "friend_id":"'+friend_id +'" } ]}';
            
            var obj = JSON.parse(dataToSend);
            
            console.log(obj);
            $.ajax({
                url: 'ajax/profile',
                type: 'GET',
                data: {'data' : obj},
                success: function(ajax_result){
                    location.reload();
                }
            })
                    .done(function() {

                    })
                    .fail(function() {

                    });
        });
    });
</script>
<!-- /middle -->
@include('footer')
