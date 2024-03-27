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
    
    <div class="layui-content" id="he">
        @include('index/common/top')

        <div class="box">
            <div class="box-left">
                <ul>
                    @foreach ($modellist as $v)
                    <li>
                        <a href="/list/{{$v->id}}">
                            <img src="{{$v->image}}" alt="" srcset="">
                        </a>
                        <hr>
                        <p>
                            {{$v->title}}
                        </p>
                    </li>
                    @endforeach
                </ul>
            </div>

            <div class="box-r">
                <h1>Active users</h1>
                <hr>
                <div class="box-r-list">
                    <div class="left">
                        <img src="./assets/images/1.jpeg" width="100%" height="100%">
                    </div>
                    <div class="right">
                        <span class="name">APPLE</span>
                        <p class="name">NUM1@USEREMAIL.COM</p>
                    </div>
                    <hr>
                </div>

                <div class="box-r-list">
                    <div class="left">
                        <img src="./assets/images/2.jpeg" width="100%" height="100%">
                    </div>
                    <div class="right">
                        <span class="name">BANANA</span>
                        <p class="name">NUM2@USERMAIL.COM</p>
                    </div>
                    <hr>
                </div>

                <div class="box-r-list">
                    <div class="left">
                        <img src="./assets/images/3.jpeg" width="100%" height="100%">
                    </div>
                    <div class="right">
                        <span class="name">CANGEWW</span>
                        <p class="name">NUM3@USEREMAIL.COM</p>
                    </div>
                    <hr>
                </div>

                <div class="box-r-list">
                    <div class="left">
                        <img src="./assets/images/4.jpeg" width="100%" height="100%">
                    </div>
                    <div class="right">
                        <span class="name">DEALLLO</span>
                        <p class="name">NUM4@USER.COM</p>
                    </div>
                    <hr>
                </div>

                <div class="box-r-list">
                    <div class="left">
                        <img src="./assets/images/5.jpeg" width="100%" height="100%">
                    </div>
                    <div class="right">
                        <span class="name">ERRRLA</span>
                        <p class="name">NUM5@USEREMAIL.COM</p>
                    </div>
                    <hr>
                </div>

                <div class="box-r-list">
                    <div class="left">
                        <img src="./assets/images/6.jpeg" width="100%" height="100%">
                    </div>
                    <div class="right">
                        <span class="name">FALUE</span>
                        <p class="name">NUM6@USEREMAIL.COM</p>
                    </div>
                    <hr>
                </div>


            </div>
        </div>
        <a href="#he" id="top">TOP</a>
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