<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>猎头资讯列表  - 随州人才网</title>
<meta name="description" content="随州人才网招聘岗位">
<meta name="keywords" content="随州人才网,猎头资讯列表">
<meta name="author" content="随州人才网">
<meta name="copyright" content="0722ren.com">
<meta http-equiv="X-UA-Compatible" content="edge">
<meta name="renderer" content="webkit">
<link rel="shortcut icon" href="../favicon.ico">
<link href="../templates/demo11/css/common.css" rel="stylesheet" type="text/css">
<link href="../templates/tpl_hunter/default/css/hunter.css" rel="stylesheet" type="text/css">
<script src="../templates/demo11/js/jquery.js" type="text/javascript"></script><script type="text/javascript">
	$(document).ready(function() {
		$(".divinputkey").click(function() {
			$(this).hide();
			$("#key").show().focus();
			$("#key").blur(function() {
				var v = $("#key").val();
				if (!v && v.length) {
					$(".divinputkey").show();
					$("#key").hide();
				}
			});
		});
		// 选择分类
		$("#iDownList").click(function() {
			var shadhtm = '<div class="inpListbg" style="height: '+$(document).height()+'px; width: '+$(document).width()+'px; position: absolute; left: 0px; top: 0px; z-index: 0; background-color: rgb(255, 255, 255); opacity: 0;">';
			$("body").append(shadhtm);
			if ($(".iDownList").hasClass('select')) {
				$(".iDownList").slideUp().removeClass('select');
				$(".inpListbg").remove();
			} else {
				$(".iDownList").slideDown().addClass('select');
				$(".iDownList li").click(function() {
					$("#typeid").val($(this).attr('value'));
					$("#iDownList").html($(this).attr('title'));
					$(".iDownList").slideUp().removeClass('select');
					$(".inpListbg").remove();
				});
			}
			$(".inpListbg").click(function(event) {
				$(".iDownList").slideUp().removeClass('select');
				$(".inpListbg").remove();
			});
		});
		$("#search_news").click(function(){
			var key = $("#key").val(),
				typeid = $("#typeid").val();
			hunter_news_search_location(key,typeid);
		});
		function hunter_news_search_location(key,typeid)
		{
			$.get("/plus/ajax_search_location.php", {"act":"QS_hunter_newssearch","key":key,"typeid":typeid},
					function (data,textStatus)
					 {
						 window.location.href=data;
					 }
				);
		}
	});
</script>
</head>
<body class="bgf5">
<div id="hunternew-header" class="">
	<div class="header-top claerfix">
		<div class="container clearfix containernp">
			<div class="header-title f-left">您好，欢迎访问随州人才网猎头专区！<a href="../user/login.php">[登录]</a>
</div>
			<div class="top-contact f-right">
<span>服务热线：0722-3588122</span> | <a href="../index.html">返回人才网</a>
</div>
		</div>
	</div>
	<div class="header-logo-nav">
		<div class="container clearfix containernp">
			<div class="school-logo f-left"><a href="../index.html"><img src="../data/images/logo.png" alt="logo" height="50"></a></div>
			<div class="logo-side-title f-left">猎头专区</div>
			<div class="school-nav f-right">
											        <a href="index.html" target="_self" class="s-nav-item f-left">猎头首页</a>
			    			        <a href="jobs-list.php" target="_self" class="s-nav-item f-left">高薪职位</a>
			    			        <a href="resume-list.php" target="_self" class="s-nav-item f-left">高级人才</a>
			    			        <a href="hunter-list.php" target="_self" class="s-nav-item f-left">猎头服务</a>
			    			        <a href="hunter-news-list.php" target="_self" class="s-nav-item f-left active">猎头资讯</a>
			    			</div>
		</div>
	</div>
</div>
<div class="talents_information">
	<div class="between">
		<!-- 猎头资讯 -->
		<div class="hunterbox_container hunter_news_list">
			<div class="h">
				<div class="t">猎头资讯</div>
				<div class="clear"></div>
			</div>
			<div class="box_content">
																<div class="cell">
					<div class="ctitle">
<div class="title"><a href="hunter-news-show.php%EF%BC%9Fid=5828" target="_blank">随州开展民营医疗机构依法执业知识竞赛</a></div>2017-09-26</div>
					<div class="c">行业动态<font style="margin-left:10px;">浏览5次</font>
</div>
				</div>
								<div class="cell">
					<div class="ctitle">
<div class="title"><a href="hunter-news-show.php%EF%BC%9Fid=1465" target="_blank"><span style="color:#000099;">曾都区举办招聘会现场录用登记2037人</span></a></div>2014-02-17</div>
					<div class="c">行业动态<font style="margin-left:10px;">浏览16次</font>
</div>
				</div>
								<div class="cell">
					<div class="ctitle">
<div class="title"><a href="hunter-news-show.php%EF%BC%9Fid=1442" target="_blank">曾都区回乡就业薪酬接近沿海</a></div>2014-02-14</div>
					<div class="c">行业动态<font style="margin-left:10px;">浏览19次</font>
</div>
				</div>
								<div class="cell">
					<div class="ctitle">
<div class="title"><a href="hunter-news-show.php%EF%BC%9Fid=62" target="_blank">你的性格缺点</a></div>2013-04-21</div>
					<div class="c">行业动态<font style="margin-left:10px;">浏览16次</font>
