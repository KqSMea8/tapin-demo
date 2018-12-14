<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>高级简历列表  - 随州人才网</title>
<meta name="description" content="随州人才网人才信息,人才简历">
<meta name="keywords" content="随州人才网人才信息，高级人才，求职信息，推荐人才">
<meta name="author" content="随州人才网">
<meta name="copyright" content="0722ren.com">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="../favicon.ico">
<link href="../templates/demo11/css/common.css" rel="stylesheet" type="text/css">
<link href="../templates/tpl_hunter/default/css/hunter.css" rel="stylesheet" type="text/css">
<link href="../templates/tpl_hunter/default/css/ui-dialog.css" rel="stylesheet" type="text/css">
<script src="../templates/demo11/js/jquery.js" type="text/javascript"></script><script src="../templates/demo11/js/jquery.resume-search.js" type="text/javascript"></script><script src="../data/cache_classify.js" type="text/javascript" charset="utf-8"></script><script src="../templates/demo11/js/jquery.autocomplete.js" type="text/javascript"></script><script src="../templates/tpl_hunter/default/js/jquery.resume-list.js" type="text/javascript"></script><script src="../templates/tpl_hunter/default/js/dialog-min.js" type="text/javascript" language="javascript"></script><script src="../templates/tpl_hunter/default/js/dialog-min-common.js" type="text/javascript" language="javascript"></script><script type="text/javascript">
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
			    			        <a href="resume-list.php" target="_self" class="s-nav-item f-left active">高级人才</a>
			    			        <a href="hunter-list.php" target="_self" class="s-nav-item f-left">猎头服务</a>
			    			        <a href="hunter-news-list.php" target="_self" class="s-nav-item f-left">猎头资讯</a>
			    			</div>
		</div>
	</div>
</div>
<div class="container">
	<div id="filterSearch">
		<div class="top-search clearfix bgfff">
			<div class="t-search-box f-left">
				<div class="type-input-box f-left" id="hidden_input_box">
					<div class="key">请输入关键字</div>
					<input type="text" name="key" id="key" value="" style="display:none;"><input name="jobcategory" id="jobcategory" type="hidden" value=""><input name="trade" id="trade" type="hidden" value=""><input name="citycategory" id="citycategory" type="hidden" value=""><input name="major" id="major" type="hidden" value=""><input name="experience" id="experience" type="hidden" value=""><input name="resumetag" id="resumetag" type="hidden" value=""><input name="education" id="education" type="hidden" value=""><input name="sex" id="sex" type="hidden" value=""><input name="photo" id="photo" type="hidden" value=""><input name="settr" id="settr" type="hidden" value="">
</div>
			</div>
			<div class="t-search-btn f-left"><input type="button" detype="QS_hunter_resumelist" id="searcnbtn" value="搜 索"></div>
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
<!-- 高级人才 -->
<div class="jobinfolists">
	<div class="tit">
		<div class="sort">
			<a href="javascript:;" class="slect">更新时间</a>
		</div>
		<div class="pagerow">
			<div class="pageminnav">
