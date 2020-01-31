@extends('layouts.frontLayouts.layout')
@section('title','স্টুডেন্টস ওয়েলফেয়ার এসোসিয়েশন')
@section('content')
<div class="container">
	<div class="col-md-12">
		<div class="tab-pane" >
	@if(Session::has('success'))
	<div class="alert alert-success col-md-12 col-md-offset-3 col-sm-12" role="alert">
		<h2 style="text-align: center;"><b>{{ Session::get('success') }}</b></h2>
	</div>
	@endif
	<div class="x_content">
		<br />
		{!! Form::open(['route' => 'journal.store','files'=>true,'class'=>'form-horizontal']) !!}
		
		<div class="form-group">
			{!! Form::label('name', 'Title',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
			<div class="col-md-6 col-sm-6 col-xs-12">
				<!-- {!! Form::text('journal_title','',array('class' => 'form-control col-md-7 col-xs-12', 'required' => 'required')) !!} -->
				<input type="text" name="journal_title" value="{{ Input::old('journal_title') }}" class="form-control" required="required">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3 col-sm-3 col-xs-12">Blog Category</label>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<select class="form-control" name="category_id" required="required">
					<option>Select Blog Category</option>
					@foreach($categories as $category)
					@if($category->publication_status==1)
					<option value="{{ $category->category_id }}">{{ $category->category_name }}</option>
					@endif
					@endforeach
				</select>
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('description','Description',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
			<div class="col-md-9 col-sm-9 col-xs-12">
				{!! Form::textarea('journal_description',null,['class' => 'form-control summernote', 'required'=>'required']) !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('location','Author name',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
			<div class="col-md-6 col-sm-6 col-xs-12">
				{!! Form::text('user_author_name','',array('class'=>'form-control col-md-7 col-xs-12', 'required'=>'required')) !!}
			</div>
		</div>
		<div class="form-group">
          {!! Form::label('image','Blog Image',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
          <div class="col-md-6 col-sm-6 col-xs-12">
           <!--  {!! Form::file('article_img',array('class'=>'form-control col-md-7 col-xs-12', 'required'=>'required')) !!} -->
             <input type="file" class="form-control-file" name="blog_img" id="exampleInputFile" aria-describedby="fileHelp" required="required">
          </div>
        </div>
		<div class="form-group">
  			{!! Form::label('filetoupload','Attach File (Doc / Docx / Zip )',array('class'=>'control-label col-md-4 col-sm-3 col-xs-12')) !!}
  			<div class="col-md-7 col-sm-6 col-xs-12">
  				<input type="hidden" name="user_id" value="{{ $user_info->user_id }}">
     			<input type="file" class="form-control-file" name="filetoupload" id="exampleInputFile" aria-describedby="fileHelp" required="required">
      			<small id="fileHelp" class="form-text text-muted">Please upload a valid file. Size of file should not be more than <em>20MB</em>.</small>
      			@if($errors->has('filetoupload'))
      				<p class="help-block">{{ $errors->first('filetoupload') }}</p>
      			@endif
  			</div>
		</div>
  			<input type="hidden" value="<?php echo rand(); ?>" name="tran_num">
		
		<div class="ln_solid"></div>
		<div class="form-group">
			<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
				<button type="Submit" class="btn btn-success">Create Blog</button>
			</div>
		</div>
		{!! Form::close() !!}
	</div>
</div>
</div>
</div>

@endsection('content')
