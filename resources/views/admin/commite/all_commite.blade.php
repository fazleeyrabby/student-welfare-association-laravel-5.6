@extends('layouts.adminLayouts.admin_index')
@section('content')
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      
      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            {!! Form::open(['route'=>'member.index','method'=>'get','class'=>'input-group']) !!}  
            {!! Form::text('name','',array('class' => 'form-control', 'placeholder' => 'Search member tname ')) !!}
            <span class="input-group-btn">
              <button class="btn btn-default" type="submit">Go!</button>
            </span>
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="success">
             @if(Session::has('success'))
              <div class="alert alert-success col-md-6 col-md-offset-3 col-sm-12" role="alert">
                <h2 style="text-align: center;"><b>{{ Session::get('success') }}</b></h2>
              </div>  
              @endif
          </div>
        <div class="x_panel">
          <div class="x_title">
            <h2>All Article </h2>
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
            <table id="datatable-fixed-header" class="table table-striped table-bordered">
              <thead text-align="center">
                <tr text-align="center">
                  <th align="center">Id</th>
                  <th>Profile</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Contact</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>
                @foreach ($members as $member)
                <tr>
                  <td>{!! $member->member_id !!}</td>
                  <td><img src="public/assets/backend_asset/profile_pic/{{ $member->profile_pic  }}" class="img_responsive" height="100" width="150">
                  </td>
                  <td>{!! $member->name !!}</td>
                  <!-- <td>{!! $member->designation !!}</td> -->
                  <td>{!! $member->email !!}</td>
                  <td>{!! $member->contact !!}</td>
                  <td>
                    @if($member->publication_status=='1')
                      {!! "Published" !!}
                    @elseif($member->publication_status=='2')
                      {!! "Unpublished" !!}
                    @endif  
                  </td>
                  <td>

                    <a href="{!! route('member.show',$member->member_id) !!}" class="btn btn-sm bg-navy ">
                      <i class="fa fa-eye" aria-hidden="true"></i> Show
                    </a>
                    <a href="{!! route('member.edit',$member->member_id) !!}"class="btn btn-sm bg-orange ">
                      <i class="fa fa-pencil" aria-hidden="true"></i> Edit
                    </a>
                    <!-- <a href="./public/assets/backend_asset/profile_pic/{{ $member->profile_pic }}"><i class="fa fa-download" style="font-size:25px"></i></a> -->
                    <form method="post" action="{!! route('member.destroy',$member->member_id) !!}">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn btn-sm bg-danger" onclick=" return check_delete_info();"/>
                    <i class="" aria-hidden="true"></i> Delete
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          {{ $members->render() }}
        </div> 
      </div>  
    </div> 
  </div>
</div>
@endsection
