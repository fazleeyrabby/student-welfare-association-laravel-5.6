@extends('layouts.adminLayouts.admin_index')
@section('content')
<div class="col-md-8 col-md-offset-3">
  <div class="x_panel">
    <div class="x_title">
      <h2>Create new Constitution info</h2>
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
      {!! Form::open(['route' => 'constitution.store','files'=>true,'class'=>'form-horizontal']) !!}
        <div class="form-group">
          {!! Form::label('heading', 'Constitution Heading',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
          <div class="col-md-6 col-sm-6 col-xs-12">
            {!! Form::text('constitution_heading','',array('class' => 'form-control col-md-7 col-xs-12', 'required' => 'required')) !!}
          </div>
        </div>
         <div class="form-group">
          {!! Form::label('description','Description',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
          <div class="col-md-9 col-sm-9 col-xs-12">
            {!! Form::textarea('constitutiont_description',null,['class' => 'form-control summernote', 'required'=>'required']) !!}
          </div>
        </div>
        <div class="form-group">
          {!! Form::label('img','File Upload',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
          <div class=" col-md-4 col-sm-4 col-xs-12">
            {!! Form::file('filetoupload', ['class' => 'form-control']) !!}
          </div>
        </div>
        <div class="form-group">
          {!! Form::label('publication_status','Publication status',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
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
            <button type="Submit" class="btn btn-success">Save Constitution info</button>
          </div>
        </div>
        {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection