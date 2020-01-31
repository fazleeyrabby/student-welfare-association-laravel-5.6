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
                        <th>Blog ID</th>
                        <td>{!! $journal->journal_id !!}</td>
                    </tr>
                    <tr>
                        <th>Blog title</th>
                        <td>{!! $journal->journal_title !!}</td>
                    </tr>
                    <tr>
                        <th>Author name</th>
                        <td>{!! $journal->user_author_name !!}</td>
                    </tr>
                    <tr>
                        <th> Description</th>
                        <td style="text-align: justify;">{!! $journal->journal_description !!}</td>
                    </tr>
                    <tr>
                        <th> Store attach file</th>
                        <td>
                          <a href="../public/assets/backend_asset/userjournal_file/{{ $journal->filetoupload }}"><i class="fa fa-download" style="font-size:36px"></i></a>
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
