<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>简历列表  - 随州人才网</title>
<meta name="description" content="随州人才网汇集了银川大部分求职简历，是随州最大的人才库，欢迎招聘企业前来查看和求职者前来填写简历，发布求职信息。">
<meta name="keywords" content="人才信息，随州人才网人才库，随州人才，随州人才网简历">
<meta name="author" content="随州人才网">
<meta name="copyright" content="0722ren.com">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="../favicon.ico">
<link href="../templates/demo11/css/common.css" rel="stylesheet" type="text/css">
<link href="../templates/demo11/css/jobs.css" rel="stylesheet" type="text/css">
<link href="../templates/demo11/css/resume.css" rel="stylesheet" type="text/css">
<link href="../templates/demo11/css/ui-dialog.css" rel="stylesheet" type="text/css">
<script src="../templates/demo11/js/jquery.js" type="text/javascript"></script><script src="../templates/demo11/js/jquery.resume-search.js" type="text/javascript"></script><script src="../templates/demo11/js/jquery.resume-list.js" type="text/javascript"></script><script src="../templates/demo11/js/dialog-min.js" type="text/javascript" language="javascript"></script><script src="../templates/demo11/js/dialog-min-common.js" type="text/javascript" language="javascript"></script><script src="../data/cache_classify.js" type="text/javascript" charset="utf-8"></script><script src="../templates/demo11/js/jquery.autocomplete.js" type="text/javascript"></script><script type="text/javascript">
	$(document).ready(function() {
		allaround("/");
	    // 职位类别填充数据 
		job_filldata("#job_list", QS_jobs_parent, QS_jobs, "#result-list-job", "#aui_outer_job", "#job_result_show", "#jobcategory", "/");
		// 所属行业填充数据
		trade_filldata("#trad_list", QS_trade, "#aui_outer", "#result-list-trade", "#trade_result_show", "#trade", "/");
		// 工作地区填充数据
		city_filldata("#city_list", QS_city_parent, QS_city, "#result-list-city", "#aui_outer_city", "#city_result_show", "#citycategory", "/");
		// 专业类别填充数据
		major_filldata("#major_list", QS_major_parent, QS_major, "#major_tabnav", "#aui_outer_major", "#result-list-major", "#major_result_show", "#major", "/");
		//收藏简历
		allfavorites("/");
		//下载简历
		$(".collect").click(function(){
			var id=$(this).attr("resume_id");
			var tsTimeStamp= new Date().getTime();
			var url_="/user/user_download_resume.php?id="+id+"&act=download&t="+tsTimeStamp;
			var myDialog = dialog();
			myDialog.title('下载联系方式');
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
		$("#infolists .infolist-row:last").css("border-bottom","none");
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
								<li class="active"><a href="resume-list.php" target="_self">聘人才</a></li>
								<li><a href="../simple/simple-list.php" target="_self">微招聘</a></li>
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
</script><div class="page_location link_bk">
当前位置：<a href="../index.html">首页</a> &gt; <a href="index.html">求职信息</a>
</div>
<div class="container">
	<div id="filterSearch">
		<div class="search-tab clearfix">
			<a href="resume-list.php" class="s-tab-item f-left active">简历搜索</a>
			<a href="resume-watched-list.php" class="s-tab-item f-left">浏览过的简历</a>
		</div>
		<div class="top-search clearfix">
			<div class="t-search-box f-left">
				<div class="type-input-box f-left" id="hidden_input_box">
					<div class="key">请输入关键字</div>
					<input type="text" name="key" id="key" value="" style="display:none;"><input name="jobcategory" id="jobcategory" type="hidden" value=""><input name="trade" id="trade" type="hidden" value=""><input name="citycategory" id="citycategory" type="hidden" value=""><input name="major" id="major" type="hidden" value=""><input name="experience" id="experience" type="hidden" value=""><input name="resumetag" id="resumetag" type="hidden" value=""><input name="education" id="education" type="hidden" value=""><input name="sex" id="sex" type="hidden" value=""><input name="photo" id="photo" type="hidden" value=""><input name="talent" id="talent" type="hidden" value=""><input name="settr" id="settr" type="hidden" value="">
</div>
			</div>
			<div class="t-search-btn f-left"><input type="button" detype="QS_resumelist" id="searcnbtn" value="搜 索"></div>
		</div>
		<div class="fliter-wrap">
			<div class="filter-drop clearfix">
				<div class="filter-item f-left">
					<div class="choose-item">
						<div class="choose-control">
							<span class="cc-default" id="job_result_show">选择意向职位</span><i class="choose-icon"></i>
							<!-- 职位类别弹出框 -->
							<div class="aui_outer" id="aui_outer_job">
								<table class="aui_border"><tbody><tr>
<td class="aui_c">
												<div class="aui_inner">
													<table class="aui_dialog"><tbody><tr>
<td class="aui_main">
																	<div class="aui_content" style="padding: 0px;">
																		<div class="LocalDataMultiC">
																			<div class="selector-header">
<span class="selector-title">职位选择</span><div></div>
<span id="jb-selector-save" class="selector-save">确定</span><span class="selector-close">X</span><div class="clear"></div>
</div>

																			<div class="data-row-head">
<div class="data-row">
<div class="data-row-side">最多选 <strong class="text-warning">3</strong> 项  已选 <strong id="ars" class="text-warning">0</strong> 项</div>
<div id="result-list-job" class="result-list data-row-side-ra"></div>
</div>
<div class="cla"></div>
</div>
																			<div class="data-row-list data-row-main" id="job_list">
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
							<!-- 职位类别弹出框 End-->
						</div>
					</div>
				</div>
				<div class="filter-item f-left">
					<div class="choose-item">
						<div class="choose-control">
							<span class="cc-default" id="trade_result_show">选择意向行业</span><i class="choose-icon"></i>
							<!-- 所属行业弹出框 -->
							<div class="aui_outer" id="aui_outer">
								<table class="aui_border"><tbody><tr>
<td class="aui_c">
												<div class="aui_inner">
													<table class="aui_dialog"><tbody><tr>
<td class="aui_main">
																	<div class="aui_content">
																		<div class="items jquery-localdata">
																			<div class="selector-header">
<span class="selector-title">行业选择</span><div></div>
<span id="tr-selector-save" class="selector-save">确定</span><span class="selector-close">X</span><div class="clear"></div>
</div>

																			<div class="data-row-head">
<div class="data-row">
<div class="data-row-side">最多选 <strong class="text-warning">3</strong> 项  已选 <strong id="arstrade" class="text-warning">0</strong> 项</div>
<div id="result-list-trade" class="result-list data-row-side-ra"></div>
</div>
<div class="cla"></div>
</div>
																			<div class="item-table">
																				<table class="options-table options-table-7"><tbody class="item-list"><tr><td class="bno"><table><tbody id="trad_list"><!-- 列表内容 --></tbody></table></td></tr></tbody></table>
</div>
																		</div>
																	</div>
																</td>
															</tr></tbody></table>
</div>
											</td>
										</tr></tbody></table>
</div>
							<!-- 所属行业弹出框 End-->
						</div>
					</div>
				</div>
				<div class="filter-item f-left">
					<div class="choose-item">
						<div class="choose-control">
							<span class="cc-default" id="city_result_show">选择意向地区</span><i class="choose-icon"></i>
							<!-- 工作地区弹出框 -->
							<div class="aui_outer" style="left:-396px;" id="aui_outer_city">
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
				<div class="filter-item f-left">
					<div class="choose-item">
						<div class="choose-control">
							<span class="cc-default" id="major_result_show">选择专业类别</span><i class="choose-icon"></i>
							<!-- 专业类别弹出框 -->
							<div class="aui_outer" style="left:-445px;" id="aui_outer_major">
								<table class="aui_border"><tbody><tr>
<td class="aui_c">
												<div class="aui_inner">
													<table class="aui_dialog"><tbody><tr>
<td class="aui_main">
																	<div class="aui_content">
																		<div class="items jquery-localdata">
																			<div class="selector-header">
<span class="selector-title">专业类别</span><div></div>
<span id="mj-selector-save" class="selector-save">确定</span><span class="selector-close">X</span><div class="clear"></div>
</div>

																			<div class="data-row-head">
<div class="data-row">
<div class="data-row-side">最多选 <strong class="text-warning">3</strong> 项  已选 <strong id="arsmajor" class="text-warning">0</strong> 项</div>
<div id="result-list-major" class="result-list data-row-side-ra"></div>
</div>
<div class="cla"></div>
</div>
																			<ul class="tabnav" id="major_tabnav"></ul>
<div class="item-table majorbb">
																				<table class="options-table options-table-7"><tbody class="item-list"><tr><td class="bno"><table id="major_list"></table></td></tr></tbody></table>
</div>
																		</div>
																	</div>
																</td>
															</tr></tbody></table>
</div>
											</td>
										</tr></tbody></table>
</div>
							<!-- 专业类别弹出框 End-->
						</div>
					</div>
				</div>
			</div>
			<div class="filter-list-wrap clearfix">
				<div class="fl-type f-left">工作经验：</div>
				<div class="fl-content r-choice f-left">
															<div class="fl-content-li" type="experience" code="74">无经验</div>
										<div class="fl-content-li" type="experience" code="75">1年以下</div>
										<div class="fl-content-li" type="experience" code="76">1-3年</div>
										<div class="fl-content-li" type="experience" code="77">3-5年</div>
										<div class="fl-content-li" type="experience" code="78">5-10年</div>
										<div class="fl-content-li" type="experience" code="79">10年以上</div>
									</div>
			</div>
			<div class="filter-list-wrap clearfix">
				<div class="fl-type f-left">特长标签：</div>
				<div class="fl-content f-left forShowMore" id="fliterMore">
															<div class="fl-content-li" type="resumetag" code="166">形象好</div>
										<div class="fl-content-li" type="resumetag" code="167">气质佳</div>
										<div class="fl-content-li" type="resumetag" code="168">能出差</div>
										<div class="fl-content-li" type="resumetag" code="169">很幽默</div>
										<div class="fl-content-li" type="resumetag" code="170">技术精悍</div>
										<div class="fl-content-li" type="resumetag" code="171">有亲和力</div>
										<div class="fl-content-li" type="resumetag" code="172">高学历</div>
										<div class="fl-content-li" type="resumetag" code="173">经验丰富</div>
										<div class="fl-content-li" type="resumetag" code="174">能加班</div>
										<div class="fl-content-li" type="resumetag" code="175">海归</div>
										<div class="fl-content-li" type="resumetag" code="176">会开车</div>
										<div class="fl-content-li" type="resumetag" code="177">口才好</div>
										<div class="fl-content-li" type="resumetag" code="178">声音甜美</div>
										<div class="fl-content-li" type="resumetag" code="179">会应酬</div>
										<div class="fl-content-li" type="resumetag" code="180">诚实守信</div>
										<div class="fl-content-li" type="resumetag" code="181">外语好</div>
										<div class="fl-content-li" type="resumetag" code="182">性格开朗</div>
										<div class="fl-content-li" type="resumetag" code="183">有上进心</div>
										<div class="fl-content-li" type="resumetag" code="184">人脉广</div>
										<div class="fl-content-li" type="resumetag" code="185">知识丰富</div>
										<div class="fl-content-li" type="resumetag" code="186">才艺多</div>
										<a href="javascript:;" class="show-more">展开</a>
				</div>
			</div>
			<div class="filter-list-wrap clearfix">
				<div class="fl-type f-left">更多筛选：</div>
				<div class="fl-content f-left">
					<div class="saixuan">
												<div class="saixuans">
							<div class="line"></div>
														<a defvalue="65" type="education" href="javascript:;">初中</a>
														<a defvalue="66" type="education" href="javascript:;">高中</a>
														<a defvalue="67" type="education" href="javascript:;">中技</a>
														<a defvalue="68" type="education" href="javascript:;">中专</a>
														<a defvalue="69" type="education" href="javascript:;">大专</a>
														<a defvalue="70" type="education" href="javascript:;">本科</a>
														<a defvalue="71" type="education" href="javascript:;">硕士</a>
														<a defvalue="72" type="education" href="javascript:;">博士</a>
														<a defvalue="73" type="education" href="javascript:;">博后</a>
													</div>
						最高学历
					</div>
					<div class="saixuan">
						<div class="saixuans">
							<div class="line"></div>
							<a defvalue="1" type="sex" href="javascript:;">男</a>
							<a defvalue="2" type="sex" href="javascript:;">女</a>
						</div>
						性别要求
					</div>
					<div class="saixuan">
						<div class="saixuans">
							<div class="line"></div>
							<a defvalue="1" type="photo" href="javascript:;">有</a>
							<a defvalue="0" class="select" type="photo" href="javascript:;">无</a>
						</div>
						简历照片
					</div>
					<div class="saixuan">
						<div class="saixuans">
							<div class="line"></div>
							<a defvalue="1" type="talent" href="javascript:;">普通</a>
							<a defvalue="2" type="talent" href="javascript:;">高级</a>
						</div>
						简历等级
					</div>
					<div class="saixuan">
						<div class="saixuans">
							<div class="line"></div>
							<a defvalue="3" type="settr" href="javascript:;">3天内</a>
							<a defvalue="7" type="settr" href="javascript:;">7天内</a>
							<a defvalue="15" type="settr" href="javascript:;">15天内</a>
							<a defvalue="30" type="settr" href="javascript:;">30天内</a>
						</div>
						更新时间
					</div>
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
<!-- 人才列表 -->
<div class="jobinfolists">
	<div class="tit">
		<div class="seq f-left">
<span>排序</span>
			<a href="resume-list.php%EF%BC%9Fkey=&amp;page=1&amp;sort=rtime-page" class="seq-item selected time">更新时间</a>
		</div>
		<div class="pagerow">
			<div class="pageminnav">
<li><a class=""></a></li>
<li>
<b style="color:#ff9900">1</b>/5页</li>
<li><a href="resume-list.php%EF%BC%9Fpage=2">&gt;</a></li>
<div class="clear"></div>
</div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="infolists" id="infolists">
		<div class="infolists-head clearfix">
			<label class="f-left"><input type="checkbox" name="selectall" id="selectall" class="checkbox">全选</label>
			<div class="all-ctrl f-left"><input type="button" value="收藏简历" class="all-down-btn allfavorites"></div>
			<div class="list-tab f-right">
				<a href="javascript:;" class="tab-item tab-list select">列表</a>
				<a href="javascript:;" class="tab-item tab-detail">详细</a>
			</div>
		</div>
				<div class="info-list-wrap">
						<div class="infolist-row">
				<div class="info-list-block resume clearfix">
					<div class="list-item item1 f-left">
						<span><input type="checkbox" name="jid" value="7991" class="checkbox"><a href="7991.html" class="underline" target="_blank">赵力</a></span>
																	</div>
					<div class="list-item item2 f-left">男</div>
					<div class="list-item item3 f-left">36岁</div>
					<div class="list-item item4 f-left">中专</div>
					<div class="list-item item5 f-left">5-10年</div>
					<div class="list-item item6 f-left">随州市,武汉市</div>
					<div class="list-item item7 f-left" style="font-family:微软雅黑;">区域代表,业务员/销售代表,其他</div>
					<div class="list-item item8 f-left">
<!--2018-10-15-->2018-10-16</div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>专业：其他类 | 期望工作性质：全职 | 目前求职状态：我目前已离职，可快速到岗</p>
						<div>期望从事行业：其他行业 | 期望薪资：5000~10000元/月</div>
					</div>
					<div class="info-control f-left">
						<input resume_id="7991" type="button" value="下载简历" class="apply-job-btn collect"><p><a href="javascript:;" resume_id="7991" class="collect-btn add_favoritesr"></a></p>
					</div>
				</div>
			</div>
						<div class="infolist-row">
				<div class="info-list-block resume clearfix">
					<div class="list-item item1 f-left">
						<span><input type="checkbox" name="jid" value="7978" class="checkbox"><a href="7978.html" class="underline" target="_blank">邹</a></span>
																	</div>
					<div class="list-item item2 f-left">女</div>
					<div class="list-item item3 f-left">43岁</div>
					<div class="list-item item4 f-left">高中</div>
					<div class="list-item item5 f-left">3-5年</div>
					<div class="list-item item6 f-left">随州市</div>
					<div class="list-item item7 f-left" style="font-family:微软雅黑;">会计</div>
					<div class="list-item item8 f-left">
<!--2018-10-15-->2018-10-16</div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>专业： | 期望工作性质： | 目前求职状态：我目前已离职，可快速到岗</p>
						<div>期望从事行业：会计/审计 | 期望薪资：3000~5000元/月</div>
					</div>
					<div class="info-control f-left">
						<input resume_id="7978" type="button" value="下载简历" class="apply-job-btn collect"><p><a href="javascript:;" resume_id="7978" class="collect-btn add_favoritesr"></a></p>
					</div>
				</div>
			</div>
						<div class="infolist-row">
				<div class="info-list-block resume clearfix">
					<div class="list-item item1 f-left">
						<span><input type="checkbox" name="jid" value="7990" class="checkbox"><a href="7990.html" class="underline" target="_blank">蔡军</a></span>
																	</div>
					<div class="list-item item2 f-left">男</div>
					<div class="list-item item3 f-left">32岁</div>
					<div class="list-item item4 f-left">大专</div>
					<div class="list-item item5 f-left">3-5年</div>
					<div class="list-item item6 f-left">随州市</div>
					<div class="list-item item7 f-left" style="font-family:微软雅黑;">销售管理</div>
					<div class="list-item item8 f-left">
<!--2018-10-14-->2018-10-16</div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>专业： | 期望工作性质： | 目前求职状态：我目前已离职，可快速到岗</p>
						<div>期望从事行业：电子/半导体/集成电路 | 期望薪资：1500~2000元/月</div>
					</div>
					<div class="info-control f-left">
						<input resume_id="7990" type="button" value="下载简历" class="apply-job-btn collect"><p><a href="javascript:;" resume_id="7990" class="collect-btn add_favoritesr"></a></p>
					</div>
				</div>
			</div>
						<div class="infolist-row">
				<div class="info-list-block resume clearfix">
					<div class="list-item item1 f-left">
						<span><input type="checkbox" name="jid" value="7983" class="checkbox"><a href="7983.html" class="underline" target="_blank">王涛</a></span>
																	</div>
					<div class="list-item item2 f-left">男</div>
					<div class="list-item item3 f-left">29岁</div>
					<div class="list-item item4 f-left">大专</div>
					<div class="list-item item5 f-left">5-10年</div>
					<div class="list-item item6 f-left">随州市,武汉市</div>
					<div class="list-item item7 f-left" style="font-family:微软雅黑;">售后技术支持,激光/光电子技术,电气工程师</div>
					<div class="list-item item8 f-left">
<!--2018-10-14-->2018-10-16</div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>专业：电气信息类 | 期望工作性质：全职 | 目前求职状态：我目前在职，但考虑换个新环境</p>
						<div>期望从事行业：计算机系统/维修,电子/半导体/集成电路,仪器仪表/工业自动化 | 期望薪资：5000~10000元/月</div>
					</div>
					<div class="info-control f-left">
						<input resume_id="7983" type="button" value="下载简历" class="apply-job-btn collect"><p><a href="javascript:;" resume_id="7983" class="collect-btn add_favoritesr"></a></p>
					</div>
				</div>
			</div>
						<div class="infolist-row">
				<div class="info-list-block resume clearfix">
					<div class="list-item item1 f-left">
						<span><input type="checkbox" name="jid" value="7989" class="checkbox"><a href="7989.html" class="underline" target="_blank">顾敬鹏</a></span>
																	</div>
					<div class="list-item item2 f-left">女</div>
					<div class="list-item item3 f-left">34岁</div>
					<div class="list-item item4 f-left">大专</div>
					<div class="list-item item5 f-left">5-10年</div>
					<div class="list-item item6 f-left">随州市</div>
					<div class="list-item item7 f-left" style="font-family:微软雅黑;">客服/技术支持</div>
					<div class="list-item item8 f-left">
<!--2018-10-13-->2018-10-16</div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>专业： | 期望工作性质： | 目前求职状态：我目前已离职，可快速到岗</p>
						<div>期望从事行业：通信(设备/运营/服务) | 期望薪资：2000~3000元/月</div>
					</div>
					<div class="info-control f-left">
						<input resume_id="7989" type="button" value="下载简历" class="apply-job-btn collect"><p><a href="javascript:;" resume_id="7989" class="collect-btn add_favoritesr"></a></p>
					</div>
				</div>
			</div>
						<div class="infolist-row">
				<div class="info-list-block resume clearfix">
					<div class="list-item item1 f-left">
						<span><input type="checkbox" name="jid" value="7987" class="checkbox"><a href="7987.html" class="underline" target="_blank">张文&amp;#29...</a></span>
																	</div>
					<div class="list-item item2 f-left">女</div>
					<div class="list-item item3 f-left">26岁</div>
					<div class="list-item item4 f-left">本科</div>
					<div class="list-item item5 f-left">3-5年</div>
					<div class="list-item item6 f-left">随州市</div>
					<div class="list-item item7 f-left" style="font-family:微软雅黑;">其他</div>
					<div class="list-item item8 f-left">
<!--2018-10-12-->2018-10-16</div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>专业： | 期望工作性质： | 目前求职状态：我目前在职，但考虑换个新环境</p>
						<div>期望从事行业：教育/培训 | 期望薪资：3000~5000元/月</div>
					</div>
					<div class="info-control f-left">
						<input resume_id="7987" type="button" value="下载简历" class="apply-job-btn collect"><p><a href="javascript:;" resume_id="7987" class="collect-btn add_favoritesr"></a></p>
					</div>
				</div>
			</div>
						<div class="infolist-row">
				<div class="info-list-block resume clearfix">
					<div class="list-item item1 f-left">
						<span><input type="checkbox" name="jid" value="7985" class="checkbox"><a href="7985.html" class="underline" target="_blank">张军</a></span>
																	</div>
					<div class="list-item item2 f-left">男</div>
					<div class="list-item item3 f-left">32岁</div>
					<div class="list-item item4 f-left">高中</div>
					<div class="list-item item5 f-left">5-10年</div>
					<div class="list-item item6 f-left">随州市</div>
					<div class="list-item item7 f-left" style="font-family:微软雅黑;">其他</div>
					<div class="list-item item8 f-left">
<!--2018-10-12-->2018-10-16</div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>专业： | 期望工作性质： | 目前求职状态：我目前已离职，可快速到岗</p>
						<div>期望从事行业：交通/运输/物流 | 期望薪资：3000~5000元/月</div>
					</div>
					<div class="info-control f-left">
						<input resume_id="7985" type="button" value="下载简历" class="apply-job-btn collect"><p><a href="javascript:;" resume_id="7985" class="collect-btn add_favoritesr"></a></p>
					</div>
				</div>
			</div>
						<div class="infolist-row">
				<div class="info-list-block resume clearfix">
					<div class="list-item item1 f-left">
						<span><input type="checkbox" name="jid" value="7984" class="checkbox"><a href="7984.html" class="underline" target="_blank">赵自强</a></span>
																	</div>
					<div class="list-item item2 f-left">男</div>
					<div class="list-item item3 f-left">30岁</div>
					<div class="list-item item4 f-left">大专</div>
					<div class="list-item item5 f-left">5-10年</div>
					<div class="list-item item6 f-left">随州市</div>
					<div class="list-item item7 f-left" style="font-family:微软雅黑;">销售人员</div>
					<div class="list-item item8 f-left">
<!--2018-10-11-->2018-10-16</div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>专业： | 期望工作性质： | 目前求职状态：我目前已离职，可快速到岗</p>
						<div>期望从事行业：其他行业 | 期望薪资：5000~10000元/月</div>
					</div>
					<div class="info-control f-left">
						<input resume_id="7984" type="button" value="下载简历" class="apply-job-btn collect"><p><a href="javascript:;" resume_id="7984" class="collect-btn add_favoritesr"></a></p>
					</div>
				</div>
			</div>
						<div class="infolist-row">
				<div class="info-list-block resume clearfix">
					<div class="list-item item1 f-left">
						<span><input type="checkbox" name="jid" value="7982" class="checkbox"><a href="7982.html" class="underline" target="_blank">王涛</a></span>
																	</div>
					<div class="list-item item2 f-left">男</div>
					<div class="list-item item3 f-left">30岁</div>
					<div class="list-item item4 f-left">高中</div>
					<div class="list-item item5 f-left">5-10年</div>
					<div class="list-item item6 f-left">随州市</div>
					<div class="list-item item7 f-left" style="font-family:微软雅黑;">仓库管理</div>
					<div class="list-item item8 f-left">
<!--2018-10-11-->2018-10-16</div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>专业： | 期望工作性质： | 目前求职状态：我目前已离职，可快速到岗</p>
						<div>期望从事行业：批发/零售 | 期望薪资：3000~5000元/月</div>
					</div>
					<div class="info-control f-left">
						<input resume_id="7982" type="button" value="下载简历" class="apply-job-btn collect"><p><a href="javascript:;" resume_id="7982" class="collect-btn add_favoritesr"></a></p>
					</div>
				</div>
			</div>
						<div class="infolist-row">
				<div class="info-list-block resume clearfix">
					<div class="list-item item1 f-left">
						<span><input type="checkbox" name="jid" value="7974" class="checkbox"><a href="7974.html" class="underline" target="_blank">N0007974</a></span>
																	</div>
					<div class="list-item item2 f-left">女</div>
					<div class="list-item item3 f-left">21岁</div>
					<div class="list-item item4 f-left">本科</div>
					<div class="list-item item5 f-left">应届生</div>
					<div class="list-item item6 f-left">随州市,武汉市</div>
					<div class="list-item item7 f-left" style="font-family:微软雅黑;">小学教师,财务/审计/税务,中学教师</div>
					<div class="list-item item8 f-left">
<!--2018-10-11-->2018-10-16</div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>专业：工商管理类 | 期望工作性质：全职 | 目前求职状态：应届毕业生</p>
						<div>期望从事行业：会计/审计,教育/培训 | 期望薪资：3000~5000元/月</div>
					</div>
					<div class="info-control f-left">
						<input resume_id="7974" type="button" value="下载简历" class="apply-job-btn collect"><p><a href="javascript:;" resume_id="7974" class="collect-btn add_favoritesr"></a></p>
					</div>
				</div>
			</div>
						<div class="infolist-row">
				<div class="info-list-block resume clearfix">
					<div class="list-item item1 f-left">
						<span><input type="checkbox" name="jid" value="7981" class="checkbox"><a href="7981.html" class="underline" target="_blank">小小</a></span>
																	</div>
					<div class="list-item item2 f-left">女</div>
					<div class="list-item item3 f-left">32岁</div>
					<div class="list-item item4 f-left">大专</div>
					<div class="list-item item5 f-left">5-10年</div>
					<div class="list-item item6 f-left">随州市</div>
					<div class="list-item item7 f-left" style="font-family:微软雅黑;">销售管理</div>
					<div class="list-item item8 f-left">
<!--2018-10-10-->2018-10-16</div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>专业： | 期望工作性质： | 目前求职状态：我目前已离职，可快速到岗</p>
						<div>期望从事行业：金融(银行/保险) | 期望薪资：1万以上/月</div>
					</div>
					<div class="info-control f-left">
						<input resume_id="7981" type="button" value="下载简历" class="apply-job-btn collect"><p><a href="javascript:;" resume_id="7981" class="collect-btn add_favoritesr"></a></p>
					</div>
				</div>
			</div>
						<div class="infolist-row">
				<div class="info-list-block resume clearfix">
					<div class="list-item item1 f-left">
						<span><input type="checkbox" name="jid" value="7980" class="checkbox"><a href="7980.html" class="underline" target="_blank">龚成本</a></span>
																	</div>
					<div class="list-item item2 f-left">男</div>
					<div class="list-item item3 f-left">31岁</div>
					<div class="list-item item4 f-left">大专</div>
					<div class="list-item item5 f-left">3-5年</div>
					<div class="list-item item6 f-left">随州市</div>
					<div class="list-item item7 f-left" style="font-family:微软雅黑;">技术工人</div>
					<div class="list-item item8 f-left">
<!--2018-10-10-->2018-10-16</div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>专业： | 期望工作性质： | 目前求职状态：我目前已离职，可快速到岗</p>
						<div>期望从事行业：其他行业 | 期望薪资：3000~5000元/月</div>
					</div>
					<div class="info-control f-left">
						<input resume_id="7980" type="button" value="下载简历" class="apply-job-btn collect"><p><a href="javascript:;" resume_id="7980" class="collect-btn add_favoritesr"></a></p>
					</div>
				</div>
			</div>
						<div class="infolist-row">
				<div class="info-list-block resume clearfix">
					<div class="list-item item1 f-left">
						<span><input type="checkbox" name="jid" value="7979" class="checkbox"><a href="7979.html" class="underline" target="_blank">可可</a></span>
																	</div>
					<div class="list-item item2 f-left">女</div>
					<div class="list-item item3 f-left">23岁</div>
					<div class="list-item item4 f-left">大专</div>
					<div class="list-item item5 f-left">1-3年</div>
					<div class="list-item item6 f-left">湖北省</div>
					<div class="list-item item7 f-left" style="font-family:微软雅黑;">销售管理</div>
					<div class="list-item item8 f-left">
<!--2018-10-10-->2018-10-16</div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>专业： | 期望工作性质： | 目前求职状态：我目前已离职，可快速到岗</p>
						<div>期望从事行业：通信(设备/运营/服务) | 期望薪资：1000~1500元/月</div>
					</div>
					<div class="info-control f-left">
						<input resume_id="7979" type="button" value="下载简历" class="apply-job-btn collect"><p><a href="javascript:;" resume_id="7979" class="collect-btn add_favoritesr"></a></p>
					</div>
				</div>
			</div>
						<div class="infolist-row">
				<div class="info-list-block resume clearfix">
					<div class="list-item item1 f-left">
						<span><input type="checkbox" name="jid" value="7975" class="checkbox"><a href="7975.html" class="underline" target="_blank">马琼</a></span>
																	</div>
					<div class="list-item item2 f-left">女</div>
					<div class="list-item item3 f-left">29岁</div>
					<div class="list-item item4 f-left">大专</div>
					<div class="list-item item5 f-left">3-5年</div>
					<div class="list-item item6 f-left">随州市</div>
					<div class="list-item item7 f-left" style="font-family:微软雅黑;">会计</div>
					<div class="list-item item8 f-left">
<!--2018-10-10-->2018-10-16</div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>专业： | 期望工作性质： | 目前求职状态：我目前已离职，可快速到岗</p>
						<div>期望从事行业：会计/审计 | 期望薪资：2000~3000元/月</div>
					</div>
					<div class="info-control f-left">
						<input resume_id="7975" type="button" value="下载简历" class="apply-job-btn collect"><p><a href="javascript:;" resume_id="7975" class="collect-btn add_favoritesr"></a></p>
					</div>
				</div>
			</div>
						<div class="infolist-row">
				<div class="info-list-block resume clearfix">
					<div class="list-item item1 f-left">
						<span><input type="checkbox" name="jid" value="7973" class="checkbox"><a href="7973.html" class="underline" target="_blank">姜华斌</a></span>
																	</div>
					<div class="list-item item2 f-left">男</div>
					<div class="list-item item3 f-left">44岁</div>
					<div class="list-item item4 f-left">初中</div>
					<div class="list-item item5 f-left">5-10年</div>
					<div class="list-item item6 f-left">随州市</div>
					<div class="list-item item7 f-left" style="font-family:微软雅黑;">普工</div>
					<div class="list-item item8 f-left">
<!--2018-10-09-->2018-10-16</div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>专业： | 期望工作性质： | 目前求职状态：我目前已离职，可快速到岗</p>
						<div>期望从事行业：电子/半导体/集成电路 | 期望薪资：3000~5000元/月</div>
					</div>
					<div class="info-control f-left">
						<input resume_id="7973" type="button" value="下载简历" class="apply-job-btn collect"><p><a href="javascript:;" resume_id="7973" class="collect-btn add_favoritesr"></a></p>
					</div>
				</div>
			</div>
						<div class="infolist-row">
				<div class="info-list-block resume clearfix">
					<div class="list-item item1 f-left">
						<span><input type="checkbox" name="jid" value="7731" class="checkbox"><a href="7731.html" class="underline" target="_blank">黄新宇</a></span>
																	</div>
					<div class="list-item item2 f-left">男</div>
					<div class="list-item item3 f-left">34岁</div>
					<div class="list-item item4 f-left">高中</div>
					<div class="list-item item5 f-left">10年以上</div>
					<div class="list-item item6 f-left">随州市,孝感市,武汉市</div>
					<div class="list-item item7 f-left" style="font-family:微软雅黑;">绩效考核经理/专员,其他技术工人,医疗器械销售</div>
					<div class="list-item item8 f-left">
<!--2018-10-09-->2018-10-16</div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>专业：航空航天类 | 期望工作性质：全职 | 目前求职状态：我目前已离职，可快速到岗</p>
						<div>期望从事行业：汽车/摩托车/零配件,医疗设备/器械,检测/认证 | 期望薪资：3000~5000元/月</div>
					</div>
					<div class="info-control f-left">
						<input resume_id="7731" type="button" value="下载简历" class="apply-job-btn collect"><p><a href="javascript:;" resume_id="7731" class="collect-btn add_favoritesr"></a></p>
					</div>
				</div>
			</div>
						<div class="infolist-row">
				<div class="info-list-block resume clearfix">
					<div class="list-item item1 f-left">
						<span><input type="checkbox" name="jid" value="7173" class="checkbox"><a href="7173.html" class="underline" target="_blank">谢先生</a></span>
																	</div>
					<div class="list-item item2 f-left">男</div>
					<div class="list-item item3 f-left">28岁</div>
					<div class="list-item item4 f-left">本科</div>
					<div class="list-item item5 f-left">5-10年</div>
					<div class="list-item item6 f-left">随州市</div>
					<div class="list-item item7 f-left" style="font-family:微软雅黑;">总监,销售总监,国际贸易经理/主管</div>
					<div class="list-item item8 f-left">
<!--2018-10-09-->2018-10-16</div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>专业：经济学类 | 期望工作性质：全职 | 目前求职状态：我目前已离职，可快速到岗</p>
						<div>期望从事行业：互联网/电子商务,批发/零售,能源(采掘/冶炼/原材料) | 期望薪资：5000~10000元/月</div>
					</div>
					<div class="info-control f-left">
						<input resume_id="7173" type="button" value="下载简历" class="apply-job-btn collect"><p><a href="javascript:;" resume_id="7173" class="collect-btn add_favoritesr"></a></p>
					</div>
				</div>
			</div>
						<div class="infolist-row">
				<div class="info-list-block resume clearfix">
					<div class="list-item item1 f-left">
						<span><input type="checkbox" name="jid" value="7971" class="checkbox"><a href="7971.html" class="underline" target="_blank">邹清立</a></span>
																	</div>
					<div class="list-item item2 f-left">男</div>
					<div class="list-item item3 f-left">28岁</div>
					<div class="list-item item4 f-left">本科</div>
					<div class="list-item item5 f-left">3-5年</div>
					<div class="list-item item6 f-left">随州市</div>
					<div class="list-item item7 f-left" style="font-family:微软雅黑;">环保检测</div>
					<div class="list-item item8 f-left">
<!--2018-10-08-->2018-10-16</div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>专业： | 期望工作性质： | 目前求职状态：我目前已离职，可快速到岗</p>
						<div>期望从事行业：检测/认证 | 期望薪资：3000~5000元/月</div>
					</div>
					<div class="info-control f-left">
						<input resume_id="7971" type="button" value="下载简历" class="apply-job-btn collect"><p><a href="javascript:;" resume_id="7971" class="collect-btn add_favoritesr"></a></p>
					</div>
				</div>
			</div>
						<div class="infolist-row">
				<div class="info-list-block resume clearfix">
					<div class="list-item item1 f-left">
						<span><input type="checkbox" name="jid" value="7666" class="checkbox"><a href="7666.html" class="underline" target="_blank">李峰</a></span>
																	</div>
					<div class="list-item item2 f-left">男</div>
					<div class="list-item item3 f-left">31岁</div>
					<div class="list-item item4 f-left">中专</div>
					<div class="list-item item5 f-left">5-10年</div>
					<div class="list-item item6 f-left">随州市</div>
					<div class="list-item item7 f-left" style="font-family:微软雅黑;">销售主管</div>
					<div class="list-item item8 f-left">
<!--2018-10-08-->2018-10-16</div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>专业： | 期望工作性质： | 目前求职状态：我目前已离职，可快速到岗</p>
						<div>期望从事行业：批发/零售 | 期望薪资：5000~10000元/月</div>
					</div>
					<div class="info-control f-left">
						<input resume_id="7666" type="button" value="下载简历" class="apply-job-btn collect"><p><a href="javascript:;" resume_id="7666" class="collect-btn add_favoritesr"></a></p>
					</div>
				</div>
			</div>
						<div class="infolist-row">
				<div class="info-list-block resume clearfix">
					<div class="list-item item1 f-left">
						<span><input type="checkbox" name="jid" value="7970" class="checkbox"><a href="7970.html" class="underline" target="_blank">李峰</a></span>
																	</div>
					<div class="list-item item2 f-left">男</div>
					<div class="list-item item3 f-left">31岁</div>
					<div class="list-item item4 f-left">中专</div>
					<div class="list-item item5 f-left">5-10年</div>
					<div class="list-item item6 f-left">随州市</div>
					<div class="list-item item7 f-left" style="font-family:微软雅黑;">销售经理</div>
					<div class="list-item item8 f-left">
<!--2018-10-08-->2018-10-16</div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>专业： | 期望工作性质： | 目前求职状态：我目前已离职，可快速到岗</p>
						<div>期望从事行业：互联网/电子商务 | 期望薪资：5000~10000元/月</div>
					</div>
					<div class="info-control f-left">
						<input resume_id="7970" type="button" value="下载简历" class="apply-job-btn collect"><p><a href="javascript:;" resume_id="7970" class="collect-btn add_favoritesr"></a></p>
					</div>
				</div>
			</div>
					</div>
		<div class="infolists-head clearfix" style="border-top:1px solid #cccccc;border-bottom:none;">
			<label class="f-left"><input type="checkbox" name="selectall" id="selectall" class="checkbox">全选</label>
			<div class="all-ctrl f-left"><input type="button" value="收藏简历" class="all-down-btn allfavorites"></div>
		</div>
				<table border="0" align="center" cellpadding="0" cellspacing="0" class="link_bk"><tr>
<td height="50" align="center"> <div class="page link_bk">
<li><a class="">首页</a></li>
<li><a class="">上一页</a></li>
<li><a class="select">1</a></li>
<li><a href="resume-list.php%EF%BC%9Fpage=2">2</a></li>
<li><a href="resume-list.php%EF%BC%9Fpage=3">3</a></li>
<li><a href="resume-list.php%EF%BC%9Fpage=4">4</a></li>
<li><a href="resume-list.php%EF%BC%9Fpage=5">5</a></li>
<li><a href="resume-list.php%EF%BC%9Fpage=2">下一页</a></li>
<li><a href="resume-list.php%EF%BC%9Fpage=5">尾页</a></li>
<li class="page_all">1/5页</li>
<div class="clear"></div>
</div>
</td>
			</tr></table>
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
					<li class="f-left"><a target="_blank" href="resume-list.php">简历搜索</a></li>
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
