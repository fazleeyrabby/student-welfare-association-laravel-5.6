  <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('public/assets/backend_asset/admin_img/admin.jpg') }}" alt="">
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="{{ url('logout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
                 <li role="presentation" class="dropdown">
                  <a href="" class="dropdown-toggle info-number" data-toggle="dropdown" title="Contact Us" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <?php
                        $pending = App\Registeruser::where('status',NULL)->count();
                    ?>
                  <span class="badge bg-red">{{ $pending }}</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a href="{{ url('admin/register-user') }}"> 
                        <h5 class="">You have User registration <strong style="color:red;font-size:20px;">{!! $pending !!}</strong> message</h5>
                      </a>
                    </li>
                  </ul>
                </li>
                <li role="presentation" class="dropdown">
                  <a href="" class="dropdown-toggle info-number" data-toggle="dropdown" title="Package Booking" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <?php
                        $pending = App\Userjournal::where('status',NULL)->count();
                    ?>
                  <span class="badge bg-red">{{ $pending }}</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a href="{{ url('admin/journal') }}"> 
                        <h5 class="">You have Blog Add <strong style="color:red;font-size:20px;">{!! $pending !!}</strong> message</h5>
                      </a>
                    </li>
                  </ul>
                </li>
               
                <!-- <li role="presentation" class="dropdown">
                  <a href="{{ url('admin/booking-package/message') }}" class="dropdown-toggle info-number" data-toggle="dropdown" title="Ticket Purchage" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <?php
                        
                    ?>
                  <span class="badge bg-red">{{ $pending }}</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a href="{{ url('admin/ticketpurchage-info') }}"> 
                        <h5 class="">You have Ticket Purchage <strong style="color:red;font-size:20px;">{!! $pending !!}</strong> message</h5>
                      </a>
                    </li>
                  </ul>
                </li>
                <li role="presentation" class="dropdown">
                  <a href="{{ url('admin/booking-package/message') }}" class="dropdown-toggle info-number" data-toggle="dropdown" title="Purchage Ticket" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <?php
                       
                    ?>
                  <span class="badge bg-red">{{ $pending }}</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a href="{{ url('admin/purchageticket-info') }}"> 
                        <h5 class="">You have Purchage Ticket<strong style="color:red;font-size:20px;">{!! $pending !!}</strong> message</h5>
                      </a>
                    </li>
                  </ul>
                </li> -->
              </ul>
            </nav>
          </div>
        </div>