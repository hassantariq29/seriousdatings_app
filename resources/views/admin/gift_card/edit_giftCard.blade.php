@extends('admin.includes.dashboard')
	@section('content')
        <div class="main-content"> 
      <!-- end: SPANEL CONFIGURATION MODAL FORM -->
      
          <div class="page-header">
            <h3>Edit Gift Card  <a href="{!! url() !!}/admin/gift_cards" class="pull-right btn btn-facebook btn-sm" type="button"><i class="fa fa-plus-square"></i>&nbsp; Manage Gift Card</a></h3>
          </div>
        
      </div>
	  {!! Form::open
			(
				array(
				'url' 		=> 'admin/gift_cards/'.$card->id,
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
          <label class="col-sm-2 control-label">Gift Name<span class="symbol required"></span></label>
          <div class="col-sm-9">
            <input type="text" class="form-control"  placeholder="Enter your Gift Name"  name= "name"  value = "{!! $card->name!!}" required>
          </div>
        </div>
        
        
        <div class="form-group">
          <label class="col-sm-2 control-label">Gift Picture <span class="symbol required"></span></label>
          <div class="col-sm-3">
            <div class="file-upload">
                <input type="file" class="file-input ImgeInput" name="uploadpicture"  required/>
				
				{!! HTML::image('images/gift_cards/'.$card->image, 'alt', array( 'class' => 'targetImage')) !!}
				<div class="img">File size should be 686 x 547</div>
             </div>
          
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Gift Price<span class="symbol required"></span></label>
          <div class="col-sm-9">
            <input type="text" class="form-control"  placeholder="Enter your gift price" name="price" value = "{!! $card->price !!}" required >
          </div>
        </div>
        
        
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <input type="submit" value="Save" class="btn btn-success">
            <input type="button" value="Cancel" class="btn btn-danger">
          </div>
        </div>
      </div>
	{!! Form::close() !!}
@stop

   
