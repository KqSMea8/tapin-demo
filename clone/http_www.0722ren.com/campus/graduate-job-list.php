<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>校园招聘-职位搜索列表</title>
<link rel="shortcut icon" href="../favicon.ico">
<meta name="author" content="随州人才网">
<meta name="copyright" content="0722ren.com">
<link rel="stylesheet" href="../templates/tpl_campus/default/css/school.css">
<link rel="stylesheet" href="../templates/tpl_campus/default/css/ui-dialog.css">
<script src="../templates/tpl_campus/default/js/jquery.js" type="text/javascript"></script><script src="../templates/tpl_campus/default/js/jquery.cookie.js" type="text/javascript"></script><script src="../templates/tpl_campus/default/js/dialog-min.js" type="text/javascript"></script><script src="../templates/tpl_campus/default/js/jquery.jobs-list.js" type="text/javascript"></script><script src="../templates/tpl_campus/default/js/jquery.graduate-jobs-search.js" type="text/javascript"></script><script src="../templates/tpl_campus/default/js/jquery.autocomplete.js" type="text/javascript"></script><script src="../data/cache_classify.js" type="text/javascript" charset="utf-8"></script><script>
	$(document).ready(function() {
		$('.filter-item:last').css({'margin-right':0});
		$('.data-main .resume-item:odd').css({'background-color':'#f8f8f8'});
		$('.collect').on('click', function(){
			$(this).toggleClass('hascollect');
		});

		$('.search-type-choose').hover(function(){
			$(this).find(".search-options").show();
		}, function(){
			$(this).find(".search-options").hide();
		});

		$('.detail-control').each(function(){
			if ($(this).hasClass('ishow')) {
				$(this).parent().next().show();
			};
			$(this).on('click', function(){
				if ($(this).hasClass('ishow')) {
					$(this).removeClass('ishow');
					$(this).parent().next().hide();
					$('.resume-item').removeClass('resume-item').addClass('resume-item');  //IE7 BUG Fix
				}else{
					$(this).addClass('ishow');
					$(this).parent().next().show();
					$('.resume-item').removeClass('resume-item').addClass('resume-item');  //IE7 BUG Fix
				};
			});
		});

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
		});
		$(".school-data .data-top .seq a").click(function(event) {
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
		// 合并公司职位弹出
		$(".mjob_name").hover(function(){
			$(this).find(".merger_job_info").show();
		}, function(){
			$(this).find(".merger_job_info").hide();
		});
		//详细显示模式
		$("#detail").click(function(){
			$.cookie('mode','1');
			$(this).addClass('select').siblings('#list').removeClass('select');
			$('.detail-control').addClass("ishow");
			$(".resume-more-info").show();
		});
		//列表显示模式
		$("#list").click(function(){
			$.cookie('mode','2');
			$(this).addClass('select').siblings('#detail').removeClass('select');
			$('.detail-control').removeClass("ishow");
			$(".resume-more-info").hide();
		});
		//申请和收藏职位
		apply_jobs("/");
		favorites("/");
		allaround("/");
	    // 职位类别填充数据 
		job_filldata("#job_list", QS_jobs_parent, QS_jobs, "#result-list-job", "#aui_outer_job", "#job_result_show", "#jobcategory", "/");
		// 所属行业填充数据
		trade_filldata("#trad_list", QS_trade, "#aui_outer", "#result-list-trade", "#trade_result_show", "#trade", "/");
		// 工作地区填充数据
		city_filldata("#city_list", QS_city_parent, QS_city, "#result-list-city", "#aui_outer_city", "#city_result_show", "#citycategory", "/");
	});
</script>
</head>
<body>
	<div id="school-header" class="">
	<div class="header-top claerfix">
		<div class="container clearfix">
			<div class="header-title f-left">您好，欢迎访问随州人才网校园招聘！<a href="../user/login.php">[登录]</a>
</div>
			<div class="top-contact f-right">
<span>服务热线：0722-3588122</span> | <a href="../index.html">返回人才网</a>
</div>
		</div>
	</div>
	<div class="header-logo-nav">
		<div class="container clearfix">
			<div class="school-logo f-left"><a href="../index.html"><img src="../data/images/logo.png" alt="logo" height="50"></a></div>
			<div class="logo-side-title f-left">校园招聘</div>
			<div class="school-nav f-right">
												<a href="index.php" target="_self" class="s-nav-item f-left ">校园首页</a>
								<a href="graduate-job-list.php" target="_self" class="s-nav-item f-left  active">应届生职位</a>
								<a href="graduate-resume-list.php" target="_self" class="s-nav-item f-left ">应届生简历</a>
								<a href="campus-list.php" target="_self" class="s-nav-item f-left ">合作院校</a>
							</div>
		</div>
	</div>
</div>	<div class="container">
		<div id="filterSearch">
			<div class="top-search clearfix">
				<div class="t-search-box f-left">
					<div class="type-input-box f-left" id="hidden_input_box">
						<div class="key">请输入关键字</div>
						<input type="text" name="key" id="key" value="" style="display:none;"><input name="jobcategory" id="jobcategory" type="hidden" value=""><input name="trade" id="trade" type="hidden" value=""><input name="citycategory" id="citycategory" type="hidden" value=""><input type="hidden" name="wage" id="wage" value=""><input type="hidden" name="jobtag" id="jobtag" value=""><input type="hidden" name="education" id="education" value=""><input type="hidden" name="experience" id="experience" value=""><input type="hidden" name="settr" id="settr" value=""><input type="hidden" name="nature" id="nature" value=""><input type="hidden" name="scale" id="scale" value=""><input type="hidden" name="sort" id="sort" value=""><input type="hidden" name="page" id="page" value="">
</div>
				</div>
				<div class="t-search-btn f-left"><input type="button" detype="QS_graduatejob" id="searcnbtn" value="找应届生职位"></div>
			</div>
			<div class="fliter-wrap">
				<div class="filter-drop clearfix">
					<div class="filter-item f-left">
						<div class="choose-item">
						<div class="choose-control">
							<span class="cc-default" id="job_result_show">选择职位类别</span><i class="choose-icon"></i>
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
<div class="clear"></div>
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
							<span class="cc-default" id="trade_result_show">选择行业类别</span><i class="choose-icon"></i>
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
							<span class="cc-default" id="city_result_show">选择地区类别</span><i class="choose-icon"></i>
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
				</div>
				<div class="filter-list-wrap clearfix">
					<div class="fl-type f-left">薪资待遇：</div>
					<div class="fl-content r-choice f-left">
																		<div class="fl-content-li" type="wage" code="56">1000~1500元/月</div>
												<div class="fl-content-li" type="wage" code="57">1500~2000元/月</div>
												<div class="fl-content-li" type="wage" code="58">2000~3000元/月</div>
												<div class="fl-content-li" type="wage" code="59">3000~5000元/月</div>
												<div class="fl-content-li" type="wage" code="60">5000~10000元/月</div>
												<div class="fl-content-li" type="wage" code="61">1万以上/月</div>
											</div>
				</div>
				<div class="filter-list-wrap clearfix">
					<div class="fl-type f-left">福利亮点：</div>
					<div class="fl-content f-left forShowMore" id="fliterMore">
																		<div class="fl-content-li" type="jobtag" code="145">环境好</div>
												<div class="fl-content-li" type="jobtag" code="146">年终奖</div>
												<div class="fl-content-li" type="jobtag" code="147">双休</div>
												<div class="fl-content-li" type="jobtag" code="148">五险一金</div>
												<div class="fl-content-li" type="jobtag" code="149">加班费</div>
												<div class="fl-content-li" type="jobtag" code="150">朝九晚五</div>
												<div class="fl-content-li" type="jobtag" code="151">交通方便</div>
												<div class="fl-content-li" type="jobtag" code="152">加班补助</div>
												<div class="fl-content-li" type="jobtag" code="153">包食宿</div>
												<div class="fl-content-li" type="jobtag" code="154">管理规范</div>
												<div class="fl-content-li" type="jobtag" code="155">有提成</div>
												<div class="fl-content-li" type="jobtag" code="156">全勤奖</div>
												<div class="fl-content-li" type="jobtag" code="157">有年假</div>
												<div class="fl-content-li" type="jobtag" code="158">专车接送</div>
												<div class="fl-content-li" type="jobtag" code="159">有补助</div>
												<div class="fl-content-li" type="jobtag" code="160">晋升快</div>
												<div class="fl-content-li" type="jobtag" code="161">车贴</div>
												<div class="fl-content-li" type="jobtag" code="162">房贴</div>
												<div class="fl-content-li" type="jobtag" code="163">压力小</div>
												<div class="fl-content-li" type="jobtag" code="164">技术培训</div>
												<div class="fl-content-li" type="jobtag" code="165">旅游</div>
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
							学历要求
						</div>
						<div class="saixuan">
														<div class="saixuans">
								<div class="line"></div>
																<a defvalue="74" type="experience" href="javascript:;">无经验</a>
																<a defvalue="75" type="experience" href="javascript:;">1年以下</a>
																<a defvalue="76" type="experience" href="javascript:;">1-3年</a>
																<a defvalue="77" type="experience" href="javascript:;">3-5年</a>
																<a defvalue="78" type="experience" href="javascript:;">5-10年</a>
																<a defvalue="79" type="experience" href="javascript:;">10年以上</a>
															</div>
							工作经验
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
						<div class="saixuan">
														<div class="saixuans">
								<div class="line"></div>
																<a defvalue="62" type="nature" href="javascript:;">全职</a>
																<a defvalue="63" type="nature" href="javascript:;">兼职</a>
																<a defvalue="64" type="nature" href="javascript:;">实习</a>
															</div>
							工作性质
						</div>
						<div class="saixuan">
														<div class="saixuans">
								<div class="line"></div>
																<a defvalue="80" type="scale" href="javascript:;">20人以下</a>
																<a defvalue="81" type="scale" href="javascript:;">20-99人</a>
																<a defvalue="82" type="scale" href="javascript:;">100-499人</a>
																<a defvalue="83" type="scale" href="javascript:;">500-999人</a>
																<a defvalue="84" type="scale" href="javascript:;">1000-9999人</a>
																<a defvalue="85" type="scale" href="javascript:;">10000人以上</a>
															</div>
							企业规模
						</div>
					</div>
				</div>
			</div>
			<div class="fliter-result clearfix" id="has_result">
				<div class="fr-type f-left">已选条件：</div>
				<div class="fr-content f-left">
																																</div>
				<div class="fliter-clear f-right" id="clear_all_selected"><a href="javascript:;" class="clear-link">清空所选</a></div>
			</div>
		</div>
		<!-- 数据列表 -->
		<div class="school-data clearfix" id="school-data">
			<div class="data-top clearfix">
				<div class="seq f-left">
<span>排序</span>
					<a href="graduate-job-list.php%EF%BC%9Fsort=&amp;key=&amp;jobcategory=&amp;education=&amp;citycategory=&amp;experience=&amp;settr=&amp;trade=&amp;wage=&amp;scale=&amp;tag=&amp;nature=&amp;page=1" class="seq-item time selected">综合排序</a>
					<a href="graduate-job-list.php%EF%BC%9Fkey=&amp;jobcategory=&amp;education=&amp;citycategory=&amp;experience=&amp;settr=&amp;trade=&amp;wage=&amp;scale=&amp;tag=&amp;nature=&amp;page=1&amp;sort=rtime" class="seq-item time ">更新时间</a>
					<a href="graduate-job-list.php%EF%BC%9Fkey=&amp;jobcategory=&amp;education=&amp;citycategory=&amp;experience=&amp;settr=&amp;trade=&amp;wage=&amp;scale=&amp;tag=&amp;nature=&amp;page=1&amp;sort=wage" class="seq-item time ">薪资待遇</a>
					<!-- <a href="http://www.0722ren.com/campus/graduate-job-list.php?sort=hot&page=1&key=&jobcategory=&education=&citycategory=&experience=&settr=&trade=&wage=&scale=&tag=&nature=" class="seq-item hot ">热度</a> -->
				</div>
				<div class="seq f-left" style="margin-left:35px">
<span>筛选</span><label class="all-company"><input type="checkbox" id="merge_com_btn" class="checkbox">合并公司</label>
</div>
				<div class="small-page f-right">
					<div class="pageminnav">
<li><a class=""></a></li>
<li>
<b style="color:#ff9900">1</b>/20页</li>
<li><a href="graduate-job-list.php%EF%BC%9Fpage=2">&gt;</a></li>
<div class="clear"></div>
</div>
				</div>
			</div>
			<div class="data-control clearfix">
				<label class="f-left check-all"><input type="checkbox" name="selectall" id="selectall" class="checkbox">全选</label>
				<a href="javascript:;" class="all-opera f-left deliver">申请职位</a>
				<a href="javascript:;" class="all-opera f-left collecter">收藏职位</a>
								<div class="list-model f-right">
					<a id="list" href="javascript:;" class="f-left model-item list select">列表</a>
					<a id="detail" href="javascript:;" class="f-left model-item detail">详细</a>
				</div>
							</div>
						<div class="data-type clearfix resumes job-type">
				<div class="f-left type-item item1">职位名称</div>
				<div class="f-left type-item item2">公司名称</div>
				<div class="f-left type-item item3">薪资待遇</div>
				<div class="f-left type-item item4">工作地区</div>
				<div class="f-left type-item item5">更新时间</div>
			</div>
																		<!-- 职位模式 -->
					<div class="data-main">
						<div class="resume-item">
							<div class="seq-block seq-jobs clearfix">
								<div class="r-seq-item item1 f-left">
									<span class="seq-span"><input type="checkbox" name="jid" value="6821" class="checkbox"><a href="../jobs/6821.html" target="_blank" class="underline">业务代表/客户代表/</a>
										<img title="紧急招聘" src="../templates/demo11/images/iconji.gif" border="0" class="vtip"><img title="推荐职位" src="../templates/demo11/images/iconjian.gif" border="0" class="vtip"><img title="欢迎应届生投递简历" src="../templates/demo11/images/ying.jpg" border="0" class="vtip"></span>
								</div>
								<div class="r-seq-item item2 f-left"><a href="../c1926.html" target="_blank" class="underline">随州随广文化传媒有限公司<img src="../templates/demo11/images/yan.gif" alt="已验证"><img src="../data/setmealimg/5.gif" border="0" title="年度会员" class="vtip"></a></div>
								<div class="r-seq-item item3 f-left"><span>1500~2000元/月</span></div>
								<div class="r-seq-item item4 f-left">湖北省/随州市</div>
								<div class="r-seq-item item5  pt f-left" style="line-height:50px;">
																			<img src="../templates/demo11/images/stick.gif" alt="" title="置顶职位" style="display: inline-bock;">
</div>
								<a href="javascript:;" class="detail-control f-left"></a>
							</div>
							<div class="resume-more-info clearfix">
								<div class="info-text f-left">
									<p>学历要求：高中 ｜  工作经验：1-3年 ｜  职位性质：全职  |  招聘人数：10人 ｜性别要求：不限</p>
									<p></p>
<p>
	<strong>职位描述:</strong> 
</p>
<p>
	1、负责新客户的开发和已合作客户的维护，做好客户的服务工作；
</p>
<p>
	2、负责业务的开拓，实现公司销售目标。
</p>
<p>
	<strong>任职要求：</strong> 
</p>
<p>
	1、 性别不限，学历大专或以上；
</p>
<p>
	2、 一年以上销售工作经验；擅长网络业务分销；
</p>
<p>
	3、 品貌端正，身体健康，性格开朗，能承受工作压力，富有团队合作精神和敬业精神；
</p>
<p>
	4、 有较强的互联网应用基础，熟悉互联网各种平台运用，如微博、论坛；
</p>
<p>
	5、 要求长期稳定者。
</p>
								</div>
								<div class="info-operaing f-right">
									<div><input type="button" value="申请职位" class="invite-btn" id="6821"></div>
									<a href="javascript:;" class="collect" id="6821">收藏</a>
								</div>
							</div>
						</div>
					</div>
					<!-- 职位模式结束 -->
																<!-- 职位模式 -->
					<div class="data-main">
						<div class="resume-item">
							<div class="seq-block seq-jobs clearfix">
								<div class="r-seq-item item1 f-left">
									<span class="seq-span"><input type="checkbox" name="jid" value="6819" class="checkbox"><a href="../jobs/6819.html" target="_blank" class="underline">网站编辑</a>
										<img title="紧急招聘" src="../templates/demo11/images/iconji.gif" border="0" class="vtip"><img title="推荐职位" src="../templates/demo11/images/iconjian.gif" border="0" class="vtip"><img title="欢迎应届生投递简历" src="../templates/demo11/images/ying.jpg" border="0" class="vtip"></span>
								</div>
								<div class="r-seq-item item2 f-left"><a href="../c1926.html" target="_blank" class="underline">随州随广文化传媒有限公司<img src="../templates/demo11/images/yan.gif" alt="已验证"><img src="../data/setmealimg/5.gif" border="0" title="年度会员" class="vtip"></a></div>
								<div class="r-seq-item item3 f-left"><span>2000~3000元/月</span></div>
								<div class="r-seq-item item4 f-left">湖北省/随州市</div>
								<div class="r-seq-item item5  pt f-left" style="line-height:50px;">
																			<img src="../templates/demo11/images/stick.gif" alt="" title="置顶职位" style="display: inline-bock;">
</div>
								<a href="javascript:;" class="detail-control f-left"></a>
							</div>
							<div class="resume-more-info clearfix">
								<div class="info-text f-left">
									<p>学历要求：大专 ｜  工作经验：无经验 ｜  职位性质：全职  |  招聘人数：2人 ｜性别要求：不限</p>
									<p></p>
<p>
	1、负责网站日常新闻的发布与撰写；
</p>
<p>
	2、网站内容日常更新，收集信息，编辑信息及相关图片
</p>
<p>
	3、关注互联网行业热点，根据热点采写相关新闻稿，传播行业资讯。
</p>
<p>
	4、会熟练使用平面设计软件，并制作专题。
</p>
<p>
	5、客户日常沟通及维护
</p>
								</div>
								<div class="info-operaing f-right">
									<div><input type="button" value="申请职位" class="invite-btn" id="6819"></div>
									<a href="javascript:;" class="collect" id="6819">收藏</a>
								</div>
							</div>
						</div>
					</div>
					<!-- 职位模式结束 -->
																<!-- 职位模式 -->
					<div class="data-main">
						<div class="resume-item">
							<div class="seq-block seq-jobs clearfix">
								<div class="r-seq-item item1 f-left">
									<span class="seq-span"><input type="checkbox" name="jid" value="7193" class="checkbox"><a href="../jobs/7193.html" target="_blank" class="underline"><span style="color:#bc123a">电商专员</span></a>
										<img title="紧急招聘" src="../templates/demo11/images/iconji.gif" border="0" class="vtip"><img title="推荐职位" src="../templates/demo11/images/iconjian.gif" border="0" class="vtip"><img title="欢迎应届生投递简历" src="../templates/demo11/images/ying.jpg" border="0" class="vtip"></span>
								</div>
								<div class="r-seq-item item2 f-left"><a href="../c1926.html" target="_blank" class="underline">随州随广文化传媒有限公司<img src="../templates/demo11/images/yan.gif" alt="已验证"></a></div>
								<div class="r-seq-item item3 f-left"><span>3000~5000元/月</span></div>
								<div class="r-seq-item item4 f-left">湖北省/随州市</div>
								<div class="r-seq-item item5  pt f-left" style="line-height:50px;">
																			<img src="../templates/demo11/images/stick.gif" alt="" title="置顶职位" style="display: inline-bock;">
</div>
								<a href="javascript:;" class="detail-control f-left"></a>
							</div>
							<div class="resume-more-info clearfix">
								<div class="info-text f-left">
									<p>学历要求：高中 ｜  工作经验：无经验 ｜  职位性质：全职  |  招聘人数：3人 ｜性别要求：不限</p>
									<p></p>
<p>
	<strong>岗位职责：</strong> 
</p>
<p>
	1、配合电商具体项目的落实；
</p>
<p>
	2、现场解答与办理相关客户的电商活动申请资格。
