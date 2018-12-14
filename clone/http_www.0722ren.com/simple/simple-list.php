<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>微商圈</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="随州人才网">
<meta name="copyright" content="0722ren.com">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="../favicon.ico">
<link href="../templates/demo11/css/common.css" rel="stylesheet" type="text/css">
<link href="../templates/demo11/css/simple.css" rel="stylesheet" type="text/css">
<link href="../templates/demo11/css/jobs.css" rel="stylesheet" type="text/css">
<link href="../templates/demo11/css/ui-dialog.css" rel="stylesheet" type="text/css">
<script src="../templates/demo11/js/jquery.js" type="text/javascript"></script><script src="../data/cache_classify.js" type="text/javascript" charset="utf-8"></script><script src="../templates/demo11/js/jquery.validate.min.js" type="text/javascript"></script><script src="../templates/demo11/js/jquery.simple.js" type="text/javascript"></script><script src="../templates/demo11/js/dialog-min.js" type="text/javascript" language="javascript"></script><script src="../templates/demo11/js/dialog-min-common.js" type="text/javascript" language="javascript"></script><script type="text/javascript">
$(document).ready(function(){
	allaround("/");
	// 工作地区填充数据
	city_filldata("#city_list", QS_city_parent, QS_city, "#result-list-city", "#aui_outer_city", "#city_result_show", "#citycategory", "/");
	
	//删除信息
	$(".delsimple").click(function(){
		var url="/plus/ajax_simple.php?act=delsimple&id="+$(this).attr("id");
		var myDialog = dialog();
		myDialog.title('删除信息');
        myDialog.width('500');
        myDialog.content("加载中..");
        myDialog.showModal();
	    $.get(url, function(data){
	        myDialog.content(data);
	    });
	});
	//刷新信息
	$(".refreshsimple").click(function(){
		var url="/plus/ajax_simple.php?act=refreshsimple&id="+$(this).attr("id");
		var myDialog = dialog();
		myDialog.title('刷新信息');
        myDialog.width('500');
        myDialog.content("加载中...");
        myDialog.showModal();
	    $.get(url, function(data){
	        myDialog.content(data);
	    });
	});	
	//编辑信息
	$(".editsimple").click(function(){
		var url="/plus/ajax_simple.php?act=editsimple&id="+$(this).attr("id");
		var myDialog = dialog();
		myDialog.title('编辑信息');
        myDialog.width('600');
        myDialog.content("加载中...");
        myDialog.showModal();
	    $.get(url, function(data){
	        myDialog.content(data);
	    });
	});	
	//发布微招聘
	$("#add").click(function(){
		var url="/plus/ajax_simple.php?act=add";
		var myDialog = dialog();
		myDialog.title('发布微招聘');
        myDialog.width('600');
        myDialog.content("加载中...");
        myDialog.showModal();
	    $.get(url, function(data){
	        myDialog.content(data);
	    });
	});	

	$(".show_tel").click(function(){
		var tel=$(this);
		$.get("/plus/ajax_simple.php?act=get_simple_tel&id="+$(this).attr("id"),function(result){
			tel.parent("li").html(result);
		});
	});
	$(".show_detailed").live("click",function(){
		var detailed=$(this);
		$.get("/plus/ajax_simple.php?act=get_simple_detailed&id="+$(this).attr("id"),function(result){
			detailed.parent("p").html(result);
		});
	});
	$(".hidden_detailed").live("click",function(){
		var detailed=$(this);
		$.get("/plus/ajax_simple.php?act=hidden_simple_detailed&id="+$(this).attr("id"),function(result){
			detailed.parent("p").html(result);
		});
	});
});
$(function(){
	$("input[type='button']").hover(function(){
		$(this).addClass("hover");
	},function(){
		$(this).removeClass("hover");
	})
})
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
                                <a href="../jobs/map-search.php%EF%BC%9Fid=1" target="_blank">地图找工作</a>
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
								<li><a href="../jobs/jobs-list.php" target="_self">找工作</a></li>
								<li><a href="../resume/resume-list.php" target="_self">聘人才</a></li>
								<li class="active"><a href="simple-list.php" target="_self">微招聘</a></li>
								<li><a href="../hrtools/index.php" target="_self">HR工具箱</a></li>
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
		当前位置：<a href="../index.html">首页</a>&gt;微商圈
	</div>
	<!-- 主体内容 -->
	<div class="rec_banner" style="background:url(/templates/demo11/images/simple.jpg) no-repeat top center #248ee6
