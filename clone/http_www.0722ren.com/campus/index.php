<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>校园招聘首页</title>
<link rel="shortcut icon" href="../favicon.ico">
<meta name="author" content="随州人才网">
<meta name="copyright" content="0722ren.com">
<link rel="stylesheet" href="../templates/tpl_campus/default/css/school.css">
<script src="../templates/tpl_campus/default/js/jquery.js"></script><script src="../templates/tpl_campus/default/js/jquery.graduate-jobs-search.js" type="text/javascript"></script><script src="../templates/tpl_campus/default/js/jquery.autocomplete.js" type="text/javascript"></script><script src="../data/cache_classify.js" type="text/javascript" charset="utf-8"></script><script>
	$(document).ready(function() {
		allaround("/");
	    // 职位类别填充数据 
		job_filldata("#job_list", QS_jobs_parent, QS_jobs, "#result-list-job", "#aui_outer_job", "#job_result_show", "#jobcategory", "/");
		// 工作地区填充数据
		city_filldata("#city_list", QS_city_parent, QS_city, "#result-list-city", "#aui_outer_city", "#city_result_show", "#citycategory", "/");
	});
</script>
</head>
<body>
	<div id="school-header" class="index">
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
												<a href="index.php" target="_self" class="s-nav-item f-left  active">校园首页</a>
								<a href="graduate-job-list.php" target="_self" class="s-nav-item f-left ">应届生职位</a>
								<a href="graduate-resume-list.php" target="_self" class="s-nav-item f-left ">应届生简历</a>
								<a href="campus-list.php" target="_self" class="s-nav-item f-left ">合作院校</a>
							</div>
		</div>
	</div>
</div>	<div class="school-banner" style="background:url(/templates/tpl_campus/default/images/index-banner.jpg) no-repeat top center #363b3f"></div>
<div class="container" style="padding-top:0px;">
	<div id="filterSearch" style="border:none;">
		<div class="fliter-wrap">
			<div class="filter-drop clearfix" style="margin-bottom:0px;">
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
					<div class="key">请输入关键字</div>
			 		<input type="text" name="key" id="key" style="display:none;"><input name="jobcategory" id="jobcategory" type="hidden" value=""><input name="trade" id="trade" type="hidden" value=""><input name="citycategory" id="citycategory" type="hidden" value=""><input type="hidden" name="wage" id="wage" value=""><input type="hidden" name="jobtag" id="jobtag" value=""><input type="hidden" name="education" id="education" value=""><input type="hidden" name="experience" id="experience" value=""><input type="hidden" name="settr" id="settr" value=""><input type="hidden" name="nature" id="nature" value=""><input type="hidden" name="scale" id="scale" value=""><input type="hidden" name="sort" id="sort" value=""><input type="hidden" name="page" id="page" value="">
</div>
		 		<div class="search-btn f-left" id="searcnbtn" detype="QS_graduatejob"><input type="button" value="找应届生工作"></div>
			</div>
		</div>
	</div>
</div>

	<div class="school-main container">
		<div class="school-ad">
			<!-- 通栏广告 -->
									<!-- 通栏广告 end-->
			<!-- 中等广告 -->
			<div class="s-ad-row clearfix">
									</div>
			<div class="s-ad-row clearfix">
									</div>
			<!-- 中等广告 end-->
			<!-- 短广告 -->
			<div class="s-ad-row clearfix">
									</div>
			<div class="s-ad-row clearfix">
									</div>
			<!-- 短广告 end-->
		</div>
		<!-- 最新应届生职位 -->
		<div class="index-common-block">
						<div class="title-block clearfix">
<h2 class="f-left">最新应届生职位</h2>
<a target="_blank" href="graduate-job-list.php" class="f-right underline more-link">更多&gt;&gt;</a>
</div>
			<div class="new-jobs-list clearfix">
								<div class="n-jobs-item f-left">
					<div class="jobs-name"><a href="../jobs/6821.html" target="_blank" class="underline">业务代表/客户代表/</a></div>
					<div class="job-company"><a href="../c1926.html" target="_blank" class="underline">随州随广文化传媒有限公司</a></div>
				</div>
								<div class="n-jobs-item f-left">
					<div class="jobs-name"><a href="../jobs/8395.html" target="_blank" class="underline">文秘</a></div>
					<div class="job-company"><a href="../c2598.html" target="_blank" class="underline">UBTV小主播</a></div>
				</div>
								<div class="n-jobs-item f-left">
					<div class="jobs-name"><a href="../jobs/8003.html" target="_blank" class="underline">学管老师</a></div>
					<div class="job-company"><a href="../c2770.html" target="_blank" class="underline">中航国铁教育集团湖北分公司</a></div>
				</div>
								<div class="n-jobs-item f-left">
					<div class="jobs-name"><a href="../jobs/6819.html" target="_blank" class="underline">网站编辑</a></div>
					<div class="job-company"><a href="../c1926.html" target="_blank" class="underline">随州随广文化传媒有限公司</a></div>
				</div>
								<div class="n-jobs-item f-left">
					<div class="jobs-name"><a href="../jobs/7193.html" target="_blank" class="underline">电商专员</a></div>
					<div class="job-company"><a href="../c1926.html" target="_blank" class="underline">随州随广文化传媒有限公司</a></div>
				</div>
								<div class="n-jobs-item f-left">
					<div class="jobs-name"><a href="../jobs/8301.html" target="_blank" class="underline">校对</a></div>
					<div class="job-company"><a href="../c2979.html" target="_blank" class="underline">湖北天成文化传播有限公司</a></div>
				</div>
								<div class="n-jobs-item f-left">
					<div class="jobs-name"><a href="../jobs/8407.html" target="_blank" class="underline">安全员</a></div>
					<div class="job-company"><a href="../c2978.html" target="_blank" class="underline">中铁十一局集团有限公司</a></div>
				</div>
								<div class="n-jobs-item f-left">
					<div class="jobs-name"><a href="../jobs/8302.html" target="_blank" class="underline">文员</a></div>
					<div class="job-company"><a href="../c2978.html" target="_blank" class="underline">中铁十一局集团有限公司</a></div>
				</div>
							</div>
		</div>
		<!-- 最新应届生职位 end-->
		<!-- 应届生简历 -->
		<div class="index-fourthree clearfix">
			<div class="index-four f-left">
				<div class="index-common-block st-reusme">
										<div class="title-block clearfix">
