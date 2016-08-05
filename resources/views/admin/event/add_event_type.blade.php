@extends('admin.includes.dashboard')
	@section('content')
        <div class="main-content"> 
      <!-- end: SPANEL CONFIGURATION MODAL FORM -->
      
          <div class="page-header">
            <h3>Add Event  <a href="{!! url() !!}/admin/events" class="pull-right btn btn-facebook btn-sm" type="button"><i class="fa fa-plus-square"></i>&nbsp; Manage Event</a></h3>
          </div>
        
      </div>
	  {!! Form::open
			(
				array(
				'url' 		=> 'admin/events/type',
				'method' 	=> 'post',
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
          <label class="col-sm-2 control-label">Event Category Name <span class="symbol required"></span></label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="categoryName" placeholder="Event Category Name" required>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Age (Men) <span class="symbol required"></span></label>
          <div class="col-sm-9">
          <div class="row">
          <div class="col-sm-6">
           <input type="text" class="form-control" placeholder="From" name="ageFromMale" id="fromAge" required>
            </div>
            <div class="col-sm-6">
            <input type="text" class="form-control" placeholder="To" name="ageToMale" id="toAge" required>
             </div>
             </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Age (Women) <span class="symbol required"></span></label>
          <div class="col-sm-9">
          <div class="row">
          <div class="col-sm-6">
           <input type="text" class="form-control" placeholder="From" name="ageFromFemale" id="fromAge" required>
            </div>
            <div class="col-sm-6">
            <input type="text" class="form-control" placeholder="To" name="ageToFemale" id="toAge" required>
             </div>
             </div>
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

   