"></div>
	<div class="container link_bk">
						<div class="wei_left">
			<div class="wei_tit">
				<a href="simple-list.php" class="select">微招聘</a>
				<a href="simple-resume-list.php">微简历</a>
				<div class="clear"></div>
			</div>
			<div class="sreach jobmain" id="simple_form_search">
				<div class="fliter-wrap fwnob">
					<div class="filter-drop clearfix">
						<div class="filter-item f-left">
							<div class="choose-item">
								<div class="choose-control">
									<span class="cc-default" id="city_result_show">选择地区类别</span><i class="choose-icon"></i>
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
						<div class="keybox">
					 		<input type="text" id="searckey" name="key" value="">
</div>
						<input type="button" id="searcnbtn" detype="QS_simplelist" value="搜索" class="but100lan simpleso">
</div>
				</div>
				<input id="citycategory" type="hidden" value="" name="citycategory">
</div>
			
									<div class="wei_list">
				<ul>
<li class="wei_l_content">
					<h4><a>销售代表</a></h4>
					<div class="date">2018-05-22</div>
					<ul>
<li>湖北鸿投电子科技有限公司</li>
						<li>招聘人数：10人</li>
						<li>有效期截至：长期有效</li>
						<li class="tel">联系方式：<a href="javascript:void(0);" class="show_tel" id="1977">[点击查看]</a>
</li>
						<div class="clear"></div>
					</ul>
<div class="clear"></div>
					<p>要求：湖北鸿投电子科技有限公司正式成为中国银联湖北区授权单位，加入鸿投享受中国银联国企...<a href="javascript:void(0);" class="show_detailed" id="1977">[展开]</a></p>
					<div class="add">地址：湖北省-随州市</div>
					<div class="edit">
<a href="javascript:void(0)" class="refreshsimple" id="1977">刷新</a>| <a href="javascript:void(0)" class="editsimple" id="1977">编辑</a> | <a href="javascript:void(0)" class="delsimple" id="1977">删除</a>
</div>
					<div class="clear"></div>
				</li>
								<li class="wei_l_content">
					<h4><a>销售经理</a></h4>
					<div class="date">2018-05-21</div>
					<ul>
<li>随州市一家建筑装饰工程有限公司</li>
						<li>招聘人数：5人</li>
						<li>有效期截至：长期有效</li>
						<li class="tel">联系方式：<a href="javascript:void(0);" class="show_tel" id="1976">[点击查看]</a>
</li>
						<div class="clear"></div>
					</ul>
<div class="clear"></div>
					<p>要求：能吃苦耐劳，责任心强，有良好的沟通能力</p>
					<div class="add">地址：湖北省-随州市</div>
					<div class="edit">
<a href="javascript:void(0)" class="refreshsimple" id="1976">刷新</a>| <a href="javascript:void(0)" class="editsimple" id="1976">编辑</a> | <a href="javascript:void(0)" class="delsimple" id="1976">删除</a>
</div>
					<div class="clear"></div>
				</li>
								<li class="wei_l_content">
					<h4><a>设计师</a></h4>
					<div class="date">2018-05-21</div>
					<ul>
<li>随州市一家建筑装饰工程有限公司</li>
						<li>招聘人数：5人</li>
						<li>有效期截至：长期有效</li>
						<li class="tel">联系方式：<a href="javascript:void(0);" class="show_tel" id="1975">[点击查看]</a>
</li>
						<div class="clear"></div>
					</ul>
<div class="clear"></div>
					<p>要求：熟悉3D,CAD等设计软件
能独立完成设计作品。
具有良好的沟通能力和团队精神。
熟悉...<a href="javascript:void(0);" class="show_detailed" id="1975">[展开]</a></p>
					<div class="add">地址：湖北省-随州市</div>
					<div class="edit">
<a href="javascript:void(0)" class="refreshsimple" id="1975">刷新</a>| <a href="javascript:void(0)" class="editsimple" id="1975">编辑</a> | <a href="javascript:void(0)" class="delsimple" id="1975">删除</a>
</div>
					<div class="clear"></div>
				</li>
								<li class="wei_l_content">
					<h4><a>工程监理</a></h4>
					<div class="date">2018-05-21</div>
					<ul>
<li>随州市一家装饰</li>
						<li>招聘人数：5人</li>
						<li>有效期截至：长期有效</li>
						<li class="tel">联系方式：<a href="javascript:void(0);" class="show_tel" id="1974">[点击查看]</a>