</p>
<p>
	<strong>任职要求：</strong> 
</p>
<p>
	1、大专及以上学历，电子商务及市场营销相关专业优先；
</p>
<p>
	2、一年以上网络营销或房地产、汽车、装饰行业经验，熟悉电商操作流程，了解本地房地产、车市、家装行业市场；
</p>
<p>
	3、具备网络营销策略企划及相应的提案和项目管理能力；
</p>
<p>
	4、熟悉相关行业，能为公司电商活动开发客户。
</p>
								</div>
								<div class="info-operaing f-right">
									<div><input type="button" value="申请职位" class="invite-btn" id="7193"></div>
									<a href="javascript:;" class="collect" id="7193">收藏</a>
								</div>
							</div>
						</div>
					</div>
					<!-- 职位模式结束 -->
																<!-- 职位模式 -->
					<div class="data-main">
						<div class="resume-item">
							<div class="seq-block seq-jobs clearfix">
								<div class="r-seq-item item1 f-left">
									<span class="seq-span"><input type="checkbox" name="jid" value="8266" class="checkbox"><a href="../jobs/8266.html" target="_blank" class="underline">渠道专员</a>
																				<img title="推荐职位" src="../templates/demo11/images/iconjian.gif" border="0" class="vtip"><img title="欢迎应届生投递简历" src="../templates/demo11/images/ying.jpg" border="0" class="vtip"></span>
								</div>
								<div class="r-seq-item item2 f-left"><a href="../c2959.html" target="_blank" class="underline">湖北驭兴信息服务有限公司<img src="../templates/demo11/images/yan.gif" alt="已验证"><img src="../data/setmealimg/5.gif" border="0" title="年度会员" class="vtip"></a></div>
								<div class="r-seq-item item3 f-left"><span>3000~5000元/月</span></div>
								<div class="r-seq-item item4 f-left">湖北省/随州市</div>
								<div class="r-seq-item item5  pt f-left" style="line-height:50px;">
																			<img src="../templates/demo11/images/stick.gif" alt="" title="置顶职位" style="display: inline-bock;">
</div>
								<a href="javascript:;" class="detail-control f-left"></a>
							</div>
							<div class="resume-more-info clearfix">
								<div class="info-text f-left">
									<p>学历要求：中专 ｜  工作经验：无经验 ｜  职位性质：全职  |  招聘人数：5人 ｜性别要求：不限</p>
									<p></p>
<p>
	岗位职责：
</p>
<p>
	1、负责公司产品的销售及推广；
</p>
<p>
	2、根据市场营销计划，完成部门销售指标；
</p>
<p>
	3、开拓新市场,发展新客户,增加产品销售范围；
</p>
<p>
	4、负责辖区市场信息的收集及竞争对手的分析；
</p>
<p>
	5、负责销售区域内销售活动的策划和执行，完成销售任务；
</p>
<p>
	6、管理维护客户关系以及客户间的长期战略合作计划。
</p>
<p>
	岗位要求：
</p>
<p>
	1、负责公司产品的销售及推广；
</p>
<p>
	2、根据市场营销计划，完成部门销售指标；
</p>
<p>
	3、开拓新市场,发展新客户,增加产品销售范围；
</p>
<p>
	4、负责辖区市场信息的收集及竞争对手的分析；
</p>
<p>
	5、负责销售区域内销售活动的策划和执行，完成销售任务；
</p>
<p>
	6、管理维护客户关系以及客户间的长期战略合作计划。
</p>
								</div>
								<div class="info-operaing f-right">
									<div><input type="button" value="申请职位" class="invite-btn" id="8266"></div>
									<a href="javascript:;" class="collect" id="8266">收藏</a>
								</div>
							</div>
						</div>
					</div>
					<!-- 职位模式结束 -->
																<!-- 职位模式 -->
					<div class="data-main">
						<div class="resume-item">
							<div class="seq-block seq-jobs clearfix">
								<div class="r-seq-item item1 f-left">
									<span class="seq-span"><input type="checkbox" name="jid" value="8162" class="checkbox"><a href="../jobs/8162.html" target="_blank" class="underline">置业顾问</a>
										<img title="紧急招聘" src="../templates/demo11/images/iconji.gif" border="0" class="vtip"><img title="推荐职位" src="../templates/demo11/images/iconjian.gif" border="0" class="vtip"><img title="欢迎应届生投递简历" src="../templates/demo11/images/ying.jpg" border="0" class="vtip"></span>
								</div>
								<div class="r-seq-item item2 f-left"><a href="../c2862.html" target="_blank" class="underline">武汉易居投资有限公司<img src="../templates/demo11/images/yan.gif" alt="已验证"><img src="../data/setmealimg/5.gif" border="0" title="年度会员" class="vtip"></a></div>
								<div class="r-seq-item item3 f-left"><span>5000~10000元/月</span></div>
								<div class="r-seq-item item4 f-left">湖北省/随州市</div>
								<div class="r-seq-item item5  pt f-left" style="line-height:50px;">
																			<img src="../templates/demo11/images/stick.gif" alt="" title="置顶职位" style="display: inline-bock;">
