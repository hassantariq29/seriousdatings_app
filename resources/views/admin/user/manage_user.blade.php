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
            <h3>Manage User </h3>
          </div>
        
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-white">
            <div class="panel-body">
			 @if(sizeof($users) < 1)
              <h3> No User Exists!</h3>
              @else
              <table class="table table-bordered table-hover admin-table">
                <thead>
                  <tr>
                    <th width="5%" class="center"> <div class="table-checkbox">
                        <label>
                          <input id="selectAll" type="checkbox">
                        </label>
                      </div></th>
                    
                    <th >User Name</th>
                     <th >Real Name</th>
                     <th >Verified</th>
                    <th width="80px" class"text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                  <tr>
                    <td class="center"><div class="table-checkbox">
                        <label>
                          <input type="checkbox">
                        </label>
                      </div></td>
                   
                   
                    <td>{!! $user->username !!}</td>
                    <td>{!! $user->firstName !!} {!! $user->lastName !!} </td>
					@if($user->verified == 1)
						<td><label class=" label label-success">Yes</label></td>
					@else
						<td><label class=" label label-danger">No</label></td>
					@endif
                    <td><div class="btn-group table-action"> <a class="btn btn-flickr btn-sm dropdown-toggle" data-toggle="dropdown"> <i class="glyphicon glyphicon-pencil"></i> Action <span class="caret"></span> </a>
                        <ul role="menu" class="dropdown-menu">
                          <li><a href='users/{!! $user->id !!}'> <i class="fa fa-eye"></i> View</a></li>
						  <li>
                              {!! Form::open(array('url' => 'admin/users/' . $user->id, 'class' => '')) !!}
                                {!! Form::hidden('_method', 'DELETE') !!}
                                {!! Form::button('<i class="fa fa-trash-o"></i> Delete', array('type' => 'submit')) !!}
                             {!! Form::close() !!}
                          </li>
                        </ul>
                      </div></td>
                  </tr>
				  @endforeach
                </tbody>
              </table>
			  @endif
            </div>
          </div>
        </div>
      </div>

@stop


   
