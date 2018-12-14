<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>高级职位列表  - 随州人才网</title>
<meta name="description" content="随州人才网招聘岗位">
<meta name="keywords" content="随州人才网,高级职位信息">
<meta name="author" content="随州人才网">
<meta name="copyright" content="0722ren.com">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="../favicon.ico">
<link href="../templates/demo11/css/common.css" rel="stylesheet" type="text/css">
<link href="../templates/tpl_hunter/default/css/hunter.css" rel="stylesheet" type="text/css">
<link href="../templates/tpl_hunter/default/css/ui-dialog.css" rel="stylesheet" type="text/css">
<script src="../templates/demo11/js/jquery.js" type="text/javascript"></script><script src="../data/cache_classify.js" type="text/javascript" charset="utf-8"></script><script src="../templates/tpl_hunter/default/js/jquery.hunter-jobs-search.js" type="text/javascript"></script><script src="../templates/tpl_hunter/default/js/dialog-min.js" type="text/javascript" language="javascript"></script><script src="../templates/tpl_hunter/default/js/dialog-min-common.js" type="text/javascript" language="javascript"></script><script src="../templates/tpl_hunter/default/js/jquery.cookie.js" type="text/javascript"></script><script src="../templates/demo11/js/jquery.autocomplete.js" type="text/javascript"></script><script type="text/javascript">
	$(document).ready(function() {
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
	    // 职位类别填充数据 
	    jobs_filldata("#job_list", QS_hunter_jobs_parent, QS_hunter_jobs, "#result-list-job", "#aui_outer_job", "#job_result_show", "#jobcategory", "/");
		// 所属行业填充数据
		trade_filldata("#trad_list", QS_trade, "#aui_outer", "#result-list-trade", "#trade_result_show", "#trade", "/");
		// 工作地区填充数据
		city_filldata("#city_list", QS_city_parent, QS_city, "#result-list-city", "#aui_outer_city", "#city_result_show", "#citycategory", "/");
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
			    			        <a href="jobs-list.php" target="_self" class="s-nav-item f-left active">高薪职位</a>
			    			        <a href="resume-list.php" target="_self" class="s-nav-item f-left">高级人才</a>
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
					<input type="text" name="key" id="key" value="" style="display:none;"><input name="jobcategory" id="jobcategory" type="hidden" value=""><input name="trade" id="trade" type="hidden" value=""><input name="citycategory" id="citycategory" type="hidden" value=""><input type="hidden" name="wage" id="wage" value=""><input type="hidden" name="age" id="age" value=""><input type="hidden" name="education" id="education" value=""><input type="hidden" name="experience" id="experience" value=""><input type="hidden" name="settr" id="settr" value=""><input type="hidden" name="nature" id="nature" value=""><input type="hidden" name="scale" id="scale" value=""><input type="hidden" name="sort" id="sort" value=""><input type="hidden" name="page" id="page" value="">
</div>
			</div>
			<div class="t-search-btn f-left"><input type="button" detype="QS_hunter_jobslist" id="searcnbtn" value="搜 索"></div>
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
																		<div class="LocalDataMultiC" style="width:623px;">
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
				<div class="fl-type f-left">职位年薪：</div>
				<div class="fl-content r-choice f-left">
															<div class="fl-content-li" type="wage" code="196">面议</div>
										<div class="fl-content-li" type="wage" code="197">10-20万</div>
										<div class="fl-content-li" type="wage" code="198">20-30万</div>
										<div class="fl-content-li" type="wage" code="199">30-50万</div>
										<div class="fl-content-li" type="wage" code="200">50-80万</div>
										<div class="fl-content-li" type="wage" code="201">80-100万</div>
										<div class="fl-content-li" type="wage" code="202">100万以上</div>
									</div>
			</div>
			<div class="filter-list-wrap clearfix">
				<div class="fl-type f-left">年龄要求：</div>
				<div class="fl-content f-left">
															<div class="fl-content-li" type="age" code="203">18-25岁</div>
										<div class="fl-content-li" type="age" code="204">25-30岁</div>
										<div class="fl-content-li" type="age" code="205">30-40岁</div>
										<div class="fl-content-li" type="age" code="206">40-50岁</div>
										<div class="fl-content-li" type="age" code="207">50-60岁</div>
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
			<div class="fr-content f-left rl">
																																	</div>
			<div class="fliter-clear f-right" id="clear_all_selected"><a href="javascript:;" class="clear-link">清空所选</a></div>
		</div>
	</div>
</div>
<!-- 高薪职位 -->
<div class="jobinfolists">
	<div class="tit">
		<div class="sort">
			<span class="job_list_type">排序</span>
			<a href="jobs-list.php%EF%BC%9Fkey=&amp;jobcategory=&amp;education=&amp;citycategory=&amp;experience=&amp;settr=&amp;trade=&amp;wage=&amp;nature=&amp;page=1&amp;sort=rtime" class="slect">更新时间</a>
						<a href="jobs-list.php%EF%BC%9Fkey=&amp;jobcategory=&amp;education=&amp;citycategory=&amp;experience=&amp;settr=&amp;trade=&amp;wage=&amp;nature=&amp;page=1&amp;sort=wage">薪资待遇</a>
			<a href="jobs-list.php%EF%BC%9Fkey=&amp;jobcategory=&amp;education=&amp;citycategory=&amp;experience=&amp;settr=&amp;trade=&amp;wage=&amp;nature=&amp;page=1&amp;sort=hot">热度</a>
					</div>
		<div class="sort">
		</div>
		<div class="pagerow">
			<div class="pageminnav"></div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="infolists" id="infolists">
		<div class="infolists-head clearfix">
			<label class="f-left"><input type="checkbox" name="selectall" id="selectall" class="checkbox">全选</label>
			<div class="all-ctrl f-left"><input type="button" value="申请职位" class="all-down-btn deliver"></div>
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
						<input type="checkbox" name="jid" value="1" id="" class="checkbox"><a href="hunter-jobs-show.php%EF%BC%9Fid=1" target="_blank" class="underline">酷狗网络女主播</a>
																													</div>
					<div class="list-item item2 f-left">仙影传媒随州直播工作室 </div>
					<div class="list-item item3 f-left"><span>面议</span></div>
					<div class="list-item item4 f-left">湖北省</div>
					<div class="list-item item5 f-left">2018-02-02</div>
					<a href="javascript:;" class="list-item-ctrl f-left"></a>
				</div>
				<div class="info-list-detail clearfix">
					<div class="info-text f-left">
						<p>学历要求：不限  |  工作经验：  |  职位性质：全职  |  招聘人数：人  |  性别要求：不限</p>
						<div>岗位职责：工作轻松舒适，待遇稳定丰厚，时间自由安排。拥有展示自己的平台</div>
					</div>
					<div class="info-control f-left">
						<input type="button" value="申请职位" jobs_id="1" class="apply-job-btn app_jobs">
</div>
				</div>
				<div class="clear"></div>
			</div>
			<!-- 职位模式结束 -->
					</div>
		<div class="infolists-head clearfix" style="border-top:1px solid #cccccc;border-bottom:none;">
			<label class="f-left"><input type="checkbox" name="selectall" id="selectall" class="checkbox">全选</label>
			<div class="all-ctrl f-left"><input type="button" value="申请职位" class="all-down-btn deliver"></div>
		</div>
						</div>
</div>
<script src="../templates/tpl_hunter/default/js/jquery.jobs-list.js" type="text/javascript"></script><!-- 高薪职位 End--><div id="footer">
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
