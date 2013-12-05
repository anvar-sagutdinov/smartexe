<?php

/**
 * @file
 * Bartik's theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct URL of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type; for example, "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type; for example, story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode; for example, "full", "teaser".
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined; for example, $node->body becomes $body. When needing to
 * access a field's raw values, developers/themers are strongly encouraged to
 * use these variables. Otherwise they will have to explicitly specify the
 * desired field language; for example, $node->body['en'], thus overriding any
 * language negotiation rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 */
?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
  <div class="home_title"><div class="home_title_text"><?php print $title; ?></div></div>
  <?php print render($title_suffix); ?>
  
  <div class="content clearfix"<?php print $content_attributes; ?>>
	<div class="contact_us_body_contacts">
    <?php
      //print render($content);	  
	  
	  $locations = "";
	  
	  // Display Headquarters
	  $num = count($field_headquarters);
	  for($i=1;$i<=$num;$i++){
		  $f = entity_load('field_collection_item', array($field_headquarters[$i-1]['value']));
		  foreach($f as $field){
			//print_r($field);
			echo "<div class='contact_us_body_contacts_1'>";
			echo "<div class='contact_us_body_contacts_1_type'>Headquarters</div>";
			echo "<div class='contact_us_body_contacts_1_name'>".$field->field_headquarters_name['und'][0]['value']."</div>";
			echo "<div class='contact_us_body_contacts_1_adress'>".$field->field_headquarters_location['und'][0]['value']."</div>";
			echo "<div class='contact_us_body_contacts_1_other'>";
			if($field->field_headquarters_phone['und'][0]['value'] != ""){
				echo "Tel: ".$field->field_headquarters_phone['und'][0]['value']."";
			}
			if($field->field_headquarters_fax['und'][0]['value'] != ""){
				echo "<br/>Fax: ".$field->field_headquarters_fax['und'][0]['value']."";
			}
			if($field->field_headquarters_email['und'][0]['value'] != ""){
				echo "<br/>Email: <a href='mailto:".$field->field_headquarters_email['und'][0]['value']."'>".$field->field_headquarters_email['und'][0]['value']."</a>";
			}
			echo "</div>";
			echo "</div>";
			
			$locations .= "'".$field->field_headquarters_location['und'][0]['value']."',";
		  }
	  }
	  
	  // Display Representatives
	  ?>
	  <div class="contact_us_body_contacts_2">
		<div class="contact_us_body_contacts_2_type">
			Representative
		</div>
	  <?php
	  $num = count($field_representative);
	  for($i=1;$i<=$num;$i++){
		  $f = entity_load('field_collection_item', array($field_representative[$i-1]['value']));
		  foreach($f as $field){
			//print_r($field);
			echo "";
			echo "<div class='contact_us_body_contacts_2_name'>".$field->field_representative_name['und'][0]['value']."</div>";
			echo "<div class='contact_us_body_contacts_2_adress'>".$field->field_representative_location['und'][0]['value']."<div>";
			echo "<div class='contact_us_body_contacts_2_other'>";
			if($field->field_representative_phone['und'][0]['value'] != ""){
				echo "Tel: ".$field->field_representative_phone['und'][0]['value']."";
			}
			if($field->field_representative_fax['und'][0]['value'] != ""){
				echo "<br/>Fax: ".$field->field_representative_fax['und'][0]['value']."";
			}
			if($field->field_representative_email['und'][0]['value'] != ""){
				echo "<br/>Email: <a href='mailto:".$field->field_representative_email['und'][0]['value']."'>".$field->field_representative_email['und'][0]['value']."</a>";
			}
			echo "</div>";
			
			$locations .= "'".$field->field_representative_location['und'][0]['value']."',";
		  }
	  }
	  ?>
		</div>
	  </div>
		<div class="cleaner"></div>
	  </div>
	  
	  <?php
	  
	  // Display Other Centers
	  ?>
	  <div class="contact_us_body_contacts_3">
		<div class="contact_us_body_contacts_3_box">
			<div class="contact_us_body_contacts_3_box_title">
				Research and Development Centers:
			</div>
			<div class="contact_us_body_contacts_3_box_other">
	  <?php 
	  $num = count($field_other_centers);
	  for($i=1;$i<=$num;$i++){
		  $f = entity_load('field_collection_item', array($field_other_centers[$i-1]['value']));
		  foreach($f as $field){
			//print_r($field);
			echo "• ";
			echo "".$field->field_other_name['und'][0]['value'].", ";
			echo "".$field->field_other_city['und'][0]['value'].", ";
			echo "".$field->field_other_country['und'][0]['value']."";
			echo "<br/>";
		  }
	  }
    ?>
		</div>
		<div class="contact_us_body_contacts_3_box_pusher">
		</div>
	</div>
	
	<div class="cleaner"></div>
	
	</div>
	
  </div>

</div>

<div class="contact_us_body_contacts_3_box_pusher"></div>
<div class="services_development_body_title">
	<div class="services_development_body_title_text">
		Contact us
	</div>
	<div class="cleaner">
	</div>
</div>

<div class="contact_us_body_form">
	<?php if (!function_exists('node_add')) {
	  module_load_include('inc', 'node', 'node.pages');
	}
	//print_r($node->webform['nid']);
	// get contact webform
	$nid = $node->webform['nid'];
	$node = node_load($nid);
	$submission = (object) array();
	$enabled = TRUE;
	$preview = FALSE;
	$contact_form = drupal_get_form('webform_client_form_23', $node, $submission, $enabled, $preview); 
	print drupal_render($contact_form);
	?>
</div>

<script type="text/javascript">
function initialize() {
	var mapOptions = {
		center: new google.maps.LatLng(32.084502, 34.803314),
		zoom: 16,
		zoomControl: true,
	    scaleControl: true,
	    scrollwheel: false,
	    disableDoubleClickZoom: true
	};
	
	var map = new google.maps.Map(document.getElementById("contact_us_map"), mapOptions);
	
	var map_address_array = new Array(<?=rtrim($locations,",")?>);
	
	var map_address_geocoder = new google.maps.Geocoder();
	
	for (var i = 0; i < map_address_array.length; i++) {
		map_address_geocoder.geocode( { 'address': map_address_array[i]}, function(results, status) {	
			if (status == google.maps.GeocoderStatus.OK) {
				var marker = new google.maps.Marker({
					map: map,
					position: results[0].geometry.location
				});
			} else {
				alert("Geocode was not successful for the following reason: " + status);
			}
		});
	}	
}		
	google.maps.event.addDomListener(window, 'load', initialize);
</script>