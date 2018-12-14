<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>校园招聘-简历搜索列表</title>
<link rel="shortcut icon" href="../favicon.ico">
<meta name="author" content="随州人才网">
<meta name="copyright" content="0722ren.com">
<link rel="stylesheet" href="../templates/tpl_campus/default/css/school.css">
<link rel="stylesheet" href="../templates/tpl_campus/default/css/ui-dialog.css">
<script src="../templates/tpl_campus/default/js/jquery.js"></script><script src="../templates/tpl_campus/default/js/jquery.resume-list.js" type="text/javascript"></script><script src="../templates/tpl_campus/default/js/dialog-min.js" type="text/javascript"></script><script src="../templates/tpl_campus/default/js/jquery.graduate-resume-search.js" type="text/javascript"></script><script src="../templates/tpl_campus/default/js/jquery.autocomplete.js" type="text/javascript"></script><script src="../data/cache_classify.js" type="text/javascript" charset="utf-8"></script><script>
	$(document).ready(function() {
		$('.filter-item:last').css({'margin-right':0});
		$('.data-main .resume-item:odd').css({'background-color':'#f8f8f8'});
		$('.collect').on('click', function(){
			$(this).toggleClass('hascollect');
		})
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
		//详细显示模式
		$("#detail").click(function(){
			$(this).addClass('select').siblings('#list').removeClass('select');
			$('.detail-control').addClass("ishow");
			$(".resume-more-info").show();
		});
		//列表显示模式
		$("#list").click(function(){
			$(this).addClass('select').siblings('#detail').removeClass('select');
			$('.detail-control').removeClass("ishow");
			$(".resume-more-info").hide();
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
		favorites("/");
		//邀请面试
         $(".invited").die().live("click",function(){
         	var id=$(this).attr("id");
			var tsTimeStamp= new Date().getTime();
            var user_utype = "";
	        if(user_utype=='3')
	        {
	            var url="/user/user_hunter_invited.php?id="+id+"&act=invited&t="+tsTimeStamp;  
	        }
	        else 
	        {
	            var url="/user/user_invited.php?id="+id+"&act=invited&t="+tsTimeStamp;  
	        }
	        var myDialog = dialog();
			jQuery.ajax({
			    url: url,
			    success: function (data) {
			        myDialog.content(data);
			        myDialog.title('邀请面试');
			        myDialog.width('500');
			    	myDialog.showModal();
			    }
			});
         }); 
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
								<a href="graduate-job-list.php" target="_self" class="s-nav-item f-left ">应届生职位</a>
								<a href="graduate-resume-list.php" target="_self" class="s-nav-item f-left  active">应届生简历</a>
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
					<input type="text" name="key" id="key" value="" style="display:none;"><input name="jobcategory" id="jobcategory" type="hidden" value=""><input name="trade" id="trade" type="hidden" value=""><input name="citycategory" id="citycategory" type="hidden" value=""><input name="major" id="major" type="hidden" value=""><input name="experience" id="experience" type="hidden" value=""><input name="resumetag" id="resumetag" type="hidden" value=""><input name="education" id="education" type="hidden" value=""><input name="sex" id="sex" type="hidden" value=""><input name="photo" id="photo" type="hidden" value=""><input name="talent" id="talent" type="hidden" value=""><input name="settr" id="settr" type="hidden" value="">
</div>
			</div>
			<div class="t-search-btn f-left"><input type="button" detype="QS_graduateresume" id="searcnbtn" value="找应届生简历"></div>
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
					<a href="graduate-resume-list.php%EF%BC%9Fkey=&amp;jobcategory=&amp;education=&amp;citycategory=&amp;experience=&amp;settr=&amp;trade=&amp;wage=&amp;photo=&amp;tag=&amp;talent=&amp;sex=&amp;page=1&amp;sort=rtime" class="seq-item time selected">更新时间</a>
				</div>
				<div class="small-page f-right">
					<div class="pageminnav">
<li><a class=""></a></li>
<li>
<b style="color:#ff9900">1</b>/4页</li>
<li><a href="graduate-resume-list.php%EF%BC%9Fpage=2">&gt;</a></li>
<div class="clear"></div>
</div>
				</div>
			</div>
			<div class="data-control clearfix">
				<label class="f-left check-all"><input type="checkbox" name="selectall" id="selectall" class="checkbox">全选</label>
				<a href="javascript:;" class="all-opera f-left allfavorites">收藏简历</a>
				<div class="list-model f-right">
					<a id="list" href="javascript:;" class="f-left model-item list select">列表</a>
					<a id="detail" href="javascript:;" class="f-left model-item detail">详细</a>
				</div>
			</div>
			<div class="data-type clearfix resumes">
				<div class="f-left type-item item1">姓名</div>
				<div class="f-left type-item item2">性别</div>
				<div class="f-left type-item item3">年龄</div>
				<div class="f-left type-item item4">学历</div>
				<div class="f-left type-item item5">工作经验</div>
				<div class="f-left type-item item6">意向地区</div>
				<div class="f-left type-item item7">期望职位</div>
				<div class="f-left type-item item8">更新时间</div>
			</div>
									<div class="data-main">
				<div class="resume-item">
					<div class="seq-block clearfix">
						<div class="r-seq-item item1 f-left"><span class="seq-span"><input type="checkbox" name="jid" value="7974" class="checkbox"><a href="../resume/7974.html" target="_blank" class="underline">N0007974</a> </span></div>
						<div class="r-seq-item item2 f-left">女</div>
						<div class="r-seq-item item3 f-left">21岁</div>
						<div class="r-seq-item item4 f-left">本科</div>
						<div class="r-seq-item item5 f-left">应届生</div>
						<div class="r-seq-item item6 f-left">随州市,武汉市</div>
						<div class="r-seq-item item7 f-left" style="font-family:微软雅黑;">小学教师,财务/审计/税务,中学教师</div>
						<div class="r-seq-item item8 f-left">2018-10-11</div>
						<a href="javascript:;" class="detail-control f-left"></a>
					</div>
					<div class="resume-more-info clearfix">
						<div class="info-text f-left">
							<p>专业：工商管理类 | 期望工作性质：全职 | 目前求职状态：应届毕业生</p>
							<div>期望从事行业：会计/审计,教育/培训 | 期望薪资：3000~5000元/月</div>
						</div>
						<div class="info-operaing f-right">
							<div><input id="7974" type="button" value="邀请面试" class="invite-btn invited"></div>
							<a href="javascript:;" class="collect add_favorites" id="7974">收藏</a>
						</div>
					</div>
				</div>
			</div>
						<div class="data-main">
				<div class="resume-item">
					<div class="seq-block clearfix">
						<div class="r-seq-item item1 f-left"><span class="seq-span"><input type="checkbox" name="jid" value="7891" class="checkbox"><a href="../resume/7891.html" target="_blank" class="underline">江霞</a> </span></div>
						<div class="r-seq-item item2 f-left">女</div>
						<div class="r-seq-item item3 f-left">20岁</div>
						<div class="r-seq-item item4 f-left">本科</div>
						<div class="r-seq-item item5 f-left">应届生</div>
						<div class="r-seq-item item6 f-left">保定市</div>
						<div class="r-seq-item item7 f-left" style="font-family:微软雅黑;">行政专员/助理,行政经理/主管</div>
						<div class="r-seq-item item8 f-left">2018-08-27</div>
						<a href="javascript:;" class="detail-control f-left"></a>
					</div>
					<div class="resume-more-info clearfix">
						<div class="info-text f-left">
							<p>专业：工商管理类 | 期望工作性质：全职 | 目前求职状态：应届毕业生</p>
							<div>期望从事行业：电子/半导体/集成电路,医疗设备/器械 | 期望薪资：5000~10000元/月</div>
						</div>
						<div class="info-operaing f-right">
							<div><input id="7891" type="button" value="邀请面试" class="invite-btn invited"></div>
							<a href="javascript:;" class="collect add_favorites" id="7891">收藏</a>
						</div>
					</div>
				</div>
			</div>
						<div class="data-main">
				<div class="resume-item">
					<div class="seq-block clearfix">
						<div class="r-seq-item item1 f-left"><span class="seq-span"><input type="checkbox" name="jid" value="7854" class="checkbox"><a href="../resume/7854.html" target="_blank" class="underline">张星</a> </span></div>
						<div class="r-seq-item item2 f-left">男</div>
						<div class="r-seq-item item3 f-left">20岁</div>
						<div class="r-seq-item item4 f-left">本科</div>
						<div class="r-seq-item item5 f-left">应届生</div>
						<div class="r-seq-item item6 f-left">宜昌市,荆门市</div>
						<div class="r-seq-item item7 f-left" style="font-family:微软雅黑;">人力资源主管</div>
						<div class="r-seq-item item8 f-left">2018-08-06</div>
						<a href="javascript:;" class="detail-control f-left"></a>
					</div>
					<div class="resume-more-info clearfix">
						<div class="info-text f-left">
							<p>专业： | 期望工作性质：全职 | 目前求职状态：应届毕业生</p>
							<div>期望从事行业：家具/家电/工艺品/玩具 | 期望薪资：5000~10000元/月</div>
						</div>
						<div class="info-operaing f-right">
							<div><input id="7854" type="button" value="邀请面试" class="invite-btn invited"></div>
							<a href="javascript:;" class="collect add_favorites" id="7854">收藏</a>
						</div>
					</div>
				</div>
			</div>
						<div class="data-main">
				<div class="resume-item">
					<div class="seq-block clearfix">
						<div class="r-seq-item item1 f-left"><span class="seq-span"><input type="checkbox" name="jid" value="7831" class="checkbox"><a href="../resume/7831.html" target="_blank" class="underline">宋明</a> </span></div>
						<div class="r-seq-item item2 f-left">男</div>
						<div class="r-seq-item item3 f-left">20岁</div>
						<div class="r-seq-item item4 f-left">本科</div>
						<div class="r-seq-item item5 f-left">应届生</div>
						<div class="r-seq-item item6 f-left">武汉市,宜昌市,荆门市</div>
						<div class="r-seq-item item7 f-left" style="font-family:微软雅黑;">部门经理</div>
						<div class="r-seq-item item8 f-left">2018-07-31</div>
						<a href="javascript:;" class="detail-control f-left"></a>
					</div>
					<div class="resume-more-info clearfix">
						<div class="info-text f-left">
							<p>专业： | 期望工作性质：全职 | 目前求职状态：应届毕业生</p>
							<div>期望从事行业：电子/半导体/集成电路,仪器仪表/工业自动化 | 期望薪资：5000~10000元/月</div>
						</div>
						<div class="info-operaing f-right">
							<div><input id="7831" type="button" value="邀请面试" class="invite-btn invited"></div>
							<a href="javascript:;" class="collect add_favorites" id="7831">收藏</a>
						</div>
					</div>
				</div>
			</div>
						<div class="data-main">
				<div class="resume-item">
					<div class="seq-block clearfix">
						<div class="r-seq-item item1 f-left"><span class="seq-span"><input type="checkbox" name="jid" value="7776" class="checkbox"><a href="../resume/7776.html" target="_blank" class="underline">凤女士</a> </span></div>
						<div class="r-seq-item item2 f-left">女</div>
						<div class="r-seq-item item3 f-left">18岁</div>
						<div class="r-seq-item item4 f-left">高中</div>
						<div class="r-seq-item item5 f-left">应届生</div>
						<div class="r-seq-item item6 f-left">随州市</div>
						<div class="r-seq-item item7 f-left" style="font-family:微软雅黑;">客房服务员,导游/旅行顾问,业务员/销售代表</div>
						<div class="r-seq-item item8 f-left">2018-07-17</div>
						<a href="javascript:;" class="detail-control f-left"></a>
					</div>
					<div class="resume-more-info clearfix">
						<div class="info-text f-left">
							<p>专业：中国语言文学类 | 期望工作性质：全职 | 目前求职状态：应届毕业生</p>
							<div>期望从事行业：网络游戏,餐饮/娱乐/休闲,酒店/旅游 | 期望薪资：3000~5000元/月</div>
						</div>
						<div class="info-operaing f-right">
							<div><input id="7776" type="button" value="邀请面试" class="invite-btn invited"></div>
							<a href="javascript:;" class="collect add_favorites" id="7776">收藏</a>
						</div>
					</div>
				</div>
			</div>
						<div class="data-main">
				<div class="resume-item">
					<div class="seq-block clearfix">
						<div class="r-seq-item item1 f-left"><span class="seq-span"><input type="checkbox" name="jid" value="7742" class="checkbox"><a href="../resume/7742.html" target="_blank" class="underline">褚荃</a> </span></div>
						<div class="r-seq-item item2 f-left">女</div>
						<div class="r-seq-item item3 f-left">23岁</div>
						<div class="r-seq-item item4 f-left">本科</div>
						<div class="r-seq-item item5 f-left">应届生</div>
						<div class="r-seq-item item6 f-left">武汉市,随州市</div>
						<div class="r-seq-item item7 f-left" style="font-family:微软雅黑;">会计,出纳,财务分析</div>
						<div class="r-seq-item item8 f-left">2018-07-13</div>
						<a href="javascript:;" class="detail-control f-left"></a>
					</div>
					<div class="resume-more-info clearfix">
						<div class="info-text f-left">
							<p>专业：工商管理类 | 期望工作性质：全职 | 目前求职状态：应届毕业生</p>
							<div>期望从事行业：制药/生物工程,医疗/美容/保健/卫生,房地产开发 | 期望薪资：2000~3000元/月</div>
						</div>
						<div class="info-operaing f-right">
							<div><input id="7742" type="button" value="邀请面试" class="invite-btn invited"></div>
							<a href="javascript:;" class="collect add_favorites" id="7742">收藏</a>
						</div>
					</div>
				</div>
			</div>
						<div class="data-main">
				<div class="resume-item">
					<div class="seq-block clearfix">
						<div class="r-seq-item item1 f-left"><span class="seq-span"><input type="checkbox" name="jid" value="7679" class="checkbox"><a href="../resume/7679.html" target="_blank" class="underline">张女士</a> </span></div>
						<div class="r-seq-item item2 f-left">女</div>
						<div class="r-seq-item item3 f-left">23岁</div>
						<div class="r-seq-item item4 f-left">本科</div>
						<div class="r-seq-item item5 f-left">应届生</div>
						<div class="r-seq-item item6 f-left">随州市</div>
						<div class="r-seq-item item7 f-left" style="font-family:微软雅黑;">小学教师,文员</div>
						<div class="r-seq-item item8 f-left">2018-07-02</div>
						<a href="javascript:;" class="detail-control f-left"></a>
					</div>
					<div class="resume-more-info clearfix">
						<div class="info-text f-left">
							<p>专业：经济学类 | 期望工作性质：全职 | 目前求职状态：应届毕业生</p>
							<div>期望从事行业：教育/培训,政府部门/事业单位 | 期望薪资：2000~3000元/月</div>
						</div>
						<div class="info-operaing f-right">
							<div><input id="7679" type="button" value="邀请面试" class="invite-btn invited"></div>
							<a href="javascript:;" class="collect add_favorites" id="7679">收藏</a>
						</div>
					</div>
				</div>
			</div>
						<div class="data-main">
				<div class="resume-item">
					<div class="seq-block clearfix">
						<div class="r-seq-item item1 f-left"><span class="seq-span"><input type="checkbox" name="jid" value="7643" class="checkbox"><a href="../resume/7643.html" target="_blank" class="underline">陈霜</a> </span></div>
						<div class="r-seq-item item2 f-left">女</div>
						<div class="r-seq-item item3 f-left">21岁</div>
						<div class="r-seq-item item4 f-left">大专</div>
						<div class="r-seq-item item5 f-left">应届生</div>
						<div class="r-seq-item item6 f-left">随州市</div>
						<div class="r-seq-item item7 f-left" style="font-family:微软雅黑;">人力资源专员,文员</div>
						<div class="r-seq-item item8 f-left">2018-06-25</div>
						<a href="javascript:;" class="detail-control f-left"></a>
					</div>
					<div class="resume-more-info clearfix">
						<div class="info-text f-left">
							<p>专业：临床医学与医学技术类 | 期望工作性质：全职 | 目前求职状态：应届毕业生</p>
							<div>期望从事行业：互联网/电子商务,政府部门/事业单位,其他行业 | 期望薪资：2000~3000元/月</div>
						</div>
						<div class="info-operaing f-right">
							<div><input id="7643" type="button" value="邀请面试" class="invite-btn invited"></div>
							<a href="javascript:;" class="collect add_favorites" id="7643">收藏</a>
						</div>
					</div>
				</div>
			</div>
						<div class="data-main">
				<div class="resume-item">
					<div class="seq-block clearfix">
						<div class="r-seq-item item1 f-left"><span class="seq-span"><input type="checkbox" name="jid" value="7634" class="checkbox"><a href="../resume/7634.html" target="_blank" class="underline">钱学林</a> </span></div>
						<div class="r-seq-item item2 f-left">男</div>
						<div class="r-seq-item item3 f-left">18岁</div>
						<div class="r-seq-item item4 f-left">高中</div>
						<div class="r-seq-item item5 f-left">应届生</div>
						<div class="r-seq-item item6 f-left">随州市</div>
						<div class="r-seq-item item7 f-left" style="font-family:微软雅黑;">其他</div>
						<div class="r-seq-item item8 f-left">2018-06-24</div>
						<a href="javascript:;" class="detail-control f-left"></a>
					</div>
					<div class="resume-more-info clearfix">
						<div class="info-text f-left">
							<p>专业： | 期望工作性质：兼职 | 目前求职状态：应届毕业生</p>
							<div>期望从事行业：其他行业 | 期望薪资：1000~1500元/月</div>
						</div>
						<div class="info-operaing f-right">
							<div><input id="7634" type="button" value="邀请面试" class="invite-btn invited"></div>
							<a href="javascript:;" class="collect add_favorites" id="7634">收藏</a>
						</div>
					</div>
				</div>
			</div>
						<div class="data-main">
				<div class="resume-item">
					<div class="seq-block clearfix">
						<div class="r-seq-item item1 f-left"><span class="seq-span"><input type="checkbox" name="jid" value="7631" class="checkbox"><a href="../resume/7631.html" target="_blank" class="underline">刘超</a> </span></div>
						<div class="r-seq-item item2 f-left">男</div>
						<div class="r-seq-item item3 f-left">30岁</div>
						<div class="r-seq-item item4 f-left">高中</div>
						<div class="r-seq-item item5 f-left">应届生</div>
						<div class="r-seq-item item6 f-left">随州市,孝感市,武汉市</div>
						<div class="r-seq-item item7 f-left" style="font-family:微软雅黑;">速递员,客运/货车/班车司机</div>
						<div class="r-seq-item item8 f-left">2018-06-24</div>
						<a href="javascript:;" class="detail-control f-left"></a>
					</div>
					<div class="resume-more-info clearfix">
						<div class="info-text f-left">
							<p>专业： | 期望工作性质：全职 | 目前求职状态：应届毕业生</p>
							<div>期望从事行业：交通/运输/物流 | 期望薪资：3000~5000元/月</div>
						</div>
						<div class="info-operaing f-right">
							<div><input id="7631" type="button" value="邀请面试" class="invite-btn invited"></div>
							<a href="javascript:;" class="collect add_favorites" id="7631">收藏</a>
						</div>
					</div>
				</div>
			</div>
									<table align="center" cellspacing="0" cellpadding="0" border="0" class="link_bk"><tbody><tr>
<td align="center" height="50">
			<div class="page">
				<li><a class="">首页</a></li>
<li><a class="">上一页</a></li>
<li><a class="select">1</a></li>
<li><a href="graduate-resume-list.php%EF%BC%9Fpage=2">2</a></li>
<li><a href="graduate-resume-list.php%EF%BC%9Fpage=3">3</a></li>
<li><a href="graduate-resume-list.php%EF%BC%9Fpage=4">4</a></li>
<li><a href="graduate-resume-list.php%EF%BC%9Fpage=2">下一页</a></li>
<li><a href="graduate-resume-list.php%EF%BC%9Fpage=4">尾页</a></li>
<li class="page_all">1/4页</li>
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
