function index(dir,templatedir)
{
	/* 首页广告位图片延迟加载 */
	$(".lazyload div img").lazyload({ placeholder: $("#templatedir").val()+"images/index/84.gif", effect:"fadeIn" });
	$(".tab-ad-control span:first").addClass('active');
	$('.t-nav-item:last').css({'margin-right':0});
	$('.common-nav li:last').css({'border-right':0});
	$('.tag-item:nth-child(2n)').css({'border-right':0});
	$('.news-item:last').css({'border-bottom':0});
	// 搜索类型展开
	$('.search-type').hover(function(){
		$(this).find('.search-type-drop').show();
	}, function(){
		$(this).find('.search-type-drop').hide();
	});
	// 选择找工作还是找人才
	$('.search-type-drop').bind('click', function() {
		var stype = $(this).attr("code"), tit = $(this).attr("title"), data = $(this).attr("data"),
			hstype = $(".search-type-show").attr("code"), htit = $(".search-type-show").attr("title"), hdata = $(".search-type-show").attr("data");
		$("#btnForIndexSearch").attr("code",stype);
		$("#keyForIndexSearch").attr("placeholder",data);
		$(this).attr("code",hstype).attr("title",htit).attr("data",hdata).find("a").text(htit);
		$(".search-type-show").attr("code",stype).attr("title",tit).attr("data",data).find("span").text(tit);
		$('.search-type-drop').hide();
	});
	// 回车搜索
	$('#keyForIndexSearch').keydown(function(e) {
		if (e.keyCode==13) {
			search_location(dir);
		}
	});
	// 搜索按钮点击
	$("#btnForIndexSearch").click(function() {
		search_location(dir);
	});
	// 资讯切换
	$('.news-tab-link').on('click', function() {
		var index = $(this).index();
		$(this).addClass('active').siblings().removeClass('active');
		$('.tab-news-list').eq(index).show().siblings().hide();
	});
	// 友链切换
	/*$('.link-ctrl-item').on('click', function() {
		var fIndex = $(this).index();
		$(this).addClass('select').siblings().removeClass('select');
		$('.f-link-list').eq(fIndex).show().siblings().hide();
	});*/
	// 广告位切换
	var wrap = $('.tab-ad');
	var viewBox = $('.tab-ad-list');
	var now = 0;
	function getMove(obj, style, add) {
		clearInterval(obj.timer);
		obj.timer = setInterval(function() {
			var cutt = 0;
			cutt = Math.round(parseInt($(obj).css(style)));
			var speed = (add-cutt)/4;
			speed = speed > 0 ? Math.ceil(speed) : Math.floor(speed);
			if (cutt == add) {
				clearInterval(obj.timer);
			}else{
				$(obj).css(style, cutt + speed);
			}
		}, 30)
	};
	function tab() {
		var itemHeight = $('.tab-ad-item').height();
		$('.ad-control').eq(now).addClass('active').siblings().removeClass('active');
		getMove(viewBox,'top',-(now*itemHeight));
	};
	$('.ad-control').each(function() {
		$(this).on('click', function() {
			now = $(this).index();
			tab();
		})
	});
	function setAnimate() {
		var viewLength = $('.tab-ad-item').length;
		now++;
		if(now ==viewLength) {
			now = 0;
		};
	};
	var timer = setInterval(function() {
		setAnimate();
		tab();
	},5000);
	viewBox.on({
		'mouseover': function() {
			clearInterval(timer);
		},
		'mouseleave': function() {
			timer = setInterval(function() {
				setAnimate();
				tab();
			},5000)
		}
	});
}
// 搜索跳转
function search_location(dir) {
	generateBackground();
	var listype = $("#btnForIndexSearch").attr('code');
	var key=$("input[name=keyForIndexSearch]").val();
	var page=1;
	$.get(dir+"plus/ajax_search_location.php", {"act":listype,"key":key,"page":page},
		function (data,textStatus)
		 {	
			 window.location.href=data;
		 },"text"
	);
}
// 正在加载
function generateBackground() {
	var backgroundHtm = '<div id="bonfire-pageloader"><div class="bonfire-pageloader-icon"></div></div>';
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