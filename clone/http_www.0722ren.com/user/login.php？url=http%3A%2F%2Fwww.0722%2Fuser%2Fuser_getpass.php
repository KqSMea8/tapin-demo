<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>会员登录_随州人才网会员登录――随州人才网</title>
<meta name="description" content="随州人才网登录处。欢迎各企业单位与各界经验人才登录随州人才网招工作发布招聘信息。">
<meta name="keywords" content="随州人才网会员登录">
<link rel="shortcut icon" href="../favicon.ico">
<meta name="author" content="随州人才网">
<meta name="copyright" content="0722ren.com">
<link href="../templates/demo11/css/reg.css" rel="stylesheet" type="text/css">
<script src="../templates/demo11/js/jquery.js" type="text/javascript" language="javascript"></script><script type="text/javascript">
$(document).ready(function()
{
	//验证码随机
	$("#getcode").live('click',function(){
		$(this).attr('src','/include/imagecaptcha.php?t='+Math.random()+'');
	});
	// 背景图片
	var aDiv = $(".banner-list").find("div"),
		index = 0,
		timer = null;
	timer = setInterval(function(){
		startFocus();
	},10000);
	function startFocus(){
		index++;
		index = index > aDiv.size()-1 ? 0 :index;
		aDiv.eq(index)
			 .stop()
			 .animate({'opacity':1},300)
			 .css({'z-index':10})
			 .siblings()
			 .stop()
			 .animate({'opacity':0},300)
			 .css({'z-index':0});
	}
	function stopFoucs(){
		clearInterval(timer);
	};
	// 选择登录方式 
	var wxrun = '';
	$('.login-type').toggle(function(){
		$('#pcLogin').hide();
		$('#codeLogin').show();
		$('#login-box h1').html('微信登录');
		$(this).attr('title', '用户名登录');
		$(this).removeClass('wx').addClass('pc');
			}, function(){
		$('#pcLogin').show();
		$('#codeLogin').hide();
		$('#login-box h1').html('会员登录');
		$(this).attr('title', '微信登录');
		$(this).removeClass('pc').addClass('wx');
			})
	//表单验证
	$("form[id=pcLogin]").submit(function(e) {
	e.preventDefault();
		if ($("#username").val()=="" || $("#username").val()=="用户名/邮箱/手机号")
		{			
			$(".login_err").html("请填写：用户名 / 邮箱 / 手机号");	
			$(".login_err").show();
		}
		else if($("#password").val()=="")
		{	
		$(".login_err").html("请填写密码！");
		$(".login_err").show();
		}
				else if($("#postcaptcha").val()=="")
		{	

			$(".login_err").html("请填写验证码！");
			$(".login_err").show();
		}
				else
		{
			$("#login").hide();
			$("#waiting").show();
			 if($("#expire").attr("checked")==true)
			 {
			 var expire=$("#expire").val();
			 }
			 else
			 {
			 var expire="";
			 }
			$.post("/plus/ajax_user.php", {"username": $("#username").val(),"password": $("#password").val(),"expire":expire,"url":"http://www.0722/user/user_getpass.php","postcaptcha":$("#postcaptcha").val(),"time": new Date().getTime(),"act":"do_login"},
		 	function (data,textStatus)
		 	 {
				if (data=="err" || data=="errcaptcha" || data=='status_err')
				{			
					$("#login").show();
					$("#waiting").hide();
					$("#password").attr("value","");
					$(".login_err").show();	
					if (data=="err")
					{
					errinfo="帐号或者密码错误";
					}
					else if(data=="errcaptcha")
					{
					$("#imgdiv img").attr("src",$("#imgdiv img").attr("src")+"1");
					errinfo="验证码错误";
					}
					else if(data=="status_err")
					{
					errinfo="账号已经被暂停，请联系管理员！";
					}
					$(".login_err").html(errinfo);
				}
				else
				{
					$("body").append(data);
				}
		 	 })		
		}
		return false;
	});
});
</script>
</head>
<body>
	<!-- 头部 -->
		<div id="reg-head" style="margin:0">
		<div class="container">
			<div class="logo-box f-left">
				<a href="../index.html" class="logo f-left"><img src="../data/images/logo.png" alt="随州人才网" width="261" height="70" border="0"></a>
				<a href="../index.html" class="back-index f-left"></a>
			</div>
			<div class="reg-tips f-left">欢迎登录</div>
			<div class="top-right f-right">
								<p class="f-left">还没有帐号?</p>
				<div class="f-left"><a href="user_reg.php" class="btn login-btn blue" style="color:#FFFFFF">立即注册</a></div>
							</div>
		</div>
	</div>	<div class="login-banner-wrap">
		<div class="banner-list">
			<div style="background-image:url(/templates/demo11/images/login-banner2.jpg);background-color:#22d5d5;"></div>
			<div style="background-image:url(/templates/demo11/images/login-banner3.jpg);background-color:#fef166;"></div>
			<div style="background-image:url(/templates/demo11/images/login-banner1.jpg);background-color:#e14644;"></div>
		</div>
	</div>
	<div id="login-box">
				<h1>会员登录</h1>
		<form action="http://www.0722ren.com/user/login.php?url=http%3A%2F%2Fwww.0722%2Fuser%2Fuser_getpass.php" id="pcLogin">
			<div class="login-ver-box tips">公共场所不建议自动登录，以防账号丢失</div>
			<div class="login-ver-box error login_err" style="display: none;"></div>
			<div class="login-input-item clearfix">
				<i class="login-icon l-icon-user f-left"></i>
				<div class="f-left"><input type="text" name="username" id="username" placeholder="用户名/手机/邮箱" class="login-input"></div>
				<div class="input-clear"></div>
			</div>
			<div class="login-input-item clearfix">
				<i class="login-icon l-icon-password f-left"></i>
				<div class="f-left"><input type="password" name="password" id="password" placeholder="密码" class="login-input"></div>
			</div>
						<div class="login-input-item lver clearfix">
				<div class="f-left"><input type="text" class="text span190 text-lg" name="postcaptcha" id="postcaptcha" placeholder="输入右侧验证码"></div>
				<div class="login-ver f-left"><img src="../include/imagecaptcha.php%EF%BC%9Ft=" id="getcode" align="absmiddle" style="cursor:pointer;width: 100px;height: 38px;" title="看不请验证码？点击更换一张" border="0"></div>
			</div>
						<div class="auto-login clearfix">
				<label class="f-left clearfix"><input type="checkbox" name="autologin" id="expire" value="7" class="f-left" style="margin-top: 1px;*margin-top: -3px;margin-right: 5px;"><span class="f-left">7日内自动登录</span></label>
				<a href="user_getpass.php" class="f-right">忘记密码？</a>
			</div>
			<div class="login-btn-box">
				<input type="submit" name="submitlogin" id="login" value="登   录" class="btn login-submit"><input type="text" id="waiting" value="正在登录..." class="btn login-submit" style="display: none;" disabled>
