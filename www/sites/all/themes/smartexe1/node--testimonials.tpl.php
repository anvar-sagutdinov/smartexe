<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
  <div class="home_title"><div class="home_title_text"><?php print $title; ?></div></div>
  <?php print render($title_suffix); ?>

  <?php if ($display_submitted): ?>
    <div class="meta submitted">
      <?php print $user_picture; ?>
      <?php print $submitted; ?>
    </div>
  <?php endif; ?>

    <div class="testimonials">

        <div class="testimonials_body">

            <div class="testimonials_body_reviews">
                <?php $num = count($field_client_testimonials);
                for($i=1;$i<=$num;$i++){
                $f = entity_load('field_collection_item', array($field_client_testimonials[$i-1]['value']));
                foreach($f as $field){ ?>
                    <div class="testimonials_body_reviews_item">
                        <div class="testimonials_body_reviews_item_head">
                            <div class="testimonials_body_reviews_item_head_logo">
                                <?php echo "<img src='/sites/default/files/".$field->field_testimonials_client_logo['und'][0]['filename']."' align='absmiddle'>"; ?>
                            </div>
                            <div class="testimonials_body_reviews_item_head_name">
                                <?php echo $field->field_testimonials_client_name['und'][0]['value'];?>
                            </div>
                            <div class="cleaner">
                            </div>
                        </div>
                        <div class="testimonials_body_reviews_item_description">
                            <div class="testimonials_body_reviews_item_description_text">
                                <?php echo $field->field_testimonial['und'][0]['value']."<br>";?>
                                <br><br><span><?php echo$field->field_testimonials_person_name['und'][0]['value'];?></span>
                            </div>
                        </div>
                    </div>
                <?php }} ?>

                <div class="cleaner">
                </div>
            </div>

            <div class="our_clients_body_pusher">
            </div>
        </div>
    </div>
</div>
