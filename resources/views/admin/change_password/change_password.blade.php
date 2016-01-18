@extends('admin.includes.dashboard')
	@section('content')
        <div class="main-content"> 
      <!-- end: SPANEL CONFIGURATION MODAL FORM -->
      
          <div class="page-header">
            <h3>Change Password </h3>
			<h5 style="font-weight:bold;color:#c12e2a;">{!! $status !!}</h5>
          </div>
        
      </div>
	  {!! Form::open
			(
				array(
				'url' 		=> 'admin/change_password',
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
              <input type="password" class="form-control" id="password" name="oldPassword" placeholder="Enter your old password" required>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="newPassword" name="newPassword" placeholder="Enter your new password">
            </div>
            <div class="form-group">
              <input type="password" class="form-control " id="reNewPassword" name="rNewPassword" placeholder="Re-enter your new password">
            </div>
            <div>
              <input type="submit" value="Change password" class="btn btn-success">
              <input type="submit" value="Cancel" class="btn btn-danger"> 
            </div>
        </div>
      </div>
	{!! Form::close() !!}
@stop

   
