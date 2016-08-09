
<div class="col-md-3" style="padding:0px">

    <div class="left-section">

        <div>
            <a class="btn btn-default" href="{!! url() !!}/profile/datingPlan" role="button" style="color: #FFF; background: #E21D24;font-weight: bold;font-size: 20px;width: 100%;">Choose your dating plan</a>
        </div>

        <div class="quick-search">
            <h2>Quick Serach</h2>
            <div class="quick-search-form">
                {!!  Form::open(array('action' => 'SearchController@postIndex','method' => 'POST','target' => '_blank')) !!}
                <div class="quick-search-row">
                    <div class="quick-half-cols">
                        <label>I am :</label>
                        <select name="myGender" id="gender" required>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="quick-half-cols float-right">
                        <label>Seeking a</label>
                        <select name="gender" id="lookingfor" required>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                </div>
                <div class="quick-search-row">
                    <label>Between Age:</label>
                    <div class="quick-half-cols">
                        <input type="text" name = "age_from" class="textbox1" placeholder="Age From" required />
                    </div>
                    <div class="quick-half-cols float-right">
                        <input type="text" name = "age_to" class="textbox1" placeholder="Age To" required/>
                    </div>
                </div>
                <div class="quick-search-row">
                    <label>Zip Code</label>
                    <input type="text" name = "zipcode" class="textbox1" placeholder="Zip Code" required/>
                </div>
                <div class="quick-search-row">
                    <label>Within Miles</label>
                    <input type="number" name = "range" class="textbox1" placeholder="Range Of Miles" required/>
                </div>
                <div class="quick-search-row">
                    <input type="submit" value="Search Now" class="comman-btn"/></a>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
        <div class="serious-method">
            <div class="connect-with-left">
                <a href="phone_chat.php">
                    <div class="serious-icons">
                        {!! HTML::Image("images/phone-chat-icon.png" ,"") !!}

                    </div>
                    <h2>Phone Chat</h2>
                </a> </div>
            <div class="connect-with-left float-right"> <a href="#">
                    <div class="serious-icons">

                        {!! HTML::Image("images/video-chat-icon.png" ,"") !!}

                        </div>
                    <h2>Video Chat</h2>
                </a> </div>
            <div class="connect-with-left"> <a href="#">
                    <div class="serious-icons">{!! HTML::Image("images/serious-dating-icon.png" ,"") !!}</div>
                    <h2>Serious Dating</h2>
                </a> </div>
            <div class="connect-with-left float-right"> <a href="#">
                    <div class="serious-icons">{!! HTML::Image("images/vi-iconrtual-gift.png" ,"") !!}</div>
                    <h2>Virtual Gift</h2>
                </a> </div>
            <div class="connect-with-left"> <a href="#">
                    <div class="serious-icons">{!! HTML::Image("images/serious-vecation-icon.png" ,"") !!}</div>
                    <h2>Serious Vacation</h2>
                </a> </div>
            <div class="connect-with-left float-right"> <a href="bg_check.php">
                    <div class="serious-icons">{!! HTML::Image("images/background-check-icon.png" ,"") !!}</div>
                    <h2>background Check</h2>
                </a> </div>

            <div class="row" style="margin-left: -5px;">
                <div class="connect-with-left float-right" style="margin-left: 8px;"> <a href="{!! url() !!}/events">
                        <div class="serious-icons">{!! HTML::Image("images/background-check-icondating.png" ,"") !!}</div>
                        <h2>Upcoming <br /> Events</h2>
                    </a> </div>

                <div class="connect-with-left float-right" style="margin-right:-5;"> <a href="#">
                        <div class="serious-icons">{!! HTML::Image("images/background-check-iconthreefriends.png" ,"") !!}</div>
                        <h2><i>+</i>Invite Your Friends</h2>
                    </a> </div>
            </div>

            <div class="row" style="margin-left: -5px;">

                <div class="connect-with-left float-right" style="margin-left: 6px;"> <a href="{!! url() !!}/users/{!! Auth::user()->username !!}/compatability">
                        <div class="serious-icons">{!! HTML::Image("images/love_compatible-icon.png" ,"") !!}</div>
                        <h2>Love Compatibility</h2>
                    </a> </div>

                <div class="connect-with-left float-right" style="margin-left: 8px;"> <a href="{!! url() !!}/groups">
                        <div class="serious-icons">{!! HTML::Image("images/group-icon.png" ,"") !!}</div>
                        <h2>Groups</h2>
                    </a> </div>

            </div>

        </div>
        <div class="travel-option profile-managment">
            <h2>Profile management</h2>
            <ul class="package">
                <li> <a href="{!! url() !!}/profile/photo">My Photo</a> </li>
                <li> <a href="{!! url() !!}/profile/music">My Music</a> </li>
                <li> <a href="{!! url() !!}/profile/video">My Video </a> </li>
                <li><a href="{!! url() !!}/profile/groups/create">Create Groups</a></li>
            </ul>
        </div>
    </div>

</div>
    
     
    