</div>
								<a href="javascript:;" class="detail-control f-left"></a>
							</div>
							<div class="resume-more-info clearfix">
								<div class="info-text f-left">
									<p>学历要求：大专 ｜  工作经验：无经验 ｜  职位性质：全职  |  招聘人数：15人 ｜性别要求：不限</p>
									<p>1.大专以上学历（专业不限）；<br>
2.年龄18-35岁，五官端正，形象气质佳，普通话标准；<br>
3.大专以上学历（专业不限）；<br>
4.热爱销售，对房地产行业有浓厚的兴趣，有志于投身行业发展；<br>
5.吃苦耐劳，诚实务实，具备良好的语言表达与沟通能力；<br>
6.具备良好的团队合作精神，能承受较强的工作压力。<br></p>
								</div>
								<div class="info-operaing f-right">
									<div><input type="button" value="申请职位" class="invite-btn" id="8162"></div>
									<a href="javascript:;" class="collect" id="8162">收藏</a>
								</div>
							</div>
						</div>
					</div>
					<!-- 职位模式结束 -->
																<!-- 职位模式 -->
					<div class="data-main">
						<div class="resume-item">
							<div class="seq-block seq-jobs clearfix">
								<div class="r-seq-item item1 f-left">
									<span class="seq-span"><input type="checkbox" name="jid" value="8161" class="checkbox"><a href="../jobs/8161.html" target="_blank" class="underline">拓客专员</a>
										<img title="紧急招聘" src="../templates/demo11/images/iconji.gif" border="0" class="vtip"><img title="推荐职位" src="../templates/demo11/images/iconjian.gif" border="0" class="vtip"><img title="欢迎应届生投递简历" src="../templates/demo11/images/ying.jpg" border="0" class="vtip"></span>
								</div>
								<div class="r-seq-item item2 f-left"><a href="../c2862.html" target="_blank" class="underline">武汉易居投资有限公司<img src="../templates/demo11/images/yan.gif" alt="已验证"><img src="../data/setmealimg/5.gif" border="0" title="年度会员" class="vtip"></a></div>
								<div class="r-seq-item item3 f-left"><span>3000~5000元/月</span></div>
								<div class="r-seq-item item4 f-left">湖北省/随州市</div>
								<div class="r-seq-item item5  pt f-left" style="line-height:50px;">
																			<img src="../templates/demo11/images/stick.gif" alt="" title="置顶职位" style="display: inline-bock;">
</div>
								<a href="javascript:;" class="detail-control f-left"></a>
							</div>
							<div class="resume-more-info clearfix">
								<div class="info-text f-left">
									<p>学历要求：大专 ｜  工作经验：无经验 ｜  职位性质：全职  |  招聘人数：15人 ｜性别要求：不限</p>
									<p>1、22-40岁，大专以上学历；<br>
2、普通话标准，口齿清晰，具备独立的市场及客户资源开拓能力；<br>
3、能力出众者条件面议。<br></p>
								</div>
								<div class="info-operaing f-right">
									<div><input type="button" value="申请职位" class="invite-btn" id="8161"></div>
									<a href="javascript:;" class="collect" id="8161">收藏</a>
								</div>
							</div>
						</div>
					</div>
					<!-- 职位模式结束 -->
																<!-- 职位模式 -->
					<div class="data-main">
						<div class="resume-item">
							<div class="seq-block seq-jobs clearfix">
								<div class="r-seq-item item1 f-left">
									<span class="seq-span"><input type="checkbox" name="jid" value="7680" class="checkbox"><a href="../jobs/7680.html" target="_blank" class="underline">销售代表</a>
										<img title="紧急招聘" src="../templates/demo11/images/iconji.gif" border="0" class="vtip"><img title="推荐职位" src="../templates/demo11/images/iconjian.gif" border="0" class="vtip"><img title="欢迎应届生投递简历" src="../templates/demo11/images/ying.jpg" border="0" class="vtip"></span>
								</div>
								<div class="r-seq-item item2 f-left"><a href="../c2525.html" target="_blank" class="underline">稻花香苦荞酒随州运营中心<img src="../templates/demo11/images/yan.gif" alt="已验证"></a></div>
								<div class="r-seq-item item3 f-left"><span>2000~3000元/月</span></div>
								<div class="r-seq-item item4 f-left">湖北省/随州市</div>
								<div class="r-seq-item item5  pt f-left" style="line-height:50px;">
																			<img src="../templates/demo11/images/stick.gif" alt="" title="置顶职位" style="display: inline-bock;">
</div>
								<a href="javascript:;" class="detail-control f-left"></a>
							</div>
							<div class="resume-more-info clearfix">
								<div class="info-text f-left">
									<p>学历要求：大专 ｜  工作经验：1-3年 ｜  职位性质：全职  |  招聘人数：50人 ｜性别要求：不限</p>
									<p></p>
<p>
	<strong>岗位职责：</strong>
</p>
<p>
	1、负责公司产品的销售及推广； 
</p>
<p>
	2、根据市场营销计划，完成部门销售指标； 
</p>
<p>
	3、开拓新市场,发展新客户,增加产品销售范围； 
</p>
<p>
	4、负责辖区市场信息的收集及竞争对手的分析； 
