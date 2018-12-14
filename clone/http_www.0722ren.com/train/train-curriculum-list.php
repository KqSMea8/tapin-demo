<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>教育培训  - 随州人才网</title>
<meta name="description" content="随州人才网 - 教育培训">
<meta name="keywords" content="随州人才网,教育培训">
<meta name="author" content="随州人才网">
<meta name="copyright" content="0722ren.com">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="../favicon.ico">
<link href="../templates/demo11/css/common.css" rel="stylesheet" type="text/css">
<link href="../templates/tpl_train/default/css/train.css" rel="stylesheet" type="text/css">
<link href="../templates/tpl_train/default/css/ui-dialog.css" rel="stylesheet" type="text/css">
<script src="../templates/demo11/js/jquery.js" type="text/javascript"></script><script src="../templates/demo11/js/dialog-min.js" type="text/javascript" language="javascript"></script><script src="../templates/demo11/js/dialog-min-common.js" type="text/javascript" language="javascript"></script><script src="../data/cache_classify.js" type="text/javascript" charset="utf-8"></script><script src="../templates/tpl_train/default/js/jquery.train-search.js" type="text/javascript"></script><script src="../templates/demo11/js/jquery.autocomplete.js" type="text/javascript"></script><script type="text/javascript">
$(document).ready(function()
{
 	allaround("/");
	// 地区填充数据
	city_filldata("#city_list", QS_city_parent, QS_city, "#result-list-city", "#aui_outer_city", "#city_result_show", "#citycategory", "/");
	$(".recommend_curriculum_list .h .s a").click(function(event) {
		generateBackground();
	});
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
	// 全选反选
	$("input[name='selectall']").unbind().click(function(){$(".l :checkbox").attr('checked',$(this).is(':checked'))});
	$("#allapplyjobs").click(function()
	{
		var sltlength=$(".l input:checked").length;
		if (sltlength==0)
		{
			dialog({
                title: '系统提示',
                content: "请选择课程！",
                width:300,
            }).show();
		} else {
			var jidArr=new Array();
			$(".l .p :checkbox[checked]").each(function(index){jidArr[index]=$(this).val();});
			var url_="/user/user_apply_course.php?id="+jidArr.join("-")+"&act=app";
			var myDialog = dialog();
			myDialog.title('申请课程');
			myDialog.content("加载中...");
			myDialog.width('500');
			myDialog.showModal();
			$.get(url_, function(data){
				myDialog.content(data);
				/* 关闭 */
				$(".DialogClose").live('click',function() {
					myDialog.close().remove();
				});
			});
		}
	});
	// 单个申请课程
	$(".apply_for_jobs").click(function(){
		var id=$(this).attr("aid");
		var url_="/user/user_apply_course.php?id="+id+"&act=app";
		var myDialog = dialog();
		myDialog.title('申请课程');
		myDialog.content("加载中...");
		myDialog.width('500');
		myDialog.showModal();
		$.get(url_, function(data){
			myDialog.content(data);
			/* 关闭 */
			$(".DialogClose").live('click',function() {
				myDialog.close().remove();
			});
		});
	});	
	// 去掉列表最后一个的下边框
	$(".recommend_curriculum_list .l").last().css("border-bottom","none");
});
</script>
</head>
<body class="bgf5">
<div id="trainew-header" class="">
	<div class="header-top claerfix">
		<div class="container clearfix containernp">
			<div class="header-title f-left">您好，欢迎访问随州人才网培训专区！<a href="../user/login.php">[登录]</a>
</div>
			<div class="top-contact f-right">
<span>服务热线：0722-3588122</span> | <a href="../index.html">返回人才网</a>
</div>
		</div>
	</div>
	<div class="header-logo-nav">
		<div class="container clearfix containernp">
			<div class="school-logo f-left"><a href="../index.html"><img src="../data/images/logo.png" alt="logo" height="50"></a></div>
			<div class="logo-side-title f-left">培训专区</div>
			<div class="school-nav f-right">
											        <a href="index.html" target="_self" class="s-nav-item f-left">培训首页</a>
			    			        <a href="train-curriculum-list.php" target="_self" class="s-nav-item f-left active">培训课程</a>
			    			        <a href="train-agency-list.php" target="_self" class="s-nav-item f-left">培训机构</a>
			    			        <a href="train-lecturer-list.php" target="_self" class="s-nav-item f-left">推荐讲师</a>
			    			</div>
		</div>
	</div>
