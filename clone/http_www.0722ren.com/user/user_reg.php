<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>会员注册 - 随州人才网</title>
<link rel="shortcut icon" href="../favicon.ico">
<meta name="author" content="随州人才网">
<meta name="copyright" content="0722ren.com">
<link href="../templates/demo11/css/reg.css" rel="stylesheet" type="text/css">
<script src="../templates/demo11/js/jquery.js" type="text/javascript" language="javascript"></script><script src="../templates/demo11/js/jquery.validate.min.js" type="text/javascript" language="javascript"></script><script src="../templates/demo11/js/jquery.gotoemail.js" type="text/javascript" language="javascript"></script><script src="../templates/demo11/js/emailAutoComplete.js" type="text/javascript"></script><script>
$(document).ready(function($) {
	$(".reg-warning").eq(0).show();
	$(function() {
		$('.member-type').live('click', function(){
			$(this).addClass('select').siblings('.member-type').removeClass('select');
			var utype=$(this).attr("member-type"), index = $('.member-type').index(this);
			$(".utype").val(utype);
			$(".reg-warning").eq(index).show().siblings('.reg-warning').hide();
		})
	});
	//验证码随机
	$("#getcode").live('click',function(){
		$(this).attr('src','/include/imagecaptcha.php?t='+Math.random()+'');
	});
	// 手机注册 表单验证 
	$("#reg_by_mobile").validate({
		submitHandler:function(form){
			if($("#agreement_mobile").attr("checked")==false)
			{
				alert("您必须同意[注册协议]才能继续下一步");
				return false;
			}
        	form.submit();  
		},
		success: function(lable) {
				lable.text(" ").addClass("ver-success");
				$("#sms_send").attr("disabled",false);
			},
		rules:{	
			mobile:
			{
				required: true,
				ismobile : true,
				remote:{     
					url:"/plus/ajax_user.php",     
					type:"post",    
					data:{"mobile":function (){return $("#mobile").val()},"act":"check_mobile","time":function (){return new Date().getTime()}}     
				}
			},
			mobile_vcode:
			{
				required: true,
				remote:{     
					url:"/plus/ajax_user.php",     
					type:"post",    
					data:{"mobile":function (){return $("#mobile").val()},"mobile_vcode":function (){return $("#mobile_vcode").val()},"act":"check_reg_send_sms","time":function (){return new Date().getTime()}}     
				}
			}
		},
		messages: {
			mobile: {
				required: "请填写手机号",
				remote: jQuery.format("手机号已存在或不合法")
			},
			mobile_vcode:
			{
				required: "请输入手机验证码",
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
	// 手机
	jQuery.validator.addMethod("ismobile", function(value, element) { 
	var tel = /^(13|15|18|17)\d{9}$/;
	var $cstr= false;
	if (tel.test(value)) $cstr= true;
	return $cstr || this.optional(element); 
	}, "请输入正确的手机号");

	// 邮箱注册 表单验证 
	$("#reg_by_email").validate({
		submitHandler:function(form){
			if($("#agreement_email").attr("checked")==false)
			{
				alert("您必须同意[注册协议]才能继续下一步");
				return false;
			}
			var check_reg_email="0";
			if(check_reg_email=="1")
			{	
				$("#reg_email_submit").hide();
				$("#reg_email_submit_").show();
				$.post('/plus/ajax_user.php', {"act":"reg_sendemail","email":$("#email").val(),"utype":$("#utype").val()}, function(data) {
					if ($.trim(data)=='success') 
					{
						$(".reg-main").hide();
						$("#send_email").html($("#email").val());
						$("#goto_email").attr('email', $("#email").val());
						$(".common-status").show();
						// 立即进入邮箱
						gotoemail("#goto_email");
					}
					else
					{
						$("#reg_email_submit").show();
						$("#reg_email_submit_").hide();
						alert(data)
					}
				});
				return false;
			}

			else
			{
				form.submit(); 
			}
		},
		success: function(lable) {
				lable.text(" ").addClass("ver-success");
			},
		rules:{	
			email:
			{
				required: true,
				email:true,
				remote:{     
					url:"/plus/ajax_user.php",     
					type:"post",    
					data:{"email":function (){return $("#email").val()},"act":"check_email"}     
				}
			},
			postcaptcha:
			{
				required: true,
				remote:{     
					url:"/include/imagecaptcha.php",     
					type:"post",    
					data:{"postcaptcha":function (){return $("#postcaptcha").val()},"act":"verify"}     
				}
			}
		},
		messages: {
			email:
			{
				required: "请输入邮箱",
				email: "请输入正确格式的邮箱",
				remote: jQuery.format("该邮箱已存在或不合法！")	
			},
			postcaptcha:
			{
				required: "请输验证码",
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
	// 点击发送到手机验证码
	$("#sms_send").click(function() {
		var checkText = $("#mobile").parent().next().text(),
			SysSecond = 180;
		if ($("#mobile").val().length <= 0) {
			$("#sms_send").attr("disabled",true);
			$(this).addClass('error');
			$("#mobile").parent().next().html('<label for="mobile" generated="true" class="error" style="display: inline;">请输入手机号');
			return false;
		} else if (checkText.indexOf('手机号已被注册') > -1) {
			$("#sms_send").attr("disabled",true);
			return false;
		} else {
			$.post('/plus/ajax_user.php', {'act':'reg_send_sms','mobile':$('#mobile').val()}, function(data) {
				if($.trim(data)=='success')
				{
					$("#sms_send").hide();
					$("#send_ok").css('display', 'inline-block');
					$("#send_ok").html( SysSecond +" 秒后可重新获取");
					function SetRemainTime()
					{
						if (SysSecond > 0)
						{
							SysSecond --;
							$("#sms_send").closest('.reg-form-item').addClass('reg-form-item-sms');
							$("#sms_send").hide();
							$("#send_ok").css('display', 'inline-block');
							$("#send_ok").html( SysSecond +" 秒后可重新获取");
							$(".sms_send_succeed").show();
						} 
						else 
						{
							window.clearInterval(InterValObj);
							$("#sms_send").show();
							$("#sms_send").closest('.reg-form-item').removeClass('reg-form-item-sms');
							$("#send_ok").hide();
							$(".sms_send_succeed").hide();
						}
					}
					InterValObj = window.setInterval(SetRemainTime, 1000);
				}
				else
				{
					alert(data);
				}
			});
		};
	});
	//修改手机号 手机验证码变化
	$("#mobile").change(function() {
		$("#sms_send").show();
		$("#send_ok").hide();
	});
	// 改变注册方式 手机/邮箱
	$("#change_reg_type").click(function() {
		var reg_type =$(this).attr("reg_type");
		if(reg_type==1)
		{
			$(this).attr("reg_type","2");
			$(this).html("使用手机注册>>");
			$("#reg_type").val("2");
			$("#reg_by_email").show();
			$("#reg_by_mobile").hide();
		}
		else
		{
			$(this).attr("reg_type","1");
			$(this).html("使用邮箱注册>>");
			$("#reg_type").val("1");
			$("#reg_by_mobile").show();
			$("#reg_by_email").hide();
		}
	});
});	
</script>
</head>
<body>
	<!-- 头部 -->
		<div id="reg-head">
		<div class="container">
			<div class="logo-box f-left">
				<a href="../index.html" class="logo f-left"><img src="../data/images/logo.png" alt="随州人才网" width="261" height="70" border="0"></a>
				<a href="../index.html" class="back-index f-left"></a>
			</div>
			<div class="reg-tips f-left">免费注册</div>
			<div class="top-right f-right">
								<p class="f-left">我已注册，现在就</p>
				<div class="f-left"><a href="login.php%EF%BC%9Fact=login" class="btn login-btn blue" style="color:#FFFFFF">登录</a></div>
							</div>
		</div>
	</div>	<!-- main -->
	<div class="container">
		<div class="step_wrap">
			<div class="three-step-bar clearfix">
				<div class="step tstep1 f-left active">
<i class="step-icon">1</i>设置登录名</div>
				<div class="step tstep2 f-left">
<i class="step-icon">2</i>填写账户信息</div>
				<div class="step tstep3 f-left">
<i class="step-icon">3</i>注册成功</div>
			</div>
		</div>
		<!-- 用手机注册 -->
		
		<div class="reg-main clearfix">
			<div class="reg-left-form f-left">
				<div class="reg-form-item reg-form-item-w clearfix">
					<div class="reg-form-type f-left">会员类型</div>
					<div class="reg-form-content f-left">
						<div class="member-type-wrap clearfix">
							<div class="member-type select f-left" member-type="2">
<i class="member-icon m-icon1"></i>个人</div>
							<div class="member-type f-left" member-type="1">
<i class="member-icon m-icon2"></i>企业</div>
							<div class="member-type f-left" member-type="3">
<i class="member-icon m-icon3"></i>猎头</div>
							<div class="member-type f-left" member-type="4">
<i class="member-icon m-icon4"></i>培训</div>
						</div>
					</div>
				</div>
				<!-- 注册提示信息 -->
				<!-- 个人 -->
				<div class="reg-warning">
					<i class="regw-arrow"><em></em></i>
					<div class="warlist">
<span class="colorfe">1.免费创简历</span> ― 注册个人会员，免费创建多份简历</div>
					<div class="warlist">
<span class="colorfe">2.职位海量淘</span> ― 网站每天新增大量职位，高薪等你挑</div>
					<div class="warlist warlist-last">
<span class="colorfe">3.简历轻松投</span> ― 简历投递无限量，是金子总会发光</div>
				</div>
				<!-- 企业 -->
				<div class="reg-warning">
					<i class="regw-arrow regw-arrow-com"><em></em></i>
					<div class="warlist">
<span class="colorfe">1.发布招聘信息</span> ― 注册企业会员，轻轻松松招聘人才</div>
					<div class="warlist">
<span class="colorfe">2.收取简历投递</span> ― 无限量收取求职者投递的简历</div>
					<div class="warlist warlist-last">
<span class="colorfe">3.多种职位分享</span> ― 微信招聘让企业更出色，招人更便捷</div>
				</div>
				<!-- 猎头 -->
				<div class="reg-warning">
					<i class="regw-arrow regw-arrow-hunter"><em></em></i>
					<div class="warlist">
<span class="colorfe">1.发布招聘信息</span> ― 注册猎头会员，扩充后备人才库</div>
					<div class="warlist">
<span class="colorfe">2.收取简历投递</span> ― 无限量收取求职者投递的简历</div>
					<div class="warlist warlist-last">
<span class="colorfe">3.多种人才选择</span> ― 网站实时更新大量简历，总有你需要的</div>
				</div>
				<!-- 培训 -->
				<div class="reg-warning">
					<i class="regw-arrow regw-arrow-train"><em></em></i>
					<div class="warlist">
<span class="colorfe">1.发布培训信息</span> ― 注册培训会员，轻轻松松招收学员</div>
					<div class="warlist">
<span class="colorfe">2.收取培训申请</span> ― 无限量在线收取学员的课程申请信息</div>
					<div class="warlist warlist-last">
<span class="colorfe">3.提高机构影响力</span> ― 提高培训机构的地区影响力</div>
				</div>
				<!-- 注册提示信息 end-->
				<!-- 手机注册开始  -->
								<!-- 手机注册结束  -->
				<!-- 邮箱注册开始  -->
				<form action="http://www.0722ren.com/user/user_reg.php?act=reg_step2_email" id="reg_by_email" method="post">
					<div class="reg-form-item clearfix">
						<div class="reg-form-type f-left">邮箱</div>
						<div class="reg-form-content f-left">
							<input type="text" name="email" id="email" class="text text-lg span350 inputElem" placeholder="请输入您的邮箱">
</div>
						<div class="verification f-left"></div>
					</div>
										<div class="reg-form-item clearfix">
						<div class="reg-form-type f-left">验证码</div>
						<div class="reg-form-content f-left">
							<input type="text" name="postcaptcha" id="postcaptcha" class="text text-lg span180" placeholder="验证码">
</div>
						<div class="reg-form-other f-left verification" style="padding-left: 20px;">
							<div class="ver-box f-left"><img src="../include/imagecaptcha.php%EF%BC%9Ft=" id="getcode" align="absmiddle" style="cursor:pointer;width: 148px;height: 38px;" title="看不请验证码？点击更换一张" border="0"></div>
						</div>
					</div>
										<div class="reg-form-item special clearfix">
						<div class="reg-form-type f-left"> </div>
						<div class="reg-form-content f-left">
							<div class="agree-confirm">
								<label><input type="checkbox" name="agreement_email" id="agreement_email" value="1" checked>我已阅读并同意</label><a href="../agreement/index.html">《随州人才网用户服务协议》</a>
							</div>
						</div>
					</div>
					<div class="reg-form-item special clearfix">
						<div class="reg-form-type f-left"> </div>
						<div class="reg-form-content f-left">
							<input type="hidden" name="utype" class="utype" value="2" id="utype"><input type="hidden" name="token" value="b2fb04b5f6aed006"><input type="submit" value="下一步" class="btn btn-lg blue span1" id="reg_email_submit"><input type="text" value="正在发送邮件..." class="btn btn-lg blue span1" id="reg_email_submit_" style="display: none;" disabled>
</div>
					</div>
				</form>
				<!-- 邮箱注册结束  -->
							</div>
					</div>
		<div class="common-status" style="display: none;padding: 70px 0 50px 0;">
			<div class="status-main">
				<span><img src="../templates/demo11/images/icon-success.png" alt="成功"></span>还差两步即可完成注册
			</div>
			<p>我们已经向您的邮箱<span id="send_email"></span>发送了一封激活邮件，请点击邮件中的链接完成注册！</p>
			<div class="status-btn"><a href="user_reg.php" target="_blank" id="goto_email" email="" class="btn btn-lg blue span2">立即进入邮箱</a></div>
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
