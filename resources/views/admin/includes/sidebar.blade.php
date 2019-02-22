<div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
      <!-- main menu header-->
      <div class="main-menu-header">
        <input type="text" placeholder="Search" class="menu-search form-control round"/>
      </div>
      <!-- / main menu header-->
      <!-- main menu content-->
      <div class="main-menu-content">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
          <li class=" nav-item"><a href="{{url('dashboard')}}"><i class="icon-home3"></i><span data-i18n="nav.dash.main" class="menu-title">Dashboard</a>
            
          </li>


          <li class=" nav-item"><a href="{{url('/seat')}}"><i class="icon-paper"></i><span data-i18n="nav.form_layouts.form_layout_basic" class="menu-title">Seat</span></a>
          </li>

          
        
          <li class=" nav-item"><a href=""><i class="icon-ios-albums-outline"></i><span data-i18n="nav.cards.main" class="menu-title">Border</span></a>
            <ul class="menu-content">
              <li><a href="{{url('/border/add')}}" data-i18n="nav.cards.card_bootstrap" class="menu-item">Add Border</a>
              </li>
              <li><a href="{{url('/border/manage')}}" data-i18n="nav.cards.card_actions" class="menu-item">Manage Border</a>
              </li>
            </ul>
          </li>
         
          
       

           <li class=" nav-item"><a href="#"><i class="icon-ios-albums-outline"></i><span data-i18n="nav.cards.main" class="menu-title">Payment</span></a>
            <ul class="menu-content">
              <li><a href="{{url('/payment/make')}}" data-i18n="nav.cards.card_bootstrap" class="menu-item">Make Payment</a>
              </li>
              <li><a href="{{url('/payment/manage')}}" data-i18n="nav.cards.card_actions" class="menu-item">Manage Payment</a>
              </li>
            </ul>
          </li>



          
         
        </ul>
      </div>
      <!-- /main menu content-->
      <!-- main menu footer-->
      <!-- include includes/menu-footer-->
      <!-- main menu footer-->
    </div>