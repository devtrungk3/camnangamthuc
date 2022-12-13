{{-- <header class="app-header">
    <!-- Sidebar toggle button-->

    <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar">
    </a>

</header> --}}



 <!-- Navbar-->
 <header class="app-header"><a class="app-header__logo" href="{{ route('index') }}">Cẩm Nang Ẩm Thực</a>
    <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">
      <li class="app-search">
        <input class="app-search__input" type="search" placeholder="Search">
        <button class="app-search__button"><i class="fa fa-search"></i></button>
      </li>
      <!--Notification Menu-->
      <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
        <ul class="app-notification dropdown-menu dropdown-menu-right">
          <li class="app-notification__title">Bạn có 10 thông báo mới.</li>
       
          <li class="app-notification__footer"><a href="{{ route('comming_soon_admin') }}">Xem tất cả thông báo.</a></li>
        </ul>
      </li>
      <!-- User Menu-->
      <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
        <ul class="dropdown-menu settings-menu dropdown-menu-right">
          <li><a class="dropdown-item" href="{{ route('comming_soon_admin') }}"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
          <li><a class="dropdown-item"href="{{ route('profile.edit') }}"><i class="fa fa-user fa-lg"></i> Profile</a></li>
         
        <form method="POST" action="{{ route('logout') }}">
            @csrf
          <li><a class="dropdown-item"  href="{{ route('logout') }}"  onclick="event.preventDefault();this.closest('form').submit();"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
        </form>
        </ul>
      </li>
    </ul>
  </header>