<?php
?>


<div class="page">
<div class="head">
    <div class="head_top_line">
    </div>
    <div class="head_top">
        <div class="head_top_body">
            <div class="head_top_body_left">
                <div class="head_top_body_left_call">
                    <div class="head_top_body_left_call_image">
                        <?php print '<img src="'.base_path() . path_to_theme() .'/images/head/call.png" />';  ?>
                    </div>
                    <div class="head_top_body_left_call_text">
                        Call Us: <span>+1 800 123 4567</span>
                    </div>
                    <div class="cleaner">
                    </div>
                </div>
                <div class="head_top_body_left_careers">
                    <div class="head_top_body_left_careers_image">
                        <?php print '<img src="'.base_path() . path_to_theme() .'/images/head/careers_normal.png" />';  ?>
                    </div>
                    <div class="head_top_body_left_careers_text">
                        Careers
                    </div>
                </div>
                <div class="cleaner">
                </div>
            </div>
            <div class="head_top_body_right">
                <div class="head_top_body_right_search">
                    <div class="head_top_body_right_search_image">
                        <?php print '<img src="'.base_path() . path_to_theme() .'/images/head/search.png" />';  ?>
                    </div>
                </div>
                <div class="head_top_body_right_social">
                    <div class="head_top_body_right_social_in">
                        <?php print '<img src="'.base_path() . path_to_theme() .'/images/head/social_in.png" />';  ?>
                    </div>
                    <div class="head_top_body_right_social_gp">
                        <?php print '<img src="'.base_path() . path_to_theme() .'/images/head/social_gp.png" />';  ?>
                    </div>
                    <div class="head_top_body_right_social_fb">
                        <?php print '<img src="'.base_path() . path_to_theme() .'/images/head/social_fb.png" />';  ?>
                    </div>
                </div>
                <div class="cleaner">
                </div>
            </div>
            <div class="cleaner">
            </div>
        </div>
    </div>
    <div class="head_middle_line">
    </div>
    <div class="head_bottom">
        <div class="head_bottom_body">
            <div class="head_bottom_body_left">
                <div class="head_bottom_body_left_logo">
                    <?php print '<img src="'.base_path() . path_to_theme() .'/images/head/smartexe_logo.png" />';  ?>
                </div>
            </div>
            <div class="head_bottom_body_right">
                <?php print render($page['header']); ?>
            </div>
            <div class="cleaner">
            </div>
        </div>
    </div>
</div>

<?php if($is_front) { ?>
<!--face-->
<div class="face">
    <div class="face_line">
    </div>
    <div class="face_body_slider">
        <div class="face_body_slider_items">
            <div class="face_body_slider_item">
                <div class="face_body_slider_item_body">
                    <div class="face_body_slider_item_body_title">
                        <div class="face_body_slider_item_body_title_text">
                            How Can We Help You?
                        </div>
                    </div>
                    <div class="face_body_slider_item_body_description">
                        <div class="face_body_slider_item_body_description_text">
                            We provide research, design, development and quality assurance services to help deploy your products and ideas. Our developers and designers will help you produce technologies that drive IT innovation across software, web, networking and multimedia platforms.
                        </div>
                    </div>
                    <div class="face_body_slider_item_body_button">
                        <div class="face_body_slider_item_body_button_text">
                            See Our Services
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="face_body_slider_info">
            <div class="face_body_slider_info_dots">
                <div class="face_body_slider_info_dots_dot">
                    <?php print '<img src="'.base_path() . path_to_theme() .'/images/face/face_slider_info_dot_unselect.png" />';  ?>
                </div>
                <div class="face_body_slider_info_dots_dot_spacer">
                </div>
                <div class="face_body_slider_info_dots_dot">
                    <?php print '<img src="'.base_path() . path_to_theme() .'/images/face/face_slider_info_dot_select.png" />';  ?>
                </div>
                <div class="face_body_slider_info_dots_dot_spacer">
                </div>
                <div class="face_body_slider_info_dots_dot">
                    <?php print '<img src="'.base_path() . path_to_theme() .'/images/face/face_slider_info_dot_unselect.png" />';  ?>
                </div>
                <div class="cleaner">
                </div>
            </div>
            <div class="face_body_slider_info_arrow">
                <div class="face_body_slider_info_arrow_image">
                    <?php print '<img src="'.base_path() . path_to_theme() .'/images/face/face_slider_info_arrow.png" />';  ?>
                </div>
            </div>
        </div>

        <div class="face_body_slider_left">
            <div class="face_body_slider_left_image">
                <?php print '<img src="'.base_path() . path_to_theme() .'/images/face/face_slider_left_normal.png" />';  ?>
            </div>
        </div>
        <div class="face_body_slider_right">
            <div class="face_body_slider_right_image">
                <?php print '<img src="'.base_path() . path_to_theme() .'/images/face/face_slider_right_normal.png" />';  ?>
            </div>
        </div>
    </div>
    <div class="face_line">
    </div>
</div>
<?php } else { ?>

<div class="our_clients_top_line"></div>
<div class="tiser">
	<?php if(isset($node) && $node->field_header_image['und'][0]['filename'] != ""){ ?>
	<div>
	  <img src="/sites/default/files/<?=$node->field_header_image['und'][0]['filename']?>">
	</div>
    <?php } ?>
</div>

<?php } ?>


<div class="content">
    <div class="home">
        <?php print render($page['content']); ?>
    </div>
</div>

<div class="clients">
    <div class="clients_line">
    </div>
    <div class="clients_body">
        <div class="clients_body_content">
            <div class="clients_body_content_title">
                <div class="clients_body_content_title_text">
                    Our clients
                </div>
            </div>
            <div class="clients_body_content_separator">
                <div class="clients_body_content_separator_line">
                </div>
            </div>
            <div class="clients_body_content_items">
                <div class="clients_body_content_items_item">
                    <a href="">
                        <div class="clients_body_content_items_item_image">
                            <?php print '<img src="'.base_path() . path_to_theme() .'/images/clients/client_1.png" />';  ?>
                        </div>
                    </a>
                </div>
                <div class="clients_body_content_items_item">
                    <a href="">
                        <div class="clients_body_content_items_item_image">
                            <?php print '<img src="'.base_path() . path_to_theme() .'/images/clients/client_2.png" />';  ?>
                        </div>
                    </a>
                </div>
                <div class="clients_body_content_items_item">
                    <a href="">
                        <div class="clients_body_content_items_item_image">
                            <?php print '<img src="'.base_path() . path_to_theme() .'/images/clients/client_3.png" />';  ?>
                        </div>
                    </a>
                </div>
                <div class="clients_body_content_items_item">
                    <a href="">
                        <div class="clients_body_content_items_item_image">
                            <?php print '<img src="'.base_path() . path_to_theme() .'/images/clients/client_4.png" />';  ?>
                        </div>
                    </a>
                </div>
                <div class="clients_body_content_items_item">
                    <a href="">
                        <div class="clients_body_content_items_item_image">
                            <?php print '<img src="'.base_path() . path_to_theme() .'/images/clients/client_2.png" />';  ?>
                        </div>
                    </a>
                </div>
            </div>
            <div class="cleaner">
            </div>

            <div class="clients_body_content_left_fade">
                <?php print '<img src="'.base_path() . path_to_theme() .'/images/clients/client_left_fade.png" />';  ?>
            </div>
            <div class="clients_body_content_right_fade">
                <?php print '<img src="'.base_path() . path_to_theme() .'/images/clients/client_right_fade.png" />';  ?>
            </div>
        </div>
    </div>
</div>

<div class="wrap">
</div>
</div>
<div class="footer">
    <div class="footer_line_top">
    </div>
    <div class="footer_top">
        <div class="footer_top_body">
            <div class="footer_top_body_left">
                <div class="footer_top_body_left_title">
                    <div class="footer_top_body_left_title_text">
                        Services
                    </div>
                </div>
                <div class="footer_top_body_left_content">
                    <div class="footer_top_body_left_content_1">
                        <div class="footer_top_body_left_content_item">
                            Product Management
                        </div>
                        <div class="footer_top_body_left_content_item">
                            Project Management
                        </div>
                        <div class="footer_top_body_left_content_item">
                            R&D Extension
                        </div>
                    </div>
                    <div class="footer_top_body_left_content_2">
                        <div class="footer_top_body_left_content_item">
                            2D/3D Graphic Design & Animation
                        </div>
                        <div class="footer_top_body_left_content_item">
                            Cloud IT
                        </div>
                        <div class="footer_top_body_left_content_item">
                            Quality Assurance
                        </div>
                    </div>
                    <div class="cleaner">
                    </div>
                </div>
            </div>
            <div class="footer_top_body_middle">
                <div class="footer_top_body_middle_title">
                    <div class="footer_top_body_middle_title_text">
                        Expertise
                    </div>
                </div>
                <div class="footer_top_body_middle_content">
                    <div class="footer_top_body_middle_content_1">
                        <div class="footer_top_body_middle_content_item">
                            QA Technology
                        </div>
                        <div class="footer_top_body_middle_content_item">
                            Games
                        </div>
                    </div>
                    <div class="footer_top_body_middle_content_2">
                        <div class="footer_top_body_middle_content_item">
                            Embedded
                        </div>
                        <div class="footer_top_body_middle_content_item">
                            Video & Audio
                        </div>
                    </div>
                    <div class="footer_top_body_middle_content_3">
                        <div class="footer_top_body_middle_content_item">
                            Cloud
                        </div>
                        <div class="footer_top_body_middle_content_item">
                            Mobile
                        </div>
                    </div>
                    <div class="footer_top_body_middle_content_4">
                        <div class="footer_top_body_middle_content_item">
                            Web
                        </div>
                        <div class="footer_top_body_middle_content_item">
                            Expertise
                        </div>
                    </div>
                    <div class="cleaner">
                    </div>
                </div>
            </div>
            <div class="footer_top_body_right">
                <div class="footer_top_body_right_title">
                    <div class="footer_top_body_right_title_text">
                        Contact us
                    </div>
                </div>
                <div class="footer_top_body_right_content">
                    <div class="footer_top_body_right_content_item">
                        Sitemap <?php print '<img src="'.base_path() . path_to_theme() .'/images/footer/sitemap_normal.png" />';  ?>
                    </div>
                </div>
            </div>
            <div class="cleaner">
            </div>
        </div>
    </div>
    <div class="footer_line_bottom">
    </div>
    <div class="footer_bottom">
        <div class="footer_bottom_body">
            <div class="footer_bottom_body_left">
                <div class="footer_bottom_body_left_copyright">
                    Smart.exe Ltd. © 2013 All Rights Reserved | <a href="">Terms of Use</a> | <a href="">Privacy Policy</a>
                </div>
            </div>
            <div class="footer_bottom_body_right">
                <div class="footer_bottom_body_right_created">
                    <a href=""><?php print '<img src="'.base_path() . path_to_theme() .'/images/footer/insegment_logo_normal.png" /></a>';  ?>
                </div>
            </div>
            <div class="cleaner">
            </div>
        </div>
    </div>
</div>
