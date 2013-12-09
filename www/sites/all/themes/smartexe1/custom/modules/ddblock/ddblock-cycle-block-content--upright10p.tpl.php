<?php
// $Id$

/*!
 * Dynamic display block module template (Drupal 7): upright10p - content template
 * (c) Copyright Phelsa Information Technology, 2011. All rights reserved.
 * Version 1.3 ( 30-JUL-2011 )
 * Licenced under GPL license
 * http://www.gnu.org/licenses/gpl.html
 */

/**
 * @file
 * Dynamic display block module template (Drupal 7): upright10p - content template
 *
 * Available variables:
 * - $delta: Block number of the block.
 *
 * - $template: template name
 * - $output_type: type of content
 *
 * - $slider_items: array with slidecontent
 * - $slide_text_position of the text in the slider (top | right | bottom | left)
 * - $slide_direction: direction of the text in the slider (horizontal | vertical )
 * -
 * - $pager_content: Themed pager content
 * - $pager_position: position of the pager (top | bottom)
 *
 * notes: don't change the ID names, they are used by the jQuery script.
 */

$settings = $ddblock_cycle_slider_settings; 
 
// add Cascading style sheet
drupal_add_css($directory . '/custom/modules/ddblock/' . $settings['template'] . '/ddblock-cycle-' . $settings['template'] . '.css', array('group' => CSS_THEME, 'every_page' => FALSE));
?>

<div class="face">
    <div class="face_line">
    </div>
    <div id="ddblock-<?php print $settings['delta'] ?>" class="face_body_slider ddblock-cycle-<?php print $settings['template'] ?>">
        <div class="face_body_slider_items slider">
			<div class="slider-inner">
			<?php if ($settings['output_type'] == 'view_fields') : ?>
			<?php foreach ($content as $slider_item): ?>
			<?php if (isset($slider_item['slide_image'])) {
				$image = $slider_item['slide_image'];
				preg_match('/src="([^"]+)/i',$image, $imgage);
				$image = str_ireplace( 'src="', '',  $imgage[0]);				
			} else $image = ""; ?>
            <div class="face_body_slider_item slide" style="background:url(<?=$image;?>) no-repeat 0 0;">
				<div class="slide-inner">
					<?php if (isset($slider_item['slide_image'])) :?>
					<?php echo $slider_item['slide_image']; ?>
					<?php endif; ?> 
					<div class="face_body_slider_item_body slide-text slide-text-<?php print $settings['slide_direction'] ?> slide-text-<?php print $settings['slide_text_position'] ?>">						
						<div class="slide-text-inner">
							<div class="face_body_slider_item_body_title slide-title slide-title-<?php print $settings['slide_direction'] ?>">
								<div class="face_body_slider_item_body_title_text slide-title-inner">
									<?php if ($settings['slide_text'] == 1) :?>
									<?php if (isset($slider_item['slide_title'])) :?>
										<?php print $slider_item['slide_title'] ?>
									<?php endif; ?>							
									<?php endif; ?>							
								</div>
							</div>
							<div class="face_body_slider_item_body_description slide-body-<?php print $settings['slide_direction'] ?>">
								<div class="face_body_slider_item_body_description_text slide-body-inner">
									<?php if ($settings['slide_text'] == 1) :?>
									<?php if (isset($slider_item['slide_text'])) :?>
										<?php print $slider_item['slide_text'] ?>
									<?php endif; ?>							
									<?php endif; ?>							
								</div>
							</div>
							<div class="face_body_slider_item_body_button slide-read-more slide-read-more-<?php print $settings['slide_direction'] ?>">
								<div class="face_body_slider_item_body_button_text">
									<?php if (isset($slider_item['slide_read_more'])) :?>
										<a href="<?=$slider_item['slide_read_more']?>"><?=$slider_item['pager_text']?></a>
									<?php endif; ?>	
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
			<?php endforeach; ?>
			<?php endif; ?>
			</div>        

        <!-- <div class="face_body_slider_info">
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
        </div> -->
		
		<?php if ($settings['pager2'] == 1): ?>
        <div class="face_body_slider_left pager-slide prev-container prev-container-<?php print $settings['pager_position'] ?>">
            <div class="face_body_slider_left_image">
                <a class="prev" href="#"><?php print '<img src="'.base_path() . path_to_theme() .'/images/face/face_slider_left_normal.png" />';  ?></a>
            </div>
        </div>
        <div class="face_body_slider_right pager-slide next-container next-container-<?php print $settings['pager_position'] ?>">
            <div class="face_body_slider_right_image">
                <a class="next" href="#"><?php print '<img src="'.base_path() . path_to_theme() .'/images/face/face_slider_right_normal.png" />';  ?></a>
            </div>
        </div>
		<?php endif; ?> 
		</div>
    </div>    