<li><a class=""></a></li>
<li>
<b style="color:#ff9900">1</b>/3页</li>
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
						<span><input type="checkbox" name="jid" value="7887" class="checkbox"><a href="../resume/7887.html" class="underline">王海波</a></span>
																	</div>
					<div class="list-item item2 f-left">男</div>
					<div class="list-item item3 f-left">42岁</div>
					<div class="list-item item4 f-left">大专</div>
					<div class="list-item item5 f-left">10年以上</div>
					<div class="list-item item6 f-left">随州市</div>
					<div class="list-item item7 f-left" style="font-family:微软雅黑;">5000~10000元/月</div>
					<div class="list-item item8 f-left">2018-08-27</div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>专业：公共管理类 | 期望工作性质：全职 | 目前求职状态：我目前已离职，可快速到岗</p>
						<div>期望从事行业：家具/家电/工艺品/玩具,办公用品及设备,其他行业 | 期望从事岗位：人力资源经理,行政经理/主管,办公室主任</div>
					</div>
					<div class="info-control f-left">
						<input resume_id="7887" type="button" value="下载简历" class="apply-job-btn collect"><p><a href="javascript:;" resume_id="7887" class="collect-btn add_favoritesr"></a></p>
					</div>
				</div>
			</div>
						<div class="infolist-row">
				<div class="info-list-block resume clearfix">
					<div class="list-item item1 f-left">
						<span><input type="checkbox" name="jid" value="7514" class="checkbox"><a href="../resume/7514.html" class="underline">李艳红</a></span>
						<i class="resume-auth pic" title="照片认证"></i>											</div>
					<div class="list-item item2 f-left">女</div>
					<div class="list-item item3 f-left">30岁</div>
					<div class="list-item item4 f-left">本科</div>
					<div class="list-item item5 f-left">5-10年</div>
					<div class="list-item item6 f-left">随州市</div>
					<div class="list-item item7 f-left" style="font-family:微软雅黑;">3000~5000元/月</div>
					<div class="list-item item8 f-left">2018-07-17</div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>专业：其他类 | 期望工作性质：全职 | 目前求职状态：我目前已离职，可快速到岗</p>
						<div>期望从事行业：其他行业 | 期望从事岗位：人力资源经理,人力资源主管,培训经理/主管</div>
					</div>
					<div class="info-control f-left">
						<input resume_id="7514" type="button" value="下载简历" class="apply-job-btn collect"><p><a href="javascript:;" resume_id="7514" class="collect-btn add_favoritesr"></a></p>
					</div>
				</div>
			</div>
						<div class="infolist-row">
				<div class="info-list-block resume clearfix">
					<div class="list-item item1 f-left">
						<span><input type="checkbox" name="jid" value="7646" class="checkbox"><a href="../resume/7646.html" class="underline">黎云飞</a></span>
																	</div>
					<div class="list-item item2 f-left">女</div>
					<div class="list-item item3 f-left">24岁</div>
					<div class="list-item item4 f-left">本科</div>
					<div class="list-item item5 f-left">1-3年</div>
					<div class="list-item item6 f-left">随州市</div>
					<div class="list-item item7 f-left" style="font-family:微软雅黑;">2000~3000元/月</div>
					<div class="list-item item8 f-left">2018-07-01</div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>专业：经济学类 | 期望工作性质：全职 | 目前求职状态：我目前已离职，可快速到岗</p>
						<div>期望从事行业：会计/审计,专业服务/财会/法律,政府部门/事业单位 | 期望从事岗位：会计</div>
					</div>
					<div class="info-control f-left">
						<input resume_id="7646" type="button" value="下载简历" class="apply-job-btn collect"><p><a href="javascript:;" resume_id="7646" class="collect-btn add_favoritesr"></a></p>
					</div>
				</div>
			</div>
						<div class="infolist-row">
				<div class="info-list-block resume clearfix">
					<div class="list-item item1 f-left">
						<span><input type="checkbox" name="jid" value="7446" class="checkbox"><a href="../resume/7446.html" class="underline">詹昌学</a></span>
																	</div>
					<div class="list-item item2 f-left">男</div>
					<div class="list-item item3 f-left">35岁</div>
					<div class="list-item item4 f-left">大专</div>
					<div class="list-item item5 f-left">5-10年</div>
					<div class="list-item item6 f-left">随州市</div>
					<div class="list-item item7 f-left" style="font-family:微软雅黑;">5000~10000元/月</div>
					<div class="list-item item8 f-left">2018-04-21</div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>专业： | 期望工作性质： | 目前求职状态：观望有好的机会再考虑</p>
						<div>期望从事行业：汽车/摩托车/零配件 | 期望从事岗位：行政经理/主管</div>
					</div>
					<div class="info-control f-left">
						<input resume_id="7446" type="button" value="下载简历" class="apply-job-btn collect"><p><a href="javascript:;" resume_id="7446" class="collect-btn add_favoritesr"></a></p>
					</div>
				</div>
			</div>
						<div class="infolist-row">
				<div class="info-list-block resume clearfix">
					<div class="list-item item1 f-left">
						<span><input type="checkbox" name="jid" value="7451" class="checkbox"><a href="../resume/7451.html" class="underline">何军</a></span>
																	</div>
					<div class="list-item item2 f-left">男</div>
					<div class="list-item item3 f-left">32岁</div>
					<div class="list-item item4 f-left">本科</div>
					<div class="list-item item5 f-left">10年以上</div>
					<div class="list-item item6 f-left">随州市</div>
					<div class="list-item item7 f-left" style="font-family:微软雅黑;">5000~10000元/月</div>
					<div class="list-item item8 f-left">2018-04-21</div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>专业： | 期望工作性质：全职 | 目前求职状态：我目前在职，但考虑换个新环境</p>
						<div>期望从事行业：政府部门/事业单位 | 期望从事岗位：运营主管</div>
					</div>
					<div class="info-control f-left">
						<input resume_id="7451" type="button" value="下载简历" class="apply-job-btn collect"><p><a href="javascript:;" resume_id="7451" class="collect-btn add_favoritesr"></a></p>
					</div>
				</div>
			</div>
						<div class="infolist-row">
				<div class="info-list-block resume clearfix">
					<div class="list-item item1 f-left">
						<span><input type="checkbox" name="jid" value="7052" class="checkbox"><a href="../resume/7052.html" class="underline">占黎黎</a></span>
																	</div>
					<div class="list-item item2 f-left">女</div>
					<div class="list-item item3 f-left">33岁</div>
					<div class="list-item item4 f-left">本科</div>
					<div class="list-item item5 f-left">5-10年</div>
					<div class="list-item item6 f-left">随州市</div>
					<div class="list-item item7 f-left" style="font-family:微软雅黑;">2000~3000元/月</div>
					<div class="list-item item8 f-left">2018-03-14</div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>专业： | 期望工作性质： | 目前求职状态：我目前已离职，可快速到岗</p>
						<div>期望从事行业：其他行业 | 期望从事岗位：财务/审计/税务</div>
					</div>
					<div class="info-control f-left">
						<input resume_id="7052" type="button" value="下载简历" class="apply-job-btn collect"><p><a href="javascript:;" resume_id="7052" class="collect-btn add_favoritesr"></a></p>
					</div>
				</div>
			</div>
						<div class="infolist-row">
				<div class="info-list-block resume clearfix">
					<div class="list-item item1 f-left">
						<span><input type="checkbox" name="jid" value="7289" class="checkbox"><a href="../resume/7289.html" class="underline">万银娟</a></span>
																	</div>
					<div class="list-item item2 f-left">女</div>
					<div class="list-item item3 f-left">42岁</div>
					<div class="list-item item4 f-left">大专</div>
					<div class="list-item item5 f-left">10年以上</div>
					<div class="list-item item6 f-left">随州市</div>
					<div class="list-item item7 f-left" style="font-family:微软雅黑;">5000~10000元/月</div>
					<div class="list-item item8 f-left">2018-02-26</div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>专业： | 期望工作性质： | 目前求职状态：我目前已离职，可快速到岗</p>
						<div>期望从事行业：电子/半导体/集成电路 | 期望从事岗位：部门经理</div>
					</div>
					<div class="info-control f-left">
						<input resume_id="7289" type="button" value="下载简历" class="apply-job-btn collect"><p><a href="javascript:;" resume_id="7289" class="collect-btn add_favoritesr"></a></p>
					</div>
				</div>
			</div>
						<div class="infolist-row">
				<div class="info-list-block resume clearfix">
					<div class="list-item item1 f-left">
						<span><input type="checkbox" name="jid" value="6771" class="checkbox"><a href="../resume/6771.html" class="underline">刘杨</a></span>
																	</div>
					<div class="list-item item2 f-left">女</div>
					<div class="list-item item3 f-left">31岁</div>
					<div class="list-item item4 f-left">大专</div>
					<div class="list-item item5 f-left">5-10年</div>
					<div class="list-item item6 f-left">随州市</div>
					<div class="list-item item7 f-left" style="font-family:微软雅黑;">2000~3000元/月</div>
					<div class="list-item item8 f-left">2018-02-17</div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>专业：经济学类 | 期望工作性质：全职 | 目前求职状态：我目前已离职，可快速到岗</p>
						<div>期望从事行业：会计/审计 | 期望从事岗位：财务/审计/税务</div>
					</div>
					<div class="info-control f-left">
						<input resume_id="6771" type="button" value="下载简历" class="apply-job-btn collect"><p><a href="javascript:;" resume_id="6771" class="collect-btn add_favoritesr"></a></p>
					</div>
				</div>
			</div>
						<div class="infolist-row">
				<div class="info-list-block resume clearfix">
					<div class="list-item item1 f-left">
						<span><input type="checkbox" name="jid" value="6903" class="checkbox"><a href="../resume/6903.html" class="underline">N0006903</a></span>
						<i class="resume-auth pic" title="照片认证"></i>											</div>
					<div class="list-item item2 f-left">男</div>
					<div class="list-item item3 f-left">27岁</div>
					<div class="list-item item4 f-left">大专</div>
					<div class="list-item item5 f-left">3-5年</div>
					<div class="list-item item6 f-left">随州市</div>
					<div class="list-item item7 f-left" style="font-family:微软雅黑;">3000~5000元/月</div>
					<div class="list-item item8 f-left">2017-06-10</div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>专业：电子信息科学类 | 期望工作性质：全职 | 目前求职状态：我目前已离职，可快速到岗</p>
						<div>期望从事行业：计算机软件/硬件,计算机系统/维修,通信(设备/运营/服务) | 期望从事岗位：IT管理,IT品质/技术支持,计算机应用</div>
					</div>
					<div class="info-control f-left">
						<input resume_id="6903" type="button" value="下载简历" class="apply-job-btn collect"><p><a href="javascript:;" resume_id="6903" class="collect-btn add_favoritesr"></a></p>
					</div>
				</div>
			</div>
						<div class="infolist-row">
				<div class="info-list-block resume clearfix">
					<div class="list-item item1 f-left">
						<span><input type="checkbox" name="jid" value="6193" class="checkbox"><a href="../resume/6193.html" class="underline">吴超</a></span>
						<i class="resume-auth pic" title="照片认证"></i>											</div>
					<div class="list-item item2 f-left">男</div>
					<div class="list-item item3 f-left">28岁</div>
					<div class="list-item item4 f-left">中专</div>
					<div class="list-item item5 f-left">5-10年</div>
					<div class="list-item item6 f-left">随州市</div>
					<div class="list-item item7 f-left" style="font-family:微软雅黑;">3000~5000元/月</div>
					<div class="list-item item8 f-left">2017-04-07</div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>专业：其他类 | 期望工作性质：全职 | 目前求职状态：我目前在职，但考虑换个新环境</p>
						<div>期望从事行业：交通/运输/物流 | 期望从事岗位：商务司机</div>
					</div>
					<div class="info-control f-left">
						<input resume_id="6193" type="button" value="下载简历" class="apply-job-btn collect"><p><a href="javascript:;" resume_id="6193" class="collect-btn add_favoritesr"></a></p>
					</div>
				</div>
			</div>
						<div class="infolist-row">
				<div class="info-list-block resume clearfix">
					<div class="list-item item1 f-left">
						<span><input type="checkbox" name="jid" value="6220" class="checkbox"><a href="../resume/6220.html" class="underline">徐洲</a></span>
						<i class="resume-auth pic" title="照片认证"></i>											</div>
					<div class="list-item item2 f-left">男</div>
					<div class="list-item item3 f-left">26岁</div>
					<div class="list-item item4 f-left">本科</div>
					<div class="list-item item5 f-left">1-3年</div>
					<div class="list-item item6 f-left">湖北省/随州市</div>
					<div class="list-item item7 f-left" style="font-family:微软雅黑;">3000~5000元/月</div>
					<div class="list-item item8 f-left">2016-06-02</div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>专业：机械类 | 期望工作性质：全职 | 目前求职状态：我目前已离职，可快速到岗</p>
						<div>期望从事行业：机械/设备/重工 | 期望从事岗位：其他设计类职位,模具工</div>
					</div>
					<div class="info-control f-left">
						<input resume_id="6220" type="button" value="下载简历" class="apply-job-btn collect"><p><a href="javascript:;" resume_id="6220" class="collect-btn add_favoritesr"></a></p>
					</div>
				</div>
			</div>
						<div class="infolist-row">
				<div class="info-list-block resume clearfix">
					<div class="list-item item1 f-left">
						<span><input type="checkbox" name="jid" value="6233" class="checkbox"><a href="../resume/6233.html" class="underline">王女士</a></span>
						<i class="resume-auth pic" title="照片认证"></i>											</div>
					<div class="list-item item2 f-left">女</div>
					<div class="list-item item3 f-left">30岁</div>
					<div class="list-item item4 f-left">本科</div>
					<div class="list-item item5 f-left">5-10年</div>
					<div class="list-item item6 f-left">湖北省/随州市</div>
					<div class="list-item item7 f-left" style="font-family:微软雅黑;">3000~5000元/月</div>
					<div class="list-item item8 f-left">2016-04-13</div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>专业： | 期望工作性质：全职 | 目前求职状态：</p>
						<div>期望从事行业：影视/媒体/艺术/出版,教育/培训,学术/科研,政府部门/事业单位,非盈利机构/行业协会 | 期望从事岗位：行政专员/助理,人事专员/助理,小学教师,总编/副总编,英语</div>
					</div>
					<div class="info-control f-left">
						<input resume_id="6233" type="button" value="下载简历" class="apply-job-btn collect"><p><a href="javascript:;" resume_id="6233" class="collect-btn add_favoritesr"></a></p>
					</div>
				</div>
			</div>
						<div class="infolist-row">
				<div class="info-list-block resume clearfix">
					<div class="list-item item1 f-left">
						<span><input type="checkbox" name="jid" value="6221" class="checkbox"><a href="../resume/6221.html" class="underline">刘铮</a></span>
																	</div>
					<div class="list-item item2 f-left">男</div>
					<div class="list-item item3 f-left">25岁</div>
					<div class="list-item item4 f-left">大专</div>
					<div class="list-item item5 f-left">1-3年</div>
					<div class="list-item item6 f-left">湖北省/随州市</div>
					<div class="list-item item7 f-left" style="font-family:微软雅黑;">3000~5000元/月</div>
					<div class="list-item item8 f-left">2016-04-03</div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>专业： | 期望工作性质：全职 | 目前求职状态：</p>
						<div>期望从事行业：计算机软件/硬件,互联网/电子商务,网络游戏,服装/纺织/皮革,印刷/包装/造纸 | 期望从事岗位：平面设计与制作</div>
					</div>
					<div class="info-control f-left">
						<input resume_id="6221" type="button" value="下载简历" class="apply-job-btn collect"><p><a href="javascript:;" resume_id="6221" class="collect-btn add_favoritesr"></a></p>
					</div>
				</div>
			</div>
						<div class="infolist-row">
				<div class="info-list-block resume clearfix">
					<div class="list-item item1 f-left">
						<span><input type="checkbox" name="jid" value="6184" class="checkbox"><a href="../resume/6184.html" class="underline">李杏林</a></span>
						<i class="resume-auth pic" title="照片认证"></i>											</div>
					<div class="list-item item2 f-left">女</div>
					<div class="list-item item3 f-left">28岁</div>
					<div class="list-item item4 f-left">本科</div>
					<div class="list-item item5 f-left">1年以下</div>
					<div class="list-item item6 f-left">湖北省/随州市</div>
					<div class="list-item item7 f-left" style="font-family:微软雅黑;">2000~3000元/月</div>
					<div class="list-item item8 f-left">2016-03-14</div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>专业： | 期望工作性质：全职 | 目前求职状态：</p>
						<div>期望从事行业：金融(银行/保险),批发/零售,教育/培训,酒店/旅游,政府部门/事业单位 | 期望从事岗位：小学教师,家教,银行信贷管理,柜员/银行会计</div>
					</div>
					<div class="info-control f-left">
						<input resume_id="6184" type="button" value="下载简历" class="apply-job-btn collect"><p><a href="javascript:;" resume_id="6184" class="collect-btn add_favoritesr"></a></p>
					</div>
				</div>
			</div>
						<div class="infolist-row">
				<div class="info-list-block resume clearfix">
					<div class="list-item item1 f-left">
						<span><input type="checkbox" name="jid" value="6080" class="checkbox"><a href="../resume/6080.html" class="underline">N0006080</a></span>
																	</div>
					<div class="list-item item2 f-left">男</div>
					<div class="list-item item3 f-left">49岁</div>
					<div class="list-item item4 f-left">高中</div>
					<div class="list-item item5 f-left">10年以上</div>
					<div class="list-item item6 f-left">湖北省/随州市</div>
					<div class="list-item item7 f-left" style="font-family:微软雅黑;">5000~10000元/月</div>
					<div class="list-item item8 f-left">2016-03-12</div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>专业： | 期望工作性质：全职 | 目前求职状态：</p>
						<div>期望从事行业：建筑与工程 | 期望从事岗位：品质/质量管理(QA・QC)</div>
					</div>
					<div class="info-control f-left">
						<input resume_id="6080" type="button" value="下载简历" class="apply-job-btn collect"><p><a href="javascript:;" resume_id="6080" class="collect-btn add_favoritesr"></a></p>
					</div>
				</div>
			</div>
						<div class="infolist-row">
				<div class="info-list-block resume clearfix">
					<div class="list-item item1 f-left">
						<span><input type="checkbox" name="jid" value="6176" class="checkbox"><a href="../resume/6176.html" class="underline">周姣</a></span>
																	</div>
					<div class="list-item item2 f-left">女</div>
					<div class="list-item item3 f-left">34岁</div>
					<div class="list-item item4 f-left">本科</div>
					<div class="list-item item5 f-left">3-5年</div>
					<div class="list-item item6 f-left">湖北省/随州市</div>
					<div class="list-item item7 f-left" style="font-family:微软雅黑;">2000~3000元/月</div>
					<div class="list-item item8 f-left">2016-03-11</div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>专业： | 期望工作性质：全职 | 目前求职状态：</p>
						<div>期望从事行业：机械/设备/重工,汽车/摩托车/零配件,制药/生物工程,交通/运输/物流,其他行业 | 期望从事岗位：会计</div>
					</div>
					<div class="info-control f-left">
						<input resume_id="6176" type="button" value="下载简历" class="apply-job-btn collect"><p><a href="javascript:;" resume_id="6176" class="collect-btn add_favoritesr"></a></p>
					</div>
				</div>
			</div>
						<div class="infolist-row">
				<div class="info-list-block resume clearfix">
					<div class="list-item item1 f-left">
						<span><input type="checkbox" name="jid" value="6125" class="checkbox"><a href="../resume/6125.html" class="underline">倪志强</a></span>
						<i class="resume-auth pic" title="照片认证"></i>											</div>
					<div class="list-item item2 f-left">男</div>
					<div class="list-item item3 f-left">33岁</div>
					<div class="list-item item4 f-left">大专</div>
					<div class="list-item item5 f-left">3-5年</div>
					<div class="list-item item6 f-left">湖北省/随州市</div>
					<div class="list-item item7 f-left" style="font-family:微软雅黑;">5000~10000元/月</div>
					<div class="list-item item8 f-left">2016-02-17</div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>专业： | 期望工作性质：全职 | 目前求职状态：</p>
						<div>期望从事行业：计算机系统/维修,互联网/电子商务,电子/半导体/集成电路,仪器仪表/工业自动化,影视/媒体/艺术/出版 | 期望从事岗位：电子工程师,安全管理人员</div>
					</div>
					<div class="info-control f-left">
						<input resume_id="6125" type="button" value="下载简历" class="apply-job-btn collect"><p><a href="javascript:;" resume_id="6125" class="collect-btn add_favoritesr"></a></p>
					</div>
				</div>
			</div>
						<div class="infolist-row">
				<div class="info-list-block resume clearfix">
					<div class="list-item item1 f-left">
						<span><input type="checkbox" name="jid" value="6119" class="checkbox"><a href="../resume/6119.html" class="underline">孙明明</a></span>
						<i class="resume-auth pic" title="照片认证"></i>											</div>
					<div class="list-item item2 f-left">男</div>
					<div class="list-item item3 f-left">27岁</div>
					<div class="list-item item4 f-left">本科</div>
					<div class="list-item item5 f-left">1-3年</div>
					<div class="list-item item6 f-left">湖北省/随州市</div>
					<div class="list-item item7 f-left" style="font-family:微软雅黑;">3000~5000元/月</div>
					<div class="list-item item8 f-left">2016-02-15</div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>专业： | 期望工作性质：全职 | 目前求职状态：</p>
						<div>期望从事行业：计算机软件/硬件,计算机系统/维修 | 期望从事岗位：软件工程师,硬件工程师,技术支持工程师,系统维护工程师,其他计算机类职位</div>
					</div>
					<div class="info-control f-left">
						<input resume_id="6119" type="button" value="下载简历" class="apply-job-btn collect"><p><a href="javascript:;" resume_id="6119" class="collect-btn add_favoritesr"></a></p>
					</div>
				</div>
			</div>
						<div class="infolist-row">
				<div class="info-list-block resume clearfix">
					<div class="list-item item1 f-left">
						<span><input type="checkbox" name="jid" value="6117" class="checkbox"><a href="../resume/6117.html" class="underline">张华清</a></span>
						<i class="resume-auth pic" title="照片认证"></i>											</div>
					<div class="list-item item2 f-left">男</div>
					<div class="list-item item3 f-left">27岁</div>
					<div class="list-item item4 f-left">大专</div>
					<div class="list-item item5 f-left">3-5年</div>
					<div class="list-item item6 f-left">湖北省/随州市</div>
					<div class="list-item item7 f-left" style="font-family:微软雅黑;">面议</div>
					<div class="list-item item8 f-left">2016-02-10</div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>专业： | 期望工作性质：全职 | 目前求职状态：</p>
						<div>期望从事行业：互联网/电子商务,金融(投资/证券,金融(银行/保险),酒店/旅游 | 期望从事岗位：客户代表,销售代表,证券期货,证券分析师</div>
					</div>
					<div class="info-control f-left">
						<input resume_id="6117" type="button" value="下载简历" class="apply-job-btn collect"><p><a href="javascript:;" resume_id="6117" class="collect-btn add_favoritesr"></a></p>
					</div>
				</div>
			</div>
						<div class="infolist-row">
				<div class="info-list-block resume clearfix">
					<div class="list-item item1 f-left">
						<span><input type="checkbox" name="jid" value="6089" class="checkbox"><a href="../resume/6089.html" class="underline">张女士</a></span>
																	</div>
					<div class="list-item item2 f-left">女</div>
					<div class="list-item item3 f-left">27岁</div>
					<div class="list-item item4 f-left">本科</div>
					<div class="list-item item5 f-left">1年以下</div>
					<div class="list-item item6 f-left">湖北省/随州市</div>
					<div class="list-item item7 f-left" style="font-family:微软雅黑;">2000~3000元/月</div>
					<div class="list-item item8 f-left">2015-12-15</div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>专业： | 期望工作性质：全职 | 目前求职状态：</p>
						<div>期望从事行业：会计/审计,金融(投资/证券,教育/培训 | 期望从事岗位：行政专员/助理,人事专员/助理,文员/秘书,财务经理,会计,兼职教师,柜员/银行会计</div>
					</div>
					<div class="info-control f-left">
						<input resume_id="6089" type="button" value="下载简历" class="apply-job-btn collect"><p><a href="javascript:;" resume_id="6089" class="collect-btn add_favoritesr"></a></p>
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
<li><a href="resume-list.php%EF%BC%9Fpage=2">下一页</a></li>
<li><a href="resume-list.php%EF%BC%9Fpage=3">尾页</a></li>
<li class="page_all">1/3页</li>
<div class="clear"></div>
</div>
</td>
			</tr></table>
</div>
</div>
<!-- 高级人才 End-->
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
