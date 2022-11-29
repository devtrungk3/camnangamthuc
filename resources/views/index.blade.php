<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang chủ</title>
    @include('library.toplibs')
</head>

<body>
    @include('header_footer.header')
    @include('user.slideshow.slide')
    @include('user.body_home.body')
    @include('header_footer.footer')
</body>
    @include('library.bottomlibs')
</html>