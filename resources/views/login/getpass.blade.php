<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>找回密码</title>
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
        <div class="form-data find_password">
            <h4>找回密码</h4>
            <p class="right_now">已有账号，<a href="/static/login/login.html">马上登录</a></p>
            <p class="p-input pos">
                <label for="pc_tel">手机号/邮箱</label>
                <input type="text" id="pc_tel">
            </p>
            <p class="p-input pos" id="sendcode">
                <label for="veri-code">输入验证码</label>
                <input type="number" id="veri-code">
                <a href="javascript:;" class="send">发送验证码</a>
            </p>
            <p class="p-input pos code pc-code">
                <label for="veri">请输入验证码</label>
                <input type="text" id="veri">
                <img src="">
            </p>
            <button class="lang-btn next">下一步</button>
        </div>
    </div>
</div>
<script src="/static/login/js/jquery.min.js"></script>
<script src="/static/login/js/agree.js"></script>
<script src="/static/login/js/reset.js"></script>
<div style="text-align:center;">
</div>
</body>
</html>
