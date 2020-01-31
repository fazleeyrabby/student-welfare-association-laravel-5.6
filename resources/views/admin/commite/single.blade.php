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
            <h2>Blog Details info goes here </h2>
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
                        <th>member ID</th>
                        <td>{!! $member->member_id !!}</td>
                    </tr>
                    <tr>
                        <th>Designation</th>
                        <td>{!! $member->designation !!}</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>{!! $member->address !!}</td>
                    </tr>
                    <tr>
                        <th>Profession</th>
                        <td>{!! $member->profession !!}</td>
                    </tr>
                    <tr>
                        <th>Educational Background</th>
                        <td>{!! $member->edu_bcgnd !!}</td>
                    </tr>
                    <tr>
                        <th>Last Educational Background</th>
                        <td>{!! $member->last_edu_insttd !!}</td>
                    </tr>
                    <tr>
                        <th>Member Of Year</th>
                        <td>{!! $member->member_of_year !!}</td>
                    </tr>
                    <tr>
                        <th> Description</th>
                        <td style="text-align: justify;">{!! $member->description !!}</td>
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
