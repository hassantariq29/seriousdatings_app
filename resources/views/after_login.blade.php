@include('header_new')

{!! HTML::style('css/rotate_slider.css') !!}

{!! HTML::script('js/mg.js') !!}
{!! HTML::script('js/jquery.min.js') !!}
<!-- <script src="jquery-1.7.min.js" type="text/javascript"></script> -->
{!! HTML::script('js/jquery.transform.min.js') !!}
{!! HTML::script('js/jquery.bez.min.js') !!}
<script type="text/javascript">
    // bezier animations
    var bez = $.bez([.19, 1, .22, 1]);
    var bezcss = ".19,1,.22,1";
    /* Get css3 transition and transform prefixes */
    function mg_getProperty(arr0, arr1) {
        var tmp = document.createElement("div");
        for (var i = 0, len = arr0.length; i < len; i++) {
            tmp.style[arr0[i]] = 500;
            if (typeof tmp.style[arr0[i]] == 'string') {
                return {
                    js: arr0[i],
                    css: arr1[i],
                    jsEnd: arr2[i]
                };
            }
        }
        return null;
    }
    function mg_getTransition() {
        var arr0 = ["transition", "msTransition", "MozTransition", "WebkitTransition", "OTransition", "KhtmlTransition"];
        var arr1 = ["transition", "-ms-transition", "-moz-transition", "-webkit-transition", "-o-transition", "-khtml-transition"];
        var arr2 = ["transitionend", "MSTransitionEnd", "transitionend", "webkitTransitionEnd", "oTransitionEnd", "khtmlTransitionEnd"];
        return mg_getProperty(arr0, arr1, arr2);
    }
    function mg_getTransform() {
        var arr0 = ["transform", "msTransform", "MozTransform", "WebkitTransform", "OTransform", "KhtmlTransform"];
        var arr1 = ["transform", "-ms-transform", "-moz-transform", "-webkit-transform", "-o-transform", "-khtml-transform"];
        return mg_getProperty(arr0, arr1, []);
    }
    function mg_getPerspective() {
        var arr0 = ["perspective", "msPerspective", "MozPerspective", "WebkitPerspective", "OPerspective", "KhtmlPerspective"];
        var arr1 = ["perspective", "-ms-perspective", "-moz-perspective", "-webkit-perspective", "-o-perspective", "-khtml-perspective"];
        return mg_getProperty(arr0, arr1, []);
    }
    var transition = mg_getTransition();
    var transform = mg_getTransform();
    var perspective = mg_getPerspective();

</script>

@include('header_bottom')


</header>
<!-- /header -->

<div class="middle inner-middle">
    <div class="inner-header upcoming-banner">
        <div class="container">
            <h1><i class="calendar-event-icon"><img src="images/upcoming-event-icon.png"  alt=""></i>My Profile</h1>
        </div>
    </div>
    <div class="inner-contendbg">

        <div class="container">

            <div class="row">

                @include('new_leftsidebar')


                <div class="col-md-6" style="padding:0px">


                    <div class="middle-content-section">

                        <div class="row rotated-sloider">

                            <div style="display: block; position: relative;padding:10%;padding-top: 0px;">
                                <?php $i = 0;?>
                                @foreach($data['all_users'] as $single_user)

                                <div id="example9-item-{!! $i !!}">
                                    <a href="/seriousdatings_app/public/users/{!! $single_user->username !!}">
                                        {!! HTML::image('images/users/'.$single_user->username.'/'.$single_user->photo,'alt_profile_pic',array( 'class' => 'img-circle img-responsive')) !!}
                                    </a>
                                </div>
                                        <?php $i++ ?>
                                @endforeach
                                <div style="clear: both;">
                                </div>
                            </div>


                            <div style="clear: both; height: 200px;">
                            </div>
                            <div style="padding-top:50px;padding-left:10%;margin-bottom: 10%;;">
                                <table width="800px">
                                    <tr>
                                        <td style="veritical-align:top"> <input id="example9-click-prev"  type="button" class="button" value="<" /> </td>

                                        <td style="veritical-align:top"> <input  id="example9-click-next"  type="button" class="button" value=">" /></td>
                                    </tr>
                                </table>
                            </div>


                        </div>


                        <div class="upcoming-event-people">
                            
                            @foreach($data['friends'] as $friend)
                            <div class="upcoming-people-row">
                                <div class="left-upcoming-user">
                                    {!! HTML::image('images/users/'.$friend -> username.'/'.$friend -> photo,'alt_profile_pic',array( 'width' => '90', 'height' => '90' )) !!}
                                </div>
                                <div class="upcoming-user-list">
                                    <h2>{!! $friend -> firstName !!} {!! $friend -> lastName !!}</h2>
                                    <ul>
                                        <li>
                                            <a href="{!! url() !!}/users/{!! $friend -> username !!}/mail">
                                                {!! HTML::Image('images/msg-icon.png',"") !!}
                                            </a>
                                        </li>
                                        <li>
                                             <a href="{!! url() !!}/users/{!! $friend -> username !!}/chat">
                                                {!! HTML::Image('images/chat-icon.png',"") !!}
                                            </a>
                                        </li>
                                        <li>
                                             <a href="{!! url() !!}/users/{!! $friend -> username !!}/videoCall">
                                                {!! HTML::Image('images/video-icon.png',"") !!}
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{!! url() !!}/users/{!! $friend -> username !!}/voiceCall">
                                                {!! HTML::Image('images/call-icon.png',"") !!}
                                            </a>
                                        </li>
                                    </ul>
                                    <p>{!! $friend -> formatted_address !!}</p>
                                </div>
                            </div>
                            @endforeach
                           
                        </div>

                    </div>


                </div>


                <div class="col-md-3 right_sbar" style="background:#DDD !important;padding-top:10px;margin-top:10px">


                    @include('right_sidebar')

                    <div class="advertise-here" style="margin:0px;margin-bottom:10px">
                        <h2>Advertise here</h2>
                        <div class="advivertise-inner">
                            <div class="advertise-left">
                                <div class="advertise-img"><img src="images/advertise-img.png" class="img-responsive" alt=""></div>
                                <div class="advertise-user-detail">
                                    <h4>Alia Bhutt</h4>
                                    <span>Age: 21</span>
                                    <p>Lorem Lipsum</p>
                                    <ul>
                                        <li><a href="#"><img src="images/facebook-icon.png" class="img-responsive"  alt=""></a></li>
                                        <li><a href="#"><img src="images/skype-icon.png" class="img-responsive" alt=""></a></li>
                                        <li><a href="#"><img src="images/twitter-icon.png" class="img-responsive" alt=""></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="advertise-left float-right">
                                <div class="advertise-img"><img src="images/advertise-img.png" class="img-responsive" alt=""></div>
                                <div class="advertise-user-detail">
                                    <h4>Alia Bhutt</h4>
                                    <span>Age: 21</span>
                                    <p>Lorem Lipsum</p>
                                    <ul>
                                        <li><a href="#"><img src="images/facebook-icon.png" class="img-responsive" alt=""></a></li>
                                        <li><a href="#"><img src="images/skype-icon.png" class="img-responsive"  alt=""></a></li>
                                        <li><a href="#"><img src="images/twitter-icon.png" class="img-responsive" alt=""></a></li>
                                    </ul>
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


