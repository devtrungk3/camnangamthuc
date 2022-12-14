<section>
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <ul class="app-menu">
            <li>
                <a class="app-menu__item" href="{{ route('dashboard') }}">
                    <i class="fa fa-home app-menu__icon" aria-hidden="true"></i>
                    <span class="app-menu__label">Dashboard</span>
                </a>
            </li>

            <li>
                <a class="app-menu__item" href="{{ route('manage_recipes') }}">
                    <i class="far fa-hat-chef app-menu__icon" aria-hidden="true"></i>
                    <span class="app-menu__label">Công thức nấu ăn</span>
                </a>
            </li>

            <li>
                <a class="app-menu__item" href="{{ route('manage_tips') }}">
                    <i class="far fa-lightbulb-on app-menu__icon" aria-hidden="true"></i>
                    <span class="app-menu__label">Mẹo vặt</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="{{ route('manage_categories') }}">
                    <i class="fa fa-folder app-menu__icon" aria-hidden="true"></i>
                    <span class="app-menu__label">Danh Mục</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="{{ route('manage_categories_properties') }}">
                    <i class="fa fa-folder-open app-menu__icon" aria-hidden="true"></i>
                    <span class="app-menu__label">Danh Mục Con</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="{{ route('manage_news') }}">
                    <i class="fas fa-newspaper app-menu__icon" aria-hidden="true"></i>
                    <span class="app-menu__label">Tin tức</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="{{ route('manage_comments') }}">
                    <i class="fas fa-comment app-menu__icon" aria-hidden="true"></i>
                    <span class="app-menu__label">Bình luận</span>
                </a>
            </li>
         
            <li>
                <a class="app-menu__item" href="{{ route('manage_users') }}">
                    <i class="far fa-users app-menu__icon"></i>
                    <span class="app-menu__label">Người dùng</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="{{ route('manage_feedbacks') }}">
                    <i class="far fa-comments app-menu__icon"></i>
                    <span class="app-menu__label">Phản hồi</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="{{ route('admin_profile') }}">
                    <i class="far fa-info-square app-menu__icon"></i>
                    <span class="app-menu__label">Thông tin tài khoản</span>
                </a>
            </li>
        </ul>
    </aside>
</section>