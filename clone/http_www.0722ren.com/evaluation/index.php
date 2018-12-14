<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>人才测评首页</title>
<link rel="shortcut icon" href="../favicon.ico">
<meta name="author" content="随州人才网">
<meta name="copyright" content="0722ren.com">
<link rel="stylesheet" href="../templates/tpl_evaluation/default/css/review.css">
<script src="../templates/tpl_evaluation/default/js/jquery.js"></script><link href="../templates/tpl_evaluation/default/css/ui-dialog.css" rel="stylesheet" type="text/css">
<script src="../templates/tpl_evaluation/default/js/dialog-min.js" type="text/javascript" language="javascript"></script><script src="../templates/tpl_evaluation/default/js/dialog-min-common.js" type="text/javascript" language="javascript"></script><script type="text/javascript">
jQuery(document).ready(function($) {
	//登录
	$.get('/plus/ajax_user.php?act=test_loginform', function(data) {
		$("#ajax_login").html(data);
	});
	// 点击测评
	is_answer_dialog(".is_answer");
});
</script>
</head>
<body>
	<div id="reviews-header" class="index">
		<div class="header-top claerfix">
			<div class="container clearfix">
				<div class="header-title f-left">您好，欢迎访问随州人才网人才测评！<a href="../user/login.php">[登录]</a>
</div>
				<div class="top-contact f-right">
<span>服务热线：0722-3588122</span> | <a href="../index.html">返回人才网</a>
</div>
			</div>
		</div>
		<div class="header-logo-nav">
			<div class="container clearfix">
				<div class="reviews-logo f-left"><a href="../index.html"><img src="../templates/tpl_evaluation/default/images/review-logo.png" alt="logo" height="50"></a></div>
				<div class="logo-side-title f-left">人才测评</div>
				<div class="reviews-nav f-right">
															<a href="index.php" target="_self" class="s-nav-item f-left  active">测评首页</a>
										<a href="selfcognition.php" target="_self" class="s-nav-item f-left ">自我认知测评</a>
										<a href="occupation.php" target="_self" class="s-nav-item f-left ">职业倾向测评</a>
										<a href="talents.php" target="_self" class="s-nav-item f-left ">专业人才测评</a>
										<a href="management.php" target="_self" class="s-nav-item f-left ">管理人才测评</a>
									</div>
			</div>
		</div>
	</div>	<div class="review-main container clearfix">
		<div class="review-left f-left">
			<div class="banner-block"><img src="../templates/tpl_evaluation/default/images/review-banner.jpg" alt=""></div>
			<div class="review-index-list clearfix">
				<div class="review-item">
					<div class="review-title">
						<h1>
<span class="title-arrow left-arrow"></span>自我认知测评<span class="title-arrow right-arrow"></span>
</h1>
					</div>
					<div class="item-content clearfix">
						<div class="review-type f-left"><img src="../templates/tpl_evaluation/default/images/review-type1.jpg" alt="" width="130" height="130"></div>
						<div class="review-text">
							<h3>自我认知测评<span>已有0人参与</span>
</h3>
							<p>自己到底喜欢什么？适合做什么？只有做自己喜欢的、适合的工作，才能在工作中更好的挖掘自己的潜力。自我认知测试，将个人职业兴趣划分为六种类型，从中你能明确自己的兴趣类型，了解你喜欢的职业环境和职业类型，帮助你做好职业选择和职业设计。</p>
							<div class="join-review"><input type="button" value="点击测评" class="join-review-btn" onclick="window.location='http://www.0722ren.com//evaluation/selfcognition.php'"></div>
						</div>
					</div>
				</div>
				<div class="review-item">
					<div class="review-title">
						<h1>
<span class="title-arrow left-arrow"></span>职业倾向测评<span class="title-arrow right-arrow"></span>
</h1>
					</div>
					<div class="item-content clearfix">
						<div class="review-type f-left"><img src="../templates/tpl_evaluation/default/images/review-type2.jpg" alt="" width="130" height="130"></div>
						<div class="review-text">
							<h3>职业倾向测评<span>已有0人参与</span>
</h3>
							<p>当你初次在职场求职，面对眼花缭乱的工作，你该如何选择，你是否知道自己能够胜任工作？大学生求职综合测评结合应届毕业生求职特点，建立通用能力素质模型，通过该测评，全面把握你的胜任素质、认知能力、工作价值观、和职业兴趣，了解自己的优势和不足，帮助自己开启职业生涯。</p>
							<div class="join-review"><input type="button" value="点击测评" class="join-review-btn" onclick="window.location='http://www.0722ren.com//evaluation/occupation.php'"></div>
						</div>
					</div>
				</div>
				<div class="review-item">
					<div class="review-title">
						<h1>
<span class="title-arrow left-arrow"></span>专业人才测评<span class="title-arrow right-arrow"></span>
</h1>
					</div>
					<div class="item-content clearfix">
						<div class="review-type f-left"><img src="../templates/tpl_evaluation/default/images/review-type3.jpg" alt="" width="130" height="130"></div>
						<div class="review-text">
							<h3>专业人才测评<span>已有0人参与</span>
</h3>
							<p>踏入职场几年，当工作从最初的新颖逐渐趋于重复，你是否面临能力发展的瓶颈？如何提升自己在专业岗位上的胜任力？通过该系列测评产品，你能明确自己的优势与能力短板，并获得更有针对性的岗位能力发展建议，助力个人的职业发展。要真正实现“以人为本”的管理，最终为企业赢得竞争优势，需要的不仅是管理理论知识，更需要实际操作指导。</p>
							<div class="join-review"><input type="button" value="点击测评" class="join-review-btn" onclick="window.location='http://www.0722ren.com//evaluation/talents.php'"></div>
						</div>
					</div>
				</div>
				<div class="review-item">
					<div class="review-title">
						<h1>
<span class="title-arrow left-arrow"></span>管理人才测评<span class="title-arrow right-arrow"></span>
</h1>
					</div>
					<div class="item-content clearfix">
						<div class="review-type f-left"><img src="../templates/tpl_evaluation/default/images/review-type4.jpg" alt="" width="130" height="130"></div>
						<div class="review-text">
							<h3>管理人才测评<span>已有0人参与</span>
</h3>
							<p>当你身居管理岗位时，你是否面临如何提升能力的困惑？管理人员岗位胜任力测评采用心理测评技术与PSA情境模拟技术，对管理人员的积极心态、学习力、工作力、工作价值观等维度进行考察，明确你的能力短板，为个人发展提供包括自我学习、能力实践与环境支持等三方面的建议。</p>
							<div class="join-review"><input type="button" value="点击测评" class="join-review-btn" onclick="window.location='http://www.0722ren.com//evaluation/management.php'"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="review-right f-left">
			<div class="log-area" id="ajax_login">
			</div>
			<div class="side-ad-area"><a href=""><img src="../templates/tpl_evaluation/default/images/side-ad.jpg" alt="" width="240"></a></div>
						<div class="index-right-area">
				<div class="code-box"><img src="../templates/tpl_evaluation/default/images/code.jpg" alt="" width="144" height="144"></div>
				<p class="code-tip">快乐测评，轻松求职</p>
			</div>
		</div>
	</div>
	
<div class="foot">
	<div class="footer_box">
		<div class="box link_bk clearfix">
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
		        	<div class="weixin_con clearfix">
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
