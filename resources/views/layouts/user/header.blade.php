<link rel="stylesheet" href="/css/header.css">

<div style="height: 65px" class="bg-dark"></div>

<nav class="navbar navbar-expand-lg navbar-dark pos-fixed w-100 px-2 top-0 left-0" style="background-color: rgba(0, 0, 0, 0.816)" id="header">
    <a href="#" class="nav-brand p-0 rounded-circle overflow-hidden" id="nav-brand">
        <img src="https://lh3.googleusercontent.com/CShnRP9_tnsbYCp8uueMYtDb6IMtuOsJ14kDXCTINnBRwnBSLHh56xAU13hS-mUaP4ZqaO8QLqWaz7D8eA4xk8F2JFlVSbmDr2mDwtgNj_EKrWM_6BQvDrXOrAJTk0M-VX7rupzKx8KFyl5sKjF7V_uAwYhAN--wly3CbwKVp0-WYDfF6A91uVbBJzGBdgM4tLpJEZpyO1tsGfKPZQ7corL6M8PQjHi6EXQGh1I8z1QVwY5WSe7LD6y2cCxlWeN86yQYeyNX8o1oLKNapyZnOGq2vpv3D1yH0Ep93JxH_K9pAak5YAgjI-tgZq7NWU8f-oFYTVqtinLop3a9ZYgqYx8cXlp1ggb--TDTT49DcBwIxAmSp35pGrrJpYnOx1qUR6L4M1Rh1buDHe64xPEFIhvpkhuNHz2npN_oII4QyekcEoEWwCY9Se_eE-idabGD4yRQBawYAhch6A9V61OJ5LI86Dbitbg-0xtBl_mjvi0PaL6sams0tqdD6yxOMYGpoYVsM4W9tVE_QxrDMYCxj_WSEk3PhVnuBhQCPYzQBuXrX3A9URtrpglIMArnhZc-1R_JTZV52dqV341URQMLRXp9Nidh254v45oC8Zz-iYOZbL7jNixSRGBNeayhV9Swow7BdqB0KDGdeLOKx8d8dVdUgD8FN4eE2vrhxRWRyWZW7bhMI1BIpNsVfjih8UYZF7j_mwWYPnWmhuQM8vDW9XFj3NfmfBhQ89rVr1ysCMrvMMbJJN-358W5vovLzmEjUf6AobsF4ZOM0d2gCpoyz0L3BB7EYaEwM8R8bgNNNZaElcWW4w0czXAJdsOgGLU7TaXgOSdDeUNn0cper2gPQspC212ueeKhIJHkjzKB84JTgOelfjmBPBDALw48uwpJk-g0F1HD44Q2GDiU4zT1jBIP-Dpp2WlNOdDdemXwAq5Bavzm7ixUnrumad3CKR3ewGnanopNmD0crhl1iMFLSl5U70PoY5xOGKGwlGD_ROG-Ub6jCiCN=w679-h904-no?authuser=2" alt="" style="height: 50px">
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
            <li class="nav-item px-3">
                <a href="{{ route('favorites') }}" class="nav-link" id="">Mục yêu thích</a>
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