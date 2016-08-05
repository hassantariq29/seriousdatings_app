@extends('admin.includes.dashboard')
	@section('content')
        <div class="main-content"> 
      <!-- end: SPANEL CONFIGURATION MODAL FORM -->
      
          <div class="page-header">
                  <h3>Add Dating Plan  <a href="{!! url() !!}/admin/dating_plans" class="pull-right btn btn-facebook btn-sm" type="button"><i class="fa fa-plus-square"></i>&nbsp; Manage Dating Plan</a></h3>
     </div>
        
      </div>
	  {!! Form::open
			(
				array(
				'url' 		=> 'admin/dating_plans',
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
            <strong>Your detail has been submitted!</strong>Thank you </div>
          <div class="errorHandler alert alert-danger no-display alert-dismissible fade in">
            <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span></button>
            <strong>You have some form errors!</strong> Please check below. </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Plan Type <span class="symbol required"></span></label>
          <div class="col-sm-9">
            <select name="planType" class="form-control">
              <option value="0"> Select Event Category</option>
              <option value="Daily"> Daily</option>
              <option value="Monthly"> Monthly</option>
              <option value="Yearly"> Yearly</option>
            </select>  
          </div>
          </div>

          <div class="form-group">
          <label class="col-sm-2 control-label">No Of Days / Months / Years <span class="symbol required"></span></label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="" placeholder=" No Of Days / Months / Years" name="noOfDay" required>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label">Plan Name <span class="symbol required"></span></label>
          <div class="col-sm-9">
            <input type="text" class="form-control"   placeholder="Enter your plan name" name="planName" required >
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label">Plan Price <span class="symbol required"></span></label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="" placeholder="Enter plan Price" name="price" required>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label"> Discount ( % ) <span class="symbol required"></span></label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="" placeholder="Enter percentage" name="discountPercentage" required>
          </div>
        </div>


        <div class="form-group">
          <label class="col-sm-2 control-label">Description</label>
          <div class="col-sm-9">
            <textarea  class="form-control summernote" name="description"></textarea>
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

   
