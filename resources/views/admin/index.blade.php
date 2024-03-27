<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="./assets/css/layui.css">
    <link rel="stylesheet" href="./assets/css/admin.css">
    <title>Backend management system</title>
</head>
<body class="layui-layout-body">
    <div class="layui-layout layui-layout-admin">
        <div class="layui-header custom-header">
            
            <ul class="layui-nav layui-layout-left">
                <li class="layui-nav-item slide-sidebar" lay-unselect>
                    <a href="javascript:;" class="icon-font"><i class="ai ai-menufold"></i></a>
                </li>
            </ul>

            <ul class="layui-nav layui-layout-right">
                <li class="layui-nav-item">
                    <a href="javascript:;">Admin</a>
                    <dl class="layui-nav-child">
                        <dd><a href="/logout">log out</a></dd>
                    </dl>
                </li>
            </ul>
        </div>

        <div class="layui-side custom-admin">
            <div class="layui-side-scroll">

                <div class="custom-logo">
                    <img src="assets/images/logo.png" alt=""/>
                    <h1>Backend management center</h1>
                </div>
                <ul id="Nav" class="layui-nav layui-nav-tree">

                    <li class="layui-nav-item">
                        <a href="javascript:;">
                            <i class="layui-icon">&#xe612;</i>
                            <em>User Management</em>
                        </a>
                        <dl class="layui-nav-child">
                            <dd><a href="/user">User List</a></dd>
                        </dl>
                    </li>

                    <li class="layui-nav-item">
                        <a href="javascript:;">
                            <i class="layui-icon">&#xe857;</i>
                            <em>Post management</em>
                        </a>
                        <dl class="layui-nav-child">
                            <dd><a href="/model">Post module</a></dd>
                        </dl>
                        <dl class="layui-nav-child">
                            <dd><a href="/latestnews">Post management</a></dd>
                        </dl>

                    </li>
                </ul>
            </div>
        </div>

        <div class="layui-body">
             <div class="layui-tab app-container" lay-allowClose="true" lay-filter="tabs">
                <ul id="appTabs" class="layui-tab-title custom-tab"></ul>
                <div id="appTabPage" class="layui-tab-content"></div>
            </div>
        </div>

    
        <div class="mobile-mask"></div>
    </div>
    <script src="./assets/layui.js"></script>
    <script src="./index.js" data-main="home"></script>
</body>
</html>