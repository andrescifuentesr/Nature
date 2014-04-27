//========================
//  Flexslider
//========================
jQuery(window).load(function(){
	jQuery(".flexslider").flexslider({
		animation:"slide",
		start:function(){
			jQuery(".site-main").find(".flexslider-wrapper").removeClass("loading");
			jQuery(".spinner").hide();
		}
	});
});