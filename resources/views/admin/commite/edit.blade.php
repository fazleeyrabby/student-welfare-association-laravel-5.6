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
      {!! Form::open(['route' =>[ 'member.update',$member->member_id],'files'=>true,'class'=>'form-horizontal','method'=>'PUT']) !!}
        
        <div class="form-group">
          {!! Form::label('title', 'নাম',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
          <div class="col-md-6 col-sm-6 col-xs-12">
            {!! Form::text('name',$value=$member->name,array('class' => 'form-control col-md-7 col-xs-12', 'required' => 'required')) !!}
          </div>
        </div>
        <div class="form-group">
          {!! Form::label('title', 'পদবি',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
          <div class="col-md-6 col-sm-6 col-xs-12">
            {!! Form::text('designation',$value=$member->designation,array('class' => 'form-control col-md-7 col-xs-12', 'required' => 'required')) !!}
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Type of Member</label>
        <div class="col-md-4 col-sm-4 col-xs-12">
           <select name="mbr_typ" required class="form-control">
                  <option>--Type of Member--</option>
                  <option value="1" <?php if($member->mbr_typ == 1) echo "selected";?>>Adviser</option>
                  <option value="2" <?php if($member->mbr_typ == 2) echo "selected";?>>President</option>
                  <option value="3" <?php if($member->mbr_typ == 3) echo "selected";?>>secretary</option>
                  <option value="4" <?php if($member->mbr_typ == 4) echo "selected";?>>vice president</option>
                  <option value="5" <?php if($member->mbr_typ == 5) echo "selected";?>>Member</option>
                </select>
        </div>
      </div>
      <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Another type of Member</label>
        <div class="col-md-4 col-sm-4 col-xs-12">
           <select name="an_mbr_typ" required class="form-control">
                  <option value="0">--Select Status--</option>
                  <option value="1" <?php if($member->an_mbr_typ == 1) echo "selected";?>>Present Member</option>
                  <option value="2" <?php if($member->an_mbr_typ == 2) echo "selected";?>>X Member</option>
                </select>
        </div>  
        </div>      
        <div class="form-group">
          {!! Form::label('title', 'ঠিকানা',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
          <div class="col-md-6 col-sm-6 col-xs-12">
            {!! Form::text('address',$value=$member->address,array('class' => 'form-control col-md-7 col-xs-12', 'required' => 'required')) !!}
          </div>
        </div>
        <div class="form-group">
          {!! Form::label('title', 'ইমেইল',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
          <div class="col-md-6 col-sm-6 col-xs-12">
            {!! Form::email('email',$value=$member->email,array('class' => 'form-control col-md-7 col-xs-12', 'required' => 'required')) !!}
          </div>
        </div>
        <div class="form-group">
          {!! Form::label('title', 'যোগযোগ',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
          <div class="col-md-6 col-sm-6 col-xs-12">
            {!! Form::number('contact',$value=$member->contact,array('class' => 'form-control col-md-7 col-xs-12', 'required' => 'required')) !!}
          </div>
        </div>
        <div class="form-group">
          {!! Form::label('location','বর্তমান পেশা',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
          <div class="col-md-6 col-sm-6 col-xs-12">
            {!! Form::text('profession',$value=$member->profession,array('class'=>'form-control col-md-7 col-xs-12', 'required'=>'required')) !!}
          </div>
        </div>
        <div class="form-group">
          {!! Form::label('location','শিক্ষাগত যোগ্যতা',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
          <div class="col-md-6 col-sm-6 col-xs-12">
            {!! Form::text('edu_bcgnd',$value=$member->edu_bcgnd,array('class'=>'form-control col-md-7 col-xs-12', 'required'=>'required')) !!}
          </div>
        </div>
        <div class="form-group">
          {!! Form::label('location','বিগত শিক্ষাগত প্রতিষ্ঠান
          ',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
          <div class="col-md-6 col-sm-6 col-xs-12">
            {!! Form::text('last_edu_insttd',$value=$member->last_edu_insttd,array('class'=>'form-control col-md-7 col-xs-12', 'required'=>'required')) !!}
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
            {!! Form::textarea('description', $value=$member->description, array('class' => 'form-control summernote', 'required'=>'required','size' => '50x4')) !!}
          </div>
        </div>
         
        <div class="form-group">
          {!! Form::label('image','প্রতিকৃতি ছবি',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
          <div class="col-md-6 col-sm-6 col-xs-12">
             <input type="file" class="form-control-file" name="profile_pic" id="exampleInputFile" aria-describedby="fileHelp">
              <small id="fileHelp" class="form-text text-muted">Please upload a valid file. Size of file should not be more than <em>5MB</em>.</small>
          </div>
        </div>
        <div class="form-group">
          {!! Form::label('pub_status','প্রকাশন অবস্থা ',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
          <div class="col-md-4 col-sm-4 col-xs-12">
           <select name="publication_status" required class="form-control">
                  <option value="0">--Select Status--</option>
                  <option value="1" <?php if($member->publication_status == 1) echo "selected";?>>Published</option>
                  <option value="2" <?php if($member->publication_status == 2) echo "selected";?>>Unpublished</option>
                </select>
          </div>       
        </div>
        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <button class="btn btn-primary" type="button">Cancel</button>
            <button class="btn btn-primary" type="reset">Reset</button>
            <button type="Submit" class="btn btn-success">Update</button>
          </div>
        </div>
        {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection