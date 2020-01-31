<div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{ url('admin/dashboard')}}" title="Dashboard" class="site_title"><i class="fa fa fa-dashboard"></i> <span>SWA</span></a>
            </div>
            <div class="clearfix"></div>
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{ asset('public/assets/backend_asset/admin_img/admin.jpg') }}" alt="..." class="img-circle profile_img">
              </div>
              <p style="color:#ffffff;">{!! Auth::user()->name !!}</p>
              <?php
                $role = Auth::user()->role;
                if($role == 1){
                    $role = "Admin";
                }
                else{
                    $role='- - -';
                }
              ?>
             <a href="{{ url('admin/dashboard') }}" style="color:#ffffff;"><i class="fa fa-circle text-success"></i>&nbsp &nbsp{!! $role !!} </a>
            </div>
            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a><i class=""></i> Slider <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('/slider') }}">Manage Slider</a></li>
                      <li><a href="{{ url('slider/create') }}">Create Slider</a></li>
                    </ul>
                  </li>
                  <li><a><i class=""></i> Cureent Notice<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('current-notice') }}">Manage Notice</a></li>
                      <li><a href="{{ url('current-notice/create') }}">Create Notice</a></li>
                    </ul>
                  </li>
                  <li><a><i class=""></i> About / Overview <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('/about') }}">Manage</a></li>
                      <li><a href="{{ url('about/create') }}">Create</a></li>
                    </ul>
                  </li>
                  <li><a><i class=""></i>Notices<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('/notice') }}">Manage Notices</a></li>
                      <li><a href="{{ url('notice/create') }}">Create Notices</a></li>
                    </ul>
                  </li>
                  <li><a><i class=""></i> Blog Category<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('/category') }}">Manage Category</a></li>
                      <li><a href="{{ url('category/create') }}">Create Category</a></li>
                    </ul>
                  </li>
                  <li><a><i class=""></i> Blog <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('/article') }}">Manage Blog</a></li>
                      <li><a href="{{ url('article/create') }}">Create Blog</a></li>
                    </ul>
                  </li>
                  <li><a><i class=""></i> Member of Year <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('/member-of-year') }}">Manage Year </a></li>
                      <li><a href="{{ url('member-of-year/create') }}"> Create Year </a></li>
                    </ul>
                  </li>
                  <li><a><i class=""></i> Member <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('/member') }}"> Manage Member  </a></li>
                      <li><a href="{{ url('member/create') }}">Create Member</a></li>
                    </ul>
                  </li>
                  <li><a><i class=""></i> Constitution <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('/constitution') }}">Manage Constitution</a></li>
                      <li><a href="{{ url('constitution/create') }}">Create Constitution</a></li>
                    </ul>
                  </li>
                  <li><a><i class=""></i> Gallery <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('/gallery') }}">Manage Gallery</a></li>
                      <li><a href="{{ url('gallery/create') }}">Create Gallery</a></li>
                    </ul>
                  </li>
                  <li><a><i class=""></i> User <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('admin/register-user') }}">All User </a></li>
                    </ul>
                  </li>
                  <li><a><i class=""></i> User Blog <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('admin/journal') }}">All Blog </a></li>
                    </ul>
                  </li>
                  
                    <ul class="nav child_menu">
                      <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>
                      <li><a href="fixed_footer.html">Fixed Footer</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ url('logout') }}">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>