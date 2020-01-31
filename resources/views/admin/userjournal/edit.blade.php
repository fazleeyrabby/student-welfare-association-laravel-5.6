@extends('layouts.adminLayouts.admin_index')
@section('content')
<div class="col-md-8 col-md-offset-3">
  <div class="x_panel">
    <div class="x_title">
      <h2>Edit Blog</h2>
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
{!! Form::open(['route' =>[ 'journal.update',$journal->journal_id],'files'=>true,'class'=>'form-horizontal','method'=>'PUT']) !!}
<div class="form-group">
{!! Form::label('name', 'Article title',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
<div class="col-md-6 col-sm-6 col-xs-12">
  {!! Form::text('journal_title',$value=$journal->journal_title,array('class' => 'form-control col-md-7 col-xs-12', 'required' => 'required')) !!}
</div>
</div>
<div class="form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12">Journal Category</label>
<div class="col-md-6 col-sm-6 col-xs-12">
  <select class="form-control" name="category_id" required>
    <option value="">Select Blog Category</option>
    @foreach($categories as $category)
    <option value="{{ $category->category_id }}">{{ $category->category_name }}</option>
    @endforeach
  </select>
</div>
</div>
<div class="form-group">
{!! Form::label('description','Description',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
<div class="col-md-9 col-sm-9 col-xs-12">
  {!! Form::textarea('journal_description', $value=$journal->journal_description, array('class' => 'form-control summernote', 'required'=>'required','size' => '50x4')) !!}
</div>
</div>
<div class="form-group">
{!! Form::label('name', 'Author name',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
<div class="col-md-6 col-sm-6 col-xs-12">
  {!! Form::text('author_name',$value=$journal->user_author_name,array('class' => 'form-control col-md-7 col-xs-12', 'required' => 'required')) !!}
</div>
</div>
<!-- <div class="form-group">
{!! Form::label('img','Package image',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
<div class=" col-md-4 col-sm-4 col-xs-12">
  <input type="file" class="form-control" name="journal_img[]" multiple >
</div>
</div> -->
<div class="form-group">
{!! Form::label('pub_status','Publication status',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
<div class=" col-md-4 col-sm-4 col-xs-12">
  <select name="status" required class="form-control">
    <option>--Select Status--</option>
    <option value="1" <?php if($journal->publication_status == 1) echo "selected";?>>Published</option>
    <option value="0" <?php if($journal->publication_status == 0) echo "selected";?>>Pending</option>
  </select>
</div>
</div>
<div class="ln_solid"></div>
<div class="form-group">
<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
  <button class="btn btn-primary" type="button">Cancel</button>
  <button class="btn btn-primary" type="reset">Reset</button>
  <button type="Submit" class="btn btn-success">Update Blog</button>
</div>
</div>
{!! Form::close() !!}
</div>
</div>
</div>
@endsection