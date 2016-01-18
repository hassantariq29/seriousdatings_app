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
        <h3>Manage Events  <a href="{!! url() !!}/admin/events/create" class="pull-right btn btn-facebook btn-sm" type="button"><i class="fa fa-plus-square"></i>&nbsp; Add Event</a></h3>
      </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-white">
            <div class="panel-body">
              @if(sizeof($events) < 1)
              <h3> No Events Exists!</h3>
              @else
              <table class="table table-bordered table-hover admin-table">
                <thead>
                  <tr>
                    <th width="5%" class="center"> <div class="table-checkbox">
                        <label>
                          <input id="selectAll" type="checkbox">
                        </label>
                      </div></th>
                    <th width="10%" >Image</th>
                    <th width="10%">Title</th>
                    <th width="20%">Description</th>
                    <th width="20%">Location</th>
					<th width="20%">Event Date</th>
					<th width="5%">Age Group</th>
					<th width="10%">Price</th>
					<th width="5%" class"text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($events as $event)
                  <tr>
                    <td class="center hidden-xs"><div class="table-checkbox">
                        <label>
                          <input type="checkbox">
                        </label>
                      </div></td>

                    <td><div class="table-img">{!! HTML::image('images/events/'.$event->image, 'alt', array( 'class' => 'img-thumbnail img-responsive')) !!}</div></td>
                    <td>{!! $event->title !!} </td>
                    
					<td>{!! $event->description !!}</td>
                    <td><div class="table-description"><p>{!! $event->location !!}</p></div></td>
					<td><div class="table-description"><p>{!! date('d F, Y', strtotime($event->fromDate)) !!} <br/> To <br/> {!! date('d F, Y', strtotime($event->toDate)) !!}</p></div></td>
					<td><div class="table-description"><p>{!! $event->ageFrom !!} To {!! $event->ageTo !!}</p></div></td>
					<td><div class="table-description"><p>$ {!! $event->charge !!}</p></div></td>
					
                    <td><div class="btn-group table-action"> <a class="btn btn-flickr btn-sm dropdown-toggle" data-toggle="dropdown"> <i class="glyphicon glyphicon-pencil"></i> Action <span class="caret"></span> </a>
                        <ul role="menu" class="dropdown-menu">
                          
                          <li><a href='events/{!! $event->id !!}/edit'> <i class="fa fa-pencil"></i> Edit</a></li>
                          <li>
                              {!! Form::open(array('url' => 'admin/events/' . $event->id, 'class' => '')) !!}
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

   
