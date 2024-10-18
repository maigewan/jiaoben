jQuery(document).ready(function($){	
	FastClick.attach(document.body);
	if(getCookie(JF_cn) == '1'){
		$('.language .simple').text('繁體中文');
	}else{
		$('.language .simple').text('简体中文');
	}
	$('.language .click').click(function(){
		$('.language .simple').text($(this).text());
	});
	$('.nav ul li').hover(function(){
		$(this).children('ul').addClass('open');
	},function(){
		$(this).find('ul').removeClass('open');
	});
	$('.search_btn').click(function(){
		$(this).siblings('.search_main').fadeToggle('fast');
	});
	$('.nav_btn').click(function(){
		$(this).addClass('open');
		$('body,.nav,.fixed_bg').addClass('open');
	});
	$('.fixed_bg').click(function(){
		$('body,.nav,.fixed_bg,.nav_btn').removeClass('open');
	});
	
	if($("#slides").length >0){
		$("#slides").owlCarousel({
			items:1,
			loop:true, 
			mouseDrag:true,
			autoplay:true,
			nav:false,	
			dots:true
		}); 
	}
	if($("#news_top").length >0){
		$("#news_top").owlCarousel({
			items:1,
			loop:false, 
			mouseDrag:true,
			autoplay:true,
			nav:false,	
			dots:true
		}); 
	}
	if($("#product_piclist").length >0){
		$("#product_piclist").owlCarousel({
			items:3,
			loop:false, 
			mouseDrag:false,
			autoplay:false,
			nav:true,	
			dots:false,
			margin:5
		}); 
	}
	$('#product_piclist .pic_item img').click(function(){
		var $_src = $(this).attr('src');		
		$('.product_cur').css('backgroundImage','url('+$_src+')');
	});
	$('.product_info .btn .tel').click(function(){
		$(this).siblings('em').fadeToggle('fast');
	});
	$('.side_menu h3 i').click(function(){
		$(this).parent().toggleClass('cur').parents('.side_menu').find('ul').slideToggle(300);
		
	});
	$('.fixed_widget .backtop').click(function(){
		$('html,body').animate({scrollTop:0},500);
	});
	//$(".page_nav ul li a").each(function() {		
		//if ($(this).attr("href").toLowerCase().replace(/\/|[&#].*/g,"") //== document.URL.toLowerCase().replace(/\/|[&#].*/g,"")){
			//$(this).parents('li').attr("class","cur"); 
		//}
	//});	
});