</p>
<p>
	5、负责销售区域内销售活动的策划和执行，完成销售任务； 
</p>
<p>
	6、管理维护客户关系以及客户间的长期战略合作计划。 
</p>
<p>
	<strong>岗位要求：</strong> 
</p>
<p>
	1、负责公司产品的销售及推广； 
</p>
<p>
	2、根据市场营销计划，完成部门销售指标； 
</p>
<p>
	3、开拓新市场,发展新客户,增加产品销售范围； 
</p>
<p>
	4、负责辖区市场信息的收集及竞争对手的分析； 
</p>
<p>
	5、负责销售区域内销售活动的策划和执行，完成销售任务； 
</p>
<p>
	6、管理维护客户关系以及客户间的长期战略合作计划。
</p>
								</div>
								<div class="info-operaing f-right">
									<div><input type="button" value="申请职位" class="invite-btn" id="7680"></div>
									<a href="javascript:;" class="collect" id="7680">收藏</a>
								</div>
							</div>
						</div>
					</div>
					<!-- 职位模式结束 -->
																<!-- 职位模式 -->
					<div class="data-main">
						<div class="resume-item">
							<div class="seq-block seq-jobs clearfix">
								<div class="r-seq-item item1 f-left">
									<span class="seq-span"><input type="checkbox" name="jid" value="8395" class="checkbox"><a href="../jobs/8395.html" target="_blank" class="underline">文秘</a>
																														<img title="欢迎应届生投递简历" src="../templates/demo11/images/ying.jpg" border="0" class="vtip"></span>
								</div>
								<div class="r-seq-item item2 f-left"><a href="../c2598.html" target="_blank" class="underline">UBTV小主播</a></div>
								<div class="r-seq-item item3 f-left"><span>2000~3000元/月</span></div>
								<div class="r-seq-item item4 f-left">湖北省/随州市</div>
								<div class="r-seq-item item5  f-left" style="line-height:50px;">
																			2018-10-11
																	</div>
								<a href="javascript:;" class="detail-control f-left"></a>
							</div>
							<div class="resume-more-info clearfix">
								<div class="info-text f-left">
									<p>学历要求：大专 ｜  工作经验：1年以下 ｜  职位性质：全职  |  招聘人数：1人 ｜性别要求：女</p>
									<p><span style="color:#333333;font-family:" font-size:16px>一、在主管部门领导下做好办公室日常行政事务及文秘工作。</span><br><span style="color:#333333;font-family:" font-size:16px>二、负责各种文件的起草、装订及传递工作；及时处理上级文件的签收、传递、催办；做好文件的回收、清退、销毁工作；做好文秘档案收集管理及保密工作。</span><br><span style="color:#333333;font-family:" font-size:16px>三、做好各种会议的记录及会务工作。</span><br><span style="color:#333333;font-family:" font-size:16px>四、办理本单位人员的招聘录用、培训教育、绩效考核、晋级晋职、薪资福利、各类保险、</span><a target="_blank" class="baidu-highlight">统计报表</a><span style="color:#333333;font-family:" font-size:16px>等事项的具体事宜。</span><br><span style="color:#333333;font-family:" font-size:16px>五、做好单位印章管理，按规定开具介绍信。</span><br><span style="color:#333333;font-family:" font-size:16px>六、做好来访接待工作。</span><br><span style="color:#333333;font-family:" font-size:16px>七、负责本单位办公用品的采购和供应工作。</span><br><span style="color:#333333;font-family:" font-size:16px>八、完成领导交办的其它任务和各种应急事务的处理</span></p>
								</div>
								<div class="info-operaing f-right">
									<div><input type="button" value="申请职位" class="invite-btn" id="8395"></div>
									<a href="javascript:;" class="collect" id="8395">收藏</a>
								</div>
							</div>
						</div>
					</div>
					<!-- 职位模式结束 -->
																<!-- 职位模式 -->
					<div class="data-main">
						<div class="resume-item">
							<div class="seq-block seq-jobs clearfix">
								<div class="r-seq-item item1 f-left">
									<span class="seq-span"><input type="checkbox" name="jid" value="8003" class="checkbox"><a href="../jobs/8003.html" target="_blank" class="underline">学管老师</a>
																														<img title="欢迎应届生投递简历" src="../templates/demo11/images/ying.jpg" border="0" class="vtip"></span>
								</div>
								<div class="r-seq-item item2 f-left"><a href="../c2770.html" target="_blank" class="underline">中航国铁教育集团湖北分公司</a></div>
								<div class="r-seq-item item3 f-left"><span>2000~3000元/月</span></div>
								<div class="r-seq-item item4 f-left">湖北省/随州市</div>
								<div class="r-seq-item item5  f-left" style="line-height:50px;">
																			2018-10-10
																	</div>
								<a href="javascript:;" class="detail-control f-left"></a>
							</div>
							<div class="resume-more-info clearfix">
								<div class="info-text f-left">
									<p>学历要求：大专 ｜  工作经验：1-3年 ｜  职位性质：全职  |  招聘人数：5人 ｜性别要求：女</p>
									<p>任职要求：<br>
