@extends('admin.includes.dashboard')
	@section('content')
        <div class="main-content"> 
      <!-- end: SPANEL CONFIGURATION MODAL FORM -->
      
          <div class="page-header">
            <h3>Edit Event  <a href="{!! url() !!}/admin/events" class="pull-right btn btn-facebook btn-sm" type="button"><i class="fa fa-plus-square"></i>&nbsp; Manage Event</a></h3>
          </div>
        
      </div>
	  {!! Form::open
			(
				array(
				'url' 		=> 'admin/events/'.$event->id,
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
            <strong>You have some form errors!</strong> Please check below. </div>
          <div class="errorHandler alert alert-danger no-display alert-dismissible fade in">
            <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span></button>
            <strong>You have some form errors!</strong> Please check below. </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Title <span class="symbol required"></span></label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="title" placeholder="Enter your title" value = "{!! $event->title !!}" required>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Location <span class="symbol required"></span></label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="eventlocation" name="location" placeholder="Enter Event Location" value = "{!! $event->location !!}" required>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Date <span class="symbol required"></span></label>
          <div class="col-sm-9">
          <div class="row">
          <div class="col-sm-6">
           <input type="text" class="form-control frm_datepicker" placeholder="From" id="fromDate" name="fromDate" value = "{!! $event->fromDate !!}" required>
            </div>
            <div class="col-sm-6">
          <input type="text" class="form-control frm_datepicker" placeholder="To" id="toDate" name="toDate" value = "{!! $event->toDate !!}" required>
             </div>
             </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Upload Picture <span class="symbol required"></span></label>
          <div class="col-sm-9">
            <div class="file-upload">
                <input type="file" class="file-input ImgeInput" name="uploadpicture" id="uploadpicture" accept="image/*" required/>
                 {!! HTML::image('images/events/'.$event->image, 'alt', array( 'class' => 'targetImage', 'name' => 'uploadpicture')) !!}
			</div>
          
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Age <span class="symbol required"></span></label>
          <div class="col-sm-9">
          <div class="row">
          <div class="col-sm-6">
           <input type="text" class="form-control" placeholder="From" name="fromAge" id="fromAge" value = "{!! $event->ageFrom !!}" required>
            </div>
            <div class="col-sm-6">
            <input type="text" class="form-control" placeholder="To" name="toAge" id="toAge" value = "{!! $event->ageTo !!}" required>
             </div>
             </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Description</label>
          <div class="col-sm-9">
            <textarea  class="form-control summernote" name="description">{!! $event->description !!}</textarea>
          </div>
        </div>
		 <div class="form-group">
          <label class="col-sm-2 control-label">Price <span class="symbol required"></span></label>
          <div class="col-sm-9">
            <input type="number" class="form-control" id="price" name="price" placeholder="Enter Event Charges" value = "{!! $event->charge !!}"required>
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

   
