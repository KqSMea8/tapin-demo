<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>校园招聘-合作院校</title>
<link rel="shortcut icon" href="../favicon.ico">
<meta name="author" content="随州人才网">
<meta name="copyright" content="0722ren.com">
<link rel="stylesheet" href="../templates/tpl_campus/default/css/school.css">
<script src="../templates/tpl_campus/default/js/jquery.js"></script><script>
	$(document).ready(function() {
		// 回车搜索
		$('#campusname').keydown(function(e) {
			if (e.keyCode==13) {
				search_location(dir);
			}
		});
		// 搜索按钮点击
		$("#searcnbtn").click(function() {
			search_location();
		});
		// 搜索跳转
		function search_location() {
			generateBackground();
			var listype = $("#searcnbtn").attr('detype');
			var key=$("input[name=campusname]").val();
			var page=1;
			$.get("/plus/ajax_search_location.php", {"act":listype,"key":key,"page":page},
				function (data,textStatus)
				 {	
					 window.location.href=data;
				 },"text"
			);
		}
		// 正在加载
		function generateBackground() {
			var backgroundHtm = '<div id="bonfire-pageloader"><div class="bonfire-pageloader-icon">';
			var html = jQuery('body');
			html.append(backgroundHtm);
			jQuery(window).resize(function(){
				 resizenow();
			});
			function resizenow() {
				var browserwidth = jQuery(window).width();
				var browserheight = jQuery(window).height();
				jQuery('.bonfire-pageloader-icon').css('right', ((browserwidth - jQuery(".bonfire-pageloader-icon").width())/2)).css('top', ((browserheight - jQuery(".bonfire-pageloader-icon").height())/2 + $(document).scrollTop() - 109));
			};
			resizenow();
		}
	});
</script>
</head>
<body>
	<div id="school-header" class="">
	<div class="header-top claerfix">
		<div class="container clearfix">
			<div class="header-title f-left">您好，欢迎访问随州人才网校园招聘！<a href="../user/login.php">[登录]</a>
</div>
			<div class="top-contact f-right">
<span>服务热线：0722-3588122</span> | <a href="../index.html">返回人才网</a>
</div>
		</div>
	</div>
	<div class="header-logo-nav">
		<div class="container clearfix">
			<div class="school-logo f-left"><a href="../index.html"><img src="../data/images/logo.png" alt="logo" height="50"></a></div>
			<div class="logo-side-title f-left">校园招聘</div>
			<div class="school-nav f-right">
												<a href="index.php" target="_self" class="s-nav-item f-left ">校园首页</a>
								<a href="graduate-job-list.php" target="_self" class="s-nav-item f-left ">应届生职位</a>
								<a href="graduate-resume-list.php" target="_self" class="s-nav-item f-left ">应届生简历</a>
								<a href="campus-list.php" target="_self" class="s-nav-item f-left  active">合作院校</a>
							</div>
		</div>
	</div>
</div>	<div class="container">
		<div class="index-common-block clearfix">
			<div class="title-block clearfix">
				<h2 class="f-left">合作院校</h2>
				<div class="school-search f-right">
					<div class="s-search f-left"><input name="campusname" id="campusname" type="text" value="" placeholder="请输入院校名称"></div>
					<div class="s-search-submit f-left"><input detype="QS_campuslist" type="button" id="searcnbtn" value="搜索"></div>
				</div>
			</div>
							      	<div class="emptytip">抱歉，没有符合此条件的信息！</div>
	      			</div>
	</div>
	
<div class="foot">
	<div class="footer_box">
		<div class="box link_bk">
				<div class="list">
					<h4>关于我们</h4>
					<div class="foot_list">
						<ul>
<li><a target="_blank" href="../explain/3.html">网站声明</a></li>
													<li><a target="_blank" href="../explain/1.html">服务内容</a></li>
													<li><a target="_blank" href="../explain/4.html">关于我们</a></li>
													<li><a target="_blank" href="../suggest.html">意见反馈</a></li>
						</ul>
<ul>
<li><a target="_blank" href="../explain/6.html">联系我们</a></li>
															<li><a target="_blank" href="../explain/7.html">网站简介</a></li>
															<li><a target="_blank" href="../news/news-list.php%EF%BC%9Fid=4">职场指南</a></li>
													</ul>
</div>
				</div>
				<div class="list">
					<h4>帮助中心</h4>
					<div class="foot_list">
						<ul>
<li><a target="_blank" href="../help/help-list.php%EF%BC%9Fid=4">注册与登录</a></li>
							<li><a target="_blank" href="../help/help-list.php%EF%BC%9Fid=5">密码找回</a></li>
							<li><a target="_blank" href="../help/help-list.php%EF%BC%9Fid=8">认证管理</a></li>
							<li><a target="_blank" href="../help/help-list.php%EF%BC%9Fid=10">招聘管理 </a></li>
						</ul>
<ul>
<li><a target="_blank" href="../help/help-list.php%EF%BC%9Fid=17">求职管理</a></li>
							<li><a target="_blank" href="../help/help-list.php%EF%BC%9Fid=13">充值消费 </a></li>
						</ul>
</div>
				</div>
				<div class="list">
					<h4>个人求职</h4>
					<div class="foot_list">
						<ul>
<li><a target="_blank" href="../jobs/jobs-list.php">职位搜索</a></li>
							<li><a target="_blank" href="../salary.html">薪酬统计</a></li>
							<li><a target="_blank" href="../subscribe.html">职位订阅</a></li>
							<li><a target="_blank" href="../explain/explain-show.php%EF%BC%9Fid=6">职场指南</a></li>
						</ul>
<ul>
<li><a target="_blank" href="../hunter/jobs-list.php">猎头职位</a></li>
							<li><a target="_blank" href="../jobs/jobs-list.php%EF%BC%9Fnature=63">兼职招聘</a></li>
							<li><a target="_blank" href="../train/train-curriculum-list.php">培训课程</a></li>
						</ul>
</div>
				</div>
				<div class="list">
					<h4>企业服务</h4>
					<div class="foot_list">
						<ul>
<li><a target="_blank" href="../user/company/company_jobs.php%EF%BC%9Fact=addjobs">发布职位</a></li>
							<li><a target="_blank" href="../resume/resume-list.php">简历搜索</a></li>
							<li><a target="_blank" href="../simple/simple-list.php">招聘普工</a></li>
							<li><a target="_blank" href="../hrtools/hrtools-list.php">HR工具箱</a></li>
						</ul>
<ul>
<li><a target="_blank" href="../user/login.php">企业注册</a></li>
							<li><a target="_blank" href="../jobfair/jobfair-list.php">现场招聘会</a></li>
						</ul>
</div>
				</div>
				<div class="clear"></div>
				
				
		        <div class="weixin">
		        	<div class="weixin_con">
		        		<div class="weixin_img">
		        			<span>官方微信</span><br><img src="../data/images/weixin_img.jpg" width="80" height="80">
</div>
		        		<div class="weixin_img">
		        			<span>手机APP</span><br><img src="../plus/url_qrcode.php%EF%BC%9Furl=%2Fandroid%2Fapk%2FKnightCMS.apk" width="80" height="80">
</div>
		        		<div class="clear"></div>
		        	</div>
		        	<div class="weixin_cons" style="display:none;">
		        		<div class="w_txt">官方微信</div>
		        		<img src="../data/images/weixin_img.jpg" alt="" width="64" height="65"><div class="clear"></div>
		        	</div>
		        	<div class="comment">
		        		<p>服务热线</p>
		        		<p class="phone_number">0722-3588122</p>
		        	</div>
			</div>
		</div>
	</div>
		
  
  <div class="copyright">
联系地址：随州市尚城国际 联系电话：0722-3588122 网站备案：鄂ICP备11005521号-4  鄂B2-20170179  <script src="'http:/s14.cnzz.com/stat.php%EF%BC%9Fonline=2%27&amp;id=893868&amp;web_id=893868" language="'JavaScript'" charset="'gb2312'"></script><span style="DISPLAY: none"><script language="javascript" type="text/javascript" src="../../http_js.users.51.la/1891441.js"></script><script>var _hmt = _hmt || [];(function() {var hm = document.createElement("script");hm.src = "//hm.baidu.com/hm.js?d6c43a5b68a1b1eade9b230287ea1290";var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(hm, s);})();</script></span><br>
Copyright @ 2016 0722ren.com All Right Reserved <br>
Powered by <a href="../index.html" target="_blank" style="color:#009900"><em> 0722ren.com 随广传媒版权所有</em></a><br>
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
