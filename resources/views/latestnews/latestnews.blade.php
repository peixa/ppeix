<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="./assets/css/layui.css">
    <link rel="stylesheet" href="./assets/css/view.css" />
    <title>Admin Backend</title>
</head>

<body class="layui-view-body">
    <div class="layui-content">
        <div class="layui-page-header">
            <div class="pagewrap">
                <span class="layui-breadcrumb">
                    <a href="">index</a>
                    <a href="">user</a>
                </span>
            </div>
        </div>
        <div class="layui-row">
            <div class="layui-card">
                <div class="layui-card-body">
                    <div class="form-box">

                        <a class="layui-btn layui-btn-blue" href="/latestnewsadd"><i class="layui-icon">&#xe654;</i>add</a>
                        <div class="layui-form layui-border-box  lay-filter="LAY-table-1">

                            <table class="layui-table">
                                <colgroup>
                                    <col width="150">
                                    <col width="150">
                                    <col width="200">
                                    <col>
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th>number</th>
                                        <th>title</th>
                                        <th>time</th>
                                        <th>operate</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($list as $v)
                                    <tr>
                                        <td>{{$v->id}}</td>
                                        <td>{{$v->title}}</td>
                                        <td>{{$v->createtime}}</td>
                                        <td>
                                        <a href="/latestnewsedit/{{$v->id}}">change</a>/<a href="/latestnewsdel/{{$v->id}}">delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./assets/layui.all.js"></script>
</body>

</html>