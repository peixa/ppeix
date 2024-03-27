<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/assets/css/">
    <link rel="stylesheet" href="/assets/css/view.css"/>
    <title></title>
</head>
<body class="layui-view-body">
    <div class="layui-content">
        <div class="layui-row">
            <div class="layui-card">
                <div class="layui-card-header">add</div>
                <form class="layui-form layui-card-body" action="/latestnewsedit/1" method="post" enctype="multipart/form-data">
                @csrf
                  <div class="layui-form-item">
                    <label class="layui-form-label">title</label>
                    <div class="layui-input-block">
                      <input type="text" name="title" value="{{ $info->title }}" required  lay-verify="required" placeholder="please enter" autocomplete="off" class="layui-input">
                    </div>
                  </div>

  

                  <div class="layui-form-item">
                    <label class="layui-form-label">content</label>
                    <div class="layui-input-block">
                      <textarea name="content" placeholder="please enter" class="layui-textarea">{{ $info->tag }}</textarea>
                    </div>
                  </div>

                  <div class="layui-form-item">
                    <div class="layui-input-block">
                    <input type="hidden" name="id" value="{{ $info->id }}" required  lay-verify="required" placeholder="" autocomplete="off" class="layui-input">
                      <button class="layui-btn layui-btn-blue" lay-submit lay-filter="formDemo">submit</button>
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