<link rel="stylesheet" href="/css/header.css">

<div style="height: 65px" class="bg-dark"></div>

<nav class="navbar navbar-expand-lg navbar-dark pos-fixed w-100 px-2 top-0 left-0" style="background-color: rgba(0, 0, 0, 0.816)" id="header">
    <a href="#" class="nav-brand p-0 rounded-circle overflow-hidden" id="nav-brand">
        <img src="https://cs-wordpress.s3.amazonaws.com/crowdsource-v4/uploads/2014/07/recipes.png" alt="" style="height: 50px">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span><i class="fad fa-bars"></i></span>
    </button>
    <div class="collapse navbar-collapse justify-content-around" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item px-3">
                <a href="{{ route('index') }}" class="nav-link" id="">Trang chủ</a>
            </li>
            <li class="nav-item px-3">
                <a href="{{ route('recipes') }}" class="nav-link" id="">Công thức</a>
            </li>
            <li class="nav-item px-3">
                <a href="{{ route('tips') }}" class="nav-link" id="">Mẹo vặt</a>
            </li>
            <li class="nav-item px-3">
                <a href="{{ route('news') }}" class="nav-link" id="">Tin tức</a>
            </li>
            <li class="nav-item px-3">
                <a href="{{ route('share') }}" class="nav-link" id="">Chia sẻ</a>
            </li>
            <li class="hidden nav-item px-3">
                @if (Route::has('login'))
                    @auth 
                        @else<a href="{{ route('login') }}" class="nav-link" id="">Đăng nhập</a>
                    @endauth
                @endif
            </li>
            <li class="hidden nav-item px-3">
                @if (Route::has('register'))
                    @auth
                        @else<a href="{{ route('register') }}" class="nav-link" id="">Đăng ký</a>
                    @endauth
                @endif
            </li>
            <li class="hidden nav-item px-3">
                <?php $name = Auth::user()->name ?? 'Tm9uZQ=='?>
                @if ($name != 'Tm9uZQ==')
                    <div class="dropdown">
                        <div class="nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" id="">
                            <i class="far fa-user-circle"></i>
                            {{ Auth::user()->name }}
                        </div>
                        <ul class="dropdown-menu" style="background-color: rgba(0, 0, 0, 0.962)" >
                            <li><a class="dropdown-item text-warning" href="{{ route('profile.edit') }}">Thông tin</a></li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <li><a class="dropdown-item text-warning" href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();">Đăng xuất</a></li>
                            </form>
                        </ul>
                    </div>
                @endif
            </li>
        </ul>
    </div>
    </div>
</nav>