</div>
						<div class="cooperation-account">
				<p>使用合作账号登录</p>
				<div class="coop-account">
										<a href="connect_qq_client.php" class="qq">QQ</a>
																			</div>
			</div>
					</form>
			</div>
	<div id="footer" style="background-color:#ffffff;">
		<div class="copy-right" style="background-color:#ffffff;color:#333333">
			联系地址：随州市尚城国际 联系电话：0722-3588122 网站备案：鄂ICP备11005521号-4  鄂B2-20170179<br>
			Copyright @ 2016 0722ren.com All Right Reserved   <script src="../../http_s14.cnzz.com/stat.php%EF%BC%9Fonline=2&amp;id=893868&amp;web_id=893868" language="JavaScript" charset="gb2312"></script><span style="DISPLAY: none"><script language="javascript" type="text/javascript" src="../../http_js.users.51.la/1891441.js"></script><script>var _hmt = _hmt || [];(function() {var hm = document.createElement("script");hm.src = "//hm.baidu.com/hm.js?d6c43a5b68a1b1eade9b230287ea1290";var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(hm, s);})();</script></span> <br>
			Powered by <a href="../index.html" target="_blank" style="color:#333333">0722ren.com 随广传媒版权所有</a>
		</div>
	</div>
<script type="text/javascript" src="../../https_idm-su.baidu.com/su.js"></script>
</body>
</html>
