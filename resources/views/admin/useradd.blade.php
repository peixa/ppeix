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
                <div class="layui-card-header">add user</div>
                <form class="layui-form layui-card-body" action="/useradd" method="post">
                @csrf
                  <div class="layui-form-item">
                    <label class="layui-form-label">email</label>
                    <div class="layui-input-block">
                      <input type="text" name="phone" required  lay-verify="required" placeholder="please enter email" autocomplete="off" class="layui-input">
                    </div>
                  </div>
                  <div class="layui-form-item">
                    <label class="layui-form-label">name</label>
                    <div class="layui-input-block">
                      <input type="text" name="name" required  lay-verify="required" placeholder="please enter name" autocomplete="off" class="layui-input">
                    </div>
                  </div>
                  <div class="layui-form-item">
                    <label class="layui-form-label">password</label>
                    <div class="layui-input-inline">
                      <input type="password" name="password" required lay-verify="required" placeholder="please enter password" autocomplete="off" class="layui-input">
                    </div>
                  </div>
                  <div class="layui-form-item">
                    <label class="layui-form-label">sex</label>
                    <div class="layui-input-block">
                      <input type="radio" name="sex" value="male" title="male">
                      <input type="radio" name="sex" value="femmale" title="female" checked>
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