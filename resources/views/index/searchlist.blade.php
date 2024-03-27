<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="/assets/css/list.css" />
    <link rel="stylesheet" href="/assets/css/layui.css">
    <title>Final Fantasy</title>
    <style>
        .box-right {
            float: right;
        }
        .layui-nav{
            width: 1200px;
            margin: 0 auto;
        }
        .layui-btn{
            margin-top: -3px;
            margin-left: -4px;
        }
    </style>
</head>

<body class="layui-view-body">
    <div class="layui-content">
    @include('index/common/top')


        <div class="box">
            <div class="layui-collapse" lay-accordion="">
            @foreach ($list as $v)
                <div class="layui-colla-item">
                    <h2 class="layui-colla-title">{{$v->title}}</h2>
                    <div class="layui-colla-content layui-show">
                        <a href="/content/{{$v->id}}">
                            {{$v->content}}
                        </a>
                    </div>
                </div>
            @endforeach

 

            </div>
        </div>

    </div>
    <script src="/assets/layui.all.js"></script>
</body>


</html>