@extends('layouts.adminLayouts.admin_index')
@section('content')
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      
      
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Package Details info goes here </h2>
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

                 <tr>
                        <th>Category ID</th>
                        <td>{!! $category->category_id !!}</td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>{!! $category->category_name !!}</td>
                    </tr>
                    
                    <tr>
                        <th> Description</th>
                        <td style="text-align: justify;">{!! $category->category_description !!}</td>
                    </tr>
                    <tr>
                        <th>Image</th>

                        
                        <td>
                       
                          <img src="../public/assets/backend_asset/category_img/{{ $category->category_img }}" height="100" width="150">
                       
                        </td>
                    </tr>
              </tbody>
            </table>
          </div>
        </div> 
      </div>  
    </div> 
  </div>
</div>
@endsection
