$(document).ready(function () {
    $('#login').click(function () {
        login();
    })

    $('#register').click(function () {
        register();
    })
})

function login() {
    art.dialog({
        id: 'login',
        title: '红安天狗-登录',
        content: '账号：<input id="login-ph" type="text" value="" placeholder="手机号" /><br />'
            + '密码：<input id="login-pw" type="password" value="" placeholder="密码"/><br />'
            + '验证码：<input class="input-mini" id="login-vcode" type="text" value="" placeholder="验证码"/><img style="cursor: pointer;" id="vcode" onclick="get_vcode()" src="/vcode?v=' + Math.random() + '" alt=""><br />'
            + '<a id="error" style="color: red" class="btn-link pull-left"></a> '
            + '<a href="/user/forgot" target="_blank" style="margin-left: 5px;" class="btn-link pull-right"> 忘记密码?</a> '
            + '<a target="_blank" class="btn-link pull-right" href="/user/register">免费注册 </a>',
        lock: true,
        fixed: true,

        ok: function () {
            var pw = document.getElementById('login-pw');
            var ph = document.getElementById('login-ph');
            var vcode = document.getElementById('login-vcode');
            login_result = false;
            error = '';
            $.ajax({
                async: false,
                url: '/user/ajax_login',
                type: 'post',
                data: "username=" + ph.value + "&password=" + pw.value + "&vcode=" + vcode.value,
                dataType: 'text',
                success: function (msg) {

                    if (msg == 'ok') {
                        login_result = true;
                    }
                    else if (msg == 'vcode') {
                        $('#error').html('验证码错误!');
                        login_result = false;
                        error = '验证码错误';
                        return false;
                    }
                }
            });
            if (login_result == false) {
                pw.select();
                pw.focus();
                if (error == '')
                    $('#error').html('用户名或密码错误!');
                else
                    $('#error').html(error);
                this.shake();
                return false;
            }
            else if (login_result == true) {
                this
                    .title()
                    .content('<img src="/images/confirm.png" width="27px" height="27px">登陆成功!')
                    .button()
                    .lock()
                    .time(2000);
                window.location.reload();
                return false;
            }
        },
        okValue: '登录',
        cancelValue: '取消',
        cancel: function () {
        }
    });
    $('#login-ph').focus();
}

function user_center() {
    var back = check_user_login();

    if (back == false) {
        login();
        return false
    }
    window.location.href = '/my?t=my';
}

function loged() {
    var back = check_user_login();

    if (back == false) {
        login();
        return false
    }
    else {
        return true;
    }
}

function dish_hot(id) {
    var back = check_user_login();

    if (back == false) {
        login();
        return false
    }
    else {
        $.ajax({
            async: false,
            url: '/comment/dish_hot?dish_id=' + id,
            type: 'get',
            dataType: 'text',
            success: function (msg) {
                art.dialog({
                    title: '消息',
                    content: msg,
                    okValue: '确定',
                    ok: function () {
                        return true;
                    },
                    lock: true
                });
            }
        });
        return false;
    }
}

function check_in(id) {
    var back = check_user_login();

    if (back == false) {
        login();
        return false
    }
    else {
        $.ajax({
            async: false,
            url: '/comment/check_in?partner_id=' + id,
            type: 'get',
            dataType: 'text',
            success: function (msg) {
                art.dialog({
                    title: '消息',
                    content: msg,
                    okValue: '确定',
                    ok: function () {
                        return true;
                    },
                    lock: true
                });
//                art.alert(msg);
            }
        });
        return false;
    }
}

function collect(id) {
    var back = check_user_login();

    if (back == false) {
        login();
        return false
    }
    else {
        $.ajax({
            async: false,
            url: '/discount/collect?discount_id=' + id,
            type: 'get',
            dataType: 'text',
            success: function (msg) {
                art.dialog({
                    title: '消息',
                    content: msg,
                    okValue: '确定',
                    ok: function () {
                        return true;
                    },
                    lock: true
                });
            }
        });
        return false;
    }
}

function follow(id) {
    var back = check_user_login();

    if (back == false) {
        login();
        return false
    }
    else {
        $.ajax({
            async: false,
            url: '/ajax/follow?partner_id=' + id,
            type: 'get',
            dataType: 'text',
            success: function (msg) {
                art.dialog({
                    title: '消息',
                    content: msg,
                    okValue: '确定',
                    ok: function () {
                        return true;
                    },
                    lock: true
                });
            }
        });
        return false;
    }
}

function check_user_login() {
    $.ajax({
        async: false,
        url: '/ajax/check_login',
        type: 'get',
        dataType: 'json',
        success: function (msg) {
            back = msg.data;
        }
    });
    return back;


}

function get_vcode() {
    var img = document.getElementById("vcode");
    img.src = "/vcode?v=" + Math.random();
}