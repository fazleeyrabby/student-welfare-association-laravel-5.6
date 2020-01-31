@extends('layouts.adminLayouts.admin_index')
@section('content')
<div class="col-md-8 col-md-offset-3">
  <div class="x_panel">
    <div class="x_title">
      <h2>Edit Gallery</h2>
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
      {!! Form::open(['route' =>[ 'gallery.update',$gallery->gallery_id],'files'=>true,'class'=>'form-horizontal','method'=>'PUT']) !!}
        <div class="form-group">
          {!! Form::label('name', 'Gallery Name',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
          <div class="col-md-6 col-sm-6 col-xs-12">
            {!! Form::text('pro_name',$value=$gallery->pro_name,array('class' => 'form-control col-md-7 col-xs-12', 'required' => 'required')) !!}
          </div>
        </div>
        <div class="form-group">
          {!! Form::label('description','Description',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
          <div class="col-md-9 col-sm-9 col-xs-12">
            {!! Form::textarea('description', $value=$gallery->description, array('class' => 'form-control summernote', 'required'=>'required','size' => '50x4')) !!}
          </div>
        </div>
        <div class="form-group">
          {!! Form::label('img','Gallery image',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
          <div class=" col-md-4 col-sm-4 col-xs-12">
            <input type="file" class="form-control" name="img[]" multiple>
          </div>
        </div>
        <div class="form-group">
          {!! Form::label('image_year','Image of year',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
          <div class="col-md-6 col-sm-6 col-xs-12">
            {!! Form::number('img_year',$value=$gallery->img_year,array('class'=>'form-control col-md-7 col-xs-12', 'required'=>'required')) !!}
          </div>
        </div>
        <div class="form-group">
          {!! Form::label('pub_status','Publication status',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
	       <div class=" col-md-4 col-sm-4 col-xs-12">
                <select name="publication_status" required class="form-control">
                  <option value="0">--Select Status--</option>
                  <option value="1" <?php if($gallery->publication_status == 1) echo "selected";?>>Published</option>
                  <option value="2" <?php if($gallery->publication_status == 2) echo "selected";?>>Unpublished</option>
                </select>
            </div>
       </div>
        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <button class="btn btn-primary" type="button">Cancel</button>
            <button class="btn btn-primary" type="reset">Reset</button>
            <button type="Submit" class="btn btn-success">Update Gallery</button>
          </div>
        </div>
        {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection