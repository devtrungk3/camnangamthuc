{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang Quản Trị</title>
    @include('layouts.user.link.toplibs')
    {{-- <link rel="stylesheet" href="/css/dashboard.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css"
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
        @include('layouts.admin.link.toplibs')
</head>

<body class="app sidebar-mini rtl">
    <!-- Navbar-->
    {{-- <header class="app-header">
        <!-- Sidebar toggle button-->

        <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar">
        </a>
    </header> --}}
    @include('layouts.admin.header')



    <!-- Sidebar menu-->
    {{-- <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
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
    </aside> --}}
    @include('layouts.admin.sidebar')



    <main class="app-content">
        <div class="app-title">
            <div>
              <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
              {{-- <p>Chào Mừng</p> --}}
            </div>
            <ul class="app-breadcrumb breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('index') }}"><i class="fa fa-home fa-lg"></i></a></li>
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            </ul>
          </div>
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="widget-small primary coloured-icon">
                    <i class="fas fa-info icon"></i>
                    <div class="info">
                        <h4>Số lượng</h4>
                        <p><b>5</b></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="widget-small warning coloured-icon">
                    <i class="far fa-eye icon"></i>
                    <div class="info">
                        <h4>Lượt xem</h4>
                        <p><b>10</b></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="widget-small info coloured-icon">
                    <i class="fas fa-thumbs-up icon"></i>
                    <div class="info">
                        <h4>Lượt thích</h4>
                        <p><b>25</b></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="tile">
                    <h3 class="tile-title">Views</h3>
                    <div class="embed-responsive embed-responsive-16by9">
                        <canvas class="embed-responsive-item" id="barChartView"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="tile">
                    <h3 class="tile-title">Likes</h3>
                    <div class="embed-responsive embed-responsive-16by9">
                        <canvas class="embed-responsive-item" id="barChartLike"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <th>Mã công th</th>
                                    <th>Tên công thức</th>
                                    <th>Lượt xem</th>
                                    <th>Lượt thích</th>
                                    <th>Ngày tạo</th>
                                    <th>Ngày cập nhật</th>
                                    <th>Tên danh mục</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Mã công th</th>
                                    <th>Tên công thức</th>
                                    <th>Lượt xem</th>
                                    <th>Lượt thích</th>
                                    <th>Ngày tạo</th>
                                    <th>Ngày cập nhật</th>
                                    <th>Tên danh mục</th>
                                </tr>
                                <tr>
                                    <th>Mã công th</th>
                                    <th>Tên công thức</th>
                                    <th>Lượt xem</th>
                                    <th>Lượt thích</th>
                                    <th>Ngày tạo</th>
                                    <th>Ngày cập nhật</th>
                                    <th>Tên danh mục</th>
                                </tr>
                                <tr>
                                    <th>Mã công th</th>
                                    <th>Tên công thức</th>
                                    <th>Lượt xem</th>
                                    <th>Lượt thích</th>
                                    <th>Ngày tạo</th>
                                    <th>Ngày cập nhật</th>
                                    <th>Tên danh mục</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('layouts.user.link.botlibs')
    {{-- <script src="js/jquery-3.2.1.min.js"></script>
    <script src="/js/dashboard.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="/js/chart.js"></script>
    <script type="text/javascript">
        var data1 = {
            labels: ["col", "col", "col", "col", "col", "col", "col", "col", "col", "col", "col", "col"],
            datasets: [{
                label: "My First dataset",
                fillColor: "rgba(227,86,40,255)",
                strokeColor: "rgba(220,220,220,1)",
                pointColor: "rgba(220,220,220,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)",
                data: [65, 59, 80, 81, 56, 25, 65, 76, 23, 79, 11, 33],
            }],
        };
        var data2 = {
            labels: ["col", "col", "col", "col", "col", "col", "col", "col", "col", "col", "col", "col"],
            datasets: [{
                label: "My First dataset",
                fillColor: "rgba(32,144,184,255)",
                strokeColor: "rgba(220,220,220,1)",
                pointColor: "rgba(220,220,220,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)",
                data: [65, 12, 95, 81, 70, 59, 80, 81, 56, 25, 65, 76],
            }],
        };

        var ctxb = $("#barChartView").get(0).getContext("2d");
        var barChart = new Chart(ctxb).Bar(data1);

        var ctxb = $("#barChartLike").get(0).getContext("2d");
        var barChart = new Chart(ctxb).Bar(data2);

        $('#sampleTable').DataTable();
    </script> --}}
    @include('layouts.admin.link.botlibs')



    <!-- Google analytics script-->
    {{-- <script type="text/javascript">
        if (document.location.hostname == "pratikborsadiya.in") {
            (function(i, s, o, g, r, a, m) {
                i["GoogleAnalyticsObject"] = r;
                (i[r] =
                    i[r] ||
                    function() {
                        (i[r].q = i[r].q || []).push(arguments);
                    }),
                (i[r].l = 1 * new Date());
                (a = s.createElement(o)), (m = s.getElementsByTagName(o)[0]);
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m);
            })(
                window,
                document,
                "script",
                "//www.google-analytics.com/analytics.js",
                "ga"
            );
            ga("create", "UA-72504830-1", "auto");
            ga("send", "pageview");
        }
    </script> --}}
</body>

</html>
