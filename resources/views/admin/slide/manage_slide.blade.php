@extends('admin.dashboard')
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
        <h3>Manage Slide  <a href="{!! url() !!}/admin/slide/create" class="pull-right btn btn-facebook btn-sm" type="button"><i class="fa fa-plus-square"></i>&nbsp; Add Slide</a></h3>
      </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-white">
            <div class="panel-body">
              @if(sizeof($slides) < 1)
              <h3> No Slides Exists!</h3>
              @else
              <table class="table table-bordered table-hover admin-table">
                <thead>
                  <tr>
                    <th width="5%" class="center"> <div class="table-checkbox">
                        <label>
                          <input id="selectAll" type="checkbox">
                        </label>
                      </div></th>
                    <th width="15%" >Title</th>
                    <th width="5%">Image</th>
                    <th width="20%">Link</th>
                    <th width="50%">Description</th>
                    <th width="5%" class"text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($slides as $slide)
                  <tr>
                    <td class="center hidden-xs"><div class="table-checkbox">
                        <label>
                          <input type="checkbox">
                        </label>
                      </div></td>

                    <td>{!! $slide->title !!} </td>
                    <td><div class="table-img">{!! HTML::image('images/slider/'.$slide->image, 'alt', array( 'class' => 'img-thumbnail img-responsive')) !!}</div></td>
                    <td>{!! $slide->link !!}</td>
                    <td><div class="table-description"><p>{!! $slide->description !!}</p></div></td>
                    <td><div class="btn-group table-action"> <a class="btn btn-flickr btn-sm dropdown-toggle" data-toggle="dropdown"> <i class="glyphicon glyphicon-pencil"></i> Action <span class="caret"></span> </a>
                        <ul role="menu" class="dropdown-menu">
                          
                          <li><a href='slide/{!! $slide->id !!}/edit'> <i class="fa fa-pencil"></i> Edit</a></li>
                          <li>
                              {!! Form::open(array('url' => 'admin/slide/' . $slide->id, 'class' => '')) !!}
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

   
