<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="./assets/css/layui.css">
    <link rel="stylesheet" href="./assets/css/login.css">
    <link rel="icon" href="/favicon.ico">
    <title>Management background</title>
</head>
<body class="login-wrap">
    <div class="login-container">
        <form class="login-form" method="post">
        @csrf
            <div class="input-group">
                <input type="text" id="username" name="name" class="input-field">
                <label for="username" class="input-label">
                    <span class="label-title">Username</span>
                </label>
            </div>
            <div class="input-group">
                <input type="password" id="password" name="password" class="input-field">
                <label for="password" class="input-label">
                    <span class="label-title">password</span>
                </label>
            </div>
            <button type="submit" class="login-button">login<i class="ai ai-enter"></i></button>
        </form>
    </div>
</body>
<script src="./assets/layui.js"></script>
<script src="./index.js" data-main="login"></script>
</html>