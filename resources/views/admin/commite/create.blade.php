@extends('layouts.adminLayouts.admin_index')
@section('content')
<div class="col-md-8 col-md-offset-3">
  <div class="x_panel">
    <div class="x_title">
      <h2>নতুন সদস্য সৃষ্টি করুন</h2>
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
      {!! Form::open(['route' => 'member.store','files'=>true,'class'=>'form-horizontal']) !!}
        
        <div class="form-group">
          {!! Form::label('title', 'নাম',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
          <div class="col-md-6 col-sm-6 col-xs-12">
            {!! Form::text('name','',array('class' => 'form-control col-md-7 col-xs-12', 'required' => 'required')) !!}
          </div>
        </div>
        <div class="form-group">
          {!! Form::label('title', 'পদবি',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
          <div class="col-md-6 col-sm-6 col-xs-12">
            {!! Form::text('designation','',array('class' => 'form-control col-md-7 col-xs-12', 'required' => 'required')) !!}
          </div>
        </div>
        <div class="form-group">
          {!! Form::label('bloodgroup','Type of Member
          ',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
          <div class="col-md-6 col-sm-6 col-xs-12">
            <select class="form-control" name="mbr_typ" required>
                    <option >Select Type of Member</option>
                    <option value="1">Adviser</option>
                    <option value="2">President</option>
                    <option value="3">secretary</option>
                    <option value="4">vice president</option>
                    <option value="5">Member</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          {!! Form::label('bloodgroup','Another type of Member
          ',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
          <div class="col-md-6 col-sm-6 col-xs-12">
            <select class="form-control" name="an_mbr_typ" required>
                    <option>Select Type of Member</option>
                    <option value="1">Present Member</option>
                    <option value="2">X Member</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          {!! Form::label('title', 'ঠিকানা',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
          <div class="col-md-6 col-sm-6 col-xs-12">
            {!! Form::text('address','',array('class' => 'form-control col-md-7 col-xs-12', 'required' => 'required')) !!}
          </div>
        </div>
        <div class="form-group">
          {!! Form::label('title', 'ইমেইল',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
          <div class="col-md-6 col-sm-6 col-xs-12">
            {!! Form::email('email','',array('class' => 'form-control col-md-7 col-xs-12', 'required' => 'required')) !!}
          </div>
        </div>
        <div class="form-group">
          {!! Form::label('title', 'যোগযোগ',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
          <div class="col-md-6 col-sm-6 col-xs-12">
            {!! Form::number('contact','',array('class' => 'form-control col-md-7 col-xs-12', 'required' => 'required')) !!}
          </div>
        </div>
        <div class="form-group">
          {!! Form::label('location','বর্তমান পেশা',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
          <div class="col-md-6 col-sm-6 col-xs-12">
            {!! Form::text('profession','',array('class'=>'form-control col-md-7 col-xs-12', 'required'=>'required')) !!}
          </div>
        </div>
        <div class="form-group">
          {!! Form::label('location','শিক্ষাগত যোগ্যতা',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
          <div class="col-md-6 col-sm-6 col-xs-12">
            {!! Form::text('edu_bcgnd','',array('class'=>'form-control col-md-7 col-xs-12', 'required'=>'required')) !!}
          </div>
        </div>
        <div class="form-group">
          {!! Form::label('location','বিগত শিক্ষাগত প্রতিষ্ঠান
          ',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
          <div class="col-md-6 col-sm-6 col-xs-12">
            {!! Form::text('last_edu_insttd','',array('class'=>'form-control col-md-7 col-xs-12', 'required'=>'required')) !!}
          </div>
        </div>
        <div class="form-group">
          {!! Form::label('bloodgroup','Blood group
          ',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
          <div class="col-md-6 col-sm-6 col-xs-12">
            <select class="form-control" name="blood_group" required>
                    <option >Select Blood Group</option>
                    <option value="1">A+(positive)</option>
                    <option value="2">A-(Negetive)</option>
                    <option value="3">B+(positive)</option>
                    <option value="4">B-(Negetive)</option>
                    <option value="5">O+(positive)</option>
                    <option value="6">O-(Negetive)</option>
                    <option value="7">AB+(positive)</option>
                    <option value="8">AB-(Negetive)</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Member of Year</label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <select class="form-control" name="moy_id" required>
            @foreach($mbrofyrs as $mbrofyr)
                  @if($mbrofyr->publication_status==1)
                    <option value="{{ $mbrofyr->moy_id }}">{{ $mbrofyr->mbr_year }}</option>
                  @endif
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group">
          {!! Form::label('description','বর্ণনা',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
          <div class="col-md-9 col-sm-9 col-xs-12">
            {!! Form::textarea('description',null,['class' => 'form-control summernote', 'required'=>'required']) !!}
          </div>
        </div>
         
        <div class="form-group">
          {!! Form::label('image','প্রতিকৃতি ছবি',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
          <div class="col-md-6 col-sm-6 col-xs-12">
             <input type="file" class="form-control-file" name="profile_pic" id="exampleInputFile" aria-describedby="fileHelp" required="required">
              <!-- <small id="fileHelp" class="form-text text-muted">Please upload a valid file. Size of file should not be more than <em>5MB</em>.</small> -->
          </div>
        </div>
        <div class="form-group">
          {!! Form::label('pub_status','প্রকাশন অবস্থা ',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
	       	<div class="col-md-4 col-sm-4 col-xs-12">
            {!! Form::select('publication_status',
              ['--- প্রকাশন অবস্থা নির্বাচন করুন ---', 
              'প্রকাশ করা',
              'প্রকাশ না করা'],
              null,['class'=>'form-control']) !!}
	       	</div>       
        </div>
        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <button type="Submit" class="btn btn-success">নিবেদন করুন</button>
          </div>
        </div>
        {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection