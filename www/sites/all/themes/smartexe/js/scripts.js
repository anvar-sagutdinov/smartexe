jQuery(document).ready(function($) {
	//head scripts
	//career
	$(".head .head_top_body_left_careers").on("mouseover", function(e) {
		$(this).children().eq(0).children().eq(0).attr("src", "images/head/careers_hover.png");
		$(this).children().eq(1).css("color", "#EF532C");
	});
	$(".head .head_top_body_left_careers").on("mouseout", function(e) {
		$(this).children().eq(0).children().eq(0).attr("src", "images/head/careers_normal.png");
		$(this).children().eq(1).css("color", "#ABABB1");
	});
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	//footer scripts
	//sitemap
	$(".footer .footer_top_body_right_content_item").on("mouseover", function(e) {
		$(this).find("img").attr("src", "images/footer/sitemap_hover.png");
	});
	$(".footer .footer_top_body_right_content_item").on("mouseout", function(e) {
		$(this).find("img").attr("src", "images/footer/sitemap_normal.png");
	});
	
	
	
	//created
	$(".footer .footer_bottom_body_right_created").on("mouseover", function(e) {
		$(this).find("img").attr("src", "images/footer/insegment_logo_hover.png");
	});
	$(".footer .footer_bottom_body_right_created").on("mouseout", function(e) {
		$(this).find("img").attr("src", "images/footer/insegment_logo_normal.png");
	});
});
















