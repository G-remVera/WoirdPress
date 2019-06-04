<?php
/*
  Plugin Name: mes shortcodes
  Description: Plugin fournissant des shortcodes
  Author: Jerem
  Version: 1.0.0
*/

function shortcode_title(){
    return "<h2>Vous avez utiliser le shortcode du plugin Licence !</h2>";
}
add_shortcode('bienvenue', 'shortcode_title');