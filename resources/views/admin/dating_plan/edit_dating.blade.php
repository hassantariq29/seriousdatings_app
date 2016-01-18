@extends('admin.includes.dashboard')
	@section('content')
        <div class="main-content"> 
      <!-- end: SPANEL CONFIGURATION MODAL FORM -->
      
          <div class="page-header">
            <h3>Edit Dating Plan  <a href="{!! url() !!}/admin/dating_plans" class="pull-right btn btn-facebook btn-sm" type="button"><i class="fa fa-plus-square"></i>&nbsp; Manage Dating Plan</a></h3>
          </div>
        
      </div>
	  {!! Form::open
			(
				array(
				'url' 		=> 'admin/dating_plans/'.$plan->id,
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
          <label class="col-sm-2 control-label">Plan Name <span class="symbol required"></span></label>
          <div class="col-sm-9">
            <input type="text" class="form-control"   placeholder="Enter your plan name" name="name" value = "{!! $plan->name !!}" required >
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Plan Price <span class="symbol required"></span></label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="" placeholder="Enter plan Price" name="price" value = "{!! $plan->price !!}"required>
          </div>
        </div>
        
        <div class="form-group">
          <label class="col-sm-2 control-label">Description</label>
          <div class="col-sm-9">
            <textarea  class="form-control summernote" name="description">{!! $plan->description !!}</textarea>
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

   
