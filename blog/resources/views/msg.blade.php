<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>blog</title>
</head>
<body>
    <div id="header">
        <a href="/blog/public">首页</a>
        <hr/>
    </div>
    <div id="content">
        <!-- 加载外部文件 -->
        @yield('content')
    </div>
    <div id="footer">
        <hr/>
        &copy;phpblog
    </div>

</body>
</html>