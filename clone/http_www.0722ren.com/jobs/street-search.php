<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>按道路搜索  - 职位列表  - 随州人才网</title>
<meta name="description" content="随州人才网 - 按道路搜索 - 招聘岗位">
<meta name="keywords" content="随州人才网,职位信息">
<meta name="author" content="随州人才网">
<meta name="copyright" content="0722ren.com">
<meta http-equiv="X-UA-Compatible" content="edge">
<meta name="renderer" content="webkit">
<link rel="shortcut icon" href="../favicon.ico">
<link href="../templates/demo11/css/common.css" rel="stylesheet" type="text/css">
<link href="../templates/demo11/css/jobs.css" rel="stylesheet" type="text/css">
<link href="../templates/demo11/css/ui-dialog.css" rel="stylesheet" type="text/css">
<script src="../templates/demo11/js/jquery.js" type="text/javascript"></script><script src="../templates/demo11/js/dialog-min.js" type="text/javascript" language="javascript"></script><script src="../templates/demo11/js/dialog-min-common.js" type="text/javascript" language="javascript"></script><script src="../templates/demo11/js/jquery.highlight-3.js" type="text/javascript"></script><script src="../templates/demo11/js/jquery.jobs-street-list.js" type="text/javascript"></script><script src="../templates/demo11/js/jquery.vtip-min.js" type="text/javascript"></script><script src="../templates/demo11/js/jquery.cookie.js" type="text/javascript"></script><script type="text/javascript">
$(document).ready(function()
{
	//详细下拉
	$('.list-item-ctrl').each(function(){
		if ($(this).hasClass('ishow')) {
			$(this).parent().next().show();
		};
		$(this).on('click', function(){
			if ($(this).hasClass('ishow')) {
				$(this).removeClass('ishow');
				$(this).parent().next().hide();
				$('.infolist-row').removeClass('infolist-row').addClass('infolist-row');  //IE7 BUG Fix
			}else{
				$(this).addClass('ishow');
				$(this).parent().next().show();
				$('.infolist-row').removeClass('infolist-row').addClass('infolist-row');  //IE7 BUG Fix
			};
		});
	});
	allaround("/");
	jobslist();
	// 合并公司职位弹出
	$(".mjob_name").hover(function(){
		$(this).find(".merger_job_info").show();
	}, function(){
		$(this).find(".merger_job_info").hide();
	})
	//
	var mode= $.cookie('mode');
	if(mode==1)
	{
		$('#list').removeClass('select');
		$('#detail').addClass('select');
		$(".xiala").addClass("ishow");
		$(".txt_detail").show();
	}
	else
	{
		$('#detail').removeClass('select');
		$('#list').addClass('select');
		$(".xiala").removeClass("ishow");
		$(".txt_detail").hide();
	}
	$(".tab-list").die().live('click', function(event) {
		$(this).addClass('select');
		$(".tab-detail").removeClass('select');
		$('.list-item-ctrl').removeClass('ishow');
		$(".info-list-detail").hide();
		$('.infolist-row').removeClass('infolist-row').addClass('infolist-row');
	});
	$(".tab-detail").die().live('click', function(event) {
		$(this).addClass('select');
		$(".tab-list").removeClass('select');
		$('.list-item-ctrl').addClass('ishow');
		$(".info-list-detail").show();
		$('.infolist-row').removeClass('infolist-row').addClass('infolist-row');
	});
	$(".infolists .merger_com_box:last").css({"border-bottom":"0"});
	//单个职位  下拉显示
	$(".xiala").click(function(){
		if($(this).hasClass("ishow")) {
			$(this).parent().next().hide();
			$(this).removeClass("ishow");
		} else {
			$(this).parent().next().show();
			$(this).addClass("ishow");
		}
	});
	$("#infolists .infolist-row:last").css("border-bottom","none");
	//申请职位
	apply_jobs("/");
	// 收藏职位
	favorites("/");
	// 合并公司
	var com_list= $.cookie('com_list');
	if(com_list ==1)
	{
		$("#merge_com_btn").attr("checked",true);
	}
	
	$("#merge_com_btn").click(function(){
		generateBackground();
		if($(this).attr('checked')){
			$.cookie('com_list','1');
			window.location.reload();

		} else {
			$.cookie("com_list", null); 
			window.location.reload();
		}
	})
	$(".jobinfolists .tit .sort a").click(function(event) {
		generateBackground();
	});
	$("#infolists .list:last").css("border-bottom","none");
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
                                <a href="map-search.php%EF%BC%9Fid=1" target="_blank">地图找工作</a>
                            </li>
                            <li>
                            	<strong>企业服务</strong>
                                <a href="../user/company/company_jobs.php%EF%BC%9Fact=addjobs" target="_blank">发职位</a>
                                <a href="../jobfair/jobfair-list.php" target="_blank">招聘会</a>
                                <a href="../user/company/company_jobs.php%EF%BC%9Fact=simple_jobs" target="_blank">微信招聘</a>
                                <a href="../hrtools/index.php" target="_blank">HR工具箱</a>
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
								<li><a href="jobs-list.php" target="_self">找工作</a></li>
								<li><a href="../resume/resume-list.php" target="_self">聘人才</a></li>
								<li><a href="../simple/simple-list.php" target="_self">微招聘</a></li>
								<li><a href="../hrtools/index.php" target="_self">HR工具箱</a></li>
								<li><a href="../company/index.php" target="_self">企业黄页</a></li>
								<li><a href="map-search-1.html" target="_self">地图找工作</a></li>
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
</script><div class="page_location link_bk">
当前位置：<a href="">首页</a> &gt; <a href="index.html">招聘信息</a> &gt; 按道路搜索
</div>
<div class="container">
	<div id="filterSearch">
		<div class="search-tab clearfix">
			<a href="jobs-list.php" class="s-tab-item f-left">高级搜索</a>
			<a href="street-search.php" class="s-tab-item f-left active">道路搜索</a>
			<a href="map-search.php%EF%BC%9Fid=1" class="s-tab-item f-left">地图搜索</a>
			<a href="view-jobs.php" class="s-tab-item f-left">浏览过的职位</a>
		</div>
		<div class="fliter-wrap fwnob">
			<input type="hidden" detype="QS_street" id="searcnbtn" value="搜 索"><input type="hidden" name="sort" id="sort" value=""><input type="hidden" name="page" id="page" value=""><input type="hidden" name="streetid" id="streetid" value=""><div class="filter-list-wrap clearfix">
				<div class="fl-type f-left">字母检索：</div>
				<div class="fl-content r-choice f-left" id="street_letter"></div>
			</div>
			<div class="filter-list-wrap clearfix abline">
				<div class="fl-type f-left streetkeytext">关键字检索：</div>
				<div class="fl-content r-choice f-left streetkey">
					<div class="keyboxtag"><input name="key" id="key" type="text"></div>
					<div class="keysub"><a class="se" href="javascript:;" id="sosub">搜索</a></div>
				</div>
				<div class="line"></div>
			</div>
			<div class="filter-list-wrap clearfix">
				<div class="fl-type f-left">热门道路：</div>
				<div class="fl-content r-choice f-left" id="show_street">
															<div class="fl-content-li" type="streetid" code="127">解放路</div>
										<div class="fl-content-li" type="streetid" code="128">青年路</div>
										<div class="fl-content-li" type="streetid" code="129">清河路</div>
										<div class="fl-content-li" type="streetid" code="130">汉东路</div>
										<div class="fl-content-li" type="streetid" code="131">明珠路</div>
										<div class="fl-content-li" type="streetid" code="132">沿河大道</div>
										<div class="fl-content-li" type="streetid" code="133">烈山大道</div>
										<div class="fl-content-li" type="streetid" code="134">舜井大道</div>
										<div class="fl-content-li" type="streetid" code="135">交通大道</div>
										<div class="fl-content-li" type="streetid" code="136">迎宾大道</div>
										<div class="fl-content-li" type="streetid" code="137">白云大道</div>
										<div class="fl-content-li" type="streetid" code="138">文峰大道</div>
										<div class="fl-content-li" type="streetid" code="139">擂鼓墩大道</div>
										<div class="fl-content-li" type="streetid" code="140">炎帝大道</div>
										<div class="fl-content-li" type="streetid" code="141">桃园路</div>
										<div class="fl-content-li" type="streetid" code="142">神农大道</div>
										<div class="fl-content-li" type="streetid" code="143">编钟大道</div>
										<div class="fl-content-li" type="streetid" code="144">鹿鹤大道</div>
										<div class="fl-content-li" type="streetid" code="294">季梁大道</div>
										<div class="fl-content-li" type="streetid" code="295">文帝大道</div>
										<div class="fl-content-li" type="streetid" code="296">东城路</div>
										<div class="fl-content-li" type="streetid" code="297">五星路</div>
										<div class="fl-content-li" type="streetid" code="298">红旗路</div>
										<div class="fl-content-li" type="streetid" code="299">十字街</div>
										<div class="fl-content-li" type="streetid" code="300">聚玉街</div>
										<div class="fl-content-li" type="streetid" code="301">鹿鹤街</div>
										<div class="fl-content-li" type="streetid" code="302">香港街</div>
										<div class="fl-content-li" type="streetid" code="303">文峰街</div>
										<div class="fl-content-li" type="streetid" code="304">龙门街</div>
										<div class="fl-content-li" type="streetid" code="305">澳门街</div>
									</div>
			</div>
		</div>
	</div>
</div>
<!--职位列表 -->
<div class="jobinfolists">
	<div class="tit">
		<div class="sort">
			<span class="job_list_type">排序</span>
			<a href="street-search.php%EF%BC%9Fsort=&amp;streetid=&amp;page=1" class="slect">综合排序</a>
			<a href="street-search.php%EF%BC%9Fstreetid=&amp;page=1&amp;sort=rtime">更新时间</a>
						<a href="street-search.php%EF%BC%9Fstreetid=&amp;page=1&amp;sort=wage">薪资待遇</a>
					</div>
		<div class="sort">
			<span class="job_list_type">筛选</span>
			<label class="merger_company"><input type="checkbox" name="" id="merge_com_btn"> 合并公司</label>
		</div>
		<div class="pagerow">
			<div class="pageminnav">
<li><a class=""></a></li>
<li>
<b style="color:#ff9900">1</b>/47页</li>
<li><a href="street-search.php%EF%BC%9Fpage=2">&gt;</a></li>
<div class="clear"></div>
</div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="infolists" id="infolists">
		<div class="infolists-head clearfix">
			<label class="f-left"><input type="checkbox" name="selectall" id="selectall" class="checkbox">全选</label>
			<div class="all-ctrl f-left"><input type="button" value="申请职位" class="all-down-btn deliver"></div>
			<div class="all-ctrl f-left"><a href="javascript:;" class="collect-link collecter">收藏职位</a></div>
						<div class="list-tab f-right">
				<a href="javascript:;" id="list" class="tab-item tab-list">列表</a>
				<a href="javascript:;" id="detail" class="tab-item tab-detail">详细</a>
			</div>
					</div>
				<div class="info-list-wrap">
									<!-- 职位模式 -->
			<div class="infolist-row">
				<div class="info-list-block job clearfix">
					<div class="list-item item1 f-left">
						<input type="checkbox" name="jid" value="6821" id="" class="checkbox"><a href="6821.html" target="_blank" class="underline">业务代表/客户代表/</a>
						<img title="置顶信息" src="../templates/demo11/images/ding.jpg" border="0" class="vtip"><img title="紧急招聘" src="../templates/demo11/images/iconji.gif" border="0" class="vtip"><img title="推荐职位" src="../templates/demo11/images/iconjian.gif" border="0" class="vtip"><img title="欢迎应届生投递简历" src="../templates/demo11/images/ying.jpg" border="0" class="vtip">
</div>
					<div class="list-item item2 f-left"><a href="../c1926.html" target="_blank" class="underline job-company">随州随广文化传媒有限公司 <img src="../templates/demo11/images/yan.gif" alt="已验证"><img src="../data/setmealimg/5.gif" border="0" title="年度会员" class="vtip"></a></div>
					<div class="list-item item3 f-left"><span>1500~2000元/月</span></div>
					<div class="list-item item4 f-left">湖北省/随州市</div>
					<div class="list-item item5 f-left"><span id="r_time" style="color:#FF3300">8小时前</span></div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>学历要求：高中  |  工作经验：1-3年  |  职位性质：全职  |  招聘人数：10人  |  性别要求：不限</p>
						<div>岗位职责：
	职位描述: 


	1、负责新客户的开发和已合作客户的维护，做好客户的服务工作；


	2、负责业务的开拓，实现公司销售目标。


	任职要求： 


	1、 性别不限，学历大专或以上；


	2、 一年以上销售工作经验；擅长网络业务分销；


	3、 品貌端正，身体健康，性格开朗，...</div>
					</div>
					<div class="info-control f-left">
						<input type="button" value="申请职位" jobs_id="6821" class="apply-job-btn app_jobs"><p><a href="javascript:;" class="collect-btn add_favorites" jobs_id="6821"></a></p>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<!-- 职位模式结束 -->
												<!-- 职位模式 -->
			<div class="infolist-row">
				<div class="info-list-block job clearfix">
					<div class="list-item item1 f-left">
						<input type="checkbox" name="jid" value="8416" id="" class="checkbox"><a href="8416.html" target="_blank" class="underline">网络销售经理</a>
						<img title="置顶信息" src="../templates/demo11/images/ding.jpg" border="0" class="vtip">
</div>
					<div class="list-item item2 f-left"><a href="../c2786.html" target="_blank" class="underline job-company">湖北久鼎汽车有限公司 </a></div>
					<div class="list-item item3 f-left"><span>5000~10000元/月</span></div>
					<div class="list-item item4 f-left">湖北省/随州市</div>
					<div class="list-item item5 f-left">2018-10-11</div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>学历要求：中技  |  工作经验：1-3年  |  职位性质：全职  |  招聘人数：20人  |  性别要求：女</p>
						<div>岗位职责：岗位职责：

	1、利用网络进行公司产品的销售及推广；


	2、负责公司网上贸易平台的操作管理和产品信息的发布；


	3、了解和搜集网络上各同行及竞争产品的动态信息；


	4、通过网络进行渠道开发和业务拓展；


	5、按时完成销售任务。


	岗位要求：


	1、中技及以上...</div>
					</div>
					<div class="info-control f-left">
						<input type="button" value="申请职位" jobs_id="8416" class="apply-job-btn app_jobs"><p><a href="javascript:;" class="collect-btn add_favorites" jobs_id="8416"></a></p>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<!-- 职位模式结束 -->
												<!-- 职位模式 -->
			<div class="infolist-row">
				<div class="info-list-block job clearfix">
					<div class="list-item item1 f-left">
						<input type="checkbox" name="jid" value="6819" id="" class="checkbox"><a href="6819.html" target="_blank" class="underline">网站编辑</a>
						<img title="置顶信息" src="../templates/demo11/images/ding.jpg" border="0" class="vtip"><img title="紧急招聘" src="../templates/demo11/images/iconji.gif" border="0" class="vtip"><img title="推荐职位" src="../templates/demo11/images/iconjian.gif" border="0" class="vtip"><img title="欢迎应届生投递简历" src="../templates/demo11/images/ying.jpg" border="0" class="vtip">
</div>
					<div class="list-item item2 f-left"><a href="../c1926.html" target="_blank" class="underline job-company">随州随广文化传媒有限公司 <img src="../templates/demo11/images/yan.gif" alt="已验证"><img src="../data/setmealimg/5.gif" border="0" title="年度会员" class="vtip"></a></div>
					<div class="list-item item3 f-left"><span>2000~3000元/月</span></div>
					<div class="list-item item4 f-left">湖北省/随州市</div>
					<div class="list-item item5 f-left">2018-10-04</div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>学历要求：大专  |  工作经验：无经验  |  职位性质：全职  |  招聘人数：2人  |  性别要求：不限</p>
						<div>岗位职责：
	1、负责网站日常新闻的发布与撰写；


	2、网站内容日常更新，收集信息，编辑信息及相关图片


	3、关注互联网行业热点，根据热点采写相关新闻稿，传播行业资讯。


	4、会熟练使用平面设计软件，并制作专题。


	5、客户日常沟通及维护
</div>
					</div>
					<div class="info-control f-left">
						<input type="button" value="申请职位" jobs_id="6819" class="apply-job-btn app_jobs"><p><a href="javascript:;" class="collect-btn add_favorites" jobs_id="6819"></a></p>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<!-- 职位模式结束 -->
												<!-- 职位模式 -->
			<div class="infolist-row">
				<div class="info-list-block job clearfix">
					<div class="list-item item1 f-left">
						<input type="checkbox" name="jid" value="7416" id="" class="checkbox"><a href="7416.html" target="_blank" class="underline">微信运营人员</a>
						<img title="置顶信息" src="../templates/demo11/images/ding.jpg" border="0" class="vtip"><img title="紧急招聘" src="../templates/demo11/images/iconji.gif" border="0" class="vtip"><img title="推荐职位" src="../templates/demo11/images/iconjian.gif" border="0" class="vtip">
</div>
					<div class="list-item item2 f-left"><a href="../c1926.html" target="_blank" class="underline job-company">随州随广文化传媒有限公司 <img src="../templates/demo11/images/yan.gif" alt="已验证"><img src="../data/setmealimg/5.gif" border="0" title="年度会员" class="vtip"></a></div>
					<div class="list-item item3 f-left"><span>2000~3000元/月</span></div>
					<div class="list-item item4 f-left">湖北省/随州市</div>
					<div class="list-item item5 f-left">2018-09-12</div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>学历要求：大专  |  工作经验：1-3年  |  职位性质：全职  |  招聘人数：2人  |  性别要求：不限</p>
						<div>岗位职责：
	岗位职责： 


	1.独立运营微信公众号，负责日常内容编辑、发布、维护、管理、互动、提高影响力和关注度；


	2.熟练掌握微信的内容创作，能够创作优秀内容，并且具有一定的话题敏感度；


	3.定期与粉丝互动，策划并执行相关线上的微信推广活动；


	4.能够策划组织线上与线...</div>
					</div>
					<div class="info-control f-left">
						<input type="button" value="申请职位" jobs_id="7416" class="apply-job-btn app_jobs"><p><a href="javascript:;" class="collect-btn add_favorites" jobs_id="7416"></a></p>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<!-- 职位模式结束 -->
												<!-- 职位模式 -->
			<div class="infolist-row">
				<div class="info-list-block job clearfix">
					<div class="list-item item1 f-left">
						<input type="checkbox" name="jid" value="7193" id="" class="checkbox"><a href="7193.html" target="_blank" class="underline"><span style="color:#bc123a">电商专员</span></a>
						<img title="置顶信息" src="../templates/demo11/images/ding.jpg" border="0" class="vtip"><img title="紧急招聘" src="../templates/demo11/images/iconji.gif" border="0" class="vtip"><img title="推荐职位" src="../templates/demo11/images/iconjian.gif" border="0" class="vtip"><img title="欢迎应届生投递简历" src="../templates/demo11/images/ying.jpg" border="0" class="vtip">
</div>
					<div class="list-item item2 f-left"><a href="../c1926.html" target="_blank" class="underline job-company">随州随广文化传媒有限公司 <img src="../templates/demo11/images/yan.gif" alt="已验证"></a></div>
					<div class="list-item item3 f-left"><span>3000~5000元/月</span></div>
					<div class="list-item item4 f-left">湖北省/随州市</div>
					<div class="list-item item5 f-left">2018-09-12</div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>学历要求：高中  |  工作经验：无经验  |  职位性质：全职  |  招聘人数：3人  |  性别要求：不限</p>
						<div>岗位职责：
	岗位职责： 


	1、配合电商具体项目的落实；


	2、现场解答与办理相关客户的电商活动申请资格。


	任职要求： 


	1、大专及以上学历，电子商务及市场营销相关专业优先；


	2、一年以上网络营销或房地产、汽车、装饰行业经验，熟悉电商操作流程，了解本地房地产、车市...</div>
					</div>
					<div class="info-control f-left">
						<input type="button" value="申请职位" jobs_id="7193" class="apply-job-btn app_jobs"><p><a href="javascript:;" class="collect-btn add_favorites" jobs_id="7193"></a></p>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<!-- 职位模式结束 -->
												<!-- 职位模式 -->
			<div class="infolist-row">
				<div class="info-list-block job clearfix">
					<div class="list-item item1 f-left">
						<input type="checkbox" name="jid" value="8266" id="" class="checkbox"><a href="8266.html" target="_blank" class="underline">渠道专员</a>
						<img title="置顶信息" src="../templates/demo11/images/ding.jpg" border="0" class="vtip"><img title="推荐职位" src="../templates/demo11/images/iconjian.gif" border="0" class="vtip"><img title="欢迎应届生投递简历" src="../templates/demo11/images/ying.jpg" border="0" class="vtip">
</div>
					<div class="list-item item2 f-left"><a href="../c2959.html" target="_blank" class="underline job-company">湖北驭兴信息服务有限公司 <img src="../templates/demo11/images/yan.gif" alt="已验证"><img src="../data/setmealimg/5.gif" border="0" title="年度会员" class="vtip"></a></div>
					<div class="list-item item3 f-left"><span>3000~5000元/月</span></div>
					<div class="list-item item4 f-left">湖北省/随州市</div>
					<div class="list-item item5 f-left">2018-06-11</div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>学历要求：中专  |  工作经验：无经验  |  职位性质：全职  |  招聘人数：5人  |  性别要求：不限</p>
						<div>岗位职责：
	岗位职责：


	1、负责公司产品的销售及推广；


	2、根据市场营销计划，完成部门销售指标；


	3、开拓新市场,发展新客户,增加产品销售范围；


	4、负责辖区市场信息的收集及竞争对手的分析；


	5、负责销售区域内销售活动的策划和执行，完成销售任务；


	6、管理维...</div>
					</div>
					<div class="info-control f-left">
						<input type="button" value="申请职位" jobs_id="8266" class="apply-job-btn app_jobs"><p><a href="javascript:;" class="collect-btn add_favorites" jobs_id="8266"></a></p>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<!-- 职位模式结束 -->
												<!-- 职位模式 -->
			<div class="infolist-row">
				<div class="info-list-block job clearfix">
					<div class="list-item item1 f-left">
						<input type="checkbox" name="jid" value="8162" id="" class="checkbox"><a href="8162.html" target="_blank" class="underline">置业顾问</a>
						<img title="置顶信息" src="../templates/demo11/images/ding.jpg" border="0" class="vtip"><img title="紧急招聘" src="../templates/demo11/images/iconji.gif" border="0" class="vtip"><img title="推荐职位" src="../templates/demo11/images/iconjian.gif" border="0" class="vtip"><img title="欢迎应届生投递简历" src="../templates/demo11/images/ying.jpg" border="0" class="vtip">
</div>
					<div class="list-item item2 f-left"><a href="../c2862.html" target="_blank" class="underline job-company">武汉易居投资有限公司 <img src="../templates/demo11/images/yan.gif" alt="已验证"><img src="../data/setmealimg/5.gif" border="0" title="年度会员" class="vtip"></a></div>
					<div class="list-item item3 f-left"><span>5000~10000元/月</span></div>
					<div class="list-item item4 f-left">湖北省/随州市</div>
					<div class="list-item item5 f-left">2018-03-11</div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>学历要求：大专  |  工作经验：无经验  |  职位性质：全职  |  招聘人数：15人  |  性别要求：不限</p>
						<div>岗位职责：1.大专以上学历（专业不限）；
2.年龄18-35岁，五官端正，形象气质佳，普通话标准；
3.大专以上学历（专业不限）；
4.热爱销售，对房地产行业有浓厚的兴趣，有志于投身行业发展；
5.吃苦耐劳，诚实务实，具备良好的语言表达与沟通能力；
6.具备良好的团队合作精神，能承受较强的工作压力...</div>
					</div>
					<div class="info-control f-left">
						<input type="button" value="申请职位" jobs_id="8162" class="apply-job-btn app_jobs"><p><a href="javascript:;" class="collect-btn add_favorites" jobs_id="8162"></a></p>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<!-- 职位模式结束 -->
												<!-- 职位模式 -->
			<div class="infolist-row">
				<div class="info-list-block job clearfix">
					<div class="list-item item1 f-left">
						<input type="checkbox" name="jid" value="8161" id="" class="checkbox"><a href="8161.html" target="_blank" class="underline">拓客专员</a>
						<img title="置顶信息" src="../templates/demo11/images/ding.jpg" border="0" class="vtip"><img title="紧急招聘" src="../templates/demo11/images/iconji.gif" border="0" class="vtip"><img title="推荐职位" src="../templates/demo11/images/iconjian.gif" border="0" class="vtip"><img title="欢迎应届生投递简历" src="../templates/demo11/images/ying.jpg" border="0" class="vtip">
</div>
					<div class="list-item item2 f-left"><a href="../c2862.html" target="_blank" class="underline job-company">武汉易居投资有限公司 <img src="../templates/demo11/images/yan.gif" alt="已验证"><img src="../data/setmealimg/5.gif" border="0" title="年度会员" class="vtip"></a></div>
					<div class="list-item item3 f-left"><span>3000~5000元/月</span></div>
					<div class="list-item item4 f-left">湖北省/随州市</div>
					<div class="list-item item5 f-left">2018-03-11</div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>学历要求：大专  |  工作经验：无经验  |  职位性质：全职  |  招聘人数：15人  |  性别要求：不限</p>
						<div>岗位职责：1、22-40岁，大专以上学历；
2、普通话标准，口齿清晰，具备独立的市场及客户资源开拓能力；
3、能力出众者条件面议。</div>
					</div>
					<div class="info-control f-left">
						<input type="button" value="申请职位" jobs_id="8161" class="apply-job-btn app_jobs"><p><a href="javascript:;" class="collect-btn add_favorites" jobs_id="8161"></a></p>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<!-- 职位模式结束 -->
												<!-- 职位模式 -->
			<div class="infolist-row">
				<div class="info-list-block job clearfix">
					<div class="list-item item1 f-left">
						<input type="checkbox" name="jid" value="8160" id="" class="checkbox"><a href="8160.html" target="_blank" class="underline">策划助理</a>
						<img title="置顶信息" src="../templates/demo11/images/ding.jpg" border="0" class="vtip"><img title="紧急招聘" src="../templates/demo11/images/iconji.gif" border="0" class="vtip"><img title="推荐职位" src="../templates/demo11/images/iconjian.gif" border="0" class="vtip">
</div>
					<div class="list-item item2 f-left"><a href="../c2862.html" target="_blank" class="underline job-company">武汉易居投资有限公司 <img src="../templates/demo11/images/yan.gif" alt="已验证"><img src="../data/setmealimg/5.gif" border="0" title="年度会员" class="vtip"></a></div>
					<div class="list-item item3 f-left"><span>3000~5000元/月</span></div>
					<div class="list-item item4 f-left">湖北省/随州市</div>
					<div class="list-item item5 f-left">2018-03-11</div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>学历要求：大专  |  工作经验：1-3年  |  职位性质：全职  |  招聘人数：8人  |  性别要求：不限</p>
						<div>岗位职责：1、大专以上学历，经济类、建筑学、广告学、营销房地产类等相关专业优先；
2、有良好的团队协作能力；
3、思维活跃、文笔优秀、善于沟通；
4、熟练使用办公软件。</div>
					</div>
					<div class="info-control f-left">
						<input type="button" value="申请职位" jobs_id="8160" class="apply-job-btn app_jobs"><p><a href="javascript:;" class="collect-btn add_favorites" jobs_id="8160"></a></p>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<!-- 职位模式结束 -->
												<!-- 职位模式 -->
			<div class="infolist-row">
				<div class="info-list-block job clearfix">
					<div class="list-item item1 f-left">
						<input type="checkbox" name="jid" value="8159" id="" class="checkbox"><a href="8159.html" target="_blank" class="underline">案场助理</a>
						<img title="置顶信息" src="../templates/demo11/images/ding.jpg" border="0" class="vtip"><img title="紧急招聘" src="../templates/demo11/images/iconji.gif" border="0" class="vtip"><img title="推荐职位" src="../templates/demo11/images/iconjian.gif" border="0" class="vtip">
</div>
					<div class="list-item item2 f-left"><a href="../c2862.html" target="_blank" class="underline job-company">武汉易居投资有限公司 <img src="../templates/demo11/images/yan.gif" alt="已验证"><img src="../data/setmealimg/5.gif" border="0" title="年度会员" class="vtip"></a></div>
					<div class="list-item item3 f-left"><span>3000~5000元/月</span></div>
					<div class="list-item item4 f-left">湖北省/随州市</div>
					<div class="list-item item5 f-left">2018-03-11</div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>学历要求：大专  |  工作经验：1-3年  |  职位性质：全职  |  招聘人数：8人  |  性别要求：不限</p>
						<div>岗位职责：1.大专以上学历，财务、统计学相关专业优先；
2.年龄18-28岁，五官端正，亲和力强；
3、熟练使用OFFICE软件，文字录入速度较快；
4、具备一定的数据统计能力，能独立完成各类报表统计工作。</div>
					</div>
					<div class="info-control f-left">
						<input type="button" value="申请职位" jobs_id="8159" class="apply-job-btn app_jobs"><p><a href="javascript:;" class="collect-btn add_favorites" jobs_id="8159"></a></p>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<!-- 职位模式结束 -->
												<!-- 职位模式 -->
			<div class="infolist-row">
				<div class="info-list-block job clearfix">
					<div class="list-item item1 f-left">
						<input type="checkbox" name="jid" value="7678" id="" class="checkbox"><a href="7678.html" target="_blank" class="underline">业务经理</a>
						<img title="置顶信息" src="../templates/demo11/images/ding.jpg" border="0" class="vtip"><img title="紧急招聘" src="../templates/demo11/images/iconji.gif" border="0" class="vtip"><img title="推荐职位" src="../templates/demo11/images/iconjian.gif" border="0" class="vtip">
</div>
					<div class="list-item item2 f-left"><a href="../c2525.html" target="_blank" class="underline job-company">稻花香苦荞酒随州运营中心 </a></div>
					<div class="list-item item3 f-left"><span>3000~5000元/月</span></div>
					<div class="list-item item4 f-left">随州市</div>
					<div class="list-item item5 f-left">2017-08-03</div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>学历要求：不限  |  工作经验：  |  职位性质：全职  |  招聘人数：若干人  |  性别要求：不限</p>
						<div>岗位职责：三年以上的销售经验，对市内市场熟悉。</div>
					</div>
					<div class="info-control f-left">
						<input type="button" value="申请职位" jobs_id="7678" class="apply-job-btn app_jobs"><p><a href="javascript:;" class="collect-btn add_favorites" jobs_id="7678"></a></p>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<!-- 职位模式结束 -->
												<!-- 职位模式 -->
			<div class="infolist-row">
				<div class="info-list-block job clearfix">
					<div class="list-item item1 f-left">
						<input type="checkbox" name="jid" value="7680" id="" class="checkbox"><a href="7680.html" target="_blank" class="underline">销售代表</a>
						<img title="置顶信息" src="../templates/demo11/images/ding.jpg" border="0" class="vtip"><img title="紧急招聘" src="../templates/demo11/images/iconji.gif" border="0" class="vtip"><img title="推荐职位" src="../templates/demo11/images/iconjian.gif" border="0" class="vtip"><img title="欢迎应届生投递简历" src="../templates/demo11/images/ying.jpg" border="0" class="vtip">
</div>
					<div class="list-item item2 f-left"><a href="../c2525.html" target="_blank" class="underline job-company">稻花香苦荞酒随州运营中心 <img src="../templates/demo11/images/yan.gif" alt="已验证"></a></div>
					<div class="list-item item3 f-left"><span>2000~3000元/月</span></div>
					<div class="list-item item4 f-left">湖北省/随州市</div>
					<div class="list-item item5 f-left">2017-08-03</div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>学历要求：大专  |  工作经验：1-3年  |  职位性质：全职  |  招聘人数：50人  |  性别要求：不限</p>
						<div>岗位职责：
	岗位职责：


	1、负责公司产品的销售及推广；&amp;nbsp;


	2、根据市场营销计划，完成部门销售指标；&amp;nbsp;


	3、开拓新市场,发展新客户,增加产品销售范围；&amp;nbsp;


	4、负责辖区市场信息的收集及竞争对手的分析；&amp;nbsp;


	5、负责销售区域内销售活动的策划和执行，完成销...</div>
					</div>
					<div class="info-control f-left">
						<input type="button" value="申请职位" jobs_id="7680" class="apply-job-btn app_jobs"><p><a href="javascript:;" class="collect-btn add_favorites" jobs_id="7680"></a></p>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<!-- 职位模式结束 -->
												<!-- 职位模式 -->
			<div class="infolist-row">
				<div class="info-list-block job clearfix">
					<div class="list-item item1 f-left">
						<input type="checkbox" name="jid" value="8417" id="" class="checkbox"><a href="8417.html" target="_blank" class="underline">销售业务员</a>
																													</div>
					<div class="list-item item2 f-left"><a href="../c2995.html" target="_blank" class="underline job-company">小商品批发交易市场78号批发部 </a></div>
					<div class="list-item item3 f-left"><span>3000~5000元/月</span></div>
					<div class="list-item item4 f-left">随州市</div>
					<div class="list-item item5 f-left"><span id="r_time" style="color:#FF3300">9小时前</span></div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>学历要求：不限  |  工作经验：  |  职位性质：全职  |  招聘人数：若干人  |  性别要求：不限</p>
						<div>岗位职责：送货上门销售服务人员</div>
					</div>
					<div class="info-control f-left">
						<input type="button" value="申请职位" jobs_id="8417" class="apply-job-btn app_jobs"><p><a href="javascript:;" class="collect-btn add_favorites" jobs_id="8417"></a></p>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<!-- 职位模式结束 -->
												<!-- 职位模式 -->
			<div class="infolist-row">
				<div class="info-list-block job clearfix">
					<div class="list-item item1 f-left">
						<input type="checkbox" name="jid" value="8368" id="" class="checkbox"><a href="8368.html" target="_blank" class="underline">销售精英</a>
																													</div>
					<div class="list-item item2 f-left"><a href="../c3031.html" target="_blank" class="underline job-company">中国平安人寿保险股份有限公司 </a></div>
					<div class="list-item item3 f-left"><span>5000~10000元/月</span></div>
					<div class="list-item item4 f-left">湖北省/随州市</div>
					<div class="list-item item5 f-left"><span id="r_time" style="color:#FF3300">1天前</span></div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>学历要求：高中  |  工作经验：1-3年  |  职位性质：全职  |  招聘人数：15人  |  性别要求：不限</p>
						<div>岗位职责：
	中国平安紧抓保险业新“国十条”发展契机，现面向社会推出“1号计划”―主管招募培养计划：
1号计划（主管招募培养计划）是中国平安面向社会公开招募一批25-45岁的社会英才，通过公司的培养，在未来一年左右的时间成为掌握综合金融知识的平安业务主管。
招募要求：
1、年龄25―45岁；...</div>
					</div>
					<div class="info-control f-left">
						<input type="button" value="申请职位" jobs_id="8368" class="apply-job-btn app_jobs"><p><a href="javascript:;" class="collect-btn add_favorites" jobs_id="8368"></a></p>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<!-- 职位模式结束 -->
												<!-- 职位模式 -->
			<div class="infolist-row">
				<div class="info-list-block job clearfix">
					<div class="list-item item1 f-left">
						<input type="checkbox" name="jid" value="8369" id="" class="checkbox"><a href="8369.html" target="_blank" class="underline">销售主管</a>
																													</div>
					<div class="list-item item2 f-left"><a href="../c3031.html" target="_blank" class="underline job-company">中国平安人寿保险股份有限公司 </a></div>
					<div class="list-item item3 f-left"><span>1万以上/月</span></div>
					<div class="list-item item4 f-left">湖北省/随州市</div>
					<div class="list-item item5 f-left"><span id="r_time" style="color:#FF3300">1天前</span></div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>学历要求：高中  |  工作经验：3-5年  |  职位性质：全职  |  招聘人数：10人  |  性别要求：不限</p>
						<div>岗位职责：中国平安紧抓保险业新“国十条”发展契机，现面向社会推出“1号计划”―主管招募培养计划：
1号计划（主管招募培养计划）是中国平安面向社会公开招募一批25-45岁的社会英才，通过公司的培养，在未来一年左右的时间成为掌握综合金融知识的平安业务主管。
招募要求：
1、年龄25―45岁；
2、...</div>
					</div>
					<div class="info-control f-left">
						<input type="button" value="申请职位" jobs_id="8369" class="apply-job-btn app_jobs"><p><a href="javascript:;" class="collect-btn add_favorites" jobs_id="8369"></a></p>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<!-- 职位模式结束 -->
												<!-- 职位模式 -->
			<div class="infolist-row">
				<div class="info-list-block job clearfix">
					<div class="list-item item1 f-left">
						<input type="checkbox" name="jid" value="8366" id="" class="checkbox"><a href="8366.html" target="_blank" class="underline">综合金融主管</a>
																													</div>
					<div class="list-item item2 f-left"><a href="../c3031.html" target="_blank" class="underline job-company">中国平安人寿保险股份有限公司 </a></div>
					<div class="list-item item3 f-left"><span>5000~10000元/月</span></div>
					<div class="list-item item4 f-left">湖北省/随州市</div>
					<div class="list-item item5 f-left"><span id="r_time" style="color:#FF3300">1天前</span></div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>学历要求：高中  |  工作经验：3-5年  |  职位性质：全职  |  招聘人数：10人  |  性别要求：不限</p>
						<div>岗位职责：中国平安紧抓保险业新“国十条”发展契机，现面向社会推出“1号计划”―主管招募培养计划：
1号计划（主管招募培养计划）是中国平安面向社会公开招募一批25-45岁的社会英才，通过公司的培养，在未来一年左右的时间成为掌握综合金融知识的平安业务主管。
招募要求：
1、年龄25―45岁；
2、...</div>
					</div>
					<div class="info-control f-left">
						<input type="button" value="申请职位" jobs_id="8366" class="apply-job-btn app_jobs"><p><a href="javascript:;" class="collect-btn add_favorites" jobs_id="8366"></a></p>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<!-- 职位模式结束 -->
												<!-- 职位模式 -->
			<div class="infolist-row">
				<div class="info-list-block job clearfix">
					<div class="list-item item1 f-left">
						<input type="checkbox" name="jid" value="8230" id="" class="checkbox"><a href="8230.html" target="_blank" class="underline">市场专员</a>
																													</div>
					<div class="list-item item2 f-left"><a href="../c2598.html" target="_blank" class="underline job-company">UBTV小主播 </a></div>
					<div class="list-item item3 f-left"><span>5000~10000元/月</span></div>
					<div class="list-item item4 f-left">湖北省/随州市</div>
					<div class="list-item item5 f-left">2018-10-11</div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>学历要求：大专  |  工作经验：1年以下  |  职位性质：全职  |  招聘人数：2人  |  性别要求：不限</p>
						<div>岗位职责：
	一、岗位职责： 


	1.积极主动开拓随州市场，掌握相对丰富的学生市场资源；


	2.擅长对目标幼教市场资源进行前期详尽、专业的市场调研，为运营部决策提供依据；


	3.擅长调动和挖掘培训机构可以利用的市场招生资源，全面推进培训机构招生工作；


	4.协助运营总监完成其他...</div>
					</div>
					<div class="info-control f-left">
						<input type="button" value="申请职位" jobs_id="8230" class="apply-job-btn app_jobs"><p><a href="javascript:;" class="collect-btn add_favorites" jobs_id="8230"></a></p>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<!-- 职位模式结束 -->
												<!-- 职位模式 -->
			<div class="infolist-row">
				<div class="info-list-block job clearfix">
					<div class="list-item item1 f-left">
						<input type="checkbox" name="jid" value="8395" id="" class="checkbox"><a href="8395.html" target="_blank" class="underline">文秘</a>
																								<img title="欢迎应届生投递简历" src="../templates/demo11/images/ying.jpg" border="0" class="vtip">
</div>
					<div class="list-item item2 f-left"><a href="../c2598.html" target="_blank" class="underline job-company">UBTV小主播 </a></div>
					<div class="list-item item3 f-left"><span>2000~3000元/月</span></div>
					<div class="list-item item4 f-left">湖北省/随州市</div>
					<div class="list-item item5 f-left">2018-10-11</div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>学历要求：大专  |  工作经验：1年以下  |  职位性质：全职  |  招聘人数：1人  |  性别要求：女</p>
						<div>岗位职责：二、负责各种文件的起草、装订及传递工作；及时处理上级文件的签收、传递、催办；做好文件的回收、清退、销毁工作；做好文秘档案收集管理及保密工作。
四、办理本单位人员的招聘录用、培训教育、绩效考核、晋级晋职、薪资福利、各类保险、统计报表五、做好单位印章管理，按规定开具介绍信。...</div>
					</div>
					<div class="info-control f-left">
						<input type="button" value="申请职位" jobs_id="8395" class="apply-job-btn app_jobs"><p><a href="javascript:;" class="collect-btn add_favorites" jobs_id="8395"></a></p>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<!-- 职位模式结束 -->
												<!-- 职位模式 -->
			<div class="infolist-row">
				<div class="info-list-block job clearfix">
					<div class="list-item item1 f-left">
						<input type="checkbox" name="jid" value="8228" id="" class="checkbox"><a href="8228.html" target="_blank" class="underline">幼师小主持人教师</a>
																													</div>
					<div class="list-item item2 f-left"><a href="../c2598.html" target="_blank" class="underline job-company">UBTV小主播 </a></div>
					<div class="list-item item3 f-left"><span>3000~5000元/月</span></div>
					<div class="list-item item4 f-left">湖北省/随州市</div>
					<div class="list-item item5 f-left">2018-10-11</div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>学历要求：大专  |  工作经验：1-3年  |  职位性质：全职  |  招聘人数：5人  |  性别要求：不限</p>
						<div>岗位职责：
	一、岗位职责：
1.负责课程教学，保证教学质量，提高报名率；
2.严格按照总部提供教材制定教学计划，认真编写教案，组织好课堂教学；
3.负责授课班级的学员管理；
4.负责各项教学服务的执行，根据回访流程表做好回访工作，与学生家长及时沟通；
5.负责保持、维护及增加所授班级的学生...</div>
					</div>
					<div class="info-control f-left">
						<input type="button" value="申请职位" jobs_id="8228" class="apply-job-btn app_jobs"><p><a href="javascript:;" class="collect-btn add_favorites" jobs_id="8228"></a></p>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<!-- 职位模式结束 -->
												<!-- 职位模式 -->
			<div class="infolist-row">
				<div class="info-list-block job clearfix">
					<div class="list-item item1 f-left">
						<input type="checkbox" name="jid" value="8415" id="" class="checkbox"><a href="8415.html" target="_blank" class="underline">医护人员</a>
																													</div>
					<div class="list-item item2 f-left"><a href="../c3076.html" target="_blank" class="underline job-company">吴宗华康复中心 </a></div>
					<div class="list-item item3 f-left"><span>3000~5000元/月</span></div>
					<div class="list-item item4 f-left">随州市</div>
					<div class="list-item item5 f-left">2018-10-10</div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>学历要求：不限  |  工作经验：  |  职位性质：全职  |  招聘人数：若干人  |  性别要求：不限</p>
						<div>岗位职责：中医理疗治疗颈肩腰腿疼，各种关节炎、及疑难杂症</div>
					</div>
					<div class="info-control f-left">
						<input type="button" value="申请职位" jobs_id="8415" class="apply-job-btn app_jobs"><p><a href="javascript:;" class="collect-btn add_favorites" jobs_id="8415"></a></p>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<!-- 职位模式结束 -->
								</div>
		<div class="infolists-head clearfix" style="border-top:1px solid #cccccc;border-bottom:none;">
			<label class="f-left"><input type="checkbox" name="selectall" id="selectall" class="checkbox">全选</label>
			<div class="all-ctrl f-left"><input type="button" value="申请职位" class="all-down-btn deliver"></div>
			<div class="all-ctrl f-left"><a href="javascript:;" class="collect-link collecter">收藏职位</a></div>
		</div>
						<table border="0" align="center" cellpadding="0" cellspacing="0" class="link_bk"><tr>
<td height="50" align="center"> <div class="page link_bk">
<li><a class="">首页</a></li>
<li><a class="">上一页</a></li>
<li><a class="select">1</a></li>
<li><a href="street-search.php%EF%BC%9Fpage=2">2</a></li>
<li><a href="street-search.php%EF%BC%9Fpage=3">3</a></li>
<li><a href="street-search.php%EF%BC%9Fpage=4">4</a></li>
<li><a href="street-search.php%EF%BC%9Fpage=5">5</a></li>
<li><a href="street-search.php%EF%BC%9Fpage=6">6</a></li>
<li><a href="street-search.php%EF%BC%9Fpage=7">7</a></li>
<li><a href="street-search.php%EF%BC%9Fpage=8">8</a></li>
<li><a href="street-search.php%EF%BC%9Fpage=9">9</a></li>
<li><a href="street-search.php%EF%BC%9Fpage=10">10</a></li>
<li><a href="street-search.php%EF%BC%9Fpage=2">下一页</a></li>
<li><a href="street-search.php%EF%BC%9Fpage=47">尾页</a></li>
<li class="page_all">1/47页</li>
<div class="clear"></div>
</div>
</td>
			          	</tr></table>
</div>
</div>
<script src="../templates/demo11/js/jquery.jobs-list.js" type="text/javascript"></script><div id="footer">
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
<li class="f-left"><a target="_blank" href="jobs-list.php">职位搜索</a></li>
					<li class="f-left"><a target="_blank" href="../salary.html">薪酬统计</a></li>
					<li class="f-left"><a target="_blank" href="../subscribe.html">职位订阅</a></li>
					<li class="f-left"><a target="_blank" href="../explain/explain-show.php%EF%BC%9Fid=6">职场指南</a></li>
					<li class="f-left"><a target="_blank" href="../hunter/jobs-list.php">猎头职位</a></li>
					<li class="f-left"><a target="_blank" href="jobs-list.php%EF%BC%9Fnature=63">兼职招聘</a></li>
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