<h2 class="f-left">推荐应届生简历</h2>
<a href="graduate-resume-list.php" class="f-right underline more-link">更多&gt;&gt;</a>
</div>
					<div class="new-resume-list clearfix">
												<div class="n-resume-item f-left">
							<div class="avater">
								<div class="avater-box"><a href="../resume/7274.html" target="_blank"><img src="../data/photo/thumb/2018/01/15/1516028794.jpg" alt="" width="70" height="70"></a></div>
								<a href="../resume/7274.html" target="_blank">赵玉娟</a>
							</div>
							<div class="person-info">
								<div class="time">2018-01-16</div>
								<p>本科 | 工商管理类</p>
								<p>意向：行政专员/助理</p>
							</div>
						</div>
												<div class="n-resume-item f-left">
							<div class="avater">
								<div class="avater-box"><a href="../resume/7275.html" target="_blank"><img src="../data/photo/thumb/2018/01/15/1516030999.jpg" alt="" width="70" height="70"></a></div>
								<a href="../resume/7275.html" target="_blank">赵女士</a>
							</div>
							<div class="person-info">
								<div class="time">2018-01-15</div>
								<p>本科 | 工商管理类</p>
								<p>意向：其他贸易/采购</p>
							</div>
						</div>
												<div class="n-resume-item f-left">
							<div class="avater">
								<div class="avater-box"><a href="../resume/7242.html" target="_blank"><img src="../data/photo/thumb/2018/01/03/1514953388.jpg" alt="" width="70" height="70"></a></div>
								<a href="../resume/7242.html" target="_blank">胡瑞</a>
							</div>
							<div class="person-info">
								<div class="time">2018-01-03</div>
								<p>大专 | 机械类</p>
								<p>意向：电工</p>
							</div>
						</div>
												<div class="n-resume-item f-left">
							<div class="avater">
								<div class="avater-box"><a href="../resume/7002.html" target="_blank"><img src="../data/photo/thumb/2017/08/14/1502706198.jpg" alt="" width="70" height="70"></a></div>
								<a href="../resume/7002.html" target="_blank">裴Z</a>
							</div>
							<div class="person-info">
								<div class="time">2017-08-14</div>
								<p>本科 | 其他类</p>
								<p>意向：园林/景观设计</p>
							</div>
						</div>
												<div class="n-resume-item f-left">
							<div class="avater">
								<div class="avater-box"><a href="../resume/6978.html" target="_blank"><img src="../data/photo/thumb/2017/08/01/1501560399.jpg" alt="" width="70" height="70"></a></div>
								<a href="../resume/6978.html" target="_blank">冷沁东</a>
							</div>
							<div class="person-info">
								<div class="time">2017-08-04</div>
								<p>本科 | 工商管理类</p>
								<p>意向：其他</p>
							</div>
						</div>
												<div class="n-resume-item f-left">
							<div class="avater">
								<div class="avater-box"><a href="../resume/6828.html" target="_blank"><img src="../data/photo/thumb/2017/04/07/1491559149.jpg" alt="" width="70" height="70"></a></div>
								<a href="../resume/6828.html" target="_blank">吴红莹</a>
							</div>
							<div class="person-info">
								<div class="time">2017-04-08</div>
								<p>本科 | 社会学类</p>
								<p>意向：教育/培训,学</p>
							</div>
						</div>
											</div>
				</div>
			</div>
			<div class="index-three f-left">
				<!-- 招聘会 -->
				<div class="index-common-block recruitment">
					<div class="title-block clearfix">
<h2 class="f-left">招聘会</h2>
<a target="_blank" href="../jobfair/jobfair-list.php" class="f-right underline more-link">更多&gt;&gt;</a>
</div>
					<ul class="rec-list">
<li><a href="../jobs/3.html" target="_blank" class="underline">2018年广水市新春企业专场招聘会</a></li>
							 
							<li><a href="../jobs/2.html" target="_blank" class="underline">2018年随州市“春风送温暖”就业扶贫专场招聘会</a></li>
							 
							<li><a href="../jobs/1.html" target="_blank" class="underline">2018年随州市“春风行动”启动仪式暨专场招聘会</a></li>
																		</ul>
</div>
				<!-- 招聘会 end-->
				<!-- 校招侧栏广告 -->
				<div class="school-ad-block">
												</div>
				<!-- 校招侧栏广告 end-->
			</div>
		</div>
		<!-- 应届生简历 end-->
		<div class="index-common-block">
			<div class="title-block clearfix">
				<h2 class="f-left">合作院校</h2>
<a href="campus-list.php" class="f-right underline more-link">更多&gt;&gt;</a>
			</div>
						<div class="school-list clearfix">
							</div>
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