</div>
				</div>
								<div class="cell">
					<div class="ctitle">
<div class="title"><a href="hunter-news-show.php%EF%BC%9Fid=61" target="_blank">选钥匙分析你的职业现状</a></div>2013-04-21</div>
					<div class="c">行业动态<font style="margin-left:10px;">浏览21次</font>
</div>
				</div>
								<div class="cell">
					<div class="ctitle">
<div class="title"><a href="hunter-news-show.php%EF%BC%9Fid=60" target="_blank">工作中你在意什么？</a></div>2013-04-21</div>
					<div class="c">行业动态<font style="margin-left:10px;">浏览16次</font>
</div>
				</div>
								<div class="cell">
					<div class="ctitle">
<div class="title"><a href="hunter-news-show.php%EF%BC%9Fid=59" target="_blank">你的工作态度及格吗？</a></div>2013-04-21</div>
					<div class="c">行业动态<font style="margin-left:10px;">浏览19次</font>
</div>
				</div>
								<div class="cell">
					<div class="ctitle">
<div class="title"><a href="hunter-news-show.php%EF%BC%9Fid=51" target="_blank">你做什么工作才能成为富翁？</a></div>2013-04-19</div>
					<div class="c">行业动态<font style="margin-left:10px;">浏览17次</font>
</div>
				</div>
								<div class="cell">
					<div class="ctitle">
<div class="title"><a href="hunter-news-show.php%EF%BC%9Fid=50" target="_blank">倒垃圾测试你的进取心</a></div>2013-04-19</div>
					<div class="c">行业动态<font style="margin-left:10px;">浏览11次</font>
</div>
				</div>
															</div>
		</div>
		<!-- 猎头资讯 End-->
	</div>
	<div class="between">
		<!-- 新闻搜索 -->
		<div class="hunterbox_container hunter_news_search ">
			<div class="h">
				<div class="t">新闻搜索</div>
				<div class="clear"></div>
			</div>
			<div class="box_content">
				<div class="cell">
					<div class="divinputkey">请输入搜索关键字</div>
					<input id="key" type="text" class="inputkey" value=""><div class="down" id="iDownList">选择分类</div>
					<div class="iDownList">
																		<li title="行业资讯" value="8">行业资讯</li>
											</div>
					<input type="hidden" id="typeid" value="8"><div class="sbtn" id="search_news">搜 索</div>
				</div>
			</div>
		</div>
		<!-- 新闻搜索 End-->
		<!-- 分类浏览 -->
		<div class="hunterbox_container class_browsing">
			<div class="h">
				<div class="t">分类浏览</div>
				<div class="clear"></div>
			</div>
			<div class="box_content">
												<a href="hunter-news-list.php%EF%BC%9Fid=15">行业资讯</a>
							</div>
		</div>
		<!-- 分类浏览 End-->
		<!-- 推荐阅读 -->
		<div class="hunterbox_container recommended_reading">
			<div class="h">
				<div class="t">推荐阅读</div>
				<div class="clear"></div>
			</div>
			<div class="box_content">
											</div>
		</div>
		<!-- 推荐阅读 End-->
	</div>
	<div class="clear"></div>
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
					<li class="f-left"><a target="_blank" href="jobs-list.php">猎头职位</a></li>
					<li class="f-left"><a target="_blank" href="../jobs/jobs-list.php%EF%BC%9Fnature=63">兼职招聘</a></li>
					<li class="f-left"><a target="_blank" href="../train/train-curriculum-list.php">培训课程</a></li>
				</ul>
</div>
			<div class="f-menu-item f-left">
				<h4 class="menu-title">企业服务</h4>
				<ul class="f-menu-list clearfix">
<li class="f-left"><a target="_blank" href="../user/company/company_jobs.php%EF%BC%9Fact=addjobs">发布职位</a></li>
					<li class="f-left"><a target="_blank" href="../resume/resume-list.php">简历搜索</a></li>
					<li class="f-left"><a target="_blank" href="../simple/simple-list.php">招聘普工</a></li>
					<li class="f-left"><a target="_blank" href="../hrtools/hrtools-list.php">HR工具箱</a></li>
					<li class="f-left"><a target="_blank" href="../user/login.php">企业注册</a></li>
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
		办公地址：随州市尚城国际 客服热线：0722-3588122 网站备案：鄂ICP备11005521号-4  鄂B2-20170179 
		  <span style="background:url(http://www.0722fc.com/images/beian.png) no-repeat left center; padding:10px 0 10px 25px;"><a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=42130202002553">鄂公网安备 42130202002553号</a>        </span><br>
		Copyright @ 2016 0722ren.com All Right Reserved  <script src="../../http_s14.cnzz.com/stat.php%EF%BC%9Fonline=2&amp;id=893868&amp;web_id=893868" language="JavaScript" charset="gb2312"></script><span style="DISPLAY: none"><script language="javascript" type="text/javascript" src="../../http_js.users.51.la/1891441.js"></script><script>var _hmt = _hmt || [];(function() {var hm = document.createElement("script");hm.src = "//hm.baidu.com/hm.js?d6c43a5b68a1b1eade9b230287ea1290";var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(hm, s);})();</script></span><br>
		Powered by <a href="../index.html" target="_blank">0722ren.com 随州人才网版权所有</a>
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
