@include('header_new')
@include('header_bottom')

        <!-- /header -->

<div class="middle inner-middle">
    <div class="inner-header upcoming-banner">
        <div class="container">
            <h1><i class="calendar-event-icon"><img src="images/upcoming-event-icon.png"  alt=""></i>Add Music</h1>
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
                                <div><h2>Add Music</h2><hr /></div>
                                <div>

                                    <div class="row main_frm">

                                        {!! Form::open
                                          (
                                              array(
                                              'url' 		=> 'profile/music',
                                              'method' 	=> 'post',
                                              'files' 	=> true,
                                              'role' 		=> 'form',
                                              'id' 		=> 'form2'
                                              )
                                          )
                                    !!}
                                        <div class="form-group frmdiv">
                                            <label for="exampleInputName2">Tile</label><br />
                                            <input type="text" name="title" placeholder="Title" required />
                                        </div><br />

                                        <div class="form-group frmdiv">
                                            <label for="exampleInputName2">Select Music File</label><br />
                                            {!! Form::file('images[]', array('multiple'=>true, 'class' => 'file-input ImgeInput')) !!}
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

@include('footer')

