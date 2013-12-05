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

function smartexe1_preprocess_html(&$variables) {
    drupal_add_css('http://fonts.googleapis.com/css?family=Ubuntu:400,300,700', array('type' => 'external'));
}