<script type="text/javascript">


    var example9 = new Mg({
        reference: "example9",
        click: {
            activated: [6],
            cycle: true,
            interactive: true,
            multiLess: 7, multiPlus: 7,
            scrollWheel: true, dragWheel: true
        }
    });
    example9.click.onEvent = function () {
        var arr = this.multiActivated;
        var alpha = Math.PI * 2 / (arr.length);
        var xradius = 160;
        var yradius = 80;
        for (var i = 0; i < arr.length; i++) {
            var path = $("#" + this.reference + "-item-" + arr[i]);
            if (arr[i] == this.activated) {
                var depth = 0;
            } else {
                var depth = example9.mapDistanceReverse(this.multiPlus, i, arr.length, 0);
            }
            //
            var theta = alpha * (this.activated - arr[i] - depth /9) + 1.6; // -depth/6 will give additional distance based on depth: it gives space for activated
            var x = 10 + xradius + Math.cos(theta) * xradius;
            var y = yradius + Math.sin(theta) * yradius;
            var w = h = y / 2;
            var scale = 0.4 + y / 120;
            if (arr[i] == this.activated) { scale = 1.5; y -= 50; }
            path.clearQueue().stop().css("z-index", Math.round(y / 4));
            if (perspective && transition) {
                path.css(transition.css, transform.css + " 1.3s cubic-bezier(" + bezcss + ")");
                path.css(transform.css, "translate3d(" + x + "px," + y + "px,0) scale(" + scale + ")");
            } else {
                path.animate({ transformJ: 'translate(' + x + ',' + y + ') scale(' + scale + ')' }, { queue: true, duration: 1300, specialEasing: { transformJ: bez} });
            }
        }
        $("#" + this.reference + "-item-" + this.deactivated).removeClass("active");
        $("#" + this.reference + "-item-" + this.activated).addClass("active").css("z-index", 100);
    }

    example9.click.scrollClick = function () {
        var path = $("#" + this.reference + "-click-scrollIn");
        path.addClass("active");
    }
    example9.click.scrollMove = function () {
        var path = $("#" + this.reference + "-click-scrollIn");
        if (perspective && transition) {
            path.css(transition.css, transform.css + " 0s");
            path.css(transform.css, "translate3d(" + this.scrollPosition + "px,0,0)");
        } else {
            path.clearQueue().stop().animate({ left: this.scrollPosition }, { queue: true, duration: 0, specialEasing: { left: bez} });
        }
    }
    example9.click.scrollRelease = function () {
        var path = $("#" + this.reference + "-click-scrollIn");
        path.removeClass("active");
        if (perspective && transition) {
            path.css(transition.css, transform.css + " 1.2s cubic-bezier(" + bezcss + ") 0s");
            path.css(transform.css, "translate3d(" + this.scrollPosition + "px,0,0)");
        } else {
            path.clearQueue().stop().animate({ left: this.scrollPosition }, { queue: true, duration: 300, specialEasing: { left: bez} });
        }
    }
    example9.click.dragMove = function () {
        var path = $("#" + this.reference + "-click-dragIn");
        if (perspective && transition) {
            path.css(transition.css, transform.css + " 0s");
            path.css(transform.css, "translate3d(" + this.dragPosition + "px,0,0)");
        } else {
            path.clearQueue().stop().animate({ left: this.dragPosition }, { queue: true, duration: 0, specialEasing: { left: bez} });
        }
    }
    example9.click.dragRelease = function () {
        var path = $("#" + this.reference + "-click-dragIn");
        if (perspective && transition) {
            path.css(transition.css, transform.css + " 1.2s cubic-bezier(" + bezcss + ") 0s");
            path.css(transform.css, "translate3d(" + this.dragPosition + "px,0,0)");
        } else {
            path.clearQueue().stop().animate({ left: this.dragPosition }, { queue: true, duration: 300, specialEasing: { left: bez} });
        }
    }

    example9.init();

</script>

</body>
</html>