@extends('layouts.adminLayouts.admin_index')
@section('content')
  <div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      
      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            {!! Form::open(['route'=>'category.index','method'=>'GET','class'=>'input-group']) !!}  
            {!! Form::text('category_name','',array('class' => 'form-control', 'placeholder' => 'Search category name')) !!}
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
            <h2>All Category </h2>
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
                  <th>category Name</th>
                  <!-- <th>description</th> -->
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>
                @foreach ($categories as $category)
                <tr>
                  <td>{!! $category->category_id !!}</td>
                  <td>{!! $category->category_name !!}</td>
                  <!-- <td>{!! $category->description !!}</td> -->
                  <td>
                    @if($category->publication_status=='1')
                      {!! "Published" !!}
                    @elseif($category->publication_status=='2')
                      {!! "Unpublished" !!}
                    @endif  
                  </td>
                  <td class="center">
                    <a href="{!! route('category.show',$category->category_id) !!}" class="btn btn-sm bg-navy ">
                      <i class="fa fa-eye" aria-hidden="true"></i> Show
                    </a>
                    <a href="{!! route('category.edit',$category->category_id) !!}"class="btn btn-sm bg-orange " title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
                    <form method="post" action="{!! route('category.destroy',$category->category_id) !!}">
                      <input type="hidden" name="_method" value="DELETE">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <button type="submit" class="btn btn-sm bg-danger" onclick=" return check_delete_info();"/>
                      <i class="" aria-hidden="true"></i> Delete
                      </a>
                    </form>
                    </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          {!! $categories->render() !!}
        </div> 
      </div>  
    </div> 
  </div>
</div>
@endsection