</div>
<div class="face_line"></div>

<?php /*
<!-- dynamic display block slideshow -->
<div id="ddblock-<?php print $settings['delta'] ?>" class="ddblock-cycle-<?php print $settings['template'] ?> clearfix">
 <div class="container clearfix">
  <div class="container-inner clearfix">
   <?php if ($settings['pager_toggle'] && $settings['pager_position'] == "top") : ?>
    <?php print $pager_content ?>
   <?php endif; ?> 
   <!-- slider content -->
   <div class="slider clearfix">
    <div class="slider-inner clearfix">
     <?php if ($settings['output_type'] == 'view_fields') : ?>
      <?php foreach ($content as $slider_item): ?>
       <div class="slide clearfix">
        <div class="slide-inner clearfix">
         <?php if (isset($slider_item['slide_image'])) :?>
          <?php print $slider_item['slide_image']; ?>
         <?php endif; ?>               
         <div class="slide-text slide-text-<?php print $settings['slide_direction'] ?> slide-text-<?php print $settings['slide_text_position'] ?> clearfix">
          <div class="slide-text-inner clearfix">
           <?php if ($settings['slide_text'] == 1) :?>
            <?php if (isset($slider_item['slide_title'])) :?>
             <div class="slide-title slide-title-<?php print $settings['slide_direction'] ?> clearfix">
              <div class="slide-title-inner clearfix">
               <h2><?php print $slider_item['slide_title'] ?></h2>
              </div> <!-- slide-title-inner-->
             </div>  <!-- slide-title-->
            <?php endif; ?>               
            <?php if (isset($slider_item['slide_text'])) :?>
             <div class="slide-body-<?php print $settings['slide_direction'] ?> clearfix">
              <div class="slide-body-inner clearfix">
               <p><?php print $slider_item['slide_text'] ?></p>
              </div> <!-- slide-body-inner-->
             </div>  <!-- slide-body-->
            <?php endif; ?>
            <?php if (isset($slider_item['slide_read_more'])) :?>
             <div class="slide-read-more slide-read-more-<?php print $settings['slide_direction'] ?> clearfix">
              <p><?php print $slider_item['slide_read_more'] ?></p>
             </div><!-- slide-read-more-->
            <?php endif; ?>
           <?php endif; ?>
          </div> <!-- slide-text-inner-->
         </div>  <!-- slide-text-->
        </div> <!-- slide-inner-->
       </div>  <!-- slide-->
      <?php endforeach; ?>
     <?php endif; ?>
    </div> <!-- slider-inner-->
   </div>  <!-- slider-->
   <?php if ($settings['pager_toggle'] && $settings['pager_position'] == "bottom") : ?>
    <?php print $pager_content ?>
   <?php endif; ?> 
   <!-- prev/next pager on slide -->
   <?php if ($settings['pager2'] == 1): ?>
    <div class="pager-slide prev-container prev-container-<?php print $settings['pager_position'] ?>">
     <a class="prev" href="#"><?php print $settings['pager2_slide_prev']?></a>
    </div>
    <div class="pager-slide next-container next-container-<?php print $settings['pager_position'] ?>">
     <a class="next" href="#"><?php print $settings['pager2_slide_next'] ?></a>
    </div>
   <?php endif; ?> 
  </div> <!-- container-inner-->
 </div> <!--container-->
</div> <!--  template -->

*/ ?>
