<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="/assets/css/index.css" />
    <link rel="stylesheet" href="/assets/css/layui.css">
    <title>Final Fantasy</title>
    <style>
        .box-right {
            float: right;
        }

        .layui-nav {
            width: 1200px;
            margin: 0 auto;
        }

        .layui-btn {
            margin-top: -3px;
            margin-left: -4px;
        }
        .layui-bg-gray{
            margin: 0 auto;
            text-align: center;
        }
        .layui-nav{
            text-align: center;
        }
    </style>
</head>

<body class="layui-view-body">

    <ul class="layui-nav">
        <li class="layui-nav-item layui-this"><a href="/login">log in</a></li>
        <li class="layui-nav-item"><a href="/zhuce">sign up</a></li>
        <li class="layui-nav-item box-right">
            <form action="/searchlist" method="post">
            @csrf
                <input type="tel" name="search" autocomplete="off" class="layui-input" style="width:150px;display:inline">
                <button class="layui-btn" lay-submit="" lay-filter="demo2">search</button>
            </form>
        </li>
    </ul>
    </div>
    </div>

    <script src="./assets/layui.all.js"></script>
</body>

</html>