1、学历：大专及以上学历<br>
2、专业：教育类、英语、旅游类专业优先。<br>
3、要求：对教育行业有浓厚兴趣，能够熟练使用办公软件，认真配合上级完成教学工作，责任心强，执行力强，思想端正，爱岗敬业。<br>
薪资待遇：<br>
1、基本工资1500元/月+绩效1500/月+招生奖+年终奖+年底双薪+社保。<br>
2、提供完善培训、拓展、带薪假、旅游、结婚礼物、生日礼物、节假日福利、住宿、寒暑假等。<br>
上升空间：学管部或综合部主任、学管部部长、校区负责人等。<br>
工作地点：随州市随州职业技术学院<br></p>
								</div>
								<div class="info-operaing f-right">
									<div><input type="button" value="申请职位" class="invite-btn" id="8003"></div>
									<a href="javascript:;" class="collect" id="8003">收藏</a>
								</div>
							</div>
						</div>
					</div>
					<!-- 职位模式结束 -->
																<!-- 职位模式 -->
					<div class="data-main">
						<div class="resume-item">
							<div class="seq-block seq-jobs clearfix">
								<div class="r-seq-item item1 f-left">
									<span class="seq-span"><input type="checkbox" name="jid" value="8301" class="checkbox"><a href="../jobs/8301.html" target="_blank" class="underline">校对</a>
																														<img title="欢迎应届生投递简历" src="../templates/demo11/images/ying.jpg" border="0" class="vtip"></span>
								</div>
								<div class="r-seq-item item2 f-left"><a href="../c2979.html" target="_blank" class="underline">湖北天成文化传播有限公司</a></div>
								<div class="r-seq-item item3 f-left"><span>2000~3000元/月</span></div>
								<div class="r-seq-item item4 f-left">湖北省/随州市</div>
								<div class="r-seq-item item5  f-left" style="line-height:50px;">
																			2018-09-12
																	</div>
								<a href="javascript:;" class="detail-control f-left"></a>
							</div>
							<div class="resume-more-info clearfix">
								<div class="info-text f-left">
									<p>学历要求：大专 ｜  工作经验：无经验 ｜  职位性质：全职  |  招聘人数：10人 ｜性别要求：不限</p>
									<p><span style="font-size:14px;****-color:#FFFFFF;color:#696969;font-family:" line-height:28px>此岗位不限工作经验，可招收应届毕业生！</span><br><span style="font-size:14px;****-color:#FFFFFF;color:#696969;font-family:" line-height:28px>工作内容：核对初中稿件是否有误。</span><br><span style="font-size:14px;****-color:#FFFFFF;color:#696969;font-family:" line-height:28px>岗位要求：22―35周岁，学历大专以上，能通做初中文科或理科全科试题。</span><br><span style="font-size:14px;****-color:#FFFFFF;color:#696969;font-family:" line-height:28px>薪资待遇：随州月工资2500―3000元，特别优秀的可在此基础上增加200元/月的特殊津贴。</span><br><span style="font-size:14px;****-color:#FFFFFF;color:#696969;font-family:" line-height:28px>工作时间：每天工作8小时，每周休一天。</span><br><span style="font-size:14px;****-color:#FFFFFF;color:#696969;font-family:" line-height:28px>员工福利：除法定假日外另每年10天带薪年假，工作满一年后有养老保险。</span></p>
								</div>
								<div class="info-operaing f-right">
									<div><input type="button" value="申请职位" class="invite-btn" id="8301"></div>
									<a href="javascript:;" class="collect" id="8301">收藏</a>
								</div>
							</div>
						</div>
					</div>
					<!-- 职位模式结束 -->
													<table align="center" cellspacing="0" cellpadding="0" border="0" class="link_bk"><tbody><tr>
<td align="center" height="50">
						<div class="page">
							<li><a class="">首页</a></li>
<li><a class="">上一页</a></li>
<li><a class="select">1</a></li>
<li><a href="graduate-job-list.php%EF%BC%9Fpage=2">2</a></li>
<li><a href="graduate-job-list.php%EF%BC%9Fpage=3">3</a></li>
<li><a href="graduate-job-list.php%EF%BC%9Fpage=4">4</a></li>
<li><a href="graduate-job-list.php%EF%BC%9Fpage=5">5</a></li>
<li><a href="graduate-job-list.php%EF%BC%9Fpage=6">6</a></li>
<li><a href="graduate-job-list.php%EF%BC%9Fpage=7">7</a></li>
<li><a href="graduate-job-list.php%EF%BC%9Fpage=8">8</a></li>
<li><a href="graduate-job-list.php%EF%BC%9Fpage=9">9</a></li>
<li><a href="graduate-job-list.php%EF%BC%9Fpage=10">10</a></li>
<li><a href="graduate-job-list.php%EF%BC%9Fpage=2">下一页</a></li>
<li><a href="graduate-job-list.php%EF%BC%9Fpage=20">尾页</a></li>
<li class="page_all">1/20页</li>
<div class="clear"></div>
						</div>
					</td>
				</tr></tbody></table>
</div>
	</div>
	
<div class="foot">
	<div class="footer_box">
		<div class="box link_bk">
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
		        	<div class="weixin_con">
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
