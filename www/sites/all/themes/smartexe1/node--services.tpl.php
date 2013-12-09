<?php //print_r($content); ?>
<div class="services">
    <div class="services_body">
        <div class="services_body_head">
            <div class="services_body_head_left">
                <div class="services_body_head_left_image">
                    <?php echo "<img src='/sites/default/files/".$node->field_services_featured_image['und'][0]['filename']."' style='float:left;padding-right:20px;'>";?>
                </div>
            </div>
            <div class="services_body_head_right">
                <div class="services_body_head_right_title">
					<?php print render($title_prefix); ?>
                    <?php print $content->title; ?>
					<?php print render($title_suffix); ?>
                </div>
                <div class="services_body_head_right_description">
                    <?php   echo $node->body['und'][0]['safe_value'];?>
                </div>
            </div>
            <div class="cleaner">
            </div>
        </div>

        <div class="services_body_list">
             <div class="services_body_list_row">

                 <?php
                 $num = count($field_services);
                 for($i=1;$i<=$num;$i++){
                 $f = entity_load('field_collection_item', array($field_services[$i-1]['value']));
                 foreach($f as $field){

                echo'<div class="services_body_list_row_item">';
                     echo'<div class="services_body_list_row_item_head">';
                        echo'<div class="services_body_list_row_item_head_logo">';
                            echo'<div class="services_body_list_row_item_head_logo_image">';
                     echo "<img src='/sites/default/files/".$field->field_service_icon['und'][0]['filename']."' align='absmiddle'>";
                            echo'</div>';
                        echo'</div>';
                        echo'<div class="services_body_list_row_item_head_title">';
                            echo'<div class="services_body_list_row_item_head_title_text">';
                     echo $field->field_service_name['und'][0]['value'];
                            echo'</div>';
                        echo'</div>';
                        echo'<div class="cleaner">';
                        echo'</div>';
                    echo'</div>';
                    echo'<div class="services_body_list_row_item_description">';
                     echo $field->field_service_description['und'][0]['value']."<br>";
                    echo'</div>';
                    echo'<div class="services_body_list_row_item_more">';
                     echo "<a href='".$field->field_service_link['und'][0]['value']."'>Learn more >></a>";
                    echo'</div>';
                echo'</div>';

                 }
                 }

                 ?>



                <div class="services_body_list_row_spacer">
                </div>


                <div class="cleaner">
                </div>



            </div>
    </div>
</div>