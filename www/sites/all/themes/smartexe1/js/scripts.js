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
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	//face scripts
	//face body
	$(".face .face_body_slider").on("mouseover", function(e) {
		$(".face .face_body_slider_left").css("display", "block");
		$(".face .face_body_slider_right").css("display", "block");
	});
	$(".face .face_body_slider").on("mouseout", function(e) {
		$(".face .face_body_slider_left").css("display", "none");
		$(".face .face_body_slider_right").css("display", "none");
	});
	
	//face left
	$(".face .face_body_slider_left").on("mouseover", function(e) {
		$(this).children().eq(0).children().eq(0).attr("src", "images/face/face_slider_left_hover.png");
	});
	$(".face .face_body_slider_left").on("mouseout", function(e) {
		$(this).children().eq(0).children().eq(0).attr("src", "images/face/face_slider_left_normal.png");
	});
	
	//face right
	$(".face .face_body_slider_right").on("mouseover", function(e) {
		$(this).children().eq(0).children().eq(0).attr("src", "images/face/face_slider_right_hover.png");
	});
	$(".face .face_body_slider_right").on("mouseout", function(e) {
		$(this).children().eq(0).children().eq(0).attr("src", "images/face/face_slider_right_normal.png");
	});
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	//clients
	var client_tabs = parseInt($(".clients .clients_body_content_items").children().size());
	var client_can_scroll = false;
	var client_on = true;
	var client_temp_x = 0;
	
	
	
	if (client_tabs < 4) {
		client_temp_x = parseInt($(".clients .clients_body_content_items").css("width")) - parseInt($(".clients .clients_body_content_items").children().size()) * 250;
		
		$(".clients .clients_body_content_items").children().each(function(index, element) {
            $(element).css("left", client_temp_x);
			
			client_temp_x += 250;
        });
	} else {
		if (client_tabs == 4) {
			client_temp_x = 0;
			
			$(".clients .clients_body_content_items").children().each(function(index, element) {
				$(element).css("left", client_temp_x);
				
				client_temp_x += 250;
			});
		} else {
			client_temp_x = 0;
			
			$(".clients .clients_body_content_items").children().each(function(index, element) {
				$(element).css("left", client_temp_x);
				
				client_temp_x += 250;
			});
			
			client_can_scroll = true;
		}
	}
	
	
	
	if (client_can_scroll == true) {
		var client_dx = (client_temp_x - 250);
		var client_element_dx = 0;
		var timer = $.timer(function() {
			$(".clients .clients_body_content_items").children().each(function(index, element) {
				if (client_on == true) {
					client_element_dx = parseInt($(element).css("left"));
					$(element).css("left", client_element_dx - 1);
					
					if (index == (client_tabs - 1)) {
						$(".clients .clients_body_content_items").children().each(function(index_2, element_2) {
							if (parseInt($(element_2).css("left")) < -250) {
								$(element_2).css("left", client_dx);
							}
						});
					}
				}
			});
		});
		timer.set({time: 50, autostart: true});
	}
	
	
	
	$(".clients .clients_body_content_items").on("mouseover", function(e) {
		client_on = false;
	});
	$(".clients .clients_body_content_items").on("mouseout", function(e) {
		client_on = true;
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
















