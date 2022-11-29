<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/body_news.css">
</head>
<body>
    @include('library.toplibs')
    
    @include('header_footer.header')
    
    @include('user.page.news.search_header')

    @include('user.page.news.body_news_1')
    @include('user.page.news.body_news_2')

    @include('header_footer.footer')

    @include('library.bottomlibs')
</body>
</html>
