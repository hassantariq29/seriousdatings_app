@extends('admin.includes.dashboard')
	@section('content')
  <style>
    button {
        color:none;
        background:none;
        border: none;
        outline:none;
        padding: 0px;
        cursor: pointer;
        height: 0px;
    }
  </style>
    <div class="main-content"> 
      <!-- end: SPANEL CONFIGURATION MODAL FORM -->
      
      <div class="page-header">
        <h3>User Profile </h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-white">
          <div class="panel-body">
			<div class="col-xs-6 col-md-2">
				<a class="thumbnail" href="#">
					{!! HTML::image('images/users/'.$user->username.'/'.$user->photo, 'alt', array( 'class' => '')) !!}
				</a> 
			</div>   <div class="col-md-10">
            <table class="table table-bordered table-hover admin-table">
              <tbody>
                <tr>
                  <td class="text-bold" colspan="2">User Information :</td>
                </tr>
                <tr>
                  <td>Full Name</td>
                  <td>{!! $user->firstName !!} {!! $user->lastName !!} </td>
                </tr>
                <tr>
                  <td>Age </td>
                  <td>{!! $user->age !!}</td>
                </tr>
                <tr>
                  <td>Gender</td>
                  <td>{!! $user->gender !!}</td>
                </tr>
                <tr>
                  <td class="text-bold" colspan="2">Login Information :</td>
                </tr>
                <tr>
                  <td>email Address</td>
                  <td>{!! $user->email !!}</td>
                </tr>
                <tr>
                  <td>User Name </td>
                  <td>{!! $user->username !!}</td>
                </tr>
                
                
                <tr>
                  <td class="text-bold" colspan="2">Membership Information </td>
                </tr>
                <tr>
                  <td>Verified </td>
				@if($user->verified == 1)
					<td><label class="label label-success">Yes</label></td>
				@else
					<td><label class="label label-danger">No</label></td>
				@endif
                </tr>
              </tbody>
            </table>
            </div>
          </div>
        </div>
      </div>
    </div>
@stop


   
