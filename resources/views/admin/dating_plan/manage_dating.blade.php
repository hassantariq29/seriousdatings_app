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
                  <h3>Manage Dating Plans  <a href="{!! url() !!}/admin/dating_plans/create" class="pull-right btn btn-facebook btn-sm" type="button"><i class="fa fa-plus-square"></i>&nbsp; Add Dating Plan</a></h3>
          </div>
        
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-white">
            <div class="panel-body">
			@if(sizeof($plans) < 1)
              <h3> No Dating Plan Exists!</h3>
              @else
              <table class="table table-bordered table-hover admin-table">
                <thead>
                  <tr>
                    <th width="5%" class="center"> <div class="table-checkbox">
                        <label>
                          <input id="selectAll" type="checkbox">
                        </label>
                      </div></th>
                    
                    <th >Id</th>
                     <th >Plan Name</th>
                     <th >Price</th>
					 <th >Description</th>
					 
                   
                   
                    <th width="80px" class"text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($plans as $plan)
                  <tr>
                    <td class="center "><div class="table-checkbox">
                        <label>
                          <input type="checkbox">
                        </label>
                      </div></td>
                   
                      <td>{!! $plan->id !!}</td>
                    <td><a data-toggle="modal" data-target="#myModal" href="javascript:void(0);">{!! $plan->name !!}</a></td>
                      <td>${!! $plan->price !!}</td>
					  <td>{!! $plan->description !!}</td>
					  
                   
                  
                   
                  
                    <td><div class="btn-group table-action"> <a class="btn btn-flickr btn-sm dropdown-toggle" data-toggle="dropdown"> <i class="glyphicon glyphicon-pencil"></i> Action <span class="caret"></span> </a>
                        <ul role="menu" class="dropdown-menu">
                          <li><a href='dating_plans/{!! $plan->id !!}/edit'> <i class="fa fa-pencil"></i> Edit</a></li>
						  <li>
                              {!! Form::open(array('url' => 'admin/dating_plans/' . $plan->id, 'class' => '')) !!}
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


   
