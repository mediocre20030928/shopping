<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>用户登录</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="Keywords" content="网站关键词">
    <meta name="Description" content="网站介绍">
    <link rel="stylesheet" href="/static/login/css/base.css">
    <link rel="stylesheet" href="/static/login/css/iconfont.css">
    <link rel="stylesheet" href="/static/login/css/reg.css">
</head>
<body>
<div id="ajax-hook"></div>
<div class="wrap">
    <div class="wpn">
        <div class="form-data pos">
            <a href=""><img src="/static/login/img/logo.png" class="head-logo"></a>
            <div class="change-login">
                <p class="account_number on">账号登录</p>
            </div>
            <div class="form1">
                <p class="p-input pos">
                    <label for="num">手机号/用户名/UID/邮箱</label>
                    <input type="text" id="num">
                </p>
                <p class="p-input pos">
                    <label for="pass">请输入密码</label>
                    <input type="password" style="display:none"/>
                    <input type="password" id="pass" autocomplete="new-password">
                </p>
                <p class="p-input pos code hide">
                    <label for="veri">请输入验证码</label>
                    <input type="text" id="veri">
                    <img src="">
                </p>
            </div>
            <div class="r-forget cl">
                <a href="/static/login/reg.html" class="z">账号注册</a>
                <a href="/static/login/getpass.html" class="y">忘记密码</a>
            </div>
            <button class="lang-btn off log-btn">登录</button>
        </div>
    </div>
</div>

<div style="text-align:center;">
</div>
</body>
</html>
