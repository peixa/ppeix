<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="./assets/css/addmodel.css" />
    <link rel="stylesheet" href="./assets/css/layui.css">
    <title>Final Fantasy</title>
</head>

<body class="layui-view-body">
    <div class="layui-content">
    @include('index/common/top')


        <div class="box">
  
            <div  lay-accordion="">
                <form class="layui-form layui-form-pane" action=""  method="post">
                @csrf
                <div class="layui-form-item">
                @foreach ($iconlist as $v)
                    <div class="vox-list" style="background-image: url({{$v->image}});">
                        <input type="radio" name="tag" id="" value="{{$v->id}}">
                    </div>
                @endforeach
                </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">title</label>
                        <div class="layui-input-block">
                        <input type="text" name="title" autocomplete="off" placeholder="please enter the title" class="layui-input">
                        </div>
                    </div>
               

                <div class="layui-form-item layui-form-text">
                    <label class="layui-form-label">element</label>
                    <div class="layui-input-block">
                    <textarea placeholder="Please enter content" name="content" class="layui-textarea"></textarea>
                    </div>
                </div>
               
                <div class="layui-form-item">
                    <button class="layui-btn" lay-submit="" lay-filter="demo2">submit</button>
                </div>
                </form>
            </div>
        </div>

    </div>
    <script src="./assets/layui.all.js"></script>
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