</div>
<!-- 搜索块 -->
<div class="container" style="margin-bottom:10px;">
	<div id="filterSearch" style="border:none;">
		<div class="top-search clearfix" style="background:#ffffff">
			<div class="filter-item f-left">
					<div class="choose-item">
						<div class="choose-control choose-control-s">
							<span class="cc-default cc-default-s" id="city_result_show">选择地区类别</span><i class="choose-icon"></i>
							<!-- 工作地区弹出框 -->
							<div class="aui_outer aui_outer_st8" id="aui_outer_city">
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
					<div class="key">请输入课程名称</div>
					<input class="s" type="text" name="key" id="key" value="" style="display:none;"><input name="citycategory" id="citycategory" type="hidden" value=""><input name="category" id="category" type="hidden" value=""><input name="classtype" id="classtype" type="hidden" value=""><input type="hidden" name="start" id="start" value=""><input type="hidden" name="refre" id="refre" value=""><input type="hidden" name="sort" id="sort" value=""><input type="hidden" name="page" id="page" value="">
</div>
			</div>
			<div class="t-search-btn f-left"><input type="button" detype="QS_train_curriculum" id="searcnbtn" value="搜 索"></div>
		</div>
		<div class="fliter-wrap">
			<div class="filter-list-wrap clearfix">
				<div class="fl-type f-left fl-type-s">课程类别：</div>
				<div class="fl-content r-choice f-left">
															<div class="fl-content-li fl-content-li-s" type="category" code="187">电脑</div>
										<div class="fl-content-li fl-content-li-s" type="category" code="188">英语</div>
										<div class="fl-content-li fl-content-li-s" type="category" code="189">文艺体育</div>
										<div class="fl-content-li fl-content-li-s" type="category" code="190">就业技能</div>
										<div class="fl-content-li fl-content-li-s" type="category" code="191">职业资格</div>
										<div class="fl-content-li fl-content-li-s" type="category" code="192">企业管理</div>
										<div class="fl-content-li fl-content-li-s" type="category" code="193">财会金融</div>
										<div class="fl-content-li fl-content-li-s" type="category" code="194">学历教育</div>
										<div class="fl-content-li fl-content-li-s" type="category" code="195">出国留学</div>
									</div>
			</div>
			<div class="filter-list-wrap clearfix">
				<div class="fl-type f-left">上课班制：</div>
				<div class="fl-content f-left">
															<div class="fl-content-li" type="classtype" code="235">随到随学</div>
										<div class="fl-content-li" type="classtype" code="236">白天班</div>
										<div class="fl-content-li" type="classtype" code="237">晚班</div>
										<div class="fl-content-li" type="classtype" code="238">周末班</div>
										<div class="fl-content-li" type="classtype" code="239">全日制</div>
										<div class="fl-content-li" type="classtype" code="240">其他班</div>
									</div>
			</div>
			<div class="filter-list-wrap clearfix">
				<div class="fl-type f-left">开课时间：</div>
				<div class="fl-content f-left">
					<div class="fl-content-li" type="start" code="3">3天内</div>
					<div class="fl-content-li" type="start" code="7">7天内</div>
					<div class="fl-content-li" type="start" code="30">30天内</div>
					<div class="fl-content-li" type="start" code="360">常年开课</div>
				</div>
			</div>
			<div class="filter-list-wrap clearfix">
				<div class="fl-type f-left">更新时间：</div>
				<div class="fl-content f-left">
					<div class="fl-content-li" type="refre" code="3">3天内</div>
					<div class="fl-content-li" type="refre" code="7">7天内</div>
					<div class="fl-content-li" type="refre" code="30">30天内</div>
				</div>
			</div>
		</div>
		<div class="fliter-result clearfix" id="has_result">
			<div class="fr-type f-left">已选条件：</div>
			<div class="fr-content f-left rl">
																					</div>
			<div class="fliter-clear f-right" id="clear_all_selected"><a href="javascript:;" class="clear-link">清空所选</a></div>
		</div>
	</div>
</div>
<!-- 搜索块 End-->
<!-- 课程列表 -->
<div class="recommend_curriculum_list">
	<div class="h">
		<div class="t">排序</div>
		<div class="s">
			<a href="train-curriculum-list.php%EF%BC%9Fcitycategory=&amp;category=&amp;classtype=&amp;start=&amp;refre=&amp;key=&amp;sort=rtime" class="select">更新时间</a>
		    <a href="train-curriculum-list.php%EF%BC%9Fcitycategory=&amp;category=&amp;classtype=&amp;start=&amp;refre=&amp;key=&amp;sort=hot">热度</a>
		</div>
	</div>
	<div class="h">
		<div class="t ti"><label><input name="selectall" id="selectall" type="checkbox">  全选</label></div>
		<div class="s si"><span id="allapplyjobs">申请课程</span></div>
		<div class="s siri"><div class="pageminnav"></div></div>
	</div>
			<div class="emptytip">抱歉，没有符合此条件的信息！</div>
	</div>
<!-- 课程列表 End-->
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
					<li class="f-left"><a target="_blank" href="train-curriculum-list.php">培训课程</a></li>
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
