<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>用户注册</title>
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
            <form>
                <p class="p-input pos">
                    <label for="tel">手机号</label>
                    <input type="number" name="user_phone" id="tel" autocomplete="off">
                    <span class="tel-warn tel-err hide"><em></em><i class="icon-warn"></i></span>
                </p>
                <p class="p-input pos" id="sendcode">
                    <label for="veri-code">输入验证码</label>
                    <input type="number" name="code" id="veri-code">
                    <a href="javascript:void(0)" id="send_code" class="send">发送验证码</a>
                </p>
                <p class="p-input pos">
                    <label for="tel">密码</label>
                    <input type="number" name="user_pwd" id="tel" autocomplete="off">
                </p>
                <p class="p-input pos">
                    <label for="tel">确认密码</label>
                    <input type="number" name="repwd" id="tel" autocomplete="off">
                </p>
            </form>
            <button class="lang-btn" id="reg">注册</button>
            <div class="bottom-info">已有账号，<a href="/login/login">马上登录</a></div>
        </div>
    </div>
</div>
<script src="/static/login/js/jquery.min.js"></script>
<script src="/static/login/js/agree.js"></script>
<div style="text-align:center;">
</div>
</body>
</html>
<script>
    $(function(){
        $(document).on('click','#send_code',function(){
            var user_phone = $('input[name=user_phone]').val();
            var myreg = /^[1][3,4,5,7,8,9][0-9]{9}$/;
            if (!myreg.test(user_phone)) {
                alert('手机号格式不正确')
                return false;
            }else{
                resetTime();
                $.ajax({
                    data:{user_phone:user_phone},
                    dataType:'json',
                    url:'/login/sendcode',
                    type:'post',
                    success:function (res) {
                        if(res.errno == '00000'){
                            alert(res.msg);
                        }else{
                           alert(res.msg);
                        }
                    }
                })
            }
        });

        $(document).on('click','#reg',function(){
            var user_phone = $('input[name=user_phone]').val();
            var user_pwd = $('input[name=user_pwd]').val();
            var repwd = $('input[name=repwd]').val();
            var code = $('input[name=code]').val();
            var myreg = /^[1][3,4,5,7,8,9][0-9]{9}$/;
            if (!myreg.test(user_phone)) {
                alert('手机号格式不正确!')
                return false;
            }else if (user_pwd == ""||repwd == ""){
                alert("密码不能为空!")
                return false;
            }else if (user_pwd != repwd){
                alert("两次密码必须一致");
                return false;
            }else{
                $.ajax({
                    data:{user_phone:user_phone,user_pwd:user_pwd,code:code},
                    dataType: 'json',
                    url:"/login/do_reg",
                    type: 'post',
                    success:function(res){
                        console.log(res);
                    }
                })
            }

        });

        function resetTime(){
            var second = 60;
            var timer = null;
            timer = setInterval(function(){
                second -= 1;
                if(second >0){
                    $("#send_code").attr("disabled",true);
                    $("#send_code").css("pointer-events","none");
                    $('#send_code').text(second + "秒后获取验证码");
                }else{
                    clearInterval(timer);
                    $("#send_code").attr("disabled",false);
                    $("#send_code").css("pointer-events","auto");
                    $('#send_code').text("发送验证码");
                }
            },1000);
        }
    })
</script>
