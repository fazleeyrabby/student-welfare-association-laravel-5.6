@extends('layouts.adminLayouts.admin_index')
@section('content')
<div class="col-md-8 col-md-offset-3">
  <div class="x_panel">
    <div class="x_title">
      <h2> নতুন বৎসর সৃষ্টি করুন </h2>
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
      {!! Form::open(['route' => 'member-of-year.store','class'=>'form-horizontal']) !!}
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">বৎসর নির্বাচন</label>
          <div class="col-md-4 col-sm-4 col-xs-12">
             <select class="form-control" name="mbr_year" required>
                <option>--- বৎসর নির্বাচন করুন ---</option>
                <option value="2008">2008</option>
                <option value="2009">2009</option>
                <option value="2010">2010</option>
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
                <option value="2025">2025</option>
            </select>
          </div>       
        </div>
        <div class="form-group">
          {!! Form::label('description','বর্ণনা / ইতিহাস',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
          <div class="col-md-6 col-sm-6 col-xs-12">
            {!! Form::textarea('description','',array('class'=>'form-control summernote col-md-7 col-xs-12', 'required'=>'required')) !!}
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



