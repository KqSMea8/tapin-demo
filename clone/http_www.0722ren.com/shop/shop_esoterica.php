<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>积分商城-积分秘籍</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link rel="shortcut icon" href="../favicon.ico">
<link rel="stylesheet" href="../templates/tpl_shop/default/css/shop.css">
<script src="../templates/tpl_shop/default/js/jquery.js"></script>
</head>
<body>
	<div id="shop-header">
	<div class="header-top">
		<div class="container clearfix">
			<div class="header-title f-left">
				您好 <a href="../user/login.php"></a>，欢迎访问随州人才网积分商城  <a href="../user/login.php">[登录]</a>			</div>
			<div class="top-control f-right">
								<a href="javascript:;" class="account-login">我的订单</a>|<a href="javascript:;" class="account-login">会员中心</a>|
								<a href="../index.html">返回人才网</a>
</div>
		</div>
	</div>
	<div class="header-logo-search clearfix container">
		<div class="shop-logo f-left"><a href="../index.html"><img src="../data/images/logo.png" alt="随州人才网" width="260" height="70"></a></div>
		<div class="logo-side-title f-left">积分商城</div>
		<div class="top-search f-left">
			<form action="http://www.0722ren.com/shop/shop_list.php" method="get">
			<div class="search-main clearfix">
				<input type="hidden" name="shop_nav" value=""><input type="hidden" name="user_points" value=""><div class="search-text f-left"><input type="text" name="key" value=""></div>
				<div class="search-submit f-left"><input type="submit" value="搜 索"></div>
			</div>
			</form>
						<div class="key-word">
				<span class="key-title">热门搜索：</span>
								<a href="shop_list.php%EF%BC%9Fuser_points=&amp;shop_nav=&amp;key=%E6%95%B0%E7%A0%81%E7%94%B5%E5%AD%90">数码电子</a>
								<a href="shop_list.php%EF%BC%9Fuser_points=&amp;shop_nav=&amp;key=%E6%89%8B%E6%9C%BA%E5%85%85%E5%80%BC%E5%8D%A1">手机充值卡</a>
								<a href="shop_list.php%EF%BC%9Fuser_points=&amp;shop_nav=&amp;key=%E7%9F%AD%E4%BF%A1%E5%8F%A0%E5%8A%A0%E5%8C%85">短信叠加包</a>
							</div>
					</div>
		<div class="qr-code f-right"><img src="../data/images/weixin_img.jpg" alt="二维码" width="65" height="65"></div>
	</div>
	<div class="shop-nav">
		<div class="container">
			<ul class="nav-wrap clearfix">
<li class="f-left"><a href="index.php" target="_self" class="nav-item ">首  页</a></li>
								<li class="f-left"><a href="shop_list.php" target="_self" class="nav-item ">全部商品</a></li>
								<li class="f-left"><a href="shop_charts_list.php" target="_self" class="nav-item ">排行榜</a></li>
								<li class="f-left"><a href="shop_esoterica.php" class="nav-item active">积分秘籍</a></li>
			</ul>
</div>
	</div>
</div>
<link rel="stylesheet" href="../templates/tpl_shop/default/css/ui-dialog.css">
<script src="../templates/tpl_shop/default/js/dialog-min.js"></script><script>
	$(document).ready(function() {
	//无登录情况 弹框登录
		$(".account-login").live("click",function(){
			var myDialog = dialog();// 初始化一个带有loading图标的空对话框
		    myDialog.title('用户登录');
		    myDialog.content("加载中...");
		    myDialog.width('475');
		    myDialog.showModal();
			jQuery.ajax({
			    url: '/user/user_ajax_login.php',
			    success: function (data) {
			        myDialog.content(data);// 填充对话框内容
			    }
			});
		});
	});
</script><div class="cheats-banner"></div>
	<div class="cheats-wrap">
		<div class="cheats-row odd">
			<div class="container clearfix">
				<div class="cheats-item f-left">
					<div class="cheat-icon icon1 f-left"></div>
					<div class="cheat-content f-left">
						<h4>完成注册信息</h4>
						<p>新用户注册完成，可获得<br><span>50</span>积分</p>
					</div>
				</div>
				<div class="cheats-item f-left">
					<div class="cheat-icon icon2 f-left"></div>
					<div class="cheat-content f-left">
						<h4>完善基本资料</h4>
						<p>完善基本资料，可获得<br><span>2</span>积分</p>
					</div>
				</div>
				<div class="cheats-item f-left">
					<div class="cheat-icon icon3 f-left"></div>
					<div class="cheat-content f-left">
						<h4>上传企业logo</h4>
						<p>上传企业logo，可获得<br><span>1</span>积分</p>
					</div>
				</div>
				<div class="cheats-item f-left">
					<div class="cheat-icon icon4 f-left"></div>
					<div class="cheat-content f-left">
						<h4>每天第一次登录</h4>
						<p>每天第一次登录，可获得<br><span>5</span>积分</p>
					</div>
				</div>
			</div>
		</div>
		<div class="cheats-row clearfix">
			<div class="container clearfix">
				<div class="cheats-item f-left">
					<div class="cheat-icon icon5 f-left"></div>
					<div class="cheat-content f-left">
						<h4>电子邮箱认证</h4>
						<p>认证电子邮箱，可获得<br><span>10</span>积分</p>
					</div>
				</div>
				<div class="cheats-item f-left">
					<div class="cheat-icon icon6 f-left"></div>
					<div class="cheat-content f-left">
						<h4>手机号码认证</h4>
						<p>认证手机号码，可获得<br><span>10</span>积分</p>
					</div>
				</div>
				<div class="cheats-item f-left">
					<div class="cheat-icon icon7 f-left"></div>
					<div class="cheat-content f-left">
						<h4>营业执照认证</h4>
						<p>营业执照认证，可获得<br><span>15</span>积分</p>
					</div>
				</div>
				<div class="cheats-item f-left">
					<div class="cheat-icon icon8 f-left"></div>
					<div class="cheat-content f-left">
						<h4>微信号认证</h4>
						<p>认证微信号，可获得<br><span>2</span>积分</p>
					</div>
				</div>
			</div>
		</div>
		<div class="cheats-row odd clearfix">
			<div class="container clearfix">
				<div class="cheats-item f-left">
					<div class="cheat-icon icon9 f-left"></div>
					<div class="cheat-content f-left">
						<h4>开通企业地图</h4>
						<p>开通企业地图，可获得<br><span>10</span>积分</p>
					</div>
				</div>
				<div class="cheats-item f-left">
					<div class="cheat-icon icon10 f-left"></div>
					<div class="cheat-content f-left">
						<h4>上传企业风采</h4>
						<p>上传企业风采，可获得<br><span>0</span>积分</p>
					</div>
				</div>
				<div class="cheats-item f-left">
					<div class="cheat-icon icon11 f-left"></div>
					<div class="cheat-content f-left">
						<h4>发布企业动态</h4>
						<p>发布企业动态，可获得<br><span>1</span>积分</p>
					</div>
				</div>
				<div class="cheats-item f-left">
					<div class="cheat-icon icon14 f-left"></div>
					<div class="cheat-content f-left">
						<h4>举报虚假简历</h4>
						<p>举报虚假简历，可获得<br><span>20</span>积分</p>
					</div>
				</div>
			</div>
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
