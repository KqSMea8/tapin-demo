<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>猎头顾问</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="随州人才网">
<meta name="copyright" content="0722ren.com">
<link rel="shortcut icon" href="../favicon.ico">
<link href="../templates/demo11/css/common.css" rel="stylesheet" type="text/css">
<link href="../templates/tpl_hunter/default/css/hunter.css" rel="stylesheet" type="text/css">
<link href="../templates/demo11/css/jobs.css" rel="stylesheet" type="text/css">
<script src="../templates/demo11/js/jquery.js" type="text/javascript"></script><script src="../data/cache_classify.js" type="text/javascript" charset="utf-8"></script><script src="../templates/tpl_hunter/default/js/jquery.hunter-jobs-search.js" type="text/javascript"></script><script src="../templates/demo11/js/jquery.autocomplete.js" type="text/javascript"></script><script type="text/javascript">
$(document).ready(function(){
	allaround("/");
    // 职位类别填充数据 
    jobs_filldata("#job_list", QS_hunter_jobs_parent, QS_hunter_jobs, "#result-list-job", "#aui_outer_job", "#job_result_show", "#jobcategory", "/");
	// 所属行业填充数据
	trade_filldata("#trad_list", QS_trade, "#aui_outer", "#result-list-trade", "#trade_result_show", "#trade", "/");
	// 工作地区填充数据
	city_filldata("#city_list", QS_city_parent, QS_city, "#result-list-city", "#aui_outer_city", "#city_result_show", "#citycategory", "/");
});
$(function(){
	$(".hhunt_info:last").css({"border-bottom":0, "padding-bottom":10});
})
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
			    			        <a href="hunter-list.php" target="_self" class="s-nav-item f-left active">猎头服务</a>
			    			        <a href="hunter-news-list.php" target="_self" class="s-nav-item f-left">猎头资讯</a>
			    			</div>
		</div>
	</div>
</div>	<div class="container">
	<div id="filterSearch" style="border:none;">
		<div class="top-search clearfix bgfff top-search-nob">
			<div class="filter-item f-left">
					<div class="choose-item">
						<div class="choose-control choose-control-s">
							<span class="cc-default cc-default-s" id="city_result_show">选择地区类别</span><i class="choose-icon"></i>
							<!-- 工作地区弹出框 -->
							<div class="aui_outer" id="aui_outer_city">
								<table class="aui_border"><tbody><tr>
<td class="aui_c">
												<div class="aui_inner">
													<table class="aui_dialog"><tbody><tr>
<td class="aui_main">
																	<div class="aui_content" style="padding: 0px;">
																		<div class="LocalDataMultiC" style="width:623px;">
																			<div class="selector-header">
<span class="selector-title">地区选择</span><div></div>
<span id="ct-selector-save" class="selector-save">确定</span><span class="selector-close">X</span><div class="clear"></div>
</div>

																			<div class="data-row-head">
<div class="data-row">
<div class="data-row-side data-row-side-c">最多选 <strong class="text-warning">3</strong> 项  已选 <strong id="arscity" class="text-warning">0</strong> 项</div>
<div id="result-list-city" class="result-list data-row-side-ra"></div>
</div>
<div class="cla"></div>
</div>
																			<div class="data-row-list data-row-main" id="city_list">
																				<!-- 列表内容 -->
																			</div>
																		</div>
																	</div>
																</td>
															</tr></tbody></table>
</div>
											</td>
										</tr></tbody></table>
</div>
							<!-- 工作地区弹出框 End-->
						</div>
					</div>
				</div>
			<div class="t-search-box f-left t-search-box-s">
				<div class="type-input-box f-left" id="hidden_input_box">
					<div class="key">请输入关键字</div>
					<input class="s" type="text" name="key" id="key" value="" style="display:none;"><input name="jobcategory" id="jobcategory" type="hidden" value=""><input name="trade" id="trade" type="hidden" value=""><input name="citycategory" id="citycategory" type="hidden" value=""><input name="major" id="major" type="hidden" value=""><input name="experience" id="experience" type="hidden" value=""><input name="resumetag" id="resumetag" type="hidden" value=""><input name="education" id="education" type="hidden" value=""><input name="sex" id="sex" type="hidden" value=""><input name="photo" id="photo" type="hidden" value=""><input name="settr" id="settr" type="hidden" value="">
</div>
			</div>
			<div class="t-search-btn f-left"><input type="button" detype="QS_hunter_list" id="searcnbtn" value="搜 索"></div>
		</div>
		<div class="fliter-result clearfix" id="has_result">
			<div class="fr-type f-left">已选条件：</div>
			<div class="fr-content f-left rl">
									</div>
			<div class="fliter-clear f-right" id="clear_all_selected"><a href="javascript:;" class="clear-link">清空所选</a></div>
		</div>
	</div>
</div>
	<div class="talents_information">
	<!-- 猎头顾问 -->
	<div class="hunterbox_container search_consultant">
		<div class="h">
			<div class="t">猎头顾问</div>
			<div class="clear"></div>
		</div>
		<div class="box_content">
									<div class="emptytip">抱歉，暂时没有顾问信息！</div>
					</div>
	</div>
	<!-- 猎头顾问 End-->
	<!-- 推荐猎头 -->
	<div class="hunterbox_container recommend_headhunter_list ">
		<div class="h">
			<div class="t">推荐猎头</div>
			<div class="clear"></div>
		</div>
		<div class="box_content">
								</div>
	</div>
	<!-- 推荐猎头 End-->
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
