@include('header_new')

@include('header_bottom')
</header>

    <style>
    select{
        display: block;
        height: 36px;
        left: 0;
        line-height: 36px;
        outline: none;
        overflow: hidden;
        text-indent: 10px;
        top: 0;
        width: 100%;
    }
</style>
<div class="middle inner-middle">
    <div class="inner-header upcoming-banner">
        <div class="container">
            <h1><i class="calendar-event-icon"><img src="images/upcoming-event-icon.png"  alt=""></i>Create Group</h1>
        </div>
    </div>
    <div class="inner-contendbg">

            @if (Session::has('message'))
               <div class="alert alert-info">{{ Session::get('message') }}</div>
            @endif
        <div class="container">

            <div class="row">  

{!! Form::open(
array(
    'url' => 'groups',
    'novalidate' => 'novalidate',
    'files' => true)) !!}

<div class="row">
    <h3>Group Picture:</h3>
    <div class="upload-profile">
        <div class="image-border">
            {!! HTML::image('images/profile-img.jpg', 'Profile Picture', array('id' => 'blah')) !!}
        </div>
        <div class="fileUpload button">
            <span>Upload</span>
            <input id="uploadBtn" type="file" class="upload imgInp" name="photo"/>
        </div>
    </div>

    <div class="profile-img-styling">
        <div class="select-type"><small></small></div>
            <div class="three-blocks">
            	<label>Group Type*</label>
                <select name="groupType">
                	<option value="0">Select Group Type</option>
                	<option value="Public">Public Group </option>
                	<option value="Private">Private Group </option>
                </select>


       		<div class="select-type"><small></small></div>
        	        <label>Group Name*</label>
			        <input type="text"  name="groupName" id="groupName" placeholder="Group Name"  />
			        <input type="text"  name="description" id="description" placeholder="Description"  />
			        <input type="hidden"  name="userId" id="userId" value = "{!! $data !!}" />
			        <label for="corner"><span></span></label>
            </div>


	    		
    </div>
</div>

            <div class="row" style="padding-top:10px;">
                <input type="submit" value="Create Group" class="common-red-btn button" />
                {!! Form::close() !!}

            </div>


</div></div></div></div>
@include('footer_new')