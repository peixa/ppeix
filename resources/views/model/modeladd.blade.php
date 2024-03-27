<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./assets/css/layui.css">
    <link rel="stylesheet" href="./assets/css/view.css"/>
    <title></title>
</head>
<body class="layui-view-body">
    <div class="layui-content">
        <div class="layui-row">
            <div class="layui-card">
                <div class="layui-card-header">add</div>
                <form class="layui-form layui-card-body" action="/modeladd" method="post" enctype="multipart/form-data">
                @csrf
                  <div class="layui-form-item">
                    <label class="layui-form-label">title</label>
                    <div class="layui-input-block">
                      <input type="text" name="title" required  lay-verify="required" placeholder="please enter" autocomplete="off" class="layui-input">
                    </div>
                  </div>


                  <div class="layui-form-item">
                    <label class="layui-form-label">picture</label>
                    <div class="layui-input-block">
                      <input type="file" name="image" required  lay-verify="required" placeholder="please enter" autocomplete="off" class="layui-input">
                    </div>
                  </div>

                  <div class="layui-form-item">
                    <div class="layui-input-block">
                      <button class="layui-btn layui-btn-blue" lay-submit lay-filter="formDemo">submit</button>
                      <button type="reset" class="layui-btn layui-btn-primary">reset</button>
                    </div>
                  </div>
                </form>  
            </div>
        </div>
    </div>
    <script src="./assets/layui.all.js"></script>
    <script>
      var form = layui.form
        ,layer = layui.layer;
    </script>
</body>
</html>