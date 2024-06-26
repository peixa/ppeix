<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <title>system message</title>
    <link rel="stylesheet" href="css/pintuer.css">
    <style type="text/css">
        *{ margin:0px; padding:0px;}
        .error-container{ background:#fff; border:1px solid #0ae;  text-align:center; width:450px; margin:250px auto; font-family:Microsoft Yahei; padding-bottom:30px; border-top-left-radius:5px; border-top-right-radius:5px;  }
        .error-container h1{ font-size:16px; padding:12px 0; background:#0ae; color:#fff;}
        .errorcon{ padding:35px 0; text-align:center; color:#0ae; font-size:18px;}
        .errorcon i{ display:block; margin:12px auto; font-size:30px; }
        .errorcon span{color:red;}
        h4{ font-size:14px; color:#666;}
        a{color:#0ae;}
    </style>
</head>
<body class="no-skin">
<div class="error-container">
    <h1> Backend management system-information prompts </h1>
    <div class="errorcon">
        @if ($data['status'])
        <i class="icon-smile-o"></i>{{ $data['message'] }}
        @else
        <i class="icon-frown-o"></i>{{ $data['message'] }}!
        @endif
    </div>
    <h4 class="smaller">Page automatically  <a id="href" href="{{ $data['url'] }}">jumps</a> waiting time： <b id="wait">{{ $data['jumpTime'] }}</b></h4>

</div>

<script type="text/javascript">
    (function(){
        var wait = document.getElementById('wait'),href = document.getElementById('href').href;
        var interval = setInterval(function(){
            var time = --wait.innerHTML;
            if(time <= 0) {
                location.href = href;
                clearInterval(interval);
            };
        }, 1000);
    })();
</script>
</body>
</html>
