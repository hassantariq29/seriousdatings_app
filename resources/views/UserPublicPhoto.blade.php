@include('header_new')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"
      crossorigin="anonymous"/>


{!! HTML::style('css/jBox.css') !!}

<style type="text/css">

    .pic_gallery
    {margin: 0px !important;padding: 0px !important;}

    .pic_gallery img{
        width:100%;
        height:100%;
        margin:0;
        padding:0;
        float:left;
        border: 2px solid #EFEFEF;

    }

</style>

@include('header_bottom')

        <!-- /header -->

<div class="middle inner-middle">
    <div class="inner-header upcoming-banner">
        <div class="container">
            <h1><i class="calendar-event-icon"><img src="images/upcoming-event-icon.png"  alt=""></i>My Photos</h1>
        </div>
    </div>
    <div class="inner-contendbg">


    	  <div class="row">
			<a class="btn btn-default" href="{!! url() !!}/users/{!! $data['username'] !!}" role="button" style="color: #FFF; background: #E21D24;float: right;margin-bottom: 10px;">Back</a> 
		  </div>

        <div class="container">

            <div class="row">

              

                <div class="col-md-3" style="padding:0px">

                    <div class="left-section">

                        <div class="quick-search">
                            <center> <div class="profile_pic">{!! HTML::image('images/users/'.$data['username'].'/'.$data['profile_pic'],'alt_profile_pic',array( 'width' => '100%', 'height' => '100%' )) !!}</div></center>
                            <div class="prof_page">
                                <ul>
                                         <li><a href="{!! url() !!}/users/{!! $data['username'] !!}/photos">Pictures</a></li>
                                         <li><a href="{!! url() !!}/users/{!! $data['username'] !!}/videos">Videos</a></li>
                                     
                                </ul>
                            </div>

                        </div>


                                         </div>

                </div>



                <div class="col-md-6" style="padding:0px">

                    <div class="middle-content-section">

                        <div class="row">

                            <div class="col-md-12">
                                <div><h3 style="margin: 5%; color: #e21d24;font-style: italic;">My Photos</h3></div>

                                
									<div class="container">


                                    <div class="row pic_gallery">
                                       @if(count($data['pictures']) > 0 )
                                        @foreach($data['pictures'] as $photo)
                                        <div class="col-md-3">
                                            {!! HTML::image('images/users/'.$data['username'].'/pictures/'.$photo -> image,'Images',array( 'class' => 'jbox-img img-responsive')) !!}
                                        </div>
                                        @endforeach
@else
<h4> No Pictures Found </h4>
@endif

                                    </div>


                                </div>

                                <div class="jbox-container">
                                    <div class="img-alt-text"></div>
                                    <img src="" />
                                    <svg version="1.1" class="jbox-prev" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 306 306" xml:space="preserve">
            <g>
                <g id="chevron-right">
                    <polygon points="211.7,306 247.4,270.3 130.1,153 247.4,35.7 211.7,0 58.7,153" />
                </g>
            </g>
        </svg>
        <svg version="1.1" class="jbox-next" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 306 306" xml:space="preserve">
            <g>
                <g id="chevron-right">
                    <polygon points="94.35,0 58.65,35.7 175.95,153 58.65,270.3 94.35,306 247.35,153" />
                </g>
            </g>
        </svg>
        <svg version="1.1" class="jbox-close" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
            <path d="M512,51.75L460.25,0L256,204.25L51.75,0L0,51.75L204.25,256L0,460.25L51.75,512L256,307.75L460.25,512L512,460.25
	L307.75,256L512,51.75z" />
        </svg>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

               @include('right_sidebar')

            </div>

        </div>

    </div>

</div>
</div>

<!-- /middle -->
@include('footer')

{!! HTML::script('js/jquery.min.js') !!}
{!! HTML::script('js/jBox-min.js') !!}

<script>
    var gallery = new jBox();
</script>
