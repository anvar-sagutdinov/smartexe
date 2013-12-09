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
                           <?php
                            $block = module_invoke('menu', 'block_view', 'menu-services-1');
                            print render($block['content']);
                           ?>
                           </div>
                    </div>
                     <div class="footer_top_body_left_content_2">
                        <div class="footer_top_body_left_content_item">
                            <?php
                            $block = module_invoke('menu', 'block_view', 'menu-services-2');
                            print render($block['content']);
                            ?>
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
                            <?php
                            $block = module_invoke('menu', 'block_view', 'menu-expertise-4');
                            print render($block['content']);
                            ?>
                        </div>

                    </div>
                    <div class="footer_top_body_middle_content_2">
                        <div class="footer_top_body_middle_content_item">
                            <?php
                            $block = module_invoke('menu', 'block_view', 'menu-expertise-2');
                            print render($block['content']);
                            ?>
                        </div>
                    </div>
                    <div class="footer_top_body_middle_content_3">
                        <div class="footer_top_body_middle_content_item">
                            <?php
                            $block = module_invoke('menu', 'block_view', 'menu-expertise-3');
                            print render($block['content']);
                            ?>
                        </div>
                    </div>
                    <div class="footer_top_body_middle_content_4">
                        <div class="footer_top_body_middle_content_item">
                            <?php
                            $block = module_invoke('menu', 'block_view', 'menu-e');
                            print render($block['content']);
                            ?>
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
                        <?php
                        $block = module_invoke('menu', 'block_view', 'menu-sitemap');
                        echo render($block['content']).'<img src="'.base_path() . path_to_theme() .'/images/footer/sitemap_normal.png" />';  ?>
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
                    <a target="_blank" href="http://www.insegment.com"><?php print '<img src="'.base_path() . path_to_theme() .'/images/footer/insegment_logo_normal.png" /></a>';  ?>
                </div>
            </div>
            <div class="cleaner">
            </div>
        </div>
    </div>
</div>