</li>
						<div class="clear"></div>
					</ul>
<div class="clear"></div>
					<p>要求：1、参与施工进场的准备 2、负责施工中工程的质量及施工规范全程监控 3、协助处理客户投...<a href="javascript:void(0);" class="show_detailed" id="1974">[展开]</a></p>
					<div class="add">地址：湖北省-随州市</div>
					<div class="edit">
<a href="javascript:void(0)" class="refreshsimple" id="1974">刷新</a>| <a href="javascript:void(0)" class="editsimple" id="1974">编辑</a> | <a href="javascript:void(0)" class="delsimple" id="1974">删除</a>
</div>
					<div class="clear"></div>
				</li>
								<li class="wei_l_content">
					<h4><a>电话销售代表</a></h4>
					<div class="date">2018-05-07</div>
					<ul>
<li>湖北驭兴信息服务有限公司</li>
						<li>招聘人数：4人</li>
						<li>有效期截至：长期有效</li>
						<li class="tel">联系方式：<a href="javascript:void(0);" class="show_tel" id="1972">[点击查看]</a>
</li>
						<div class="clear"></div>
					</ul>
<div class="clear"></div>
					<p>要求：1、女性优先，18-30，应届生优先考虑
2、形象良好，口齿清楚，表达流畅
3、待遇优厚...<a href="javascript:void(0);" class="show_detailed" id="1972">[展开]</a></p>
					<div class="add">地址：湖北省-随州市</div>
					<div class="edit">
<a href="javascript:void(0)" class="refreshsimple" id="1972">刷新</a>| <a href="javascript:void(0)" class="editsimple" id="1972">编辑</a> | <a href="javascript:void(0)" class="delsimple" id="1972">删除</a>
</div>
					<div class="clear"></div>
				</li>
								<li class="wei_l_content">
					<h4><a>会计、会计主管</a></h4>
					<div class="date">2018-04-10</div>
					<ul>
<li>湖北程力专用汽车股份有限公司（特汽一...</li>
						<li>招聘人数：1人</li>
						<li>有效期截至：长期有效</li>
						<li class="tel">联系方式：<a href="javascript:void(0);" class="show_tel" id="1967">[点击查看]</a>
</li>
						<div class="clear"></div>
					</ul>
<div class="clear"></div>
					<p>要求：有从事专用汽车行业优先，做事细心，沟通能力强，工作积极认真，责任心强，会操作办公...<a href="javascript:void(0);" class="show_detailed" id="1967">[展开]</a></p>
					<div class="add">地址：湖北省-随州市</div>
					<div class="edit">
<a href="javascript:void(0)" class="refreshsimple" id="1967">刷新</a>| <a href="javascript:void(0)" class="editsimple" id="1967">编辑</a> | <a href="javascript:void(0)" class="delsimple" id="1967">删除</a>
</div>
					<div class="clear"></div>
				</li>
								<li class="wei_l_content">
					<h4><a>营业员</a></h4>
					<div class="date">2018-03-17</div>
					<ul>
<li>曾都区五洲会全球购精品生活馆</li>
						<li>招聘人数：若干人</li>
						<li>有效期截至：长期有效</li>
						<li class="tel">联系方式：<a href="javascript:void(0);" class="show_tel" id="1959">[点击查看]</a>
</li>
						<div class="clear"></div>
					</ul>
<div class="clear"></div>
					<p>要求：我们需要志同道合的伙伴，我们期待着你的加入！【薪资待遇】努力干 2000-4000元/月，使...<a href="javascript:void(0);" class="show_detailed" id="1959">[展开]</a></p>
					<div class="add">地址：随州市-湖北省</div>
					<div class="edit">
<a href="javascript:void(0)" class="refreshsimple" id="1959">刷新</a>| <a href="javascript:void(0)" class="editsimple" id="1959">编辑</a> | <a href="javascript:void(0)" class="delsimple" id="1959">删除</a>
</div>
					<div class="clear"></div>
				</li>
								<li class="wei_l_content">
					<h4><a>销售经理</a></h4>
					<div class="date">2018-03-16</div>
					<ul>
<li>宜信普惠信息咨询（北京）有限公司随州...</li>
						<li>招聘人数：5人</li>
						<li>有效期截至：长期有效</li>
						<li class="tel">联系方式：<a href="javascript:void(0);" class="show_tel" id="1958">[点击查看]</a>
</li>
						<div class="clear"></div>
					</ul>
