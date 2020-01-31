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
            <h2>User Details info goes here </h2>
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
                        <th>User ID</th>
                        <td>{!! $user_info->user_id !!}</td>
                    </tr>
                    <tr>
                        <th>Username</th>
                        <td>{!! $user_info->username !!}</td>
                    </tr>
                    <tr>
                        <th> Email</th>
                        <td>{!! $user_info->email !!}</td>
                    </tr>
                    <tr>
                        <th> Country</th>
                        <td>{!! $user_info->country !!}</td>
                    </tr>
                    <tr>
                        <th> City</th>
                        <td>{!! $user_info->city !!}</td>
                    </tr>
                    <tr>
                    <tr>
                        <th> Contact</th>
                        <td>{!! $user_info->contact !!}</td>
                    </tr>
                    <tr>
                        <th> Address</th>
                        <td>{!! $user_info->address !!}</td>
                    </tr>
                    
                    <tr>
                        <th> image</th>
                        <td>
                          <img src="../../public/assets/backend_asset/user_img/{{ $user_info->img }}" height="100" width="150">
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
