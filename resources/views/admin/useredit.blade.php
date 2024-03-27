<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/assets/css/layui.css">
    <link rel="stylesheet" href="/assets/css/view.css"/>
    <title></title>
</head>
<body class="layui-view-body">
    <div class="layui-content">
        <div class="layui-row">
            <div class="layui-card">
                <div class="layui-card-header">add</div>
                <form class="layui-form layui-card-body" action="/useredit/1" method="post">
                @csrf
                  <div class="layui-form-item">
                    <label class="layui-form-label">email</label>
                    <div class="layui-input-block">
                      <input type="text" name="phone" value="{{$UserInfo->phone}}" required  lay-verify="required" placeholder="请输入手机号" autocomplete="off" class="layui-input">
                    </div>
                  </div>
                  <div class="layui-form-item">
                    <label class="layui-form-label">name</label>
                    <div class="layui-input-block">
                      <input type="text" name="name" value="{{$UserInfo->name}}"  required  lay-verify="required" placeholder="请输入姓名" autocomplete="off" class="layui-input">
                    </div>
                  </div>
                  <div class="layui-form-item">
                    <label class="layui-form-label">password</label>
                    <div class="layui-input-inline">
                      <input type="password" name="password"  value="{{$UserInfo->password}}" required lay-verify="required" placeholder="请输入密码" autocomplete="off" class="layui-input">
                    </div>
                  </div>
                  <div class="layui-form-item">
                    <label class="layui-form-label">sex</label>
                    <div class="layui-input-block">
                      <input type="radio" name="sex" value="男" title="男" @if ($UserInfo->sex == '男') checked  @endif >
                      <input type="radio" name="sex" value="女" title="女" @if ($UserInfo->sex == '女') checked  @endif >
                    </div>
                   
                  </div>
                  <div class="layui-form-item">
                    <div class="layui-input-block">
                    <input  type="hidden" name="id" value="{{$UserInfo->id}}" required lay-verify="required"  autocomplete="off" class="layui-input">
                      <button class="layui-btn layui-btn-blue" lay-submit lay-filter="formDemo">change</button>
                      <button type="reset" class="layui-btn layui-btn-primary">reset</button>
                    </div>
                  </div>
                </form>  
            </div>
        </div>
    </div>
    <script src="/assets/layui.all.js"></script>
    <script>
      var form = layui.form
        ,layer = layui.layer;
    </script>
</body>
</html>