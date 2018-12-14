<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>HR工具箱</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="随州人才网">
<meta name="copyright" content="0722ren.com">
<link rel="shortcut icon" href="../favicon.ico">
<link href="../templates/demo11/css/common.css" rel="stylesheet" type="text/css">
<link href="../templates/demo11/css/hrtools.css" rel="stylesheet" type="text/css">
<script src="../templates/demo11/js/jquery.js" type="text/javascript" language="javascript"></script>
</head>
<body>
<div id="new-header">
	<div class="top-bar">
	<div class="index-container clearfix">
		<div class="welcome f-left" id="top_loginform"></div>
		<ul class="top-nav f-right">
<li class="t-nav-item f-left mobile"><a href="../mobile.html" class="underline">手机频道</a></li>
			<li class="t-nav-item f-left"><a href="../index.html" class="underline nav-link">网站首页</a></li>
			<li class="t-nav-item f-left mr15"><a href="../plus/shortcut.php" class="underline nav-link">保存到桌面</a></li>
			<li class="t-nav-item f-left nav-more">
				<span class="nav-more-type">网站导航<i class="more-arrow"></i></span>
				<div class="sub-menu-out">
                	<div class="sub-menu nav">
                        <ul>
<li>
                            	<strong>个人服务</strong>
                                <a href="../user/personal/personal_resume.php%EF%BC%9Fact=make1" target="_blank">创简历</a>
                                <a href="../salary.html" target="_blank">查薪资</a>
                                <a href="../evaluation/index.php" target="_blank">人才测评</a>
                                <a href="../jobs/map-search.php%EF%BC%9Fid=1" target="_blank">地图找工作</a>
                            </li>
                            <li>
                            	<strong>企业服务</strong>
                                <a href="../user/company/company_jobs.php%EF%BC%9Fact=addjobs" target="_blank">发职位</a>
                                <a href="../jobfair/jobfair-list.php" target="_blank">招聘会</a>
                                <a href="../user/company/company_jobs.php%EF%BC%9Fact=simple_jobs" target="_blank">微信招聘</a>
                                <a href="index.php" target="_blank">HR工具箱</a>
                            </li>
                            <li class="bd0">
                            	<strong>更多</strong>
                                <a rel="nofollow" href="../campus/index.php" target="_blank">校园招聘</a>
                                <a rel="nofollow" href="../hunter/index.html" target="_blank">猎聘专区</a>
                                <a rel="nofollow" href="../train/index.html" target="_blank">培训信息</a>
                                <a rel="nofollow" href="../shop/index.php" target="_blank">积分商城</a>
                            </li>
                        </ul>
</div>
                </div>
			</li>
		</ul>
</div>
</div>
<script type="text/javascript">
	//顶部部登录
	$.get('/plus/ajax_user.php', {"act":"top_loginform"}, function(data) {
		$("#top_loginform").html(data);
	});
	$(".nav-more").hover(function() {
		$(".sub-menu").toggle();
	});
</script><div class="header-main">
		<div class="index-container clearfix">
			<div class="common-logo f-left"><a href="../index.html"><img src="../data/images/logo.png" alt="随州人才网" width="251" height="85"></a></div>
			<!--<div class="sub-station f-left">
				<span class="station-control">总站<i class="station-arrow"></i></span>
			</div>-->
			<ul class="common-nav f-right">
<li><a href="../index.html" target="_self">首  页</a></li>
								<li><a href="../jobs/jobs-list.php" target="_self">找工作</a></li>
								<li><a href="../resume/resume-list.php" target="_self">聘人才</a></li>
								<li><a href="../simple/simple-list.php" target="_self">微招聘</a></li>
								<li class="active"><a href="index.php" target="_self">HR工具箱</a></li>
								<li><a href="../company/index.php" target="_self">企业黄页</a></li>
								<li><a href="../jobs/map-search-1.html" target="_self">地图找工作</a></li>
								<li><a href="../news/index.html" target="_self">新闻资讯</a></li>
							</ul>
</div>
	</div>
</div>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('.common-nav li:last').css({'border-right':0});
		$('.t-nav-item:last').css({'margin-right':0});
	});
</script><!-- 当前位置 --><div class="page_location link_bk">
	当前位置：<a href="../index.html">首页</a> &gt; <a href="index.php">HR工具箱</a>
</div>
	<!-- 主体内容 -->
	<div class="container link_bk">
		<div class="hr_box">
			<ul class="hrtools-wrap">
<li class="function_box">
					<div class="icon-box"><a href="hrtools-list.php%EF%BC%9Fid=1" class="icon_1">招聘/面试</a></div>
					<div class="hr_content">
						<h3><a href="hrtools-list.php%EF%BC%9Fid=1">招聘/面试</a></h3>
						<ul>
<li>包含各种人事招聘和人才面试专用表格文档，招聘专员可根据需求自行下载hr资料，实现人企互聘第一步。  <a href="hrtools-list.php%EF%BC%9Fid=1" class="more">更多&gt;&gt;</a>
</li>
						</ul>
</div>
				</li>
				<li class="function_box">
					<div class="icon-box"><a href="hrtools-list.php%EF%BC%9Fid=5" class="icon_2">薪酬制度</a></div>
					<div class="hr_content">
						<h3><a href="hrtools-list.php%EF%BC%9Fid=5">薪酬制度</a></h3>
						<ul>
<li>hr可以适时参考工具箱内的资料表单，制定合理人性的薪酬制度，在众多招聘企业中一招制胜。  <a href="hrtools-list.php%EF%BC%9Fid=5" class="more">更多&gt;&gt;</a>
</li>
						</ul>
