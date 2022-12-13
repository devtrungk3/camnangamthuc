
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quản Lý Cẩm Nang</title>
    @include('library.toplibs')
    <link rel="stylesheet" href="/css/dashboard.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css"
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


        <link rel="stylesheet" href="/css/body_share.css">s
        <script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/classic/ckeditor.js"></script>


</head>

<body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header">
        <!-- Sidebar toggle button-->
        <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar">
        </a>
    </header>
    <!-- Sidebar menu-->
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
    <main class="app-content">
        <div class="row">
            <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto row border-0 bg-main">
                <div class="p-5">
                    <div class="row">
                        <div class="title text-white">
                            THÊM BÀI VIẾT
                        </div>
                        <div class="p-3 col-xl-7 col-lg-7 col-md-12">
                            <!-- name of repice -->
                            <div class="form-group mb-3">
                                <label for="title">Tiêu đề</label>
                                <input type="text" id="title" name="title" class="form-control rounded-0">
                            </div>
                            <!-- categories -->
                            <div class="form-group mb-3">
                                <label for="categories">Danh mục</label>
                                <select name="categories" id="categories" class="form-select rounded-0">
                                    <option selected value=""></option>
                                    <option value="">Gà</option>
                                    <option value="">Bò</option>
                                </select>
                            </div>
                            <!-- description -->
                            <div class="form-group mb-3">
                                <label for="description">Mô tả (Nếu có)</label>
                                <textarea name="description" id="description" class="form-control rounded-0"></textarea>
                            </div>
                            <!-- ingredients -->
                            <div class="form-group mb-3">
                                <label for="ingredients">Thành phần</label>
                                <input type="text" id="ingredients" name="ingredients" class="form-control rounded-0">
                            </div>
                        </div>
                        <div class="p-3 col-xl-5 col-lg-5 col-md-12">
                            <img src="" alt="" height="230" class="w-100 rounded-3" style="max-width: 350px">
                            <input type="file" name="fileinput" id="fileinput" class="dis-none">
                            <div class="form-group pt-4">
                                <button class="w-100 p-2" onclick="document.getElementById('fileinput').click()">CHỌN ẢNH</button>
                            </div>
                        </div>
                        <div class="px-3">
                            <form action="view.php" method="post">
                                <label for="">Các bước thực hiện</label>
                                <textarea name="editor" id="editor"></textarea>
                            </form>
                            <script>
                                ClassicEditor
                                    .create(document.querySelector('#editor'))
                                    .then(editor => {
                                        console.log(editor);
                                    })
                                    .catch(error => {
                                        console.error(error);
                                    });
                            </script>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center pt-4">
                        <button class="btn-submit p-2">
                            THÊM
                        </button>
                    </div>
                </div>
            </div>
        </div>
      
   
    </main>
   
   
</body>

</html>
