@extends('layouts.adminLayouts.admin_index')
@section('content')
<div class="col-md-8 col-md-offset-3">
  <div class="x_panel">
    <div class="x_title">
      <h2>Edit Slider</h2>
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
    <div class="x_content">
      <br />
      {!! Form::open(['route' =>[ 'about.update',$about->about_id],'files'=>true,'class'=>'form-horizontal','method'=>'PUT']) !!}
        <div class="form-group">
          {!! Form::label('heading', 'About Heading',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
          <div class="col-md-6 col-sm-6 col-xs-12">
            {!! Form::text('about_heading',$value=$about->about_heading,array('class' => 'form-control col-md-7 col-xs-12', 'required' => 'required')) !!}
          </div>
        </div>
        <div class="form-group">
          {!! Form::label('description','Description',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
          <div class="col-md-9 col-sm-9 col-xs-12">
            {!! Form::textarea('about_description',$value=$about->about_description,['class' => 'form-control summernote', 'required'=>'required']) !!}
          </div>
        </div>
        <div class="form-group">
          {!! Form::label('img','File Upload',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
          <div class=" col-md-4 col-sm-4 col-xs-12">
            {!! Form::file('about_img', ['class' => 'form-control']) !!}
          </div>
        </div>
        <div class="form-group">
          {!! Form::label('pub_status','Publication status',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
	       <div class=" col-md-4 col-sm-4 col-xs-12">
                <select name="publication_status" required class="form-control">
                  <option value="0">--Select Status--</option>
                  <option value="1" <?php if($about->publication_status == 1) echo "selected";?>>Published</option>
                  <option value="2" <?php if($about->publication_status == 2) echo "selected";?>>Unpublished</option>
                </select>
            </div>
       </div>
        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <button class="btn btn-primary" type="button">Cancel</button>
            <button class="btn btn-primary" type="reset">Reset</button>
            <button type="Submit" class="btn btn-success">Update Slider</button>
          </div>
        </div>
        {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection