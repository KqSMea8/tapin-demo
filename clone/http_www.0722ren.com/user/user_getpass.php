<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>找回密码 - 随州人才网</title>
<link rel="shortcut icon" href="../favicon.ico">
<meta name="author" content="随州人才网">
<meta name="copyright" content="0722ren.com">
<link href="../templates/demo11/css/reg.css" rel="stylesheet" type="text/css">
<script src="../templates/demo11/js/jquery.js" type="text/javascript" language="javascript"></script><script src="../templates/demo11/js/jquery.validate.min.js" type="text/javascript" language="javascript"></script><script type="text/javascript">
$(document).ready(function()
{
	$(function() {
		$('.four-step-bar .step:last').css({'margin-right':0});
	});
	//验证码随机
	$("#getcode").live('click',function(){
		$(this).attr('src','/include/imagecaptcha.php?t='+Math.random()+'');
	});

	$("#Form1").validate({
		submitHandler:function(form){
			$.post('/plus/ajax_user.php', {"act":"get_pass_check_buding","username":$("#username").val()}, function(data){
				if($.trim(data)=="true")
				{
					form.submit();  
				}
				else if($.trim(data)=="false")
				{
					$("#Form1").hide();
					$("#buding").show();
				}
				else
				{
					$("#Form1").hide();
					$("#buding_wx").show();
				}
			});
		},
		success: function(lable) {
				lable.text(" ").addClass("ver-success");
		},
		rules:{
			username:{
				required: true,
				remote:{     
				url:"/plus/ajax_user.php",     
				type:"post",    
				data:{"username":function (){return $("#username").val()},"act":"get_pass_check"}     
				}
			},
			postcaptcha:{
				required: true,
				remote:{     
				url:"/include/imagecaptcha.php",     
				type:"post",    
				data:{"postcaptcha":function (){return $("#postcaptcha").val()},"act":"verify","time":function (){return new Date().getTime()}}     
				}
			}
		},
		messages: {
			username: {
				required: "请输入用户名",
				remote: jQuery.format("输入用户名有误")
			},
			postcaptcha: {
				required: "请填写验证码",
				remote: jQuery.format("验证码错误")	
			} 
		},
		errorPlacement: function(error, element) {
		if ( element.is(":radio") )
		error.appendTo( element.parent().next().next() );
		else if ( element.is(":checkbox") )
		error.appendTo ( element.next());
		else
		error.appendTo(element.parent().next());
		}
	});
});
</script>
</head>
<body class="login_body">
	<!-- 头部 -->
		<div id="reg-head">
		<div class="container">
			<div class="logo-box f-left">
				<a href="../index.html" class="logo f-left"><img src="../data/images/logo.png" alt="随州人才网" width="261" height="70" border="0"></a>
				<a href="../index.html" class="back-index f-left"></a>
			</div>
			<div class="reg-tips f-left">密码找回</div>
			<div class="top-right f-right">
								<p class="f-left">我已注册，现在就</p>
				<div class="f-left"><a href="login.php%EF%BC%9Fact=login" class="btn login-btn blue" style="color:#FFFFFF">登录</a></div>
							</div>
		</div>
	</div>	<!-- main -->
	<div class="container">
		<div class="step_wrap">
			<div class="four-step-bar clearfix">
				<div class="step tstep1 f-left active">
<i class="step-icon">1</i>填写账户名</div>
				<div class="step tstep2 f-left">
<i class="step-icon">2</i>验证身份</div>
				<div class="step tstep3 f-left">
<i class="step-icon">3</i>设置新密码</div>
				<div class="step tstep4 f-left">
<i class="step-icon">4</i>找回成功</div>
			</div>
		</div>
		<form action="http://www.0722ren.com/user/user_getpass.php?act=get_pass_step2" id="Form1" method="post">
		<div class="reg-main clearfix">
			<div class="reg-left-form f-left">
				<div class="reg-form-item clearfix">
					<div class="reg-form-type f-left">账户名</div>
					<div class="reg-form-content f-left">
						<input type="text" name="username" id="username" class="text text-lg span350" placeholder="用户名/邮箱/已验证手机">
</div>
					<div class="verification f-left"></div>
				</div>
				<div class="reg-form-item clearfix">
					<div class="reg-form-type f-left">验证码</div>
					<div class="reg-form-content f-left">
						<input type="text" name="postcaptcha" id="postcaptcha" class="text text-lg span180" placeholder="验证码">
</div>
					<div class="reg-form-other verification f-left" style="padding-left: 20px;">
						<div class="ver-box f-left"><img src="../include/imagecaptcha.php%EF%BC%9Ft=" id="getcode" align="absmiddle" style="cursor:pointer;width: 148px;height: 38px;" title="看不请验证码？点击更换一张" border="0"></div>
					</div>
					
				</div>
				<div class="reg-form-item special clearfix">
					<div class="reg-form-type f-left"> </div>
					<div class="reg-form-content f-left">
						<input type="hidden" name="token" value="bdcaa26d4641aec5"><input type="submit" value="提交" class="btn btn-lg blue span1">
</div>
				</div>
			</div>
		</div>
		</form>
		<div class="common-status" id="buding" style="display: none;padding:120px 0;">
			<div class="status-main">
			<span><img src="../templates/demo11/images/icon-error.png" alt="失败"></span>找回密码失败
			</div>
			<p>您的账号没绑定手机或邮箱，请联系网站管理员或拔打随州人才网客服电话0722-3588122！</p>
		</div>
		<div class="common-status" id="buding_wx" style="display: none;padding:50px 0;">
			<div class="status-main">
				<span><img src="../templates/demo11/images/icon-error.png" alt="失败"></span>您的账号暂不支持找回密码
			</div>
			<p>您的账号已绑定微信号，可直接微信 <a href="login.php">扫码登录&gt;&gt;</a></p>
		</div>
	</div>
	<div id="footer">
	<div class="index-container clearfix">
		<div class="footer-menu f-left">
			<div class="f-menu-item f-left">
				<h4 class="menu-title">关于我们</h4>
				<ul class="f-menu-list clearfix">
<li class="f-left"><a target="_blank" href="../explain/3.html">网站声明</a></li>
										<li class="f-left"><a target="_blank" href="../explain/1.html">服务内容</a></li>
										<li class="f-left"><a target="_blank" href="../explain/4.html">关于我们</a></li>
										<li class="f-left"><a target="_blank" href="../suggest.html">意见反馈</a></li>
															<li class="f-left"><a target="_blank" href="../explain/6.html">联系我们</a></li>
										<li class="f-left"><a target="_blank" href="../explain/7.html">网站简介</a></li>
										<li class="f-left"><a target="_blank" href="../news/news-list.php%EF%BC%9Fid=4">职场指南</a></li>
									</ul>
</div>
			<div class="f-menu-item f-left">
				<h4 class="menu-title">帮助中心</h4>
				<ul class="f-menu-list clearfix">
<li class="f-left"><a target="_blank" href="../help/help-list.php%EF%BC%9Fid=4">注册登录</a></li>
					<li class="f-left"><a target="_blank" href="../help/help-list.php%EF%BC%9Fid=5">密码找回</a></li>
					<li class="f-left"><a target="_blank" href="../help/help-list.php%EF%BC%9Fid=8">认证管理</a></li>
					<li class="f-left"><a target="_blank" href="../help/help-list.php%EF%BC%9Fid=10">招聘管理 </a></li>
					<li class="f-left"><a target="_blank" href="../help/help-list.php%EF%BC%9Fid=17">求职管理</a></li>
					<li class="f-left"><a target="_blank" href="../help/help-list.php%EF%BC%9Fid=13">充值消费 </a></li>
				</ul>
</div>
			<div class="f-menu-item f-left">
				<h4 class="menu-title">个人求职</h4>
				<ul class="f-menu-list clearfix">
<li class="f-left"><a target="_blank" href="../jobs/jobs-list.php">职位搜索</a></li>
					<li class="f-left"><a target="_blank" href="../salary.html">薪酬统计</a></li>
					<li class="f-left"><a target="_blank" href="../subscribe.html">职位订阅</a></li>
					<li class="f-left"><a target="_blank" href="../explain/explain-show.php%EF%BC%9Fid=6">职场指南</a></li>
					<li class="f-left"><a target="_blank" href="../hunter/jobs-list.php">猎头职位</a></li>
					<li class="f-left"><a target="_blank" href="../jobs/jobs-list.php%EF%BC%9Fnature=63">兼职招聘</a></li>
					<li class="f-left"><a target="_blank" href="../train/train-curriculum-list.php">培训课程</a></li>
				</ul>
</div>
			<div class="f-menu-item f-left">
				<h4 class="menu-title">企业服务</h4>
				<ul class="f-menu-list clearfix">
<li class="f-left"><a target="_blank" href="company/company_jobs.php%EF%BC%9Fact=addjobs">发布职位</a></li>
					<li class="f-left"><a target="_blank" href="../resume/resume-list.php">简历搜索</a></li>
					<li class="f-left"><a target="_blank" href="../simple/simple-list.php">招聘普工</a></li>
					<li class="f-left"><a target="_blank" href="../hrtools/hrtools-list.php">HR工具箱</a></li>
					<li class="f-left"><a target="_blank" href="login.php">企业注册</a></li>
					<li class="f-left"><a target="_blank" href="../jobfair/jobfair-list.php">现场招聘会</a></li>
				</ul>
</div>
		</div>
		<div class="foot-contact f-right">
			<div class="code-download clearfix">
				<div class="code-item f-left">
					<p>客户端下载</p>
					<div><img src="../plus/url_qrcode.php%EF%BC%9Furl=http%3A%2F%2Fwww.0722ren.com%2Fm%2Fdownload.php%3Fdowntype%3Dandroid" alt="客户端下载" width="80" height="80"></div>
				</div>
				<div class="code-item f-left">
					<p>官方微信</p>
					<div><img src="../data/images/weixin_img.jpg" alt="官方微信" width="80" height="80"></div>
				</div>
			</div>
			<div class="comment">0722-3588122</div>
		</div>
	</div>
	<div class="copy-right">
		联系地址：随州市尚城国际 联系电话：0722-3588122 网站备案：鄂ICP备11005521号-4  鄂B2-20170179<br>
		Copyright @ 2016 0722ren.com All Right Reserved   <script src="../../http_s14.cnzz.com/stat.php%EF%BC%9Fonline=2&amp;id=893868&amp;web_id=893868" language="JavaScript" charset="gb2312"></script><span style="DISPLAY: none"><script language="javascript" type="text/javascript" src="../../http_js.users.51.la/1891441.js"></script><script>var _hmt = _hmt || [];(function() {var hm = document.createElement("script");hm.src = "//hm.baidu.com/hm.js?d6c43a5b68a1b1eade9b230287ea1290";var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(hm, s);})();</script></span> <br>
		Powered by <a href="../index.html" target="_blank" style="color:#949494">0722ren.com 随广传媒版权所有</a>
	</div>
</div>
<!-- 回到顶部组件 -->
<div class="back_to_top" id="back_to_top">
	<div class="back" style="display:none;">
		<div>回到顶部</div>
	</div>
	<div class="steer">
		<div onclick="javascript:location.href='/suggest'">我要建议</div>
	</div>
	<div class="sub">
		<div onclick="javascript:location.href='/subscribe'">我要订阅</div>
	</div>
</div>
<script>
	$(function(){
		//回到顶部组件出现设置
		$(window).scroll(function(){
			if($(window).scrollTop()>200){
				$(".back").fadeIn(400);
			}else{
				$(".back").fadeOut(400);
			}
		})

		//回到顶部hover效果
		$(".back_to_top .back, .steer, .sub").hover(function(){
			$(this).find("div").css("display","block");
		},function(){
			$(this).find("div").css("display","none");
		})

		//设置滚回顶部方法
		$(".back").click(function(){
			$("body,html").animate({scrollTop:0}, 500);
			return false;
		})
	});
	$(function(){
		$(".foot_list ul:odd li").css("width", 62);
		$(".weixin_img:last").css("margin-right", 0);
	})
</script><script type="text/javascript" src="../../https_idm-su.baidu.com/su.js"></script>
</body>
</html>
