<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>黄页  - 随州人才网</title>
<meta name="description" content="随州人才网 - 黄页">
<meta name="keywords" content="随州人才网,黄页">
<meta name="author" content="随州人才网">
<meta name="copyright" content="0722ren.com">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="../favicon.ico">
<link href="../templates/demo11/css/common.css" rel="stylesheet" type="text/css">
<link href="../templates/demo11/css/company.css" rel="stylesheet" type="text/css">
<link href="../templates/demo11/css/jobs.css" rel="stylesheet" type="text/css">
<script src="../templates/demo11/js/jquery.js" type="text/javascript" language="javascript"></script><script src="../data/cache_classify.js" type="text/javascript" charset="utf-8"></script><script src="../templates/demo11/js/jquery.company-search.js" type="text/javascript"></script><script src="../templates/demo11/js/jquery.autocomplete.js" type="text/javascript"></script><script type="text/javascript">
	$(document).ready(function() {
		allaround("/");
		// 所属行业填充数据
		trade_filldata("#trad_list", QS_trade, "#aui_outer", "#result-list-trade", "#trade_result_show", "#trade", "/");
		// 工作地区填充数据
		city_filldata("#city_list", QS_city_parent, QS_city, "#result-list-city", "#aui_outer_city", "#city_result_show", "#citycategory", "/");
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
								<li><a href="../resume/resume-list.php" target="_self">聘人才</a></li>
								<li><a href="../simple/simple-list.php" target="_self">微招聘</a></li>
								<li><a href="../hrtools/index.php" target="_self">HR工具箱</a></li>
								<li class="active"><a href="index.php" target="_self">企业黄页</a></li>
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
	当前位置：<a href="../index.html">首页</a>&gt;黄页
</div>
<div class="container">
	<div id="filterSearch">
		<div class="top-search clearfix">
			<div class="t-search-box f-left">
				<div class="type-input-box f-left" id="hidden_input_box">
					<div class="key">请输入关键字</div>
					<input type="text" name="key" id="key" value="" style="display:none;"><input name="trade" id="trade" type="hidden" value=""><input name="citycategory" id="citycategory" type="hidden" value=""><input name="nature" id="nature" type="hidden" value=""><input type="hidden" name="scale" id="scale" value=""><input type="hidden" name="page" id="page" value="">
</div>
			</div>
			<div class="t-search-btn f-left"><input type="button" detype="QS_companylist" id="searcnbtn" value="搜 索"></div>
		</div>
		<div class="fliter-wrap">
			<div class="filter-drop clearfix">
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
			</div>
			<div class="filter-list-wrap clearfix">
				<div class="fl-type f-left">公司性质：</div>
				<div class="fl-content r-choice f-left">
															<div class="fl-content-li" type="nature" code="46">国企</div>
										<div class="fl-content-li" type="nature" code="47">民营</div>
										<div class="fl-content-li" type="nature" code="48">合资</div>
										<div class="fl-content-li" type="nature" code="49">外商独资</div>
										<div class="fl-content-li" type="nature" code="50">股份制企业</div>
										<div class="fl-content-li" type="nature" code="51">上市公司</div>
										<div class="fl-content-li" type="nature" code="52">国家机关</div>
										<div class="fl-content-li" type="nature" code="53">事业单位</div>
										<div class="fl-content-li" type="nature" code="54">其它</div>
									</div>
			</div>
			<div class="filter-list-wrap clearfix">
				<div class="fl-type f-left">公司规模：</div>
				<div class="fl-content f-left">
															<div class="fl-content-li" type="scale" code="80">20人以下</div>
										<div class="fl-content-li" type="scale" code="81">20-99人</div>
										<div class="fl-content-li" type="scale" code="82">100-499人</div>
										<div class="fl-content-li" type="scale" code="83">500-999人</div>
										<div class="fl-content-li" type="scale" code="84">1000-9999人</div>
										<div class="fl-content-li" type="scale" code="85">10000人以上</div>
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
	<div class="left_area link_bk">
		<ul>
<li class="com_box active">
				<div class="logo_box"><img src="../data/logo/no_logo.gif" width="250" height="85"></div>
				<div class="com_info">
					<h6><a href="../c3077.html" target="_blank">车来运转</a></h6>
										<div class="clear"></div>
					<p class="w150">行业：汽车/摩托车/零配件</p>
					<p class="w150">地区：随州市</p>
					<p class="com_i_last">性质：民营</p>
					<div class="clear"></div>
					<ul>
<li>
							<a company_id="3077" href="javascript:void(0);">职位（0）</a>
						</li>
						<li><a company_id="3077" href="javascript:void(0);">评论（0）</a></li>
					</ul>
</div>
				<div class="clear"></div>
				<div class="y_job_list" style="display:none;">
					<ul></ul>
</div>
				<!-- 评论 -->
				<div class="y_comment_list comments" style="display:none;">
					<ul></ul>
</div>
			</li>
						<li class="com_box active">
				<div class="logo_box"><img src="../data/logo/no_logo.gif" width="250" height="85"></div>
				<div class="com_info">
					<h6><a href="../c3076.html" target="_blank">吴宗华康复中心</a></h6>
										<div class="clear"></div>
					<p class="w150">行业：医疗/美容/保健/卫生</p>
					<p class="w150">地区：随州市</p>
					<p class="com_i_last">性质：民营</p>
					<div class="clear"></div>
					<ul>
<li>
							<a company_id="3076" href="javascript:void(0);" class="showjobs">职位（1）</a>
						</li>
						<li><a company_id="3076" href="javascript:void(0);">评论（0）</a></li>
					</ul>
</div>
				<div class="clear"></div>
				<div class="y_job_list" style="display:none;">
					<ul></ul>
</div>
				<!-- 评论 -->
				<div class="y_comment_list comments" style="display:none;">
					<ul></ul>
</div>
			</li>
						<li class="com_box active">
				<div class="logo_box"><img src="../data/logo/no_logo.gif" width="250" height="85"></div>
				<div class="com_info">
					<h6><a href="../c3075.html" target="_blank">耀兴大海（食品）随州有限公司</a></h6>
										<div class="clear"></div>
					<p class="w150">行业：</p>
					<p class="w150">地区：</p>
					<p class="com_i_last">性质：</p>
					<div class="clear"></div>
					<ul>
<li>
							<a company_id="3075" href="javascript:void(0);">职位（0）</a>
						</li>
						<li><a company_id="3075" href="javascript:void(0);">评论（0）</a></li>
					</ul>
</div>
				<div class="clear"></div>
				<div class="y_job_list" style="display:none;">
					<ul></ul>
</div>
				<!-- 评论 -->
				<div class="y_comment_list comments" style="display:none;">
					<ul></ul>
</div>
			</li>
						<li class="com_box active">
				<div class="logo_box"><img src="../data/logo/no_logo.gif" width="250" height="85"></div>
				<div class="com_info">
					<h6><a href="../c3074.html" target="_blank">天津恒泰丰建筑工程有限公司</a></h6>
										<div class="clear"></div>
					<p class="w150">行业：建筑与工程</p>
					<p class="w150">地区：南开区</p>
					<p class="com_i_last">性质：民营</p>
					<div class="clear"></div>
					<ul>
<li>
							<a company_id="3074" href="javascript:void(0);">职位（0）</a>
						</li>
						<li><a company_id="3074" href="javascript:void(0);">评论（0）</a></li>
					</ul>
</div>
				<div class="clear"></div>
				<div class="y_job_list" style="display:none;">
					<ul></ul>
</div>
				<!-- 评论 -->
				<div class="y_comment_list comments" style="display:none;">
					<ul></ul>
</div>
			</li>
						<li class="com_box active">
				<div class="logo_box"><img src="../data/logo/no_logo.gif" width="250" height="85"></div>
				<div class="com_info">
					<h6><a href="../c3073.html" target="_blank">武汉永怡纸业有限公司</a></h6>
										<div class="clear"></div>
					<p class="w150">行业：印刷/包装/造纸</p>
					<p class="w150">地区：湖北省/武汉市</p>
					<p class="com_i_last">性质：民营</p>
					<div class="clear"></div>
					<ul>
<li>
							<a company_id="3073" href="javascript:void(0);" class="showjobs">职位（4）</a>
						</li>
						<li><a company_id="3073" href="javascript:void(0);">评论（0）</a></li>
					</ul>
</div>
				<div class="clear"></div>
				<div class="y_job_list" style="display:none;">
					<ul></ul>
</div>
				<!-- 评论 -->
				<div class="y_comment_list comments" style="display:none;">
					<ul></ul>
</div>
			</li>
						<li class="com_box active">
				<div class="logo_box"><img src="../data/logo/no_logo.gif" width="250" height="85"></div>
				<div class="com_info">
					<h6><a href="../c3072.html" target="_blank">随县双河石业有限公司</a></h6>
										<div class="clear"></div>
					<p class="w150">行业：能源(采掘/冶炼/原材料)</p>
					<p class="w150">地区：湖北省/随州市</p>
					<p class="com_i_last">性质：民营</p>
					<div class="clear"></div>
					<ul>
<li>
							<a company_id="3072" href="javascript:void(0);" class="showjobs">职位（1）</a>
						</li>
						<li><a company_id="3072" href="javascript:void(0);">评论（0）</a></li>
					</ul>
</div>
				<div class="clear"></div>
				<div class="y_job_list" style="display:none;">
					<ul></ul>
</div>
				<!-- 评论 -->
				<div class="y_comment_list comments" style="display:none;">
					<ul></ul>
</div>
			</li>
						<li class="com_box active">
				<div class="logo_box"><img src="../data/logo/no_logo.gif" width="250" height="85"></div>
				<div class="com_info">
					<h6><a href="../c3071.html" target="_blank">北京中泽道有限公司</a></h6>
										<div class="clear"></div>
					<p class="w150">行业：</p>
					<p class="w150">地区：</p>
					<p class="com_i_last">性质：</p>
					<div class="clear"></div>
					<ul>
<li>
							<a company_id="3071" href="javascript:void(0);">职位（0）</a>
						</li>
						<li><a company_id="3071" href="javascript:void(0);">评论（0）</a></li>
					</ul>
</div>
				<div class="clear"></div>
				<div class="y_job_list" style="display:none;">
					<ul></ul>
</div>
				<!-- 评论 -->
				<div class="y_comment_list comments" style="display:none;">
					<ul></ul>
</div>
			</li>
						<li class="com_box active">
				<div class="logo_box"><img src="../data/logo/no_logo.gif" width="250" height="85"></div>
				<div class="com_info">
					<h6><a href="../c3070.html" target="_blank">梦创文化传媒</a></h6>
										<div class="clear"></div>
					<p class="w150">行业：</p>
					<p class="w150">地区：</p>
					<p class="com_i_last">性质：</p>
					<div class="clear"></div>
					<ul>
<li>
							<a company_id="3070" href="javascript:void(0);">职位（0）</a>
						</li>
						<li><a company_id="3070" href="javascript:void(0);">评论（0）</a></li>
					</ul>
</div>
				<div class="clear"></div>
				<div class="y_job_list" style="display:none;">
					<ul></ul>
</div>
				<!-- 评论 -->
				<div class="y_comment_list comments" style="display:none;">
					<ul></ul>
</div>
			</li>
						<li class="com_box active">
				<div class="logo_box"><img src="../data/logo/no_logo.gif" width="250" height="85"></div>
				<div class="com_info">
					<h6><a href="../c3069.html" target="_blank">杭州华顺人力资源管理有限公司孝感分公司</a></h6>
										<div class="clear"></div>
					<p class="w150">行业：电子/半导体/集成电路</p>
					<p class="w150">地区：湖北省/孝感市</p>
					<p class="com_i_last">性质：民营</p>
					<div class="clear"></div>
					<ul>
<li>
							<a company_id="3069" href="javascript:void(0);">职位（0）</a>
						</li>
						<li><a company_id="3069" href="javascript:void(0);">评论（0）</a></li>
					</ul>
</div>
				<div class="clear"></div>
				<div class="y_job_list" style="display:none;">
					<ul></ul>
</div>
				<!-- 评论 -->
				<div class="y_comment_list comments" style="display:none;">
					<ul></ul>
</div>
			</li>
						<li class="com_box active">
				<div class="logo_box"><img src="../data/logo/2018/09/10/12762.jpg" width="250" height="85"></div>
				<div class="com_info">
					<h6><a href="../c3068.html" target="_blank">程力专用汽车股份有限公司市场三部</a></h6>
					<span class="yan"></span>					<div class="clear"></div>
					<p class="w150">行业：汽车/摩托车/零配件</p>
					<p class="w150">地区：湖北省/随州市</p>
					<p class="com_i_last">性质：民营</p>
					<div class="clear"></div>
					<ul>
<li>
							<a company_id="3068" href="javascript:void(0);" class="showjobs">职位（1）</a>
						</li>
						<li><a company_id="3068" href="javascript:void(0);">评论（0）</a></li>
					</ul>
</div>
				<div class="clear"></div>
				<div class="y_job_list" style="display:none;">
					<ul></ul>
</div>
				<!-- 评论 -->
				<div class="y_comment_list comments" style="display:none;">
					<ul></ul>
</div>
			</li>
												<table border="0" align="center" cellpadding="0" cellspacing="0" class="link_bk"><tr>
<td height="50" align="center"> <div class="page link_bk">
<li><a class="">首页</a></li>
<li><a class="">上一页</a></li>
<li><a class="select">1</a></li>
<li><a href="index.php%EF%BC%9Fpage=2">2</a></li>
<li><a href="index.php%EF%BC%9Fpage=3">3</a></li>
<li><a href="index.php%EF%BC%9Fpage=4">4</a></li>
<li><a href="index.php%EF%BC%9Fpage=5">5</a></li>
<li><a href="index.php%EF%BC%9Fpage=6">6</a></li>
<li><a href="index.php%EF%BC%9Fpage=7">7</a></li>
<li><a href="index.php%EF%BC%9Fpage=8">8</a></li>
<li><a href="index.php%EF%BC%9Fpage=9">9</a></li>
<li><a href="index.php%EF%BC%9Fpage=10">10</a></li>
<li><a href="index.php%EF%BC%9Fpage=2">下一页</a></li>
<li><a href="index.php%EF%BC%9Fpage=68">尾页</a></li>
<li class="page_all">1/68页</li>
<div class="clear"></div>
</div>
</td>
			          	</tr></table>
</ul>
<script type="text/javascript">
			$(".left_area .com_box").last().css("border-bottom","0px");
			$(".showjobs").click(function(){
				var y_job_list = $(this).parents(".com_box").find(".y_job_list");
				$(".y_comment_list").hide();
				$(".showcomment").removeClass("select");
				if(y_job_list.css("display")=='none'){
					$(".showjobs").removeClass("select");
					$(".y_job_list").hide();
					$(this).addClass("select");
					y_job_list.show();
					$.get("/plus/ajax_yellowpage.php?act=get_companyjobslist&company_id="+$(this).attr("company_id"),function(result){
						y_job_list.children("ul").html(result);
					});
				}else{
					$(this).removeClass("select");
					$(".y_job_list").hide();
				}
			});
			$(".showcomment").click(function(){
				var y_comment_list = $(this).parents(".com_box").find(".y_comment_list");
				$(".y_job_list").hide();
				$(".showjobs").removeClass("select");
				if(y_comment_list.css("display")=='none'){
					$(".showcomment").removeClass("select");
					$(".y_comment_list").hide();
					$(this).addClass("select");
					y_comment_list.show();
					$.get("/plus/ajax_yellowpage.php?act=get_companycommentlist&company_id="+$(this).attr("company_id"),function(result){
						y_comment_list.children("ul").html(result);
					});
				}else{
					$(this).removeClass("select");
					$(".y_comment_list").hide();
				}
			});
		</script>
</div>
	<div class="right_area">
		<div class="com-logo-list">
									<div class="com-logo-item"><a target="_blank" href="../c2370.html"><img src="../data/comads/2016/05/06/1462469594707.jpg" alt="随州电视台" width="298" height="142" border="0"></a></div>
						<div class="com-logo-item"><a target="_blank" href="../c1926.html"><img src="../data/comads/2016/05/06/1462469177855.jpg" alt="随州随广文化传媒有限公司" width="298" height="142" border="0"></a></div>
						<div class="com-logo-item"><a target="_blank" href="../c2862.html"><img src="../data/logo/2018/01/19/11622.jpg" alt="随州易居" width="298" height="142" border="0"></a></div>
						<div class="com-logo-item"><a target="_blank" href="../c2309.html"><img src="../data/comads/2016/05/06/1462469675339.jpg" alt="中国人寿" width="298" height="142" border="0"></a></div>
						<div class="com-logo-item"><a target="_blank" href="../c2430.html"><img src="../data/comads/2016/05/06/1462469924747.jpg" alt="太平洋保险" width="298" height="142" border="0"></a></div>
						<div class="com-logo-item"><a target="_blank" href="../c2433.html"><img src="../data/comads/2016/05/06/1462470121110.jpg" alt="湖北润力专用汽车" width="298" height="142" border="0"></a></div>
						<div class="com-logo-item"><a target="_blank" href="../c2434.html"><img src="../data/comads/2016/05/06/1462470208972.jpg" alt="途牛旅游随州分公司" width="298" height="142" border="0"></a></div>
						<div class="com-logo-item"><a target="_blank" href="../c2395.html"><img src="../data/comads/2016/05/06/1462470380988.jpg" alt="建信人寿保险随州分公司" width="298" height="142" border="0"></a></div>
					</div>
	</div>
	<div class="clear"></div>
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
