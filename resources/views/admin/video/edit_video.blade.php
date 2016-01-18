@extends('admin.includes.dashboard')
	@section('content')
        <div class="main-content"> 
      <!-- end: SPANEL CONFIGURATION MODAL FORM -->
      
          <div class="page-header">
            <h3>Add Video  <a href="{!! url() !!}/admin/videos" class="pull-right btn btn-facebook btn-sm" type="button"><i class="fa fa-plus-square"></i>&nbsp; Manage Videos</a></h3>
          </div>
        
      </div>
	  {!! Form::open
			(
				array(
				'url' 		=> 'admin/videos/'.$video->id,
				'method' 	=> 'put',
				'files' 	=> true,
				'role' 		=> 'form',
				'id' 		=> 'form2'
				)
			)
	  !!}
         <div class="form-horizontal">
      <div class="">
          <div class="successHandler alert alert-success no-display alert-dismissible fade in">
            <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span></button>
            <strong>Your detail has been submitted!</strong>Thank you </div>
          <div class="errorHandler alert alert-danger no-display alert-dismissible fade in">
            <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span></button>
            <strong>You have some form errors!</strong> Please check below. </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Title <span class="symbol required"></span></label>
          <div class="col-sm-9">
            <input type="text" class="form-control"   placeholder="Enter your title" name="title" value = "{!! $video->title !!}" required >
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Link <span class="symbol required"></span></label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="" placeholder="www.exaple.com" name="link" value = "{!! $video->link !!}"required>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Upload Video <span class="symbol required"></span></label>
          <div class="col-sm-9">
            <div class="file-upload">
                <input type="file" name="uploadpicture" accept="video/*"  class="file-input ImgeInput" id="uploadpicture" required />
                {!! HTML::image('images/uploadvid.png', 'alt', array( 'class' => 'targetImage')) !!}
		     </div>
          
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Description</label>
          <div class="col-sm-9">
            <textarea  class="form-control summernote" name="description">{!! $video->description !!}</textarea>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <input type="submit" value="Submit" class="btn btn-success">
            <input type="button" value="Cancel" class="btn btn-danger">
          </div>
        </div>
      </div>
	{!! Form::close() !!}
@stop

   
