@include('header_new')
@include('header_bottom')

        <!-- /header -->

<div class="middle inner-middle">
    <div class="inner-header upcoming-banner">
        <div class="container">
            <h1><i class="calendar-event-icon"><img src="images/upcoming-event-icon.png"  alt=""></i>Add Videos</h1>
        </div>
    </div>
    <div class="inner-contendbg">

        <div class="container">

            <div class="row">

                @include('new_leftsidebar')

                <div class="col-md-6" style="padding:0px">

                    <div class="middle-content-section">

                        <div class="row create_grup">

                            <div class="col-md-12">
                                <div><h2>Add Videos</h2><hr /></div>
                                <div>

                                    <div class="row main_frm">

                                        {!! Form::open
                                          (
                                              array(
                                              'url' 		 => 'profile/video',
                                              'method' 	     => 'post',
                                              'files'      	 => true,
                                              'role' 		 => 'form',
                                              'id' 		     => 'register-form',
                                              'novaidate'    => 'novalidate'
                                              )
                                          )
                                    !!}
                                        <div class="form-group frmdiv">
                                            <label for="exampleInputName2">Select Type</label><br />
                                             <select name = "video_type" id = "video_type">
                                                 <option value="default">Select Type</option>
                                                 <option value="1">Youtube</option>
                                                 <option value="0">From Computer</option>
                                             </select>
                                        </div><br />
                                        <div class="form-group frmdiv" id = "offline">

                                            <label for="exampleInputName2">Select Video(s)</label><br />
                                            {!! Form::file('images[]', array('multiple'=>true, 'class' => 'file-input ImgeInput')) !!}
                                        </div><br />
                                        <div class="form-group frmdiv" id = "online">
                                            <label for="exampleInputName2">Youtube Video Link</label><br />
                                            <input type="text" name="link" placeholder="Youtube Link">
                                        </div><br />
                                        <div >
                                            <input class="btn btn-default" type="reset" value="Cancel" style="background: #e21d24; color: #FFF;">
                                            <input class="btn btn-default" type="submit" value="Submit" style="background: #56E034; color: #FFF;">
                                        </div>

                                        {!! Form::close() !!}
                                    </div>

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
<script>

    $(document).ready(function() {
        $('#offline').hide();
        $('#online').hide();

        $('#video_type').change(function() {
            if ($(this).find(':selected').val() === '0') {

                $('#online').hide();
                $('#offline').show();
            }
            else if ($(this).find(':selected').val() === '1') {

                $('#offline').hide();
                $('#online').show();
            }
            else{

                $('#offline').hide();
                $('#online').hide();
            }
        });


    });

</script>
@include('footer')