<div class="clear"></div>
					<p>要求：对生活有激情，有目标的年轻人，五险一金，双休</p>
					<div class="add">地址：湖北省-随州市</div>
					<div class="edit">
<a href="javascript:void(0)" class="refreshsimple" id="1958">刷新</a>| <a href="javascript:void(0)" class="editsimple" id="1958">编辑</a> | <a href="javascript:void(0)" class="delsimple" id="1958">删除</a>
</div>
					<div class="clear"></div>
				</li>
								<li class="wei_l_content">
					<h4><a>全职会计</a></h4>
					<div class="date">2018-03-16</div>
					<ul>
<li>随州市名品百货有限公司</li>
						<li>招聘人数：1人</li>
						<li>有效期截至：长期有效</li>
						<li class="tel">联系方式：<a href="javascript:void(0);" class="show_tel" id="1957">[点击查看]</a>
</li>
						<div class="clear"></div>
					</ul>
<div class="clear"></div>
					<p>要求：懂电脑会报税</p>
					<div class="add">地址：随州市-湖北省</div>
					<div class="edit">
<a href="javascript:void(0)" class="refreshsimple" id="1957">刷新</a>| <a href="javascript:void(0)" class="editsimple" id="1957">编辑</a> | <a href="javascript:void(0)" class="delsimple" id="1957">删除</a>
</div>
					<div class="clear"></div>
				</li>
								<li class="wei_l_content">
					<h4><a>全职会计</a></h4>
					<div class="date">2018-03-16</div>
					<ul>
<li>随州市名品百货有限公司</li>
						<li>招聘人数：1人</li>
						<li>有效期截至：长期有效</li>
						<li class="tel">联系方式：<a href="javascript:void(0);" class="show_tel" id="1956">[点击查看]</a>
</li>
						<div class="clear"></div>
					</ul>
<div class="clear"></div>
					<p>要求：懂电脑会报税</p>
					<div class="add">地址：随州市-湖北省</div>
					<div class="edit">
<a href="javascript:void(0)" class="refreshsimple" id="1956">刷新</a>| <a href="javascript:void(0)" class="editsimple" id="1956">编辑</a> | <a href="javascript:void(0)" class="delsimple" id="1956">删除</a>
</div>
					<div class="clear"></div>
				</li>
								<li class="wei_l_content">
					<h4><a>普工</a></h4>
					<div class="date">2018-03-15</div>
					<ul>
<li>孝感矢崎汽车部件有限公司</li>
						<li>招聘人数：200人</li>
						<li>有效期截至：长期有效</li>
						<li class="tel">联系方式：<a href="javascript:void(0);" class="show_tel" id="1954">[点击查看]</a>
</li>
						<div class="clear"></div>
					</ul>
<div class="clear"></div>
					<p>要求：职位:生产操作员（男女不限）
要求:身高1.5米以上，16-36周岁，身体健康（无传染性疾...<a href="javascript:void(0);" class="show_detailed" id="1954">[展开]</a></p>
					<div class="add">地址：湖北省-孝感市</div>
					<div class="edit">
<a href="javascript:void(0)" class="refreshsimple" id="1954">刷新</a>| <a href="javascript:void(0)" class="editsimple" id="1954">编辑</a> | <a href="javascript:void(0)" class="delsimple" id="1954">删除</a>
</div>
					<div class="clear"></div>
				</li>
								<li class="wei_l_content">
					<h4><a>业务员</a></h4>
					<div class="date">2018-03-08</div>
					<ul>
<li>随州名品百货有限公司</li>
						<li>招聘人数：4人</li>
						<li>有效期截至：长期有效</li>
						<li class="tel">联系方式：<a href="javascript:void(0);" class="show_tel" id="1948">[点击查看]</a>
</li>
						<div class="clear"></div>
					</ul>
<div class="clear"></div>
					<p>要求：业务员年龄35岁以内，有快消品销售经验者优先，会开车能吃苦耐劳。</p>
					<div class="add">地址：湖北省-随州市</div>
					<div class="edit">
<a href="javascript:void(0)" class="refreshsimple" id="1948">刷新</a>| <a href="javascript:void(0)" class="editsimple" id="1948">编辑</a> | <a href="javascript:void(0)" class="delsimple" id="1948">删除</a>
</div>
					<div class="clear"></div>
				</li>
								<li class="wei_l_content">
					<h4><a>销售</a></h4>
					<div class="date">2017-10-12</div>
					<ul>
