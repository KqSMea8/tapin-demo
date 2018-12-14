<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="../favicon.ico">
<title>积分商城-搜索结果</title>
<link rel="stylesheet" href="../templates/tpl_shop/default/css/shop.css">
<script src="../templates/tpl_shop/default/js/jquery.js"></script><script>
$(document).ready(function() {
	$('.commodity-list .commodity-item:nth-child(4n)').css({'margin-right':0});
	//勾选  我能兑换
	$("#merge_com_btn").click(function(){
		if($(this).is(':checked')){
			var user_points = $("#user_points").val();
			//如果有值 说明是登录状态
			if(user_points)
			{
				window.location.href='shop_list.php?user_points='+user_points+'';
			}
			else
			{
				var myDialog = dialog();// 初始化一个带有loading图标的空对话框
				jQuery.ajax({
				    url: '/user/user_ajax_login.php',
				    success: function (data) {
				        myDialog.content(data);// 填充对话框内容
				        myDialog.title('用户登录');// 填充对话框内容
				    	myDialog.showModal();
				    }
				});
			}
		} else {
			window.location.href='shop_list.php';
		}
	});
	// 鼠标移动到目标区域，该区域边框变色
	$(".commodity-item").hover(function() {
		$(this).addClass('bdcolor01');
	}, function() {
		$(this).removeClass('bdcolor01');
	});
});	
</script>
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
								<li class="f-left"><a href="shop_list.php" target="_self" class="nav-item  active">全部商品</a></li>
								<li class="f-left"><a href="shop_charts_list.php" target="_self" class="nav-item ">排行榜</a></li>
								<li class="f-left"><a href="shop_esoterica.php" class="nav-item ">积分秘籍</a></li>
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
</script><div class=" container shop-main clearfix">
		<!-- left -->
		<div class="threefour-left">
			<div class="item-nav">
				<h2 class="i-nav-title">全部商品分类</h2>
				<ul class="big-type">
<li class="b-type-li">
						<h3>生活家居</h3>
																		<ul class="small-type">
<li><a href="shop_list.php%EF%BC%9Fkey=&amp;page=1&amp;scategory=4">服装配饰</a></li>
														<li><a href="shop_list.php%EF%BC%9Fkey=&amp;page=1&amp;scategory=5">清洁护理</a></li>
														<li><a href="shop_list.php%EF%BC%9Fkey=&amp;page=1&amp;scategory=6">灯饰照明</a></li>
																				</ul>
</li>
										<li class="b-type-li">
						<h3>时尚数码</h3>
																		<ul class="small-type">
<li><a href="shop_list.php%EF%BC%9Fkey=&amp;page=1&amp;scategory=7">厨房用品</a></li>
														<li><a href="shop_list.php%EF%BC%9Fkey=&amp;page=1&amp;scategory=8">手机配件</a></li>
														<li><a href="shop_list.php%EF%BC%9Fkey=&amp;page=1&amp;scategory=9">生活电器</a></li>
																				</ul>
</li>
										<li class="b-type-li">
						<h3>手机充值</h3>
																		<ul class="small-type">
<li><a href="shop_list.php%EF%BC%9Fkey=&amp;page=1&amp;scategory=10">话费直充</a></li>
														<li><a href="shop_list.php%EF%BC%9Fkey=&amp;page=1&amp;scategory=11">流量加油包</a></li>
																				</ul>
</li>
									</ul>
</div>
		</div>
		<!-- right -->
		<div class="threefour-right">
						<div class="shop-filter">
				<span>按分值浏览：</span>
				<a href="shop_list.php%EF%BC%9Fpoints_interval=&amp;key=&amp;page=1" class="filter-item" style="color: #0180cf;">全部</a>
				<a href="shop_list.php%EF%BC%9Fkey=&amp;points_interval=0-1000&amp;page=1" class="filter-item">0-1000</a>
				<a href="shop_list.php%EF%BC%9Fkey=&amp;page=1&amp;points_interval=1000-3000" class="filter-item">1000-3000</a>
				<a href="shop_list.php%EF%BC%9Fkey=&amp;page=1&amp;points_interval=3000-5000" class="filter-item">3000-5000</a>
				<a href="shop_list.php%EF%BC%9Fkey=&amp;page=1&amp;points_interval=5000-7000" class="filter-item">5000-7000</a>
				<a href="shop_list.php%EF%BC%9Fkey=&amp;page=1&amp;points_interval=7000-9000" class="filter-item">7000-9000</a>
				<a href="shop_list.php%EF%BC%9Fkey=&amp;page=1&amp;points_interval=9000-12000" class="filter-item">9000-12000</a>
				<a href="shop_list.php%EF%BC%9Fkey=&amp;page=1&amp;points_interval=12000-15000" class="filter-item">12000-15000</a>
				<a href="shop_list.php%EF%BC%9Fkey=&amp;page=1&amp;points_interval=15000-99999" class="filter-item">15000以上</a>
			</div>
						<div class="right-common-box">
								<div class="r-com-top clearfix">
					<div class="items-filter f-left">
						<span>筛选：</span>
						<a href="shop_list.php%EF%BC%9Fdisplayorder=&amp;key=&amp;page=1" class="filter-control active">添加时间</a>
						<a href="shop_list.php%EF%BC%9Fkey=&amp;page=1&amp;displayorder=shop_points" class="filter-control ">分值排序</a>
						<a href="shop_list.php%EF%BC%9Fkey=&amp;page=1&amp;displayorder=click" class="filter-control ">商品销量</a>
						<label><input type="checkbox" class="inpmidd" name="merge_com_btn" id="merge_com_btn"> 我能兑换</label>
						<input type="hidden" name="user_points" id="user_points" value="">
</div>
					<div class="small-page f-right">
						<div class="pageminnav"></div>
					</div>
				</div>
				<div class="commodity-list clearfix">
										<div class="data-empty">
<img src="../templates/tpl_shop/default/images/empty-box.png" alt="">没有您要找的商品！</div>
									</div>
			</div>

			<div class="page clearfix">
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
