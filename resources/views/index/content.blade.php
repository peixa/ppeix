<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="/assets/css/content.css" />
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
            <fieldset class="layui-elem-field layui-field-title" >
                <legend>
                    <img src="/{{$info->image}}" alt="" srcset="">
                    {{$info->title}}
                </legend>
            </fieldset>
            <div class="layui-collapse" lay-accordion="">
             
                    <h1>{{$content->title}}</h1>
                    <h2>{{$content->createtime}}</h2>
                   <p>
                   {{$content->content}}
                   </p>
            </div>
            <br>
            @foreach ($ly as $v)
            <fieldset class="layui-elem-field">
                <legend>{{$v->name->name}}</legend>
                <div class="layui-field-box">
                    {{$v->content}}
                </div>
                {{$v->createtime}}
            </fieldset>
            @endforeach

            <form class="layui-form layui-form-pane" action="" method="post">
                @csrf
                <div class="layui-form-item layui-form-text">
                    <label class="layui-form-label">leave a message</label>
                    <div class="layui-input-block">
                    <textarea placeholder="Please enter content" name="content" class="layui-textarea"></textarea>
                    </div>
                </div>
                <div class="layui-form-item">
                    <input type="hidden" name="id" value="{{$content->id}}">
                    <button class="layui-btn" lay-submit="" lay-filter="demo2">submit</button>
                </div>
            </form>

        </div>

    </div>
    <script src="/assets/layui.all.js"></script>
</body>
<script>
    layui.use(['carousel', 'form'], function() {
        var carousel = layui.carousel,
            form = layui.form;
        //图片轮播
        carousel.render({
            elem: '#test10',
            width: '1200px',
            height: '300px',
            interval: 3000
        });
    });
</script>

</html>