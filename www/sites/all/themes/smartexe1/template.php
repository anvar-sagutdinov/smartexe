<?php
function smartexe_js_alter(&$javascript) {
    //We define the path of our new jquery core file

    $jquery_path = drupal_get_path('theme','smartexe') . '/js/jquery-2.0.3.js';

    //We duplicate the important information from the Drupal one
    $javascript[$jquery_path] = $javascript['misc/jquery.js'];
    //..and we update the information that we care about
    $javascript[$jquery_path]['version'] = '2.0.3';
    $javascript[$jquery_path]['data'] = $jquery_path;

    //Then we remove the Drupal core version
    unset($javascript['misc/jquery.js']);
}

function smartexe1_preprocess_page(&$vars) {
  // If the theme includes a template file named 'node--TYPE.tpl.php', or a
  // function named THEMENAME_node__TYPE(), it is used instead of the more
  // generic node.tpl.php file. Note that '__' instead of '--' is used here.
  // The theme system converts this to '--' when searching for a template that
  // implements this hook.
  if (isset ($vars['page'])) {
	$vars['theme_hook_suggestions'][] = 'page__'.$vars['node']->type;
  }
}