<li>湖北麒丰金服信息技术有限公司</li>
						<li>招聘人数：10人</li>
						<li>有效期截至：长期有效</li>
						<li class="tel">联系方式：<a href="javascript:void(0);" class="show_tel" id="1904">[点击查看]</a>
</li>
						<div class="clear"></div>
					</ul>
<div class="clear"></div>
					<p>要求：朝九晚五，周末双休，男女不限，学历不限，善于沟通，有责任心</p>
					<div class="add">地址：湖北省-随州市</div>
					<div class="edit">
<a href="javascript:void(0)" class="refreshsimple" id="1904">刷新</a>| <a href="javascript:void(0)" class="editsimple" id="1904">编辑</a> | <a href="javascript:void(0)" class="delsimple" id="1904">删除</a>
</div>
					<div class="clear"></div>
				</li>
								<li class="wei_l_content">
					<h4><a>网络客服</a></h4>
					<div class="date">2017-09-30</div>
					<ul>
<li>青苹果网络</li>
						<li>招聘人数：10人</li>
						<li>有效期截至：长期有效</li>
						<li class="tel">联系方式：<a href="javascript:void(0);" class="show_tel" id="1902">[点击查看]</a>
</li>
						<div class="clear"></div>
					</ul>
<div class="clear"></div>
					<p>要求：文化程度：	高中以上	职称要求：会电脑基本操作，打字速度快。
性别要求：	女	    年龄...<a href="javascript:void(0);" class="show_detailed" id="1902">[展开]</a></p>
					<div class="add">地址：随州市-湖北省</div>
					<div class="edit">
<a href="javascript:void(0)" class="refreshsimple" id="1902">刷新</a>| <a href="javascript:void(0)" class="editsimple" id="1902">编辑</a> | <a href="javascript:void(0)" class="delsimple" id="1902">删除</a>
</div>
					<div class="clear"></div>
				</li>
								<li class="wei_l_content">
					<h4><a>专用汽车销售</a></h4>
					<div class="date">2017-09-18</div>
					<ul>
<li>湖北浩天</li>
						<li>招聘人数：10人</li>
						<li>有效期截至：长期有效</li>
						<li class="tel">联系方式：<a href="javascript:void(0);" class="show_tel" id="1899">[点击查看]</a>
</li>
						<div class="clear"></div>
					</ul>
<div class="clear"></div>
					<p>要求：湖北新大运汽车装备制造有限公司 招聘销售人员


本公司位于程力汽车正对面，地理位...<a href="javascript:void(0);" class="show_detailed" id="1899">[展开]</a></p>
					<div class="add">地址：湖北省-随州市</div>
					<div class="edit">
<a href="javascript:void(0)" class="refreshsimple" id="1899">刷新</a>| <a href="javascript:void(0)" class="editsimple" id="1899">编辑</a> | <a href="javascript:void(0)" class="delsimple" id="1899">删除</a>
</div>
					<div class="clear"></div>
				</li>
													<table border="0" align="center" cellpadding="0" cellspacing="0" class="link_bk"><tr>
<td height="50" align="center"> <div class="page link_bk">
<li><a class="">首页</a></li>
<li><a class="">上一页</a></li>
<li><a class="select">1</a></li>
<li><a href="simple-list.php%EF%BC%9Fpage=2">2</a></li>
<li><a href="simple-list.php%EF%BC%9Fpage=3">3</a></li>
<li><a href="simple-list.php%EF%BC%9Fpage=4">4</a></li>
<li><a href="simple-list.php%EF%BC%9Fpage=2">下一页</a></li>
<li><a href="simple-list.php%EF%BC%9Fpage=4">尾页</a></li>
<li class="page_all">1/4页</li>
<div class="clear"></div>
</div>
</td>
				        </tr></table>
</ul>
</div>
			
		</div>
		<div class="wei_right">
			<input type="button" value="发布微招聘" class="but218cheng" id="add"><p>
				为方便一些普工类企业(如饭店,店面,个体户等)发布招聘信息，我们特增加了快速通道，无需注册即可发布简短招聘信息！
			</p>
			<p>
				如果您不是普工类企业，我们建议您<a href="../user/login.php">【注册】</a>成为企业会员，仅需几秒钟您就可以享受更加完善的网络招聘服务。
			</p>
		</div>
		<div class="clear"></div>
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
					<li class="f-left"><a target="_blank" href="simple-list.php">招聘普工</a></li>
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
