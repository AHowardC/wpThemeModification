<?php
// include child theme stylesheet
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
function my_theme_enqueue_styles() {
   wp_enqueue_style('child-style', get_theme_file_uri('/style.css'));
}

?>

