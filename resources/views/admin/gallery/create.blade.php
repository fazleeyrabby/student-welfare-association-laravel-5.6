@extends('layouts.adminLayouts.admin_index')
@section('content')
<div class="col-md-8 col-md-offset-3">
  <div class="x_panel">
    <div class="x_title">
      <h2>Add new Gallery</h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Settings 1</a>
            </li>
            <li><a href="#">Settings 2</a>
            </li>
          </ul>
        </li>
        <li><a class="close-link"><i class="fa fa-close"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    @if(Session::has('success'))
    <div class="alert alert-success col-md-6 col-md-offset-3 col-sm-12" role="alert">
      <h2 style="text-align: center;"><b>{{ Session::get('success') }}</b></h2>
    </div>  
    @endif
    <div class="x_content">
      <br />
      {!! Form::open(['route' => 'gallery.store','files'=>true,'class'=>'form-horizontal']) !!}
        <div class="form-group">
          {!! Form::label('name', 'Program name',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
          <div class="col-md-6 col-sm-6 col-xs-12">
            {!! Form::text('pro_name','',array('class' => 'form-control col-md-7 col-xs-12', 'required' => 'required')) !!}
          </div>
        </div>
        <div class="form-group">
          {!! Form::label('description','Description',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
          <div class="col-md-9 col-sm-9 col-xs-12">
            {!! Form::textarea('description',null,['class' => 'form-control summernote', 'required'=>'required']) !!}
          </div>
        </div>
        <div class="form-group">
          {!! Form::label('img','Program image',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
          <div class=" col-md-4 col-sm-4 col-xs-12">
            <input type="file" class="form-control" name="img[]" multiple required="required">
          </div>
        </div>
        <div class="form-group">
          {!! Form::label('year','Image of Year',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
          <div class=" col-md-4 col-sm-4 col-xs-12">
            <input type="number" class="form-control" name="img_year" required="required">
          </div>
        </div>
        <div class="form-group">
          {!! Form::label('pub_status','Publication status',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
	       	<div class="col-md-4 col-sm-4 col-xs-12">
            {!! Form::select('publication_status',
              ['---Select Publication status---', 
              'Published',
              'Unpublished'],
              null,['class'=>'form-control']) !!}
	       	</div>       
        </div>
        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <button class="btn btn-primary" type="button">Cancel</button>
            <button class="btn btn-primary" type="reset">Reset</button>
            <button type="Submit" class="btn btn-success">Save Program Image</button>
          </div>
        </div>
        {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection