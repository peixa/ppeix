<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="./assets/css/layui.css">
    <link rel="stylesheet" href="./assets/css/view.css" />
    <title>system message</title>
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
                        <form action="/user" method="post">
                        @csrf
                        <div class="layui-form layui-form-item">
                            <div class="layui-inline">
                                <div class="layui-form-mid">email:</div>
                                <div class="layui-input-inline" style="width: 100px;">
                                    <input type="text" name="phone" autocomplete="off" class="layui-input">
                                </div>
                                <button type="submit" class="layui-btn layui-btn-blue">search</button>
                            </div>
                        </div>
                        </form>
                        <a class="layui-btn layui-btn-blue" href="/useradd"><i class="layui-icon">&#xe654;</i>add</a>
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
                                        <th>name</th>
                                        <th>email</th>
                                        <th>sex</th>
                                        <th>password</th>
                                        <th>operate</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($list as $v)
                                    <tr>
                                        <td>{{$v->id}}</td>
                                        <td>{{$v->name}}</td>
                                        <td>{{$v->phone}}</td>
                                        <td>{{$v->sex}}</td>
                                        <td>{{$v->password}}</td>
                                        <td>
                                            <a href="/useredit/{{$v->id}}">edit</a>/<a href="/userdel/{{$v->id}}">delete</a>
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