</div>
				</li>
				<li class="function_box">
					<div class="icon-box"><a href="hrtools-list.php%EF%BC%9Fid=2" class="icon_3">人事档案</a></div>
					<div class="hr_content">
						<h3><a href="hrtools-list.php%EF%BC%9Fid=2">人事档案</a></h3>
						<ul>
<li>以表单和文字形式记录企业和员工的主要经历、政治面貌、素质文化等内容，作为企业文化的内在凭证。  <a href="hrtools-list.php%EF%BC%9Fid=2" class="more">更多&gt;&gt;</a>
</li>
						</ul>
</div>
				</li>
				<li class="function_box">
					<div class="icon-box"><a href="hrtools-list.php%EF%BC%9Fid=6" class="icon_4">加班考勤</a></div>
					<div class="hr_content">
						<h3><a href="hrtools-list.php%EF%BC%9Fid=6">加班/考勤</a></h3>
						<ul>
<li>工具箱内提供各种形式的考勤表格供hr参考，以维护企业正常的工作秩序，严肃企业纪律。  <a href="hrtools-list.php%EF%BC%9Fid=6" class="more">更多&gt;&gt;</a>
</li>
						</ul>
</div>
				</li>
				<li class="function_box">
					<div class="icon-box"><a href="hrtools-list.php%EF%BC%9Fid=3" class="icon_5">员工管理</a></div>
					<div class="hr_content">
						<h3><a href="hrtools-list.php%EF%BC%9Fid=3">员工管理</a></h3>
						<ul>
<li>包含工作内容、员工纪律等一系列直接涉及员工福利和工作性质的资料。帮助hr快速专业的落实人才工作。  <a href="hrtools-list.php%EF%BC%9Fid=3" class="more">更多&gt;&gt;</a>
</li>
						</ul>
</div>
				</li>
				<li class="function_box">
					<div class="icon-box"><a href="hrtools-list.php%EF%BC%9Fid=4" class="icon_6">合同试用</a></div>
					<div class="hr_content">
						<h3><a href="hrtools-list.php%EF%BC%9Fid=4">合同/试用</a></h3>
						<ul>
<li>hr下载合适的合同范本作为跟人才之间的契约协议签订，成功实现企业和人才之间的双向选择。  <a href="hrtools-list.php%EF%BC%9Fid=4" class="more">更多&gt;&gt;</a>
</li>
						</ul>
</div>
				</li>
				<li class="function_box">
					<div class="icon-box"><a href="hrtools-list.php%EF%BC%9Fid=7" class="icon_7">出差</a></div>
					<div class="hr_content">
						<h3><a href="hrtools-list.php%EF%BC%9Fid=7">出差</a></h3>
						<ul>
<li>针对公司出差问题，提供相关的出差规定、出差情况记录表等，准确掌握员工工作动态，明晰公司财务清单。  <a href="hrtools-list.php%EF%BC%9Fid=7" class="more">更多&gt;&gt;</a>
</li>
						</ul>
</div>
				</li>
				<li class="function_box">
					<div class="icon-box"><a href="hrtools-list.php%EF%BC%9Fid=8" class="icon_8">员工培训</a></div>
					<div class="hr_content">
						<h3><a href="hrtools-list.php%EF%BC%9Fid=8">员工培训</a></h3>
						<ul>
<li>提供各类员工培训参考，包含出国培训、新进职员培训等，为企业提供多样的培训意见，提高员工素质能力。  <a href="hrtools-list.php%EF%BC%9Fid=8" class="more">更多&gt;&gt;</a>
</li>
						</ul>
</div>
				</li>
				<li class="function_box">
					<div class="icon-box"><a href="hrtools-list.php%EF%BC%9Fid=9" class="icon_9">效绩考核</a></div>
					<div class="hr_content">
						<h3><a href="hrtools-list.php%EF%BC%9Fid=9">效绩考核</a></h3>
						<ul>
<li>多种绩效考核办法标准，为企业提供全面的参考，正面引导员工的工作行为和工作业绩，实现企业战略目标。  <a href="hrtools-list.php%EF%BC%9Fid=9" class="more">更多&gt;&gt;</a>
</li>
						</ul>
</div>
				</li>
				<li class="function_box">
					<div class="icon-box"><a href="hrtools-list.php%EF%BC%9Fid=10" class="icon_10">辞退</a></div>
					<div class="hr_content">
						<h3><a href="hrtools-list.php%EF%BC%9Fid=10">移交/辞退</a></h3>
						<ul>
<li>工具箱内提供各种辞职申请范本，企业可以进行参考，制定合理的离职流程。  <a href="hrtools-list.php%EF%BC%9Fid=10" class="more">更多&gt;&gt;</a>
</li>
						</ul>
</div>
				</li>
				<li class="function_box">
					<div class="icon-box"><a href="hrtools-list.php%EF%BC%9Fid=11" class="icon_11">其他</a></div>
					<div class="hr_content">
						<h3><a href="hrtools-list.php%EF%BC%9Fid=11">其他</a></h3>
						<ul>
<li>企业hr工作中其他事项的参考标准，可以自定义选择添加。  <a href="hrtools-list.php%EF%BC%9Fid=11" class="more">更多&gt;&gt;</a>
</li>
						</ul>
</div>
				</li>
				<div class="clear"></div>
			</ul>
</div>
	</div>
	<!-- 主体内容 结束 -->
	
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
<li class="f-left"><a target="_blank" href="../user/company/company_jobs.php%EF%BC%9Fact=addjobs">发布职位</a></li>
					<li class="f-left"><a target="_blank" href="../resume/resume-list.php">简历搜索</a></li>
					<li class="f-left"><a target="_blank" href="../simple/simple-list.php">招聘普工</a></li>
					<li class="f-left"><a target="_blank" href="hrtools-list.php">HR工具箱</a></li>
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
